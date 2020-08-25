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

/* C:\xampp\htdocs\project/themes/drimo/partials/site/footer.htm */
class __TwigTemplate_1a88223bc65433be9d3039117f122aee778dcdaf2a65c2286f3d1dd3a68c28fe extends \Twig\Template
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
        echo "<!--================Gadget Footer Area =================-->
<footer class=\"gd_footer_area\">
    <div class=\"gd_footer_widgets\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-xs-6\">
                    <aside class=\"gd_f_widget gd_ab_widget\">
                        <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gd-f-logo.png");
        echo "\" alt=\"\">
                        <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                    </aside>
                </div>
                <div class=\"col-md-3 col-xs-6\">
                    <aside class=\"gd_f_widget gd_link_widget\">
                        <ul>
                            <li><a href=\"#\">Site Map</a></li>
                            <li><a href=\"#\">24 Hour Help</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                            <li><a href=\"#\">Contact</a></li>
                            <li><a href=\"#\">Affiliate</a></li>
                        </ul>
                    </aside>
                </div>
                <div class=\"col-md-2 col-xs-6\">
                    <aside class=\"gd_f_widget gd_link_widget\">
                        <ul>
                            <li><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">About Us</a></li>
                            <li><a href=\"#\">Services</a></li>
                            <li><a href=\"#\">Gallery</a></li>
                        </ul>
                    </aside>
                </div>
                <div class=\"col-md-3 col-xs-6\">
                    <aside class=\"gd_f_widget gd_contact_widget\">
                        <div class=\"gd_f_title\">
                            <h3>Got Questions?</h3>
                        </div>
                        <h5><i class=\"fa fa-envelope\"></i> drimo.email@domain.com</h5>
                        <h5><i class=\"fa fa-phone\"></i> +00 89 04 031039</h5>
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook-square\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-vimeo-square\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter-square\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-youtube-square\"></i></a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class=\"gd_copyright\">
        <p class=\"copyright\">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
    </div>
</footer>
<!--================End Gadget Footer Area =================-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\project/themes/drimo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--================Gadget Footer Area =================-->
<footer class=\"gd_footer_area\">
    <div class=\"gd_footer_widgets\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-xs-6\">
                    <aside class=\"gd_f_widget gd_ab_widget\">
                        <img src=\"{{'assets/img/gd-f-logo.png'|theme}}\" alt=\"\">
                        <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                    </aside>
                </div>
                <div class=\"col-md-3 col-xs-6\">
                    <aside class=\"gd_f_widget gd_link_widget\">
                        <ul>
                            <li><a href=\"#\">Site Map</a></li>
                            <li><a href=\"#\">24 Hour Help</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                            <li><a href=\"#\">Contact</a></li>
                            <li><a href=\"#\">Affiliate</a></li>
                        </ul>
                    </aside>
                </div>
                <div class=\"col-md-2 col-xs-6\">
                    <aside class=\"gd_f_widget gd_link_widget\">
                        <ul>
                            <li><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">About Us</a></li>
                            <li><a href=\"#\">Services</a></li>
                            <li><a href=\"#\">Gallery</a></li>
                        </ul>
                    </aside>
                </div>
                <div class=\"col-md-3 col-xs-6\">
                    <aside class=\"gd_f_widget gd_contact_widget\">
                        <div class=\"gd_f_title\">
                            <h3>Got Questions?</h3>
                        </div>
                        <h5><i class=\"fa fa-envelope\"></i> drimo.email@domain.com</h5>
                        <h5><i class=\"fa fa-phone\"></i> +00 89 04 031039</h5>
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook-square\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-vimeo-square\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter-square\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-youtube-square\"></i></a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class=\"gd_copyright\">
        <p class=\"copyright\">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
    </div>
</footer>
<!--================End Gadget Footer Area =================-->", "C:\\xampp\\htdocs\\project/themes/drimo/partials/site/footer.htm", "");
    }
}
