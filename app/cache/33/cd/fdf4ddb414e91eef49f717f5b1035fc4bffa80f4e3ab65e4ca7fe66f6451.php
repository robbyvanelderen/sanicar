<?php

/* _sub_taxonomylinks.twig */
class __TwigTemplate_33cdfdf4ddb414e91eef49f717f5b1035fc4bffa80f4e3ab65e4ca7fe66f6451 extends Twig_Template
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
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "taxonomy", array(), "any", true, true)) {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "taxonomy"));
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
            foreach ($context['_seq'] as $context["type"] => $context["values"]) {
                // line 3
                echo "        <em>
        ";
                // line 4
                if ((twig_length_filter($this->env, (isset($context["values"]) ? $context["values"] : null)) < 2)) {
                    // line 5
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), (isset($context["type"]) ? $context["type"] : null), array(), "array"), "singular_name"), "html", null, true);
                    echo ":
        ";
                } else {
                    // line 7
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), (isset($context["type"]) ? $context["type"] : null), array(), "array"), "name"), "html", null, true);
                    echo ":
        ";
                }
                // line 9
                echo "        </em>
        ";
                // line 10
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
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
                foreach ($context['_seq'] as $context["link"] => $context["value"]) {
                    // line 11
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                    echo "</a>";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                        echo ", ";
                    }
                    // line 12
                    echo "        ";
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
                    // line 13
                    echo "            ";
                    echo $this->env->getExtension('Bolt')->trans("none");
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['link'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "        ";
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                    echo " - ";
                }
                // line 16
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "_sub_taxonomylinks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 16,  99 => 13,  77 => 11,  59 => 10,  56 => 9,  50 => 7,  42 => 4,  39 => 3,  38 => 9,  35 => 8,  29 => 5,  24 => 4,  22 => 3,  246 => 114,  237 => 107,  235 => 106,  224 => 99,  221 => 97,  213 => 94,  210 => 89,  203 => 85,  196 => 80,  189 => 76,  185 => 74,  183 => 73,  178 => 70,  160 => 64,  158 => 63,  155 => 62,  149 => 60,  143 => 58,  137 => 56,  134 => 55,  131 => 53,  124 => 49,  120 => 48,  117 => 47,  115 => 46,  108 => 15,  104 => 42,  86 => 12,  82 => 39,  76 => 36,  73 => 35,  70 => 34,  67 => 29,  64 => 28,  61 => 27,  58 => 25,  52 => 23,  46 => 21,  44 => 5,  40 => 19,  37 => 18,  34 => 17,  31 => 15,  21 => 2,  19 => 1,);
    }
}
