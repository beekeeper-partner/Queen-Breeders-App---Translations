<?php
return [
    'nav' => [
        'apiaryLabel' => 'Pasieka',
        'apiaryLogo' => 'Logo',
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
        'cardSubTitle' => "Tutaj znajdziesz dane podane przy rejestracji, możesz je w dowolnej chwili zmienić. W zależności od wybranego kraju możemy lepiej dopasować nasze funkcjonalności do Twojej pasieki. Pamiętaj, że możesz użyć również skróconej nazwy Twojej pasieki, pełna nazwa może być ustawiona w sekcji Fakturowania.",
    ],
    'efficiency' => [
        'title' => 'Wydajności',
        'cardTitle' => 'Ustawienia wydajności',
        'cardSubTitle' => 'W naszych prognozach wykorzystujemy wartość wydajności dla poszczególnych sekcji aplikacji. Dopóki aplikacja nie posiada wystarczającej ilości danych historycznych - używane są domyśle wartości z tej strony.',
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
        'startingNumberHint' => 'Przykład: :value',
        'queenNumbering' => [
            'title' => 'Numeracja matek pszczelich w sezonie',
            'titleShort' => 'Numeracja matek',
            'subtitle' => 'Aplikacja automatycznie przydziela numery hodowlane matkom urodzonym w Twojej pasiece. Domyślnie pierwsza matka w danym roku dostanie numer 1/ROK (przykładowo: 1/2023). Poniżej możesz spersonalizować numerację w danym sezonie.',
        ],
        'queen_series_starting_number' => 'Numer początkowy',
        'queen_series_prefix' => 'Prefiks numeracji',
        'daysOff' => [
            'title' => 'Dni wolne',
            'subtitle' => 'Dodaj dni wolne, w których wysyłka produktów jest niemożliwa. Podświetlimy te dni w kalendarzu zamówień',
            'downloadPublicHolidays' => 'Pobierz święta i dni wolne w :year',
            'table' => [
                'date' => 'Data',
                'name' => 'Nazwa dnia',
                'saveChangesBtn' => 'Zapisz zmiany',
                'addNewBtn' => 'Dodaj do listy',
            ],
        ],
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
        'a_m_mellifera' => 'AMM',
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
        'title' => 'Fakturowanie',
        'cardTitle' => 'Dane do faktury',
        'cardSubTitle' => 'Możemy potrzebować danych Twojej firmy dla faktur wystawionych za zakupy wykonane w aplikacji. Dodatkowo dane używane są w dokumentach generowanych dla Twoich klientów.',
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
        'is_exempt_from_tax' => 'Pasieka zwolniona podmiotowo z VAT',
        'tax_exempt_title' => 'Zwolnienie podmiotowe z VAT',
        'exempt_reason' => 'Podstawa zwolnienia',
        'exempt_reason_on_invoice' => 'Podstawa zwolnienia podana na fakturze',
        'exempt_reason_on_invoice_info' => 'Pozostaw puste jeżeli nie chcesz umieszczać podstawy prawnej na fakturze.',
        'exemptReasonsType' => [
            'company_type' => 'ze względu na rodzaj prowadzonej działalności (art. 43 ust 1 ustawy o VAT)',
            'ordinance' => 'zwolnienie na mocy rozporządzenia Ministra Finansów (art. 82 ust 3 ustawy o VAT)',
            'turnover_limit' => 'zwolnienie ze względu na nieprzekroczenie 200 000 PLN obrotu (art. 113 ust 1 i 9 ustawy o VAT)',
            'other_legal' => 'inna podstawa prawna',
        ],
        'exemptReasonOnInvoice' => [
            'company_type' => 'zwolnienie ze względu na zakres wykonywanych czynności (art. 43 ust. 1)',
            'ordinance' => 'zwolnienie ze względu na szczegółowe przepisy (art. 82 ust. 3)',
            'turnover_limit' => 'zwolnienie ze względu na nieprzekroczenie limitu wartości sprzedaży w ubiegłym roku podatkowym (art. 113 ust. 1 i 9)',
            'other_legal' => '',
        ],
        'descriptionType' => [
            'title' => 'Automatyczny opis produktu w fakturach',
            'tooltip' => 'Domyślnie dodajemy do opisu produktu w fakturach linię hodowlaną matek pszczelich.',
            'queen_line' => 'Linia matek pszczelich określona w produkcie',
            'chosen_queen_line' => 'Wybrana linia matek',
            'none' => 'Wyłączone',
        ],
        'defaults' => [
            'title' => 'Domyślne wartości',
            'dueDate' => [
                'label' => 'Pole: Data płatności',
                'tooltip' => 'Domyślnie data płatności jest ustawiona na dzień wystawienia faktury.',
                '7' => '+7 dni',
                '14' => '+14 dni',
                '31' => '+1 miesiąc',
            ],
            'paid' => [
                'label' => 'Pole: Zapłacono',
                'tooltip' => 'Domyślnie ustawiamy "Nie zapłacono" dla każdej nowej faktury. To ustawienie może być nadpisane przez informacje pochodzące z zamówienia.',
                'not_paid' => 'Nie zapłacono',
                'paid' => 'Zapłacono',
            ],
            'paymentType' => [
                'label' => 'Pole: Typ płatności',
                'tooltip' => 'Domyślnie typ płatności jest pusty. Pole typu płatności może zostać nadpisane przez dodanie wysyłki do faktury. Te ustawienia możesz zmienić w Ustawienia > Zamówienia > Metody wysyłki.',
            ],
        ],
    ],
    'contact' => [
        'cardTitle' => 'Dane kontaktowe',
        'cardSubTitle' => 'Dane nieobowiązkowe, ale polecamy ich wypełnienie. Głównie korzystamy z nich w dokumentach powiązanych z Twoimi klientami.',
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
    ],
    'unions' => [
        'addFilesDisabledInfo' => 'Dodawanie plików jest możliwe tylko dla istniejącego związku. Dodaj związek i przejdź do jego edycji aby dodać pliki.',
        'unionFiles' => 'Dołączone pliki związku (:value)',
        'showInactive' => 'Pokaż nieaktywne',
        'ordersCount' => 'Liczba zamówień',
    ],
];
