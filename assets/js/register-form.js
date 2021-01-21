
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches
var body = $("html, body");
var uploadwrap;
var isValidated; 
var pageNumber;
var style_layout = 1;
var type_subscription = 1;
var metode_pembayaran = 1;	
var trial = 1;

$("#page1").click(function(){
	pageNumber = 1;
	var itiNomorAnda = window.intlTelInputGlobals.getInstance(input);
	var isValidNomor = itiNomorAnda.isValidNumber();
	var itiNomorGerejaAnda = window.intlTelInputGlobals.getInstance(nomor_gereja);
	var isValidNomorGereja = itiNomorGerejaAnda.isValidNumber();	
	if($.trim($('.username').val()) == ''){
		swal("Maaf,", "Anda harus mengisikan username terlebih dahulu", "error")
		.then((value) => {
			$(".username").focus();
		});
		
	}
	else if($.trim($('.pass').val()) == ''){
		swal("Maaf,", "Anda harus mengisikan password terlebih dahulu", "error").then((value) => {
			$(".pass").focus();
		});
	}
	else if($.trim($('.pass2').val()) == ''){
		swal("Maaf,", "Anda harus mengisikan ulang password terlebih dahulu", "error").then((value) => {
			$(".pass2").focus();
		});
	}
	else if($.trim($('.pass').val()) != $.trim($('.pass2').val())){
		swal("Maaf,", "Password anda masih belum cocok", "error").then((value) => {
			$(".pass2").focus();
		});
	}
	else if($.trim($('.nama').val()) == ''){
		swal("Maaf,", "Anda harus mengisikan nama anda terlebih dahulu", "error").then((value) => {
			$(".nama").focus();
		});
	}
	else if($.trim($('.telp').val()) == ''){
		swal("Maaf,", "Anda harus mengisikan nomor telepon anda terlebih dahulu", "error").then((value) => {
			$(".telp").focus();
		});
	}
	else if($.trim($('.email').val()) == ''){
		swal("Maaf,", "Anda harus mengisikan email anda terlebih dahulu", "error").then((value) => {
			$(".email").focus();
		});
	}
	else if(!isEmail($.trim($('.email').val()))){
		swal("Maaf,", "Format email yang anda masukkan salah", "error").then((value) => {
			$(".email").focus();
		});
	}
	else if($.trim($('.jabatan').val()) == ''){
		swal("Maaf,", "Anda harus mengisikan jabatan anda terlebih dahulu", "error").then((value) => {
			$(".jabatan").focus();
		});
	}
	else if($.trim($('.namagereja').val()) == ''){
		swal("Maaf,", "Anda harus mengisikan nama gereja terlebih dahulu", "error").then((value) => {
			$(".namagereja").focus();
		});
	}
	else if($.trim($('.telpgereja').val()) == ''){
		swal("Maaf,", "Anda harus mengisikan nomor telepon gereja terlebih dahulu", "error").then((value) => {
			$(".telpgereja").focus();
		});
	}
	else if($.trim($('.alamat').val()) == ''){
		swal("Maaf,", "Anda harus mengisikan alamat gereja anda terlebih dahulu", "error").then((value) => {
			$(".alamat").focus();
		});
	}else if($.trim($('.jumlah_jemaat').val()) == ''){
		swal("Maaf,", "Anda harus mengisikan Jumlah Jemaat Gereja Anda terlebih dahulu", "error").then((value) => {
			$(".jumlah_jemaat").focus();
		});
	}else if(!isValidNomor){
		swal("Maaf,", "Format nomor telepon yang anda masukkan salah", "error").then((value) => {
			$(".telp").focus();
		});
	}else if(!isValidNomorGereja){
		swal("Maaf,", "Format nomor telepon gereja yang anda masukkan salah", "error").then((value) => {
			$(".telpgereja").focus();
		});	
	}else{
		var request = $.ajax({
			url: link_check_username,
			method : "POST",
			data : {username: $.trim($('.username').val())},
			async : false,
			dataType : 'json',
			success: function(data){
				if (data.count > 0) {
					swal("Maaf,", "Username Sudah Digunakan", "error").then((value) => {
						$(".username").focus();
					});
				}else{
					nextpage();
				}
			}
		});				
	}
});

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

function nextpage() {
    if(animating) return false;
	animating = true;
	
	if(pageNumber == 1){
		current_fs = $("#page1").parent();
		next_fs = $("#submit_register").parent();
	}	
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 	
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});						
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();			
			body.stop().animate({scrollTop:0}, 500, 'swing');
			animating = false;			
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});	
 }

// $(".next").click(function(){	

// 	if(animating) return false;
// 	animating = true;
	
// 	current_fs = $(this).parent();
// 	next_fs = $(this).parent().next();
	
// 	//activate next step on progressbar using the index of next_fs
// 	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
// 	//show the next fieldset
// 	next_fs.show(); 	
// 	//hide the current fieldset with style
// 	current_fs.animate({opacity: 0}, {
// 		step: function(now, mx) {
// 			//as the opacity of current_fs reduces to 0 - stored in "now"
// 			//1. scale current_fs down to 80%
// 			scale = 1 - (1 - now) * 0.2;
// 			//2. bring next_fs from the right(50%)
// 			left = (now * 50)+"%";
// 			//3. increase opacity of next_fs to 1 as it moves in
// 			opacity = 1 - now;
// 			current_fs.css({
//         'transform': 'scale('+scale+')',
//         'position': 'absolute'
//       });
// 			next_fs.css({'left': left, 'opacity': opacity});						
// 		}, 
// 		duration: 800, 
// 		complete: function(){
// 			current_fs.hide();			
// 			body.stop().animate({scrollTop:0}, 500, 'swing');
// 			animating = false;			
// 		}, 
// 		//this comes from the custom easing plugin
// 		easing: 'easeInOutBack'
// 	});	
// });

$(".previous").click(function(){	
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});			
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();			
			body.stop().animate({scrollTop:0}, 500, 'swing');
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})

  function readURL(input, wrap, uploadimage, uploadcontent, imagetitle, idremove) {
	uploadwrap = wrap;
    if (input.files && input.files[0]) {
  
	  var reader = new FileReader();
	  
	  console.log(input);
      reader.onload = function(e) {
        $('#'+wrap).hide();
  
        $('#'+uploadimage).attr('src', e.target.result);
        $('#'+uploadcontent).show();
  
		$('#'+imagetitle).html(input.files[0].name);
		if(uploadimage == 'icon-upload-image'){								
			newimg = new Image();
			newimg.src = e.target.result; 
			newimg.onload = function() {				
				if(this.width != 1024 || this.height != 1024){
						swal("Maaf,", "Icon yang anda pilih harus berukuran 1024x1024 px", "error").then((value) => {
							$(".iconImage").focus();
						});
						newimg = new Image();
						return removeUpload(idremove, uploadcontent, wrap);
					}		            
			};							
			}		
      };
			  
	  var image = input.files[0].size;
	  console.log(image)
		if(image>2048000) //do something if file size more than 1 mb (1048576)
		{
			swal("Maaf,", "Maksimal ukuran image adalah 2MB", "error");
			return removeUpload(idremove, uploadcontent, wrap);			
		}
		
		reader.readAsDataURL(input.files[0]);
  
    } else {
		removeUpload(idremove, uploadcontent, wrap);
    }
  }
  
  function removeUpload(uploadinput, uploadcontent, wrap, hidden='') {
    $('#'+uploadinput).replaceWith($('#'+uploadinput).val(''));
    $('#'+uploadcontent).hide();
	$('#'+wrap).show();
	if(hidden != ''){
		$('#'+hidden).val('');
	}
	$("#"+uploadinput).attr( "required", true);
	uploadwrap = wrap;
  }  
  console.log(uploadwrap);
  $('#'+uploadwrap).bind('dragover', function () {
          $('#'+uploadwrap).addClass('image-dropping');
      });
      $('#'+uploadwrap).bind('dragleave', function () {
          $('#'+uploadwrap).removeClass('image-dropping');
	});
	
	function apps(param, value){		
    var request = $.ajax({
        url: "http://localhost/lovelysupplier/register/call_appbar",
        type: "POST",
        data: {param : param, value : value, app_bar : ''},
        dataType: "json"
    });
    request.done(function(msg) {							
			$('#frame_1').src = "http://localhost/lovelysupplier/register/appbar";
			$('#frame_1').src = $('#frame_1').src;
    });
}

function submit_data(){
	console.log('masuk');	
	$('#modalLoading').modal('show');
    $('#modalLoading').data('bs.modal').options.backdrop = 'static';
	var itiNomorAnda = window.intlTelInputGlobals.getInstance(input);
	var phone = itiNomorAnda.getNumber();
	var itiNomorGerejaAnda = window.intlTelInputGlobals.getInstance(nomor_gereja);
	var phone_gereja = itiNomorGerejaAnda.getNumber();	

	var username = $('#username').val();
	var password = $('#password').val();
	var name = $('#name').val();	
	var email = $('#email').val();
	var jabatan = $('#jabatan').val();
	var nama_gereja = $('#nama_gereja').val();	
	var alamat_gereja = $('#alamat_gereja').val();		
	var voucher = $('#voucher').val();	
	var jumlah_jemaat = $('#jumlah_jemaat').val();
	var captcha = $('#g-recaptcha-response').val(); 	

    var formdata = new FormData();    
	formdata.append('username', username);
	formdata.append('password', password);
	formdata.append('nama', name);
	formdata.append('phone', phone);
	formdata.append('email', email);
	formdata.append('jabatan', jabatan);
	formdata.append('nama_gereja', nama_gereja);
	formdata.append('nomor_gereja', phone_gereja);
	formdata.append('alamat_gereja', alamat_gereja);	
	formdata.append('type_subscription', type_subscription);
	formdata.append('metode_pembayaran', metode_pembayaran);	
	formdata.append('voucher', voucher);	
	formdata.append('jumlah_jemaat', jumlah_jemaat);	
	formdata.append('g-recaptcha-response', captcha);	
	$.ajax({
			type : "POST",
			url  : url,			
			contentType: false,
     cache: false,
     processData: false,
     data: formdata,
     dataType: 'json',
			success: function(data){				
				if(data.error != "")   {
					$('#modalLoading').modal('hide');
					swal(data.error, data.error_text, "error");
				}else {
					$('#modalLoading').modal('hide');	
					success_text = "Terima kasih telah melakukan registrasi di gereja digital. Registrasi anda berhasil dan sedang kami proses. Pihak kami akan segera menghubungi anda untuk proses selanjutnya";
					if(data.success_text != ""){
						success_text = data.success_text;
					}
					swal({
						title: "Registrasi Berhasil !",										  				  
						text: success_text,
				  icon: "success",		
				  buttons: {
					cancel: "Beranda",
					confirm: "Login",					
				  },	  			  
				}).then((isConfirm) => {
					if (isConfirm) {				
						window.location.href = link+'login';			
					} else {
						window.location.href = link;				
					}
				});
				}
			}
	});
	return false;
}

function createButton(text, cb) {
	return $('<button>' + text + '</button>').on('click', cb);
  }

  $('input[name="style_layout"]').click(function(){  
	style_layout = $(this).val();  	
}); 

$('input[name="type_subscription"]').click(function(){  
	type_subscription = $(this).val();  	
}); 

$('input[name="metode_pembayaran"]').click(function(){  
	metode_pembayaran = $(this).val();  	
}); 

function isNumberKey(evt)
{
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;

   return true;
}

function getImageDetail(image,uploadimage,uploadcontent,imagetitle,wrap,url,uploadinput) {
    // var image = $("#image_edit").val();            
    if(image != "" && image != null){        
	  console.log(image);
	  var newurl = image.split(url);
      $("#"+uploadinput).attr( "required", false);
      $('#'+uploadimage).attr('src', image);
	  $('#'+uploadcontent).show();
	  $('#'+wrap).hide();

      $('#'+imagetitle).html(newurl[1]);
    //   readURL(image, 'icon-upload-wrap', 'icon-upload-image', 'icon-upload-content', 'icon-title');
  }
}