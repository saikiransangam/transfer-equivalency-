<?php
                                      include "config/config.php"; 
                                      $records = "SELECT CRSE_NUMB_FROM_SCHOOL, SUBJ_CODE_FROM_SCHOOL, CRSE_TITLE_FROM_SCHOOL, SHBTATC_CREDITS_FROM_SCHOOL, CONNECTOR_COL_ODU, CRSE_NUMB_INST_ODU, SUBJ_CODE_INST_ODU, INST_TITLE_ODU FROM V_WX_EQUIVALENCY_LIST";
                                      oci_execute($records);
                                      oci_fetch_all($records, $rec);
                                      while ($row = oci_fetch_array($records)){
                                      echo "<table>";
                                      echo "<tr>";
                                      echo "<td>" . $row['SUBJ_CODE_FROM_SCHOOL  CRSE_NUMB_FROM_SCHOO']. "</td>";
                                      echo "<td>" . $row['CRSE_TITLE_FROM_SCHOOL'] . "</td>";
                                      echo "<td>" . $row['SHBTATC_CREDITS_FROM_SCHOOL'] . "</td>";
                                      echo "<td>" . $row['SUBJ_CODE_INST_ODU  CRSE_NUMB_INST_ODU'] . "</td>";
                                      echo "<td>" . $row['INST_TITLE_ODU'] . "</td>";
                                      echo "<td>" . $row['INST_CREDITS_ODU'] . "</td>";
                                      echo "</tr>";
                                      echo "</table>"; 
                                      oci_close($conn);
                                      }?>
               