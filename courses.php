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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transfer Equivalency</title>
</head>
<body>
<script>
    $(document).ready(function() {
    table = $('#myTable').DataTable({
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
      },
      columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
      }],
      select:{
        style: 'multi',
        selector: 'td:first-child'
      },
      order: [
        [1, 'asc']
      ],
    });
    });

    
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
             var state= document.getElementById("selectstate").value;
            //var school= $_POST['school_state'];
       /* $.ajax({
            url: 'schoolsidebar.php',
            type: 'POST',
            datatype: 'json',
            data: {state_id: state, school_id: school},
            
            success: function(html){
                $('#selectschool').append(html);
            },
            error: function(){
                alert("error");
            }


           });*/

          /* $document('#mycourses').click(function() {
  var tblData = table.rows('.selected').data();
  var tmpData;
  alert("select");
  $.each(tblData, function(i, val) {
    tmpData = tblData[i];
    alert(tmpData);
  }); */
  $(document).on("click", "#email_send", function(){
    var first_name = document.getElementById("#fname").value;
    var last_name = document.getElementById("#lname").value;
    var email_id = document.getElementById("#emid").value;
    var table_list = {html: $('#course_list').html()};
    $.ajax({
                url: 'email.php',
                type: 'POST',
                datatype: 'json',
                data: {frst_nm : first_name, lst_nm: last_name, email: email_id, table_send: table_list},
                
                success: function(html){
                    $('#modal2').modal('hide');
                    alert("Email sent");
                      },
                error: function(){
                    alert("error");
                }
           });
  });

  $(document).on("change", "[type=checkbox]", function(){

    //alert("hi");
    if ($(this).is(":checked")){
      //alert("hi");
      var table_updated = $('#myTable').DataTable();
      var tbl_val = table.row($(this).closest('tr')[0]).data();
      //alert(table_updated.row($(this).closest('tr')).data());
      //var tmpData;
      var school_selected = $('#selectschool option:selected').text();
      var school_code =  document.getElementById("selectschool").value;
      var row_body= ' ';
      //alert("hello");
      //alert(e, dt, type, indexes, "hello");
      //alert($(this).rowIndex);
      //alert(school_selected);
      var course_code_modified = tbl_val[1].replace(' ','_');
      var i = 0;
      row_body= '<tr id = "'+school_code+'_'+course_code_modified+'"><td>' + school_selected + '</td>';
      var skip_row = true;
      $.each(tbl_val, function(i, val) {
        if(skip_row){
          skip_row = false;
        }
        else{
      
          if(i == 0){
            row_body= '<tr id = "'+school_code+'_'+tbl_val[i].replace(' ','_')+'"><td>' + school_selected + '</td>';
            i++;
          }
          else{
        
        row_body = row_body + '<td>' + tbl_val[i] + '</td>';
        }
        }
    //tmpData = tbl_val[i];
    //alert("hello");
    //alert(tmpData);
  });
  row_body = row_body + '</tr>';
  $('#favtable').append(row_body);
  }
    else{

    

    if(!$(this).is(":checked")){
      //alert("hello");
      var tbl_val = table.row($(this).closest('tr')[0]).data();
      var school_code =  document.getElementById("selectschool").value;//$('#selectschool option:selected').value;
      var skip_row = true;
      $.each(tbl_val, function(i, val) {
        if(skip_row){
          skip_row = false;
        }else{
          //var crs_modify = tbl_val[i].replace(' ','_');
          var remove_id = school_code+'_'+tbl_val[i].replace(' ','_');
          //alert(remove_id);
          $('#'+remove_id).remove();
          return false;
        } }); 
      }
  }

  /*$.each(tbl_val, function(i, val) {
    tmpData = tbl_val[i][1];
    
    alert(tmpData);
  });*/
  //alert($(this).data());
  $('#courses_count').empty();
  $('#courses_count').text($('#course_list tr').length -1);
  });

  /* $(document).on("click", "#mycourses", function() { 
    var tblData = table.rows('.selected').data();
    //alert(tblData.data());
    var tmpData;

  $.each(tblData, function(i, val) {
    tmpData = tblData[i][1];

    alert(tmpData);
  });
});*/
           

           $('#selectstate').change(function(){
            var state = document.getElementById("selectstate").value;
            $.ajax({
                url: 'schoolsidebar.php',
                type: 'POST',
                datatype: 'json',
                data: {state_id: state},
                
                success: function(html){
                    $('#selectschool').empty();
                    $('#selectsubject').empty();
                    $('#selectcourse').empty();
                    $('#selectschool').append(html);
                },
                error: function(){
                    alert("error");
                }
           });
        });



        $('#selectschool').change(function(){
            var state_selected = document.getElementById("selectstate").value;
            var school_selected = document.getElementById("selectschool").value;
            //alert("handle");
            
            $.ajax({
              url: 'table_content.php',
              type: 'POST',
              datatype: 'json',
              data: {state_id: state_selected, school_id: school_selected},

              success: function(html){
                $('#tablechange').empty();
                $('#tablechange').append(html);
                //table.ajax.reload();
               //table.rows.add(html).draw();
              },
              error: function(){
                alert("error");
              } 
            });
            $.ajax({
                url: 'subjectsidebar.php',
                type: 'POST',
                datatype: 'json',
                data: {school_id: school_selected},
                
                success: function(html){
                    $('#selectsubject').empty();
                    $('#selectcourse').empty();
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
              url: 'table_content_subj.php',
              type: 'POST',
              datatype: 'json',
              data: {school_id: school_selected, subject_id: subject_selected},
              success: function(html){
                $('#tablechange').empty();
                $('#tablechange').append(html);
              } ,
              error: function(){
                alert('error');
              } 

            });


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
        
        $('#selectcourse').change(function(){
           var school_selected = document.getElementById("selectschool").value;
           var subject_selected = document.getElementById("selectsubject").value;
           var course_selected = document.getElementById("selectcourse").value;
           
           $.ajax({
             url: 'table_content_crse.php',
             type: 'POST',
             datatype: 'json',
             data: {school_id: school_selected,
                  subject_id: subject_selected, course_id: course_selected},
             success: function(html){
               $('#tablechange').empty();
               $('#tablechange').append(html);
             }
           })
        });



        $("#resetall").on("click", function(){
          $('#selectstate')[0].selectedIndex = 0;

          $('#tablechange').empty();
          var state = document.getElementById("selectstate").value;
            $.ajax({
                url: 'schoolsidebar.php',
                type: 'POST',
                datatype: 'json',
                data: {state_id: state},
                
                success: function(html){
                    $('#selectschool').empty();
                    $('#selectsubject').empty();
                    $('#selectcourse').empty();
                    $('#selectschool').append(html);
                },
                error: function(){
                    alert("error");
                }
           });
        })
        
      });

     
      </script>
    



       <!-- <script>
         $(document).ready(function(){
             var state= document.getElementById("selectstate").value;
             var subject= document.getElementById("selectsubject").value;
        $.ajax({
            url: 'sideaction.php',
            type: 'POST',
            datatype: 'json',
            data: {state_id: state, subject_id: subject},
            
            success: function(html){
                $('#myTable').append(html);
            },
            error: function(){
                alert("error");
            }


           });


         });
       
           
       
          
      </script> -->
       
       

  
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
        <button type="button" style="color: #6c6c6c; font-size: 12px; font-weight: bold;" class="btn btn-link reserbtn mt-2 reset" id = "resetall"><span style="padding-right:2px">Reset All</span></button>

         <div class="fontbanner pt-1 pb-3" style="color: #00223d; font-size: 15px;">STATE</div>
            <div class="row mb-4">
                <div class="col-sm-11">
                    <form action="">
                        <div class="form-group">
                            <select style="color: black; font-weight: bold; overflow: scroll;" size = "7" class="form-control form-control-sm col-sm-12" id = "selectstate" required>
                                  
                            <?php
                                      include 'config/config.php';
                                      $sql = "SELECT DISTINCT STVSTAT_CODE,STVSTAT_DESC FROM V_WX_SCHOOL_LIST order by STVSTAT_DESC asc";
                                      $result = oci_parse($conn, $sql);
                                      oci_execute($result);
                                      oci_fetch_all($result, $res); 
                                      $length = count($res['STVSTAT_DESC']);
                                      
                                      //sort($res['STVSTAT_DESC']);
                                      for ($i=0; $i < $length; $i++){ 
                                          if($res['STVSTAT_CODE'][$i] == $_POST['state_state'] ){
                                          
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
                          <select style="color: black; font-weight: bold;overflow: scroll;" size = "7" class="form-control form-control-sm col-sm-12" id ="selectschool">
                          <?php 
                                              include 'config/config.php';
                                              $school = $_POST['school_state']; 
                                              //echo $_POST['school_state'];
                                              //echo $_POST['school_state'];

                                              $query = "SELECT STVSBGI_CODE,STVSBGI_DESC FROM V_WX_SCHOOL_LIST WHERE  STVSTAT_CODE = '{$_POST['state_state']}' ORDER BY STVSBGI_DESC ASC";
                                              $result = oci_parse($conn, $query);
                                              oci_execute($result);
                                              oci_fetch_all($result, $rec);
                                              $length = count($rec['STVSBGI_DESC']);
                                              echo $length;
                                             // sort($rec['STVSBGI_DESC']);
                                              for ($i=0; $i < $length; $i++){ 
                                                if($rec['STVSBGI_CODE'][$i] == $school){
                                          
                                            echo '<option value = "'.$rec['STVSBGI_CODE'][$i].'" selected> '.$rec['STVSBGI_DESC'][$i].'</option>';
                                                }
                                                else{
                                                  echo '<option value = "'.$rec['STVSBGI_CODE'][$i].'"> '.$rec['STVSBGI_DESC'][$i].'</option>';
                                                }
                                          }
                                         
                                          
                                      oci_close($conn);
                                          ?>
                          
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
                  <span  id = "courses_count"class="badge badge-light ml-1 badgecount">0</span></button>
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
                                                      <tbody id="favtable">
                                                      </tbody>
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
                              <button type="button" class="btn btn-sm email_send" id="email_send" style="background-color: #003057; color:white">Send</button>
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
                                      $records = "SELECT SBGI_CODE, CRSE_NUMB_FROM_SCHOOL, SUBJ_CODE_FROM_SCHOOL, CRSE_TITLE_FROM_SCHOOL, SHBTATC_CREDITS_FROM_SCHOOL, SUM(INST_CREDITS_ODU) AS INST_CREDITS_ODU,
                                      LISTAGG(SUBJ_CODE_INST_ODU || ' ' || CRSE_NUMB_INST_ODU,'<BR>'||' ~ ' || '<BR>') AS test
                                      ,LISTAGG(DECODE(CONNECTOR_COL_ODU, 'NULL','', TRIM(CONNECTOR_COL_ODU)), ' ') as test_con
                                      ,LISTAGG(INST_TITLE_ODU || '<BR>' || '~ ','<BR> ') AS TEST1
                                      FROM V_WX_EQUIVALENCY_LIST  WHERE SBGI_CODE ='".$_POST['school_state']."'";
                                      }
                                      
                                      if(isset($_POST['select_subject'])){
                                        $records = $records."AND SUBJ_CODE_FROM_SCHOOL = '".$_POST['select_subject']."' ";
                                      }

                                      if(isset($_POST['select_course'])){
                                        $records = $records."AND CRSE_NUMB_FROM_SCHOOL = '".$_POST['select_course']."' ";
                                      }
                                      //$records = $records."decode(CONNECTOR_COL_ODU,'NULL', '')";
                                      $records = $records."GROUP BY SBGI_CODE, CRSE_NUMB_FROM_SCHOOL, SUBJ_CODE_FROM_SCHOOL, CRSE_TITLE_FROM_SCHOOL, SHBTATC_CREDITS_FROM_SCHOOL ORDER BY SUBJ_CODE_FROM_SCHOOL, CRSE_NUMB_FROM_SCHOOL ASC"; 
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
                                 <td><?php echo '<input type="checkbox" data-placement="bottom" title class="select-checkbox" id ="course_fav" data-orginal-title="Add To Favourites">'?></td>
                                 <td><?php echo $table_res['SUBJ_CODE_FROM_SCHOOL'][$i]. ' '.$table_res['CRSE_NUMB_FROM_SCHOOL'][$i] ?></td>
                                 <td><?php echo $table_res['CRSE_TITLE_FROM_SCHOOL'][$i] ?></td>
                                 <td><?php echo $table_res['SHBTATC_CREDITS_FROM_SCHOOL'][$i] ?></td>
                                 <td><?php echo vsprintf(str_replace('~', '%s', $table_res['TEST'][$i]), explode(" ", $table_res['TEST_CON'][$i])) ?></td>
                                 <td><?php echo vsprintf(str_replace('~', '%s', substr($table_res['TEST1'][$i], 0, -2)), explode(" ", $table_res['TEST_CON'][$i])) ?></td>
                                 
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