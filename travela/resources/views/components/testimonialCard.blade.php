<div class="testimonial-item text-center rounded pb-4 {{$extra_class ?? ''}}">
    <div class="testimonial-comment bg-light rounded p-4">
        <p class="text-center mb-5">{{$Paragraph ?? 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,'}}</p>
    </div>
    <div class="testimonial-img p-1">
        <img src="{{asset($img ?? 'img/testimonial-1.jpg')}}" class="img-fluid rounded-circle" alt="Image">
    </div>
    <div style="margin-top: -35px;">
        <h5 class="mb-0">{{$Name ?? 'John Abraham'}}</h5>
        <p class="mb-0">{{$Location ?? 'New York, USA'}}</p>
        <div class="d-flex justify-content-center">
            @if($Stars)
                @for ($i = 0; $i < $Stars; $i++)
                    <i class="fas fa-star text-primary"></i>
                @endfor
            @else
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
            @endif
        </div>
    </div>
</div>
