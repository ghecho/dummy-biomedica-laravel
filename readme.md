# Ejemplo de proyecto de Laravel para Biomédica

# Downloading from GIT
Once you download the git repository you must download the dependencies with:

	$ composer install	
Then you need to configure the proyect for your machine with the .env file and add a random string to the `APP_KEY` with the following command:

	$ php artisan cache:clear
	$ php artisan key:generate

Check that the same user that can run nginx own this folder as well as the php-fpm process(it can be root or your current user) and now we can test by going in our browser to the public folder, and if everything is okay we should se the welcome page, if not check your server log.
