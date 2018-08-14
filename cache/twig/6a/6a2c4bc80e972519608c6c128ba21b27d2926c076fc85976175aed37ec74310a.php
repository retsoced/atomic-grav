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
        // line 22
        echo "
";
        // line 30
        echo "
<div class=\"scrollbar-inner\">
  ";
        // line 32
        if ($this->getAttribute(($context["theme_config"] ?? null), "top_level_version", array())) {
            // line 33
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["slug"] => $context["ver"]) {
                // line 34
                echo "          ";
                echo $this->getAttribute($this, "version", array(0 => $context["ver"]), "method");
                echo "
          <ul id=\"";
                // line 35
                echo $context["slug"];
                echo "\" class=\"topics\">
          ";
                // line 36
                echo $this->getAttribute($this, "loop", array(0 => $context["ver"], 1 => ""), "method");
                echo "
          </ul>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['slug'], $context['ver'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "  ";
        } else {
            // line 40
            echo "      <ul class=\"topics\">
          ";
            // line 41
            if ($this->getAttribute(($context["theme_config"] ?? null), "root_page", array())) {
                // line 42
                echo "              ";
                echo $this->getAttribute($this, "loop", array(0 => $this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->getAttribute(($context["theme_config"] ?? null), "root_page", array())), "method"), 1 => ""), "method");
                echo "
          ";
            } else {
                // line 44
                echo "      ";
                echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null), 1 => ""), "method");
                echo "
          ";
            }
            // line 46
            echo "      </ul>
  ";
        }
        // line 48
        echo "</div>
";
    }

    // line 1
    public function getloop($__page__ = null, $__parent_loop__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "parent_loop" => $__parent_loop__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, ($context["parent_loop"] ?? null)) > 0)) {
                // line 3
                echo "        ";
                $context["data_level"] = ($context["parent_loop"] ?? null);
                // line 4
                echo "    ";
            } else {
                // line 5
                echo "        ";
                $context["data_level"] = 0;
                // line 6
                echo "    ";
            }
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "visible", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 8
                echo "        ";
                $context["parent_page"] = (($this->getAttribute($context["p"], "activeChild", array())) ? (" parent") : (""));
                // line 9
                echo "        ";
                $context["current_page"] = (($this->getAttribute($context["p"], "active", array())) ? (" active") : (""));
                // line 10
                echo "        <li class=\"dd-item";
                echo ($context["parent_page"] ?? null);
                echo ($context["current_page"] ?? null);
                echo "\" data-nav-id=\"";
                echo $this->getAttribute($context["p"], "route", array());
                echo "\">
            <a href=\"";
                // line 11
                echo $this->getAttribute($context["p"], "url", array());
                echo "\" ";
                if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "class", array())) {
                    echo "class=\"";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "class", array());
                    echo "\"";
                }
                echo ">
                <span>";
                // line 12
                echo $this->getAttribute($context["p"], "menu", array());
                echo "</span>
            </a>
            ";
                // line 14
                if (($this->getAttribute($this->getAttribute($context["p"], "children", array()), "count", array()) > 0)) {
                    // line 15
                    echo "            <ul>
                ";
                    // line 16
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"], 1 => (((array_key_exists("parent_loop", $context)) ? (_twig_default_filter(($context["parent_loop"] ?? null), 0)) : (0)) + $this->getAttribute($context["loop"], "index", array()))), "method");
                    echo "
            </ul>
            ";
                }
                // line 19
                echo "        </li>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
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

    // line 23
    public function getversion($__p__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "p" => $__p__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 24
            echo "    ";
            $context["parent_page"] = (($this->getAttribute(($context["p"] ?? null), "activeChild", array())) ? (" parent") : (""));
            // line 25
            echo "    ";
            $context["current_page"] = (($this->getAttribute(($context["p"] ?? null), "active", array())) ? (" active") : (""));
            // line 26
            echo "    <h5 class=\"";
            echo ($context["parent_page"] ?? null);
            echo ($context["current_page"] ?? null);
            echo "\">
        <a href=\"";
            // line 27
            echo $this->getAttribute(($context["p"] ?? null), "url", array());
            echo "\">";
            echo $this->getAttribute(($context["p"] ?? null), "menu", array());
            echo "</a>
    </h5>
";
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
        return array (  218 => 27,  212 => 26,  209 => 25,  206 => 24,  194 => 23,  166 => 19,  160 => 16,  157 => 15,  155 => 14,  150 => 12,  140 => 11,  132 => 10,  129 => 9,  126 => 8,  108 => 7,  105 => 6,  102 => 5,  99 => 4,  96 => 3,  93 => 2,  80 => 1,  75 => 48,  71 => 46,  65 => 44,  59 => 42,  57 => 41,  54 => 40,  51 => 39,  42 => 36,  38 => 35,  33 => 34,  28 => 33,  26 => 32,  22 => 30,  19 => 22,);
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
