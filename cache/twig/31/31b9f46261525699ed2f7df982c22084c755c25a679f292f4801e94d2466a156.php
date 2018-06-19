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
            'footer' => array($this, 'block_footer'),
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
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 35
        echo "</head>
<body class=\"row searchbox-hidden ";
        // line 36
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\" data-url=\"";
        echo $this->getAttribute(($context["page"] ?? null), "route", array());
        echo "\">
  <nav class=\"topbar row\">
    <div class=\"col-3-sm col-3 left-side\">
      <a id=\"logo\" href=\"";
        // line 39
        echo (($this->getAttribute(($context["theme_config"] ?? null), "home_url", array())) ? ($this->getAttribute(($context["theme_config"] ?? null), "home_url", array())) : (($context["base_url_absolute"] ?? null)));
        echo "\">
        <svg id=\"logo-svg\" viewBox=\"0 0 444 102\" style=\"background-color:#ffffff00\" version=\"1.1\"
          xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xml:space=\"preserve\"
          x=\"0px\" y=\"0px\" width=\"50%\">
          <path d=\"m87.503 53.977h-10.642c-1.616 0-2.93 1.315-2.93 2.936v20.418l-0.21 0.175c-6.263 5.278-14.182 8.18-22.297 8.18-19.144 0-34.719-15.559-34.719-34.685 0-19.128 15.575-34.684 34.719-34.684 7.444 0 14.562 2.353 20.587 6.811 1.169 0.865 2.792 0.746 3.822-0.28l7.588-7.58c0.592-0.588 0.901-1.406 0.853-2.24-0.046-0.834-0.448-1.607-1.104-2.127-9.016-7.1443-20.29-11.076-31.746-11.076-28.246 0.0001-51.228 22.958-51.228 51.176-0.0005 28.219 22.982 51.179 51.228 51.179 14.584 0 28.534-6.273 38.27-17.208 0.479-0.536 0.742-1.227 0.742-1.945v-26.114c0-1.621-1.314-2.936-2.933-2.936z\"/>
          <path d=\"m443.52 4.529c-0.54-0.8206-1.47-1.3182-2.45-1.3182h-11.58c-1.17 0-2.23 0.6957-2.7 1.7704l-32.65 75.721-33.23-75.738c-0.47-1.0634-1.52-1.7532-2.68-1.7532h-11.62c-1 0-1.92 0.4976-2.46 1.3265-0.55 0.8288-0.64 1.8753-0.23 2.7832l40.25 91.732c0.47 1.068 1.53 1.758 2.69 1.758h14.66c1.17 0 2.23-0.71 2.7-1.775l39.54-91.734c0.39-0.9055 0.3-1.9466-0.24-2.772z\"/>
          <path d=\"m291.34 4.9642c-0.47-1.0636-1.52-1.7534-2.69-1.7534h-14.65c-1.17 0-2.23 0.6957-2.7 1.7704l-39.54 91.735c-0.39 0.9-0.3 1.946 0.24 2.766 0.54 0.828 1.46 1.328 2.45 1.328h11.58c1.17 0 2.23-0.71 2.7-1.775l32.64-75.723 33.24 75.74c0.47 1.068 1.52 1.758 2.68 1.758h11.63c0.99 0 1.92-0.5 2.45-1.328 0.55-0.831 0.63-1.878 0.24-2.788l-40.27-91.73z\"/>
          <path d=\"m185.34 67.248l0.64-0.306c11.56-5.583 19.04-17.434 19.04-30.196 0-18.491-15.06-33.535-33.58-33.535l-42.49-0.0002c-1.62 0-2.93 1.3153-2.93 2.933v91.726c0 1.624 1.31 2.94 2.93 2.94h10.64c1.62 0 2.94-1.316 2.94-2.94v-78.17h28.91c9.42 0 17.07 7.645 17.07 17.046 0 7.84-5.33 14.64-12.97 16.53-1.38 0.348-2.75 0.523-4.1 0.523h-10.64c-1.1 0-2.11 0.622-2.61 1.607-0.5 0.984-0.4 2.164 0.25 3.057l30.17 41.143c0.55 0.754 1.43 1.204 2.36 1.204h13.22c1.11 0 2.12-0.63 2.62-1.611 0.5-0.989 0.4-2.172-0.25-3.06l-21.22-28.891z\"/>
        </svg>
      </a>
    </div>
    <div class=\"col-9-sm col-9 right-side\">
      ";
        // line 51
        $this->displayBlock('navbar', $context, $blocks);
        // line 54
        echo "    </div>
  </nav>
    ";
        // line 56
        $this->displayBlock('sidebar', $context, $blocks);
        // line 61
        echo "
    ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "    ";
        $this->displayBlock('analytics', $context, $blocks);
        // line 92
        echo " </body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
    ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 11
        echo ($context["base_url_absolute"] ?? null);
        echo "/feed:atom\" title=\"Atom Feed\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"";
        // line 12
        echo ($context["base_url_absolute"] ?? null);
        echo "/feed:rss\" title=\"RSS Feed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\">

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
    ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "
    ";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/normalize.min.css", 1 => 101), "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/main.css", 1 => 100), "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/theme.css"), "method");
        // line 20
        echo "
        ";
        // line 21
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
    ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/featherlight.min.js"), "method");
        // line 28
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/clipboard.min.js"), "method");
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.scrollbar.min.js"), "method");
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/main.js"), "method");
        // line 31
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
    ";
    }

    // line 51
    public function block_navbar($context, array $blocks = array())
    {
        // line 52
        echo "          ";
        $this->loadTemplate("partials/navbar.html.twig", "partials/base.html.twig", 52)->display($context);
        // line 53
        echo "      ";
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
        echo "    <section id=\"body\" class=\"col-9-sm col-9\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>

            ";
        // line 69
        $this->displayBlock('topbar', $context, $blocks);
        // line 74
        echo "
            ";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "
            ";
        // line 77
        $this->displayBlock('footer', $context, $blocks);
        // line 82
        echo "
        </div>
        ";
        // line 84
        $this->displayBlock('navigation', $context, $blocks);
        // line 85
        echo "    </section>
    ";
    }

    // line 69
    public function block_topbar($context, array $blocks = array())
    {
        // line 70
        echo "              ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 71
            echo "                  ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/base.html.twig", 71)->display($context);
            // line 72
            echo "              ";
        }
        // line 73
        echo "            ";
    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        // line 78
        echo "                ";
        if ((($context["github_link_position"] ?? null) == "bottom")) {
            // line 79
            echo "                ";
            $this->loadTemplate("partials/github_note.html.twig", "partials/base.html.twig", 79)->display($context);
            // line 80
            echo "                ";
        }
        // line 81
        echo "            ";
    }

    // line 84
    public function block_navigation($context, array $blocks = array())
    {
    }

    // line 87
    public function block_analytics($context, array $blocks = array())
    {
        // line 88
        echo "        ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "google_analytics_code", array())) {
            // line 89
            echo "        ";
            $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 89)->display($context);
            // line 90
            echo "        ";
        }
        // line 91
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
        return array (  299 => 91,  296 => 90,  293 => 89,  290 => 88,  287 => 87,  282 => 84,  278 => 81,  275 => 80,  272 => 79,  269 => 78,  266 => 77,  261 => 75,  257 => 73,  254 => 72,  251 => 71,  248 => 70,  245 => 69,  240 => 85,  238 => 84,  234 => 82,  232 => 77,  229 => 76,  227 => 75,  224 => 74,  222 => 69,  214 => 63,  211 => 62,  206 => 59,  204 => 58,  201 => 57,  198 => 56,  194 => 53,  191 => 52,  188 => 51,  181 => 31,  178 => 30,  175 => 29,  172 => 28,  169 => 27,  166 => 26,  163 => 25,  160 => 24,  154 => 21,  151 => 20,  148 => 19,  145 => 18,  142 => 17,  139 => 16,  136 => 15,  131 => 33,  129 => 24,  126 => 23,  124 => 15,  119 => 13,  115 => 12,  111 => 11,  108 => 10,  106 => 9,  98 => 8,  95 => 7,  92 => 6,  86 => 92,  83 => 87,  81 => 62,  78 => 61,  76 => 56,  72 => 54,  70 => 51,  55 => 39,  47 => 36,  44 => 35,  42 => 6,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
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
