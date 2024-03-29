<?php
return [
    'nav' => [
        'apiaryLabel' => 'Apiary',
        'apiaryLogo' => 'Logo',
        'teamLabel' => 'Team',
        'queenLinesLabel' => 'Queen lines',
        'seasonsLabel' => 'Seasons',
    ],
    'general' => [
        'pageTitle' => 'Settings',
        'subTitle' => 'You can manage your apiary settings here.',
    ],
    'apiary' => [
        'cardTitle' => 'Apiary details',
        'cardSubTitle' => "This is the data that you've entered on registration, feel free to change it if you need. Based on selected country we can propose you functionality more tailored for your needs. The apiary name can be also shorted here, as you can use full company name in Invoicing settings.",
    ],
    'efficiency' => [
        'title' => 'Efficiency',
        'cardTitle' => 'Efficiency settings',
        'cardSubTitle' => 'Efficiency settings are used as a base value for prognoses in our application. Unless there is not enough historical data to use, default values from this settings are used.',
    ],
    'queenLines' => [
        'cardTitle' => 'Queen Lines',
        'subTitle' => 'You can manage your queen lines here.
                            <br/>If you are no longer need a queen line, you can either delete it or disable it in the application.',
    ],
    'seasons' => [
        'cardTitle' => 'Seasons',
        'cardTitleSingular' => 'Season',
        'subTitle' => 'Seasons allow you to divide orders and activities in the apiary into defined periods. You can add new seasons in the past and future, and we will try to match parts of the application to the seasons set.',
        'nameLabel' => 'Name',
        'startDateLabel' => 'Start date',
        'endDateLabel' => 'End date',
        '404Subtitle' => 'There are no defined seasons yet, please add first to start.',
        'addSuccessMessage' => 'Season was added successfully.',
        'updateSuccessMessage' => 'Season was updated successfully.',
        'deleteSuccessMessage' => 'Season :name was deleted successfully.',
        'editModalTitle' => 'Edit season :name',
        'addModalTitle' => 'Add new season',
        'startingNumberHint' => 'Example: :value',
        'queenNumbering' => [
            'title' => 'Queen numbering for the season',
            'titleShort' => 'Queen numbering',
            'subtitle' => 'Application will automatically number queens that are born in your apiary. By default first queen added for current year will receive number 1/YEAR (example: 1/2023). Below you can set personalise prefix and number for queens born in the season.',
        ],
        'queen_series_starting_number' => 'Starting number',
        'queen_series_prefix' => 'Queen number prefix',
        'daysOff' => [
            'title' => 'Days off',
            'subtitle' => 'Add days off or days where shipment is not possible. Those days will be shown on calendar, giving you hint that this days should not be used for shipments. ',
            'downloadPublicHolidays' => 'Import public holidays for :year',
            'table' => [
                'date' => 'Date',
                'name' => 'Name of the day',
                'saveChangesBtn' => 'Save changes',
                'addNewBtn' => 'Add new day',
            ],
        ],
    ],
    'queenLinesNameSingular' => 'Queen line',
    'queenLinesNameLabel' => 'Short name',
    'queenLinesFullNameLabel' => 'Full name',
    'queenLinesNameLabelShort' => 'Line',
    'allQueenLinesLabel' => 'All lines',
    'beeSubspeciesNameLabel' => 'Subspecies',
    'queenLineActiveNameLabel' => 'Active',
    'clubActiveNameLabel' => 'Active',
    'unionActiveNameLabel' => 'Active',
    'queenLineNotActiveNameLabel' => 'Inactive',
    'clubNotActiveNameLabel' => 'Inactive',
    'a_m_mellifera' => 'A. m. mellifera',
    'a_m_carnica' => 'A. m. carnica',
    'a_m_caucasica' => 'A. m. caucasica',
    'a_m_ligustica' => 'A. m. ligustica',
    'queen_lines' => [
        'a_m_mellifera' => 'A. m. mellifera',
        'a_m_carnica' => 'A. m. carnica',
        'a_m_caucasica' => 'A. m. caucasica',
        'a_m_ligustica' => 'A. m. ligustica',
    ],
    'crossbreed' => 'Cross-breed',
    'hybrid' => 'Hybrid',
    'deleteQueenLineSuccessMessage' => 'Queen line :name was deleted successfully',
    'queenLineUpdateSuccessMessage' => 'Queen line :name was updated successfully',
    'queenLineAddedSuccessMessage' => 'Queen line :name was added successfully',
    'addNewQueenLineBtnLabel' => 'Add new queen line',
    'deleteQueenLineTooltip' => 'Delete this queen line',
    'deleteQueenLineInfoTooltip' => 'This line is alone or has at least one existing queen in our system. Therefore we cannot delete it. Instead, you can deactivate it, and it won\'t be visible in our application.',
    'apiarySettingsPageTitle' => 'Apiary settings',
    'apiarySettingsSubtitle' => 'You can manage your apiary settings here.',
    'apiaryCardTitle' => 'Main settings',
    'globalEfficiencyLabel' => 'Global efficiency',
    'globalEfficiencyHint' => 'Global efficiency is used when locations efficiency cannot be yet calculated.',
    'seriesEfficiencyLabel' => 'Series efficiency',
    'seriesIsolationEfficiencyLabel' => 'Series isolation efficiency',
    'seriesBornEfficiencyLabel' => 'Series born efficiency',
    'seriesEfficiencyHint' => 'Series efficiency is used for prognosis calculation - as initial value.',
    'updatedSuccess' => 'Settings were updated successfully',

    'invoice' => [
        'title' => 'Invoicing',
        'cardTitle' => 'Invoicing details',
        'cardSubTitle' => 'We need your invoicing data if you want to receive invoice for purchases in our application. Your company data will be also used in documents created for your customers.',
        'inputAddressStreetLabel' => 'Street',
        'inputAddressBuildingNumberLabel' => 'Building number',
        'inputAddressApartmentNumberLabel' => 'Apartment number',
        'inputAddressPostCodeLabel' => 'Postal code',
        'inputAddressCityLabel' => 'City',
        'companyNameLabel' => 'Company name',
        'inputVatNumberLabel' => 'VAT number',
        'inputVatNumberShortLabel' => 'VAT',
        'noInvoiceDataWarning' => 'Invoicing data incomplete',
        'nrbLabel' => 'Bank account',
        'is_exempt_from_tax' => 'Apiary subjectively exempt from VAT',
        'tax_exempt_title' => 'Subjective exemption from VAT',
        'exempt_reason' => 'Legal basis of exemption',
        'exempt_reason_on_invoice' => 'The legal basis for the exemption stated on the invoice',
        'exempt_reason_on_invoice_info' => 'Leave blank if you do not want to include the legal basis on the invoice.',
        'exemptReasonsType' => [
            'company_type' => 'due to the type of activity (Article 43(1) of the VAT Act)',
            'ordinance' => 'exemption under the Regulation of the Minister of Finance (Article 82(3) of the VAT Act)',
            'turnover_limit' => 'exemption due to turnover not exceeding PLN 200,000 (Article 113 paragraphs 1 and 9 of the VAT Act)',
            'other_legal' => 'other legal basis',
        ],
        'exemptReasonOnInvoice' => [
            'company_type' => 'exemption due to the scope of performed activities (Article 43(1))',
            'ordinance' => 'exemption due to specific provisions (Article 82(3))',
            'turnover_limit' => 'exemption due to not exceeding the sales value limit in the previous tax year (Article 113 paragraphs 1 and 9)',
            'other_legal' => '',
        ],
        'descriptionType' => [
            'title' => 'Automatic description in invoice',
            'tooltip' => 'By default we are adding a description with queen line name to the product on the invoice. You can change the default behaviour here.',
            'queen_line' => 'Queen line',
            'none' => 'Disabled',
        ],
        'defaults' => [
            'title' => 'Additional settings',
            'dueDate' => [
                'label' => 'Field: Due date',
                'tooltip' => 'By default due date is set the same as invoice issue date.',
                'null' => '--',
                '7' => '+7 days',
                '14' => '+14 days',
                '31' => '+1 month',
            ],
            'paid' => [
                'label' => 'Field: Paid',
                'tooltip' => 'By default paid is set to "Not paid". This setting may be overridden by information coming from the order.',
                'not_paid' => 'Not paid',
                'paid' => 'Paid',
            ],
            'paymentType' => [
                'label' => 'Field: Payment type',
                'tooltip' => 'By default payment type is set to empty. This setting may be overridden by information coming from the selected shipment in the order. Please check Settings > Orders > Shipments for more details.',
            ],
        ],
    ],
    'contact' => [
        'cardTitle' => 'Contact details',
        'cardSubTitle' => 'Your contact data is optional. We use it in many functionalities, especially in customer-related documents.',
        'inputContactEmailLabel' => 'Email',
        'inputContactPhoneLabel' => 'Phone number',
    ],
    'apiaryLogo' => [
        'cardTitle' => 'Apiary logo',
        'cardSubTitle' => 'You can upload your customized apiary logotype. We can use it in generated pdf files and in application layout.',
        'uploadForm' => [
            'cardTitle' => 'Upload new logo',
            'cardSubTitle' => 'File restrictions: size max 500kB, format: png, jpg, jpeg.',
            'inputFile' => 'Choose file',
        ],
    ],
    'unions' => [
        'addFilesDisabledInfo' => 'Adding files is possible only in edit mode. Please add union first and open it for editing to add files.',
        'unionFiles' => 'Attached union files (:value)',
        'showInactive' => 'Show inactive',
        'ordersCount' => 'Orders count',
    ],
];
