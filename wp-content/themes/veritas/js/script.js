 
 
$(document).ready(function(){  
  
  
  AOS.init({
    duration: 1000,
    // once:true,
    disable: 'mobile'
  })


    var swiper = new Swiper(".bannerSwiper", {
        autoplay: true,
        centeredSlides: true,
        speed: 1000,
        effect: 'fade',
        pagination: {
          el: ".swiper-pagination", 
          clickable: true,
        },
      });

   

      var swiper = new Swiper(".serviceSwiper", { 
        autoplay: true,  
        slidesPerView: 1.3,
        loop:true,
        speed: 1000,
        spaceBetween: 100,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          // when window width is >= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 20
          },
          // when window width is >= 480px
          768: {
            slidesPerView: 1.3,
            spaceBetween: 30
          },
          // when window width is >= 640px
          1024: {
            slidesPerView:1.3,
            spaceBetween: 40
          }
        }
      });

      var swiper = new Swiper(".ourteamSwiper", {  
        slidesPerView: 1.5,
        centeredSlides: true,
        // autoplay: true,  
        loop:true,
        spaceBetween: 80,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        breakpoints: {
          // when window width is >= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 20
          },
          // when window width is >= 480px
          768: {
            slidesPerView: 1,
            spaceBetween: 30
          },
          // when window width is >= 640px
          1024: {
            slidesPerView:1.5,
            spaceBetween: 80
          },
          1280: {
            slidesPerView:1.5,
            spaceBetween: 80
          }
        }
      });

      var swiper = new Swiper(".storiesSwiper", { 
        autoplay: true,  
        slidesPerView: 1.3,
        loop:true,
        spaceBetween: 100,
        scrollbar: {
          el: ".swiper-scrollbar",
          draggable: true,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        breakpoints: {
          // when window width is >= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 20
          },
          // when window width is >= 480px
          768: {
            slidesPerView: 1,
            spaceBetween: 30
          },
          // when window width is >= 640px
          1024: {
            slidesPerView:1.3, 
          },
          1280: {
            slidesPerView:1.3, 
          }
        }
      });


      var swiper = new Swiper(".storiesVideoSwiper", { 
        autoplay: true,  
        slidesPerView: 1.3,
        loop:true,
        spaceBetween: 30, 
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        }
      });
      var swiper = new Swiper(".storiesVideoSwiper.storiesBlogSwiper", { 
        autoplay: true,  
        slidesPerView: 1,
        loop:true,
        spaceBetween: 30, 
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        }
      });

      // Testimonal Swiper Script Starts
      // var swiper = new Swiper(".testimonalSwiper", { 
      //   autoplay: true,  
      //   slidesPerView: 2.1,
      //   centeredSlides: true,
      //   loop:true,
      //   spaceBetween: 100,
      //   pagination: {
      //     el: ".swiper-pagination",
      //     clickable: true,
      //   },
      // });

   
var swiper = new Swiper(".testimonalSwiper", {  
    slidesPerView: 2.1,     
    centeredSlides: true,
    autoplay: true,  
    loop:true,
    spaceBetween: 150, 
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 15,
        // centeredSlides: false,
        // loop:true,
      },
      // when window width is >= 360px
      360: {
        slidesPerView: 1,
        spaceBetween: 15,
        // centeredSlides: false,
        // loop:true,
      },
      // when window width is >= 414px
      414: {
        slidesPerView: 1,
        spaceBetween: 15,
        // centeredSlides: false,
        // loop:true,
      },
      // when window width is >= 540px
      540: {
        slidesPerView: 1,
        spaceBetween: 15,
        // centeredSlides: false,
        // loop:true,
      },
      // when window width is >= 640px
     640: {
        slidesPerView: 1,
        spaceBetween: 15,
        // centeredSlides: false,
        // loop:true,
      },
      // when window width is >= 768px
      768: {
        slidesPerView: 1,
        spaceBetween: 15,
        // centeredSlides: false,
        // loop:true,
      },
      // when window width is >= 820px
      820: {
        slidesPerView: 1,
        spaceBetween: 15,
        centeredSlides: false,
        loop:true,
      },
      // when window width is >= 1024px
      1024: {
        slidesPerView: 2.0,
        centeredSlides: true,
        loop:true,
        spaceBetween: 150 
        },
      // when window width is >= 1280px
      1280: {
        slidesPerView: 2,
        centeredSlides: true,
        loop:true,
        spaceBetween: 150 
        }
    },                
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
  });
  // Testimonal Swiper Script End



      // Latest Procedure
      // var galleryTop = new Swiper('.gallery-top', {
      //   spaceBetween: 10,
      //   navigation: {
      //     nextEl: '.swiper-button-next',
      //     prevEl: '.swiper-button-prev',
      //   },
      //    loop: true,
      //   loopedSlides: 4
      // });
      // var galleryThumbs = new Swiper('.gallery-thumbs', {
      //   spaceBetween: 10, 
      //   slidesPerView: 4,
      //   touchRatio: 0.2,
      //   slideToClickedSlide: true,
      //   loop: true,
      //   loopedSlides: 4
      // });
      // galleryTop.controller.control = galleryThumbs;
      // galleryThumbs.controller.control = galleryTop;



      var classnames = ['Robotic Surgery', 'HIPEC', 'PIPAC', 'Fluorescence-Guided Surgery', 'ERAS']
      var menu = ['Robotic Surgery', 'HIPEC', 'PIPAC', 'Fluorescence-Guided Surgery', 'ERAS']
      var mySwiper = new Swiper('.swiper-container.latest-procedure-swiper', {
        slidesPerView: 3, 
        loop:true, 
        autoplay: true,  
        spaceBetween: 50,  
         grabCursor: true, 
        // If we need pagination
        pagination: {
        
        el: '.swiper-pagination',
            clickable: true,
          renderBullet: function (index, className) {
          return '<span class="' + className + ' '+ classnames[index] + '">' + (menu[index]) + '</span>';
          },
        },
       
        navigation: {
          nextEl: '.latest-procedure-swiper .swiper-button-next',
          prevEl: '.latest-procedure-swiper .swiper-button-prev',
        }, 

        on: {
          slideChange: function(){
            var currentSlide = this.realIndex + 1;
            console.log("currentSlide is:" + currentSlide);
            document.querySelector('.current-slide').innerHTML = currentSlide;
          },
        },
        breakpoints: {
          // when window width is >= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 20
          },
          // when window width is >= 480px
          768: {
            slidesPerView: 2,
            spaceBetween: 60
          },
          // when window width is >= 640px
          1024: {
            slidesPerView:3,
            spaceBetween: 40
          },
          1280: {
            slidesPerView:3,
            spaceBetween: 50
          }
        }
      })


});
// $(document).ready(function(){   
//     var swiper = new Swiper(".bannerSwiper", {
//         autoplay: true,
//         centeredSlides: true,
//         speed: 1000,
//         effect: 'fade',
//         pagination: {
//           el: ".swiper-pagination", 
//           clickable: true,
//         },
//       });

   

//       var swiper = new Swiper(".serviceSwiper", { 
//         autoplay: true,  
//         slidesPerView: 1.3,
//         loop:true,
//         spaceBetween: 100,
//         pagination: {
//           el: ".swiper-pagination",
//           clickable: true,
//         },
//       });

//       var swiper = new Swiper(".ourteamSwiper", {  
//         slidesPerView: 1.8,
//         centeredSlides: true,
//         loop:true,
//         spaceBetween: 100,
//         pagination: {
//           el: ".swiper-pagination",
//           clickable: true,
//         },
//         navigation: {
//           nextEl: ".swiper-button-next",
//           prevEl: ".swiper-button-prev"
//         }
//       });

//       var swiper = new Swiper(".storiesSwiper", { 
//         autoplay: false,  
//         slidesPerView: 1.3,
//         loop:true,
//         spaceBetween: 100,
//         scrollbar: {
//           el: ".swiper-scrollbar",
//           draggable: true,
//         },
//         pagination: {
//           el: ".swiper-pagination",
//           clickable: true,
//         },
//         navigation: {
//           nextEl: ".swiper-button-next",
//           prevEl: ".swiper-button-prev"
//         }
//       });


//       var swiper = new Swiper(".storiesVideoSwiper", { 
//         autoplay: false,  
//         slidesPerView: 1.3,
//         loop:true,
//         spaceBetween: 30, 
//         navigation: {
//           nextEl: ".swiper-button-next",
//           prevEl: ".swiper-button-prev"
//         }
//       });
//       var swiper = new Swiper(".storiesVideoSwiper.storiesBlogSwiper", { 
//         autoplay: false,  
//         slidesPerView: 1,
//         loop:true,
//         spaceBetween: 30, 
//         navigation: {
//           nextEl: ".swiper-button-next",
//           prevEl: ".swiper-button-prev"
//         }
//       });

//       // Testimonal Swiper Script Starts
//       var swiper = new Swiper(".testimonalSwiper", {  
//         slidesPerView: 2.1,     
//         centeredSlides: true,
//         loop:true,
//         spaceBetween: 150,                 
//         pagination: {
//           el: ".swiper-pagination",
//           clickable: true,
//         },
//         navigation: {
//           nextEl: ".swiper-button-next",
//           prevEl: ".swiper-button-prev"
//         },
//       });
//       // Testimonal Swiper Script End
      
//       var classnames = ['Robotic Surgery', 'HIPEC', 'PIPAC', 'Fluorescence-Guided Surgery', 'ERAS']
//       var menu = ['Robotic Surgery', 'HIPEC', 'PIPAC', 'Fluorescence-Guided Surgery', 'ERAS']
//       var mySwiper = new Swiper('.swiper-container.latest-procedure-swiper', {
//         slidesPerView: 3, 
//         loop:true, 
//         spaceBetween: 50,  
//          grabCursor: true, 
//         // If we need pagination
//         pagination: {
        
//         el: '.swiper-pagination',
//             clickable: true,
//           renderBullet: function (index, className) {
//           return '<span class="' + className + ' '+ classnames[index] + '">' + (menu[index]) + '</span>';
//           },
//         },
       
//         navigation: {
//           nextEl: '.latest-procedure-swiper .swiper-button-next',
//           prevEl: '.latest-procedure-swiper .swiper-button-prev',
//         }, 

//         on: {
//           slideChange: function(){
//             var currentSlide = this.realIndex + 1;
//             console.log("currentSlide is:" + currentSlide);
//             document.querySelector('.current-slide').innerHTML = currentSlide;
//           },
//         }
//       })
      
      
// });