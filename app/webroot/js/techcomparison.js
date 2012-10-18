$(function() {
      $('.comparison_label').toggle(function(){
     $(this).children('.tech_comparison').animate({ height: 'hide', opacity: 'hide' }, 'slow');
   },function(){
     $(this).children('.tech_comparison').animate({ height: 'show', opacity: 'show' }, 'slow');
   });

      $('.tech_comparison').toggle();

 });