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

/* /home/owiesnama/Projects/ok-tamam/plugins/oktamam/companies/components/createcompany/default.htm */
class __TwigTemplate_c9200c04373ff1d530cd63bc1d87e53045c5f09d38e0279ecb82cb3a5e0399f0 extends \Twig\Template
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
        echo ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "param", [0 => "company"], "method", false, false, false, 3)) ? ("Update company") : ("New company"));
        echo "</h2>

    <form id=\"addEmployeeForm\" method=\"post\" enctype=\"multipart/form-data\">
        <input type=\"hidden\" name=\"_handler\" value=\"";
        // line 6
        echo ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "param", [0 => "company"], "method", false, false, false, 6)) ? ("onUpdateCompany") : ("onAddCompany"));
        echo "\">
        ";
        // line 7
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
        <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4\">
            <div>
                <label class=\"text-gray-700\" for=\"name\">Name</label>
                <input id=\"name\" type=\"text\" name='name' value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "company", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
                <span data-validate-for=\"name\" class=\"text-sm text-red-500 mt-2 capitalize\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "name"], "method", false, false, false, 13), "html", null, true);
        echo "</span>
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"website\">Website</label>
                <input id=\"website\" type=\"text\" name=\"website\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "company", [], "any", false, false, false, 18), "website", [], "any", false, false, false, 18), "html", null, true);
        echo "\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"email\">Email</label>
                <input id=\"email\" type=\"email\" name=\"email\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "company", [], "any", false, false, false, 24), "email", [], "any", false, false, false, 24), "html", null, true);
        echo "\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"logo\">Logo</label>
                <input id=\"logo\" type=\"file\" name=\"logo\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "company", [], "any", false, false, false, 30), "logo", [], "any", false, false, false, 30), "html", null, true);
        echo "\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
                <span data-validate-for=\"name\" class=\"text-sm text-red-500 mt-2 capitalize\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "logo"], "method", false, false, false, 32), "html", null, true);
        echo "</span>

            </div>
        </div>

        <div class=\"flex justify-end mt-4\">
            <button type=\"submit\"
                class=\"px-4 py-2 bg-gray-800 text-gray-200 rounded hover:bg-gray-700 focus:outline-none focus:bg-gray-700\">";
        // line 39
        echo ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "param", [0 => "employee"], "method", false, false, false, 39)) ? ("Update") : ("Save"));
        echo "</button>
        </div>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/owiesnama/Projects/ok-tamam/plugins/oktamam/companies/components/createcompany/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 39,  94 => 32,  89 => 30,  80 => 24,  71 => 18,  63 => 13,  58 => 11,  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md\">
    <h2 class=\"text-lg text-gray-700 font-semibold capitalize\">
        {{__SELF__.param('company') ? 'Update company' : 'New company'}}</h2>

    <form id=\"addEmployeeForm\" method=\"post\" enctype=\"multipart/form-data\">
        <input type=\"hidden\" name=\"_handler\" value=\"{{__SELF__.param('company') ? 'onUpdateCompany' : 'onAddCompany'}}\">
        {{form_token()}}
        <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4\">
            <div>
                <label class=\"text-gray-700\" for=\"name\">Name</label>
                <input id=\"name\" type=\"text\" name='name' value=\"{{__SELF__.company.name}}\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
                <span data-validate-for=\"name\" class=\"text-sm text-red-500 mt-2 capitalize\">{{errors.first('name')}}</span>
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"website\">Website</label>
                <input id=\"website\" type=\"text\" name=\"website\" value=\"{{__SELF__.company.website}}\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"email\">Email</label>
                <input id=\"email\" type=\"email\" name=\"email\" value=\"{{__SELF__.company.email}}\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"logo\">Logo</label>
                <input id=\"logo\" type=\"file\" name=\"logo\" value=\"{{__SELF__.company.logo}}\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
                <span data-validate-for=\"name\" class=\"text-sm text-red-500 mt-2 capitalize\">{{errors.first('logo')}}</span>

            </div>
        </div>

        <div class=\"flex justify-end mt-4\">
            <button type=\"submit\"
                class=\"px-4 py-2 bg-gray-800 text-gray-200 rounded hover:bg-gray-700 focus:outline-none focus:bg-gray-700\">{{__SELF__.param('employee') ? 'Update' : 'Save'}}</button>
        </div>
    </form>
</div>", "/home/owiesnama/Projects/ok-tamam/plugins/oktamam/companies/components/createcompany/default.htm", "");
    }
}
