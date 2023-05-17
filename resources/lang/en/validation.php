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

    'accepted' => 'O :attribute deve ser aceite.',
    'accepted_if' => 'O :attribute deve ser aceite quando :other is :value.',
    'active_url' => 'O :attribute is não é uma URL valído not a valid URL.',
    'after' => 'O :attribute deve ser uma date depois :date.',
    'after_or_equal' => 'O :attribute deve ser uma date depois or igual a :date.',
    'alpha' => 'O :attribute deve conter apenas letras.',
    'alpha_dash' => 'O :attribute deve conter apenas letras, números, traços e sublinhados.',
    'alpha_num' => 'O :attribute deve conter apenas letras e números.',
    'array' => 'O :attribute deve ser um array.',
    'before' => 'O :attribute deve ser uma date antes :date.',
    'before_or_equal' => 'O :attribute deve ser date antes ou igual a :date.',
    'between' => [
        'numeric' => 'O :attribute deve estar entre :min e :max.',
        'file' => 'O :attribute deve estar entre :min e :max kilobytes.',
        'string' => 'O :attribute deve estar entre :min e :max caracteres.',
        'array' => 'O :attribute deve estar entre :min e :max itens.',
    ],
    'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'O campo :attribute cconfirmação não coincide.',
    'current_password' => 'A senha está incorreta.',
    'date' => 'O campo :attribute não é uma data válida.',
    'date_equals' => 'O campo :attribute deve ser uma data igual a :date.',
    'date_format' => 'O campo :attribute não corresponde ao formato :format.',
    'declined' => 'O campo :attribute deve ser recusado.',
    'declined_if' => 'O campo :attribute deve ser recusado :other é :value.',
    'different' => 'O campo :attribute e :other devem ser diferentes.',
    'digits' => 'O campo :attribute deve ter:digits digitos.',
    'digits_between' => 'O campo :attribute deve ter entre :min e :max digitos.',
    'dimensions' => 'O campo :attribute possui dimensões de imagem inválidas.',
    'distinct' => 'O campo :attribute contém um valor duplicado.',
    'email' => 'O campo :attribute deve ser um endereço de e-mail válido.',
    'ends_with' => 'O campo :attribute deve terminar com um dos seguintes valoresselecionado: :values.',
    'enum' => 'O campo selecionado :attribute é inválido.',
    'exists' => 'O campo selecionado :attribute é inválido.',
    'file' => 'O campo :attribute deve ser um arquivo.',
    'filled' => 'O campo :attribute deve ter um valor',
    'gt' => [
        'numeric' => 'O campo :attribute deve ser maior que :value.',
        'file' => 'O campo :attribute deve ter mais que :value kilobytes.',
        'string' => 'O campo :attribute deve ter mais que :value characteres.',
        'array' => 'O campo :attribute deve ter mais que :value itens.',
    ],
    'gte' => [
        'numeric' => 'O campo :attribute deve ser maior ou igual que :value.',
        'file' => 'O campo :attribute deve ser maior ou igual que :value kilobytes.',
        'string' => 'O campo :attribute deve ser maior ou igual que :value characteres.',
        'array' => 'O campo :attribute deve ter :value itens ou mais.',
    ],
    'image' => 'O campo :attribute deve ser uma imagem.',
    'in' => 'O valor selecionado para :attribute é inválido.',
    'in_array' => 'O campo :attribute não existe em :other.',
    'integer' => 'O campo :attribute deve ser um inteiro.',
    'ip' => 'O campo :attribute deve ser um endereço IP válido.',
    'ipv4' => 'O campo :attribute deve ser um endereço IPv4 válido.',
    'ipv6' => 'O campo :attribute deve ser um endereço IPv6 válido.',
    'json' => 'O campo :attribute deve ser uma string JSON válida.',
    'lt' => [
        'numeric' => 'O campo :attribute não deve ter mais que :value.',
        'file' => 'O campo :attribute deve ter tamanho menor que :value kilobytes.',
        'string' => 'O campo :attribute deve ter tamanho menor que :value characterds.',
        'array' => 'O campo :attribute não deve ter menos que :value itens.',
    ],
    'lte' => [
        'numeric' => 'O campo :attribute deve ser menor ou igual a :value.',
        'file' => 'O campo :attribute deve ter tamanho menor ou igual a :value kilobytes.',
        'string' => 'O campo :attribute deve ter tamanho menor ou igual a :value characters.',
        'array' => 'O campo :attribute não deve ter mais que :value itens.',
    ],
    'mac_address' => 'O campo :attribute deve ser um endereço MAC válido.',
    'max' => [
        'numeric' => 'O campo :attribute não deve ser maior que :max.',
        'file' => 'O campo :attribute não deve ter tamanho maior que :max kilobytes.',
        'string' => 'O campo :attribute não deve ter tamanho maior que :max characteres.',
        'array' => 'O campo :attribute não deve ter mais que :max items.',
    ],
    'mimes' => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O campo :attribute deve ser no mínimo :min.',
        'file' => 'O campo :attribute deve ter tamanho mínimo de :min kilobytes.',
        'string' => 'O campo :attribute deve ter tamanho mínimo de :min characteres.',
        'array' => 'O campo :attribute deve ter no mínimodeve ter no mínimo :min items.',
    ],
    'multiple_of' => 'O campo :attribute deve ser um múltiplo de :value.',
    'not_in' => 'O valor selecionado para :attribute é inválido.',
    'not_regex' => 'O formato do campo :attribute format é inválido.',
    'numeric' => 'O campo :attribute deve ser um número.',
    'password' => 'A senha está incorreta.',
    'present' => 'O campo :attribute deve estar presente.',
    'prohibited' => 'O campo :attribute é proibido.',
    'prohibited_if' => 'O campo :attribute é proibido quando :other is :value.',
    'prohibited_unless' => 'O campo :attribute é proibido a menos que :other is in :values.',
    'prohibits' => 'O campo :attribute field proíbe :other de estar presente.',
    'regex' => 'O formato do campo :attribute format é inválido.',
    'required' => 'O campo :attribute field é obrigatório.',
    'required_array_keys' => 'O campo :attribute deve conter entradas para: :values.',
    'required_if' => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless' => 'O campo :attribute é obrigatório a menos que :other esteja em :values.',
    'required_with' => 'O campo :attribute field is required when :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values estão presentes.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando none of :values estão presentes.',
    'same' => 'O campo :attribute e :other devem ser iguais.',
    'size' => [
        'numeric' => 'O campo :attribute deve ser :size.',
        'file' => 'O campo :attribute deve ter tamanho :size kilobytes.',
        'string' => 'O campo :attribute deve ter tamanho :size characteres.',
        'array' => 'O campo :attribute deve conterO campo :size itens.',
    ],
    'starts_with' => 'O campo :attribute deve começar com um dos seguintes valores: :values.',
    'string' => 'O campo :attribute deve ser uma string.',
    'timezone' => 'O campo :attribute deve ser um fuso horário válido.',
    'unique' => 'O campo :attribute já está sendo utilizado.',
    'uploaded' => 'Falha ao fazer upload do arquivo :attribute .',
    'url' => 'O campo :attribute deve ser uma URL válida.',
    'uuid' => 'O campo :attribute deve ser um UUID válido.',

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
