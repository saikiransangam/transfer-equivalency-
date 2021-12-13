<?php
                                      //print_r($_POST);
                                      include "config/config.php";
                                      $records = "";
                                      if(isset($_POST['school_id'])){
                                      $records = "SELECT SBGI_CODE, CRSE_NUMB_FROM_SCHOOL, SUBJ_CODE_FROM_SCHOOL, CRSE_TITLE_FROM_SCHOOL, SHBTATC_CREDITS_FROM_SCHOOL, SUM(INST_CREDITS_ODU) AS INST_CREDITS_ODU,
                                      LISTAGG(SUBJ_CODE_INST_ODU || ' ' || CRSE_NUMB_INST_ODU,'<BR>'||' ~ ' || '<BR>') AS test
                                      ,LISTAGG(DECODE(CONNECTOR_COL_ODU, 'NULL','', TRIM(CONNECTOR_COL_ODU)), ' ') as test_con
                                      ,LISTAGG(INST_TITLE_ODU || '<BR>' || '~ ','<BR> ') AS TEST1
                                      FROM V_WX_EQUIVALENCY_LIST  WHERE SBGI_CODE ='".$_POST['school_id']."'";
                                      }
                                      
                                      if(isset($_POST['subject_id'])){
                                        $records = $records."AND SUBJ_CODE_FROM_SCHOOL = '".$_POST['subject_id']."' ";
                                      }

                                      if(isset($_POST['course_id'])){
                                        $records = $records."AND CRSE_NUMB_FROM_SCHOOL = '".$_POST['course_id']."' ";
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
                                 <td><?php echo '<input type="checkbox" data-toggle="tooltip" data-placement="bottom" title class="select-checkbox" data-orginal-title="Add To Favourites">'?>
                                 <td><?php echo $table_res['SUBJ_CODE_FROM_SCHOOL'][$i]. ' '.$table_res['CRSE_NUMB_FROM_SCHOOL'][$i] ?></td>
                                 <td><?php echo $table_res['CRSE_TITLE_FROM_SCHOOL'][$i] ?></td>
                                 <td><?php echo $table_res['SHBTATC_CREDITS_FROM_SCHOOL'][$i] ?></td>
                                 <td><?php echo vsprintf(str_replace('~', '%s', $table_res['TEST'][$i]), explode(" ", $table_res['TEST_CON'][$i])) ?></td>
                                 <td><?php echo str_replace('~', explode(" ", $table_res['TEST_CON'][$i])[0],  substr($table_res['TEST1'][$i], 0, -2)) ?></td>
                                 <td><?php echo $table_res['INST_CREDITS_ODU'][$i]?></td>
                               </tr>
                               <?php         }
                                      
                                  
                                      oci_close($conn); ?>