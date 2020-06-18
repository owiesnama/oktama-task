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

/* /home/owiesnama/Projects/ok-tamam/plugins/oktamam/companies/components/createemployee/default.htm */
class __TwigTemplate_a5f76b9f00a7635b3d80873c094978a1f52f66ce6b7fe76cf6d117a664fe8d07 extends \Twig\Template
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
        echo "<div class=\"max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md\">
    <h2 class=\"text-lg text-gray-700 font-semibold capitalize\">
        ";
        // line 3
        echo ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "param", [0 => "employee"], "method", false, false, false, 3)) ? ("Update employee") : ("new employee"));
        echo "</h2>

    <form id=\"addEmployeeForm\"
        data-request=\"";
        // line 6
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "param", [0 => "employee"], "method", false, false, false, 6)) ? ((($context["__SELF__"] ?? null) . "::onUpdateEmployee")) : ((($context["__SELF__"] ?? null) . "::onAddEmployee"))), "html", null, true);
        echo "\">
        <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4\">
            <div>
                <label class=\"text-gray-700\" for=\"firstName\">First name</label>
                <input id=\"firstName\" type=\"text\" name='first_name' value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "employee", [], "any", false, false, false, 10), "first_name", [], "any", false, false, false, 10), "html", null, true);
        echo "\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"lastName\">Last Name</label>
                <input id=\"lastName\" type=\"text\" name=\"last_name\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "employee", [], "any", false, false, false, 16), "last_name", [], "any", false, false, false, 16), "html", null, true);
        echo "\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"email\">Email</label>
                <input id=\"email\" type=\"email\" name=\"email\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "employee", [], "any", false, false, false, 22), "email", [], "any", false, false, false, 22), "html", null, true);
        echo "\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"phone\">Phone</label>
                <input id=\"phone\" type=\"text\" name=\"phone\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "employee", [], "any", false, false, false, 28), "phone", [], "any", false, false, false, 28), "html", null, true);
        echo "\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>
            <div>
                <label class=\"text-gray-700\" for=\"company\">company</label>
                <select id=\"company\" name=\"company\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "companies", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 36
            echo "                    <option ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "employee", [], "any", false, false, false, 36), "company_id", [], "any", false, false, false, 36) == twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 36))) {
                echo "selected";
            }
            // line 37
            echo "                        value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </select>
            </div>
        </div>

        <div class=\"flex justify-end mt-4\">
            <button type=\"submit\"
                class=\"px-4 py-2 bg-gray-800 text-gray-200 rounded hover:bg-gray-700 focus:outline-none focus:bg-gray-700\">";
        // line 45
        echo ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "param", [0 => "company"], "method", false, false, false, 45)) ? ("Update") : ("Save"));
        echo "</button>
        </div>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/owiesnama/Projects/ok-tamam/plugins/oktamam/companies/components/createemployee/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 45,  111 => 39,  100 => 37,  95 => 36,  91 => 35,  81 => 28,  72 => 22,  63 => 16,  54 => 10,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md\">
    <h2 class=\"text-lg text-gray-700 font-semibold capitalize\">
        {{__SELF__.param('employee') ? 'Update employee' : 'new employee'}}</h2>

    <form id=\"addEmployeeForm\"
        data-request=\"{{__SELF__.param('employee') ? __SELF__~'::onUpdateEmployee' : __SELF__~'::onAddEmployee'}}\">
        <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4\">
            <div>
                <label class=\"text-gray-700\" for=\"firstName\">First name</label>
                <input id=\"firstName\" type=\"text\" name='first_name' value=\"{{__SELF__.employee.first_name}}\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"lastName\">Last Name</label>
                <input id=\"lastName\" type=\"text\" name=\"last_name\" value=\"{{__SELF__.employee.last_name}}\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"email\">Email</label>
                <input id=\"email\" type=\"email\" name=\"email\" value=\"{{__SELF__.employee.email}}\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"phone\">Phone</label>
                <input id=\"phone\" type=\"text\" name=\"phone\" value=\"{{__SELF__.employee.phone}}\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>
            <div>
                <label class=\"text-gray-700\" for=\"company\">company</label>
                <select id=\"company\" name=\"company\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
                    {% for company in __SELF__.companies %}
                    <option {% if __SELF__.employee.company_id == company.id %}selected{% endif %}
                        value=\"{{company.id}}\">{{company.name}}</option>
                    {% endfor %}
                </select>
            </div>
        </div>

        <div class=\"flex justify-end mt-4\">
            <button type=\"submit\"
                class=\"px-4 py-2 bg-gray-800 text-gray-200 rounded hover:bg-gray-700 focus:outline-none focus:bg-gray-700\">{{__SELF__.param('company') ? 'Update' : 'Save'}}</button>
        </div>
    </form>
</div>", "/home/owiesnama/Projects/ok-tamam/plugins/oktamam/companies/components/createemployee/default.htm", "");
    }
}
