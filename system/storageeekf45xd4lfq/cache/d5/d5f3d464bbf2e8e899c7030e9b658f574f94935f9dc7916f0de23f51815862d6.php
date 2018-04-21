<?php

/* __string_template__91af4a9109ec0130465577962b6d038827a2c3e65316679507f2ee7132c502b9 */
class __TwigTemplate_a2000ff7865308b5d530419a34b8cc2e1ae8608e401e4d7c67c8251c446f6f62 extends Twig_Template
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
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 2
            echo "<div class=\"container\" style=\"width:100%\">
  <nav id=\"menu\" class=\"navbar\">
    <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">";
            // line 4
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</span>
      <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"></button>
    </div>
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      <ul class=\"nav navbar-nav\">
        <li><a href=\"";
            // line 9
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">HOME</a></li>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 11
                echo "      
        <li >
          <a href=\"";
                // line 13
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" >";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
          
        </li>

    
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "      </ul>
    </div>
  </nav>
</div>
";
        }
        // line 23
        echo " ";
    }

    public function getTemplateName()
    {
        return "__string_template__91af4a9109ec0130465577962b6d038827a2c3e65316679507f2ee7132c502b9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  59 => 19,  45 => 13,  41 => 11,  37 => 10,  33 => 9,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/* <div class="container" style="width:100%">*/
/*   <nav id="menu" class="navbar">*/
/*     <div class="navbar-header"><span id="category" class="visible-xs">{{ text_category }}</span>*/
/*       <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"></button>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*       <ul class="nav navbar-nav">*/
/*         <li><a href="{{home}}">HOME</a></li>*/
/*         {% for category in categories %}*/
/*       */
/*         <li >*/
/*           <a href="{{ category.href }}" >{{ category.name }}</a>*/
/*           */
/*         </li>*/
/* */
/*     */
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </nav>*/
/* </div>*/
/* {% endif %} */
