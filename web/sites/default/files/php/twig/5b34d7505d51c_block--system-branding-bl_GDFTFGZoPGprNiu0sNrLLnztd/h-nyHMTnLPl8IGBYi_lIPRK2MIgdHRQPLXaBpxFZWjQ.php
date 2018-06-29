<?php

/* themes/contrib/mayo/templates/block--system-branding-block.html.twig */
class __TwigTemplate_f717a2126e15d3e523cfa903320cc0a3611a13af551b23a3f96abab6b84a89a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/contrib/mayo/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 16, "if" => 18);
        $filters = array("t" => 20);
        $functions = array("path" => 20);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('t'),
                array('path')
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

        // line 16
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "site-branding"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "      ";
        if (($context["site_logo"] ?? null)) {
            // line 19
            echo "        <div id=\"site_logo\">
        <a href=\"";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" rel=\"home\">
          <img src=\"";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" />
        </a>
        </div> <!-- /#logo -->
      ";
        }
        // line 25
        echo "
      ";
        // line 26
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 27
            echo "        <div id=\"name-and-slogan\" ";
            if ((($context["hide_site_name"] ?? null) && ($context["hide_site_slogan"] ?? null))) {
                echo " class=\"visually-hidden\"";
            }
            echo ">
          ";
            // line 28
            if (($context["site_name"] ?? null)) {
                // line 29
                echo "            ";
                if (($context["title"] ?? null)) {
                    // line 30
                    echo "            <div id=\"site-name\"";
                    if (($context["hide_site_name"] ?? null)) {
                        echo " class=\"visually-hidden\"";
                    }
                    echo ">
              <strong>
                <a href=\"";
                    // line 32
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
                    echo "\" title=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
                    echo "\" rel=\"home\"><span>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
                    echo "</span></a>
              </strong>
            </div>
          ";
                    // line 36
                    echo "          ";
                } else {
                    // line 37
                    echo "            <h1 id=\"site-name\"";
                    if (($context["hide_site_name"] ?? null)) {
                        echo " class=\"visually-hidden\" ";
                    }
                    echo ">
                <a href=\"";
                    // line 38
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
                    echo "\" title=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
                    echo "\" rel=\"home\"><span>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
                    echo "</span></a>
              </h1>
            ";
                }
                // line 41
                echo "          ";
            }
            // line 42
            echo "                    ";
            if (($context["site_slogan"] ?? null)) {
                // line 43
                echo "            <div id=\"site-slogan\"";
                if (($context["hide_site_slogan"] ?? null)) {
                    echo " class=\"visually-hidden\"";
                }
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
                echo "</div>
          ";
            }
            // line 45
            echo "        </div> <!-- /#name-and-slogan -->
      ";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/mayo/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 45,  140 => 43,  137 => 42,  134 => 41,  124 => 38,  117 => 37,  114 => 36,  104 => 32,  96 => 30,  93 => 29,  91 => 28,  84 => 27,  82 => 26,  79 => 25,  70 => 21,  64 => 20,  61 => 19,  58 => 18,  55 => 17,  51 => 1,  49 => 16,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/mayo/templates/block--system-branding-block.html.twig", "C:\\xampp\\htdocs\\tommys_tees\\web\\themes\\contrib\\mayo\\templates\\block--system-branding-block.html.twig");
    }
}
