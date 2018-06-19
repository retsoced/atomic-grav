<?php

/* partials/navbar.html.twig */
class __TwigTemplate_1364b07d4fb15f50a825f23f434f69674ee6b7b4e42fb050e9a54b9a4f5977ce extends Twig_Template
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
        ";
        // line 16
        if ($this->getAttribute(($context["theme_config"] ?? null), "top_level_version", array())) {
            // line 17
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["slug"] => $context["ver"]) {
                // line 18
                echo "                ";
                echo $this->getAttribute($this, "version", array(0 => $context["ver"]), "method");
                echo "
                <ul>
                ";
                // line 20
                echo $this->getAttribute($this, "loop", array(0 => $context["ver"], 1 => ""), "method");
                echo "
                </ul>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['slug'], $context['ver'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        } else {
            // line 24
            echo "            <ul class=\"navbar\">
                ";
            // line 25
            if ($this->getAttribute(($context["theme_config"] ?? null), "root_page", array())) {
                // line 26
                echo "                    ";
                echo $this->getAttribute($this, "loop", array(0 => $this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->getAttribute(($context["theme_config"] ?? null), "root_page", array())), "method"), 1 => ""), "method");
                echo "
                ";
            } else {
                // line 28
                echo "            ";
                echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null), 1 => ""), "method");
                echo "
                ";
            }
            // line 30
            echo "            </ul>
        ";
        }
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
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 8
                echo "        ";
                $context["parent_page"] = (($this->getAttribute($context["p"], "activeChild", array())) ? (" parent") : (""));
                // line 9
                echo "        ";
                $context["current_page"] = (($this->getAttribute($context["p"], "active", array())) ? (" active") : (""));
                // line 10
                echo "        <li class=\"nav-item\" data-nav-id=\"";
                echo $this->getAttribute($context["p"], "route", array());
                echo "\">
            <a href=\"";
                // line 11
                echo $this->getAttribute($context["p"], "url", array());
                echo "\" target=\"_self\">";
                echo $this->getAttribute($context["p"], "menu", array());
                echo "</a>
        </li>
    ";
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
        return "partials/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 11,  109 => 10,  106 => 9,  103 => 8,  98 => 7,  95 => 6,  92 => 5,  89 => 4,  86 => 3,  83 => 2,  70 => 1,  64 => 30,  58 => 28,  52 => 26,  50 => 25,  47 => 24,  44 => 23,  35 => 20,  29 => 18,  24 => 17,  22 => 16,  19 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/navbar.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/themes/patternlibrary/templates/partials/navbar.html.twig");
    }
}
