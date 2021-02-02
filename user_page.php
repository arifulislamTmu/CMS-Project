<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>User Site</title>
  </head>
  <body>
    <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
            <nav class="text-center bg-light py-1">
                <span class="navbar-text">
                 <h3>Content Management System</h3>
                </span>
             </nav>
            </div>
          </div>
        </div>
    </section>

    <section class="heading_section">
       <div class="container">
          <div class="row">
            <div class="col-lg-11 border">
                <div class="container">
                  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Heading Section/navbar</a>
                </nav>
              </div>
              <div class="row">
                <div class="col-lg-2 border">
                  <div class="one_colum">
                    <form action="" method="POST">
                        <button class=" " name="btn1"> <img src="section_img/one.png" alt=""></button>
                    </form>
                  </div>
                </div>
                <div class="col-lg-2 border">
                <div class="two_colum">
                    <form action="" method="POST">
                        <button class=" " name="btn2"> <img src="section_img/two.png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-2 border">
                     <div class="three_colum">
                      <form action="" method="POST">
                        <button class=" " name="btn3"> <img src="section_img/three.png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-2 border">
                   <div class="four_colum">
                      <form action="" method="POST">
                        <button class=" " name="btn4"> <img src="section_img/one.png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-2 border">
                   <div class="four_colum">
                      <form action="" method="POST">
                        <button class=" btn-lg form-control my-1" name="abc">Close</button>
                    </form>
                </div>
                </div>
              </div>

              <!-- start one column section -->
       <?php 
          require_once('connect.php');

          if(isset($_POST['btn1'])){

                $insert ="CREATE TABLE heading_tbl(head_id int AUTO_INCREMENT PRIMARY key,
                  head_title varchar(100),
                  nav_content1 varchar(300),
                  nav_content2 varchar(300),
                  nav_content3 varchar(300),
                  nav_content4 varchar(300),
                  nav_content5 varchar(300),
                  nav_content6 varchar(300),
                  bgcolor varchar(300),
                  images varchar(200),
                  fontsize varchar(200),
                  fontcolor varchar(200),
                  imageSize varchar(200),
                  row_col varchar(300)
                    )";
                  $run =mysqli_query($con,$insert);
            
                  $inser ="INSERT INTO heading_tbl(head_id) VALUES('1')";
                  $run = mysqli_query($con,$inser);
            
                  $seclect = "SELECT * FROM heading_tbl";
            
                  $run = mysqli_query($con,$seclect);
            
                  while($rows = mysqli_fetch_array($run)){  ?>
                  <div class="row">
                    <div class="col-lg-6 border">
                      <div class="content_section">
                      <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="head_id" value="<?php echo $rows['head_id']; ?>"/>
                  
                          <div class="form-group mt-2 mb-1">
                              <h4 for="brand">Heading Name or Company Name</h4>

                              <input type="text" name="head_title"class="form-control" id="head_title" placeholder="Company name" value="<?php echo $rows['head_title']; ?>" >
                          </div>
                          <div class="form-group mt-2 mb-1">
                          <h5 for="nav_content1">NavBar title</h5>
                              <label for="title1">Title 1</label>
                              <input type="text" name="nav_content1" class="form-control" id="nav_content1" placeholder="Title Name" value="<?php echo $rows['nav_content1']; ?>">
                          </div>
                          <div class="form-group mt-2 mb-1">
                              <label for="nav_content2">Title 2</label>
                              <input type="text"  name="nav_content2" class="form-control" id="nav_content2" placeholder="Title Name" value="<?php echo $rows['nav_content2']; ?>">
                          </div>
                          <div class="form-group mt-2 mb-1">
                              <label for="nav_content3">Title 3</label>
                              <input type="text" name="nav_content3" class="form-control" id="nav_content3" placeholder="Title Name" value="<?php echo $rows['nav_content3']; ?>">
                          </div>
                          <div class="form-group mt-2 mb-1">
                              <label for="nav_content4">Title 4</label>
                              <input type="text"  name="nav_content4"class="form-control" id="nav_content4" placeholder="Title Name" value="<?php echo $rows['nav_content4']; ?>">
                          </div>
                          <div class="form-group mt-2 mb-1">
                              <label for="nav_content4">Image</label>
                              <input type="file" class="form-control" name="image" id="SERVICE">
                          </div>
                      </div>

                    </div>
                    <div class="col-lg-6 border">
                      <div class="row">
                      <h4 class="text-center py-1">Cascading Style Sheets (CSS)</h4><hr>
                        <div class="col-lg-3">
                          
                          <div class="form-group">
                              <h6 for="exampleFormControlSelect1">Bg-color</h6>
                              <select name="bgcolor" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['bgcolor']; ?></option>
                              <option>bg-light</option>
                              <option>bg-secondary</option>
                              <option>bg-success</option>
                              <option>bg-danger</option>
                              <option>bg-info</option>
                              <option>bg-dark</option>
                              <option>bg-white</option>
                              </select>
                        </div>
                          
                        </div>
                        <div class="col-lg-3">
                      <div class="form-group">
                        <h6 for="exampleFormControlSelect1">Font-size</h6>
                              <select name="fontsize" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['fontsize']; ?></option>
                              <option>Small-Size</option>
                              <option>Medium-Size</option>
                              <option>Large-Size</option>
                              <option>X-large-Size</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-lg-3">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Font-color</h6>
                                <select name="fontcolor" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['fontcolor']; ?></option>
                                <option>Red</option>
                                <option>White</option>
                                <option>Gray</option>
                                <option>Green</option>
                                <option>Blue</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Nav-image</h6>
                                <select name="imageSize" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['imageSize']; ?></option>
                                <option>Nav-Small</option>
                                <option>Nav-Medium</option>
                                <option>Nav-Large</option>
                              </select>
                            </div>
                        
                        </div>
                      </div>
                    
                    
                    </div>
                    <div class="buut d-flex">
                      <button class="btn btn-lg btn btn-success mt-3 mr-3 w-50 " name="update"> Update</button> 
                      <button class="btn btn-lg btn btn-danger  mt-3 w-50" name="delete"> Remove</button>
                
                   </div>
                </form>
                </div> 
               <?php
                }
                }
             ?>
            </div>
           
            <div class="col-lg-1 border ">
               <a href="http://localhost/cms_system1/publish.php"><button class="btn btn-success form-control">View page</button></a>
            </div>
          </div>
       </div>
       
        <?php
          if(isset($_POST['update'])){
            $head_title = $_POST['head_title'];
            $nav_content1 = $_POST['nav_content1'];
            $nav_content2 = $_POST['nav_content2'];
            $nav_content3 = $_POST['nav_content3'];
            $nav_content4 = $_POST['nav_content4'];
            $bgcolor = $_POST['bgcolor'];
            $imagess =$_FILES['image']['name'];
            $fontsize = $_POST['fontsize'];
            $fontcolor = $_POST['fontcolor'];
            $imageSize = $_POST['imageSize'];
            
            $inser ="UPDATE  heading_tbl SET head_title='$head_title',nav_content1='$nav_content1',nav_content2='$nav_content2',nav_content3='$nav_content3',nav_content4='$nav_content4',bgcolor='$bgcolor',images='$imagess',fontsize='$fontsize',fontcolor='$fontcolor',imageSize='$imageSize'";
            
            $run = mysqli_query($con,$inser);
            move_uploaded_file($_FILES['image']['tmp_name'],"headPic/$imagess");
	
            if($run){
                echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
        
            }else{
              echo"deleted not";
            }
        
         }
        
        if(isset($_POST['delete'])){
        
            $deletee ="TRUNCATE `cms_db1`.`heading_tbl`";
            $run =mysqli_query($con,$deletee);
            if( $run){
                echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
        
            }else{
                echo"deleted not";
            }
        }
        
      ?>
    </section>
 <!-- End one column section -->
 <!-- start two column section -->





 <!-- End two column section -->

  <!-- start Three column section -->

  <section class="heading_section">
       <div class="container">
          <div class="row">
            <div class="col-lg-11 border">
           <?php 
          require_once('connect.php');

          if(isset($_POST['btn3'])){

                $insert ="CREATE TABLE heading_tbl2(head_id2 int AUTO_INCREMENT PRIMARY key,
                  nav_content1 varchar(300),
                  nav_content2 varchar(300),
                  nav_content3 varchar(300),
                  bgcolor varchar(300),
                  images1 varchar(200),
                  images2 varchar(200),
                  images3 varchar(200),
                  fontsize varchar(200),
                  fontcolor varchar(200),
                  imageSize varchar(200),
                  row_col varchar(300)
                    )";
                  $run =mysqli_query($con,$insert);
            
                  $inser ="INSERT INTO heading_tbl2(head_id2) VALUES('1')";
                  $run = mysqli_query($con,$inser);
            
                  $seclect = "SELECT * FROM heading_tbl2";
            
                  $run = mysqli_query($con,$seclect);
            
                  while($rows = mysqli_fetch_array($run)){  ?>
                  <div class="row">
                    <div class="col-lg-6 border">
                      <div class="content_section">
                      <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="head_id2" value="<?php echo $rows['head_id2']; ?>"/>
                  
                          <div class="form-group mt-2 mb-1">
                          <h5 for="nav_content1">NavBar title</h5>
                              <label for="title1">Title 1</label>
                              <input type="text" name="nav_content1" class="form-control" id="nav_content1" placeholder="Title Name" value="<?php echo $rows['nav_content1']; ?>">
                          </div>
                          <div class="form-group mt-2 mb-1">
                              <label for="nav_content2">Title 2</label>
                              <input type="text"  name="nav_content2" class="form-control" id="nav_content2" placeholder="Title Name" value="<?php echo $rows['nav_content2']; ?>">
                          </div>
                          <div class="form-group mt-2 mb-1">
                              <label for="nav_content3">Title 3</label>
                              <input type="text" name="nav_content3" class="form-control" id="nav_content3" placeholder="Title Name" value="<?php echo $rows['nav_content3']; ?>">
                          </div>
                          <div class="form-group mt-2 mb-1">
                              <label for="nav_content4">Image</label>
                              <input type="file" class="form-control" name="image1" id="SERVICE">
                          </div>
                          <div class="form-group mt-2 mb-1">
                              <label for="nav_content4">Image</label>
                              <input type="file" class="form-control" name="image2" id="SERVICE">
                          </div>
                          <div class="form-group mt-2 mb-1">
                              <label for="nav_content4">Image</label>
                              <input type="file" class="form-control" name="image3" id="SERVICE">
                          </div>
                      </div>

                    </div>
                    <div class="col-lg-6 border">
                      <div class="row">
                      <h4 class="text-center py-1">Cascading Style Sheets (CSS)</h4><hr>
                        <div class="col-lg-3">
                          
                          <div class="form-group">
                              <h6 for="exampleFormControlSelect1">Bg-color</h6>
                              <select name="bgcolor" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['bgcolor']; ?></option>
                              <option>bg-light</option>
                              <option>bg-secondary</option>
                              <option>bg-success</option>
                              <option>bg-danger</option>
                              <option>bg-info</option>
                              <option>bg-dark</option>
                              <option>bg-white</option>
                              </select>
                        </div>
                          
                        </div>
                        <div class="col-lg-3">
                      <div class="form-group">
                        <h6 for="exampleFormControlSelect1">Font-size</h6>
                              <select name="fontsize" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['fontsize']; ?></option>
                              <option>Small-Size</option>
                              <option>Medium-Size</option>
                              <option>Large-Size</option>
                              <option>X-large-Size</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-lg-3">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Font-color</h6>
                                <select name="fontcolor" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['fontcolor']; ?></option>
                                <option>Red</option>
                                <option>White</option>
                                <option>Gray</option>
                                <option>Green</option>
                                <option>Blue</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Head-image</h6>
                                <select name="imageSize" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['imageSize']; ?></option>
                                <option>H-Small</option>
                                <option>H-Medium</option>
                                <option>H-Large</option>
                              </select>
                            </div>
                        
                        </div>
                      </div>
                    
                    
                    </div>
                    <div class="buut d-flex">
                      <button class="btn btn-lg btn btn-success mt-3 mr-3 w-50 " name="update3"> Update</button> 
                      <button class="btn btn-lg btn btn-danger  mt-3 w-50" name="delete3"> Remove</button>
                
                   </div>
                </form>
                </div> 
               <?php
                }
                }
             ?>
            </div>
           
            <div class="col-lg-1 border"></div>
          </div>
       </div>
       
        <?php
          if(isset($_POST['update3'])){
            $nav_content1 = $_POST['nav_content1'];
            $nav_content2 = $_POST['nav_content2'];
            $nav_content3 = $_POST['nav_content3'];
            $bgcolor = $_POST['bgcolor'];
            $imagess1 =$_FILES['image1']['name'];
            $imagess2 =$_FILES['image2']['name'];
            $imagess3 =$_FILES['image3']['name'];
            $fontsize = $_POST['fontsize'];
            $fontcolor = $_POST['fontcolor'];
            $imageSize = $_POST['imageSize'];
            
            $inser ="UPDATE  heading_tbl2 SET nav_content1='$nav_content1',nav_content2='$nav_content2',nav_content3='$nav_content3',bgcolor='$bgcolor',images1='$imagess1',images2='$imagess2',images3='$imagess3',fontsize='$fontsize',fontcolor='$fontcolor',imageSize='$imageSize'";
            
            $run = mysqli_query($con,$inser);
            move_uploaded_file($_FILES['image1']['tmp_name'],"headPic/$imagess1");
            move_uploaded_file($_FILES['image2']['tmp_name'],"headPic/$imagess2");
            move_uploaded_file($_FILES['image3']['tmp_name'],"headPic/$imagess3");
	
            if($run){
                echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
        
            }else{
              echo"Not update Data";
            }
        
         }
        
        if(isset($_POST['delete3'])){
        
            $deletee ="TRUNCATE `cms_db1`.`heading_tbl2`";
            $run =mysqli_query($con,$deletee);
            if( $run){
                echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
        
            }else{
                echo"deleted not";
            }
        }
        
      ?>
    </section>

<!-- start four column section -->

<section class="heading_section">
       <div class="container">
          <div class="row">
            <div class="col-lg-11 border">
           <?php 
         
          if(isset($_POST['btn4'])){

                $insert ="CREATE TABLE heading_tbl4(head_id4 int AUTO_INCREMENT PRIMARY key,
                  nav_content1 varchar(300),
                  nav_content2 varchar(300),
                  nav_content3 varchar(300),
                  nav_content4 varchar(200),
                  nav_content5 varchar(200),
                  nav_content6 varchar(200),
                  fontsize varchar(200),
                  fontcolor varchar(200),
                  bgcolor varchar(300),
                  row_col varchar(300)
                    )";
                  $run =mysqli_query($con,$insert);
            
                  $inser ="INSERT INTO heading_tbl4(head_id4) VALUES('1')";
                  $run = mysqli_query($con,$inser);
            
                  $seclect = "SELECT * FROM heading_tbl4";
            
                  $run = mysqli_query($con,$seclect);
            
                  while($rows = mysqli_fetch_array($run)){  ?>
                  <div class="row">
                    <div class="col-lg-6 border">
                      <div class="content_section">
                      <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="head_id4" value="<?php echo $rows['head_id4']; ?>"/>
                  
                          <div class="form-group mt-2 mb-1">
                          <h5 for="nav_content1">NavBar title</h5>
                              <label for="title1">Title 1</label>
                              <input type="text" name="nav_content1" class="form-control" id="nav_content1" placeholder="Title Name" value="<?php echo $rows['nav_content1']; ?>">
                          </div>
                          <div class="form-group mt-2 mb-1">
                              <label for="nav_content2">Title 2</label>
                              <input type="text"  name="nav_content2" class="form-control" id="nav_content2" placeholder="Title Name" value="<?php echo $rows['nav_content2']; ?>">
                          </div>
                          <div class="form-group mt-2 mb-1">
                              <label for="nav_content3">Title 3</label>
                              <input type="text" name="nav_content3" class="form-control" id="nav_content3" placeholder="Title Name" value="<?php echo $rows['nav_content3']; ?>">
                          </div>
                          <div class="form-group mt-2 mb-1">
                              <label for="nav_content4">Title 3</label>
                              <input type="text" name="nav_content4" class="form-control" id="nav_content4" placeholder="Title Name" value="<?php echo $rows['nav_content4']; ?>">
                          </div>
                          <div class="form-group mt-2 mb-1">
                              <label for="nav_content5">Title 3</label>
                              <input type="text" name="nav_content5" class="form-control" id="nav_content5" placeholder="Title Name" value="<?php echo $rows['nav_content5']; ?>">
                          </div>
                          <div class="form-group mt-2 mb-1">
                              <label for="nav_content6">Title 3</label>
                              <input type="text" name="nav_content6" class="form-control" id="nav_content6" placeholder="Title Name" value="<?php echo $rows['nav_content6']; ?>">
                          </div>
                      </div>

                    </div>
                    <div class="col-lg-6 border">
                      <div class="row">
                      <h4 class="text-center py-1">Cascading Style Sheets (CSS)</h4><hr>
                        <div class="col-lg-3">
                          
                          <div class="form-group">
                              <h6 for="exampleFormControlSelect1">Bg-color</h6>
                              <select name="bgcolor" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['bgcolor']; ?></option>
                              <option>bg-light</option>
                              <option>bg-secondary</option>
                              <option>bg-success</option>
                              <option>bg-danger</option>
                              <option>bg-info</option>
                              <option>bg-dark</option>
                              <option>bg-white</option>
                              </select>
                        </div>
                          
                        </div>
                        <div class="col-lg-3">
                      <div class="form-group">
                        <h6 for="exampleFormControlSelect1">Font-size</h6>
                              <select name="fontsize" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['fontsize']; ?></option>
                              <option>Small-Size</option>
                              <option>Medium-Size</option>
                              <option>Large-Size</option>
                              <option>X-large-Size</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-lg-3">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Font-color</h6>
                                <select name="fontcolor" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['fontcolor']; ?></option>
                                <option>Red</option>
                                <option>White</option>
                                <option>Gray</option>
                                <option>Green</option>
                                <option>Blue</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3"></div>
                      </div>
                    
                    
                    </div>
                    <div class="buut d-flex">
                      <button class="btn btn-lg btn btn-success mt-3 mr-3 w-50 " name="update4"> Update</button> 
                      <button class="btn btn-lg btn btn-danger  mt-3 w-50" name="delete4"> Remove</button>
                
                   </div>
                </form>
                </div> 
               <?php
                }
                }
             ?>
            </div>
           
            <div class="col-lg-1 border"></div>
          </div>
       </div>
       
        <?php
          if(isset($_POST['update4'])){
            $nav_content1 = $_POST['nav_content1'];
            $nav_content2 = $_POST['nav_content2'];
            $nav_content3 = $_POST['nav_content3'];
            $nav_content4 = $_POST['nav_content4'];
            $nav_content5 = $_POST['nav_content5'];
            $nav_content6 = $_POST['nav_content6'];
            $bgcolor = $_POST['bgcolor'];
            $fontsize = $_POST['fontsize'];
            $fontcolor = $_POST['fontcolor'];

            $inser ="UPDATE  heading_tbl4 SET nav_content1='$nav_content1',nav_content2='$nav_content2',nav_content3='$nav_content3',nav_content4='$nav_content4',nav_content4='$nav_content4',nav_content5='$nav_content5',nav_content6='$nav_content6',bgcolor='$bgcolor',fontsize='$fontsize',fontcolor='$fontcolor'";
            
            $run = mysqli_query($con,$inser);
            
            if($run){
                echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
        
            }else{
              echo"deleted not";
            }
        
         }
        
        if(isset($_POST['delete4'])){
        
            $deletee ="TRUNCATE `cms_db1`.`heading_tbl4`";
            $run =mysqli_query($con,$deletee);
            if( $run){
                echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
        
            }else{
                echo"deleted not";
            }
        }
        
      ?>
    </section>

 <!-- End four column section -->
 
 <!-- Start Slider section section -->
  

 <!-- Start Slider section section -->
       

 <section class="slider_section">
       <div class="container">
          <div class="row">
            <div class="col-lg-11 border">
                <div class="container-fluid">
                  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                   <a class="navbar-brand" href="#"><h3>Slider Section</h3> </a>
                </nav>
              </div>
              <div class="row">
                <div class="col-lg-2 border">
                  <div class="one_colum">
                    <form action="" method="POST">
                        <button class=" " name="slider1"> <img src="section_img/one.png" alt=""></button>
                    </form>
                  </div>
                </div>
                <div class="col-lg-2 border">
                 <div class="two_colum">
                     <form action="" method="POST">
                        <button class=" " name="slider2"> <img src="section_img/two.png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-2 border">
                   <div class="four_colum">
                      <form action="" method="POST">
                        <button class=" btn-lg form-control my-1" name="abc">Close</button>
                    </form>
                </div>
                </div>
              </div>
             <?php
               if(isset($_POST['slider1'])){
                $insert ="CREATE TABLE slider_tbl1(slider_id1 int AUTO_INCREMENT PRIMARY key,
                images1 varchar(200),
                images2 varchar(200),
                images3 varchar(200),
                imageSize varchar(200),
                sliderSize varchar(202),
                row_col varchar(300)
                  )";
                $run =mysqli_query($con,$insert);
          
                $inser ="INSERT INTO slider_tbl1(slider_id1) VALUES('1')";
                $run = mysqli_query($con,$inser);
          
                $seclect = "SELECT * FROM slider_tbl1";
          
                $run = mysqli_query($con,$seclect);
          
                while($rows = mysqli_fetch_array($run)){  ?>

              <div class="row">
               <div class="col-lg-6 border">
               <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group mt-2 mb-1">
                  <label for="nav_content4">Image 1</label>
                  <input type="file" class="form-control" name="image1" id="SERVICE">
                </div>
                <div class="form-group mt-2 mb-1">
                  <label for="nav_content4">Image 2</label>
                  <input type="file" class="form-control" name="image2" id="SERVICE">
                </div>
                <div class="form-group mt-2 mb-1">
                  <label for="nav_content4">Image 3</label>
                  <input type="file" class="form-control" name="image3" id="SERVICE">
                  
                </div>
               </div>
               <div class="col-lg-6 border">
                <div class="row">
                <h4 class="text-center py-1">Cascading Style Sheets (CSS)</h4><hr>
                   <div class="col-lg-3">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Slider-image</h6>
                                <select name="imageSize" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['imageSize']; ?></option>
                                <option>S-Small</option>
                                <option>S-Medium</option>
                                <option>S-Large</option>
                              </select>
                            </div>
                            <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Slider-Size</h6>
                                <select name="sliderSize" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['sliderSize']; ?></option>
                                <option>Slider-Small</option>
                                <option>Slider-Medium</option>
                                <option>Slider-Large</option>
                              </select>
                            </div>
                     </div>
                  </div>
               </div>
             </div>
             <div class="buut d-flex">
                      <button class="btn btn-lg btn btn-success mt-3 mr-3 w-50 " name="update_slider"> Update</button> 
                      <button class="btn btn-lg btn btn-danger  mt-3 w-50" name="delete_s"> Remove</button>
                   </div>
             </form>
            <?php       
              }
               }
             ?>
             
         </div>
         <div class="col-lg-1 border">b</div>
    </div>
</div>

      <?php
          if(isset($_POST['update_slider'])){
            $images1 = $_FILES['image1']['name'];
            $images2 = $_FILES['image2']['name'];
            $images3 = $_FILES['image3']['name'];
            $imageSize = $_POST['imageSize'];
            $sliderSize = $_POST['sliderSize'];
         
            $inser ="UPDATE  slider_tbl1 SET images1='$images1',images2='$images2',images3='$images3',imageSize='$imageSize',sliderSize ='$sliderSize'";
            
            $run = mysqli_query($con,$inser);
            move_uploaded_file($_FILES['image1']['tmp_name'],"sliderPic/$images1");
            move_uploaded_file($_FILES['image2']['tmp_name'],"sliderPic/$images2");
            move_uploaded_file($_FILES['image3']['tmp_name'],"sliderPic/$images3");
	
            
            if($run){
                echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
        
            }else{
              echo"not update photo!!!";
            }
        
         }
        
        if(isset($_POST['delete_s'])){
        
            $deletee ="TRUNCATE `cms_db1`.`slider_tbl1`";
            $run =mysqli_query($con,$deletee);
            if( $run){
                echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
        
            }else{
                echo"deleted not";
            }
        }
        
      ?>
</section>




 <!-- Start main content section section -->
       

 <section class="mainContent_section">
       <div class="container">
          <div class="row">
            <div class="col-lg-11 border">
                <div class="container-fluid">
                  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                   <a class="navbar-brand" href="#"><h3>Content Section 1</h3> </a>
                </nav>
              </div>
              <div class="row">
                <div class="col-lg-1 border">
                  <div class="one_colum">
                    <form action="" method="POST">
                        <button class="py-0 px-0" name="main1"> <img style="width:75px;" src="section_img/one.png" alt=""></button>
                    </form>
                  </div>
                </div>
                <div class="col-lg-1 border">
                 <div class="two_colum">
                     <form action="" method="POST">
                        <button class="py-0 px-0 "name="main2"> <img style="width:75px;" src="section_img/two.png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-1 border">
                 <div class="two_colum">
                     <form action="" method="POST">
                        <button class="py-0 px-0 "name="main3"> <img style="width:75px;"src="section_img/three.png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-1 border">
                 <div class="two_colum">
                     <form action="" method="POST">
                        <button class="py-0 px-0 " name="main2two"> <img style="width:75px;" src="section_img/two.png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-1 border">
                 <div class="two_colum">
                     <form action="" method="POST">
                        <button class="py-0 px-0 " name="main1two"> <img style="width:75px;" src="section_img/one.png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-1 border">
                 <div class="two_colum">
                     <form action="" method="POST">
                        <button class="py-0 px-0 " name="main3double"> <img style="width:75px;" src="section_img/threedouble.png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-1 border">
                 <div class="two_colum">
                     <form action="" method="POST">
                        <button class="py-0 px-0 " name="main4"> <img style="width:75px;"src="section_img/four.png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-1 border">
                 <div class="two_colum">
                     <form action="" method="POST">
                        <button class="py-0 px-0 " name="main4double"> <img style="width:75px;"src="section_img/fourdouble .png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-1 border">
                 <div class="two_colum">
                     <form action="" method="POST">
                        <button class="py-0 px-0" name="main3Repet"> <img style="width:75px;"src="section_img/three.png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-1 border">
                 <div class="two_colum">
                     <form action="" method="POST">
                        <button class="py-0 px-0" name="input_form">Input Form</button>
                    </form>
                </div>
                </div>
                <div class="col-lg-1 border">
                   <div class="four_colum">
                      <form action="" method="POST">
                        <button class="" name="abc">Close</button>
                    </form>
                </div>
                </div>
              </div>
<!-- one section er kaj database insert  -->
              <?php
                if(isset($_POST['main1'])){
                  $insert ="CREATE TABLE main1_section1_tbl(section_id int AUTO_INCREMENT PRIMARY key,
                    title_text varchar(100),
                    images varchar(300),
                    content_text varchar(1000),
                    bgcolor varchar(300), 
                    fontsize varchar(300), 
                    fontcolor varchar(300), 
                    imageSize varchar(300) 
                   )";
                   $run =mysqli_query($con,$insert);
                    $inser ="INSERT INTO main1_section1_tbl (section_id) VALUES('1')";
                    $run = mysqli_query($con,$inser);
                   
                  ?>
                  <?php
                       $seclect = "SELECT * FROM main1_section1_tbl";
                  
                       $run = mysqli_query($con,$seclect);
                  
                       while($rows = mysqli_fetch_array($run)){ ?>

                 <div class="row">
                   <div class="col-lg-8">
                     <form action="" method="POST" enctype="multipart/form-data">
               
                    <div class="row">
                  
                        <h3>Title Text</h3>
                         <input type="text" class="form-control text-center" name="title_text"placeholder="Add titile"value="<?php echo $rows['title_text']?>">
                      <div class="col-lg-6 ">
                         <h6>Image optional</h6>
                          <input type="file" name="images">
                      </div>
                      <div class="col-lg-6 ">
                         <textarea class="form-control" id="service" name="content_text" rows="10"placeholder="Add content Text" ><?php echo $rows['content_text']?></textarea>
                      </div>
                    </div>
                   </div>
                   <div class="col-lg-4 border">
                   <div class="row">
                      <h4 class="text-center py-1">Cascading Style Sheets (CSS)</h4><hr>
                        <div class="col-lg-4">
                          
                          <div class="form-group">
                              <h6 for="exampleFormControlSelect1">Bg-color</h6>
                              <select name="bgcolor" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['bgcolor']; ?></option>
                              <option>bg-light</option>
                              <option>bg-secondary</option>
                              <option>bg-success</option>
                              <option>bg-danger</option>
                              <option>bg-info</option>
                              <option>bg-dark</option>
                              <option>bg-white</option>
                              </select>
                        </div>
                          
                        </div>
                        <div class="col-lg-4">
                      <div class="form-group">
                        <h6 for="exampleFormControlSelect1">Font-size</h6>
                              <select name="fontsize" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['fontsize']; ?></option>
                              <option>Small-Size</option>
                              <option>Medium-Size</option>
                              <option>Large-Size</option>
                              <option>X-large-Size</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Font-color</h6>
                                <select name="fontcolor" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['fontcolor']; ?></option>
                                <option>Red</option>
                                <option>White</option>
                                <option>Gray</option>
                                <option>Green</option>
                                <option>Blue</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Image-size</h6>
                                <select name="imageSize" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['imageSize']; ?></option>
                                <option>Img-Small</option>
                                <option>Img-Medium</option>
                                <option>Img-large</option>
                              </select>
                            </div>
                        
                        </div>
                      </div>
                   
                   
                   </div>
                   <div class="buut d-flex">
                      <button class="btn btn-lg btn btn-success mt-3 mr-3 w-50 " name="upbtnmain1"> Update</button> 
                      <button class="btn btn-lg btn btn-danger  mt-3 w-50" name="deletemain1"> Remove</button>
                     
                   </div>
                  </div>
              </form>
                
              <?php
                  }
                
                }
                ?>

                     
                <?php
                  if(isset($_POST['upbtnmain1'])){

                      $title_text= $_POST['title_text'];
                      $images= $_FILES['images']['name'];
                      $content_text= $_POST['content_text'];
                      $bgcolor= $_POST['bgcolor'];
                      $fontsize= $_POST['fontsize'];
                      $fontcolor= $_POST['fontcolor'];
                      $imageSize= $_POST['imageSize'];

                      $inser ="UPDATE  main1_section1_tbl SET title_text='$title_text',images='$images',content_text='$content_text',bgcolor='$bgcolor',fontsize ='$fontsize',fontcolor='$fontcolor',imageSize='$imageSize'";
                      $run = mysqli_query($con,$inser);
                   
                      move_uploaded_file($_FILES['images']['tmp_name'],"content_img/$images");
                     
                       if($run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                       }else{
                        echo"Data not update";
                       }
                    
                    }
                   
                    if(isset($_POST['deletemain1'])){
                   
                     $deletee ="TRUNCATE `cms_db1`.`main1_section1_tbl`";
                     $run =mysqli_query($con,$deletee);
                     if( $run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                     }else{
                         echo"deleted not";
                     }
                   }
                   
                   
                ?>
           </div>
              <div class="col-lg-1 border">
              <a href="http://localhost/cms_system1/publish.php"><button class="btn btn-success form-control">View page</button></a>
           
              </div>
             </div>
          </div>
</section>
<!-- one section er kaj database insert  sesh -->

<!-- one repeat section er kaj database insert  -->
<section class="mainContent_section">
       <div class="container">
          <div class="row">
           <div class="col-lg-11 border">
            <?php
                if(isset($_POST['main1two'])){
                  $insert ="CREATE TABLE main1_section1rpt_tbl(section_id int AUTO_INCREMENT PRIMARY key,
                    title_text varchar(100),
                    images varchar(300),
                    content_text varchar(1000),
                    bgcolor varchar(300), 
                    fontsize varchar(300), 
                    fontcolor varchar(300), 
                    imageSize varchar(300) 
                   )";
                   $run =mysqli_query($con,$insert);
                    $inser ="INSERT INTO main1_section1rpt_tbl (section_id) VALUES('1')";
                    $run = mysqli_query($con,$inser);
                   
                  ?>
                  <?php
                       $seclect = "SELECT * FROM main1_section1rpt_tbl";
                  
                       $run = mysqli_query($con,$seclect);
                  
                       while($rows = mysqli_fetch_array($run)){ ?>

                 <div class="row">
                   <div class="col-lg-8">
                     <form action="" method="POST" enctype="multipart/form-data">
               
                    <div class="row">
                  
                        <h3>Title Text</h3>
                         <input type="text" class="form-control text-center" name="title_text"placeholder="Add titile"value="<?php echo $rows['title_text']?>">
                      <div class="col-lg-6 ">
                         <h6>Image optional</h6>
                          <input type="file" name="images">
                      </div>
                      <div class="col-lg-6 ">
                         <textarea class="form-control" id="service" name="content_text" rows="10"placeholder="Add content Text" ><?php echo $rows['content_text']?></textarea>
                      </div>
                    </div>
                   </div>
                   <div class="col-lg-4 border">
                   <div class="row">
                      <h4 class="text-center py-1">Cascading Style Sheets (CSS)</h4><hr>
                        <div class="col-lg-4">
                          
                          <div class="form-group">
                              <h6 for="exampleFormControlSelect1">Bg-color</h6>
                              <select name="bgcolor" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['bgcolor']; ?></option>
                              <option>bg-light</option>
                              <option>bg-secondary</option>
                              <option>bg-success</option>
                              <option>bg-danger</option>
                              <option>bg-info</option>
                              <option>bg-dark</option>
                              <option>bg-white</option>
                              </select>
                        </div>
                          
                        </div>
                        <div class="col-lg-4">
                      <div class="form-group">
                        <h6 for="exampleFormControlSelect1">Font-size</h6>
                              <select name="fontsize" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['fontsize']; ?></option>
                              <option>Small-Size</option>
                              <option>Medium-Size</option>
                              <option>Large-Size</option>
                              <option>X-large-Size</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Font-color</h6>
                                <select name="fontcolor" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['fontcolor']; ?></option>
                                <option>Red</option>
                                <option>White</option>
                                <option>Gray</option>
                                <option>Green</option>
                                <option>Blue</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Main-image</h6>
                                <select name="imageSize" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['imageSize']; ?></option>
                                <option>Null</option>
                                <option>Small</option>
                                <option>Medium</option>
                                <option>Large</option>
                              </select>
                            </div>
                        
                        </div>
                      </div>
                   
                   
                   </div>
                   <div class="buut d-flex">
                      <button class="btn btn-lg btn btn-success mt-3 mr-3 w-50 " name="upbtnmain1rpt"> Update</button> 
                      <button class="btn btn-lg btn btn-danger  mt-3 w-50" name="deletemain1rpt"> Remove</button>
                     
                   </div>
                  </div>
              </form>
                
              <?php
                  }
                
                }
                ?>

                     
                <?php
                  if(isset($_POST['upbtnmain1rpt'])){

                      $title_text= $_POST['title_text'];
                      $images= $_FILES['images']['name'];
                      $content_text= $_POST['content_text'];
                      $bgcolor= $_POST['bgcolor'];
                      $fontsize= $_POST['fontsize'];
                      $fontcolor= $_POST['fontcolor'];
                      $imageSize= $_POST['imageSize'];

                      $inser ="UPDATE  main1_section1rpt_tbl SET title_text='$title_text',images='$images',content_text='$content_text',bgcolor='$bgcolor',fontsize ='$fontsize',fontcolor='$fontcolor',imageSize='$imageSize'";
                      $run = mysqli_query($con,$inser);
                   
                      move_uploaded_file($_FILES['images']['tmp_name'],"content_img/$images");
                     
                       if($run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                       }else{
                        echo"Data not update";
                       }
                    
                    }
                   
                    if(isset($_POST['deletemain1rpt'])){
                   
                     $deletee ="TRUNCATE `cms_db1`.`main1_section1rpt_tbl`";
                     $run =mysqli_query($con,$deletee);
                     if( $run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                     }else{
                         echo"deleted not";
                     }
                   }
                   
                   
                ?>
           </div>
              <div class="col-lg-1">
              
              </div>
             </div>
          </div>
</section>
<!-- one repeat section er kaj database insert  sesh -->

<!-- Two section er kaj database insert  -->

<section class="mainContent_section">
       <div class="container">
          <div class="row">
            <div class="col-lg-11 border">
            <?php
                if(isset($_POST['main2'])){
                  $insert ="CREATE TABLE main1_section2_tbl(section_id int AUTO_INCREMENT PRIMARY key,
                    title_text varchar(100),
                    images1 varchar(300),
                    images2 varchar(300),
                    content_text1 varchar(1000),
                    bgcolor varchar(300), 
                    fontsize varchar(300), 
                    fontcolor varchar(300), 
                    imageSize varchar(300),
                    Sub_title1 varchar(300),
                    Sub_title2 varchar(300),
                    content_text2 varchar(1000)
                   )";
                   $run =mysqli_query($con,$insert);
                    $inser ="INSERT INTO main1_section2_tbl (section_id) VALUES('1')";
                    $run = mysqli_query($con,$inser);
                   
                  ?>
                  <?php
                       $seclect = "SELECT * FROM main1_section2_tbl";
                  
                       $run = mysqli_query($con,$seclect);
                  
                       while($rows = mysqli_fetch_array($run)){ ?>

                 <div class="row">
                   <div class="col-lg-8">
                     <form action="" method="POST" enctype="multipart/form-data">
               
                    <div class="row">
                  
                        <h3>Title Text</h3>
                         <input type="text" class="form-control text-center" name="title_text"placeholder="Add titile"value="<?php echo $rows['title_text']?>">
                    
                      <div class="col-lg-6 ">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title1"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title1']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images1">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text1" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text1']?></textarea>
                      </div>
                      <div class="col-lg-6 border">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title2"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title2']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images2">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text2" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text2']?></textarea>
                    </div>
                    </div>
                   </div>
                   <div class="col-lg-4 border">
                   <div class="row">
                      <h4 class="text-center py-1">Cascading Style Sheets (CSS)</h4><hr>
                        <div class="col-lg-4">
                          
                          <div class="form-group">
                              <h6 for="exampleFormControlSelect1">Bg-color</h6>
                              <select name="bgcolor" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['bgcolor']; ?></option>
                              <option>bg-light</option>
                              <option>bg-secondary</option>
                              <option>bg-success</option>
                              <option>bg-danger</option>
                              <option>bg-info</option>
                              <option>bg-dark</option>
                              <option>bg-white</option>
                              <option>Dark_blue</option>
                              
                              </select>
                        </div>
                          
                        </div>
                        <div class="col-lg-4">
                      <div class="form-group">
                        <h6 for="exampleFormControlSelect1">Font-size</h6>
                              <select name="fontsize" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['fontsize']; ?></option>
                              <option>Small-Size</option>
                              <option>Medium-Size</option>
                              <option>Large-Size</option>
                              <option>X-large-Size</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Font-color</h6>
                                <select name="fontcolor" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['fontcolor']; ?></option>
                                <option>Red</option>
                                <option>White</option>
                                <option>Gray</option>
                                <option>Green</option>
                                <option>Blue</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Main-image</h6>
                                <select name="imageSize" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['imageSize']; ?></option>
                                <option>M-Small</option>
                                <option>M-Medium</option>
                                <option>M-Large</option>
                              </select>
                            </div>
                        
                        </div>
                      </div>
                   
                   
                   </div>
                   <div class="buut d-flex">
                      <button class="btn btn-lg btn btn-success mt-3 mr-3 w-50 " name="upbtnmain2"> Update</button> 
                      <button class="btn btn-lg btn btn-danger  mt-3 w-50" name="deletemain2"> Remove</button>
                     
                   </div>
                  </div>
              </form>
                
              <?php
                  }
                
                }
                ?>

 
                <?php
                  if(isset($_POST['upbtnmain2'])){

                      $title_text= $_POST['title_text'];
                      $images1= $_FILES['images1']['name'];
                      $images2= $_FILES['images2']['name'];
                      $content_text1= $_POST['content_text1'];
                      $bgcolor= $_POST['bgcolor'];
                      $fontsize= $_POST['fontsize'];
                      $fontcolor= $_POST['fontcolor'];
                      $imageSize= $_POST['imageSize'];
                      $Sub_title1= $_POST['Sub_title1'];
                      $Sub_title2= $_POST['Sub_title2'];
                      $content_text2= $_POST['content_text2'];

                      $inser ="UPDATE  main1_section2_tbl SET title_text='$title_text',images1='$images1',images2='$images2',content_text1='$content_text1',bgcolor ='$bgcolor',fontsize='$fontsize',fontcolor='$fontcolor',imageSize='$imageSize',Sub_title1='$Sub_title1',Sub_title2='$Sub_title2',content_text2='$content_text2'";
                      $run = mysqli_query($con,$inser);
                   
                      move_uploaded_file($_FILES['images1']['tmp_name'],"content_img/$images1");
                      move_uploaded_file($_FILES['images2']['tmp_name'],"content_img/$images2");
                     
                       if($run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                       }else{
                        echo"Data not update";
                       }
                    
                    }
                   
                    if(isset($_POST['deletemain2'])){
                      
                      $deletee ="TRUNCATE `cms_db1`.`main1_section2_tbl`";
                      $run =mysqli_query($con,$deletee);
                     if( $run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                     }else{
                         echo"deleted not";
                     }
                   }
                   
                   
                ?>
           </div>
              <div class="col-lg-1">
              
              </div>
             </div>
          </div>
</section>
<!-- Two section er kaj database insert  sesh -->

<!-- Two maintwo repeat section er kaj database insert  -->

<section class="mainContent_section">
       <div class="container">
          <div class="row">
            <div class="col-lg-11 border">
            <?php
                if(isset($_POST['main2two'])){
                  $insert ="CREATE TABLE main1_section2rpt_tbl(section_id int AUTO_INCREMENT PRIMARY key,
                    title_text varchar(100),
                    images1 varchar(300),
                    images2 varchar(300),
                    content_text1 varchar(1000),
                    bgcolor varchar(300), 
                    fontsize varchar(300), 
                    fontcolor varchar(300), 
                    imageSize varchar(300),
                    Sub_title1 varchar(300),
                    Sub_title2 varchar(300),
                    content_text2 varchar(1000)
                   )";
                   $run =mysqli_query($con,$insert);
                    $inser ="INSERT INTO main1_section2rpt_tbl (section_id) VALUES('1')";
                    $run = mysqli_query($con,$inser);
                   
                  ?>
                  <?php
                       $seclect = "SELECT * FROM main1_section2rpt_tbl";
                  
                       $run = mysqli_query($con,$seclect);
                  
                       while($rows = mysqli_fetch_array($run)){ ?>

                 <div class="row">
                   <div class="col-lg-8">
                     <form action="" method="POST" enctype="multipart/form-data">
               
                    <div class="row">
                  
                        <h3>Title Text</h3>
                         <input type="text" class="form-control text-center" name="title_text"placeholder="Add titile"value="<?php echo $rows['title_text']?>">
                    
                      <div class="col-lg-6 ">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title1"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title1']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images1">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text1" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text1']?></textarea>
                      </div>
                      <div class="col-lg-6 border">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title2"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title2']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images2">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text2" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text2']?></textarea>
                    </div>
                    </div>
                   </div>
                   <div class="col-lg-4 border">
                   <div class="row">
                      <h4 class="text-center py-1">Cascading Style Sheets (CSS)</h4><hr>
                        <div class="col-lg-4">
                          
                          <div class="form-group">
                              <h6 for="exampleFormControlSelect1">Bg-color</h6>
                              <select name="bgcolor" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['bgcolor']; ?></option>
                              <option>bg-light</option>
                              <option>bg-secondary</option>
                              <option>bg-success</option>
                              <option>bg-danger</option>
                              <option>bg-info</option>
                              <option>bg-dark</option>
                              <option>bg-white</option>
                              </select>
                        </div>
                          
                        </div>
                        <div class="col-lg-4">
                      <div class="form-group">
                        <h6 for="exampleFormControlSelect1">Font-size</h6>
                              <select name="fontsize" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['fontsize']; ?></option>
                              <option>Small</option>
                              <option>Medium</option>
                              <option>Large</option>
                              <option>X-large</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Font-color</h6>
                                <select name="fontcolor" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['fontcolor']; ?></option>
                                <option>Red</option>
                                <option>White</option>
                                <option>Gray</option>
                                <option>Green</option>
                                <option>Blue</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Main-image</h6>
                                <select name="imageSize" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['imageSize']; ?></option>
                                <option>Small</option>
                                <option>Medium</option>
                                <option>Large</option>
                              </select>
                            </div>
                        
                        </div>
                      </div>
                   
                   
                   </div>
                   <div class="buut d-flex">
                      <button class="btn btn-lg btn btn-success mt-3 mr-3 w-50 " name="upbtnmain2rpt"> Update</button> 
                      <button class="btn btn-lg btn btn-danger  mt-3 w-50" name="deletemain2rpt"> Remove</button>
                     
                   </div>
                  </div>
              </form>
                
              <?php
                  }
                
                }
                ?>

 
                <?php
                  if(isset($_POST['upbtnmain2rpt'])){

                      $title_text= $_POST['title_text'];
                      $images1= $_FILES['images1']['name'];
                      $images2= $_FILES['images2']['name'];
                      $content_text1= $_POST['content_text1'];
                      $bgcolor= $_POST['bgcolor'];
                      $fontsize= $_POST['fontsize'];
                      $fontcolor= $_POST['fontcolor'];
                      $imageSize= $_POST['imageSize'];
                      $Sub_title1= $_POST['Sub_title1'];
                      $Sub_title2= $_POST['Sub_title2'];
                      $content_text2= $_POST['content_text2'];

                      $inser ="UPDATE  main1_section2rpt_tbl SET title_text='$title_text',images1='$images1',images2='$images2',content_text1='$content_text1',bgcolor ='$bgcolor',fontsize='$fontsize',fontcolor='$fontcolor',imageSize='$imageSize',Sub_title1='$Sub_title1',Sub_title2='$Sub_title2',content_text2='$content_text2'";
                      $run = mysqli_query($con,$inser);
                   
                      move_uploaded_file($_FILES['images1']['tmp_name'],"content_img/$images1");
                      move_uploaded_file($_FILES['images2']['tmp_name'],"content_img/$images2");
                     
                       if($run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                       }else{
                        echo"Data not update";
                       }
                    
                    }
                   
                    if(isset($_POST['deletemain2rpt'])){
                      
                      $deletee ="TRUNCATE `cms_db1`.`main1_section2rpt_tbl`";
                      $run =mysqli_query($con,$deletee);
                     if( $run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                     }else{
                         echo"deleted not";
                     }
                   }
                   
                   
                ?>
           </div>
              <div class="col-lg-1 ">
              b
              </div>
             </div>
          </div>
</section>
<!-- Two maintwo  section er kaj database insert  sesh -->


<!-- Three section er kaj database insert  -->

<section class="mainContent_section">
       <div class="container">
          <div class="row">
            <div class="col-lg-11 border">
            <?php
                if(isset($_POST['main3'])){
                  $insert ="CREATE TABLE main1_section3_tbl(section_id int AUTO_INCREMENT PRIMARY key,
                    title_text varchar(100),
                    images1 varchar(300),
                    images2 varchar(300),
                    images3 varchar(300),
                    content_text1 varchar(1000),
                    bgcolor varchar(300), 
                    fontsize varchar(300), 
                    fontcolor varchar(300), 
                    imageSize varchar(300),
                    Sub_title1 varchar(300),
                    Sub_title2 varchar(300),
                    Sub_title3 varchar(300),
                    content_text2 varchar(1000),
                    content_text3 varchar(1000)
                   )";
                   $run =mysqli_query($con,$insert);
                    $inser ="INSERT INTO main1_section3_tbl (section_id) VALUES('1')";
                    $run = mysqli_query($con,$inser);
                   
                  ?>
                  <?php
                       $seclect = "SELECT * FROM main1_section3_tbl";
                  
                       $run = mysqli_query($con,$seclect);
                  
                       while($rows = mysqli_fetch_array($run)){ ?>

                 <div class="row">
                   <div class="col-lg-8">
                     <form action="" method="POST" enctype="multipart/form-data">
               
                    <div class="row">
                  
                        <h3>Title Text</h3>
                         <input type="text" class="form-control text-center" name="title_text"placeholder="Add titile"value="<?php echo $rows['title_text']?>">
                    
                      <div class="col-lg-4 ">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title1"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title1']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images1">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text1" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text1']?></textarea>
                      </div>
                      <div class="col-lg-4 border">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title2"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title2']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images2">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text2" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text2']?></textarea>
                    </div>
                    <div class="col-lg-4 border">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title3"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title3']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images3">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text3" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text3']?></textarea>
                    </div>
                    </div>
                   </div>
                   <div class="col-lg-4 border">
                   <div class="row">
                      <h4 class="text-center py-1">Cascading Style Sheets (CSS)</h4><hr>
                        <div class="col-lg-4">
                          
                          <div class="form-group">
                              <h6 for="exampleFormControlSelect1">Bg-color</h6>
                              <select name="bgcolor" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['bgcolor']; ?></option>
                              <option>bg-light</option>
                              <option>bg-secondary</option>
                              <option>bg-success</option>
                              <option>bg-danger</option>
                              <option>bg-info</option>
                              <option>bg-dark</option>
                              <option>bg-white</option>
                              </select>
                        </div>
                          
                        </div>
                        <div class="col-lg-4">
                      <div class="form-group">
                        <h6 for="exampleFormControlSelect1">Font-size</h6>
                              <select name="fontsize" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['fontsize']; ?></option>
                              <option>Small-Size</option>
                              <option>Medium-Size</option>
                              <option>Large-Size</option>
                              <option>X-large-Size</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Font-color</h6>
                                <select name="fontcolor" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['fontcolor']; ?></option>
                                <option>Red</option>
                                <option>White</option>
                                <option>Gray</option>
                                <option>Green</option>
                                <option>Blue</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Image-Size</h6>
                                <select name="imageSize" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['imageSize']; ?></option>
                                <option>Small</option>
                                <option>Medium</option>
                                <option>Large</option>
                              </select>
                            </div>
                        
                        </div>
                      </div>
                   
                   
                   </div>
                   <div class="buut d-flex">
                      <button class="btn btn-lg btn btn-success mt-3 mr-3 w-50 " name="upbtnmain3"> Update</button> 
                      <button class="btn btn-lg btn btn-danger  mt-3 w-50" name="deletemain3"> Remove</button>
                     
                   </div>
                  </div>
              </form>
                
              <?php
                  }
                
                }
                ?>

 
                <?php
                  if(isset($_POST['upbtnmain3'])){

                      $title_text= $_POST['title_text'];
                      $images1= $_FILES['images1']['name'];
                      $images2= $_FILES['images2']['name'];
                      $images3= $_FILES['images3']['name'];
                      $content_text1= $_POST['content_text1'];
                      $bgcolor= $_POST['bgcolor'];
                      $fontsize= $_POST['fontsize'];
                      $fontcolor= $_POST['fontcolor'];
                      $imageSize= $_POST['imageSize'];
                      $Sub_title1= $_POST['Sub_title1'];
                      $Sub_title2= $_POST['Sub_title2'];
                      $Sub_title3= $_POST['Sub_title3'];
                      $content_text2= $_POST['content_text2'];
                      $content_text3= $_POST['content_text3'];

                      $inser ="UPDATE  main1_section3_tbl SET title_text='$title_text',images1='$images1',images2='$images2',images3='$images3',content_text1='$content_text1',bgcolor ='$bgcolor',fontsize='$fontsize',fontcolor='$fontcolor',imageSize='$imageSize',Sub_title1='$Sub_title1',Sub_title2='$Sub_title2',Sub_title3='$Sub_title3',content_text2='$content_text2',content_text3='$content_text3'";
                      $run = mysqli_query($con,$inser);
                   
                      move_uploaded_file($_FILES['images1']['tmp_name'],"content_img/$images1");
                      move_uploaded_file($_FILES['images2']['tmp_name'],"content_img/$images2");
                      move_uploaded_file($_FILES['images3']['tmp_name'],"content_img/$images3");
                     
                       if($run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                       }else{
                        echo"Data not update";
                       }
                    
                    }
                   
                    if(isset($_POST['deletemain3'])){
                      
                      $deletee ="TRUNCATE `cms_db1`.`main1_section3_tbl`";
                      $run =mysqli_query($con,$deletee);
                     if( $run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                     }else{
                         echo"deleted not";
                     }
                   }
                   
                   
                ?>
           </div>
            
             </div>
          </div>
</section>
<!-- three section er kaj database insert  sesh -->
<!-- three repeat section er kaj database insert  soro start -->

<section class="mainContent_section">
       <div class="container">
          <div class="row">
            <div class="col-lg-11 border">
            <?php
                if(isset($_POST['main3Repet'])){
                  $insert ="CREATE TABLE main1_section3rpt_tbl(section_id int AUTO_INCREMENT PRIMARY key,
                    title_text varchar(100),
                    images1 varchar(300),
                    images2 varchar(300),
                    images3 varchar(300),
                    content_text1 varchar(1000),
                    bgcolor varchar(300), 
                    fontsize varchar(300), 
                    fontcolor varchar(300), 
                    imageSize varchar(300),
                    Sub_title1 varchar(300),
                    Sub_title2 varchar(300),
                    Sub_title3 varchar(300),
                    content_text2 varchar(1000),
                    content_text3 varchar(1000)
                   )";
                   $run =mysqli_query($con,$insert);
                    $inser ="INSERT INTO main1_section3rpt_tbl (section_id) VALUES('1')";
                    $run = mysqli_query($con,$inser);
                   
                  ?>
                  <?php
                       $seclect = "SELECT * FROM main1_section3rpt_tbl";
                  
                       $run = mysqli_query($con,$seclect);
                  
                       while($rows = mysqli_fetch_array($run)){ ?>

                 <div class="row">
                   <div class="col-lg-8">
                     <form action="" method="POST" enctype="multipart/form-data">
               
                    <div class="row">
                  
                        <h3>Title Text</h3>
                         <input type="text" class="form-control text-center" name="title_text"placeholder="Add titile"value="<?php echo $rows['title_text']?>">
                    
                      <div class="col-lg-4 ">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title1"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title1']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images1">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text1" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text1']?></textarea>
                      </div>
                      <div class="col-lg-4 border">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title2"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title2']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images2">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text2" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text2']?></textarea>
                    </div>
                    <div class="col-lg-4 border">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title3"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title3']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images3">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text3" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text3']?></textarea>
                    </div>
                    </div>
                   </div>
                   <div class="col-lg-4 border">
                   <div class="row">
                      <h4 class="text-center py-1">Cascading Style Sheets (CSS)</h4><hr>
                        <div class="col-lg-4">
                          
                          <div class="form-group">
                              <h6 for="exampleFormControlSelect1">Bg-color</h6>
                              <select name="bgcolor" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['bgcolor']; ?></option>
                              <option>bg-light</option>
                              <option>bg-secondary</option>
                              <option>bg-success</option>
                              <option>bg-danger</option>
                              <option>bg-info</option>
                              <option>bg-dark</option>
                              <option>bg-white</option>
                              </select>
                        </div>
                          
                        </div>
                        <div class="col-lg-4">
                      <div class="form-group">
                        <h6 for="exampleFormControlSelect1">Font-size</h6>
                              <select name="fontsize" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['fontsize']; ?></option>
                              <option>Small-Size</option>
                              <option>Medium-Size</option>
                              <option>Large-Size</option>
                              <option>X-large-Size</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Font-color</h6>
                                <select name="fontcolor" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['fontcolor']; ?></option>
                                <option>Red</option>
                                <option>White</option>
                                <option>Gray</option>
                                <option>Green</option>
                                <option>Blue</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Main-image</h6>
                                <select name="imageSize" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['imageSize']; ?></option>
                                <option>Small</option>
                                <option>Medium</option>
                                <option>Large</option>
                              </select>
                            </div>
                        
                        </div>
                      </div>
                   
                   
                   </div>
                   <div class="buut d-flex">
                      <button class="btn btn-lg btn btn-success mt-3 mr-3 w-50 " name="upbtnmain3rpt"> Update</button> 
                      <button class="btn btn-lg btn btn-danger  mt-3 w-50" name="deletemain3rpt"> Remove</button>
                     
                   </div>
                  </div>
              </form>
                
              <?php
                  }
                
                }
                ?>

 
                <?php
                  if(isset($_POST['upbtnmain3rpt'])){

                      $title_text= $_POST['title_text'];
                      $images1= $_FILES['images1']['name'];
                      $images2= $_FILES['images2']['name'];
                      $images3= $_FILES['images3']['name'];
                      $content_text1= $_POST['content_text1'];
                      $bgcolor= $_POST['bgcolor'];
                      $fontsize= $_POST['fontsize'];
                      $fontcolor= $_POST['fontcolor'];
                      $imageSize= $_POST['imageSize'];
                      $Sub_title1= $_POST['Sub_title1'];
                      $Sub_title2= $_POST['Sub_title2'];
                      $Sub_title3= $_POST['Sub_title3'];
                      $content_text2= $_POST['content_text2'];
                      $content_text3= $_POST['content_text3'];

                      $inser ="UPDATE  main1_section3rpt_tbl SET title_text='$title_text',images1='$images1',images2='$images2',images3='$images3',content_text1='$content_text1',bgcolor ='$bgcolor',fontsize='$fontsize',fontcolor='$fontcolor',imageSize='$imageSize',Sub_title1='$Sub_title1',Sub_title2='$Sub_title2',Sub_title3='$Sub_title3',content_text2='$content_text2',content_text3='$content_text3'";
                      $run = mysqli_query($con,$inser);
                   
                      move_uploaded_file($_FILES['images1']['tmp_name'],"content_img/$images1");
                      move_uploaded_file($_FILES['images2']['tmp_name'],"content_img/$images2");
                      move_uploaded_file($_FILES['images3']['tmp_name'],"content_img/$images3");
                     
                       if($run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                       }else{
                        echo"Data not update";
                       }
                    
                    }
                   
                    if(isset($_POST['deletemain3rpt'])){
                      
                      $deletee ="TRUNCATE `cms_db1`.`main1_section3rpt_tbl`";
                      $run =mysqli_query($con,$deletee);
                     if( $run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                     }else{
                         echo"deleted not";
                     }
                   }
                   
                   
                ?>
           </div>
            
             </div>
          </div>
</section>
<!-- three repeat section er kaj database insert  End -->
<!-- three section er kaj database insert  sesh -->


<!-- Three double section er kaj database insert  -->

<section class="mainContent_section">
       <div class="container">
          <div class="row">
            <div class="col-lg-11 border">
         <?php
                if(isset($_POST['main3double'])){
                  $insert ="CREATE TABLE main1_section3dbl_tbl(section_id int AUTO_INCREMENT PRIMARY key,
                    title_text varchar(100),
                    images1 varchar(300),
                    images2 varchar(300),
                    images3 varchar(300),
                    content_text1 varchar(1000),
                    bgcolor varchar(300), 
                    fontsize varchar(300), 
                    fontcolor varchar(300), 
                    imageSize varchar(300),
                    Sub_title1 varchar(300),
                    Sub_title2 varchar(300),
                    Sub_title3 varchar(300),
                    content_text2 varchar(1000),
                    content_text3 varchar(1000),
                    images1dbl varchar(300),
                    images2dbl varchar(300),
                    images3dbl varchar(300),
                    content_text1dbl varchar(1000),
                    Sub_title1dbl varchar(300),
                    Sub_title2dbl varchar(300),
                    Sub_title3dbl varchar(300),
                    content_text2dbl varchar(1000),
                    content_text3dbl varchar(1000)
        
                   )";
                   $run =mysqli_query($con,$insert);
                    $inser ="INSERT INTO main1_section3dbl_tbl(section_id) VALUES('1')";
                    $run = mysqli_query($con,$inser);
                   
                  ?>
                  <?php
                       $seclect = "SELECT * FROM main1_section3dbl_tbl";
                  
                       $run = mysqli_query($con,$seclect);
                  
                       while($rows = mysqli_fetch_array($run)){ ?>
                       <div class="row">
                         <div class="col-lg-9">
                         <form action="" method="POST" enctype="multipart/form-data">
                         <div class="row">
                  
                              <h3>Title Text</h3>
                              <input type="text" class="form-control text-center" name="title_text"placeholder="Add titile"value="<?php echo $rows['title_text']?>">
                          
                            <div class="col-lg-4 border ">
                            <h6> Sub Title Text</h6>
                            <input type="text" class="form-control text-center" name="Sub_title1"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title1']?>">
                              <br> <h6>Image optional</h6>
                                <input type="file" name="images1">
                                <h6>Add content text</h6>
                                <textarea  id="service" name="content_text1" class="form-control" rows="3"placeholder="Add content Text" ><?php echo $rows['content_text1']?></textarea>
                            </div>
                            <div class="col-lg-4 border">
                            <h6> Sub Title Text</h6>
                            <input type="text" class="form-control text-center" name="Sub_title2"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title2']?>">
                              <br> <h6>Image optional</h6>
                                <input type="file" name="images2">
                                <h6>Add content text</h6>
                                <textarea  id="service" name="content_text2" class="form-control" rows="3"placeholder="Add content Text" ><?php echo $rows['content_text2']?></textarea>
                          </div>
                          <div class="col-lg-4 border">
                            <h6> Sub Title Text</h6>
                            <input type="text" class="form-control text-center" name="Sub_title3"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title3']?>">
                              <br> <h6>Image optional</h6>
                                <input type="file" name="images3">
                                <h6>Add content text</h6>
                                <textarea  id="service" name="content_text3" class="form-control" rows="3"placeholder="Add content Text" ><?php echo $rows['content_text3']?></textarea>
                             </div>
                             <div class="col-lg-4 border py-3">
                            <h6> Sub Title Text</h6>
                            <input type="text" class="form-control text-center" name="Sub_title1dbl"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title1dbl']?>">
                              <br> <h6>Image optional</h6>
                                <input type="file" name="images1dbl">
                                <h6>Add content text</h6>
                                <textarea  id="service" name="content_text1dbl" class="form-control" rows="3"placeholder="Add content Text" ><?php echo $rows['content_text1dbl']?></textarea>
                            </div>
                            <div class="col-lg-4 border py-3">
                            <h6> Sub Title Text</h6>
                            <input type="text" class="form-control text-center" name="Sub_title2dbl"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title2dbl']?>">
                              <br> <h6>Image optional</h6>
                                <input type="file" name="images2dbl">
                                <h6>Add content text</h6>
                                <textarea  id="service" name="content_text2dbl" class="form-control" rows="3"placeholder="Add content Text" ><?php echo $rows['content_text2dbl']?></textarea>
                          </div>
                          <div class="col-lg-4 border py-3">
                            <h6> Sub Title Text</h6>
                            <input type="text" class="form-control text-center" name="Sub_title3dbl"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title3dbl']?>">
                              <br> <h6>Image optional</h6>
                                <input type="file" name="images3dbl">
                                <h6>Add content text</h6>
                                <textarea  id="service" name="content_text3dbl" class="form-control" rows="3"placeholder="Add content Text" ><?php echo $rows['content_text3dbl']?></textarea>
                             </div>
                          </div>
                         </div>
                        
                         <div class="col-lg-3"><div class="row">
                      <h4 class="text-center py-1">Cascading Style Sheets (CSS)</h4><hr>
                        <div class="col-lg-4">
                          
                          <div class="form-group">
                              <h6 for="exampleFormControlSelect1">Bg-color</h6>
                              <select name="bgcolor" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['bgcolor']; ?></option>
                              <option>bg-light</option>
                              <option>bg-secondary</option>
                              <option>bg-success</option>
                              <option>bg-danger</option>
                              <option>bg-info</option>
                              <option>bg-dark</option>
                              <option>bg-white</option>
                              </select>
                        </div>
                          
                        </div>
                        <div class="col-lg-4">
                      <div class="form-group">
                        <h6 for="exampleFormControlSelect1">Font-size</h6>
                              <select name="fontsize" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['fontsize']; ?></option>
                              <option>Small</option>
                              <option>Medium</option>
                              <option>Large</option>
                              <option>X-large</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Font-color</h6>
                                <select name="fontcolor" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['fontcolor']; ?></option>
                                <option>Red</option>
                                <option>White</option>
                                <option>Gray</option>
                                <option>Green</option>
                                <option>Blue</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Main-image</h6>
                                <select name="imageSize" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['imageSize']; ?></option>
                                <option>Small</option>
                                <option>Medium</option>
                                <option>Large</option>
                              </select>
                            </div>
                        
                        </div>
                      </div>
                      </div>
                  </div>
                  <div class="buut d-flex">
                      <button class="btn btn-lg btn btn-success mt-3 mr-3 w-50 " name="upbtnmain3dbl"> Update</button> 
                      <button class="btn btn-lg btn btn-danger  mt-3 w-50" name="deletemain3dbl"> Remove</button>
                     
                   </div>
            </div>
            <?php
            } 
           }
            ?>

<?php
                  if(isset($_POST['upbtnmain3dbl'])){

                      $title_text= $_POST['title_text'];
                      $images1= $_FILES['images1']['name'];
                      $images2= $_FILES['images2']['name'];
                      $images3= $_FILES['images3']['name'];
                      $content_text1= $_POST['content_text1'];
                      $bgcolor= $_POST['bgcolor'];
                      $fontsize= $_POST['fontsize'];
                      $fontcolor= $_POST['fontcolor'];
                      $imageSize= $_POST['imageSize'];
                      $Sub_title1= $_POST['Sub_title1'];
                      $Sub_title2= $_POST['Sub_title2'];
                      $Sub_title3= $_POST['Sub_title3'];
                      $content_text2= $_POST['content_text2'];
                      $content_text3= $_POST['content_text3'];

                      $images1dbl= $_FILES['images1dbl']['name'];
                      $images2dbl= $_FILES['images2dbl']['name'];
                      $images3dbl= $_FILES['images3dbl']['name'];
                      $content_text1dbl= $_POST['content_text1dbl'];
                    
                      $Sub_title1dbl= $_POST['Sub_title1dbl'];
                      $Sub_title2dbl= $_POST['Sub_title2dbl'];
                      $Sub_title3dbl= $_POST['Sub_title3dbl'];
                      $content_text2dbl= $_POST['content_text2dbl'];
                      $content_text3dbl= $_POST['content_text3dbl'];

                      $inser ="UPDATE  main1_section3dbl_tbl SET title_text='$title_text',images1='$images1',images2='$images2',images3='$images3',content_text1='$content_text1',bgcolor ='$bgcolor',fontsize='$fontsize',fontcolor='$fontcolor',imageSize='$imageSize',Sub_title1='$Sub_title1',Sub_title2='$Sub_title2',Sub_title3='$Sub_title3',content_text2='$content_text2',content_text3='$content_text3',images1dbl='$images1dbl',images2dbl='$images2dbl',images3dbl='$images3dbl',content_text1dbl='$content_text1dbl',Sub_title1dbl='$Sub_title1dbl',Sub_title2dbl='$Sub_title2dbl',Sub_title3dbl='$Sub_title3dbl',content_text2dbl='$content_text2dbl',content_text3dbl='$content_text3dbl'";
                      $run = mysqli_query($con,$inser);
                   
                      move_uploaded_file($_FILES['images1']['tmp_name'],"content_img/$images1");
                      move_uploaded_file($_FILES['images2']['tmp_name'],"content_img/$images2");
                      move_uploaded_file($_FILES['images3']['tmp_name'],"content_img/$images3");
                      move_uploaded_file($_FILES['images1dbl']['tmp_name'],"content_img/$images1dbl");
                      move_uploaded_file($_FILES['images2dbl']['tmp_name'],"content_img/$images2dbl");
                      move_uploaded_file($_FILES['images3dbl']['tmp_name'],"content_img/$images3dbl");
                     
                       if($run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                       }else{
                        echo"Data not update";
                       }
                    
                    }
                   
                    if(isset($_POST['deletemain3dbl'])){
                      
                      $deletee ="TRUNCATE `cms_db1`.`main1_section3dbl_tbl`";
                      $run =mysqli_query($con,$deletee);
                     if( $run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                     }else{
                         echo"deleted not";
                     }
                   }
                   
                   
                ?>
                </div>
            <div class="col-lg-1 border">
            b
            </div>
       </div>
  
 </section>
     <!-- Three double section er kaj database Sesh  -->


      <!-- Four  section er kaj database Start  -->
    <section class="mainContent_section">
       <div class="container">
          <div class="row">
            <div class="col-lg-11 border">

            <?php
                if(isset($_POST['main4'])){
                  $insert ="CREATE TABLE main1_section4_tbl(section_id int AUTO_INCREMENT PRIMARY key,
                    title_text varchar(100),
                    images1 varchar(300),
                    images2 varchar(300),
                    images3 varchar(300),
                    images4 varchar(300),
                    content_text1 varchar(1000),
                    bgcolor varchar(300), 
                    fontsize varchar(300), 
                    fontcolor varchar(300), 
                    imageSize varchar(300),
                    Sub_title1 varchar(300),
                    Sub_title2 varchar(300),
                    Sub_title3 varchar(300),
                    Sub_title4 varchar(300),
                    content_text2 varchar(1000),
                    content_text3 varchar(1000),
                    content_text4 varchar(1000)
                   )";
                   $run =mysqli_query($con,$insert);
                    $inser ="INSERT INTO main1_section4_tbl(section_id) VALUES('1')";
                    $run = mysqli_query($con,$inser);
                   
                  ?>
            
            <?php
                       $seclect = "SELECT * FROM main1_section4_tbl";
                  
                       $run = mysqli_query($con,$seclect);
                  
                       while($rows = mysqli_fetch_array($run)){ ?>

                 <div class="row">
                   <div class="col-lg-10">
                     <form action="" method="POST" enctype="multipart/form-data">
               
                    <div class="row">
                  
                        <h3>Title Text</h3>
                         <input type="text" class="form-control text-center" name="title_text"placeholder="Add titile"value="<?php echo $rows['title_text']?>">
                    
                      <div class="col-lg-3 ">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title1"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title1']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images1">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text1" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text1']?></textarea>
                      </div>
                      <div class="col-lg-3 border">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title2"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title2']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images2">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text2" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text2']?></textarea>
                    </div>
                    <div class="col-lg-3 border">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title3"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title3']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images3">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text3" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text3']?></textarea>
                    </div>
                    <div class="col-lg-3 border">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title4"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title4']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images4">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text4" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text4']?></textarea>
                    </div>
                    </div>
                   </div>
                   <div class="col-lg-2 border">
                   <div class="row">
                      <h4 class="text-center py-1">Cascading Style Sheets (CSS)</h4><hr>
                        <div class="col-lg-12">
                          
                          <div class="form-group">
                              <h6 for="exampleFormControlSelect1">Bg-color</h6>
                              <select name="bgcolor" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['bgcolor']; ?></option>
                              <option>bg-light</option>
                              <option>bg-secondary</option>
                              <option>bg-success</option>
                              <option>bg-danger</option>
                              <option>bg-info</option>
                              <option>bg-dark</option>
                              <option>bg-white</option>
                              </select>
                        </div>
                          
                        </div>
                        <div class="col-lg-12">
                      <div class="form-group">
                        <h6 for="exampleFormControlSelect1">Font-size</h6>
                              <select name="fontsize" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['fontsize']; ?></option>
                              <option>Small</option>
                              <option>Medium</option>
                              <option>Large</option>
                              <option>X-large</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Font-color</h6>
                                <select name="fontcolor" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['fontcolor']; ?></option>
                                <option>Red</option>
                                <option>White</option>
                                <option>Gray</option>
                                <option>Green</option>
                                <option>Blue</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Main-image</h6>
                                <select name="imageSize" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['imageSize']; ?></option>
                                <option>Small</option>
                                <option>Medium</option>
                                <option>Large</option>
                              </select>
                            </div>
                        
                        </div>
                      </div>
                   
                   
                   </div>
                   <div class="buut d-flex">
                      <button class="btn btn-lg btn btn-success mt-3 mr-3 w-50 " name="upbtnmain4"> Update</button> 
                      <button class="btn btn-lg btn btn-danger  mt-3 w-50" name="deletemain4"> Remove</button>
                     
                   </div>
                  </div>
              </form>
                
              <?php
                  }
                
                }
                ?>

 
                <?php
                  if(isset($_POST['upbtnmain4'])){

                      $title_text= $_POST['title_text'];
                      $images1= $_FILES['images1']['name'];
                      $images2= $_FILES['images2']['name'];
                      $images3= $_FILES['images3']['name'];
                      $images4= $_FILES['images4']['name'];
                      $content_text1= $_POST['content_text1'];
                      $bgcolor= $_POST['bgcolor'];
                      $fontsize= $_POST['fontsize'];
                      $fontcolor= $_POST['fontcolor'];
                      $imageSize= $_POST['imageSize'];
                      $Sub_title1= $_POST['Sub_title1'];
                      $Sub_title2= $_POST['Sub_title2'];
                      $Sub_title3= $_POST['Sub_title3'];
                      $Sub_title4= $_POST['Sub_title4'];
                      $content_text2= $_POST['content_text2'];
                      $content_text3= $_POST['content_text3'];
                      $content_text4= $_POST['content_text4'];

                      $inser ="UPDATE  main1_section4_tbl SET title_text='$title_text',images1='$images1',images2='$images2',images3='$images3',images4='$images4',content_text1='$content_text1',bgcolor ='$bgcolor',fontsize='$fontsize',fontcolor='$fontcolor',imageSize='$imageSize',Sub_title1='$Sub_title1',Sub_title2='$Sub_title2',Sub_title3='$Sub_title3',Sub_title4='$Sub_title4',content_text2='$content_text2',content_text3='$content_text3',content_text4='$content_text4'";
                      $run = mysqli_query($con,$inser);
                      move_uploaded_file($_FILES['images1']['tmp_name'],"content_img/$images1");
                      move_uploaded_file($_FILES['images2']['tmp_name'],"content_img/$images2");
                      move_uploaded_file($_FILES['images3']['tmp_name'],"content_img/$images3");
                      move_uploaded_file($_FILES['images4']['tmp_name'],"content_img/$images4");
                     
                       if($run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                       }else{
                        echo"Data not update";
                       }
                    
                    }
                   
                    if(isset($_POST['deletemain4'])){
                      
                      $deletee ="TRUNCATE `cms_db1`.`main1_section4_tbl`";
                      $run =mysqli_query($con,$deletee);
                     if( $run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                     }else{
                         echo"deleted not";
                     }
                   }
                   
                   
                ?>

            </div>
            <div class="col-lg-1 border"></div>
           </div>
         </div>
    </section>

      <!-- four section er kaj database End  -->

   <!-- Four double  section er kaj database Start  -->
   <section class="mainContent_section">
       <div class="container">
          <div class="row">
            <div class="col-lg-11 border">

            <?php
                if(isset($_POST['main4double'])){
                  $insert ="CREATE TABLE main1_section4dbl_tbl(section_id int AUTO_INCREMENT PRIMARY key,
                    title_text varchar(100),
                    images1 varchar(300),
                    images2 varchar(300),
                    images3 varchar(300),
                    images4 varchar(300),
                    images5 varchar(300),
                    images6 varchar(300),
                    images7 varchar(300),
                    images8 varchar(300),
                    content_text1 varchar(1000),
                    bgcolor varchar(300), 
                    fontsize varchar(300), 
                    fontcolor varchar(300), 
                    imageSize varchar(300),
                    Sub_title1 varchar(300),
                    Sub_title2 varchar(300),
                    Sub_title3 varchar(300),
                    Sub_title4 varchar(300),
                    Sub_title5 varchar(300),
                    Sub_title6 varchar(300),
                    Sub_title7 varchar(300),
                    Sub_title8 varchar(300),
                    content_text2 varchar(1000),
                    content_text3 varchar(1000),
                    content_text4 varchar(1000),
                    content_text5 varchar(1000),
                    content_text6 varchar(1000),
                    content_text7 varchar(1000),
                    content_text8 varchar(1000)
                   )";
                   $run =mysqli_query($con,$insert);
                    $inser ="INSERT INTO main1_section4dbl_tbl(section_id) VALUES('1')";
                    $run = mysqli_query($con,$inser);
                   
                  ?>
            
            <?php
                       $seclect = "SELECT * FROM main1_section4dbl_tbl";
                  
                       $run = mysqli_query($con,$seclect);
                  
                       while($rows = mysqli_fetch_array($run)){ ?>

                 <div class="row">
                   <div class="col-lg-10">
                     <form action="" method="POST" enctype="multipart/form-data">
               
                    <div class="row">
                  
                        <h3>Title Text</h3>
                         <input type="text" class="form-control text-center" name="title_text"placeholder="Add titile"value="<?php echo $rows['title_text']?>">
                    
                      <div class="col-lg-3 ">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title1"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title1']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images1">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text1" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text1']?></textarea>
                      </div>
                      <div class="col-lg-3 border">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title2"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title2']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images2">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text2" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text2']?></textarea>
                    </div>
                    <div class="col-lg-3 border">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title3"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title3']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images3">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text3" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text3']?></textarea>
                    </div>
                    <div class="col-lg-3 border">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title4"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title4']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images4">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text4" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text4']?></textarea>
                    </div>

                    <div class="col-lg-3 border my-3">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title5"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title5']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images5">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text5" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text5']?></textarea>
                    </div>

                    <div class="col-lg-3 border  my-3">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title6"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title6']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images6">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text6" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text6']?></textarea>
                    </div>
                    <div class="col-lg-3 border  my-3">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title7"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title7']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images7">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text7" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text7']?></textarea>
                    </div>
                    <div class="col-lg-3 border  my-3">
                      <h6> Sub Title Text</h6>
                      <input type="text" class="form-control text-center" name="Sub_title8"placeholder="Add Sub titile"value="<?php echo $rows['Sub_title8']?>">
                        <br> <h6>Image optional</h6>
                          <input type="file" name="images8">
                          <h6>Add content text</h6>
                          <textarea  id="service" name="content_text8" class="form-control" rows="5"placeholder="Add content Text" ><?php echo $rows['content_text8']?></textarea>
                    </div>
                    </div>
                   </div>
                   <div class="col-lg-2 border  my-3">
                   <div class="row">
                      <h4 class="text-center py-1">Cascading Style Sheets (CSS)</h4><hr>
                        <div class="col-lg-12">
                          
                          <div class="form-group">
                              <h6 for="exampleFormControlSelect1">Bg-color</h6>
                              <select name="bgcolor" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['bgcolor']; ?></option>
                              <option>bg-light</option>
                              <option>bg-secondary</option>
                              <option>bg-success</option>
                              <option>bg-danger</option>
                              <option>bg-info</option>
                              <option>bg-dark</option>
                              <option>bg-white</option>
                              </select>
                        </div>
                          
                        </div>
                        <div class="col-lg-12">
                      <div class="form-group">
                        <h6 for="exampleFormControlSelect1">Font-size</h6>
                              <select name="fontsize" class="form-control" id="exampleFormControlSelect1">
                              <option><?php echo $rows['fontsize']; ?></option>
                              <option>Small-Size</option>
                              <option>Medium-Size</option>
                              <option>Large-Size</option>
                              <option>X-large-Size</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Font-color</h6>
                                <select name="fontcolor" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['fontcolor']; ?></option>
                                <option>Red</option>
                                <option>White</option>
                                <option>Gray</option>
                                <option>Green</option>
                                <option>Blue</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="form-group">
                                <h6 for="exampleFormControlSelect1">Main-image</h6>
                                <select name="imageSize" class="form-control" id="exampleFormControlSelect1">
                                <option><?php echo $rows['imageSize']; ?></option>
                                <option>Small</option>
                                <option>Medium</option>
                                <option>Large</option>
                              </select>
                            </div>
                        
                        </div>
                      </div>
                   
                   
                   </div>
                   <div class="buut d-flex">
                      <button class="btn btn-lg btn btn-success mt-3 mr-3 w-50 " name="upbtnmain4dbl"> Update</button> 
                      <button class="btn btn-lg btn btn-danger  mt-3 w-50" name="deletemain4dbl"> Remove</button>
                     
                   </div>
                  </div>
              </form>
                
              <?php
                  }
                
                }
                ?>

 
                <?php
                  if(isset($_POST['upbtnmain4dbl'])){

                      $title_text= $_POST['title_text'];
                      $images1= $_FILES['images1']['name'];
                      $images2= $_FILES['images2']['name'];
                      $images3= $_FILES['images3']['name'];
                      $images4= $_FILES['images4']['name'];
                      $images5= $_FILES['images5']['name'];
                      $images6= $_FILES['images6']['name'];
                      $images7= $_FILES['images7']['name'];
                      $images8= $_FILES['images8']['name'];
                      $content_text1= $_POST['content_text1'];
                      $bgcolor= $_POST['bgcolor'];
                      $fontsize= $_POST['fontsize'];
                      $fontcolor= $_POST['fontcolor'];
                      $imageSize= $_POST['imageSize'];
                      $Sub_title1= $_POST['Sub_title1'];
                      $Sub_title2= $_POST['Sub_title2'];
                      $Sub_title3= $_POST['Sub_title3'];
                      $Sub_title4= $_POST['Sub_title4'];
                      $Sub_title5= $_POST['Sub_title5'];
                      $Sub_title6= $_POST['Sub_title6'];
                      $Sub_title7= $_POST['Sub_title7'];
                      $Sub_title8= $_POST['Sub_title8'];
                      $content_text2= $_POST['content_text2'];
                      $content_text3= $_POST['content_text3'];
                      $content_text4= $_POST['content_text4'];
                      $content_text5= $_POST['content_text5'];
                      $content_text6= $_POST['content_text6'];
                      $content_text7= $_POST['content_text7'];
                      $content_text8= $_POST['content_text8'];

                      $inser ="UPDATE  main1_section4dbl_tbl SET title_text='$title_text',images1='$images1',images2='$images2',images3='$images3',images4='$images4',images5='$images5',images6='$images6',images7='$images7',images8='$images8',content_text1='$content_text1',bgcolor ='$bgcolor',fontsize='$fontsize',fontcolor='$fontcolor',imageSize='$imageSize',Sub_title1='$Sub_title1',Sub_title2='$Sub_title2',Sub_title3='$Sub_title3',Sub_title4='$Sub_title4',Sub_title5='$Sub_title5',Sub_title6='$Sub_title6',Sub_title7='$Sub_title7',Sub_title8='$Sub_title8',content_text2='$content_text2',content_text3='$content_text3',content_text4='$content_text4',content_text5='$content_text5',content_text6='$content_text6',content_text7='$content_text7',content_text8='$content_text8'";
                      $run = mysqli_query($con,$inser);
                      move_uploaded_file($_FILES['images1']['tmp_name'],"content_img/$images1");
                      move_uploaded_file($_FILES['images2']['tmp_name'],"content_img/$images2");
                      move_uploaded_file($_FILES['images3']['tmp_name'],"content_img/$images3");
                      move_uploaded_file($_FILES['images4']['tmp_name'],"content_img/$images4");
                      move_uploaded_file($_FILES['images5']['tmp_name'],"content_img/$images5");
                      move_uploaded_file($_FILES['images6']['tmp_name'],"content_img/$images6");
                      move_uploaded_file($_FILES['images7']['tmp_name'],"content_img/$images7");
                      move_uploaded_file($_FILES['images8']['tmp_name'],"content_img/$images8");
                     
                       if($run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                       }else{
                        echo"Data not update";
                       }
                    
                    }
                   
                    if(isset($_POST['deletemain4dbl'])){
                      
                      $deletee ="TRUNCATE `cms_db1`.`main1_section4dbl_tbl`";
                      $run =mysqli_query($con,$deletee);
                     if( $run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                     }else{
                         echo"deleted not";
                     }
                   }
                   
                   
                ?>

            </div>
            <div class="col-lg-1 border"></div>
           </div>
         </div>
    </section>

      <!-- four section er kaj database End  -->



<!-- input form er kaj soro start -->


<section class="mainContent_section">
       <div class="container">
          <div class="row">
            <div class="col-lg-11 border">
               <?php
              if(isset($_POST['input_form'])){

             $insert ="CREATE TABLE form_control_tbl(form_id int AUTO_INCREMENT PRIMARY key,
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
                   $inser ="INSERT INTO form_control_tbl(form_id) VALUES('1')";
                   $run = mysqli_query($con,$inser);
                  ?>
                  <?php
                       $seclect = "SELECT * FROM form_control_tbl";
                  
                       $run = mysqli_query($con,$seclect);
                  
                       while($rows = mysqli_fetch_array($run)){ ?>


                   <h2 class="text-center bg-dark py-1" style="color:white;font-weight:bold;">Select the input form of your choice</h2>
                 <div class="row">
                 <h5>Title Text</h5>
                         <input type="text" class="form-control text-center" name="title_text"placeholder="Add titile"value="<?php echo $rows['title_text']?>">
                  <div class="col-lg-2 border">
                  <form action="" method="POST">
                     <h5>Two Input Form</h5><hr>
                     <strong>Name Type 1</strong>
                     <select name="Two_1" class="form-control ">
                        <option>hidden</option>
                        <option>Text</option>
                      <option>Email</option>
                      <option>Password</option>
                      <option>Number</option>
                    </select>
                    <strong>Name Type 2</strong>
                    <select name="Two_2" class="form-control">
                        <option>hidden</option>
                        <option>Text</option>
                      <option>Email</option>
                      <option>Password</option>
                      <option>Number</option>
                    </select>
                  </div>
                  <div class="col-lg-2 border">
                    <h6>Three Input Form</h6><hr>
                    <strong>Name Type 1</strong>
                    <select name="Three_1" class="form-control ">
                       <option>hidden</option>
                       <option>Text</option>
                      <option>Email</option>
                      <option>Password</option>
                      <option>Number</option>
                       
                    </select>
                    <strong>Name Type 2</strong>
                    <select name="Three_2"class="form-control">
                        <option>hidden</option>
                        <option>Text</option>
                      <option>Email</option>
                      <option>Password</option>
                      <option>Number</option>
                       
                    </select>
                    <strong>Name Type 3</strong>
                    <select name="Three_3" class="form-control">
                        <option>hidden</option>
                        <option>Text</option>
                        <option>Email</option>
                        <option>Password</option>
                        <option>Number</option>
                        
                    </select>


                  </div>
                  <div class="col-lg-2 border">
                     <h5>Four Input Form</h5><hr>
                     <strong>Name Type 1</strong>
                     <select name="Four_1" class="form-control ">
                        <option>hidden</option>
                        <option>Text</option>
                      <option>Email</option>
                      <option>Password</option>
                      <option>Number</option>
                    </select>
                    <strong>Name Type 2</strong>
                    <select name="Four_2" class="form-control">
                       <option>hidden</option>
                       <option>Text</option>
                      <option>Email</option>
                      <option>Password</option>
                      <option>Number</option>
                    </select>
                    <strong>Name Type 3</strong>
                    <select name="Four_3" class="form-control ">
                        <option>hidden</option>
                        <option>Text</option>
                        <option>Email</option>
                        <option>Password</option>
                        <option>Number</option>
                    </select>
                    <strong>Name Type 4</strong>
                    <select name="Four_4" class="form-control">
                       <option>hidden</option>
                       <option>Text</option>
                      <option>Email</option>
                      <option>Password</option>
                      <option>Number</option>
                    </select>
                  </div>
                  <div class="col-lg-2 border">
                  <h5>Five Input Form</h5><hr>
                  <strong>Name Type 1</strong>
                  <select name="five_1" class="form-control ">
                        <option>hidden</option>
                        <option>Text</option>
                      <option>Email</option>
                      <option>Password</option>
                      <option>Number</option>
                       
                    </select>
                    <strong>Name Type 2</strong>
                    <select name="five_2" class="form-control">
                       <option>hidden</option>
                      <option>Text</option>
                      <option>Email</option>
                      <option>Password</option>
                      <option>Number</option>
                       
                    </select>
                    <strong>Name Type 3</strong>
                    <select name="five_3" class="form-control ">
                      <option>hidden</option>
                      <option>Text</option>
                      <option>Email</option>
                      <option>Password</option>
                      <option>Number</option>
                       
                    </select>
                    <strong>Name Type 4</strong>
                    <select name="five_4" class="form-control">
                    <option>hidden</option>
                      <option>Text</option>
                      <option>Email</option>
                      <option>Password</option>
                      <option>Number</option>
                        
                    </select>
                  <strong>Name Type 5</strong>
                    <select name="five_5" class="form-control">
                      <option>hidden</option>
                      <option>Text</option>
                      <option>Email</option>
                      <option>Password</option>
                      <option>Number</option>
                     
                  </select>
                  </div>
                  <div class="col-lg-2"></div>
                  <div class="col-lg-2"></div>
                 </div>
                 <div class="buut d-flex">
                      <button class="btn btn-lg btn btn-success mt-3 mr-3 w-50 " name="formsontrol"> Update</button> 
                      <button class="btn btn-lg btn btn-danger  mt-3 w-50" name="formsontroldel"> Remove</button>
                     
                   </div>
              </form>
              <?php
              } 
            }
              ?>
          
            <?php
                  if(isset($_POST['formsontrol'])){

                      $Two_1= $_POST['Two_1'];
                      $Two_2= $_POST['Two_2'];
                      $Three_1= $_POST['Three_1'];
                      $Three_2= $_POST['Three_2'];
                      $Three_3= $_POST['Three_3'];
                      $Four_1= $_POST['Four_1'];
                      $Four_2= $_POST['Four_2'];
                      $Four_3= $_POST['Four_3'];
                      $Four_4= $_POST['Four_4'];
                      $five_1= $_POST['five_1'];
                      $five_2= $_POST['five_2'];
                      $five_3= $_POST['five_3'];
                      $five_4= $_POST['five_4'];
                      $five_5= $_POST['five_5'];
                      $title_text= $_POST['title_text'];
                
                      $inser ="UPDATE  form_control_tbl SET Two_1='$Two_1',Two_2='$Two_2',Three_1='$Three_1',Three_2='$Three_2',Three_3='$Three_3',Four_1 ='$Four_1',Four_2='$Four_2',Four_3='$Four_3',Four_4='$Four_4',five_1='$five_1',five_2='$five_2',five_3='$five_3',five_4='$five_4',five_5='$five_5',title_text='$title_text'";
                      $run = mysqli_query($con,$inser);
                       if($run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                       }else{
                        echo"Data not update";
                       }
                    
                    }
                   
                    if(isset($_POST['formsontroldel'])){
                      
                      $deletee ="TRUNCATE `cms_db1`.`form_control_tbl`";
                      $run =mysqli_query($con,$deletee);
                     if( $run){
                         echo '<script>window.location="http://localhost/cms_system1/user_page.php"</script>';
                   
                     }else{
                         echo"deleted not";
                     }
                   }
                   
                   
                ?>
                </div>


            </div>
            <div class="col-lg-1 border">b</div>
            </div>
        </div>
  </section>


<!-- input form er kaj sesh End -->



<!-- End main content section section -->
 


<!-- Start two main  content section section er kaj -->
       

<section class="mainContent_section">
       <div class="container">
          <div class="row">
            <div class="col-lg-11 border">
                <div class="container-fluid">
                  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                   <a class="navbar-brand" href="#"><h3>Content Section 2</h3> </a>
                </nav>
              </div>
              <div class="row">
                <div class="col-lg-1 border">
                  <div class="one_colum">
                    <form action="" method="POST">
                        <button class="py-0 px-0" name="main1"> <img style="width:75px;" src="section_img/one.png" alt=""></button>
                    </form>
                  </div>
                </div>
                <div class="col-lg-1 border">
                 <div class="two_colum">
                     <form action="" method="POST">
                        <button class="py-0 px-0 "name="main2"> <img style="width:75px;" src="section_img/two.png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-1 border">
                 <div class="two_colum">
                     <form action="" method="POST">
                        <button class="py-0 px-0 "name="main3"> <img style="width:75px;"src="section_img/three.png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-1 border">
                 <div class="two_colum">
                     <form action="" method="POST">
                        <button class="py-0 px-0 " name="main2two"> <img style="width:75px;" src="section_img/two.png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-1 border">
                 <div class="two_colum">
                     <form action="" method="POST">
                        <button class="py-0 px-0 " name="main1two"> <img style="width:75px;" src="section_img/one.png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-1 border">
                 <div class="two_colum">
                     <form action="" method="POST">
                        <button class="py-0 px-0 " name="main3double"> <img style="width:75px;" src="section_img/threedouble.png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-1 border">
                 <div class="two_colum">
                     <form action="" method="POST">
                        <button class="py-0 px-0 " name="main4"> <img style="width:75px;"src="section_img/four.png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-1 border">
                 <div class="two_colum">
                     <form action="" method="POST">
                        <button class="py-0 px-0 " name="main4double"> <img style="width:75px;"src="section_img/fourdouble .png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-1 border">
                 <div class="two_colum">
                     <form action="" method="POST">
                        <button class="py-0 px-0" name="main3Two"> <img style="width:75px;"src="section_img/three.png" alt=""></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-1 border">
                   <div class="four_colum">
                      <form action="" method="POST">
                        <button class="" name="abc">Close</button>
                    </form>
                </div>
                </div>
              </div>

              </div>
              <div class="col-lg-1  border">b</div>
             </div>
          </div>
</section>
<!-- End Two main content section section -->




    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>