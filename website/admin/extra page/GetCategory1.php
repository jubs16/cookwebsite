<?php
session_start();
include 'conn.php';
?>
<select class="form-control select2" name="category" >
                                                                       <?php
                                                    $sql="select * from  officecategory";
													$q= mysql_query($sql);
                                                    echo '<option></option>';
                                                    while ($row = mysql_fetch_array($q)) 
                                                    {
                                                      echo '<option value="'.$row['category'].'">'.$row['category'].'</option>';
                                                     
                                                    }

                                                  ?>

                                                                    </select>