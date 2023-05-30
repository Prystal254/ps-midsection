gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray(".mid-section .sub-section").forEach(section => {
    let tl = gsap.timeline({
        scrollTrigger:{
            trigger: section,
            start:"center center",
            end: () => "+=" + section.offsetWidth,
            scrub: true,
            pin :true,
            anticipatePin: 1,
            markers:true,
        },
        defaults:{ ease : "none"}
    })
    if(section.classList.contains("returns")){
        tl.fromTo(section.querySelector(".stats"), {autoAlpha:0, duration:1}, {autoAlpha:100})
        tl.fromTo(section.querySelector(".description-blurb"),{ yPercent:100 , autoAlpha:0, y:0 , duration:1 , delay: 2 }, { yPercent:0, autoAlpha:100 })
    }
    else if(section.classList.contains("conversion")){
        console.log(section)
    }
    else if(section.classList.contains("brands")){
        console.log(section)
    }
    
})
