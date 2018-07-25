$(document).ready(function(){
	$('#fromthem').validate({
		rules: {
			//add danh mục
			tendmt:{
				required:true,
				minlength:8,
				maxlength:32
			},
			
			
			//add tài khoản
			taikhoan:{
				required:true,
				minlength:8,
				maxlength:32
			},
			matkhau:{
				required:true,
				minlength:8,
				maxlength:32
			},
			hoten:{
				required:true
			},
			
			
			
			//add tin tức
			tentin:{
				required:true,
				minlength:8
			},
			mota:{
				required:true,
				minlength:8
			},
			chitiet:{
				required:true,
				minlength:8
			},
		},
		messages: {
			//add danh mục
			tendmt:{
				required:"Vui lòng nhập tên danh mục tin !!!",
				minlength:"Tên danh mục có ít nhất 8 ký tự !!!",
				maxlength:"Tên danh mục có nhiều nhất 32 ký tự !!!"
			},
			
			
			//add tài khoản
			taikhoan:{
				required:"Vui lòng nhập tên tài khoản !!!",
				minlength:"Tên tài khoản có ít nhất 8 ký tự !!!",
				maxlength:"Tên tài khoản có nhiều nhất 32 ký tự !!!"
			},
			matkhau:{
				required:"Vui lòng nhập mật khẩu !!!",
				minlength:"Mật khẩu có ít nhất 8 ký tự !!!",
				maxlength:"Mật khẩu có nhiều nhất 32 ký tự !!!"
			},
			hoten:{
				required:"Vui lòng nhập tên danh mục tin !!!"
			},
			
			
			//add tin tức
			tentin:{
				required:"Vui lòng nhập tên tin !!!",
				minlength:"Tên tài khoản có ít nhất 8 ký tự !!!"
			},
			mota:{
				required:"Vui lòng nhập mô tả của tin !!!",
				minlength:"Mô tả có ít nhất 8 ký tự !!!"
			},
			chitiet:{
				required:"Vui lòng nhập chi tiết tin !!!",
				minlength:"Chi tiết có ít nhất 8 ký tự !!!"
			},
		},
	});
});
