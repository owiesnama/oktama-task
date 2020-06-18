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

/* /home/owiesnama/Projects/ok-tamam/plugins/oktamam/companies/components/dashboard/default.htm */
class __TwigTemplate_7a787ad1143838dac11b9fae9b49013ecbaae8584105944500c2f6cd9d573732 extends \Twig\Template
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
        echo "<div class=\"grid grid-cols-3 gap-4 mt-8\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "recentCompanies", [], "any", false, false, false, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 3
            echo "    <div class=\"border rounded p-2\">
        <a class=\"text-xl font-bold text-indigo-800 cursor-pointer\">
            ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "name", [], "any", false, false, false, 5), "html", null, true);
            echo "
        </a>
        <div class=\"flex text-gray-500 text-sm justify-between\">
            <div>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "website", [], "any", false, false, false, 8), "html", null, true);
            echo "</div>
            <div>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "email", [], "any", false, false, false, 9), "html", null, true);
            echo "</div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/owiesnama/Projects/ok-tamam/plugins/oktamam/companies/components/dashboard/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  58 => 9,  54 => 8,  48 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"grid grid-cols-3 gap-4 mt-8\">
    {% for company in __SELF__.recentCompanies %}
    <div class=\"border rounded p-2\">
        <a class=\"text-xl font-bold text-indigo-800 cursor-pointer\">
            {{company.name}}
        </a>
        <div class=\"flex text-gray-500 text-sm justify-between\">
            <div>{{company.website}}</div>
            <div>{{company.email}}</div>
        </div>
    </div>
    {% endfor %}
</div>", "/home/owiesnama/Projects/ok-tamam/plugins/oktamam/companies/components/dashboard/default.htm", "");
    }
}
