<?php

/* general.html.twig */
class __TwigTemplate_8991b25be220e6a776ba083755bd82318d277b39b6f79365574ee084beca57d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("partials/base.html.twig", "general.html.twig", 2);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
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
        $context["icons"] = $this->loadTemplate("macros/font-awesome.html.twig", "general.html.twig", 1);
        // line 3
        $context["tags"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array());
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "  <header class=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "category", array()), 0, array(), "array");
        echo "\">
    ";
        // line 7
        if (($this->getAttribute(($context["header"] ?? null), "status", array()) == "incomplete")) {
            // line 8
            echo "      <div class=\"pattern-status incomplete\">
        ";
            // line 9
            echo $context["icons"]->getfaIcon("fas fa-exclamation-circle");
            echo "<span>Pattern Incomplete</span>
      </div>
    ";
        } else {
            // line 12
            echo "      <div class=\"pattern-status complete\">
        ";
            // line 13
            echo $context["icons"]->getfaIcon("fas fa-check-circle");
            echo "<span>Pattern Complete</span>
      </div>
    ";
        }
        // line 16
        echo "    <h1 class=\"page-title\">";
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " ";
        }
        echo "</h1>
  </header>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->loadTemplate("partials/page.html.twig", "general.html.twig", 21)->display($context);
    }

    public function getTemplateName()
    {
        return "general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  73 => 20,  62 => 16,  56 => 13,  53 => 12,  47 => 9,  44 => 8,  42 => 7,  37 => 6,  34 => 5,  30 => 2,  28 => 3,  26 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "general.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/themes/patternlibrary/templates/general.html.twig");
    }
}
