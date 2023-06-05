// $(document).ready(function () {
//   setTimeout(function(){ 
//       $(".popup form").css("background-color","#000");
//     }, 3000++);

//   });
// setInterval(
//   function () {
//     var randomColor = Math.floor(Math.random()*16777215).toString(16);
   
   
//     $('.popup-form').css('background-color',  "#"+randomColor);
//   },2000);

 
  // sessionStamp = sessionStorage.getItem('ts'),
  // elapsedTime = Date.now();
  // d1= Math.round(elapsedTime / 1000).toString();
  // d = Number(d1);
  // console.log(d1)
  // console.log(d)
  // var h = Math.floor(d / 3600);
  // var m = Math.floor(d % 3600 / 60);
  // var s = Math.floor(d % 3600 % 60);

  // var hDisplay = h > 0 ? (h < 10 ? "0" : "") + h + ":" : "00:";
  //   var mDisplay = m > 0 ? (m < 10 ? "0" : "") + m + ":" : "00:";
  //   var sDisplay = s > 0 ? (s < 10 ? "0" : "") + s : "00";
  // console.log(h)
  // console.log(m)
  // console.log(s)
  // console.log(hDisplay)
  // console.log(mDisplay)
  // console.log(sDisplay)


  var timeStamp = Date.now(),
sessionStamp = sessionStorage.getItem('ts'),
elapsedTime;
if (!sessionStamp) {
	sessionStorage.setItem('ts', timeStamp.toString());
  sessionStamp = timeStamp;
}
else {
  sessionStamp = parseInt(sessionStamp);
}

function increment() {
	elapsedTime = Date.now() - sessionStamp;
	d1= Math.round(elapsedTime / 1000).toString();
	d = Number(d1);
    var h = Math.floor(d / 3600);
    var m = Math.floor(d % 3600 / 60);
    var s = Math.floor(d % 3600 % 60);
	
  	var hDisplay = h > 0 ? (h < 10 ? "0" + h :h ) : "00";
    var mDisplay = m > 0 ? (m < 10 ? "0" + m :m ) : "00";
    var sDisplay = s > 0 ? (s < 10 ? "0" + s :s) : "00";
	
    $('.popup-form').css('background-color',  "#"+hDisplay + mDisplay + sDisplay);
    // console.log(hDisplay + mDisplay + sDisplay);
}
setInterval(increment, 1000);



// intel Tel Input

$(".phone-country").intlTelInput({
     
  // allowDropdown: false,
  // autoHideDialCode: false,
  // autoPlaceholder: "off",
  // dropdownContainer: "body",
  // excludeCountries: ["us"],
  // formatOnDisplay: false,
geoIpLookup: function(callback) {
$.ajax({
  url: 'https://telize-v1.p.mashape.com/geoip',
  type: 'GET',
  data: {},
  dataType: 'json',
  success: function (data) {
    var countryCode = (data && data.country_code) ? data.country_code : "";
    
    callback(countryCode);
  },
  error: function (err) {
    //alert("")
  },
  beforeSend: function (xhr) {
    xhr.setRequestHeader("X-Mashape-Authorization", "qKsg8tYMdTmshjZ0eSZznAWBhwOFp1huvy7jsnNg3rhw4x8SGD"); // Enter here your Mashape key
  }
}); 
 },
   initialCountry: "auto",
   nationalMode: true,
   separateDialCode: true,
  // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
  // placeholderNumberType: "MOBILE",
  // preferredCountries: ['cn', 'jp'],
 // utilsScript: "assets/js/utils.js"
});



setTimeout(function(){
$('input[name="pc"]').val($('.selected-dial-code').text());
$('input[name="ctry"]').val( $('.country-list .country.active .country-name').text());
}, 3000);


$('body').delegate('.country','click',function(){
$('input[name="pc"]').val($(this).find('.dial-code').text());

var oldString2=$('.selected-flag').attr('title').toUpperCase();
var newString12 = oldString2.split(':',1)[0];
           $('input[name="ctry"]').val(newString12);
});


// $('.navbar-toggler').click(function(){
 

//       $(".navbar-toggler").toggle(
//         $('.fa').removeClass("fa-bars"),
//       $('.fa').addClass("fa-times")
//       );
    

//     });

//     $('.navbar-toggler').click(function(){
 

//       $(".navbar-toggler").toggle(
        
//       $('.fa').addClass("fa-times"),
//       $('.fa').removeClass("fa-bars")
//       );
    

//     });
  


$(document).ready(function () {
  setTimeout(function(){
      $('.popup').fadeIn(1000);
      
  }, 2000);

  $('.fa').click(function(){
      $('.popup').hide();
     
  });
});






 $('.creative').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
      mobileFirst: true,
      autoplay: true,
      speed: 500,
      infinite: true,
      arrows: false,
      dots: true,
      responsive: [
     
          {
              breakpoint: 767,
              settings: 'unslick'
          }
          
      ]
  });

  $(window).on('resize', function() {
      $('.creative').slick('resize');
  });

    $('.designSlider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
          mobileFirst: true,
          arrows: false,
          autoplay: true,
          speed: 500,
          infinite: true,
          dots: true,
          responsive: [
         
              {
                  breakpoint: 767,
                  settings: 'unslick'
              }
              
          ]
      });
  
      $(window).on('resize', function() {
          $('.designSlider').slick('resize');
      });

      $('.brand').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
            mobileFirst: true,
            arrows: false,
            dots: true,
            autoplay: true,
            speed: 500,
            infinite: true,
            responsive: [
           
                {
                    breakpoint: 767,
                    settings: 'unslick'
                }
                
            ]
        });
    
        $(window).on('resize', function() {
            $('.brand').slick('resize');
        });


        $('.review').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
              mobileFirst: true,
              arrows: false,
              dots: true,
              autoplay: true,
              speed: 500,
              infinite: true,
              responsive: [
                
               
               
                  {
                      breakpoint: 1024,
                      settings: 'unslick'
                  },
                 
                 
                  
              ]
          });
      
          $(window).on('resize', function() {
              $('.review').slick('resize');
          });
  
  


$(window).scroll(function () {
  if ($(this).scrollTop() > 50) {
    $('.header-section').addClass('change-bg');
  } else {
    $('.header-section').removeClass('change-bg');
  }
});

//*****************************
// Tabbing 
//*****************************

$('[data-targetit]').on('click', function () {
  $(this).siblings().removeClass('current');
  $(this).addClass('current');
  var target = $(this).data('targetit');
  $('.' + target).siblings('[class^="tabs"]').removeClass('current');
  $('.' + target).addClass('current');
  $('.slick-slider').slick('setPosition', 0);

});

//*****************************
// Banner
//*****************************
$('.bannerSlider').slick({
  draggable: true,
  arrows: false,
  dots: true,


  autoplay: true,
  speed: 500,
  infinite: true,

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
})




// $('.designSlider').slick({
//   autoplay: true,
//   speed: 500,
//   arrows:false,
//   slidesToShow: 3,
//   settings:"unslick",
//   responsive: [
//     {
//       breakpoint: 1366,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 1,
//         infinite: true,
//         dots: true
//       }
//     },
//     {
//       breakpoint: 600,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     }
//     // You can unslick at a given breakpoint now by adding:
//     // settings: "unslick"
//     // instead of a settings object
//   ]
// })
// $('.review').slick({
//   autoplay: true,
//   speed: 500,
//   arrows: false,
//   slidesToShow: 3,
//   settings: "unslick",
//   responsive: [
//     {
//       breakpoint: 1366,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 1,
//         infinite: true,
//         dots: true
//       }
//     },
//     {
//       breakpoint: 600,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     }
//     // You can unslick at a given breakpoint now by adding:
//     // settings: "unslick"
//     // instead of a settings object
//   ]
// })
// $('.brand').slick({
//   autoplay: true,
//   speed: 500,
//   arrows: false,
//   slidesToShow: 5,
//   settings: "unslick",
//   infinite: true,
//   responsive: [
//     {
//       breakpoint: 1366,
//       settings: {
//         slidesToShow: 4,
//         slidesToScroll: 1,
//         infinite: true,
//         dots: true
//       }
//     },
//     {
//       breakpoint: 767,
//       settings: {
//         slidesToShow: 1,


//         slidesToScroll: 1
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     }
//     // You can unslick at a given breakpoint now by adding:
//     // settings: "unslick"
//     // instead of a settings object
//   ]
// })