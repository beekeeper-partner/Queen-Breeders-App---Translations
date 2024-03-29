<?php
return [
    'page' => [
        'title' => 'Avlsregister',
        'navTitle' => 'Avlsregister',
        'subtitle' => 'Dette panelet hjelper deg med å administrere avlsdronninger i bigården din. Du kan finne dronninger beregnet for reproduksjon, sammen med de som kan selges til dine kunder.',
    ],
    'used_as' => [
        'evaluated' => 'I evaluering',
        'reproductive' => 'Reproduktiv',
        'usable' => 'Annen',
        'internal_use' => 'Internal use',
    ],
    'table' => [
        'index' => 'Nei.',
        'marker_number' => 'Markør nr.',
        'nameLabel' => 'Markør nr. / Avls Nr',
        'nameLabelShort' => 'Nummer',
        'number' => 'Avls oppslags nr',
        'used_as' => 'Brukt som',
        'custom_hive_name' => 'Kube navn',
        'breeding_registry_herd_book' => 'Registeroppføringer',
        'breeding_registry_number_in_herd_book' => 'Boknummeret hennes',
        'breeding_registry_number_in_herd_book_lineage_table' => 'Stambok nr.',
        'breeding_registry_number_in_herd_book_short' => 'stambok nr.',
        'breeding_registry_status_in_herd_book' => 'Status for stambokoppføring',
        'breeding_registry_number_in_register' => 'Avlsregisternummer ',
        'breeding_registry_number_in_register_lineage_table' => 'Registernr.',
        'breeding_registry_number_in_register_short' => 'avlsregisternr.',
        'breeding_registry_score' => 'Score',
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
        'queen_father_id' => 'Faderlig side',
        'queen_mother_expand' => ':navn (:registryName)',
        'queen_mother_id' => 'Mors side',
        'queen_mother_id_for_series' => 'Reproductive queen (mother side)',
        'queen_source' => 'Kilde',
        'queen_source_short' => 'Kilde',
        'queen_source_name' => 'Kilde navn',
        'queen_source_name_short' => 'Oppdretter',
        'breeding_start_date' => 'Startdato for avl',
        'insemination_date' => 'Insemineringsdato',
        'inseminator_name' => 'Navn på inseminør',
        'inseminator_place_name' => 'Navn på parestasjon',
        'insemination_type' => 'Inseminasjons type',
        'notes' => 'Notat',
        'group' => 'Gruppe',
        'is_alive' => 'Is alive',
        'is_alive_info' => 'This setting can help us track queen bees that left your apiary as a living queen. Based on this information we will generate statistics about queens lost during breeding.',
        'year' => 'Year',
    ],
    'sections' => [
        'general' => 'Generell',
        'origin' => 'Kildeinformasjon',
        'registry' => 'Registerinformasjon',
        'insemination' => 'Insemineringsdetaljer',
        'other' => 'Andre detaljer',
    ],
    'status' => [
        'active' => 'Aktiv',
        'sold' => 'Solgt',
        'lost' => 'Tapt',
    ],
    'modal' => [
        'editTitle' => 'Rediger dronning :queenNumber - :queenName :queenColor',
        'addTitle' => 'Legg til ny dronning i registeret',
        'deleteBtnInfo' => 'Sletting ikke mulig: manglende tillatelse eller dronningen er forbundet med andre dronninger',
    ],
    'herdBookEntryType' => [
        'null' => '--',
        'draft' => 'Utkast',
        'main' => 'Hoved',
    ],
    'herdBookEntryTypeShort' => [
        '' => '',
        'null' => '',
        'draft' => 'U',
        'main' => 'H',
    ],
    'queenSourceTypes' => [
        'own' => 'Egen rase',
        'external' => 'Importert',
    ],
    'inseminationTypes' => [
        'inseminering' => 'inseminering',
        'dronning_paringsstasjon' => 'Dronning parringsstasjon',
    ],
    'color' => [
        'notActive' => 'Dronning inaktiv',
        'title' => 'Markeringsfarge: :color',
        'white' => 'Hvit',
        'blue' => 'Blå',
        'green' => 'Grøn',
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
    'used_in' => [
        'general' => 'Visible in',
        'general_info' => 'Queen bees in stock will be visible in the orders stock and can be attached to the selected order. You can find queens visible in the apiary in the current state of the apiary.',
        'apiary' => 'Apiary',
        'stock' => 'Stock',
    ],
    'date' => [
        'label' => 'Date'
    ],
    'multibar' => [
        'selectedCount' => 'Selected queens: :value',
        'successMsg' => 'Selected queens were updated successfully',
        'actions' => [
            'label' => 'Select action',
            'makeLost' => 'Mark as lost',
            'contactUsWhatsapp' => 'Tell us more what you want to see here (WhatsApp chat)',
        ],
    ],
];
