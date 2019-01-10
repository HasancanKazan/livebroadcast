<?php 
ob_start();
session_start();
include 'baglan.php';
if(isset($_POST['kanalekle']))

{		$uploads_dir='../../img';
		@$tmp_name=$_FILES['logo']["tmp_name"];
		@$name=$_FILES['logo']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$resimyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");			
		$ekle=$db->query("insert into kanallar(kanal_ad,kanal_kategori,kanal_logo,kanal_url,kanal_akislink) values('$_POST[ad]','$_POST[kategori]','$resimyol','$_POST[kanalurl]','$_POST[kanalakis]')");
			if($ekle){

			Header('Location:../index.php');


		}else{

			echo "Eklenemedi.";

		}
}
if(isset($_POST['login'])){
 $kadi=$_POST['kadi'];
 $sifre=$_POST['sifre'];


	if($kadi && $sifre)
	{
		$sorgu=$db->prepare("SELECT * FROM admin where admin_kadi=:ad and admin_sifre=:sifre");
		$sorgu->execute(array(
		 'ad'=>$kadi,
		 'sifre'=>$sifre));
		
		 echo $ktara=$sorgu->rowCount();
		
		if($ktara>0)
		{
			$_SESSION['kadi']=$kadi;
			Header('Location:../index.php');

			
		}
		else {
			Header('Location:../login.php?login=no');
			
			
		}
	}
}



 ?>

