						<style type="text/css">
						.required_honey_field{
							margin: 15px 0;
						}
						.req_div{
							display: none;
						}
						#how_to_use_hc_msg{
							display: none;
							position: absolute;
							top: 50%;
							width: 40%;
							left: 5%;
							z-index: 10000;
						}
						</style>
						<script type="text/javascript">
							function show_hn_msg() {
								$('#how_to_use_hc_msg').fadeIn('slow');
							};

							function hide_hn_msg() {
								$('#how_to_use_hc_msg').fadeOut('slow');
							};
						</script>
						<div class="container-fluid">
							<div id="how_to_use_hc_msg" class="well">
								<div style="width:100%"><span class="glyphicon glyphicon-remove" style="font-size:18pt;color:#00599c;cursor:pointer;" onclick="hide_hn_msg()"></span></div>
								My Honeycomb presents an appealing visual of the recommended skillset necessary to 
								reach your desired role. With the desired role in the center of the honeycomb, the 
								outer rings describe the 1st level, 2nd level, and outside experiences needed for 
								that role. This helps you identify the opportunities you should be pursuing for career growth. 
							</div>
							<div class="row">
								<div class="col-sm-8" style="text-align:center;">
									<img src="<?php echo base_url();?>img/honey/Manager_IT_Security.png" id="honeyComb_img" style="width:60%;">
									<div style="text-align:left;margin:10px 0;"><a href="javascript:void(0);" onclick="show_hn_msg()">How to use this tool?</a></div>
									<img src="<?php echo base_url();?>img/honey/Skill_Category_Outside_Experiences_Graphic.png" style="margin:0 5%;width:23%;float:left;">
									<img src="<?php echo base_url();?>img/honey/Skill_Category_1st_Level_Graphic.png" style="margin:0 5%;width:23%;float:left;">
									<img src="<?php echo base_url();?>img/honey/Skill_Category_2nd_Level_Graphic.png" style="margin:0 5%;width:23%;float:left;">
									
								</div>
								<div class="col-sm-4">
									<p>Viwe Different Role's Honeycomb:</p>
									<select id="honeyComb_cat">
										<option value=''>Options</option>
										<option value="Manager_IT_Security">Manager IT Security</option>
										<option value="Director_IT_Security">Sr. Director IT Security</option>
										<option value="Senior_BI_Leader">Manager BI</option>
										<option value="SR_Lead_BI_Developer_Analyst">Sr. BI Desigmer/Developer</option>
										<option value="Enterprise_CIO">Enterprise CIO</option>
										<option value="Site_Lead_Small_BU_CIO">Site Lead/Small BU CIO</option>
									</select>
									<br>
									<br>
									<button onclick="change_honey_comb();">Refresh</button>
									<br>
									<br>

									<p>Required tasks and experience for advancement are highlighted in yellow.</p>

									<div id="Manager_IT_Security" class="req_div" style="display:block;">
										<p class="required_honey_field">Bachelor&rsquo;s degree(major)</p>
										<p class="required_honey_field">Risk Assessment / Management</p>
										<p class="required_honey_field">Project Management</p>
										<p class="required_honey_field">Regulatory Knowledge (ITAR, PII, PCI, SOC)</p>
									</div>

									<div id="Director_IT_Security" class="req_div">
										<p class="required_honey_field">Talent Development</p>
										<p class="required_honey_field">Business Acumen</p>
										<p class="required_honey_field">Risk Assessment / Management</p>
										<p class="required_honey_field">Business Partnering (Exec)</p>
									</div>

									<div id="Enterprise_CIO" class="req_div">
										<p class="required_honey_field">Budgeting</p>
										<p class="required_honey_field">License &amp; Contract Management</p>
										<p class="required_honey_field">IT Subject Matter Knowledge</p>
										<p class="required_honey_field">IT SecurityRisk Management</p>
										<p class="required_honey_field">Project/Portfolio Management Busn Depth</p>
										<p class="required_honey_field">Vandor Management</p>
										<p class="required_honey_field">Talent Management</p>
										<p class="required_honey_field">Compliance Management (ITAR, SOX)</p>
										<p class="required_honey_field">Large BU CIO, CISO, CTO</p>
									</div>

									<div id="Senior_BI_Leader" class="req_div">
										<p class="required_honey_field">Operations Management</p>
										<p class="required_honey_field">Integrity</p>
										<p class="required_honey_field">BLC</p>
										<p class="required_honey_field">Strategic Agility</p>
										<p class="required_honey_field">Building a Vision</p>
										<p class="required_honey_field">Talent Developer</p>
										<p class="required_honey_field">Vendor Management</p>
									</div>

									<div id="Site_Lead_Small_BU_CIO" class="req_div">
										<p class="required_honey_field">Business Partnering</p>
										<p class="required_honey_field">Emotional Intlligence (Soft Skills)</p>
										<p class="required_honey_field">Talent Management</p>
										<p class="required_honey_field">Compliance Management</p>
									</div>

									<div id="SR_Lead_BI_Developer_Analyst" class="req_div">
										<p class="required_honey_field">Support Multiple Business Functions</p>
										<p class="required_honey_field">Advanced Visual-zations</p>
										<p class="required_honey_field">Lead Multiple Projects (Budget/ Vendors)</p>
										<p class="required_honey_field">Mastery Of BI Stack</p>
										<p class="required_honey_field">Serve as Solution Architect On a single Project</p>
										<p class="required_honey_field">Mentoring Junior Associates</p>
									</div>

									<div style="margin-top:50px;">
										*You can change your desired 5 year goal <br>
										from <a href="javascript:void(0);" onclick="dashDevMenu('DashPart');">My Dashboard</a>
									</div>
								</div>
							</div>
						</div>