<div class="top-bar">
    <div class="menu-icon" onclick="toggleMenu()">
        <div class="barra-1"></div>
        <div class="barra-2"></div>
        <div class="barra-3"></div>
    </div>
    <div class="top-bar1">
        <div class="icons-navbar">
            <div class="container">
                <input checked="" class="checkbox" type="checkbox">
                <div class="mainbox">
                    <div class="iconContainer">
                        <img class="search1-1-icon" alt="" src="./storage/assets/icons/search.1 1.svg" />
                    </div>
                    <input class="search_input" placeholder="search" type="text">
                </div>
            </div>
            <img class="search1-1-icon" alt="" src="./storage/assets/icons/notification-bing.5 1.svg" />
        </div>

        <div class="paste-button">
            <button class="button name" onclick="toggleDropdown()">
                <div class="logo">
                    @if (Auth::user()->imagem == null || Auth::user()->imagem == '')
                        <div class="img-temporary-navbar">{{ ucfirst(substr(Auth::user()->name, 0, 1)) }}</div>
                    @else
                        <img class="nameavater-child" alt=""
                            src="./storage/profile/{{ Auth::user()->imagem }}" />
                    @endif
                    <div class="name-user">
                        <div>{{ Auth::user()->name }}</div>
                    </div>
                </div>
                <img class="dropdown-icon-nav" alt="" src="./storage/assets/icons/Dropdown.svg" />
            </button>
            <ol class="dropdown-content" tabindex="0" id="dropdownContent">
                <li>
                    <a href="{{ route('dashboard') }}" class="dropdown-item">
                        <i class="fa-solid fa-house dropdown-icon-nav"></i>
                        <label class="pages">{{ __('Home') }}</label>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item"
                        style="background-color: #c1e24b; color:white;">
                        <i class="fa-solid fa-user dropdown-icon-nav"></i>
                        <label class="pages">{{ __('Profile') }}</label>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Help') }}" class="dropdown-item">
                        <i class="fa-regular fa-circle-question dropdown-icon-nav"></i>
                        <label class="pages">{{ __('Help') }}</label>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}">
                        <i class="fa-solid fa-right-from-bracket dropdown-icon-nav"></i>
                        <label class="pages">{{ __('Logout') }}</label>
                    </a>
                </li>

            </ol>
        </div>
        <div class="flag-switch">
            <input type="checkbox" id="check1" {{ app()->getLocale() === 'en' ? 'checked' : '' }}>
            <label for="check1"></label>
        </div>
    </div>
</div>
