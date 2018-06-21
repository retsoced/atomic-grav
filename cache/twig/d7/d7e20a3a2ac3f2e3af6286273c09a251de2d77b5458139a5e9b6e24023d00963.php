<?php

/* forms/fields/fieldset/fieldset.html.twig */
class __TwigTemplate_99e9cbf12539496b3bd9eb96464f136574facbdfc6f62f8920a24c3657aff2e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/fieldset/fieldset.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
            'group' => array($this, 'block_group'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"form-fieldset";
        if (($context["vertical"] ?? null)) {
            echo " vertical";
        }
        echo "\">
    ";
        // line 5
        $this->displayBlock('contents', $context, $blocks);
        // line 95
        echo "  </div>
";
    }

    // line 5
    public function block_contents($context, array $blocks = array())
    {
        // line 6
        echo "      <input type=\"checkbox\" class=\"hidden\" id=\"fieldset_collapsible_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array()), "html", null, true);
        echo "\"";
        if (( !$this->getAttribute(($context["field"] ?? null), "collapsible", array()) ||  !$this->getAttribute(($context["field"] ?? null), "collapsed", array()))) {
            echo " checked=\"checked\"";
        }
        echo " />

      <div class=\"form-label form-fieldset--label\">
        <h2>
          <label";
        // line 10
        if ($this->getAttribute(($context["field"] ?? null), "collapsible", array())) {
            echo " for=\"fieldset_collapsible_";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array()), "html", null, true);
            echo "\" class=\"form-fieldset--cursor\"";
        }
        echo ">
            ";
        // line 11
        if ($this->getAttribute(($context["field"] ?? null), "help", array())) {
            // line 12
            echo "            <span class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "help", array()))), "html", null, true);
            echo "\">
            ";
        }
        // line 14
        echo "            ";
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "          ";
        if ($this->getAttribute(($context["field"] ?? null), "help", array())) {
            // line 25
            echo "          </span>
          ";
        }
        // line 27
        echo "
          ";
        // line 29
        echo "          <span class=\"actions\">
            ";
        // line 30
        $this->displayBlock('actions', $context, $blocks);
        // line 38
        echo "          </span>
        </label>
      </h2>
      </div>
      <div class=\"form-data\"
        ";
        // line 48
        echo "      >

          ";
        // line 50
        $this->displayBlock('group', $context, $blocks);
        // line 93
        echo "      </div>
    ";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "              ";
        if ($this->getAttribute(($context["field"] ?? null), "icon", array())) {
            // line 16
            echo "                <i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "icon", array()), "html", null, true);
            echo "\"></i>
              ";
        }
        // line 18
        echo "              ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "title", array())), "html", null, true);
        echo "
              ";
        // line 19
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
              ";
        // line 20
        if ($this->getAttribute(($context["field"] ?? null), "info", array())) {
            // line 21
            echo "                <span class=\"form-fieldset--info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "info", array())), "html", null, true);
            echo "</span>
              ";
        }
        // line 23
        echo "            ";
    }

    // line 30
    public function block_actions($context, array $blocks = array())
    {
        // line 31
        echo "              ";
        if ($this->getAttribute(($context["field"] ?? null), "collapsible", array())) {
            // line 32
            echo "                <span class=\"form-fieldset--collapsible\">
                  <i class=\"fa fa-chevron-down open\"></i>
                  <i class=\"fa fa-chevron-up close\"></i>
                </span>
              ";
        }
        // line 37
        echo "            ";
    }

    // line 50
    public function block_group($context, array $blocks = array())
    {
        // line 51
        echo "          ";
        if ($this->getAttribute(($context["field"] ?? null), "text", array())) {
            // line 52
            echo "          <p>";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "text", array())), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "text", array())), "html", null, true);
            }
            // line 53
            echo "          <p>
              ";
        }
        // line 55
        echo "
              ";
        // line 56
        if ($this->getAttribute(($context["field"] ?? null), "fields", array())) {
            // line 57
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                // line 58
                if (($context["childName"] == "value")) {
                    // line 59
                    $context["childKey"] = "";
                    // line 60
                    echo "                          ";
                    $context["childName"] = ($context["itemName"] ?? null);
                } elseif ((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 =                 // line 61
$context["childName"]) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ".") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)))) {
                    // line 62
                    $context["childKey"] = twig_trim_filter($context["childName"], ".");
                    // line 63
                    echo "                          ";
                    $context["childName"] = (($context["itemName"] ?? null) . $context["childName"]);
                    // line 64
                    echo "                      ";
                } else {
                    // line 65
                    echo "                          ";
                    $context["childKey"] = $context["childName"];
                    // line 66
                    echo "                          ";
                    $context["childName"] = twig_replace_filter($context["childName"], array("*" => ($context["key"] ?? null)));
                    // line 67
                    echo "                      ";
                }
                // line 68
                echo "                      ";
                $context["child"] = twig_array_merge($context["child"], array("name" => $context["childName"]));
                // line 69
                echo "
                      ";
                // line 70
                if (($this->getAttribute($context["child"], "type", array()) == "key")) {
                    // line 71
                    echo "                          ";
                    // line 72
                    $this->loadTemplate("forms/fields/key/key.html.twig", "forms/fields/fieldset/fieldset.html.twig", 72)->display(array_merge($context, array("field" =>                     // line 73
$context["child"], "value" => ($context["key"] ?? null))));
                    // line 75
                    echo "                      ";
                } elseif (($this->getAttribute($context["child"], "key", array()) == true)) {
                    // line 76
                    echo "                          ";
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute(                    // line 77
$context["child"], "type", array())) . "/") . $this->getAttribute($context["child"], "type", array())) . ".html.twig"), 1 => "forms/fields/key/key.html.twig"), "forms/fields/fieldset/fieldset.html.twig", 76)->display(array_merge($context, array("field" =>                     // line 79
$context["child"], "value" => ($context["key"] ?? null))));
                    // line 81
                    echo "                      ";
                } elseif ($this->getAttribute($context["child"], "type", array())) {
                    // line 82
                    echo "                          ";
                    $context["originalValue"] = $this->getAttribute(($context["data"] ?? null), "value", array(0 => $this->getAttribute($context["child"], "name", array())), "method");
                    // line 83
                    echo "                          ";
                    // line 84
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute(                    // line 85
$context["child"], "type", array())) . "/") . $this->getAttribute($context["child"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/fieldset/fieldset.html.twig", 84)->display(array_merge($context, array("field" =>                     // line 87
$context["child"], "value" => $this->getAttribute(($context["data"] ?? null), "value", array(0 => $this->getAttribute($context["child"], "name", array())), "method"))));
                    // line 89
                    echo "                      ";
                }
                // line 90
                echo "                  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "              ";
        }
        // line 92
        echo "              ";
    }

    public function getTemplateName()
    {
        return "forms/fields/fieldset/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 92,  282 => 91,  268 => 90,  265 => 89,  263 => 87,  262 => 85,  261 => 84,  259 => 83,  256 => 82,  253 => 81,  251 => 79,  250 => 77,  248 => 76,  245 => 75,  243 => 73,  242 => 72,  240 => 71,  238 => 70,  235 => 69,  232 => 68,  229 => 67,  226 => 66,  223 => 65,  220 => 64,  217 => 63,  215 => 62,  213 => 61,  210 => 60,  208 => 59,  206 => 58,  188 => 57,  186 => 56,  183 => 55,  179 => 53,  172 => 52,  169 => 51,  166 => 50,  162 => 37,  155 => 32,  152 => 31,  149 => 30,  145 => 23,  139 => 21,  137 => 20,  133 => 19,  128 => 18,  122 => 16,  119 => 15,  116 => 14,  111 => 93,  109 => 50,  105 => 48,  98 => 38,  96 => 30,  93 => 29,  90 => 27,  86 => 25,  83 => 24,  80 => 14,  74 => 12,  72 => 11,  64 => 10,  52 => 6,  49 => 5,  44 => 95,  42 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/fieldset/fieldset.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/plugins/admin/themes/grav/templates/forms/fields/fieldset/fieldset.html.twig");
    }
}
