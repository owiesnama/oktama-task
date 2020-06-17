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
    <h2 class=\"text-lg text-gray-700 font-semibold capitalize\">New company</h2>

    <form id=\"addEmployeeForm\"
    method=\"post\"
    enctype=\"multipart/form-data\">
    <input type=\"hidden\" name=\"_handler\" value=\"onAddCompany\">
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
        <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4\">
            <div>
                <label class=\"text-gray-700\" for=\"name\">Name</label>
                <input id=\"name\" type=\"text\" name='name'
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"website\">Website</label>
                <input id=\"website\" type=\"text\" name=\"website\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"email\">Email</label>
                <input id=\"email\" type=\"email\" name=\"email\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"logo\">Logo</label>
                <input id=\"logo\" type=\"file\" name=\"logo\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>
        </div>

        <div class=\"flex justify-end mt-4\">
            <button type=\"submit\"
                class=\"px-4 py-2 bg-gray-800 text-gray-200 rounded hover:bg-gray-700 focus:outline-none focus:bg-gray-700\">Save</button>
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
        return array (  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md\">
    <h2 class=\"text-lg text-gray-700 font-semibold capitalize\">New company</h2>

    <form id=\"addEmployeeForm\"
    method=\"post\"
    enctype=\"multipart/form-data\">
    <input type=\"hidden\" name=\"_handler\" value=\"onAddCompany\">
    {{form_token()}}
        <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4\">
            <div>
                <label class=\"text-gray-700\" for=\"name\">Name</label>
                <input id=\"name\" type=\"text\" name='name'
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"website\">Website</label>
                <input id=\"website\" type=\"text\" name=\"website\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"email\">Email</label>
                <input id=\"email\" type=\"email\" name=\"email\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"logo\">Logo</label>
                <input id=\"logo\" type=\"file\" name=\"logo\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>
        </div>

        <div class=\"flex justify-end mt-4\">
            <button type=\"submit\"
                class=\"px-4 py-2 bg-gray-800 text-gray-200 rounded hover:bg-gray-700 focus:outline-none focus:bg-gray-700\">Save</button>
        </div>
    </form>
</div>", "/home/owiesnama/Projects/ok-tamam/plugins/oktamam/companies/components/createcompany/default.htm", "");
    }
}
