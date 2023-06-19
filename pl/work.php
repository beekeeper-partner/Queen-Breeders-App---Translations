<?php
return [
    'pageTitle' => 'Prace pasieczne',
    'pageSubtitle' => 'Ten panel pozwala zarządzać codziennymi pracami w pasiece. Dodaj informacje o wygryzionych matkach czy ilości zamówionych matek, które trzeba dzisiaj zrealizować, aby usprawnić pracę Twojego zespołu i uaktualnić stany magazynowe.',

    //Modal
    'queenOrderTitle' => 'Matki do wybrania',
    'emptyQueenOrderMsg' => 'Brak zamówień na wybieranie matek',
    'editQueenOrderTitle' => 'Edytuj zamówienie na matki',
    'addQueenOrderTitle' => 'Dodaj zamówienie na matki',
    'deleteQueenOrderTitle' => 'Usuń zamówienie na matki',
    'queenOrderNeededAtLabel' => 'Data wybierania z uli',
    'queenOrderCountLabel' => 'Ilość matek do wybrania',
    'queenOrderAddedSuccessMessage' => 'Zlecenie utworzono pomyślnie',
    'queenOrderEditedSuccessMessage' => 'Zapisaliśmy zmiany dla tego zlecenia',
    'queenOrderDeletedSuccessMessage' => 'Zlecenie usunięte',
    'queenOrderDeleteWarningLabel' => 'Zlecenia na matki mogą być usunięte jeżeli nie została dla nich wybrana żadna matka. Ta akcja usunie zlecenie całkowicie z systemu.',

    //Focus panel
    'queenTakeOutLabel' => ' Wybieram matki',
    'queenTakeOutShortLabel' => 'Wybieram',
    'queenAddLabel' => 'Dodaję matki',
    'queenAddShortLabel' => 'Dodaję',
    'noQueenLabel' => 'Brak matki',
    'noQueenBatchesLabel' => 'Brak aktywnych partii matek',
    'queenBatchLabel' => 'Partia matek',
    'queenLineLabel' => 'Linia',
    'noHivesSubtitle' => 'Brak pustych uli',
    'noHivesInfoBox' => 'Wygląda na to, że wszystkie ule są zajęte. Jeżeli brakuje tutaj uli, możesz dodać je w panelu lokalizacji.',
    'noActiveHivesSubtitle' => 'Brak uli z matkami',
    'noActiveHivesForOrderSubtitle' => 'Brak uli z matkami dla wybranego zamówienia',
    'noActiveHivesInfoBox' => 'Wygląda na to, że wszystkie ule są puste. Jeżeli brakuje tutaj uli, możesz dodać je w panelu lokalizacji, a następnie dodać do nich matki',
    'noActiveHivesForOrderInfoBox' => 'Wygląda na to, że w tej lokalizacji nie ma matek pasujących do zamówienia. Przejrzyj inne lokalizacje lub zmień zamówienie, żeby zobaczyć inne ule.',
    'noQueenOrderLabel' => 'Brak aktywnych zamówień na matki',
    'noQueenOrderFilteringLabel' => 'Zamówienie nie wybrane',

    'days' => '{0} dni|{1} dzień|[2,*] dni',

    'filtersTitle' => 'Ustawienia widoku',
    'sortingMethodLabel' => 'Sortowanie uli',
    'focusSortingMethods_queenNatural' => 'Po wieku matki',
    'focusSortingMethods_alphabetical' => 'Alfabetyczne',

    'queens_mq' => 'Matki potwierdzone przeglądami',
    'queens_pb' => 'Matki potencjalnie czerwiące',
    'queens_vq' => 'Matki nieunasienione',

    'analytics' => [
        'dailyQueenActions' => [
            'title' => 'Aktywności w pasiece w dniu :day',
            'subtitle' => 'Znajdziesz tutaj bieżące podsumowanie dziennych aktywności osób wykonujących prace w pasiece.',
            'queens' => [
                'title' => 'Akcje na matkach',
                'added' => 'dodane',
                'taken' => 'wybrane',
                'lost' => 'utracone',
                'left' => 'pozostawione',
                'overall' => 'w sumie',
            ],
        ],
    ]
];
