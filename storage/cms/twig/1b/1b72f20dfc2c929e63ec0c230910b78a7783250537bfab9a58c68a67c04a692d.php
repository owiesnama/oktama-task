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

/* /home/owiesnama/Projects/ok-tamam/themes/demo/partials/site/header.htm */
class __TwigTemplate_1b829d2813a2c859a0319f24b7d098ad999401a72f8d2b529051ae26a03c3ba1 extends \Twig\Template
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
        echo "<header class=\"bg-gray-900\">
    <div class=\"container mx-auto px-6\">
        <nav class=\"flex flex-col py-2 sm:flex-row sm:justify-between sm:items-center\">
            <div class=\"flex items-center\">
                <a href=\"/\" class=\"text-2xl font-semibold text-white hover:text-gray-300\">Ok Tamam</a>
                <ul class=\"text-white flex items-center mx-4\">
                    <li><a href=\"/companies\">All Companies</a></li>
                </ul>
            </div>

            <div class=\"flex items-center -mx-2 mt-2 sm:mt-0\">
                ";
        // line 12
        if ( !($context["user"] ?? null)) {
            // line 13
            echo "                <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
            echo "\"
                    class=\"mx-2 px-3 py-2 font-semibold bg-black rounded text-sm text-white hover:bg-gray-800\">Sign
                    Up</a>

                ";
        } else {
            // line 18
            echo "                <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\"
                    class=\"mx-2 px-3 py-2 font-semibold bg-black rounded text-sm text-white hover:bg-gray-800\">Sign
                    Out</a>
                ";
        }
        // line 22
        echo "            </div>
        </nav>

        <div class=\"flex items-center flex-col py-6 md:h-96 md:flex-row\">
            <div class=\"md:w-1/2\">
                <h2 class=\"text-4xl font-semibold text-gray-100\">Ok Tamam</h2>

                <h3 class=\"text-2xl font-semibold text-gray-100\">
                    Hello <span class=\"text-indigo-400\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 30), "html", null, true);
        echo "</span>
                </h3>

                <p class=\"text-gray-100 mt-3\">We are always here for you</p>
            </div>

            <div class=\"md:w-1/2 flex md:justify-end mt-8 md:mt-0\">
                ";
        // line 37
        if ( !($context["user"] ?? null)) {
            // line 38
            echo "                <div class=\"max-w-sm bg-white rounded-lg\">
                    <div class=\"p-5 text-center\">
                        <h2 class=\"text-2xl font-semibold text-gray-700 fo\">Sign In</h2>

                        ";
            // line 42
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 43
            echo "
                    </div>
                </div>
                ";
        }
        // line 47
        echo "
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/home/owiesnama/Projects/ok-tamam/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 47,  99 => 43,  95 => 42,  89 => 38,  87 => 37,  77 => 30,  67 => 22,  61 => 18,  52 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"bg-gray-900\">
    <div class=\"container mx-auto px-6\">
        <nav class=\"flex flex-col py-2 sm:flex-row sm:justify-between sm:items-center\">
            <div class=\"flex items-center\">
                <a href=\"/\" class=\"text-2xl font-semibold text-white hover:text-gray-300\">Ok Tamam</a>
                <ul class=\"text-white flex items-center mx-4\">
                    <li><a href=\"/companies\">All Companies</a></li>
                </ul>
            </div>

            <div class=\"flex items-center -mx-2 mt-2 sm:mt-0\">
                {% if not user %}
                <a href=\"{{'register'|page}}\"
                    class=\"mx-2 px-3 py-2 font-semibold bg-black rounded text-sm text-white hover:bg-gray-800\">Sign
                    Up</a>

                {% else %}
                <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\"
                    class=\"mx-2 px-3 py-2 font-semibold bg-black rounded text-sm text-white hover:bg-gray-800\">Sign
                    Out</a>
                {% endif %}
            </div>
        </nav>

        <div class=\"flex items-center flex-col py-6 md:h-96 md:flex-row\">
            <div class=\"md:w-1/2\">
                <h2 class=\"text-4xl font-semibold text-gray-100\">Ok Tamam</h2>

                <h3 class=\"text-2xl font-semibold text-gray-100\">
                    Hello <span class=\"text-indigo-400\">{{user.name}}</span>
                </h3>

                <p class=\"text-gray-100 mt-3\">We are always here for you</p>
            </div>

            <div class=\"md:w-1/2 flex md:justify-end mt-8 md:mt-0\">
                {% if not user %}
                <div class=\"max-w-sm bg-white rounded-lg\">
                    <div class=\"p-5 text-center\">
                        <h2 class=\"text-2xl font-semibold text-gray-700 fo\">Sign In</h2>

                        {% partial account ~ '::signin' %}

                    </div>
                </div>
                {% endif %}

            </div>
        </div>
    </div>
</header>", "/home/owiesnama/Projects/ok-tamam/themes/demo/partials/site/header.htm", "");
    }
}
