                <h1>My 5 Year Development Plan</h1>
                <p>
                	Start by selecting a skill or competency that you need to develop from the drop down menu below.<br>
                	You can then select development activities and training to grow your experience in each area.
                </p>

                <br>                
                <?php
                $session_user = $this->session->userdata('login');
                $development_cat_result = $this->custom->get_query_string("SELECT DISTINCT(cat_name) as cat_name FROM development_details WHERE user_id = '$session_user[user_id]'");
                
                // echo "<pre>";print_r($development_cat_result);exit;
                ?>
                
                <div class="MyDevContentWrap" id="MyDevContentWrapDev"><!-- WRAP Start -->
                <?php
                $area_count = 1;
                $sub_area_count = $area_count;
                if($development_cat_result != 0)
                foreach ($development_cat_result as $value_cat) {                
                ?>
                <div style="width:100%;float:left">
                <select id="MyDevAreaDropDown<?php echo $area_count;?>">
                        
                        <option value=''>Select an area to develop</option>
                        <?php 
                        $category = $this->custom->get_query_result('development_cat');
                        foreach ($category as $value) { ?>
                                <option value='<?php echo $value['id'];?>' <?php if($value['id'] == $value_cat['cat_name']) echo 'selected';?>><?php echo $value['cat_name'];?></option>                                
                        <?php }
                        ?>

                </select>

                <br>	
                	
                	<div class="MyDevContentAct col-md-5">
                		<p style="font-size:16pt;">In Place Development Activities</p>
                                <div id="MyDevContentAct<?php echo $area_count;?>">
                                <?php

                                $development_sub_cat_result = $this->custom->get_query_result('development_details',array('user_id' => $session_user['user_id'], 'cat_name' => $value_cat['cat_name'], 'type' => 'Act'));
                                if($development_sub_cat_result != 0)
                                foreach ($development_sub_cat_result as $value_sub_cat) {
                                        
                                ?>

                		<table class="MyDevContentActInner" id="ActTbl<?php echo $sub_area_count;?>">
                			<tr>
                				<td style="width:110px">
                					<label class="MyDevContentActInnerL">Action Item: </label>		
                				</td>
                				<td>
                					<select class="MyDevContentActInnerS" id="ActSel<?php echo $sub_area_count;?>" onchange="fill_select_input('<?php echo $sub_area_count;?>','Act')">
		                				<option value="">Choose an action</option>
                                                                <?php 
                                                                $category = $this->custom->get_query_result('development_sub_cat',"cat_name = 'act'");
                                                                foreach ($category as $value) { ?>
                                                                        <option><?php echo $value['item_name'];?></option>                                
                                                                <?php }
                                                                ?>
		                			</select>
		                			<input type="text" style="width:48%;" id="ActFI<?php echo $sub_area_count;?>" value="<?php echo $value_sub_cat['item_name'];?>" placeholder="Add Your Own"><br>
                				</td>                			
                			</tr>
                			<tr>
                				<td>
                					<label class="MyDevContentActInnerL">Goal Date: </label>		
                				</td>
                				<td>
                					<input class="MyDevContentActInnerI datepicker" id="ActSI<?php echo $sub_area_count;?>" type="text" value="<?php echo $value_sub_cat['goal_date'];?>" placeholder="Click to open Calender">		
                				</td>
                			</tr>
                			<tr>
                				<td collspan="2">
                					Note:
                				</td>
                			</tr>
                			<tr>
                				<td collspan="2" style="vertical-align:middle;">
                					<input type="checkbox" checked id="ActCh<?php echo $sub_area_count;?>" onclick="add_new_development('<?php echo $sub_area_count;?>','Act','<?php echo $area_count;?>')"> Done
                				</td>
                			</tr>
                			<tr>
                				<td collspan="2">
                					<button id="ActRm<?php echo $sub_area_count;?>" onclick="remove_development('<?php echo $sub_area_count;?>','Act','<?php echo $value_sub_cat['id'];?>')">Remove</button>
                				</td>
                			</tr>                                        

                		</table>

                                <?php $sub_area_count++;} ?>
                                </div>
                		
                                <div style="text-align:right;margin:0 auto;">
                                        <button style="padding:0 15px;margin:0 auto;" onclick="new_development_item('<?php echo $area_count;?>','Act');">Add Action Item</button>
                                </div>

                	</div>

                	<div class="MyDevContentTra col-md-5" style="float:right;">
                		<p style="font-size:16pt;">Resources and Trainings</p>
                                <div id="MyDevContentTra<?php echo $area_count;?>">
                                <?php                                                          
                                $development_sub_cat_result = $this->custom->get_query_result('development_details',array('user_id' => $session_user['user_id'], 'cat_name' => $value_cat['cat_name'], 'type' => 'Tra'));
                                if($development_sub_cat_result != 0)
                                foreach ($development_sub_cat_result as $value_sub_cat) {                                        
                                
                                ?>

                		<table class="MyDevContentTraInner" id="TraTbl<?php echo $sub_area_count;?>">
                			<tr>
                				<td style="width:140px">
                					<label class="MyDevContentTraInnerL">Training Course: </label>		
                				</td>
                				<td>
                					<select class="MyDevContentTraInnerS" id="TraSel<?php echo $sub_area_count;?>" onchange="fill_select_input('<?php echo $sub_area_count+1;?>','Tra')">
		                				<option value="">Choose an action</option>
                                                                <?php 
                                                                $category = $this->custom->get_query_result('development_sub_cat',"cat_name = 'tra'");
                                                                foreach ($category as $value) { ?>
                                                                        <option><?php echo $value['item_name'];?></option>                                
                                                                <?php }
                                                                ?>
		                			</select>
		                			<input type="text" style="width:48%;" id="TraFI<?php echo $sub_area_count;?>" value="<?php echo $value_sub_cat['item_name'];?>" placeholder="Add Your Own"><br>
                				</td>                			
                			</tr>
                			<tr>
                				<td>
                					<label class="MyDevContentTraInnerL">Goal Date: </label>		
                				</td>
                				<td>
                					<input class="MyDevContentTraInnerI datepicker" id="TraSI<?php echo $sub_area_count;?>" type="text" value="<?php echo $value_sub_cat['goal_date'];?>" placeholder="Click to open Calender">		
                				</td>
                			</tr>
                			<tr>
                				<td collspan="2">
                					Note:
                				</td>
                			</tr>
                			<tr>
                				<td collspan="2" style="vertical-align:middle;">
                					<input type="checkbox" checked id="TraCh<?php echo $sub_area_count;?>" onclick="add_new_development('<?php echo $sub_area_count;?>','Tra','<?php echo $area_count;?>')"> Done
                				</td>
                			</tr>
                			<tr>
                				<td collspan="2">
                					<button id="TraRm<?php echo $sub_area_count;?>" onclick="remove_development('<?php echo $sub_area_count;?>','Tra','<?php echo $value_sub_cat['id'];?>')">Remove</button>
                				</td>
                			</tr>

                		</table>

                                <?php $sub_area_count++; } ?>
                                </div>
                		<div style="text-align:right;margin:0 auto;">
                                        <button style="padding:0 15px;margin:0 auto;" onclick="new_development_item('<?php echo $area_count;?>','Tra');">Add Action Item</button>
                                </div>

                		</div>
                                </div>
                                <?php $area_count++; } ?>
                                <script type="text/javascript">
                                var count_dev_part = <?php echo $area_count;?>;
                                var count_dev_sub_part = <?php echo $sub_area_count;?>;
                                </script>                                
                		                		
                	</div><!-- WRAP END -->	
                                <div style="text-align:center;margin:0 auto;">
                                        <button style="padding:0 15px;margin:0 auto;" onclick="new_development_area();">Add Another area to Development Plan</button>
                                </div>
                        