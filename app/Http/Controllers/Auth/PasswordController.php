<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\Password as PasswordValidator;
use Illuminate\Auth\Events\PasswordReset;



class PasswordController extends Controller
{
    // Función para el manejo del reseteo de contraseña
    public function resendLink(Request $request)
    {
        // Validar el JSON
        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json(['message' => 'Error invalid JSON '], 400);
        }
       
        // Validar los campos
        if($request['email'] == ""){
            return $this->sendResponse(message: 'The "email" field must not be empty', code: 400);
        } elseif (!filter_var($request['email'], FILTER_VALIDATE_EMAIL)){
            return $this->sendResponse(message: 'The email is not valid', code: 400);
        } 


        // Validación de los datos de entrada
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // enviar el link de restablecimiento de contraseña al mail
        // https://laravel.com/docs/9.x/passwords#requesting-the-password-reset-link
        $status = Password::sendResetLink(
            $request->only('email')
        );

        // Se invoca a la función padre
        return $status === Password::RESET_LINK_SENT
            ? $this->sendResponse(__($status))
            : $this->sendResponse(
                message: 'Link reset failure.',
                errors: ['email' =>__($status)],
                code: 422
            );
    }

    // Función para enviar el redirect del formulario para restablecer la contraseña
    public function redirectReset(Request $request)
    {
        $frontend_url = env('APP_FRONTEND_URL');
        $token = $request->route('token');
        $email = $request->email;
        $url = "$frontend_url/?token=$token&email=$email";
        return $this->sendResponse(message: 'Successful redirection', result: ['url' => $url]);
    }

    // Función para la actualización del password
    public function restore(Request $request)
    {
        // Validar el JSON
        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json(['message' => 'Error invalid JSON '], 400);
        }
       
        // Validar los campos
        if($request['token'] == ""){
            return $this->sendResponse(message: 'The "token" field must not be empty', code: 400);
        } elseif ($request['email'] == ""){
            return $this->sendResponse(message: 'The "email" field must not be empty', code: 400);
        } elseif (!filter_var($request['email'], FILTER_VALIDATE_EMAIL)){
            return $this->sendResponse(message: 'The email is not valid', code: 400);
        } elseif ($request['password'] == ""){
            return $this->sendResponse(message: 'The "password" field must not be empty', code: 400);
        } elseif ($request['password_confirmation'] == ""){
            return $this->sendResponse(message: 'The "password_confirmation" field must not be empty', code: 400);
        } elseif ($request['password_confirmation'] != $request['password']){
            return $this->sendResponse(message: 'The password must be the same', code: 400);
        } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $request['password'])){
            return $this->sendResponse(message: 'The password required mixedcase, numbers, symbols and 8 digits', code: 400);
        }

        // Validación de los datos de entrada
        $validated = $request -> validate([
            'token' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            // https://laravel.com/docs/9.x/validation#rule-confirmed
            'password' => [
                'required', 'string', 'confirmed',
                PasswordValidator::defaults()->mixedCase()->numbers()->symbols(),
            ],
        ]);

        // Función para cambiar el password
        $status = Password::reset($validated, function ($user , $password)
        {
            // Establece el nuevo password
            $user->password = Hash::make($password);
            // Grabar los cambios
            $user->save();
            // https://laravel.com/docs/9.x/passwords#password-reset-handling-the-form-submission
            event(new PasswordReset($user)); // Actualizar la contraseña en tiempo real
        });

        // Se invoca a la función padre
        return $status == Password::PASSWORD_RESET
            ? $this->sendResponse(__($status))
            : $this->sendResponse(
                message: 'Reset password failure.',
                errors: ['email' =>__($status)],
                code: 422
            );
    }

    
    // Función para actualizar el password del suuario
    public function update(Request $request)
    {
        if ($request['password'] == ""){
            return $this->sendResponse(message: 'The "password" field must not be empty', code: 400);
        } elseif ($request['password_confirmation'] == ""){
            return $this->sendResponse(message: 'The "password_confirmation" field must not be empty', code: 400);
        } elseif ($request['password_confirmation'] != $request['password']){
            return $this->sendResponse(message: 'The password must be the same', code: 400);
        } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $request['password'])){
            return $this->sendResponse(message: 'The password required mixedcase, numbers, symbols and 8 digits', code: 400);
        }

        // Validación de los datos de entrada
        $validated = $request -> validate([
        'password' => ['required', 'string', 'confirmed',
                        PasswordValidator::defaults()->mixedCase()->numbers()->symbols()]]);
        $user = $request->user();
        $user->password = Hash::make($validated['password']);
        $user->save();
        return $this->sendResponse('Password updated successfully');
    }
    
    
    
}
