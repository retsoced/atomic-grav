<?php

/* forms/fields/multilevel/multilevel.html.twig */
class __TwigTemplate_8fb34e8cbce80912cac5fd56fe296454ae45e128e113e416299eb99a69678eb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/multilevel/multilevel.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 4
        echo "    data-grav-array-name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
        echo "\"
    data-grav-array-keyname=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_key", array()))), "html", null, true);
        echo "\"
    data-grav-array-valuename=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_value", array()))), "html", null, true);
        echo "\"
    ";
        // line 7
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    // line 89
    public function block_input($context, array $blocks = array())
    {
        // line 90
        echo "    <div data-id=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->randomStringFunc(), "html", null, true);
        echo "\" data-grav-multilevel-field data-grav-array-type=\"container\" data-grav-array-mode=\"value_only\"";
        echo (((twig_length_filter($this->env, ($context["value"] ?? null)) <= 1)) ? (" class=\"one-child\"") : (""));
        echo ">
        ";
        // line 91
        if (twig_length_filter($this->env, ($context["value"] ?? null))) {
            // line 92
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["content"]) {
                // line 93
                echo "<div class=\"element-wrapper\">
                    ";
                // line 94
                echo $this->getAttribute($this, "renderer", array(0 => $context["key"], 1 => $context["content"], 2 => ($context["field"] ?? null), 3 => ($context["scope"] ?? null), 4 => 0, 5 => (("[" . $context["key"]) . "]"), 6 => true), "method");
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 99
            echo "            <div class=\"element-wrapper\">
                <div class=\"form-row array-field-value_only js__multilevel-field\"
                    data-grav-array-type=\"row\">

                    <input
                        type=\"text\"
                        name=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
            echo "\"
                        placeholder=\"Enter value\"
                        value=\"\" />

                    <span class=\"fa fa-minus js__remove-item\"></span>
                    <span class=\"fa fa-plus js__add-sibling hidden\" data-level=\"0\" ></span>
                    <span class=\"fa fa-plus-circle js__add-children hidden\" data-level=\"0\"></span>
                </div>
            </div>";
        }
        // line 115
        echo "    </div>
";
    }

    // line 11
    public function getfield($__value__ = null, $__key__ = null, $__level__ = null, $__globalvars__ = null, $__disable_name__ = null, $__hidden__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "key" => $__key__,
            "level" => $__level__,
            "globalvars" => $__globalvars__,
            "disable_name" => $__disable_name__,
            "hidden" => $__hidden__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 12
            echo "        ";
            $context["name"] = ((("data[" . twig_replace_filter($this->getAttribute($this->getAttribute(($context["globalvars"] ?? null), "field", array()), "name", array()), array("." => "]["))) . "]") . ($context["key"] ?? null));
            // line 13
            echo "        <div class=\"form-row array-field-value_only js__multilevel-field ";
            echo (((($context["level"] ?? null) == 0)) ? ("top") : (""));
            echo "\"
            data-grav-array-type=\"row\" ";
            // line 14
            if ((((array_key_exists("hidden", $context)) ? (_twig_default_filter(($context["hidden"] ?? null), false)) : (false)) == true)) {
                echo "style=\"display: none\"";
            }
            echo ">
            <input
                type=\"text\"
                ";
            // line 17
            if ((($context["disable_name"] ?? null) != true)) {
                echo "name=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 18
            echo "                data-attr-name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
                placeholder=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_value", array()))), "html", null, true);
            echo "\"
                style=\"margin-left: ";
            // line 20
            echo twig_escape_filter($this->env, (($context["level"] ?? null) * 50), "html", null, true);
            echo "px\"
                value=\"";
            // line 21
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" />

            <span class=\"fa fa-minus js__remove-item\"></span>
            <span class=\"fa fa-plus js__add-sibling hidden\" data-level=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            echo "\"></span>
            <span class=\"fa fa-plus-circle js__add-children hidden\" data-level=\"";
            // line 25
            echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            echo "\"></span>
        </div>
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

    // line 10
    public function getrenderer($__key__ = null, $__content__ = null, $__field__ = null, $__scope__ = null, $__level__ = null, $__parent_key__ = null, $__up_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "content" => $__content__,
            "field" => $__field__,
            "scope" => $__scope__,
            "level" => $__level__,
            "parent_key" => $__parent_key__,
            "up_level" => $__up_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    ";
            // line 28
            echo "
    ";
            // line 29
            if ((($context["level"] ?? null) == 0)) {
                // line 30
                echo "
        ";
                // line 31
                echo $this->getAttribute($this, "field", array(0 => ($context["key"] ?? null), 1 => "", 2 => ($context["level"] ?? null), 3 => $context, 4 => true, 5 => ((is_numeric(($context["key"] ?? null))) ? (true) : (false))), "method");
                echo "

        ";
                // line 33
                if ( !twig_test_iterable(($context["content"] ?? null))) {
                    // line 34
                    echo "            ";
                    $context["level2"] = (($context["level"] ?? null) + 1);
                    // line 35
                    echo "
            <div class=\"children-wrapper\">
                <div class=\"element-wrapper\">
                    ";
                    // line 38
                    echo $this->getAttribute($this, "field", array(0 => ($context["content"] ?? null), 1 => (("[" . ($context["key"] ?? null)) . "]"), 2 => ($context["level2"] ?? null), 3 => $context), "method");
                    echo "
                </div>
            </div>
        ";
                }
                // line 42
                echo "    ";
            }
            // line 43
            echo "
    ";
            // line 44
            if (($context["up_level"] ?? null)) {
                // line 45
                echo "        ";
                $context["level"] = (($context["level"] ?? null) + 1);
                // line 46
                echo "    ";
            }
            // line 47
            echo "    <div class=\"children-wrapper\">
        ";
            // line 48
            $context["unique_child"] = (((is_array(($context["content"] ?? null)) && ($this->getAttribute(($context["content"] ?? null), "length", array()) > 1))) ? (true) : (false));
            // line 49
            echo "
        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["content"] ?? null));
            foreach ($context['_seq'] as $context["inner_key"] => $context["inner_content"]) {
                // line 51
                echo "<div class=\"element-wrapper\">
                ";
                // line 52
                if ( !is_numeric($context["inner_key"])) {
                    // line 53
                    echo "                    ";
                    if ((twig_length_filter($this->env, ($context["content"] ?? null)) > 1)) {
                        // line 54
                        echo "                        ";
                        echo $this->getAttribute($this, "field", array(0 => $context["inner_key"], 1 => ($context["parent_key"] ?? null), 2 => ($context["level"] ?? null), 3 => $context, 4 => true), "method");
                        echo "
                    ";
                    } else {
                        // line 56
                        echo "                        ";
                        echo $this->getAttribute($this, "field", array(0 => $context["inner_key"], 1 => ($context["parent_key"] ?? null), 2 => ($context["level"] ?? null), 3 => $context), "method");
                        echo "
                    ";
                    }
                    // line 58
                    echo "                    ";
                    $context["level2"] = (($context["level"] ?? null) + 1);
                    // line 59
                    echo "                    ";
                    $context["up_level"] = true;
                    // line 60
                    echo "                ";
                } else {
                    // line 61
                    echo "                    ";
                    $context["up_level"] = false;
                    // line 62
                    echo "                    ";
                    $context["level2"] = ($context["level"] ?? null);
                    // line 63
                    echo "                ";
                }
                // line 64
                echo "
                ";
                // line 65
                if ( !twig_test_iterable($context["inner_content"])) {
                    // line 66
                    echo "
                    ";
                    // line 67
                    if ( !is_numeric($context["inner_key"])) {
                        // line 68
                        echo "                        <div class=\"children-wrapper\">
                            <div class=\"element-wrapper\">
                    ";
                    }
                    // line 71
                    echo "
                    ";
                    // line 72
                    $context["last_key"] = ((is_numeric($context["inner_key"])) ? ("") : ($context["inner_key"]));
                    // line 73
                    echo "                    ";
                    echo $this->getAttribute($this, "field", array(0 => $context["inner_content"], 1 => (((($context["parent_key"] ?? null) . "[") . $context["inner_key"]) . "]"), 2 => ($context["level2"] ?? null), 3 => $context), "method");
                    echo "

                    ";
                    // line 75
                    if ( !is_numeric($context["inner_key"])) {
                        // line 76
                        echo "                            </div>
                        </div>
                    ";
                    }
                    // line 79
                    echo "                ";
                } else {
                    // line 80
                    echo "
                    ";
                    // line 81
                    $context["inner_parent_key"] = (((($context["parent_key"] ?? null) . "[") . $context["inner_key"]) . "]");
                    // line 82
                    echo "                    ";
                    echo $this->getAttribute($this, "renderer", array(0 => $context["inner_key"], 1 => $context["inner_content"], 2 => ($context["field"] ?? null), 3 => ($context["scope"] ?? null), 4 => ($context["level"] ?? null), 5 => ($context["inner_parent_key"] ?? null), 6 => ($context["up_level"] ?? null)), "method");
                    echo "
                ";
                }
                // line 84
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['inner_key'], $context['inner_content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "    </div>
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
        return "forms/fields/multilevel/multilevel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 86,  347 => 84,  341 => 82,  339 => 81,  336 => 80,  333 => 79,  328 => 76,  326 => 75,  320 => 73,  318 => 72,  315 => 71,  310 => 68,  308 => 67,  305 => 66,  303 => 65,  300 => 64,  297 => 63,  294 => 62,  291 => 61,  288 => 60,  285 => 59,  282 => 58,  276 => 56,  270 => 54,  267 => 53,  265 => 52,  262 => 51,  258 => 50,  255 => 49,  253 => 48,  250 => 47,  247 => 46,  244 => 45,  242 => 44,  239 => 43,  236 => 42,  229 => 38,  224 => 35,  221 => 34,  219 => 33,  214 => 31,  211 => 30,  209 => 29,  206 => 28,  204 => 11,  186 => 10,  168 => 25,  164 => 24,  158 => 21,  154 => 20,  150 => 19,  145 => 18,  139 => 17,  131 => 14,  126 => 13,  123 => 12,  106 => 11,  101 => 115,  89 => 105,  81 => 99,  71 => 94,  68 => 93,  63 => 92,  61 => 91,  54 => 90,  51 => 89,  45 => 7,  41 => 6,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/multilevel/multilevel.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/plugins/admin/themes/grav/templates/forms/fields/multilevel/multilevel.html.twig");
    }
}
