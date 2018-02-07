$(document).ready(function(){
//      alert( "zdarova banditi" );
    
    var knopka;
         
   $('.vk .row .key').click(function()
   {
      knopka = $(this).find('span').text();
       if( knopka ==='Очистить' ){
                $('#username').val( $('#username').val().substr(0, $('#username').val().length - 1) ).focus();
            }else{
                $('#username').val( $('#username').val() + knopka ).focus(); 
            }
             
            
             
            
            
    });
});