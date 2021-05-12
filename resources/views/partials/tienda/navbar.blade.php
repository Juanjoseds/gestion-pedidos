<div id="cliente-nav">

    <nav id="navBar">
        <ul class="nav-items">
            <div class="item-wrapper selected" onclick="toggleSelected()">
                <i data-feather="home"></i> Dashboard
            </div>

            <div class="item-wrapper" onclick="toggleSelected()">
                <i data-feather="book-open"></i> Tu carta
            </div>

            <div class="item-wrapper" onclick="toggleSelected()">
                <i data-feather="pie-chart"></i> Estadísticas
            </div>

            <div class="item-wrapper" onclick="toggleSelected()">
                <i data-feather="rotate-ccw"></i> Historial
            </div>

            <div class="item-wrapper profile" onclick="window.location='/logout'">
                <!--<img src="https://content-static.upwork.com/uploads/2014/10/02123010/profilephoto_goodcrop.jpg" alt="profile image"/> Test Name -->
                <i data-feather="log-out"></i> Log Out
            </div>

        </ul>
    </nav>
    <div class="hamburger-menu collapsed" id="hamburgerMenu" onclick="toggleMenu()">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>

    <div class="hamburger-mobile collapsed" id="hamburgerMobile" onclick="toggleMobile()">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>
</div>
