<x-guest-layout>
    <!-- Blog Start -->
    <style>
        .card-img-top{
            object-fit: cover;
            height: 300px;
        }
    </style>
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5 pt-5">
            <h4 class="text-secondary mb-3">Nos Posts</h4>
            <h1 class="display-4 m-0"><span class="text-primary">Nos Differents </span> Posts Sur Notre Blog</h1>
        </div>
        <div class="row pb-3">
            @foreach ( $posts as $post )
            <div class="col-lg-4 mb-4 d-flex">
                <div class="card border-0 mb-2">
                    <img class="card-img-top"  src="{{ Storage::url($post->image)}}" alt="">
                    <div class="card-body bg-light p-4 d-flex flex-col">
                        <h4 class="card-title text-truncate">{{$post->title}}</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> {{$post->created_at->format('d M Y')}}</small>
                        </div>
                        <p>{{ Str::limit($post->description, 120) }}</p>
                        <div class="mt-auto">
                            <a class="font-weight-bold" href="{{ route ('blogs.show', $post->id)}}">voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="d-flex justify-content-center">
                {!! $posts->links() !!}

            </div>
        </div>
    </div>
    <!-- Blog End -->
</x-guest-layout>
