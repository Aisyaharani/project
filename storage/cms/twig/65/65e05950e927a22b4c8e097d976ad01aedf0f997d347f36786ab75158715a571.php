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

/* C:\xampp\htdocs\project/themes/drimo/partials/site/header.htm */
class __TwigTemplate_0e5122a5d7807e43373fbb1e421b8a52960d5812aa6fa03939d1f4fd82e11290 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!--================Header Area =================-->
        <header class=\"main_header_area middle_menu\">
            <div class=\"main_menu_area\">
                <div class=\"container\">
                    <nav class=\"navbar navbar-default\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/eleven-logo.png");
        echo "\" alt=\"\"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"#home\">Home</a></li>
                            <li><a href=\"#feature\">FETURES</a></li>
                            <li><a href=\"#gadget\">Gadgets</a></li>
                            <li><a href=\"#service\">Service</a></li>
                            <li><a href=\"#team\">Team</a></li>
                            <li><a href=\"#contact\">Contact</a></li>
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                        \t<li><a href=\"#\"><i class=\"fa fa-shopping-cart\"></i></a></li>
\t\t\t\t\t\t</ul>
                    </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </header>
        <!--================End Header Area =================-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\project/themes/drimo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--================Header Area =================-->
        <header class=\"main_header_area middle_menu\">
            <div class=\"main_menu_area\">
                <div class=\"container\">
                    <nav class=\"navbar navbar-default\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\"><img src=\"{{'assets/img/eleven-logo.png'|theme}}\" alt=\"\"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"#home\">Home</a></li>
                            <li><a href=\"#feature\">FETURES</a></li>
                            <li><a href=\"#gadget\">Gadgets</a></li>
                            <li><a href=\"#service\">Service</a></li>
                            <li><a href=\"#team\">Team</a></li>
                            <li><a href=\"#contact\">Contact</a></li>
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                        \t<li><a href=\"#\"><i class=\"fa fa-shopping-cart\"></i></a></li>
\t\t\t\t\t\t</ul>
                    </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </header>
        <!--================End Header Area =================-->", "C:\\xampp\\htdocs\\project/themes/drimo/partials/site/header.htm", "");
    }
}
