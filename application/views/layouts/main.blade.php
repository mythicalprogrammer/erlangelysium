<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Erlang Elysium</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        {{ Asset::styles() }}
        {{ Asset::scripts() }}
<script>
function decodeHTMLentity(text) {
    var decoded = $('<div/>').html(text).text();
    return decoded;
}
function termFormatResult(term) {
    var markup = "<dl>";
    markup += "<dt class='term-name'>" + decodeHTMLentity(term.attributes.name) + "</dt>";
    markup += "<dd class='term-summary'><code>" + decodeHTMLentity(term.attributes.semantic) + "</code></dd>";
    markup += "<dd class='term-summary'>" + decodeHTMLentity(term.attributes.summary) + "</dd>";
    markup += "</dl>"
    return markup;
}
function termFormatSelection(term) {
    return term.attributes.name;
} 
$(document).ready(function() {
    $("#search").select2({
        placeholder: "Search",
        minimumInputLength: 2,
        ajax: {
            url: "search",
            dataType: 'json',
            quietMillis: 120,
            data: function (term, page) { // page is the one-based page number tracked by Select2
                return {
                    q: term, //search term
                    page_limit: 10, // page size
                    page: page, // page number
                };
            },
            results: function (data, page) {
                var more = (page * 10) < data.total; // whether or not there are more results available
                //notice we return the value of more so Select2 knows if more results can be loaded
                return {results: data, more: more};
            }
       },
       formatResult: termFormatResult, // omitted for brevity, see the source of this page
       formatSelection: termFormatSelection, // omitted for brevity, see the source of this page
       dropdownCssClass: "bigdrop" // apply css that makes the dropdown taller
    });
}); 
</script>
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Erlang Elysium</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            @section('navigation')
                            <li class="active"><a href="#">Home</a></li>
                            @yield_section
                        </ul>
                        <form class="navbar-form pull-right">
                            <input class="span2" type="text" placeholder="Email">
                            <input class="span2" type="password" placeholder="Password">
                            <button type="submit" class="btn">Sign in</button>
                        </form>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">
            @yield('content')
            <!-- Main hero unit for a primary marketing message or call to action -->
<!--
            <div class="hero-unit" style="text-align:center;background-color:rgba(0,0,0,0.8);">
                <h1 style="text-align:center;color:white">Erlang Elysium</h1>
                <input style="margin-top:15px;width:500px;" type="text" />
            </div>
-->
            <hr>

            <footer>
                <p>Unrequited Love 2012-2013</p>
            </footer>

        </div> <!-- /container -->
<!--
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

<script>
var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
-->
    </body>
</html>
