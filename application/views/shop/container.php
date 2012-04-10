<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title ?></title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<base href="<?php echo base_url();?>" />

	<?php print $this->bep_site->get_variables()?>
	<?php print $this->bep_assets->get_header_assets();?>
	<?php //print $this->kk_assets->get_header_assets();?>
	<?php print $this->bep_site->get_js_blocks()?>

<!--[if IE]>
<link href="<?php echo base_url();?>assets/css/ie.css" rel="stylesheet" type="text/css" />
<![endif]-->

<!--[if IE 6]>
<link href="<?php echo base_url();?>assets/css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
  <div id="container">
    <?php $this->load->view($this->config->item('backendpro_template_shop') . 'header');?>
  </div>
  <div id="wrapper">
	<div class="inside">
	  <div id="main">
<?php 
 //   print displayStatus();
    print (isset($content)) ? $content : NULL; 
    if( isset($page))
    {
        if( isset($module))
        {
            $this->load->view($module.'/'.$page);
        } 
        else 
        {
            $this->load->view($page);
        }
    }
?>
	  </div><!--End of content-->
	  <div id="left"><!--Start of leftcol -->
		  
		  <?php $this->load->view($this->config->item('backendpro_template_shop') . 'left');?>
	  </div>
	  <div id="right"><!--START RIGHT COLUMN -->
		
		 <?php $this->load->view($this->config->item('backendpro_template_shop') . 'right');?>
	  </div>
	</div>
    <div id="footer"> 
      
      <?php $this->load->view($this->config->item('backendpro_template_shop') . 'footer');?>
    </div>
      
    
  </div><!--End of wrapper-->
<!-- sharethis buttons -->
<?php

if ($this->preference->item('sharethis_pub_key'))
{
    $this->load->helper('sharethis');
    echo '<div id="sthoverbuttons" class="sthoverbuttons-pos-left">';
    echo sharethis();
    echo "</div>";
}

?>
<!-- end of sharethis -->
<?php print $this->bep_assets->get_footer_assets();
// this will print all the js
    if ($this->preference->item('ga_tracking'))
    {
        $this->load->view($this->config->item('backendpro_template_shop') . 'google_analytics');
    }
?>
  
</body>
</html>
