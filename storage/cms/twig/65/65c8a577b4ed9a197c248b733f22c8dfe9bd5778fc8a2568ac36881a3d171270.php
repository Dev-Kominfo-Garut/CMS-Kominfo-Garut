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

/* C:\Users\hamda\Documents\GitHub\CMS-Kominfo-Garut/themes/jumplink-viola/partials/navigation/navbar-items.htm */
class __TwigTemplate_b040c57999b13c1236eb2ef0cd28a68b5e4eb52951df622ca5808a8c14a65653 extends \Twig\Template
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
        $tags = array("for" => 2, "if" => 4, "partial" => 11);
        $filters = array("escape" => 1);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'partial'],
                ['escape'],
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
        echo "<ul class=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["class"] ?? null), 1, $this->source), "html", null, true);
        echo "\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["itemClass"] ?? null), 3, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 3), "cssClass", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 3)) ? ("dropdown") : (""));
            echo "\">
            <a class=\"nav-link\" ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 4)) {
                echo "data-toggle=\"dropdown\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 4), "cssClass", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo "\">
                ";
            // line 5
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "
                ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 6)) {
                // line 7
                echo "                    <span class=\"caret\"></span>
                ";
            }
            // line 9
            echo "            </a>
            ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 10)) {
                // line 11
                echo "                ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 11)                ;
                $context['__cms_partial_params']['class'] = "dropdown-menu"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-items"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 12
                echo "            ";
            }
            // line 13
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\hamda\\Documents\\GitHub\\CMS-Kominfo-Garut/themes/jumplink-viola/partials/navigation/navbar-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 15,  115 => 13,  112 => 12,  105 => 11,  103 => 10,  100 => 9,  96 => 7,  94 => 6,  90 => 5,  80 => 4,  71 => 3,  67 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"{{ class }}\">
    {% for item in items %}
        <li class=\"{{ itemClass }} {{ item.viewBag.cssClass }} {{ item.items ? 'dropdown' : '' }}\">
            <a class=\"nav-link\" {% if item.items %}data-toggle=\"dropdown\"{% endif %} href=\"{{ item.url }}#{{ item.viewBag.cssClass }}\">
                {{ item.title }}
                {% if item.items %}
                    <span class=\"caret\"></span>
                {% endif %}
            </a>
            {% if item.items %}
                {% partial 'menu-items' items=item.items class='dropdown-menu' %}
            {% endif %}
        </li>
    {% endfor %}
</ul>", "C:\\Users\\hamda\\Documents\\GitHub\\CMS-Kominfo-Garut/themes/jumplink-viola/partials/navigation/navbar-items.htm", "");
    }
}
