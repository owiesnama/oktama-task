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

/* /home/owiesnama/Projects/ok-tamam/plugins/oktamam/companies/components/employees/default.htm */
class __TwigTemplate_ba3e018674318e565c1030c15d4d9066ef02aaab1acadc000d80efad668ce906 extends \Twig\Template
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
        echo "<!-- component -->
<div class=\"bg-white pb-4 px-4 border my-4 rounded-md w-full\">
    <div class=\"overflow-x-auto mt-6\">

        <table class=\"table-auto border-collapse w-full\">
            <thead>
                <tr class=\"rounded-lg text-sm font-medium text-gray-700 text-left\" style=\"font-size: 0.9674rem\">
                    <th class=\"px-4 py-2 bg-gray-200 \" style=\"background-color:#f8f8f8\">Name</th>
                    <th class=\"px-4 py-2 \" style=\"background-color:#f8f8f8\">Phone</th>
                    <th class=\"px-4 py-2 \" style=\"background-color:#f8f8f8\">Email</th>
                    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isAdmin", [], "method", false, false, false, 11)) {
            // line 12
            echo "                    <th>actions</th>
                    ";
        }
        // line 14
        echo "                </tr>
            </thead>
            <tbody class=\"text-sm font-normal text-gray-700\">
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "employees", [], "any", false, false, false, 17));
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
                    <td class=\"px-4 py-4\">";
            // line 22
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["employee"], "company", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["employee"], "company", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true))) : (print ("---")));
            echo "</td>
                    ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isAdmin", [], "method", false, false, false, 23)) {
                // line 24
                echo "                    <td>
                        <div class=\"flex\">
                            <form data-request=\"";
                // line 26
                echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
                echo "::onDelete\">
                                <input type=\"hidden\" value=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 27), "html", null, true);
                echo "\" name=\"_employeeId\" />
                                <button
                                    class=\"border rounded-lg text-xs text-red-600 hover:bg-red-600 hover:text-white border-red-600 py-1 px-2\">Delete</button>
                            </form>
                            <a href=\"/employee/";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo "/update\"
                                class=\"inline-block mx-2 border rounded-lg text-xs text-blue-600 hover:bg-blue-600 hover:text-white border-blue-600 py-1 px-2\">Edit</a>

                        </div>
                    </td>
                    ";
            }
            // line 37
            echo "                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>
        </table>
    </div>

    ";
        // line 43
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "employees", [], "any", false, false, false, 43), "render", [], "any", false, false, false, 43);
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "/home/owiesnama/Projects/ok-tamam/plugins/oktamam/companies/components/employees/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 43,  116 => 39,  109 => 37,  100 => 31,  93 => 27,  89 => 26,  85 => 24,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  64 => 18,  60 => 17,  55 => 14,  51 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- component -->
<div class=\"bg-white pb-4 px-4 border my-4 rounded-md w-full\">
    <div class=\"overflow-x-auto mt-6\">

        <table class=\"table-auto border-collapse w-full\">
            <thead>
                <tr class=\"rounded-lg text-sm font-medium text-gray-700 text-left\" style=\"font-size: 0.9674rem\">
                    <th class=\"px-4 py-2 bg-gray-200 \" style=\"background-color:#f8f8f8\">Name</th>
                    <th class=\"px-4 py-2 \" style=\"background-color:#f8f8f8\">Phone</th>
                    <th class=\"px-4 py-2 \" style=\"background-color:#f8f8f8\">Email</th>
                    {% if user.isAdmin()%}
                    <th>actions</th>
                    {% endif %}
                </tr>
            </thead>
            <tbody class=\"text-sm font-normal text-gray-700\">
                {%for employee in __SELF__.employees%}
                <tr class=\"hover:bg-gray-100 border-b border-gray-200 py-10\">
                    <td class=\"px-4 py-4\">{{employee.name}}</td>
                    <td class=\"px-4 py-4\">{{employee.phone}}</td>
                    <td class=\"px-4 py-4\">{{employee.email}}</td>
                    <td class=\"px-4 py-4\">{{employee.company.name ?:'---'}}</td>
                    {% if user.isAdmin()%}
                    <td>
                        <div class=\"flex\">
                            <form data-request=\"{{__SELF__}}::onDelete\">
                                <input type=\"hidden\" value=\"{{employee.id}}\" name=\"_employeeId\" />
                                <button
                                    class=\"border rounded-lg text-xs text-red-600 hover:bg-red-600 hover:text-white border-red-600 py-1 px-2\">Delete</button>
                            </form>
                            <a href=\"/employee/{{employee.id}}/update\"
                                class=\"inline-block mx-2 border rounded-lg text-xs text-blue-600 hover:bg-blue-600 hover:text-white border-blue-600 py-1 px-2\">Edit</a>

                        </div>
                    </td>
                    {% endif %}
                </tr>
                {%endfor%}
            </tbody>
        </table>
    </div>

    {{ __SELF__.employees.render|raw }}

</div>", "/home/owiesnama/Projects/ok-tamam/plugins/oktamam/companies/components/employees/default.htm", "");
    }
}
