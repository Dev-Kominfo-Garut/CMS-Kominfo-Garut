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

/* C:\Users\hamda\Documents\GitHub\CMS-Kominfo-Garut/themes/jumplink-viola/pages/work-progress.htm */
class __TwigTemplate_3aa14e5b7e98bc2cbaa7071cde5ef558a593eb108721a4bc54f17fd07a52bcb5 extends \Twig\Template
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
        $tags = array("partial" => 16, "put" => 17);
        $filters = array("theme" => 4);
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
        echo "<div class=\"container p-t-3\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <img class=\"center-block img-fluid\" src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo/thp-viola-garber-logo.png");
        echo "\" alt=\"\">
        </div>
    </div>
</div>

<div class=\"container p-t-3\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <p class=\"text-xs-center\">This site is currently under construction.</p>
        </div>
    </div>
</div>
";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("imprint"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 18
        echo "    <script type=\"text/javascript\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/work-progress.js");
        echo "\"></script>
";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\Users\\hamda\\Documents\\GitHub\\CMS-Kominfo-Garut/themes/jumplink-viola/pages/work-progress.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 17,  88 => 18,  86 => 17,  82 => 16,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container p-t-3\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <img class=\"center-block img-fluid\" src=\"{{ 'assets/images/logo/thp-viola-garber-logo.png' |theme }}\" alt=\"\">
        </div>
    </div>
</div>

<div class=\"container p-t-3\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <p class=\"text-xs-center\">This site is currently under construction.</p>
        </div>
    </div>
</div>
{% partial 'imprint' %}
{% put scripts %}
    <script type=\"text/javascript\" src=\"{{ 'assets/javascript/work-progress.js' |theme }}\"></script>
{% endput %}", "C:\\Users\\hamda\\Documents\\GitHub\\CMS-Kominfo-Garut/themes/jumplink-viola/pages/work-progress.htm", "");
    }
}
