<?php include 'header.php';
$kanalsor=$db->prepare("select * from kanallar where kanal_ad='$_GET[kanalad]'");

$kanalsor->execute();
$kanalcek=$kanalsor->fetch(PDO::FETCH_ASSOC); ?>

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
</div></div>

	<div class="baslik">
			<h1><?php echo $kanalcek['kanal_ad']; ?></h1>
		</div>
	<div class="tv_">
		<div class="row">
			<div class="col-8">


					<?php echo $kanalcek['kanal_url']; ?>
			</div>
			<div class="col-4">
				<div class="row">
					
					<div class="col-12">
					
						
							
<div class="dikeyKanallar">
  <a href="canli.php?kanalad=TRT%20SPOR" >TRT 1 <i class="fas fa-play fright"></i></a>
  <a href="#">SHOW TV <i class="fas fa-play fright"></i></a>
  <a href="#">STAR TV <i class="fas fa-play fright"></i></a>
  <a href="#">KANAL D <i class="fas fa-play fright"></i></a>
  <a href="#">KANAL 24 <i class="fas fa-play fright"></i></a>
  <a href="#">TV 8 <i class="fas fa-play fright"></i> </a>
  <a href="canli.php?kanalad=FOX%20TV">FOX TV <i class="fas fa-play fright"></i></a>
  <a href="#">NTV <i class="fas fa-play fright"></i></a>
  <a href="#">HALK TV <i class="fas fa-play fright"></i></a>
  <a href="#">KANAL 7 <i class="fas fa-play fright"></i></a>
  <a href="#">A2 TV<i class="fas fa-play fright"></i></a>
  <a href="#">MELTEM TV<i class="fas fa-play fright"></i></a>
  <a href="#">BEYAZ TV<i class="fas fa-play fright"></i></a>
  <a href="#">NTV SPOR<i class="fas fa-play fright"></i></a>
  <a href="#">LİG TV<i class="fas fa-play fright"></i></a>
</div>

						

					

					</div>
					<div class="col-12">
						<div class="chatBox">
							
							<div class="chatGecmisi"></div>
						</div>
						<form method="post">
								<input type="text" id="nick" maxlength="8" name="nick" class="nickText" required ="">
								<textarea required="" id="message" name="message" maxlength="20" class="mesajText" >
								</textarea>
						</form>

					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="clearfix"></div>
<div class="yayinAkisi">
	<h1><?php echo $kanalcek['kanal_ad'];?> YAYIN AKIŞI</h1>
	<?php echo $kanalcek['kanal_akislink']; ?>
</div>
	<script type="text/javascript">
		$(document).ready(function(){
			loadChat();
		});

		$('#message').keyup(function(e){
			var nick =$('#nick').val();
			var message=$(this).val();
			if(e.which==13)
			{
				$.post('handlers/ajax.php?action=SendMessage&message='+message+'&nick='+nick,function(response){

					loadChat();
					$('#message').val('');

				});
			}
		});
		function loadChat()
		{
			$.post('handlers/ajax.php?action=getChat',function(response){
				$('.chatGecmisi').html(response);

				});

		}
	
		setInterval(function(){
			loadChat();
		}, 2000);
	</script>

<?php include 'footer.php'?>