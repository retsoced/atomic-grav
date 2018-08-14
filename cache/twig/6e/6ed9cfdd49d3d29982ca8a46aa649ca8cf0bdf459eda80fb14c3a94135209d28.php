<?php

/* partials/media-list-wrapper__list__filters.html.twig */
class __TwigTemplate_d252ce59bf22e52707429025fa4ea84fc73d1a64395afcef2a791d2709db87da extends Twig_Template
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
        echo "<div>
    <div class=\"filter-wrapper filter-type\">
        <select class=\"filter js__filter\" data-name=\"type\" data-grav-selectize>
            <option value=\"*\" ";
        // line 4
        if ( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "type"), "method")) {
            echo "selected";
        }
        echo ">All Files</option>
            <option value=\"images\" ";
        // line 5
        if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "type"), "method") == "images")) {
            echo "selected";
        }
        echo ">Images</option>
            <option value=\"videos\"";
        // line 6
        if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "type"), "method") == "videos")) {
            echo "selected";
        }
        echo ">Videos</option>
            <option value=\"audios\"";
        // line 7
        if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "type"), "method") == "audios")) {
            echo "selected";
        }
        echo ">Audio</option>
            <option value=\"files\"";
        // line 8
        if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "type"), "method") == "files")) {
            echo "selected";
        }
        echo ">Files</option>
        </select>
    </div>

    <div class=\"filter-wrapper filter-date\">
        <select class=\"filter js__filter\" data-name=\"date\" data-grav-selectize>
            <option value=\"*\">All Dates</option>
            ";
        // line 15
        $context["theDate"] = twig_date_converter($this->env);
        // line 16
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "filesDates", array()));
        foreach ($context['_seq'] as $context["year"] => $context["months"]) {
            // line 17
            echo "                <optgroup label=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">
                    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["months"]);
            foreach ($context['_seq'] as $context["month"] => $context["number"]) {
                // line 19
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $context["month"], "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "date"), "method") == (($context["year"] . "-") . $context["month"]))) {
                    echo "selected";
                }
                echo ">
                            ";
                // line 20
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["theDate"] ?? null), "setDate", array(0 => $this->getAttribute(($context["theDate"] ?? null), "format", array(0 => "Y"), "method"), 1 => $context["month"], 2 => $this->getAttribute(($context["theDate"] ?? null), "format", array(0 => "d"), "method")), "method"), "M"), "html", null, true);
                echo "
                            (";
                // line 21
                echo twig_escape_filter($this->env, $context["number"], "html", null, true);
                echo ")</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['month'], $context['number'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                </optgroup>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['year'], $context['months'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
        </select>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/media-list-wrapper__list__filters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 25,  99 => 23,  91 => 21,  87 => 20,  76 => 19,  72 => 18,  67 => 17,  62 => 16,  60 => 15,  48 => 8,  42 => 7,  36 => 6,  30 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/media-list-wrapper__list__filters.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/plugins/admin/themes/grav/templates/partials/media-list-wrapper__list__filters.html.twig");
    }
}
