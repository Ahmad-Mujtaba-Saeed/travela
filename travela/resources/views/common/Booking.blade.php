<div class="container-fluid booking py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h5 class="section-booking-title pe-3">{{ isset($tourPackage) ? 'Booking' : 'Custom Booking' }}</h5>
                <h1 class="text-white mb-4">Online Booking</h1>
                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime
                    ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium?
                    Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                </p>
                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime
                    ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium?
                    Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                </p>

                <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">Read More</a>
            </div>
            <div class="col-lg-6">

                <h1 class="text-white mb-3">
                    {{ isset($tourPackage) ? 'Book your Tour Package now' : 'Book A Custom Tour Deal' }}</h1>
                <p class="text-white mb-4">Get <span class="text-warning">50% Off</span> On Your First Adventure Trip
                    With Travela. Get More Deal Offers Here.</p>
                <form action="{{ isset($tourPackage) ? url('/BookingTourPackage') : url('/BookingCustomDeal') }}"
                    method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="Name" class="form-control bg-white border-0"
                                    id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" name="Email" class="form-control bg-white border-0"
                                    id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input type="text" name="Date" class="form-control bg-white border-0"
                                    id="datetime" placeholder="Date & Time" data-target="#date3"
                                    data-toggle="datetimepicker" />
                                <label for="datetime">Date</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                @if ( isset($tourPackage))
                                <select {{ isset($tourPackage) ? 'disabled' : '' }} name="Package" class="form-select bg-white border-0" id="select1">
                                    <option  {{ isset($tourPackage) ? 'selected' : '' }}  value="{{ $tourPackage->Location ?? 'Destination 1' }}">
                                        {{ $tourPackage->Location ?? 'Destination 1' }}</option>
                                    <option value="Destination 2">Destination 2</option>
                                    <option value="Destination 3">Destination 3</option>
                                </select>
                                <label for="select1">Selected package</label>
                                @else
                                <select name="Package" class="form-select bg-white border-0" id="select1">
                                    @foreach ($cities as $item)
                                        <option value="{{$item['name']}}">{{$item['name'] }}</option>
                                    @endforeach
                                </select>
                                <label for="select1">Select Destination</label>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select name="Persons" class="form-select bg-white border-0" id="SelectPerson">
                                    <?php
                                    $collection = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26];
                                    ?>
                                    @foreach ($collection as $item)
                                        <option value="{{$item}}">Persons {{$item}}</option>
                                    @endforeach
                                </select>
                                <label for="SelectPerson">Persons</label>
                            </div>
                        </div>
                        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectPerson = document.getElementById('SelectPerson');
            const Kids = document.getElementById('Kids');
            const costDisplay = document.getElementById('Price');
            const baseCost = parseFloat(document.getElementById('initialPrice').value); // Base cost for 1 person
            
            function calculateCost() {
                const numberOfPersons = parseInt(selectPerson.value) || 0;
                const numberOfKids = parseInt(Kids.value) || 0;
                const totalCost = (baseCost * numberOfPersons) + (baseCost * (numberOfKids / 2));
                costDisplay.value = `$${totalCost.toFixed(2)}`;
            }
            
            selectPerson.addEventListener('change', calculateCost);
            Kids.addEventListener('change', calculateCost);
        });
                        </script>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select name="Kids" class="form-select bg-white border-0" id="Kids">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="3">4</option>
                                    <option value="3">5</option>
                                    <option value="3">6</option>
                                    <option value="3">7</option>
                                </select>
                                <label for="CategoriesSelect">Kids</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                @if (isset($tourPackage))
                                    <?php
                                    $cleanedValue = str_replace(['$', ' '], '', $tourPackage->Cost);
                                    $integerValue = (int) floatval($cleanedValue);
                                    ?>
                                    <input hidden type="number" name="initialPrice" id="initialPrice" value="<?php echo $integerValue ?>" />
                                    <input hidden name="ID" id="ID" value="{{$tourPackage->id}}" />
                                    <input hidden name="Package" id="Package" value="{{$tourPackage->Location}}" />
                                    <input readonly type="text" name="Price" class="form-control bg-white border-0"
                                        id="Price" placeholder="Grand Total" value="{{ $tourPackage->Cost }}">
                                    <label for="Price">Grand Total</label>
                                    @else
                                    <textarea name="SpecialRequest" class="form-control bg-white border-0" placeholder="Special Request" id="message"
                                        style="height: 100px"></textarea>
                                    <label for="message">Special Request</label>
                                    @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary text-white w-100 py-3" type="submit">Book Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
