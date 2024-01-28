<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## CRUD FAVORITOS
Solo el usuario con rol estudiante puede acceder a estas rutas.

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
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/7d951f89-dbbf-428e-8442-62f99b52ab03)


## Listar calificaciones
El usuario con rol estudiante y organizador puede acceder a estas rutas. Para el usuario administrador no esta disponible<br>

Si el usuario es con rol estudiante se muestra las 3 primeras publicaciones con mejor puntuacion<br>
http://127.0.0.1:8000/api/v1/qualification<br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/9d37e2cd-b4e3-4af3-8915-60230ce248bb)<br>

Si el usuario es con rol organizador se muestra las calificaciones de sus publicaciones<br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/8875708c-08c1-4183-91bf-ea6812ce07cd)

## Ver calificacion
Si el usuario es con rol estudiante puede ver la calificacion de cualquier publicacion<br>
http://127.0.0.1:8000/api/v1/qualification/7 <br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/45a60e16-37f0-42c9-b102-db9fc7c7469a)<br>

Si el usuario es con rol organizador solo puede ver las calificaciones de sus publicacion<br>
http://127.0.0.1:8000/api/v1/qualification/8 <br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/c99295ec-52dc-4ba3-8b51-a19e29c6d36e)

