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

/* C:\xampp\htdocs\kominfogarut/themes/jumplink-viola/partials/navigation/sidebar-items.htm */
class __TwigTemplate_558c638d9054bf97c2424b99c64ca9a6e563c1ceb65686d2a90de9ca4f8fe03a extends \Twig\Template
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
        $tags = array("for" => 2, "if" => 3, "partial" => 10);
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
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["class"] ?? null), 1, $this->source), "html", null, true);
        echo "\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        <a class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["itemClass"] ?? null), 3, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 3), "cssClass", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 3)) ? ("dropdown") : (""));
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 3)) {
                echo "data-toggle=\"dropdown\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 3), "cssClass", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo "\">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo "
            ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 5)) {
                // line 6
                echo "                <span class=\"caret\"></span>
            ";
            }
            // line 8
            echo "        </a>
        ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 9)) {
                // line 10
                echo "            ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 10)                ;
                $context['__cms_partial_params']['class'] = "dropdown-menu"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-items"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 11
                echo "        ";
            }
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\kominfogarut/themes/jumplink-viola/partials/navigation/sidebar-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 13,  113 => 12,  110 => 11,  103 => 10,  101 => 9,  98 => 8,  94 => 6,  92 => 5,  88 => 4,  71 => 3,  67 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"{{ class }}\">
    {% for item in items %}
        <a class=\"{{ itemClass }} {{ item.viewBag.cssClass }} {{ item.items ? 'dropdown' : '' }}\" {% if item.items %}data-toggle=\"dropdown\"{% endif %} href=\"{{ item.url }}#{{ item.viewBag.cssClass }}\">
            {{ item.title }}
            {% if item.items %}
                <span class=\"caret\"></span>
            {% endif %}
        </a>
        {% if item.items %}
            {% partial 'menu-items' items=item.items class='dropdown-menu' %}
        {% endif %}
    {% endfor %}
</div>", "C:\\xampp\\htdocs\\kominfogarut/themes/jumplink-viola/partials/navigation/sidebar-items.htm", "");
    }
}
