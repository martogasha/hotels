@include('adminNav')
<!-- ================================
         END HEADER AREA
================================= -->

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg-7">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content text-center">
                        <div class="section-heading">
                            <h2 class="sec__title text-white">Add Hotel and Rooms</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
    <div class="bread-svg-box">
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
    </div><!-- end bread-svg -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START FORM AREA
================================= -->
<button class="btn btn-primary" id="imageButton">Add Image</button>
<button class="btn btn-primary" id="addRoom">Add Room</button>
<button class="btn btn-primary" id="addHotel">Add Hotel</button>

<section class="listing-form section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="listing-header pb-4">
                    <h3 class="title font-size-28 pb-2">List an accommodation on Trizen</h3>
                    <p class="font-size-14">If you are listing a vacation rental, please <a href="#" class="text-color">click here.</a></p>
                    <p class="font-size-14"><a href="#" class="text-color">Read the complete Trizen policy for accommodations.</a></p>
                </div>
                <form action="{{route('saveHotel')}}" method="post">
                    @csrf
                    <div class="form-box" id="hotelAdd">
                            <div class="form-title-wrap">
                                <h3 class="title"><i class="la la-user mr-2 text-gray"></i>Hotel information</h3>
                            </div><!-- form-title-wrap -->
                            <div class="form-content contact-form-action">
                                <div class="row">
                                    <div class="col-lg-6 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Hotel Name</label>
                                            <div class="form-group">
                                                <span class="la la-user form-icon"></span>
                                                <input class="form-control" type="text" name="hotelName" placeholder="Hotel name">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Phone Number</label>
                                            <div class="form-group">
                                                <span class="la la-user form-icon"></span>
                                                <input class="form-control" type="text" name="hotelPhone" placeholder="phone Number">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-12 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Hotel About</label>
                                            <div class="form-group">
                                                <span class="la la-user form-icon"></span>
                                                <input class="form-control" type="text" name="hotelAbout" placeholder="About Hotel">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Hotel Email</label>
                                            <div class="form-group">
                                                <span class="la la-envelope-o form-icon"></span>
                                                <input class="form-control" type="email" name="hotelEmail" placeholder="email">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Hotel Category</label>
                                            <div class="form-group select-contain w-100">
                                                <select class="select-contain-select" name="hotelCategory">
                                                    <option value="">Select one</option>
                                                    <option value="Hotels">Hotels</option>
                                                    <option value="Apartments">Apartments</option>
                                                    <option value="Resorts">Resorts</option>
                                                    <option value="Villas">Villas</option>
                                                    <option value="Cabins">Cabins</option>
                                                    <option value="Cottages">Cottages</option>
                                                    <option value="Glamping">Glamping</option>
                                                    <option value="Serviced apartments">Serviced apartments</option>
                                                    <option value="Holiday homes">Holiday homes</option>
                                                    <option value="Hostels">Hostels</option>
                                                    <option value="Motels">Motels</option>
                                                    <option value="B&Bs">B&Bs</option>
                                                    <option value="Ryokans">Ryokans</option>
                                                    <option value="Riads">Riads</option>
                                                    <option value="Holiday parks">Holiday parks</option>
                                                    <option value="Homestays">Homestays</option>
                                                    <option value="Campsites">Campsites</option>
                                                    <option value="Country houses">Country houses</option>
                                                    <option value="Farm stays">Farm stays</option>
                                                    <option value="Boats">Boats</option>
                                                    <option value="Luxury tents">Luxury tents</option>
                                                    <option value="Self catering accommodation">Self catering accommodation</option>
                                                    <option value="Tiny houses">Tiny houses</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Hotel Type</label>
                                            <div class="form-group select-contain w-100">
                                                <select class="select-contain-select" name="hotelType">
                                                    <option value="">Select one</option>
                                                    <option value="1 star">1 star</option>
                                                    <option value="2 star">2 star</option>
                                                    <option value="3 star">3 star</option>
                                                    <option value="4 star">4 star</option>
                                                    <option value="5 star">5 star</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Minimum Stay</label>
                                            <div class="form-group select-contain w-100">
                                                <select class="select-contain-select" name="minimumNights">
                                                    <option value="">Select one</option>
                                                    <option value="1 Night">1 Night</option>
                                                    <option value="2 Nights">2 Nights</option>
                                                    <option value="3 Nights">3 Nights</option>
                                                    <option value="4 Nights">4 Nights</option>
                                                    <option value="5 Nights">5 Nights</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Security Deposit</label>
                                            <div class="form-group select-contain w-100">
                                                <select class="select-contain-select" name="securityDeposit">
                                                    <option value="">Select one</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                </div>
                            </div><!-- end form-content -->
                            <div class="form-box" id="duplicateDiv">
                                <div class="form-content contact-form-action">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Free WiFi" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Free WiFi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Breakfast" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Breakfast
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Good breakfast" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Good breakfast
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Very Good Breakfast" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Very Good Breakfast
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Bar" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Bar
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Beachfront" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Beachfront
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Non-smoking rooms" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Non-smoking rooms
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="swimmingPool" value="Swimming Pool" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Swimming Pool
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value=" Airport shuttle" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Airport shuttle
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Family rooms" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Family rooms
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Fitness Facility" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Fitness Facility
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Exceptional Fitness Facility" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Exceptional Fitness Facility
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Good Fitness Facility" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Good Fitness Facility
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Pick And Drop" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pick And Drop
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Room Service" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Room Service
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Pets Allowed" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pets Allowed
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Free Parking" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Free Parking
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Handicap Accessible" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Handicap Accessible
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Elevator In Building" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Elevator In Building
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Suitable For Events" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Suitable For Events
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Play Place" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Play Place
                                                </label>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                    </div>
                                </div><!-- end form-content -->
                            </div><!-- end form-box -->
                            <div class="form-box">
                                <div class="form-title-wrap">
                                    <h3 class="title"><i class="la la-map mr-2 text-gray"></i>Map Location</h3>
                                </div><!-- form-title-wrap -->
                                <div class="form-content contact-form-action">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">Longitude</label>
                                                <div class="form-group">
                                                    <span class="la la-map form-icon"></span>
                                                    <input class="form-control" id="longitude" name="longitude" type="text" placeholder="Map Longitude">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">Latitude</label>
                                                <div class="form-group">
                                                    <span class="la la-map form-icon"></span>
                                                    <input class="form-control" id="latitude" name="latitude" type="text" placeholder="Map Latitude">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <label class="label-text">City</label>
                                                <div class="form-group">
                                                    <span class="la la-map form-icon"></span>
                                                    <input class="form-control" id="city" name="city" type="text" placeholder="city">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <label class="label-text">For precise location, drag the blue marker on the map.</label>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                    </div>
                                </div><!-- end form-content -->
                            </div><!-- end form-box -->

                    </div><!-- end form-box -->
                    <div class="submit-box">
                        <div class="btn-box pt-3">
                            <button type="submit" class="theme-btn">Save Hotel <i class="la la-arrow-right ml-1"></i></button>
                        </div>
                    </div><!-- end submit-box -->
                </form>
                <div id="duplicate">
                    <form action="{{route('saveRoom')}}" method="post">
                        @csrf
                        <div class="form-box" id="duplicateDiv">
                            <div class="form-title-wrap">
                                <h3 class="title"><i class="la la-gear mr-2 text-gray"></i>Rooms Details</h3>
                            </div><!-- form-title-wrap -->
                            <div class="form-content contact-form-action">
                                <div class="col-lg-6 responsive-column">
                                    <div class="row">
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Hotel Name</label>
                                                <div class="form-group select-contain w-100">
                                                    <select class="select-contain-select" name="hotelId">
                                                        @foreach($hotels as $hotel)
                                                        <option value="{{$hotel->id}}">{{$hotel->hotel_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Room Name</label>
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input class="form-control" type="text" name="roomName" placeholder="Room name">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Square Feets</label>
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input class="form-control" type="text" name="roomFeets" placeholder="Square Feets">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Bed Type</label>
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input class="form-control" type="text" name="bedType" placeholder="Bed Type">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Bathroom Type/Square Feets</label>
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input class="form-control" type="text" name="bathroomType" placeholder="Bathroom Type/Square Feets">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Amount</label>
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input class="form-control" type="text" name="amount" placeholder="amount">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                    </div>

                                </div><!-- end col-lg-6 -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Free Wifi" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Free Wifi
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Shower" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Shower
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Toilet" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Toilet
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Towels" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Towels
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Linen" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Linen
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Desk" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Desk
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Slippers" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Slippers
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Air Conditioning" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Air Conditioning
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Refrigerator" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Refrigerator
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Mosquito net" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Mosquito net
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Bathrobe" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Bathrobe
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Safety deposit box" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Safety deposit box
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Sofa" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Sofa
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Socket near the bed" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Socket near the bed
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Telephone" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Telephone
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Tea/Coffee maker" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Tea/Coffee maker
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Air purifiers" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Air purifiers
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Hand sanitiser" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Hand sanitiser
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Single-room air conditioning for guest accommodation" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Single-room air conditioning for guest accommodation
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Free toiletries" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Free toiletries
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Bidet" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Bidet
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Hypoallergenic" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Hypoallergenic
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Tile/marble floor" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Tile/marble floor
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Wake-up service" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Wake-up service
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Laptop safe" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Laptop safe
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Executive lounge access" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Executive lounge access
                                            </label>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Iron" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Iron
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Kitchenware" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Kitchenware
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Fan" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Fan
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Handicap Accessible" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Handicap Accessible
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Pets Allowed" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Pets Allowed
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Electric kettle" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Electric kettle
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Wardrobe or closet" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Wardrobe or closet
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Clothes rack" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Clothes rack
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Ironing facilities" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Ironing facilities
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Toilet paper" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Toilet paper
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Flat-screen TV" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Flat-screen TV
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Carpeted" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Carpeted
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Dining table" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Dining table
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Dining area" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Dining area
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Clothes rack" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Clothes rack
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Board games/puzzles" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Board games/puzzles
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Books, DVDs, or music for children" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Books, DVDs, or music for children
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Sofa bed" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Sofa bed
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Entire unit wheelchair accessible" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Entire unit wheelchair accessible
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Telephone" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Telephone
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Satellite channels" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Satellite channels
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Radio" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Radio
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Interconnected room(s) available" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Interconnected room(s) available
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Hairdryer" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Hairdryer
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Additional toilet" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Additional toilet
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Private bathroom" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Private bathroom
                                            </label>
                                        </div>

                                    </div><!-- end col-lg-6 -->
                                </div>
                            </div><!-- end form-content -->
                        </div><!-- end form-box -->
                        <div class="submit-box">
                            <div class="btn-box pt-3">
                                <button type="submit" class="theme-btn">Save Room <i class="la la-arrow-right ml-1"></i></button>
                            </div>
                        </div><!-- end submit-box -->
                    </form>
                    <form action="{{route('saveImages')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-box" id="imageView">
                            <div class="form-title-wrap">
                                <h3 class="title"><i class="la la-photo mr-2 text-gray"></i>Hotel Photos</h3>
                            </div><!-- form-title-wrap -->
                            <div class="form-content contact-form-action">
                                <div class="row">
                                    <div class="col-lg-12 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Hotel Name</label>
                                            <div class="form-group select-contain w-100">
                                                <select class="select-contain-select" name="hotelId">
                                                    @foreach($hotels as $hotel)
                                                        <option value="{{$hotel->id}}">{{$hotel->hotel_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-12">
                                        <div class="input-group control-group increment" >
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end form-content -->
                        </div><!-- end form-box -->
                        <div class="submit-box">
                            <div class="btn-box pt-3">
                                    <button type="submit" class="theme-btn">Save Image <i class="la la-arrow-right ml-1"></i></button>
                            </div>
                        </div><!-- end submit-box -->


                </div>




            </div><!-- end col-lg-9 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end listing-form -->
<!-- ================================
    END FORM AREA
================================= -->

<!-- ================================
       START FOOTER AREA
================================= -->
<section class="footer-area section-bg padding-top-100px padding-bottom-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <div class="footer-logo padding-bottom-30px">
                        <a href="index.html" class="foot__logo"><img src="images/logo.png" alt="logo"></a>
                    </div><!-- end logo -->
                    <p class="footer__desc">Morbi convallis bibendum urna ut viverra. Maecenas consequat</p>
                    <ul class="list-items pt-3">
                        <li>3015 Grand Ave, Coconut Grove,<br> Cerrick Way, FL 12345</li>
                        <li>+123-456-789</li>
                        <li><a href="#">trizen@yourwebsite.com</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Company</h4>
                    <ul class="list-items list--items">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="blog-grid.html">News</a></li>
                        <li><a href="contact.html">Support</a></li>
                        <li><a href="#">Advertising</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Other Services</h4>
                    <ul class="list-items list--items">
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Trizen.com Rewards</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">List My Hotel</a></li>
                        <li><a href="#">All Hotels</a></li>
                        <li><a href="#">TV Ads</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Other Links</h4>
                    <ul class="list-items list--items">
                        <li><a href="#">USA Vacation Packages</a></li>
                        <li><a href="#">USA Flights</a></li>
                        <li><a href="#">USA Hotels</a></li>
                        <li><a href="#">USA Car Hire</a></li>
                        <li><a href="#">Create an Account</a></li>
                        <li><a href="#">Trizen Reviews</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="term-box footer-item">
                    <ul class="list-items list--items d-flex align-items-center">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="footer-social-box text-right">
                    <ul class="social-profile">
                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                        <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="section-block mt-4"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="copy-right padding-top-30px">
                    <p class="copy__desc">
                        &copy; Copyright Trizen 2020. Made with
                        <span class="la la-heart"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                    </p>
                </div><!-- end copy-right -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="copy-right-content d-flex align-items-center justify-content-end padding-top-30px">
                    <h3 class="title font-size-15 pr-2">We Accept</h3>
                    <img src="images/payment-img.png" alt="">
                </div><!-- end copy-right-content -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
       START FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle">Sign Up</h5>
                        <p class="font-size-14">Hello! Welcome Create a New Account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your email">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Repeat Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type again password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Register Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Sign up Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle2">Login</h5>
                        <p class="font-size-14">Hello! Welcome to your account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group mb-2">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your password">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="custom-checkbox mb-0">
                                        <input type="checkbox" id="rememberchb">
                                        <label for="rememberchb">Remember me</label>
                                    </div>
                                    <p class="forgot-password">
                                        <a href="recover.html">Forgot Password?</a>
                                    </p>
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Login Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Login Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- Template JS Files -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.countTo.min.js"></script>
<script src="js/animated-headline.js"></script>
<script src="js/jquery.multi-file.min.js"></script>
<script src="js/jquery.ripples-min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYzby4yYDVaXPmtu4jZAGR258K6IYwjIY&amp;libraries"></script>
<script src="js/map-add.js"></script>
<script src="js/main.js"></script>
</body>
<script>
    $("#imageButton").click(function() {
        $('html, body').animate({
            scrollTop: $("#imageView").offset().top
        }, 2000);
    });
    $("#addHotel").click(function() {
        $('html, body').animate({
            scrollTop: $("#hotelAdd").offset().top
        }, 2000);
    });
    $("#addRoom").click(function() {
        $('html, body').animate({
            scrollTop: $("#duplicate").offset().top
        }, 2000);
    });
    $(document).ready(function() {
        $('.clone').hide();
        $(".btn-success").click(function(){
            var html = $(".clone").html();
            $(".increment").after(html);
        });

        $("body").on("click",".btn-danger",function(){
            $(this).parents(".control-group").remove();
        });

    });
</script>
<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/add-hotel.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Sep 2021 10:49:02 GMT -->
</html>
