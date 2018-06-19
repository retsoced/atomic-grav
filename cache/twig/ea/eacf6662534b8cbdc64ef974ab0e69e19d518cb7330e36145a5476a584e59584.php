<?php

/* forms/fields/checkboxes/checkboxes.html.twig */
class __TwigTemplate_74671732671edc2139749136911e3ebf2c85c2b7887e3c83946d60da435d0c39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/checkboxes/checkboxes.html.twig", 1);
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
        // line 3
        $context["originalValue"] = ($context["value"] ?? null);
        // line 4
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
        // line 5
        if ((($this->getAttribute(($context["field"] ?? null), "use", array()) == "keys") && $this->getAttribute(($context["field"] ?? null), "default", array()))) {
            // line 6
            $context["value"] = twig_array_merge($this->getAttribute(($context["field"] ?? null), "default", array()), ($context["value"] ?? null));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
    data-grav-keys=\"";
        // line 11
        echo ((($this->getAttribute(($context["field"] ?? null), "use", array()) == "keys")) ? ("true") : ("false"));
        echo "\"
    data-grav-field-name=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
        echo "\"
";
    }

    // line 15
    public function block_input($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 17
            echo "
        ";
            // line 18
            $context["id"] = (((($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "id", array()), $this->getAttribute(($context["field"] ?? null), "name", array()))) : ($this->getAttribute(($context["field"] ?? null), "name", array()))) . "-") . $context["key"]);
            // line 19
            echo "        ";
            $context["name"] = ((($this->getAttribute(($context["field"] ?? null), "use", array()) == "keys")) ? ($context["key"]) : (($context["id"] ?? null)));
            // line 20
            echo "        ";
            $context["val"] = ((($this->getAttribute(($context["field"] ?? null), "use", array()) == "keys")) ? ("1") : ($context["key"]));
            // line 21
            echo "        ";
            $context["checked"] = ((($this->getAttribute(($context["field"] ?? null), "use", array()) == "keys")) ? ($this->getAttribute(($context["value"] ?? null), $context["key"], array(), "array")) : (twig_in_filter($context["key"], ($context["value"] ?? null))));
            // line 22
            echo "        ";
            $context["help"] = ((twig_in_filter($context["key"], twig_get_array_keys_filter($this->getAttribute(($context["field"] ?? null), "help_options", array())))) ? ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "help_options", array()), $context["key"], array(), "array")) : (false));
            // line 23
            echo "
        <div class=\"checkboxes ";
            // line 24
            echo twig_escape_filter($this->env, ($context["form_field_wrapper_classes"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", array()), "html", null, true);
            echo "\">
            <input type=\"checkbox\"
                   id=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["id"] ?? null));
            echo "\"
                   value=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["val"] ?? null));
            echo "\"
                   name=\"";
            // line 28
            echo twig_escape_filter($this->env, ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))) . "[") . ($context["name"] ?? null)) . "]"), "html", null, true);
            echo "\"
                   ";
            // line 29
            if (($context["checked"] ?? null)) {
                echo "checked=\"checked\"";
            }
            // line 30
            echo "                   ";
            if ($this->getAttribute(($context["field"] ?? null), "classes", array(), "any", true, true)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
                echo "\" ";
            }
            // line 31
            echo "                   ";
            if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 32
            echo "
            >
            <label style=\"display: inline\" for=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["id"] ?? null));
            echo "\">
                ";
            // line 35
            if (($context["help"] ?? null)) {
                // line 36
                echo "                    <span class=\"hint--bottom\" data-hint=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(($context["help"] ?? null)), "html_attr");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($context["text"]));
                echo "</span>
                ";
            } else {
                // line 38
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($context["text"]));
                echo "
                ";
            }
            // line 40
            echo "            </label>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forms/fields/checkboxes/checkboxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 40,  138 => 38,  130 => 36,  128 => 35,  124 => 34,  120 => 32,  115 => 31,  108 => 30,  104 => 29,  100 => 28,  96 => 27,  92 => 26,  85 => 24,  82 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 19,  68 => 18,  65 => 17,  60 => 16,  57 => 15,  51 => 12,  47 => 11,  42 => 10,  39 => 9,  35 => 1,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/checkboxes/checkboxes.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/plugins/form/templates/forms/fields/checkboxes/checkboxes.html.twig");
    }
}
