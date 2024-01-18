<div class="navbar">
    <div class="sidebar">
        <div class="logo">
            <img class="exclude-icon" alt="" src="./storage/assets/img/logo.png" />
        </div>
        <li class="main">
            <ul class="option">
                <li>
                    <a href="{{ route('dashboard') }}" class="bar" id="bar">
                        <i class="fa-solid fa-house"></i>
                        <div class="dashboard1">{{ __('Home') }}</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Clientes') }}" class="bar" id="bar1">
                        <i class="fa-solid fa-user"></i>
                        <div class="pages">{{ __('Clients') }}</div>
                    </a>
                </li>
                <li>
                    <a class="bar" id="bar2">
                        <i class="fa-solid fa-folder"></i>

                        <div class="pages">{{ __('Documents') }}</div>
                        <i class="fa-solid fa-sort-down dropdown-icon"></i>
                    </a>
                    <ul class="submenu submenu-hidden" id="submenuDocumentos">
                        <li>
                            <a href="{{ route('Documentossub1') }}" class="bar" id="subbar1">
                                <i class="fa-solid fa-folder-open"></i>
                                <div class="pages">{{ __('Subcategory 1') }}</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('Documentossub2') }}" class="bar" id="subbar2">
                                <i class="fa-solid fa-folder-open"></i>
                                <div class="pages">{{ __('Subcategory 2') }}</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('Analises') }}" class="bar" id="bar3">
                        <i class="fa-solid fa-chart-column"></i>
                        <div class="pages">{{ __('Analytics') }}</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Configuracao') }}" class="bar" id="bar4">
                        <i class="fa-solid fa-gear"></i>
                        <div class="pages">{{ __('Settings') }}</div>
                    </a>
                </li>
            </ul>
            <ul class="option">
                <li id="barContainer">
                    <a href="{{ route('Help') }}" class="bar" id="bar5">
                        <i class="fa-regular fa-circle-question"></i>
                        <div class="pages">{{ __('Help') }}</div>
                    </a>
                </li>
                <li id="barContainer1">
                    <a href="{{ route('logout') }}" class="bar" id="bar6">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <div class="pages">{{ __('Logout') }}</div>
                    </a>
                </li>
            </ul>
        </li>
    </div>
</div>
