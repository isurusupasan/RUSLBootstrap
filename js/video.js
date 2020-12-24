var player = videojs('my-video',{
    autoplay: 'muted',
    controls: true,
    poster: '../img/10.jpg',
    fluid: true,
    loop: true,
    playbackRates: [0.75, 1.0, 1.25, 1.5],
});