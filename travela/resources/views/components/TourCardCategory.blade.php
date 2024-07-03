<div class="col-md-6 col-lg-4">
    <div class="national-item">
        <img src="{{asset($img ?? 'img/explore-tour-1.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
        <div class="national-content">
            <div class="national-info">
                <h5 class="text-white text-uppercase mb-2">{{$TourType ?? 'Weekend Tour'}}</h5>
                <a href="#" class="btn-hover text-white">{{$places ?? 'View All Place'}} <i class="fa fa-arrow-right ms-2"></i></a>
            </div>
        </div>
        <div class="national-plus-icon">
            <a href="#" class="my-auto">{!! $delete ?? '<i class="fas fa-link fa-2x text-white"></i>' !!}</a>
        </div>
    </div>
</div>