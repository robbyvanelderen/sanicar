<?php

/* _sub_pager.twig */
class __TwigTemplate_edfcd5854d3dd9d74c9e61bcdfdb794bfcfd40dd57679c20bf44f96add0db609 extends Twig_Template
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
        echo "
";
        // line 2
        if (twig_in_filter("filter", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all")))) {
            // line 3
            echo "    ";
            $context["filter"] = (("filter=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all"), "filter")) . "&");
        } else {
            // line 5
            echo "    ";
            $context["filter"] = "";
        }
        // line 7
        echo "
";
        // line 8
        if (twig_in_filter("order", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all")))) {
            // line 9
            echo "    ";
            $context["order"] = (("order=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all"), "order")) . "&");
        } else {
            // line 11
            echo "    ";
            $context["order"] = "";
        }
        // line 13
        echo "
";
        // line 14
        if ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "link", array(), "any", true, true)) {
            // line 15
            echo "    ";
            $context["link"] = $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "link");
        } else {
            // line 17
            echo "    ";
            $context["link"] = ((("?" . (isset($context["filter"]) ? $context["filter"] : null)) . (isset($context["order"]) ? $context["order"] : null)) . "page=");
        }
        // line 19
        echo "
";
        // line 20
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages") > 1)) {
            // line 21
            echo "<div class=\"pagination pagination-centered ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">
  <ul class=\"pagination\">
";
            // line 24
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") > 1) && ((isset($context["class"]) ? $context["class"] : null) != "narrow"))) {
                // line 25
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") - 1), "html", null, true);
                echo "\">&lsaquo; </a></li>
";
            }
            // line 27
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") > ((isset($context["surr"]) ? $context["surr"] : null) + 1))) {
                // line 28
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo 1;
                echo "\">&laquo; 1</a></li>
";
            }
            // line 30
            echo "
";
            // line 32
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") > ((isset($context["surr"]) ? $context["surr"] : null) + 2))) {
                // line 33
                echo "    <li class=\"disabled\"><a href=\"#\">...</a></li>
";
            }
            // line 35
            echo "
";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range($this->env->getExtension('Bolt')->max(1, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") - (isset($context["surr"]) ? $context["surr"] : null))), $this->env->getExtension('Bolt')->min(($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") + (isset($context["surr"]) ? $context["surr"] : null)), $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 37
                echo "    <li ";
                if (((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current"))) {
                    echo "class='active'";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</a></li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
";
            // line 41
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") < (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages") - (isset($context["surr"]) ? $context["surr"] : null)) - 1))) {
                // line 42
                echo "    <li class=\"disabled\"><a href=\"#\">...</a></li>
";
            }
            // line 44
            echo "
";
            // line 46
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") < ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages") - (isset($context["surr"]) ? $context["surr"] : null)))) {
                // line 47
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages"), "html", null, true);
                echo " &raquo; </a></li>
";
            }
            // line 49
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") < $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages")) && ((isset($context["class"]) ? $context["class"] : null) != "narrow"))) {
                // line 50
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") + 1), "html", null, true);
                echo "\">&rsaquo;</a></li>
";
            }
            // line 52
            echo "  </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "_sub_pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 52,  144 => 50,  142 => 49,  133 => 47,  128 => 44,  122 => 41,  119 => 39,  103 => 37,  96 => 35,  92 => 33,  90 => 32,  87 => 30,  80 => 28,  78 => 27,  71 => 25,  69 => 24,  63 => 21,  54 => 17,  48 => 14,  45 => 13,  41 => 11,  32 => 7,  28 => 5,  113 => 16,  99 => 36,  77 => 11,  59 => 10,  56 => 9,  50 => 15,  42 => 4,  39 => 3,  38 => 9,  35 => 8,  29 => 5,  24 => 3,  22 => 2,  246 => 114,  237 => 107,  235 => 106,  224 => 99,  221 => 97,  213 => 94,  210 => 89,  203 => 85,  196 => 80,  189 => 76,  185 => 74,  183 => 73,  178 => 70,  160 => 64,  158 => 63,  155 => 62,  149 => 60,  143 => 58,  137 => 56,  134 => 55,  131 => 46,  124 => 42,  120 => 48,  117 => 47,  115 => 46,  108 => 15,  104 => 42,  86 => 12,  82 => 39,  76 => 36,  73 => 35,  70 => 34,  67 => 29,  64 => 28,  61 => 20,  58 => 19,  52 => 23,  46 => 21,  44 => 5,  40 => 19,  37 => 9,  34 => 17,  31 => 15,  21 => 2,  19 => 1,);
    }
}
