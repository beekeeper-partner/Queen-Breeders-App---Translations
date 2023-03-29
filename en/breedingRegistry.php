<?php
return [
    'page' => [
        'title' => 'Breeding registry',
        'navTitle' => 'Breeding registry',
        'subtitle' => 'This panel helps you manage breeding queens in your apiary. You can find here queens intended for reproduction, along with those which can be sold to your clients.',
    ],
    'used_as' => [
        'evaluated' => 'In evaluation',
        'reproductive' => 'Reproductive',
        'usable' => 'Other',
        'internal_use' => 'Internal use',
    ],
    'table' => [
        'index' => 'No.',
        'marker_number' => 'Marker no.',
        'nameLabel' => 'Breeding record / Marker no.',
        'nameLabelShort' => 'Number',
        'number' => 'Breeding record number',
        'used_as' => 'Used as',
        'custom_hive_name' => 'Hive name',
        'breeding_registry_herd_book' => 'Registry entries',
        'breeding_registry_number_in_herd_book' => 'Herd book number',
        'breeding_registry_number_in_herd_book_lineage_table' => 'Herd book no.',
        'breeding_registry_number_in_herd_book_short' => 'herd book no.',
        'breeding_registry_status_in_herd_book' => 'Herd book entry status',
        'breeding_registry_number_in_register' => 'Breeding registry number ',
        'breeding_registry_number_in_register_lineage_table' => 'Registry no.',
        'breeding_registry_number_in_register_short' => 'breeding registry no.',
        'breeding_registry_score' => 'Score',
        'breeding_registry_score_short' => 'Pts.',
        'is_race_confirmed' => 'Race confirmed',
        'is_race_confirmed_short' => 'Race confirmed',
        'is_race_confirmed_hint' => 'Was morphometric analysis done for this queen?',
        'actions' => 'Actions',
        'born_at' => 'Date of birth',
        'born_year' => 'Year: :year',
        'current_status' => 'Current status',
        'downloadLineageBtn' => 'Download lineage',
        'downloadCertificateBtn' => 'Download certificate',
        'addQueenFromBtn' => 'Add queen from this queen',
        'addMultipleQueensFromBtn' => 'Add multiple queens from this queen',
        'queen_father_id' => 'Paternal side',
        'queen_mother_expand' => ':name (:registryName)',
        'queen_mother_id' => 'Mother side',
        'queen_source' => 'Source',
        'queen_source_short' => 'Source',
        'queen_source_name' => 'Breeder name',
        'queen_source_name_short' => 'Breeder',
        'breeding_start_date' => 'Breeding start date',
        'insemination_date' => 'Insemintation date',
        'inseminator_name' => 'Inseminator name',
        'inseminator_place_name' => 'Name of queen-mating place',
        'insemination_type' => 'Insemintation type',
        'notes' => 'Notes',
        'group' => 'Group',
        'is_alive' => 'Is alive',
        'is_alive_info' => 'This setting can help us track queen bees that left your apiary as a living queen. Based on this information we will generate statistics about queens lost during breeding.',
    ],
    'sections' => [
        'general' => 'General',
        'origin' => 'Source information',
        'registry' => 'Registry information',
        'insemination' => 'Insemination details',
        'other' => 'Other details',
    ],
    'status' => [
        'active' => 'Active',
        'sold' => 'Sold',
        'lost' => 'Lost',
    ],
    'modal' => [
        'editTitle' => 'Edit queen :queenNumber - :queenName :queenColor',
        'addTitle' => 'Add new queen to registry',
        'deleteBtnInfo' => 'Deleting not possible: lack of permission or the queen is connected with other queens',
    ],
    'herdBookEntryType' => [
        'null' => '--',
        'draft' => 'Draft',
        'main' => 'Main',
    ],
    'herdBookEntryTypeShort' => [
        'null' => '',
        'draft' => 'W',
        'main' => 'G',
    ],
    'queenSourceTypes' => [
        'own' => 'Own breed',
        'external' => 'Imported',
    ],
    'inseminationTypes' => [
        'insemination' => 'Insemination',
        'queen_mating_station' => 'Queen mating station',
    ],
    'color' => [
        'notActive' => 'Queen inactive',
        'title' => 'Marker color: :color',
        'white' => 'White',
        'blue' => 'Blue',
        'green' => 'Green',
        'red' => 'Red',
        'yellow' => 'Yellow',
    ],
    'color_short' => [
        'white' => 'W',
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
];
