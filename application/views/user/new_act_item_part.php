                		<table class="MyDevContentActInner" id="ActTbl<?php echo $new_dev_sub_id+1;?>">
                			<tr>
                				<td style="width:110px">
                					<label class="MyDevContentActInnerL">Action Item: </label>		
                				</td>
                				<td>
                					<select class="MyDevContentActInnerS" id="ActSel<?php echo $new_dev_sub_id+1;?>" onchange="fill_select_input('<?php echo $new_dev_sub_id+1;?>','Act')">
		                				<option value="">Choose an action</option>
                                                                <?php 
                                                                $category = $this->custom->get_query_result('development_sub_cat',"cat_name = 'act'");
                                                                foreach ($category as $key => $value) { ?>
                                                                        <option><?php echo $value['item_name'];?></option>                                
                                                                <?php }
                                                                ?>
		                			</select>
		                			<input type="text" style="width:48%;" id="ActFI<?php echo $new_dev_sub_id+1;?>" placeholder="Add Your Own"><br>
                				</td>                			
                			</tr>
                			<tr>
                				<td>
                					<label class="MyDevContentActInnerL">Goal Date: </label>		
                				</td>
                				<td>
                					<input class="MyDevContentActInnerI datepicker" id="ActSI<?php echo $new_dev_sub_id+1;?>" type="text" placeholder="Click to open Calender">		
                				</td>
                			</tr>
                			<tr>
                				<td collspan="2">
                					Note:
                				</td>
                			</tr>
                			<tr>
                				<td collspan="2" style="vertical-align:middle;">
                					<input type="checkbox" id="ActCh<?php echo $new_dev_sub_id+1;?>" onclick="add_new_development('<?php echo $new_dev_sub_id+1;?>','Act','<?php echo $new_dev_id;?>')"> Done
                				</td>
                			</tr>
                			<tr>
                				<td collspan="2">
                					<button id="ActRm<?php echo $new_dev_sub_id+1;?>" onclick="remove_development('<?php echo $new_dev_sub_id+1;?>','Act','<?php echo $new_dev_sub_id;?>')">Remove</button>
                				</td>
                			</tr>

                		</table> 

                		