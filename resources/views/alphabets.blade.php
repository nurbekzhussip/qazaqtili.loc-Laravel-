@extends('layouts.layout')
<link href="{{ asset('/css/alphabets.css') }}" rel="stylesheet" type="text/css">
@section('content')
<div class="container-fluid main">
    <div class="col-lg-12 symbol">
        <h2>Әліпби</h2>
        <div class="context">
            <p><i class="fa fa-question-circle" aria-hidden="true"></i>Латын графикасында 32 әріп бар</p>
        </div>
    </div>
    @foreach($alphabets as $a)
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
        <div class="alphabet">
            <p class="example">{{$a->word}}</p>
            <p><span class="lat">{{$a->latynupper}} {{$a->latynlower}}</span><span class="cyr">{{$a->cyrillicupper}} {{$a->cyrilliclower}}</span></p>
            <div class="image"><img src="images/{{$a->img}}" alt=""></div>
        </div>
    </div>
    @endforeach
</div>
@endsection