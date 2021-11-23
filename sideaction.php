<?php 
                                              include 'config/config.php';
                                              $school = $_POST['state_id'];
                                              print_r($_POST);
                                              $query = "SELECT SBGI_CODE,CRSE_NUMB_FROM_SCHOOL, SUBJ_CODE_FROM_SCHOOL, CRSE_TITLE_FROM_SCHOOL, SHBTATC_CREDITS_FROM_SCHOOL, CONNECTOR_COL_ODU, CRSE_NUMB_INST_ODU, SUBJ_CODE_INST_ODU, INST_TITLE_ODU, INST_CREDITS_ODU FROM V_WX_EQUIVALENCY_LIST WHERE SBGI_CODE ='{$school}' ";
                                              $result = oci_parse($conn, $query);
                                              oci_execute($result);
                                              oci_fetch_all($result, $rec);
                                              $length = count($rec['STVSBGI_DESC']);
                                             // sort($rec['STVSBGI_DESC']);
                                             echo '<option value="" disabled selected>Select your School</option>';
                                              for ($i=0; $i < $length; $i++){ 
                                            
                                            echo '<option value = "'.$rec['STVSBGI_CODE'][$i].'"> '.$rec['STVSBGI_DESC'][$i].'</option>';
                                          }
                                         
                                          
                                      oci_close($conn);
                                          ?>