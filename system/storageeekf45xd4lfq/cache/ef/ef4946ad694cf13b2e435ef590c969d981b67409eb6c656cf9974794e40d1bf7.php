<?php

/* __string_template__10ef7b4c524176c22941b3d79f6009b4d8ebf0c603022df4c8a96eceabcf0894 */
class __TwigTemplate_c6075cddea6c514de0c41ab1c70d6feb2748ae32dc3e2f31fdcd0e67a1f5d0b0 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<title>";
        // line 5
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
</head>
<body style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000;\">
<div style=\"width: 680px;\"><a href=\"";
        // line 8
        echo (isset($context["store_url"]) ? $context["store_url"] : null);
        echo "\" title=\"";
        echo (isset($context["store_name"]) ? $context["store_name"] : null);
        echo "\"><img src=\"";
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo "\" alt=\"";
        echo (isset($context["store_name"]) ? $context["store_name"] : null);
        echo "\" style=\"margin-bottom: 20px; border: none;\" /></a>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
        // line 9
        echo (isset($context["text_greeting"]) ? $context["text_greeting"] : null);
        echo "</p>
  ";
        // line 10
        if ((isset($context["customer_id"]) ? $context["customer_id"] : null)) {
            // line 11
            echo "  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
            echo (isset($context["text_link"]) ? $context["text_link"] : null);
            echo "</p>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\"><a href=\"";
            // line 12
            echo (isset($context["link"]) ? $context["link"] : null);
            echo "\">";
            echo (isset($context["link"]) ? $context["link"] : null);
            echo "</a></p>
  ";
        }
        // line 14
        echo "  ";
        if ((isset($context["download"]) ? $context["download"] : null)) {
            // line 15
            echo "  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</p>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\"><a href=\"";
            // line 16
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "</a></p>
  <";
        }
        // line 18
        echo "  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\" colspan=\"2\">";
        // line 21
        echo (isset($context["text_order_detail"]) ? $context["text_order_detail"] : null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><b>";
        // line 26
        echo (isset($context["text_order_id"]) ? $context["text_order_id"] : null);
        echo "</b> ";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "<br />
          <b>";
        // line 27
        echo (isset($context["text_date_added"]) ? $context["text_date_added"] : null);
        echo "</b> ";
        echo (isset($context["date_added"]) ? $context["date_added"] : null);
        echo "<br />
          <b>";
        // line 28
        echo (isset($context["text_payment_method"]) ? $context["text_payment_method"] : null);
        echo "</b> ";
        echo (isset($context["payment_method"]) ? $context["payment_method"] : null);
        echo "<br />
          ";
        // line 29
        if ((isset($context["shipping_method"]) ? $context["shipping_method"] : null)) {
            echo " <b>";
            echo (isset($context["text_shipping_method"]) ? $context["text_shipping_method"] : null);
            echo "</b> ";
            echo (isset($context["shipping_method"]) ? $context["shipping_method"] : null);
            echo "
          ";
        }
        // line 30
        echo "</td>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><b>";
        // line 31
        echo (isset($context["text_email"]) ? $context["text_email"] : null);
        echo "</b> ";
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "<br />
          <b>";
        // line 32
        echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
        echo "</b> ";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "<br />
         
          <b>";
        // line 34
        echo (isset($context["text_order_status"]) ? $context["text_order_status"] : null);
        echo "</b> ";
        echo (isset($context["order_status"]) ? $context["order_status"] : null);
        echo "<br /></td>
      </tr>
    </tbody>
  </table>
  ";
        // line 38
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 39
            echo "  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
            // line 42
            echo (isset($context["text_instruction"]) ? $context["text_instruction"] : null);
            echo "</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 47
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "</td>
      </tr>
    </tbody>
  </table>
  ";
        }
        // line 52
        echo "  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 55
        echo (isset($context["text_payment_address"]) ? $context["text_payment_address"] : null);
        echo "</td>
        ";
        // line 56
        if ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) {
            // line 57
            echo "        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
            echo (isset($context["text_shipping_address"]) ? $context["text_shipping_address"] : null);
            echo "</td>
        ";
        }
        // line 58
        echo " </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
        // line 62
        echo (isset($context["payment_address"]) ? $context["payment_address"] : null);
        echo "</td>
        ";
        // line 63
        if ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) {
            // line 64
            echo "        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            echo (isset($context["shipping_address"]) ? $context["shipping_address"] : null);
            echo "</td>
        ";
        }
        // line 65
        echo " </tr>
    </tbody>
  </table>
  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 71
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 72
        echo (isset($context["text_image"]) ? $context["text_image"] : null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 73
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 74
        echo (isset($context["text_quantity"]) ? $context["text_quantity"] : null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 75
        echo (isset($context["text_price"]) ? $context["text_price"] : null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 76
        echo (isset($context["text_total"]) ? $context["text_total"] : null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
    
    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 82
            echo "    <tr>
      <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 83
            echo $this->getAttribute($context["product"], "name", array());
            echo "
        ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo "<br />
        &nbsp;<small> - ";
                // line 85
                echo $this->getAttribute($context["option"], "name", array());
                echo ": ";
                echo $this->getAttribute($context["option"], "value", array());
                echo "</small>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
      <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">
      <img src=\"";
            // line 87
            echo $this->getAttribute($context["product"], "image", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-thumbnail\" />
      </td>
      <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 89
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 90
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 91
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 92
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 96
            echo "    <tr>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 97
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"></td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"></td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 100
            echo $this->getAttribute($context["voucher"], "quantity", array());
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 101
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 102
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "      </tbody>
    
    <tfoot>
    
    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 110
            echo "    <tr>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\" colspan=\"5\"><b>";
            // line 111
            echo $this->getAttribute($context["total"], "title", array());
            echo ":</b></td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 112
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "      </tfoot>
    
  </table>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
        // line 118
        echo (isset($context["text_footer"]) ? $context["text_footer"] : null);
        echo "</p>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "__string_template__10ef7b4c524176c22941b3d79f6009b4d8ebf0c603022df4c8a96eceabcf0894";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 118,  349 => 115,  340 => 112,  336 => 111,  333 => 110,  329 => 109,  323 => 105,  314 => 102,  310 => 101,  306 => 100,  300 => 97,  297 => 96,  292 => 95,  283 => 92,  279 => 91,  275 => 90,  271 => 89,  262 => 87,  250 => 85,  244 => 84,  240 => 83,  237 => 82,  233 => 81,  225 => 76,  221 => 75,  217 => 74,  213 => 73,  209 => 72,  205 => 71,  197 => 65,  191 => 64,  189 => 63,  185 => 62,  179 => 58,  173 => 57,  171 => 56,  167 => 55,  162 => 52,  154 => 47,  146 => 42,  141 => 39,  139 => 38,  130 => 34,  123 => 32,  117 => 31,  114 => 30,  105 => 29,  99 => 28,  93 => 27,  87 => 26,  79 => 21,  74 => 18,  67 => 16,  62 => 15,  59 => 14,  52 => 12,  47 => 11,  45 => 10,  41 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd">*/
/* <html>*/
/* <head>*/
/* <meta http-equiv="Content-Type" content="text/html; charset=utf-8">*/
/* <title>{{ title }}</title>*/
/* </head>*/
/* <body style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000;">*/
/* <div style="width: 680px;"><a href="{{ store_url }}" title="{{ store_name }}"><img src="{{ logo }}" alt="{{ store_name }}" style="margin-bottom: 20px; border: none;" /></a>*/
/*   <p style="margin-top: 0px; margin-bottom: 20px;">{{ text_greeting }}</p>*/
/*   {% if customer_id %}*/
/*   <p style="margin-top: 0px; margin-bottom: 20px;">{{ text_link }}</p>*/
/*   <p style="margin-top: 0px; margin-bottom: 20px;"><a href="{{ link }}">{{ link }}</a></p>*/
/*   {% endif %}*/
/*   {% if download %}*/
/*   <p style="margin-top: 0px; margin-bottom: 20px;">{{ text_download }}</p>*/
/*   <p style="margin-top: 0px; margin-bottom: 20px;"><a href="{{ download }}">{{ download }}</a></p>*/
/*   <{% endif %}*/
/*   <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">*/
/*     <thead>*/
/*       <tr>*/
/*         <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" colspan="2">{{ text_order_detail }}</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       <tr>*/
/*         <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><b>{{ text_order_id }}</b> {{ order_id }}<br />*/
/*           <b>{{ text_date_added }}</b> {{ date_added }}<br />*/
/*           <b>{{ text_payment_method }}</b> {{ payment_method }}<br />*/
/*           {% if shipping_method %} <b>{{ text_shipping_method }}</b> {{ shipping_method }}*/
/*           {% endif %}</td>*/
/*         <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><b>{{ text_email }}</b> {{ email }}<br />*/
/*           <b>{{ text_telephone }}</b> {{ telephone }}<br />*/
/*          */
/*           <b>{{ text_order_status }}</b> {{ order_status }}<br /></td>*/
/*       </tr>*/
/*     </tbody>*/
/*   </table>*/
/*   {% if comment %}*/
/*   <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">*/
/*     <thead>*/
/*       <tr>*/
/*         <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">{{ text_instruction }}</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       <tr>*/
/*         <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">{{ comment }}</td>*/
/*       </tr>*/
/*     </tbody>*/
/*   </table>*/
/*   {% endif %}*/
/*   <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">*/
/*     <thead>*/
/*       <tr>*/
/*         <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">{{ text_payment_address }}</td>*/
/*         {% if shipping_address %}*/
/*         <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">{{ text_shipping_address }}</td>*/
/*         {% endif %} </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       <tr>*/
/*         <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">{{ payment_address }}</td>*/
/*         {% if shipping_address %}*/
/*         <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">{{ shipping_address }}</td>*/
/*         {% endif %} </tr>*/
/*     </tbody>*/
/*   </table>*/
/*   <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">*/
/*     <thead>*/
/*       <tr>*/
/*         <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">{{ text_product }}</td>*/
/*         <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">{{ text_image }}</td>*/
/*         <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">{{ text_model }}</td>*/
/*         <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;">{{ text_quantity }}</td>*/
/*         <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;">{{ text_price }}</td>*/
/*         <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;">{{ text_total }}</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     */
/*     {% for product in products %}*/
/*     <tr>*/
/*       <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">{{ product.name }}*/
/*         {% for option in product.option %}<br />*/
/*         &nbsp;<small> - {{ option.name }}: {{ option.value }}</small>{% endfor %}</td>*/
/*       <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">*/
/*       <img src="{{ product.image }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" />*/
/*       </td>*/
/*       <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">{{ product.model }}</td>*/
/*       <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">{{ product.quantity }}</td>*/
/*       <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">{{ product.price }}</td>*/
/*       <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">{{ product.total }}</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*     {% for voucher in vouchers %}*/
/*     <tr>*/
/*       <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">{{ voucher.description }}</td>*/
/*       <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"></td>*/
/*       <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"></td>*/
/*       <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">{{ voucher.quantity }}</td>*/
/*       <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">{{ voucher.amount }}</td>*/
/*       <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">{{ voucher.amount }}</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*       </tbody>*/
/*     */
/*     <tfoot>*/
/*     */
/*     {% for total in totals %}*/
/*     <tr>*/
/*       <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;" colspan="5"><b>{{ total.title }}:</b></td>*/
/*       <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">{{ total.text }}</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*       </tfoot>*/
/*     */
/*   </table>*/
/*   <p style="margin-top: 0px; margin-bottom: 20px;">{{ text_footer }}</p>*/
/* </div>*/
/* </body>*/
/* </html>*/
/* */
