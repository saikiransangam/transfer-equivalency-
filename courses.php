<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Ledger'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/af-2.2.2/b-1.5.1/b-colvis-1.5.1/b-flash-1.5.1/b-html5-1.5.1/b-print-1.5.1/cr-1.4.1/fc-<3.2.4/fh-3.1.3/kt-2.3.2/r-2.2.1/rg-1.0.2/rr-1.2.3/sc-1.4.4/sl-1.2.5/datatables.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
  <script src="courses.js"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transfer Equivalency</title>
</head>
<body>
<script>
    $(document).ready(function() {
    $('#myTable').DataTable({
      "pagingType" : "full_numbers",
      "lenghtMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      responsive: true,
      "iDisplayLength": 25,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search",
      }
    });
    } );
  </script>
  <script> 
   $(document).on("click", "#counselor", function () {
      
      window.open(
        'https://olddominion.secure.force.com/form?formid=217748',
        '_blank' // <- This is what makes it open in a new window.
      );
              
  });
  </script>
  
<script>
  $(document).ready(function(){
    var tableControl = document.getElementById('data');
    var arrayofValues = [];
    $('#getdata').click(function(){
      $('input:checkbox:checked', tableControl).each(function(){
        arrayofValues.push($(this).closest('tr').find('td:last').text());
      }).get();
    });
  });
</script>
<script>
         $(document).ready(function(){
             var state= document.getElementById("selectstate").value;
        $.ajax({
            url: 'schoolsidebar.php',
            type: 'POST',
            datatype: 'json',
            data: {state_id: state},
            
            success: function(html){
                $('#selectschool').append(html);
            },
            error: function(){
                alert("error");
            }


           });
       
           

           $('#selectstate').change(function(){
            var state = document.getElementById("selectstate").value;
            $.ajax({
                url: 'schoolsidebar.php',
                type: 'POST',
                datatype: 'json',
                data: {state_id: state},
                
                success: function(html){
                    $('#selectschool').empty();
                    $('#selectschool').append(html);
                },
                error: function(){
                    alert("error");
                }
           });
        });


        $('#selectschool').change(function(){
            var school_selected = document.getElementById("selectschool").value;
            $.ajax({
                url: 'subjectsidebar.php',
                type: 'POST',
                datatype: 'json',
                data: {school_id: school_selected},
                
                success: function(html){
                    $('#selectsubject').empty();
                    $('#selectsubject').append(html);
                },
                error: function(){
                    alert("error");
                }


            });
        });


        $('#selectsubject').change(function(){
            var school_selected = document.getElementById("selectschool").value;
            var subject_selected = document.getElementById("selectsubject").value;
            $.ajax({
                url: 'coursesidebar.php',
                type: 'POST',
                datatype: 'json',
                data: {school_id: school_selected,
                  subject_id: subject_selected},
                
                success: function(html){
                    $('#selectcourse').empty();
                    $('#selectcourse').append(html);
                },
                error: function(){
                    alert("error");
                }


            });
        });
        
     
       
       



  
     
        
       });
       </script>
       












       <script>
        $(document).ready(function(){
        $('#selectstate').change(function(){
                $.ajax({
                url: 'sideaction.php',
                type: 'POST',
                datatype: 'json',
                data: {state_id: state},
                
                success: function(html){
                    $('#myTable').empty();
                    $('#myTable').append(html);
                },
                error: function(){
                    alert("error");
                }


            });
        });
      });
      </script>
  
  <script>
       var listelements = [];
       function onchecked(event){
        if (event.checked && !listelements.contains(event.parentNode.parentElement))
          listelements.push(event.parentNode.parentElement)



            // var course_data = document.getElementById("checkbox").value;
           
            $.ajax({
                 type: 'POST',
                 datatype: 'json',
                 data: {course_list: listelements},
                
                 success: function(html){
                     $('#course_list').empty();
                     $('#course_list').append(html);
                 },
                 error: function(){
                     alert("error");
                 }


            // });
        }
       </script>

        <script>
        $(".reset").on("click", function () {
      $(".filtersubjects").html("Please Select State and School");
      $(".filtercourse").html("Please Select State and School");
      $(".filterschools").html("Please Select a State");
      $(".btnschlhide").text("");
      $(".btnstatehide").text("");
      $("#stateselfil").hide();
      $("#schoolselfil").hide();
      $('input:checkbox[name="option_state"]').each(function () {
          if ($(this).is(':checked')) {
              $(this).prop('checked', false);
          }
      });
      $(".firstacc").hide();
      $(".spanschool").text("");
      $("#schooltexthide").text("");
  });
        </script>


  
  <!--Nav bar Implementation-->
  <nav style="background-color: #00223d;" class="navbar navbar-expand-sm navbar-dark">
    <!--<button class="navbar-brand style" id="btnmize">&#9776</button>-->
    <a class="navbar-brand style" href="index.php">
    <img src="image/logo.PNG" alt="Logo" style="width:100px;">
    </a>
  </nav> 
    <!--Navbar ends-->
    <!--Side bar-->
    <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left styleside" style="width:300px; background-color: white;" id="sidebar">
        <button type="button" style="color: #6c6c6c; font-size: 12px; font-weight: bold;" class="btn btn-link reserbtn mt-2 reset"><span style="padding-right:2px">Reset All</span></button>

         <div class="fontbanner pt-1 pb-3" style="color: #00223d; font-size: 15px;">STATE</div>
            <div class="row mb-4">
                <div class="col-sm-11">
                    <form action="">
                        <div class="form-group">
                        <input type="text" class="form-control-sm col-sm-12" style="border: 1px solid #d1d1e0; box-shadow: 0 2px 2px -2px gray; font-size: 0.7em" placeholder="search State" onkeyup = "myState">
                            <select style="color: black; font-weight: bold; overflow: scroll;" size = "7" class="form-control form-control-sm col-sm-12" id = "selectstate" reuired>
                                  
                            <?php
                                      include 'config/config.php';
                                      $sql = "SELECT DISTINCT STVSTAT_CODE,STVSTAT_DESC FROM V_WX_SCHOOL_LIST order by STVSTAT_DESC asc";
                                      $result = oci_parse($conn, $sql);
                                      oci_execute($result);
                                      oci_fetch_all($result, $res); 
                                      $length = count($res['STVSTAT_DESC']);
                                      
                                      //sort($res['STVSTAT_DESC']);
                                      for ($i=0; $i < $length; $i++){ 
                                          if($res['STVSTAT_DESC'][$i] == "Virginia" ){
                                          
                                          echo '<option value = "'.$res['STVSTAT_CODE'][$i].'" selected>'.$res['STVSTAT_DESC'][$i].'</option>';
                                          }
                                          else{
                                          echo '<option value = "'.$res['STVSTAT_CODE'][$i].'">'.$res['STVSTAT_DESC'][$i].'</option>';
                                          }
                                      }
                                      oci_close($conn);
                                    ?>  
                            </select>
                        </div>
                    </form>
                </div>
            </div> 
            <div class="fontbanner pt-1 pb-3" style="color: #00223d; font-size: 15px;">SCHOOL</div>
            <div class="row mb-4">
              <div class="col-sm-11">
                  <form action="">
                      <div class="form-group">
                      <input type="text" class="form-control-sm col-sm-12" style="border: 1px solid #d1d1e0; box-shadow: 0 2px 2px -2px gray; font-size: 0.7em" placeholder="search School" onkeyup="mySchool">
                          <select style="color: black; font-weight: bold;overflow: scroll;" size = "7" class="form-control form-control-sm col-sm-12" id ="selectschool">
                          
                          </select>
                      </div>
                  </form>
              </div>
          </div>
          <div class="fontbanner pt-1 pb-3" style="color: #00223d; font-size: 15px;">SUBJECT</div>
          <div class="row mb-4">
            <div class="col-sm-11">
                <form action="">
                    <div class="form-group">
                    <input type="text" class="form-control-sm col-sm-12" style="border: 1px solid #d1d1e0; box-shadow: 0 2px 2px -2px gray; font-size: 0.7em" placeholder="search Subject">
                        <select style="color: black; font-weight: bold; overflow: scroll;" size = "7" class="form-control form-control-sm col-sm-12" id="selectsubject">
                        
                        </select>
                    </div>
                </form>
            </div>
        </div> 
        <div class="fontbanner pt-1 pb-3" style="color: #00223d; font-size: 15px;">COURSE NUMBER</div>
        <div class="row mb-4">
          <div class="col-sm-11">
              <form action="">
                  <div class="form-group">
                  <input type="text" class="form-control-sm col-sm-12" style="border: 1px solid #d1d1e0; box-shadow: 0 2px 2px -2px gray; font-size: 0.7em" placeholder="Search Course Number">
                      <select style="color: black; font-weight: bold; overflow: scroll;" size = "7" class="form-control form-control-sm col-sm-12" id="selectcourse">
                      
                      </select>
                  </div>
              </form>
          </div>
      </div>  
    </div>
    
         
      <!---Main form-->
      <div class="w3-main styleside" style="margin-left:320px; margin-right: 20px; margin-top:20px; background-color: white; box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.19); min-height: 88%;">
          <div style="background-color: #DCDCDC; box-shadow: 0 0 1px #003057" class = "w3-container"></div>
              <div class="w3-container">
                  <div class="w3-right-align pt-2">
                  <button id="counselor" style="background-color:#00223d; color:white" class="w3-button w3-border w3-small" target='_blank'>Contacta Transfer Counselor</button>
                  <button id="mycourses" style="background-color:#00223d; color:white" class="w3-button w3-border w3-small" data-toggle="modal" data-target="#modal1">My Courses
                  <span class="badge badge-light ml-1 badgecount">0</span></button>
                  <button id="email" style="background-color:#00223d; color:white" class="w3-button w3-border w3-small" data-toggle="modal" data-target="#modal2">Email My Courses</button>
                  <button id="print" style="background-color:#00223d; color:white" onclick="window.print()" class="w3-button w3-border w3-small">print &nbsp;<i class="fas fa-print"></i></button> 

                 </div>     
              </div>
                        
                  <!--My courses-->
                  <div class="modal" id="modal1" style="font-weight: bold; font-family: Calibri;">
                      <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                             <!--Header-->
                              <div class="modal-header">
                                  <h3 class="modal-title" style="font-weight: bold; font-family: Calibri">My Courses</h3>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <!--body-->
                              <div class="modal-body">
                                  <div class="row mb-2" style="float: right; margin-top: -15px;">
                                      <button type="button" style="font-size: 1.1em; font-weight: bold; font-family: Calibri; color: #6c6c6c" class="btn btn-link favclearbtn"><span style="padding-right:4px"><i class ="fa fa-close" aria-hidden="true"></i></span>Clear All Courses</button>
                                  </div>
                                   <div style="clear: both;"></div>
                                     <div class="container" style="max-height: 320px; overflow: auto;">
                                          <div class="row mx-1" id="">
                                              <div class="table-responsive location">
                                                <table id="course_list" class="table table-borderless row-border table-hover mycourses" style="border-bottom: 1px solid #DBDBDB;">
                                                      <thead style="background-color: #00223d; color:white; font-size: 12.5px; font-weight: 700;">
                                                            <tr>
                                                                <th scope="col">School Name</th>
                                                                <th scope="col">Course #</th>
                                                                <th scope="col">Course Name</th>
                                                                <th scope="col">Credits</th>
                                                                <th scope="col">Equivalent Course #</th>
                                                                <th scope="col">Equivalent Course Name</th>
                                                                <th scope="col">Equivalent Credits</th>
                                                            </tr>
                                                      </thead>
                                                </table>
                                              </div>
                                          </div>
                                      </div>
                              </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                        </div>
                     </div>
                    </div> 
                              <!--Email -->
                <div class="modal" id="modal2" style="font-weight:bold; font-family: Calibri">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                     <!--Modal Header-->
                      <div class="modal-header">
                        <h3 class="modal-title">Email My Courses List</h3>
                          <button type="button" class="close" data-dismiss="modal"></button>
                      </div>
                      <!--Modal Body-->
                      <div class="modal-body">
                        <div class="container">
                          <form>
                            <div class="form-group">
                              <label>First Name:</label>
                              <input type="text" class="form-control form-control-sm fname" id="fname" name="firstname" required>
                            </div>
                            <div class="form-group">
                              <label>Last Name:</label>
                              <input type="text" class="form-control form-control-sm lanme" id="lname" name="lastname" required>
                            </div>
                            <div class="form-group">
                              <label>Email ID:</label>
                              <input type="email" class="form-control form-control-sm emailid" id="emid" name="emailid" required>
                            </div>
                              <button type="button" class="btn btn-sm emailsb" style="background-color: #003057; color:white">Send</button>
                          </form>
                          <div class="reqemail mt-2" styel="color:red"></div>
                        </div>
                      </div>
                        <!--Modal footer-->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mx-2 mb-4" style="padding-bottom: 5px;">
                      <div class="table-responsive">
                          <table id="myTable" class="table table-borderless row-border table-hover data" style="border-bottom: 1px solid #DBDBDB;">
                              <thead style="background-color: #00223d; color: white; font-size: 12.5px; font-weight: 700;">
                                <tr>
                                    <th scope="col">&nbsp</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Credits</th>
                                    <th scope="col">Equivalent Course</th>
                                    <th scope="col">Equivalent Course Name</th>
                                    <th scope="col">Equivalent Credits</th>
                                   
                                </tr>
                              </thead>
                              <tbody id = "tablechange"> 
                                

                              <?php
                                      //print_r($_POST);
                                      include "config/config.php";
                                      $records = "";
                                      if(isset($_POST['school_state'])){
                                      $records = "SELECT SBGI_CODE,CRSE_NUMB_FROM_SCHOOL, SUBJ_CODE_FROM_SCHOOL, CRSE_TITLE_FROM_SCHOOL, SHBTATC_CREDITS_FROM_SCHOOL, INST_CREDITS_ODU, listagg(CONCAT(CONCAT(CONCAT(CONCAT(SUBJ_CODE_INST_ODU, ' '), CRSE_NUMB_INST_ODU), '<BR>'), DECODE(CONNECTOR_COL_ODU, 'NULL', '<BR> ', CONNECTOR_COL_ODU)), '<BR>') WITHIN GROUP(ORDER BY CRSE_NUMB_INST_ODU, SUBJ_CODE_FROM_SCHOOL ) AS EQUIVALENT, listagg(CONCAT(CONCAT(INST_TITLE_ODU,'<BR> '), DECODE(CONNECTOR_COL_ODU, 'NULL', '<BR>', CONNECTOR_COL_ODU)), '<BR>') WITHIN GROUP( ORDER BY CRSE_NUMB_INST_ODU, SUBJ_CODE_FROM_SCHOOL ) AS EQUIVALENTCOURSE
                                      FROM V_WX_EQUIVALENCY_LIST WHERE SBGI_CODE ='".$_POST['school_state']."'";
                                      }
                                      
                                      if(isset($_POST['select_subject'])){
                                        $records = $records."AND SUBJ_CODE_FROM_SCHOOL = '".$_POST['select_subject']."' ";
                                      }

                                      if(isset($_POST['select_course'])){
                                        $records = $records."AND CRSE_NUMB_FROM_SCHOOL = '".$_POST['select_course']."' ";
                                      }
                                      //$records = $records."decode(CONNECTOR_COL_ODU,'NULL', '')";
                                      $records = $records."GROUP BY SBGI_CODE, CRSE_NUMB_FROM_SCHOOL, SUBJ_CODE_FROM_SCHOOL, CRSE_TITLE_FROM_SCHOOL, SHBTATC_CREDITS_FROM_SCHOOL, INST_CREDITS_ODU ORDER BY SUBJ_CODE_FROM_SCHOOL ASC, CRSE_NUMB_FROM_SCHOOL"; 
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
                                 <td><?php echo '<input type="checkbox" id="checkbox" name="value" value="course" onclick="onchecked(this)">' ?>
                                 <td><?php echo $table_res['SUBJ_CODE_FROM_SCHOOL'][$i]. ' '.$table_res['CRSE_NUMB_FROM_SCHOOL'][$i] ?></td>
                                 <td><?php echo $table_res['CRSE_TITLE_FROM_SCHOOL'][$i] ?></td>
                                 <td><?php echo $table_res['SHBTATC_CREDITS_FROM_SCHOOL'][$i] ?></td>
                                 <td><?php echo $table_res['EQUIVALENT'][$i]?></td>
                                 <td><?php echo $table_res['EQUIVALENTCOURSE'][$i]?></td>
                                 <td><?php echo $table_res['INST_CREDITS_ODU'][$i]?></td>
                               </tr>
                               <?php         } 
                                      
                                  
                                      oci_close($conn); ?>
                                      
                                



                             </tbody>
                            
                          </table>
                          <br>
                          
                    
                        
                      </div>
                  </div>

           </div>   
           
  </body>
</html>