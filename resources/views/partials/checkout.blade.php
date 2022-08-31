<?php
require_once __DIR__.'/../../../vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51Kuf40HO24BikBuGwM5VJrRY3WKVLmSHoruIy3efVEOzVJqS1h1AvuGxA4lIEA1o3ReJ9bRv234KrQ0ZEwuDDRfU00axEcJmiG');
$stripe = new \Stripe\StripeClient(
  'sk_test_51Kuf40HO24BikBuGwM5VJrRY3WKVLmSHoruIy3efVEOzVJqS1h1AvuGxA4lIEA1o3ReJ9bRv234KrQ0ZEwuDDRfU00axEcJmiG'
);
// $stripe->customers->create([
//   'id' => Auth::user()->id,
// ]);

    $arr=$room->image;
    $yummy = json_decode($arr, true);

    $price = 0;
    $price = $room->price;
    $price += ($price*$per);
$session = \Stripe\Checkout\Session::create([
    // 'customer' => Auth::user()->id,
    'customer_email' => Auth::user()->email,
    'line_items' => [
    [
      'price_data' => [
        'currency' => 'usd',
        'product_data' => [
          'name' => $room->title,
        //   'description'=> $room->description,
        ],
        'unit_amount' => $price*100,
      ],
      'quantity' => $datedif,
    ]],
    'mode' => 'payment',
    // 'discounts' => [[
    // 'coupon' => 'sJKULmFd',
    // ]],
    'allow_promotion_codes' => true,
    'success_url' => 'http://127.0.0.1:8000/success',
    'cancel_url' => 'http://127.0.0.1:8000/cancel',
  ]);

?>
@extends('layouts.app2')

@section('content')
<!-- This example requires Tailwind CSS v2.0+ -->

<div class="pt-6">
    <div class="max-w-2xl mx-auto mt-6 sm:px-6 lg:max-w-7xl lg:px-8">
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Booking Information</h3>
        {{-- <p class="max-w-2xl mt-1 text-sm text-gray-500">Personal details and application.</p> --}}
        </div>
        <div class="border-t border-gray-200">
        <dl>
            <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Full name</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $newuser->name }}</dd>
            </div>

            <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Email</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $newuser->email }}</dd>
            </div>

            <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Room</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $room->title }}</dd>
            </div>

            <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Check In</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $time_from }}</dd>
            </div>

            <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Check Out</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $time_to }}</dd>
            </div>
            @php
            $pp = 0;
            $pp = $room->price;
            $pp += ($pp*$per);
            $total = $pp*$datedif;
            // $value = \App\Models\Photo::where(['room_id' => $room->id])->pluck('path')->first()
            @endphp
            <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Price</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">${{ $total }}</dd>
            </div>

            <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Total Days</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $datedif }}</dd>
            </div>

            {{-- <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Attachments</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <ul role="list" class="border border-gray-200 divide-y divide-gray-200 rounded-md">
                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                    <div class="flex items-center flex-1 w-0">

                    <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                    </svg>
                    <span class="flex-1 w-0 ml-2 truncate"> resume_back_end_developer.pdf </span>
                    </div>
                    <div class="flex-shrink-0 ml-4">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Download </a>
                    </div>
                </li>
                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                    <div class="flex items-center flex-1 w-0">

                    <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                    </svg>
                    <span class="flex-1 w-0 ml-2 truncate"> coverletter_back_end_developer.pdf </span>
                    </div>
                    <div class="flex-shrink-0 ml-4">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Download </a>
                    </div>
                </li>
                </ul>
            </dd>
            </div> --}}
        </dl>

        </div>
        <div class="items-end px-4 py-5 sm:px-6">
            {{-- <h3 class="text-lg font-medium leading-6 text-gray-900">Booking Information</h3> --}}
            {{-- <button type="submit" id="datebtn" class="items-center w-full px-3 py-4 font-medium text-white bg-blue-600 rounded-lg ">Search</button> --}}
            {{-- <p class="max-w-2xl mt-1 text-sm text-gray-500">Personal details and application.</p> --}}
            <li class="flex py-2 space-x-4 place-content-end xl:py-3">
                {{-- <h1 class="mb-1 text-4xl font-extrabold leading-none text-gray-900 lg:text-5xl xl:text-5xl sm:mb-3"><a href="#_">Popular Rooms</a></h1> --}}
                <button id="checkout-button" type="button" class="flex items-center w-full px-6 py-1 mb-3 text-lg text-white bg-blue-600 rounded-md sm:mb-0 hover:bg-blue-700 sm:w-auto">
                    Next: Payment
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </li>
        </div>
    </div>
    </div>
</div>
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
@endsection
