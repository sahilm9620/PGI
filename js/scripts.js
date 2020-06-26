$(document).ready(function(){

    $("#mycarousel").carousel( { interval: 2000 } );
    $("#carouselButtons").click(function()
    {
    if($("#carouselButtons").children('span').hasClass('fa-pause'))
    {
        $("#mycarousel").carousel('pause');
        $("#carouselButtons").children('span').removeClass('fa-pause');
        $("#carouselButtons").children('span').addClass('fa-play');
    }
    else if($("#carouselButtons").children('span').hasClass('fa-play'))
    {
        $("#mycarousel").carousel('cycle');
        $("#carouselButtons").children('span').removeClass('fa-play');
        $("#carouselButtons").children('span').addClass('fa-pause');
    }
    
     
    });

    
    $("#raiseFund").click(function()
    {
        $('#raiseModal').modal('toggle');
         
    });
       
});