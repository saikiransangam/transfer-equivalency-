<?php 
                                              include 'config/config.php';
                                              $school = $_POST['school_id']; 
                                              $query = "SELECT DISTINCT SBGI_CODE,SUBJ_CODE_FROM_SCHOOL FROM V_WX_EQUIVALENCY_LIST WHERE  SBGI_CODE = '{$school}' ORDER BY SUBJ_CODE_FROM_SCHOOL ASC";
                                              $result = oci_parse($conn, $query);
                                              oci_execute($result);
                                              oci_fetch_all($result, $rec);
                                              $length = count($rec['SUBJ_CODE_FROM_SCHOOL']);
                                             // sort($rec['STVSBGI_DESC']);
                                              for ($i=0; $i < $length; $i++){ 
                                          
                                            echo '<option value = "'.$rec['SUBJ_CODE_FROM_SCHOOL'][$i].'"> '.$rec['SUBJ_CODE_FROM_SCHOOL'][$i].'</option>';
                                          }
                                         
                                          
                                      oci_close($conn);
                                          ?>