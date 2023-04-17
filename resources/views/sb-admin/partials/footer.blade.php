@php
    $footer = RuangDeveloper\LaravelAdminTemplate\LaravelAdminTemplate::sbAdmin()->getFooter();
    if ($footer) {
        $footerMenu = $footer->getFooterMenu();
    }
@endphp
@if ($footer)
    <footer id="{{ $footer->getId() }}" class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">{{ $footer->getText() }}</div>
                @if ($footerMenu)
                    <div id="{{ $footerMenu->getId() }}">
                        @foreach ($footerMenu->getFooterMenuItems() as $item)
                            <a id="{{ $item->getId() }}" href="{{ $item->getHref() }}"
                                target="{{ $item->getTarget() }}">{{ $item->getText() }}</a>
                            &middot;
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </footer>
@endif
