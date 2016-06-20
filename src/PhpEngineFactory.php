<?php

namespace UEC\Standalone\Symfony\Form\Template;

use Symfony\Component\Templating\Loader\FilesystemLoader;
use Symfony\Component\Templating\PhpEngine;

class PhpEngineFactory
{
    /**
     * @var array
     */
    private $paths;

    public function __construct(array $paths)
    {
        $this->paths = $paths;
    }

    public function __invoke()
    {
        return new PhpEngine(
            new TemplateNameParser(),
            new FilesystemLoader($this->paths)
        );

    }
}