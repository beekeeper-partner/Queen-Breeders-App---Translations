<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute må godtas.',
    'accepted_if' => ':attribute må godtas når :other is :value.',
    'active_url' => ':attribute er ikke en gyldig URL.',
    'after' => ':attribute må være en dato etter :date.',
    'after_or_equal' => ':attribute må være en dato etter eller lik :date.',
    'alpha' => ':attribute må kun inneholde bokstaver.',
    'alpha_dash' => ':attribute må kun inneholde bokstaver, tall, bindestreker og underskår.',
    'alpha_num' => ':attribute må kun inneholde bokstaver og tall.',
    'array' => ':attribute må være en matrise.',
    'before' => ':attribute må være en dato før :date.',
    'before_or_equal' => ':attribute må være en dato før eller lik :date.',
    'between' => [
        'numeric' => ':attribute må være mellom :min and :max.',
        'file' => ':attribute må være mellom :min and :max kilobytes.',
        'string' => ':attribute må være mellom :min and :max characters.',
        'array' => ':attribute må ha mellom:min and :max items.',
    ],
    'boolean' => ':attribute feltet må være sant eller usant.',
    'confirmed' => ':attribute bekreftelsen stemmer ikke.',
    'consent' => 'Dette feltet er obligatorisk, merk av for å fortsette.',
    'current_password' => 'Passordet er feil.',
    'date' => ':attribute er ikke en gyldig dato.',
    'date_equals' => ':attribute må være en dato lik :date.',
    'date_format' => ':attribute samsvarer ikke med formatet :format.',
    'different' => ':attribute og :other må være annerledes.',
    'digits' => 'The :attribute må være:digits digits.',
    'digits_between' => ':attribute må være mellom :min and :max digits.',
    'dimensions' => ':attribute har ugyldige bildedimensjoner.',
    'distinct' => ':attribute feltet har en duplikatverdi.',
    'email' => 'E-postadressen må være gyldig',
    'email_dns_exists' => 'Domenet til e-postadressen svarer ikke, vennligst valider og prøv igjen',
    'ends_with' => ':attribute må avsluttes med ett av følgende: :values.',
    'exists' => 'Den valgte :attribute er ugyldig.',
    'file' => ':attribute må være en fil.',
    'filled' => 'Feltet kan ikke være tomt.',
    'gt' => [
        'numeric' => 'Verdien må være større enn :value.',
        'file' => ':attribute må være større enn:value kilobytes.',
        'string' => 'Den angitte verdien må ha en lengde på minst :value tegn.',
        'array' => ':attribute må ha mer enn:value gjenstander.',
    ],
    'gte' => [
        'numeric' => 'Verdien må være større enn eller lik :value.',
        'file' => ':attribute må være større enn eller lik :value kilobytes.',
        'string' => 'Lengden på den angitte verdien må være større enn eller lik :value tegn.',
        'array' => ':attribute må ha :value varer eller flere.',
    ],
    'image' => ':attribute må være et bilde.',
    'in' => 'Den valgte :attribute er ugyldig.',
    'in_array' => ':attribute feltet finnes ikke i :other.',
    'integer' => 'Verdien må være et heltall.',
    'ip' => ':attribute må være en gyldig IP-adresse.',
    'ipv4' => ':attribute må være en gyldig IPv4-adresse.',
    'ipv6' => ':attribute må være en gyldig IPv6-adresse.',
    'json' => ':attribute må være en gyldig JSON-streng.',
    'longer_than_3' => 'Skriv inn minst 3 bokstaver',
    'longer_than_2_queens' => 'Vennligst skriv inn minst 2 bokstaver i linjenavnet',
    'longer_than_2' => 'Skriv inn minst 2 bokstaver',
    'lt' => [
        'numeric' => ':attribute må være mindre enn :value.',
        'file' => 'Filstørrelsen må være mindre enn :value kB.',
        'fileMb' => 'Filstørrelsen må være mindre enn:value mB.',
        'string' => ':attribute må være mindre enn :value tegn.',
        'array' => ':attribute må ha mindre enn :value gjenstander.',
    ],
    'lte' => [
        'numeric' => 'Verdien kan ikke være større enn :value.',
        'file' => ':attribute må være mindre enn eller lik :value kilobytes.',
        'string' => 'Den angitte verdien kan ikke være lengre enn :value tegn.',
        'array' => ':attribute må ikke ha mer enn :value gjenstander.',
    ],
    'max' => [
        'numeric' => ':attribute kan ikke være større enn:max.',
        'file' => ':attribute må ikke være større enn :max kilobytes.',
        'string' => ':attributemå ikke være større enn :max characters.',
        'array' => ':attribute må ikke ha mer enn :max items.',
    ],
    'mimes' => ':attribute må være en fil av typen: :values.',
    'mimetypes' => ':attribute må være en fil av typen: :values.',
    'min' => [
        'numeric' => ':attribute må være minst :min.',
        'file' => ':attribute må være minst:min kilobytes.',
        'string' => ':attribute må være minst :min characters.',
        'array' => ':attribute må ha minst :min items.',
    ],
    'multiple_of' => ':attribute må være et multiplum av :value.',
    'name_exists' => 'That name is already taken in that view.',
    'code_exists' => 'Code already in use.',
    'not_in' => 'valgt :attribute er ugyldig.',
    'negative' => 'Verdien kan ikke være negativ.',
    'not_regex' => ':attribute formatet er ugyldig.',
    'numeric' => ':attribute må være et tall.',
    'password' => 'Passordet er feil.',
    'present' => ':attribute felt må være tilstede.',
    'regex' => ':attribute formatet er ugyldig.',
    'required' => ':attribute Feltet er påkrevet.',
    'required_if' => ':attribute felt er obligatorisk når:other is :value.',
    'required_unless' => ':attribute felt er obligatorisk med mindre:other er andre :values.',
    'required_with' => ':attribute felt er obligatorisk når :values er tilstede.',
    'required_with_all' => ':attribute felt er obligatorisk når :values er tilstede.',
    'required_without' => ':attribute felt er obligatorisk når :values er ikke tilstede.',
    'required_without_all' => ':attribute felt er obligatorisk når ingen av :values er tilstede.',
    'prohibited' => ':attribute felt er forbudt.',
    'prohibited_if' => ':attribute feltet er forbudt når :other is :value.',
    'prohibited_unless' => ':attribute felt er forbudt med mindre:other er andre :values.',
    'same' => ':attribute og :other må samsvare.',
    'serieOnBatchValidationError' => 'Grensen for dronninger (:sum) fra den valgte serien (:value) Det er overskredet.',
    'size' => [
        'numeric' => ':attribute må være :size.',
        'file' => ':attribute må være :size kilobytes.',
        'string' => ':attributemå være :size characters.',
        'array' => ':attribute må inneholde :size items.',
    ],
    'starts_with' => ':attribute må starte med ett av følgende: :values.',
    'string' => ':attribute må være en streng.',
    'timezone' => ':attribute må være en gyldig tidssone.',
    'unique' => ':attribute har allerede blitt tatt.',
    'uploaded' => ':attribute kunne ikke laste opp.',
    'url' => ':attribute må være en gyldig URL.',
    'uuid' => ':attribute må være en gyldig UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
