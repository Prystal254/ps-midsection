gsap.registerPlugin(ScrollTrigger);
gsap.utils.toArray(".mid-section .sub-section").forEach(section => {
    console.log(section.offsetWidth)


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
        
                    markers:true,
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
        
                    markers:true,
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







var run_once = false;
// this is for the header - logo scroll
$(document).on("scroll", function(e){
    var scroller = $(window).scrollTop();
    
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
            $(".mid-section .model video.single").hide();
            $(".mid-section .model video.multiple")[0].currentTime = 0;
            $(".mid-section .model video.multiple")[0].play();
            $(".mid-section .model video.multiple").fadeIn();
            return run_once = true;
        }
        
    }
    else{
        if(run_once == true){
            $(".mid-section .model video.multiple").hide();
            $(".mid-section .model video.single").fadeIn();
            
           return run_once = false;

        }
    }
})
 
$(document).ready(function(){ 
    setTimeout(function(){
        $(".process").css("display","none");
        $(".preview").css("display","flex");  
    }, 5000);

    $(".preview").click(function(){
        $(".preload").css("display","none");  
    });
    
})
