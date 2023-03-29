<?php
return [
    'general' => [
        'pageTitle' => 'Subscriptions',
        'pageSubtitle' => 'Here you may select plan suiting to your apiary needs, turn on additional features and check the recent payments',
    ],
    'nav' => [
        'plansLabel' => 'Plans and addons',
        'paymentsLabel' => 'Your payments'
    ],
    'plans' => [
        'planSettingsTitle' => 'Plans',
        'planSettingsSubtitle' => 'Here you may select plan suiting to your apiary needs. At any time you can upgrade. If you are not sure, which plan to choose, <a href="https://partnerpszczelarza.pl/aplikacja-hodowcy/pakiety-subskrybcji/" target="_blank">check comparison of available plans.</a>.',
        'addonsSettingsTitle' => 'Addons',
        'addonsSettingsSubtitle' => 'Here you may select addons created exactely for your business needs. Subscribe for longer period and get reduced price.',
        'extraFeaturesTitle' => 'Custom solutions',
        'extraFeaturesSubtitle' => 'Do you need functionalities created especially for your apiary? <a href="mailto:hello@partnerpszczelarza.pl?subject=I am interested in custom solutions">Contact with us</a>, we can provide it as well.',
        'freemium' => [
            'title' => 'Freemium',
            'desc' => 'Limited, free version of application. The data passed to the app gets stored during trial period and it will bre restored, once you subscribe for higher plan.',
            'alertHeadline' => 'Unlock full possibilities for your apiary!',
            'alertText' => "You are using the free, limited version of our app. Don't miss the chance to develop your apiary - use the full application version today!",
        ],
        'standard' => [
            'title' => 'Basic',
            'desc' => 'Suggested for newcomer breeders plan that allows: actively managing the breeding process, processing orders, and administrating the apiary.',
            'invoice_title' => 'Subscription in the Queen Bee Breeder App: Basic Plan',
        ],
        'pro' => [
            'title' => 'Professional',
            'desc' => 'Plan suggested for professional breeders that need support in refund orders. It offers, among others, season planning, expanded ordering functions and advanced analytics.',
            'invoice_title' => 'Subscription in the Queen Bee Breeder App: Professional Plan',
        ],
        'addon_enadawca' => [
            'title' => 'Integration with "E-nadawca" system',
            'desc' => 'Send and monitor shipments by Poczta Polska directly from app.',
            'invoice_title' => 'Subscription in the Queen Bee Breeder extension: E-nadawca',
        ],
        'addon_invoices' => [
            'title' => 'Invoicing',
            'desc' => 'Generate end send invoices directly from app',
            'invoice_title' => 'Subscription in the Queen Bee Breeder extension: Invoicing',
        ],
    ],
    'payments' => [
        'paymentsTitle' => 'Payments history',
        'paymentsSubtitle' => 'Here you can check payments history of your plans and addons and download the invoices.',
        'status' => 'status',
        'status_new' => 'to be paid',
        'status_paid' => 'paid',
        'status_failed' => 'failed',
        'status_past_due' => 'past due',
        'retryTooltip' => 'Transaction not finished. Retry payment.',
        'printTooltip' => 'Print the invoice',
        'noDataText' => 'You don`t have any payments, yet',
        'successMessage' => 'Transaction succeed! Your purchased functionalities are active. On the list below, you can check the payment details and get the invoice.',
        'errorMessage' => 'Transaction failed. On the list below, you can check the order details with option to re-attempt the payment.'
    ],
    'summary' => [
        'continue' => 'Pay with fast transfer',
        'total' => 'Total',
        'processingInfoTitle' => 'Registering payment',
        'processingInfoDesc' => 'Your order is processing ...',
        'processingInfoRedirectTitle' => 'Payment was registered successfully',
        'processingInfoRedirectDesc' => '<p>Thank you for choosing a subscription to our app!<br/><br/>Your support is invaluable! We will use the donated funds for further development of the application, thanks to which we can offer an even better quality of services and even more functions created for your apiary.</p>',
        'redirectBtnLabel' => 'Proceed to payment',
    ],
    'selectBtnLabel' => 'Select',
    'prolongBtnLabel' => 'Extend',
    'unselectBtnLabel' => 'Selected',
    'yourPlanBtnLabel' => 'Your current plan',
    'planRequiredMessage' => 'To activate addons, the basic or higher plan is required',
    'planPrelongedMessage' => 'Plan subscription was aligned to selected addon',
    'autoselectedPlanInfo' => 'Plan required for activating addon - added to cart automatically',
    'months' => [
        '1' => 'for 1 month',
        '3' => 'for 3 months',
        '6' => 'for 6 months',
        '12' => 'for 12 months',
    ],
    'expiresOn' => 'Expires on',
    'expiresIn' => 'Expires in',
    'endsAt' => 'Switching to Freemium:',
    'days' => 'days',
    'errorCreatingPayment' => 'Error creating payment. Contact with customer service.',
    'vat' => 'vat',
    'flags' => [
        'general' => [
            'title' => 'Unlock the full potential of our app!',
            'text' => 'In your current plan, you cannot use the full functionality of this section; it is available in the <strong>Basic plan</strong>.<br/> Start working without limits today, thanks to the full version of our application!'
        ],
        'pro' => [
            'title' => 'Join our professionals group!',
            'text' => 'W obecnym planie nie możesz wykorzystać kompletnej funkcjonalości tej sekcji, dostępna jest ona wyłącznie w <strong>planie profesjonalnym</strong>.<br/>Już dzisiaj zacznij działać bez ograniczeń dzięki pełnej wersji naszej aplikacji!In your current plan, you cannot use the full functionality of this section; it is only available in the <strong>professional plan</strong>.<br/>Start working without limits today, thanks to the full version of our application!'
        ],
        'orders' => [
            'title' => 'Did you know that with our orders module, you can speed up your customer service by 70%?',
            'text' => 'Save this time with us - use the full application version today!'
        ],
        'addon_invoices' => [
            'title' => "Don't waste time issuing invoices in another application!",
            'text' => "<p>Did you know that you can issue invoices directly from our application?<br/>You only need a few seconds to issue an invoice for your order and send it to the customer. Don't hesitate and check out our <strong>invoicing add-on!</strong></p>",
        ],
        'addon_enadawca' => [
            'title' => 'Connect your account with the e-nadawca and issue shipment letters directly from orders!',
            'text' => '<p>Did you know that you can instantly issue e-nadawca shipment letters <br> directly from our application?<br/>You are only a few seconds away from improving your work with orders!<br> Do not hesitate and check our <strong> e-sender add-on!</strong></p>',
        ],
        'teamMember' => [
            'title' => 'Your account does not have access to this apiary.',
            'text' => '<p>The purchased package does not support teamwork.<br/> please get in touch with the owner of this account to clarify the situation.</p>',
        ],
    ],
    'upgradeBtn' => [
        'text' => 'Upgrade',
        'days_left' => '{0} Last day!|{1} 1 day left!|[2,5] :days days left!|[6,*] :days left',
        'tooltip' => 'You are currently using a free trial period. All functionalities of the Professional plan are available for you to test during this time.<br/><br/>We encourage you to review the plans we offer in our application today.<br/><br/>After the trial period, you can select one from our subscription plans and adjust the functionalities to your actual needs.',
    ],
];
