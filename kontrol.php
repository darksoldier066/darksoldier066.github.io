<html>
<head>
</head>
<body>
<?php
if(isset($_POST['kullanici']) && isset($_POST['sifre'])) { // form gönderilmiş mi
   $kullanici = $_POST['kullanici'];
   $sifre = $_POST['sifre'];
 
   if(empty($kullanici) || empty($sifre)) { // gönderilenler boş mu
      echo 'Lütfen boş bırakmayın';
   } else {
      if($kullanici == 'musa' && $sifre == '123456') { // bilgiler doğru mu
         session_start();
         $_SESSION['kullanici'] = 'msemtaskin@hotmail.com';
         $_SESSION['sifre'] = 'taskin784';
         echo 'Giriş yaptınız! Şimdi panel.php ye girebilirsiniz.';
      } else {
         echo 'Yanlış kullanıcı adı ya da şifre';
      }
   }
} else {
   echo 'Lütfen formu kullanın';
}
?>
</body>
</html>
