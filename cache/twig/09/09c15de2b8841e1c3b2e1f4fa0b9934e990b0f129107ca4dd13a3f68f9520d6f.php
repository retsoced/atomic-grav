<?php

/* config.html.twig */
class __TwigTemplate_9ad0f71cc30607e22b4b74be48fe2256b282d5afae8aa0bf7f4da38644c9d16e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "config.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content_top' => array($this, 'block_content_top'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["config_slug"] = twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "basename", array()));
        // line 4
        $context["isInfo"] = (($context["config_slug"] ?? null) == "info");
        // line 6
        $context["tab_title_string"] = ("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["config_slug"] ?? null)));
        // line 7
        $context["tab_title"] = ((($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["tab_title_string"] ?? null)) == ($context["tab_title_string"] ?? null))) ? (twig_capitalize_string_filter($this->env, ($context["config_slug"] ?? null))) : ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["tab_title_string"] ?? null))));
        // line 8
        $context["title"] = (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION") . ": ") . ($context["tab_title"] ?? null));
        // line 10
        if ( !($context["isInfo"] ?? null)) {
            // line 11
            $context["data"] = $this->getAttribute(($context["admin"] ?? null), "data", array(0 => ("config/" . ($context["config_slug"] ?? null))), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => (($context["theme_url"] ?? null) . "/css/codemirror/codemirror.css")), "method");
        // line 16
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 23
    public function block_titlebar($context, array $blocks = array())
    {
        // line 24
        echo "    <div class=\"button-bar\">
        <a class=\"button\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-reply\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
        echo "</a>
        ";
        // line 26
        if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "file", array()), "filename", array())) {
            // line 27
            echo "        <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
        ";
        }
        // line 29
        echo "    </div>
    <h1><i class=\"fa fa-fw fa-wrench\"></i> ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ($context["tab_title"] ?? null), "html", null, true);
        echo "</h1>
";
    }

    // line 33
    public function block_content_top($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "file", array()), "filename", array())) {
            // line 35
            echo "    <div class=\"alert notice\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
            echo ": <b>";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute(($context["data"] ?? null), "file", array()), "filename", array()), array(($context["base_path"] ?? null) => "")), "html", null, true);
            echo "</b></div>
    ";
        }
        // line 37
        echo "
    <div class=\"form-tabs\">
        <div class=\"tabs-nav\">

            ";
        // line 41
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.configuration_system", 1 => "admin.super"))) {
            // line 42
            echo "            <a ";
            if ((($context["config_slug"] ?? null) == "system")) {
                echo "class=\"active\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/config/system\">
                <span>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SYSTEM"), "html", null, true);
            echo "</span>
            </a>
            ";
        }
        // line 46
        echo "
            ";
        // line 47
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.configuration_site", 1 => "admin.super"))) {
            // line 48
            echo "            <a ";
            if ((($context["config_slug"] ?? null) == "site")) {
                echo "class=\"active\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/config/site\">
                <span>";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SITE"), "html", null, true);
            echo "</span>
            </a>
            ";
        }
        // line 52
        echo "
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "configurations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["configuration"]) {
            // line 54
            echo "                ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => ("admin.configuration_" . $context["configuration"]), 1 => "admin.super"))) {
                // line 55
                echo "                    ";
                $context["current_blueprints"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "data", array(0 => ("config/" . $context["configuration"])), "method"), "blueprints", array()), "toArray", array(), "method");
                // line 56
                echo "                    ";
                if ((((($context["configuration"] != "system") && ($context["configuration"] != "site")) &&  !$this->getAttribute($this->getAttribute(($context["current_blueprints"] ?? null), "form", array()), "hidden", array())) && ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["current_blueprints"] ?? null), "form", array()), "fields", array())) ||  !twig_test_empty($this->getAttribute($this->getAttribute(($context["current_blueprints"] ?? null), "form", array()), "field", array()))))) {
                    // line 57
                    echo "                        <a ";
                    if ((($context["config_slug"] ?? null) == $context["configuration"])) {
                        echo "class=\"active\"";
                    }
                    echo " href=\"";
                    echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                    echo "/config/";
                    echo twig_escape_filter($this->env, $context["configuration"], "html", null, true);
                    echo "\">
                            ";
                    // line 58
                    $context["configuration_string"] = ("PLUGIN_ADMIN." . twig_upper_filter($this->env, $context["configuration"]));
                    // line 59
                    echo "                            <span>";
                    echo twig_escape_filter($this->env, ((($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["configuration_string"] ?? null)) == ($context["configuration_string"] ?? null))) ? (twig_capitalize_string_filter($this->env, $context["configuration"])) : ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["configuration_string"] ?? null)))), "html", null, true);
                    echo "</span>
                        </a>
                    ";
                }
                // line 62
                echo "                ";
            }
            // line 63
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configuration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
            ";
        // line 65
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.configuration_info", 1 => "admin.super"))) {
            // line 66
            echo "            <a ";
            if ((($context["config_slug"] ?? null) == "info")) {
                echo "class=\"active\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/config/info\">
                <span>";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INFO"), "html", null, true);
            echo "</span>
            </a>
            ";
        }
        // line 70
        echo "
        </div>
    </div>
";
    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
        // line 76
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => ("admin.configuration_" . ($context["config_slug"] ?? null)), 1 => "admin.super"))) {
            // line 77
            echo "        ";
            if (($context["isInfo"] ?? null)) {
                // line 78
                echo "            <div id=\"phpinfo\">
                ";
                // line 79
                echo $this->getAttribute(($context["admin"] ?? null), "phpinfo", array());
                echo "
            </div>
        ";
            } else {
                // line 82
                echo "            ";
                $this->loadTemplate("partials/blueprints.html.twig", "config.html.twig", 82)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["data"] ?? null), "blueprints", array()), "data" => ($context["data"] ?? null))));
                // line 83
                echo "        ";
            }
            // line 84
            echo "    ";
        }
        // line 85
        echo "    ";
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "config.html.twig", 85)->display($context);
    }

    public function getTemplateName()
    {
        return "config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 85,  255 => 84,  252 => 83,  249 => 82,  243 => 79,  240 => 78,  237 => 77,  234 => 76,  231 => 75,  224 => 70,  218 => 67,  209 => 66,  207 => 65,  204 => 64,  198 => 63,  195 => 62,  188 => 59,  186 => 58,  175 => 57,  172 => 56,  169 => 55,  166 => 54,  162 => 53,  159 => 52,  153 => 49,  144 => 48,  142 => 47,  139 => 46,  133 => 43,  124 => 42,  122 => 41,  116 => 37,  108 => 35,  105 => 34,  102 => 33,  94 => 30,  91 => 29,  85 => 27,  83 => 26,  77 => 25,  74 => 24,  71 => 23,  64 => 20,  61 => 19,  54 => 16,  51 => 15,  48 => 14,  44 => 1,  41 => 11,  39 => 10,  37 => 8,  35 => 7,  33 => 6,  31 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "config.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/plugins/admin/themes/grav/templates/config.html.twig");
    }
}
