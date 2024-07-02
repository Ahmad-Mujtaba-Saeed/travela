<div class="col-md-6 col-lg-3">
    <div class="guide-item">
        <div class="guide-img">
            <div class="guide-img-efects">
                <img src="{{asset($img ?? 'img/guide-1.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
            </div>
            <div class="guide-icon rounded-pill p-2">
                <a class="btn btn-square btn-primary rounded-circle mx-1" href="{{$flink ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-primary rounded-circle mx-1" href="{{$tlink ?? '#' }}"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-primary rounded-circle mx-1" href="{{$ilink ?? '#' }}"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-square btn-primary rounded-circle mx-1" href="{{$llink ?? '#' }}"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="guide-title text-center rounded-bottom p-4">
            <div class="guide-title-inner">
                <h4 class="mt-3">{{$Name ?? 'Full Name'}}</h4>
                <p class="mb-0">{{$Designation ?? 'Designation'}}</p>
            </div>
        </div>
    </div>
</div>