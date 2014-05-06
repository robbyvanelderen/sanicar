<?php

/* _sub_searchbox.twig */
class __TwigTemplate_7a3d7eace1bc3358c2acc39870dde2dd034bba2f0f62ad823f4e614a0ceeac19 extends Twig_Template
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
        echo "<li class=\"search\">
    <form method=\"get\" action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
        echo "search\" id=\"searchform\" enctype=\"text/plain\">
        <input type=\"search\" value=\"";
        // line 3
        if (array_key_exists("search", $context)) {
            echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null));
        }
        echo "\" placeholder=\"";
        echo $this->env->getExtension('Bolt')->trans("Search…");
        echo "\" name=\"search\">
    </form>
</li>
";
    }

    public function getTemplateName()
    {
        return "_sub_searchbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 10,  116 => 9,  113 => 8,  111 => 7,  106 => 5,  99 => 4,  91 => 3,  74 => 2,  62 => 1,  39 => 18,  167 => 81,  161 => 79,  159 => 78,  154 => 14,  150 => 12,  139 => 66,  136 => 65,  130 => 61,  118 => 51,  109 => 44,  103 => 36,  98 => 33,  93 => 31,  88 => 30,  83 => 26,  79 => 25,  75 => 24,  70 => 22,  65 => 21,  60 => 16,  55 => 15,  50 => 14,  45 => 13,  42 => 19,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  24 => 3,  21 => 2,  19 => 1,);
    }
}
