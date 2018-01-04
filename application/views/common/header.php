<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
        <title>TEXTRON MiDEV | <?php if(isset($title)) echo $title; else echo 'Home';?></title>

        <link href='<?php echo base_url();?>css/style.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo base_url();?>css/style1.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo base_url();?>css/flexslider.css' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>

        
        <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/jquery.mmenu.all.css" />
        <link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.ico" type="image/x-icon" />
        <style type="text/css">
            .mm-menu li.img a
            {
                font-size: 16px;
            }
            .mm-menu li.img a img
            {
                float: left;
                margin: -5px 10px -5px 0;
            }
            .mm-menu li.img a small
            {
                font-size: 12px;
            }
            #container_offset{
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.8);
                color: rgba(0,0,0,0.6);
                display: none;
                position: absolute;
                z-index: 500000000;
            }

            #my_dash_front_text{
                max-width:50%;
                position:absolute;
                display: none;
                z-index: 30000;
            }

            .homesliderhide{
                margin-top: 30px;
            }
        </style>
        <script src="<?php echo base_url();?>js/jquery.js"></script>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/hammer.js/1.0.5/jquery.hammer.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery.mmenu.min.all.js"></script>
        <script type="text/javascript">

            //	The menu on the left
            $(function() {
                 $('nav#menu-left').mmenu();
            });


            //	The menu on the right
            $(function() {

                var $menu = $('nav#menu-right');

                $menu.mmenu({
                    offCanvas: {
                        position: 'left'
                    },
                    classes: 'mm-light',
                    dragOpen: true,
                    counters: true,
                    searchfield: true,
                    header: {
                        add: true,
                        update: true,
                        title: 'Contacts'
                    }
                });

                //	Click a menu-item
                var $confirm = $('#confirmation');
                $menu.find('li a').not('.mm-subopen').not('.mm-subclose').bind(
                        'click.example',
                        function(e)
                        {
                            e.preventDefault();
                            $confirm.show().text('You clicked "' + $.trim($(this).text()) + '"');
                            $('#menu-left').trigger('close');
                            $('#container_offset').hide();
                        }
                );
                

                $('.header_a').click(function(){
                    $('#container_offset').show();
                }); 

                $('#container_offset').click(function(){
                    $('#container_offset').hide();
                    $('#menu-left').trigger('close');
                });               

                $('#left_menu_x').click(function(){
                    $('#menu-left').trigger('close');
                    $('#container_offset').hide();
                });
            });

            var pg_x, pg_y;

            $(document).mousemove(function(e) {
                pg_x = e.pageX+10;
                pg_y = e.pageY+40;

                $('#my_dash_front_text').css({'left':pg_x, 'top':pg_y});
            }).mouseover();

            $(function(){
                $('#my_dash_front').mouseover(function(){
                    $('#my_dash_front_text').show();
                }).mouseout(function(){
                    $('#my_dash_front_text').hide();
                });


            });

            function swipslider_on(id){
                $('#'+id).fadeIn('slow');
                $('#homesliderhide').fadeOut('slow');
            }

            function swipslider_off(id){
                $('#homesliderhide').fadeIn('slow');
                $('#'+id).fadeOut('slow');
            }
        </script>
    </head>
    <body>

        <div class="container-fluid" style="padding:0;">
            <div id="container_offset">.</div>
            <div id="my_dash_front_text" class="well">
                <strong>My Dashboard</strong> 
                <p>
                    My Dashboard provides transparency and control over your progress associated with MiDev. 
                    My Dashboard integrates with your skill assessments, career honeycombs, and development 
                    plan to provide a summary of your suggested career path. Within this career path you will 
                    find short and long-term development targets. My Dashboard also displays a graphic that easily
                    shows your current and goal ratings in a particular skill or competency related to your aspired
                    role. My Dashboard also includes useful links, suggested trainings, and in place activities 
                    to help you stay on track. For more information related to My Dashboard please view the 
                    Getting Started Tutorial.
                </p>

                <strong>My Development Plan</strong>
                <p>
                    My Development Plan provides you the ability to create a 5 year plan to build essential skills and 
                    competencies necessary for your desired role. You can select a skill or competency that you need to 
                    develop and then choose from suggested activities and trainings applicable to your current role. 
                    If you don&rsquo;t like the suggestions, you can work with your manager to determine other opportunities. 
                    That&rsquo;s the greatest part, you decide your own destiny!
                </p>

                <strong>My Honeycomb</strong>
                <p>
                    My Honeycomb presents an appealing visual of the recommended skillset necessary to reach your desired 
                    role. With the desired role in the center of the honeycomb, the outer rings describe the 1st level, 
                    2nd level, and outside experiences needed for that role. This helps you identify the opportunities you 
                    should be pursuing for career growth. 
                </p>

                <strong>My Assessment</strong> 
                <p>
                    My Assessment begins the skill and competency review process with a self assessment. You can evaluate 
                    your current level of experience and proficiency in different skill sets. Your Assessment gives you the 
                    option to send an evaluation request to your peers and manager. This allows you to get the perspective 
                    of the people you interact with daily and provide more accurate results. With a clear understanding of
                    your current skill set you can better determine where to focus your development energies.
                 </p>

            </div>
            <header style="z-index:1;position:relative;border-bottom:1px inset #fff;height:100px;">
                <div style="width:10%;float:left;">
                    <a title="Click To Open Menu" class="header_a" href="#menu-left"><i class="fa fa-bars fa-2x"></i></a>
                </div>
                
                <div style="width:45%;float:left;text-align:center;padding-left:26%;margin-top:40px;">
                    <a title="Welcome to TextRON-MiDEV" alt="textron-midev" href="<?php echo site_url();?>"><img src="<?php echo base_url();?>img/textron.png" style="width:50%;"></a>                   
                </div>
                <div style="width:45%;float:left;text-align:right;padding-right:1%;margin-top:35px;"> <a title="Login To Your Dashboard" href='<?php echo site_url('main/Login');?>'" style="margin-right:1%;text-decoration:none;color:#FFF;font-size:12pt;">LOGIN </a> <button onclick="window.location.href='<?php echo site_url('main/NewReg');?>'" title="Signup For an Account" class="btn btn-primary">Sign Up</button></div>                
            </header>
		

	