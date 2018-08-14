<?php

/* partials/base.html.twig */
class __TwigTemplate_de36022553c9c18aecb73ac98e724a8193153aec0cadf7731d7a54a11c9d173c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'navbar' => array($this, 'block_navbar'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'topbar' => array($this, 'block_topbar'),
            'content' => array($this, 'block_content'),
            'navigation' => array($this, 'block_navigation'),
            'analytics' => array($this, 'block_analytics'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        $context["github_link_position"] = ((array_key_exists("github_link_position", $context)) ? (($context["github_link_position"] ?? null)) : ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", array()), "position", array())));
        // line 3
        echo "
<!DOCTYPE html>
  <html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
    <head>
    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 41
        echo "  </head>
  <body class=\"row searchbox-hidden ";
        // line 42
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\" data-url=\"";
        echo $this->getAttribute(($context["page"] ?? null), "route", array());
        echo "\">
    <nav class=\"topbar row\">
      <div class=\"col-3-sm col-3 left-side\">
        <a class=\"logo\" href=\"";
        // line 45
        echo (($this->getAttribute(($context["theme_config"] ?? null), "home_url", array())) ? ($this->getAttribute(($context["theme_config"] ?? null), "home_url", array())) : (($context["base_url_absolute"] ?? null)));
        echo "\">
          Pattern Library
        </a>
      </div>
        <div class=\"col-9-sm col-9 right-side\">
        ";
        // line 50
        $this->displayBlock('navbar', $context, $blocks);
        // line 53
        echo "      </div>
    </nav>

    ";
        // line 56
        $this->displayBlock('sidebar', $context, $blocks);
        // line 61
        echo "
    ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "
    ";
        // line 80
        $this->displayBlock('analytics', $context, $blocks);
        // line 85
        echo "  </body>
</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "      <meta charset=\"utf-8\" />
      <title>";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>

      ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no\" />
      <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 14
        echo ($context["base_url_absolute"] ?? null);
        echo "/feed:atom\" title=\"Atom Feed\" />
      <link rel=\"alternate\" type=\"application/rss+xml\" href=\"";
        // line 15
        echo ($context["base_url_absolute"] ?? null);
        echo "/feed:rss\" title=\"RSS Feed\" />
      <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\">

      ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
      ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "
    ";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/normalize.min.css", 1 => 101), "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/main.css", 1 => 100), "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/fa-svg-with-js.css", 1 => 100), "method");
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/theme.css"), "method");
        // line 23
        echo "
        ";
        // line 24
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
      ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/featherlight.min.js"), "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/clipboard.min.js"), "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.scrollbar.min.js"), "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/fontawesome-all.min.js"), "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "https://static.codepen.io/assets/embed/ei.js"), "method");
        // line 35
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/main.js"), "method");
        // line 36
        echo "
        ";
        // line 37
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
      ";
    }

    // line 50
    public function block_navbar($context, array $blocks = array())
    {
        // line 51
        echo "          ";
        $this->loadTemplate("partials/navbar.html.twig", "partials/base.html.twig", 51)->display($context);
        // line 52
        echo "        ";
    }

    // line 56
    public function block_sidebar($context, array $blocks = array())
    {
        // line 57
        echo "      <nav id=\"sidebar\" class=\"col-3-sm col-3\">
        ";
        // line 58
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 58)->display($context);
        // line 59
        echo "      </nav>
    ";
    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        // line 63
        echo "      <section id=\"body\" class=\"col-9-sm col-9\">
        <div id=\"overlay\"></div>
        <div class=\"padding\">

          ";
        // line 67
        $this->displayBlock('topbar', $context, $blocks);
        // line 72
        echo "
          ";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "        </div>

        ";
        // line 76
        $this->displayBlock('navigation', $context, $blocks);
        // line 77
        echo "      </section>
    ";
    }

    // line 67
    public function block_topbar($context, array $blocks = array())
    {
        // line 68
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 69
            echo "              ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/base.html.twig", 69)->display($context);
            // line 70
            echo "            ";
        }
        // line 71
        echo "          ";
    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
    }

    // line 76
    public function block_navigation($context, array $blocks = array())
    {
    }

    // line 80
    public function block_analytics($context, array $blocks = array())
    {
        // line 81
        echo "      ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "google_analytics_code", array())) {
            // line 82
            echo "        ";
            $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 82)->display($context);
            // line 83
            echo "      ";
        }
        // line 84
        echo "    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 84,  279 => 83,  276 => 82,  273 => 81,  270 => 80,  265 => 76,  260 => 73,  256 => 71,  253 => 70,  250 => 69,  247 => 68,  244 => 67,  239 => 77,  237 => 76,  233 => 74,  231 => 73,  228 => 72,  226 => 67,  220 => 63,  217 => 62,  212 => 59,  210 => 58,  207 => 57,  204 => 56,  200 => 52,  197 => 51,  194 => 50,  188 => 37,  185 => 36,  182 => 35,  179 => 34,  176 => 33,  173 => 32,  170 => 31,  167 => 30,  164 => 29,  161 => 28,  158 => 27,  152 => 24,  149 => 23,  146 => 22,  143 => 21,  140 => 20,  137 => 19,  134 => 18,  129 => 39,  127 => 27,  124 => 26,  122 => 18,  117 => 16,  113 => 15,  109 => 14,  105 => 12,  103 => 11,  94 => 9,  91 => 8,  88 => 7,  82 => 85,  80 => 80,  77 => 79,  75 => 62,  72 => 61,  70 => 56,  65 => 53,  63 => 50,  55 => 45,  47 => 42,  44 => 41,  42 => 7,  37 => 5,  33 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/base.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/themes/patternlibrary/templates/partials/base.html.twig");
    }
}
