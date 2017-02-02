<?php namespace AlexLit\HyperComments;

use Lang;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Hyper Comments',
            'description' => 'Интерактивная система комментариев',
            'author'      => 'Alexey Litovchenko',
            'icon'        => 'icon-comments-o',
            'homepage'    => 'https://web2easy.ru'
        ];
    }

    public function registerComponents()
    {
        return [
           '\AlexLit\HyperComments\Components\Stream' => 'hcStream',
        ];
    }
}