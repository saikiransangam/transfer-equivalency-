<?php
                                      //print_r($_POST);
                                      include "config/config.php";
                                      $school = $_POST['state_id'];
                                      $subject = $_POST['subject_id'];
                                      $course = $_POST['course_id'];
                                      $records = "";
                                      if(isset($school)){
                                      $records = "SELECT SBGI_CODE, CRSE_NUMB_FROM_SCHOOL, SUBJ_CODE_FROM_SCHOOL, CRSE_TITLE_FROM_SCHOOL, SHBTATC_CREDITS_FROM_SCHOOL, SUM(INST_CREDITS_ODU) AS INST_CREDITS_ODU, COUNT(CRSE_NUMB_FROM_SCHOOL),
                                      LISTAGG(SUBJ_CODE_INST_ODU || ' ' || CRSE_NUMB_INST_ODU, ' ~ ') AS test
                                      ,LISTAGG(DECODE(CONNECTOR_COL_ODU, 'NULL','', TRIM(CONNECTOR_COL_ODU)), ' ') as test_con
                                      ,LISTAGG(INST_TITLE_ODU || ' ' || '~ ' ) AS TEST1
                                      FROM V_WX_EQUIVALENCY_LIST  WHERE SBGI_CODE ='{'$school'}'";
                                      }
                                      
                                      if(isset($subject_id)){
                                        $records = $records."AND SUBJ_CODE_FROM_SCHOOL = '{'$subject'}'";
                                      }

                                      if(isset($course)){
                                        $records = $records."AND CRSE_NUMB_FROM_SCHOOL = '{'$course'}'";
                                      }
                                      //$records = $records."decode(CONNECTOR_COL_ODU,'NULL', '')";
                                      $records = $records."GROUP BY SBGI_CODE, CRSE_NUMB_FROM_SCHOOL, SUBJ_CODE_FROM_SCHOOL, CRSE_TITLE_FROM_SCHOOL, SHBTATC_CREDITS_FROM_SCHOOL ORDER BY SUBJ_CODE_FROM_SCHOOL ASC, CRSE_NUMB_FROM_SCHOOL"; 
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
                                 <td><?php echo '<input type="checkbox"  data-placement="bottom" title class="select-checkbox"  id ="course_fav" data-orginal-title="Add To Favourites">'?></td>
                                 <td><?php echo $table_res['SUBJ_CODE_FROM_SCHOOL'][$i]. ' '.$table_res['CRSE_NUMB_FROM_SCHOOL'][$i] ?></td>
                                 <td><?php echo $table_res['CRSE_TITLE_FROM_SCHOOL'][$i] ?></td>
                                 <td><?php echo $table_res['SHBTATC_CREDITS_FROM_SCHOOL'][$i] ?></td>
                                 <td><?php echo vsprintf(str_replace('~', '%s', $table_res['TEST'][$i]), explode(" ", $table_res['TEST_CON'][$i])) ?></td>
                                 <td><?php echo vsprintf(str_replace('~', '%s', substr($table_res['TEST1'][$i], 0, -2)), explode(" ", $table_res['TEST_CON'][$i])) ?></td>
                                 <td><?php echo $table_res['INST_CREDITS_ODU'][$i]?></td>
                               </tr>
                               <?php         }
                                      
                                  
                                      oci_close($conn); ?>
                                      