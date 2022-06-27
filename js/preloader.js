window.addEventListener('load', () => {
    const preloader = document.querySelector('.preloader');
    const animation = document.getElementById('animation1');
    setTimeout(() => {
        const frame1 = document.getElementById("animation1").children;
        const frameCount = frame1.length;
        let i = 0;
        setInterval(function () { 
            frame1[i % frameCount].style.display = "none";
            frame1[++i % frameCount].style.display = "block";
        }, 250);
    }, 1000);
    setTimeout(() => {
        preloader.style.display = "none";
        animation.remove();
    }, 4000);
}); 

