@php
    $navbar = RuangDeveloper\LaravelAdminTemplate\LaravelAdminTemplate::sbAdmin()->getNavbar();
    if ($navbar) {
        $navbarForm = $navbar->getNavbarForm();
        $navbarDropDownMenu = $navbar->getNavbarDropDownMenu();
    }
    $sidebar = RuangDeveloper\LaravelAdminTemplate\LaravelAdminTemplate::sbAdmin()->getSidebar();
@endphp
@if ($navbar)
    <nav id="{{ $navbar->getId() }}" class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="{{ $navbar->getHref() }}"
            target="{{ $navbar->getTarget() }}">{{ $navbar->getTitle() }}</a>
        @if ($sidebar)
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
                {!! $sidebar->getIcon() !!}
            </button>
        @endif
        <!-- Navbar Search-->
        @if ($navbarForm)
            <form id="{{ $navbarForm->getId() }}" action="{{ $navbarForm->getAction() }}"
                method="{{ strtolower($navbarForm->getMethod()) == 'get' ? 'get' : 'post' }}"
                class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                @if (strtolower($navbarForm->getMethod()) == 'post')
                    @csrf
                @elseif(strtolower($navbarForm->getMethod()) == 'put')
                    @csrf
                    @method('put')
                @elseif(strtolower($navbarForm->getMethod()) == 'delete')
                    @csrf
                    @method('delete')
                @endif
                <div class="input-group">
                    <input class="form-control" type="{{ $navbarForm->getInputType() }}"
                        placeholder="{{ $navbarForm->getInputPlaceholder() }}"
                        aria-label="{{ $navbarForm->getInputPlaceholder() }}"
                        aria-describedby="{{ $navbarForm->getId() }}__button" name="{{ $navbarForm->getInputName() }}"
                        value="{{ $navbarForm->getInputValue() }}" />
                    <button class="btn btn-primary" id="{{ $navbarForm->getId() }}__button" type="submit">
                        {!! $navbarForm->getIcon() !!}
                </div>
            </form>
        @endif
        <!-- Navbar-->
        @if ($navbarDropDownMenu)
            <ul id="{{ $navbarDropDownMenu->getId() }}" class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {!! $navbarDropDownMenu->getIcon() !!}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @foreach ($navbarDropDownMenu->getNavbarDropDownMenuItems() as $item)
                            @if ($item->typeIs('link'))
                                <li id="{{ $item->getId() }}"><a class="dropdown-item" href="{{ $item->getHref() }}"
                                        target="{{ $item->getTarget() }}">{{ $item->getText() }}</a></li>
                            @endif
                            @if ($item->typeIs('divider'))
                                <li id="{{ $item->getId() }}">
                                    <hr class="dropdown-divider" />
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            </ul>
        @endif
    </nav>
@endif
