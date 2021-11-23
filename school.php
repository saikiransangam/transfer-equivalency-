<?php 
                                              include 'config/config.php';
                                              $school = $_POST['state_id']; 
                                              $query = "SELECT STVSBGI_CODE,STVSBGI_DESC FROM V_WX_SCHOOL_LIST WHERE  STVSTAT_CODE = '{$selectschool}' ORDER BY STVSBGI_DESC ASC";
                                              $result = oci_parse($conn, $query);
                                              oci_execute($result);
                                              oci_fetch_all($result, $rec);
                                              $length = count($rec['STVSBGI_DESC']);
                                             // sort($rec['STVSBGI_DESC']);
                                              for ($i=0; $i < $length; $i++){ 
                                          
                                            echo '<option value = "'.$rec['STVSBGI_CODE'][$i].'"> '.$rec['STVSBGI_DESC'][$i].'</option>';
                                          }
                                         
                                          
                                      oci_close($conn);
                                          ?>