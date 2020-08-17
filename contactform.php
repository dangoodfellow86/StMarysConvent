

<?php
    
    require 'vendor/autoload.php';
    use Mailgun\Mailgun;
    
    # Instantiate the client.
    $mgClient = Mailgun::create('key-3557d8cd64399fa5fe5b7ebf77c33c38', 'https://api.mailgun.net/v3/sandbox9da3b219d1ef41258a670b124f821fc4.mailgun.org');
    $domain = "sandbox9da3b219d1ef41258a670b124f821fc4.mailgun.org";
    $params = array(
    'from'    => 'Excited User <YOU@sandbox9da3b219d1ef41258a670b124f821fc4.mailgun.org	>',
    'to'      => 'daniel.goodfellow@sky.com',
    'subject' => 'Hello',
    'text'    => 'Testing some Mailgun awesomness!'
    );

# Make the call to the client.
    $mg->messages()->send($domain, $params);