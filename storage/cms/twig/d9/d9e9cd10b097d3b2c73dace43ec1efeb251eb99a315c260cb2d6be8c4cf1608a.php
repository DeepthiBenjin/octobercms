<?php

/* C:\wamp64\www\chris-october/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm */
class __TwigTemplate_fafa81d09402a599269977f0f8f2368583ae5844c90438cd63aa60af83079c0f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
     <meta charset=\"utf-8\">
     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"> 
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/style.css\" rel=\"stylesheet\">
\t <link href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/vendor/bootstrap/dist/css/bootstrap.min.css", 1 => "assets/vendor/font-awesome/css/font-awesome.min.css", 2 => "assets/vendor/animate.css/animate.min.css", 3 => "assets/vendor/plyr/dist/plyr.css", 4 => "assets/css/style.css"));
        // line 16
        echo "\" rel=\"stylesheet\">
";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 18
        echo "  </head>
  <body>

    <div class=\"container-fluid page-container\">
\t<div class=\"row\" id=\"header-container\">
\t\t<div class=\"col-xs-12 \">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<div class=\"row menu-header\">
\t\t\t\t\t\t<div class=\"col-xs-12\" id=\"top-menu-nav\">
\t\t\t\t\t\t<ul id=\"top-menu\" class=\"nav\">
              <li class=\"nav-item ";
        // line 29
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFilename", array()) == "home")) ? ("active") : (""));
        echo "\">
\t\t\t  <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">HOME</a>
\t\t\t  </li>
\t\t\t   <li class=\"nav-item ";
        // line 32
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFilename", array()) == "biography")) ? ("active") : (""));
        echo "\">
\t\t\t  <a class=\"nav-link\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("biography");
        echo "\">BIOGRAPHY</a>
\t\t\t  </li>
\t\t\t   <li class=\"nav-item ";
        // line 35
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFilename", array()) == "speaking")) ? ("active") : (""));
        echo "\">
\t\t\t  <a class=\"nav-link\" href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("speaking");
        echo "\">SPEAKING</a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item ";
        // line 38
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFilename", array()) == "publications")) ? ("active") : (""));
        echo "\">
\t\t\t  <a class=\"nav-link\" href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("publications");
        echo "\">PUBLICATIONS</a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item ";
        // line 41
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFilename", array()) == "media")) ? ("active") : (""));
        echo "\">
\t\t\t  <a class=\"nav-link\" href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("media");
        echo "\">MEDIA</a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item ";
        // line 44
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFilename", array()) == "philanthrophy")) ? ("active") : (""));
        echo "\">
\t\t\t  <a class=\"nav-link\" href=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("philanthrophy");
        echo "\">PHILANTHROPY</a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item ";
        // line 47
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFilename", array()) == "gallery")) ? ("active") : (""));
        echo "\">
\t\t\t  <a class=\"nav-link\" href=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("gallery");
        echo "\">GALLERY</a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item ";
        // line 50
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFilename", array()) == "link")) ? ("active") : (""));
        echo "\">
\t\t\t  <a class=\"nav-link\" href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("link");
        echo "\">LINKS</a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item ";
        // line 53
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFilename", array()) == "contact")) ? ("active") : (""));
        echo "\">
\t\t\t  <a class=\"nav-link\" href=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">CONTACT</a>
\t\t\t  </li>
  </ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t

\t\t\t\t\t<div class=\"row\" id=\"sub-header\">
\t\t\t\t\t\t<div class=\"col-xs-12 main_heading\">
\t\t\t\t\t\t   <h1 style=\"text-align: center; font-size: 20px;\">Dr. Christian H. Kälin</h1>
    <p style=\"text-align: center;\">Investment Migration Pioneer, Legal Scholar, Author and Editor, Advisor to Governments, Philanthropist, Global Citizen</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row home-main\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<section id=\"page\" class=\"container m-b-6\">
               ";
        // line 74
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 75
        echo "              </section>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row home-main\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<section id=\"page\" class=\"container m-b-6\">
\t\t\t\t";
        // line 81
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("bottom"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 82
        echo "\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/scripts.js\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\chris-october/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 82,  164 => 81,  156 => 75,  154 => 74,  131 => 54,  127 => 53,  122 => 51,  118 => 50,  113 => 48,  109 => 47,  104 => 45,  100 => 44,  95 => 42,  91 => 41,  86 => 39,  82 => 38,  77 => 36,  73 => 35,  68 => 33,  64 => 32,  59 => 30,  55 => 29,  42 => 18,  39 => 17,  36 => 16,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
     <meta charset=\"utf-8\">
     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"> 
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/style.css\" rel=\"stylesheet\">
\t <link href=\"{{ [
      'assets/vendor/bootstrap/dist/css/bootstrap.min.css',
      'assets/vendor/font-awesome/css/font-awesome.min.css',
      'assets/vendor/animate.css/animate.min.css',
      'assets/vendor/plyr/dist/plyr.css',
      'assets/css/style.css'
    ]|theme }}\" rel=\"stylesheet\">
{% scripts%}
  </head>
  <body>

    <div class=\"container-fluid page-container\">
\t<div class=\"row\" id=\"header-container\">
\t\t<div class=\"col-xs-12 \">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<div class=\"row menu-header\">
\t\t\t\t\t\t<div class=\"col-xs-12\" id=\"top-menu-nav\">
\t\t\t\t\t\t<ul id=\"top-menu\" class=\"nav\">
              <li class=\"nav-item {{ this.page.baseFilename == 'home' ? 'active' }}\">
\t\t\t  <a class=\"nav-link\" href=\"{{ 'home'|page}}\">HOME</a>
\t\t\t  </li>
\t\t\t   <li class=\"nav-item {{ this.page.baseFilename == 'biography' ? 'active' }}\">
\t\t\t  <a class=\"nav-link\" href=\"{{ 'biography'|page}}\">BIOGRAPHY</a>
\t\t\t  </li>
\t\t\t   <li class=\"nav-item {{ this.page.baseFilename == 'speaking' ? 'active' }}\">
\t\t\t  <a class=\"nav-link\" href=\"{{ 'speaking'|page}}\">SPEAKING</a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item {{ this.page.baseFilename == 'publications' ? 'active' }}\">
\t\t\t  <a class=\"nav-link\" href=\"{{ 'publications'|page}}\">PUBLICATIONS</a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item {{ this.page.baseFilename == 'media' ? 'active' }}\">
\t\t\t  <a class=\"nav-link\" href=\"{{ 'media'|page}}\">MEDIA</a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item {{ this.page.baseFilename == 'philanthrophy' ? 'active' }}\">
\t\t\t  <a class=\"nav-link\" href=\"{{ 'philanthrophy'|page}}\">PHILANTHROPY</a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item {{ this.page.baseFilename == 'gallery' ? 'active' }}\">
\t\t\t  <a class=\"nav-link\" href=\"{{ 'gallery'|page}}\">GALLERY</a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item {{ this.page.baseFilename == 'link' ? 'active' }}\">
\t\t\t  <a class=\"nav-link\" href=\"{{ 'link'|page}}\">LINKS</a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item {{ this.page.baseFilename == 'contact' ? 'active' }}\">
\t\t\t  <a class=\"nav-link\" href=\"{{ 'contact'|page}}\">CONTACT</a>
\t\t\t  </li>
  </ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t

\t\t\t\t\t<div class=\"row\" id=\"sub-header\">
\t\t\t\t\t\t<div class=\"col-xs-12 main_heading\">
\t\t\t\t\t\t   <h1 style=\"text-align: center; font-size: 20px;\">Dr. Christian H. Kälin</h1>
    <p style=\"text-align: center;\">Investment Migration Pioneer, Legal Scholar, Author and Editor, Advisor to Governments, Philanthropist, Global Citizen</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row home-main\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<section id=\"page\" class=\"container m-b-6\">
               {% page %}
              </section>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row home-main\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<section id=\"page\" class=\"container m-b-6\">
\t\t\t\t{% partial 'bottom' %}
\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/scripts.js\"></script>
  </body>
</html>", "C:\\wamp64\\www\\chris-october/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm", "");
    }
}
