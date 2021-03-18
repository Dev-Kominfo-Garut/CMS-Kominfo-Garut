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

/* C:\xampp\htdocs\kominfogarut/themes/responsiv-flat/partials/footer.htm */
class __TwigTemplate_4d20506cd39f042dacc856ee0eefc07991b9c78767bc4b688b968f8ab5d1061c extends \Twig\Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<div class=\"container\">
    <nav class=\"pull-left\">
        <ul>
            <li class=\"active\">
                <a href=\"#\">Home</a>
            </li>
            <li>
                <a href=\"#\">Company</a>
            </li>
            <li>
                <a href=\"#\">Portfolio</a>
            </li>
            <li>
                <a href=\"#\">Blog</a>
            </li>
            <li>
                <a href=\"#\">Contact</a>
            </li>
        </ul>
    </nav>
    <div class=\"social-btns pull-right\">
        <a href=\"#\"><div class=\"fui-vimeo\"></div><div class=\"fui-vimeo\"></div></a>
        <a href=\"#\"><div class=\"fui-facebook\"></div><div class=\"fui-facebook\"></div></a>
        <a href=\"#\"><div class=\"fui-twitter\"></div><div class=\"fui-twitter\"></div></a>
    </div>
    <div class=\"additional-links\">
        Be sure to take a look to our <a href=\"#\">Terms of Use</a> and <a href=\"#\">Privacy Policy</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\kominfogarut/themes/responsiv-flat/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <nav class=\"pull-left\">
        <ul>
            <li class=\"active\">
                <a href=\"#\">Home</a>
            </li>
            <li>
                <a href=\"#\">Company</a>
            </li>
            <li>
                <a href=\"#\">Portfolio</a>
            </li>
            <li>
                <a href=\"#\">Blog</a>
            </li>
            <li>
                <a href=\"#\">Contact</a>
            </li>
        </ul>
    </nav>
    <div class=\"social-btns pull-right\">
        <a href=\"#\"><div class=\"fui-vimeo\"></div><div class=\"fui-vimeo\"></div></a>
        <a href=\"#\"><div class=\"fui-facebook\"></div><div class=\"fui-facebook\"></div></a>
        <a href=\"#\"><div class=\"fui-twitter\"></div><div class=\"fui-twitter\"></div></a>
    </div>
    <div class=\"additional-links\">
        Be sure to take a look to our <a href=\"#\">Terms of Use</a> and <a href=\"#\">Privacy Policy</a>
    </div>
</div>", "C:\\xampp\\htdocs\\kominfogarut/themes/responsiv-flat/partials/footer.htm", "");
    }
}
