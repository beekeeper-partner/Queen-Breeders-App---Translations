<?php
return [
    'page' => [
        'title' => 'Breeding registry',
        'navTitle' => 'Breeding registry',
        'subtitle' => 'This panel helps you manage breeding queens in your apiary. You can find here queens intended for reproduction, along with those which can be sold to your clients.',
    ],
    'types' => [
        'evaluated' => 'In evaluation',
        'reproductive' => 'Reproductive',
        'usable' => 'Other',
    ],
    'table' => [
        'index' => 'No.',
        'name' => 'Marker no.',
        'nameLabel' => 'Marker no. / Breeding record',
        'nameLabelShort' => 'Number',
        'breeding_registry_number' => 'Breeding record number',
        'breeding_registry_type' => 'State',
        'breeding_registry_hive_name' => 'Hive name',
        'breeding_registry_herd_book' => 'Registry entries',
        'breeding_registry_number_in_herd_book' => 'Her book number',
        'breeding_registry_number_in_herd_book_short' => 'herd book no.',
        'breeding_registry_status_in_herd_book' => 'Herd book entry status',
        'breeding_registry_number_in_register' => 'Breeding registry number ',
        'breeding_registry_number_in_register_short' => 'breeding registry no.',
        'breeding_registry_score' => 'Score',
        'is_race_confirmed' => 'Race confirmed',
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
        'queen_source_name' => 'Source name',
        'breeding_start_date' => 'Breeding start date',
        'insemination_date' => 'Insemintation date',
        'inseminator_name' => 'Inseminator name',
        'insemination_type' => 'Insemintation type',
        'inseminator_place_name' => 'Name of queen-mating place',

        'notes' => 'Notes',
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
        'inactive' => 'Inactive',
    ],
    'modal' => [
        'editTitle' => 'Edit queen :queenName (:queenNumber)',
        'addTitle' => 'Add new queen to registry',
        'deleteBtnInfo' => 'Deleting not possible: lack of permission or the queen is connected with other queens',
    ],
    'herdBookEntryType' => [
        'null' => '--',
        'draft' => 'Draft',
        'main' => 'Main',
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
];
