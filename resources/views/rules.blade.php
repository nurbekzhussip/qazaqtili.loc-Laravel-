@extends('layouts.layout')
<link href="{{ asset('/css/rules.css') }}" rel="stylesheet" type="text/css">
@section('content')
<div class="container-fluid main">
            <div class="symbol">
                <h2>Ереже</h2>
                <div class="context">
                    <p><i class="fa fa-question-circle" aria-hidden="true"></i>Латын графикасына байланысты ережелермен таныса аласыз</p>
                </div>
                <div class="form-group" id="form-group">
                    <div class="input-group">
                        <input class="form-control" type="text" name="search" placeholder="Іздеу" required/><span class="input-group-btn"><button class="btn btn-success" type="submit"><span class="" aria-hidden="true"><i class="fa fa-search" aria-hidden="true"></i><span>Іздеу</span></span></button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="rules">
                <div class="link"><a href="#">Дауысты дыбыстар</a></div>
                <p>Ережелер латын емлесі толық шыққанда енгізіледі</p>
            </div>
            <div class="rules">
                <div class="link"><a href="#">Дауыссыз дыбыстар</a></div>
                <p>Ережелер латын емлесі толық шыққанда енгізіледі</p>
            </div>
        </div>
@endsection