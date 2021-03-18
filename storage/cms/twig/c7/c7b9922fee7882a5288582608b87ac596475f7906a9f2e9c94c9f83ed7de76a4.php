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

/* C:\Users\hamda\Documents\GitHub\CMS-Kominfo-Garut/themes/jumplink-viola/layouts/default.htm */
class __TwigTemplate_f3c7ff10a81d7eee01b6b527458df622e2f63e01d9a4cf0a818a93f39c79bf42 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("styles" => 13, "if" => 14, "set" => 15, "partial" => 25, "page" => 26, "framework" => 45, "scripts" => 51);
        $filters = array("escape" => 5, "theme" => 19);
        $functions = array("str_studly" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'if', 'set', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme'],
                ['str_studly']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 5), "site_name", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "meta_description", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "meta_title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"Pascal Garber\">
        <meta http-equiv=\"language\" content=\"deutsch, de\">
        <meta name=\"Keywords\" content=\"Viola,Garber,Tierheilpraxis,Tierheilpraktikerin,Cuxhaven,Klassische Homöopathie,Homöopathie,Phytotherapie,Akupunktur,Praxis,Hausbesuch,Naturheilverfahren\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        ";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 14
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 14), "color", [], "any", false, false, true, 14)) {
            // line 15
            echo "            ";
            $context["style"] = (("assets/scss/theme-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 15), "color", [], "any", false, false, true, 15), 15, $this->source)) . ".scss");
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            ";
            $context["style"] = "assets/scss/theme-blue.scss";
            // line 18
            echo "        ";
        }
        // line 19
        echo "        <link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => ($context["style"] ?? null)]);
        echo "\" rel=\"stylesheet\">
    </head>
    <body id=\"";
        // line 21
        echo call_user_func_array($this->env->getFunction('str_studly')->getCallable(), ["studly", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 21), "title", [], "any", false, false, true, 21), 21, $this->source)]);
        echo "\" data-spy=\"scroll\">
        
        ";
        // line 24
        echo "        <section id=\"layout-content\">
            ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "            ";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 27
        echo "        </section>

        ";
        // line 30
        echo "        <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/within-viewport/withinviewport.js", 1 => "assets/vendor/jquery/dist/jquery.js", 2 => "assets/vendor/jquery-ui/jquery-ui.js", 3 => "assets/vendor/within-viewport/jquery.withinviewport.js", 4 => "assets/vendor/tether/dist/js/tether.js", 5 => "assets/vendor/bootstrap-backward/dist/js/bootstrap.js", 6 => "assets/vendor/simpler-sidebar/dist/jquery.simpler-sidebar.js", 7 => "assets/vendor/Stickyfill/dist/stickyfill.js", 8 => "assets/vendor/bootstrap-validator/dist/validator.js", 9 => "assets/vendor/leaflet/dist/leaflet.js", 10 => "assets/javascript/app.js"]);
        // line 43
        echo "\"></script>
        
        ";
        // line 45
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 46
        echo "        
        ";
        // line 48
        echo "        <script>
            L.Icon.Default.imagePath = \"/themes/";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 49), "dirname", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "/assets/vendor/leaflet/dist/images/\";
        </script>
        ";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 52
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\hamda\\Documents\\GitHub\\CMS-Kominfo-Garut/themes/jumplink-viola/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 52,  152 => 51,  147 => 49,  144 => 48,  141 => 46,  137 => 45,  133 => 43,  130 => 30,  126 => 27,  123 => 26,  119 => 25,  116 => 24,  111 => 21,  105 => 19,  102 => 18,  99 => 17,  96 => 16,  93 => 15,  90 => 14,  87 => 13,  78 => 7,  74 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>{{ this.theme.site_name }} - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"Pascal Garber\">
        <meta http-equiv=\"language\" content=\"deutsch, de\">
        <meta name=\"Keywords\" content=\"Viola,Garber,Tierheilpraxis,Tierheilpraktikerin,Cuxhaven,Klassische Homöopathie,Homöopathie,Phytotherapie,Akupunktur,Praxis,Hausbesuch,Naturheilverfahren\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        {% styles %}
        {% if this.theme.color %}
            {% set style = 'assets/scss/theme-' ~ this.theme.color ~ '.scss' %}
        {% else %}
            {% set style = 'assets/scss/theme-blue.scss' %}
        {% endif %}
        <link href=\"{{ [style,]|theme }}\" rel=\"stylesheet\">
    </head>
    <body id=\"{{ str_studly(this.page.title) }}\" data-spy=\"scroll\">
        
        {# Content #}
        <section id=\"layout-content\">
            {% partial 'navigation' %}
            {% page %}
        </section>

        {# Scripts #}
        <script src=\"{{ [
            'assets/vendor/within-viewport/withinviewport.js',
            'assets/vendor/jquery/dist/jquery.js',
            'assets/vendor/jquery-ui/jquery-ui.js',
            'assets/vendor/within-viewport/jquery.withinviewport.js',
            'assets/vendor/tether/dist/js/tether.js',
            'assets/vendor/bootstrap-backward/dist/js/bootstrap.js',
            'assets/vendor/simpler-sidebar/dist/jquery.simpler-sidebar.js',
            'assets/vendor/Stickyfill/dist/stickyfill.js',
            'assets/vendor/bootstrap-validator/dist/validator.js',
            'assets/vendor/leaflet/dist/leaflet.js',
            
            'assets/javascript/app.js',
        ]|theme }}\"></script>
        
        {% framework %}
        
        {# More theme variables #}
        <script>
            L.Icon.Default.imagePath = \"/themes/{{this.theme.dirname}}/assets/vendor/leaflet/dist/images/\";
        </script>
        {% scripts %}

    </body>
</html>", "C:\\Users\\hamda\\Documents\\GitHub\\CMS-Kominfo-Garut/themes/jumplink-viola/layouts/default.htm", "");
    }
}
