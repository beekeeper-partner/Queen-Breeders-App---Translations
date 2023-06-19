<?php
return [
    'createBtnLabel' => "Create invoice for this shipment",
    'page' => [
        'title' => 'Invoices',
        'subTitle' => 'You can review the invoices added to your orders here. If you need to create a new invoice, please use the button in the bottom right corner.',
        'addNewInvoiceBtn' => 'Add new invoice',
        'featureNotAvailable' => [
            'title' => 'Stop loosing time on creating invoices in separate app!',
            'text' => '<p>Did you know that you can create invoices directly from our application?<br/>With a matter of few seconds you can add an invoice to your order and give it to your client. Do not hesitate and check our <strong>Invoice add-on!</strong></p>',
        ],
    ],
    'order' => [
        'title' => 'Invoices created fot this shipment',
    ],
    'table' => [
        'cannotEditTooltip' => 'Edit is disabled because actual month is different than invoice month.',
        'expand' => [
            'title' => 'Invoice',
            'index' => '#',
        ],
        'noDataText' => 'There are no invoices added in our app. Please add the first one to continue.',
        'invoice_paid' => 'Invoice paid at: :date',
        'invoice_not_paid' => 'Invoice awaits for payment',
    ],
    'modal' => [
        'title_add' => 'Add new invoice',
        'title_edit' => 'Edit invoice',
        'saveSuccessMessage' => 'Invoice was successfully added to the shipment.',
        'saveBtnForEditedItemBlocked' => 'Fill in title, quantity, unit and price per unit to save.',
        'deleteBtnInfo' => 'There is a newer invoice in our system, this cannot be deleted.',
        'paidAt' => [
            'title' => 'Mark invoices as paid',
            'subtitle' => 'Choose payment date and mark as paid invoices: :invoiceTitles',
        ],
    ],
    'form' => [
        'number' => 'Invoice number',
        'number_hint' => 'We automatically generate the invoice number from the date and previously added invoices in our system. If you want to skip some numbers, please go to the Invoices panel and add a blank invoice.',
        'issued_at' => 'Date of issue',
        'sold_at' => 'Date of sale',
        'paid_at' => 'Paid at',
        'number_short' => 'No',
        'notes' => 'Notes',
        'payment_due_date' => 'Payment due date',
        'is_paid' => 'Invoiced paid',
        'seller' => [
            'title' => 'Seller',
            'name' => 'Company name',
            'address' => 'Address',
            'vat' => 'VAT No',
            'phone' => 'Contact phone',
            'custom_fields' => [
                'email' => 'Contact e-mail',
                'bank_account' => 'Bank account',
            ],
        ],
        'buyer' => [
            'title' => 'Buyer',
            'name' => 'Name',
            'address' => 'Address',
        ],
        'options' => [
            'title' => 'Additional options',
        ],
        'payment' => [
            'title' => 'Payment',
        ],
        'products' => [
            'name' => 'Product or service name', //Nazwa towaru lub usługi
            'description' => 'Additional description', //Nazwa towaru lub usługi
            'count' => 'Quantity',
            'unit' => 'Unit',
            'singular_net_price' => 'Net unit price',
            'singular_gross_price' => 'Unit price',
            'net_sum' => 'Net value',
            'gross_value' => 'Gross value',
            'value' => 'Value',
            'vat' => 'Tax',
            'tax_rate' => 'Tax rate',
        ],
        'productsInInvoiceTitle' => 'Products in invoice',
        'productsInOrderTitle' => 'Ordered products',
        'bank_account' => 'bank account',
        'date' => 'Date of issue',
        'addToIncludedTooltip' => 'Add to invoice',
        'addDuplicatedToIncludedTooltip' => 'Duplicate in invoice',
        '404IncludedDetailsSubtitle' => 'There are no products added to invoice yet. Use order products list below or add an empty row to start.',
        'addShipmentRowToTable' => 'Add shipment from the order',
        'addProductsToTable' => 'Add all products from order',
    ],
    'gross' => 'Gross',
    'fileName' => 'Invoice',
    'daily' => [
        'btnTooltip' => 'Download all invoices',
        'bulkFileName' => 'invoices_breeder_app_:day_downloaded_at_:created_at.pdf',
        'errors' => [
            'no_invoices_to_download' => 'No invoice generated for this day'
        ],
        'markAsPaid' => 'Mark as paid',
    ],
    'multibar' => [
        'selectedCount' => 'Selected invoices: :value',
        'successMsg' => 'Selected invoices were updated successfully',
        'actions' => [
            'label' => 'Select action',
            'markAsPaid' => 'Mark as paid',
            'contactUsWhatsapp' => 'Tell us more what you want to see here (WhatsApp chat)',
        ],
    ],
];
