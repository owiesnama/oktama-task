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
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isAdmin", [], "method", false, false, false, 3)) {
            // line 4
            echo "
    <a href=\"/company/create\"
        class=\"inline-block py-4 px-6 rounded border border-indigo-500 text-indigo-600 hover:text-white hover:bg-indigo-600\">Create
        new company</a>
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("companies"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
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
        return array (  57 => 11,  53 => 10,  50 => 9,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container mx-auto\">
    <h1 class=\"border-b p-4 text-2xl font-bold text-gray-800 mb-4\">Companies</h1>
    {% if user.isAdmin()%}

    <a href=\"/company/create\"
        class=\"inline-block py-4 px-6 rounded border border-indigo-500 text-indigo-600 hover:text-white hover:bg-indigo-600\">Create
        new company</a>
    {% endif %}

    {% component 'companies' %}
</div>", "/home/owiesnama/Projects/ok-tamam/themes/demo/pages/companies.htm", "");
    }
}
