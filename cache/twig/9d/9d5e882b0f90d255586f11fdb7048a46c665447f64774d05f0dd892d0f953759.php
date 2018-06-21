<?php

/* index.html.twig */
class __TwigTemplate_647518f0e09a3d4e8807fdf5b5c0b5a204a1b67b0ca600f3cbff40db607c43e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("partials/base.html.twig", "index.html.twig", 4);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["icons"] = $this->loadTemplate("macros/font-awesome.html.twig", "index.html.twig", 1);
        // line 2
        $context["mcps"] = $this->loadTemplate("macros/micro-pattern-list.html.twig", "index.html.twig", 2);
        // line 4
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <main id=\"body\" class=\"large-12 columns category no-pad home-page\">

    ";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "

    ";
        // line 11
        $this->displayBlock('footer', $context, $blocks);
        // line 19
        echo "
      ";
        // line 20
        $this->displayBlock('navigation', $context, $blocks);
        // line 21
        echo "  </main>
";
    }

    // line 11
    public function block_footer($context, array $blocks = array())
    {
        // line 12
        echo "        <footer>
          <nav id=\"linkToTop\">
            <a href=\"#\" title=\"Back to top\">";
        // line 14
        echo $context["icons"]->getfaIcon("chevron-circle-up");
        echo "</a>
            <span>back to top</span>
          </nav>
        </footer>
      ";
    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  66 => 14,  62 => 12,  59 => 11,  54 => 21,  52 => 20,  49 => 19,  47 => 11,  42 => 9,  38 => 7,  35 => 6,  31 => 4,  29 => 2,  27 => 1,  11 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/themes/patternlibrary/templates/index.html.twig");
    }
}
