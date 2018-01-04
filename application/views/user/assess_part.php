<?php
$session_user = $this->session->userdata('login');
$assessment_result = $this->custom->get_query_row('assessment_details',array('user_id'=> $session_user['user_id']));
?>
					<style type="text/css">
					.selector{
						width:90%;
					}
					.selectorActive{						
						border-radius:5px;
						float:left;
						background:#2d8fea;
						height:10px;
						color: rgba(0,0,0,0);
					}
					.selectorToolstrp{
						border-radius:5px;						
						background:#2d8fea;
						height:20px;
						width: 25px;
						color: #fff;
						padding:0 0.7%;
						position:relative;
						float:right;
						margin-right:2%;												
					}
					table th, table td {
					    border: solid 6px rgba(0,0,0,0);
					}					
					</style>

					<h1>Skill and Competency Assessment</h1>
	                <p>
	                	Evaluate your current lavel of experience and proficiency in each of the following skill areas and competencies
	                	to help measure your progress and readiness to assume your aspired role.<br> This tool will be most beneficial if
	                	you give yourself honestand unbiased feedback. For a more balance view you can also request feedback from others
	                	you work with.
	                </p>

	                <br>

	                <div class="MyDevContentWrap" id="MyDevContentWrapAss"><!-- WRAP END -->	
                	
	                	<div class="col-sm-6">
	                		<p style="font-size:16pt;">Skill Sets:</p>
	                		<table style="width:100%;border-collapse: separate;">
	                			<tr>
	                				<th style="width:70%;"></th>
	                				<th style="width:30%;text-align:center;">Rating</th>
	                			</tr>
	                			<tr>
	                				<td>
	                					Risk Assessment/ Management <div class="selectorToolstrp" id="ToolstrpAssSc1">&nbsp;<?php echo $assessment_result['AssSc1'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssSc1'];?>" id="AssSc1"><div class="selectorActive" id="AssSc1_active" style="width:<?php echo $assessment_result['AssSc1'];?>%;">.</div></div>	                						                						                						                					
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>
	                					Business Acumen <div class="selectorToolstrp" id="ToolstrpAssSc2">&nbsp;<?php echo $assessment_result['AssSc2'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssSc2'];?>" id="AssSc2"><div class="selectorActive" id="AssSc2_active" style="width:<?php echo $assessment_result['AssSc2'];?>%;">.</div></div>
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>
	                					Talent Development <div class="selectorToolstrp" id="ToolstrpAssSc3">&nbsp;<?php echo $assessment_result['AssSc3'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssSc3'];?>" id="AssSc3"><div class="selectorActive" id="AssSc3_active" style="width:<?php echo $assessment_result['AssSc3'];?>%;">.</div></div>
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>
	                					Vendor/ supplier Management <div class="selectorToolstrp" id="ToolstrpAssSc4">&nbsp;<?php echo $assessment_result['AssSc4'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssSc4'];?>" id="AssSc4"><div class="selectorActive" id="AssSc4_active" style="width:<?php echo $assessment_result['AssSc4'];?>%;">.</div></div>
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>
	                					IT Control Standard <div class="selectorToolstrp" id="ToolstrpAssSc5">&nbsp;<?php echo $assessment_result['AssSc5'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssSc5'];?>" id="AssSc5"><div class="selectorActive" id="AssSc5_active" style="width:<?php echo $assessment_result['AssSc5'];?>%;">.</div></div>
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>
	                					Budget management <div class="selectorToolstrp" id="ToolstrpAssSc6">&nbsp;<?php echo $assessment_result['AssSc6'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssSc6'];?>" id="AssSc6"><div class="selectorActive" id="AssSc6_active" style="width:<?php echo $assessment_result['AssSc6'];?>%;">.</div></div>
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>
	                					Organizational Agility <div class="selectorToolstrp" id="ToolstrpAssSc7">&nbsp;<?php echo $assessment_result['AssSc7'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssSc7'];?>" id="AssSc7"><div class="selectorActive" id="AssSc7_active" style="width:<?php echo $assessment_result['AssSc7'];?>%;">.</div></div>
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>
	                					Regulatory Knowledge <div class="selectorToolstrp" id="ToolstrpAssSc8">&nbsp;<?php echo $assessment_result['AssSc8'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssSc8'];?>" id="AssSc8"><div class="selectorActive" id="AssSc8_active" style="width:<?php echo $assessment_result['AssSc8'];?>%;">.</div></div>
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>
	                					Incident Response <div class="selectorToolstrp" id="ToolstrpAssSc9">&nbsp;<?php echo $assessment_result['AssSc9'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssSc9'];?>" id="AssSc9"><div class="selectorActive" id="AssSc9_active" style="width:<?php echo $assessment_result['AssSc9'];?>%;">.</div></div>
	                				</td>
	                			</tr>	                			
	                		</table>
	                		

	                	</div>

	                	<div class="col-sm-6">
	                		<p style="font-size:16pt;">Competencies</p>

	                		<table style="width:100%;">
	                			<tr>
	                				<th style="width:70%;"></th>
	                				<th style="width:30%;text-align:center;">Rating</th>
	                			</tr>
	                			<tr>
	                				<td>
	                					Relationship Management <div class="selectorToolstrp" id="ToolstrpAssCo1">&nbsp;<?php echo $assessment_result['AssCo1'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssCo1'];?>" id="AssCo1"><div class="selectorActive" id="AssCo1_active" style="width:<?php echo $assessment_result['AssCo1'];?>%;">.</div></div>
	                					
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>
	                					Team Work <div class="selectorToolstrp" id="ToolstrpAssCo2">&nbsp;<?php echo $assessment_result['AssCo2'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssCo2'];?>" id="AssCo2"><div class="selectorActive" id="AssCo2_active" style="width:<?php echo $assessment_result['AssCo2'];?>%;">.</div></div>
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>
	                					Process Oriented <div class="selectorToolstrp" id="ToolstrpAssCo3">&nbsp;<?php echo $assessment_result['AssCo3'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssCo3'];?>" id="AssCo3"><div class="selectorActive" id="AssCo3_active" style="width:<?php echo $assessment_result['AssCo3'];?>%;">.</div></div>
	                				</td>
	                			</tr>	                			
	                			<tr>
	                				<td>
	                					Decision Making <div class="selectorToolstrp" id="ToolstrpAssCo4">&nbsp;<?php echo $assessment_result['AssCo4'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssCo4'];?>" id="AssCo4"><div class="selectorActive" id="AssCo4_active" style="width:<?php echo $assessment_result['AssCo4'];?>%;">.</div></div>
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>
	                					Influencing <div class="selectorToolstrp" id="ToolstrpAssCo5">&nbsp;<?php echo $assessment_result['AssCo5'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssCo5'];?>" id="AssCo5"><div class="selectorActive" id="AssCo5_active" style="width:<?php echo $assessment_result['AssCo5'];?>%;">.</div></div>
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>
	                					Creativity <div class="selectorToolstrp" id="ToolstrpAssCo6">&nbsp;<?php echo $assessment_result['AssCo6'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssCo6'];?>" id="AssCo6"><div class="selectorActive" id="AssCo6_active" style="width:<?php echo $assessment_result['AssCo6'];?>%;">.</div></div>
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>
	                					Learning Ability <div class="selectorToolstrp" id="ToolstrpAssCo7">&nbsp;<?php echo $assessment_result['AssCo7'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssCo7'];?>" id="AssCo7"><div class="selectorActive" id="AssCo7_active" style="width:<?php echo $assessment_result['AssCo7'];?>%;">.</div></div>
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>
	                					Analytical Ability <div class="selectorToolstrp" id="ToolstrpAssCo8">&nbsp;<?php echo $assessment_result['AssCo8'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssCo8'];?>" id="AssCo8"><div class="selectorActive" id="AssCo8_active" style="width:<?php echo $assessment_result['AssCo8'];?>%;">.</div></div>
	                				</td>
	                			</tr>	                			
	                			<tr>
	                				<td>
	                					Organizational Awareness <div class="selectorToolstrp" id="ToolstrpAssCo9">&nbsp;<?php echo $assessment_result['AssCo9'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssCo9'];?>" id="AssCo9"><div class="selectorActive" id="AssCo9_active" style="width:<?php echo $assessment_result['AssCo9'];?>%;">.</div></div>
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>
	                					Prioritization <div class="selectorToolstrp" id="ToolstrpAssCo10">&nbsp;<?php echo $assessment_result['AssCo10'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssCo10'];?>" id="AssCo10"><div class="selectorActive" id="AssCo10_active" style="width:<?php echo $assessment_result['AssCo10'];?>%;">.</div></div>
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>
	                					Business Results-Oriented <div class="selectorToolstrp" id="ToolstrpAssCo11">&nbsp;<?php echo $assessment_result['AssCo11'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssCo11'];?>" id="AssCo11"><div class="selectorActive" id="AssCo11_active" style="width:<?php echo $assessment_result['AssCo11'];?>%;">.</div></div>
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>
	                					Communication <div class="selectorToolstrp" id="ToolstrpAssCo12">&nbsp;<?php echo $assessment_result['AssCo12'] / 20;?>&nbsp;</div>
	                				</td>
	                				<td>
	                					<div class="selector" value="<?php echo $assessment_result['AssCo12'];?>" id="AssCo12"><div class="selectorActive" id="AssCo12_active" style="width:<?php echo $assessment_result['AssCo12'];?>%;">.</div></div>
	                				</td>
	                			</tr>	                				                			
	                		</table>                		

                		</div>
                		<div style="text-align:center;float:left;width:95%;margin-top:5%;">
			            	<button style="padding:0 15px;margin:0 auto;" class="btn btn-info" id="assessmentUpdate">Update</button>
			            </div>
			            <div style="float:left;"><a style="color:#217198;" href="mailto:test@test.com">Send your manager a link to access your skill set</a></div>          
			            <div style="float:right;"><a style="color:#217198;" href="mailto:test@test.com">Send your peers a link to access your skill set</a></div>                		
                	</div><!-- WRAP END -->

	                