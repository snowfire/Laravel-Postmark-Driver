<?php

namespace Snowfire\Mail;

use Openbuildings\Postmark\Swift_PostmarkTransport;
use Swift_Mailer;

class PostmarkServiceProvider extends \Illuminate\Mail\MailServiceProvider
{
    /**
     * Register the Swift Mailer instance.
     *
     * @param array $config
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public function registerSwiftMailer()
    {
        if ($this->app['config']->get('mail.driver') == 'postmark') {
            $this->registerPostmarkMailer();
        } else {
            parent::registerSwiftMailer();
        }
    }

    /**
     * Register the Postmark Swift Mailer.
     *
     * @return void
     */
    protected function registerPostmarkMailer()
    {
        $postmark = $this->app['config']->get('services.postmark', []);

        $this->app->singleton('swift.mailer', function ($app) use ($postmark) {
            return new Swift_Mailer(
                new Swift_PostmarkTransport($postmark['api_key'])
            );
        });
    }
}
