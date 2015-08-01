Send emails in Laravel with Postmark
====================================
[Postmarkapp](http://postmarkapp.com) is an excellent ESP (Email Service Provider). This package makes it possible to send your emails with Postmark without modifing your code. 

Using Laravel 4? Visit the [`laravel-4` branch](https://github.com/Snowfire/Laravel-Postmark-Driver/tree/laravel-4)

Add this to your `composer.json`

	"snowfire/mail": "2.*"

Open app.php and **remove** this line:

	Illuminate\Mail\MailServiceProvider

Add 

	Snowfire\Mail\PostmarkServiceProvider

In your `.env` change your driver to postmark.

In your config file `services.php` add your postmark api key.

	'postmark' => [
		'api_key' => ''
	],

Run a composer update and you are ready to go! 
