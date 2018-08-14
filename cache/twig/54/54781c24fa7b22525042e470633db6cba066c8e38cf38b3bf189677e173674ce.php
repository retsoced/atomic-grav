<?php

/* forms/fields/number/number.html.twig */
class __TwigTemplate_036e49b42719a71bdd8e7b07e54fcf55d329361c41c99bdd723d50f43558b456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/fields/text/text.html.twig", "forms/fields/number/number.html.twig", 1);
        $this->blocks = array(
            'input_attributes' => array($this, 'block_input_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/text/text.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 4
        echo "    type=\"number\"
    ";
        // line 5
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array(), "any", false, true), "min", array(), "any", true, true)) {
            echo "min=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "min", array()), "html", null, true);
            echo "\"";
        }
        // line 6
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array(), "any", false, true), "max", array(), "any", true, true)) {
            echo "max=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "max", array()), "html", null, true);
            echo "\"";
        }
        // line 7
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array(), "any", false, true), "step", array(), "any", true, true)) {
            echo "step=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "step", array()), "html", null, true);
            echo "\"";
        }
        // line 8
        echo "    ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/number/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  47 => 7,  40 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/number/number.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/plugins/form/templates/forms/fields/number/number.html.twig");
    }
}
