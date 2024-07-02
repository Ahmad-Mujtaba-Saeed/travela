<div class="packages-item {{$extra_class ?? ''}}">
    <div class="packages-img">
        <img src="{{asset($img ?? 'img/packages-4.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>{{$Location ?? 'Venice - Italy'}}</small>
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>{{$Days ?? '3 days'}}</small>
        </div>
        <div class="packages-price py-2 px-4">{{$Cost ?? '$349.00'}}</div>
    </div>
    <div class="packages-content bg-light">
        <div class="p-4 pb-0">
            <h5 class="mb-0">{{$Location ?? 'Venice - Italy'}}</h5>
            <small class="text-uppercase">Hotel Deals</small>
            <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
            </div>
            <p class="mb-4">{{$Description ?? 'Hello no description'}}</p>
        </div>
        <div class="row bg-primary rounded-bottom mx-0">
            <div class="col-6 text-start px-0">
                <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
            </div>
            <div class="col-6 text-end px-0">
                <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
            </div>
        </div>
    </div>
</div>