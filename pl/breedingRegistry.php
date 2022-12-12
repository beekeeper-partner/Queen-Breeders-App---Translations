<?php
return [
    'page' => [
        'title' => 'Ewidencja hodowlana',
        'navTitle' => 'Ewidencja hodowlana',
        'subtitle' => 'Panel ewidencji hodowlanej pozwala Ci zarządzać matkami znajdującymi się w Twojej pasiece. Znajdziesz tutaj zarówno matki reprodukcyjne jak i użytkowe.',
    ],
    'types' => [
        'evaluated' => 'W ocenie',
        'reproductive' => 'Reprodukcyjna',
        'usable' => 'Użytkowa',
    ],
    'table' => [
        'index' => 'L.p',
        'name' => 'Nr opalitka',
        'nameLabel' => 'Nr opalitka / Nr ew. hodowlanej',
        'nameLabelShort' => 'Numer',
        'breeding_registry_number' => 'Numer hodowlany',
        'breeding_registry_type' => 'Status matki',
        'breeding_registry_hive_name' => 'Ul',
        'breeding_registry_herd_book' => 'Wpisy do ksiąg',
        'breeding_registry_number_in_herd_book' => 'Numer w księdze hodowlanej',
        'breeding_registry_number_in_herd_book_lineage_table' => 'Numer w księdze',
        'breeding_registry_number_in_herd_book_short' => 'nr w ks. hodowlanej',
        'breeding_registry_status_in_herd_book' => 'Status wpisu do księgi hodowlanej',
        'breeding_registry_number_in_register' => 'Numer w rejestrze hodowlanym',
        'breeding_registry_number_in_register_lineage_table' => 'Numer w rejestrze',
        'breeding_registry_number_in_register_short' => 'nr w rej. hodowlanym',
        'breeding_registry_score' => 'Ocena punktowa',
        'breeding_registry_score_short' => 'Ocena pkt.',
        'is_race_confirmed' => 'Potwierdzona przynależność rasowa',
        'is_race_confirmed_short' => 'Przynależność rasowa',
        'is_race_confirmed_hint' => 'Czy wykonano badanie morfometryczne dla tej matki?',
        'actions' => 'Akcje',
        'born_at' => 'Data urodzenia',
        'born_year' => 'Rok: :year',
        'current_status' => 'Obecny stan',
        'downloadLineageBtn' => 'Pobierz rodowód',
        'downloadCertificateBtn' => 'Pobierz metrykę',
        'addQueenFromBtn' => 'Dodaj matkę z tej matki',
        'addMultipleQueensFromBtn' => 'Dodaj wiele matek z tej matki',
        'queen_father_id' => 'Strona ojcowska',
        'queen_mother_expand' => ':name (:registryName)',
        'queen_mother_id' => 'Strona mateczna',
        'queen_source' => 'Źródło pochodzenia',
        'queen_source_short' => 'Pochodzenie',
        'queen_source_name' => 'Nazwa hodowcy',
        'queen_source_name_short' => 'Hodowca',
        'breeding_start_date' => 'Data rozpoczęcia czerwienia',
        'insemination_date' => 'Data inseminacji',
        'inseminator_name' => 'Inseminator',
        'inseminator_place_name' => 'Nazwa trutowiska',
        'insemination_type' => 'Typ inseminacji',
        'notes' => 'Notatki',
        'group' => 'Grupa',
    ],
    'sections' => [
        'general' => 'Podstawowe informacje',
        'origin' => 'Informacje o pochodzeniu',
        'registry' => 'Informacje o wpisach do ksiąg',
        'insemination' => 'Szczegóły inseminacji',
        'other' => 'Pozostałe informacje',
    ],
    'status' => [
        'active' => 'Aktywna',
        'sold' => 'Sprzedana',
        'inactive' => 'Nieaktywna',
    ],
    'modal' => [
        'editTitle' => 'Edytuj matkę :queenName (:queenNumber)',
        'addTitle' => 'Dodaj nową matkę do ewidencji',
        'deleteBtnInfo' => 'Usunięcie niemożliwe: brak uprawnień lub matka jest połączona rodowodem z inną matką.',
    ],
    'herdBookEntryType' => [
        'null' => '--',
        'draft' => 'Wstępny',
        'main' => 'Główny',
    ],
    'herdBookEntryTypeShort' => [
        'null' => '',
        'draft' => 'W',
        'main' => 'G',
    ],
    'queenSourceTypes' => [
        'own' => 'Własna hodowla',
        'external' => 'Spoza własnej hodowli',
    ],
    'inseminationTypes' => [
        'insemination' => 'Sztuczna',
        'queen_mating_station' => 'Trutowisko',
    ],
    'color' => [
        'notActive' => 'Matka nieaktywna',
        'title' => 'Kolor opalitka: :color',
        'white' => 'Biały',
        'blue' => 'Niebieski',
        'green' => 'Zielony',
        'red' => 'Czerwony',
        'yellow' => 'Żółty',
    ],
    'color_short' => [
        'white' => 'bia',
        'blue' => 'nie',
        'green' => 'zie',
        'red' => 'cze',
        'yellow' => 'żół',
    ],
];
