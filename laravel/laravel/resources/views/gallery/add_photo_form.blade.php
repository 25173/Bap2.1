@extends ('layout.master')

@section ('content')
    <h1>Photo Gallery</h1>

    <form action="{{route('gallery.save_photo')}} " method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">titel</label>
            <input type="text" value=" {{old('tilte') }}" name="title" placeholder="vul hier de titel in" class="form-control">

            @if($errors->has('title'))
                <p class="text-danger"> $errors->first('title') </p>
            @endif
        </div>
        <div class="form-group">
            <label for="discription">Omschrijving</label>
            <textarea name="description" placeholder="vul hier de description in" class="form-control">
            </textarea>
            @if( $errors->has('description'))
                <p class="text-danger"> $errors->first('description') </p>
            @endif
        </div>

        <div class="form-group">
            <label for="photo">Foto</label>
            <input type="file" name="photo">
            @if( $errors->has('photo'))
                <p class="text-danger"> $errors->first('photo') </p>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Opsturen</button>
    </form>
    <button href="{{route('gallery.index')}}" class="btn"> Terug</button>
@endsection

