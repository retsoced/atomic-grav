<?php

/* pages.html.twig */
class __TwigTemplate_db589fcd175baea3336ce41954e0ad831c8780faf7875e667996b3fa399c4a9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "pages.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        if ($this->getAttribute(($context["admin"] ?? null), "route", array())) {
            // line 8
            $context["context"] = $this->getAttribute(($context["admin"] ?? null), "page", array(0 => true), "method");
        }
        // line 11
        if ($this->getAttribute(($context["uri"] ?? null), "param", array(0 => "new"), "method")) {
            // line 12
            $context["mode"] = "new";
        } elseif (        // line 13
($context["context"] ?? null)) {
            // line 14
            $context["mode"] = "edit";
            // line 15
            if ($this->getAttribute(($context["context"] ?? null), "exists", array())) {
                // line 16
                $context["page_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute(($context["context"] ?? null), "rawRoute", array()))));
                // line 17
                $context["exists"] = true;
                // line 18
                $context["title"] = (((($this->getAttribute(($context["context"] ?? null), "exists", array())) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT")) : ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE"))) . " ") . (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "title", array())) ? ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "title", array())) : ($this->getAttribute(($context["context"] ?? null), "title", array()))));
            } else {
                // line 20
                $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            }
        } else {
            // line 23
            $context["mode"] = "list";
            // line 24
            $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES");
        }
        // line 27
        $context["modular"] = (($this->getAttribute(($context["context"] ?? null), "modular", array())) ? ("modular_") : (""));
        // line 28
        $context["warn"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "warnings", array()), "delete_page", array());
        // line 29
        $context["admin_lang"] = (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "admin_lang", array())) ? ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "admin_lang", array())) : ("en"));
        // line 30
        $context["page_lang"] = $this->getAttribute(($context["context"] ?? null), "language", array());
        // line 31
        $context["type"] = "page";
        // line 44
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "frontend_preview_target", array()) != "inline")) {
            // line 45
            $context["preview_html"] = ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute(($context["context"] ?? null), "home", array())) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", array()))))) ? (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute(($context["context"] ?? null), "home", array())) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", array()))))) : ("/"));
            // line 46
            $context["preview_target"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "frontend_preview_target", array());
            // line 47
            $context["preview_link"] = (($this->getAttribute(($context["context"] ?? null), "routable", array())) ? ((((((("<a class=\"button\" target=\"" . ($context["preview_target"] ?? null)) . "\" href=\"") . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>")) : (""));
        } else {
            // line 49
            $context["preview_html"] = (((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute(($context["context"] ?? null), "home", array())) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", array()))))) ? ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute(($context["context"] ?? null), "home", array())) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", array()))))) : ("/"));
            // line 50
            $context["preview_link"] = (($this->getAttribute(($context["context"] ?? null), "routable", array())) ? ((((("<a class=\"button\" href=\"" . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>")) : (""));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if ((($context["mode"] ?? null) == "edit")) {
            // line 35
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => (($context["theme_url"] ?? null) . "/css/codemirror/codemirror.css")), "method");
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 131
    public function block_titlebar($context, array $blocks = array())
    {
        // line 132
        echo "    <div class=\"button-bar\">
        ";
        // line 133
        if ((($context["mode"] ?? null) == "list")) {
            // line 134
            echo "            <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>

            ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "add_modals", array()));
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 137
                echo "                ";
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "show_in", array()), "bar") == "bar")) {
                    // line 138
                    echo "                    <a class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", array()), "html", null, true);
                    echo "\" href=\"#modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-remodal-target=\"modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"><i class=\"fa fa-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute($context["add_modal"], "label", array())), "html", null, true);
                    echo "</a>
                ";
                }
                // line 140
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "
            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> ";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
            echo "
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</a></li>
                    <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
            echo "</a></li>
                    ";
            // line 152
            if ( !twig_test_empty($this->getAttribute(($context["admin"] ?? null), "modularTypes", array()))) {
                // line 153
                echo "                        <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR"), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 155
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "add_modals", array()));
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 156
                echo "                        ";
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "show_in", array()), "bar") == "dropdown")) {
                    // line 157
                    echo "                            <li><a class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", array()), "html", null, true);
                    echo "\" href=\"#modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-remodal-target=\"modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute($context["add_modal"], "label", array())), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 159
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "                </ul>
            </div>

            ";
            // line 163
            if ($this->getAttribute(($context["admin"] ?? null), "multilang", array())) {
                // line 164
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        ";
                // line 167
                $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", array()), ($context["admin_lang"] ?? null), array(), "array");
                // line 168
                echo "                        ";
                echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                echo "
                    </button>
                    ";
                // line 170
                if ((twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "languages_enabled", array())) > 1)) {
                    // line 171
                    echo "                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        ";
                    // line 175
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "languages_enabled", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 176
                        echo "                            ";
                        $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 177
                        echo "                            ";
                        if (($context["langCode"] != ($context["admin_lang"] ?? null))) {
                            // line 178
                            echo "                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => ((((((($context["base_url_relative"] ?? null) . $this->getAttribute(($context["theme"] ?? null), "slug", array())) . "/pages/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "switchlanguage/lang") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . $context["langCode"]), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                            echo "</a></li>
                            ";
                        }
                        // line 180
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo "                    </ul>
                    ";
                }
                // line 183
                echo "                </div>
            ";
            }
            // line 185
            echo "
        ";
        } elseif ((        // line 186
($context["mode"] ?? null) == "edit")) {
            // line 187
            echo "
            ";
            // line 188
            echo ($context["preview_link"] ?? null);
            echo "

            <a class=\"button\" href=\"";
            // line 190
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/pages\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i></a>

            ";
            // line 192
            $context["siblings"] = $this->getAttribute($this->getAttribute(($context["context"] ?? null), "parent", array(), "method"), "children", array(), "method");
            // line 193
            echo "
            ";
            // line 194
            if ( !$this->getAttribute(($context["siblings"] ?? null), "isFirst", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method")) {
                // line 195
                echo "                ";
                $context["sib"] = $this->getAttribute(($context["siblings"] ?? null), "nextSibling", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method");
                // line 196
                echo "                ";
                $context["sib_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute(($context["sib"] ?? null), "rawRoute", array()))));
                // line 197
                echo "                <a class=\"button hidden-mobile\" href=\"";
                echo twig_escape_filter($this->env, ($context["sib_url"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIOUS"), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-left\"></i></a>
            ";
            }
            // line 199
            echo "
            ";
            // line 200
            if ( !$this->getAttribute(($context["siblings"] ?? null), "isLast", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method")) {
                // line 201
                echo "                ";
                $context["sib"] = $this->getAttribute(($context["siblings"] ?? null), "prevSibling", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method");
                // line 202
                echo "                ";
                $context["sib_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute(($context["sib"] ?? null), "rawRoute", array()))));
                // line 203
                echo "                <a class=\"button hidden-mobile\" href=\"";
                echo twig_escape_filter($this->env, ($context["sib_url"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NEXT"), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 205
            echo "
            ";
            // line 206
            if (($context["exists"] ?? null)) {
                // line 207
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                        <i class=\"fa fa-plus\"></i> ";
                // line 209
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
                echo "
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
                // line 215
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
                echo "</a></li>
                        <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
                // line 216
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
                echo "</a></li>
                        ";
                // line 217
                if ( !twig_test_empty($this->getAttribute(($context["admin"] ?? null), "modularTypes", array()))) {
                    // line 218
                    echo "                            <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR"), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 220
                echo "                    </ul>
                </div>

                <a class=\"button disable-after-click\" href=\"";
                // line 223
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "copy"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                echo "\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COPY"), "html", null, true);
                echo "</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> ";
                // line 224
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MOVE"), "html", null, true);
                echo "</a>
                ";
                // line 225
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin-pro", array(), "array"), "enabled", array())) {
                    // line 226
                    echo "                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i class=\"fa fa-history\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_PRO.REVISIONS"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 228
                echo "                ";
                if (($context["warn"] ?? null)) {
                    // line 229
                    echo "                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-close\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE"), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 231
                    echo "                    <a class=\"button disable-after-click\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => ((($this->getAttribute(($context["uri"] ?? null), "route", array(0 => true), "method") . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                ";
                }
                // line 233
                echo "            ";
            }
            // line 234
            echo "
            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> ";
            // line 236
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
                ";
            // line 237
            if ((($context["exists"] ?? null) && $this->getAttribute(($context["admin"] ?? null), "multilang", array()))) {
                // line 238
                echo "                    ";
                if ($this->getAttribute(($context["context"] ?? null), "untranslatedLanguages", array())) {
                    // line 239
                    echo "                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            ";
                    // line 243
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "untranslatedLanguages", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 244
                        echo "                                ";
                        $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 245
                        echo "                                ";
                        if (($context["langCode"] != ($context["page_lang"] ?? null))) {
                            // line 246
                            echo "                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"";
                            echo twig_escape_filter($this->env, $context["langCode"], "html", null, true);
                            echo "\" form=\"blueprints\" type=\"submit\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_AS"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                            echo "</button>
                                ";
                        }
                        // line 248
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 249
                    echo "                        </ul>
                    ";
                }
                // line 251
                echo "                ";
            }
            // line 252
            echo "            </div>


        ";
        }
        // line 256
        echo "    </div>
    ";
        // line 257
        if ((($context["mode"] ?? null) == "new")) {
            // line 258
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</h1>
    ";
        } elseif ((        // line 259
($context["mode"] ?? null) == "edit")) {
            // line 260
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            ";
            // line 261
            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "menu", array()), "html", null, true);
            echo "
        </h1>
    ";
        } else {
            // line 264
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MANAGE_PAGES"), "html", null, true);
            echo "</h1>
    ";
        }
    }

    // line 268
    public function block_content($context, array $blocks = array())
    {
        // line 269
        echo "    <div class=\"clear admin-pages\">
    ";
        // line 270
        if ((($context["mode"] ?? null) == "new")) {
            // line 271
            echo "        ";
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 271)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "pages/page"), "method"), "data" => ($context["context"] ?? null))));
            // line 272
            echo "    ";
        } elseif ((($context["mode"] ?? null) == "edit")) {
            // line 273
            echo "        <div class=\"admin-form-wrapper\">
            <div id=\"admin-topbar\">

                ";
            // line 276
            if (($this->getAttribute(($context["admin"] ?? null), "multilang", array()) && ($context["page_lang"] ?? null))) {
                // line 277
                echo "                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            ";
                // line 279
                if (($context["exists"] ?? null)) {
                    // line 280
                    echo "                                ";
                    echo twig_escape_filter($this->env, ($context["page_lang"] ?? null), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 282
                    echo "                                ";
                    echo twig_escape_filter($this->env, ($context["admin_lang"] ?? null), "html", null, true);
                    echo "
                            ";
                }
                // line 284
                echo "                        </button>
                        ";
                // line 285
                if ((($context["exists"] ?? null) && (twig_length_filter($this->env, $this->getAttribute(($context["context"] ?? null), "translatedLanguages", array())) > 1))) {
                    // line 286
                    echo "                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                ";
                    // line 290
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "translatedLanguages", array()));
                    foreach ($context['_seq'] as $context["language"] => $context["route"]) {
                        // line 291
                        echo "                                    ";
                        if (($context["language"] != ($context["page_lang"] ?? null))) {
                            // line 292
                            echo "                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "\" redirect=\"";
                            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["context"] ?? null), "rawRoute", array()), "/"), "html", null, true);
                            echo "\" form=\"blueprints\">";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "</button>
                                    ";
                        }
                        // line 294
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['language'], $context['route'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 295
                    echo "                            </ul>
                        ";
                }
                // line 297
                echo "                    </div>
                ";
            }
            // line 299
            echo "
                ";
            // line 300
            if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "blueprints", array()), "fields", array())) {
                // line 301
                echo "                ";
                $context["normalText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
                // line 302
                echo "                ";
                $context["expertText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
                // line 303
                echo "                ";
                $context["maxLen"] = max(array(0 => twig_length_filter($this->env, ($context["normalText"] ?? null)), 1 => twig_length_filter($this->env, ($context["expertText"] ?? null))));
                // line 304
                echo "                ";
                $context["normalText"] = $this->getAttribute($this, "spanToggle", array(0 => ($context["normalText"] ?? null), 1 => ($context["maxLen"] ?? null)), "method");
                // line 305
                echo "                ";
                $context["expertText"] = $this->getAttribute($this, "spanToggle", array(0 => ($context["expertText"] ?? null), 1 => ($context["maxLen"] ?? null)), "method");
                // line 306
                echo "                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"";
                // line 308
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", array()), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array()), "html", null, true);
                echo "normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "expert", array()) == "0")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"normal\">";
                // line 309
                echo ($context["normalText"] ?? null);
                echo "</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"";
                // line 310
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", array()), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array()), "html", null, true);
                echo "expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "expert", array()) == "1")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"expert\">";
                // line 311
                echo ($context["expertText"] ?? null);
                echo "</label>
                        <a></a>
                    </div>
                </form>
                ";
            }
            // line 316
            echo "
            </div>

            ";
            // line 319
            if (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "blueprints", array()), "fields", array()) && ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "expert", array()) == "0"))) {
                // line 320
                echo "                ";
                $this->loadTemplate("partials/blueprints.html.twig", "pages.html.twig", 320)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["context"] ?? null), "blueprints", array()), "data" => ($context["context"] ?? null))));
                // line 321
                echo "            ";
            } else {
                // line 322
                echo "                ";
                $this->loadTemplate("partials/blueprints-raw.html.twig", "pages.html.twig", 322)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => (("admin/pages/" . ($context["modular"] ?? null)) . "raw")), "method"), "data" => ($context["context"] ?? null))));
                // line 323
                echo "            ";
            }
            // line 324
            echo "        </div>
    ";
        } else {
            // line 326
            echo "        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-filter-labels=\"";
            // line 328
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array(0 => array("id" => "mode", "name" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_MODES")), 1 => array("id" => "type", "name" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_TYPES")), 2 => array("id" => "access", "name" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACCESS_LEVELS")))), "html_attr");
            echo "\" data-filter-types=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge($this->getAttribute(($context["admin"] ?? null), "types", array()), $this->getAttribute(($context["admin"] ?? null), "modularTypes", array()))), "html_attr");
            echo "\" data-filter-access-levels=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["admin"] ?? null), "accessLevels", array())), "html_attr");
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FILTERS"), "html", null, true);
            echo "\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"";
            // line 331
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SEARCH_PAGES"), "html", null, true);
            echo "\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> ";
            // line 334
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPAND_ALL"), "html", null, true);
            echo "</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> ";
            // line 335
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COLLAPSE_ALL"), "html", null, true);
            echo "</span>
            </div>
        </form>
        <div class=\"pages-list\">
            <ul class=\"depth-0\">
                ";
            // line 340
            echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null), 1 => 0, 2 => $context), "method");
            echo "
            </ul>
            ";
            // line 342
            $this->loadTemplate("partials/page-legend.html.twig", "pages.html.twig", 342)->display($context);
            // line 343
            echo "        </div>
    ";
        }
        // line 345
        echo "    </div>

    ";
        // line 347
        if (($context["context"] ?? null)) {
            // line 348
            echo "        ";
            $context["obj_data"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->cloneFunc(($context["context"] ?? null));
            // line 349
            echo "
        ";
            // line 350
            if ((($context["mode"] ?? null) == "edit")) {
                // line 351
                echo "            ";
                $this->getAttribute(($context["obj_data"] ?? null), "folder", array(0 => ""), "method");
                // line 352
                echo "        ";
            }
            // line 353
            echo "    ";
        }
        // line 354
        echo "
    ";
        // line 355
        if (((($context["mode"] ?? null) == "list") || (($context["mode"] ?? null) == "edit"))) {
            // line 356
            echo "    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 357
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 357)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/new"), "method"), "data" => ($context["obj_data"] ?? null), "form_id" => "new-page")));
            // line 358
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 361
            $this->loadTemplate("partials/blueprints-new-folder.html.twig", "pages.html.twig", 361)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/new_folder"), "method"), "data" => ($context["obj_data"] ?? null), "form_id" => "new-folder")));
            // line 362
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 365
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 365)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/modular_new"), "method"), "data" => ($context["obj_data"] ?? null), "form_id" => "new-modular")));
            // line 366
            echo "    </div>

    ";
            // line 368
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "add_modals", array()));
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
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 369
                echo "        <div class=\"remodal ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "modal_classes", array()), ""), "html", null, true);
                echo "\" data-remodal-id=\"modal-add_modal-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" data-remodal-options=\"hashTracking: false\">
            ";
                // line 370
                $this->loadTemplate($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "template", array()), "partials/blueprints-new.html.twig"), "pages.html.twig", 370)->display(array_merge($context, twig_array_merge(array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => $this->getAttribute($context["add_modal"], "blueprint", array())), "method"), "data" => ($context["context"] ?? null), "form_id" => "add-modal"), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "with", array()), array()))));
                // line 371
                echo "        </div>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 373
            echo "    ";
        }
        // line 374
        echo "

    ";
        // line 376
        if ((($context["mode"] ?? null) == "edit")) {
            // line 377
            echo "    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        ";
            // line 379
            $this->loadTemplate("partials/page-move.html.twig", "pages.html.twig", 379)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/move"), "method"), "data" => ($context["context"] ?? null))));
            // line 380
            echo "    </div>
    <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 382
            try {
                $this->loadTemplate(array(0 => "partials/page-revisions.html.twig", 1 => "empty.html.twig"), "pages.html.twig", 382)->display(array_merge($context, array("data" => ($context["context"] ?? null))));
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 383
            echo "    </div>
    ";
        }
        // line 385
        echo "
    ";
        // line 386
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "pages.html.twig", 386)->display($context);
        // line 387
        echo "
    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 392
        if (($context["context"] ?? null)) {
            // line 393
            echo "                    <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "title", array()), "html", null, true);
            echo "</strong>
                ";
        }
        // line 395
        echo "            </p>
            <p class=\"bigger\">
              ";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
            <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>

    ";
        // line 407
        try {
            $this->loadTemplate("partials/admin-pro-pages-addons.html.twig", "pages.html.twig", 407)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 408
        echo "
";
    }

    // line 411
    public function block_bottom($context, array $blocks = array())
    {
        // line 412
        echo "<script>
    ";
        // line 413
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
    \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
</script>
";
    }

    // line 3
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            echo (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)) . ($context["input"] ?? null)) . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 53
    public function getloop($__page__ = null, $__depth__ = null, $__twig_vars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "depth" => $__depth__,
            "twig_vars" => $__twig_vars__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 54
            echo "    ";
            $context["config"] = $this->getAttribute(($context["twig_vars"] ?? null), "config", array(), "array");
            // line 55
            echo "    ";
            $context["separator"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
            // line 56
            echo "    ";
            $context["display_field"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "pages_list_display_field", array());
            // line 57
            echo "    ";
            $context["base_url"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_relative", array(), "array");
            // line 58
            echo "    ";
            $context["base_url_relative_frontend"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_relative_frontend", array(), "array");
            // line 59
            echo "    ";
            $context["base_url_simple"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_simple", array(), "array");
            // line 60
            echo "    ";
            $context["admin_route"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_route", array(), "array");
            // line 61
            echo "    ";
            $context["admin_lang"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_lang", array(), "array");
            // line 62
            echo "    ";
            $context["warn"] = $this->getAttribute(($context["twig_vars"] ?? null), "warn", array(), "array");
            // line 63
            echo "    ";
            $context["uri"] = $this->getAttribute(($context["twig_vars"] ?? null), "uri", array(), "array");
            // line 64
            echo "
    ";
            // line 65
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "admin", array()), "children_display_order", array()) == "collection") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()), "order", array()), "by", array()))) {
                // line 66
                echo "        ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()), "order", array()), "custom", array())) {
                    // line 67
                    echo "            ";
                    $context["pcol"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array(), "method"), "order", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()), "order", array()), "by", array()), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array()), "asc")) : ("asc")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()), "order", array()), "custom", array())), "method");
                    // line 68
                    echo "        ";
                } else {
                    // line 69
                    echo "            ";
                    $context["pcol"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array(), "method"), "order", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()), "order", array()), "by", array()), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array()), "asc")) : ("asc"))), "method");
                    // line 70
                    echo "        ";
                }
                // line 71
                echo "    ";
            } else {
                // line 72
                echo "        ";
                $context["pcol"] = $this->getAttribute(($context["page"] ?? null), "children", array(), "method");
                // line 73
                echo "    ";
            }
            // line 74
            echo "
    ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pcol"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 76
                echo "        ";
                $context["description"] = (((((( !$this->getAttribute($context["p"], "page", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.FOLDER") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE") . " &bull; "))) . (($this->getAttribute(                // line 77
$context["p"], "modular", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODULAR") . " &bull; ")) : (""))) . (($this->getAttribute(                // line 78
$context["p"], "routable", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ROUTABLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_ROUTABLE") . " &bull; ")))) . (($this->getAttribute(                // line 79
$context["p"], "visible", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VISIBLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_VISIBLE") . " &bull; ")))) . (($this->getAttribute(                // line 80
$context["p"], "published", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PUBLISHED") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_PUBLISHED") . " &bull; "))));
                // line 81
                echo "
        ";
                // line 82
                $context["page_url"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->getPageUrl($context, $context["p"]);
                // line 83
                echo "
        <li class=\"page-item\" data-nav-id=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "route", array()), "html", null, true);
                echo "\">
            <div class=\"row page-item__row\">
                <span class=\"page-item__toggle\" ";
                // line 86
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("data-toggle=\"children\"") : (""));
                echo ">
                    <i class=\"page-icon fa fa-fw fa-circle-o ";
                // line 87
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("children-closed") : (""));
                echo " ";
                echo (($this->getAttribute($context["p"], "modular", array())) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", array())) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", array())) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", array())) ? ("folder") : (""))))))));
                echo "\"></i>
                </span>
                <div class=\"page-item__content\">
                    <div class=\"page-item__content-name\">
                        <span data-hint=\"";
                // line 91
                echo twig_trim_filter(($context["description"] ?? null), " &bull; ");
                echo "\" class=\"hint--top page-item__content-hint\">
                            ";
                // line 92
                $context["page_label"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($context["p"], "header", array()), ($context["display_field"] ?? null)), $this->getAttribute($context["p"], ($context["display_field"] ?? null))), $this->getAttribute($context["p"], "title", array()));
                // line 93
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, ($context["page_url"] ?? null), "html", null, true);
                echo "\" class=\"page-edit\">";
                echo twig_escape_filter($this->env, ($context["page_label"] ?? null));
                echo "</a>
                        </span>
                        ";
                // line 95
                if ($this->getAttribute($context["p"], "language", array())) {
                    // line 96
                    echo "                            <span class=\"badge lang ";
                    if (($this->getAttribute($context["p"], "language", array()) == ($context["admin_lang"] ?? null))) {
                        echo "info";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "language", array()), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 98
                echo "                        ";
                if ($this->getAttribute($context["p"], "home", array())) {
                    // line 99
                    echo "                            <span class=\"page-home\"><i class=\"fa fa-home\"></i></span>
                        ";
                }
                // line 101
                echo "                    </div>
                    <p class=\"page-route\">";
                // line 102
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) : ($this->getAttribute($context["p"], "route", array()))), "html", null, true);
                echo " <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "template", array(), "method"), "html", null, true);
                echo "</p>
                </div>
                <span class=\"page-item__tools\">
                    ";
                // line 105
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "frontend_preview_target", array()) != "inline")) {
                    // line 106
                    echo "                        ";
                    $context["preview_target"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "frontend_preview_target", array());
                    // line 107
                    echo "                        ";
                    $context["preview_html"] = ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute($context["p"], "home", array())) ? ("") : ($this->getAttribute($context["p"], "route", array()))))) ? (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute($context["p"], "home", array())) ? ("") : ($this->getAttribute($context["p"], "route", array()))))) : ("/"));
                    // line 108
                    echo "                        ";
                    $context["preview_link"] = (($this->getAttribute($context["p"], "routable", array())) ? ((((((("<a class=\"page-view\" target=\"" . ($context["preview_target"] ?? null)) . "\" href=\"") . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\"></i></a>")) : (""));
                    // line 109
                    echo "                    ";
                } else {
                    // line 110
                    echo "                        ";
                    $context["preview_html"] = (((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute($context["p"], "home", array())) ? ("") : ($this->getAttribute($context["p"], "route", array()))))) ? ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute($context["p"], "home", array())) ? ("") : ($this->getAttribute($context["p"], "route", array()))))) : ("/"));
                    // line 111
                    echo "                        ";
                    $context["preview_link"] = (($this->getAttribute($context["p"], "routable", array())) ? ((((("<a class=\"page-view\" href=\"" . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\"></i></a>")) : (""));
                    // line 112
                    echo "                    ";
                }
                // line 113
                echo "                    ";
                echo ($context["preview_link"] ?? null);
                echo "
                    ";
                // line 114
                if (($context["warn"] ?? null)) {
                    // line 115
                    echo "                        <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . ($context["separator"] ?? null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                } else {
                    // line 117
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . ($context["separator"] ?? null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                }
                // line 119
                echo "                </span>
            </div>
            ";
                // line 121
                if (($this->getAttribute($this->getAttribute($context["p"], "children", array(), "method"), "count", array()) > 0)) {
                    // line 122
                    echo "                <ul class=\"depth-";
                    echo twig_escape_filter($this->env, (($context["depth"] ?? null) + 1), "html", null, true);
                    echo "\" style=\"display:none;\">
                    ";
                    // line 123
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"], 1 => (($context["depth"] ?? null) + 1), 2 => ($context["twig_vars"] ?? null)), "method");
                    echo "
                </ul>
            ";
                }
                // line 126
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1150 => 126,  1144 => 123,  1139 => 122,  1137 => 121,  1133 => 119,  1127 => 117,  1121 => 115,  1119 => 114,  1114 => 113,  1111 => 112,  1108 => 111,  1105 => 110,  1102 => 109,  1099 => 108,  1096 => 107,  1093 => 106,  1091 => 105,  1083 => 102,  1080 => 101,  1076 => 99,  1073 => 98,  1063 => 96,  1061 => 95,  1053 => 93,  1051 => 92,  1047 => 91,  1038 => 87,  1034 => 86,  1029 => 84,  1026 => 83,  1024 => 82,  1021 => 81,  1019 => 80,  1018 => 79,  1017 => 78,  1016 => 77,  1014 => 76,  1010 => 75,  1007 => 74,  1004 => 73,  1001 => 72,  998 => 71,  995 => 70,  992 => 69,  989 => 68,  986 => 67,  983 => 66,  981 => 65,  978 => 64,  975 => 63,  972 => 62,  969 => 61,  966 => 60,  963 => 59,  960 => 58,  957 => 57,  954 => 56,  951 => 55,  948 => 54,  934 => 53,  916 => 4,  903 => 3,  895 => 413,  892 => 412,  889 => 411,  884 => 408,  877 => 407,  869 => 402,  865 => 401,  858 => 397,  854 => 395,  846 => 393,  844 => 392,  839 => 390,  834 => 387,  832 => 386,  829 => 385,  825 => 383,  818 => 382,  814 => 380,  812 => 379,  808 => 377,  806 => 376,  802 => 374,  799 => 373,  784 => 371,  782 => 370,  775 => 369,  758 => 368,  754 => 366,  752 => 365,  747 => 362,  745 => 361,  740 => 358,  738 => 357,  735 => 356,  733 => 355,  730 => 354,  727 => 353,  724 => 352,  721 => 351,  719 => 350,  716 => 349,  713 => 348,  711 => 347,  707 => 345,  703 => 343,  701 => 342,  696 => 340,  688 => 335,  684 => 334,  678 => 331,  666 => 328,  662 => 326,  658 => 324,  655 => 323,  652 => 322,  649 => 321,  646 => 320,  644 => 319,  639 => 316,  631 => 311,  619 => 310,  615 => 309,  603 => 308,  599 => 306,  596 => 305,  593 => 304,  590 => 303,  587 => 302,  584 => 301,  582 => 300,  579 => 299,  575 => 297,  571 => 295,  565 => 294,  555 => 292,  552 => 291,  548 => 290,  542 => 286,  540 => 285,  537 => 284,  531 => 282,  525 => 280,  523 => 279,  519 => 277,  517 => 276,  512 => 273,  509 => 272,  506 => 271,  504 => 270,  501 => 269,  498 => 268,  490 => 264,  484 => 261,  481 => 260,  479 => 259,  474 => 258,  472 => 257,  469 => 256,  463 => 252,  460 => 251,  456 => 249,  450 => 248,  440 => 246,  437 => 245,  434 => 244,  430 => 243,  424 => 239,  421 => 238,  419 => 237,  415 => 236,  411 => 234,  408 => 233,  402 => 231,  394 => 229,  391 => 228,  385 => 226,  383 => 225,  379 => 224,  373 => 223,  368 => 220,  362 => 218,  360 => 217,  356 => 216,  352 => 215,  343 => 209,  339 => 207,  337 => 206,  334 => 205,  326 => 203,  323 => 202,  320 => 201,  318 => 200,  315 => 199,  307 => 197,  304 => 196,  301 => 195,  299 => 194,  296 => 193,  294 => 192,  287 => 190,  282 => 188,  279 => 187,  277 => 186,  274 => 185,  270 => 183,  266 => 181,  260 => 180,  252 => 178,  249 => 177,  246 => 176,  242 => 175,  236 => 171,  234 => 170,  228 => 168,  226 => 167,  221 => 164,  219 => 163,  214 => 160,  208 => 159,  196 => 157,  193 => 156,  188 => 155,  182 => 153,  180 => 152,  176 => 151,  172 => 150,  163 => 144,  158 => 141,  152 => 140,  140 => 138,  137 => 137,  133 => 136,  125 => 134,  123 => 133,  120 => 132,  117 => 131,  110 => 41,  107 => 40,  100 => 37,  97 => 36,  94 => 35,  91 => 34,  88 => 33,  84 => 1,  81 => 50,  79 => 49,  76 => 47,  74 => 46,  72 => 45,  70 => 44,  68 => 31,  66 => 30,  64 => 29,  62 => 28,  60 => 27,  57 => 24,  55 => 23,  51 => 20,  48 => 18,  46 => 17,  44 => 16,  42 => 15,  40 => 14,  38 => 13,  36 => 12,  34 => 11,  31 => 8,  29 => 7,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pages.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/plugins/admin/themes/grav/templates/pages.html.twig");
    }
}
