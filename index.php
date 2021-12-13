<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/main.css">   
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- W3 schools -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" rel="stylesheet"/>
    <script src="subject.js"></script>
  </head>
  <body>
  <script>
         $(document).ready(function(){
             var st= document.getElementById("sel1").value;
        $.ajax({
            url: 'data.php',
            type: 'POST',
            datatype: 'json',
            data: {state_id: st},
            
            success: function(html){
                $('#school').append(html);
            },
            error: function(){
                alert("error");
            }


           });
           /*$.post("data.php",{
               sate: document.getElementById("sel1").value}

           },
           function(data,status){
               alert("Data:" + data + "\nStatus:" +status);
           });*/
           //console.log(st);
           //console.log('hello');
           //console.log(document.getElementById("sel1").value);

           $('#sel1').change(function(){
            var st= document.getElementById("sel1").value;
            $.ajax({
                url: 'data.php',
                type: 'POST',
                datatype: 'json',
                data: {state_id: st},
                
                success: function(html){
                    $('#school').empty();
                    $('#subject').empty();
                    $('#course').empty();
                    $('#school').append(html);
                },
                error: function(){
                    alert("error");
                }


            });
        });



        $('#school').change(function(){
            var selected_school = document.getElementById("school").value;
            $.ajax({
                url: 'subject.php',
                type: 'POST',
                datatype: 'json',
                data: {school_id: selected_school},
                
                success: function(html){
                    $('#subject').empty();
                    $('#course').empty();
                    $('#subject').append(html);
                },
                error: function(){
                    alert("error");
                }


            });
        });

           

        $('#subject').change(function(){
            var subject= document.getElementById("subject").value;
            var selected_school = document.getElementById("school").value;
            $.ajax({
                url: 'courseselect.php',
                type: 'POST',
                datatype: 'json',
                data: {subject_id: subject,
                    school_id : selected_school},
                
                success: function(html){
                    $('#course').empty();
                    $('#course').append(html);
                },
                error: function(){
                    alert("error");
                }


            });
        });




       });
       
        </script>
       
       <script>
        /* $(document).ready(function(){
             var cid= document.getElementById("subject").value;
        $.ajax({
            url: 'courseselect.php',
            type: 'POST',
            datatype: 'json',
            data: {course_id: cid},
            
            success: function(html){
                $('#course').append(html);
            },
            error: function(){
                alert("error");
            }


           });
       
           

           
       });*/
       
        </script>

      <!-- Navabar Implementation for large screens-->
        <nav style="background-color: #00223d;" class="navbar navbar-expand-sm navbar-dark">
                <a class="navbar-brand style" href="index.php">
                    <img src="image/logo.PNG" alt="Logo" style="width:120px;">
                </a>
        </nav>
      <!-- Navbar ends -->

         <!-- Implementing the code for the panel-->
         
            <div class="parallax w3-container">
                
                    <div class="row h-25"></div>
                       <div class="row">
                       
                          <div class="col-2"></div>
                              <div id="outerbox" style="background: rgba(20, 20, 20, 0.7);" class="col-8 w3-center">
                                    <div class="innerbox">
                                        <div style="" class="w3-panel paneleffect">

                                            <!-- Container for Choose your state -->

                                             <div class="container">
                                                 <div class="fontbanner pt-1 pb-3" style="color: white; font-size: 40px; font-weight: 600;">Course By Course Equivalency</div>
                                                 <div class=" pt-4 frontformfont" style="font-weight: bold;">Choose Your State</div>
                                                 <div class="pb-3 pt-1 frontformfont" style="font-size: 1em; font-weight: ;">{ Military Credits: District Of Columbia }</div>

                                                <div class="row mb-2">
                                                    <div class="col-sm-3"></div>
                                                        <div class="col-sm-6">
                                                        <form  class="mainform" action="courses.php" method="POST" autocomplete="off">
                                                             <div class="form-group">
                                                                <select style="color:black; font-weight:400" class="form-control form-control-sm col-sm-12 selectstate selectchange" id="sel1" name="state_state" required>
                                                                
                                                                    <?php
                                                                        include 'config/config.php';
                                                                        $sql = "SELECT DISTINCT STVSTAT_CODE,STVSTAT_DESC FROM V_WX_SCHOOL_LIST order by STVSTAT_DESC asc";
                                                                        $result = oci_parse($conn, $sql);
                                                                        oci_execute($result);
                                                                        oci_fetch_all($result, $res); 
                                                                        echo '<option>All States</option>';
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
                                                                    <!--    <div class="mt-4">
                                                                    <button type="button" id="nexthide" class="btn btn-primary btn-sm col-sm-4" >Next</button>
                                                                    </div>  -->
                                                            </div>
                                                        </div>
                                                            <div class="col-sm-3"></div>
                                                    </div>
                                             </div>
                                             <!-- Choose your state ends -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-3 backmrg">
                                                            <!--  <div class="carousel-control-prev backbtn ">
                                                            <span class="carousel-control-prev-icon"></span>
                                                            </div> -->
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="required frontformfont pt-1" style="font-weight: bold; margin-bottom: -4px;" >
                                                                <label>Search Your School Name</label></div><span style="color:red; display:none" class="validate_search">Please Select School</span>
                                                        </div>
                                                        <div class="col-sm-3"></div>
                                                    </div>
                                                </div>
                                            </div>
                                                <!-- Form for School dropdown and Advanced search -->
                                                <div  class="container mt-3">
                                                        <div  class="form-group">   
                                                            <div class="row mb-4">
                                                                <div class="col-sm-3">
                                                                </div>

                                                                <!-- Div for School Search dropdown -->
                                                                <div  class="col-sm-6 input-group mb-3 breakw">
                                                                <!-- <input class="hideinput" style="display:none" name="school_state" />
                                                                <input class="hideinput1" style="display:none" name="state_state" /> -->
                                                                <!--  <input class="hideinput2" style="display:none" name="sbgi_value" /> -->

                                                                <select id="school"  type="button"  name="school_state" value="School Name" class="btn btn-light btn-sm col-sm-12 schoolclick marg" placeholder="Choose School" required>
                                                                         <span class="buttontext" style="float:left">School  Name</span>
                                                                         <span style="float:right; font-size: 0.7em; margin-right: -3px; padding-top: 2px;">&#9660;</span>
                                                                          
                                                                </select>
                                                                <div style="clear: both;"></div>
                                                                    <div class="schoolhide container" style="background-color: white; margin-top:0.   6px; display:none">
                                                                        <div class="row p-2">
                                                                            <input id="" style="background: rgba(255, 255, 255, 1); color: rgba(0, 0, 0, 1); font-weight: bold" type="text" class="form-control form-control-sm col-sm-12 mb-2 schoolfiltersearch " placeholder="Search School.."><!--<span class="rounded-circle fun marg"></span>-->
                                                                            <div class="col-sm-12" style="height:110px; overflow: auto; background-color: white; border: 1px solid #DCDCDC; font-size: 0.8em;">
                                                                            </div>
                                                                </div>

                                     </div>

                                </div>

                                <!-- School dropdown ends -->

                                 <!-- Search Button -->
                                <div class="col-sm-3 resizesr">
                                    <div class="input-group-btn" >
                                    <button  class="btn btn-primary btn-sm srchbtn col-sm-12" name="landing_submit" type="submit">Search</button>
                                </div>
                               
                                  </div>
                                 
                                <!-- Search Button ends -->
                                </div>
                                <div class="advs float-right pt-4">
                                <div class="col-sm-12 resizer">
                                <div class="btn btn-primary btn-sm srcbtn col-sm-12"  data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Advance Search</div>
                                </div></div>
                                <!--advance search toggle-->
                                
                                <!--advance search-->
                                <!--<div class ="container-fluid">
                                    <div class="row mb-3 form-group mt-5">
                                        <div class="col-sm-1"></div>-->
                                        <!--select subject-->
                                       <!-- <div class="col-sm-4 mb-3">
                                            <button type="button" class="btn btn-light btn-sm col-sm-12">
                                                <span style="float:left">Subject</span>
                                                <span style="float:right">&#8744;</span>
                                            </button>
                                              <div style="clear: both;"></div>
                                                <div style="margin-top: 1px;">
                                                    <input id="subject" style="background"-->.
                                                    <!--Subject select-->
                                                    <div class="collapse" id="collapseExample">
                                                    <div class="card card-body">
                                                    <div class="row mb-2">
                                                    <div class="col-sm-1"></div>
                                                        <div class="col-sm-4">
                                                        <!--<form  class="mainform" action="courses.php" method="POST" autocomplete="off">-->
                                                             <div class="form-group">
                                                                <select style="color:black; font-weight:400" class="form-control form-control-sm col-sm-8 selectsubject selectchange" id="subject" name="select_subject">
                                                                <option value="" disabled selected>Select Subject</option>
                                                                    </select></div></div>
                                                                    
                                                       <!--Course Select-->           
                                                    <div class="col-sm-1"></div>
                                                        <div class="col-sm-4">
                                                       <!-- <form  class="mainform" action="courses.php" method="POST" autocomplete="off">-->
                                                             <div class="form-group">
                                                                <select style="color:black; font-weight:400" class="form-control form-control-sm col-sm-8 selectcourse selectchange" id="course" name="select_course">
                                                                <option value="" disabled selected hidden>Select Course</option>
                                                                    </select></div></div>
                                                                    
                                                                   <!-- <div class="input-group-btn" >
                                    <button  class="btn btn-primary btn-sm srchbtn col-sm-12"  name="advance_submit" type="submit">Advance Search</button>
                                </div>-->
  
        </div>         
      </div> 
                                                                    </div>
                                                                    </div>     
                    

        </form> 
            
     
     
            
  </body>
   
</html>