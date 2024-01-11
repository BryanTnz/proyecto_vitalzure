<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Authentication

## Login
http://127.0.0.1:8000/api/v1/login<br>
{ "email":"neoma.corwin@example.com", "password":"secret" }<br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/faa0b32b-7435-4829-a8ef-5522bf769f88)

## Logout
http://127.0.0.1:8000/api/v1/logout<br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/4949a00e-63ed-423d-b1ff-c1cfdda19129)

## Forgot Password
http://127.0.0.1:8000/api/v1/forgot-password<br>
{ "email":"neoma.corwin@example.com"}<br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/793c8138-4671-4957-9439-676b6d350ded)

## Resend link
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/f653a27c-8464-4981-a45e-2af0b8989dcb)

## Reset Password
http://127.0.0.1:8000/api/v1/reset-password<br>
{ 
  "token":"3b6bfa3e7b1d231d2b5d38a01ec0aa6f08f622601c76c8e80150de08e2e4186a",
  "email":"neoma.corwin@example.com",
  "password":"Abcd123*",
  "password_confirmation":"Abcd123*"
  
}<br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/32eea4cf-390a-4cc3-a46d-28f1ef744414)
<br>Inicio de sesion con la nueva contraseña
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/a3b69f94-3d79-4a7d-9aa2-9a0b813c1b18)

## Update Password
http://127.0.0.1:8000/api/v1/update-password<br>
{ 
  "password":"Secret123*",
   "password_confirmation":"Secret123*"
}<br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/601c65ae-7caa-4111-86c3-21512f3accd5)
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/50365c6e-a5d5-4e6b-bd96-29d2397d87fd)

## Registro de usuario
http://127.0.0.1:8000/api/v1/register<br>
{ 
      "email": "prueba@gmail.org",
      "password": "secret",
      "first_name": "prueba",
      "last_name": "test",
      "personal_phone": "0967771180",
      "address": "quito sur",
      "username": "prueba"
    } <br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/eed3ac13-69c7-4b34-8547-3c653759f2ae)
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/18bd8dfb-1bc9-4747-8f29-3ca8dcbad4be)


