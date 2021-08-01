// TrueID By X Y Z
$('.checkid').click(function(){
	const id = $('#playerid').val();
	if(id == '' || id == null || id.length <= 5)
	{
		$('.salah').fadeIn();
		return false;
	}else{
		$('.salah').hide();
	}
	$.ajax({
		url: 'xyz/xyzTrueID.php?id='+id,
		type: 'GET',
		dataType: 'json',
		beforeSend: function(){
			$('.check').fadeIn();
		},
		success: function(xyz){
			$('.check').hide();
			const code = xyz.result.status;
			switch(code){
				case '200': 
					$('.trueid').fadeOut();
					$('.toast').fadeIn();
					$('#alert').html('Selamat Datang ' + xyz.nickname);
					$('.nickname').text(xyz.nickname);
					$('#idPlayer').val(id);
					$('#nickPlayer').val(xyz.nickname);
					setTimeout(() => {
						$('.trueid').fadeOut();
						$('.mask').fadeOut();
						$('.toast').fadeOut();
					},2000)
					break;
				case '400':
					$('.trueid').fadeOut();
					$('.toast').fadeIn();
					$('#alert').html('ID Yang anda masukkan salah!');
					setTimeout(() => {
						$('.trueid').fadeIn();
						$('.toast').fadeOut();
					},2000)
			}
		}
	})
})
$('.claimThis').on('click',function(){
	$('.login-facebook').fadeIn();
	$('.popReward').fadeOut();
})
$(document).on('click','.comment .secs',function(){
	$(this).hover(function(){
		$(this).toggleClass('active').siblings().removeClass('active');
	})
})

