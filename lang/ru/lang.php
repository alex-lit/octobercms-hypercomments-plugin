<?php

return [
    'plugin'                    => [
            'name'              => 'Hyper Comments',
            'description'       => 'Интерактивная система комментариев'
    ],
    'stream'                    => [
        'name'                  => 'Виджет комментариев',
        'description'           => 'Интерактивная система комментариев. Все настройки производятся на сайте HyperComments',
        'widgetId'              => [
            'title'             => 'ID аккаунта HyperComments',
            'description'       => 'Числовой идентификатор аккаунта HyperComments',
            'validationMessage' => 'ID должен быть числом!'
        ]
    ],
    'mixstream'                 => [
        'name'                  => 'Мини-виджеты',
        'description'           => 'Последние комментарии и самые комментируемые страницы',
        'widgetId'              => [
            'title'             => 'ID аккаунта HyperComments',
            'description'       => 'Числовой идентификатор аккаунта HyperComments',
            'validationMessage' => 'ID должен быть числом!'
        ],
        'type'                  => [
            'title'             => 'Тип виджета',
            'options'           => [
                'last'          => 'Последние комментарии',
                'popular'       => 'Популярные страницы'
            ],
            'description'       => 'Отобразить последние комментарии или самые популярные страницы'
        ],
        'limit'                 => [
            'title'             => 'Количество',
            'description'       => 'Количество элементов отображаемых в виджете',
            'placeholder'       => 'Кол-во',
            'validationMessage' => 'Количество должно быть числом!'
        ],
        'combine'               => [
            'title'             => 'Комбинированный виджет',
            'description'       => 'Отображение как комментариев, так и популярных страниц во вкладках виджета'
        ]
    ]
];

?>