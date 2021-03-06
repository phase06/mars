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
    'accepted' => 'Necesse est tibi acceptare hoc: :attribute.',
    'active_url' => ':attribute non URL idoneum est.',
    'after' => ':attribute necesse est unum datum esse post :date.',
    'after_or_equal' => ':attribute necesse est unum datum post :date aut hoc aequum esse.',
    'alpha' => ':attribute potest solis ex literis constare.',
    'alpha_dash' => ':attribute potest solis ex literis, numeris, signo cogitandi et circumlito constare.',
    'alpha_num' => ':attribute potest solis ex literis et numeris constare.',
    'array' => ':attribute necesse est una multitudo esse.',
    'before' => ':attribute necesse est unum datum esse ante :date.',
    'before_or_equal' => ':attribute necesse est unum datum ante :date aut hoc aequum esse.',
    'between' => [
        'numeric' => 'inter :min et :max necesse est hoc esse: :attribute.',
        'file' => 'inter :min kB et :max kB necesse est hoc esse: :attribute.',
        'string' => 'Minimo :min et maximo :max ex characteribus potest hoc constare: :attribute.',
        'array' => 'Minimo :min et maximo :max ex rebus potest hoc constare: :attribute.',
    ],
    'boolean' => 'Ager :attribute potest solum verum aut falsum esse.',
    'confirmed' => ':attribute confirmatio impar est.',
    'date' => ':attribute non est datum idoneum.',
    'date_equals' => ':attribute necesse est datum hoc aequum esse: :date.',
    'date_format' => ':attribute impar est hac facie: :format.',
    'different' => 'Necesse est haec pretia imparia esse: :attribute et :other.',
    'digits' => 'Necesse est :digits characteres numeri esse in hoc: :attribute.',
    'digits_between' => 'Minimo :min et maximo :max characteres numeri possunt esse in hoc: :attribute.',
    'dimensions' => 'Dimensiones huius imaginis non sunt idoneae: :attribute.',
    'distinct' => 'Ager :attribute habet pretium iterativum.',
    'email' => 'Necesse est :attribute e-mail nominem idoneum esse.',
    'ends_with' => 'Necesse est huius :attribute pretium duci uno ex his pretibus: :values',
    'exists' => 'Lectum :attribute non est idoneum.',
    'file' => 'Necesse est hoc unum filum esse: :attribute.',
    'filled' => ':attribute agrum necesse est unum pretium habere.',
    'gt' => [
        'numeric' => 'Necesse est :attribute maius esse, quam :value.',
        'file' => 'Necesse est :attribute filum maius esse, quam :value kB.',
        'string' => 'Necesse est :attribute textum plures characteres habere, quam :value.',
        'array' => 'Necesse est :attribute multitudo ex pluribus rebus constare, quam :value.',
    ],
    'gte' => [
        'numeric' => 'Huius :attribute pretium potest minimo :value habere.',
        'file' => 'Necesse est :attribute minimo :value kB esse.',
        'string' => ':attribute potest minimo ex :value characteribus constare.',
        'array' => ':attribute potest minimo :value ex rebus constare.',
    ],
    'image' => 'Necesse est imaginem esse: :attribute.',
    'in' => 'Lectum :attribute non est ideoneum.',
    'in_array' => ':attribute non est in: :other.',
    'integer' => ':attribute pretium necesse est numerum integrum esse.',
    'ip' => 'Necesse est :attribute pretium idoneum IP nominem esse.',
    'ipv4' => 'Necesse est :attribute pretium idoneum IPv4 nominem esse.',
    'ipv6' => 'Necesse est :attribute pretium idoneum IPv6 nominem esse.',
    'json' => 'Necesse est huius :attribute pretium idoneum JSON textum esse.',
    'lt' => [
        'numeric' => 'Huius :attribute pretium necesse est minus esse, quam :value.',
        'file' => 'Necesse est :attribute filum minus esse, quam :value kB.',
        'string' => 'Necesse est :attribute textum pauciores characteres habere, quam :value.',
        'array' => 'Necesse est :attribute multitudinem pauciores res habere, quam :value.',
    ],
    'lte' => [
        'numeric' => 'Huius :attribute pretium potest maximo :value habere.',
        'file' => 'Necesse est :attribute maximo :value kB esse.',
        'string' => ':attribute potest maximo ex :value characteribus constare.',
        'array' => ':attribute potest maximo :value ex rebus constare.',
    ],
    'max' => [
        'numeric' => 'Huius :attribute pretium potest maximo :value habere.',
        'file' => 'Necesse est :attribute maximo :value kB esse.',
        'string' => ':attribute potest maximo ex :value characteribus constare.',
        'array' => ':attribute potest maximo :value ex rebus constare.',
    ],
    'mimes' => ':attribute filum necesse est hac facie esse: :values.',
    'mimetypes' => ':attribute filum necesse est hac facie esse: :values.',
    'min' => [
        'numeric' => 'Huius :attribute pretium potest minimo :value habere.',
        'file' => 'Necesse est :attribute minimo :value kB esse.',
        'string' => ':attribute potest minimo ex :value characteribus constare.',
        'array' => ':attribute potest minimo :value ex rebus constare.',
    ],
    'not_in' => 'Lectum :attribute non est idoneum.',
    'not_regex' => 'Huius :attribute facies non est ideonea.',
    'numeric' => 'Necesse est numerum esse: :attribute.',
    'present' => 'Necesse est :attribute agrum adesse.',
    'regex' => 'Huius :attribute facies non est ideonea.',
    'required' => 'Necesse est :attribute agrum tibi complere.',
    'required_if' => 'Necesse est :attribute agrum tibi complere, si :other :value.',
    'required_unless' => 'Necesse est :attribute agrum tibi complere, paeter si :other inest in: :values.',
    'required_with' => 'Necesse est :attribute agrum tibi complere, si :values adest.',
    'required_with_all' => 'Necesse est :attribute agrum tibi complere, si :values adsunt.',
    'required_without' => 'Necesse est :attribute agrum tibi complere, si :values non adsunt.',
    'required_without_all' => 'Necesse est :attribute agrum tibi complere, si nihil adest ex :values.',
    'same' => ':attribute et :other necesse est par esse.',
    'size' => [
        'numeric' => 'Huius :attribute pretium non :size est!',
        'file' => ':attribute imago non :size kB est!.',
        'string' => ':attribute textum non est :size characteribus longum!.',
        'array' => 'Necesse est :attribute multitudinem :size ex rebus constare!.',
    ],
    'starts_with' => 'Necesse est :attribute duci uno ex his: :values',
    'string' => 'Necesse est :attribute textum esse.',
    'timezone' => 'Necese est :attribute datum idoneum esse.',
    'unique' => ':attribute iam occupatum est.',
    'uploaded' => ':attribute implere incassum est.',
    'url' => 'Facies huius :attribute non idonea est.',
    'uuid' => ':attribute non est UUID idoneum!',
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
