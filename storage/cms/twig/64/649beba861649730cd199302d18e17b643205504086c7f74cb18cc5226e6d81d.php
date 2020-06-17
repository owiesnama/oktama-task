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

/* /home/owiesnama/Projects/ok-tamam/themes/demo/pages/companies.htm */
class __TwigTemplate_23f48b9a4cadb289b14a3bf0ed29f4fdf3ed5c1ceee21955d98a0a403ab76a17 extends \Twig\Template
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
    <h1 class=\"border-b p-4 text-2xl font-bold text-gray-800 mb-4\">Companies</h1>
    <a href=\"/company/create\" 
    class=\"inline-block py-4 px-6 rounded border border-indigo-500 text-indigo-600 hover:text-white hover:bg-indigo-600\"
    >Create new company</a>
    ";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("companies"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/owiesnama/Projects/ok-tamam/themes/demo/pages/companies.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container mx-auto\">
    <h1 class=\"border-b p-4 text-2xl font-bold text-gray-800 mb-4\">Companies</h1>
    <a href=\"/company/create\" 
    class=\"inline-block py-4 px-6 rounded border border-indigo-500 text-indigo-600 hover:text-white hover:bg-indigo-600\"
    >Create new company</a>
    {% component 'companies' %}
</div>", "/home/owiesnama/Projects/ok-tamam/themes/demo/pages/companies.htm", "");
    }
}
