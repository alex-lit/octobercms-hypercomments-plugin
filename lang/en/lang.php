<?php

return [
    'plugin'                    => [
            'name'              => 'Hyper Comments',
            'description'       => 'Tailored comment system for your site'
    ],
    'stream'                    => [
        'name'                  => 'Comments widget',
        'description'           => 'Display HyperComments widget',
        'widgetId'              => [
            'title'             => 'ID аккаунта HyperComments',
            'description'       => 'Числовой идентификатор аккаунта HyperComments',
            'validationMessage' => 'ID должен быть числом!'
        ]
    ],
    'mixstream'                 => [
        'name'                  => 'MINI-WIDGETS',
        'description'           => 'Последние комментарии и самые комментируемые страницы',
        'widgetId'              => [
            'title'             => 'ID аккаунта HyperComments',
            'description'       => 'Числовой идентификатор аккаунта HyperComments',
            'validationMessage' => 'ID должен быть числом!'
        ],
        'type'                  => [
            'title'             => 'Тип виджета',
            'options'           => [
                'last'          => 'RECENT COMMENTS',
                'popular'       => 'POPULAR ARTICLES'
            ],
            'description'       => 'Отобразить последние комментарии или самые популярные страницы'
        ],
        'limit'                 => [
            'title'             => 'Count',
            'description'       => 'Количество элементов отображаемых в виджете',
            'placeholder'       => 'Count',
            'validationMessage' => 'Количество должно быть числом!'
        ],
        'combine'               => [
            'title'             => 'COMBINED',
            'description'       => 'Отображение как комментариев, так и популярных страниц во вкладках виджета'
        ]
    ]
];

?>
