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
        <link href="{{ elixir('output/final.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                padding-top: 50px;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                background-image: url("../../images/backdrops/EPK-cover-1.png");
                background-repeat: no-repeat;
                background-position: center; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                /* IE */
                filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='../../images/backdrops/EPK-cover-1.png', sizingMethod='scale');
                -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='../../images/backdrops/EPK-cover-1.png', sizingMethod='scale')";
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            #main-content {
                /*margin-top: 50px;*/
                display: block;
                /*background-color: lightgrey;*/
                z-index: 10;
            }
            .fixed-wrapper {
                position: absolute;
                top: 0;
                display: block;
                width: 100%;
                height: 100%;
                z-index: 1;
            }
            .sitePageImage {
                position: relative;;
                display: block;
                margin: 0 auto;
                width: 800px;
                height: 100%;
                z-index: 2;
            }
            img#rallyRally {
                position: absolute;
                top: 0;
                display: block;
                height: 100%
                z-index: 3;
            }
            header {
                z-index: 10;
            }

            .row.page-content {
                background-color: rgba(54,54,54,0.0625);
                padding: 15px;
            }
            li {
                list-style: none;
            }
            .panel, .panel .panel-heading, .panel .panel-body, .panel .panel-footer {
                background-color: transparent;
                border: none;
            }

            .panel.rgg {
                /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#999584+0,b0915c+39,b0915c+61,4f381c+100&amp;0.75+0,0.75+39,0.75+61,0.75+100 */
                background: -moz-linear-gradient(top,  rgba(153,149,132,0.75) 0%, rgba(176,145,92,0.75) 39%, rgba(176,145,92,0.75) 61%, rgba(79,56,28,0.75) 100%); /* FF3.6+ */
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(153,149,132,0.75)), color-stop(39%,rgba(176,145,92,0.75)), color-stop(61%,rgba(176,145,92,0.75)), color-stop(100%,rgba(79,56,28,0.75))); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(top,  rgba(153,149,132,0.75) 0%,rgba(176,145,92,0.75) 39%,rgba(176,145,92,0.75) 61%,rgba(79,56,28,0.75) 100%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(top,  rgba(153,149,132,0.75) 0%,rgba(176,145,92,0.75) 39%,rgba(176,145,92,0.75) 61%,rgba(79,56,28,0.75) 100%); /* Opera 11.10+ */
                background: -ms-linear-gradient(top,  rgba(153,149,132,0.75) 0%,rgba(176,145,92,0.75) 39%,rgba(176,145,92,0.75) 61%,rgba(79,56,28,0.75) 100%); /* IE10+ */
                background: linear-gradient(to bottom,  rgba(153,149,132,0.75) 0%,rgba(176,145,92,0.75) 39%,rgba(176,145,92,0.75) 61%,rgba(79,56,28,0.75) 100%); /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#bf999584', endColorstr='#bf4f381c',GradientType=0 ); /* IE6-9 */
                box-shadow: -5px 15px 15px 2.5px rgba(0,0,0,0.25)
            }
            .panel-heading .panel-title {
                /*font-family: "Alegreya Sans SC", sans-serif;*/
                font-weight: 700;
                letter-spacing: 0.125em;
            } 
            .panel-footer {
                /*font-family: "Alegreya Sans SC", sans-serif;*/
                font-size: 1.125em;
                font-weight: 500;
                letter-spacing: 0.0625em;
            }
        </style>
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
