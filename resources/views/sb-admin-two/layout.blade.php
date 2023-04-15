<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @section(config('lat.sb_admin_two.title_section_name'))
            {{ config('app.name', 'Laravel') }}
        @show
    </title>
    @section(config('lat.sb_admin_two.head_section_name'))
        @include(config('lat.sb_admin_two.head_template'))
    @show
</head>

<body id="page-top" class="bg-light">
    <div id="wrapper">
        @include(config('lat.sb_admin_two.sidebar_template'))
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include(config('lat.sb_admin_two.navbar_template'))
                <div class="container-fluid">
                    @yield(config('lat.sb_admin_two.content_section_name'))
                </div>
            </div>
            @include(config('lat.sb_admin_two.footer_template'))
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @section(config('lat.sb_admin_two.foot_section_name'))
        @include(config('lat.sb_admin_two.foot_template'))
    @show
</body>

</html>
