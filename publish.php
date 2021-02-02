
<?php
  require_once('connect.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
    <title>C M S</title>
  </head>
  <body>

  <!-- nabvar section -->

     <!-- extra-top-section -->
       <?php
            $seclect = "SELECT * FROM heading_tbl2";

            $run = mysqli_query($con,$seclect);

            while($rows = mysqli_fetch_array($run)){ 
            ?>
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-4 ">
            <div class="image_section ">
                <img class="ml-5 <?php echo $rows['imageSize']?>" src="headPic/<?php echo $rows['images1']?>" alt="">
            </div>
            </div>
            <div class="col-lg-4 ">
            <div class="image_section">
                <img class="ml-5  <?php echo $rows['imageSize']?>" src="headPic/<?php echo $rows['images2']?>" alt="">
            </div>
            </div>
         <div class="col-lg-4 ">
          <div class="image_section  ">
            <img class="ml-5 <?php echo $rows['imageSize']?>" src="headPic/<?php echo $rows['images3']?>" alt="">
           </div>
         </div>
        </div>
      </div>
        <?php
            }
        ?>
     <!-- extra-top-section end-->
     <!-- normal nav bar-top-section start-->


        <?php
            $seclect = "SELECT * FROM heading_tbl";

            $run = mysqli_query($con,$seclect);

            while($rows = mysqli_fetch_array($run)){ 
            ?>


<nav class="navbar navbar-expand-lg <?php echo $rows['bgcolor']?>  sticky-top">
     <div class="container-fluid ">
       <div class="navbar_imag align-justify">
        <a class="navbar-brand ml-5" href="#"><img class="<?php echo $rows['imageSize']?>" src="headPic/<?php echo $rows['images']?>" alt=""></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ">
          <li class="nav-item active ">
                <a class="nav-link ml-2" href="#"><?php echo $rows['head_title']?><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link  mx-2" href="#"><?php echo $rows['nav_content1']?></a>
            </li>
          
            <li class="nav-item">
                <a class="nav-link  mx-2" href="#"><?php echo $rows['nav_content2']?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link  mx-2" href="#"><?php echo $rows['nav_content3']?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link  mx-2" href="#"><?php echo $rows['nav_content4']?></a>
            </li>
           
          </ul>
        </div> 
        </div>
      </nav>


    <?php
      }
    ?>
    </section>
 <!-- normal nav bar-top-section end-->

<!-- normal nav bar-second-section start-->


        <?php
            $seclect = "SELECT * FROM heading_tbl4";

            $run = mysqli_query($con,$seclect);

            while($rows = mysqli_fetch_array($run)){ 
            ?>
    <section class="navbar1">
     <div class="row">
       <div class="col-lg">
       <nav class="navbar navbar-expand-lg <?php echo $rows['bgcolor']?> ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link ml-5" href="#"><?php echo $rows['nav_content1']?><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link  mx-4" href="#"><?php echo $rows['nav_content2']?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link  mx-4" href="#"><?php echo $rows['nav_content3']?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link  mx-4" href="#"><?php echo $rows['nav_content4']?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link  mx-4" href="#"><?php echo $rows['nav_content5']?></a>
            </li>
        </ul>
      </div>
    </nav>
       
       </div>
     </div>

    <?php
      }
    ?>
    </section>
 <!-- normal nav bar-top-section sehs End-->




  <!-- slider section start -->
    <?php
        $seclect = "SELECT * FROM slider_tbl1";

        $run = mysqli_query($con,$seclect);

        while($rows = mysqli_fetch_array($run)){ 
        ?>
    <section class="Slider_section">
     <div class="container-fluid pr-0 pl-0">
       <div class="row">
          <div class="col-lg">
             <div class="slider_imaege_section">
             <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <div class="carousel-inner">
                    <div class="carousel-item active ">
                     <img class=" <?php echo $rows['sliderSize']?> " src="sliderPic/<?php echo $rows['images1']?>" class="d-block w-100 " alt="">
                    </div>
                    <div class="carousel-item">
                       <img class=" <?php echo $rows['sliderSize']?> " src="sliderPic/<?php echo $rows['images1']?>" class="d-block w-100 " alt="">
                    </div>
                    <div class="carousel-item">
                       <img class=" <?php echo $rows['sliderSize']?> " src="sliderPic/<?php echo $rows['images3']?>" class="d-block w-100" alt="">
                    </div>
                 </div>
                 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                 </a>
                 <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                 </a>
                 </div>
             </div>
          
          </div>
       </div>    
     </div>   
     
    </section>
  
<?php
        }
?>
  <!-- slider section END -->

<!-- mainContent 1column er jonoo  Start-->

      <?php
            $seclect = "SELECT * FROM main1_section1_tbl";

            $run = mysqli_query($con,$seclect);

            while($rows = mysqli_fetch_array($run)){ 
            ?>
          <div class="container">
              <div class="row">
                <div class="col-lg-12 <?php echo $rows['bgcolor']?> ">
                    <div class="heading_text text-center <?php echo $rows['fontcolor']?> <?php echo $rows['fontsize']?>">
                      <h1 class="py-3 <?php echo $rows['fontsize']?>"><?php echo $rows['title_text']?></h1>
                    </div>
                    <div class="conten_images d-flex align-items-center">
                    <div class="content_img   mr-4 pb-2">
                        <img class="<?php echo $rows['imageSize']?> " src="content_img/<?php echo $rows['images']?> " alt="">
                      </div>
                      <div class="content_text">
                        <p> <?php echo $rows['content_text']?> </p>
                      </div>
                      
                    </div>
                </div>
              </div>

            </div>

<?php

      }
      ?>
<!-- mainContent  End-->

<!-- mainContent 2column er jonoo  Start-->

<?php
            $seclect = "SELECT * FROM main1_section2_tbl";

            $run = mysqli_query($con,$seclect);

            while($rows = mysqli_fetch_array($run)){ 
            ?>
<div class="container-fluid">
     <div class="row">
       <div class="col-lg-12 <?php echo $rows['bgcolor']?> py-5">
         <h1 class=""><?php echo $rows['title_text']?></h1>
          <div class="conteiner">
              <div class="row">
               <div class="col-lg-1"></div>
               <div class="col-lg-5">
                  <div class="sub_title py-1">
                    <h2  class="<?php echo $rows['fontsize']?> <?php echo $rows['fontcolor']?>"><?php echo $rows['Sub_title1']?></h2>
                  </div>
                  <div class="img_conten">
                    <img class="" alt="">
                  </div>
                  <div class="content_textt py-1 <?php echo $rows['fontcolor']?>">
                     <h5><?php echo $rows['content_text1']?></h5>
                  </div>
               </div>
               <div class="col-lg-5">
               <div class="sub_title">
                   <h2 class="<?php echo $rows['fontsize']?> <?php echo $rows['fontcolor']?>"><?php echo $rows['Sub_title2']?></h2>
                  </div>
                  <div class="img_conten">
                     <img class="img_conte1 <?php echo $rows['imageSize']?>"src="content_img/<?php echo $rows['images2']?>" alt="">
                  </div>
                  <div class="content_textt <?php echo $rows['fontcolor']?>">
                     <h5><?php echo $rows['content_text2']?></h5>
                  </div>
               </div>
               <div class="col-lg-1"></div>
              </div>
         </div>
       </div>
     </div>

     <?php
    }
  ?>
   </div>

<!-- end section two  -->
   <!-- Start Section Three -->
         <?php
            $seclect = "SELECT * FROM main1_section3_tbl";

            $run = mysqli_query($con,$seclect);

            while($rows = mysqli_fetch_array($run)){ 
            ?>
    <section class="section_three py-5">
        <div class="container-fluid">
           <div class="row">
              <div class="col-lg-12 py-4 ">
                 <h1 class="text-center <?php echo $rows['fontcolor']?> <?php echo $rows['fontsize']?>"><?php echo $rows['title_text']?></h1>
                  <div class="container ">
                      <div class="row">
                        <div class="col-lg-4 ">
                        <div class="content_main <?php echo $rows['imageSize']?>">
                          <div class="card image-3tbl <?php echo $rows['imageSize']?>" >
                            <img src="content_img/<?php echo $rows['images1']?>" alt="">
                            <div class="card-body">
                              <h3 class="card-title"><?php echo $rows['Sub_title1']?></h3>
                              <p class="card-text"><?php echo $rows['content_text1']?></p>
                            </div>
                          </div>
                       </div>
                      </div>
                  

                    <div class="col-lg-4">
                        <div class="content_main <?php echo $rows['imageSize']?>">
                          <div class="card image-3tbl <?php echo $rows['imageSize']?>" >
                            <img src="content_img/<?php echo $rows['images2']?>"alt="">
                            <div class="card-body">
                              <h3 class="card-title"><?php echo $rows['Sub_title2']?></h3>
                              <p class="card-text"><?php echo $rows['content_text2']?></p>
                            </div>
                          </div>
                       </div>
                      </div>
                      
                    <div class="col-lg-4">
                        <div class="content_main <?php echo $rows['imageSize']?>">
                          <div class="card image-3tbl <?php echo $rows['imageSize']?>" >
                            <img src="content_img/<?php echo $rows['images3']?>" alt="">
                            <div class="card-body">
                              <h3 class="card-title"><?php echo $rows['Sub_title3']?></h3>
                              <p class="card-text"><?php echo $rows['content_text3']?></p>
                            </div>
                          </div>
                       </div>
                      </div>
                    </div>
                   </div>
                  </div>
              </div>
           </div>
        </div>
        <?php
            }
        ?>
    </section>


   <!-- End Section Three -->

<!-- Start section two Repet-->

      <?php
            $seclect = "SELECT * FROM main1_section2rpt_tbl";

            $run = mysqli_query($con,$seclect);

            while($rows = mysqli_fetch_array($run)){ 
            ?>
<div class="container-fluid">
     <div class="row">
       <div class="col-lg-12 <?php echo $rows['bgcolor']?> py-5">
         <h1 class="text-center"><?php echo $rows['title_text']?><?php echo $rows['fontcolor']?><?php echo $rows['fontsize']?></h1>
          <div class="container">
              <div class="row">
              
               <div class="col-lg-6">
                 <div class="content_sec2 <?php echo $rows['imageSize']?>">
                  <div class="img_conten2 <?php echo $rows['imageSize']?> py-3">
                    <img class=""src="content_img/<?php echo $rows['images1']?>" alt="">
                  </div>
                  <div class="sub_title  py-1">
                    <h2  class="<?php echo $rows['fontsize']?> <?php echo $rows['fontcolor']?>"><?php echo $rows['Sub_title1']?></h2>
                  </div>
                  <div class="content_textt py-1 <?php echo $rows['fontcolor']?>">
                     <h5><?php echo $rows['content_text1']?></h5>
                  </div>
                  </div>

               </div>
               <div class="col-lg-6">
               <div class="content_sec2 <?php echo $rows['imageSize']?>">
                 
                  <div class="img_conten2 <?php echo $rows['imageSize']?> py-3 ">
                     <img src="content_img/<?php echo $rows['images2']?>" alt="">
                  </div>
                  <div class="sub_title ">
                    <h2 class="<?php echo $rows['fontsize']?> <?php echo $rows['fontcolor']?>"><?php echo $rows['Sub_title2']?></h2>
                  </div>
                  <div class="content_textt  <?php echo $rows['fontcolor']?>">
                     <h5><?php echo $rows['content_text2']?></h5>
                  </div>
               </div>
               </div>
              
              </div>
         </div>
       </div>
     </div>

     <?php
    }
  ?>
   </div>

<!-- end section two  -->
<!-- Start ONe section repet -->


      <?php
            $seclect = "SELECT * FROM main1_section1rpt_tbl";

            $run = mysqli_query($con,$seclect);

            while($rows = mysqli_fetch_array($run)){ 
            ?>
          <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12 <?php echo $rows['bgcolor']?> ">
                  <div class="heading_text text-center <?php echo $rows['fontcolor']?> <?php echo $rows['fontsize']?>">
                      <h1 class="py-3 <?php echo $rows['fontsize']?>"><?php echo $rows['title_text']?></h1>
                    </div>
                      <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="conten_images d-flex align-items-center">
                              <div class="content_imgg <?php echo $rows['imageSize']?>  mr-4 pb-2">
                                  <img src="content_img/<?php echo $rows['images']?> " alt="">
                                </div>
                                <div class="content_text2 ">
                                  <p> <?php echo $rows['content_text']?> </p>
                                </div>
                                
                              </div>
                            
                            </div>
                        </div>
                      </div>  
                </div>
              </div>

            </div>

<?php

      }
      ?>
   <!-- End ONe section repet -->

<!-- Start Three section double -->


   <?php
            $seclect = "SELECT * FROM main1_section3dbl_tbl";

            $run = mysqli_query($con,$seclect);

            while($rows = mysqli_fetch_array($run)){ 
            ?>
    <section class="section_three">
        <div class="container-fluid">
           <div class="row">
              <div class="col-lg-12 py-4 <?php echo $rows['bgcolor']?>">
                    <h1 class="text-center <?php echo $rows['fontsize']?>  <?php echo $rows['fontcolor']?>"><?php echo $rows['title_text']?></h1>
                  <div class="container">
                      <div class="row">

                      <div class="col-lg-4 ">
                        <div class="content_main <?php echo $rows['imageSize']?>">
                        <div class="card" >
                            <div class="image-3tbl2 <?php echo $rows['imageSize']?>">
                              <img src="content_img/<?php echo $rows['images1']?>" alt="">
                            </div>
                            <div class="card-body">
                              <h3 class="card-title"><?php echo $rows['Sub_title1']?></h3>
                              <p class="card-text"><?php echo $rows['content_text1']?></p>
                            </div>
                          </div>
                       </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="content_main <?php echo $rows['imageSize']?>">
                        <div class="card" >
                            <div class="image-3tbl2 <?php echo $rows['imageSize']?>">
                              <img src="content_img/<?php echo $rows['images2']?>" alt="">
                            </div>
                            <div class="card-body">
                              <h3 class="card-title"><?php echo $rows['Sub_title2']?></h3>
                              <p class="card-text"><?php echo $rows['content_text2']?></p>
                            </div>
                          </div>
                       </div>
                      </div>
                      <div class="col-lg-4 ">
                        <div class="content_main <?php echo $rows['imageSize']?>">
                        <div class="card" >
                            <div class="image-3tbl2 <?php echo $rows['imageSize']?>">
                              <img src="content_img/<?php echo $rows['images3']?>" alt="">
                            </div>
                            <div class="card-body">
                              <h3 class="card-title"><?php echo $rows['Sub_title3']?></h3>
                              <p class="card-text"><?php echo $rows['content_text3']?></p>
                            </div>
                          </div>
                       </div>
                      </div>
                      <div class="col-lg-4 pt-3 ">
                        <div class="content_main <?php echo $rows['imageSize']?>">
                        <div class="card" >
                            <div class="image-3tbl2 <?php echo $rows['imageSize']?>">
                              <img src="content_img/<?php echo $rows['images1dbl']?>" alt="">
                            </div>
                            <div class="card-body">
                              <h3 class="card-title"><?php echo $rows['Sub_title1dbl']?></h3>
                              <p class="card-text"><?php echo $rows['content_text1dbl']?></p>
                            </div>
                          </div>
                       </div>
                      </div>
                      <div class="col-lg-4  pt-3 ">
                        <div class="content_main <?php echo $rows['imageSize']?>">
                          <div class="card" >
                            <div class="image-3tbl2 <?php echo $rows['imageSize']?>">
                              <img src="content_img/<?php echo $rows['images2dbl']?>" alt="">
                            </div>
                            <div class="card-body">
                              <h3 class="card-title"><?php echo $rows['Sub_title2dbl']?></h3>
                              <p class="card-text"><?php echo $rows['content_text2dbl']?></p>
                            </div>
                          </div>
                       </div>
                      </div>
                      <div class="col-lg-4 pt-3">
                        <div class="content_main <?php echo $rows['imageSize']?>">
                        <div class="card" >
                            <div class="image-3tbl2 <?php echo $rows['imageSize']?>">
                              <img src="content_img/<?php echo $rows['images3dbl']?>" alt="">
                            </div>
                            <div class="card-body">
                              <h3 class="card-title"><?php echo $rows['Sub_title3dbl']?></h3>
                              <p class="card-text"><?php echo $rows['content_text3dbl']?></p>
                            </div>
                          </div>
                       </div>
                      </div>
  
                      </div>
                  </div>
              </div>
           </div>
        </div>
        <?php
            }
        ?>
    </section>
   <!-- End Section Three  Double-->
   <!-- Start Section Four section -->

       <?php
            $seclect = "SELECT * FROM main1_section4_tbl";

            $run = mysqli_query($con,$seclect);

            while($rows = mysqli_fetch_array($run)){ 
            ?>

     <section class="section_four">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12  <?php echo $rows['bgcolor']?>">
            <div class="titele_text4 text-center <?php echo $rows['fontsize']?> <?php echo $rows['fontcolor']?>">
               <h1 class=" py-5"><?php echo $rows['title_text']?></h1>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-3 ">
                 <div class="content_text <?php echo $rows['imageSize']?>">
                  <div class="image_4 <?php echo $rows['imageSize']?>">
                     <img src="content_img/<?php echo $rows['images1']?>" alt="">
                  </div>
                  <div class="sub_title4 text-center py-2">
                    <h2><?php echo $rows['Sub_title1']?></h2>
                  </div>
                  <div class="content_4">
                     <p><?php echo $rows['content_text1']?></p>
                  </div>
                  </div>
                </div>
                <div class="col-lg-3">
                <div class="content_text <?php echo $rows['imageSize']?>">
                  <div class="image_4 <?php echo $rows['imageSize']?>">
                     <img src="content_img/<?php echo $rows['images2']?>" alt="">
                  </div>
                  <div class="sub_title4 text-center">
                    <h2><?php echo $rows['Sub_title2']?></h2>
                  </div>
                  <div class="content_4">
                     <p><?php echo $rows['content_text2']?></p>
                  </div>
                 </div>
                </div>

                <div class="col-lg-3">
                <div class="content_text <?php echo $rows['imageSize']?>">
                  <div class="image_4 <?php echo $rows['imageSize']?>">
                     <img src="content_img/<?php echo $rows['images3']?>" alt="">
                  </div>
                  <div class="sub_title4 text-center">
                    <h2><?php echo $rows['Sub_title3']?></h2>
                  </div>
                  <div class="content_4">
                     <p><?php echo $rows['content_text3']?></p>
                  </div>
                </div>
             </div>

                <div class="col-lg-3">
                <div class="content_text <?php echo $rows['imageSize']?>">
                  <div class="image_4 <?php echo $rows['imageSize']?>">
                     <img src="content_img/<?php echo $rows['images4']?>" alt="">
                  </div>
                  <div class="sub_title4 text-center">
                    <h2><?php echo $rows['Sub_title4']?></h2>
                  </div>
                  <div class="content_4">
                     <p><?php echo $rows['content_text4']?></p>
                  </div>
                </div>
            </div>
              </div>
            </div>
            </div>
         </div>
      </div>
<?php
}
?>
     </section>


   <!-- End Section Four Section -->


 <!-- Start Section Four double section -->

 <?php
            $seclect = "SELECT * FROM main1_section4dbl_tbl";

            $run = mysqli_query($con,$seclect);

            while($rows = mysqli_fetch_array($run)){ 
            ?>

     <section class="section_four">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12  <?php echo $rows['bgcolor']?>">
            <div class="titele_text4 text-center " >
               <h1 class="<?php echo $rows['fontsize']?> <?php echo $rows['fontcolor']?> py-5"><?php echo $rows['title_text']?></h1>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-3 ">
                 <div class="content_text <?php echo $rows['imageSize']?>">
                  <div class="image_4 <?php echo $rows['imageSize']?>">
                     <img src="content_img/<?php echo $rows['images1']?>" alt="">
                  </div>
                  <div class="sub_title4 text-center <?php echo $rows['fontcolor']?> py-2">
                    <h2><?php echo $rows['Sub_title1']?></h2>
                  </div>
                  <div class="content_4 <?php echo $rows['fontcolor']?>">
                     <p><?php echo $rows['content_text1']?></p>
                  </div>
                  </div>
                </div>
                <div class="col-lg-3">
                <div class="content_text <?php echo $rows['imageSize']?>">
                  <div class="image_4 <?php echo $rows['imageSize']?>">
                     <img src="content_img/<?php echo $rows['images2']?>" alt="">
                  </div>
                  <div class="sub_title4 text-center py-2 <?php echo $rows['fontcolor']?>" >
                    <h2><?php echo $rows['Sub_title2']?></h2>
                  </div>
                  <div class="content_4 <?php echo $rows['fontcolor']?>">
                     <p><?php echo $rows['content_text2']?></p>
                  </div>
                 </div>
                </div>

                <div class="col-lg-3">
                <div class="content_text <?php echo $rows['imageSize']?>">
                  <div class="image_4 <?php echo $rows['imageSize']?>">
                     <img src="content_img/<?php echo $rows['images3']?>" alt="">
                  </div>
                  <div class="sub_title4 text-center py-2 <?php echo $rows['fontcolor']?>">
                    <h2><?php echo $rows['Sub_title3']?></h2>
                  </div>
                  <div class="content_4 <?php echo $rows['fontcolor']?>">
                     <p><?php echo $rows['content_text3']?></p>
                  </div>
                </div>
             </div>

                <div class="col-lg-3">
                <div class="content_text <?php echo $rows['imageSize']?>">
                  <div class="image_4 <?php echo $rows['imageSize']?>">
                     <img src="content_img/<?php echo $rows['images4']?>" alt="">
                  </div>
                  <div class="sub_title4 text-center py-2 <?php echo $rows['fontcolor']?>">
                    <h2><?php echo $rows['Sub_title4']?></h2>
                  </div>
                  <div class="content_4 <?php echo $rows['fontcolor']?>">
                     <p><?php echo $rows['content_text4']?></p>
                  </div>
                </div>
            </div>

            <div class="col-lg-3 ">
                 <div class="content_text <?php echo $rows['imageSize']?>">
                  <div class="image_4 <?php echo $rows['imageSize']?>">
                     <img src="content_img/<?php echo $rows['images5']?>" alt="">
                  </div>
                  <div class="sub_title4 text-center py-2 <?php echo $rows['fontcolor']?>">
                    <h2><?php echo $rows['Sub_title5']?></h2>
                  </div>
                  <div class="content_4 <?php echo $rows['fontcolor']?>">
                     <p><?php echo $rows['content_text5']?></p>
                  </div>
                  </div>
                </div>
                <div class="col-lg-3">
                <div class="content_text <?php echo $rows['imageSize']?>">
                  <div class="image_4 <?php echo $rows['imageSize']?>">
                     <img src="content_img/<?php echo $rows['images6']?>" alt="">
                  </div>
                  <div class="sub_title4 text-center py-2 <?php echo $rows['fontcolor']?>">
                    <h2><?php echo $rows['Sub_title6']?></h2>
                  </div>
                  <div class="content_4 <?php echo $rows['fontcolor']?>">
                     <p><?php echo $rows['content_text6']?></p>
                  </div>
                 </div>
                </div>

                <div class="col-lg-3">
                <div class="content_text <?php echo $rows['imageSize']?>">
                  <div class="image_4 <?php echo $rows['imageSize']?>">
                     <img src="content_img/<?php echo $rows['images7']?>" alt="">
                  </div>
                  <div class="sub_title4 text-center py-2 <?php echo $rows['fontcolor']?>">
                    <h2><?php echo $rows['Sub_title7']?></h2>
                  </div>
                  <div class="content_4 <?php echo $rows['fontcolor']?>">
                     <p><?php echo $rows['content_text7']?></p>
                  </div>
                </div>
             </div>

                <div class="col-lg-3">
                <div class="content_text <?php echo $rows['imageSize']?>">
                  <div class="image_4 <?php echo $rows['imageSize']?>">
                     <img src="content_img/<?php echo $rows['images8']?>" alt="">
                  </div>
                  <div class="sub_title4 text-center py-2 <?php echo $rows['fontcolor']?>">
                    <h2><?php echo $rows['Sub_title8']?></h2>
                  </div>
                  <div class="content_4 <?php echo $rows['fontcolor']?>">
                     <p><?php echo $rows['content_text8']?></p>
                  </div>
                </div>
            </div>


              </div>
            </div>
            </div>
         </div>
      </div>
<?php
}
?>
     </section>


   <!-- End Section Four double Section -->

 <!-- Start Section Three repet -->
 <?php
            $seclect = "SELECT * FROM main1_section3rpt_tbl";

            $run = mysqli_query($con,$seclect);

            while($rows = mysqli_fetch_array($run)){ 
            ?>
    <section class="section_three">
        <div class="container-fluid">
           <div class="row">
              <div class="col-lg-12 py-4 <?php echo $rows['bgcolor']?>">
                    <h1 class="text-center"><?php echo $rows['title_text']?> <?php echo $rows['fontsize']?> <?php echo $rows['fontcolor']?></h1>
                  <div class="container">
                      <div class="row">
                        <div class="col-lg-4 px-3 py-3">
                            <div class=" image-3tbl <?php echo $rows['imageSize']?> py-2">
                               <img src="content_img/<?php echo $rows['images1']?>" alt="">
                            </div>
                            <div class="sub_titlese text-center">
                              <h3><?php echo $rows['Sub_title1']?></h3>
                           </div>
                            <div class="content-3tbl">
                              <h5><?php echo $rows['content_text1']?></h5>
                            </div>
                         </div>
                         <div class="col-lg-4 px-3 py-3">
                            <div class="image-3tbl <?php echo $rows['imageSize']?> py-2">
                               <img src="content_img/<?php echo $rows['images2']?>" alt="">
                            </div>
                            <div class="sub_titlese text-center">
                            <h3><?php echo $rows['Sub_title2']?></h3>
                          </div>
                            <div class="content-3tbl">
                              <h5><?php echo $rows['content_text2']?></h5>
                            </div>
                         </div>
                         <div class="col-lg-4 px-3 py-3">
                            <div class="image-3tbl <?php echo $rows['imageSize']?> py-2">
                               <img class="" src="content_img/<?php echo $rows['images3']?>" alt="">
                            </div>
                            <div class="sub_titlese text-center">
                            <h3><?php echo $rows['Sub_title3']?></h3>
                          </div>
                            <div class="content-3tbl">
                              <h5><?php echo $rows['content_text3']?></h5>
                            </div>
                         </div>
                      </div>
                  </div>
              </div>
           </div>
        </div>
        <?php
            }
        ?>
    </section>


   <!-- End Section Three Repet-->




<!-- mainContent  End-->
    <?php

$insert ="CREATE TABLE user_table_form(form_id int AUTO_INCREMENT PRIMARY key,
Two_1 varchar(100),
Two_2 varchar(300),
Three_1 varchar(300),
Three_2 varchar(300),
Three_3 varchar(200),
Four_1 varchar(300), 
Four_2 varchar(300), 
Four_3 varchar(300), 
Four_4 varchar(300),
five_1 varchar(300),
five_2 varchar(300),
five_3 varchar(300),
five_4 varchar(200),
five_5 varchar(200),
title_text varchar(200)
)";
$run =mysqli_query($con,$insert);

            $seclect = "SELECT * FROM form_control_tbl";

            $run = mysqli_query($con,$seclect);

            while($rows = mysqli_fetch_array($run)){ 
            ?>
<section class="control_formsection">
   <div class="container">
     <div class="row">
       <div class="col-lg-2"></div>
       <div class="col-lg-8">
          <div class="contract_form">
              <h3><strong><?php echo $rows['title_text']?></strong></h3>
         
          <div class="contol_forms">
               <form action="" method="POST">
                <div class="form-group  py-1">
                  <input type="<?php echo $rows['Two_1']?>" name="Two_1" class="form-control" placeholder="<?php echo $rows['Two_1']?>">
                </div>
                <div class="form-group py-1">
                    <input type="<?php echo $rows['Two_2']?>"name="Two_2" class="form-control " placeholder="<?php echo $rows['Two_2']?>">
                </div>
                <div class="form-group  py-1">
                  <input type="<?php echo $rows['Three_1']?>" name="Three_1"class="form-control" placeholder="<?php echo $rows['Three_1']?>">
                </div>
                <div class="form-group  py-1">
                  <input type="<?php echo $rows['Three_2']?>" name="Three_2" class="form-control" placeholder="<?php echo $rows['Three_2']?>">
                </div>
                <div class="form-group py-1">
                    <input type="<?php echo $rows['Three_3']?>" name="Three_3" class="form-control " placeholder="<?php echo $rows['Three_3']?>">
                </div>
                 <button type="submit" name="submitbtn" class="btn btn-primary form-control">Submit</button>
              </form>
          </div>
       </div>
       </div>
       <div class="col-lg-2"></div>

     </div>
   </div>
    <?php }?>


    <?php
      if(isset($_POST['submitbtn'])){

         $Two_1=$_POST['Two_1'];
         $Two_2=$_POST['Two_2'];
         $Three_1=$_POST['Three_1'];
         $Three_2=$_POST['Three_2'];
         $Three_3=$_POST['Three_3'];
         $inser = "INSERT INTO user_table_form(Two_1,Two_2,Three_1,Three_2,Three_3) VALUES('$Two_1','$Two_2','$Three_1','$Three_2','$Three_3')";
         $run = mysqli_query($con,$inser);
         
      }
    
    ?>

</section>
 



    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>