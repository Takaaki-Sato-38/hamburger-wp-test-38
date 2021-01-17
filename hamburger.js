
/* メニューボタンを押すとサイドメニューが出現する */
jQuery(function() {
	jQuery('.c-side-menu-btn').click(function() {
		jQuery('.side-menu').toggleClass('show');
	});
  });

/* メニューボタンを押すと✖️ボタンが出現 */
jQuery(function() {
	jQuery('.c-side-menu-btn').click(function() {
		jQuery('.c-fas').toggleClass('show'); 
		
	});
  }); 

/* メニューボタンを押すとメニューボタンが消える */
jQuery(function() {
	jQuery('.c-side-menu-btn').click(function() {
		
		jQuery('.c-side-menu-btn').toggleClass('show');
	});
  }); 

 /* メニューボタンを押すと黒いオーバーレイがボディにかかる */
 jQuery(function() {
	jQuery('.c-side-menu-btn').click(function() {
		
		jQuery('.l-body').toggleClass('side-open');
	});
  }); 



/* ✖️ボタンを押すとサイドメニューが閉じる */ 

jQuery(function() {
	jQuery('.c-fas').click(function() {
		jQuery('.side-menu').removeClass('show');	  
	});
  });

/* ✖️ボタンを押すと✖️ボタンが消える*/
  $(function() {
	$('.c-fas').click(function() {
	  $('.c-fas').removeClass('show');		  
	});
  });

/* ✖️ボタンを押すとメニューボタンが出現する */
jQuery(function() {
	jQuery('.c-fas').click(function() {
		jQuery('.c-side-menu-btn').removeClass('show');
	  
	});
  });

/* ✖️ボタンを押すとオーバーレイが消える*/  
jQuery(function() {
	jQuery('.c-fas').click(function() {
		jQuery('.l-body').removeClass('side-open');
	  
	});
  });


  