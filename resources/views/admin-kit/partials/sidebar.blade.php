@php
    $sidebar = RuangDeveloper\LaravelAdminTemplate\LaravelAdminTemplate::adminKit()->getSidebar();
@endphp
@if ($sidebar)
    <nav id="{{ $sidebar->getId() }}" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" target="{{ $sidebar->getTarget() }}" href="{{ $sidebar->getHref() }}">
                <span class="align-middle">{{ $sidebar->getTitle() }}</span>
            </a>
            <ul class="sidebar-nav">
                @foreach ($sidebar->getSidebarItems() as $item)
                    @if ($item->typeIs('heading'))
                        <li id="{{ $item->getId() }}" class="sidebar-header">
                            {{ $item->getText() }}
                        </li>
                    @endif
                    @if ($item->typeIs('link'))
                        <li id="{{ $item->getId() }}" class="sidebar-item">
                            <a class="sidebar-link" target="{{ $item->getTarget() }}" href="{{ $item->getHref() }}">
                                @if ($icon = $item->getIcon())
                                    {!! $icon !!}
                                @endif
                                <span class="align-middle">{{ $item->getText() }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </nav>
@endif
