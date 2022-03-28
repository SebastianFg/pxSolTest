# Inicio

## Para la instalación
Para la instalación de Laravel debemos situarnos en el directorio raíz del proyecto y escribir lo siguiente:

## Instalación Laravel

```bash
composer install
```
Para la instalación de Vue debemos situarnos en el directorio raíz del proyecto y escribir lo siguiente:


## Uso
Para comenzar a utilizarlo debemos configurar nuestro .env.

Dentro del directorio raíz, tenemos un archivo llamado ".env.example" el cual debemos renombrar a .env

Una vez hecho el cambio, debemos configurar la conexión a la db como en el siguiente ejemplo:

```php
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1 //si es local dejamos como está, si no, ingresamos el IP correspondiente
DB_PORT=5432 //el puerto 5432 es por defecto, si tenemos otro, debemos cambiarlo aquí
DB_DATABASE=NOMBRE DE TU DB //nombre de nuestra base de datos
DB_USERNAME=TU CREDENCIAL //usuario de postgres
DB_PASSWORD=TU CREDENCIAL //contraseña de postgres
```


## Ingreso al sistema
En la raíz del proyecto, en una consola, debemos escribir lo siguiente para poner en funcionamiento Laravel:
```bash
php artisan serve
```
En la raiz del proyecto, en una consola, debemos escribir lo siguiente para poner en funcionamiento Vue:
```bash
php artisan serve
```
Una vez que esto esté compilado, podemos ingresar a la siguiente URL y utilizar el sistema

Ruta local:http://127.0.0.1:8000/
