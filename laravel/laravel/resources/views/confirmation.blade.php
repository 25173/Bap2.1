
@extends('layout.master')
{{-- Op deze manier schrijf je commentaar in een Blade template --}}

{{-- Simpele korte tekstinhoud krijg je op deze manier in een section --}}
@section('title', 'Homepage')

{{-- Dit is de pagina titel in de header --}}
@section('page_title', 'Wheelchair rugby')


{{-- Pagina inhoud voor de content section, langer en dus met @section --}}
@section('content')
    @if( session()->has('formData'))
        <div class="well well-sm">
            <h1>Bedankt</h1>
            <p>Hier ziet u de opgestuurde gegevens:</p>
            <p>
                <strong>Voornaam:</strong> {{ session('formData.firstname') }}<br/>
                <strong>Tussenvoegsel:</strong>
                {{ session('formData.middlename') }}<br/>
                <strong>Achternaam:</strong> {{ session('formData.lastname') }}<br/>
                <strong>E-mail:</strong> {{ session('formData.email') }}<br/>
                <strong>bericht:</strong> {{ session('formData.bericht')}}<br/>
            </p>
            <p>
                <a href="{{ route('contact.form') }}">Terug naar het
                    formulier</a>
            </p>
        </div>
    @endif
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