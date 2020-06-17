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
    <h2 class=\"text-lg text-gray-700 font-semibold capitalize\">New employee</h2>

    <form id=\"addEmployeeForm\"
    data-request=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onAddEmployee\"
    data-request-success=\"\$('addEmployeeForm').reset()\">
        <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4\">
            <div>
                <label class=\"text-gray-700\" for=\"firstName\">First name</label>
                <input id=\"firstName\" type=\"text\" name='first_name'
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"lastName\">Last Name</label>
                <input id=\"lastName\" type=\"text\" name=\"last_name\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"email\">Email</label>
                <input id=\"email\" type=\"email\" name=\"email\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"phone\">Phone</label>
                <input id=\"phone\" type=\"text\" name=\"phone\"
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
        return "/home/owiesnama/Projects/ok-tamam/plugins/oktamam/companies/components/createemployee/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md\">
    <h2 class=\"text-lg text-gray-700 font-semibold capitalize\">New employee</h2>

    <form id=\"addEmployeeForm\"
    data-request=\"{{__SELF__}}::onAddEmployee\"
    data-request-success=\"\$('addEmployeeForm').reset()\">
        <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4\">
            <div>
                <label class=\"text-gray-700\" for=\"firstName\">First name</label>
                <input id=\"firstName\" type=\"text\" name='first_name'
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"lastName\">Last Name</label>
                <input id=\"lastName\" type=\"text\" name=\"last_name\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"email\">Email</label>
                <input id=\"email\" type=\"email\" name=\"email\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>

            <div>
                <label class=\"text-gray-700\" for=\"phone\">Phone</label>
                <input id=\"phone\" type=\"text\" name=\"phone\"
                    class=\"w-full mt-2 px-4 py-2 block rounded bg-gray-200 text-gray-800 border border-gray-300 focus:outline-none focus:bg-white\">
            </div>
        </div>

        <div class=\"flex justify-end mt-4\">
            <button type=\"submit\"
                class=\"px-4 py-2 bg-gray-800 text-gray-200 rounded hover:bg-gray-700 focus:outline-none focus:bg-gray-700\">Save</button>
        </div>
    </form>
</div>", "/home/owiesnama/Projects/ok-tamam/plugins/oktamam/companies/components/createemployee/default.htm", "");
    }
}
