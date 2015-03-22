$(function() {
	$('#login').click(function() {
		var loginform = $("#loginform").serialize(); //序列化表格内容为字符串
		$.ajax({
			url: 'user.php',
			type: 'post',
			data: loginform,
			success: function(data) {
				alert(data);
				window.location.href = 'index.php';
			},
			error: function() {
				alert("登录异常！");
			}
		})
	});
	
	$("#headimg").change( function() {
		$(".headimg").attr('src','media/image/'+$(this).val());
	});

	$("#register").validate({
		rules: {
			username: {
				required: true,
				minlength: 2
			},
			pwd: {
				required: true,
				minlength: 5
			},
			repwd: {
				required: true,
				minlength: 5,
				equalTo: "#pwd"
			},
			nickname: {
				required: true,
				minlength: 2
			},
			email: {
				required: true,
				email: true
			},
			answer: {
				required: true
			},
			checkcode: {
				required: true
			}
		},
		messages: {
			username: {
				required: "用户名不能为空",
				minlength: "用户名最少为两个字符"
			},
			pwd: {
				required: "密码不能为空",
				minlength: "密码最少为五个字符"
			},
			repwd: {
				required: "请确认密码",
				minlength: "两次密码不一样",
				equalTo: "两次密码不一样"
			},
			nickname: {
				required: "昵称不能为空",
				minlength: "昵称最少为两个字符"
			},
			email: {
				required: "邮箱不能为空",
				email: "请输入正确的邮箱格式"
			},
			answer: {
				required: "答案不能为空"
			},
			checkcode: {
				required: "验证码不能为空"
			}
		}
	});
})