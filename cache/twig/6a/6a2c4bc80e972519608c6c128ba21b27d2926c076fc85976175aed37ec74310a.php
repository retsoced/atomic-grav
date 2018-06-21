<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_8d5a51f631e92c61d8c539abc80c31adc074ad02e93fee6cae16b696eec1d28b extends Twig_Template
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
        // line 15
        echo "
<ul class=\"topics\">
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", array(0 => array("category" => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "category", array()))), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 18
            echo "
      ";
            // line 19
            if (($this->getAttribute($this->getAttribute($context["p"], "children", array()), "count", array()) > 0)) {
                // line 20
                echo "        <li>
          <p class=\"clearfix\">";
                // line 21
                echo $this->getAttribute($context["p"], "title", array());
                echo "</p>
          <ul class=\"sub-topics\">
            ";
                // line 23
                echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                echo "
            <li class=\"clearfix\">
              ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", array(0 => array("category" => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()))), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 26
                    echo "                ";
                    echo $this->getAttribute($context["p"], "title", array());
                    echo "
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "            </li>
          </ul>
        </li>
      ";
            }
            // line 32
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</ul>
";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "    ";
                if ($this->getAttribute($context["p"], "visible", array())) {
                    // line 4
                    echo "      ";
                    $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                    // line 5
                    echo "
      ";
                    // line 6
                    if (($this->getAttribute($this->getAttribute($context["p"], "children", array()), "count", array()) < 0)) {
                        // line 7
                        echo "        <li class=\"dd-item\" data-nav-id=\"";
                        echo $this->getAttribute($context["p"], "route", array());
                        echo "\" data-link-url=\"";
                        echo $this->getAttribute($context["p"], "url", array());
                        echo "\">
          <a href=\"";
                        // line 8
                        echo $this->getAttribute($context["p"], "url", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["p"], "title", array());
                        echo "\">";
                        echo $this->getAttribute($context["p"], "title", array());
                        echo "</a>
          <!-- <span class=\"status-icon ";
                        // line 9
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "status", array());
                        echo "\"></span> -->
        </li>
      ";
                    }
                    // line 12
                    echo "    ";
                }
                // line 13
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 13,  125 => 12,  119 => 9,  111 => 8,  104 => 7,  102 => 6,  99 => 5,  96 => 4,  93 => 3,  88 => 2,  76 => 1,  71 => 34,  64 => 32,  58 => 28,  49 => 26,  45 => 25,  40 => 23,  35 => 21,  32 => 20,  30 => 19,  27 => 18,  23 => 17,  19 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/sidebar.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/themes/patternlibrary/templates/partials/sidebar.html.twig");
    }
}
