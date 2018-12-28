@extends ('layout.master')

@section ('content')
    <h1>Photo Gallery</h1>

    @foreach($photos as $photo)

        <li> {{$photo->title}} <br> <img width="30%" src="photos/{{ $photo->photo }}" alt=""> <br> {{$photo->description}}</li>

        @endforeach

    <button class="btn"><a href="{{route('gallery.add_photo')}}">Foto Toevoegen</a></button>
@endsection