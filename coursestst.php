<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css?ver=4">   <!--External style sheet -->  
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- W3 schools -->  
    <link href='https://fonts.googleapis.com/css?family=Ledger' rel='stylesheet'>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 
   <script src="js/courses.js" type="text/javascript"></script> <!-- External js file-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css"><!-- jquery datatables css -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script><!-- jquery datatables js -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/af-2.2.2/b-1.5.1/b-colvis-1.5.1/b-flash-1.5.1/b-html5-1.5.1/b-print-1.5.1/cr-1.4.1/fc-3.2.4/fh-3.1.3/kt-2.3.2/r-2.2.1/rg-1.0.2/rr-1.2.3/sc-1.4.4/sl-1.2.5/datatables.min.css"/>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
     <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script> -->
      <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/af-2.2.2/b-1.5.1/b-colvis-1.5.1/b-flash-1.5.1/b-html5-1.5.1/b-print-1.5.1/cr-1.4.1/fc-3.2.4/fh-3.1.3/kt-2.3.2/r-2.2.1/rg-1.0.2/rr-1.2.3/sc-1.4.4/sl-1.2.5/datatables.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
      
     

    </head>

  <body onload="myFunction(); checkCookie();" style="background-color: #EFEFEF">  <!-- Function call to loader icon and cookies -->
    
      <!-- Implementing navbar on medium and large screens using bootstrap4-->
    <nav style="background-color: #00223d;" class="navbar navbar-expand-sm navbar-dark coursenav"> 
       <button class="w3-button w3-xlarge w3-hide-large w3-left w3-hover-text-white w3-hover-none w3-border-0" id="btnmize" onclick="w3_open()">&#9776;</button>
        <a class="navbar-brand sty1" href="index.php">
            <img src="logo/Capture.PNG" alt="Logo" style="width:130px;">
        </a>
      <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        <!-- Navbar on small screens -->
     <!--   <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <!-- <a class="nav-link text-white sty" href="#">Help</a>-->
        <!--        </li>
            </ul>
        </div> --> 
    </nav>
    <!-- Navbar end -->
      
      <!-- Implementing sidebar using W3.css -->
      
      <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left styleside" style="width:300px; background-color: white;" id="mySidebar">
          
          <button class="w3-bar-item w3-button w3-large w3-hide-large w3-hover-none" onclick="w3_close()">Close &times;</button>
          <!--  <a href="#" class="w3-bar-item w3-button pt-2" style="height:50px; font-size: 1.6em; background-color: white; color:black; text-decoration: none; font-weight:bold" >Filters<span style="float:right"><i class="fa fa-filter" style="font-size:24px"></i></span></a> -->
          
          <button type="button" style="color: #6c6c6c; font-size: 11.675px; font-weight: 600; text-decoration: none" class="btn btn-link resetbtn mt-2"><span style="padding-right:2px"></span>Reset all Filters</button>
          <button class="w3-button w3-block w3-left-align mt-2 w3-hover-none styleside btnfocus" style="font-color: black; font-size:71%; text-decoration: none; font-weight: bold; text-transform: uppercase;" onclick="myAccFunc3()">
            <span style="font-size:1.6em; padding-top: 10px;"><i id="stateaw" class="fa fa-angle-down"></i></span><span style="padding-left: 12px;">State</span><span class="mandatindi">*</span><span class="filterbtnhide2"><button id="stateselfil" style="margin-top: 2px;" class="w3-button w3-white w3-tiny w3-padding-small w3-hover-white w3-border w3-border-blue w3-round-large ml-3 mb-2"><span class="btnstatehide"></span><span class="pl-3" style=""><i class="fa fa-close" aria-hidden="true"></i></span></button></span>
            </button>
                <div class="pl-2 pb-1 state_alert" style="color:red; font-family: Calibri; display: none;">Please do not select more than 1 State</div>
                    <div id="demoAcc3" class="w3-show w3-white">
                        <div class="w3-container ml-3" style="background-color: white; width:89%;">
                            <form id="state_form">
                                <div class="row form-group">
                                    <input type="text" class="form-control-sm col-sm-12 statemultisearch" style="border: 1px solid #d1d1e0; box-shadow: 0 2px 2px -2px gray; font-size: 0.7em" placeholder="Search State..">
                                </div>
                    
                                <div class="pl-1 row" style="height:70px; overflow: auto; background-color: white; border: 1px solid #d1d1e0; font-size: 0.8em">
                                    <div class="p-1 filterstate">
                         
                                           
                            
                                    </div>    
                                </div>     
                            </form>      
                        </div> 
                                  
            </div>
          
        <!-- State Filter Ends-->  
          
        <!-- Implementing School Filter-->  
          <div>
          
              <button class="w3-button w3-block w3-left-align w3-hover-none mt-2 styleside btnfocus" style="font-color: black; font-size:71%; text-decoration: none; font-weight: bold; text-transform: uppercase;" onclick="myAccFunc1()">
                  <span style="font-size:1.6em; padding-top: 10px;"><i id="schoolaw" class="fa fa-angle-down"></i></span><span style="padding-left: 12px;">School</span><span class="mandatindi">*</span><span class="filterbtnhide"><button id="schoolselfil" style="margin-top: 2px;" class="w3-button w3-white w3-padding-small w3-tiny w3-hover-white w3-border w3-border-blue w3-round-large ml-3 mb-2"><span class="btnschlhide"></span><span class="pl-3" style=""><i class="fa fa-close" aria-hidden="true"></i></span></button></span>
                </button>
                      <div class="pl-2 pb-1 school_alert" style="color:red; font-family: Calibri; display: none;">Please do not select more than 1 School</div>
                        <div id="demoAcc1" class="w3-show w3-white mb-1">
                           <div class="w3-container ml-3" style="background-color: white; width:89%;">
                                <form id="myform" class="formmulti">
                                    <div class="row form-group">
                                        <input  type="text" class="form-control-sm col-sm-12 schoolmultisearch" style="border: 1px solid #d1d1e0; box-shadow: 0 2px 2px -2px gray; font-size: 0.7em" placeholder="Search School..">
                                    </div>

                                    <div class="pl-1 row" style="height:70px; overflow: auto; background-color: white; border: 1px solid #d1d1e0; font-size: 0.8em">
                                        <div class="p-1 filterschools">
                                                              
                                    </div>    
                                </div>          
                            </form>
                        </div>
                    </div>
          
                </div>
          <!-- Implementing Subject Filter-->
          
          <button class="w3-button w3-block w3-left-align w3-hover-none styleside btnfocus" style="color:#494949; font-size:71%; text-decoration: none; font-weight: 600; text-transform: uppercase;" onclick="myAccFunc()">
              <span style="font-size:1.6em; padding-top: 10px;"><i id="subjaw" class="fa fa-angle-down"></i></span><span style="padding-left: 12px;">Subject</span> 
          </button>
            
                <div id="demoAcc" class="w3-show w3-white">
                    <div class="w3-container subj_con ml-3" style="background-color: white; width:89%;">
                        <form id="subject_form">
                            <div class="row form-group">
                                <input  type="text" class="form-control-sm col-sm-12 subjectmultisearch" style="border: 1px solid #d1d1e0; box-shadow: 0 2px 2px -2px gray; font-size: 0.7em" placeholder="Search Subject..">
                            </div>
                    
                            <div class="pl-1 row styleside" style="height:70px; overflow: auto; background-color: white; border: 1px solid #d1d1e0; font-size: 0.8em;">
                        
                                <div id="loader_subj" class="loader_filter"></div><!-- loader before page loads -->
                        
                                <div class="p-1 filtersubjects">
                                    
                                
                         
                                            
                            
                            </div>    
                          </div>          
                        </form>
                      </div>
                   </div>
          <!-- Subject Filter ends-->
          
          <!-- Implementing Course Filter -->
          
           <button class="w3-button w3-block w3-left-align w3-hover-none mt-2 styleside btnfocus" style="font-color: black; font-size:71%; text-decoration: none; font-weight: bold; text-transform: uppercase;" onclick="myAccFunc2()">
            <span style="font-size:1.6em; padding-top: 10px;"><i id="courseaw" class="fa fa-angle-down"></i></span><span style="padding-left: 12px;">Course Number</span>
            </button>
                <div id="demoAcc2" class="w3-show w3-white">
                    <div class="w3-container ml-3" style="background-color: white; width:89%;">
                        <form id="course_form">
                            <div class="row form-group">
                                <input type="text" class="form-control-sm col-sm-12 coursemultisearch" style="border: 1px solid #d1d1e0; box-shadow: 0 2px 2px -2px gray; font-size: 0.7em" placeholder="Search Course Number..">
                            </div>

                            <div class="pl-1 row" style="height:70px; overflow: auto; background-color: white; border: 1px solid #d1d1e0; font-size: 0.8em">

                                <div id="loader_course" class="loader_filter"></div>

                                <div class="p-1 filtercourse">

                                           
                            
                                </div>    
                            </div>     
                        
                        </form>      
                    </div>    
                  
                </div>
          <!-- Course Filter Ends-->
          
          <!-- Implementing State Filter -->
          
          
         <!-- School Filter Ends -->
          
        </div>
      <!-- Sidebar Ends --->
      
      <!-- Main page implemented using W3.css and jquery  datatables -->
        <div class="w3-main styleside" style="margin-left:320px; margin-right: 20px; margin-top:20px; background-color: white; box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.19); min-height: 88%;">
            <div style="background-color: #DCDCDC; box-shadow: 0 0 1px #003057"  class="w3-container">
              
              
               
            </div>

        <div class="w3-container">
           
            <div class="w3-right-align pt-2">
                  <button id="counselorBtn" style="background-color:#00223d; color:white" class="w3-button w3-border w3-small" target = '_blank'>Contact a Transfer Counselor</button>
                  <button style="background-color:#00223d; color:white" class="w3-button w3-border w3-small" data-toggle="modal" data-target="#myModal1">My Courses<span class="badge badge-light ml-1 bagdecount">0</span></button>
                  <button style="background-color:#00223d; color:white" class="w3-button w3-border w3-small" data-toggle="modal" data-target="#myModal2">Email My Courses</button>
                  <button style="background-color:#00223d; color:white" onclick="window.print();"class="w3-button w3-border w3-small" >Print &nbsp;<i class="fas fa-print"></i></button>
                
            </div>
         
            
        </div>
           
            
          <!-- Modal For Email My Favorites List-->
            
             <div class="modal" id="myModal2" style="font-weight:bold; font-family: Calibri">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h3 class="modal-title">Email My Courses List</h3>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">

                        <div class="container">
                              <form>
                                <div class="form-group">
                                  <label for="usr">First Name:</label>
                                  <input type="text" class="form-control form-control-sm fname" id="usr" name="firstname" required>
                                </div>
                                <div class="form-group">
                                  <label for="last">Last Name:</label>
                                  <input type="text" class="form-control form-control-sm lname" id="last" name="lastname" required>
                                </div>
                                  <div class="form-group">
                                  <label for="last">Email Id:</label>
                                  <input type="email" class="form-control form-control-sm eid" id="emailid" name="emailid" required>
                                </div>
                                <button type="button"  class="btn btn-sm emailsnd" style="background-color: #003057; color:white">Send</button>
                              </form>
                            <div class="reqemail mt-2" style="color:red"></div>
                            </div>    
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
            </div>
  <!-- Modal Ends -->
            
            <div class="tempdiv" style="display: none"> </div> <!-- Temporary div for storing the favorited single row -->
            
      <!-- Modal for Fovorites List -->      
            <div class="modal" id="myModal1" style="font-weight:bold; font-family: Calibri">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content" >

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h3 class="modal-title" style="font-weight: bold; font-family: Calibri">My Courses</h3>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body" >

                         <div class="row mb-2" style="float: right; margin-top: -15px;"> <button type="button" style="font-size: 1.1em; font-weight: bold; font-family: Calibri; color:#6c6c6c" class="btn btn-link favclearbtn"><span style="padding-right:4px"><i class="fa fa-close" aria-hidden="true"></i></span>Clear All Courses</button></div>
                            <div style="clear: both;"></div>

                        <div class="container" style="max-height: 320px; overflow: auto;">

                          <div class="row mx-1" id="get_pdf">
                            <div class="table-responsive location">
                            <table  id="example1" class="table table-borderless row-border table-hover" style="border-bottom: 1px solid #DBDBDB; ">
                                <thead style="background-color: #00223d; color:white; font-size: 12.5px; font-weight: 700;">
                                    <tr>
                                        <th>School Name</th>
                                        <th>Course #</th>
                                        <th>Course Name</th>
                                        <th>Credits</th>
                                        <th>Equivalent Course #</th>
                                        <th>Equivalent Course Name</th>
                                        <th>Equivalent Credits</th>

                                    </tr>
                                </thead>
                                <tbody id="favtable">


                                </tbody>
                            </table>  
                            </div>
                        </div>
                      </div>    
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
        </div>
        <!-- MOdal Ends-->    
            
           <!-- Accordian for one school --> 
          <div class="firstacc mb-4">    
            <div style="background-color: #EFEFEF;" class="row my-4 mx-1 styleside schoolhover schooldrop">
                <div class="col-sm-6 w3-left my-2">
                    <span id="schooltext" class="spanschool" style="font-size: 1.1em; font-weight: 600;"></span><span id="schooltexthide" style="display: none;"></span><span class="pl-3"><i class="fa fa-caret-down"></i></span> 
                </div>
             <!--   <div class="col-sm-6 w3-center my-2"><span>To</span><br>
                    <span style="font-size: 1.6em; font-family: Calibri; ">OLD DOMINION UNIVERSITY</span> 
                </div>  -->
            </div>
            
              <div id="loader"><img id="loading-image" src="loader.gif" alt="Loading..." /></div><!-- loader untill results of the datatable get loaded-->
           
            <div class="row mx-2 mb-4 collegehide" style="display:none; padding-bottom: 5px;">
                <div class="table-responsive first_table">
                
                <!-- Implementing the Datatable -->    
                    
                <table id="example" class="table table-borderless row-border table-hover datatable" style="border-bottom: 1px solid #DBDBDB; ">
        <thead style="background-color: #00223d; color:white; font-size: 12.5px; font-weight: 700;">
            
            <tr>    
                <th>&nbsp;</th>
                <th>Course #</th>
                <th>Course Name</th>
                <th>Credits</th>
                <th>Equivalent Course #</th>
                <th>Equivalent Course Name</th>
                <th>Equivalent Credits</th>
                
            </tr>
        </thead>
        <tbody id="maintable11">
        <?php
                                    // print_r($_POST);
                                      include "config/config.php"; 
                                      $records = "SELECT SBGI_CODE,CRSE_NUMB_FROM_SCHOOL, SUBJ_CODE_FROM_SCHOOL, CRSE_TITLE_FROM_SCHOOL, SHBTATC_CREDITS_FROM_SCHOOL, CONNECTOR_COL_ODU, CRSE_NUMB_INST_ODU, SUBJ_CODE_INST_ODU, INST_TITLE_ODU, INST_CREDITS_ODU FROM V_WX_EQUIVALENCY_LIST WHERE SBGI_CODE ='".$_POST['school_state']."' ORDER BY SUBJ_CODE_FROM_SCHOOL ASC"; 
                                      $result = oci_parse($conn, $records);
                                    //  echo "SELECT SBGI_CODE,CRSE_NUMB_FROM_SCHOOL, SUBJ_CODE_FROM_SCHOOL, CRSE_TITLE_FROM_SCHOOL, SHBTATC_CREDITS_FROM_SCHOOL, CONNECTOR_COL_ODU, CRSE_NUMB_INST_ODU, SUBJ_CODE_INST_ODU, INST_TITLE_ODU FROM V_WX_EQUIVALENCY_LIST WHERE SBGI_CODE ='".$_POST['school_state']."' ORDER BY SUBJ_CODE_FROM_SCHOOL ASC";
                                    //$num_per_page = 10;

                                     oci_execute($result);
                                     oci_fetch_all($result, $table_res);
                                   
                                    // echo 'hello'.oci_num_rows($result);
                                    //var_dump($table_res,true);
                                       for( $i=0; $i<oci_num_rows($result);$i++){
                                 //  echo $row;
                                 
                                 // var_dump($item);
                              ?> <tr>
                                 <td><?php echo '<input type="checkbox" id="checkbox" name="value" value="course">' ?>
                                 <td><?php echo $table_res['SUBJ_CODE_FROM_SCHOOL'][$i]. ' '.$table_res['CRSE_NUMB_FROM_SCHOOL'][$i] ?></td>
                                 <td><?php echo $table_res['CRSE_TITLE_FROM_SCHOOL'][$i] ?></td>
                                 <td><?php echo $table_res['SHBTATC_CREDITS_FROM_SCHOOL'][$i] ?></td>
                                 <td><?php echo $table_res['SUBJ_CODE_INST_ODU'][$i]. ' '.$table_res['CRSE_NUMB_INST_ODU'][$i]?></td>
                                 <td><?php echo $table_res['INST_TITLE_ODU'][$i]?></td>
                                 <td><?php echo $table_res['INST_CREDITS_ODU'][$i]?></td>
                               </tr>
                               <?php         } 
                                      
                                  
                                      oci_close($conn); ?>
                                      
                                                 
            
            
        </tbody>
                </table> 
                    
                <!-- Datatable ends -->    
                    
            </div>
            </div>
      </div>
            
        <!-- Accordian ends -->
            
        <!-- Accordian for two schools (In this project only one school is needed)-->            
            <div class="mb-4 secondacc" style="display:none">
             <div style="font-weight:bold; background-color: #DCDCDC; " class="row mb-4  mx-1 schoolhover schooldrop1">
                <div class="col-sm-6 w3-left my-2">
                    <span class="spanschool1" style="font-size: 1.6em; font-family: Calibri; "></span><span class="pl-2">&#x25BC;</span> 
                </div>
                 
            </div>
            
           
            <div class="row mx-2 mb-4 collegehide1" style="display:none;">
                <div class="table-responsive second_table">
                <table  id="example2" class="table table-borderless row-border table-hover" style="border-bottom: 1px solid #DBDBDB; ">
        <thead style="background-color: #003057; color:white; font-family: Calibri;  font-weight: bold; font-size: 1.2em">
            
            <tr>    
                <th>&nbsp;</th>
                <th>Course #</th>
                <th>Course Name</th>
                <th>Credits</th>
                <th>Equivalent Course #</th>
                <th>Equivalent Course Name</th>
                <th>Equivalent Credits</th>
                
            </tr>
        </thead>
        <tbody >
           
            
        </tbody>
                </table>  
            </div>
            </div>
            
      </div>
            <!-- Accordian for third school-->
            
                        <div class="mb-4 thirdacc" style="display:none">
             <div style="font-weight:bold; background-color: #DCDCDC; " class="row mb-4  mx-1 schoolhover schooldrop2">
                <div class="col-sm-6 w3-left my-2">
                    <span class="spanschool2" style="font-size: 1.6em; font-family: Calibri; "></span><span class="pl-2">&#x25BC;</span> 
                </div>
                 
            </div>
            
           
            <div class="row mx-2 collegehide2" style="display:none;">
                <div class="table-responsive third_table">
                <table  id="example4" class="table table-borderless row-border table-hover" style="border-bottom: 1px solid #DBDBDB; ">
        <thead style="background-color: #003057; color:white; font-family: Calibri;  font-weight: bold; font-size: 1.2em">
            
            <tr>    
                <th>&nbsp;</th>
                <th>Course #</th>
                <th>Course Name</th>
                <th>Credits</th>
                <th>Equivalent Course #</th>
                <th>Equivalent Course Name</th>
                <th>Equivalent Credits</th>
                
            </tr>
        </thead>
        <tbody>
           
                
            
        </tbody>
                </table>  
            </div>
            </div>
            
      </div>
         <!-- Accordian Ends -->
            
            <div class="hidecheck" style="display: none"></div>
            
            
        </div>

    

       

          

            
  </body>
   
</html>
