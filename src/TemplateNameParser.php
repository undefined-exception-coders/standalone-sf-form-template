<?php

namespace UEC\Standalone\Symfony\Form\Template;

use Symfony\Component\Templating\TemplateNameParser as BaseTemplateNameParser;

class TemplateNameParser extends BaseTemplateNameParser
{
    public function parse($name)
    {
        $name = parent::parse($name);
        $name->set('name', trim($name->get('name'), ':'));

        return $name;
    }
}