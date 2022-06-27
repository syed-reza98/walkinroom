<?php
require_once __DIR__.'/../../../vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51Kuf40HO24BikBuGwM5VJrRY3WKVLmSHoruIy3efVEOzVJqS1h1AvuGxA4lIEA1o3ReJ9bRv234KrQ0ZEwuDDRfU00axEcJmiG');
$stripe = new \Stripe\StripeClient(
  'sk_test_51Kuf40HO24BikBuGwM5VJrRY3WKVLmSHoruIy3efVEOzVJqS1h1AvuGxA4lIEA1o3ReJ9bRv234KrQ0ZEwuDDRfU00axEcJmiG'
);
// $stripe->customers->create([
//   'id' => Auth::user()->id,
// ]);
$session = \Stripe\Checkout\Session::create([
    // 'customer' => Auth::user()->id,
    'customer_email' => Auth::user()->email,
    'line_items' => [
    [
      'price_data' => [
        'currency' => 'usd',
        'product_data' => [
          'name' => 'Demo-Hotel',
        ],
        'unit_amount' => 1000,
      ],
      'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => 'http://127.0.0.1:8000/success',
    'cancel_url' => 'http://127.0.0.1:8000/cancel',
  ]);

?>
<html>
  <head>
    <title>Buy cool new product</title>
  </head>
  <body>
    <button id="checkout-button" type="button" class="">Checkout</button>
  </body>
  <script src="https://js.stripe.com/v3/"></script>
  <script>
      const stripe = Stripe('pk_test_51Kuf40HO24BikBuGgtYllh7ztYY1kxRH9MFM3slzNpMAXgxS5BdU3OscZqOOUYPC3inSPLttEXTtaIv77ufbw3mJ00oTuo1EHs');
      const btn = document.getElementById("checkout-button")
      btn.addEventListener('click', function(e){
          e.preventDefault();
          stripe.redirectToCheckout({
              sessionId: "<?php echo $session->id ?>"
          })
      })

  </script>
</html>
