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
                <a href=\"/\" class=\"text-2xl font-semibold text-white hover:text-gray-300 mr-4\">Ok Tamam</a>
                <ul class=\"text-white flex items-center -mx-2\">
                    <li class=\"mx-2\"><a href=\"/companies\">Companies</a></li>
                    <li class=\"mx-2\"><a href=\"/employees\">Employees</a></li>
                </ul>
            </div>

            <div class=\"flex items-center -mx-2 mt-2 sm:mt-0\">
                ";
        // line 13
        if ( !($context["user"] ?? null)) {
            // line 14
            echo "                <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
            echo "\"
                    class=\"mx-2 px-3 py-2 font-semibold bg-black rounded text-sm text-white hover:bg-gray-800\">Sign
                    Up</a>

                ";
        } else {
            // line 19
            echo "                <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\"
                    class=\"mx-2 px-3 py-2 font-semibold bg-black rounded text-sm text-white hover:bg-gray-800\">Sign
                    Out</a>
                ";
        }
        // line 23
        echo "            </div>
        </nav>

        <div class=\"flex items-center flex-col py-6 md:h-96 md:flex-row\">
            <div class=\"md:w-1/2\">
                <h2 class=\"text-4xl font-semibold text-gray-100\">Ok Tamam</h2>

                <h3 class=\"text-2xl font-semibold text-gray-100\">
                    Hello <span class=\"text-indigo-400\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 31), "html", null, true);
        echo "</span>
                </h3>

                <p class=\"text-gray-100 mt-3\">We are always here for you</p>
            </div>

            <div class=\"md:w-1/2 flex md:justify-end mt-8 md:mt-0\">
                ";
        // line 38
        if ( !($context["user"] ?? null)) {
            // line 39
            echo "                <div class=\" bg-white rounded-lg\">
                    <div class=\"p-5 text-center\">
                        <h2 class=\"text-2xl font-semibold text-gray-700 fo\">Sign In</h2>

                        ";
            // line 43
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSignin"]);
            echo "
                        <div class=\"flex flex-col mb-4\">
                            <label for=\"userSigninLogin\" class=\"self-start\">";
            // line 45
            echo twig_escape_filter($this->env, ($context["loginAttributeLabel"] ?? null), "html", null, true);
            echo "</label>
                            <input name=\"login\" type=\"text\" class=\"border rounded py-4 px-2 w-full\" id=\"userSigninLogin\"
                                placeholder=\"Enter your ";
            // line 47
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["loginAttributeLabel"] ?? null)), "html", null, true);
            echo "\" />
                        </div>

                        <div class=\"flex flex-col mb-4\">
                            <label for=\"userSigninPassword\" class=\"self-start\">Password</label>
                            <input name=\"password\" type=\"password\" class=\"border rounded py-4 px-2 wml-2\" id=\"userSigninPassword\"
                                placeholder=\"Enter your password\" />
                        </div>

                        ";
            // line 56
            if ((($context["rememberLoginMode"] ?? null) == "ask")) {
                // line 57
                echo "                        <div class=\"flex mb-4\">
                            <div class=\"checkbox\">
                                <label><input name=\"remember\" type=\"checkbox\" value=\"1\">Stay logged in</label>
                            </div>
                        </div>
                        ";
            }
            // line 63
            echo "
                        <button type=\"submit\" class=\"bg-blue-600 py-2 px-4 rounded text-white focus:shadow-outline\">Sign in</button>

                        ";
            // line 66
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "

                        

                    </div>
                </div>
                ";
        }
        // line 73
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
        return array (  143 => 73,  133 => 66,  128 => 63,  120 => 57,  118 => 56,  106 => 47,  101 => 45,  96 => 43,  90 => 39,  88 => 38,  78 => 31,  68 => 23,  62 => 19,  53 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"bg-gray-900\">
    <div class=\"container mx-auto px-6\">
        <nav class=\"flex flex-col py-2 sm:flex-row sm:justify-between sm:items-center\">
            <div class=\"flex items-center\">
                <a href=\"/\" class=\"text-2xl font-semibold text-white hover:text-gray-300 mr-4\">Ok Tamam</a>
                <ul class=\"text-white flex items-center -mx-2\">
                    <li class=\"mx-2\"><a href=\"/companies\">Companies</a></li>
                    <li class=\"mx-2\"><a href=\"/employees\">Employees</a></li>
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
                <div class=\" bg-white rounded-lg\">
                    <div class=\"p-5 text-center\">
                        <h2 class=\"text-2xl font-semibold text-gray-700 fo\">Sign In</h2>

                        {{ form_ajax('onSignin') }}
                        <div class=\"flex flex-col mb-4\">
                            <label for=\"userSigninLogin\" class=\"self-start\">{{ loginAttributeLabel }}</label>
                            <input name=\"login\" type=\"text\" class=\"border rounded py-4 px-2 w-full\" id=\"userSigninLogin\"
                                placeholder=\"Enter your {{ loginAttributeLabel|lower }}\" />
                        </div>

                        <div class=\"flex flex-col mb-4\">
                            <label for=\"userSigninPassword\" class=\"self-start\">Password</label>
                            <input name=\"password\" type=\"password\" class=\"border rounded py-4 px-2 wml-2\" id=\"userSigninPassword\"
                                placeholder=\"Enter your password\" />
                        </div>

                        {% if rememberLoginMode == 'ask' %}
                        <div class=\"flex mb-4\">
                            <div class=\"checkbox\">
                                <label><input name=\"remember\" type=\"checkbox\" value=\"1\">Stay logged in</label>
                            </div>
                        </div>
                        {% endif %}

                        <button type=\"submit\" class=\"bg-blue-600 py-2 px-4 rounded text-white focus:shadow-outline\">Sign in</button>

                        {{ form_close() }}

                        

                    </div>
                </div>
                {% endif %}

            </div>
        </div>
    </div>
</header>", "/home/owiesnama/Projects/ok-tamam/themes/demo/partials/site/header.htm", "");
    }
}
