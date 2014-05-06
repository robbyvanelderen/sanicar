<?php

/* index.twig */
class __TwigTemplate_167acd83bc2af0e82f5fdcecb7e2f655b57be787f6f2e67a58d82cec77dfa8ff extends Twig_Template
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
<div id=\"header\">
\t<div id=\"slogan\">De oplossing tijdens uw verbouwing of evenement</div>
\t<div id=\"logo\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "images/logo.png\" /></div>
</div>

<div id=\"bodysection\">
\t<div id=\"navigation\">
\t\t";
        // line 10
        $template_storage = new Bolt\Storage($context['app']);
        $context['mobiele_badkamer'] =         $template_storage->getContent("page/mobiele-badkamer", array (
) );
        echo " 
\t\t<div id=\"mobielebadkamer\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobiele_badkamer"]) ? $context["mobiele_badkamer"] : null), "title"), "html", null, true);
        echo "</div>
\t\t<div id=\"mobielebadkamer-content\">
\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobiele_badkamer"]) ? $context["mobiele_badkamer"] : null), "body"), "html", null, true);
        echo "
\t\t</div>
\t\t";
        // line 15
        $template_storage = new Bolt\Storage($context['app']);
        $context['wc_wagens'] =         $template_storage->getContent("page/wc-wagens", array (
) );
        // line 16
        echo "\t\t<div id=\"wcwagens\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wc_wagens"]) ? $context["wc_wagens"] : null), "title"), "html", null, true);
        echo "</div>
\t\t<div id=\"wcwagens-content\">
\t\t\t";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wc_wagens"]) ? $context["wc_wagens"] : null), "body"), "html", null, true);
        echo "
\t\t</div>
\t</div>
<div id=\"startbeeld\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "images/home_beeld.png\" /></div>

</div>

";
        // line 25
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  66 => 21,  60 => 18,  54 => 16,  50 => 15,  45 => 13,  40 => 11,  34 => 10,  26 => 5,  21 => 2,  19 => 1,);
    }
}
