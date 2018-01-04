                		<table class="MyDevContentTraInner" id="TraTbl<?php echo $new_dev_sub_id;?>">
                                        <tr>
                                                <td style="width:140px">
                                                        <label class="MyDevContentTraInnerL">Training Course: </label>          
                                                </td>
                                                <td>
                                                        <select class="MyDevContentTraInnerS" id="TraSel<?php echo $new_dev_sub_id;?>" onchange="fill_select_input('<?php echo $new_dev_sub_id;?>','Tra')">
                                                                <option value="">Choose an action</option>
                                                                <?php 
                                                                $category = $this->custom->get_query_result('development_sub_cat',"cat_name = 'tra'");
                                                                foreach ($category as $key => $value) { ?>
                                                                        <option><?php echo $value['item_name'];?></option>                                
                                                                <?php }
                                                                ?>
                                                        </select>
                                                        <input type="text" style="width:48%;" id="TraFI<?php echo $new_dev_sub_id;?>" placeholder="Add Your Own"><br>
                                                </td>                                   
                                        </tr>
                                        <tr>
                                                <td>
                                                        <label class="MyDevContentTraInnerL">Goal Date: </label>                
                                                </td>
                                                <td>
                                                        <input class="MyDevContentTraInnerI datepicker" id="TraSI<?php echo $new_dev_sub_id;?>" type="text" placeholder="Click to open Calender">             
                                                </td>
                                        </tr>
                                        <tr>
                                                <td collspan="2">
                                                        Note:
                                                </td>
                                        </tr>
                                        <tr>
                                                <td collspan="2" style="vertical-align:middle;">
                                                        <input type="checkbox" id="TraCh<?php echo $new_dev_sub_id;?>" onclick="add_new_development('<?php echo $new_dev_sub_id;?>','Tra','<?php echo $new_dev_id;?>')"> Done
                                                </td>
                                        </tr>
                                        <tr>
                                                <td collspan="2">
                                                        <button id="TraRm<?php echo $new_dev_sub_id;?>" onclick="remove_development('<?php echo $new_dev_sub_id;?>','Tra','1')">Remove</button>
                                                </td>
                                        </tr>

                                </table> 

                		