window.addEventListener("load", function () {
    if ("serviceWorker" in navigator) {
    navigator.serviceWorker.register("/game/ServiceWorker.js");
    }
});