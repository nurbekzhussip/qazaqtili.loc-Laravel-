$(document).ready(function () {
    var files;
    $('input[type=file]').on('change', function () {
        files = this.files;
    });
    $('textarea').each(function () {
        this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
    }).on('input', function () {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight) + 'px';
    })
    $('.upload_files').on('click', function (event) {
        event.stopPropagation();
        event.preventDefault();
        var type = $("#select_type option:selected").attr("value");
        if (typeof files == 'undefined') return;
        var data = new FormData();
        data.append("type", type);
        var i = 0;
        $.each(files, function (key, value) {
            data.append(key, value);
        });
        $.ajax({
            url: 'submit.php'
            , type: 'POST'
            , data: data
            , dataType: 'json'
            , enctype: 'multipart/form-data'
            , cache: false
            , processData: false
            , contentType: false
            , beforeSend: function () {
                $(".main").append("<div class='loader'></div>");
            }
            , success: function (data) {
                $.each(data, function (index, element) {
                    window.location = "uploads/file.php?file=" + element;
                    $(".loader").remove();
                });
            }
            , error: function (data) {}
        });
    });
    
    $("#clear").on("click", function () {
        $("#text1").val("");
        $("#text2").text("");
    });
    $('#input input[name=input]').on('click', function () {
        var input = $('input[name=input]:checked').val();
        var output = $('input[name=output]:checked').val();
        if (input == "lat" && output == "lat") {
            $("#output input[value='cyr']").prop("checked", true);
        }
        else if (input == "cyr" && output == "cyr") {
            $("#output input[value='lat']").prop("checked", true);
        }
        input = $('input[name=input]:checked').val();
        output = $('input[name=output]:checked').val();
        type(input, output);
    });
    $('#output input[name=output]').on('click', function () {
        var input = $('input[name=input]:checked').val();
        var output = $('input[name=output]:checked').val();
        if (input == "lat" && output == "lat") {
            $("#input input[value='cyr']").prop("checked", true);
        }
        else if (input == "cyr" && output == "cyr") {
            $("#input input[value='lat']").prop("checked", true);
        }
        input = $('input[name=input]:checked').val();
        output = $('input[name=output]:checked').val();
        type(input, output);
    });
    $("#text1").on("keyup", function () {
        var input = $('input[name=input]:checked').val();
        var output = $('input[name=output]:checked').val();
        type(input, output);
    });
});

function type(input, output) {
    var txt1 = $('#text1').val();
    if (input == "cyr" && output == "lat") {
        cyrilltolatyn(txt1, "");
    }
    else if (input == "lat" && output == "cyr") {
        latyntocyrill(txt1, "");
    }
}

function latyntocyrill(txt1, element) {
    $("#text1").attr("placeholder", "Sáıkestendirilgen mazmundy engizińiz");
    var txt2 = "";
    var has = false;
    var upindex = txt1.indexOf("I");
    var loindex = txt1.indexOf("ı");
    if (upindex > 0 || loindex > 0) {
        var char = "";
        if (loindex > 0) {
            char = txt1.charAt(loindex - 1);
        }
        else {
            char = txt1.charAt(upindex - 1);
        }
        var vowels = ["A", "a", "Á", "á", "E", "e", "I", "ı", "O", "o", "О́", "ó", "U", "u", "Ú", "ú", "Ý ", "ý", "Y", "y", "I", "i"];
        //а, ә, е, и, о, ө, ұ, ү, у, ы, і, э
        for (var i = 0; i < vowels.length; i++) {
            if (char == vowels[i]) {
                has = true;
                break;
            }
        }
    }
    if (has) {
        txt2 = txt1.replace(/Á/g, "Ә").replace(/á/g, "ә").replace(/A/g, "А").replace(/a/g, "а").replace(/B/g, "Б").replace(/b/g, "б").replace(/V/g, "В").replace(/v/g, "в").replace(/Ǵ/g, "Ғ").replace(/ǵ/g, "ғ").replace(/G/g, "Г").replace(/g/g, "г").replace(/D/g, "Д").replace(/d/g, "д").replace(/E/g, "Е").replace(/e/g, "е").replace(/J/g, "Ж").replace(/j/g, "ж").replace(/Z/g, "З").replace(/z/g, "з").replace(/K/g, "К").replace(/k/g, "к").replace(/Q/g, "Қ").replace(/q/g, "қ").replace(/L/g, "Л").replace(/l/g, "л").replace(/M/g, "М").replace(/m/g, "м").replace(/Ń/g, "Ң").replace(/ń/g, "ң").replace(/N/g, "Н").replace(/n/g, "н").replace(/О́/g, "Ө").replace(/ó/g, "ө").replace(/O/g, "О").replace(/o/g, "о").replace(/P/g, "П").replace(/p/g, "п").replace(/R/g, "Р").replace(/r/g, "р").replace(/T/g, "Т").replace(/t/g, "т").replace(/Ý/g, "У").replace(/ý/g, "у").replace(/Ú/g, "Ү").replace(/ú/g, "ү").replace(/U/g, "Ұ").replace(/u/g, "ұ").replace(/F/g, "Ф").replace(/f/g, "ф").replace(/H/g, "Х").replace(/h/g, "х").replace(/Ch/g, "Ч").replace(/ch/g, "ч").replace(/Sh/g, "Ш").replace(/sh/g, "ш").replace(/Sh/g, "Щ").replace(/sh/g, "щ").replace(/S/g, "С").replace(/s/g, "с").replace(/Y/g, "Ы").replace(/y/g, "ы").replace(/I/g, "Й").replace(/ı/g, "й").replace(/I/g, "І").replace(/i/g, "і").replace(/w/g, "").replace(/W/g, "").replace(/\n/g, "</br>");
    }
    else {
        txt2 = txt1.replace(/Á/g, "Ә").replace(/á/g, "ә").replace(/A/g, "А").replace(/a/g, "а").replace(/B/g, "Б").replace(/b/g, "б").replace(/V/g, "В").replace(/v/g, "в").replace(/Ǵ/g, "Ғ").replace(/ǵ/g, "ғ").replace(/G/g, "Г").replace(/g/g, "г").replace(/D/g, "Д").replace(/d/g, "д").replace(/E/g, "Е").replace(/e/g, "е").replace(/J/g, "Ж").replace(/j/g, "ж").replace(/Z/g, "З").replace(/z/g, "з").replace(/K/g, "К").replace(/k/g, "к").replace(/Q/g, "Қ").replace(/q/g, "қ").replace(/L/g, "Л").replace(/l/g, "л").replace(/M/g, "М").replace(/m/g, "м").replace(/Ń/g, "Ң").replace(/ń/g, "ң").replace(/N/g, "Н").replace(/n/g, "н").replace(/О́/g, "Ө").replace(/ó/g, "ө").replace(/O/g, "О").replace(/o/g, "о").replace(/P/g, "П").replace(/p/g, "п").replace(/R/g, "Р").replace(/r/g, "р").replace(/T/g, "Т").replace(/t/g, "т").replace(/Ý/g, "У").replace(/ý/g, "у").replace(/Ú/g, "Ү").replace(/ú/g, "ү").replace(/U/g, "Ұ").replace(/u/g, "ұ").replace(/F/g, "Ф").replace(/f/g, "ф").replace(/H/g, "Х").replace(/h/g, "х").replace(/Ch/g, "Ч").replace(/ch/g, "ч").replace(/Sh/g, "Ш").replace(/sh/g, "ш").replace(/S/g, "С").replace(/s/g, "с").replace(/Y/g, "Ы").replace(/y/g, "ы").replace(/I/g, "И").replace(/ı/g, "и").replace(/I/g, "І").replace(/i/g, "і").replace(/w/g, "").replace(/W/g, "").replace(/\n/g, "</br>");
    }
    $("#text2").html(txt2);
}

function cyrilltolatyn(txt1, element) {
    $("#text1").attr("placeholder", "Сәйкестендірілген мазмұнды енгізіңіз");
    var txt2 = txt1.replace(/А/g, "A").replace(/а/g, "a").replace(/Ә/g, "Á").replace(/ә/g, "á").replace(/Б/g, "B").replace(/б/g, "b").replace(/В/g, "V").replace(/в/g, "v").replace(/Ғ/g, "Ǵ").replace(/ғ/g, "ǵ").replace(/Г/g, "G").replace(/г/g, "g").replace(/Д/g, "D").replace(/д/g, "d").replace(/Е/g, "E").replace(/е/g, "e").replace(/Ё/g, "Io").replace(/ё/g, "ıo").replace(/Ж/g, "J").replace(/ж/g, "j").replace(/З/g, "Z").replace(/з/g, "z").replace(/И/g, "I").replace(/и/g, "ı").replace(/Й/g, "I").replace(/й/g, "ı").replace(/К/g, "K").replace(/к/g, "k").replace(/Қ/g, "Q").replace(/қ/g, "q").replace(/Л/g, "L").replace(/л/g, "l").replace(/М/g, "M").replace(/м/g, "m").replace(/Н/g, "N").replace(/н/g, "n").replace(/Ң/g, "Ń").replace(/ң/g, "ń").replace(/О/g, "O").replace(/о/g, "o").replace(/Ө/g, "О́").replace(/ө/g, "ó").replace(/П/g, "P").replace(/п/g, "p").replace(/Р/g, "R").replace(/р/g, "r").replace(/С/g, "S").replace(/с/g, "s").replace(/Т/g, "T").replace(/т/g, "t").replace(/У/g, "Ý").replace(/у/g, "ý").replace(/Ұ/g, "U").replace(/ұ/g, "u").replace(/Ү/g, "Ú").replace(/ү/g, "ú").replace(/Ф/g, "F").replace(/ф/g, "f").replace(/Х/g, "H").replace(/х/g, "h").replace(/Һ/g, "h").replace(/Ц/g, "Ts").replace(/ц/g, "ts").replace(/Ч/g, "Ch").replace(/ч/g, "ch").replace(/Ш/g, "Sh").replace(/ш/g, "sh").replace(/Щ/g, "Sh").replace(/щ/g, "sh").replace(/Ъ/g, "").replace(/ъ/g, "").replace(/Ы/g, "Y").replace(/ы/g, "y").replace(/І/g, "I").replace(/і/g, "i").replace(/Ь/g, "").replace(/ь/g, "").replace(/Э/g, "E").replace(/э/g, "e").replace(/Ю/g, "Iý").replace(/ю/g, "ıý").replace(/Я/g, "Ia").replace(/я/g, "ıa");
    $("#text2").html(txt2);
}

function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
}