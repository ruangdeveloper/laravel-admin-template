@php
    $navbar = RuangDeveloper\LaravelAdminTemplate\LaravelAdminTemplate::sbAdminTwo()->getNavbar();
@endphp
@if ($navbar)
    <nav id="{{ $navbar->getId() }}"
        class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow-sm border-bottom">
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3 d-flex align-items-center">
            <span style="font-size: 25px;">&equiv;</span>
        </button>
        @if ($navbar->getTitle())
            <a class="navbar-brand" href="{{ $navbar->getHref() }}"
                target="{{ $navbar->getTarget() }}">{{ $navbar->getTitle() }}</a>
        @endif
        <ul class="navbar-nav ml-auto">
            @if ($notification = $navbar->getNavbarNotification())
                <li id="{{ $notification->getId() }}" class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {!! $notification->getIcon() !!}
                        @if ($notificationCount = $notification->getNavbarNotificationCount())
                            <span class="badge badge-danger badge-counter">{{ $notificationCount }}</span>
                        @endif
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            {{ $notification->getTitle() }}
                        </h6>
                        @foreach ($notification->getNavbarNotificationItems() as $notificationItem)
                            <a id="{{ $notificationItem->getId() }}" class="dropdown-item d-flex align-items-center"
                                target="{{ $notificationItem->getTarget() }}" href="{{ $notificationItem->getHref() }}">
                                @if ($icon = $notificationItem->getIcon())
                                    <div class="mr-3">
                                        {!! $icon !!}
                                    </div>
                                @endif
                                <div>
                                    <div class="small text-gray-500">{{ $notificationItem->getTimeString() }}</div>
                                    {{ $notificationItem->getText() }}
                                </div>
                            </a>
                        @endforeach
                        <a class="dropdown-item text-center small text-gray-500"
                            target="{{ $notification->getTarget() }}" href="{{ $notification->getHref() }}">
                            {{ $notification->getText() }}
                        </a>
                    </div>
                </li>
            @endif
            @if ($navbarMessage = $navbar->getNavbarMessage())
                <li id="{{ $navbarMessage->getId() }}" class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {!! $navbarMessage->getIcon() !!}
                        @if ($messageCount = $navbarMessage->getNavbarMessageCount())
                            <span class="badge badge-danger badge-counter">{{ $messageCount }}</span>
                        @endif
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">
                            {{ $navbarMessage->getTitle() }}
                        </h6>
                        @foreach ($navbarMessage->getNavbarMessageItems() as $navbarMessageItem)
                            <a id="{{ $navbarMessageItem->getId() }}" class="dropdown-item d-flex align-items-center"
                                href="{{ $navbarMessageItem->getHref() }}"
                                target="{{ $navbarMessageItem->getTarget() }}">
                                <div>
                                    <div class="text-truncate">{{ $navbarMessageItem->getTitle() }}</div>
                                    <div class="small text-gray-500">{{ $navbarMessageItem->getText() }}</div>
                                </div>
                            </a>
                        @endforeach
                        <a class="dropdown-item text-center small text-gray-500" href="{{ $navbarMessage->getHref() }}"
                            target="{{ $navbarMessage->getTarget() }}">{{ $navbarMessage->getText() }}</a>
                    </div>
                </li>
            @endif

            @if ($navbarUserInfo = $navbar->getNavbarUserInfo())
                <div class="topbar-divider d-none d-sm-block"></div>
                <li id="{{ $navbarUserInfo->getId() }}" class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span
                            class="mr-2 d-none d-lg-inline text-gray-600 small">{{ $navbarUserInfo->getName() }}</span>
                        @if ($pictureUrl = $navbarUserInfo->getPictureUrl())
                            <img class="img-profile rounded-circle" src="{{ $pictureUrl }}">
                        @endif
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        @foreach ($navbarUserInfo->getDropDownItems() as $dropDownItem)
                            @if ($dropDownItem->typeIs('link'))
                                <a id="{{ $dropDownItem->getId() }}" class="dropdown-item"
                                    target="{{ $dropDownItem->getTarget() }}" href="{{ $dropDownItem->getHref() }}">
                                    @if ($icon = $dropDownItem->getIcon())
                                        <span class="mr-2 text-gray-400">
                                            {!! $icon !!}
                                        </span>
                                    @endif
                                    {{ $dropDownItem->getText() }}
                                </a>
                            @endif
                            @if ($dropDownItem->typeIs('divider'))
                                <div id="{{ $dropDownItem->getId() }}" class="dropdown-divider"></div>
                            @endif
                        @endforeach
                    </div>
                </li>
            @endif
        </ul>
    </nav>
@endif
