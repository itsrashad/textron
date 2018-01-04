<?php 
    $webTitle['title'] = 'Development';
    $this->load->view('common/header',$webTitle);
    $this->session->set_userdata('login',array('user_id' => '1'));
    $session_user = $this->session->userdata('login');
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript">	
    $(function() {
        $( ".datepicker" ).datepicker();

        $('#assessmentUpdate').click(function(){

            $.post("<?php echo site_url('ajax/update_assessment/1');?>",{
                AssSc1 : $('#AssSc1').attr('value'),
                AssSc2 : $('#AssSc2').attr('value'),
                AssSc3 : $('#AssSc3').attr('value'),
                AssSc4 : $('#AssSc4').attr('value'),
                AssSc5 : $('#AssSc5').attr('value'),
                AssSc6 : $('#AssSc6').attr('value'),
                AssSc7 : $('#AssSc7').attr('value'),
                AssSc8 : $('#AssSc8').attr('value'),
                AssSc9 : $('#AssSc9').attr('value'),
                AssCo1 : $('#AssCo1').attr('value'),
                AssCo2 : $('#AssCo2').attr('value'),
                AssCo3 : $('#AssCo3').attr('value'),
                AssCo4 : $('#AssCo4').attr('value'),
                AssCo5 : $('#AssCo5').attr('value'),
                AssCo6 : $('#AssCo6').attr('value'),
                AssCo7 : $('#AssCo7').attr('value'),
                AssCo8 : $('#AssCo8').attr('value'),
                AssCo9 : $('#AssCo9').attr('value'),
                AssCo10 : $('#AssCo10').attr('value'),
                AssCo11 : $('#AssCo11').attr('value'),
                AssCo12 : $('#AssCo12').attr('value')
            }).done(function() {
                        alert( "Assessment Updated..!" );
                      }).fail(function() {
                        alert( "error" );
                      });
        });        

        var assessment_details = <?php echo json_encode($this->custom->get_query_row('assessment_details',array('user_id' => $session_user['user_id'])));?>
        
        for (var i = 1; i <= 9 ; i++) {
                       
            $( "#AssSc"+i ).slider({rang:'min', value: assessment_details['AssSc'+i],step: 20, slide: function(event, ui) {
                // alert(ui.value);
                $('#'+this.id).attr('value' , ui.value);
                $('#Toolstrp'+this.id).html('&nbsp;'+(ui.value/20)+'&nbsp;');
                $('#'+this.id+'_active').css('width' , ui.value+'%');            
                } 
            });
        };

        for (var i = 1; i <= 12 ; i++) {
            var myrand = (Math.random() * 10) * 10;            
            $( "#AssCo"+i ).slider({rang:'min', value: assessment_details['AssCo'+i],step: 20, slide: function(event, ui) {
                // alert(ui.value);
                $('#'+this.id).attr('value' , ui.value);
                $('#Toolstrp'+this.id).html('&nbsp;'+(ui.value/20)+'&nbsp;');
                $('#'+this.id+'_active').css('width' , ui.value+'%');            
                } 
            });
        };

                
    });

    function dashDevMenu(id)
    {
        $('.dashDevMenu').hide();
        $('#'+id).fadeIn('slow');
        $('.userM').removeClass('active');
        $('#userM'+id).addClass('active');
    }

    function fill_select_input(id,name)
    {        
        //$('#'+name+'FI'+id).val($('#'+name+'Sel'+id).val());
    }

    function add_new_development(id,name,dpid)
    {
        if($('#MyDevAreaDropDown'+dpid).val() != '')
            if($('#'+name+'Ch'+id).is(':checked'))
                $.post("<?php echo site_url('ajax/add_new_development')?>",{type : name, cat_name: $('#MyDevAreaDropDown'+dpid).val(), item_name : $('#'+name+'FI'+id).val(), goal_date : $('#'+name+'SI'+id).val()});
    }

    function remove_development(id,name,rm_id)
    {
        $.post("<?php echo site_url('ajax/remove_development')?>/"+rm_id);   
        $('#'+name+'Tbl'+id).remove();
    }

    
    function new_development_area()
    {
        $.post("<?php echo site_url('ajax/new_development')?>/"+count_dev_part+'/'+count_dev_sub_part,function(data){
            $('#MyDevContentWrapDev').append(data);
            count_dev_part++;
            count_dev_sub_part = count_dev_sub_part+4;
            $( ".datepicker" ).datepicker();
        });
    }

    function new_development_item(id,type)
    {
        $.post("<?php echo site_url('ajax/new_development_item')?>/"+id+'/'+count_dev_sub_part+'/'+type,function(data){
            if(type == 'Tra')
                $('#MyDevContentTra'+id).append(data);
            else
                $('#MyDevContentAct'+id).append(data);

            count_dev_sub_part ++;
            $( ".datepicker" ).datepicker();
        });
    }

    function change_honey_comb()
    {
        var val = $('#honeyComb_cat').val();
        if(val == '')
            val = 'Manager_IT_Security';

        $('.req_div').hide();
        $('#honeyComb_img').attr('src','<?php echo base_url();?>img/honey/'+val+'.png');
        $('#'+val).fadeIn('slow');
    }
</script>

<style type="text/css">
.MyDevContentActInnerL{
	margin-right: 20px;
}

.MyDevContentActInnerS{
	width:30%;
}

.MyDevContentActInnerI{
	width:50%;
}

.MyDevContentTraInnerL{
	margin-right: 20px;
}

.MyDevContentTraInnerS{
	width:35%;
}

.MyDevContentTraInnerI{
	width:55%;
}

.nav-tabs > li, .nav-pills > li {
    float:none;
    display:inline-block;
    *display:inline; /* ie7 fix */
     zoom:1; /* hasLayout ie7 trigger */
}

.nav-tabs, .nav-pills {
    text-align:center;
}

</style>
			
            <div id="content" style="margin-top:25px;"><!-- CONTENT START -->
            	<!-- <div class="userMenu userMenuL" onclick="dashDevMenu('DashPart');">My Dashboard</div> 
                <div class="userMenu userMenuL" onclick="dashDevMenu('HoneyPart');">Honeycomb</div> 
                <div class="userMenu userMenuL" onclick="dashDevMenu('DevPart');">My Development Plan</div> 
                <div class="userMenu userMenuL userMenuR" onclick="dashDevMenu('AssessPart');">My Assessments</div> -->
                <ul class="nav nav-tabs">
                    <li class="userM <?php if($this->uri->segment(3) == 'Dash') echo 'active';?>" id="userMDashPart" onclick="dashDevMenu('DashPart');"><a href="javascript:void(0);">My Dashboard</a></li>
                    <li class="userM <?php if($this->uri->segment(3) == 'Honey') echo 'active';?>" id="userMHoneyPart" onclick="dashDevMenu('HoneyPart');"><a href="javascript:void(0);">Honeycomb</a></li>
                    <li class="userM <?php if($this->uri->segment(3) == 'Dev') echo 'active';?>" id="userMDevPart" onclick="dashDevMenu('DevPart');"><a href="javascript:void(0);">My Development Plan</a></li>
                    <li class="userM <?php if($this->uri->segment(3) == 'Assess') echo 'active';?>" id="userMAssessPart" onclick="dashDevMenu('AssessPart');"><a href="javascript:void(0);">My Assessments</a></li>
                </ul>
                <br>
                <div id="DashPart" class="dashDevMenu col-sm-12" style="margin-top:25px; width:100%;<?php echo (($this->uri->segment(3) != 'Dash' AND $this->uri->segment(3) != '') ? 'display:none;' : '');?>">                    
                    <?php $this->load->view('user/dash_part');?>
                </div>
                <div id="HoneyPart" class="dashDevMenu col-sm-12" style="margin-top:25px; width:100%;<?php echo (($this->uri->segment(3) != 'Honey') ? 'display:none;' : '');?>">                    
                    <?php $this->load->view('user/honey_part');?>
                </div>
                <div id="DevPart" class="dashDevMenu col-sm-12" style="margin-top:25px; width:100%;<?php echo (($this->uri->segment(3) != 'Dev') ? 'display:none;' : '');?>">
                	<?php $this->load->view('user/dev_part');?>
                </div> 
                <div id="AssessPart" class="dashDevMenu col-sm-12" style="margin-top:25px; width:100%;<?php echo (($this->uri->segment(3) != 'Assess') ? 'display:none;' : '');?>">
                    <?php $this->load->view('user/assess_part');?>
                </div>

                
            </div><!-- CONTENT END -->            
            
<?php $this->load->view('common/footer_dev'); ?>