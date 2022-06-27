window.addEventListener('load', () => {
    const preloader = document.querySelector('.preloader');
    const animation = document.getElementById('animation1');
    setTimeout(() => {
        const frames = document.getElementById("animation1").children;
        console.log(frames);
        const frameCount = frames.length;
        let i = 0;
        setInterval(function () { 
            frames[i % frameCount].style.display = "none";
            frames[++i % frameCount].style.display = "block";
        }, 250);
    }, 1000);
    setTimeout(() => {
        preloader.style.display = "none";
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