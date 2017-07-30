$(function(){
	$('ul.top-two > li').click(function(){
		$('ul.top-two > li').removeClass('first');
		$(this).addClass('first');
		$('div.left-m > div').removeClass('first');
		$('div.left-m > div').eq($(this).index()).addClass('first');
	})
	$('div.left-m > div > dl > dd').click(function(){
		$('div.left-m > div > dl > dd').removeClass('down-btn');
		$(this).removeClass('bg').addClass('down-btn');
		let aa=$('ul.top-two > li.first').html();
		let bb=$(this).parent().children().eq(0).text();
		$('#crumbs').html(`${aa} >  ${bb} >  ${$(this).children('a').html()}>`);
	})
	let key1=true;
	$('dt > div').click(function(){
		if(this.className===''){
			$(this).addClass('click');
			$(this).parent().nextAll('dd').css('display','none');
		}else if(this.className=='click'){
			$(this).parent().nextAll('dd').css('display','block');
			$(this).removeClass('click');
		}
	})
	$('.center > div').click(function(){
		if(key1){
			key1=false;
			$(this).css('transform','rotateZ(180deg)');
			$('.left-m').css('display','none');
		}else{
			key1=true;
			$(this).css('transform','rotateZ(0deg)');
			$('.left-m').css('display','block');
		}
	})
	
	
	
})