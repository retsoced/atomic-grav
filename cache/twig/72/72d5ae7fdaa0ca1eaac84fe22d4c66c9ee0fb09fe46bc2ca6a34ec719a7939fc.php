<?php

/* macros/micro-pattern-list.html.twig */
class __TwigTemplate_c9a2e52ee1663919212502eabebad814d23051bf8d57c86353fd0d57de92ddc7 extends Twig_Template
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
        // line 17
        echo "
";
    }

    // line 18
    public function getmicroPattern($__mpNames__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "mpNames" => $__mpNames__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 19
            echo "
  <section class=\"micro-patterns\">
    <header>
      <h3><i class=\"fa fa-cubes\"></i> Micro-patterns</h3>
      <hr>
    </header>
    <article>
      <table class=\"definition-table\">
        <thead>
          <tr>
            <th class=\"title\">Title</th>
            <th class=\"link\">Link</th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", array(0 => array("category" => array(0 => "patterns"))), "method"));
            foreach ($context['_seq'] as $context["i"] => $context["mpost"]) {
                // line 35
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["mpNames"] ?? null));
                foreach ($context['_seq'] as $context["j"] => $context["name"]) {
                    // line 36
                    echo "            ";
                    if (($context["name"] == $this->getAttribute($context["mpost"], "title", array()))) {
                        // line 37
                        echo "            <tr>
              <td class=\"title\">";
                        // line 38
                        echo $context["name"];
                        echo "</td>
              <td class=\"link\"><i class=\"fa fa-rocket\"></i> <a href=\"";
                        // line 39
                        echo $this->getAttribute($context["mpost"], "url", array());
                        echo "\" title=\"view the ";
                        echo $this->getAttribute($context["mpost"], "title", array());
                        echo " micro-pattern\">view it!</a></td>
            </tr>
            ";
                    }
                    // line 42
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['j'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['mpost'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </tbody>
      </table>
    </article>
  </section>

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

    public function getTemplateName()
    {
        return "macros/micro-pattern-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 44,  86 => 43,  80 => 42,  72 => 39,  68 => 38,  65 => 37,  62 => 36,  57 => 35,  53 => 34,  36 => 19,  24 => 18,  19 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "macros/micro-pattern-list.html.twig", "/Users/deltaecho3/Development/grav-pattern-library-template/user/themes/patternlibrary/templates/macros/micro-pattern-list.html.twig");
    }
}
