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

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'The :attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'The :attribute field is required.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute has already been taken.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'The :attribute format is invalid.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'A11' => 'A1-1',
        'A12' => 'A1-2',
        'A13' => 'A1-3',
        'A14' => 'A1-4',
        'A15' => 'A1-5',
        'A16' => 'A1-6',
        'A17' => 'A1-7',
        'A18' => 'A1-8',
        'A19' => 'A1-9',
        'A110' => 'A1-10',
        'A21' => 'A2-1',
        'A22' => 'A2-2',
        'A23' => 'A2-3',
        'A24' => 'A2-4',
        'A25' => 'A2-5',
        'A26' => 'A2-6',
        'A27' => 'A2-7',
        'A28' => 'A2-8',
        'A29' => 'A2-9',
        'A210' => 'A2-10',
        'A31' => 'A3-1',
        'A32' => 'A3-2',
        'A33' => 'A3-3',
        'A34' => 'A3-4',
        'A35' => 'A3-5',
        'A36' => 'A3-6',
        'A37' => 'A3-7',
        'A38' => 'A3-8',
        'A39' => 'A3-9',
        'A310' => 'A3-10',
        'A41' => 'A4-1',
        'A42' => 'A4-2',
        'A43' => 'A4-3',
        'A44' => 'A4-4',
        'A45' => 'A4-5',
        'A46' => 'A4-6',
        'A47' => 'A4-7',
        'A48' => 'A4-8',
        'A49' => 'A4-9',
        'A410' => 'A4-10',
        'A51' => 'A5-1',
        'A52' => 'A5-2',
        'A53' => 'A5-3',
        'A54' => 'A5-4',
        'A55' => 'A5-5',
        'A56' => 'A5-6',
        'A57' => 'A5-7',
        'A58' => 'A5-8',
        'A59' => 'A5-9',
        'A510' => 'A5-10',
        'A61' => 'A6-1',
        'A62' => 'A6-2',
        'A63' => 'A6-3',
        'A64' => 'A6-4',
        'A65' => 'A6-5',
        'A66' => 'A6-6',
        'A67' => 'A6-7',
        'A68' => 'A6-8',
        'A69' => 'A6-9',
        'A610' => 'A6-10',
        'A71' => 'A7-1',
        'A72' => 'A7-2',
        'A73' => 'A7-3',
        'A74' => 'A7-4',
        'A75' => 'A7-5',
        'A76' => 'A7-6',
        'A77' => 'A7-7',
        'A78' => 'A7-8',
        'A79' => 'A7-9',
        'A710' => 'A7-10',
        'A81' => 'A8-1',
        'A82' => 'A8-2',
        'A83' => 'A8-3',
        'A84' => 'A8-4',
        'A85' => 'A8-5',
        'A86' => 'A8-6',
        'A87' => 'A8-7',
        'A88' => 'A8-8',
        'A89' => 'A8-9',
        'A810' => 'A8-10',
        'A91' => 'A9-1',
        'A92' => 'A9-2',
        'A93' => 'A9-3',
        'A94' => 'A9-4',
        'A95' => 'A9-5',
        'A96' => 'A9-6',
        'A97' => 'A9-7',
        'A98' => 'A9-8',
        'A99' => 'A9-9',
        'A910' => 'A9-10',
        'A101' => 'A10-1',
        'A102' => 'A10-2',
        'A103' => 'A10-3',
        'A104' => 'A10-4',
        'A105' => 'A10-5',
        'A106' => 'A10-6',
        'A107' => 'A10-7',
        'A108' => 'A10-8',
        'A109' => 'A10-9',
        'A1010' => 'A10-10'
    ],

];
