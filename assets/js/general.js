window.addEventListener('load', function () {

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("back-to-top").style.display = "block";
        } else {
        document.getElementById("back-to-top").style.display = "none";
        }
    }


    document.querySelector('#back-to-top').addEventListener('click', (_e) => {
        _e.preventDefault();
        TweenLite.to(window, 1, { scrollTo: 0 });
    });

   
    // document.querySelector('#back-to-top').addEventListener('click', (_e) => {
    //     tl.to("#svg_animation", .10, {transformOrigin: "50% 100%", scaleY:0.25, yoyo:true, repeat:1})
    //         .to("#svg_animation", .15, {y:-10, ease:Circ.easeOut, yoyo:true, repeat:1}); 
    // });
});