<?php

/* C:\wamp64\www\chris-october/themes/hambern-hambern-blank-bootstrap-4/pages/speaking.htm */
class __TwigTemplate_f9ce9f73ff139331c93585430a00569b056b864193d0c97737b32b1735dc040b extends Twig_Template
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
        echo "<div class=\"text-bio et_pb_text_align_left\">
<h1> Speaking</h1>
<p>Dr. Kälin is a highly sought-after speaker and regularly participates in international conferences and events. Below is a selection of his recent speeches, available for download.</p>
</div>
<div class=\"row\">
\t<div class=\"col-md-8\">
";
        // line 7
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", array());
        // line 8
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", array());
        // line 9
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 10
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", array());
        // line 11
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 12
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 13
        echo "

    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 16
            echo "       
           ";
            // line 18
            echo "            ";
            ob_start();
            // line 19
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 20
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                ";
            }
            // line 22
            echo "                <table border=\"0\">
                 <tr>
                 <td><img src=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "poster", array()), "thumb", array(0 => 234, 1 => 134), "method"), "html", null, true);
            echo "\"></td>
                <td><h3>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "name", array()), "html", null, true);
            echo "</h3><br>";
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->source, $context["record"], "description", array()), 100));
            echo "</td>
            </tr>    
</table>
                ";
            // line 28
            if (($context["detailsPage"] ?? null)) {
                // line 29
                echo "                    </a>
                ";
            }
            // line 31
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 32
            echo "        
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "     ";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "

";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 39
            echo "    <ul class=\"pagination\">
        ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 41
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 43
            echo "
        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 45
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 46
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "
        ";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()))) {
                // line 51
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 53
            echo "    </ul>
";
        }
        // line 55
        echo "</div>
\t<div class=\"col-md-4\">
\t<table>
\t<tr><td><img src=\"storage/app/media/Chris-Kalin.jpg\" style=\"max-width: 100%; height: auto;\"></img></td></tr>
\t<tr><td><h4>Dr. Christian H. Kälin</h4></td></tr>
\t<tr><td><p>Dr. Christian H. Kälin, TEP, IMCM, Chairman of Henley & Partners, is considered one of the world’s foremost experts in investment migration and citizenship-by-investment, a field he pioneered.</p></td></tr>
\t</table>
</div>
<div class=\"text-bio et_pb_text_align_left\">
<h1>Quotes</h1>
<hr class=\"page_sep\">
<p>Through Dr. Kälin’s many publications and speeches, he has also stated some relevant thoughts and views on citizenship and other related topics, and has been frequently quoted.
The following is a selection of his quotes.</p>
<div class=\"\">

    <div class='row'>
        <div class='col-md-offset-1 col-md-12'>
            <div class=\"\" data-ride=\"carousel\" >

              
                <div >
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["quotes"] ?? null), "quotes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 77
            echo "                    <div >
                        <blockquote>
                            <div class=\"row\">
                            ";
            // line 80
            if (twig_get_attribute($this->env, $this->source, $context["row"], "image", array())) {
                // line 81
                echo "                                <div class=\"col-sm-3 text-center\">
                                    <img class=\"img-circle\" src=\"";
                // line 82
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["row"], "image", array()));
                echo "\" style=\"width: 100px;height:100px;\">
                                </div>
                            ";
            }
            // line 85
            echo "                                <div class=\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["row"], "image", array()) == "")) ? ("col-sm-offset-1 col-sm-10") : ("col-sm-9"));
            echo "\">
                                    <p>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "quote", array()), "html", null, true);
            echo "</p>
                                ";
            // line 87
            if (twig_get_attribute($this->env, $this->source, $context["row"], "author", array())) {
                // line 88
                echo "                                    <small>
                                    <p>~";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "author", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "link", array()), "html", null, true);
                echo "
                                    </small>
                                ";
            }
            // line 92
            echo "                                </div>
                            </div>
                        </blockquote>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                </div>

               

            </div>
        </div>
    </div>
</div>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\chris-october/themes/hambern-hambern-blank-bootstrap-4/pages/speaking.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 97,  227 => 92,  219 => 89,  216 => 88,  214 => 87,  210 => 86,  205 => 85,  199 => 82,  196 => 81,  194 => 80,  189 => 77,  185 => 76,  162 => 55,  158 => 53,  152 => 51,  150 => 50,  147 => 49,  136 => 46,  131 => 45,  127 => 44,  124 => 43,  118 => 41,  116 => 40,  113 => 39,  111 => 38,  107 => 36,  98 => 34,  92 => 32,  89 => 31,  85 => 29,  83 => 28,  75 => 25,  71 => 24,  67 => 22,  61 => 20,  58 => 19,  55 => 18,  52 => 16,  47 => 15,  43 => 13,  41 => 12,  39 => 11,  37 => 10,  35 => 9,  33 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"text-bio et_pb_text_align_left\">
<h1> Speaking</h1>
<p>Dr. Kälin is a highly sought-after speaker and regularly participates in international conferences and events. Below is a selection of his recent speeches, available for download.</p>
</div>
<div class=\"row\">
\t<div class=\"col-md-8\">
{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}


    {% for record in records %}
       
           {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}
                <table border=\"0\">
                 <tr>
                 <td><img src=\"{{record.poster.thumb(234,134) }}\"></td>
                <td><h3>{{ record.name }}</h3><br>{{ html_limit(record.description,100)|raw }}</td>
            </tr>    
</table>
                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}
        
    {% else %}
     {{ noRecordsMessage }}
    {% endfor %}


{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}
</div>
\t<div class=\"col-md-4\">
\t<table>
\t<tr><td><img src=\"storage/app/media/Chris-Kalin.jpg\" style=\"max-width: 100%; height: auto;\"></img></td></tr>
\t<tr><td><h4>Dr. Christian H. Kälin</h4></td></tr>
\t<tr><td><p>Dr. Christian H. Kälin, TEP, IMCM, Chairman of Henley & Partners, is considered one of the world’s foremost experts in investment migration and citizenship-by-investment, a field he pioneered.</p></td></tr>
\t</table>
</div>
<div class=\"text-bio et_pb_text_align_left\">
<h1>Quotes</h1>
<hr class=\"page_sep\">
<p>Through Dr. Kälin’s many publications and speeches, he has also stated some relevant thoughts and views on citizenship and other related topics, and has been frequently quoted.
The following is a selection of his quotes.</p>
<div class=\"\">

    <div class='row'>
        <div class='col-md-offset-1 col-md-12'>
            <div class=\"\" data-ride=\"carousel\" >

              
                <div >
                {% for row in quotes.quotes %}
                    <div >
                        <blockquote>
                            <div class=\"row\">
                            {% if row.image %}
                                <div class=\"col-sm-3 text-center\">
                                    <img class=\"img-circle\" src=\"{{ row.image|media }}\" style=\"width: 100px;height:100px;\">
                                </div>
                            {% endif %}
                                <div class=\"{{ (row.image == '') ? 'col-sm-offset-1 col-sm-10' : 'col-sm-9' }}\">
                                    <p>{{ row.quote }}</p>
                                {% if row.author %}
                                    <small>
                                    <p>~{{ row.author }},{{ row.link }}
                                    </small>
                                {% endif %}
                                </div>
                            </div>
                        </blockquote>
                    </div>
                {% endfor %}
                </div>

               

            </div>
        </div>
    </div>
</div>

</div>", "C:\\wamp64\\www\\chris-october/themes/hambern-hambern-blank-bootstrap-4/pages/speaking.htm", "");
    }
}
