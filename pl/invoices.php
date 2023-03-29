<?php
return [
    'createBtnLabel' => "Dodaj fakturę do wysyłki",
    'page' => [
        'title' => 'Faktury',
        'subTitle' => 'Tutaj możesz przejrzeć faktury dodane w naszej aplikacji. Jeżeli chcesz dodać nową fakturę, możesz skorzystać z przycisku w dolnym, prawym rogu ekranu.',
        'addNewInvoiceBtn' => 'Dodaj fakturę',
        'featureNotAvailable' => [
            'title' => 'Nie trać czasu wystawiając faktury w innej aplikacji!',
            'text' => '<p>Czy wiesz, że możesz wystawiać faktury bezpośrednio z naszej aplikacji?<br/>Tylko kilka sekund potrzebujesz, aby wystawić fakturę dla swojego zamówienia i przekazać ją Twojemu klientowi. Nie zwlekaj i sprawdź nasz <strong>dodatek do wystawiania faktur!</strong></p>',
        ],
    ],
    'order' => [
        'title' => 'Faktura dodana do wysyłki',
    ],
    'table' => [
        'cannotEditTooltip' => 'Edycja jest niemożliwa ponieważ aktualny miesiąc jest różny od miesiąca wystawienia faktury.',
        'expand' => [
            'title' => 'Faktura VAT',
            'index' => 'Lp.',
        ],
        'noDataText' => 'Jeszcze nie mamy żadnych Twoich faktur. Dodaj pierwszą aby rozpocząć.',
    ],
    'modal' => [
        'title_add' => 'Wystaw nową fakturę',
        'title_edit' => 'Edytuj fakturę',
        'saveSuccessMessage' => 'Faktura została pomyślnie dodana do zamówienia.',
        'saveBtnForEditedItemBlocked' => 'Dodaj tytuł, ilość, jednostki oraz cenę za jednostkę, żeby zapisać.',
        'deleteBtnInfo' => 'W naszej aplikacji istnieje kolejna, nowsza faktura, przez co ta nie może być usunięta.',
    ],
    'form' => [
        'number' => 'Numer faktury',
        'number_hint' => 'Numer faktury generujemy automatycznie na podstawie daty i poprzednio wystawionych faktur w naszym systemie. Jeżeli chcesz pominąć pewien numer przejdź do sekcji faktur w rozliczeniach i dodaj pustą fakturę. Zgodnie z art. 106e ust. 1 pkt 2 ustawy o VAT, faktura musi zawierać kolejny numer nadany w ramach jednej lub więcej serii, który w sposób jednoznaczny ją identyfikuje. Oznacza to, że możesz mieć jednocześnie wiele równoległych serii numeracji faktur, o ile pozwalają one na jednoznaczną identyfikację pojedynczej faktury.',
        'issued_at' => 'Wystawiono dnia',
        'sold_at' => 'Data sprzedaży',
        'number_short' => 'nr',
        'notes' => 'Uwagi',
        'payment_due_date' => 'Termin płatności',
        'is_paid' => 'Zapłacono',
        'seller' => [
            'title' => 'Sprzedawca',
            'name' => 'Nazwa firmy',
            'address' => 'Adres',
            'vat' => 'NIP',
            'phone' => 'Telefon',
            'custom_fields' => [
                'email' => 'E-mail',
                'bank_account' => 'Konto bankowe',
            ],
        ],
        'buyer' => [
            'title' => 'Nabywca',
            'name' => 'Nazwa',
            'address' => 'Adres',
        ],
        'options' => [
            'title' => 'Dodatkowe opcje',
        ],
        'payment' => [
            'title' => 'Płatność',
        ],
        'products' => [
            'name' => 'Nazwa towaru lub usługi', //Nazwa towaru lub usługi
            'description' => 'Dodatkowy opis', //Nazwa towaru lub usługi
            'count' => 'Ilość',
            'unit' => 'Jedn.',
            'singular_net_price' => 'Cena jedn. netto',
            'singular_gross_price' => 'Cena jedn.',
            'net_sum' => 'Wartość netto',
            'gross_value' => 'Wartość brutto',
            'value' => 'Wartość',
            'vat' => 'VAT',
            'tax_rate' => 'Stawka VAT',
        ],
        'productsInInvoiceTitle' => 'Pozycje faktury',
        'productsInOrderTitle' => 'Produkty w zamówieniu',
        'bank_account' => 'Konto bankowe',
        'date' => 'Wystawiono dnia',
        'addToIncludedTooltip' => 'Dodaj do faktury',
        'addDuplicatedToIncludedTooltip' => 'Duplikuj w fakturze',
        '404IncludedDetailsSubtitle' => 'Nie dododano jeszcze żadnej pozycji na fakturze. Dodaj produkty z zamówienia, lub rozpocznij od dodania pustego wiersza.',
        'addShipmentRowToTable' => 'Dodaj wysyłkę z zamówienia',
        'addProductsToTable' => 'Dodaj wszystkie produkty z zamówienia',
    ],
    'gross' => 'Brutto',
    'fileName' => 'Faktura',
];
