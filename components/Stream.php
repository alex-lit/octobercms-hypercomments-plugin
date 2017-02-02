<?php namespace AlexLit\HyperComments\Components;

use Lang;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class Stream extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Stream',
            'description' => 'Комменты',
        ];
    }

    public function defineProperties()
    {
        return [
            'widgetId' => [
                'title'             => 'ID аккаунта HyperComments',
                'type'              => 'string',
                'default'           => '',
                'description'       => 'Числовой идентификатор аккаунта HyperComments',
                'placeholder'       => 'ID',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'ID должен быть числом!'
            ]
        ];
    }

    public function onRun()
    {}

}

?>