// $(function(){
// $('img').draggable();
// $( 'th' ).droppable({
//     drop: function( event, ui ) {
//       $( this )
//         .addClass('fond')
//         .find( "th" )
//           .html( "Dropped!" );
//     }
// })
// });
// var images = $(function(){
//     $('img').draggable();
//     var img = $(this);
//     var imgId = $('img').attr('id');
   

//     });;

// var ths = $('th');
// for(i=0;i < ths[i].lenght; i++){
//     $(ths[i]).droppable({

//         accept : 'img#' + $(ths[i]).attr('id')
        // drop: function( event, ui ) {
        //     var img = $(this);
        //     var idcase = $(this).attr('id');
         
        //     if(img.attr('data-case') == $('th').attr('id')){
        //         $('th').append(img);
        //         $( this )
        //         .addClass('fond')
        //         .find( "th" )
            
        //     }
        // var thId =  $('th').attr('id');
        
             
    
//     });
// }

// if( images == cases ){
//     $(imgId).css('display','none');
//     $(thId).css('background-color','red');
// }

$(function(){
    // $('.img').draggable({});
    
  var ths = $('th');
  
  var imgs = $('img');

  var imgid = $('img').attr('id');
  
  ths.map(function(idx, item){
      
    var th = $(item);
    
    th.droppable({
      
      accept: '[data-case="' + th.attr('id') + '"]',
      
      drop: function(){
          var img =$('[data-case="' + th.attr('id') + '"]').attr('src');
          console.log('[data-case="' + th.attr('id') + '"]');
        th.css({'background-image':'url('+img+')','background-size':'center','background-repeat':'no-repeat'});
        $('[data-case="' + th.attr('id') + '"]').css('display','none');

        // th.css('background-color','yellowgreen');
      // th.css({'background-image':$((img)),'background-size':'center'});
        img.draggable('disable');
        // $('[data-case="' + th.attr('id') + '"]').css('display','none');
     
      }
      
    });
    
  })
  
  imgs.map(function(idx, item){
      
    var img = $(item);
    
    img.draggable();
    
  })

  
  
})

