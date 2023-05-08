function openMenu() {
    menu = document.getElementById("menu");
    if (!menu.classList.contains("active")) {
        menu.classList.add("active");
    }
}
function closeMenu() {
    document.getElementById("menu").classList.remove("active");
}
function openSubmenu() {
    submenu = document.getElementById("submenu");
    if (!submenu.classList.contains("active")) {
        submenu.classList.add("active");
    }
}
function closeSubmenu() {
    document.getElementById("submenu").classList.remove("active");
}