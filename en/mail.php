<?php
return [
    'invitation' => [
        'header' => 'Invitation from :account_name',
        'description' => 'Your email address was invited to :account_name. Log in on the current Beekeper Partner account or create a new one.',
        'documentationLink' => '',
        'buttonLabel' => 'JOIN THE APIARY',
        'signature' => 'Regards,<br/>Beekeper Partner',
        'footer' => 'This automatic message was sent according to accepted privacy policy for :mail by Beekeeper Partner. In case of any problems, please get in touch with us at <a href="mailto:hello@partnerpszczelarza.pl">hello@partnerpszczelarza.pl</a>',
        'titlePrefix' => 'Invitation to apiary: ',
    ],
    'paymentConfirmation' => [
        'header' => 'Payment confirmation from Queen Bee Breeder App',
        'description' => 'We are sending a payment confirmation for a subscription connected with the apiary.: <strong>:apiary_name</strong>.<br/><br/>In the attachment, you will find an invoice for the ordered services.',
        'secondLine' => 'Thank you for choosing a subscription to our app!<br/><br/>Your support is invaluable! We will use the donated funds for further development of the application, thanks to which we can offer an even better quality of services and even more functions created for your apiary.',
        'signature' => 'Regards,<br/>Beekeper Partner',
        'footer' => 'This automatic message was sent according to accepted privacy policy for :mail by Beekeeper Partner. In case of any problems, please get in touch with us at <a href="mailto:hello@partnerpszczelarza.pl">hello@partnerpszczelarza.pl</a>',
        'noEmailLabel' => 'undefined',
    ],
    'sendingSuccess' => 'Message was sent.',
    'sendingError' => 'There was an error while sending message. Please try again.'
];
