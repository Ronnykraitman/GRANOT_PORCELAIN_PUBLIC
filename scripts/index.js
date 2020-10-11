let video = document.querySelector('video');
video.playbackRate = 0.5;
window.addEventListener('scroll',function(){
    let value = 1 + window.scrollY/-1000;
    video.style.opacity = value;
})

let progress = document.getElementById('progressbar');
let totalHeight = document.body.scrollHeight - window.innerHeight;
window.onscroll = function(){
    let progressHeight = (window.pageYOffset / totalHeight) * 100;
    progress.style.height = progressHeight + "%";
}
