<?php
return [
    'pageTitle' => 'Arbeid i bigården',
    'pageSubtitle' => 'Arbeidspanel hjelper deg med å administrere daglige aktiviteter for bigården din.',

    //Modal
    'queenOrderTitle' => 'Dronning uttak ',
    'emptyQueenOrderMsg' => 'Det er ingen tilgjengelige forespørsler.',
    'editQueenOrderTitle' => 'Rediger forespørsel om dronning uttak',
    'addQueenOrderTitle' => 'Legg til forespørsel om uttak med dronning',
    'deleteQueenOrderTitle' => 'Slett forespørsel om dronning uttak',
    'queenOrderNeededAtLabel' => 'Uttaks dato',
    'queenOrderCountLabel' => 'Dronning uttak teller',
    'queenOrderAddedSuccessMessage' => 'Queen uttak-bestilling opprettet',
    'queenOrderEditedSuccessMessage' => 'Endringene I dine dronning uttak-ordren ble lagret',
    'queenOrderDeletedSuccessMessage' => 'Queen uttaks-ordre ble slettet',
    'queenOrderDeleteWarningLabel' => 'Dronning uttak-forespørsel kan bare fjernes når det ikke er noen dronning tatt i den rekkefølgen (tall er lik 0). Denne handlingen vil fjerne den fullstendig fra systemet.',

    //Focus panel
    'queenTakeOutLabel' => 'Ta ut dronninger',
    'queenTakeOutShortLabel' => 'Ta ut',
    'queenAddLabel' => 'Legg til dronninger',
    'queenAddShortLabel' => 'Legg til',
    'noQueenLabel' => 'Ingen dronning',
    'noQueenBatchesLabel' => 'Ingen dronningpartier tilgjengelig',
    'queenBatchLabel' => 'Dronning partiet',
    'queenLineLabel' => 'Linje',
    'noHivesSubtitle' => 'Ingen tomme kuber',
    'noHivesInfoBox' => 'Alt bra her, ser ut til at alle bikubene dine har dronning inni. Hvis du trenger flere bikuber, legg dem til på plassering.',
    'noActiveHivesSubtitle' => 'Ingen kuber med dronninger',
    'noActiveHivesForOrderSubtitle' => 'Ingen bikuber med dronninger for valgt rekkefølge',
    'noActiveHivesInfoBox' => 'Det ser ut til at alle bikubene dine på det valgte stedet er tomme. Hvis du trenger flere bikuber, kan du legge dem til på plassering og deretter legge til dronninger.',
    'noActiveHivesForOrderInfoBox' => 'Det ser ut til at bikuber på valgt sted ikke har dronninger for valgt rekkefølge. Endre rekkefølge eller plassering for å se etter tilgjengelige dronninger.',
    'noQueenOrderLabel' => 'Ingen dronning bestillinger tilgjengelig',
    'noQueenOrderFilteringLabel' => 'Dronning-rekkefølge ikke valgt',

    'days' => '{0} dager|{1} dag|[2,*] dager',

    'filtersTitle' => 'Filtrer visningen',
    'sortingMethodLabel' => 'Kube sortering',
    'focusSortingMethods_queenNatural' => 'Etter dronningens alder',
    'focusSortingMethods_alphabetical' => 'Alfabetisk',

    'queens_mq' => 'Parrede dronninger',
    'queens_pb' => 'Potensielt avls dronninger',
    'queens_vq' => 'Jomfru dronninger',

    'analytics' => [
        'dailyQueenActions' => [
            'title' => 'Daily activities in apiary for: :day',
            'subtitle' => 'You can review daily activities of people working in the apiary.',
            'queens' => [
                'title' => 'Queens',
                'added' => 'added',
                'taken' => 'taken',
                'lost' => 'mark as lost',
                'left' => 'left in hive',
                'overall' => 'overall',
            ],
        ],
    ]
];
