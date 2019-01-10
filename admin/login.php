 <?php 
 ob_start();
  ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div style="margin-top: 50px;" class="panel-body">
                                <form action="netting/islem.php" role="form" method="post" >
                                    <hr />
                                    <center><h3><b>ADMİN GİRİŞİ</b></h3></center>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" name="kadi" placeholder="Kullanıcı adınız... " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  name="sifre" placeholder="Şifreniz..." />
                                        </div>
                                  
                                     
                                  
                                     <button  class="btn btn-success " style="width: 100%;" type="submit" name ="login"> GİRİŞ YAP</button>
                                     <?php 
                                     if (isset($_GET['login'])) {
                                          echo "Yanlış şifre veya kullanıcı adı girdiniz....";
                                      } ?>
                                    <hr />
                                   
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
