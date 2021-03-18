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

/* C:\Users\hamda\Documents\GitHub\CMS-Kominfo-Garut/themes/jumplink-viola/partials/imprint.htm */
class __TwigTemplate_bf942a355735758ac195dee65b45dfb4689a275f689cd96c0583420d63627430 extends \Twig\Template
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
        $tags = array("if" => 39);
        $filters = array("escape" => 5, "theme" => 30);
        $functions = array("str_camel" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'theme'],
                ['str_camel']
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
        echo "<div id=\"imprint\" data-target=\"#imprint\">
    <div class=\"container-fluid fg-gray-light subtext\">
        <div class=\"row\">
            <div class=\"col-xs-12 text-center\">
                <div class=\"display-4\">";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["infotext1"] ?? null), 5, $this->source), "html", null, true);
        echo "</div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid bg-gray-lighter subtext\">
        <div class=\"row\">
            <div class=\"col-xs-12 text-center\">
                <div class=\"display-4\">";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["infotext2"] ?? null), 12, $this->source), "html", null, true);
        echo "</div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-8 text-center text-md-left py-4\">
                <strong><h5>";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["headertitle"] ?? null), 19, $this->source), "html", null, true);
        echo "</h5></strong>
                <div class=\"fg-gray-light\">
                    <strong>";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 21), "company_name", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "</strong>
                    <br><a href=\"tel:";
        // line 22
        echo call_user_func_array($this->env->getFunction('str_camel')->getCallable(), ["camel", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 22), "phone_number", [], "any", false, false, true, 22), 22, $this->source)]);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 22), "phone_number", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "</a>
                    <br><a href=\"mailto:";
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 23), "email_address", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 23), "email_address", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "</a>
                </div>
            </div>

            <div class=\"col-xs-12 col-md-4\">
                <div class=\"row\">
                    <div class=\"col-xs-6 py-4\">
                        <img class=\"center-block img-fluid\" style=\"max-height: 120px;\" src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/footer_logo_01.svg");
        echo "\">
                    </div>
                    <div class=\"col-xs-6 py-4\">
                        <img class=\"center-block img-fluid\" style=\"max-height: 120px;\" src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/footer_logo_02.svg");
        echo "\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 39
        if (($context["showcopyright"] ?? null)) {
            // line 40
            echo "        <div class=\"container-fluid bg-gray\">
            <div class=\"row\">
                <div class=\"col-xs-12 text-center bg-inverse py-3\">
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyrighturl"] ?? null), 43, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright"] ?? null), 43, $this->source), "html", null, true);
            echo "</a>
                </div>
            </div>
        </div>
    ";
        }
        // line 48
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\hamda\\Documents\\GitHub\\CMS-Kominfo-Garut/themes/jumplink-viola/partials/imprint.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 48,  137 => 43,  132 => 40,  130 => 39,  121 => 33,  115 => 30,  103 => 23,  97 => 22,  93 => 21,  88 => 19,  78 => 12,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"imprint\" data-target=\"#imprint\">
    <div class=\"container-fluid fg-gray-light subtext\">
        <div class=\"row\">
            <div class=\"col-xs-12 text-center\">
                <div class=\"display-4\">{{infotext1}}</div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid bg-gray-lighter subtext\">
        <div class=\"row\">
            <div class=\"col-xs-12 text-center\">
                <div class=\"display-4\">{{infotext2}}</div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-8 text-center text-md-left py-4\">
                <strong><h5>{{headertitle}}</h5></strong>
                <div class=\"fg-gray-light\">
                    <strong>{{ this.theme.company_name }}</strong>
                    <br><a href=\"tel:{{ str_camel(this.theme.phone_number) }}\">{{ this.theme.phone_number }}</a>
                    <br><a href=\"mailto:{{ this.theme.email_address }}\">{{ this.theme.email_address }}</a>
                </div>
            </div>

            <div class=\"col-xs-12 col-md-4\">
                <div class=\"row\">
                    <div class=\"col-xs-6 py-4\">
                        <img class=\"center-block img-fluid\" style=\"max-height: 120px;\" src=\"{{'assets/images/footer_logo_01.svg'|theme}}\">
                    </div>
                    <div class=\"col-xs-6 py-4\">
                        <img class=\"center-block img-fluid\" style=\"max-height: 120px;\" src=\"{{'assets/images/footer_logo_02.svg'|theme}}\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% if showcopyright %}
        <div class=\"container-fluid bg-gray\">
            <div class=\"row\">
                <div class=\"col-xs-12 text-center bg-inverse py-3\">
                    <a href=\"{{copyrighturl}}\">{{copyright}}</a>
                </div>
            </div>
        </div>
    {% endif %}
</div>", "C:\\Users\\hamda\\Documents\\GitHub\\CMS-Kominfo-Garut/themes/jumplink-viola/partials/imprint.htm", "");
    }
}
