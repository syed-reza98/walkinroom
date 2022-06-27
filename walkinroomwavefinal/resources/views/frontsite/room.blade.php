@extends('frontsite.partials.main')

@section('content')
      <!-- Main Container  -->

      <div data-reflow-type="product">
        <div class="reflow-product">
            <div class="ref-media">
                <div class="ref-preview"><img class="ref-image active" src="https://cdn.bootstrapstudio.io/products/product-30_md.jpg" data-reflow-preview-type="image" /></div>
            </div>
            <div class="ref-product-data">
                <h2 class="ref-name">Yasmeen Rohan</h2><strong class="ref-price">$572.44</strong><span data-reflow-type="add-to-cart" data-reflow-product="43218622" data-reflow-variant="199976733_s" data-reflow-quantity="1">
                    <div class="ref-product-controls">
                        <div class="ref-variant"><label><span>Size</span><select class="ref-form-control ref-field-variants" name="variant-state" required>
                                    <option value="199976733_s">S</option>
                                    <option value="199976733_m">M</option>
                                    <option value="199976733_l" disabled>L</option>
                                </select></label></div><span data-reflow-variant="199976733_s" data-reflow-product="43218622" data-reflow-max-qty="999" data-reflow-quantity="1">
                            <div class="ref-quantity-widget">
                                <div class="ref-decrease"><span></span></div><input type="text" value="1" />
                                <div class="ref-increase"><span></span></div>
                            </div>
                        </span><a class="ref-button" href="#">Add to Cart</a>
                    </div>
                </span>
                <div class="ref-description">Quia veniam <b>deserunt</b> dignissimos <i>cupiditate</i> illo libero.</div>
            </div>
        </div>
    </div>
    <!-- //Main Container -->

@endsection


