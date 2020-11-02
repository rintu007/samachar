<?php include 'layouts/header.php'; 
  
?>

   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
          <?php include'layouts/sidebar.php'; ?>
         <!-- END SIDEBAR MENU -->
      </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme Color:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-green" data-style="green"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-red" data-style="red"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Add News
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Advertisment</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Add Advertisment 
                       </li>
                       <li class="pull-right search-wrap">
                           <form action="search_result.html" class="hidden-phone">
                               <div class="input-append search-input-area">
                                   <input class="" id="appendedInputButton" type="text">
                                   <button class="btn" type="button"><i class="icon-search"></i> </button>
                               </div>
                           </form>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
           



            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN  widget-->
                    <div class="widget yellow">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Add Advertisment</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form method="POST" accept-charset="utf-8" class="form-horizontal" enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Area</label>
                                <div class="controls">
                                    <select data-placeholder="Your Favorite Type of Bear" class="chzn-select-deselect span6" tabindex="-1" name="advertisement_area" onchange="fetchArea(this.value)"
                                    required id="selCSI">
                                        <option value="">Select</option>
                                        <option value="header">All Pages on Header</option>
                                        <option value="front_page">Front Page</option>
                                        <option value="category_page">Category Page</option>
                                        <option value="subcategory_page">Sub-Category Page</option>
                                        <option value="news_detailpage">News Detail Page</option>
                                        <option value="search_resultpage">Search Result Page</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Specific Area</label>
                                <div class="controls">
                                    <select data-placeholder="Your Favorite Type of Bear" class="chzn-select-deselect span6" tabindex="-1"   name="advertisement_specific_area" id="advertisement_specific_area" required>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Advertisment Name</label>
                                <div class="controls">
                                    <input type="text" class="span6 " required name="advertisement_name" />
                                    <!-- <span class="help-inline">Some hint here</span> -->
                                </div>
                            </div> 
                            <div class="control-group">
                                <label class="control-label">Advertisment Url</label>
                                <div class="controls">
                                    <input type="text" class="span6 " required name="advertisement_url" />
                                    <!-- <span class="help-inline">Some hint here</span> -->
                                </div>
                            </div> 
                            
                               
                            <div class="control-group">
                                <label class="control-label">Advertisment Image</label>
                                <div class="controls">
                                    <input type="file" class="span6" required name="advertisement_image" accept="image/png, image/jpeg, image/gif"/>                              
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label class="control-label">Advertisment Expire Time</label>
                                <div class="controls">
                                    <input type="date" class="span6" required name="advertisement_expiry_date" />                              
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Advertisment Status</label>
                                <div class="controls">
                                <input type="text" class="span6 " required name="status" value="active" readonly />                              
                                </div>
                            </div>
                                
                             <div class="form-actions">
                                <button class="btn btn-success" name="addAdvertisment" type="submit">Add Advertisment</button>
                                <a href="manageAdvertisment.php" class="btn btn-xs btn-danger"> Cancel </a>
                            </div>   
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END EXTRAS widget-->
                </div>
            </div>



            

            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy; Metro Lab Dashboard.
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
   <script type="text/javascript" src="assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
   <script type="text/javascript" src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
   <script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <!-- <script src="js/jquery.blockui.js"></script> -->

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->

   <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
   <script src="js/jquery.sparkline.js" type="text/javascript"></script>
   <script src="assets/chart-master/Chart.js"></script>
   <script src="js/jquery.scrollTo.min.js"></script>


   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!--script for this page only-->

   <script src="js/easy-pie-chart.js"></script>
   <script src="js/sparkline-chart.js"></script>
   <script src="js/home-page-calender.js"></script>
   <script src="js/home-chartjs.js"></script>

   <!-- END JAVASCRIPTS -->   

   <!--script for this page-->
   <script src="js/form-component.js"></script>
</body>
<!-- END BODY -->
</html>
<?php
if(isset($_POST['addAdvertisment'])){

    $fileName1 = $_FILES['advertisement_image']['name'];
    $tmp_name1=$_FILES['advertisement_image']['tmp_name'];
    $fileExt1 = explode('.', $fileName1);
    $fileActualExt1 = strtolower(end($fileExt1));
    $fileNameNew1 = uniqid('',true).".".$fileActualExt1;
    $path='../advertisementImage/'.$fileNameNew1;
    move_uploaded_file($tmp_name1, $path);
if(insertAdvertisement($conn, $_POST, $fileNameNew1)){
    echo '<script language="javascript">';
    echo '</script>';
    showMsg('Advertisemenet Placed Successfully');
    redirection('manageAdvertisment.php');
    
}else{
    echo '<script language="javascript">';
    echo 'alert("Failed to place Advertisement")';
    echo '</script>';
}



}

?>
<script type="text/javascript">
  function fetchArea(areaName){ 
      
dataString = 'areaName='+areaName; 


$.ajax({
      type: 'post',
      url: 'retrieveSpecificAreas.php',
      data: dataString,
      datatype : "json",
      success: function (response) {
        console.log(response);
         var a = '<option value="">No Area Available</option>';        
        if (response==0) {
          $('#advertisement_specific_area').html(a);
          $("#data").hide();
          console.log(response);
                     
        }
        else{
          $("#data").show();
          $('#advertisement_specific_area').html(response);
       
        }
      }

        
    });       
}
</script>