<?php
return [
    'pageTitle' => 'Work in apiary',
    'pageSubtitle' => 'Work panel helps you with managing daily activities for your apiary.',

    //Modal
    'queenOrderTitle' => 'Queen takeout',
    'emptyQueenOrderMsg' => 'There are no available requests.',
    'editQueenOrderTitle' => 'Edit queen takeout request',
    'addQueenOrderTitle' => 'Add queen takeout request',
    'deleteQueenOrderTitle' => 'Delete queen takeout request',
    'queenOrderNeededAtLabel' => 'Takeout date',
    'queenOrderCountLabel' => 'Queen takeout count',
    'queenOrderAddedSuccessMessage' => 'Queen takeout order created successfully',
    'queenOrderEditedSuccessMessage' => 'Your changes to queen takeout order were saved',
    'queenOrderDeletedSuccessMessage' => 'Queen takeout order was deleted',
    'queenOrderDeleteWarningLabel' => 'Queen takeout request can be removed only when there is no queen taken in that order (count is equal to 0). This action will remove it completely from the system.',

    //Focus panel
    'queenTakeOutLabel' => 'Taking out queens',
    'queenTakeOutShortLabel' => 'Take out',
    'queenAddLabel' => 'Adding queens',
    'queenAddShortLabel' => 'Add',
    'noQueenLabel' => 'No queen',
    'noQueenBatchesLabel' => 'No queen batches available',
    'queenBatchLabel' => 'Queen batch',
    'queenLineLabel' => 'Line',
    'noHivesSubtitle' => 'No empty hives',
    'noHivesInfoBox' => 'All good here, seems that all of your hives have queen inside. If you need more hives, please add them into location.',
    'noActiveHivesSubtitle' => 'No hives with queens',
    'noActiveHivesForOrderSubtitle' => 'No hives with queens for selected order',
    'noActiveHivesInfoBox' => 'It seems that all of your hives in selected location are empty. If you need more hives, please add them into location and then add queens.',
    'noActiveHivesForOrderInfoBox' => 'It seems that hives in selected location are does not have queens for selected order. Change order or location to look for the available queens.',
    'noQueenOrderLabel' => 'No queen orders available',
    'noQueenOrderFilteringLabel' => 'Queen order not selected',

    'days' => '{0} days|{1} day|[2,*] days',

    'filtersTitle' => 'Filter the view',
    'sortingMethodLabel' => 'Hive sorting',
    'focusSortingMethods_queenNatural' => 'By queen age',
    'focusSortingMethods_alphabetical' => 'Alphabetically',

    'queens_mq' => 'Mated queens',
    'queens_pb' => 'Potentially breeding queens',
    'queens_vq' => 'Virgin queens',

    'analytics' => [
        'dailyQueenActions' => [
            'title' => 'Daily activities in apiary for: :day',
            'subtitle' => 'You can review daily activities of people working in the apiary.',
            'queens' => [
                'title' => 'Queens',
                'added' => 'added',
                'taken' => 'taken',
                'lost' => 'mark as lost',
                'left' => 'left in hive',
                'overall' => 'overall',
            ],
        ],
    ]
];
