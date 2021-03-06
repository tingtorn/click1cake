<?php

/* sale/order_shipping.twig */
class __TwigTemplate_b5f32299bb42a2d82b41398ef15e2b2397e1f025a5b157f687f8fcbc474d1f0a extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<title>";
        // line 5
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 6
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
<link href=\"view/javascript/bootstrap/css/bootstrap.css\" rel=\"stylesheet\" media=\"all\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"all\" />
</head>
<body>
<div class=\"container\">
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 16
            echo "  <div style=\"page-break-after: always;\">
    <h1>";
            // line 17
            echo (isset($context["text_picklist"]) ? $context["text_picklist"] : null);
            echo " #";
            echo $this->getAttribute($context["order"], "order_id", array());
            echo "</h1>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td colspan=\"2\">";
            // line 21
            echo (isset($context["text_order_detail"]) ? $context["text_order_detail"] : null);
            echo "</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><address>
            <strong>";
            // line 27
            echo $this->getAttribute($context["order"], "store_name", array());
            echo "</strong><br />
            ";
            // line 28
            echo $this->getAttribute($context["order"], "store_address", array());
            echo "
            </address>
            <b>";
            // line 30
            echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
            echo "</b> ";
            echo $this->getAttribute($context["order"], "store_telephone", array());
            echo "<br />
            <b>";
            // line 31
            echo (isset($context["text_email"]) ? $context["text_email"] : null);
            echo "</b> ";
            echo $this->getAttribute($context["order"], "store_email", array());
            echo "<br />
            <b>";
            // line 32
            echo (isset($context["text_website"]) ? $context["text_website"] : null);
            echo "</b> <a href=\"";
            echo $this->getAttribute($context["order"], "store_url", array());
            echo "\">";
            echo $this->getAttribute($context["order"], "store_url", array());
            echo "</a></td>
          <td style=\"width: 50%;\"><b>";
            // line 33
            echo (isset($context["text_date_added"]) ? $context["text_date_added"] : null);
            echo "</b> ";
            echo $this->getAttribute($context["order"], "date_added", array());
            echo "<br />
            ";
            // line 34
            if ($this->getAttribute($context["order"], "invoice_no", array())) {
                // line 35
                echo "            <b>";
                echo (isset($context["text_invoice_no"]) ? $context["text_invoice_no"] : null);
                echo "</b> ";
                echo $this->getAttribute($context["order"], "invoice_no", array());
                echo "<br />
            ";
            }
            // line 37
            echo "            <b>";
            echo (isset($context["text_order_id"]) ? $context["text_order_id"] : null);
            echo "</b> ";
            echo $this->getAttribute($context["order"], "order_id", array());
            echo "<br />
            ";
            // line 38
            if ($this->getAttribute($context["order"], "shipping_method", array())) {
                // line 39
                echo "            <b>";
                echo (isset($context["text_shipping_method"]) ? $context["text_shipping_method"] : null);
                echo "</b> ";
                echo $this->getAttribute($context["order"], "shipping_method", array());
                echo "<br />
            ";
            }
            // line 40
            echo "</td>
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td style=\"width: 50%;\"><b>";
            // line 47
            echo (isset($context["text_shipping_address"]) ? $context["text_shipping_address"] : null);
            echo "</b></td>
          <td style=\"width: 50%;\"><b>";
            // line 48
            echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
            echo "</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>";
            // line 53
            echo $this->getAttribute($context["order"], "shipping_address", array());
            echo "</td>
          <td>";
            // line 54
            echo $this->getAttribute($context["order"], "email", array());
            echo "<br/>
            ";
            // line 55
            echo $this->getAttribute($context["order"], "telephone", array());
            echo "</td>
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td><b>";
            // line 62
            echo (isset($context["column_location"]) ? $context["column_location"] : null);
            echo "</b></td>
          <td><b>";
            // line 63
            echo (isset($context["column_reference"]) ? $context["column_reference"] : null);
            echo "</b></td>
          <td><b>";
            // line 64
            echo (isset($context["column_product"]) ? $context["column_product"] : null);
            echo "</b></td>
          <td><b>";
            // line 65
            echo (isset($context["column_weight"]) ? $context["column_weight"] : null);
            echo "</b></td>

        <td><b>";
            // line 67
            echo (isset($context["column_image"]) ? $context["column_image"] : null);
            echo "</b></td>
          
          <td><b>";
            // line 69
            echo (isset($context["column_model"]) ? $context["column_model"] : null);
            echo "</b></td>
          <td class=\"text-right\"><b>";
            // line 70
            echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
            echo "</b></td>
        </tr>
      </thead>
      <tbody>
        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["order"], "product", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 75
                echo "        <tr>
          <td>";
                // line 76
                echo $this->getAttribute($context["product"], "location", array());
                echo "</td>
          <td>";
                // line 77
                if ($this->getAttribute($context["product"], "sku", array())) {
                    // line 78
                    echo "            ";
                    echo (isset($context["text_sku"]) ? $context["text_sku"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "sku", array());
                    echo "<br />
            ";
                }
                // line 80
                echo "            ";
                if ($this->getAttribute($context["product"], "upc", array())) {
                    // line 81
                    echo "            ";
                    echo (isset($context["text_upc"]) ? $context["text_upc"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "upc", array());
                    echo "<br />
            ";
                }
                // line 83
                echo "            ";
                if ($this->getAttribute($context["product"], "ean", array())) {
                    // line 84
                    echo "            ";
                    echo (isset($context["text_ean"]) ? $context["text_ean"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "ean", array());
                    echo "<br />
            ";
                }
                // line 86
                echo "            ";
                if ($this->getAttribute($context["product"], "jan", array())) {
                    // line 87
                    echo "            ";
                    echo (isset($context["text_jan"]) ? $context["text_jan"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "jan", array());
                    echo "<br />
            ";
                }
                // line 89
                echo "            ";
                if ($this->getAttribute($context["product"], "isbn", array())) {
                    // line 90
                    echo "            ";
                    echo (isset($context["text_isbn"]) ? $context["text_isbn"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "isbn", array());
                    echo "<br />
            ";
                }
                // line 92
                echo "            ";
                if ($this->getAttribute($context["product"], "mpn", array())) {
                    // line 93
                    echo "            ";
                    echo (isset($context["text_mpn"]) ? $context["text_mpn"] : null);
                    echo $this->getAttribute($context["product"], "mpn", array());
                    echo "<br />
            ";
                }
                // line 94
                echo "</td>
          <td>";
                // line 95
                echo $this->getAttribute($context["product"], "name", array());
                echo "
            ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 97
                    echo "            <br />
            &nbsp;<small> - ";
                    // line 98
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "</td>
          <td>";
                // line 100
                echo $this->getAttribute($context["product"], "weight", array());
                echo "</td>

       <td class=\"text-conter\"><img src=\"";
                // line 102
                echo $this->getAttribute($context["product"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-thumbnail\" /></td>
          
          <td>";
                // line 104
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
          <td class=\"text-right\">";
                // line 105
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "      </tbody>
    </table>
    ";
            // line 110
            if ($this->getAttribute($context["order"], "comment", array())) {
                // line 111
                echo "    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td><b>";
                // line 114
                echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
                echo "</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>";
                // line 119
                echo $this->getAttribute($context["order"], "comment", array());
                echo "</td>
        </tr>
      </tbody>
    </table>
    ";
            }
            // line 124
            echo "  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "sale/order_shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 126,  361 => 124,  353 => 119,  345 => 114,  340 => 111,  338 => 110,  334 => 108,  325 => 105,  321 => 104,  312 => 102,  307 => 100,  304 => 99,  294 => 98,  291 => 97,  287 => 96,  283 => 95,  280 => 94,  273 => 93,  270 => 92,  262 => 90,  259 => 89,  251 => 87,  248 => 86,  240 => 84,  237 => 83,  229 => 81,  226 => 80,  218 => 78,  216 => 77,  212 => 76,  209 => 75,  205 => 74,  198 => 70,  194 => 69,  189 => 67,  184 => 65,  180 => 64,  176 => 63,  172 => 62,  162 => 55,  158 => 54,  154 => 53,  146 => 48,  142 => 47,  133 => 40,  125 => 39,  123 => 38,  116 => 37,  108 => 35,  106 => 34,  100 => 33,  92 => 32,  86 => 31,  80 => 30,  75 => 28,  71 => 27,  62 => 21,  53 => 17,  50 => 16,  46 => 15,  34 => 6,  30 => 5,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* <link href="view/javascript/bootstrap/css/bootstrap.css" rel="stylesheet" media="all" />*/
/* <script type="text/javascript" src="view/javascript/jquery/jquery-2.1.1.min.js"></script>*/
/* <script type="text/javascript" src="view/javascript/bootstrap/js/bootstrap.min.js"></script>*/
/* <link href="view/javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />*/
/* <link type="text/css" href="view/stylesheet/stylesheet.css" rel="stylesheet" media="all" />*/
/* </head>*/
/* <body>*/
/* <div class="container">*/
/*   {% for order in orders %}*/
/*   <div style="page-break-after: always;">*/
/*     <h1>{{ text_picklist }} #{{ order.order_id }}</h1>*/
/*     <table class="table table-bordered">*/
/*       <thead>*/
/*         <tr>*/
/*           <td colspan="2">{{ text_order_detail }}</td>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         <tr>*/
/*           <td><address>*/
/*             <strong>{{ order.store_name }}</strong><br />*/
/*             {{ order.store_address }}*/
/*             </address>*/
/*             <b>{{ text_telephone }}</b> {{ order.store_telephone }}<br />*/
/*             <b>{{ text_email }}</b> {{ order.store_email }}<br />*/
/*             <b>{{ text_website }}</b> <a href="{{ order.store_url }}">{{ order.store_url }}</a></td>*/
/*           <td style="width: 50%;"><b>{{ text_date_added }}</b> {{ order.date_added }}<br />*/
/*             {% if order.invoice_no %}*/
/*             <b>{{ text_invoice_no }}</b> {{ order.invoice_no }}<br />*/
/*             {% endif %}*/
/*             <b>{{ text_order_id }}</b> {{ order.order_id }}<br />*/
/*             {% if order.shipping_method %}*/
/*             <b>{{ text_shipping_method }}</b> {{ order.shipping_method }}<br />*/
/*             {% endif %}</td>*/
/*         </tr>*/
/*       </tbody>*/
/*     </table>*/
/*     <table class="table table-bordered">*/
/*       <thead>*/
/*         <tr>*/
/*           <td style="width: 50%;"><b>{{ text_shipping_address }}</b></td>*/
/*           <td style="width: 50%;"><b>{{ text_contact }}</b></td>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         <tr>*/
/*           <td>{{ order.shipping_address }}</td>*/
/*           <td>{{ order.email }}<br/>*/
/*             {{ order.telephone }}</td>*/
/*         </tr>*/
/*       </tbody>*/
/*     </table>*/
/*     <table class="table table-bordered">*/
/*       <thead>*/
/*         <tr>*/
/*           <td><b>{{ column_location }}</b></td>*/
/*           <td><b>{{ column_reference }}</b></td>*/
/*           <td><b>{{ column_product }}</b></td>*/
/*           <td><b>{{ column_weight }}</b></td>*/
/* */
/*         <td><b>{{ column_image }}</b></td>*/
/*           */
/*           <td><b>{{ column_model }}</b></td>*/
/*           <td class="text-right"><b>{{ column_quantity }}</b></td>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         {% for product in order.product %}*/
/*         <tr>*/
/*           <td>{{ product.location }}</td>*/
/*           <td>{% if product.sku %}*/
/*             {{ text_sku }} {{ product.sku }}<br />*/
/*             {% endif %}*/
/*             {% if product.upc %}*/
/*             {{ text_upc }} {{ product.upc }}<br />*/
/*             {% endif %}*/
/*             {% if product.ean %}*/
/*             {{ text_ean }} {{ product.ean }}<br />*/
/*             {% endif %}*/
/*             {% if product.jan %}*/
/*             {{ text_jan }} {{ product.jan }}<br />*/
/*             {% endif %}*/
/*             {% if product.isbn %}*/
/*             {{ text_isbn }} {{ product.isbn }}<br />*/
/*             {% endif %}*/
/*             {% if product.mpn %}*/
/*             {{ text_mpn }}{{ product.mpn }}<br />*/
/*             {% endif %}</td>*/
/*           <td>{{ product.name }}*/
/*             {% for option in product.option %}*/
/*             <br />*/
/*             &nbsp;<small> - {{ option.name }}: {{ option.value }}</small>*/
/*             {% endfor %}</td>*/
/*           <td>{{ product.weight }}</td>*/
/* */
/*        <td class="text-conter"><img src="{{ product.image }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /></td>*/
/*           */
/*           <td>{{ product.model }}</td>*/
/*           <td class="text-right">{{ product.quantity }}</td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*     {% if order.comment %}*/
/*     <table class="table table-bordered">*/
/*       <thead>*/
/*         <tr>*/
/*           <td><b>{{ text_comment }}</b></td>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         <tr>*/
/*           <td>{{ order.comment }}</td>*/
/*         </tr>*/
/*       </tbody>*/
/*     </table>*/
/*     {% endif %}*/
/*   </div>*/
/*   {% endfor %}*/
/* </div>*/
/* </body>*/
/* </html>*/
/* */
