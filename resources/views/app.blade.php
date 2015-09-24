<!DOCTYPE html>
<!--[if lt IE 7 ]>  <html class="jsOff ie ie6 ltie8 ltie9" lang="en"> <![endif]-->
<!--[if IE 7 ]>     <html class="jsOff ie ie7 ltie8 ltie9" lang="en"> <![endif]-->
<!--[if IE 8 ]>     <html class="jsOff ie ltie8 ltie9" lang="en"> <![endif]-->
<!--[if IE 9 ]>     <html class="jsOff ie ltie9" lang="en"> <![endif]-->
<!--[if (gt IE 9) | !(IE) ]><!-->  
<html lang="en">
<!--<![endif]-->
    <!-- App Head -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="author" content="Chantrelle EMS/J. Chantrelle"/>
        <!--SEO-->
        <meta name="ROBOTS" content="INDEX,NOFOLLOW"/>
        <meta name="description" content="Imani Gordon Website"/>
        <meta name="keywords" content="counterfeit imani nolo artist jamaica miami king singer rapper"/>
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <title>GoImani.com</title>
        <link rel="icon" type="image/png" href="{{ url('images/social/imani_icon.png') }}">
        <link rel="shortcut icon" href="{{ url('images/social/imani_icon.png') }}">
        <link href="{{ elixir('output/final.css') }}" rel="stylesheet">
        <!-- <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Header -->
        <header>
            @include('partials._navigation')
        </header>

        <!-- Content -->
        <div class="container-fluid" id="main-content">

            @yield('content')

        </div>

        <!-- Footer -->
        <footer>
            
        </footer>

        <!-- App Global Scripts -->
        <script type="text/javascript" id="cemsObject">

            console.log('App.blade loads cems namespace');

            var cems = cems || {
                Models      :   {},
                Collections :   {},
                Views       :   {},
                Router      :   {},
                Templates   :   {},
                Util        :   {}
            };

        </script>

        <script src="{{ url('output/scripts.js') }}" id="compiledScripts"></script>

        @yield('footerscripts')

    </body>
</html>