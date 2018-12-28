@extends('layout.master')
{{-- Op deze manier schrijf je commentaar in een Blade template --}}

{{-- Simpele korte tekstinhoud krijg je op deze manier in een section --}}
@section('title', 'Homepage')

{{-- Dit is de pagina titel in de header --}}
@section('page_title', 'Wheelchair rugby')


{{-- Pagina inhoud voor de content section, langer en dus met @section --}}
@section('content')
    @if ($errors->any())
        <h4>Het formulier bevat fouten:</h4>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2>Neem contact met ons op!</h2>
    <h2>Uw gegevens</h2>
    <form action="{{ route('contact.handle') }}" method="POST" method="POST">
        @csrf
        <div class="row">
            <div class="col-5">
                <div class="form-group">
                    <label for="voornam">Voornaam:</label>
                    <input type="text" id="voornam" name="firstname" class="form-control"
                           value="{{ old('firstname') }}"/>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label for="tussenvoegsel">Tussenvoegsel:</label>
                    <input type="text" id="tussenvoegsel" name="middlename" class="form-control"
                           value="{{ old('middlname') }}"/>
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label for="achternaam">Achternaam:</label>
                    <input id="achternaam" type="text" name="lastname" class="form-control"
                           value="{{ old('lastname') }}"/>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="E-mail">E-mail:</label>
            <input id="E-mail" type="email" name="email" class="form-control" value="{{ old('email') }}"/>
        </div>
        <div class="form-group">
            <label for="E-mail2">herhaal E-mail:</label>
            <input id="E-mail2" type="email" name="Emails" class="form-control" value="{{ old('Emails') }}"/>
        </div>
        <div class="form-group">
            <label for="bericht">jouw bericht:</label>
            <textarea type="text" id="bericht" name="bericht" class="form-control"
                      >{{ old('bericht') }}</textarea>
        </div>
        <p>
            <button type="submit" class="btn btn-primary">Opsturen</button>
        </p>
    </form>
@endsection
{{-- Vergeet de @endsection niet! --}}


{{-- Het hoofdmenu / navigatie--}}
@section('navigation')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">@yield('page_title')</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ URL::to('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutMe">over ons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sponsors">sponsors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="regels">regels</a>
                </li>
            </ul>
        </div>
    </nav>
@endsection