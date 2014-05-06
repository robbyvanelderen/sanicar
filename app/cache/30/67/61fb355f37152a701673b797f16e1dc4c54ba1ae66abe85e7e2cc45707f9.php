<?php

/* _sub_editfields.twig */
class __TwigTemplate_306761fb355f37152a701673b797f16e1dc4c54ba1ae66abe85e7e2cc45707f9 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "fields"));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 2
            echo "
";
            // line 4
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "prefix", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "prefix"))))) {
                // line 5
                echo "<div class='clearfix'>
    ";
                // line 6
                echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "prefix");
                echo "
</div>
";
            }
            // line 9
            echo "

";
            // line 12
            echo "
";
            // line 13
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "text")) {
                // line 14
                echo "    <label><b>";
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "variant") == "inline")) {
                    echo "<span class='left'>";
                }
                // line 15
                echo "        ";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                // line 16
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "variant") == "inline")) {
                    echo "</span>";
                }
                echo "</b></label>
    <input type=\"";
                // line 17
                if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern"), array(0 => "url", 1 => "email"))) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern"), "html", null, true);
                } else {
                    echo "text";
                }
                echo "\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
        value='";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                echo "'
        class='";
                // line 19
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " ";
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "variant") == "inline")) {
                    echo "narrow";
                }
                echo "'
        ";
                // line 20
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"))) {
                    echo "required=\"required\"";
                }
                // line 21
                echo "        ";
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern") && !twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern"), array(0 => "url", 1 => "email")))) {
                    echo "pattern=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern"), "html", null, true);
                    echo "\"";
                }
                // line 22
                echo "        >
";
            }
            // line 24
            echo "

";
            // line 27
            echo "
";
            // line 28
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "number")) {
                // line 29
                echo "    <label><b><span class='left'>
        ";
                // line 30
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null)), "html", null, true);
                }
                // line 31
                echo "    </span></b></label>
    <input type=\"number\" name=\"";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" step=\"0.000000001\"
        value='";
                // line 33
                echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")), "html", null, true);
                echo "'
        class='narrow ";
                // line 34
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo "'
        ";
                // line 35
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"))) {
                    echo "required=\"required\"";
                }
                // line 36
                echo "        ";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern")) {
                    echo "pattern=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern"), "html", null, true);
                    echo "\"";
                }
                // line 37
                echo "        >
";
            }
            // line 39
            echo "
";
            // line 41
            echo "
";
            // line 42
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "float")) {
                // line 43
                echo "    <label><b><span class='left'>
    ";
                // line 44
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                // line 45
                echo "</span></b></label>
    <input type=\"number\" name=\"";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" step=\"0.00000001\"
        value='";
                // line 47
                echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")), "html", null, true);
                echo "'
        class='narrow ";
                // line 48
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo "'
        ";
                // line 49
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"))) {
                    echo "required=\"required\"";
                }
                // line 50
                echo "        ";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern")) {
                    echo "pattern=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern"), "html", null, true);
                    echo "\"";
                }
                // line 51
                echo "        >
";
            }
            // line 53
            echo "
";
            // line 55
            echo "
";
            // line 56
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "integer")) {
                // line 57
                echo "    <label><b><span class='left'>
    ";
                // line 58
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                // line 59
                echo "</span></b></label>
    <input type=\"number\" name=\"";
                // line 60
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" step=\"1\"
        value='";
                // line 61
                echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")), "html", null, true);
                echo "'
        class='narrow ";
                // line 62
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo "'
        ";
                // line 63
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"))) {
                    echo "required=\"required\"";
                }
                // line 64
                echo "        ";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern")) {
                    echo "pattern=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern"), "html", null, true);
                    echo "\"";
                }
                // line 65
                echo "        >
";
            }
            // line 67
            echo "
";
            // line 69
            echo "
";
            // line 70
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "checkbox")) {
                // line 71
                echo "<div class=\"checkboxwrapper\">
    <label for=\"";
                // line 72
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
        <b>
            <span class='left'>
                ";
                // line 75
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                // line 76
                echo "            </span>
        </b>
    </label>
    ";
                // line 80
                echo "    <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" value='0'>
    <input type=\"checkbox\" name=\"";
                // line 81
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" value='1'
           ";
                // line 82
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")) {
                    echo "checked";
                } else {
                    echo "notchecked";
                }
                // line 83
                echo "           class='";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo "'>
</div>
";
            }
            // line 86
            echo "

";
            // line 89
            echo "
";
            // line 90
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "slug")) {
                // line 91
                echo "<label class='permalink'>";
                echo $this->env->getExtension('Bolt')->trans("Permalink");
                echo ":
    <code>/";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "singular_slug"), "html", null, true);
                echo "/<span id='show-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                echo "</span></code>
    <input type=\"text\" name=\"";
                // line 93
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"  id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" value='";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                echo "' class='editslug'>
    <span class='sluglocker'><i class='icon-lock'></i></span> <span class='slugedit'><i class='icon-pencil'></i></span>
</label>


";
                // line 98
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array(), "any", true, true)) {
                    // line 99
                    echo "<script type=\"text/javascript\">
    \$(function() {
        \$('.sluglocker').bind('click', function() {
           if (\$('.sluglocker i').hasClass('icon-lock')) {
               \$('.sluglocker i').removeClass('icon-lock').addClass('icon-unlock');
               makeUri('";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "html", null, true);
                    echo "', ";
                    echo twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses"));
                    echo ", '";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "', false);
           } else {
               \$('.sluglocker i').addClass('icon-lock').removeClass('icon-unlock');
               stopMakeUri(";
                    // line 107
                    echo twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses"));
                    echo ");
           }
        });
        \$('.slugedit').bind('click', function() {

            newslug = prompt(\"Set the slug to:\");

            \$('.sluglocker i').addClass('icon-lock').removeClass('icon-unlock');
            stopMakeUri(";
                    // line 115
                    echo twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses"));
                    echo ");

            makeUriAjax(newslug, '";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "', false)


        });
    ";
                    // line 121
                    if (twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"))) {
                        // line 122
                        echo "        \$('.sluglocker').trigger('click');
    ";
                    }
                    // line 124
                    echo "    });
</script>
";
                }
                // line 127
                echo "
";
            }
            // line 129
            echo "
";
            // line 131
            echo "
";
            // line 132
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "select")) {
                // line 133
                echo "    ";
                if (twig_test_iterable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "values"))) {
                    // line 134
                    echo "        ";
                    $context["values"] = $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "values");
                    // line 135
                    echo "    ";
                } else {
                    // line 136
                    echo "        ";
                    $context["lookuptype"] = $this->env->getExtension('Bolt')->first(twig_split_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "values"), "/"));
                    // line 137
                    echo "        ";
                    $context["lookupfield"] = $this->env->getExtension('Bolt')->last(twig_split_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "values"), "/"));
                    // line 138
                    echo "        ";
                    $template_storage = new Bolt\Storage($context['app']);
                    $context['lookups'] =                     $template_storage->getContent((isset($context["lookuptype"]) ? $context["lookuptype"] : null), array (
  'order' => 'title',
) );
                    // line 139
                    echo "        ";
                    $context["values"] = $this->env->getExtension('Bolt')->selectfield((isset($context["lookups"]) ? $context["lookups"] : null), (isset($context["lookupfield"]) ? $context["lookupfield"] : null));
                    // line 140
                    echo "    ";
                }
                // line 141
                echo "
    <label><b><span class='left'>";
                // line 142
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</span></b></label>
    ";
                // line 143
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple"))) {
                    // line 144
                    echo "        <select name=\"";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "[]\" id=\"";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\" class='";
                    if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                    }
                    echo "' multiple>
            ";
                    // line 145
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 146
                        echo "                ";
                        if ((twig_test_iterable((isset($context["value"]) ? $context["value"] : null)) && (twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null)) > 1))) {
                            // line 147
                            echo "                    <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), 0, array(), "array"), "html", null, true);
                            echo "\" ";
                            if (twig_in_filter($this->getAttribute((isset($context["value"]) ? $context["value"] : null), 0, array(), "array"), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"))) {
                                echo "selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), 1, array(), "array"), "html", null, true);
                            echo "</option>
                ";
                        } else {
                            // line 149
                            echo "                    <option value=\"";
                            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                            echo "\" ";
                            if (twig_in_filter((isset($context["value"]) ? $context["value"] : null), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"))) {
                                echo "selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                            echo "</option>
                ";
                        }
                        // line 151
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 152
                    echo "        </select>
    ";
                } else {
                    // line 154
                    echo "        <select name=\"";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\" class='";
                    if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                    }
                    echo "'>
            ";
                    // line 155
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 156
                        echo "                ";
                        if ((twig_test_iterable((isset($context["value"]) ? $context["value"] : null)) && (twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null)) > 1))) {
                            // line 157
                            echo "                    <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), 0, array(), "array"), "html", null, true);
                            echo "\" ";
                            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") == $this->getAttribute((isset($context["value"]) ? $context["value"] : null), 0, array(), "array"))) {
                                echo "selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), 1, array(), "array"), "html", null, true);
                            echo "</option>
                ";
                        } else {
                            // line 159
                            echo "                    <option value=\"";
                            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                            echo "\" ";
                            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") == (isset($context["value"]) ? $context["value"] : null))) {
                                echo "selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                            echo "</option>
                ";
                        }
                        // line 161
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 162
                    echo "        </select>
    ";
                }
            }
            // line 165
            echo "
";
            // line 167
            echo "
";
            // line 168
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "templateselect")) {
                // line 169
                echo "<label><b><span class='left'>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</span></b></label>
    <select name=\"";
                // line 170
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
        <option value=\"\">";
                // line 171
                echo $this->env->getExtension('Bolt')->trans("(default template)");
                echo "</option>
        <option value=\"\" disabled>-----------</option>
        ";
                // line 173
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Bolt')->listtemplates($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "filter")));
                foreach ($context['_seq'] as $context["filename"] => $context["name"]) {
                    // line 174
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : null), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") == (isset($context["filename"]) ? $context["filename"] : null))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "</option>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['filename'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                echo "    </select>
";
            }
            // line 178
            echo "
";
            // line 180
            echo "
";
            // line 181
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "image")) {
                // line 182
                echo "
";
                // line 183
                if ((!twig_test_iterable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")))) {
                    // line 184
                    echo "    ";
                    // line 185
                    echo "    ";
                    $context["image"] = array("file" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"));
                } else {
                    // line 187
                    echo "    ";
                    $context["image"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method");
                }
                // line 189
                echo "
<div class=\"dropzone imageselect\" id=\"dropzone-";
                // line 190
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">

    <div class=\"image-right\">
        <div class='imageholder' id=\"thumbnail-";
                // line 193
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
            ";
                // line 194
                if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") != "")) {
                    // line 195
                    echo "            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file"), 120, 120, "c"), "html", null, true);
                    echo "\" width=\"120\" height=\"120\">
            ";
                } else {
                    // line 197
                    echo "            <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths"), "app"), "html", null, true);
                    echo "view/img/default_empty.png\" width=\"120\" height=\"120\">
            ";
                }
                // line 199
                echo "        </div>
    </div>
    <div class=\"image-container\">

        <label>
            <b>";
                // line 204
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b>
            <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 205
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null)), "html", null, true);
                }
                echo "\"
                data-content=\"";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.upload.image", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
        </label>

        <input type=\"text\" name=\"";
                // line 209
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[file]\" id=\"field-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
            value='";
                // line 210
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file"), "")) : ("")), "html", null, true);
                echo "'
            class='";
                // line 211
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " imageinput wide'
            ";
                // line 212
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions", array(), "any", true, true)) {
                    echo "accept=\"";
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions"), "|"), "html", null, true);
                    echo "\"";
                }
                echo " >

        <p class=\"filetypes\">
            ";
                // line 215
                echo $this->env->getExtension('Bolt')->trans("Allowed filetypes are: ");
                echo " <code>";
                echo twig_join_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions"), "</code>, <code>");
                echo "</code>.
        </p>

        ";
                // line 218
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib", array(), "any", true, true)) {
                    // line 219
                    echo "
            ";
                    // line 221
                    echo "            ";
                    if ((!twig_test_iterable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib")))) {
                        $context["attribs"] = array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib"));
                    } else {
                        $context["attribs"] = $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib");
                    }
                    // line 222
                    echo "
            ";
                    // line 224
                    echo "            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["attribs"]) ? $context["attribs"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["attrib"]) {
                        // line 225
                        echo "                ";
                        if (((isset($context["attrib"]) ? $context["attrib"] : null) == "title")) {
                            // line 226
                            echo "                    <label>";
                            echo $this->env->getExtension('Bolt')->trans("Title/Alt Text:");
                            echo " <input type=\"text\" name=\"";
                            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                            echo "[title]\" id=\"";
                            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                            echo "-title\"
                        value='";
                            // line 227
                            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title"), "")) : ("")), "html", null, true);
                            echo "' style='width: 80%;'>
                    </label>
                ";
                        }
                        // line 230
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attrib'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 231
                    echo "
        ";
                }
                // line 233
                echo "
        <!-- The fileinput-button span is used to style the file input field as button -->
        <div class=\"btn-group\">
            <span class=\"btn btn-info fileinput-button\">
                <i class=\"icon-upload\"></i>
                <span>";
                // line 238
                echo $this->env->getExtension('Bolt')->trans("Upload image");
                echo "</span>
                <input id=\"fileupload-";
                // line 239
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" type=\"file\" name=\"fileupload-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[]\" data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "classes/upload/index.php\">
            </span>
        </div>

        <div class=\"btn-group\" style=\"margin-left: 0px;\">
            <a data-target=\"#selectModal-";
                // line 244
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async"), "html", null, true);
                echo "browse/files?key=";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" class=\"btn fileinput-select\" data-toggle=\"modal\">
                <i class=\"icon-upload-alt\"></i>
                ";
                // line 246
                echo $this->env->getExtension('Bolt')->trans("Select from server");
                echo "
            </a>
        </div>

        ";
                // line 250
                $context["items"] = $this->env->getExtension('Bolt')->stackitems(7, "image");
                // line 251
                echo "        ";
                if ((isset($context["items"]) ? $context["items"] : null)) {
                    // line 252
                    echo "        <div class=\"btn-group\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"icon-paper-clip\"></i>
                ";
                    // line 255
                    echo $this->env->getExtension('Bolt')->trans("Select from stack");
                    echo "
                <span class=\"caret\"></span>
            </a>

            <ul class=\"dropdown-menu\" id=\"stack-";
                    // line 259
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\">
                ";
                    // line 260
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 261
                        echo "                    <li>
                        <a href=\"#\" data-action=\"stack.selectFromPulldown('";
                        // line 262
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filepath"), "html", null, true);
                        echo "');\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "basename"), "html", null, true);
                        echo " <small>(";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filesize"), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "imagesize"), "html", null, true);
                        echo " px)</small></a>
                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 265
                    echo "            </ul>
        </div>
        ";
                }
                // line 268
                echo "

        <div class=\"progress progress-striped active\" id=\"progress-";
                // line 270
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
            <div class=\"bar\" style=\"width: 0%;\"></div>
        </div>

        <!-- Modal \"select from server\"  -->
        <div class=\"modal hide modal-wide\" id=\"selectModal-";
                // line 275
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">

            <div class=\"modal-body\">
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
                // line 280
                echo $this->env->getExtension('Bolt')->trans("Cancel");
                echo "</button>
            </div>
        </div>



";
                // line 286
                if ((!$this->env->getExtension('Bolt')->isMobileClient())) {
                    // line 287
                    echo "
<script type=\"text/javascript\">
    \$(function() {
        bindFileUpload('";
                    // line 290
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "');

        \$(\"#field-";
                    // line 292
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\").autocomplete({
            source: \"";
                    // line 293
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async"), "html", null, true);
                    echo "filesautocomplete?ext=gif,jpg,jpeg,png\",
            minLength: 2,
            close: function(){
                if (\$('#field-";
                    // line 296
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "').val() != \"\" ) {
                    \$('#thumbnail-";
                    // line 297
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "').html(\"<img src='";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths"), "root"), "html", null, true);
                    echo "thumbs/120x120c/\"+encodeURI( \$('#field-";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "').val() )+\"' width='120' height='120'>\");
                } else {
                    \$('#thumbnail-";
                    // line 299
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "').html(\"<img src='";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths"), "app"), "html", null, true);
                    echo "view/img/default_empty.png' width='120' height='120'>\");
                }
            }
        });

    });
</script>
";
                }
                // line 307
                echo "
    </div>
</div>
";
            }
            // line 311
            echo "


";
            // line 315
            echo "
";
            // line 316
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "file")) {
                // line 317
                echo "<div class=\"dropzone\" id=\"dropzone-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">

    <div class=\"image-container\">

        <label>
            <b>";
                // line 322
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b>
            <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 323
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null)), "html", null, true);
                }
                echo "\"
                  data-content=\"";
                // line 324
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.upload.file", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
        </label>

        <input type=\"text\" name=\"";
                // line 327
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"field-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
            value='";
                // line 328
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                echo "'
            class='";
                // line 329
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " imageinput'
            ";
                // line 330
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions", array(), "any", true, true)) {
                    echo "accept=\"";
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions"), "|"), "html", null, true);
                    echo "\"";
                }
                echo " ><br>

        <p class=\"filetypes\">
            ";
                // line 333
                echo $this->env->getExtension('Bolt')->trans("Allowed filetypes are: ");
                echo " <code>";
                echo twig_join_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions"), "</code>, <code>");
                echo "</code>.
        </p>

        <!-- The fileinput-button span is used to style the file input field as button -->
        <div class=\"btn-group\">
            <span class=\"btn btn-info fileinput-button\">
                <i class=\"icon-upload\"></i>
                <span>";
                // line 340
                echo $this->env->getExtension('Bolt')->trans("Upload File");
                echo "</span>
                <input id=\"fileupload-";
                // line 341
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" type=\"file\" name=\"fileupload-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[]\" data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "classes/upload/index.php\" >
            </span>
        </div>

        ";
                // line 345
                $context["items"] = $this->env->getExtension('Bolt')->stackitems(7, "other,document");
                // line 346
                echo "        ";
                if ((isset($context["items"]) ? $context["items"] : null)) {
                    // line 347
                    echo "            <div class=\"btn-group\">
                <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"icon-paper-clip\"></i>
                    ";
                    // line 350
                    echo $this->env->getExtension('Bolt')->trans("Select from stack");
                    echo "
                    <span class=\"caret\"></span>
                </a>

                <ul class=\"dropdown-menu\" id=\"stack-";
                    // line 354
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\">
                    ";
                    // line 355
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 356
                        echo "                        <li>
                            <a href=\"#\" data-action=\"stack.selectFromPulldown('";
                        // line 357
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filepath"), "html", null, true);
                        echo "');\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "basename"), "html", null, true);
                        echo " <small>(";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filesize"), "html", null, true);
                        echo ")</small></a>
                        </li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 360
                    echo "                </ul>
            </div>
        ";
                }
                // line 363
                echo "
        <div class=\"progress progress-striped active\" id=\"progress-";
                // line 364
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
            <div class=\"bar\" style=\"width: 0%;\"></div>
        </div>

    ";
                // line 368
                if ((!$this->env->getExtension('Bolt')->isMobileClient())) {
                    // line 369
                    echo "        <div style=\"clear: left;\" class=\"hide-tablet\"><small>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.upload.filesmall", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                    echo "</small></div>
        <script type=\"text/javascript\">
            \$(function() {
                bindFileUpload('";
                    // line 372
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "');

                \$(\"#field-";
                    // line 374
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\").autocomplete({
                    source: \"";
                    // line 375
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async"), "html", null, true);
                    echo "filesautocomplete?ext=";
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions"), ","), "html", null, true);
                    echo "\",
                    minLength: 2
                });

            });
        </script>
    ";
                }
                // line 382
                echo "
    </div>
</div>
";
            }
            // line 386
            echo "

";
            // line 389
            echo "
";
            // line 390
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "imagelist")) {
                // line 391
                echo "<label>
    <b>
        ";
                // line 393
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                // line 394
                echo "    </b>
    <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 395
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "\"
      data-content=\"";
                // line 396
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.upload.imagelist", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
</label>
<div class=\"imagelistholder dropzone\" id=\"imagelist-";
                // line 398
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
    <div class=\"list\"></div>

    <div class=\"buttons\">
        <span class=\"btn btn-info fileinput-button\" style=\"margin-bottom: 8px;\">
            <i class=\"icon-upload\"></i>
            <span>";
                // line 404
                echo $this->env->getExtension('Bolt')->trans("Upload image");
                echo "</span>
            <input id=\"fileupload-";
                // line 405
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" type=\"file\" name=\"fileupload-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[]\" data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "classes/upload/index.php\"
                   ";
                // line 406
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions", array(), "any", true, true)) {
                    echo "accept=\"";
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions"), "|"), "html", null, true);
                    echo "\"";
                }
                echo " >
        </span>

        <br clear=\"all\">

        <div class=\"btn-group\" style=\"margin-left: 0px;\">
            <a data-target=\"#selectModal-";
                // line 412
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async"), "html", null, true);
                echo "browse/files?key=";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" class=\"btn fileinput-select\" data-toggle=\"modal\">
                <i class=\"icon-upload-alt\"></i>
                ";
                // line 414
                echo $this->env->getExtension('Bolt')->trans("Select from server");
                echo "
            </a>
        </div>

        ";
                // line 418
                $context["items"] = $this->env->getExtension('Bolt')->stackitems(7, "image");
                // line 419
                echo "        ";
                if ((isset($context["items"]) ? $context["items"] : null)) {
                    // line 420
                    echo "        <div class=\"btn-group\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"icon-paper-clip\"></i>
                ";
                    // line 423
                    echo $this->env->getExtension('Bolt')->trans("Select from stack");
                    echo "
                <span class=\"caret\"></span>
            </a>

            <ul class=\"dropdown-menu\" id=\"stack-";
                    // line 427
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\">
                ";
                    // line 428
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 429
                        echo "                    <li>
                        <a href=\"#\" data-action=\"stack.selectFromPulldown('";
                        // line 430
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filepath"), "html", null, true);
                        echo "');\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "basename"), "html", null, true);
                        echo " <small>(";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filesize"), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "imagesize"), "html", null, true);
                        echo " px)</small></a>
                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 433
                    echo "            </ul>
        </div>
        ";
                }
                // line 436
                echo "
    </div>
    <textarea name=\"";
                // line 438
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" class=\"hide\">";
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method", true, true)) {
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")), "html", null, true);
                }
                echo "</textarea>
    <div class='clearfix'></div>

    <!-- Modal \"select from server\"  -->
    <div class=\"modal hide modal-wide\" id=\"selectModal-";
                // line 442
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-body\">
        </div>
        <div class=\"modal-footer\">
            <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
                // line 446
                echo $this->env->getExtension('Bolt')->trans("Close");
                echo "</button>
        </div>
    </div>
</div>


<script type=\"text/javascript\">
    \$(function() {

        if(typeof imagelist == \"undefined\") {
            imagelist = [];
        }

        imagelist['";
                // line 459
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "'] = new ImagelistHolder({id: '";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "'});
    });
</script>

";
            }
            // line 464
            echo "

";
            // line 467
            echo "
";
            // line 468
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "filelist")) {
                // line 469
                echo "<label>
    <b>
        ";
                // line 471
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                // line 472
                echo "    </b>
    <span class=\"label info-pop\"
          data-html=\"true\"
          data-title=\"";
                // line 475
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "\"
          data-content=\"";
                // line 476
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.upload.filelist", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">
          ";
                // line 477
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "
    </span>
</label>
<div class=\"filelistholder dropzone\" id=\"filelist-";
                // line 480
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
    <div class=\"list\"></div>
    <div class=\"buttons\">
        <span class=\"btn btn-info fileinput-button\"
              style=\"margin-bottom: 8px;\">

            <i class=\"icon-upload\"></i>
            <span>";
                // line 487
                echo $this->env->getExtension('Bolt')->trans("Upload files");
                echo "</span>
            <input id=\"fileupload-";
                // line 488
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
                   type=\"file\"
                   name=\"fileupload-";
                // line 490
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[]\"
                   data-url=\"";
                // line 491
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "classes/upload/index.php\"
                    ";
                // line 492
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions", array(), "any", true, true)) {
                    echo "accept=\"";
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions"), "|"), "html", null, true);
                    echo "\"";
                }
                echo " >
        </span>
    </div>
    <textarea name=\"";
                // line 495
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" class=\"hide\">";
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method", true, true)) {
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")), "html", null, true);
                }
                echo "</textarea>
</div>
<div class='clearfix'></div>

<script type=\"text/javascript\">
    \$(function() {

        if(typeof filelist == \"undefined\") {
            filelist = [];
        }

        filelist['";
                // line 506
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "'] = new FilelistHolder({id: '";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "'});
    });
</script>

";
            }
            // line 511
            echo "
";
            // line 513
            echo "
";
            // line 514
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "video")) {
                // line 515
                echo "
";
                // line 516
                $context["video"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method");
                // line 517
                echo "<div class=\"dropzone video\">

    <div class=\"video-right hide-phone\">
        <div class='imageholder' id=\"thumbnail-";
                // line 520
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" style=\"width: 160px; text-align: center; background-color: #F8F8F8;\">
            ";
                // line 521
                if ((($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail"), "")) : (""))) {
                    // line 522
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail"), "html", null, true);
                    echo "\" width=\"160\" height=\"120\">
            ";
                } else {
                    // line 524
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths"), "app"), "html", null, true);
                    echo "view/img/default_empty.png\" width=\"120\" height=\"120\">
            ";
                }
                // line 526
                echo "        </div>
    </div>

    <div class=\"video-container\">
        <label>
            <b>";
                // line 531
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b>
            (<span id=\"video-";
                // line 532
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-text\">";
                if ($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array(), "any", true, true)) {
                    echo "\"";
                    echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title"), 18);
                    echo "\" by ";
                    echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorname"), 18);
                }
                echo "</span>)
            <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 533
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "\"
                  data-content=\"";
                // line 534
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.upload.video", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
        </label>
        <label>";
                // line 536
                echo $this->env->getExtension('Bolt')->trans("URL:");
                echo " <input type=\"url\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[url]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
               value='";
                // line 537
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "url"), "")) : ("")), "html", null, true);
                echo "' style='width: 60%;'>
        </label>

        <label>";
                // line 540
                echo $this->env->getExtension('Bolt')->trans("Size:");
                echo " <input type=\"number\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[width]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-width\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "width"), "")) : ("")), "html", null, true);
                echo "\" style='width: 60px; min-width: 60px;'>
        x <input type=\"number\" name=\"";
                // line 541
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[height]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-height\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "height"), "")) : ("")), "html", null, true);
                echo "\" style='width: 60px; min-width: 60px;'>
            pixels.
            <span class=\"hide-tablet\"><a href=\"#myModal\" role=\"button\" class=\"btn\" data-toggle=\"modal\" style='float: right;'>";
                // line 543
                echo $this->env->getExtension('Bolt')->trans("Preview video");
                echo "</a></span>
        </label>

        <input type=\"hidden\" name=\"";
                // line 546
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[ratio]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-ratio\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "ratio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "ratio"), "")) : ("")), "html", null, true);
                echo "\">
        <input type=\"hidden\" name=\"";
                // line 547
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[title]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-title\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title"), "")) : ("")), "html", null, true);
                echo "\" readonly>
        <input type=\"hidden\" name=\"";
                // line 548
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[authorname]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-author_name\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorname"), "")) : ("")), "html", null, true);
                echo "\" readonly>
        <input type=\"hidden\" name=\"";
                // line 549
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[authorurl]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-author_url\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorurl", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorurl"), "")) : ("")), "html", null, true);
                echo "\" readonly>
        <input type=\"hidden\" name=\"";
                // line 550
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[html]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-html\" value=\"";
                if ($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html"));
                }
                echo "\">
        <input type=\"hidden\" name=\"";
                // line 551
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[thumbnail]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-thumbnail\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail"), "")) : ("")), "html", null, true);
                echo "\">

        <script type=\"text/javascript\">
            bindVideoEmbed('";
                // line 554
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "');
        </script>
    </div>
</div>

<!-- Modal video preview -->
<div class=\"modal hide\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">

    <div class=\"modal-body\">
        ";
                // line 563
                if ($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html", array(), "any", true, true)) {
                    // line 564
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 566
                    echo "        <p>";
                    echo $this->env->getExtension('Bolt')->trans("No video url is set, no video to show.");
                    echo "</p>
        ";
                }
                // line 568
                echo "    </div>
    <div class=\"modal-footer\">
        <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
                // line 570
                echo $this->env->getExtension('Bolt')->trans("Close");
                echo "</button>
    </div>
</div>


";
            }
            // line 576
            echo "




";
            // line 582
            echo "
    ";
            // line 583
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "geolocation")) {
                // line 584
                echo "
        ";
                // line 585
                $context["geolocation"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method");
                // line 586
                echo "        <div class=\"dropzone geolocation\">

            <div class=\"map-right hide-phone\">
                <div class='mapholder' id=\"map-";
                // line 589
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" style=\"width: 200px;\">
                        <img src=\"";
                // line 590
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geo"]) ? $context["geo"] : null), "map", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geo"]) ? $context["geo"] : null), "map"), "")) : ("")), "html", null, true);
                echo "\" width=\"200\" height=\"200\">
                </div>
            </div>

            <div class=\"map-container\">
                <label>
                    <b>";
                // line 596
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b>
                    <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 597
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "\"
                          data-content=\"";
                // line 598
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.geolocation", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
                </label>
                <label>";
                // line 600
                echo $this->env->getExtension('Bolt')->trans("Address lookup:");
                echo " <input type=\"text\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[address]\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-address\"
                    value='";
                // line 601
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "address"), "")) : ("")), "html", null, true);
                echo "' style='width: 60%;'>
                </label>
                <label>";
                // line 603
                echo $this->env->getExtension('Bolt')->trans("Latitude:");
                echo " <input type=\"text\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[latitude]\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-latitude\"
                    value='";
                // line 604
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "latitude", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "latitude"), "")) : ("")), "html", null, true);
                echo "' style='width: 30%;'>
                 - ";
                // line 605
                echo $this->env->getExtension('Bolt')->trans("Longitude:");
                echo " <input type=\"text\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[longitude]\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-longitude\"
                    value='";
                // line 606
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "longitude", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "longitude"), "")) : ("")), "html", null, true);
                echo "' style='width: 30%;'>
                </label>
                <p>";
                // line 608
                echo $this->env->getExtension('Bolt')->trans("Matched address:");
                echo "
                <span id=\"";
                // line 609
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-reversegeo\"> ";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "formatted_address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "formatted_address"), "")) : ("")), "html", null, true);
                echo "</span></p>
                <input type=\"hidden\" name=\"";
                // line 610
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[formatted_address]\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-formatted_address\"
                       value='";
                // line 611
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "formatted_address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "formatted_address"), "")) : ("")), "html", null, true);
                echo "' style='width: 30%;'>
                <script type=\"text/javascript\">
                    \$(function() {
                        bindGeolocation('";
                // line 614
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "latitude", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "latitude"), "")) : ("")), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "longitude", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "longitude"), "")) : ("")), "html", null, true);
                echo "');
                    });
                </script>
            </div>
        </div>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
<script type=\"text/javascript\" src=\"";
                // line 620
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "view/js/jquery.gomap-1.3.2.min.js\"></script>

    ";
            }
            // line 623
            echo "





";
            // line 630
            echo "
";
            // line 631
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "html")) {
                // line 632
                echo "<label><b>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b></label>
<textarea name=\"";
                // line 633
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" class='";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " ckeditor'
    style='";
                // line 634
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) {
                    echo "height: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height"), "html", null, true);
                }
                echo "'
    ";
                // line 635
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"))) {
                    echo "required";
                }
                echo ">
    ";
                // line 636
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                }
                // line 637
                echo "</textarea>
";
            }
            // line 639
            echo "
";
            // line 641
            echo "
";
            // line 642
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "textarea")) {
                // line 643
                echo "<label><b>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b></label>
<textarea name=\"";
                // line 644
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" class='";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo "'
    style='";
                // line 645
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) {
                    echo "height: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height"), "html", null, true);
                }
                echo "'
    ";
                // line 646
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"))) {
                    echo "required";
                }
                // line 647
                echo "    >";
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                }
                echo "</textarea>
";
            }
            // line 649
            echo "

";
            // line 652
            echo "
";
            // line 653
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "markdown")) {
                // line 654
                echo "    <label>
        <b>";
                // line 655
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b>
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 656
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null)), "html", null, true);
                }
                echo "\"
              data-content=\"";
                // line 657
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.markdown", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>

    </label>
    <textarea id=\"";
                // line 660
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" class='";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo "'
              style='";
                // line 661
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) {
                    echo "height: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height"), "html", null, true);
                    echo " !important;";
                }
                echo "' ";
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"))) {
                    echo "required";
                }
                // line 662
                echo "            >";
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                }
                echo "</textarea>

    <textarea id=\"jquery-catchpaste-textarea\" style=\"position: absolute; width: 0 !important; height: 0; left: -10000px;\"></textarea>

<script type=\"text/javascript\">
    \$(function() {
        bindMarkdown('";
                // line 668
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "');
    });
</script>

";
            }
            // line 673
            echo "

";
            // line 676
            echo "
";
            // line 677
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "date")) {
                // line 678
                echo "<label><b>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b></label>
<input type=\"text\" name=\"";
                // line 679
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-dateformatted\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-date\"
    value='";
                // line 680
                if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") && ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") > "0001-01-01 00:00:00"))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "l, d F Y"), "html", null, true);
                }
                echo "'
    class='";
                // line 681
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " datepicker'>
<input type=\"hidden\" name=\"";
                // line 682
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "Y-m-d H:i:s"), "html", null, true);
                echo "\">
<script type=\"text/javascript\">
    \$(function() {
        \$('#";
                // line 685
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-date').on('change.bolt', function(){
            var date = \$('#";
                // line 686
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-date').datepicker( \"getDate\" );
            \$('#";
                // line 687
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "').val(\$.datepicker.formatDate('yy-mm-dd', date));
        }).trigger('change.bolt');;
    });
</script>
";
            }
            // line 692
            echo "

";
            // line 695
            echo "
";
            // line 696
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "datetime")) {
                // line 697
                echo "<label><b>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b></label>
<input type=\"text\" name=\"";
                // line 698
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-dateformatted\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-date\"
    value='";
                // line 699
                if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") && ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") > "0001-01-01 00:00:00"))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "l, d F Y"), "html", null, true);
                }
                echo "'
    class='";
                // line 700
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " datepicker'>
<input type=\"time\" name=\"";
                // line 701
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-timeformatted\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-time\"
    value='";
                // line 702
                if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") && ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") > "0001-01-01 00:00:00"))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "H:i"), "html", null, true);
                }
                echo "'
    class='";
                // line 703
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " timepicker'>
<input type=\"hidden\" name=\"";
                // line 704
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "Y-m-d H:i:s"), "html", null, true);
                echo "\">
<script type=\"text/javascript\">
    \$(function() {
        \$('#";
                // line 707
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-date, #";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-time').on('change.bolt', function(){
            var date = \$('#";
                // line 708
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-date').datepicker(\"getDate\");
            var time = \$('#";
                // line 709
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-time').val() + \":00\";
            \$('#";
                // line 710
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "').val(\$.datepicker.formatDate('yy-mm-dd', date)+\" \"+time);
        }).trigger('change.bolt');;
    });
</script>
";
            }
            // line 715
            echo "

";
            // line 718
            echo "
";
            // line 719
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "postfix", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "postfix"))))) {
                // line 720
                echo "    <div class='clearfix'>
        ";
                // line 721
                echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "postfix");
                echo "
    </div>
";
            }
            // line 724
            echo "
";
            // line 725
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "separator", array(), "any", true, true) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "separator") == true))) {
                // line 726
                echo "    <hr>
";
            }
            // line 728
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 731
        echo "
";
    }

    public function getTemplateName()
    {
        return "_sub_editfields.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2135 => 731,  2127 => 728,  2123 => 726,  2121 => 725,  2118 => 724,  2112 => 721,  2109 => 720,  2107 => 719,  2104 => 718,  2100 => 715,  2092 => 710,  2088 => 709,  2084 => 708,  2078 => 707,  2068 => 704,  2062 => 703,  2056 => 702,  2050 => 701,  2044 => 700,  2038 => 699,  2032 => 698,  2023 => 697,  2021 => 696,  2018 => 695,  2014 => 692,  2006 => 687,  2002 => 686,  1998 => 685,  1988 => 682,  1982 => 681,  1976 => 680,  1970 => 679,  1961 => 678,  1959 => 677,  1956 => 676,  1952 => 673,  1944 => 668,  1932 => 662,  1922 => 661,  1912 => 660,  1904 => 657,  1896 => 656,  1888 => 655,  1885 => 654,  1883 => 653,  1880 => 652,  1876 => 649,  1868 => 647,  1864 => 646,  1857 => 645,  1849 => 644,  1840 => 643,  1838 => 642,  1835 => 641,  1832 => 639,  1828 => 637,  1824 => 636,  1818 => 635,  1811 => 634,  1803 => 633,  1794 => 632,  1792 => 631,  1789 => 630,  1781 => 623,  1775 => 620,  1762 => 614,  1756 => 611,  1750 => 610,  1744 => 609,  1740 => 608,  1735 => 606,  1727 => 605,  1723 => 604,  1715 => 603,  1710 => 601,  1702 => 600,  1695 => 598,  1687 => 597,  1679 => 596,  1670 => 590,  1666 => 589,  1661 => 586,  1659 => 585,  1656 => 584,  1654 => 583,  1651 => 582,  1644 => 576,  1635 => 570,  1631 => 568,  1625 => 566,  1619 => 564,  1617 => 563,  1605 => 554,  1595 => 551,  1585 => 550,  1577 => 549,  1569 => 548,  1561 => 547,  1553 => 546,  1547 => 543,  1538 => 541,  1528 => 540,  1522 => 537,  1514 => 536,  1507 => 534,  1499 => 533,  1488 => 532,  1480 => 531,  1473 => 526,  1467 => 524,  1461 => 522,  1459 => 521,  1455 => 520,  1450 => 517,  1448 => 516,  1445 => 515,  1443 => 514,  1440 => 513,  1437 => 511,  1427 => 506,  1407 => 495,  1397 => 492,  1393 => 491,  1389 => 490,  1384 => 488,  1380 => 487,  1370 => 480,  1364 => 477,  1360 => 476,  1352 => 475,  1347 => 472,  1341 => 471,  1337 => 469,  1335 => 468,  1332 => 467,  1328 => 464,  1318 => 459,  1302 => 446,  1295 => 442,  1282 => 438,  1278 => 436,  1273 => 433,  1256 => 430,  1253 => 429,  1249 => 428,  1245 => 427,  1238 => 423,  1233 => 420,  1230 => 419,  1228 => 418,  1221 => 414,  1212 => 412,  1199 => 406,  1191 => 405,  1187 => 404,  1178 => 398,  1171 => 396,  1163 => 395,  1160 => 394,  1154 => 393,  1150 => 391,  1148 => 390,  1145 => 389,  1141 => 386,  1135 => 382,  1123 => 375,  1119 => 374,  1114 => 372,  1107 => 369,  1105 => 368,  1098 => 364,  1095 => 363,  1090 => 360,  1075 => 357,  1072 => 356,  1068 => 355,  1064 => 354,  1057 => 350,  1052 => 347,  1049 => 346,  1047 => 345,  1036 => 341,  1032 => 340,  1020 => 333,  1010 => 330,  1004 => 329,  1000 => 328,  994 => 327,  986 => 324,  978 => 323,  970 => 322,  961 => 317,  959 => 316,  956 => 315,  951 => 311,  945 => 307,  932 => 299,  923 => 297,  919 => 296,  913 => 293,  909 => 292,  904 => 290,  899 => 287,  897 => 286,  888 => 280,  880 => 275,  872 => 270,  868 => 268,  863 => 265,  846 => 262,  843 => 261,  839 => 260,  835 => 259,  828 => 255,  823 => 252,  820 => 251,  818 => 250,  811 => 246,  802 => 244,  790 => 239,  786 => 238,  779 => 233,  775 => 231,  769 => 230,  763 => 227,  754 => 226,  751 => 225,  746 => 224,  743 => 222,  736 => 221,  733 => 219,  731 => 218,  723 => 215,  713 => 212,  707 => 211,  703 => 210,  697 => 209,  689 => 206,  681 => 205,  673 => 204,  666 => 199,  660 => 197,  654 => 195,  652 => 194,  648 => 193,  642 => 190,  639 => 189,  635 => 187,  631 => 185,  629 => 184,  627 => 183,  624 => 182,  622 => 181,  619 => 180,  616 => 178,  612 => 176,  597 => 174,  593 => 173,  588 => 171,  582 => 170,  573 => 169,  571 => 168,  568 => 167,  565 => 165,  560 => 162,  554 => 161,  542 => 159,  530 => 157,  527 => 156,  523 => 155,  512 => 154,  508 => 152,  502 => 151,  490 => 149,  478 => 147,  475 => 146,  471 => 145,  460 => 144,  458 => 143,  450 => 142,  447 => 141,  444 => 140,  441 => 139,  435 => 138,  432 => 137,  429 => 136,  426 => 135,  423 => 134,  420 => 133,  418 => 132,  415 => 131,  412 => 129,  408 => 127,  403 => 124,  399 => 122,  397 => 121,  386 => 117,  370 => 107,  358 => 104,  351 => 99,  337 => 93,  329 => 92,  324 => 91,  322 => 90,  319 => 89,  315 => 86,  306 => 83,  300 => 82,  282 => 76,  276 => 75,  270 => 72,  267 => 71,  262 => 69,  259 => 67,  248 => 64,  244 => 63,  238 => 62,  234 => 61,  228 => 60,  225 => 59,  219 => 58,  216 => 57,  211 => 55,  208 => 53,  204 => 51,  193 => 49,  187 => 48,  183 => 47,  177 => 46,  174 => 45,  168 => 44,  165 => 43,  160 => 41,  157 => 39,  153 => 37,  146 => 36,  142 => 35,  136 => 34,  132 => 33,  123 => 31,  117 => 30,  112 => 28,  109 => 27,  105 => 24,  94 => 21,  90 => 20,  80 => 19,  64 => 17,  51 => 15,  46 => 14,  44 => 13,  41 => 12,  31 => 6,  28 => 5,  26 => 4,  499 => 227,  489 => 220,  484 => 218,  466 => 203,  453 => 195,  449 => 194,  428 => 176,  416 => 171,  400 => 160,  381 => 115,  375 => 141,  365 => 139,  363 => 138,  356 => 134,  349 => 98,  342 => 126,  336 => 123,  326 => 115,  320 => 113,  310 => 111,  308 => 110,  301 => 106,  294 => 81,  287 => 80,  280 => 93,  265 => 70,  261 => 90,  255 => 65,  251 => 88,  246 => 85,  231 => 83,  226 => 82,  224 => 81,  218 => 80,  214 => 56,  210 => 77,  201 => 76,  197 => 50,  189 => 74,  184 => 73,  182 => 72,  179 => 71,  169 => 63,  167 => 62,  163 => 42,  156 => 60,  152 => 59,  144 => 57,  140 => 56,  134 => 53,  131 => 52,  129 => 51,  126 => 32,  116 => 42,  114 => 29,  106 => 40,  101 => 22,  96 => 37,  92 => 36,  86 => 34,  82 => 33,  76 => 18,  73 => 29,  71 => 28,  65 => 25,  58 => 16,  54 => 19,  52 => 18,  49 => 17,  47 => 16,  42 => 13,  40 => 12,  37 => 9,  35 => 10,  29 => 7,  23 => 2,  21 => 2,  19 => 1,);
    }
}
