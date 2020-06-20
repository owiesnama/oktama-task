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

/* /home/owiesnama/Projects/ok-tamam/themes/demo/pages/register.htm */
class __TwigTemplate_1c1665d44e0e5be25a1a84bcf23d6f6472be5e5e004c064f9023ceb7f00cb49a extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>October CMS - ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_description", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_title", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"OctoberCMS\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"OctoberCMS\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
    <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\" rel=\"stylesheet\">
    ";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 15
        echo "    <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>

</head>

<body class=\"bg-gray-900 flex items-center justify-center min-h-screen\">

    ";
        // line 21
        if ( !($context["user"] ?? null)) {
            // line 22
            echo "    <div class=\"max-w-sm bg-white rounded-lg p-4\">
        ";
            // line 23
            if (($context["canRegister"] ?? null)) {
                // line 24
                echo "        <h3 class=\"text-xl font-bold text-gray-800\">Register</h3>

        ";
                // line 26
                echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onRegister"]);
                echo "

        <div class=\"flex flex-col mt-4\">
            <label for=\"registerName\" class=\"self-start text-gray-700\">Full Name</label>
            <input name=\"name\" type=\"text\" class=\"border py-3 px-2 rounded\" id=\"registerName\" placeholder=\"Enter your full name\" />
        </div>

        <div class=\"flex flex-col mt-4\">
            <label for=\"registerEmail\" class=\"self-start text-gray-700\">Email</label>
            <input name=\"email\" type=\"email\" class=\"border py-3 px-2 rounded\" id=\"registerEmail\" placeholder=\"Enter your email\" />
        </div>

        ";
                // line 38
                if ((($context["loginAttribute"] ?? null) == "username")) {
                    // line 39
                    echo "        <div class=\"flex flex-col mt-4\">
            <label for=\"registerUsername\" class=\"self-start text-gray-700\">Username</label>
            <input name=\"username\" type=\"text\" class=\"border py-3 px-2 rounded\" id=\"registerUsername\"
                placeholder=\"Enter your username\" />
        </div>
        ";
                }
                // line 45
                echo "
        <div class=\"flex flex-col mt-4\">
            <label for=\"registerPassword\" class=\"self-start text-gray-700\">Password</label>
            <input name=\"password\" type=\"password\" class=\"border py-3 px-2 rounded\" id=\"registerPassword\"
                placeholder=\"Choose a password\" />
        </div>

        <button type=\"submit\" class=\"bg-blue-700 py-3 px-5 rounded mt-4 text-white foucs:shadow-outline\">Register</button>

        ";
                // line 54
                echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
                echo "
        ";
            } else {
                // line 56
                echo "        <!-- Registration is disabled. -->
        ";
            }
            // line 58
            echo "
    </div>
    ";
        }
        // line 61
        echo "
    ";
        // line 62
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 63
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 64
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/home/owiesnama/Projects/ok-tamam/themes/demo/pages/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 64,  155 => 63,  144 => 62,  141 => 61,  136 => 58,  132 => 56,  127 => 54,  116 => 45,  108 => 39,  106 => 38,  91 => 26,  87 => 24,  85 => 23,  82 => 22,  80 => 21,  70 => 15,  67 => 14,  63 => 13,  59 => 12,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>October CMS - {{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"OctoberCMS\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"OctoberCMS\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
    <link href=\"{{ 'assets/css/main.css'|theme }}\" rel=\"stylesheet\">
    {% styles %}
    <script src=\"{{ 'assets/vendor/jquery.js'|theme}}\"></script>

</head>

<body class=\"bg-gray-900 flex items-center justify-center min-h-screen\">

    {% if not user %}
    <div class=\"max-w-sm bg-white rounded-lg p-4\">
        {% if canRegister %}
        <h3 class=\"text-xl font-bold text-gray-800\">Register</h3>

        {{ form_ajax('onRegister') }}

        <div class=\"flex flex-col mt-4\">
            <label for=\"registerName\" class=\"self-start text-gray-700\">Full Name</label>
            <input name=\"name\" type=\"text\" class=\"border py-3 px-2 rounded\" id=\"registerName\" placeholder=\"Enter your full name\" />
        </div>

        <div class=\"flex flex-col mt-4\">
            <label for=\"registerEmail\" class=\"self-start text-gray-700\">Email</label>
            <input name=\"email\" type=\"email\" class=\"border py-3 px-2 rounded\" id=\"registerEmail\" placeholder=\"Enter your email\" />
        </div>

        {% if loginAttribute == \"username\" %}
        <div class=\"flex flex-col mt-4\">
            <label for=\"registerUsername\" class=\"self-start text-gray-700\">Username</label>
            <input name=\"username\" type=\"text\" class=\"border py-3 px-2 rounded\" id=\"registerUsername\"
                placeholder=\"Enter your username\" />
        </div>
        {% endif %}

        <div class=\"flex flex-col mt-4\">
            <label for=\"registerPassword\" class=\"self-start text-gray-700\">Password</label>
            <input name=\"password\" type=\"password\" class=\"border py-3 px-2 rounded\" id=\"registerPassword\"
                placeholder=\"Choose a password\" />
        </div>

        <button type=\"submit\" class=\"bg-blue-700 py-3 px-5 rounded mt-4 text-white foucs:shadow-outline\">Register</button>

        {{ form_close() }}
        {% else %}
        <!-- Registration is disabled. -->
        {% endif %}

    </div>
    {% endif %}

    {% framework extras %}
    {% scripts %}
</body>

</html>", "/home/owiesnama/Projects/ok-tamam/themes/demo/pages/register.htm", "");
    }
}
