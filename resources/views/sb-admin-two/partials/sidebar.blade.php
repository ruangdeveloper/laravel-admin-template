@php
    $sidebar = RuangDeveloper\LaravelAdminTemplate\LaravelAdminTemplate::sbAdminTwo()->getSidebar();
    $brand = $sidebar->getBrand();
@endphp
@if ($sidebar)
    <ul class="navbar-nav bg-{{ $sidebar->getColor() }} sidebar sidebar-dark accordion" id="{{ $sidebar->getId() }}">
        @if ($brand)
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ $brand->getHref() }}"
                target="{{ $brand->getTarget() }}">
                @if ($icon = $brand->getIcon())
                    <div class="sidebar-brand-icon">
                        {!! $icon !!}
                    </div>
                @endif
                <div class="sidebar-brand-text mx-3">{{ $brand->getText() }}</div>
            </a>
            <hr class="sidebar-divider mt-0 mb-3">
        @endif
        @foreach ($sidebar->getSidebarItems() as $sidebarItem)
            @if ($sidebarItem->typeIs('sidebar-item-divider'))
                <hr id="{{ $sidebarItem->getId() }}" class="sidebar-divider mt-3 mb-3">
            @endif
            @if ($sidebarItem->typeIs('sidebar-item-link'))
                <li id="{{ $sidebarItem->getId() }}" class="nav-item {{ $sidebarItem->isActive() ? 'active' : '' }}">
                    <a class="nav-link py-2" href="{{ $sidebarItem->getHref() }}" target="{{ $sidebarItem->getTarget() }}">
                        @if ($icon = $sidebarItem->getIcon())
                            {!! $icon !!}
                        @endif
                        <span>{{ $sidebarItem->getText() }}</span>
                    </a>
                </li>
            @endif
            @if ($sidebarItem->typeIs('sidebar-item-heading'))
                <div id="{{ $sidebarItem->getId() }}" class="sidebar-heading mt-3 mb-2">{{ $sidebarItem->getText() }}</div>
            @endif
            @if ($sidebarItem->typeIs('sidebar-item-collapsible-link'))
                <li id="{{ $sidebarItem->getId() }}" class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse"
                        data-target="#{{ $sidebarItem->getId() }}__target" aria-expanded="true"
                        aria-controls="{{ $sidebarItem->getId() }}__target">
                        @if ($icon = $sidebarItem->getIcon())
                            {!! $icon !!}
                        @endif
                        <span>{{ $sidebarItem->getText() }}</span>
                    </a>
                    <div id="{{ $sidebarItem->getId() }}__target" class="collapse"
                        data-parent="#{{ $sidebar->getId() }}">
                        <div class="bg-white py-2 collapse-inner rounded">
                            @foreach ($sidebarItem->getLinkItems() as $linkItem)
                                <a id="{{ $linkItem->getId() }}" class="collapse-item"
                                    href="{{ $linkItem->getHref() }}"
                                    target="{{ $linkItem->getTarget() }}">{{ $linkItem->getText() }}</a>
                            @endforeach
                        </div>
                    </div>
                </li>
            @endif
        @endforeach
        <hr class="sidebar-divider mt-3 d-none d-md-block">
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
@endif
