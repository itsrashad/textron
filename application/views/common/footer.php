<nav id="menu-left">
    <ul>
        <li><span class="glyphicon glyphicon-remove" style="font-size:18pt;color:#FFF;cursor:pointer;" id="left_menu_x"></span><br>
            <a href="<?php echo site_url('main/NewReg');?>"><div style="background:#b1bcfe;widht:80%;padding:5px;text-align:center;font-size:14pt;font-weignt:bold;">SIGN UP</div></a>            
        </li>        
        <li><a href="<?php echo site_url('main/MyDevPlan/Dash');?>">MY DASHBOARD</a></li>
        <li><a href="<?php echo site_url('main/MyDevPlan/Honey');?>">MY HONEYCOMB</a></li>
        <li><a href="<?php echo site_url('main/MyDevPlan/Dev');?>">MY DEV PLAN</a></li>        
        <li><a href="<?php echo site_url('main/MyDevPlan/Assess');?>">MY ASSESSMENT</a></li>
    </ul>
</nav>
<!-- <nav id="menu-right">
    <ul>
        <li><a href="#" onclick="window.location='<?php echo site_url('');?>';">WELCOME</a></li>
        <li><a href="#" onclick="window.location='<?php echo site_url('main/MyDevPlan/Dash');?>';">COLIN</a></li>
        <li><a href="#" onclick="window.location='<?php echo site_url('main/Login');?>';">LOGIN</a></li>
        <li><a href="#" onclick="window.location='<?php echo site_url('main/NewReg');?>';">REGISTRATION</a></li>
    </ul>
</nav> -->

<footer class="footer">
    <div style="margin-top:50px;">
        <div class="col-md-2 col-md-offset-5" >
            <a class="btn-primary button-home center-block" id="footer-center-label" href="<?php echo site_url('main/MyDevPlan/Dash');?>">Start Today!</a>
        </div>
        
        <div style="text-align:center;width:200px;margin:0 auto;padding-bottom:20px;">
            <a href="#">LINK</a> <i class="fa fa-circle-o-notch"></i> <a href="#">LINK</a> <i class="fa fa-circle-o-notch"></i> <a href="#">LINK</a> <i class="fa fa-circle-o-notch"></i> <a href="#">LINK</a>
        </div>
    </div>
</footer>
</div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script defer type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(function() {
        SyntaxHighlighter.all();
    });
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            slideshow: false,
            start: function(slider) {
                $('body').removeClass('loading');
                $('.homesliderhide').css('display','none');
            }
        });


    });
</script>
<!-- Optional FlexSlider Additions -->
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/jquery.easing.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/jquery.mousewheel.js"></script>
<script defer type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/demo.js"></script>
</body>
</html>