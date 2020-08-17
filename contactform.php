

<?php
    
    require 'vendor/autoload.php';
    use Mailgun\Mailgun;
    
    # Instantiate the client.
    $mgClient = Mailgun::create('a232d415d2cdddf19942fcd42d11005b-203ef6d0-1e70ea81', 'https://api.mailgun.net/v3/sandbox9da3b219d1ef41258a670b124f821fc4.mailgun.org');
    $domain = "sandbox9da3b219d1ef41258a670b124f821fc4.mailgun.org";
    $params = array(
    'from'    => 'Excited User <YOU@sandbox9da3b219d1ef41258a670b124f821fc4.mailgun.org	>',
    'to'      => 'daniel.goodfellow@sky.com',
    'subject' => 'Hello',
    'text'    => 'Testing some Mailgun awesomness!'
    );

# Make the call to the client.
    $mg->messages()->send($domain, $params);