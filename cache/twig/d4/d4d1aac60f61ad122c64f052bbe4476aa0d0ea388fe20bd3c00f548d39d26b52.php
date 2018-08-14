<?php

/* partials/page-legend.html.twig */
class __TwigTemplate_e717cd3e7ad2528631724e3b375752002eab1bf9c2fc5e931857b74ea2ba1e64 extends Twig_Template
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
        $context["legend"] = array("VISIBLE" => "", "NON_ROUTABLE" => "not-routable", "NON_VISIBLE" => "not-visible", "MODULAR" => "modular");
        // line 2
        echo "<div id=\"pages-legend\">
    <strong>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LEGEND"), "html", null, true);
        echo ":</strong>
    <ul>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["legend"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["class"]) {
            // line 6
            echo "        <li><i class=\"page-icon fa fa-fw fa-circle-o ";
            echo twig_escape_filter($this->env, $context["class"], "html", null, true);
            echo "\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(("PLUGIN_ADMIN." . $context["key"])), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>
</div>


";
    }

    public function getTemplateName()
    {
        return "partials/page-legend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/page-legend.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/plugins/admin/themes/grav/templates/partials/page-legend.html.twig");
    }
}
