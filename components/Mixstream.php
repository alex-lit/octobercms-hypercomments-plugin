<?php namespace AlexLit\HyperComments\Components;

use Lang;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class Mixstream extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => Lang::get('alexlit.hypercomments::lang.mixstream.name'),
            'description' => Lang::get('alexlit.hypercomments::lang.mixstream.description'),
        ];
    }

    public function defineProperties()
    {
        return [
            'widgetId'              => [
                'title'             => Lang::get('alexlit.hypercomments::lang.mixstream.widgetId.title'),
                'type'              => 'string',
                'default'           => '',
                'description'       => Lang::get('alexlit.hypercomments::lang.mixstream.widgetId.description'),
                'placeholder'       => 'ID',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => Lang::get('alexlit.hypercomments::lang.mixstream.widgetId.validationMessage')
            ],
            'type'                  => [
                'title'             => Lang::get('alexlit.hypercomments::lang.mixstream.type.title'),
                'type'              => 'dropdown',
                'options'           => [
                    'last'          => Lang::get('alexlit.hypercomments::lang.mixstream.type.options.last'),
                    'popular'       => Lang::get('alexlit.hypercomments::lang.mixstream.type.options.popular')
                ],
                'default'           => 'last',
                'description'       => Lang::get('alexlit.hypercomments::lang.mixstream.type.description')
            ],
            'limit'                 => [
                'title'             => Lang::get('alexlit.hypercomments::lang.mixstream.limit.title'),
                'type'              => 'string',
                'default'           => '5',
                'description'       => Lang::get('alexlit.hypercomments::lang.mixstream.limit.description'),
                'placeholder'       => Lang::get('alexlit.hypercomments::lang.mixstream.limit.placeholder'),
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => Lang::get('alexlit.hypercomments::lang.mixstream.limit.validationMessage')
            ],
            'combine'               => [
                'title'             => Lang::get('alexlit.hypercomments::lang.mixstream.combine.title'),
                'type'              => 'checkbox',
                'default'           => '0',
                'description'       => Lang::get('alexlit.hypercomments::lang.mixstream.combine.description')
            ]
        ];
    }

}

?>