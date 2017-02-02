<?php namespace AlexLit\HyperComments\Components;

use Lang;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class Stream extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => Lang::get('alexlit.hypercomments::lang.stream.name'),
            'description' => Lang::get('alexlit.hypercomments::lang.stream.description'),
        ];
    }

    public function defineProperties()
    {
        return [
            'widgetId' => [
                'title'             => Lang::get('alexlit.hypercomments::lang.stream.widgetId.title'),
                'type'              => 'string',
                'default'           => '',
                'description'       => Lang::get('alexlit.hypercomments::lang.stream.widgetId.description'),
                'placeholder'       => 'ID',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => Lang::get('alexlit.hypercomments::lang.stream.widgetId.validationMessage')
            ]
        ];
    }

}

?>