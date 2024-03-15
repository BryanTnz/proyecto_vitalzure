<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Role;
use App\Models\User;

use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // Crear un nuevo usuario
    public function store(Request $request)
    {
        // Validar el JSON
        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json(['message' => 'Error invalid JSON '], 400);
        }
       
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users|min:5|max:20',
            'first_name' => 'required|string|min:3|max:35|regex:/^(?=.*[a-zA-Z])[a-zA-Z0-9]+$/',
            'last_name' => 'required|string|min:3|max:35|regex:/^(?=.*[a-zA-Z])[a-zA-Z0-9]+$/',
            'password' => 'required|string|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
            'personal_phone' => 'required|numeric|digits:10',
            'address' => 'required|string|min:5|max:50',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
        ]);

        $messages = [
            'password' => 'The password required mixedcase, numbers, symbols and 8 digits',
        ];

        $validator->setCustomMessages($messages);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return response()->json(['errors' => $errors], 400);
        }

        // Validación de los datos de entrada
        $request -> validate([
            'first_name' => ['required', 'string', 'min:3', 'max:35'],
            'last_name' => ['required', 'string', 'min:3', 'max:35'],
            'username' => ['required', 'string', 'min:5', 'max:20', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
            'personal_phone' => ['required', 'numeric', 'digits:10'],
            //'home_phone' => ['required', 'numeric', 'digits:9'],
            'address' => ['required', 'string', 'min:5', 'max:50'],
        ]);

        // Obtiene el rol del usuario
        $role = Role::where('slug', 'estudiante')->first();
        // Crear una instancia del usuario
        $user = new User($request->all());
        
        // Se almacena el usuario en la BDD
        $role->users()->save($user);
        
        // Invoca el controlador padre para la respuesta json
        return $this->sendResponse(message: 'User register successfully');
    }
}
