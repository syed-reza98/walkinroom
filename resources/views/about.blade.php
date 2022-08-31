@extends('layouts.app2')

@section('content')

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
    <div class="grid items-center max-w-2xl grid-cols-1 px-4 py-24 mx-auto gap-y-16 gap-x-8 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8 lg:grid-cols-2">
      <div>
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">About Walkinroom</h2>
        <p class="mt-4 text-gray-500">The walnut wood card tray is precision milled to perfectly fit a stack of Focus cards. The powder coated steel divider separates active cards from new ones, or can be used to archive important task lists.</p>

        <dl class="grid grid-cols-1 mt-16 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
          <div class="pt-4 border-t border-gray-200">
            <dt class="font-medium text-gray-900">Origin</dt>
            <dd class="mt-2 text-sm text-gray-500">Designed by Good Goods, Inc.</dd>
          </div>

          <div class="pt-4 border-t border-gray-200">
            <dt class="font-medium text-gray-900">Material</dt>
            <dd class="mt-2 text-sm text-gray-500">Solid walnut base with rare earth magnets and powder coated steel card cover</dd>
          </div>

          <div class="pt-4 border-t border-gray-200">
            <dt class="font-medium text-gray-900">Dimensions</dt>
            <dd class="mt-2 text-sm text-gray-500">6.25&quot; x 3.55&quot; x 1.15&quot;</dd>
          </div>

          <div class="pt-4 border-t border-gray-200">
            <dt class="font-medium text-gray-900">Finish</dt>
            <dd class="mt-2 text-sm text-gray-500">Hand sanded and finished with natural oil</dd>
          </div>

          <div class="pt-4 border-t border-gray-200">
            <dt class="font-medium text-gray-900">Includes</dt>
            <dd class="mt-2 text-sm text-gray-500">Wood card tray and 3 refill packs</dd>
          </div>

          <div class="pt-4 border-t border-gray-200">
            <dt class="font-medium text-gray-900">Considerations</dt>
            <dd class="mt-2 text-sm text-gray-500">Made from natural materials. Grain and color vary with each item.</dd>
          </div>
        </dl>
      </div>
      {{-- <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
        <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-01.jpg" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="bg-gray-100 rounded-lg">
        <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-02.jpg" alt="Top down view of walnut card tray with embedded magnets and card groove." class="bg-gray-100 rounded-lg">
        <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-03.jpg" alt="Side of walnut card tray with card groove and recessed card area." class="bg-gray-100 rounded-lg">
        <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-04.jpg" alt="Walnut card tray filled with cards and card angled in dedicated groove." class="bg-gray-100 rounded-lg">
      </div> --}}
    </div>
  </div>
@endsection
