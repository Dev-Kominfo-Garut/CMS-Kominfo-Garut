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

/* C:\Users\hamda\Documents\GitHub\CMS-Kominfo-Garut/themes/jumplink-viola/layouts/info.htm */
class __TwigTemplate_415beab339cb23803ab07881f764a81349c72fc3bc0a5ce8d8fe17a324b0d90b extends \Twig\Template
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
        $tags = array("styles" => 11, "page" => 18);
        $filters = array("escape" => 5, "theme" => 14);
        $functions = array("str_studly" => 16);

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'page'],
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
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        ";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 12
        echo "        <link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/theme.css"]);
        // line 14
        echo "\" rel=\"stylesheet\">
    </head>
    <body id=\"";
        // line 16
        echo call_user_func_array($this->env->getFunction('str_studly')->getCallable(), ["studly", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 16), "title", [], "any", false, false, true, 16), 16, $this->source)]);
        echo "\">
        <section id=\"layout-content\">
            ";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 19
        echo "        </section>
        
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\hamda\\Documents\\GitHub\\CMS-Kominfo-Garut/themes/jumplink-viola/layouts/info.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 19,  98 => 18,  93 => 16,  89 => 14,  86 => 12,  83 => 11,  76 => 7,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>{{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"Pascal Garber\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        {% styles %}
        <link href=\"{{ [
            'assets/css/theme.css',
        ]|theme }}\" rel=\"stylesheet\">
    </head>
    <body id=\"{{ str_studly(this.page.title) }}\">
        <section id=\"layout-content\">
            {% page %}
        </section>
        
    </body>
</html>", "C:\\Users\\hamda\\Documents\\GitHub\\CMS-Kominfo-Garut/themes/jumplink-viola/layouts/info.htm", "");
    }
}
