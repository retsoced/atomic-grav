<?php

/* index.html.twig */
class __TwigTemplate_647518f0e09a3d4e8807fdf5b5c0b5a204a1b67b0ca600f3cbff40db607c43e9 extends Twig_Template
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
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'header' => array($this, 'block_header'),
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
        // line 40
        echo "  </head>
  <body class=\"row searchbox-hidden ";
        // line 41
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\" data-url=\"";
        echo $this->getAttribute(($context["page"] ?? null), "route", array());
        echo "\">
    <nav class=\"topbar row\">
      <div class=\"col-3-sm col-3 left-side\">
        <a class=\"logo\" href=\"";
        // line 44
        echo (($this->getAttribute(($context["theme_config"] ?? null), "home_url", array())) ? ($this->getAttribute(($context["theme_config"] ?? null), "home_url", array())) : (($context["base_url_absolute"] ?? null)));
        echo "\">
          Pattern Library
        </a>
      </div>
        <div class=\"col-9-sm col-9 right-side\">
        ";
        // line 49
        $this->displayBlock('navbar', $context, $blocks);
        // line 52
        echo "      </div>
    </nav>

    ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "
    ";
        // line 71
        $this->displayBlock('analytics', $context, $blocks);
        // line 76
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
        $this->loadTemplate("partials/metadata.html.twig", "index.html.twig", 11)->display($context);
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
        // line 38
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
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/main.js"), "method");
        // line 35
        echo "
        ";
        // line 36
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
      ";
    }

    // line 49
    public function block_navbar($context, array $blocks = array())
    {
        // line 50
        echo "          ";
        $this->loadTemplate("partials/navbar.html.twig", "index.html.twig", 50)->display($context);
        // line 51
        echo "        ";
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        // line 56
        echo "      <section id=\"body\" class=\"col-12-sm col-12\">
        ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "      </section>
    ";
    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        // line 58
        echo "          <main class=\"large-12 columns index-pad home-page\">
            ";
        // line 59
        $this->displayBlock('header', $context, $blocks);
        // line 64
        echo "
            ";
        // line 65
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
          </main>
        ";
    }

    // line 59
    public function block_header($context, array $blocks = array())
    {
        // line 60
        echo "              <header class=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "category", array()), 0, array(), "array");
        echo "\">
                <h1 class=\"page-title\">";
        // line 61
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " ";
        }
        echo "</h1>
              </header>
            ";
    }

    // line 71
    public function block_analytics($context, array $blocks = array())
    {
        // line 72
        echo "      ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "google_analytics_code", array())) {
            // line 73
            echo "        ";
            $this->loadTemplate("partials/analytics.html.twig", "index.html.twig", 73)->display($context);
            // line 74
            echo "      ";
        }
        // line 75
        echo "    ";
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
        return array (  255 => 75,  252 => 74,  249 => 73,  246 => 72,  243 => 71,  233 => 61,  228 => 60,  225 => 59,  218 => 65,  215 => 64,  213 => 59,  210 => 58,  207 => 57,  202 => 68,  200 => 57,  197 => 56,  194 => 55,  190 => 51,  187 => 50,  184 => 49,  178 => 36,  175 => 35,  172 => 34,  169 => 33,  166 => 32,  163 => 31,  160 => 30,  157 => 29,  154 => 28,  151 => 27,  145 => 24,  142 => 23,  139 => 22,  136 => 21,  133 => 20,  130 => 19,  127 => 18,  122 => 38,  120 => 27,  117 => 26,  115 => 18,  110 => 16,  106 => 15,  102 => 14,  98 => 12,  96 => 11,  87 => 9,  84 => 8,  81 => 7,  75 => 76,  73 => 71,  70 => 70,  68 => 55,  63 => 52,  61 => 49,  53 => 44,  45 => 41,  42 => 40,  40 => 7,  35 => 5,  31 => 3,  29 => 2,  27 => 1,);
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
