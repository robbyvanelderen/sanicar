<?php

/* _recordfooter.twig */
class __TwigTemplate_eb285d37936a099655ac2e80f7f3903b89fac82acbe4d30b0e525eaa91c4bb69 extends Twig_Template
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
        // line 2
        echo "<h6>
    ";
        // line 3
        $context["recdate"] = $this->env->getExtension('Bolt')->localedatetime($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "datepublish"), "%A %B %e, %Y");
        // line 4
        echo "    ";
        echo $this->env->getExtension('Bolt')->trans("Written by <em>%name%</em> on %date%", array("%name%" => $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "user"), "displayname"), "%date%" => (isset($context["recdate"]) ? $context["recdate"] : null)));
        echo " <br>
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "link"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Bolt')->trans("Permalink");
        echo "</a> -
    ";
        // line 8
        echo "    ";
        $this->env->loadTemplate("_sub_taxonomylinks.twig")->display(array_merge($context, array("record" => (isset($context["record"]) ? $context["record"] : null))));
        // line 9
        echo "</h6>
";
    }

    public function getTemplateName()
    {
        return "_recordfooter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  35 => 8,  29 => 5,  24 => 4,  22 => 3,  246 => 114,  237 => 107,  235 => 106,  224 => 99,  221 => 97,  213 => 94,  210 => 89,  203 => 85,  196 => 80,  189 => 76,  185 => 74,  183 => 73,  178 => 70,  160 => 64,  158 => 63,  155 => 62,  149 => 60,  143 => 58,  137 => 56,  134 => 55,  131 => 53,  124 => 49,  120 => 48,  117 => 47,  115 => 46,  108 => 44,  104 => 42,  86 => 41,  82 => 39,  76 => 36,  73 => 35,  70 => 34,  67 => 29,  64 => 28,  61 => 27,  58 => 25,  52 => 23,  46 => 21,  44 => 20,  40 => 19,  37 => 18,  34 => 17,  31 => 15,  21 => 2,  19 => 2,);
    }
}
