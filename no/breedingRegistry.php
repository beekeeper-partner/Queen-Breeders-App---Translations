<?php
return [
    'page' => [
        'title' => 'Avlsregister',
        'navTitle' => 'Avlsregister',
        'subtitle' => 'Dette panelet hjelper deg med å administrere avlsdronninger i bigården din. Du kan finne dronninger beregnet for reproduksjon, sammen med de som kan selges til dine kunder.',
    ],
    'types' => [
        'evaluated' => 'I evaluering',
        'reproductive' => 'Reproduktive',
        'usable' => 'Andre',
    ],
    'table' => [
        'index' => 'Nr.',
        'name' => 'Rygg nr.',
        'nameLabel' => 'Rygg nr. / Avls data',
        'nameLabelShort' => 'Nummer',
        'breeding_registry_number' => 'Avls data nummer',
        'breeding_registry_type' => 'Dronning status',
        'breeding_registry_hive_name' => 'Kube navn eller nummer',
        'breeding_registry_herd_book' => 'Registeroppføringer',
        'breeding_registry_number_in_herd_book' => 'Stamboknummer',
        'breeding_registry_number_in_herd_book_lineage_table' => 'Stambok nr.',
        'breeding_registry_number_in_herd_book_short' => 'Stambok nr.',
        'breeding_registry_status_in_herd_book' => 'Status for stambokoppføring',
        'breeding_registry_number_in_register' => 'Avlsregisternummer',
        'breeding_registry_number_in_register_lineage_table' => 'Registernr.',
        'breeding_registry_number_in_register_short' => 'avlsregisternr.',
        'breeding_registry_score' => 'Skår',
        'breeding_registry_score_short' => 'Poeng.',
        'is_race_confirmed' => 'Rase bekreftet',
        'is_race_confirmed_short' => 'rase bekreftet',
        'is_race_confirmed_hint' => 'Ble morfometrisk analyse gjort for denne dronningen?',
        'actions' => 'Handlinger',
        'born_at' => 'Fødselsdato',
        'born_year' => 'År: :year',
        'current_status' => 'Nåværende status',
        'downloadLineageBtn' => 'Last ned avstamning',
        'downloadCertificateBtn' => 'Last ned sertifikat',
        'addQueenFromBtn' => 'Legg til dronning fra denne dronningen',
        'addMultipleQueensFromBtn' => 'Legg til flere dronninger fra denne dronningen',
        'queen_father_id' => 'Fars side',
        'queen_mother_expand' => ':navn (:registryName)',
        'queen_mother_id' => 'Mor siden',
        'queen_source' => 'Kilde',
        'queen_source_short' => 'Kilde',
        'queen_source_name' => 'Oppdretter navn',
        'queen_source_name_short' => 'Oppdretter',
        'breeding_start_date' => 'Startdato for avl',
        'insemination_date' => 'Inseminasjons dato',
        'inseminator_name' => 'Inseminør navn',
        'inseminator_place_name' => 'Navn på parestasjon',
        'insemination_type' => 'Inseminasjons type',
        'notes' => 'Notat',
        'group' => 'Gruppe',
    ],
    'sections' => [
        'general' => 'Generell',
        'origin' => 'Kilde informasjon',
        'registry' => 'Register informasjon',
        'insemination' => 'Inseminerings detaljer',
        'other' => 'Andre detaljer',
    ],
    'status' => [
        'active' => 'Aktiv',
        'sold' => 'Solgt',
        'inactive' => 'Inaktiv',
    ],
    'modal' => [
        'editTitle' => 'Rediger dronning :queenName (:queenNumber)',
        'addTitle' => 'Legg til ny dronning i registeret',
        'deleteBtnInfo' => 'Sletting ikke mulig: manglende tillatelse eller dronningen er forbundet med andre dronninger',
    ],
    'herdBookEntryType' => [
        'null' => '--',
        'draft' => 'Utkast',
        'main' => 'Hoved',
    ],
    'herdBookEntryTypeShort' => [
        'null' => '',
        'draft' => 'U',
        'main' => 'H',
    ],
    'queenSourceTypes' => [
        'own' => 'Egen avl',
        'external' => 'Kjøpt inn',
    ],
    'inseminationTypes' => [
        'insemination' => 'Inseminering',
        'queen_mating_station' => 'Parestasjon',
    ],
    'color' => [
        'notActive' => 'Dronning innaktiv',
        'title' => 'Dronning Farge: :color',
        'white' => 'Hvit',
        'blue' => 'Blå',
        'green' => 'Grønn',
        'red' => 'Rød',
        'yellow' => 'Gul',
    ],
    'color_short' => [
        'white' => 'H',
        'blue' => 'B',
        'green' => 'G',
        'red' => 'R',
        'yellow' => 'Y',
    ],
];
