<?php
return [
    'fabAddNewLocationTooltip' => 'Add new location',
    'fabAddNewHiveTooltip' => 'Add new hive',
    'fabAddMultipleHivesTooltip' => 'Add multiple hives',
    'fabAddNewSectionTooltip' => 'Add new section',
    'summaryPageTitle' => 'Locations summary',
    'pageSubtitle' => 'Here you can review your current status of all locations in your apiary.',
    'addLocationSuccessMessage' => 'New location was added successfully.',
    'deleteLocationSuccessMessage' => 'Location was deleted successfully.',
    'updateLocationSuccessMessage' => 'Location was updated successfully.',
    'hives' => '{0} hives|{1} hive|[2,*] hives',
    'locationLabel' => 'Location',
    'sectionLabel' => 'Section',
    'generalSectionName' => 'Main section',
    'moveSectionUpTooltip' => 'Move up',
    'moveSectionDownTooltip' => 'Move down',
    'countInStatisticsTooltip' => 'Queens from this section are counted in sales prognosis.',
    'notCountInStatisticsTooltip' => 'Queens from this section are not counted in sales prognosis.',
    'addNewSectionCardTitle' => 'Add new section',
    'editSectionCardTitle' => 'Edit section',
    'addNewLocationNameLabel' => 'Enter location name',
    'newSectionNameLabel' => 'Enter section name',
    'selectLocationLabel' => 'Select location',
    'sectionSwitchSalesStatsLabel' => 'Enable counting of queens from this section in sales prognosis',
    'addSectionSuccessMessage' => 'Section created successfully!',
    'deleteSectionSuccessMessage' => 'Section deleted successfully.',
    'updateSectionSuccessMessage' => 'Section updated successfully.',
    'sectionsInfoTitle' => 'What are sections for?',
    'sectionsInfoDesc' => '<p class="mb-1 pl-3">Sections can help you divide the location into smaller parts, thus allowing for a better reflection of your apiary\'s plan.</p>
                                    <p class="mb-1 pl-3">
                                        You can also separate the queens not included in "queens\' available for sale" forecasts with sections.
                                    </p>
                                    <p class="mb-1 pl-3">For example, if a few queens in a given location are not for sale, you can put them in a separate section.</p>',
    'selectLocationSectionLabel' => 'Choose a section',
    'addNewHiveNameLabel' => 'Enter hive name',
    'newHiveModalTitle' => 'Add new hive',
    'editHiveModalTitle' => 'Edit hive',
    'editHivesModalTitle' => 'Edit hives',
    'newHiveInfoTitle' => 'How the hives are used in our application?',
    'newHiveInfoDesc' => '<p class="mb-1 pl-3">Hives in our application are designed to breed one single queen at a time.
                            </p><p class="mb-1 pl-3">So if you are using multi-chamber hives, add each chamber as a separate hive.</p>',
    'addSingleHiveSuccessMessage' => 'Hive created successfully! You can add another one or close this box.',
    'addMultipleHiveSuccessMessage' => 'Hives added successfully!',
    'editSingleHiveSuccessMessage' => 'Hive edited successfully.',
    'editMultipleHivesSuccessMessage' => 'Hives edited successfully.',
    'deleteSingleHiveSuccessMessage' => 'Hive :hiveName deleted successfully.',
    'deleteMultipleHivesSuccessMessage' => 'Hives deleted successfully.',
    'moveToWarehouseLabel' => 'Move to warehouse',
    'moveHiveToWarehouseSuccessMessage' => 'Hive :hiveName was moved to warehouse',
    'saveAndMoveBtnLabel' => 'Save and move',
    'addMultipleHivesModalTitle' => 'Add multiple hives',
    'addMultipleHivesModalInfoBoxTitle' => 'Names of created hives:',
    'addMultipleHivesModalHivesNumberLabel' => 'How many hives do you want to add?',
    'addMultipleHivesModalHivesNumberStartLabel' => 'With what number they should start?',
    'addMultipleHivesModalHivesSuffixLabel' => 'Should there be an "a/b" suffix added?',
    'addMultipleHivesModalHivesPrefixLabel' => 'How do you want to prefix the hives?',
    'inWarehouseLabel' => 'In warehouse',
    'addMultipleHivesModalLocationLabel' => 'Place new hives in location',
    'hivesNumberValidationLabel' => 'number of hives',
    'hivesNumberStartValidationLabel' => 'number',
    'hivesNumberHint' => 'You can add up to 200 hives at one action',
    'noHivesInfoBox' => 'Please fill the fields on the left side to see more details.',
    'filterByNameLabel' => 'Search for a hive name',
    'showEmptyLabel' => 'Show only empty hives',
    'enableFiltersBtnLabel' => 'Filter hives',

    //Queens
    'addNewQueenBtnLabel' => 'Add new queen',
    'queenAddedSuccessMessage' => 'Queen added successfully',
    'queenEditedSuccessMessage' => 'Queen edited successfully',
    'queenDeletedSuccessMessage' => 'Queen deleted successfully',
    'editQueenModalTitle' => 'Edit queen in hive',
    'editQueenModalTitleShort' => 'Edit queen',
    'addQueenModalTitle' => 'Add queen to hive',
    'queenDOBLabel' => 'Date of birth',
    'queenDayOfLifeLabel' => 'Age (days)',
    'queenCycleLengthLabel' => 'Cycle length',
    'weeksLabel' => 'weeks',
    'deleteWarningLabel' => 'Deleting the queen will cause her irreversible loss in the
                            system, it will not be included in the statistics. If you want to mark it as lost, please use other queen actions from hive menu.',
    'queenAction_leave_PB' => 'Leave potentially breeding',
    'queenAction_leave_MQ' => 'Leave breeding queen',
    'queenAction_take_PB' => 'Take potentially breeding queen',
    'queenAction_take_MQ' => 'Take mated queen',
    'queenAction_lost' => 'Queen lost',
    'queenAction_lostCell' => 'Queen cell lost',

    'filters_label' => 'Breeding status',
    'filters_state_mq' => 'Mated queen',
    'filters_state_pb' => 'Potentially breeding',
    'filters_state_vq' => 'Virgin queen',
    'filters_otherLabel' => 'other',

    //Queen Batches
    'addQueenFromBatchLabel' => 'Add queen from batch',
    'queenBatchLabelShort' => 'Batch',
    'queenLineLabelShort' => 'Line',
    'queenCycleLabelShort' => 'Cycle',

    'selectedHives' => 'Selected hives: :value',
    'sections' => [
        'moveEmptyHivesToWarehouse' => 'Move empty hives to warehouse',
        'movingHivesSuccessfull' => 'Empty hives were moved to warehouse',
    ],
    'queen' => [
        'type' => [
            'label' => 'Added as',
            'queen' => 'born queen',
            'cell' => 'queen cell',
        ]
    ],
];
