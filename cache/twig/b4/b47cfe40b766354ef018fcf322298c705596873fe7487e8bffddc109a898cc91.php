<?php

/* @Page:/Users/deltaecho3/Development/grav-pattern-library-template/user/pages/01.home */
class __TwigTemplate_39c0f11ff42ad5cf0cc97b6ec3d7af9d84cc56eccfbed3d2b3d2947163eb1d53 extends Twig_Template
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
        // line 1
        echo "# Welcome to the Pattern Library

A pattern is a concrete solution for a designer to sketch, an engineer to build and is easy to understand. The Pattern Library collects all of these designs into a centralized location to create an interactive style guide which acts as a reference point for team members to find detailed specifications for how the application interacts with the user.";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/deltaecho3/Development/grav-pattern-library-template/user/pages/01.home";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Page:/Users/deltaecho3/Development/grav-pattern-library-template/user/pages/01.home", "");
    }
}
