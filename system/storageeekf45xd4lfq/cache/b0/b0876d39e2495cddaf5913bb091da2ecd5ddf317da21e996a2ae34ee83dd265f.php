<?php

/* default/template/checkout/confirm.twig */
class __TwigTemplate_68631c75f1bdeabe25008d4eec931c690ddbcc883bf804b74ddcd205bedf45b4 extends Twig_Template
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
        if ( !(isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 2
            echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-left\">";
            // line 6
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</td>

        <td class=\"text-left\">";
            // line 8
            echo (isset($context["column_image"]) ? $context["column_image"] : null);
            echo "</td>
          
        <td class=\"text-left\">";
            // line 10
            echo (isset($context["column_model"]) ? $context["column_model"] : null);
            echo "</td>
        <td class=\"text-right\">";
            // line 11
            echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
            echo "</td>
        <td class=\"text-right\">";
            // line 12
            echo (isset($context["column_price"]) ? $context["column_price"] : null);
            echo "</td>
        <td class=\"text-right\">";
            // line 13
            echo (isset($context["column_total"]) ? $context["column_total"] : null);
            echo "</td>
      </tr>
    </thead>
    <tbody>
    
    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 19
                echo "    <tr>
      <td class=\"text-left\"><a href=\"";
                // line 20
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
        &nbsp;<small> - ";
                    // line 21
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "        ";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    echo " <br />
        <span class=\"label label-info\">";
                    // line 23
                    echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                    echo "</span> <small>";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small> ";
                }
                echo "</td>

      <td class=\"text-left\"><img src=\"";
                // line 25
                echo $this->getAttribute($context["product"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-thumbnail\" /></td>
          
      <td class=\"text-left\">";
                // line 27
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
      <td class=\"text-right\">";
                // line 28
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
      <td class=\"text-right\">";
                // line 29
                echo $this->getAttribute($context["product"], "price", array());
                echo "</td>
      <td class=\"text-right\">";
                // line 30
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 34
                echo "    <tr>
      <td class=\"text-left\">";
                // line 35
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
      <td class=\"text-left\"></td>
      <td class=\"text-right\">1</td>
      <td class=\"text-right\">";
                // line 38
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
      <td class=\"text-right\">";
                // line 39
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "      </tbody>
    
    <tfoot>
    
    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 47
                echo "    <tr>
      
          <td colspan=\"5\" class=\"text-right\"><strong>";
                // line 49
                echo $this->getAttribute($context["total"], "title", array());
                echo ":</strong></td>
            
      <td class=\"text-right\">";
                // line 51
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "      </tfoot>
    
  </table>
</div>
";
            // line 58
            echo (isset($context["payment"]) ? $context["payment"] : null);
            echo "
";
        } else {
            // line 59
            echo " 
<script type=\"text/javascript\"><!--
location = '";
            // line 61
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "';
//--></script> 
";
        }
        // line 63
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 63,  197 => 61,  193 => 59,  188 => 58,  182 => 54,  173 => 51,  168 => 49,  164 => 47,  160 => 46,  154 => 42,  145 => 39,  141 => 38,  135 => 35,  132 => 34,  127 => 33,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  97 => 25,  88 => 23,  83 => 22,  74 => 21,  64 => 20,  61 => 19,  57 => 18,  49 => 13,  45 => 12,  41 => 11,  37 => 10,  32 => 8,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% if not redirect %}*/
/* <div class="table-responsive">*/
/*   <table class="table table-bordered table-hover">*/
/*     <thead>*/
/*       <tr>*/
/*         <td class="text-left">{{ column_name }}</td>*/
/* */
/*         <td class="text-left">{{ column_image }}</td>*/
/*           */
/*         <td class="text-left">{{ column_model }}</td>*/
/*         <td class="text-right">{{ column_quantity }}</td>*/
/*         <td class="text-right">{{ column_price }}</td>*/
/*         <td class="text-right">{{ column_total }}</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     */
/*     {% for product in products %}*/
/*     <tr>*/
/*       <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a> {% for option in product.option %} <br />*/
/*         &nbsp;<small> - {{ option.name }}: {{ option.value }}</small> {% endfor %}*/
/*         {% if product.recurring %} <br />*/
/*         <span class="label label-info">{{ text_recurring_item }}</span> <small>{{ product.recurring }}</small> {% endif %}</td>*/
/* */
/*       <td class="text-left"><img src="{{ product.image }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /></td>*/
/*           */
/*       <td class="text-left">{{ product.model }}</td>*/
/*       <td class="text-right">{{ product.quantity }}</td>*/
/*       <td class="text-right">{{ product.price }}</td>*/
/*       <td class="text-right">{{ product.total }}</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*     {% for voucher in vouchers %}*/
/*     <tr>*/
/*       <td class="text-left">{{ voucher.description }}</td>*/
/*       <td class="text-left"></td>*/
/*       <td class="text-right">1</td>*/
/*       <td class="text-right">{{ voucher.amount }}</td>*/
/*       <td class="text-right">{{ voucher.amount }}</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*       </tbody>*/
/*     */
/*     <tfoot>*/
/*     */
/*     {% for total in totals %}*/
/*     <tr>*/
/*       */
/*           <td colspan="5" class="text-right"><strong>{{ total.title }}:</strong></td>*/
/*             */
/*       <td class="text-right">{{ total.text }}</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*       </tfoot>*/
/*     */
/*   </table>*/
/* </div>*/
/* {{ payment }}*/
/* {% else %} */
/* <script type="text/javascript"><!--*/
/* location = '{{ redirect }}';*/
/* //--></script> */
/* {% endif %} */
