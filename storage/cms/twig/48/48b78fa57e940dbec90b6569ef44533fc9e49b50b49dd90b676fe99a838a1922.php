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

/* /home/owiesnama/Projects/ok-tamam/themes/demo/pages/home.htm */
class __TwigTemplate_a096342e5a4bf67cde7d82d55f09d4f1803f97286dac2a1af194e7e4004d359b extends \Twig\Template
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
        echo "<div class=\"container mx-auto\">
<h1 class=\"text-2xl capitalize font-bold border-b py-4 mb-4\">recent companies</h1>
";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("companiesDashboard"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/home/owiesnama/Projects/ok-tamam/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container mx-auto\">
<h1 class=\"text-2xl capitalize font-bold border-b py-4 mb-4\">recent companies</h1>
{% component 'companiesDashboard' %}

</div>", "/home/owiesnama/Projects/ok-tamam/themes/demo/pages/home.htm", "");
    }
}
