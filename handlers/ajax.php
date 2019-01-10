<?php 
	include '../admin/netting/baglan.php';
	if(isset($_REQUEST['action'])){
		switch ($_REQUEST['action']) {
			case "SendMessage":
				if($_REQUEST['nick']==NULL || $_REQUEST['message']==NULL)
				{
					

				}
				else {
				$sorgu=$db->prepare('INSERT INTO chat SET chat_nick=?,chat_mesaj=?');
				$sorgu->execute([$_REQUEST['nick'],$_REQUEST['message']]);
				}
				break;

			case "getChat":
			$sorgu = $db->prepare("SELECT * from chat");
			$sorgu->execute();
			$chatcek = $sorgu->fetchAll(PDO::FETCH_OBJ);
			
			$chat = '';
			foreach( $chatcek as $veri ){

				$chat .=  '<div><strong>'.$veri->chat_nick.':  </strong>'.$veri->chat_mesaj.'<small class="fright">'.$veri->chat_tarih.'</small><hr/></div>';
			}
			echo $chat;

				break;
		
		}
	}
 ?>