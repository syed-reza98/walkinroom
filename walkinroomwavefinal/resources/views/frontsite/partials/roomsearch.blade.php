{{-- <form action="{{ route('demosearch') }}" method="post">
    @csrf
<input type="date" name="cin" id="cin" placeholder="Check-in date" required="True">
<input type="hidden" name="nowDate" id="nowDate">
<input type="hidden" name="result" id="result" value="">

<button type="submit" id="datebtn" class="button">Search Tour <i class="fa fa-angle-right" aria-hidden="true"></i></button>

</form> --}}

<div class="travel-search-content">
    <div class="container page-builder-ltr">
        <div class="row">
            <form action="{{ route('roomsearch') }}" method="post" class="travl-search-advanced clearfix">
                @csrf
                <div class="search-item city pull-left">
                    <p>Destinations</p>
                    <select name="location" id="location">
                        <option>Location</option>
                        @foreach ($locations as $location)
                            <option value={{$location->id}}>{{$location->city}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="search-item pull-left">
                    <p>Check in</p>
                    <input type="date" name="cin" id="cin" placeholder="Check-in date" required="True">
                </div>
                <div class="search-item pull-left">
                    <p>Check out</p>
                    <input type="date" name="cout" id="cout" placeholder="Check-Out date" required="True">
                </div>
                <div class="search-item item-select pull-left">
                    <p>People</p>
                    <select name="people">
                        <option value="1">1 people</option>
                        <option value="2">2 people</option>
                        <option value="3">3 people</option>
                        <option value="4">4 people</option>
                    </select>
                </div>
                <div class="search-item item-budget pull-left">
                    <p>Max Budget</p>
                    <input type="number" class="hotel-budget-input" id="budget" placeholder="$1000">
                </div>
                <input type="hidden" name="nowDate" id="nowDate">
                <input type="hidden" name="result" id="result" value="">
                <input type="hidden" name="redate" id="redate" value="">
                <div class="search-item button-submit pull-left">
                    <p>.</p>
                    <button type="submit" id="datebtn" class="button">Search Tour <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                    {{-- <button type="submit" class="button">Search Tour <i class="fa fa-angle-right" aria-hidden="true"></i></button> --}}
                </div>
            </form>
        </div>
    </div>
</div>

