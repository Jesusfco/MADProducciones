// $(".hideBarIcon").click(function(){            
//     $(".movBar").removeClass('show');                         
// });

// $(".nav-links.menuIcon").click(function(){
//     $(".movBar").addClass('show');                            
// });

// function moveToIdElement(element) {
    
//     $("html, body").animate({
//         scrollTop: $("#"+element).offset().top - 100
//     }, 1200);
    
//     if($(window).width() < 830) {
//         $(".movBar").removeClass('show');                         
//     }

// }

$(document).ready(function(){
    $('body').stellar();
});
