
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

// Fix Sidebar AdminLTE
$('.sidebar-toggle').on('click',function(){ 
  var cls = $('body').hasClass('sidebar-collapse');
  
  if(cls == true){
    $('body').removeClass('sidebar-collapse sidebar-open');
  } else {
    $('body').addClass('sidebar-collapse sidebar-open');
  }
});