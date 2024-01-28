<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## CRUD FAVORITOS
Solo el usario con rol estudiante puede acceder a estas rutas.

## Listar favoritos
http://127.0.0.1:8000/api/v1/favorite
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/c7f71f07-785f-40f8-8667-0cbb4b81a2c5)

## Añadir favoritos
http://127.0.0.1:8000/api/v1/favorite/create<br>
{
      "publicacion_id": "1",
      "calificacion": 3,
      "feedback": "Comentario publicacion"
    } <br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/4e1610b2-7b7b-4664-9bd7-b7a4d0ed56cf) <br>
Lista de favoritos añadido <br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/be738922-e9f4-4326-92e4-afb24681abf5)

## Actualizar favorito
http://127.0.0.1:8000/api/v1/favorite/13/update <br>
{
      "calificacion": 1,
      "feedback": "feedback actualizado"   
    } <br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/9ddb54aa-c5cc-45eb-b8a3-dc2a3a345919) <br>
Lista de favoritos actualizado <br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/b8560c81-57d0-4669-9027-aefa6ffa8eed)

## Ver favorito
http://127.0.0.1:8000/api/v1/favorite/13 <br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/d2cc30a1-48a4-4a01-ab44-e5e427958104)

## Eliminar favorito
http://127.0.0.1:8000/api/v1/favorite/3/destroy <br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/ec2d834c-8617-4ddb-98bf-63e4a0ed3db1)


## CRUD FAVORITOS
Solo el usario con rol estudiante puede acceder a estas rutas.
