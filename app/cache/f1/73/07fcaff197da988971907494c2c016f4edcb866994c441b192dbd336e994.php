<?php

/* _sub_csrf_token.twig */
class __TwigTemplate_f17307fcaff197da988971907494c2c016f4edcb866994c441b192dbd336e994 extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->token(), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "_sub_csrf_token.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  499 => 227,  489 => 220,  484 => 218,  466 => 203,  453 => 195,  449 => 194,  428 => 176,  416 => 171,  400 => 160,  381 => 143,  375 => 141,  365 => 139,  363 => 138,  356 => 134,  349 => 130,  342 => 126,  336 => 123,  326 => 115,  320 => 113,  310 => 111,  308 => 110,  301 => 106,  294 => 102,  287 => 98,  280 => 93,  265 => 91,  261 => 90,  255 => 89,  251 => 88,  246 => 85,  231 => 83,  226 => 82,  224 => 81,  218 => 80,  214 => 79,  210 => 77,  201 => 76,  197 => 75,  189 => 74,  184 => 73,  182 => 72,  179 => 71,  169 => 63,  167 => 62,  163 => 61,  156 => 60,  152 => 59,  144 => 57,  140 => 56,  134 => 53,  131 => 52,  129 => 51,  126 => 50,  116 => 42,  114 => 41,  106 => 40,  101 => 38,  96 => 37,  92 => 36,  86 => 34,  82 => 33,  76 => 30,  73 => 29,  71 => 28,  65 => 25,  58 => 21,  54 => 19,  52 => 18,  49 => 17,  47 => 16,  42 => 13,  40 => 12,  37 => 11,  35 => 10,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }
}
