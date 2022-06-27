<?php
require_once __DIR__.'/../../../vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51Kuf40HO24BikBuGwM5VJrRY3WKVLmSHoruIy3efVEOzVJqS1h1AvuGxA4lIEA1o3ReJ9bRv234KrQ0ZEwuDDRfU00axEcJmiG');
$session = \Stripe\Checkout\Session::create([
    'line_items' => [[
      'price_data' => [
        'currency' => 'usd',
        'product_data' => [
          'name' => 'T-shirt',
        ],
        'unit_amount' => 2000,
      ],
      'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => 'https://example.com/success',
    'cancel_url' => 'https://example.com/cancel',
  ]);

?>
<html>
  <head>
    <title>Buy cool new product</title>
  </head>
  <body>
    <button id="checkout-button" type="button" class="">Checkout</button>
  </body>
  <script>
      const stripe = Stripe('pk_test_51Kuf40HO24BikBuGgtYllh7ztYY1kxRH9MFM3slzNpMAXgxS5BdU3OscZqOOUYPC3inSPLttEXTtaIv77ufbw3mJ00oTuo1EHs');
      const btn = document.getElementById("checkout-button")
      btn.addEventListener('click', function(e)){
          e.preventDefault();
          stripe.redirectToCheckout({
              sessionId: "<?php echo $session->id ?>"
          })
      }

  </script>
</html>
