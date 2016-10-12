# Ejemplo de proyecto de Laravel para Biomédica

En este post voy a escribir paso a paso la instalación de laravel en windows. Para facilitar el proceso hay que bajar el programa [babun](http://babun.github.io/), el cual es una terminal que emula instrucciones propias de sistemas UNIX. Asegurarse de ejecutar babun como administrador cada que se utilice.

# 1. Instalación de PHP
Bajar [PHP 5.6.26](http://windows.php.net/download#php-5.6) (dar click para ir a la página de descargas). Una vez descargado el .zip VC11 x86 Non Thread Safe (2016-Sep-16 07:19:29) crear una carpeta en la raíz C: llamada php (C:\php) y descomprimir todos los archivos en esa dirección.

Desde babun dirigirse a la carpeta php
`cd c:`
`cd php`

Una vez en la carpeta copiar el archivo php.ini-production en un nuevo archivo llamado php.ini
`cp php.ini-production php.ini`

Modificar el archivo php.ini
`nano php.ini`

Dentro de este archivo se deben realizar modificaciones para que al ejecutarse el programa se llamen a ciertas extensiones necesarias, por lo que debemos descomentar (quitar el ;) la siguiente línea y llamar a la dirección de la carpeta que contiene dichas extensiones

> Una manera sencilla para localizar la línea es mediante el comando buscar (Ctrl+w). Después de apretar la combinación de teclas escribir extension_dir

`extension_dir = "c:\php\ext"`

Activar las siguientes extensiones (las extensiones activas son aquellas que no se encuentran comentadas, es decir, que no tienen un punto y coma antes de la línea de código)
> Una manera sencilla para localizar las líneas es mediante el comando buscar (Ctrl+w). Después de apretar la combinación de teclas escribir extension=php_bx2.dll

```extension=php_bz2.dll
extension=php_curl.dll
extension=php_fileinfo.dll
extension=php_gd2.dll
extension=php_gettext.dll
extension=php_gmp.dll
extension=php_intl.dll
extension=php_imap.dll
;extension=php_interbase.dll
extension=php_ldap.dll
extension=php_mbstring.dll
extension=php_exif.dll      ; Must be after mbstring as it depends on it
extension=php_mysql.dll
extension=php_mysqli.dll
;extension=php_oci8_12c.dll  ; Use with Oracle Database 12c Instant
Client
extension=php_openssl.dll
;extension=php_pdo_firebird.dll
extension=php_pdo_mysql.dll
;extension=php_pdo_oci.dll
extension=php_pdo_odbc.dll
extension=php_pdo_pgsql.dll
extension=php_pdo_sqlite.dll
extension=php_pgsql.dll
extension=php_shmop.dll
```

Salir del archivo mediante el comando (Ctrl+x), después la letra 'y' seguido de un enter.

Finalmente se debe cambiar la variable de entorno PATH para que direccione a la carpeta php. Desde el panel de control>Sistema>Configuración avanzada del sistema hacemos click en el botón 'Variables de entorno...' y en la variable Path damos click en editar, añadiendo hasta el final `;C:\php` (sin olvidar el punto y coma) 

> Modificar las variables de usurio y del sistema

Para comprobar la instalación de PHP corremos el siguiente comando
`php -v`

el cual debe regresar la siguiente pantalla
```
PHP 5.6.26 (cli) (built: Sep 15 2016 18:12:01)
Copyright (c) 1997-2016 The PHP Group
Zend Engine v2.6.0, Copyright (c) 1998-2016 Zend Technologies
```

# Instalación de composer
Bajar [composer](https://getcomposer.org/Composer-Setup.exe) y ejecutarlo.

Seguir las instrucciones del Composer setup dando next a todo hasta el install. Una vez installado correr en babun el siguiente comando
`composer`

el cual debe regresar la siguiente línea
```   ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                    /_/
Composer version 1.2.1 2016-09-12 11:27:19
```

# Instalación de Laravel
Finalmente se instala el framework que utilizaremos para el desarrollo de nuestra aplicación web, Laravel. En babun corremos el siguiente comando
`composer global require "laravel/installer"`

Una vez finalizada la instalación corremos el siguiente comando para añadir laravel a las variables de entorno
`export PATH="$PATH:$HOME/.composer/vendor/bin"`

Ahora se creará una aplicación de Laravel mediante el comando `laravel new`, en babun dirigirse al directorio en el cual se desee guardar el proyecto.
> Se puede utilizar el comando `mkdir` para crear carpetas dentro de babun

Ya en la dirección ejecutar el siguiente comando para crear un proyecto de laravel llamado blog
`laravel new blog`

Al finalizar la instalación de todas las dependencias necesarias dirigirse a la nueva carpeta blog y dentro de la misma ejecutar la siguiente línea de código
`php artisan serve`

dicho comando ejecuta el servidor de manera local, de tal manera que se pueda desarrollar la aplicación y observar en un browser los avances y cambios realizados. Si todo está funcionando de manera correcta el comando anterior deberá arrojar la siguiente respuesta
`Laravel development server started on http://localhost:8000/`

Lo que significa que el servidor está corriendo en el puerto 8000 de manera local, si se abre un browser con la dirección "http://localhost:8000/" debemos obtener la siguiente pantalla, lo que indica que la instalación de Laravel fue correcta

![captura de pantalla 226](https://cloud.githubusercontent.com/assets/18424202/19210661/cd554886-8cee-11e6-808f-5056dd4a2495.png)

Cualquier duda o problema que surga durante la instalación posteenla por aquí para que trabajemos en conjunto para resolverla, en la semana subiré un pequeño ejercicio para que empecemos a familiarizarnos con Github, pero vayan leyendo acerca de qué es y que ventajas le podemos sacar a su uso

# 2. Instrucciones de inicio
Una vez que Laravel está correctamente instalado, hay algunos paso que se necesitan seguir para dejar funcionando el proyecto:

1. Clonar el proyecto con `git clone https://github.com/ghecho/dummy-biomedica-laravel.git`
2. Entrar al directorio `cd dummy-biomedica-laravel`
3. Instalar las dependencias `composer install`
4. Generar el archivo de configuración `cp .env.example .env`
	- Abrir el archivo `.env` y cambiar los valores de configuración de la base de datos
5. Regenerar el API_KEY de la aplicación
	- `php artisan cache:clear`
	- `php artisan key:generate`
6. Arrancar el servidor web local `php artisan serve` (para detener el servidor, presionar `CONTROL + c`)
