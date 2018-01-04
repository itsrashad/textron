<?php 
	$webTitle['title'] = 'Development';
	$this->load->view('common/header',$webTitle);
	$this->session->set_userdata('test','test');
?>


<?php $this->load->view('common/footer'); ?>