<?php namespace AlexLit\HyperComments;

use Lang;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => Lang::get('alexlit.hypercomments::lang.plugin.name'),
            'description' => Lang::get('alexlit.hypercomments::lang.plugin.description'),
            'author'      => 'Alexey Litovchenko',
            'icon'        => 'icon-comments-o',
            'homepage'    => 'https://web2easy.ru'
        ];
    }

    public function registerComponents()
    {
        return [
           '\AlexLit\HyperComments\Components\Stream'    => 'hcStream',
           '\AlexLit\HyperComments\Components\Mixstream' => 'hcMixstream'
        ];
    }
}