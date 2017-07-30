$(function(){
	$('.ipt_reg').focus(function(){
		$('#yzm').css('display','block');
	})
	$('form').validate({
				rules:{
					username:{
						required:true,
					},
					password: {
						required: true,
					},
					code: {
						required: true,
					}
				},
				messages:{
					username:{
						required:'账号',
					},
					password: {
						required: "密码",
					},
					code: {
						required: "验证码",
					}
				},
				errorElement:'span',
				errorPlacement:function(error,val){
					error.css({'color':'red','font-size':'12px',}).insertAfter(val)
				},
//				success:function(val,vv){
//					if($(vv).next('i').length==0){
//						$('<i>').html('ok').insertAfter(vv);
//					}
//					console.log(val)
//				}
			});
})