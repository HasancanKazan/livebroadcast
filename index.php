<?php include 'header.php' ;
$kanalsor=$db->prepare("select * from kanallar");
$kanalsor->execute();

?>
	
	<div class="kategoriler">
		<div class="icon-bar">
   <a href="kategori.php?kategori=genel"><i class="fas fa-tv"></i><br>Genel</a> 
  <a href="kategori.php?kategori=hd"><i class="fas fa-laptop"></i><br>HD</a> 
  <a href="kategori.php?kategori=haber"><i class="fas fa-newspaper"></i><br>Haber</a> 
  <a href="kategori.php?kategori=spor"><i class="far fa-futbol"></i><br>Spor</a>
  <a href="kategori.php?kategori=cocuk"><i class="fas fa-plane"></i><br>Çocuk</a> 
  <a href="kategori.php?kategori=muzik"><i class="fas fa-headphones"></i><br>Müzik</a> 
  <a href="kategori.php?kategori=sinema"><i class="fas fa-film"></i><br>Sinema</a> 
  <a href="kategori.php?kategori=belgesel"><i class="fas fa-book"></i><br>Belgesel</a> 
   <a href="kategori.php?kategori=yerel"><i class="fas fa-map-marker"></i><br>Yerel</a> 
    <a href="kategori.php?kategori=yabanci"><i class="fas fa-globe"></i><br>Yabancı</a> 
     <a href="kategori.php?kategori=dini"><i class="fas fa-child"></i><br>Dini</a> 
      <a href="kategori.php?kategori=populer"><i class="fas fa-thumbs-up"></i><br>Popüler</a> 
</div>
	</div>
	
	<a name="kanalaGit">
		<div class="baslik">
			<h1>KANALLAR</h1>
		</div>
	<div class="kanallar">
		<div class="row">
			<div class="col-12">
				<form action="ara.php" method="get">
					<input type="text"  name="ara" placeholder="Kanal Ara..." class="anaKanalAra" required>
					<button style="background-color: #4CAF50; color:white; border:5px solid #333;"  required>Ara</button>

				</form>
			</div>
			<!-- while başlangıcı-->
			<?php 
			while($kanalcek=$kanalsor->fetch(PDO::FETCH_ASSOC)){ ?>
			<div class="col-2">
				<a href="canli.php?kanalad=<?php echo $kanalcek['kanal_ad'] ;?>">
  <img src="<?php echo $kanalcek['kanal_logo']; ?>">

 <?php echo $kanalcek['kanal_ad']; ?>
</a>
			</div>
		<?php } ?>

		</div>
	
	
		<div class="clearfix"></div>
	</div>
	<div class="tumYayinAkisi" >
		<a name="yayinAkisi">
<iframe src="http://www.canlitvlive.io/tvyayinakisi.php?css=eyJndW5zZWMiOiIwIiwibGlzdGUiOiJzZWxlY3QiLCJkdW4iOiIxIiwidGVrZ3VuIjoiMCJ9&t=1&tv=trt-1" frameborder="0" width="100%" height="480" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		
	</div>
<?php include 'footer.php' ?>