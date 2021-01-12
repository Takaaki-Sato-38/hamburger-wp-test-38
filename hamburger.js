
/* メニューボタンを押すとサイドメニューが出現する */
$(function() {
	$('.c-side-menu-btn').click(function() {
	  $('.side-menu').toggleClass('show');
	});
  });

/* メニューボタンを押すと✖️ボタンが出現 */
  $(function() {
	$('.c-side-menu-btn').click(function() {
		$('.c-fas').toggleClass('show'); 
		
	});
  }); 

/* メニューボタンを押すとメニューボタンが消える */
  $(function() {
	$('.c-side-menu-btn').click(function() {
		
		$('.c-side-menu-btn').toggleClass('show');
	});
  }); 

 /* メニューボタンを押すと黒いオーバーレイがボディにかかる */
  $(function() {
	$('.c-side-menu-btn').click(function() {
		
		$('.l-body').toggleClass('side-open');
	});
  }); 



/* ✖️ボタンを押すとサイドメニューが閉じる */ 

  $(function() {
	$('.c-fas').click(function() {
	  $('.side-menu').removeClass('show');	  
	});
  });

/* ✖️ボタンを押すと✖️ボタンが消える*/
  $(function() {
	$('.c-fas').click(function() {
	  $('.c-fas').removeClass('show');		  
	});
  });

/* ✖️ボタンを押すとメニューボタンが出現する */
  $(function() {
	$('.c-fas').click(function() {
	  $('.c-side-menu-btn').removeClass('show');
	  
	});
  });

/* ✖️ボタンを押すとオーバーレイが消える*/  
  $(function() {
	$('.c-fas').click(function() {
	  $('.l-body').removeClass('side-open');
	  
	});
  });


  