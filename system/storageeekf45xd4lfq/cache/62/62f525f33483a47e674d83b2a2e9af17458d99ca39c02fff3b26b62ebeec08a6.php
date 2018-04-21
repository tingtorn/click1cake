<?php

/* __string_template__edc7a2621ba14e8759b6dd3f95668645fc5622fce7b0c878851877b64dd13e89 */
class __TwigTemplate_42feed5c43e83639ca976f343445f3efd94eb6f59663ec3045cf9a90b7325d3d extends Twig_Template
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
            echo "
<div class=\"container\" style=\"width:100%\">
  <nav id=\"menu\" class=\"navbar navbar-default\" >
    <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">";
            // line 5
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</span>
      <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"></button>
    </div>
    <div  class=\" navbar-collapse navbar-ex1-collapse\">
      <ul class=\"nav navbar-nav\">
        <li><a href=\"";
            // line 10
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">HOME</a></li>
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 12
                echo "      
        <li >
          <a href=\"";
                // line 14
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
            // line 20
            echo "      </ul>
    </div>
  </nav>
</div>
";
        }
        // line 24
        echo " ";
    }

    public function getTemplateName()
    {
        return "__string_template__edc7a2621ba14e8759b6dd3f95668645fc5622fce7b0c878851877b64dd13e89";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 24,  60 => 20,  46 => 14,  42 => 12,  38 => 11,  34 => 10,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/* */
/* <div class="container" style="width:100%">*/
/*   <nav id="menu" class="navbar navbar-default" >*/
/*     <div class="navbar-header"><span id="category" class="visible-xs">{{ text_category }}</span>*/
/*       <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"></button>*/
/*     </div>*/
/*     <div  class=" navbar-collapse navbar-ex1-collapse">*/
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
