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

/* C:\xampp\htdocs\kominfogarut/themes/jumplink-viola/partials/top_header.htm */
class __TwigTemplate_3058835775f6281d8eea3669ac145c814025b0aad911c063724959254132202f extends \Twig\Template
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
        $tags = array("if" => 1, "set" => 3, "partial" => 65);
        $filters = array("theme" => 22, "page" => 66);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'partial'],
                ['theme', 'page'],
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
        if ((( !($context["slideshow"] ?? null) || (twig_get_attribute($this->env, $this->source, ($context["slideshow"] ?? null), "slideshow", [], "any", false, false, true, 1) == null)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slideshow"] ?? null), "slideshow", [], "any", false, false, true, 1), "name", [], "any", false, false, true, 1) == "Example"))) {
            // line 2
            echo "    ";
            // line 3
            echo "    ";
            $context["_slideshow"] = ["id" => 2, "name" => "Header", "created_at" => "2016-05-23 10:22:39", "updated_at" => "2016-05-23 10:52:46", "slides" => [0 => ["id" => 4, "name" => "1", "description" => "<h1>Welcome</h1><p>Donec quis magna consectetur, semper felis vitae, finibus libero. Sed laoreet diam odio.</p>", "link" => "", "sort_order" => 4, "created_at" => "2016-05-23 10:52:10", "updated_at" => "2016-05-25 09:10:32", "slideshow_id" => 2, "is_published" => 1, "published_at" => null, "unpublished_at" => null, "image" => ["path" => $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/placeholders/header_1.jpg")]], 1 => ["id" => 5, "name" => "2", "description" => "", "link" => "", "sort_order" => 5, "created_at" => "2016-05-23 10:52:32", "updated_at" => "2016-05-23 10:52:32", "slideshow_id" => 2, "is_published" => 1, "published_at" => null, "unpublished_at" => null, "image" => ["path" => $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/placeholders/header_2.jpg")]], 2 => ["id" => 6, "name" => "3", "description" => "", "link" => "", "sort_order" => 6, "created_at" => "2016-05-23 10:52:42", "updated_at" => "2016-05-23 10:52:42", "slideshow_id" => 2, "is_published" => 1, "published_at" => null, "unpublished_at" => null, "image" => ["path" => $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/placeholders/header_3.jpg")]]]];
        } else {
            // line 61
            echo "    ";
            $context["_slideshow"] = twig_get_attribute($this->env, $this->source, ($context["slideshow"] ?? null), "slideshow", [], "any", false, false, true, 61);
        }
        // line 63
        echo "
<header id=\"top\" data-target=\"#top\">
    ";
        // line 65
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['slideshow'] = ($context["_slideshow"] ?? null)        ;
        $context['__cms_partial_params']['id'] = "carousel-top-header"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slideshow"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 66
        echo "    <a class=\"icon-circle mx-auto\" href=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 66), "id", [], "any", false, false, true, 66) != "home")) {
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        }
        echo "#about\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Weiter\">
        <i class=\"fa fa-chevron-circle-down\"></i>
    </a>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\kominfogarut/themes/jumplink-viola/partials/top_header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 66,  78 => 65,  74 => 63,  70 => 61,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not slideshow or slideshow.slideshow == null or slideshow.slideshow.name == 'Example' %}
    {# placeholder slidehsow if no slideshow is set #}
    {% set _slideshow = {
           \"id\":2,
           \"name\":\"Header\",
           \"created_at\":\"2016-05-23 10:22:39\",
           \"updated_at\":\"2016-05-23 10:52:46\",
           \"slides\":[
              {
                 \"id\":4,
                 \"name\":\"1\",
                 \"description\":\"<h1>Welcome<\\/h1><p>Donec quis magna consectetur, semper felis vitae, finibus libero. Sed laoreet diam odio.<\\/p>\",
                 \"link\":\"\",
                 \"sort_order\":4,
                 \"created_at\":\"2016-05-23 10:52:10\",
                 \"updated_at\":\"2016-05-25 09:10:32\",
                 \"slideshow_id\":2,
                 \"is_published\":1,
                 \"published_at\":null,
                 \"unpublished_at\":null,
                 \"image\": {
                     \"path\": \"/assets/images/placeholders/header_1.jpg\" | theme
                 }
              },
              {
                 \"id\":5,
                 \"name\":\"2\",
                 \"description\":\"\",
                 \"link\":\"\",
                 \"sort_order\":5,
                 \"created_at\":\"2016-05-23 10:52:32\",
                 \"updated_at\":\"2016-05-23 10:52:32\",
                 \"slideshow_id\":2,
                 \"is_published\":1,
                 \"published_at\":null,
                 \"unpublished_at\":null,
                 \"image\": {
                     \"path\": \"/assets/images/placeholders/header_2.jpg\" | theme
                 }
              },
              {
                 \"id\":6,
                 \"name\":\"3\",
                 \"description\":\"\",
                 \"link\":\"\",
                 \"sort_order\":6,
                 \"created_at\":\"2016-05-23 10:52:42\",
                 \"updated_at\":\"2016-05-23 10:52:42\",
                 \"slideshow_id\":2,
                 \"is_published\":1,
                 \"published_at\":null,
                 \"unpublished_at\":null,
                 \"image\": {
                     \"path\": \"/assets/images/placeholders/header_3.jpg\" | theme
                 }
              }
           ]
        }
    %}
{% else %}
    {% set _slideshow = slideshow.slideshow %}
{% endif %}

<header id=\"top\" data-target=\"#top\">
    {% partial 'slideshow' slideshow=_slideshow id='carousel-top-header' %}
    <a class=\"icon-circle mx-auto\" href=\"{% if this.page.id != 'home' %}{{'home'|page}}{% endif %}#about\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Weiter\">
        <i class=\"fa fa-chevron-circle-down\"></i>
    </a>
</header>", "C:\\xampp\\htdocs\\kominfogarut/themes/jumplink-viola/partials/top_header.htm", "");
    }
}
