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

              </div>
              <div class="col-lg-1 border">b</div>
             </div>
          </div>
</section>
<!-- End main content section section -->

<section class="form_section">
    <div class="container">
      <div class="row">
          <div class="col-lg-0"></div>
          <div class="col-lg-0">
            <form action="">
            <?php
            $name2="";
            $name = $rows['hidden'];
            if($name==""){
              
            }else{
              ?>
              <input type="<?php echo $rows['hidden']?>" placeholder="<?php echo $rows['hidden']?>"><br>abc
            <?php
              $name2 = $rows['hidden2'];
            }if($name2==""){

            }else{ ?>
              <input type="<?php echo $rows['hidden2']?>" placeholder="<?php echo $rows['hidden2']?>">
     
      <?php  } ?>
        </form>
      </div>
   </div>
 </div>
</section>