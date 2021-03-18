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

/* C:\Users\hamda\Documents\GitHub\CMS-Kominfo-Garut/themes/jumplink-viola/partials/navigation.htm */
class __TwigTemplate_428af98a0d6c07893a266c6996c7cf8aff34c48ad56c098a78ef88cc7f3a0145 extends \Twig\Template
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
        $tags = array("partial" => 9, "put" => 21);
        $filters = array("theme" => 22);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'put'],
                ['theme'],
                []
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
        echo "<!-- Nav -->
<nav class=\"navbar fixed-top navbar-toggleable-xs navbar-light bg-white-transparent fg-primary navbar-big\" id=\"main-navbar\">
    <button class=\"navbar-toggler navbar-toggler-right hidden-md-up\" type=\"button\">
        &#9776;
    </button>
    <div class=\"container\">
        <a href=\"/\" class=\"navbar-brand\">&nbsp;</a>
        <div class=\"w-100\">
            ";
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["main"] ?? null), "menuItems", [], "any", false, false, true, 9)        ;
        $context['__cms_partial_params']['class'] = "hidden-xs-down navbar-nav d-flex justify-content-end"        ;
        $context['__cms_partial_params']['itemClass'] = "nav-item"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation/navbar-items"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "        </div>
    </div>
</nav>

<!-- http://dcdeiv.github.io/simpler-sidebar/ -->
<div id=\"sidebar\">
    <div id=\"sidebar-wrapper\" class=\"sidebar-wrapper bg-white fg-primary\">
        ";
        // line 17
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["main"] ?? null), "menuItems", [], "any", false, false, true, 17)        ;
        $context['__cms_partial_params']['class'] = "list-group"        ;
        $context['__cms_partial_params']['itemClass'] = "list-group-item"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation/sidebar-items"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "    </div>
</div>

";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 22
        echo "    <script type=\"text/javascript\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/partials/navigation.js");
        echo "\"></script>
";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\Users\\hamda\\Documents\\GitHub\\CMS-Kominfo-Garut/themes/jumplink-viola/partials/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 21,  102 => 22,  100 => 21,  95 => 18,  88 => 17,  79 => 10,  72 => 9,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Nav -->
<nav class=\"navbar fixed-top navbar-toggleable-xs navbar-light bg-white-transparent fg-primary navbar-big\" id=\"main-navbar\">
    <button class=\"navbar-toggler navbar-toggler-right hidden-md-up\" type=\"button\">
        &#9776;
    </button>
    <div class=\"container\">
        <a href=\"/\" class=\"navbar-brand\">&nbsp;</a>
        <div class=\"w-100\">
            {% partial 'navigation/navbar-items' items=main.menuItems class='hidden-xs-down navbar-nav d-flex justify-content-end' itemClass='nav-item' %}
        </div>
    </div>
</nav>

<!-- http://dcdeiv.github.io/simpler-sidebar/ -->
<div id=\"sidebar\">
    <div id=\"sidebar-wrapper\" class=\"sidebar-wrapper bg-white fg-primary\">
        {% partial 'navigation/sidebar-items' items=main.menuItems class='list-group' itemClass='list-group-item' %}
    </div>
</div>

{% put scripts %}
    <script type=\"text/javascript\" src=\"{{ 'assets/javascript/partials/navigation.js' |theme }}\"></script>
{% endput %}", "C:\\Users\\hamda\\Documents\\GitHub\\CMS-Kominfo-Garut/themes/jumplink-viola/partials/navigation.htm", "");
    }
}
