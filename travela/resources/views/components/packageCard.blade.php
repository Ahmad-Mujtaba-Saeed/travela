<div class="packages-item {{ $extra_class ?? '' }}">
    <div class="packages-img">
        <img src="{{ asset($img ?? 'img/packages-4.jpg') }}" class="img-fluid w-100 rounded-top fit-img" alt="Image">
        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
             style="width: 100%; bottom: 0; left: 0; z-index: 5;">
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>{{ $Location ?? 'Venice - Italy' }}</small>
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>{{ $Days ?? '3 days' }}</small>
        </div>
        <div class="packages-price py-2 px-4" style="white-space: nowrap">{!! $Cost ?? '$349.00' !!}</div>
    </div>
    <style>
        .fit-img {
    width: 100%;  /* Ensure the image takes the full width of the container */
    height: 200px;  /* Set the desired height */
    object-fit: contain;  /* Ensure the image fits within the dimensions while maintaining aspect ratio */
    object-position: center;  /* Center the image within the container */
    background-color: black;  /* Set the background color to black to fill any empty space */
}

    </style>
    <div class="packages-content bg-light">
        <div class="p-4 pb-0">
            <h5 class="mb-0">{{ $Location ?? 'Venice - Italy' }}</h5>
            <small class="text-uppercase">Hotel Deals</small>
            <div class="mb-3">
                @if ($Stars)
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
            @php
                use Illuminate\Support\Str;
            @endphp

            <p class="mb-4">{{ Str::limit($Description ?? 'Hello no description', 100) }}
            </p>
        </div>
        <div class="row bg-primary rounded-bottom mx-0">

            <div class="col-6 text-start px-0">
                @if (isset($deleteURL))
                    <a href="{{ url($deleteURL) }}"
                        class="btn-hover btn text-white py-2 px-4">{!! $delete !!}</a>
                @else
                    <a href="{{ url($ReadmoreURL ?? '/Readmore') }}" class="btn-hover btn text-white py-2 px-4">Read
                        More</a>
                @endif

            </div>
            <div class="col-6 text-end px-0">
                <a href="{{ url($editURL ?? $BooknowURL) }}"
                    class="btn-hover btn text-white py-2 px-4">{!! $edit ?? 'Book Now' !!}</a>
            </div>
        </div>
    </div>
</div>
