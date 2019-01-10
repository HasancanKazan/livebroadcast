<?php include 'header.php';
include 'netting/islem.php';

ob_start();

if(!isset($_SESSION['kadi']))
{
    header('Location:login.php');
}
?>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Kanal Ekleme Alanı</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6">
                       <div class="panel panel-default">
                        <div class="panel-heading">
                           KANAL EKLE
                        </div>
                        <div class="panel-body">
                     <form action="netting/islem.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Kanal Ad</label>
                                            <input  class=" text-uppercase form-control" name="ad" type="text" required>
                                           
                                        </div>
                                 <div class="form-group">
                                            <label>Kanal Kategori</label>
                                            <input class="text-lowercase form-control" type="text" name="kategori" required>
                                    
                                        </div>
                                          
                                  
                                 
                                       
    <div class="form-group">
                                            <label>Kanal Logo</label>
                                            <input class=" form-control" type="file" name="logo" required>
                                           
                                        </div>
                                   
                
                
                       <div class="form-group">
                                            <label>Kanal Url</label>
                                            <input class="form-control" type="text" name="kanalurl" required>
                                           
                                        </div>
                                           <div class="form-group">
                                            <label>Kanal Yayın akışı</label>
                                            <input class="form-control" type="text" name="kanalakis" required>
                                           
                                        </div>
             
                     <button type="submit" class="btn btn-success" name="kanalekle">Ekle</button>
                   
                    </form>

                    </div>

                           </div>
                        
                        </div>

                  
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
   

<?php include 'footer.php'; ?>