<?php $session_user = $this->session->userdata('login');?>
<script type="text/javascript">
function change_roll()
{
    if($('#change_roll').val() !== '')
        $('#change_roll_text').html($('#change_roll').val());
}
</script>
<div class="row">
    <div class="col-xs-5 col-sm-3">
        <a href="#"><img style="height:200px;margin-left:6%;border:2px solid #000;" src="<?php echo base_url();?>img/Corporate-Headshot_Photo.jpg"></a>
        <br>
        <div class="left-title">
            <p>Name: Bob Smith</p>
            <p>Position: Sr. IT Security Engineer</p>
            <p>Location: Bell</p>
            <p>Desired 5 years role:</p>
            <span id="change_roll_text">Manager IT Security</span>: <button class="button" onclick="change_roll();">Change Role</button>
            <br><br>
            <select id="change_roll" >
                <option value="">Options</option>
                <option value="-Manager IT Security">-Manager IT Security</option>
                <option value="-Sr. Director IT Security">-Sr. Director IT Security</option>
                <option value="-Manager BI">-Manager BI</option>
                <option value="-Sr. BL Designer/Developer">-Sr. BL Designer/Developer</option>
                <option value="-Enterprise CIO">-Enterprise CIO</option>
                <option value="-Site Lead/ Small BU CIO">-Site Lead/ Small BU CIO</option>
            </select>
            <br><br>
            <a href="#">View Career Honeycomb</a>
            <br><br>
            <p>Your In Place Activities:</p>
            <p>Host a Community of Interest</p>
            <p>Host a Learning Session</p>
            <p>Be a mentor and an LDP Resource</p>
            <p>Your Suggested Training</p>
            <a href="#">Basics of Effective Communication</a>
            <br>
            <a href="#">Communicating Clearly</a>
            <br>
            <a href="#">Effective Listening</a>
        </div>
    </div>
    <div class="col-sm-8">                    
        <p class="path-title">My Career Path</p>                    
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 current-p">
                    <h5>Current Position</h5>
                    <br><br><br>
                    <p>Sr. IT Security Engineer</p>
                    <br>
                </div>
                <div class="col-sm-3 target-1">
                    <h5>1-3 Year Target</h5>
                    <p>Business Acumen</p>
                    <p>Talent Development</p>
                    <p>Risk Assessment/ Management</p>
                    <p>Vendor/Supplier Management</p>
                    <p>BLC</p>
                    <p>IT Control Standard</p>
                </div>
                <div class="col-sm-3 target-3">
                    <h5>3-5 Year Target</h5>
                    <p>Budget Management</p>
                    <p>Organizational Agility</p>
                    <p>Supervisor Experience</p>
                    <p>Strong Communications</p>
                    <p>Regulatory Knowledge</p>
                    <p>Incident Response</p>
                </div>
                <div class="col-sm-3 target-4">
                    <h5>End Goal</h5>
                    <br><br><br>
                    <p>Manager IT Security</p>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="col-xs-12 col-sm-6 col-md-8">
       <script type="text/javascript" src="<?php echo base_url();?>js/barChart.js"></script>
       <script type="text/javascript">
       var assessment_details = <?php echo json_encode($this->custom->get_query_row('assessment_details',array('user_id' => $session_user['user_id'])));?>;
        $(function(){
            var data = [
            ['Name', 'Target', 'Current'],
            ['Risk Assessment/ Management' , 5, assessment_details['AssSc1'] / 20],
            ['Business Acumen' , 5, assessment_details['AssSc2'] / 20],
            ['Talent Development' , 5, assessment_details['AssSc3'] / 20],
            ['Vendor/ supplier Management' , 5, assessment_details['AssSc4'] / 20],
            ['IT Control Standard' , 5, assessment_details['AssSc5'] / 20],
            ['Budget management' , 5, assessment_details['AssSc6'] / 20],
            ['Organizational Agility' , 5, assessment_details['AssSc7'] / 20],
            ['Regulatory Knowledge' , 5, assessment_details['AssSc8'] / 20],
            ['Incident Response' , 5, assessment_details['AssSc9'] / 20],
            ['Relationship Management' , 5, assessment_details['AssCo1'] / 20],
            ['Team Work' , 5, assessment_details['AssCo2'] / 20],
            ['Process Oriented' , 5, assessment_details['AssCo3'] / 20],
            ['Decision Making' , 5, assessment_details['AssCo4'] / 20],
            ['Influencing' , 5, assessment_details['AssCo5'] / 20],
            ['Creativity' , 5, assessment_details['AssCo6'] / 20],
            ['Learning Ability' , 5, assessment_details['AssCo7'] / 20],
            ['Analytical Ability' , 5, assessment_details['AssCo8'] / 20],
            ['Organizational Awareness' , 5, assessment_details['AssCo9'] / 20],
            ['Prioritization' , 5, assessment_details['AssCo10'] / 20],
            ['Business Results-Oriented' , 5, assessment_details['AssCo11'] / 20],
            ['Communication' , 5, assessment_details['AssCo12'] / 20]
            ];
            var options = {
                /*
                'ruleHeight' : '80px',
                'ruleBorder' : '#000000',
                'ruleInnerBorder' : '#335566',
                'maxStep' : 5,
                'parentBar' : '#778878',
                'chieldBar' : '#456655',
                'labelColor' : '#000000'
                */
                'ruleHeight' : '670px',
                'parentBar' :'#7F7F7F',
                'chieldBar' : '#92D050'

            };

            renderBarChart('chart',data,options);   
        });
    

       </script>
    

    <div style="width:100%;margin-top:5%;">
                <ul class="nav nav-tabs">
                    <li class="active" id="userMDashPart"><a href="javascript:void(0);">Over All</a></li>
                    <li ><a href="javascript:void(0);">Self</a></li>
                    <li ><a href="javascript:void(0);">Manager</a></li>
                    <li ><a href="javascript:void(0);">Peers</a></li>
                </ul>

                <div id="chart" style="margin-top:5%;"></div>
  
                </div>
    </div>
    
</div>