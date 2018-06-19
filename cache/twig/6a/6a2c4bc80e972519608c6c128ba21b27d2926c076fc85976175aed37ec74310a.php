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
        // line 24
        echo "
";
        // line 33
        echo "
";
        // line 34
        if ($this->getAttribute(($context["theme_config"] ?? null), "top_level_version", array())) {
            // line 35
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["slug"] => $context["ver"]) {
                // line 36
                echo "    ";
                echo $this->getAttribute($this, "version", array(0 => $context["ver"]), "method");
                echo "
      <ul id=\"";
                // line 37
                echo $context["slug"];
                echo "\" class=\"topics\">
        ";
                // line 38
                echo $this->getAttribute($this, "loop", array(0 => $context["ver"], 1 => ""), "method");
                echo "
      </ul>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['slug'], $context['ver'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 42
            echo "  <ul class=\"topics\">
    ";
            // line 43
            if ($this->getAttribute(($context["theme_config"] ?? null), "root_page", array())) {
                // line 44
                echo "      ";
                echo $this->getAttribute($this, "loop", array(0 => $this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->getAttribute(($context["theme_config"] ?? null), "root_page", array())), "method"), 1 => ""), "method");
                echo "
    ";
            } else {
                // line 46
                echo "      ";
                echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null), 1 => ""), "method");
                echo "
    ";
            }
            // line 48
            echo "  </ul>
";
        }
        // line 50
        echo "<hr />

<footer>
  <p>";
        // line 53
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_LEARN2_BUILT_WITH_GRAV");
        echo "</p>
</footer>
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
            echo "  ";
            if ((twig_length_filter($this->env, ($context["parent_loop"] ?? null)) > 0)) {
                // line 3
                echo "    ";
                $context["data_level"] = ($context["parent_loop"] ?? null);
                // line 4
                echo "  ";
            } else {
                // line 5
                echo "    ";
                $context["data_level"] = 0;
                // line 6
                echo "  ";
            }
            // line 7
            echo "
  ";
            // line 8
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
                // line 9
                echo "    ";
                $context["parent_page"] = (($this->getAttribute($context["p"], "activeChild", array())) ? (" parent") : (""));
                // line 10
                echo "    ";
                $context["current_page"] = (($this->getAttribute($context["p"], "active", array())) ? (" active") : (""));
                // line 11
                echo "    <li class=\"dd-item";
                echo ($context["parent_page"] ?? null);
                echo ($context["current_page"] ?? null);
                echo "\" data-nav-id=\"";
                echo $this->getAttribute($context["p"], "route", array());
                echo "\">
      <a href=\"";
                // line 12
                echo $this->getAttribute($context["p"], "url", array());
                echo "\" ";
                if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "class", array())) {
                    echo "class=\"";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "class", array());
                    echo "\"";
                }
                echo ">
        <span>";
                // line 13
                echo $this->getAttribute($context["p"], "menu", array());
                echo "</span>
      </a>

      ";
                // line 16
                if (($this->getAttribute($this->getAttribute($context["p"], "children", array()), "count", array()) > 0)) {
                    // line 17
                    echo "        <ul>
          ";
                    // line 18
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"], 1 => (((array_key_exists("parent_loop", $context)) ? (_twig_default_filter(($context["parent_loop"] ?? null), 0)) : (0)) + $this->getAttribute($context["loop"], "index", array()))), "method");
                    echo "
        </ul>
      ";
                }
                // line 21
                echo "    </li>
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

    // line 25
    public function getversion($__p__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "p" => $__p__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "  ";
            $context["parent_page"] = (($this->getAttribute(($context["p"] ?? null), "activeChild", array())) ? (" parent") : (""));
            // line 27
            echo "  ";
            $context["current_page"] = (($this->getAttribute(($context["p"] ?? null), "active", array())) ? (" active") : (""));
            // line 28
            echo "  
  <h5 class=\"";
            // line 29
            echo ($context["parent_page"] ?? null);
            echo ($context["current_page"] ?? null);
            echo "\">
    <a href=\"";
            // line 30
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
        return array (  227 => 30,  222 => 29,  219 => 28,  216 => 27,  213 => 26,  201 => 25,  173 => 21,  167 => 18,  164 => 17,  162 => 16,  156 => 13,  146 => 12,  138 => 11,  135 => 10,  132 => 9,  115 => 8,  112 => 7,  109 => 6,  106 => 5,  103 => 4,  100 => 3,  97 => 2,  84 => 1,  77 => 53,  72 => 50,  68 => 48,  62 => 46,  56 => 44,  54 => 43,  51 => 42,  41 => 38,  37 => 37,  32 => 36,  27 => 35,  25 => 34,  22 => 33,  19 => 24,);
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
