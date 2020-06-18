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

/* /home/owiesnama/Projects/ok-tamam/themes/demo/pages/single-company.htm */
class __TwigTemplate_6997e883bea172e6dc18875f48e5124bacc71232fb8d92b480ade20ad39ffd2c extends \Twig\Template
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
    <div class=\"text-xl mt-4 mb-2\">";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 2), "html", null, true);
        echo "</div>

    <!-- component -->
<div class=\"bg-white pb-4 px-4 border my-4 rounded-md w-full\">
    <div class=\"overflow-x-auto mt-6\">

        <table class=\"table-auto border-collapse w-full\">
            <thead>
                <tr class=\"rounded-lg text-sm font-medium text-gray-700 text-left\" style=\"font-size: 0.9674rem\">
                    <th class=\"px-4 py-2 bg-gray-200 \" style=\"background-color:#f8f8f8\">Name</th>
                    <th class=\"px-4 py-2 \" style=\"background-color:#f8f8f8\">Phone</th>
                    <th class=\"px-4 py-2 \" style=\"background-color:#f8f8f8\">Email</th>
                </tr>
            </thead>
            <tbody class=\"text-sm font-normal text-gray-700\">
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 18
            echo "                <tr class=\"hover:bg-gray-100 border-b border-gray-200 py-10\">
                    <td class=\"px-4 py-4\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                    <td class=\"px-4 py-4\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "phone", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                    <td class=\"px-4 py-4\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "email", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </tbody>
        </table>
    </div>

    ";
        // line 28
        echo twig_get_attribute($this->env, $this->source, ($context["employees"] ?? null), "render", [], "any", false, false, false, 28);
        echo "

</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/owiesnama/Projects/ok-tamam/themes/demo/pages/single-company.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  82 => 24,  73 => 21,  69 => 20,  65 => 19,  62 => 18,  58 => 17,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container mx-auto\">
    <div class=\"text-xl mt-4 mb-2\">{{company.name}}</div>

    <!-- component -->
<div class=\"bg-white pb-4 px-4 border my-4 rounded-md w-full\">
    <div class=\"overflow-x-auto mt-6\">

        <table class=\"table-auto border-collapse w-full\">
            <thead>
                <tr class=\"rounded-lg text-sm font-medium text-gray-700 text-left\" style=\"font-size: 0.9674rem\">
                    <th class=\"px-4 py-2 bg-gray-200 \" style=\"background-color:#f8f8f8\">Name</th>
                    <th class=\"px-4 py-2 \" style=\"background-color:#f8f8f8\">Phone</th>
                    <th class=\"px-4 py-2 \" style=\"background-color:#f8f8f8\">Email</th>
                </tr>
            </thead>
            <tbody class=\"text-sm font-normal text-gray-700\">
                {%for employee in employees%}
                <tr class=\"hover:bg-gray-100 border-b border-gray-200 py-10\">
                    <td class=\"px-4 py-4\">{{employee.name}}</td>
                    <td class=\"px-4 py-4\">{{employee.phone}}</td>
                    <td class=\"px-4 py-4\">{{employee.email}}</td>
                </tr>
                {%endfor%}
            </tbody>
        </table>
    </div>

    {{ employees.render|raw }}

</div>
</div>", "/home/owiesnama/Projects/ok-tamam/themes/demo/pages/single-company.htm", "");
    }
}
