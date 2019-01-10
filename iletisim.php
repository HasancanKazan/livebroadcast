<?php include 'header.php' ?>


		<h1 class="formBaslik">İLETİŞİM FORMU</h1>

<div class="iletisimForm">
  <form action="/action_page.php">
    <label for="ad">Ad:</label>
    <input type="text" id="ad" name="ad" placeholder="Adınız...">

    <label for="soyad">Soyad:</label>
    <input type="text" id="soyad" name="soyad" placeholder="Soyadınız...">

    <label for="email">Mail adresiniz:</label>
   <input type="email" name="email" id="email" placeholder="Mail Adresiniz...">

    <label for="mesaj">Mesajınız:</label>
    <textarea id="mesaj" name="mesaj" placeholder="Mesajınız...." style="height:200px"></textarea>

    <input type="submit" value="Gönder">
  </form>
</div>

<?php include 'footer.php' ?>