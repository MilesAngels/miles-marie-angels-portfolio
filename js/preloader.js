const preloader = document.querySelector('.preloader');


window.addEventListener('load', () => {
    
    const animation = document.getElementById('animation1');
    //Disable Scroll 
    function disableScrolling () {
        document.body.style.overflow = "hidden"; 
    }

    disableScrolling();
   // Fade out function
    // function fadeOut() {
    //     var initOpacity = 1;
    //     var timer = setInterval(() => {
    //         if(initOpacity <= 0.3){
    //             clearInterval(timer);
    //             preloader.style.display = "none";
    //         }

    //         preloader.style.opacity = initOpacity;
    //         preloader.style.filter = 'alpha(opacity' + initOpacity * 100 + ")";
    //         initOpacity -= initOpacity * 0.2;
            
    //     }, 250);
    // }

    setTimeout(() => {
        const frames = document.getElementById("animation1").children;
        //console.log(frames);
        const frameCount = frames.length;
        let i = 0;
        setInterval(function () { 
            frames[i % frameCount].style.display = "none";
            frames[++i % frameCount].style.display = "block";
        }, 90);
        //animation.remove();
    }, 600);
    setTimeout(() => {
        //fadeOut();
        animation.remove();
        document.body.style.overflowY = "visible";
        preloader.style.display = "none";
    }, 1800);
}); 
