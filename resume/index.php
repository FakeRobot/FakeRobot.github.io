<?
// Setting up some variables...
$personal = array();
$social_media = array();
$work_history = array();
$education = array();
$skills = array();
$awards = array();
$settings = array();

require_once('config.php');

if (isset($settings['style']) && $settings['style'] == "dark")
{
	$stylesheet = 'dark.css';
}
else if (isset($settings['style']) && $settings['style'] == "light")
{
	$stylesheet = 'light.css';
}
else if (isset($settings['style']) && $settings['style'] == "printable")
{
	$stylesheet = 'printable.css';
}
else
{
	$stylesheet = 'dark.css';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="../apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="../apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="../favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="../favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="../favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="../favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="../mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="../mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="../mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="../mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="../mstile-310x310.png" />

    <title><?php echo($personal['first_name'] . ' ' . $personal['last_name']); ?> - Resume</title>

	<link rel="stylesheet" type="text/css" href="css/<?php echo $stylesheet; ?>" />
	<link rel="stylesheet" href="css/printable.css" type="text/css" media="print" />
	
	<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-59307307-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>
	<div id="content">
		<div id="header">
			<span class="header_name"><?php echo($personal['first_name'] . ' ' . $personal['last_name']); ?></span><br />
			<span id="resume_subtitle" class="subtitle">
				<?php
				if (isset($settings['printable']) && $settings['printable'] == true)
				{
					echo '<a href="javascript:window.print()">Print Me</a>';
				}
				else
				{
					if (isset($personal['phone_number']))
					{
						echo $personal['phone_number'];
					}
					if (isset($personal['phone_number']) && isset($personal['email_address']))
					{
						echo ' | ';
					}
					if (isset($personal['email_address']))
					{
						echo '<a href="mailto:'.$personal['email_address'].'">'.$personal['email_address'].'</a>';
					}
				}
				?>
			</span>
			<span id="print_subtitle">
				<?php
				if (isset($personal['phone_number']))
				{
					echo $personal['phone_number'];
				}
				if (isset($personal['phone_number']) && isset($personal['email_address']))
				{
					echo ' | ';
				}
				if (isset($personal['email_address']))
				{
					echo '<a href="mailto:'.$personal['email_address'].'">'.$personal['email_address'].'</a>';
				}
				?>
			</span>
		</div>
		<div id="left_col">
			<?php for($i=0; $i<=count($work_history[$i]); $i++) { ?>
			<div class="item">
				<span class="large_title"><?php echo $work_history[$i][0]; ?></span><br />
				<span class="title"><?php echo $work_history[$i][1]; ?></span><br />
				<span class="subtitle"><?php echo $work_history[$i][2]; ?></span><br />
				<p><?php echo $work_history[$i][3]; ?></p>
			</div>
			<?php } ?>
		</div>
		<div id="right_col">
			<?php if (isset($settings['education']) && $settings['education'] == true) { ?>
			<div class="item">
				<span class="large_title">Education</span><br />
				<?php for($i=0; $i<=count($education[$i]); $i++) { ?>
				<p><span class="title"><?php echo $education[$i][0] ?></span><br />
				<?php echo $education[$i][1]; ?>
				<?php } ?>
			</div>
			<?php } ?>
			<?php if (isset($settings['skills']) && $settings['skills'] == true) { ?>
			<div class="item">
				<span class="large_title">Skills</span><br />
				<?php for($i=0; $i<=count($skills[$i]); $i++) { ?>
				<p><span class="title"><?php echo $skills[$i][0] ?></span><br />
				<?php echo $skills[$i][1]; ?></p>
				<?php } ?>
			</div>
			<?php } ?>
			<?php if (isset($settings['awards']) && $settings['awards'] == true) { ?>
			<div class="item">
				<span class="large_title">Awards &amp; Honors</span><br />
				<?php for($i=0; $i<=count($awards[$i]); $i++) { ?>
				<p><span class="title"><?php echo $awards[$i][0]; ?></span><br />
				<?php echo $awards[$i][1]; ?></p>
				<?php } ?>
			</div>
			<?php } ?>
			<div class="item">
				<span class="large_title">Contact</span><br />
				
				<?php if (isset($personal['phone_number'])) { ?>
				<p><span class="title">Phone</span><br />
				<span class="subtitle"><?php echo($personal['phone_number']); ?></span></p>
				<?php } ?>
				
				<?php if (isset($personal['email_address'])) { ?>
				<p><span class="title">Email</span><br />
				<span class="subtitle"><a href="mailto:<?php echo($personal['email_address']); ?>"><?php echo($personal['email_address']); ?></a></span></p>
				<?php } ?>
				
				<?php if (isset($settings['social_media']) && $settings['social_media'] == true) { ?>
				<?php for($i=0; $i<=count($social_media); $i++) { ?>
				<p><span class="title"><?php echo($social_media[$i][0]); ?><br />
				<span class="subtitle"><a href="<?php echo($social_media[$i][1]); ?>"><?php echo(substr($social_media[$i][1], strpos($social_media[$i][1], "://")+3)); ?></a></span></p>
				<?php } ?>
				<?php } ?>
			</div>
		</div>
		<div id="footer">
			<p>&nbsp;</p>
		</div>
	</div>
</body>
</html>