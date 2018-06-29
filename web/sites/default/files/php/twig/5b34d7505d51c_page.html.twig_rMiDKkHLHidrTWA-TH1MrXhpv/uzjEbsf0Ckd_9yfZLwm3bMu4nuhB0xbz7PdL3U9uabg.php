<?php

/* themes/contrib/mayo/templates/page.html.twig */
class __TwigTemplate_842342d4ac9798d2f9ce5b2b0a0af874b4ac830ee8a120907f1511548295f44b extends Twig_Template
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
        $tags = array("if" => 85);
        $filters = array("t" => 86);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 84
        echo "<div id=\"page-wrapper\" style=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_wrapper_style"] ?? null), "html", null, true));
        echo "\">
<div id=\"page\"";
        // line 85
        if (($context["page_style"] ?? null)) {
            echo " style=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_style"] ?? null), "html", null, true));
            echo "\"";
        }
        echo ">
    <header id=\"header\" role=\"banner\" style=\"";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_style"] ?? null), "html", null, true));
        echo "\" aria-label=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header")));
        echo "\">
    <div class=\"section clearfix\">
    <div id=\"header-watermark\"";
        // line 88
        if (($context["header_watermark_style"] ?? null)) {
            echo " style=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_watermark_style"] ?? null), "html", null, true));
            echo "\" ";
        }
        echo ">
    <div class=\"section clearfix\">

      ";
        // line 91
        if (($context["header_searchbox"] ?? null)) {
            // line 92
            echo "        <div id=\"header-searchbox\">
       ";
            // line 93
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["output_form"] ?? null), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 96
        echo "
      ";
        // line 97
        if (($context["header_fontsizer"] ?? null)) {
            // line 98
            echo "        <div id=\"header-fontsizer\">
        <a href=\"#\" class=\"decreaseFont\" title=\"Decrease text size\"></a>
        <a href=\"#\" class=\"resetFont\"    title=\"Restore default text size\"></a>
        <a href=\"#\" class=\"increaseFont\" title=\"Increase text size\"></a>
        </div>
      ";
        }
        // line 104
        echo "
    ";
        // line 105
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "

    </div> <!-- /.section -->
    </div> <!-- /#header-watermark -->
    </div></header> <!-- /#header -->

    <div class=\"clearfix cfie\"></div>

    <!-- for nice_menus, superfish -->
    ";
        // line 114
        if ($this->getAttribute(($context["page"] ?? null), "menubar", array())) {
            // line 115
            echo "    <div id=\"menubar\" class=\"menubar clearfix\"
      ";
            // line 116
            if (($context["menubar_background"] ?? null)) {
                // line 117
                echo "        style=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["menubar_bg_value"] ?? null), "html", null, true));
                echo "\"
        ";
            }
            // line 118
            echo ">

      ";
            // line 120
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "menubar", array()), "html", null, true));
            echo "
    </div>
    ";
        }
        // line 123
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 124
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
    ";
        }
        // line 126
        echo "
    <!-- space between menus and contents -->
    <div class=\"spacer clearfix cfie\"></div>

    <div id=\"main-wrapper\">
    <div id=\"main\" class=\"clearfix\"
      ";
        // line 132
        if (($context["main_style"] ?? null)) {
            // line 133
            echo "        style=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_style"] ?? null), "html", null, true));
            echo "\"
        ";
        }
        // line 134
        echo ">

      ";
        // line 136
        if ($this->getAttribute(($context["page"] ?? null), "banner_top", array())) {
            // line 137
            echo "      <div id=\"banner-top\" class=\"banner clearfix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "banner_top", array()), "html", null, true));
            echo "</div>
      <div class=\"spacer clearfix cfie\"></div>
      ";
        }
        // line 140
        echo "

     ";
        // line 142
        if (((($this->getAttribute(($context["page"] ?? null), "top_column_first", array()) || $this->getAttribute(($context["page"] ?? null), "top_column_second", array())) || $this->getAttribute(        // line 143
($context["page"] ?? null), "top_column_third", array())) || $this->getAttribute(($context["page"] ?? null), "top_column_fourth", array()))) {
            // line 144
            echo "      <div id=\"top-wrapper\">
        <div id=\"top-columns\" class=\"clearfix\">
          <div class=\"column-blocks clearfix\">
                <!--column-blocks -->
                ";
            // line 148
            if ($this->getAttribute(($context["page"] ?? null), "top_column_first", array())) {
                // line 149
                echo "                  <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["top_columns_width"] ?? null), "html", null, true));
                echo "\">
                    <div class=\"column-block clearfix\">
                      ";
                // line 151
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_column_first", array()), "html", null, true));
                echo "
                    </div>
                  </div>
                ";
            }
            // line 155
            echo "
                ";
            // line 156
            if ($this->getAttribute(($context["page"] ?? null), "top_column_second", array())) {
                // line 157
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["top_columns_width"] ?? null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 159
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_column_second", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 163
            echo "
                ";
            // line 164
            if ($this->getAttribute(($context["page"] ?? null), "top_column_third", array())) {
                // line 165
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["top_columns_width"] ?? null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 167
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_column_third", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 171
            echo "
                ";
            // line 172
            if ($this->getAttribute(($context["page"] ?? null), "top_column_fourth", array())) {
                // line 173
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["top_columns_width"] ?? null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 175
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_column_fourth", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 179
            echo "          </div>  <!--/.column-blocks -->
          <div class=\"spacer clearfix cfie\"></div>
        </div> <!--/#top-columns -->
      </div> <!-- /#top-wrapper -->
      ";
        }
        // line 184
        echo "

      <div class=\"clearfix cfie\"></div>


      <!-- main content -->
      <main id=\"content\" class=\"column\"><section class=\"section\">

        ";
        // line 192
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", array())) {
            // line 193
            echo "          <div id=\"breadcrumb\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 195
        echo "
        <a id=\"main-content\"></a>
        ";
        // line 197
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
        ";
        // line 198
        if (($context["title"] ?? null)) {
            echo "<h1 class=\"title\" id=\"page-title\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h1>";
        }
        // line 199
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
        ";
        // line 200
        if (($context["tabs"] ?? null)) {
            // line 201
            echo "          <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Tabs")));
            echo "\">
            ";
            // line 202
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tabs"] ?? null), "html", null, true));
            echo "
          </nav>
        ";
        }
        // line 205
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
        ";
        // line 206
        if (($context["action_links"] ?? null)) {
            echo "<ul class=\"action-links\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
            echo "</ul>";
        }
        // line 207
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "


      </section></main> <!-- /.section, /#content -->


      <!-- sidebar (first) -->
      ";
        // line 214
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 215
            echo "        <div id=\"sidebar-first\" class=\"column sidebar\"><div class=\"section\">
          ";
            // line 216
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
        </div></div> <!-- /.section, /#sidebar-first -->
      ";
        }
        // line 219
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 220
            echo "        <div id=\"sidebar-second\" class=\"column sidebar\"><div class=\"section\">
          ";
            // line 221
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
        </div></div> <!-- /.section, /#sidebar-second -->
      ";
        }
        // line 224
        echo "

      <div class=\"clearfix cfie\"></div>

     ";
        // line 228
        if (((($this->getAttribute(($context["page"] ?? null), "bottom_column_first", array()) || $this->getAttribute(($context["page"] ?? null), "bottom_column_second", array())) || $this->getAttribute(        // line 229
($context["page"] ?? null), "bottom_column_third", array())) || $this->getAttribute(($context["page"] ?? null), "bottom_column_fourth", array()))) {
            // line 230
            echo "      <div id=\"bottom-wrapper\">
        <div id=\"bottom-columns\" class=\"clearfix\">
          <div class=\"column-blocks clearfix\">
                <!--column-blocks -->
                ";
            // line 234
            if ($this->getAttribute(($context["page"] ?? null), "bottom_column_first", array())) {
                // line 235
                echo "                  <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_columns_width"] ?? null), "html", null, true));
                echo "\">
                    <div class=\"column-block clearfix\">
                      ";
                // line 237
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_column_first", array()), "html", null, true));
                echo "
                    </div>
                  </div>
                ";
            }
            // line 241
            echo "
                ";
            // line 242
            if ($this->getAttribute(($context["page"] ?? null), "bottom_column_second", array())) {
                // line 243
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_columns_width"] ?? null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 245
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_column_second", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 249
            echo "
                ";
            // line 250
            if ($this->getAttribute(($context["page"] ?? null), "bottom_column_third", array())) {
                // line 251
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_columns_width"] ?? null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 253
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_column_third", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 257
            echo "
                ";
            // line 258
            if ($this->getAttribute(($context["page"] ?? null), "bottom_column_fourth", array())) {
                // line 259
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_columns_width"] ?? null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 261
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_column_fourth", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 265
            echo "          </div>  <!--/.column-blocks -->
          <div class=\"spacer clearfix cfie\"></div>


        </div> <!--/#bottom-columns -->
      </div> <!-- /#bottom-wrapper -->
      ";
        }
        // line 272
        echo "
      <div class=\"clearfix cfie\"></div>


      ";
        // line 276
        if ($this->getAttribute(($context["page"] ?? null), "banner_bottom", array())) {
            // line 277
            echo "      <div id=\"spacer\" class=\"clearfix cfie\"></div>
      <div id=\"banner-bottom\" class=\"banner clearfix\">";
            // line 278
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "banner_bottom", array()), "html", null, true));
            echo "</div>
      ";
        }
        // line 280
        echo "
    </div> <!-- /#main -->
    </div> <!-- /#main-wrapper -->

    <!-- space between contents and footer -->
    <div id=\"spacer\" class=\"clearfix cfie\"></div>

    <div id=\"footer-wrapper\">
     ";
        // line 288
        if (((($this->getAttribute(($context["page"] ?? null), "footer_column_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_column_second", array())) || $this->getAttribute(        // line 289
($context["page"] ?? null), "footer_column_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_column_fourth", array()))) {
            // line 290
            echo "      <div id=\"footer-columns\" class=\"clearfix\">
          <div class=\"column-blocks clearfix\">
                <!--column-blocks -->
                ";
            // line 293
            if ($this->getAttribute(($context["page"] ?? null), "footer_column_first", array())) {
                // line 294
                echo "                  <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_columns_width"] ?? null), "html", null, true));
                echo "\">
                    <div class=\"column-block clearfix\">
                      ";
                // line 296
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_column_first", array()), "html", null, true));
                echo "
                    </div>
                  </div>
                ";
            }
            // line 300
            echo "
                ";
            // line 301
            if ($this->getAttribute(($context["page"] ?? null), "footer_column_second", array())) {
                // line 302
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_columns_width"] ?? null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 304
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_column_second", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 308
            echo "
                ";
            // line 309
            if ($this->getAttribute(($context["page"] ?? null), "footer_column_third", array())) {
                // line 310
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_columns_width"] ?? null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 312
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_column_third", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 316
            echo "
                ";
            // line 317
            if ($this->getAttribute(($context["page"] ?? null), "footer_column_fourth", array())) {
                // line 318
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_columns_width"] ?? null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 320
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_column_fourth", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 324
            echo "          </div>  <!--/.column-blocks -->
          <div class=\"spacer clearfix cfie\"></div>

      </div> <!--/#footer-columns -->
      ";
        }
        // line 329
        echo "
      ";
        // line 330
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 331
            echo "      <div id=\"footer\"><div class=\"section\">
        ";
            // line 332
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
      </div></div> <!-- /.section, /#footer -->
      ";
        }
        // line 335
        echo "
    </div> <!-- /#footer-wrapper -->


  </div> <!-- /#page -->
</div> <!-- /#page-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/mayo/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  574 => 335,  568 => 332,  565 => 331,  563 => 330,  560 => 329,  553 => 324,  546 => 320,  540 => 318,  538 => 317,  535 => 316,  528 => 312,  522 => 310,  520 => 309,  517 => 308,  510 => 304,  504 => 302,  502 => 301,  499 => 300,  492 => 296,  486 => 294,  484 => 293,  479 => 290,  477 => 289,  476 => 288,  466 => 280,  461 => 278,  458 => 277,  456 => 276,  450 => 272,  441 => 265,  434 => 261,  428 => 259,  426 => 258,  423 => 257,  416 => 253,  410 => 251,  408 => 250,  405 => 249,  398 => 245,  392 => 243,  390 => 242,  387 => 241,  380 => 237,  374 => 235,  372 => 234,  366 => 230,  364 => 229,  363 => 228,  357 => 224,  351 => 221,  348 => 220,  345 => 219,  339 => 216,  336 => 215,  334 => 214,  323 => 207,  317 => 206,  312 => 205,  306 => 202,  301 => 201,  299 => 200,  294 => 199,  288 => 198,  284 => 197,  280 => 195,  274 => 193,  272 => 192,  262 => 184,  255 => 179,  248 => 175,  242 => 173,  240 => 172,  237 => 171,  230 => 167,  224 => 165,  222 => 164,  219 => 163,  212 => 159,  206 => 157,  204 => 156,  201 => 155,  194 => 151,  188 => 149,  186 => 148,  180 => 144,  178 => 143,  177 => 142,  173 => 140,  166 => 137,  164 => 136,  160 => 134,  154 => 133,  152 => 132,  144 => 126,  138 => 124,  135 => 123,  129 => 120,  125 => 118,  119 => 117,  117 => 116,  114 => 115,  112 => 114,  100 => 105,  97 => 104,  89 => 98,  87 => 97,  84 => 96,  78 => 93,  75 => 92,  73 => 91,  63 => 88,  56 => 86,  48 => 85,  43 => 84,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/mayo/templates/page.html.twig", "C:\\xampp\\htdocs\\tommys_tees\\web\\themes\\contrib\\mayo\\templates\\page.html.twig");
    }
}
