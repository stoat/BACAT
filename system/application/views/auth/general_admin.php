<?php
$this->load->view($this->config->item('CL_header'));
session_start();
$_SESSION['IsAuthorized']=true;
//var_dump($_SESSION);
?>

<p class="message"><?php echo $this->cl_auth->message; ?></p>

<?php
$this->load->view($this->config->item('CL_footer'));
?>