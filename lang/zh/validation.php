<?php

return [
    /*
    |--------------------------------------------------------------------------
    | 驗證語言行
    |--------------------------------------------------------------------------
    |
    | 以下語言行包含由驗證器類使用的預設錯誤消息。
    | 一些規則有多個版本，如大小規則。您可以自由調整這些消息。
    |
    */

    'accepted' => ':attribute 必須被接受。',
    'accepted_if' => ':attribute 必須在 :other 為 :value 時被接受。',
    'active_url' => ':attribute 必須是一個有效的網址。',
    'after' => ':attribute 必須是 :date 之後的一個日期。',
    'after_or_equal' => ':attribute 必須是 :date 或之後的一個日期。',
    'alpha' => ':attribute 只能包含字母。',
    'alpha_dash' => ':attribute 只能包含字母、數字、破折號和下劃線。',
    'alpha_num' => ':attribute 只能包含字母和數字。',
    'array' => ':attribute 必須是一個陣列。',
    'ascii' => ':attribute 只能包含單字節字母數字字符和符號。',
    'before' => ':attribute 必須是 :date 之前的一個日期。',
    'before_or_equal' => ':attribute 必須是 :date 或之前的一個日期。',
    'between' => [
        'array' => ':attribute 必須有 :min 到 :max 個項目。',
        'file' => ':attribute 必須介於 :min 和 :max 千字節之間。',
        'numeric' => ':attribute 必須介於 :min 和 :max 之間。',
        'string' => ':attribute 必須介於 :min 和 :max 個字符之間。',
    ],
    'boolean' => ':attribute 必須是真或假。',
    'can' => ':attribute 包含未授權的值。',
    'confirmed' => ':attribute 確認不匹配。',
    'current_password' => '密碼不正確。',
    'date' => ':attribute 必須是一個有效的日期。',
    'date_equals' => ':attribute 必須是等於 :date 的日期。',
    'date_format' => ':attribute 必須符合格式 :format。',
    'decimal' => ':attribute 必須有 :decimal 位小數。',
    'declined' => ':attribute 必須被拒絕。',
    'declined_if' => ':attribute 必須在 :other 為 :value 時被拒絕。',
    'different' => ':attribute 和 :other 必須不同。',
    'digits' => ':attribute 必須是 :digits 位數字。',
    'digits_between' => ':attribute 必須介於 :min 和 :max 位數字之間。',
    'dimensions' => ':attribute 有無效的圖片尺寸。',
    'distinct' => ':attribute 有一個重複的值。',
    'doesnt_end_with' => ':attribute 不能以以下之一結尾：:values。',
    'doesnt_start_with' => ':attribute 不能以以下之一開頭：:values。',
    'email' => ':attribute 必須是一個有效的電子郵件地址。',
    'ends_with' => ':attribute 必須以以下之一結尾：:values。',
    'enum' => '選中的 :attribute 無效。',
    'exists' => '選中的 :attribute 無效。',
    'extensions' => ':attribute 必須具有以下擴展名之一：:values。',
    'file' => ':attribute 必須是一個文件。',
    'filled' => ':attribute 必須有一個值。',
    'gt' => [
        'array' => ':attribute 必須有超過 :value 個項目。',
        'file' => ':attribute 必須大於 :value 千字節。',
        'numeric' => ':attribute 必須大於 :value。',
        'string' => ':attribute 必須大於 :value 個字符。',
    ],
    'gte' => [
        'array' => ':attribute 必須有 :value 個項目或更多。',
        'file' => ':attribute 必須大於或等於 :value 千字節。',
        'numeric' => ':attribute 必須大於或等於 :value。',
        'string' => ':attribute 必須大於或等於 :value 個字符。',
    ],
    'hex_color' => ':attribute 必須是有效的十六進制顏色。',
    'image' => ':attribute 必須是一張圖片。',
    'in' => '選中的 :attribute 無效。',
    'in_array' => ':attribute 在 :other 中不存在。',
    'integer' => ':attribute 必須是一個整數。',
    'ip' => ':attribute 必須是一個有效的IP地址。',
    'ipv4' => ':attribute 必須是一個有效的IPv4地址。',
    'ipv6' => ':attribute 必須是一個有效的IPv6地址。',
    'json' => ':attribute 必須是一個有效的JSON字符串。',
    'lowercase' => ':attribute 必須全部是小寫。',
    'lt' => [
        'array' => ':attribute 必須少於 :value 個項目。',
        'file' => ':attribute 必須小於 :value 千字節。',
        'numeric' => ':attribute 必須小於 :value。',
        'string' => ':attribute 必須少於 :value 個字符。',
    ],
    'lte' => [
        'array' => ':attribute 不能有超過 :value 個項目。',
        'file' => ':attribute 必須小於或等於 :value 千字節。',
        'numeric' => ':attribute 必須小於或等於 :value。',
        'string' => ':attribute 必須小於或等於 :value 個字符。',
    ],
    'mac_address' => ':attribute 必須是一個有效的MAC地址。',
    'max' => [
        'array' => ':attribute 不能有超過 :max 個項目。',
        'file' => ':attribute 不能大於 :max 千字節。',
        'numeric' => ':attribute 不能大於 :max。',
        'string' => ':attribute 不能多於 :max 個字符。',
    ],
    'max_digits' => ':attribute 不能有超過 :max 位數字。',
    'mimes' => ':attribute 必須是一個 :values 類型的文件。',
    'mimetypes' => ':attribute 必須是一個 :values 類型的文件。',
    'min' => [
        'array' => ':attribute 至少要有 :min 個項目。',
        'file' => ':attribute 至少要 :min 千字節。',
        'numeric' => ':attribute 至少要 :min。',
        'string' => ':attribute 至少要有 :min 個字符。',
    ],
    'min_digits' => ':attribute 至少要有 :min 位數字。',
    'missing' => ':attribute 必須缺失。',
    'missing_if' => '當 :other 為 :value 時，:attribute 必須缺失。',
    'missing_unless' => '除非 :other 在 :values 中，否則 :attribute 必須缺失。',
    'missing_with' => '當 :values 存在時，:attribute 必須缺失。',
    'missing_with_all' => '當 :values 都存在時，:attribute 必須缺失。',
    'multiple_of' => ':attribute 必須是 :value 的倍數。',
    'not_in' => '選中的 :attribute 無效。',
    'not_regex' => ':attribute 的格式無效。',
    'numeric' => ':attribute 必須是數字。',
    'password' => [
        'letters' => ':attribute 必須至少包含一個字母。',
        'mixed' => ':attribute 必須至少包含一個大寫字母和一個小寫字母。',
        'numbers' => ':attribute 必須至少包含一個數字。',
        'symbols' => ':attribute 必須至少包含一個符號。',
        'uncompromised' => '給定的 :attribute 出現在數據洩漏中。請選擇不同的 :attribute。',
    ],
    'present' => ':attribute 必須存在。',
    'present_if' => '當 :other 為 :value 時，:attribute 必須存在。',
    'present_unless' => '除非 :other 在 :values 中，否則 :attribute 必須存在。',
    'present_with' => '當 :values 存在時，:attribute 必須存在。',
    'present_with_all' => '當 :values 都存在時，:attribute 必須存在。',
    'prohibited' => ':attribute 是禁止的。',
    'prohibited_if' => '當 :other 為 :value 時，:attribute 是禁止的。',
    'prohibited_unless' => '除非 :other 在 :values 中，否則 :attribute 是禁止的。',
    'prohibits' => ':attribute 禁止 :other 存在。',
    'regex' => ':attribute 格式無效。',
    'required' => ':attribute 是必需的。',
    'required_array_keys' => ':attribute 必須包含 :values 的條目。',
    'required_if' => '當 :other 為 :value 時，:attribute 是必需的。',
    'required_if_accepted' => '當 :other 被接受時，:attribute 是必需的。',
    'required_unless' => '除非 :other 在 :values 中，否則 :attribute 是必需的。',
    'required_with' => '當 :values 存在時，:attribute 是必需的。',
    'required_with_all' => '當 :values 都存在時，:attribute 是必需的。',
    'required_without' => '當 :values 不存在時，:attribute 是必需的。',
    'required_without_all' => '當 :values 都不存在時，:attribute 是必需的。',
    'same' => ':attribute 和 :other 必須匹配。',
    'size' => [
        'array' => ':attribute 必須包含 :size 個項目。',
        'file' => ':attribute 必須是 :size 千字節。',
        'numeric' => ':attribute 必須是 :size。',
        'string' => ':attribute 必須是 :size 個字符。',
    ],
    'starts_with' => ':attribute 必須以以下之一開始：:values。',
    'string' => ':attribute 必須是字符串。',
    'timezone' => ':attribute 必須是有效的時區。',
    'unique' => ':attribute 已經被佔用。',
    'uploaded' => ':attribute 上傳失敗。',
    'uppercase' => ':attribute 必須全部是大寫。',
    'url' => ':attribute 必須是有效的網址。',
    'ulid' => ':attribute 必須是有效的ULID。',
    'uuid' => ':attribute 必須是有效的UUID。',

    /*
    |--------------------------------------------------------------------------
    | 自定義驗證語言行
    |--------------------------------------------------------------------------
    |
    | 在這裡您可以為屬性使用“attribute.rule”約定來指定自定義驗證消息。
    | 這使得為給定的屬性規則快速指定特定的自定義語言行。
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => '自定群消息',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | 自定義驗證屬性
    |--------------------------------------------------------------------------
    |
    | 以下語言行用於用更具可讀性的東西，如“電子郵件地址”代替“email”來交換屬性佔位符。
    | 這只是幫助我們使我們的消息更具表達力。
    |
    */

    'attributes' => [],

];
