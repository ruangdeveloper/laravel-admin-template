@foreach ($items as $item)
    @if ($item->typeIs('heading'))
        <div id="{{ $item->getId() }}" class="sb-sidenav-menu-heading">{{ $item->getText() }}</div>
    @endif
    @if ($item->typeIs('link'))
        @if (sizeof($item->getChild()) > 0)
            <a id="{{ $item->getId() }}" class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                data-bs-target="#{{ $item->getId() }}__collapse-layout" aria-expanded="false"
                aria-controls="{{ $item->getId() }}__collapse-layout">
                @if ($icon = $item->getIcon())
                    <div class="sb-nav-link-icon">{!! $icon !!}</div>
                @endif
                {{ $item->getText() }}
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="{{ $item->getId() }}__collapse-layout">
                <nav class="sb-sidenav-menu-nested nav">
                    @include(config('lat.sb_admin.sidebar_menu_item_template'), ['items' => $item->getChild()])
                </nav>
            </div>
        @else
            <a class="nav-link" href="{{ $item->getHref() }}" id="{{ $item->getId() }}"
                target="{{ $item->getTarget() }}">
                @if ($icon = $item->getIcon())
                    <div class="sb-nav-link-icon">{!! $icon !!}</div>
                @endif
                {{ $item->getText() }}
            </a>
        @endif
    @endif
@endforeach
