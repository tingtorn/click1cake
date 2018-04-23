<?php

/* __string_template__f02b238cedefe7bd224b2ceff536a4f74e7d47f2188a10045ec5de7d26eb64af */
class __TwigTemplate_19c006a8c87d02c0a0e2331e83bc626784b7b97a97dedec763d69bc24c914f78 extends Twig_Template
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
            // line 6
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</span>
      <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"></button>
    </div>
    <div  class=\"collapse navbar-collapse navbar-ex1-collapse\">
      <ul class=\"nav navbar-nav\">
        <li><a href=\"";
            // line 11
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">HOME</a></li>
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 13
                echo "      
        <li >
          <a href=\"";
                // line 15
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
            // line 21
            echo "      </ul>
    </div>
  </nav>
</div>
";
        }
        // line 25
        echo " ";
    }

    public function getTemplateName()
    {
        return "__string_template__f02b238cedefe7bd224b2ceff536a4f74e7d47f2188a10045ec5de7d26eb64af";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 25,  61 => 21,  47 => 15,  43 => 13,  39 => 12,  35 => 11,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/* */
/* <div class="container" style="width:100%">*/
/*   <nav id="menu" class="navbar navbar-default" >*/
/*     */
/*     <div class="navbar-header"><span id="category" class="visible-xs">{{ text_category }}</span>*/
/*       <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"></button>*/
/*     </div>*/
/*     <div  class="collapse navbar-collapse navbar-ex1-collapse">*/
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
