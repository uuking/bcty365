$(function(){
	$('#login').click(function(){
		var loginform = $("#loginform").serialize();//序列化表格内容为字符串
		$.ajax({
			url: 'user.php',
			type: 'post',
			data: loginform,
			success:function(data) {
        		alert(data);
        		window.location.href='index.php';
    		},
		    error : function() {    
		        alert("登录异常！"); 
		    }
		})
	});
})