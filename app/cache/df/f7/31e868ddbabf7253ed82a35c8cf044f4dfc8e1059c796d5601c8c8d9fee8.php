<?php

/* _sub_edittaxonomies.twig */
class __TwigTemplate_dff731e868ddbabf7253ed82a35c8cf044f4dfc8e1059c796d5601c8c8d9fee8 extends Twig_Template
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
        // line 3
        if ($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "taxonomy", array(), "any", true, true)) {
            // line 4
            echo "
    <h3>
        ";
            // line 6
            echo $this->env->getExtension('Bolt')->trans("Taxonomy");
            echo "
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
            // line 7
            echo $this->env->getExtension('Bolt')->trans("Taxonomy");
            echo "\"
                  data-content=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.taxonomy", 1 => array(), 2 => "infos"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("Info");
            echo "</span>
    </h3>

";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "taxonomy"));
            foreach ($context['_seq'] as $context["_key"] => $context["taxonomyslug"]) {
                // line 12
                echo "
    ";
                // line 13
                if ($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method", false, true), (isset($context["taxonomyslug"]) ? $context["taxonomyslug"] : null), array(), "array", true, true)) {
                    // line 14
                    echo "
        ";
                    // line 15
                    $context["taxonomy"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), (isset($context["taxonomyslug"]) ? $context["taxonomyslug"] : null), array(), "array");
                    // line 16
                    echo "

        ";
                    // line 19
                    echo "
        ";
                    // line 20
                    if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like") == "tags")) {
                        // line 21
                        echo "
            <label for='taxonomy-";
                        // line 22
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "'><b><span class='left'>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name")), "html", null, true);
                        echo "</span></b></label>

            ";
                        // line 24
                        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), array(), "array", true, true)) {
                            // line 25
                            echo "                ";
                            $context["tags"] = twig_join_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy"), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), array(), "array"), ",");
                            // line 26
                            echo "            ";
                        } else {
                            // line 27
                            echo "                ";
                            $context["tags"] = "";
                            // line 28
                            echo "            ";
                        }
                        // line 29
                        echo "
            <input type='text' name='taxonomy[";
                        // line 30
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "]' id='taxonomy-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "' value=\"";
                        echo twig_escape_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null), "html", null, true);
                        echo "\" style=\"width: 70%;\" />



            <div class=\"tagcloud\" id=\"tagcloud-";
                        // line 34
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "\"></div>
            <script>
            \$(function() {

                // load all tags
                \$.ajax({
                    url: \"";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
                        echo "async/tags/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "\",
                    dataType: \"json\",
                    success: function(data) {
                        var results = [];
                        \$.each(data, function(index, item){
                            results.push( item.slug );
                        });
                        \$('#taxonomy-";
                        // line 47
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "').select2({tags: results, minimumInputLength: 1, tokenSeparators: [\",\", \" \"]});
                    },
                    error: function() {
                        \$('#taxonomy-";
                        // line 50
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "').select2({tags: [], minimumInputLength: 1, tokenSeparators: [\",\", \" \"]});
                    }
                });

                ";
                        // line 54
                        if ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "tagcloud")) {
                            // line 55
                            echo "                // popular tags
                \$.ajax({
                    url: \"";
                            // line 57
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
                            echo "async/populartags/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "\",
                    dataType: \"json\",
                    data : { limit: 40 },
                    success: function(data) {
                        if (data.length > 0) {
                            \$.each(data, function(index, item){
                                \$(\"#tagcloud-";
                            // line 63
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "\").append('<a href=\"#\" rel=\"' + item.count + '\">' + item.slug + '</a>');
                            });
                            \$(\"#tagcloud-";
                            // line 65
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo " a\").on('click', function (e) {
                                e.preventDefault();
                                var data = \$(\"#taxonomy-";
                            // line 67
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "\").select2(\"data\")
                                data.push({id:\$(this).text(), text:\$(this).text()});
                                \$(\"#taxonomy-";
                            // line 69
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "\").select2(\"data\", data);
                            });

                            \$.fn.tagcloud.defaults = {
                                size: {start: 12, end: 22, unit: 'px'},
                                color: {start: '#888', end: '#194770'}
                            };
                            \$('#tagcloud-";
                            // line 76
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo " a').tagcloud();
                        }
                    }
                });
                ";
                        }
                        // line 81
                        echo "
            });
            </script>


        ";
                    }
                    // line 87
                    echo "
        ";
                    // line 89
                    echo "
        ";
                    // line 90
                    if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like") == "categories")) {
                        // line 91
                        echo "
            <label for='taxonomy-";
                        // line 92
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "'><b><span class='left'>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name")), "html", null, true);
                        echo "</span></b></label>

            ";
                        // line 94
                        if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array(), "any", true, true) && ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple") == 1))) {
                            // line 95
                            echo "            <select name='taxonomy[";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "][]' id='taxonomy-";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "' multiple>
            ";
                        } else {
                            // line 97
                            echo "            <select name='taxonomy[";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "][]' id='taxonomy-";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "'>
                <option value=\"\">";
                            // line 98
                            echo $this->env->getExtension('Bolt')->trans("(no category)");
                            echo "</option>
                <option value=\"\" disabled>-----------</option>
            ";
                        }
                        // line 101
                        echo "
            ";
                        // line 102
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options"));
                        foreach ($context['_seq'] as $context["slug"] => $context["cat"]) {
                            // line 103
                            echo "                <option value='";
                            echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : null), "html", null, true);
                            echo "' ";
                            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), array(), "array", true, true) && twig_in_filter((isset($context["cat"]) ? $context["cat"] : null), $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy"), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), array(), "array")))) {
                                echo "selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, (isset($context["cat"]) ? $context["cat"] : null), "html", null, true);
                            echo "</option>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['cat'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 105
                        echo "
            </select>

        ";
                    }
                    // line 109
                    echo "
        ";
                    // line 111
                    echo "
        ";
                    // line 112
                    if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like") == "grouping")) {
                        // line 113
                        echo "
            <label for='taxonomy-";
                        // line 114
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "'><b><span class='left'>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name")), "html", null, true);
                        echo "</span></b></label>

            <select name='taxonomy[";
                        // line 116
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "][]' id='taxonomy-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "'>
                <option value=\"\">";
                        // line 117
                        echo $this->env->getExtension('Bolt')->trans("(no group)");
                        echo "</option>
                <option value=\"\" disabled>-----------</option>
            ";
                        // line 119
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options"));
                        foreach ($context['_seq'] as $context["slug"] => $context["group"]) {
                            // line 120
                            echo "                <option value='";
                            echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : null), "html", null, true);
                            echo "' ";
                            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), array(), "array", true, true) && twig_in_filter((isset($context["group"]) ? $context["group"] : null), $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy"), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), array(), "array")))) {
                                echo "selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, (isset($context["group"]) ? $context["group"] : null), "html", null, true);
                            echo "</option>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 122
                        echo "            </select>

            ";
                        // line 124
                        if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "has_sortorder", array(), "any", true, true) && ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "has_sortorder") == true))) {
                            // line 125
                            echo "                <label for=\"taxonomy-order-";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "\" style='display: inline;'>- Order:</label>
                ";
                            // line 126
                            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder")) {
                                // line 127
                                echo "                    ";
                                $context["sortorder"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder");
                                // line 128
                                echo "                ";
                            } else {
                                // line 129
                                echo "                    ";
                                $context["sortorder"] = 0;
                                // line 130
                                echo "                ";
                            }
                            // line 131
                            echo "                <input type=\"number\" name=\"taxonomy-order[";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "]\" id=\"taxonomy-order-";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "\" step=\"1\"
                       value='";
                            // line 132
                            echo twig_escape_filter($this->env, (isset($context["sortorder"]) ? $context["sortorder"] : null), "html", null, true);
                            echo "' class='verynarrow'>
            ";
                        }
                        // line 134
                        echo "
        ";
                    }
                    // line 136
                    echo "
    ";
                }
                // line 138
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomyslug'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "<hr>
";
        }
    }

    public function getTemplateName()
    {
        return "_sub_edittaxonomies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 140,  359 => 138,  355 => 136,  346 => 132,  339 => 131,  333 => 129,  330 => 128,  327 => 127,  325 => 126,  318 => 124,  314 => 122,  299 => 120,  295 => 119,  290 => 117,  284 => 116,  277 => 114,  274 => 113,  272 => 112,  269 => 111,  266 => 109,  260 => 105,  245 => 103,  241 => 102,  232 => 98,  217 => 95,  215 => 94,  203 => 90,  200 => 89,  181 => 76,  166 => 67,  161 => 65,  145 => 57,  139 => 54,  91 => 29,  88 => 28,  85 => 27,  79 => 25,  77 => 24,  67 => 21,  62 => 19,  56 => 15,  205 => 91,  195 => 61,  191 => 59,  185 => 58,  178 => 56,  171 => 69,  159 => 52,  149 => 49,  141 => 55,  137 => 43,  124 => 36,  119 => 33,  104 => 31,  99 => 30,  70 => 22,  66 => 20,  63 => 19,  60 => 18,  57 => 16,  53 => 14,  50 => 14,  48 => 12,  45 => 11,  36 => 8,  32 => 7,  24 => 4,  22 => 3,  2135 => 731,  2127 => 728,  2123 => 726,  2121 => 725,  2118 => 724,  2112 => 721,  2109 => 720,  2107 => 719,  2104 => 718,  2100 => 715,  2092 => 710,  2088 => 709,  2084 => 708,  2078 => 707,  2068 => 704,  2062 => 703,  2056 => 702,  2050 => 701,  2044 => 700,  2038 => 699,  2032 => 698,  2023 => 697,  2021 => 696,  2018 => 695,  2014 => 692,  2006 => 687,  2002 => 686,  1998 => 685,  1988 => 682,  1982 => 681,  1976 => 680,  1970 => 679,  1961 => 678,  1959 => 677,  1956 => 676,  1952 => 673,  1944 => 668,  1932 => 662,  1922 => 661,  1912 => 660,  1904 => 657,  1896 => 656,  1888 => 655,  1885 => 654,  1883 => 653,  1880 => 652,  1876 => 649,  1868 => 647,  1864 => 646,  1857 => 645,  1849 => 644,  1840 => 643,  1838 => 642,  1835 => 641,  1832 => 639,  1828 => 637,  1824 => 636,  1818 => 635,  1811 => 634,  1803 => 633,  1794 => 632,  1792 => 631,  1789 => 630,  1781 => 623,  1775 => 620,  1762 => 614,  1756 => 611,  1750 => 610,  1744 => 609,  1740 => 608,  1735 => 606,  1727 => 605,  1723 => 604,  1715 => 603,  1710 => 601,  1702 => 600,  1695 => 598,  1687 => 597,  1679 => 596,  1670 => 590,  1666 => 589,  1661 => 586,  1659 => 585,  1656 => 584,  1654 => 583,  1651 => 582,  1644 => 576,  1635 => 570,  1631 => 568,  1625 => 566,  1619 => 564,  1617 => 563,  1605 => 554,  1595 => 551,  1585 => 550,  1577 => 549,  1569 => 548,  1561 => 547,  1553 => 546,  1547 => 543,  1538 => 541,  1528 => 540,  1522 => 537,  1514 => 536,  1507 => 534,  1499 => 533,  1488 => 532,  1480 => 531,  1473 => 526,  1467 => 524,  1461 => 522,  1459 => 521,  1455 => 520,  1450 => 517,  1448 => 516,  1445 => 515,  1443 => 514,  1440 => 513,  1437 => 511,  1427 => 506,  1407 => 495,  1397 => 492,  1393 => 491,  1389 => 490,  1384 => 488,  1380 => 487,  1370 => 480,  1364 => 477,  1360 => 476,  1352 => 475,  1347 => 472,  1341 => 471,  1337 => 469,  1335 => 468,  1332 => 467,  1328 => 464,  1318 => 459,  1302 => 446,  1295 => 442,  1282 => 438,  1278 => 436,  1273 => 433,  1256 => 430,  1253 => 429,  1249 => 428,  1245 => 427,  1238 => 423,  1233 => 420,  1230 => 419,  1228 => 418,  1221 => 414,  1212 => 412,  1199 => 406,  1191 => 405,  1187 => 404,  1178 => 398,  1171 => 396,  1163 => 395,  1160 => 394,  1154 => 393,  1150 => 391,  1148 => 390,  1145 => 389,  1141 => 386,  1135 => 382,  1123 => 375,  1119 => 374,  1114 => 372,  1107 => 369,  1105 => 368,  1098 => 364,  1095 => 363,  1090 => 360,  1075 => 357,  1072 => 356,  1068 => 355,  1064 => 354,  1057 => 350,  1052 => 347,  1049 => 346,  1047 => 345,  1036 => 341,  1032 => 340,  1020 => 333,  1010 => 330,  1004 => 329,  1000 => 328,  994 => 327,  986 => 324,  978 => 323,  970 => 322,  961 => 317,  959 => 316,  956 => 315,  951 => 311,  945 => 307,  932 => 299,  923 => 297,  919 => 296,  913 => 293,  909 => 292,  904 => 290,  899 => 287,  897 => 286,  888 => 280,  880 => 275,  872 => 270,  868 => 268,  863 => 265,  846 => 262,  843 => 261,  839 => 260,  835 => 259,  828 => 255,  823 => 252,  820 => 251,  818 => 250,  811 => 246,  802 => 244,  790 => 239,  786 => 238,  779 => 233,  775 => 231,  769 => 230,  763 => 227,  754 => 226,  751 => 225,  746 => 224,  743 => 222,  736 => 221,  733 => 219,  731 => 218,  723 => 215,  713 => 212,  707 => 211,  703 => 210,  697 => 209,  689 => 206,  681 => 205,  673 => 204,  666 => 199,  660 => 197,  654 => 195,  652 => 194,  648 => 193,  642 => 190,  639 => 189,  635 => 187,  631 => 185,  629 => 184,  627 => 183,  624 => 182,  622 => 181,  619 => 180,  616 => 178,  612 => 176,  597 => 174,  593 => 173,  588 => 171,  582 => 170,  573 => 169,  571 => 168,  568 => 167,  565 => 165,  560 => 162,  554 => 161,  542 => 159,  530 => 157,  527 => 156,  523 => 155,  512 => 154,  508 => 152,  502 => 151,  490 => 149,  478 => 147,  475 => 146,  471 => 145,  460 => 144,  458 => 143,  450 => 142,  447 => 141,  444 => 140,  441 => 139,  435 => 138,  432 => 137,  429 => 136,  426 => 135,  423 => 134,  420 => 133,  418 => 132,  415 => 131,  412 => 129,  408 => 127,  403 => 124,  399 => 122,  397 => 121,  386 => 117,  370 => 107,  358 => 104,  351 => 134,  337 => 93,  329 => 92,  324 => 91,  322 => 90,  319 => 89,  315 => 86,  306 => 83,  300 => 82,  282 => 76,  276 => 75,  270 => 72,  267 => 71,  262 => 69,  259 => 67,  248 => 64,  244 => 63,  238 => 101,  234 => 61,  228 => 60,  225 => 97,  219 => 58,  216 => 57,  211 => 55,  208 => 92,  204 => 51,  193 => 49,  187 => 48,  183 => 47,  177 => 46,  174 => 45,  168 => 54,  165 => 43,  160 => 41,  157 => 39,  153 => 50,  146 => 48,  142 => 35,  136 => 34,  132 => 50,  123 => 31,  117 => 30,  112 => 28,  109 => 27,  105 => 34,  94 => 30,  90 => 27,  80 => 24,  64 => 17,  51 => 13,  46 => 14,  44 => 11,  41 => 12,  31 => 6,  28 => 6,  26 => 4,  499 => 227,  489 => 220,  484 => 218,  466 => 203,  453 => 195,  449 => 194,  428 => 176,  416 => 171,  400 => 160,  381 => 115,  375 => 141,  365 => 139,  363 => 138,  356 => 134,  349 => 98,  342 => 126,  336 => 130,  326 => 115,  320 => 125,  310 => 111,  308 => 110,  301 => 106,  294 => 81,  287 => 80,  280 => 93,  265 => 70,  261 => 90,  255 => 65,  251 => 88,  246 => 85,  231 => 83,  226 => 82,  224 => 81,  218 => 80,  214 => 56,  210 => 66,  201 => 62,  197 => 87,  189 => 81,  184 => 73,  182 => 72,  179 => 71,  169 => 63,  167 => 62,  163 => 53,  156 => 63,  152 => 59,  144 => 47,  140 => 56,  134 => 53,  131 => 52,  129 => 51,  126 => 47,  116 => 42,  114 => 40,  106 => 40,  101 => 22,  96 => 37,  92 => 36,  86 => 34,  82 => 26,  76 => 22,  73 => 29,  71 => 28,  65 => 20,  58 => 16,  54 => 19,  52 => 18,  49 => 17,  47 => 16,  42 => 13,  40 => 12,  37 => 9,  35 => 10,  29 => 7,  23 => 2,  21 => 2,  19 => 1,);
    }
}
