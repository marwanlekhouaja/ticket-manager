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

    'accepted' => 'Le :attribute doit être accepté.',
    'accepted_if' => 'Le :attribute doit être accepté lorsque :other est :value.',
    'active_url' => 'Le :attribute doit être une URL valide.',
    'after' => 'Le :attribute doit être une date après :date.',
    'after_or_equal' => 'Le :attribute doit être une date après ou égale à :date.',
    'alpha' => 'Le :attribute doit contenir uniquement des lettres.',
    'alpha_dash' => 'Le :attribute doit contenir uniquement des lettres, des chiffres, des tirets et des underscores.',
    'alpha_num' => 'Le :attribute doit contenir uniquement des lettres et des chiffres.',
    'array' => 'Le :attribute doit être un tableau.',
    'ascii' => 'Le :attribute doit contenir uniquement des caractères alphanumériques et des symboles d\'un seul octet.',
    'before' => 'Le :attribute doit être une date avant :date.',
    'before_or_equal' => 'Le :attribute doit être une date avant ou égale à :date.',
    'between' => [
        'array' => 'Le :attribute doit avoir entre :min et :max éléments.',
        'file' => 'Le :attribute doit être entre :min et :max kilo-octets.',
        'numeric' => 'Le :attribute doit être entre :min et :max.',
        'string' => 'Le :attribute doit être entre :min et :max caractères.',
    ],
    'boolean' => 'Le :attribute doit être vrai ou faux.',
    'can' => 'Le :attribute contient une valeur non autorisée.',
    'confirmed' => 'La confirmation du :attribute ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => 'Le :attribute doit être une date valide.',
    'date_equals' => 'Le :attribute doit être une date égale à :date.',
    'date_format' => 'Le :attribute doit correspondre au format :format.',
    'decimal' => 'Le :attribute doit avoir :decimal chiffres décimaux.',
    'declined' => 'Le :attribute doit être refusé.',
    'declined_if' => 'Le :attribute doit être refusé lorsque :other est :value.',
    'different' => 'Le :attribute et :other doivent être différents.',
    'digits' => 'Le :attribute doit avoir :digits chiffres.',
    'digits_between' => 'Le :attribute doit être entre :min et :max chiffres.',
    'dimensions' => 'Le :attribute a des dimensions d\'image invalides.',
    'distinct' => 'Le :attribute a une valeur en double.',
    'doesnt_end_with' => 'Le :attribute ne doit pas se terminer par l\'un des éléments suivants : :values.',
    'doesnt_start_with' => 'Le :attribute ne doit pas commencer par l\'un des éléments suivants : :values.',
    'email' => 'Le :attribute doit être une adresse e-mail valide.',
    'ends_with' => 'Le :attribute doit se terminer par l\'un des éléments suivants : :values.',
    'enum' => 'La valeur sélectionnée pour :attribute est invalide.',
    'exists' => 'La valeur sélectionnée pour :attribute est invalide.',
    'extensions' => 'Le :attribute doit avoir l\'une des extensions suivantes : :values.',
    'file' => 'Le :attribute doit être un fichier.',
    'filled' => 'Le :attribute doit avoir une valeur.',
    'gt' => [
        'array' => 'Le :attribute doit avoir plus de :value éléments.',
        'file' => 'Le :attribute doit être supérieur à :value kilo-octets.',
        'numeric' => 'Le :attribute doit être supérieur à :value.',
        'string' => 'Le :attribute doit être supérieur à :value caractères.',
    ],
    'gte' => [
        'array' => 'Le :attribute doit avoir :value éléments ou plus.',
        'file' => 'Le :attribute doit être supérieur ou égal à :value kilo-octets.',
        'numeric' => 'Le :attribute doit être supérieur ou égal à :value.',
        'string' => 'Le :attribute doit être supérieur ou égal à :value caractères.',
    ],
    'hex_color' => 'Le :attribute doit être une couleur hexadécimale valide.',
    'image' => 'Le :attribute doit être une image.',
    'in' => 'La valeur sélectionnée pour :attribute est invalide.',
    'in_array' => 'Le :attribute doit exister dans :other.',
    'integer' => 'Le :attribute doit être un entier.',
    'ip' => 'Le :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le :attribute doit être une chaîne JSON valide.',
    'lowercase' => 'Le :attribute doit être en minuscule.',
    'lt' => [
        'array' => 'Le :attribute doit avoir moins de :value éléments.',
        'file' => 'Le :attribute doit être inférieur à :value kilo-octets.',
        'numeric' => 'Le :attribute doit être inférieur à :value.',
        'string' => 'Le :attribute doit être inférieur à :value caractères.',
    ],
    'lte' => [
        'array' => 'Le :attribute ne doit pas avoir plus de :value éléments.',
        'file' => 'Le :attribute doit être inférieur ou égal à :value kilo-octets.',
        'numeric' => 'Le :attribute doit être inférieur ou égal à :value.',
        'string' => 'Le :attribute doit être inférieur ou égal à :value caractères.',
    ],
    'mac_address' => 'Le :attribute doit être une adresse MAC valide.',
    'max' => [
        'array' => 'Le :attribute ne doit pas avoir plus de :max éléments.',
        'file' => 'Le :attribute ne doit pas dépasser :max kilo-octets.',
        'numeric' => 'Le :attribute ne doit pas être supérieur à :max.',
        'string' => 'Le :attribute ne doit pas dépasser :max caractères.',
    ],
    'max_digits' => 'Le :attribute

 ne doit pas avoir plus de :max chiffres.',
    'mimes' => 'Le :attribute doit être un fichier de type : :values.',
    'mimetypes' => 'Le :attribute doit être un fichier de type : :values.',
    'min' => [
        'array' => 'Le :attribute doit avoir au moins :min éléments.',
        'file' => 'Le :attribute doit être au moins de :min kilo-octets.',
        'numeric' => 'Le :attribute doit être au moins :min.',
        'string' => 'Le :attribute doit être d\'au moins :min caractères.',
    ],
    'min_digits' => 'Le :attribute doit avoir au moins :min chiffres.',
    'missing' => 'Le :attribute doit être manquant.',
    'missing_if' => 'Le :attribute doit être manquant lorsque :other est :value.',
    'missing_unless' => 'Le :attribute doit être manquant sauf si :other est :value.',
    'missing_with' => 'Le :attribute doit être manquant lorsque :values est présent.',
    'missing_with_all' => 'Le :attribute doit être manquant lorsque :values est présent.',
    'multiple_of' => 'Le :attribute doit être un multiple de :value.',
    'not_in' => 'La valeur sélectionnée pour :attribute est invalide.',
    'not_regex' => 'Le format du :attribute est invalide.',
    'numeric' => 'Le :attribute doit être un nombre.',
    'password' => [
        'letters' => 'Le :attribute doit contenir au moins une lettre.',
        'mixed' => 'Le :attribute doit contenir au moins une lettre majuscule et une lettre minuscule.',
        'numbers' => 'Le :attribute doit contenir au moins un chiffre.',
        'symbols' => 'Le :attribute doit contenir au moins un symbole.',
        'uncompromised' => 'Le :attribute donné est apparu dans une fuite de données. Veuillez choisir un autre :attribute.',
    ],
    'present' => 'Le :attribute doit être présent.',
    'present_if' => 'Le :attribute doit être présent lorsque :other est :value.',
    'present_unless' => 'Le :attribute doit être présent sauf si :other est :value.',
    'present_with' => 'Le :attribute doit être présent lorsque :values est présent.',
    'present_with_all' => 'Le :attribute doit être présent lorsque :values est présent.',
    'prohibited' => 'Le :attribute est interdit.',
    'prohibited_if' => 'Le :attribute est interdit lorsque :other est :value.',
    'prohibited_unless' => 'Le :attribute est interdit sauf si :other est dans :values.',
    'prohibits' => 'Le :attribute interdit :other d\'être présent.',
    'regex' => 'Le format du :attribute est invalide.',
    'required' => 'Le :attribute est requis.',
    'required_array_keys' => 'Le :attribute doit contenir des entrées pour :values.',
    'required_if' => 'Le :attribute est requis lorsque :other est :value.',
    'required_if_accepted' => 'Le :attribute est requis lorsque :other est accepté.',
    'required_unless' => 'Le :attribute est requis sauf si :other est dans :values.',
    'required_with' => 'Le :attribute est requis lorsque :values est présent.',
    'required_with_all' => 'Le :attribute est requis lorsque :values est présent.',
    'required_without' => 'Le :attribute est requis lorsque :values n\'est pas présent.',
    'required_without_all' => 'Le :attribute est requis lorsque aucun de :values n\'est présent.',
    'same' => 'Le :attribute doit correspondre à :other.',
    'size' => [
        'array' => 'Le :attribute doit contenir :size éléments.',
        'file' => 'Le :attribute doit être de :size kilo-octets.',
        'numeric' => 'Le :attribute doit être de :size.',
        'string' => 'Le :attribute doit être de :size caractères.',
    ],
    'starts_with' => 'Le :attribute doit commencer par l\'un des éléments suivants : :values.',
    'string' => 'Le :attribute doit être une chaîne de caractères.',
    'timezone' => 'Le :attribute doit être un fuseau horaire valide.',
    'unique' => 'Le :attribute a déjà été pris.',
    'uploaded' => 'Le :attribute n\'a pas pu être téléchargé.',
    'uppercase' => 'Le :attribute doit être en majuscule.',
    'url' => 'Le :attribute doit être une URL valide.',
    'ulid' => 'Le :attribute doit être un ULID valide.',
    'uuid' => 'Le :attribute doit être un UUID valide.',

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
