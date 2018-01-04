                <div style="width:100%;float:left">

                <select id="MyDevAreaDropDown<?php echo $new_dev_id;?>">
                        
                        <option value=''>Select an area to develop</option>
                        <?php 
                        $category = $this->custom->get_query_result('development_cat');
                        foreach ($category as $key => $value) { ?>
                                <option value='<?php echo $value['id'];?>'><?php echo $value['cat_name'];?></option>                                
                        <?php }
                        ?>

                </select>

                <br>	
                	
                	<div class="MyDevContentAct col-md-5" >
                		<p style="font-size:16pt;">In Place Development Activities</p>
                                <div id="MyDevContentAct<?php echo $new_dev_id;?>">
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

                		<table class="MyDevContentActInner" id="ActTbl<?php echo $new_dev_sub_id+2;?>">
                			<tr>
                				<td style="width:110px">
                					<label class="MyDevContentActInnerL">Action Item: </label>		
                				</td>
                				<td>
                					<select class="MyDevContentActInnerS" id="ActSel<?php echo $new_dev_sub_id+2;?>" onchange="fill_select_input('<?php echo $new_dev_sub_id+2;?>','Act')">
		                				<option value="">Choose an action</option>
                                                                <?php 
                                                                $category = $this->custom->get_query_result('development_sub_cat',"cat_name = 'act'");
                                                                foreach ($category as $key => $value) { ?>
                                                                        <option><?php echo $value['item_name'];?></option>                                
                                                                <?php }
                                                                ?>
		                			</select>
		                			<input type="text" style="width:48%;" id="ActFI<?php echo $new_dev_sub_id+2;?>" placeholder="Add Your Own"><br>
                				</td>                			
                			</tr>
                			<tr>
                				<td>
                					<label class="MyDevContentActInnerL">Goal Date: </label>		
                				</td>
                				<td>
                					<input class="MyDevContentActInnerI datepicker" id="ActSI<?php echo $new_dev_sub_id+2;?>" type="text" placeholder="Click to open Calender">		
                				</td>
                			</tr>
                			<tr>
                				<td collspan="2">
                					Note:
                				</td>
                			</tr>
                			<tr>
                				<td collspan="2" style="vertical-align:middle;">
                					<input type="checkbox" id="ActCh<?php echo $new_dev_sub_id+2;?>" onclick="add_new_development('<?php echo $new_dev_sub_id+2;?>','Act','<?php echo $new_dev_id;?>')"> Done
                				</td>
                			</tr>
                			<tr>
                				<td collspan="2">
                					<button id="ActRm<?php echo $new_dev_sub_id+2;?>" onclick="remove_development('<?php echo $new_dev_sub_id+2;?>','Act','2')">Remove</button>
                				</td>
                			</tr>

                		</table>
                                </div>
                                <div style="text-align:right;margin:0 auto;">
                                        <button style="padding:0 15px;margin:0 auto;" onclick="new_development_item('<?php echo $new_dev_id;?>','Act');">Add Action Item</button>
                                </div>

                	</div>

                	<div class="MyDevContentTra col-md-5" style="float:right;">
                		<p style="font-size:16pt;">Resources and Trainings</p>
                                <div id="MyDevContentTra<?php echo $new_dev_id;?>">
                		<table class="MyDevContentTraInner" id="TraTbl<?php echo $new_dev_sub_id+3;?>">
                			<tr>
                				<td style="width:140px">
                					<label class="MyDevContentTraInnerL">Training Course: </label>		
                				</td>
                				<td>
                					<select class="MyDevContentTraInnerS" id="TraSel<?php echo $new_dev_sub_id+3;?>" onchange="fill_select_input('<?php echo $new_dev_sub_id+3;?>','Tra')">
		                				<option value="">Choose an action</option>
                                                                <?php 
                                                                $category = $this->custom->get_query_result('development_sub_cat',"cat_name = 'tra'");
                                                                foreach ($category as $key => $value) { ?>
                                                                        <option><?php echo $value['item_name'];?></option>                                
                                                                <?php }
                                                                ?>
		                			</select>
		                			<input type="text" style="width:48%;" id="TraFI<?php echo $new_dev_sub_id+3;?>" placeholder="Add Your Own"><br>
                				</td>                			
                			</tr>
                			<tr>
                				<td>
                					<label class="MyDevContentTraInnerL">Goal Date: </label>		
                				</td>
                				<td>
                					<input class="MyDevContentTraInnerI datepicker" id="TraSI<?php echo $new_dev_sub_id+3;?>" type="text" placeholder="Click to open Calender">		
                				</td>
                			</tr>
                			<tr>
                				<td collspan="2">
                					Note:
                				</td>
                			</tr>
                			<tr>
                				<td collspan="2" style="vertical-align:middle;">
                					<input type="checkbox" id="TraCh<?php echo $new_dev_sub_id+3;?>" onclick="add_new_development('<?php echo $new_dev_sub_id+3;?>','Tra','<?php echo $new_dev_id;?>')"> Done
                				</td>
                			</tr>
                			<tr>
                				<td collspan="2">
                					<button id="TraRm<?php echo $new_dev_sub_id+3;?>" onclick="remove_development('<?php echo $new_dev_sub_id+3;?>','Tra','1')">Remove</button>
                				</td>
                			</tr>

                		</table>

                		<table class="MyDevContentTraInner" id="TraTbl<?php echo $new_dev_sub_id+4;?>">
                			<tr>
                				<td style="width:140px">
                					<label class="MyDevContentTraInnerL">Training Course: </label>		
                				</td>
                				<td>
                					<select class="MyDevContentTraInnerS" id="TraSel<?php echo $new_dev_sub_id+4;?>" onchange="fill_select_input('<?php echo $new_dev_sub_id+4;?>','Tra')">
		                				<option value="">Choose an action</option>
                                                                <?php 
                                                                $category = $this->custom->get_query_result('development_sub_cat',"cat_name = 'tra'");
                                                                foreach ($category as $key => $value) { ?>
                                                                        <option><?php echo $value['item_name'];?></option>                                
                                                                <?php }
                                                                ?>
		                			</select>
		                			<input type="text" style="width:48%;" id="TraFI<?php echo $new_dev_sub_id+4;?>" placeholder="Add Your Own"><br>
                				</td>                			
                			</tr>
                			<tr>
                				<td>
                					<label class="MyDevContentTraInnerL">Goal Date: </label>		
                				</td>
                				<td>
                					<input class="MyDevContentTraInnerI datepicker" id="TraSI<?php echo $new_dev_sub_id+4;?>" type="text" placeholder="Click to open Calender">		
                				</td>
                			</tr>
                			<tr>
                				<td collspan="2">
                					Note:
                				</td>
                			</tr>
                			<tr>
                				<td collspan="2" style="vertical-align:middle;">
                					<input type="checkbox" id="TraCh<?php echo $new_dev_sub_id+4;?>" onclick="add_new_development('<?php echo $new_dev_sub_id+4;?>','Tra','<?php echo $new_dev_id;?>')"> Done
                				</td>
                			</tr>
                			<tr>
                				<td collspan="2">
                					<button id="TraRm<?php echo $new_dev_sub_id+4;?>" onclick="remove_development('<?php echo $new_dev_sub_id+4;?>','Tra','2')">Remove</button>
                				</td>
                			</tr>

                		</table>
                                </div>
                                <div style="text-align:right;margin:0 auto;">
                                        <button style="padding:0 15px;margin:0 auto;" onclick="new_development_item('<?php echo $new_dev_id;?>','Tra');">Add Action Item</button>
                                </div>

                		</div>
                                </div>                                
                		                		
                	
                        