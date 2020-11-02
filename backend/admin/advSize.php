<?php
  include 'layouts/header.php';
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
        <!-- SIDEBAR HERE -->
      <?php
  include 'layouts/sidebar.php';
?>
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
                     Dynamic Table
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Image Size</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Advertisment Image Size
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
            <!-- BEGIN ADVANCED TABLE widget-->
            <div class="row-fluid">
                <div class="span12">
                <!-- BEGIN EXAMPLE TABLE widget-->
                <div class="widget red">
                <?php if (isset($_SESSION['msg'])){  echo $_SESSION['msg']; }
                unset($_SESSION['msg']);?>
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i>Advertisment Image Size Information</h4>
                        
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                    </div>
                    <div class="widget-body">
                        <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
                            <tr>
                                <th style="width:8px;"><input type="hidden" class="group-checkable" data-set="#sample_1 .checkboxes" />S.N</th>
                                <th class="hidden-phone">Advertisement Area</th>
                                <th class="hidden-phone">Width</th>
                                <th class="hidden-phone">Height</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="odd gradeX">
                                <td><input type="hidden" class="checkboxes" value="1" />1</td>
                                <td class="hidden-phone">Header Advertisment</td>
                                <td class="hidden-phone">921px</td>
                                <td class="hidden-phone">90px</td>
                            </tr>
                            <tr class="odd gradeX">
                                <td><input type="hidden" class="checkboxes" value="1" />2</td>
                                <td class="hidden-phone">First Top Two Advertisment below Trending</td>
                                <td class="hidden-phone">1282px</td>
                                <td class="hidden-phone">144px</td>
                            </tr>
                            <tr class="odd gradeX">
                                <td><input type="hidden" class="checkboxes" value="1" />3</td>
                                <td class="hidden-phone">Three Banner News Advertisment below Banner News</td>
                                <td class="hidden-phone">1281px</td>
                                <td class="hidden-phone">160px</td>
                            </tr>
                            <tr class="odd gradeX">
                                <td><input type="hidden" class="checkboxes" value="1" />4</td>
                                <td class="hidden-phone">Above Categories Advertisment</td>
                                <td class="hidden-phone">802px</td>
                                <td class="hidden-phone">65px</td>
                            </tr>
                            <tr class="odd gradeX">
                                <td><input type="hidden" class="checkboxes" value="1" />5</td>
                                <td class="hidden-phone">All Right-Side Advertisment</td>
                                <td class="hidden-phone">397px</td>
                                <td class="hidden-phone">258px</td>
                            </tr>
                            <tr class="odd gradeX">
                                <td><input type="hidden" class="checkboxes" value="1" />6</td>
                                <td class="hidden-phone">Above HP-Special Advertisment</td>
                                <td class="hidden-phone">1281px</td>
                                <td class="hidden-phone">98px</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>

            <!-- END ADVANCED TABLE widget-->
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
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
   <script src="js/jquery.scrollTo.min.js"></script>


   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!--script for this page only-->
   <script src="js/dynamic-table.js"></script>

   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>