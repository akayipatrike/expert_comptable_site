<x-guest-layout>
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5 pt-5">
            <h4 class="text-secondary mb-3">Nos Posts</h4>
        </div>
       <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">

                <div class="col-lg-8">

                    <div class="mb-5">
                        <h6 class="text-primary mb-3">{{$post->created_at}}</h6>
                        <h1 class="mb-5">{{$post->title}}</h1>
                        <img class="img-fluid rounded w-100 mb-4" height="300" width="150" src="{{ Storage::url($post->image)}}" alt="Image">
                        <p class="text-justify">{{$post->description}}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Detail End -->
    </div>
</x-guest-layout>
