<?php
return [
    'nav' => [
        'apiaryLabel' => 'Pasieka',
        'teamLabel' => 'Zespół',
        'queenLinesLabel' => 'Linie matek',
        'seasonsLabel' => 'Sezony',
    ],
    'general' => [
        'pageTitle' => 'Ustawienia',
        'subTitle' => 'Tutaj możesz zarządzać ustawieniami swojej pasieki.',
    ],
    'apiary' => [
        'cardTitle' => 'Dane pasieki',
    ],
    'efficiency' => [
        'cardTitle' => 'Ustawienia wydajności',
    ],
    'queenLines' => [
        'cardTitle' => 'Linie hodowlane',
        'subTitle' => 'Na tej stronie możesz zarządzać liniami matek hodowanych w Twojej pasiece.
                            <br/>Jeżeli, któraś z linii jest niepotrzebna, możesz ją usunąć lub deaktywować, dzięki czemu nie będzie widoczna.',
    ],
    'seasons' => [
        'cardTitle' => 'Sezony',
        'cardTitleSingular' => 'Sezon',
        'subTitle' => 'Sezony pozwalają na podzielenie zamówień oraz działań w pasiece na zdefiniowane okresy czasu. Możesz dodać kolejne sezony zarówno w przeszłości jak i przyszłości a my postaramy się dopasować części aplikacji do ustawionych sezonów.',
        'nameLabel' => 'Nazwa',
        'startDateLabel' => 'Data startu',
        'endDateLabel' => 'Data końca',
        '404Subtitle' => 'Brak zdefiniowanych sezonów. Dodaj pierwszy, żeby rozpocząć.',
        'addSuccessMessage' => 'Pomyślnie dodano sezon.',
        'updateSuccessMessage' => 'Pomyślnie zapisano zmiany w sezonie.',
        'deleteSuccessMessage' => 'Pomyślnie usunięto sezon :name.',
        'editModalTitle' => 'Edytuj sezon :name',
        'addModalTitle' => 'Dodaj sezon',
    ],
    'queenLinesNameSingular' => 'Linia matek', //Rekken av mødre
    'queenLinesNameLabel' => 'Skrócona nazwa',
    'queenLinesFullNameLabel' => 'Pełna nazwa',
    'queenLinesNameLabelShort' => 'Linia',
    'allQueenLinesLabel' => 'Wszystkie linie',
    'beeSubspeciesNameLabel' => 'Rasa',
    'queenLineActiveNameLabel' => 'Aktywna',
    'clubActiveNameLabel' => 'Aktywne',
    'unionActiveNameLabel' => 'Aktywny',
    'queenLineNotActiveNameLabel' => 'Nieaktywna',
    'clubNotActiveNameLabel' => 'Nieaktywna',
    'a_m_mellifera' => 'środkowoeuropejska',
    'a_m_carnica' => 'kraińska',
    'a_m_caucasica' => 'kaukaska',
    'a_m_ligustica' => 'włoska',
    'queen_lines' => [
        'a_m_mellifera' => 'Środkowoeuropejska',
        'a_m_carnica' => 'Krainka',
        'a_m_caucasica' => 'Kaukaska',
        'a_m_ligustica' => 'Włoska',
    ],
    'crossbreed' => 'krzyżówka',
    'hybrid' => 'hybryda',
    'deleteQueenLineSuccessMessage' => 'Pomyślnie usunięto linię hodowlaną :name',
    'queenLineUpdateSuccessMessage' => 'Pomyślnie uaktualniono linię hodowlaną :name',
    'queenLineAddedSuccessMessage' => 'Pomyślnie dodano linię hodowlaną :name',
    'addNewQueenLineBtnLabel' => 'Dodaj nową linię',
    'deleteQueenLineTooltip' => 'Usuń linię hodowlaną',
    'deleteQueenLineInfoTooltip' => 'W systemie istnieją matki z tej linii lub jest to jedyna linia, dlatego nie możemy jej usunąć. Możesz za to ją zdeaktywować, dzięki temu nie będzie widoczna w aplikacji.',
    'apiarySettingsPageTitle' => 'Ustawienia pasieki',
    'apiarySettingsSubtitle' => 'Tutaj możesz zarządzać swoją pasieką',
    'apiaryCardTitle' => 'Ustawiena główne',
    'globalEfficiencyLabel' => 'Ogólna wydajność',
    'globalEfficiencyHint' => 'Ogólna wydajność jest używana w przypadku, kiedy wydajność lokalizacji nie jest jeszcze dostępna.',
    'seriesEfficiencyLabel' => 'Wydajność serii',
    'seriesIsolationEfficiencyLabel' => 'Wydajność etapu izolacji',
    'seriesBornEfficiencyLabel' => 'Wydajność etapu wygryzania',
    'seriesEfficiencyHint' => 'Wydajność serii jest używana do początkowego obliczania wydajności serii, kiedy nie są dostępnę dane historyczne.',
    'updatedSuccess' => 'Zapisaliśmy ustawienia',

    'invoice' => [
        'cardTitle' => 'Dane do faktury',
        'inputAddressStreetLabel' => 'Ulica',
        'inputAddressBuildingNumberLabel' => 'Numer budynku',
        'inputAddressApartmentNumberLabel' => 'Numer lokalu',
        'inputAddressPostCodeLabel' => 'Kod pocztowy',
        'inputAddressCityLabel' => 'Miasto',
        'companyNameLabel' => 'Nazwa firmy',
        'inputVatNumberLabel' => 'Numer NIP',
        'inputVatNumberShortLabel' => 'NIP',
        'noInvoiceDataWarning' => 'Niekompletne dane do fakturowania',
        'nrbLabel' => 'Numer konta bankowego',
    ],
    'contact' => [
        'cardTitle' => 'Dane kontaktowe',
        'inputContactEmailLabel' => 'Email',
        'inputContactPhoneLabel' => 'Nr telefonu',
    ],
    'apiaryLogo' => [
        'cardTitle' => 'Logo pasieki',
        'cardSubTitle' => 'Tutaj możesz dodać logo swojej pasieki. Wykorzystamy je między innymi w trakcje generowania plików pdf.',
        'uploadForm' => [
            'cardTitle' => 'Prześlij logo',
            'cardSubTitle' => 'Wymagania co do pliku: rozmiar maksymalnie 500kB, format: png, jpg, jpeg.',
            'inputFile' => 'Wybierz plik',
        ],
    ]
];
