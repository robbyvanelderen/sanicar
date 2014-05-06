<?php

/* record.twig */
class __TwigTemplate_799a77c828e02fe75468b1d0b6d23f9abdcdaca052a091170df7dc28933b8844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("_header.twig")->display($context);
        // line 2
        echo "
<!-- Main Page Content and Sidebar -->

<div class=\"row\">

    <!-- Main Blog Content -->
    <div class=\"eight columns\" role=\"content\">

        <article>

            <h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title"), "html", null, true);
        echo "</h2>

            ";
        // line 14
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "subtitle")) {
            // line 15
            echo "                <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "subtitle"), "html", null, true);
            echo "</h3>
            ";
        }
        // line 17
        echo "
            ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "values"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if (!twig_in_filter((isset($context["key"]) ? $context["key"] : null), array(0 => "id", 1 => "slug", 2 => "datecreated", 3 => "datechanged", 4 => "datepublish", 5 => "datedepublish", 6 => "username", 7 => "status", 8 => "title", 9 => "subtitle", 10 => "ownerid"))) {
                // line 19
                echo "
                ";
                // line 20
                if ((($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") == "image") && ((isset($context["value"]) ? $context["value"] : null) != ""))) {
                    // line 21
                    echo "
                    ";
                    // line 22
                    if (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image") != "")) {
                        // line 23
                        echo "                        <div class=\"twelve columns imageholder\">
                            <a href=\"";
                        // line 24
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image((isset($context["value"]) ? $context["value"] : null)), "html", null, true);
                        echo "\">
                                <img src=\"";
                        // line 25
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail((isset($context["value"]) ? $context["value"] : null), 640, 480), "html", null, true);
                        echo "\">
                            </a>
                        </div>
                    ";
                    }
                    // line 29
                    echo "

                ";
                } elseif ((($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") == "imagelist") && ((isset($context["value"]) ? $context["value"] : null) != ""))) {
                    // line 32
                    echo "
                    ";
                    // line 37
                    echo "
                    ";
                    // line 38
                    $context["list"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), (isset($context["key"]) ? $context["key"] : null));
                    // line 39
                    echo "
                    ";
                    // line 40
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 41
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filename")), "html", null, true);
                        echo "\">
                            <img src=\"";
                        // line 42
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filename"), 100, 100), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                        echo "\">
                        </a>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "
                ";
                } elseif ((($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") == "video") && $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "responsive", array(), "any", true, true))) {
                    // line 47
                    echo "
                    ";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "responsive"), "html", null, true);
                    echo "

                ";
                } elseif ((($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") == "geolocation") && $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "latitude", array(), "any", true, true))) {
                    // line 51
                    echo "
                    <div class='imageholder-wide'>
                        <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "latitude"), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "longitude"), "html", null, true);
                    echo "&amp;zoom=14&amp;size=617x300&amp;sensor=false&amp;markers=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "latitude"), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "longitude"), "html", null, true);
                    echo "\">
                    </div>
                    <p>";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "formatted_address"), "html", null, true);
                    echo "</p>

                ";
                } elseif (twig_in_filter($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), array(0 => "html", 1 => "markdown", 2 => "textarea"))) {
                    // line 58
                    echo "
                    ";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), (isset($context["key"]) ? $context["key"] : null)), "html", null, true);
                    echo "

                ";
                } elseif (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") == "select")) {
                    // line 62
                    echo "
                    ";
                    // line 64
                    echo "                    <p><strong>";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo ": </strong>
                        ";
                    // line 65
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["record"]) ? $context["record"] : null), (isset($context["key"]) ? $context["key"] : null)), ", "), "html", null, true);
                    echo "
                    </p>

                ";
                } elseif ((!twig_in_filter($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), array(0 => "templateselect")) && ((isset($context["value"]) ? $context["value"] : null) != ""))) {
                    // line 69
                    echo "
                    <p><strong>";
                    // line 70
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo ": </strong>
                        ";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), (isset($context["key"]) ? $context["key"] : null)), "html", null, true);
                    echo "
                    </p>

                ";
                }
                // line 75
                echo "
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
            ";
        // line 81
        echo "
            ";
        // line 82
        $this->env->loadTemplate("_recordfooter.twig")->display(array_merge($context, array("record" => (isset($context["record"]) ? $context["record"] : null))));
        // line 83
        echo "
            <p class=\"meta\">
                ";
        // line 85
        $context["previous"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "previous", array(0 => "id"), "method");
        // line 86
        echo "                ";
        if ((isset($context["previous"]) ? $context["previous"] : null)) {
            // line 87
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "link"), "html", null, true);
            echo "\">&laquo; ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "title"), "html", null, true);
            echo "</a>
                ";
        }
        // line 89
        echo "                -
                ";
        // line 90
        $context["next"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "next", array(0 => "id"), "method");
        // line 91
        echo "                ";
        if ((isset($context["next"]) ? $context["next"] : null)) {
            // line 92
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "title"), "html", null, true);
            echo " &raquo;</a>
                ";
        }
        // line 94
        echo "            </p>

            ";
        // line 96
        $context["relatedrecords"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "related", array(), "method");
        // line 97
        echo "            ";
        if ((!twig_test_empty((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null)))) {
            // line 98
            echo "                <p class=\"meta\">";
            echo $this->env->getExtension('Bolt')->trans("Related content:");
            echo "
                <ul>
                    ";
            // line 100
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
                // line 101
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "link"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "title"), "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                </ul>
                </p>
            ";
        }
        // line 106
        echo "
        </article>


    </div>

    <!-- End Main Content -->

    ";
        // line 114
        $this->env->loadTemplate("_aside.twig")->display($context);
        // line 115
        echo "
</div>

<!-- End Main Content and Sidebar -->



";
        // line 122
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "record.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 122,  284 => 115,  282 => 114,  272 => 106,  267 => 103,  256 => 101,  252 => 100,  246 => 98,  243 => 97,  241 => 96,  237 => 94,  229 => 92,  226 => 91,  224 => 90,  221 => 89,  213 => 87,  210 => 86,  208 => 85,  204 => 83,  202 => 82,  199 => 81,  196 => 77,  188 => 75,  181 => 71,  177 => 70,  174 => 69,  167 => 65,  162 => 64,  159 => 62,  153 => 59,  150 => 58,  144 => 55,  133 => 53,  129 => 51,  123 => 48,  120 => 47,  116 => 45,  103 => 42,  98 => 41,  94 => 40,  91 => 39,  89 => 38,  86 => 37,  83 => 32,  78 => 29,  71 => 25,  67 => 24,  64 => 23,  62 => 22,  59 => 21,  57 => 20,  54 => 19,  49 => 18,  46 => 17,  40 => 15,  38 => 14,  33 => 12,  21 => 2,  19 => 1,);
    }
}
