<?php

/* partials/logo.html.twig */
class __TwigTemplate_f996425b115f2775964774d5282be9c1bb3cdf9a7a5f98afd8e5527e80a5c21b extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "logo_text", array())) {
            // line 2
            echo "<h3>
\t<a href=\"";
            // line 3
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "\">
\t\t";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "logo_text", array()), "html", null, true);
            echo "
\t</a>
\t<a class=\"front-end hint--left\" data-hint=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VIEW_SITE_TIP"), "html", null, true);
            echo "\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative_frontend"] ?? null), "html", null, true);
            echo "\"> <i class=\"fa fa-bookmark-o\"></i></a>
</h3>
";
        } else {
            // line 9
            echo "<div class=\"admin-logo\">
\t<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "\">
\t\t<img class=\"admin-badge\" src=\"/user/themes/patternlibrary/images/admin.svg\" alt=\"admin\" width=\"80%\" style=\"margin-top:18px;\">
\t</a>
\t<a class=\"front-end hint--left\" data-hint=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VIEW_SITE_TIP"), "html", null, true);
            echo "\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative_frontend"] ?? null), "html", null, true);
            echo "\"> <i class=\"fa fa-external-link\"></i></a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  44 => 10,  41 => 9,  33 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/logo.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/plugins/admin/themes/grav/templates/partials/logo.html.twig");
    }
}
