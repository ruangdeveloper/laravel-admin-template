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
            @if ($notificationCenter = $navbar->getNavbarNotificationCenter())
                <li id="{{ $notificationCenter->getId() }}" class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {!! $notificationCenter->getIcon() !!}
                        @if ($notificationCount = $notificationCenter->getNotificationCount())
                            <span class="badge badge-danger badge-counter">{{ $notificationCount }}</span>
                        @endif
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            {{ $notificationCenter->getTitle() }}
                        </h6>
                        @foreach ($notificationCenter->getNotificationItems() as $notificationItem)
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
                            target="{{ $notificationCenter->getTarget() }}"
                            href="{{ $notificationCenter->getHref() }}">
                            {{ $notificationCenter->getText() }}
                        </a>
                    </div>
                </li>
            @endif
            @if ($messageCenter = $navbar->getNavbarMessageCenter())
                <li id="{{ $messageCenter->getId() }}" class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {!! $messageCenter->getIcon() !!}
                        @if ($messageCount = $messageCenter->getMessageCount())
                            <span class="badge badge-danger badge-counter">{{ $messageCount }}</span>
                        @endif
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">
                            {{ $messageCenter->getTitle() }}
                        </h6>
                        @foreach ($messageCenter->getMessageItems() as $messageItem)
                            <a id="{{ $messageItem->getId() }}" class="dropdown-item d-flex align-items-center"
                                href="{{ $messageItem->getHref() }}" target="{{ $messageItem->getTarget() }}">
                                <div>
                                    <div class="text-truncate">{{ $messageItem->getText() }}</div>
                                    <div class="small text-gray-500">{{ $messageItem->getSender() }}</div>
                                </div>
                            </a>
                        @endforeach
                        <a class="dropdown-item text-center small text-gray-500" href="{{ $messageCenter->getHref() }}"
                            target="{{ $messageCenter->getTarget() }}">{{ $messageCenter->getText() }}</a>
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
