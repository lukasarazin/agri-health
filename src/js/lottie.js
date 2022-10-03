import Lottie from "lottie-web";

let cow = document.getElementById('cow-lottie');

Lottie.loadAnimation({
    container: cow,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'http://localhost/agri-health/assets/lottie/cow.json'
});
