<?php

/* forms/fields/twitter/twitter.html.twig */
class __TwigTemplate_d1206dda2d6cbe4d0ffb627520fe21cc22131a3362aac89a9ad845f1b33e1ee8 extends Twig_Template
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
        echo "
";
        // line 2
        if ($this->getAttribute(($context["admin"] ?? null), "route", array())) {
            // line 3
            echo "    ";
            $context["context"] = $this->getAttribute(($context["admin"] ?? null), "page", array(0 => true), "method");
        }
        // line 5
        echo "    ";
        if (($this->getAttribute(($context["field"] ?? null), "title", array()) || $this->getAttribute(($context["field"] ?? null), "underline", array()))) {
            // line 6
            echo "    <h1 ";
            if ( !$this->getAttribute(($context["field"] ?? null), "underline", array())) {
                echo "class=\"no_underline\"";
            }
            echo ">";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "title", array())), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "title", array())), "html", null, true);
            }
            echo "</h1>
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        $context["context"] = $this->getAttribute(($context["admin"] ?? null), "page", array(0 => true), "method");
        // line 10
        echo "    <div class=\"tweetcontainer\"><div class=\"tweet-card\"> <div class=\"tweethead\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["media"] ?? null), "user://plugins/seo/assets/twitter.png", array(), "array"), "resize", array(0 => 50, 1 => 50), "method"), "url", array(), "method"), "html", null, true);
        echo "\" width=\"50\" height=\"50\" class=\"twitterimg\"> <span class=\"twitterusername\">Twitter team <br><span class=\"twitternick\">@twitter</span></span> </div><blockquote class=\"twitter-tweet\"> 
    <p class=\"twittcontent\"> Here is how this page will looks once shared on twitter. </p>
    <div class=\"SummaryCardContainer\"> <div class=\"SummaryCard\">
         <img id=\"twittliveimg\" src=\"";
        // line 13
        if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "twittershareimg", array())) {
            echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "twittershareimg", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "media", array()), "images", array())), "url", array()), "html", null, true);
        }
        echo "\" width=\"100%\">
    <div class=\"cardtext\">
         <h2 class=\"cardtitle\" id=\"titletwtarget\">
         ";
        // line 16
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array(), "any", false, true), "twittertitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array(), "any", false, true), "twittertitle", array()), (($this->getAttribute(($context["context"] ?? null), "title", array()) . " | ") . $this->getAttribute(($context["site"] ?? null), "title", array())))) : ((($this->getAttribute(($context["context"] ?? null), "title", array()) . " | ") . $this->getAttribute(($context["site"] ?? null), "title", array())))), "html", null, true);
        echo "
        </h2>
        <p style=\"padding:0px;\" id=\"twittdesc\">";
        // line 18
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array(), "any", false, true), "twitterdescription", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array(), "any", false, true), "twitterdescription", array()), \Grav\Common\Utils::truncate(strip_tags($this->getAttribute(($context["context"] ?? null), "summary", array())), 140))) : (\Grav\Common\Utils::truncate(strip_tags($this->getAttribute(($context["context"] ?? null), "summary", array())), 140))), "html", null, true);
        echo "</p>
        <span class=\"sitename\">";
        // line 19
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["uri"] ?? null), "host", array()), array("http://" => "", "/" => " › ")), "html", null, true);
        echo "</span>
    </div></div></div></blockquote>
    <span class=\"iconcontainer\"> <i class=\"fa fa-reply twittericon\"></i> <i class=\"fa fa-heart twittericon\"></i><i class=\"fa fa-retweet twittericon\"></i></span></div></div> <div id=\"twittcount\"></div>
    
    <style> .tweet-card{min-height:180px;width:31%;min-width:500px}.SummaryCardContainer{border:1px solid #e1e8ed;border-radius:8px;width:95%}blockquote{font-size:17.5px; border-left:0px!important;}.tweet-card{padding:0 0 6px;margin: auto;background:#fff;border:1px solid #e1e8ed;border-radius:5px}.cardtext{padding:1em;font-family:arial}.cardtitle{margin:0 0 .15em;font-size:1em;font-weight:700}.sitename{color:#8899A6}.usertwitt{color:#2b7bb9}.twittcontent{font-family:arial; padding: 0 1rem!important; background-color:#fff;white-space:normal;color:#1c2022;clear:left;padding-top:17px}.twittericon{color:grey;margin-left:15px}.iconcontainer{padding-left:25px}.twitterimg{border-radius:6px;margin-top:19px;margin-left:39px;float:left}.twitterusername{font-weight:700;font-family:arial;padding-top:15px;padding-left:15px;float:left}.twitternick{font-weight:500;color:grey;padding-top:3px}</style>
    
    <script type=\"text/javascript\">\$('#twittertitle').keyup(function(){var keyed = \$(this).val();\$(\"#titletwtarget\").html(keyed); });\$('#twitterdescription').keyup(function(){var keyed = \$(this).val();\$(\"#twittdesc\").html(keyed);
         \$(\"#twittcount\").text(\"Characters left: \" + (140 - \$(this).val().length));
    
        
    });
    \$('#twittimgselect').on('click', function() {
        console.log(\"inputclick\");
        \$('.js__media-element').on('click', function() {
        
          var valueselect = \$(this).attr(\"data-file-url\") ;
          var newimg = \"";
        // line 35
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "\" + valueselect ;
          \$('#twittliveimg').attr(\"src\", newimg);
          console.log(newimg);
        });
    }
    )


    </script>
    ";
        // line 44
        if ($this->getAttribute(($context["field"] ?? null), "text", array())) {
            // line 45
            echo "    ";
        }
        // line 46
        echo "
    ";
        // line 47
        if ($this->getAttribute(($context["field"] ?? null), "fields", array())) {
            // line 48
            echo "        <div class=\"form-section ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "field_classes", array()), "html", null, true);
            echo "\">
        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 50
                echo "            ";
                if ($this->getAttribute($context["field"], "type", array())) {
                    // line 51
                    echo "                ";
                    $context["value"] = $this->getAttribute(($context["data"] ?? null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                    // line 52
                    echo "                ";
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/twitter/twitter.html.twig", 52)->display($context);
                    // line 53
                    echo "            ";
                }
                // line 54
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/twitter/twitter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 55,  154 => 54,  151 => 53,  148 => 52,  145 => 51,  142 => 50,  125 => 49,  120 => 48,  118 => 47,  115 => 46,  112 => 45,  110 => 44,  98 => 35,  79 => 19,  75 => 18,  70 => 16,  57 => 13,  50 => 10,  48 => 9,  45 => 8,  31 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/twitter/twitter.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/plugins/seo/templates/forms/fields/twitter/twitter.html.twig");
    }
}
