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

/* /home/owiesnama/Projects/ok-tamam/plugins/oktamam/companies/components/companies/default.htm */
class __TwigTemplate_1ad9b6693fdaf6a0482e521b66e74a710e492e01fcc9550ddb0e8997b3205dc2 extends \Twig\Template
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "companies", [], "any", false, false, false, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 3
            echo "    <div class=\"border rounded p-2\">
        <div class=\"flex justify-between mb-4\">
            <a class=\"text-xl font-bold text-indigo-800 cursor-pointer flex items-start mx-2\">
                
                <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "logo", [], "any", false, false, false, 7), "html", null, true);
            echo "\" alt=\"logo\" class=\"rounded-full w-16 h-16 mx-2\">
                <span>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "</span>
            </a>
            <div class=\"flex self-start\">
                ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isAdmin", [], "method", false, false, false, 11)) {
                // line 12
                echo "                <form data-request=\"";
                echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
                echo "::onDelete\">
                    <input type=\"hidden\" value=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 13), "html", null, true);
                echo "\" name=\"_companyId\" />
                    <button
                        class=\"border rounded-lg text-xs text-red-600 hover:bg-red-600 hover:text-white border-red-600 py-1 px-2\">Delete</button>
                </form>

                <a href=\"/company/";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 18), "html", null, true);
                echo "/update\"
                    class=\"border inline-block mx-2 rounded-lg text-xs text-blue-600 hover:bg-blue-600 hover:text-white border-blue-600 py-1 px-2\">Edit</a>
                ";
            }
            // line 21
            echo "            </div>
        </div>
        <div class=\"flex text-gray-500 text-sm justify-between\">
            <div>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "website", [], "any", false, false, false, 24), "html", null, true);
            echo "</div>
            <div>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "email", [], "any", false, false, false, 25), "html", null, true);
            echo "</div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/owiesnama/Projects/ok-tamam/plugins/oktamam/companies/components/companies/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  90 => 25,  86 => 24,  81 => 21,  75 => 18,  67 => 13,  62 => 12,  60 => 11,  54 => 8,  50 => 7,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"grid grid-cols-3 gap-4 mt-8\">
    {% for company in __SELF__.companies %}
    <div class=\"border rounded p-2\">
        <div class=\"flex justify-between mb-4\">
            <a class=\"text-xl font-bold text-indigo-800 cursor-pointer flex items-start mx-2\">
                
                <img src=\"{{company.logo}}\" alt=\"logo\" class=\"rounded-full w-16 h-16 mx-2\">
                <span>{{company.name}}</span>
            </a>
            <div class=\"flex self-start\">
                {% if user.isAdmin() %}
                <form data-request=\"{{__SELF__}}::onDelete\">
                    <input type=\"hidden\" value=\"{{company.id}}\" name=\"_companyId\" />
                    <button
                        class=\"border rounded-lg text-xs text-red-600 hover:bg-red-600 hover:text-white border-red-600 py-1 px-2\">Delete</button>
                </form>

                <a href=\"/company/{{company.id}}/update\"
                    class=\"border inline-block mx-2 rounded-lg text-xs text-blue-600 hover:bg-blue-600 hover:text-white border-blue-600 py-1 px-2\">Edit</a>
                {% endif %}
            </div>
        </div>
        <div class=\"flex text-gray-500 text-sm justify-between\">
            <div>{{company.website}}</div>
            <div>{{company.email}}</div>
        </div>
    </div>
    {% endfor %}
</div>", "/home/owiesnama/Projects/ok-tamam/plugins/oktamam/companies/components/companies/default.htm", "");
    }
}
