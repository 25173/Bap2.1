@extends('layout.master')
{{-- Op deze manier schrijf je commentaar in een Blade template --}}

{{-- Simpele korte tekstinhoud krijg je op deze manier in een section --}}
@section('title', 'Homepage')

{{-- Dit is de pagina titel in de header --}}
@section('page_title', 'Wheelchair rugby')


{{-- Pagina inhoud voor de content section, langer en dus met @section --}}
@section('content')
<h3>Regels</h3>
Bij Quad Rugby is het de bedoeling om de bal met de rolstoel over de doellijn van de tegenstander te brengen. Een score telt als ten minste twee wielen van de Rugby Rolstoel de achterlijn passeren en de bal over de doellijn gaat.

    De bal moet elke 10 seconde worden gestuiterd of naar een teamgenoot worden overgespeeld. Een team heeft 12 seconden de tijd om de bal over de middenlijn te brengen, hiermee een aanval op te zetten en een poging te doen om de bal over de doellijn te brengen. Als er in de vak van de tegenstander wordt gespeeld mag de bal niet terug worden gebracht naar het eigen vak.

    Voor de doellijn ligt de key zone, in deze zone mogen maximaal drie verdedigers aanwezig zijn en de aanvallers mogen zich er maar maximaal 10 seconden bevinden.

    Lichamelijk contact is niet toegestaan maar contact tussen de rolstoelen is wel toegestaan. De tegenstanders mogen door te blokkeren en de ander aan te rijden proberen om de aanval te stoppen en de bal weer over te nemen.

    Een wedstrijd duurt 39 minuten verdeeld over 4 periodes van 8 minuten zuivere speeltijd. Er is 1 minuut pauze na de eerste en de derde periode en na de tweede periode is er een pauze van 5 minuten.

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
                    <a class="nav-link" href="homePage">Home <span class="sr-only">(current)</span></a>
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