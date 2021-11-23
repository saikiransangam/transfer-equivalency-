<?php
                                    // print_r($_POST);
                                      include "config/config.php"; 
                                      $records = "SELECT SBGI_CODE,CRSE_NUMB_FROM_SCHOOL, SUBJ_CODE_FROM_SCHOOL, CRSE_TITLE_FROM_SCHOOL, SHBTATC_CREDITS_FROM_SCHOOL, CONNECTOR_COL_ODU, CRSE_NUMB_INST_ODU, SUBJ_CODE_INST_ODU, INST_TITLE_ODU, INST_CREDITS_ODU FROM V_WX_EQUIVALENCY_LIST WHERE SBGI_CODE ='".$_POST['school_state']."'  ORDER BY SUBJ_CODE_FROM_SCHOOL ASC"; 
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
                                 <td><?php echo '<input type="checkbox" id="checkbox" name="value" value="course">' ?></td>
                                 <td><?php echo $table_res['SUBJ_CODE_FROM_SCHOOL'][$i]. ' '.$table_res['CRSE_NUMB_FROM_SCHOOL'][$i] ?></td>
                                 <td><?php echo $table_res['CRSE_TITLE_FROM_SCHOOL'][$i] ?></td>
                                 <td><?php echo $table_res['SHBTATC_CREDITS_FROM_SCHOOL'][$i] ?></td>
                                 <td><?php echo $table_res['SUBJ_CODE_INST_ODU'][$i]. ' '.$table_res['CRSE_NUMB_INST_ODU'][$i]?></td>
                                 <td><?php echo $table_res['INST_TITLE_ODU'][$i]?></td>
                                 <td><?php echo $table_res['INST_CREDITS_ODU'][$i]?></td>
                               </tr>
                               <?php         } 
                                      
                                  
                                      oci_close($conn); ?>