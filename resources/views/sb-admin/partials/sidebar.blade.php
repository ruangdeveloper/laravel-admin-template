@php
    $sidebar = RuangDeveloper\LaravelAdminTemplate\LaravelAdminTemplate::sbAdmin()->getSidebar();
@endphp
@if ($sidebar)
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div id="{{ $sidebar->getId() }}" class="sb-sidenav-menu">
            @if ($sidebarMenu = $sidebar->getSidebarMenu())
                <div id="{{ $sidebarMenu->getId() }}" class="nav">
                    @include(config('lat.sb_admin.sidebar_menu_item_template'), [
                        'items' => $sidebarMenu->getSidebarMenuItems(),
                    ])
                </div>
            @endif
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">{{ $sidebar->getText() }}</div>
        </div>
    </nav>
@endif
