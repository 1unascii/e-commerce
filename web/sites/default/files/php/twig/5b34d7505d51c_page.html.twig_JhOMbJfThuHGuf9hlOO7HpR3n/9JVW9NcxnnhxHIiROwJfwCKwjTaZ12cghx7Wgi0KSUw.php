<?php

/* themes/contrib/business/templates/page.html.twig */
class __TwigTemplate_6e25a8341009df645d26b6aa67034fe1c43eb38215597f4937b1c8cce042a06d extends Twig_Template
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
        $tags = array("if" => 80, "for" => 83);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array(),
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

        // line 73
        echo "<div id=\"page-wrapper\" class=\"container\">

  <header role=\"banner\" id=\"header\" class=\"clearfix\">
    ";
        // line 76
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
  </header>

  ";
        // line 80
        echo "  ";
        if (($context["slider"] ?? null)) {
            // line 81
            echo "    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 84
                echo "          <li>
            <a href=\"";
                // line 85
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["slide"], "url", array()), "html", null, true));
                echo "\"><img src=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["slide"], "src", array()), "html", null, true));
                echo "\"></a>
            <p class=\"flex-caption\">";
                // line 86
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["slide"], "title", array()), "html", null, true));
                echo "</p>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "      </ul>
    </div>
  ";
        }
        // line 92
        echo "
  ";
        // line 93
        if ($this->getAttribute(($context["page"] ?? null), "homequotes", array())) {
            // line 94
            echo "    <div id=\"home-quote\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "homequotes", array()), "html", null, true));
            echo "</div>
  ";
        }
        // line 96
        echo "
  ";
        // line 98
        echo "  ";
        if ((($this->getAttribute(($context["page"] ?? null), "home_high1", array()) || $this->getAttribute(($context["page"] ?? null), "home_high2", array())) || $this->getAttribute(($context["page"] ?? null), "home_high3", array()))) {
            // line 99
            echo "    <div id=\"home-highlights\" class=\"row\">
      ";
            // line 100
            if ($this->getAttribute(($context["page"] ?? null), "home_high1", array())) {
                // line 101
                echo "        <div class=\"home-high-1 col-md-4\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "home_high1", array()), "html", null, true));
                echo "</div>
      ";
            }
            // line 103
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "home_high2", array())) {
                // line 104
                echo "        <div class=\"home-high-2 col-md-4\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "home_high2", array()), "html", null, true));
                echo "</div>
      ";
            }
            // line 106
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "home_high3", array())) {
                // line 107
                echo "        <div class=\"home-high-3 col-md-4\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "home_high3", array()), "html", null, true));
                echo "</div>
      ";
            }
            // line 109
            echo "    </div>
  ";
        }
        // line 111
        echo "
  <main id=\"main\" class=\"clearfix\">
    ";
        // line 113
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 114
            echo "      <div id=\"sidebar-first\" class=\"sidebar ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo "\" role=\"complementary\">
        ";
            // line 115
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
      </div> <!-- /#sidebar-first -->
    ";
        }
        // line 118
        echo "
    <div class=\"";
        // line 119
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contentlayout"] ?? null), "html", null, true));
        echo "\" role=\"main\">
      ";
        // line 120
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 121
            echo "        <div id=\"content_top\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "</div>
      ";
        }
        // line 123
        echo "
      ";
        // line 124
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "

    </div>";
        // line 127
        echo "
    ";
        // line 128
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 129
            echo "      <div id=\"sidebar-second\" class=\"sidebar ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo "\" role=\"complementary\">
        ";
            // line 130
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
      </div> <!-- /#sidebar-first -->
    ";
        }
        // line 133
        echo "
  </main>

  ";
        // line 137
        echo "  ";
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()))) {
            // line 138
            echo "    <div id=\"footer-saran\" class=\"row\">
      <div id=\"footer-wrap\">
        ";
            // line 140
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 141
                echo "          <div class=\"footer-1 col-md-3\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "</div>
        ";
            }
            // line 143
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 144
                echo "          <div class=\"footer-2 col-md-3\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "</div>
        ";
            }
            // line 146
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 147
                echo "          <div class=\"footer-3 col-md-3\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "</div>
        ";
            }
            // line 149
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", array())) {
                // line 150
                echo "          <div class=\"footer-4 col-md-3\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
                echo "</div>
        ";
            }
            // line 152
            echo "      </div>
    </div>
    <div class=\"clear\"></div>
  ";
        }
        // line 156
        echo "
  ";
        // line 157
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 158
            echo "    <footer role=\"contentinfo\">
      ";
            // line 159
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 162
        echo "
  <div class=\"clear\"></div>
  <div id=\"copyright\">
  ";
        // line 165
        if ($this->getAttribute(($context["copyright"] ?? null), "footer_copyright", array())) {
            // line 166
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["copyright"] ?? null), "footer_copyright", array()), "html", null, true));
            echo "
  ";
        }
        // line 168
        echo "
  <span class=\"credits\">Developed by <a href=\"http://dropthemes.in\" target=\"_blank\">Dropthemes.in</a> and <a href=\"http://www.devsaran.com\" target=\"_blank\">Devsaran</a>.</span>

  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/business/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 168,  268 => 166,  266 => 165,  261 => 162,  255 => 159,  252 => 158,  250 => 157,  247 => 156,  241 => 152,  235 => 150,  232 => 149,  226 => 147,  223 => 146,  217 => 144,  214 => 143,  208 => 141,  206 => 140,  202 => 138,  199 => 137,  194 => 133,  188 => 130,  183 => 129,  181 => 128,  178 => 127,  173 => 124,  170 => 123,  164 => 121,  162 => 120,  158 => 119,  155 => 118,  149 => 115,  144 => 114,  142 => 113,  138 => 111,  134 => 109,  128 => 107,  125 => 106,  119 => 104,  116 => 103,  110 => 101,  108 => 100,  105 => 99,  102 => 98,  99 => 96,  93 => 94,  91 => 93,  88 => 92,  83 => 89,  74 => 86,  68 => 85,  65 => 84,  61 => 83,  57 => 81,  54 => 80,  48 => 76,  43 => 73,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/business/templates/page.html.twig", "C:\\xampp\\htdocs\\tommys_tees\\web\\themes\\contrib\\business\\templates\\page.html.twig");
    }
}
