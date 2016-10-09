# Ejemplo de proyecto de Laravel para Biomédica

# Instrucciones de inicio
Una vez que Laravel está correctamente instalado, hay algunos paso que se necesitan seguir para dejar funcionando el proyecto:

1. Clonar el proyecto con `git clone https://github.com/ghecho/dummy-biomedica-laravel.git`
2. Entrar al directorio `cd dummy-biomedica-laravel`
3. Instalar las dependencias `composer install`
4. Generar el archivo de configuración `cp .env.example .env`
5. Regenerar el API_KEY de la aplicación
	- `php artisan cache:clear`
	- `php artisan key:generate`
6. Arrancar el servidor web local `php artisan serve` (para detener el servidor, presionar `CONTROL + c`)
