<?php

/* listing.twig */
class __TwigTemplate_0f6546bd8a282ffd3d63e00146e40a38ab0379da47098b8e8e0afc5fee88bbf2 extends Twig_Template
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

        ";
        // line 15
        echo "
        ";
        // line 17
        echo "        ";
        if (array_key_exists("taxonomytype", $context)) {
            // line 18
            echo "            <h1>
                ";
            // line 19
            echo $this->env->getExtension('Bolt')->trans("Overview for");
            echo "
                ";
            // line 20
            if ($this->getAttribute($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options", array(), "any", false, true), (isset($context["slug"]) ? $context["slug"] : null), array(), "array", true, true)) {
                // line 21
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options"), (isset($context["slug"]) ? $context["slug"] : null), array(), "array"), "html", null, true);
                echo "
                ";
            } else {
                // line 23
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : null), "html", null, true);
                echo "
                ";
            }
            // line 25
            echo "            </h1>
            ";
            // line 27
            echo "            ";
            $context["records"] = $this->env->getExtension('Bolt')->order((isset($context["records"]) ? $context["records"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/listing_sort"), "method"));
            // line 28
            echo "        ";
        }
        // line 29
        echo "
        ";
        // line 34
        echo "        ";
        if (array_key_exists("search", $context)) {
            // line 35
            echo "            <h1>
                ";
            // line 36
            echo $this->env->getExtension('Bolt')->trans("Search results for <b> %search% </b>.", array("%search%" => twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null))));
            echo "
            </h1>
        ";
        }
        // line 39
        echo "

        ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 42
            echo "            <article>

                <h2><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title"), "html", null, true);
            echo "</a></h2>

                ";
            // line 46
            if (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image") != "")) {
                // line 47
                echo "                    <div class=\"four columns imageholder\">
                        <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image")), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image"), 400, 260), "html", null, true);
                echo "\">
                        </a>
                    </div>
                ";
            }
            // line 53
            echo "
                ";
            // line 55
            echo "                ";
            if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "introduction")) {
                // line 56
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "introduction"), "html", null, true);
                echo "
                ";
            } elseif ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teaser")) {
                // line 58
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teaser"), "html", null, true);
                echo "
                ";
            } else {
                // line 60
                echo "                    <p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "excerpt", array(0 => 300), "method"), "html", null, true);
                echo "</p>
                ";
            }
            // line 62
            echo "
                ";
            // line 63
            $this->env->loadTemplate("_recordfooter.twig")->display(array_merge($context, array("record" => (isset($context["record"]) ? $context["record"] : null))));
            // line 64
            echo "
            </article>

            <hr>

        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 70
            echo "            <article>


                ";
            // line 73
            if (array_key_exists("search", $context)) {
                // line 74
                echo "
                    <p>
                        ";
                // line 76
                echo $this->env->getExtension('Bolt')->trans("No results found for '%search%'. Please try another search.", array("%search%" => twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null))));
                echo "
                    </p>

                ";
            } else {
                // line 80
                echo "
                    <h2>No content found.</h2>

                    <p>
                        Unfortunately, no content could be found. Try another page, or go to the
                        <a href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
                echo "\">homepage</a>.
                    </p>

                ";
            }
            // line 89
            echo "
                ";
            // line 94
            echo "
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
        ";
        // line 99
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env), "html", null, true);
        echo "


    </div>

    <!-- End Main Content -->

    ";
        // line 106
        $this->env->loadTemplate("_aside.twig")->display($context);
        // line 107
        echo "
</div>

<!-- End Main Content and Sidebar -->



";
        // line 114
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 114,  237 => 107,  235 => 106,  224 => 99,  221 => 97,  213 => 94,  210 => 89,  203 => 85,  196 => 80,  189 => 76,  185 => 74,  183 => 73,  178 => 70,  160 => 64,  158 => 63,  155 => 62,  149 => 60,  143 => 58,  137 => 56,  134 => 55,  131 => 53,  124 => 49,  120 => 48,  117 => 47,  115 => 46,  108 => 44,  104 => 42,  86 => 41,  82 => 39,  76 => 36,  73 => 35,  70 => 34,  67 => 29,  64 => 28,  61 => 27,  58 => 25,  52 => 23,  46 => 21,  44 => 20,  40 => 19,  37 => 18,  34 => 17,  31 => 15,  21 => 2,  19 => 1,);
    }
}
