<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../cs/index.css">
        
    </head>
    <body>
        <h1>AMAZİNG SOFTWARE</h1>
        <H5>Kelime sayacı, Karakter sayacı</H5>
        
          <div class="ce_list first block">
           
             

              
            
            <form action="" method="post">   
                   
                        <?php
                            error_reporting(0);
                            $yaz = $_POST['metin'];
                                if (isset($_POST["hes"]) && $yaz=="") {
                                        
                                        echo  '<div class="alert alert-warning" role="alert"><div>
                                        <span class="warn warning"></span> <span class="warn text"> Lütfen metin giriniz </span>
                                        </div> </div>'; 
                                         
                                }   
                            ?>
                
         
               
                <textarea id="charcountArea" placeholder="Lütfen metninizi girin ..." name="metin" ></textarea> 

                <ul>
                        <li class="one" ><span id="charcountAll" > 
                            <?php
                                error_reporting(0);

                                 $yaz = $_POST['metin'];
                                if (isset($_POST["hes"])) {
                                    $temizle = trim($yaz);
                                    $yazı1 = strlen($temizle);
                                    echo '<script>document.getElementById("charcountAll").innerHTML = "'.$yazı1.'";</script>';
                                }         
                            ?>
                    </span> Karakter</li>
                        <li class="two"  ><span id="character count words"> 
                            <?php
                                $yaz = $_POST['metin'];
                                if (isset($_POST["hes"])) {
                                $temizle = trim($yaz);
                                $son= str_word_count($temizle);
                                echo '<script>document.getElementById("character count words").innerHTML = "'.$son.'";</script>';

                                }
                            ?>
                        </span> Sözcük</li>
                        <li class="two"  ><span id="character count"> 
                            <?php
                                $yaz=$_POST['metin'];
                                if( isset($_POST['metin']) && !empty($_POST['metin'])) {
                                $metin = $_POST['metin'];
                                $paragraflar = preg_split('/\n\s*\n/', $metin);
                                $paragraf_sayisi = count($paragraflar);
                                echo '<script>document.getElementById("character count").innerHTML = "'.$paragraf_sayisi.'";</script>';
                                }
                                
                                elseif ( isset($_POST['metin']) && empty($_POST['metin']) || isset($_POST["sil"])  && isset($_POST["hes"])) {
                                    echo  '<div class="alert alert-warning" role="alert"><div>
                                    <span class="warn warning"></span> <span class="warn text"> Lütfen metin giriniz </span>
                                    </div> </div>'; 
                                     $paragraf_sayisi=0;
                                     echo '<script>document.getElementById("character count").innerHTML = "'.$paragraf_sayisi.'";</script>';
                                     echo '<script>document.getElementById("character count words").innerHTML = "'.$paragraf_sayisi.'";</script>';
                                     echo '<script>document.getElementById("charcountAll").innerHTML = "'.$paragraf_sayisi.'";</script>';
                                }
                            ?>
                        </span> Paragraf</li>
                        <input type="submit" value="hesapla" name="hes" class="hes" >
                        <input type="submit" value="temizle" name="sil" class="hes">           
            </form>      
            </div>
            </div>
  
    </body>
</html>