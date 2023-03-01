<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evolutap
 */

?>

<!--  <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=EUR" data-sdk-integration-source="button-factory"></script>
<script>
function initPayPalButton() {
  paypal.Buttons({
    style: {
      shape: 'rect',
      color: 'gold',
      layout: 'vertical',
      label: 'buynow',
      
    },

    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{"description":"S - Top & Shorts ","amount":{"currency_code":"EUR","value":58,"breakdown":{"item_total":{"currency_code":"EUR","value":55},"shipping":{"currency_code":"EUR","value":3},"tax_total":{"currency_code":"EUR","value":0}}}}]
      });
    },

    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        alert('Transaction completed by ' + details.payer.name.given_name + '!');
      });
    },

    onError: function(err) {
      console.log(err);
    }
  }).render('#paypal-button-container');
}
initPayPalButton();
</script> -->

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="S7YA8FAZ56Q7A">
	<input type="image" src="https://jaquelinealmeida.com/wp-content/uploads/2021/07/buybutton.png" border="0" name="submit" 	alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>