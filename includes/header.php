<nav>
    <div class="toprow">
        <a href="http://www.5rajz.hu" class="goback" id="goback">
            <img src="../resources/back.png" alt="">
            Vissza a főoldalra!
        </a>
        <div class="grow"></div>
        <button onclick="openMenu()" class="toggleIcon">
            <i class="fa-solid fa-bars fa-fw"></i>
        </button>
    </div>
    <a href="http://www.5rajz.hu" class="logo">
        <img src="../resources/logo_magyar.png" alt="logo">
    </a>
    <ul id="menu" class="menu fullscreen">
        <li>
            <button onclick="closeMenu()" class="toggleIcon closeIcon">
                <i class="fa-solid fa-xmark fa-fw"></i>
            </button>
        </li>
        <li id="magamrol"><a href="/magamrol">Magamról</a></li>
        <li id="rajzelemzesrol"><a href="/rajzelemzesrol">Rajzelemzésről</a></li>
        <li id="5rajzrol"><a href="/5rajzrol">Az 5 rajzról</a></li>
        <li id="ajanlatok" class="dropdown">
            <a href="#" onclick="openSubmenu()">Ajánlatok</a>
            <ul id="submenu" class="submenu fullscreen">
                <li>
                    <button onclick="closeSubmenu()" class="toggleIcon closeIcon">
                        <i class="fa-solid fa-xmark fa-fw"></i>
                    </button>
                </li>
                <li><a href="/egyeni">Egyéni rajzfelvétel</a></li>
                <li><a href="/paros">Páros rajzfelvétel</a></li>
                <li><a href="/kiscsoportos-csaladi">Kiscsoportos vagy családi rajzfelvétel</a></li>
                <li><a href="/iskolai">Iskolai csomag</a></li>
                <li><a href="/munkahelyi-trening-csapatepites">Munkahelyi tréning és csapatépítés</a></li>
            </ul>
        </li>
        <li id="kepzes"><a href="/kepzes">Képzés</a></li>
        <li id="arak"><a href="/arak">Árak</a></li>
        <li id="elerhetoseg"><a href="/elerhetoseg">Elérhetőség</a></li>
    </ul>
</nav>