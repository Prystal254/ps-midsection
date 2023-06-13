
    // Define the image sequence information
    const imageSequence = {
        baseUrl: '/wp-content/uploads/Switch/',  // Base URL of the image sequence
        frameCount: 435,              // Number of frames in the sequence
        frameRate: 30,                // Frame rate of the sequence (frames per second)
        fileExtension: '.png'         // File extension of the images
    };

    // Create a canvas element and get its 2D rendering context
    const canvas = document.getElementById('multiple');
    const ctx = canvas.getContext('2d');

    // Set the canvas dimensions to match the image dimensions
    canvas.width = 610;  // Adjust the width as needed
    canvas.height = 1080; // Adjust the height as needed

    // Load the images and play the sequence
    function loadImagesAndPlay() {
        let loadedImages = 0;
        const images = [];

        // Load each image in the sequence
        for (let i = 0; i < imageSequence.frameCount; i++) {
            const image = new Image();
            image.src = imageSequence.baseUrl + i + imageSequence.fileExtension;

            // Once the image is loaded, increment the counter
            image.onload = function() {
                loadedImages++;

                // When all images are loaded, play the sequence
                if (loadedImages === imageSequence.frameCount) {
                    playSequence(images);
                }
            };

            images.push(image);
        }
    }

    // Play the image sequence
    function playSequence(images) {
        let currentFrame = 0;

        function render() {
            // Clear the canvas
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            // Draw the current frame
            ctx.drawImage(images[currentFrame], 0, 0, canvas.width, canvas.height);

            // Move to the next frame
            currentFrame = (currentFrame + 1) % imageSequence.frameCount;

            // Schedule the next frame render
            setTimeout(render, 1000 / imageSequence.frameRate);
        }

        // Start the sequence
        render();
    }

    // Start loading images and playing the sequence
    // loadImagesAndPlay();



    const imageSequence2 = {
        baseUrl: '/wp-content/uploads/LIGHT/',  // Base URL of the image sequence
        frameCount: 143,              // Number of frames in the sequence
        frameRate: 30,                // Frame rate of the sequence (frames per second)
        fileExtension: '.png'         // File extension of the images
    };

    // Create a canvas element and get its 2D rendering context
    const canvas2 = document.getElementById('single');
    const ctx2 = canvas2.getContext('2d');

    // Set the canvas dimensions to match the image dimensions
    canvas2.width = 610;  // Adjust the width as needed
    canvas2.height = 1080; // Adjust the height as needed

    // Load the images and play the sequence
    function loadImagesAndPlay2() {
        let loadedImages2 = 0;
        const images2 = [];

        // Load each image in the sequence
        for (let i = 0; i < imageSequence2.frameCount; i++) {
            const image2 = new Image();
            image2.src = imageSequence2.baseUrl + i + imageSequence2.fileExtension;

            // Once the image is loaded, increment the counter
            image2.onload = function() {
                loadedImages2++;

                // When all images are loaded, play the sequence
                if (loadedImages2 === imageSequence2.frameCount) {
                    playSequence2(images2);
                }
            };

            images2.push(image2);
        }
    }

    // Play the image sequence
    function playSequence2(images2) {
        let currentFrame2 = 0;

        function render2() {
            // Clear the canvas
            ctx2.clearRect(0, 0, canvas2.width, canvas2.height);

            // Draw the current frame
            ctx2.drawImage(images2[currentFrame2], 0, 0, canvas2.width, canvas2.height);

            // Move to the next frame
            currentFrame2 = (currentFrame2 + 1) % imageSequence2.frameCount;

            // Schedule the next frame render
            setTimeout(render2, 1000 / imageSequence2.frameRate);
        }

        // Start the sequence
        render2();
    }

    // Start loading images and playing the sequence
    loadImagesAndPlay2();



//------------------------------------------------------------------------



gsap.registerPlugin(ScrollTrigger);

function initScrollTrigger(){
    gsap.utils.toArray(".mid-section .sub-section").forEach(section => {
        // console.log(section.offsetWidth)
    
    
        //scroll trigger for each of the subsections within middle section
        ScrollTrigger.matchMedia({
            
            // desktop
            "(min-width: 768px)": function() {
                let tl = gsap.timeline({
                    scrollTrigger:{
                        trigger: section,
                        start:"center center",
                        end: () => "+=1400",
                        scrub: true,
                        pin :true,
                        anticipatePin: 1, 
                        markers:false,
                    },
                    defaults:{ ease : "linear" , stagger: 0.2},
                    
                })
                if(section.classList.contains("returns")){
                    tl.to(section.querySelector(".stats"), {opacity:1, duration:1} );
                    tl.to(section.querySelector(".stats"), {opacity:0, duration:1, delay:3}, ">");
            
                    gsap.set(section.querySelector(".description-blurb"), { yPercent:100, opacity:0})
                    tl.to(section.querySelector(".description-blurb"), { yPercent:0, opacity:1, duration:1}, "0");
                    tl.to(section.querySelector(".description-blurb"), { yPercent:100, opacity:0, duration:1 , delay:3}, ">");
            
                    gsap.set(section.querySelector(".cta"), {yPercent:-100, opacity:0});
                    tl.to(section.querySelector(".cta"), { yPercent:0, opacity:1, duration:1}, "0");
                    tl.to(section.querySelector(".cta"), { yPercent:-100, opacity:0, duration:1 , delay:3}, ">");
                }
                else if(section.classList.contains("conversion")){
                    tl.to(section.querySelector(".stats"), {opacity:1, duration:1} );
                    tl.to(section.querySelector(".stats"), {opacity:0, duration:1, delay:3}, ">");
                    
                    gsap.set(section.querySelector(".cta"), {xPercent:-100, opacity:0});
                    tl.to(section.querySelector(".cta"), { xPercent:0, opacity:1, duration:1}, "0");
                    tl.to(section.querySelector(".cta"), { xPercent:-100, opacity:0, duration:1 , delay:3}, ">");
                }
                else if(section.classList.contains("brands")){
                    gsap.set(section.querySelector(".cta"), {xPercent:-100, opacity:0});
                    tl.to(section.querySelector(".cta"), { xPercent:0, opacity:1, duration:1}, "0");
                    tl.to(section.querySelector(".cta"), { xPercent:-100, opacity:0, duration:2 , delay:5}, ">");
            
                    tl.to(section.querySelector(".stat-marquee "), {xPercent:-80, duration:4}, "0")
            
                    tl.to(section.querySelector(".numbers"), {scale:2.5 , duration:4 ,delay:1}, "0");
                    tl.to(section.querySelector(".numbers"), {opacity:0.05 , duration: 2 }, ">");
                }
            }, 
          
            // mobile
            "(max-width: 767px)": function() {
                let tl = gsap.timeline({
                    scrollTrigger:{
                        trigger: section,
                        start:"center center",
                        end: () => "+=1400",
                        scrub: true,
                        pin :true,
                        anticipatePin: 1, 
                        markers:false,
                    },
                    defaults:{ ease : "linear" , stagger: 0.2},
                    
                })
                if(section.classList.contains("returns")){
                    tl.to(section.querySelector(".stats"), {opacity:1, duration:1} );
                    tl.to(section.querySelector(".stats"), {opacity:0, duration:1, delay:3}, ">");
            
                    gsap.set(section.querySelector(".description-blurb"), { yPercent:100, opacity:0})
                    tl.to(section.querySelector(".description-blurb"), { yPercent:0, opacity:1, duration:1}, "0");
                    tl.to(section.querySelector(".description-blurb"), { yPercent:-100, opacity:0, duration:1 , delay:1}, ">");
            
                    gsap.set(section.querySelector(".cta"), {yPercent:100, opacity:0});
                    tl.to(section.querySelector(".cta"), { yPercent:0, opacity:1, duration:1, delay:2}, "0");
                    tl.to(section.querySelector(".cta"), { yPercent:-100, opacity:0, duration:1 , delay:0.75}, ">");
                }
                else if(section.classList.contains("conversion")){
                    tl.to(section.querySelector(".stats"), {opacity:1, duration:0.5} );
                    tl.to(section.querySelector(".stats"), {opacity:0, duration:0.5, delay:3}, ">");
                    
                    gsap.set(section.querySelector(".cta"), {xPercent:-100, opacity:0});
                    tl.to(section.querySelector(".cta"), { xPercent:0, opacity:1, duration:1}, "0");
                    tl.to(section.querySelector(".cta"), { xPercent:-100, opacity:0, duration:1 , delay:3}, ">");
                }
                else if(section.classList.contains("brands")){
                    gsap.set(section.querySelector(".cta"), {yPercent:100, opacity:0});
                    tl.to(section.querySelector(".cta"), { yPercent:0, opacity:1, duration:3.5}, "0");
                    tl.to(section.querySelector(".cta"), { yPercent:-200, opacity:0, duration:2.5}, ">");
            
                    tl.to(section.querySelector(".stat-marquee "), {xPercent:-80, duration:4}, "0")
            
                }
            }, 
          
            // all 
            "all": function() {
                // ScrollTriggers created here aren't associated with a particular media query,
                // so they persist.
            }
            
        });
        
    })
}






let iosVideo = document.getElementById("ios");
let normalVideo = document.getElementById("normal");
var run_once = true;
var multiple_video_ran = false;
$(".mid-section .model #single").addClass("active");
// this is for the header - logo scroll
$(document).on("scroll", function(e){
    var scroller = $(window).scrollTop();
//--------------------

    if((scroller >= $(".returns").offset().top) && (scroller < ($(".conversion").offset().top - 400))){
        $(".model").css("background-image", `unset`);
        $(".model").css("background-image", `url("${backgrounds[0]}")`);
        $(".model").removeClass("top");
    }   
    else if((scroller >= $(".conversion").offset().top) && (scroller < ($(".brands").offset().top - 400))){
        $(".model").css("background-image", `unset`);
        $(".model").css("background-image", `url("${backgrounds[1]}")`);
        $(".model").removeClass("top");
    }   
    else{
        $(".model").css("background-image", `unset`);
        $(".model").addClass("top");
    }

//--------------------
    if(scroller >= ($(".banner .right-col-inner").offset().top - 40)){
        $(".banner .right-col-inner").addClass("sticky");
    }
    else{
        $(".banner .right-col-inner").removeClass("sticky");
    }

    if(scroller >= $(".mid-section").offset().top && scroller <= $(".about-us").offset().top){
        $(".banner .right-col-inner").addClass("black");
    }
    else{
        $(".banner .right-col-inner").removeClass("black");
    }

    if(scroller >= $(".about-us").offset().top){
        $(".banner .right-col-inner").addClass("background-enabled");
    }
    else{
        $(".banner .right-col-inner").removeClass("background-enabled");
    }
    
    if(scroller >= $(".sub-section.brands").offset().top){
        if(run_once == false){
            $(".mid-section .model #single").removeClass("active");
            // $(".mid-section .model video.multiple")[0].currentTime = 0;
            // $(".mid-section .model video.multiple")[0].play();
            // $(".mid-section .model video.single")[0].pause();
            $(".mid-section .model #multiple").addClass("active");
            return run_once = true;
        } 
    }
    else{
        // $(".model .single source").eq(0).attr("src", singleVideo[0])
        // $(".model .single source").eq(1).attr("src", singleVideo[1])
        // $(".model .single").trigger("play")
        // modelVideo.play()
        if(run_once == true){
            // $(".mid-section .model video.multiple")[0].pause();
            // $(".mid-section .model video.single")[0].play();
            if(multiple_video_ran == false){
                loadImagesAndPlay();
                multiple_video_ran = true;
            }
            $(".mid-section .model #multiple").removeClass("active");
            $(".mid-section .model #single").addClass("active");
            return run_once = false; 
        }
    }
})
// console.log()
// // console.log("singleVideo" ,singleVideo)
// // console.log("multiVideo", multiVideo)

// $("#video")[0].load()
$(document).ready(function(){ 
    setTimeout(function(){
        $(".process").css("display","none");
        $(".preview").css("display","flex"); 
    }, 5000);
    
    // document.onreadystatechange = function () {
    //     if (document.readyState !== "complete") {
    //         // document.querySelector("body").style.visibility = "hidden";
    //         // document.querySelector("#loader").style.visibility = "visible";
    //     } else {
    //         document.querySelector(".process").style.display = "none";
    //         document.querySelector(".preview").style.display = "flex";
    //     }
    // };

    $(".preview").click(function(){
        initScrollTrigger();
        $(".preload").hide();
        $(".all").fadeIn();
    }); 
})


$('.screen-wrap').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    Infinity:true,
    dots: true, 
    arrows:false,
    autoplay:true,
    speed: 800,
    autoplaySpeed: 8000,
    draggable:false,
    appendDots:$('.brands .dots')
  })
 

//ticking machine
var percentTime;
var tick;
var time = .8;
var progressBarIndex = 0;

$('.slick-dots li').each(function(index) {
    var progress = "<div class='inProgress inProgress" + index + "'></div>";
    $(this).html(progress); 
});

function startProgressbar() {
    resetProgressbar();
    percentTime = 0;
    tick = setInterval(interval, 10);
}

function interval() {
    if (($('.slider .slick-track div[data-slick-index="' + progressBarIndex + '"]').attr("aria-hidden")) === "true") {
        progressBarIndex = $('.slider .slick-track div[aria-hidden="false"]').data("slick-index"); 
        startProgressbar();
    } else {
        percentTime += 1 / (time + 5);
        $('.inProgress' + progressBarIndex).css({
            width: percentTime + "%"
        });
        if(percentTime >= 100) {
            $('.single-item').slick('slickNext');
            progressBarIndex++;
            if (progressBarIndex > 4) {
                progressBarIndex = 0;
            }
            startProgressbar();
        }
    }
}

function resetProgressbar() { 
    $('.inProgress').css({
        width: 0 + '%'
    }); 
    clearInterval(tick);
}

startProgressbar();
// End ticking machine






   