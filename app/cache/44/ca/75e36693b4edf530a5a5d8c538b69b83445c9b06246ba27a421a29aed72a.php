<?php

/* _aside.twig */
class __TwigTemplate_44ca75e36693b4edf530a5a5d8c538b69b83445c9b06246ba27a421a29aed72a extends Twig_Template
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
        echo "<!-- Sidebar -->

<aside class=\"four columns\">

    <div class=\"panel\">
        ";
        // line 8
        echo "        ";
        $template_storage = new Bolt\Storage($context['app']);
        $context['about'] =         $template_storage->getContent("page/about", array (
) );
        // line 9
        echo "
        ";
        // line 12
        echo "        ";
        if ($this->getAttribute((isset($context["about"]) ? $context["about"] : null), "title", array(), "any", true, true)) {
            // line 13
            echo "
            <h5>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : null), "title"), "html", null, true);
            echo "</h5>
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : null), "teaser"), "html", null, true);
            echo "

            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : null), "link"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("Read more");
            echo " &raquo;</a>

        ";
        } else {
            // line 20
            echo "
            <h5>";
            // line 21
            echo $this->env->getExtension('Bolt')->trans("Alas, no about!");
            echo "</h5>

            <p>";
            // line 23
            echo $this->env->getExtension('Bolt')->trans("If there was a Page with 'about' for a slug, it would've been shown here. But there isn't one, so that's why you're seeing this placeholder.");
            echo "</p>

        ";
        }
        // line 26
        echo "
    </div>

    ";
        // line 37
        echo "
    ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "contenttypes"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["ct"]) {
            // line 39
            echo "
        ";
            // line 40
            $template_storage = new Bolt\Storage($context['app']);
            $context['records'] =             $template_storage->getContent(($this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "slug") . "/latest/5"), array (
) );
            // line 41
            echo "
        <h5>";
            // line 42
            echo $this->env->getExtension('Bolt')->trans("Recent %contenttypes%", array("%contenttypes%" => $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "name")));
            echo "</h5>
        <ul>
            ";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 45
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "link"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title"), "html", null, true);
                echo "</a></li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 47
                echo "                <li>";
                echo $this->env->getExtension('Bolt')->trans("No recent %contenttype%.", array("%contenttype%" => $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "singular_name")));
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        </ul>
        <p><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "slug"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("%contenttypes% overview", array("%contenttypes%" => $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "name")));
            echo " &raquo;</a></p>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "

</aside>

<!-- End Sidebar -->
";
    }

    public function getTemplateName()
    {
        return "_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 54,  125 => 50,  98 => 44,  93 => 42,  83 => 39,  79 => 38,  65 => 23,  60 => 21,  57 => 20,  49 => 17,  26 => 8,  151 => 52,  144 => 50,  142 => 49,  133 => 47,  128 => 44,  122 => 49,  119 => 39,  103 => 45,  96 => 35,  92 => 33,  90 => 41,  87 => 30,  80 => 28,  78 => 27,  71 => 26,  69 => 24,  63 => 21,  54 => 17,  48 => 14,  45 => 13,  41 => 11,  32 => 7,  28 => 5,  113 => 47,  99 => 36,  77 => 11,  59 => 10,  56 => 9,  50 => 15,  42 => 4,  39 => 3,  38 => 9,  35 => 8,  29 => 5,  24 => 3,  22 => 2,  246 => 114,  237 => 107,  235 => 106,  224 => 99,  221 => 97,  213 => 94,  210 => 89,  203 => 85,  196 => 80,  189 => 76,  185 => 74,  183 => 73,  178 => 70,  160 => 64,  158 => 63,  155 => 62,  149 => 60,  143 => 58,  137 => 56,  134 => 55,  131 => 46,  124 => 42,  120 => 48,  117 => 47,  115 => 46,  108 => 15,  104 => 42,  86 => 40,  82 => 39,  76 => 37,  73 => 35,  70 => 34,  67 => 29,  64 => 28,  61 => 20,  58 => 19,  52 => 23,  46 => 21,  44 => 15,  40 => 14,  37 => 13,  34 => 12,  31 => 9,  21 => 2,  19 => 1,);
    }
}
