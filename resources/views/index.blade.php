@extends('layouts.layout')
@section('content')
<div class="container-fluid main">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input" id="input">
        <input type="radio" name="input" id="type1" value="cyr" checked/>
        <label for="type1" class="type">қаз</label>
        <input type="radio" name="input" id="type2" value="lat" />
        <label for="type2" class="type">qaz</label>
        <textarea name="" cols="30" rows="10" id='text1' maxlength="5000" placeholder="Сәйкестендірілген мазмұнды енгізіңіз" contentEditable="true"></textarea><span class="clear"><i class="fa fa-trash" aria-hidden="true" id="clear"></i></span></div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="output">
        <input type="radio" name="output" id="type4" value="cyr" />
        <label for="type4" class="type hidden-xs">қаз</label>
        <input type="radio" name="output" id="type5" value="lat" checked/>
        <label for="type5" class="type hidden-xs">qaz</label>
        <div class="text2"><p id="text2"></p></div><span class="clipboard"><i class="fa fa-clone" aria-hidden="true" onclick="copyToClipboard('#text2')"></i></span></div>
    <p class="file_info">Құжаттағы мәтінді сәйкестендіру (.docx)</p>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="files" id="files"> </form>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="ajax">
            <div class="form-group">
                <select class="form-control" id="select_type">
                    <option value="cyrtolat">Кирилл >> Latyn</option>
                    <option value="lattocyr">Latyn >> Кирилл</option>
                </select>
            </div><a href="javascript:void(0)" class="upload_files upload"><i class="fa fa-language" aria-hidden="true"></i>Сәйкестендіру</a></div>
    </div>
</div>
@endsection