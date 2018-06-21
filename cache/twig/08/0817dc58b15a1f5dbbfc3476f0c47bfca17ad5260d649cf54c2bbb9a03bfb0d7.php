<?php

/* forms/fields/facebook/facebook.html.twig */
class __TwigTemplate_70a34e3cde7f82d513cb64bc45e8a8ea024fd9abe5d8e0284dc6d1e02260c92a extends Twig_Template
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
        echo "   <div class=\"f-card\">
  <div class=\"header\">
    <div class=\"options\"><i class=\"fa fa-chevron-down\"></i></div>
    <img class=\"co-logo\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["media"] ?? null), "user://plugins/seo/assets/logofacebook.jpg", array(), "array"), "resize", array(0 => 50, 1 => 50), "method"), "url", array(), "method"), "html", null, true);
        echo "\" />
    <div class=\"co-name\"><a href=\"#\">Facebook Team</a></div>
    <div class=\"time\"><a href=\"#\">";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "j M, g:ia"), "html", null, true);
        echo "</a> · <i class=\"fa fa-globe\"></i></div>
  </div>
  <div class=\"facebookcontent\">
    <p>Here is how this page will look when shared on facebook.</p>
  </div>

  <div class=\"reference\">
    <img class=\"reference-thumb\" id=\"liveimg\" src=\"";
        // line 22
        if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "facebookimg", array())) {
            echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "facebookimg", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "media", array()), "images", array())), "url", array()), "html", null, true);
        }
        echo "\" />
    <div class=\"reference-content\">
      <div class=\"reference-title\" id=\"facebooktargtitle\">";
        // line 24
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array(), "any", false, true), "facebooktitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array(), "any", false, true), "facebooktitle", array()), (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "title", array()) . " | ") . $this->getAttribute(($context["site"] ?? null), "title", array())))) : ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "title", array()) . " | ") . $this->getAttribute(($context["site"] ?? null), "title", array())))), "html", null, true);
        echo "</div>
      <div class=\"reference-subtitle\" id=\"facebooktargdesc\">";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array(), "any", false, true), "facebookdesc", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array(), "any", false, true), "facebookdesc", array()), strip_tags($this->getAttribute(($context["context"] ?? null), "summary", array())))) : (strip_tags($this->getAttribute(($context["context"] ?? null), "summary", array())))), "html", null, true);
        echo "</div>
      <div class=\"reference-font\">";
        // line 26
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["uri"] ?? null), "host", array()), array("http://" => "", "/" => " › ")), "html", null, true);
        echo "</div>
    </div>
  </div>
  <div class=\"social\">
    <div class=\"social-content\"></div>
    <div class=\"social-buttons\">
      <span><i class=\"fa fa-thumbs-up\"></i>Like</span>
      <span><i class=\"fa fa-comment\"></i>Comment</span>
      <span><i class=\"fa fa-share\"></i>Share</span></div>
  </div>
</div>
<div id=\"fbcount\" style=\"text-align:center\"></div>
<style>

*, *:before, *:after {
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}


.f-card {
  background-color:white;
  /*height:400px;*/
  width:502px;
  border: 1px solid #d0d1d5;
  border-radius:3px;
  margin: auto;
  margin-bottom:10px;
  padding: 12px; 
  
  box-shadow: 0 0 5px rgba(0, 0, 0, .30); /* Not original, just a test */
}

.header {
  margin-bottom:17px;
}

.co-logo {
  /*display:block;*/
  float:left;
  margin-right:8px;
  
  width:40px;
  height:40px;
}

.co-name > a {
  font-family: Helvetica;
  font-size:14px;
  font-weight: bold;
  line-height: 1.38;
  color: #365899;
  text-decoration:none;
  
  margin-bottom:2px;
}

.co-name > a:hover {
  text-decoration:underline;
}

.time {
  font-family: Helvetica;
  font-size:12px;
  color: #90949c;
}

.time > a {
  color: #90949c;
  text-decoration:none;
}

.time > a:hover {
  text-decoration:underline;
}

.options {
  font-family: Helvetica;
  font-size:12px;
  color: #e5e5e5;
  float:right;
}

.options:hover {
  color: black; /* Fallback */
  color: rgba(0, 0, 0, .30);
}

.content {
  clear:both;
  font-family: Helvetica, sans-serif;
  font-size:14px;
  line-height: 1.38;
}

.reference {
  width:476px;
}
.reference-thumb {
  display:block;
  width:476px;
  height:auto;
}

.reference-content {
  border: 2px solid black;
  border: 2px solid rgba(0, 0, 0, .1);
  border-top: 0;
  padding: 10px 12px 10px 12px;
}

.reference:hover .reference-content {
  border-color: black; /* Fallback */
  border-color: rgba(0, 0, 0, .15);
}

.reference-title {
  font-family: Georgia;
  font-size: 18px;
  font-weight: 500;
  line-height: 22px;
  
  margin-bottom:5px;
}

.reference-subtitle {
  font-family: Helvetica;
  font-size:12px;
  line-height: 16px; 
}

.reference-font {
  color: #90949c;
  font-family: Helvetica;
  font-size: 11px;
  line-height: 11px;
  text-transform: uppercase;

  padding-top:9px; 
}

.social {
  margin-top:12px;
}
.social-buttons {
  color: #7f7f7f;
  font-family: Helvetica;
  font-size: 12px;
  font-weight:bold;
  line-height:14px;
  
  border-top:1px solid #e5e5e5;
  padding-top:4px;
  
}

.social-buttons span {
  font-size: 12px;
  margin-right:20px;
  padding:4px 4px 4px 0;
}

.social-buttons span:hover {
  text-decoration:underline;
  cursor:pointer;
}

.social-buttons span i {
  padding-right:4px;
}</style>
<script type=\"text/javascript\">
\$('#facebooktitle').keyup(function(){
  var keyed = \$(this).val();\$(\"#facebooktargtitle\").html(keyed); 
  
});\$('#facebookdesc').keyup(function(){var keyed = \$(this).val();\$(\"#facebooktargdesc\").html(keyed);
   \$(\"#fbcount\").text(\"Characters left: \" + (300 - \$(this).val().length));
});
\$('#fbimgselect').on('click', function() {
   \$('.js__media-element').on('click', function() {
      var valueselect = \$(this).attr(\"data-file-url\") ;
      var newimg = \"";
        // line 207
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "\" + valueselect ;
      \$('#liveimg').attr(\"src\", newimg);
   });
  
})

</script>
<script>
function validatepage() {
   var protocol = location.protocol;
 var slashes = protocol.concat(\"//\");
 var host = slashes.concat(window.location.hostname);
 var structuredurl = \"https://search.google.com/structured-data/testing-tool/u/0/#url=\"
 var targeturl = \$(\"[title|='";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW"), "html", null, true);
        echo "']\").attr(\"href\");
 var validateurl = structuredurl + encodeURIComponent(host + targeturl);
   window.open(validateurl, '_blank')
}

</script>
    ";
        // line 226
        if ($this->getAttribute(($context["field"] ?? null), "text", array())) {
            // line 227
            echo "    ";
        }
        // line 228
        echo "
    ";
        // line 229
        if ($this->getAttribute(($context["field"] ?? null), "fields", array())) {
            // line 230
            echo "        <div class=\"form-section ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "field_classes", array()), "html", null, true);
            echo "\">
        ";
            // line 231
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
                // line 232
                echo "            ";
                if ($this->getAttribute($context["field"], "type", array())) {
                    // line 233
                    echo "                ";
                    $context["value"] = $this->getAttribute(($context["data"] ?? null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                    // line 234
                    echo "                ";
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/facebook/facebook.html.twig", 234)->display($context);
                    // line 235
                    echo "            ";
                }
                // line 236
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
            // line 237
            echo "        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/facebook/facebook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 237,  343 => 236,  340 => 235,  337 => 234,  334 => 233,  331 => 232,  314 => 231,  309 => 230,  307 => 229,  304 => 228,  301 => 227,  299 => 226,  290 => 220,  274 => 207,  90 => 26,  86 => 25,  82 => 24,  70 => 22,  60 => 15,  55 => 13,  50 => 10,  48 => 9,  45 => 8,  31 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/facebook/facebook.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/plugins/seo/templates/forms/fields/facebook/facebook.html.twig");
    }
}
