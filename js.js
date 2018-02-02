$(document).ready(function(){
      alert( "zdarova banditi" );
    
    var knopka;
         
   $('.vk .row .key').click(function()
   {
      knopka = $(this).find('span').text();
       if( knopka ==='Очистить' ){
                $('#xd').val( $('#xd').val().substr(0, $('#xd').val().length - 32) ).focus();
            }else{
                $('#xd').val( $('#xd').val() + knopka ).focus(); 
            }
             
            
             
            
            
    });
});