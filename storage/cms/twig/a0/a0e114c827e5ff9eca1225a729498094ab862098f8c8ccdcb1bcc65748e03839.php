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

/* /home/owiesnama/Projects/ok-tamam/themes/demo/pages/empolyees.htm */
class __TwigTemplate_7e2e8f318b660340911dfd34906a7cbae5f9fa03b94471cf59b93a4196e37e82 extends \Twig\Template
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
        echo "<div class=\"container mx-auto my-8\">
    <h1 class=\"border-b text-2xl font-bold text-gray-800 py-4\">Employees</h1>
    <a class=\"inline-block  mt-4 border rounded py-4 px-5 border-indigo-400 text-indigo-500 hover:text-white hover:bg-indigo-500\"
        href=\"/employee/create\"
        >Create new employee</a>

    ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("employees"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/owiesnama/Projects/ok-tamam/themes/demo/pages/empolyees.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container mx-auto my-8\">
    <h1 class=\"border-b text-2xl font-bold text-gray-800 py-4\">Employees</h1>
    <a class=\"inline-block  mt-4 border rounded py-4 px-5 border-indigo-400 text-indigo-500 hover:text-white hover:bg-indigo-500\"
        href=\"/employee/create\"
        >Create new employee</a>

    {% component 'employees' %}
</div>", "/home/owiesnama/Projects/ok-tamam/themes/demo/pages/empolyees.htm", "");
    }
}
