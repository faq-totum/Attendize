<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{{$organiser->name}}}</title>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0" />

        <!-- Open Graph data -->
        <meta property="og:title" content="{{{$organiser->name}}}" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="{{URL::to('')}}" />
        <meta property="og:image" content="{{URL::to($organiser->full_logo_path)}}" />
        <meta property="og:description" content="{{{Str::words(strip_tags($organiser->description)), 20}}}" />
        <meta property="og:site_name" content="Attendize.com" />
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

       {!!HTML::style('assets/stylesheet/frontend.css')!!}
        @yield('head')

        <link data-n-head="ssr" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500&amp;display=swap">
        <style>

            body {
                padding-top: 75px;
            }

            h1 {
                font-size: 38px;
                color: #582c83;
            }

            #header {
                height: 75px;
                background-color: #582c83;
                padding-top: 24px;
                position: fixed;
                width: 100%;
                top: 0;
                left: 0;
                z-index: 9999;
            }

            #header .home-menu {
                float: right;
                color: #fff;
                font-size: 16px;
                line-height: 28px;
            }

            .event-list>li>.info {
                height: 130px;
            }

            .event-listing-heading {
                margin-top: 25px;
            }

            .event-list {
                margin-bottom: 25px;
            }

            .event-list>li>.info>ul>li {
                padding: 6px 0;
            }

            .event-list>li>.info>ul>li,
            .event-list>li>.info>ul>li:hover,
            .event-list>li>.info>ul>li>a {
                background-color: #582c83;
                color: #fff;
            }

            footer {
                height: 100%;
                background-color: #582c83;
            }

            footer a, footer a:hover {
                color: #fff;
                text-decoration: underline;
                font-weight: 100;
                line-height: 28px;
            }

            footer .navigation {
                display: block;
                text-align: left;
                line-height: 28px;
                font-size: 16px;
            }

            footer .navigation > a {
                display: block;
                font-size: 16px;
            }
        </style>
    </head>
    <body class="attendize">
        @include('Shared.Partials.FacebookSdk')
        <div id="organiser_page_wrap">
            @yield('content')
        </div>

        @include("Shared.Partials.LangScript")
        {!!HTML::script('assets/javascript/frontend.js')!!}

        @include('Shared.Partials.GlobalFooterJS')
        @yield('foot')
</body>
</html>
