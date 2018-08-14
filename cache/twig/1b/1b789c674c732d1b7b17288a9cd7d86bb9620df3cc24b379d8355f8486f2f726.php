<?php

/* molecules.html.twig */
class __TwigTemplate_b69b708999c272423e981613672df3ca048d4c9676a5bf7afda2b664f3c81d7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("partials/base.html.twig", "molecules.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["icons"] = $this->loadTemplate("macros/font-awesome.html.twig", "molecules.html.twig", 1);
        // line 3
        $context["tags"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array());
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<div id=\"chapter\">
\t<header class=\"";
        // line 7
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "category", array()), 0, array(), "array");
        echo "\">
\t\t";
        // line 8
        if (($this->getAttribute(($context["header"] ?? null), "status", array()) == "incomplete")) {
            // line 9
            echo "\t\t\t<div class=\"pattern-status incomplete\">
\t\t\t\t";
            // line 10
            echo $context["icons"]->getfaIcon("fas fa-exclamation-circle");
            echo "<span class=\"label\">Pattern Incomplete</span>
\t\t\t</div>
\t\t";
        } else {
            // line 13
            echo "\t\t\t<div class=\"pattern-status complete\">
\t\t\t\t";
            // line 14
            echo $context["icons"]->getfaIcon("fas fa-check-circle");
            echo "<span class=\"label\">Pattern Complete</span>
\t\t\t</div>
\t\t";
        }
        // line 17
        echo "\t\t<h1 class=\"page-title\">";
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " ";
        }
        echo "</h1>
\t</header>

\t\t<div id=\"body-inner\">
\t\t\t";
        // line 21
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "molecules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  63 => 17,  57 => 14,  54 => 13,  48 => 10,  45 => 9,  43 => 8,  39 => 7,  36 => 6,  33 => 5,  29 => 2,  27 => 3,  25 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "molecules.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/themes/patternlibrary/templates/molecules.html.twig");
    }
}
