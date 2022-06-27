<aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column sidebar-offcanvas">
    <span id="close-sidebar" class="fa fa-times"></span>
    {{-- <div class="clearfix module-search">
        <h3 class="modtitle">Tour searching</h3>
        <form method="get" class="search-pr">
            <div class="search-item city">
                <input type="text" class="tour-search-input" id="city" placeholder="Your Destination">
            </div>
            <div class="search-item date">
                <input type="text" class="tour-search-input datepicker hasDatepicker" id="date_from" placeholder="Day start">
            </div>
            <div class="search-item date">
                <input type="text" class="tour-search-input datepicker hasDatepicker" id="date_to" placeholder="Day end">
            </div>
            <div class="search-item item-select">
                <select name="people">
                    <option value="1">Number</option>
                    <option value="2">2 people</option>
                    <option value="3">3 people</option>
                    <option value="4">4 people</option>
                </select>
            </div>
            <div class="search-item item-budget">
                <input type="number" class="hotel-budget-input" id="budget" placeholder="Max budget">
            </div>
            <div class="button-submit">
                <button type="submit" class="button">Search Tour <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                <input type="hidden" name="s">
                <input type="hidden" name="search_tour" value="1">
            </div>
        </form>
    </div>
    <div class="clearfix module-travel">
        <h3>travel style</h3>
        <ul>
            <li class="active"><a href="#"><span>Holiday</span><label>15</label></a></li>
            <li><a href="#"><span>Adventure</span><label>20</label></a></li>
            <li><a href="#"><span>Family Tour</span><label>5</label></a></li>
            <li><a href="#"><span>Cheap Trip</span><label>30</label></a></li>
            <li><a href="#"><span>Open Tour</span><label>18</label></a></li>
            <li><a href="#"><span>Classic Tour</span><label>6</label></a></li>
        </ul>
    </div>
    <div class="clearfix module-rate">
        <h3>star rating</h3>
        <ul>
            <li class="active"><a href="#"><div class="star"><span style="width: 75px"></span></div><label>15</label></a></li>
            <li><a href="#"><div class="star"><span style="width: 60px"></span></div><label>35</label></a></li>
            <li><a href="#"><div class="star"><span style="width: 45px"></span></div><label>20</label></a></li>
            <li><a href="#"><div class="star"><span style="width: 30px"></span></div><label>8</label></a></li>
            <li><a href="#"><div class="star"><span style="width: 15px"></span></div><label>4</label></a></li>
        </ul>
    </div>
    <div class="clearfix module-ques">
        <h3>get a questions</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem que laudantium.</p>
        <ul>
            <li><i class="fa fa-phone" aria-hidden="true"></i>+1 2618 181 612</li>
            <li><i class="fa fa-envelope" aria-hidden="true"></i>travelsp@gmail.com</li>
        </ul>
    </div> --}}

    <div class="clearfix module-pop">
        <h3>Latest Rooms</h3>
        @foreach ($rooms as $room)
        <?php
        $arr=$room->image;
        $yummy = json_decode($arr, true);
        ?>
        <div class="clearfix item">
            <div class="image">
                <a href="tour-detail.html"><img src="{{ Voyager::image( $yummy[0] ) }}" alt="Bougainvilleas on Lombard Street" style="width:370px; height:247px"></a>
            </div>
            <div class="content">
                <h4><a href="tour-detail.html">{{ $room->title }}</a></h4>
                {{-- <p>from $250</p> --}}
            </div>
        </div>
        @endforeach
    </div>
</aside>
