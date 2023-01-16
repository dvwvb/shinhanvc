//SPLITTING
Splitting();

// ===== GSAP & LOCOMOTIVE SCROLL ===== //
gsap.registerPlugin(ScrollToPlugin, ScrollTrigger);

ScrollTrigger.config( {
    limitCallbacks:true
});
ScrollTrigger.defaults({
    scroller: '[data-scroll-container]'
});

var locoScroll = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    smooth: true,
    lerp: 0.07,
    repeat: true,
    getDirection: true,
});

locoScroll.on("scroll", ScrollTrigger.update);

ScrollTrigger.scrollerProxy('[data-scroll-container]', {
    scrollTop: function scrollTop(value) {
        return arguments.length ? locoScroll.scrollTo(value, 0, 0) : locoScroll.scroll.instance.scroll.y;
    },
    getBoundingClientRect: function getBoundingClientRect() {
        return { top: 0, left: 0, width: window.innerWidth, height: window.innerHeight };
    },
    pinType: function pinType() {
        return document.querySelector('[data-scroll-container]').style.transform ? "transform" : "fixed";
    }
});



// ===== HEADER 스크롤시 숨기기 ===== //
var hidden = false;
var static = true;
let timer;

locoScroll.on('scroll', function(instance){
    if(!timer){
        timer = setTimeout(()=>{
            timer = null;
            if(instance.delta.y === 0){
                $('#header').removeClass('gray');
            }
        },400)
    }

    var headerHeight = $('#header').height();
    if(instance.direction === 'down' && static){
        if(instance.scroll.y > headerHeight){
            $('#header').addClass('type-hide');
            static = false;
        }
    }
    if(instance.direction === 'up' && !static){
        $('#header').removeClass('type-hide');
        $('#header').addClass('gray');
        static = true;
    }
});




// ===== SCROLLTRIGGER REFRESH ===== //
ScrollTrigger.addEventListener('refresh', function(){
    locoScroll.update();
});
ScrollTrigger.refresh();



var mainVisual = gsap.timeline();
ScrollTrigger.create({
    animation: mainVisual,
});
// SOLUTION
var mainVisual = gsap.timeline();


// SOLUTION
// var mainSolution = gsap.timeline();
// mainSolution.to('#main', {zIndex:1002, zIndex:1002})
// .set({}, {}, "+=5") // add end time
// .to('.main-solution .bg-txt p', {letterSpacing: "5vw", opacity:1})
// .set({}, {}, "+=5") // add end time
// .to('.main-solution .bg-txt p', {opacity:0.08, duration: 4})
// .to('.main-solution .center-txt', {opacity:1, padding:0})
// .set({}, {}, "+=5") // add end time

// ScrollTrigger.create({
//     animation: mainSolution,
//     trigger: '.main-solution',
//     start: '-=300',
//     end: "+=300",
//     scrub: true,
//     //pin: true,
//     //pinType: "fixed"
//     // markers:true
// });
setTimeout(function() {
    $('.main-solution .bg-txt').addClass('hide2');
}, 10);


// SOLUTION


// START
var mainStart01 = gsap.timeline({
    scrollTrigger: {
        trigger: '.main-start',
        start: 'top top',
        end: "+=500",
        scrub: true,
        //pin: true,
        //pinType: "fixed"
        // markers:true
    }
});
var mainStart01 = new TimelineMax({ onComplete : function () { this . restart ()} });

mainStart01.to('.main-start .center-txt', {opacity:0, duration: 2}, "txt")
.to('.main-start .center-txt', {padding:0, opacity:1, duration: 2}, "txt")
.to('.main-start .center-txt .tit', {className:"tit screenA",duration: 2},"txt")
.to('.main-start .center-txt .tit', {className:"tit screenB",duration: 2}, ">1")
.to('.main-start .center-txt .tit', {className:"tit screenC",duration: 2}, ">1")
.to('.main-start .center-txt .tit', {className:"tit screenD",duration: 2}, ">1")
var mainStart01 = new TimelineMax({ onComplete : function () { this . restart ()} });


// START


// TEAM
//category-tab
$(".main-team .team-cont .left > ul > li").hover(function () {
    var idx = $(this).index();

    $(".main-team .team-cont .right ul li").removeClass('active hide');

    setTimeout(function() {
        $(".main-team .team-cont .left > ul > li").removeClass("active");
        $(".main-team .team-cont .left > ul > li").eq(idx).addClass("active");
        $(".main-team .team-cont .right ul li").removeClass('active');
        $(".main-team .team-cont .right ul li").eq(idx).addClass('active');
    }, 10);


    if($('.main-team .team-cont .left > ul > li').eq(idx).hasClass('active')) {
        $(".main-team .team-cont .right ul li").eq(idx).removeClass('hide');
    }else{
        setTimeout(function() {
            $(".main-team .team-cont .right ul li:not(.active)").eq(idx).addClass('hide');
        }, 100);
    }
})

var mainTeam1 = gsap.timeline({
    scrollTrigger: {
        trigger: '.main-team',
        start: 'top 100%',
        end: 'top 100%',
        scrub: true
    }
});
mainTeam1.to('body', { backgroundColor: 'rgba(255,255,255,1)'});

var mainTeam2 = gsap.timeline({
    scrollTrigger: {
        trigger: '.main-team',
        start: 'top 50%',
        end: 'top 50%',
        scrub: true,
        // markers:true
    }
});
mainTeam2.to('body', { backgroundColor: 'rgba(255,255,255,1)'});

// CUSTOMER

var mainCustomerBg = gsap.timeline();
mainCustomerBg.to('.circle-list li p', { color: '#fff',duration:0.7}, ">", "bgcolor");
mainCustomerBg.to('.main-team .team-cont .left ul > li .desc p', { color: '#fff',duration:0.7}, ">", "bgcolor");
mainCustomerBg.to('.main-team .team-cont .left ul > li .tit p', { color: '#fff',duration:0.7}, ">", "bgcolor");
mainCustomerBg.to('body', { backgroundColor: '#0e1a30',duration:0.7}, ">", "bgcolor");
mainCustomerBg.to('.main-customer .tit', {color:'#fff', duration:0.7}, ">", "bgcolor");
mainCustomerBg.to('.circle-list li p', {className:"white", duration:0.7}, ">", "bgcolor");


ScrollTrigger.create({
    trigger: '.main-customer',
animation : mainCustomerBg,
start: 'top 70%',
end: 'top 70%',
    scrub: true,
});


ScrollTrigger.create({
    trigger: '.main-customer',
    end: 'top 80%',
    scrub: true,
    onEnterBack: () => {
        let contentTitles = document.querySelectorAll('.main-team .team-cont .left ul > li .tit p');
        contentTitles && [...contentTitles].map(el => el.removeAttribute('style'));
    },
    //markers:true,
});

var mainCustomer = gsap.timeline({
    scrollTrigger: {
        animation: mainCustomer,
        trigger: '.main-customer',
        start: 'bottom top',
        end:'bottom top',
        scrub: true,
        //pin: true,
        //pinType: "fixed"
        // markers:true,
    }
});
mainCustomer.to('body', { backgroundColor: '#0e1a30',duration:0.7}, ">", "bgcolor");

setTimeout(function() {
    $('.main-customer').css('background-color', 'transparent');
}, 10);

// var mainCustomer2 = gsap.timeline({
//     scrollTrigger: {
//         trigger: '.main-customer',
//         start: 'top top',
//         end:'top top',
//         scrub: true,
//         //pin: true,
//         //pinType: "fixed"
//         markers:true,
//     }
// });
// mainCustomer2.to('.main-customer .tit', { color: '#fff',duration:0.7}, ">", "bgcolor");



var customerSlider = new Swiper('.customer-cont .swiper-container', {
loop: true,
slidesPerView: 3,
spaceBetween: 0,
    mousewheelControl: false,
    autoplay:{
        delay : 1000,
        pauseOnMouseEnter: false,
        disableOnInteraction: false,
    },
speed:15000,
breakpoints: {
        1024: {
            slidesPerView:6,
        }
    }
});



const gotoTopEl = document.querySelector('.main-footer #gotoTop');
gotoTopEl.addEventListener('click', function() {
locoScroll.scrollTo(0,0)
})