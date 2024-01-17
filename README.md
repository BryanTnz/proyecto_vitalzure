<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Los usuarios con rol organizador podran: Listar, Mirar, Crear, Actualizar y Eliminar publicaciones<br>
El usuario con rol administrador podran: Listar, Mirar y Eliminar publicaciones<br>
Los usuarios con rol estudiante podran:  Listar y Mirar publicaciones<br>

## Listar
http://127.0.0.1:8000/api/v1/publication<br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/60353b38-8e8a-4b28-ac90-48ca636688a2)

## Store
http://127.0.0.1:8000/api/v1/publication/create<br>
{
      "Titulo": "Nueva publicacion",
      "Descripcion": "Descripcion prueba",
      "Beneficios": "Beneficios prueba",
      "Procedimiento": "Procedimiento prueba" 
    } <br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/ef92c4b7-ca3b-4b99-971d-5ebcf4e7753b)
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/d60fa13d-15ac-4fb5-9a28-1c611365230b)

## Update
http://127.0.0.1:8000/api/v1/publication/11/update<br>
{
      "Titulo": "Publicacion correcta",
      "Descripcion": "Descripcion prueba",
      "Beneficios": "Beneficios prueba",
      "Procedimiento": "Procedimiento prueba"  
    } <br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/a7652352-d7f2-4342-ad47-171eb4009795)
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/716d5b16-7394-49be-bd6e-4fb99528158d)

## Show
http://127.0.0.1:8000/api/v1/publication/11<br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/c6539d51-6418-4957-934d-d6ba364e1d8f)

## Destroy
http://127.0.0.1:8000/api/v1/publication/11/destroy<br>
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/097068e9-35ac-480c-8370-a162694eae8a)
![image](https://github.com/BryanTnz/proyecto_vitalzure/assets/66330281/41e7fdf9-4b77-4fda-9729-67ca7bd34a5c)


