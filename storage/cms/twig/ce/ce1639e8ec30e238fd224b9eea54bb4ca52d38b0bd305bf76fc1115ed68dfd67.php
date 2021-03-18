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

/* C:\xampp\htdocs\kominfogarut/themes/responsiv-flat/partials/services.htm */
class __TwigTemplate_9e28e38605412105614f7f8dd94bbb69013a4a37bb90265a564f1e4fc3de9e43 extends \Twig\Template
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
        echo "<div class=\"row\">
    <div class=\"col-sm-4\">
        <div class=\"services\">
            <div class=\"service-item\">
                <i class=\"fa fa-gear\"></i>
                <div class=\"service-desc\">
                    <h5>Built with Bootstrap 3</h5>
                    <p>Bacon ipsum dolor sit amet rump tri-tip pig pork chop. Doner tri-tip shoulder, andouille sausage filet mignon beef ribs drumstick.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-sm-4\">
        <div class=\"services\">
            <div class=\"service-item\">
                <i class=\"fa fa-laptop\"></i>
                <div class=\"service-desc\">
                    <h5>Responsive design</h5>
                    <p>Salami turkey jowl rump jerky ball tip drumstick ground round tenderloin kielbasa hamburger prosciutto. </p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-sm-4\">
        <div class=\"services\">
            <div class=\"service-item\">
                <i class=\"fa fa-refresh\"></i>
                <div class=\"service-desc\">
                    <h5>Easy to customize</h5>
                    <p>T-bone tongue turducken hamburger, doner sirloin rump pork jowl cow. Beef rump ham hock brisket.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-sm-4\">
        <div class=\"services\">
            <div class=\"service-item\">
                <i class=\"fa fa-plus\"></i>
                <div class=\"service-desc\">
                    <h5>Works out of the box</h5>
                    <p>Pork belly chicken turkey andouille t-bone ribeye tenderloin prosciutto flank chuck porchetta.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-sm-4\">
        <div class=\"services\">
            <div class=\"service-item\">
                <i class=\"fa fa-envelope\"></i>
                <div class=\"service-desc\">
                    <h5>24/7 support</h5>
                    <p>Kielbasa chicken doner filet mignon meatball salami ground round prosciutto spare ribs jerky meatloaf shankle bacon beef swine.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-sm-4\">
        <div class=\"services\">
            <div class=\"service-item\">
                <i class=\"fa fa-image\"></i>
                <div class=\"service-desc\">
                    <h5>Special Portfolio</h5>
                    <p>Short loin pork belly beef, tenderloin swine ribeye tri-tip doner salami rump hamburger kielbasa venison beef ribs brisket.</p>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\kominfogarut/themes/responsiv-flat/partials/services.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-sm-4\">
        <div class=\"services\">
            <div class=\"service-item\">
                <i class=\"fa fa-gear\"></i>
                <div class=\"service-desc\">
                    <h5>Built with Bootstrap 3</h5>
                    <p>Bacon ipsum dolor sit amet rump tri-tip pig pork chop. Doner tri-tip shoulder, andouille sausage filet mignon beef ribs drumstick.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-sm-4\">
        <div class=\"services\">
            <div class=\"service-item\">
                <i class=\"fa fa-laptop\"></i>
                <div class=\"service-desc\">
                    <h5>Responsive design</h5>
                    <p>Salami turkey jowl rump jerky ball tip drumstick ground round tenderloin kielbasa hamburger prosciutto. </p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-sm-4\">
        <div class=\"services\">
            <div class=\"service-item\">
                <i class=\"fa fa-refresh\"></i>
                <div class=\"service-desc\">
                    <h5>Easy to customize</h5>
                    <p>T-bone tongue turducken hamburger, doner sirloin rump pork jowl cow. Beef rump ham hock brisket.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-sm-4\">
        <div class=\"services\">
            <div class=\"service-item\">
                <i class=\"fa fa-plus\"></i>
                <div class=\"service-desc\">
                    <h5>Works out of the box</h5>
                    <p>Pork belly chicken turkey andouille t-bone ribeye tenderloin prosciutto flank chuck porchetta.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-sm-4\">
        <div class=\"services\">
            <div class=\"service-item\">
                <i class=\"fa fa-envelope\"></i>
                <div class=\"service-desc\">
                    <h5>24/7 support</h5>
                    <p>Kielbasa chicken doner filet mignon meatball salami ground round prosciutto spare ribs jerky meatloaf shankle bacon beef swine.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-sm-4\">
        <div class=\"services\">
            <div class=\"service-item\">
                <i class=\"fa fa-image\"></i>
                <div class=\"service-desc\">
                    <h5>Special Portfolio</h5>
                    <p>Short loin pork belly beef, tenderloin swine ribeye tri-tip doner salami rump hamburger kielbasa venison beef ribs brisket.</p>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\kominfogarut/themes/responsiv-flat/partials/services.htm", "");
    }
}
