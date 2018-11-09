@extends('layout.master')
{{-- Op deze manier schrijf je commentaar in een Blade template --}}

{{-- Simpele korte tekstinhoud krijg je op deze manier in een section --}}
@section('title', 'Homepage')

{{-- Dit is de pagina titel in de header --}}
@section('page_title', 'Wheelchair rugby')


{{-- Pagina inhoud voor de content section, langer en dus met @section --}}
@section('content')
   <h1>OVER ONS</h1>
<p>  The Flying Dutchmen is het talententeam van Nederland in de spectaculaire sport wheelchair rugby, ook wel quadrugby of murderball genoemd.

    Wij bestaan uit een groep van 12 jonge atleten tussen 17 en 30 jaar die uit heel Nederland komen. Sinds vorig jaar is de talentselectie begonnen met de voorbereidingen op het EK divisie B van 2018. Doel is om ons op dit toernooi in de top 2 te plaatsen zodat we kunnen promoveren naar de A-divisie. Het EK-A vindt plaats in 2019 en is het kwalificatiemoment voor het einddoel: deelname aan de Paralympische Spelen van Tokyo in 2020. Een ambitieus doel en een enorme uitdaging waarin we alle steun kunnen gebruiken!

    De talentselectie traint 2x in de maand centraal onder begeleiding van de bondscoach, 1x in Amsterdam en 1x in Nijmegen. Daarnaast trainen alle leden in de selectie 2x per week met hun eigen club en volgen we allen een individueel samengesteld krachttrainingsprogramma. Omdat de sport in Nederland nog klein is zijn de middelen die de selectie heeft beperkt: zo gaan we 1 a 2x per jaar naar een internationaal toernooi waarbij alle atleten ook een eigen financiële bijdrage moeten leveren. Om toch meer internationale ervaring op te doen gaan wij daarom regelmatig op eigen initiatief naar het buitenland voor toernooien of trainingskampen, waarbij alle reis- en verblijfskosten voor eigen rekening zijn.

    U kan een mooie bijdrage leveren in de ontwikkeling van deze jonge atleten. Nederland bevindt zich op dit moment in een unieke positie: geen ander Europees land heeft zo een grote groep jeugdige spelers met internationale ervaring tot zijn beschikking. Wij hebben de potentie om de komende jaren Nederland internationaal op de kaart zetten, maar vooral voor de jongere spelers is het lastig om zoveel extra bijkomende kosten naast de toch al grote investeringen die nodig zijn om überhaupt de sport te kunnen beoefenen (een rugbyrolstoel kost minimaal €5.500,- en de vergoedingsregelingen in Nederland dekken vaak net aan de helft) bij te houden. Met extra middelen kunnen we het ons veroorloven om een meerdaags centraal trainingskamp te organiseren of nog een aantal keer een toernooi te bezoeken. Ook kunnen we met een budget samen centraal ons materiaal inkopen zoals handschoenen, tape en buiten/binnenbanden zodat de stuksprijs lager wordt.

    Bent u ook net zo enthousiast over wheelchair rugby als wijen bent u geïnteresseerd om ons te ondersteunen in de weg naar de top, neem dan contact met ons op of maak een donatie op onze pagina. Kijkt u ook eens in onze webshop: met deze merchandise ondersteunt u ons en laat u zien ook ‘Fly like a Dutchman’ te zijn!</p>
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