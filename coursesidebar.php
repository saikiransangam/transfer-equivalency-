<?php 
                                              include 'config/config.php';
                                              $subject = $_POST['subject_id'];
                                              $school = $_POST['school_id']; 
                                              $query = "SELECT DISTINCT CRSE_NUMB_FROM_SCHOOL FROM V_WX_EQUIVALENCY_LIST WHERE  SBGI_CODE = '{$school}' AND SUBJ_CODE_FROM_SCHOOL = '{$subject}' ORDER BY CRSE_NUMB_FROM_SCHOOL ASC";
                                              $result = oci_parse($conn, $query);
                                              oci_execute($result);
                                              oci_fetch_all($result, $rec);
                                              $length = count($rec['CRSE_NUMB_FROM_SCHOOL']);
                                             
                                              for ($i=0; $i < $length; $i++){ 
                                          
                                            echo '<option value = "'.$rec['SBGI_CODE'][$i].'"> '.$rec['CRSE_NUMB_FROM_SCHOOL'][$i].'</option>';
                                          }
                                         
                                          
                                      oci_close($conn);
                                          ?>