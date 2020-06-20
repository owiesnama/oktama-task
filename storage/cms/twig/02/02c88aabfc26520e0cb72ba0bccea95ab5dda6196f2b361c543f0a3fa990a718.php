<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /home/owiesnama/Projects/ok-tamam/themes/demo/partials/site/footer.htm */
class __TwigTemplate_c8ad72f683be667ee6cbdab648e6159e9298dd2dc8fa1320aed234cf2c574ad7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<footer class=\"flex flex-col justify-between items-center px-6 py-2 bg-gray-800 sm:flex-row\">
    <a href=\"#\" class=\"text-xl font-bold text-gray-100 hover:text-gray-400\">Ok tamam</a>
    
    <p class=\"py-2 text-gray-100 sm:py-0\">All rights reserved</p>

    <div class=\"flex -mx-2\">
       
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/home/owiesnama/Projects/ok-tamam/themes/demo/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"flex flex-col justify-between items-center px-6 py-2 bg-gray-800 sm:flex-row\">
    <a href=\"#\" class=\"text-xl font-bold text-gray-100 hover:text-gray-400\">Ok tamam</a>
    
    <p class=\"py-2 text-gray-100 sm:py-0\">All rights reserved</p>

    <div class=\"flex -mx-2\">
       
    </div>
</footer>", "/home/owiesnama/Projects/ok-tamam/themes/demo/partials/site/footer.htm", "");
    }
}
