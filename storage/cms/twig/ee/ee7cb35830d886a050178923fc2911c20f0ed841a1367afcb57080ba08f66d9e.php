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

/* C:\xampp\htdocs\project/themes/drimo/pages/landing.htm */
class __TwigTemplate_a8057fbc1c81aa5cc8a1e74c5da2127d0339eb53c7f39c27f642c1ac8bc88cb4 extends \Twig\Template
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
        echo "<!--================Gadget Banner Area =================-->
<section class=\"gadget_banner_area\" id=\"home\">
\t<div class=\"container\">
\t\t<div class=\"gadget_banner_inner\">
\t\t\t<div class=\"gadget_text\">
\t\t\t\t<h2>Discover Our New Gadget</h2>
\t\t\t\t<h6>Enjoy With Our New Feature & Lots of fun just Order now</h6>
\t\t\t\t<h5>\$180.99 Only</h5>
\t\t\t\t<a class=\"order_btn\" href=\"#\">Order Now</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--================End Gadget Banner Area =================-->

<!--================End Gadget Headphone Area =================-->
<section class=\"gadget_headphone\">
\t<div class=\"container\">
\t\t<div class=\"row g_head_inner\">
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<div class=\"g_left_side\">
\t\t\t\t\t<img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/gadget-1.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/gadget-1.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<img src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/gadget-1.jpg");
        echo "\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div class=\"g_right_side\">
\t\t\t\t\t<h5>New Feature</h5>
\t\t\t\t\t<h4>Vuzix iWare Video Headphones </h4>
\t\t\t\t\t<p>with dual high-definition displays that supports HDMI inputs compatible with mobile phones,
\t\t\t\t\t\ttablet devices, console systems, PCs, and 3D Blu-ray players. iWear includes a carrying pouch,
\t\t\t\t\t\timmersive light-shield, AC charging adaptor, Quickstart, warranty and safety instructions. A
\t\t\t\t\t\tfull manual is available by digital download.</p>
\t\t\t\t\t<h3>\$500.00</h3>
\t\t\t\t\t<a class=\"pre_or_btn\" href=\"#\">Pre-order Now</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--================End Gadget Headphone Area =================-->

<!--================End Gadget Feature Area =================-->
<section class=\"gadget_feature_area\" id=\"feature\">
\t<div class=\"container\">
\t\t<div class=\"gd_title\">
\t\t\t<h2 data-title=\"Features\">What is Our GADGET Features!</h2>
\t\t</div>
\t\t<div class=\"row gd_feature_inner\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"gd_f_img\">
\t\t\t\t\t<img src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/g-feature-1.png");
        echo "\" alt=\"\">
\t\t\t\t\t<span class=\"one_text\">1</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"gd_f_text\">
\t\t\t\t\t<h4>Remot Controler</h4>
\t\t\t\t\t<p>dilengkapi tombol trigger di bagian bawah, touchpad yang luas untuk jempolmu dan juga tombol grip
\t\t\t\t\t\tkhusus yang dapat kamu aktivasi dengan meremas controller-nya</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row gd_feature_inner right\">
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<div class=\"gd_f_text\">
\t\t\t\t\t<h4>Dua Panel</h4>
\t\t\t\t\t<p>Menyediakan dua buah panel terpisah untuk masing-masing mata. Kita dapat mengatur jarak antara
\t\t\t\t\t\tkedua panel sesuai dengan yang kita butuhkan.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div class=\"gd_f_img\">
\t\t\t\t\t<span class=\"one_text\">2</span>
\t\t\t\t\t<img src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/g-feature-3.png");
        echo "\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row gd_feature_inner\">
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<div class=\"gd_f_img\">
\t\t\t\t\t<img src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/g-feature-3.png");
        echo "\" alt=\"\">
\t\t\t\t\t<span class=\"one_text\">3</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div class=\"gd_f_text\">
\t\t\t\t\t<h4>VR Viewing angle</h4>
\t\t\t\t\t<p>memiliki viewing angle sekitar 90-110° membuat sensasi immersion yang dihasilkan juga semakin
\t\t\t\t\t\ttinggi.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--================End Gadget Feature Area =================-->

<!--================Gadget Video Area =================-->
<section class=\"gadget_video_area\">
\t<img src=\"img/gadget/g-video-1.png\" alt=\"\">
\t<div class=\"g_video_text\">
\t\t<h4>Review Our Performance</h4>
\t\t<a class=\"popup-youtube\" href=\"https://www.youtube.com/watch?v=WVPRkcczXCY\"><img
\t\t\t\tsrc=\"";
        // line 105
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/g-video-icon.png");
        echo "\" alt=\"\"></a>
\t</div>
</section>
<!--================End Gadget Video Area =================-->

<!--================Gadget Slider Area =================-->
<section class=\"g_product_area\" id=\"gadget\">
\t<div class=\"gd_title\">
\t\t<h2 data-title=\"Gallery\">OUr More Gadgets</h2>
\t</div>
\t<div class=\"g_p_slider owl-carousel\">
\t\t<div class=\"item\">
\t\t\t<img src=\"";
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/g-product/g-product-1.jpg");
        echo "\" alt=\"\">
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<img src=\"";
        // line 120
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/g-product/g-product-1.jpg");
        echo "\" alt=\"\">
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<img src=\"";
        // line 123
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/g-product/g-product-1.jpg");
        echo "\" alt=\"\">
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<img src=\"";
        // line 126
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/g-product/g-product-1.jpg");
        echo "\" alt=\"\">
\t\t</div>
\t</div>
</section>
<!--================End Gadget Slider Area =================-->

<!--================Review Gadget Area =================-->
<section class=\"review_gadget_area p_100\">
\t<div class=\"container\">
\t\t<div class=\"gd_title\">
\t\t\t<h2 data-title=\"360 Review\">Review With round Side 360d Angle</h2>
\t\t</div>
\t\t<div class=\"review_img_inner\">
\t\t\t<div class=\"g_br_img\"><img src=\"";
        // line 139
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/review-border.png");
        echo "\" alt=\"\">
\t\t\t\t<ul>
\t\t\t\t\t<li>Backside <span></span></li>
\t\t\t\t\t<li><span></span> Frontside</li>
\t\t\t\t\t<li><span></span> Leftside</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<img class=\"main_img\" src=\"";
        // line 146
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/review-p.png");
        echo "\" alt=\"\">
\t\t</div>
\t</div>
</section>
<!--================End Review Gadget Area =================-->

<!--================Gadget Service Area =================-->
<section class=\"gedget_service_area p_100\" id=\"service\">
\t<div class=\"container\">

\t\t<div class=\"row ged_service_inner\">
\t\t\t<div class=\"col-md-4\">

\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"gd_title white\">
\t\t\t\t\t<h2 data-title=\"Service\">We Provide Powerful Service</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t\t<div class=\"gd_service_item\">
\t\t\t\t\t\t\t<h4 data-count=\"1\">Original Brand VR</h4>
\t\t\t\t\t\t\t<p>We denounce with righteous indignation and dislike men who are so beguiled and
\t\t\t\t\t\t\t\tdemoralized by the charms of pleasure.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t\t<div class=\"gd_service_item\">
\t\t\t\t\t\t\t<h4 data-count=\"2\">Anywhere Free Delivery</h4>
\t\t\t\t\t\t\t<p>We denounce with righteous indignation and dislike men who are so beguiled and
\t\t\t\t\t\t\t\tdemoralized by the charms of pleasure.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t\t<div class=\"gd_service_item\">
\t\t\t\t\t\t\t<h4 data-count=\"3\">Original Brand VR</h4>
\t\t\t\t\t\t\t<p>We denounce with righteous indignation and dislike men who are so beguiled and
\t\t\t\t\t\t\t\tdemoralized by the charms of pleasure.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t\t<div class=\"gd_service_item\">
\t\t\t\t\t\t\t<h4 data-count=\"4\">Anywhere Free Delivery</h4>
\t\t\t\t\t\t\t<p>We denounce with righteous indignation and dislike men who are so beguiled and
\t\t\t\t\t\t\t\tdemoralized by the charms of pleasure.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t\t<div class=\"gd_service_item\">
\t\t\t\t\t\t\t<h4 data-count=\"6\">Original Brand VR</h4>
\t\t\t\t\t\t\t<p>We denounce with righteous indignation and dislike men who are so beguiled and
\t\t\t\t\t\t\t\tdemoralized by the charms of pleasure.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t\t<div class=\"gd_service_item\">
\t\t\t\t\t\t\t<h4 data-count=\"7\">Anywhere Free Delivery</h4>
\t\t\t\t\t\t\t<p>We denounce with righteous indignation and dislike men who are so beguiled and
\t\t\t\t\t\t\t\tdemoralized by the charms of pleasure.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--================End Gadget Service Area =================-->

<!--================Gadget Parameters Area =================-->
<section class=\"gadget_parameters_area p_100\">
\t<div class=\"container\">
\t\t<div class=\"row gd_para_inner\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"gd_para_left\">
\t\t\t\t\t<h5>parameters</h5>
\t\t\t\t\t<h3>Check Our Product Speciality</h3>
\t\t\t\t\t<p>Memiliki <i>pupil distance adjustmen, HD Lensa, Charging mounth</i> yang membuat pengalaman
\t\t\t\t\t\tbermain anda lebih realistis dan nyaman</p>
\t\t\t\t\t<a class=\"order_btn\" href=\"#\">Pre-order Now</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"gd_right_img\">
\t\t\t\t\t<img src=\"";
        // line 229
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/gd-art.jpg");
        echo "\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--================End Gadget Parameters Area =================-->

<!--================Gadget Testimonials Area =================-->
<section class=\"gd_testimonials_area\" id=\"team\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"single_gd_text\">
\t\t\t\t\t<i class=\"fa fa-quote-right\"></i>
\t\t\t\t\t<h4>Clients <br />Say About Us</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"gd_man_slider owl-carousel\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"";
        // line 248
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/gd-man-1.png");
        echo "\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"";
        // line 251
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/gd-man-1.png");
        echo "\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"";
        // line 254
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/gd-man-1.png");
        echo "\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"gd_man_text owl-carousel\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<h5>Testimonial</h5>
\t\t\t\t\t\t<h2>What Say Our Clients!</h2>
\t\t\t\t\t\t<h3>The master-builder of human happiness.</h3>
\t\t\t\t\t\t<p>Tetap nyaman meskipun lama dipakai.</p>
\t\t\t\t\t\t<h6>Jhonathon Do</h6>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<h5>Testimonial</h5>
\t\t\t\t\t\t<h2>What Say Our Clients!</h2>
\t\t\t\t\t\t<h3>The master-builder of human happiness.</h3>
\t\t\t\t\t\t<p>Tetap nyaman meskipun lama dipakai.</p>
\t\t\t\t\t\t<h6>Jhonathon Do</h6>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<h5>Testimonial</h5>
\t\t\t\t\t\t<h2>What Say Our Clients!</h2>
\t\t\t\t\t\t<h3>The master-builder of human happiness.</h3>
\t\t\t\t\t\t<p>Tetap nyaman meskipun lama dipakai.</p>
\t\t\t\t\t\t<h6>Jhonathon Do</h6>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"home_screen_nav\">
\t\t\t\t\t<i class=\"fa fa-angle-left testi_prev\" aria-hidden=\"true\"></i>
\t\t\t\t\t<i class=\"fa fa-angle-right testi_next\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--================End Gadget Testimonials Area =================-->

<!--================Gadget Popular Product Area =================-->
<section class=\"g_popular_product\">
\t<div class=\"container\">
\t\t<div class=\"gd_popular_inner\">
\t\t\t<h2 class=\"gd_single\">Most Populer Products</h2>
\t\t\t<div class=\"g_p_p_slider owl-carousel\">
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 320
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/g-product/g-s-product-1.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<h5>HTC Vive VR</h5>
\t\t\t\t\t<h4>\$190</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 325
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/g-product/g-s-product-2.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<h5>Star VR New</h5>
\t\t\t\t\t<h4>\$290</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 330
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/g-product/g-s-product-3.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<h5>VR Park V3 New</h5>
\t\t\t\t\t<h4>\$320</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 335
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/g-product/g-s-product-4.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<h5>Samsung Gear VR</h5>
\t\t\t\t\t<h4>\$450</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 340
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/g-product/g-s-product-1.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<h5>HTC Vive VR</h5>
\t\t\t\t\t<h4>\$190</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 345
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/g-product/g-s-product-2.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<h5>Star VR New</h5>
\t\t\t\t\t<h4>\$290</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 350
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/g-product/g-s-product-3.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<h5>VR Park V3 New</h5>
\t\t\t\t\t<h4>\$320</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 355
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/g-product/g-s-product-4.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<h5>Samsung Gear VR</h5>
\t\t\t\t\t<h4>\$450</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--================End Gadget Popular Product Area =================-->

<!--================Update Blog Post Area =================-->
<section class=\"update_blog_area gd_blog_area\" id=\"blog\">
\t<div class=\"container\">
\t\t<div class=\"gd_title\">
\t\t\t<h2 data-title=\"Blog Post\">Read Our Latest News</h2>
\t\t</div>
\t\t<div class=\"row update_blog_inner\">
\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t<div class=\"up_blog_item\">
\t\t\t\t\t<div class=\"blog_img\"><img src=\"";
        // line 374
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/update-blog/up-blog-1.jpg");
        echo "\" alt=\"\"></div>
\t\t\t\t\t<div class=\"up_blog_text\">
\t\t\t\t\t\t<h5>May 10th, 2017</h5>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h4>This is our latest dashboard design new features</h4>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"read_c\" href=\"#\">Read Contiune <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t<div class=\"up_blog_item\">
\t\t\t\t\t<div class=\"blog_img\"><img src=\"";
        // line 386
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/update-blog/up-blog-2.jpg");
        echo "\" alt=\"\"></div>
\t\t\t\t\t<div class=\"up_blog_text\">
\t\t\t\t\t\t<h5>May 10th, 2017</h5>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h4>This is our latest dashboard design new features</h4>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"read_c\" href=\"#\">Read Contiune <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t<div class=\"up_blog_item\">
\t\t\t\t\t<div class=\"blog_img\"><img src=\"";
        // line 398
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/update-blog/up-blog-3.jpg");
        echo "\" alt=\"\"></div>
\t\t\t\t\t<div class=\"up_blog_text\">
\t\t\t\t\t\t<h5>May 10th, 2017</h5>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h4>This is our latest dashboard design new features</h4>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"read_c\" href=\"#\">Read Contiune <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"gd_post\">
\t\t\t<a class=\"pre_or_btn\" href=\"#\">Read More</a>
\t\t</div>
\t</div>
</section>
<!--================End Update Blog Post Area =================-->

<!--================Get Form Area =================-->
<section class=\"get_form_area gd_contact\" id=\"contact\">
\t<div class=\"container\">
\t\t<div class=\"gd_title\">
\t\t\t<h2 data-title=\"Contact\">Need Help JUst Send A Massage</h2>
\t\t</div>
\t\t<div class=\"row m0\">
\t\t\t<form class=\"contact_us_form row m0\" action=\"contact_process.php\" method=\"post\" id=\"contactForm\"
\t\t\t\tnovalidate=\"novalidate\">
\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Type name..\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\"
\t\t\t\t\t\tplaceholder=\"examplename.20@domain.com\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"subject\" name=\"subject\" placeholder=\"Subject\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" id=\"message\" rows=\"1\"
\t\t\t\t\t\tplaceholder=\"Type here your massage\"></textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t<button type=\"submit\" value=\"submit\" class=\"btn pre_or_btn form-control\">Send Message</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</section>
<!--================End Get Form Area =================-->

<!--================Gadget Newsletter Area =================-->
<section class=\"gd_newsleter_area\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"media\">
\t\t\t\t\t<div class=\"media-left\">
\t\t\t\t\t\t<img src=\"";
        // line 455
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gadget/inbox-gd.png");
        echo "\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t<h4><span>Our</span> Newsletter</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"gd_news_inner\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"your.email@domain.com\">
\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button class=\"btn btn-default pre_or_btn\" type=\"button\">Subscribe</button>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--================End Gadget Newsletter Area =================-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\project/themes/drimo/pages/landing.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 455,  517 => 398,  502 => 386,  487 => 374,  465 => 355,  457 => 350,  449 => 345,  441 => 340,  433 => 335,  425 => 330,  417 => 325,  409 => 320,  340 => 254,  334 => 251,  328 => 248,  306 => 229,  220 => 146,  210 => 139,  194 => 126,  188 => 123,  182 => 120,  176 => 117,  161 => 105,  136 => 83,  126 => 76,  100 => 53,  68 => 24,  64 => 23,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--================Gadget Banner Area =================-->
<section class=\"gadget_banner_area\" id=\"home\">
\t<div class=\"container\">
\t\t<div class=\"gadget_banner_inner\">
\t\t\t<div class=\"gadget_text\">
\t\t\t\t<h2>Discover Our New Gadget</h2>
\t\t\t\t<h6>Enjoy With Our New Feature & Lots of fun just Order now</h6>
\t\t\t\t<h5>\$180.99 Only</h5>
\t\t\t\t<a class=\"order_btn\" href=\"#\">Order Now</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--================End Gadget Banner Area =================-->

<!--================End Gadget Headphone Area =================-->
<section class=\"gadget_headphone\">
\t<div class=\"container\">
\t\t<div class=\"row g_head_inner\">
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<div class=\"g_left_side\">
\t\t\t\t\t<img src=\"{{'assets/img/gadget/gadget-1.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t<img src=\"{{'assets/img/gadget/gadget-1.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t<img src=\"{{'assets/img/gadget/gadget-1.jpg'|theme}}\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div class=\"g_right_side\">
\t\t\t\t\t<h5>New Feature</h5>
\t\t\t\t\t<h4>Vuzix iWare Video Headphones </h4>
\t\t\t\t\t<p>with dual high-definition displays that supports HDMI inputs compatible with mobile phones,
\t\t\t\t\t\ttablet devices, console systems, PCs, and 3D Blu-ray players. iWear includes a carrying pouch,
\t\t\t\t\t\timmersive light-shield, AC charging adaptor, Quickstart, warranty and safety instructions. A
\t\t\t\t\t\tfull manual is available by digital download.</p>
\t\t\t\t\t<h3>\$500.00</h3>
\t\t\t\t\t<a class=\"pre_or_btn\" href=\"#\">Pre-order Now</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--================End Gadget Headphone Area =================-->

<!--================End Gadget Feature Area =================-->
<section class=\"gadget_feature_area\" id=\"feature\">
\t<div class=\"container\">
\t\t<div class=\"gd_title\">
\t\t\t<h2 data-title=\"Features\">What is Our GADGET Features!</h2>
\t\t</div>
\t\t<div class=\"row gd_feature_inner\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"gd_f_img\">
\t\t\t\t\t<img src=\"{{'assets/img/gadget/g-feature-1.png'|theme}}\" alt=\"\">
\t\t\t\t\t<span class=\"one_text\">1</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"gd_f_text\">
\t\t\t\t\t<h4>Remot Controler</h4>
\t\t\t\t\t<p>dilengkapi tombol trigger di bagian bawah, touchpad yang luas untuk jempolmu dan juga tombol grip
\t\t\t\t\t\tkhusus yang dapat kamu aktivasi dengan meremas controller-nya</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row gd_feature_inner right\">
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<div class=\"gd_f_text\">
\t\t\t\t\t<h4>Dua Panel</h4>
\t\t\t\t\t<p>Menyediakan dua buah panel terpisah untuk masing-masing mata. Kita dapat mengatur jarak antara
\t\t\t\t\t\tkedua panel sesuai dengan yang kita butuhkan.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div class=\"gd_f_img\">
\t\t\t\t\t<span class=\"one_text\">2</span>
\t\t\t\t\t<img src=\"{{'assets/img/gadget/g-feature-3.png'|theme}}\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row gd_feature_inner\">
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<div class=\"gd_f_img\">
\t\t\t\t\t<img src=\"{{'assets/img/gadget/g-feature-3.png'|theme}}\" alt=\"\">
\t\t\t\t\t<span class=\"one_text\">3</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div class=\"gd_f_text\">
\t\t\t\t\t<h4>VR Viewing angle</h4>
\t\t\t\t\t<p>memiliki viewing angle sekitar 90-110° membuat sensasi immersion yang dihasilkan juga semakin
\t\t\t\t\t\ttinggi.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--================End Gadget Feature Area =================-->

<!--================Gadget Video Area =================-->
<section class=\"gadget_video_area\">
\t<img src=\"img/gadget/g-video-1.png\" alt=\"\">
\t<div class=\"g_video_text\">
\t\t<h4>Review Our Performance</h4>
\t\t<a class=\"popup-youtube\" href=\"https://www.youtube.com/watch?v=WVPRkcczXCY\"><img
\t\t\t\tsrc=\"{{'assets/img/gadget/g-video-icon.png'|theme}}\" alt=\"\"></a>
\t</div>
</section>
<!--================End Gadget Video Area =================-->

<!--================Gadget Slider Area =================-->
<section class=\"g_product_area\" id=\"gadget\">
\t<div class=\"gd_title\">
\t\t<h2 data-title=\"Gallery\">OUr More Gadgets</h2>
\t</div>
\t<div class=\"g_p_slider owl-carousel\">
\t\t<div class=\"item\">
\t\t\t<img src=\"{{'assets/img/gadget/g-product/g-product-1.jpg'|theme}}\" alt=\"\">
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<img src=\"{{'assets/img/gadget/g-product/g-product-1.jpg'|theme}}\" alt=\"\">
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<img src=\"{{'assets/img/gadget/g-product/g-product-1.jpg'|theme}}\" alt=\"\">
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<img src=\"{{'assets/img/gadget/g-product/g-product-1.jpg'|theme}}\" alt=\"\">
\t\t</div>
\t</div>
</section>
<!--================End Gadget Slider Area =================-->

<!--================Review Gadget Area =================-->
<section class=\"review_gadget_area p_100\">
\t<div class=\"container\">
\t\t<div class=\"gd_title\">
\t\t\t<h2 data-title=\"360 Review\">Review With round Side 360d Angle</h2>
\t\t</div>
\t\t<div class=\"review_img_inner\">
\t\t\t<div class=\"g_br_img\"><img src=\"{{'assets/img/gadget/review-border.png'|theme}}\" alt=\"\">
\t\t\t\t<ul>
\t\t\t\t\t<li>Backside <span></span></li>
\t\t\t\t\t<li><span></span> Frontside</li>
\t\t\t\t\t<li><span></span> Leftside</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<img class=\"main_img\" src=\"{{'assets/img/gadget/review-p.png'|theme}}\" alt=\"\">
\t\t</div>
\t</div>
</section>
<!--================End Review Gadget Area =================-->

<!--================Gadget Service Area =================-->
<section class=\"gedget_service_area p_100\" id=\"service\">
\t<div class=\"container\">

\t\t<div class=\"row ged_service_inner\">
\t\t\t<div class=\"col-md-4\">

\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"gd_title white\">
\t\t\t\t\t<h2 data-title=\"Service\">We Provide Powerful Service</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t\t<div class=\"gd_service_item\">
\t\t\t\t\t\t\t<h4 data-count=\"1\">Original Brand VR</h4>
\t\t\t\t\t\t\t<p>We denounce with righteous indignation and dislike men who are so beguiled and
\t\t\t\t\t\t\t\tdemoralized by the charms of pleasure.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t\t<div class=\"gd_service_item\">
\t\t\t\t\t\t\t<h4 data-count=\"2\">Anywhere Free Delivery</h4>
\t\t\t\t\t\t\t<p>We denounce with righteous indignation and dislike men who are so beguiled and
\t\t\t\t\t\t\t\tdemoralized by the charms of pleasure.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t\t<div class=\"gd_service_item\">
\t\t\t\t\t\t\t<h4 data-count=\"3\">Original Brand VR</h4>
\t\t\t\t\t\t\t<p>We denounce with righteous indignation and dislike men who are so beguiled and
\t\t\t\t\t\t\t\tdemoralized by the charms of pleasure.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t\t<div class=\"gd_service_item\">
\t\t\t\t\t\t\t<h4 data-count=\"4\">Anywhere Free Delivery</h4>
\t\t\t\t\t\t\t<p>We denounce with righteous indignation and dislike men who are so beguiled and
\t\t\t\t\t\t\t\tdemoralized by the charms of pleasure.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t\t<div class=\"gd_service_item\">
\t\t\t\t\t\t\t<h4 data-count=\"6\">Original Brand VR</h4>
\t\t\t\t\t\t\t<p>We denounce with righteous indignation and dislike men who are so beguiled and
\t\t\t\t\t\t\t\tdemoralized by the charms of pleasure.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t\t<div class=\"gd_service_item\">
\t\t\t\t\t\t\t<h4 data-count=\"7\">Anywhere Free Delivery</h4>
\t\t\t\t\t\t\t<p>We denounce with righteous indignation and dislike men who are so beguiled and
\t\t\t\t\t\t\t\tdemoralized by the charms of pleasure.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--================End Gadget Service Area =================-->

<!--================Gadget Parameters Area =================-->
<section class=\"gadget_parameters_area p_100\">
\t<div class=\"container\">
\t\t<div class=\"row gd_para_inner\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"gd_para_left\">
\t\t\t\t\t<h5>parameters</h5>
\t\t\t\t\t<h3>Check Our Product Speciality</h3>
\t\t\t\t\t<p>Memiliki <i>pupil distance adjustmen, HD Lensa, Charging mounth</i> yang membuat pengalaman
\t\t\t\t\t\tbermain anda lebih realistis dan nyaman</p>
\t\t\t\t\t<a class=\"order_btn\" href=\"#\">Pre-order Now</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"gd_right_img\">
\t\t\t\t\t<img src=\"{{'assets/img/gadget/gd-art.jpg'|theme}}\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--================End Gadget Parameters Area =================-->

<!--================Gadget Testimonials Area =================-->
<section class=\"gd_testimonials_area\" id=\"team\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"single_gd_text\">
\t\t\t\t\t<i class=\"fa fa-quote-right\"></i>
\t\t\t\t\t<h4>Clients <br />Say About Us</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"gd_man_slider owl-carousel\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"{{'assets/img/gadget/gd-man-1.png'|theme}}\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"{{'assets/img/gadget/gd-man-1.png'|theme}}\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"{{'assets/img/gadget/gd-man-1.png'|theme}}\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"gd_man_text owl-carousel\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<h5>Testimonial</h5>
\t\t\t\t\t\t<h2>What Say Our Clients!</h2>
\t\t\t\t\t\t<h3>The master-builder of human happiness.</h3>
\t\t\t\t\t\t<p>Tetap nyaman meskipun lama dipakai.</p>
\t\t\t\t\t\t<h6>Jhonathon Do</h6>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<h5>Testimonial</h5>
\t\t\t\t\t\t<h2>What Say Our Clients!</h2>
\t\t\t\t\t\t<h3>The master-builder of human happiness.</h3>
\t\t\t\t\t\t<p>Tetap nyaman meskipun lama dipakai.</p>
\t\t\t\t\t\t<h6>Jhonathon Do</h6>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<h5>Testimonial</h5>
\t\t\t\t\t\t<h2>What Say Our Clients!</h2>
\t\t\t\t\t\t<h3>The master-builder of human happiness.</h3>
\t\t\t\t\t\t<p>Tetap nyaman meskipun lama dipakai.</p>
\t\t\t\t\t\t<h6>Jhonathon Do</h6>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"home_screen_nav\">
\t\t\t\t\t<i class=\"fa fa-angle-left testi_prev\" aria-hidden=\"true\"></i>
\t\t\t\t\t<i class=\"fa fa-angle-right testi_next\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--================End Gadget Testimonials Area =================-->

<!--================Gadget Popular Product Area =================-->
<section class=\"g_popular_product\">
\t<div class=\"container\">
\t\t<div class=\"gd_popular_inner\">
\t\t\t<h2 class=\"gd_single\">Most Populer Products</h2>
\t\t\t<div class=\"g_p_p_slider owl-carousel\">
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{'assets/img/gadget/g-product/g-s-product-1.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t<h5>HTC Vive VR</h5>
\t\t\t\t\t<h4>\$190</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{'assets/img/gadget/g-product/g-s-product-2.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t<h5>Star VR New</h5>
\t\t\t\t\t<h4>\$290</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{'assets/img/gadget/g-product/g-s-product-3.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t<h5>VR Park V3 New</h5>
\t\t\t\t\t<h4>\$320</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{'assets/img/gadget/g-product/g-s-product-4.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t<h5>Samsung Gear VR</h5>
\t\t\t\t\t<h4>\$450</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{'assets/img/gadget/g-product/g-s-product-1.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t<h5>HTC Vive VR</h5>
\t\t\t\t\t<h4>\$190</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{'assets/img/gadget/g-product/g-s-product-2.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t<h5>Star VR New</h5>
\t\t\t\t\t<h4>\$290</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{'assets/img/gadget/g-product/g-s-product-3.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t<h5>VR Park V3 New</h5>
\t\t\t\t\t<h4>\$320</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{'assets/img/gadget/g-product/g-s-product-4.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t<h5>Samsung Gear VR</h5>
\t\t\t\t\t<h4>\$450</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--================End Gadget Popular Product Area =================-->

<!--================Update Blog Post Area =================-->
<section class=\"update_blog_area gd_blog_area\" id=\"blog\">
\t<div class=\"container\">
\t\t<div class=\"gd_title\">
\t\t\t<h2 data-title=\"Blog Post\">Read Our Latest News</h2>
\t\t</div>
\t\t<div class=\"row update_blog_inner\">
\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t<div class=\"up_blog_item\">
\t\t\t\t\t<div class=\"blog_img\"><img src=\"{{'assets/img/blog/update-blog/up-blog-1.jpg'|theme}}\" alt=\"\"></div>
\t\t\t\t\t<div class=\"up_blog_text\">
\t\t\t\t\t\t<h5>May 10th, 2017</h5>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h4>This is our latest dashboard design new features</h4>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"read_c\" href=\"#\">Read Contiune <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t<div class=\"up_blog_item\">
\t\t\t\t\t<div class=\"blog_img\"><img src=\"{{'assets/img/blog/update-blog/up-blog-2.jpg'|theme}}\" alt=\"\"></div>
\t\t\t\t\t<div class=\"up_blog_text\">
\t\t\t\t\t\t<h5>May 10th, 2017</h5>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h4>This is our latest dashboard design new features</h4>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"read_c\" href=\"#\">Read Contiune <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t<div class=\"up_blog_item\">
\t\t\t\t\t<div class=\"blog_img\"><img src=\"{{'assets/img/blog/update-blog/up-blog-3.jpg'|theme}}\" alt=\"\"></div>
\t\t\t\t\t<div class=\"up_blog_text\">
\t\t\t\t\t\t<h5>May 10th, 2017</h5>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h4>This is our latest dashboard design new features</h4>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"read_c\" href=\"#\">Read Contiune <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"gd_post\">
\t\t\t<a class=\"pre_or_btn\" href=\"#\">Read More</a>
\t\t</div>
\t</div>
</section>
<!--================End Update Blog Post Area =================-->

<!--================Get Form Area =================-->
<section class=\"get_form_area gd_contact\" id=\"contact\">
\t<div class=\"container\">
\t\t<div class=\"gd_title\">
\t\t\t<h2 data-title=\"Contact\">Need Help JUst Send A Massage</h2>
\t\t</div>
\t\t<div class=\"row m0\">
\t\t\t<form class=\"contact_us_form row m0\" action=\"contact_process.php\" method=\"post\" id=\"contactForm\"
\t\t\t\tnovalidate=\"novalidate\">
\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Type name..\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\"
\t\t\t\t\t\tplaceholder=\"examplename.20@domain.com\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"subject\" name=\"subject\" placeholder=\"Subject\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" id=\"message\" rows=\"1\"
\t\t\t\t\t\tplaceholder=\"Type here your massage\"></textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t<button type=\"submit\" value=\"submit\" class=\"btn pre_or_btn form-control\">Send Message</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</section>
<!--================End Get Form Area =================-->

<!--================Gadget Newsletter Area =================-->
<section class=\"gd_newsleter_area\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"media\">
\t\t\t\t\t<div class=\"media-left\">
\t\t\t\t\t\t<img src=\"{{'assets/img/gadget/inbox-gd.png'|theme}}\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t<h4><span>Our</span> Newsletter</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"gd_news_inner\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"your.email@domain.com\">
\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button class=\"btn btn-default pre_or_btn\" type=\"button\">Subscribe</button>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--================End Gadget Newsletter Area =================-->", "C:\\xampp\\htdocs\\project/themes/drimo/pages/landing.htm", "");
    }
}
