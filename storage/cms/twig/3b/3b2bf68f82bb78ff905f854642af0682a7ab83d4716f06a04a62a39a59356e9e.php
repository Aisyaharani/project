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

/* C:\xampp\htdocs\project/themes/drimo/layouts/default.htm */
class __TwigTemplate_5e6fbf6b3256e287c7cfd7ed1d72c053a58a1671a888617cedf3dd42f7abc868 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>October CMS - ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_description", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_title", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"OctoberCMS\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"OctoberCMS\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">

    <!-- <link rel=\"icon\" href=\"img/fav-icon.png\" type=\"image/x-icon\" /> -->
    <!-- <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\"> -->

    <!-- Icon css link -->
    <link href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/font-awesome.min.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/icofont.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/linear-icon/style.css");
        echo "\" rel=\"stylesheet\">

    <!-- Bootstrap -->
    <link href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">

    <!-- Rev slider css -->
    <link href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/revolution/css/settings.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/revolution/css/layers.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/revolution/css/navigation.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/animate-css/animate.css");
        echo "\" rel=\"stylesheet\">

    <!-- Extra plugin css -->
    <link href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/magnific-popup/magnific-popup.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/owl-carousel/assets/owl.carousel.min.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/swiper/css/swiper.min.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/flipster-slider/jquery.flipster.min.css");
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\" rel=\"stylesheet\">
    ";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 41
        echo "</head>

<body>

    <!-- Header -->
    <header id=\"layout-header\">
        ";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "    </header>

    <!-- Content -->
    <section id=\"layout-content\">
        ";
        // line 52
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 53
        echo "    </section>

    <!-- Footer -->
    <footer id=\"layout-footer\">
        ";
        // line 57
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 58
        echo "    </footer>

    <!-- Scripts -->
    <!-- <script src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script> -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-2.2.4.js");
        echo "\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <!-- Rev slider js -->
    <script src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/revolution/js/jquery.themepunch.tools.min.js");
        echo "\"></script>
    <script src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/revolution/js/jquery.themepunch.revolution.min.js");
        echo "\"></script>
    <script src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/revolution/js/extensions/revolution.extension.video.min.js");
        echo "\"></script>
    <script src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js");
        echo "\"></script>
    <script src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js");
        echo "\"></script>
    <script src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js");
        echo "\"></script>
    <!-- Extra Plugin -->
    <script src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/parallax/jquery.parallax-scroll.js");
        echo "\"></script>
    <script src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/magnific-popup/jquery.magnific-popup.min.js");
        echo "\"></script>
    <script src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/owl-carousel/owl.carousel.min.js");
        echo "\"></script>
    <script src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/counterup/waypoints.min.js");
        echo "\"></script>
    <script src=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/counterup/jquery.counterup.min.js");
        echo "\"></script>
    <script src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/isotope/imagesloaded.pkgd.min.js");
        echo "\"></script>
    <script src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/isotope/isotope.pkgd.min.js");
        echo "\"></script>
    <script src=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/flexslider/flex-slider.js");
        echo "\"></script>
    <script src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/flexslider/mixitup.js");
        echo "\"></script>
    <script src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/nice-selector/jquery.nice-select.min.js");
        echo "\"></script>
    <script src=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/swiper/js/swiper.min.js");
        echo "\"></script>
    <script src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/flipster-slider/jquery.flipster.min.js");
        echo "\"></script>
    <!--gmaps Js-->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE\"></script>
    <script src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/gmaps.min.js");
        echo "\"></script>

    <script src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/theme.js");
        echo "\"></script>
    ";
        // line 94
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 95
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 96
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\project/themes/drimo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 96,  295 => 95,  284 => 94,  280 => 93,  275 => 91,  269 => 88,  265 => 87,  261 => 86,  257 => 85,  253 => 84,  249 => 83,  245 => 82,  241 => 81,  237 => 80,  233 => 79,  229 => 78,  225 => 77,  220 => 75,  216 => 74,  212 => 73,  208 => 72,  204 => 71,  200 => 70,  195 => 68,  190 => 66,  184 => 63,  180 => 62,  176 => 61,  171 => 58,  167 => 57,  161 => 53,  159 => 52,  153 => 48,  149 => 47,  141 => 41,  138 => 40,  134 => 39,  130 => 38,  125 => 36,  121 => 35,  117 => 34,  113 => 33,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  89 => 24,  83 => 21,  79 => 20,  75 => 19,  69 => 16,  65 => 15,  59 => 12,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>October CMS - {{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"OctoberCMS\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"OctoberCMS\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">

    <!-- <link rel=\"icon\" href=\"img/fav-icon.png\" type=\"image/x-icon\" /> -->
    <!-- <link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\"> -->

    <!-- Icon css link -->
    <link href=\"{{'assets/css/font-awesome.min.css'|theme}}\" rel=\"stylesheet\">
    <link href=\"{{'assets/css/icofont.css'|theme}}\" rel=\"stylesheet\">
    <link href=\"{{'assets/vendors/linear-icon/style.css'|theme}}\" rel=\"stylesheet\">

    <!-- Bootstrap -->
    <link href=\"{{'assets/css/bootstrap.min.css'|theme}}\" rel=\"stylesheet\">

    <!-- Rev slider css -->
    <link href=\"{{'assets/vendors/revolution/css/settings.css'|theme}}\" rel=\"stylesheet\">
    <link href=\"{{'assets/vendors/revolution/css/layers.css'|theme}}\" rel=\"stylesheet\">
    <link href=\"{{'assets/vendors/revolution/css/navigation.css'|theme}}\" rel=\"stylesheet\">
    <link href=\"{{'assets/vendors/animate-css/animate.css'|theme}}\" rel=\"stylesheet\">

    <!-- Extra plugin css -->
    <link href=\"{{'assets/vendors/magnific-popup/magnific-popup.css'|theme}}\" rel=\"stylesheet\">
    <link href=\"{{'assets/vendors/owl-carousel/assets/owl.carousel.min.css'|theme}}\" rel=\"stylesheet\">
    <link href=\"{{'assets/vendors/swiper/css/swiper.min.css'|theme}}\" rel=\"stylesheet\">
    <link href=\"{{'assets/vendors/flipster-slider/jquery.flipster.min.css'|theme}}\" rel=\"stylesheet\">

    <link href=\"{{'assets/css/style.css'|theme}}\" rel=\"stylesheet\">
    <link href=\"{{'assets/css/responsive.css'|theme}}\" rel=\"stylesheet\">
    {% styles %}
</head>

<body>

    <!-- Header -->
    <header id=\"layout-header\">
        {% partial 'site/header' %}
    </header>

    <!-- Content -->
    <section id=\"layout-content\">
        {% page %}
    </section>

    <!-- Footer -->
    <footer id=\"layout-footer\">
        {% partial 'site/footer' %}
    </footer>

    <!-- Scripts -->
    <!-- <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script> -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"{{ 'assets/js/jquery-2.2.4.js'|theme }}\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
    <!-- Rev slider js -->
    <script src=\"{{ 'assets/vendors/revolution/js/jquery.themepunch.tools.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/revolution/js/jquery.themepunch.revolution.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/revolution/js/extensions/revolution.extension.video.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js'|theme }}\"></script>
    <!-- Extra Plugin -->
    <script src=\"{{ 'assets/vendors/parallax/jquery.parallax-scroll.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/magnific-popup/jquery.magnific-popup.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/owl-carousel/owl.carousel.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/counterup/waypoints.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/counterup/jquery.counterup.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/isotope/imagesloaded.pkgd.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/isotope/isotope.pkgd.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/flexslider/flex-slider.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/flexslider/mixitup.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/nice-selector/jquery.nice-select.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/swiper/js/swiper.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/flipster-slider/jquery.flipster.min.js'|theme }}\"></script>
    <!--gmaps Js-->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE\"></script>
    <script src=\"{{ 'assets/js/gmaps.min.js'|theme }}\"></script>

    <script src=\"{{ 'assets/js/theme.js'|theme }}\"></script>
    {% framework extras %}
    {% scripts %}

</body>

</html>", "C:\\xampp\\htdocs\\project/themes/drimo/layouts/default.htm", "");
    }
}
