<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @section(config('lat.admin_kit.title_section_name'))
            {{ config('app.name', 'Laravel') }}
        @show
    </title>
    @section(config('lat.admin_kit.head_section_name'))
        @include(config('lat.admin_kit.head_template'))
    @show
</head>

<body>
    <div class="wrapper">
        @include(config('lat.admin_kit.sidebar_template'))
        <div class="main">
            @include(config('lat.admin_kit.navbar_template'))
            <main class="content">
                <div class="container-fluid p-0">
                    @yield(config('lat.admin_kit.content_section_name'))
                </div>
            </main>

            @include(config('lat.admin_kit.footer_template'))

        </div>
    </div>

    @section(config('lat.admin_kit.foot_section_name'))
        @include(config('lat.admin_kit.foot_template'))
    @show
</body>

</html>
