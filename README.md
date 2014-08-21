Send emails in Laravel with Postmark
====================================
[Postmarkapp](http://postmarkapp.com) is an excellent ESP (Email Service Provider). This package makes it possible to send your emails with Postmark without modifing your code.

Add this to your `composer.json`

	"snowfire/mail": "dev-master"

Open app.php and **remove** this line:

	Illuminate\Mail\MailServiceProvider

Add 

	Snowfire\Mail\MailServiceProvider

In your config file `mail.php` change your driver to postmark.

	'driver' => 'postmark'

In your config file `services.php` add your postmark api key.

	'postmark' => [
		'api_key' => ''
	],


Run a composer update and you are ready to go! 