window.addEventListener('load', () => {
    const preloader = document.querySelector('.preloader');
    const animation = document.getElementById('animation1');


    //Fade out function
    function fadeOut() {
        var initOpacity = 1;
        var timer = setInterval(() => {
            if(initOpacity <= 0.3){
                clearInterval(timer);
                preloader.style.display = "none";
            }

            preloader.style.opacity = initOpacity;
            preloader.style.filter = 'alpha(opacity' + initOpacity * 100 + ")";
            initOpacity -= initOpacity * 0.2;
            
        }, 250);
    }

    setTimeout(() => {
        const frames = document.getElementById("animation1").children;
        console.log(frames);
        const frameCount = frames.length;
        let i = 0;
        setInterval(function () { 
            frames[i % frameCount].style.display = "none";
            frames[++i % frameCount].style.display = "block";
        }, 150);
        //animation.remove();
    }, 600);
    setTimeout(() => {
        //preloader.style.display = "none";
        fadeOut();
        animation.remove();
    }, 4000);
}); 

// window.addEventListener('load', () => {
//     const preloader = document.querySelector('.preloader');
//     const animation1 = document.getElementById('animation1');
//     const frames = document.getElementById("animation1").children;
//     console.log(frames.length);
//     const sleep = (ms) => {
//         return new Promise(resolve, ms);
//     }

//     const slowDown = async () => {
//         for(let i = 0; i < frames.length ; i++){
//             console.log(frames[i]);
//                 await sleep(100)
//                 frames[i].style.display = 'block';
//                 frames[i].style.display = 'none';
            
//         }
//     }
    
// });