<?php
return [
    'pageTitle' => 'Dronning serier',
    'pageSubtitle' => 'Du kan planlegge og administrere dronningserien i bigården din. Dronning Serier vil hjelpe deg med å planlegge aktiviteter før faktiske dronninger blir født.',
    'addSuccessMessage' => 'Ny serie ble lagt til.',
    'deleteSuccessMessage' => 'Serie :name ble slettet.',
    'updateSuccessMessage' => 'Serie :name ble oppdatert.',
    'transferredAtLabel' => 'Overføring av larve dato',
    'joinedAtLabel' => 'tiltredelsesdato',
    'isolatedAtLabel' => 'Isolasjonsdato',
    'bornAtLabel' => 'Født dato',
    'serieMaxCountLabel' => 'Forventet antall dronninger',
    'serieMaxCountLabelShort' => 'Expected count',
    'serieMaxCountTooltip' => 'Enter the expected number of queens hatched from this serie. The expected quantity will appear in the forecasts on the order calendar.',
    'fabAddNewSerieTooltip' => 'Legg til ny serie',
    'newSerieInfoTitle' => 'Hva er serier for i vår applikasjon?',
    'newSerieInfoDesc' => 'Med serier kan du planlegge bedre fra det øyeblikket larver flyttes til det tidspunktet da dronninger blir født i klekkeskapet. Opprettede serier sammenlignes med salgsprognose basert på dine bestillinger, og gir deg innspill om hvor mange bestillinger du kan håndtere i løpet av sesongen. <a href="https://partnerpszczelarza.pl/aplikacja-hodowcy/dokumentacja/hodowla/serie-hodowlane/" target="_blank">Read more in our documentation.</a>',
    'serieNameLabel' => 'Serie navn',
    'manualEfficiencyLabel' => 'Bruk standard effektivitetssett',
    'editSerieModalTitle' => 'Rediger serien',
    'startDateLabel' => 'Start dato',
    'endDateLabel' => 'Slutt dato',
    'addMultipleSerieSuccessMessage' => 'Serier ble lagt til',
    'addMultipleSeriesModalHivesPrefixLabel' => 'Prefiks for serienavn',
    'addMultipleSeriesModalTitle' => 'Legg til flere serier',
    'addMultipleSeriesModalInfoBoxTitle' => 'Laget serieoversikt',
    'noHivesInfoTitle' => 'Not enough data.',
    'noHivesInfoBox' => 'Fyll inn start- og sluttdatoen for å se eksempler på opprettede serier.',
    'saveOnlyThisSerieLabel' => 'Endre kun denne',
    'saveAllSeriesThisLabel' => 'Endre denne og neste serie',
    'revealSerieTitle' => 'Liste over serier',
    'revealSerieSubtitle' => 'Denne serien ble laget i et sett med andre serier. Vil du endre datoene også for neste serie fra listen?',
    'defaultEfficiencyInfo' => 'Som standard bruker serien en dynamisk beregning av effektiviteten til hvert trinn. Hvis du vil tvinge frem bruken av standardverdier, merk av for dette alternativet.',

    //Statistics
    'lostBornCountLabel' => 'Antall: mistet under fødselen',
    'counts' => [
        'born' => [
            'label' => 'Born count',
            'hint' => 'Already born: :value',
            'tooltip' => 'You can save this field multiple times and it will add up to the queens born from this series',
            'fullyBornSwitch' => 'Serie fully born',
            'fullyBornInfo' => 'If checked, this serie will be marked as closed and fully born. There is still option to edit it from the Series panel.',
        ],
        'lost' => [
            'hint' => 'Already lost: :value',
            'tooltip' => 'You can save this field multiple times and it will add up to the queens lost int this series',
        ]
    ],
    'joinedCountLabel' => 'Antall: sluttet seg til',
    'isolatedCountLabel' => 'Antall: isolert',
    'transferredCountLabel' => 'Antall: overførte larver',
    'realCountLabel' => 'Virkelig antall fødte dronninger',
    'prognosedCountLabel' => 'Prognostisert antall fødte dronninger',
    'efficiencyLabel' => 'Effektivitet',
    'efficiencyJoinedLabel' => 'Effektivitet',

    'workCardTitle' => 'Dronning serier',
    'workCardInfoTitle' => 'Hva brukes dette panelet til?',
    'workCardSubTitle' => 'Hvis du bruker dronningsserier i applikasjonen vår - i dette panelet finner du serien som krever din handling i dag. Data gitt her brukes for prognose hvor mye dronninger som er tilgjengelighet.',
    'day_transferred' => 'Overføringsdag',
    'day_joined' => 'Dag ført sammen',
    'day_isolated' => 'Isolasjonsdag',
    'day_born' => 'Fødselsdag',
    'allGoodText' => 'Alt bra her! Det er ingenting å jobbe med her i dag eller alle oppgavene var allerede fullført',
    'mathDontAddUpAlert' => 'Counts of isolated, born and lost are not matching. Closing the serie will mark left queens as lost.',
    'queensInBatchesCount' => 'Reserved in batches',
    'queensInBatchesCountLabel' => 'Count of reserved for batches',

    'form' => [
        'comment' => 'Comment',
        'queen_mother_id' => 'Reproductive queen',
        'queen_mother_id_info' => 'Choose reproductive queen from available ones to mark all queens born in this series as daughters. This will help you with keeping lineage settings in place.',
        'is_excluded_from_statistics' => 'Exclude series from analytics',
        'is_excluded_from_statistics_tooltip' => 'Excluded from analytics',
        'is_excluded_from_statistics_info' => 'We will skip excluded series from analytics  obliczaniu uśrednionych wydajności. Polecamy wyłączenie ze statystyk pierwszych serii utworzonych w sezonie, gdyż mogą one mieć największy rozrzut w efektywności poszczególnych kroków.',
    ],
    'planning' => [
        'headline' => 'Planning',
        'dateInfo' => 'The dates represent when the first and last series of queens are born. We will calculate other dates for you.',
        'expectedInfo' => 'Let us know how many queen bees you expect to have for sale for the created series. You can change the number for the selected series at any time.',
    ],
    'modal' => [
        'deleteBtnInfo' => 'There are queens already born for this serie. You can mark it as completed instead.'
    ],
    'status' => [
        'completed' => [
            'tooltip' => 'Serie completely born',
        ],
    ],
];
