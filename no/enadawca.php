<?php
return [
    'navigation' => [
        'title' => 'eSender',
    ],
    'settings' => [
        'pageTitle' => 'eSender',
        'subTitle' => 'Innstillinger for integrasjon med tjenesten Frakt av posten',
        'successfullySavedMsg' => 'Innstillingene ble lagret',
        'account' => [
            'cardTitle' => 'Kontopåloggingsdata',
            'navTitle' => 'Innloggingsdata',
            'cardSubTitle' => 'Vennligst skriv inn Posten-påloggingsinformasjonen din for å fortsette med oppsettet',
            'loginLabel' => 'Logg Inn',
            'passwordLabel' => 'Ppassord',
            'passwordHint' => 'Passord er sikret i vår applikasjon. Hvis du vil endre det, skriv inn nytt passord og lagre innstillingene.',
            'successfullyConnected' => 'Vi har koblet til kontoen din. Fortsett med andre innstillinger.',
            'notConnected' => 'Det oppsto et problem med tilkoblingen til Posten-kontoen din. Vennligst skriv inn påloggingsdataene og lagre innstillingene.',
        ],
        'shipment' => [
            'cardTitle' => 'Forsendelsesinnstillinger',
            'cardSubTitle' => 'Velg standardinnstillingene for alle forsendelser for å fullføre oppsettet.',
            'postOfficeLabel' => 'Standard postkontor',
            'postOfficeHint' => 'Velg postkontor som vil være standard for forsendelsene dine.',
            'defaultInsuranceAmount' => 'Standardverdi for forsendelsesforsikring.',
        ],
    ],
    'order' => [
        'generateParcelBtnLabel' => 'Generer en forsendelse i eSender',
        'generateParcelFromTemplateBtnLabel' => 'Wygeneruj przesyłkę eNadawcy z szablonu',
        'generateParcelWithoutTemplateBtnLabel' => 'Bez szablonu',
        'chargedAmount' => 'Kwota pobrania',
        'editParcelBtn' => 'Edytuj przesyłkę',
        'downloadParcelStickerBtn' => 'Pobierz potwierdzenie',
        'downloadFilePrefix' => 'parcel',
        'successSaveMessage' => 'Pomyślnie zapisano zmiany w przesyłce',
        'errorOccurredMessage' => 'Pojawił się problem przy komunikacji z e-nadawcą. Wygeneruj przesyłkę ponownie.',
        'successDeleteMessage' => 'Pomyślnie usunięto przesyłkę',
        'infoAboutGeneratedParcel' => 'Dokumenty wysyłki zostały automatycznie wygenerowane dla e-nadawcy. Jeżeli chcesz zmienić dane wysyłki - użyj opcji edycji poniżej.',
        'successfullyGeneratedMsg' => 'Pomyślnie wygenerowano przesyłkę e-nadawcy.',
        'desyncMessage' => 'Dane wygenerowanej przesyłki różnią się od danych w zamówieniu: :data.',
        'desyncDateFromOrder' => 'daty wysyłki są niezgodne',
        'dateFromPastWarning' => 'wybrana data jest z przeszłości',
        'dateFromFutureWarning' => 'wybrana data jest za daleko w przyszłości (maksymalnie 21 dni)',
        'desyncClientFromOrder' => 'adresat różni się od odbiorcy przesyłki',
        'desyncChargedAmountFromOrder' => 'różne kwoty pobrania',
        'regenerateDesyncParcel' => 'Aktualizuj przesyłkę',
        'missingMessage' => 'Nie można wygenerować przesyłki w e-nadawcy: :data.',
        'missingClientData' => 'dane adresata są niekompletne',
        'missingClient' => 'adresat niewybrany',
    ],
    'editParcelModal' => [
        'cardTitle' => 'Edit parcel :parcelNumber',
    ],
    'templates' => [
        'templateName' => 'Szablon',
        'defaultPackageDescription' => 'Matki pszczele',
        'cardTitle' => 'Szablony wysyłek',
        'cardSubTitle' => 'Szablony wysyłek pozwalają na stworzenie wzorów wysyłek, które później można użyć w zamówieniach do szybkiego przygotowania wysyłki. W szablonach możesz zawrzeć domyślne wartości dla przesyłek Pocztex.',
        'noTemplatesText' => 'Brak zdefiniowanych szablonów, użyj przycisku poniżej aby stworzyć pierwszy.',
        'addBtnLabel' => 'Dodaj szablon wysyłki',
        'successfullyDeletedMsg' => 'Pomyślnie usunięto szablon wysyłek',
        'chargedLabel' => 'Pobranie',
        'notChargedLabel' => 'Bez pobrania',
        'modal' => [
            'cardTitle' => 'Edytuj szablon wysyłek: :templateName',
        ],
        'form' => [
            'nameLabel' => 'Twoja nazwa szablonu',
            'formatLabel' => 'Format przesyłki',
            'format_S' => '<strong>S</strong> - Maksymalne wymiary 9 cm (W) x 40 cm (S) x 65 cm (D), maksymalna masa 20 kg',
            'format_M' => '<strong>M</strong> - Maksymalne wymiary 20 cm (W) x 40 cm (S) x 65 cm (D), maksymalna masa 20 kg',
            'format_L' => '<strong>L</strong> - Maksymalne wymiary 42 cm (W) x 40 cm (S) x 65 cm (D), maksymalna masa 20 kg',
            'format_XL' => '<strong>XL</strong> - Maksymalne wymiary 60 cm (W) x 60 cm (S) x 70 cm (D), maksymalna masa 20 kg',
            'format_2XL' => '<strong>2XL</strong> - Maksymalna suma wymiarów (W+S+D)<=250 cm, max D=120 cm, maksymalna masa 50 kg (dopłata powyżej 30 kg)',
            'masaLabel' => 'Masa przesyłki',
            'masa_5' => 'do 5 kg',
            'masa_12' => 'do 12 kg',
            'masa_20' => 'do 20 kg',
            'masa_30' => 'do 30 kg',
            'masa_50' => 'do 50 kg',
            'pobranieLabel' => 'Przesyłka pobraniowa',
            'sposobPobraniaLabel' => 'Sposób pobrania',
            'pobranie_PRZEKAZ' => 'Przekaz pocztowy',
            'pobranie_RACHUNEK_BANKOWY' => 'Na rachunek bankowy',
            'tytulemLabel' => 'Tytuł pobrania',
            'tytulem_custom' => 'Wpisywany ręcznie',
            'tytulem_automatic_client_name' => 'Automatyczny: Imię i nazwisko klienta',
            'tytulem_automatic_order_number' => 'Automatyczny: Numer zamówienia',
            'ubezpieczenieLabel' => 'Ubezpieczenie przesyłki',
            'ubezp_kwotaLabel' => 'Kwota ubezpieczenia',
            'zawartosc_specjalnaLabel' => 'Zawartość przesyłki',
            'zawartosc_specjalna_OWADY' => 'Owady',
            'zawartosc_specjalna_PLYNY_LUB_GAZY' => 'Płyny lub gazy',
            'zawartosc_specjalna_PRZEDMIOTY_LATWO_TLUKACE_SIE_I_SZKLO' => 'Przedmioty łatwo tłukące się i szkło',
            'zawartosc_specjalna_RZECZY_LAMLIWE_I_KRUCHE' => 'Rzeczy łamliwe i kruche',
            'zawartosc_specjalna_ZYWE_PTAKI' => 'Żywe ptaki',
            'zawartosc_specjalna_ZYWE_ROSLINY' => 'Żywe rośliny',
            'zawartosc_specjalna_INNE' => 'Inne',
            'zawartosc_innaLabel' => 'Szczegóły zawartości',
            'ostroznieLabel' => 'Ostrożnie',
            'ostroznieHint' => 'Typ przesyłki wymaga w Poczcie Polskiej zaznaczenia tej opcji.',
            'is_doreczenie_we_wskazanym_dniuLabel' => 'Doręczenie we wskazanym dniu',
            'doreczenie_we_wskazanym_dniuLabel' => 'Wskazany dzień',
            'is_odbior_w_soboteLabel' => 'Odbiór przesylki w sobotę',
            'opisLabel' => 'Dodatkowy opis przesyłki',
            'opisHint' => 'Wpisz maksymalnie 40 znaków',
        ],
    ]
];