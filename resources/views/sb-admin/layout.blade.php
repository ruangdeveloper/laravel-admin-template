<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>
        @section(config('lat.sb_admin.title_section_name'))
            {{ config('app.name', 'Laravel') }}
        @show
    </title>
    @section(config('lat.sb_admin.head_section_name'))
        @include(config('lat.sb_admin.head_template'))
    @show
</head>

<body class="sb-nav-fixed">
    @include(config('lat.sb_admin.navbar_template'))
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include(config('lat.sb_admin.sidebar_template'))
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    @yield(config('lat.sb_admin.content_section_name'))
                </div>
            </main>
            @include(config('lat.sb_admin.footer_template'))
        </div>
    </div>
    @section(config('lat.sb_admin.foot_section_name'))
        @include(config('lat.sb_admin.foot_template'))
    @show
</body>

</html>
