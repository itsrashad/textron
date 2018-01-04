<?php

$webTitle['title'] = 'Home';
$this->load->view('common/header', $webTitle);
?>
<section style="z-index:0;position:relative;top:-100px;">
    <?php $this->load->view('slider');?>
</section>
<section>
    <h1 style="background: none repeat scroll 0 0 #0219DF;color: #FFFFFF;margin: 0 auto;padding: 10px;text-align: center;width: 120px">About</h1>
    <h1 style="text-align:center; color:#0219DF;">MiDEV WEB APP</h1>
    <p style="text-align:center; color:#0219DF;">Get what you need, to get where you want to go</p>
<!--    <img width="100%" id="my_dash_front" src="<?php echo base_url();?>img/deshboard-front.jpg" />  -->
</section>

<section class="board">
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-10" style="float:none;margin:0 auto;">
        <div class="col-sm-12 homesliderhide" id="homeslider1">
            <div style="width:100%;text-align:right"><span class="glyphicon glyphicon-remove" style="font-size:18pt;color:#00599c;cursor:pointer;" onclick="swipslider_off('homeslider1');"></span></div>
            <?php $this->load->view('homeslider/slider1');?>
        </div>
        <div class="col-sm-12 homesliderhide" id="homeslider2">
            <div style="width:100%;text-align:right"><span class="glyphicon glyphicon-remove" style="font-size:18pt;color:#00599c;cursor:pointer;" onclick="swipslider_off('homeslider2');"></span></div>
            <?php $this->load->view('homeslider/slider2');?>
        </div>
        <div class="col-sm-12 homesliderhide" id="homeslider3">
            <div style="width:100%;text-align:right"><span class="glyphicon glyphicon-remove" style="font-size:18pt;color:#00599c;cursor:pointer;" onclick="swipslider_off('homeslider3');"></span></div>
            <?php $this->load->view('homeslider/slider3');?>
        </div>
        <div class="col-sm-12 homesliderhide" id="homeslider4">
            <div style="width:100%;text-align:right"><span class="glyphicon glyphicon-remove" style="font-size:18pt;color:#00599c;cursor:pointer;" onclick="swipslider_off('homeslider4');"></span></div>
            <?php $this->load->view('homeslider/slider4');?>
        </div>
        <div id="homesliderhide">
        <div class="col-md-5 board-img" style="float:left">
            <img style="height:300px;width:100%;;cursor:pointer;" src="<?php echo base_url();?>img/dashboard.png" onclick="swipslider_on('homeslider1');"/>
            <div class="hover-box">
                <h2>My<br> Dashboard</h2>
                <i style="font-size:4em;color:#428bca;" class="fa fa-plus-square"></i>
            </div>
        </div>
        <div class="col-md-5 board-img" style="float:right">
            <img style="height:300px;width:100%;cursor:pointer;" src="<?php echo base_url();?>img/dev-plan.png" onclick="swipslider_on('homeslider2');"/>
            <div class="hover-box">
                <h2>My<br> Development Plan</h2>
                <i style="font-size:4em;color:#428bca;" class="fa fa-plus-square"></i>
            </div>
        </div>
        
        <div class="clear"></div>
        
        <div class="col-md-5 board-img" style="float:left">
            <img style="height:300px;width:100%;cursor:pointer;" src="<?php echo base_url();?>img/honeycomb.png" onclick="swipslider_on('homeslider3');"/>
            <div class="hover-box">
                <h2>My<br> Honeycomb</h2>
                <i style="font-size:4em;color:#428bca;" class="fa fa-plus-square"></i>
            </div>

        </div>
        <div class="col-md-5 board-img" style="float:right">
            <img style="height:300px;width:100%;cursor:pointer;" src="<?php echo base_url();?>img/assessment.png" onclick="swipslider_on('homeslider4');"/>
            <div class="hover-box">
                <h2>My<br> Assessment</h2>
                <i style="font-size:4em;color:#428bca;" class="fa fa-plus-square"></i>
            </div>
        </div>
        </div>
        </div>
    </div>
    </div>
</section>

<?php $this->load->view('common/footer'); ?>