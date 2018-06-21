<?php

/* forms/fields/array/array.html.twig */
class __TwigTemplate_4031d1899328b0122300d7daad72ca30194b30ce7de61d5f6d412a622d17e4d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/array/array.html.twig", 1);
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

    // line 42
    public function block_input($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $context["array_field"] = $this;
        // line 44
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
        echo "\" data-grav-array-type=\"container\"";
        if ($this->getAttribute(($context["field"] ?? null), "value_only", array())) {
            echo " data-grav-array-mode=\"value_only\"";
        }
        echo (((twig_length_filter($this->env, ($context["value"] ?? null)) <= 1)) ? (" class=\"one-child\"") : (""));
        echo ">
        ";
        // line 45
        if (twig_length_filter($this->env, ($context["value"] ?? null))) {
            // line 46
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["text"]) {
                // line 47
                if ( !twig_test_iterable($context["text"])) {
                    // line 48
                    echo "                    ";
                    echo $context["array_field"]->getrenderer($context["key"], $context["text"], ($context["field"] ?? null), ($context["scope"] ?? null));
                    echo "
                ";
                } else {
                    // line 50
                    echo "                    ";
                    // line 51
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["text"]);
                    foreach ($context['_seq'] as $context["subkey"] => $context["subtext"]) {
                        // line 52
                        echo $context["array_field"]->getrenderer(((($context["key"] . "[") . $context["subkey"]) . "]"), $context["subtext"], ($context["field"] ?? null), ($context["scope"] ?? null));
                        echo "
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['subkey'], $context['subtext'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "                ";
                }
                // line 55
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 58
            echo "            <div class=\"form-row\" data-grav-array-type=\"row\">
                <span data-grav-array-action=\"sort\" class=\"fa fa-bars\"></span>
                ";
            // line 60
            if (($this->getAttribute(($context["field"] ?? null), "value_only", array()) != true)) {
                // line 61
                echo "                <input
                    data-grav-array-type=\"key\"
                    type=\"text\"
                    ";
                // line 64
                if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                // line 65
                echo "                    placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_key", array()))), "html", null, true);
                echo "\" />
                ";
            }
            // line 67
            echo "                <input
                    data-grav-array-type=\"value\"
                    type=\"text\"
                    name=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
            echo "\"
                    ";
            // line 71
            if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 72
            echo "                    placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_value", array()))), "html", null, true);
            echo "\" />
                <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
                <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
            </div>";
        }
        // line 77
        echo "    </div>
";
    }

    // line 10
    public function getrenderer($__key__ = null, $__text__ = null, $__field__ = null, $__scope__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "text" => $__text__,
            "field" => $__field__,
            "scope" => $__scope__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "
    ";
            // line 12
            if ( !twig_test_iterable(($context["text"] ?? null))) {
                // line 13
                echo "    <div class=\"form-row";
                if ($this->getAttribute(($context["field"] ?? null), "value_only", array())) {
                    echo " array-field-value_only";
                }
                echo "\"
         data-grav-array-type=\"row\">
        <span data-grav-array-action=\"sort\" class=\"fa fa-bars\"></span>
        ";
                // line 16
                if (($this->getAttribute(($context["field"] ?? null), "value_only", array()) != true)) {
                    // line 17
                    echo "            ";
                    if (((($context["key"] ?? null) == "0") && (($context["text"] ?? null) == ""))) {
                        // line 18
                        echo "                ";
                        $context["key"] = "";
                        // line 19
                        echo "            ";
                    }
                    // line 20
                    echo "
            <input
                data-grav-array-type=\"key\"
                type=\"text\" value=\"";
                    // line 23
                    echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
                    echo "\"
                ";
                    // line 24
                    if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                        echo "disabled=\"disabled\"";
                    }
                    // line 25
                    echo "                placeholder=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_key", array()))), "html", null, true);
                    echo "\" />
        ";
                }
                // line 27
                echo "
        <input
            data-grav-array-type=\"value\"
            type=\"text\"
            name=\"";
                // line 31
                echo twig_escape_filter($this->env, ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))) . "[") . ($context["key"] ?? null)) . "]"), "html", null, true);
                echo "\"
            placeholder=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_value", array()))), "html", null, true);
                echo "\"
            ";
                // line 33
                if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                // line 34
                echo "            value=";
                if ((($context["text"] ?? null) == "true")) {
                    echo "true";
                } elseif ((($context["text"] ?? null) == "false")) {
                    echo "false";
                } else {
                    echo "\"";
                    echo twig_escape_filter($this->env, twig_join_filter(($context["text"] ?? null), ", "));
                    echo "\"";
                }
                echo " />

        <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
        <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
    </div>
    ";
            }
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
        return "forms/fields/array/array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 34,  227 => 33,  223 => 32,  219 => 31,  213 => 27,  207 => 25,  203 => 24,  199 => 23,  194 => 20,  191 => 19,  188 => 18,  185 => 17,  183 => 16,  174 => 13,  172 => 12,  169 => 11,  154 => 10,  149 => 77,  141 => 72,  137 => 71,  133 => 70,  128 => 67,  122 => 65,  118 => 64,  113 => 61,  111 => 60,  107 => 58,  100 => 55,  97 => 54,  89 => 52,  84 => 51,  82 => 50,  76 => 48,  74 => 47,  69 => 46,  67 => 45,  57 => 44,  54 => 43,  51 => 42,  45 => 7,  41 => 6,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/array/array.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/plugins/admin/themes/grav/templates/forms/fields/array/array.html.twig");
    }
}
