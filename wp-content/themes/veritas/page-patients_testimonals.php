<?php 
/* Template Name: Patients Testimonals Page */ 
get_header();
$post_id = get_queried_object_id(); // gets the id of the current page/post
?>
<section class="first-section banner-swiper-section testimonals-banner">
        <div class="container-fluid wrapper">
            <div class="row">
                <div class="col-md-5">
                    <div class="testimonals-banner-content" data-aos="fade-right">
                        <h4 class="montserrat-bold"><?php echo get_field('patient_testimonials_banner_title', $post_id); ?></h4> 
                    </div>
                </div>
            </div>
        </div>
 </section>

 <section class="testimonals-why-choose-sec">
    <div class="container-fluid wrapper">
        <div class="row testimonals-why-choose-head-row">
            <div class="col-md-9">
                <div class="testimonals-why-choose-head">
                    <h4 class="montserrat-bold green-color common-head" data-aos="fade-up"><?php echo get_field('patient_testimonials_banner_title', $post_id); ?></h4>
                    <p class="common-para grey-color" data-aos="fade-up"><?php echo get_field('patient_testimonials_second_section_description', $post_id); ?></p>
                </div>
            </div>
        </div>
    </div>  
</section> 

<section class="testimonals-sec">
<div class="swiper testimonalSwiper" data-aos="fade-up">
    <div class="swiper-slide-button">
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
      <div class="swiper-wrapper">      
        <div class="swiper-slide">
            <div class="testimonals-swiper-content-div">
                <div class="container-fluid">
                    <div class="row testimonals-swiper-content-row">
                        <div class="col-6">
                            <div class="testimonals-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonals/Asset2-100.jpg" class="img-fluid" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="testimonals-content">
                                <h4 class="montserrat-bold golden-color"><?php echo get_field('patient_testimonials_first_swiper_title', $post_id); ?></h4>       
                                <hr class="testimonals-sec-line"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonals/Asset1.svg" class="testimonals-content-img" />                   
                                <p class="testimonals-p montserrat-bold grey-color"><?php echo get_field('patient_testimonials_first_swiper_description', $post_id); ?></p>                               
                            </div> 
                                                     
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="testimonals-swiper-content-div">
                <div class="container-fluid">
                    <div class="row testimonals-swiper-content-row">
                        <div class="col-6">
                            <div class="testimonals-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonals/Asset3-100.jpg" class="img-fluid" />
                            </div>    
                        </div>
                        <div class="col-6">
                            <div class="testimonals-content">
                                <h4 class="montserrat-bold golden-color"><?php echo get_field('patient_testimonials_second_swiper_title', $post_id); ?></h4>       
                                <hr class="testimonals-sec-line"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonals/Asset1.svg" class="testimonals-content-img" />                   
                                <p class="testimonals-p montserrat-bold grey-color"><?php echo get_field('patient_testimonials_second_swiper_description', $post_id); ?></p>                               
                            </div>                                                        
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="testimonals-swiper-content-div">
                <div class="container-fluid">
                    <div class="row testimonals-swiper-content-row">
                        <div class="col-6">
                            <div class="testimonals-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonals/Asset2-100.jpg" class="img-fluid" />
                            </div>                            

                        </div>
                        <div class="col-6">
                            <div class="testimonals-content">
                                <h4 class="montserrat-bold golden-color"><?php echo get_field('patient_testimonials_third_swiper_title', $post_id); ?></h4>       
                                <hr class="testimonals-sec-line"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonals/Asset1.svg" class="testimonals-content-img" />                   
                                <p class="testimonals-p montserrat-bold grey-color"><?php echo get_field('patient_testimonials_third_swiper_description', $post_id); ?></p>                               
                            </div>  
                                                     
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="testimonals-swiper-content-div">
                <div class="container-fluid">
                    <div class="row testimonals-swiper-content-row">
                        <div class="col-6">
                            <div class="testimonals-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonals/Asset3-100.jpg" class="img-fluid" />
                            </div>
                        </div>
                        <div class="col-6">                                                
                            <div class="testimonals-content">
                                <h4 class="montserrat-bold golden-color"><?php echo get_field('patient_testimonials_fourth_swiper_title', $post_id); ?></h4>       
                                <hr class="testimonals-sec-line"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonals/Asset1.svg" class="testimonals-content-img" />                   
                                <p class="testimonals-p montserrat-bold grey-color"><?php echo get_field('patient_testimonials_fourth_swiper_description', $post_id); ?></p>                               
                            </div>   
                        </div>
                    </div> 
                </div>
            </div>
        </div> 
        <div class="swiper-slide">
            <div class="testimonals-swiper-content-div">
                <div class="container-fluid">
                    <div class="row testimonals-swiper-content-row">
                        <div class="col-6">
                            <div class="testimonals-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonals/Asset2-100.jpg" class="img-fluid" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="testimonals-content">
                                <h4 class="montserrat-bold golden-color"><?php echo get_field('patient_testimonials_fivth_swiper_title', $post_id); ?></h4>       
                                <hr class="testimonals-sec-line"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonals/Asset1.svg" class="testimonals-content-img" />                   
                                <p class="testimonals-p montserrat-bold grey-color"><?php echo get_field('patient_testimonials_fivth_swiper_description', $post_id); ?></p>                               
                            </div>                   
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="testimonals-swiper-content-div">
                <div class="container-fluid">
                    <div class="row testimonals-swiper-content-row">
                        <div class="col-6">
                            <div class="testimonals-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonals/Asset3-100.jpg" class="img-fluid" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="testimonals-content">
                                <h4 class="montserrat-bold golden-color"><?php echo get_field('patient_testimonials_sixth_swiper_title', $post_id); ?></h4>       
                                <hr class="testimonals-sec-line"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonals/Asset1.svg" class="testimonals-content-img" />                   
                                <p class="testimonals-p montserrat-bold grey-color"><?php echo get_field('patient_testimonials_sixth_swiper_description', $post_id); ?></p>                               
                            </div>                  
                        </div>
                    </div> 
                </div>
            </div>
        </div>
      </div>   
      <div class="swiper-pagination"></div>        

    </div> 
</section>



<section class="testi-video-sec">
    <div class="container-fluid wrapper">
    <div class="row flex-center-row">
            <div class="col-md-8">
                <div class="testi-video-head" data-aos="fade-up">
                    <h4 class="montserrat-bold green-color common-head"><?php echo get_theme_mod('header_text_field')?></h4>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="testi-video-card" data-aos="fade-up"> 
                    <div class="testi-iframe">
                        <iframe src="<?php echo get_theme_mod('youtube_first_video_link')?>?html5=1&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
                    </div>  
                    <div class="testi-video-content">
                        <h6 class="montserrat-bold green-color"><?php echo get_theme_mod('header_desc_field')?></h6>
                    </div> 
                </div>
            </div>
            <div class="col-md-4">
                <div class="testi-video-card" data-aos="fade-up"> 
                    <div class="testi-iframe">
                        <iframe src="<?php echo get_theme_mod('youtube_second_video_link')?>?html5=1&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
                    </div>  
                    <div class="testi-video-content">
                        <h6 class="montserrat-bold green-color"><?php echo get_theme_mod('header_desc_field')?></h6>
                    </div> 
                </div>
            </div>
            <div class="col-md-4">
                <div class="testi-video-card" data-aos="fade-up"> 
                    <div class="testi-iframe">
                        <iframe src="<?php echo get_theme_mod('youtube_third_video_link')?>?html5=1&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
                    </div>  
                    <div class="testi-video-content">
                        <h6 class="montserrat-bold green-color"><?php echo get_theme_mod('header_desc_field')?></h6>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>

<script>

var ytplayerList;

function onPlayerReady(e) {
    var video_data = e.target.getVideoData(),
        label = video_data.video_id+':'+video_data.title;
    e.target.ulabel = label;
    console.log(label + " is ready!");
 
}
function onPlayerError(e) {
    console.log('[onPlayerError]');
}
function onPlayerStateChange(e) {
    var label = e.target.ulabel;
    if (e["data"] == YT.PlayerState.PLAYING) {
        console.log({
            event: "youtube",
            action: "play:"+e.target.getPlaybackQuality(),
            label: label
        });
        //if one video is play then pause other
        pauseOthersYoutubes(e.target);
    }
    if (e["data"] == YT.PlayerState.PAUSED) {
        console.log({
            event: "youtube",
            action: "pause:"+e.target.getPlaybackQuality(),
            label: label
        });
    }
    if (e["data"] == YT.PlayerState.ENDED) {
        console.log({
            event: "youtube",
            action: "end",
            label: label
        });
    }
    //track number of buffering and quality of video
    if (e["data"] == YT.PlayerState.BUFFERING) {
        e.target.uBufferingCount?++e.target.uBufferingCount:e.target.uBufferingCount=1; 
        console.log({
            event: "youtube",
            action: "buffering["+e.target.uBufferingCount+"]:"+e.target.getPlaybackQuality(),
            label: label
        });
        //if one video is play then pause other, this is needed because at start video is in buffered state and start playing without go to playing state
        if( YT.PlayerState.UNSTARTED ==  e.target.uLastPlayerState ){
            pauseOthersYoutubes(e.target);
        }
    }
    //last action keep stage in uLastPlayerState
    if( e.data != e.target.uLastPlayerState ) {
        console.log(label + ":state change from " + e.target.uLastPlayerState + " to " + e.data);
        e.target.uLastPlayerState = e.data;
    }
}
function initYoutubePlayers(){
    ytplayerList = null; //reset
    ytplayerList = []; //create new array to hold youtube player
    for (var e = document.getElementsByTagName("iframe"), x = e.length; x-- ;) {
        if (/youtube.com\/embed/.test(e[x].src)) {
            ytplayerList.push(initYoutubePlayer(e[x]));
            console.log("create a Youtube player successfully");
        }
    }
    
}

function pauseOthersYoutubes( currentPlayer ) {
    if (!currentPlayer) return;
    for (var i = ytplayerList.length; i-- ;){
        if( ytplayerList[i] && (ytplayerList[i] != currentPlayer) ){
            ytplayerList[i].pauseVideo();
        }
    }  
}

//init a youtube iframe
function initYoutubePlayer(ytiframe){
    console.log("have youtube iframe");
    var ytp = new YT.Player(ytiframe, {
        events: {
            onStateChange: onPlayerStateChange,
            onError: onPlayerError,
            onReady: onPlayerReady
        }
    });
    ytiframe.ytp = ytp;
    return ytp;
}
function onYouTubeIframeAPIReady() {
    console.log("YouTubeIframeAPI is ready");
    initYoutubePlayers();
}
var tag = document.createElement('script');
//use https when loading script and youtube iframe src since if user is logging in youtube the youtube src will switch to https.
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);    



</script>

<?php
get_footer();
?>