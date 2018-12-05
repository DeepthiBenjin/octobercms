<?php

/* C:\wamp64\www\chris-october/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm */
class __TwigTemplate_d9cbab3c28ee74b212bd9f50048a76a0ef091284b947af8e0310d77a0475efae extends Twig_Template
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
        echo "<div class='row'>
        <div class='col-md-offset-1 col-md-10'>
            <div class=\"quote-carousel carousel slide\" id=\"quote-carousel-";
        // line 3
        echo twig_escape_filter($this->env, ($context["quotes"] ?? null), "html", null, true);
        echo "\">              

                <div class=\"carousel-inner\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["quotes"] ?? null), "quotes", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 7
            echo "                    <div class=\"item ";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) ? ("active") : (""));
            echo "\">
                        <blockquote>
                            <div class=\"row\">                         
                              <p>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "quote", array()), "html", null, true);
            echo "</p>                            
                                
                            </div>
                        </blockquote>
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                </div>


            </div>
        </div>
    </div>






<div class=\"home-slider\">
";
        // line 29
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("advanced"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 30
        echo "</div>
<div class=\"text-home\">
    <p>Dr. Christian H. Kälin, TEP, IMCM, Chairman of Henley & Partners, is considered one of the world’s foremost experts in investment migration and citizenship-by-investment, a field he pioneered. Holding master’s and PhD degrees in law from the University of Zurich, he is a sought-after speaker and advises governments and international organizations. He is the author, co-author, or editor of many publications, including standard works such as the Global Residence and Citizenship Handbook, Ius Doni: The Acquisition of Citizenship by Investment, the Henley & Partners – Kochenov Quality of Nationality Index, and the Switzerland Business & Investment Handbook.</p><br>
    <p>
    The architect of the modern investment migration industry, “Kälin is to citizenship by investment what Henry Ford was to the automobile – he may not have invented it, but he did standardize, popularize, and globalize it.” Dr. Kälin has been named by Bloomberg as the “Passport King” and is also internationally referred to as “Mr. Citizenship”, due to his pioneering role in laying the foundations and leading the industry as well as being one of the academic thought leaders in modern citizenship theory and practice.</p>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\chris-october/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  92 => 29,  77 => 16,  57 => 10,  50 => 7,  33 => 6,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class='row'>
        <div class='col-md-offset-1 col-md-10'>
            <div class=\"quote-carousel carousel slide\" id=\"quote-carousel-{{ quotes }}\">              

                <div class=\"carousel-inner\">
                {% for row in quotes.quotes %}
                    <div class=\"item {{ (loop.first) ? 'active' : '' }}\">
                        <blockquote>
                            <div class=\"row\">                         
                              <p>{{ row.quote }}</p>                            
                                
                            </div>
                        </blockquote>
                    </div>
                {% endfor %}
                </div>


            </div>
        </div>
    </div>






<div class=\"home-slider\">
{% component 'advanced' %}
</div>
<div class=\"text-home\">
    <p>Dr. Christian H. Kälin, TEP, IMCM, Chairman of Henley & Partners, is considered one of the world’s foremost experts in investment migration and citizenship-by-investment, a field he pioneered. Holding master’s and PhD degrees in law from the University of Zurich, he is a sought-after speaker and advises governments and international organizations. He is the author, co-author, or editor of many publications, including standard works such as the Global Residence and Citizenship Handbook, Ius Doni: The Acquisition of Citizenship by Investment, the Henley & Partners – Kochenov Quality of Nationality Index, and the Switzerland Business & Investment Handbook.</p><br>
    <p>
    The architect of the modern investment migration industry, “Kälin is to citizenship by investment what Henry Ford was to the automobile – he may not have invented it, but he did standardize, popularize, and globalize it.” Dr. Kälin has been named by Bloomberg as the “Passport King” and is also internationally referred to as “Mr. Citizenship”, due to his pioneering role in laying the foundations and leading the industry as well as being one of the academic thought leaders in modern citizenship theory and practice.</p>
    </div>", "C:\\wamp64\\www\\chris-october/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm", "");
    }
}
