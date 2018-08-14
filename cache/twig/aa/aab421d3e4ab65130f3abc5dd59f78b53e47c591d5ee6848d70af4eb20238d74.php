<?php

/* pattern-type.html.twig */
class __TwigTemplate_8c5a9f2791af21ace7beecd37fc42a81bc8aa168d8bb8eb3295a376d87c7e487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("general.html.twig", "pattern-type.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "general.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["icons"] = $this->loadTemplate("macros/font-awesome.html.twig", "pattern-type.html.twig", 1);
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "\t<div id=\"chapter\">
\t<header class=\"";
        // line 6
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "category", array()), 0, array(), "array");
        echo "\">
\t\t";
        // line 7
        if (($this->getAttribute(($context["header"] ?? null), "status", array()) == "incomplete")) {
            // line 8
            echo "\t\t\t<div class=\"pattern-status incomplete\">
\t\t\t\t";
            // line 9
            echo $context["icons"]->getfaIcon("fas fa-exclamation-circle");
            echo "<span class=\"label\">Pattern Incomplete</span>
\t\t\t</div>
\t\t";
        } else {
            // line 12
            echo "\t\t\t<div class=\"pattern-status complete\">
\t\t\t\t";
            // line 13
            echo $context["icons"]->getfaIcon("fas fa-check-circle");
            echo "<span class=\"label\">Pattern Complete</span>
\t\t\t</div>
\t\t";
        }
        // line 16
        echo "\t\t<h1 class=\"page-title\">";
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " ";
        }
        echo "</h1>
\t</header>

\t\t<div id=\"body-inner\">
\t\t\t";
        // line 20
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "pattern-type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  61 => 16,  55 => 13,  52 => 12,  46 => 9,  43 => 8,  41 => 7,  37 => 6,  34 => 5,  31 => 4,  27 => 2,  25 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pattern-type.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/themes/patternlibrary/templates/pattern-type.html.twig");
    }
}
