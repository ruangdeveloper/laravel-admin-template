@php
    $navbar = RuangDeveloper\LaravelAdminTemplate\LaravelAdminTemplate::adminKit()->getNavbar();
    $dropDownMenu = $navbar->getNavbarDropDownMenu();
    $navbarNotification = $navbar->getNavbarNotification();
    $navbarMessage = $navbar->getNavbarMessage();
@endphp
@if ($navbar)
    <nav id="{{ $navbar->getId() }}" class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle js-sidebar-toggle">
            <i class="hamburger align-self-center"></i>
        </a>

        <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">
                @if ($navbarNotification)
                    <li id="{{ $navbarNotification->getId() }}" class="nav-item dropdown">
                        <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                            <div class="position-relative">
                                {!! $navbarNotification->getIcon() !!}
                                @if ($notificationCount = $navbarNotification->getNavbarNotificationCount())
                                    <span class="indicator">{{ $notificationCount }}</span>
                                @endif
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                            aria-labelledby="alertsDropdown">
                            <div class="dropdown-menu-header">
                                {{ $navbarNotification->getTitle() }}
                            </div>
                            <div class="list-group">
                                @foreach ($navbarNotification->getNavbarNotificationItems() as $item)
                                    <a id="{{ $item->getId() }}" href="{{ $item->getHref() }}"
                                        target="{{ $item->getTarget() }}" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            @if ($icon = $item->getIcon())
                                                <div class="col-2">
                                                    {!! $icon !!}
                                                </div>
                                            @endif
                                            <div class="col">
                                                <div class="text-dark">{{ $item->getTitle() }}</div>
                                                <div class="text-muted small mt-1">{{ $item->getText() }}</div>
                                                <div class="text-muted small mt-1">{{ $item->getTimeString() }}</div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                            <div class="dropdown-menu-footer">
                                <a href="{{ $navbarNotification->getHref() }}"
                                    target="{{ $navbarNotification->getTarget() }}"
                                    class="text-muted">{{ $navbarNotification->getText() }}</a>
                            </div>
                        </div>
                    </li>
                @endif
                @if ($navbarMessage)
                    <li id="{{ $navbarMessage->getId() }}" class="nav-item dropdown">
                        <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown"
                            data-bs-toggle="dropdown">
                            <div class="position-relative">
                                {!! $navbarMessage->getIcon() !!}
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                            aria-labelledby="messagesDropdown">
                            <div class="dropdown-menu-header">
                                <div class="position-relative">
                                    {{ $navbarMessage->getTitle() }}
                                </div>
                            </div>
                            <div class="list-group">
                                @foreach ($navbarMessage->getNavbarMessageItems() as $item)
                                    <a href="{{ $item->getHref() }}" target="{{ $item->getTarget() }}"
                                        class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            @if ($imageUrl = $item->getImageUrl())
                                                <div class="col-2 me-2">
                                                    <img src="{{ $imageUrl }}"
                                                        class="avatar img-fluid rounded-circle"
                                                        alt="{{ $item->getTitle }}">
                                                </div>
                                            @endif
                                            <div class="col">
                                                <div class="text-dark">{{ $item->getTitle() }}</div>
                                                <div class="text-muted small mt-1">{{ $item->getText() }}</div>
                                                <div class="text-muted small mt-1">{{ $item->getTimeString() }}</div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                            <div class="dropdown-menu-footer">
                                <a href="{{ $navbarMessage->getHref() }}" target="{{ $navbarMessage->getTarget() }}"
                                    class="text-muted">{{ $navbarMessage->getText() }}</a>
                            </div>
                        </div>
                    </li>
                @endif
                @if ($dropDownMenu)
                    <li id="{{ $dropDownMenu->getId() }}" class="nav-item dropdown">
                        <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                            data-bs-toggle="dropdown">
                            {!! $dropDownMenu->getIcon() !!}
                        </a>

                        <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                            data-bs-toggle="dropdown">
                            @if ($image = $dropDownMenu->getImageUrl())
                                <img src="{{ $image }}" class="avatar img-fluid rounded me-1"
                                    alt="{{ $dropDownMenu->getText() }}" />
                            @endif
                            <span class="text-dark">{{ $dropDownMenu->getText() }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            @foreach ($dropDownMenu->getDropDownMenuItems() as $item)
                                @if ($item->typeIs('link'))
                                    <a id="{{ $item->getId() }}" class="dropdown-item"
                                        target="{{ $item->getTarget() }}" href="{{ $item->getHref() }}">
                                        @if ($icon = $item->getIcon())
                                            <span class="me-2">{!! $icon !!}</span>
                                        @endif
                                        {{ $item->getText() }}
                                    </a>
                                @endif
                                @if ($item->typeIs('divider'))
                                    <div id="{{ $item->getId() }}" class="dropdown-divider"></div>
                                @endif
                            @endforeach
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
@endif
