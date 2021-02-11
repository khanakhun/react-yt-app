<header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.php"> <img src="assets/img/logo.jpg" class="img-thumbnail" /></a></h1>

          

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li><a href="index.php">Home</a></li>
                            <li>
                                <a href="aboutus.php">About US</a>
                                
                            </li>
                            <li><a href="terms.php">Terms</a></li>
                            <li><a href="expert-registeration.php">Registeration</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                            <li><a href="admin/">Admin</a></li>

            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container mb-4" style="margin-top: 12rem!important;">
        <div class="container " >
                <h2 class="animate__animated animate__fadeInDown">Top rated Experts</h2>
                <p class="animate__animated animate__fadeInUp">
                        Our team will provide you with the most complete information about expert witnesses available 
                        anywhere. If you cannot find the expert you are looking for, please contact us, and we will find that expert for you.</p>
                 
                <div class="row mb-5"id="searchbar"> 
                    <div class="col-6 offset-3" align="center" id="searchbox">
                    <!-- <div class="card col-6" align="center" id="searchbar"> -->
                    <form action="search.php">
                        <!-- <div class="card-body "> -->
                        
                        
                        <div class="form-group">
                            <h6>Search by key word</h6>
                            <input type="text" class="form-control" placeholder="keywords" name="experty">
                        </div>
                        
                    <div class="form-group">
                            <h6>General Speciality Areas</h6>
                            <select name="category" class="form-control t" id="">
                            <?php
                                include('backend/database.php');
                                $query=$db->query("SELECT * FROM expertise");
                                while ($result=mysqli_fetch_array($query)) {
                                ?>
                            <option value="<?php echo $result['expertise_title']; ?>"><?php echo $result['expertise_title']; ?></option>
                            <?php
                            }
                            ?>
                            
                            </select>
                        </div>
                        
                        <div class="form-group ">
                            <h6>State</h6>
                            <select name="state" class="form-control t" id="">
                            <?php


                        $query=$db->query("SELECT Distinct(country) FROM experts");
                        while ($result=mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?php echo $result['country']; ?>"><?php echo $result['country']; ?></option>
                            <?php
                            }
                            ?>
                            
                            </select>
                        </div>
                        <button type="submit" name="submit"   class="btn-get-started scrollto animate__animated animate__fadeInUp mb-3 mt-4 col-xs-12">Search</button>

                        <!-- </div> -->
                    </form>
                    <!-- </div> -->
                    </div>
                </div>







               
           
        </div>
     
    </div>
</section><!-- End Intro Section -->