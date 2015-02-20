<?php
/**
* @package WordPress
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<title>Freedom Advisory Group - Email Template</title>


<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'/>
<style type="text/css">

	/* Email Client BUG Fixes */
		.ReadMsgBody, .ExternalClass {width:100%; background-color: #f0f0f0;}
		.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height:100%;}
		width: 100%; background-color: #f0f0f0; margin:0; padding:0; -webkit-font-smoothing: antialiased;
		table {border-spacing:0; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;}
		table td {border-collapse:collapse;}
	    img { border: 0; }
		html {width: 100%; height: 100%;}
    /* End Email Client BUG Fixes */
	
	/* Embedded CSS link color */
		a         {color:#c3c2c2; text-decoration:none;}
		a:link    {color:#c3c2c2; text-decoration:none;}
		a:visited {color:#c3c2c2; text-decoration:none;}
		a:focus   {color:#c3c2c2 !important;}
		a:hover   {color:#c3c2c2 !important;}

	/* End of Embedded CSS link color */
	
	/* Clickable phone numbers */
		a[href^="tel"], a[href^="sms"] {text-decoration:none; color:#c3c2c2; pointer-events:none; cursor:default;}
		.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {text-decoration:default; color:#c3c2c2 !important; pointer-events:auto; cursor:default;}
	/* End of Clickable phone numbers */

	/* iPad Text Smoother */
	div, p, a, li, td { -webkit-text-size-adjust:none; }	

	table[class=fullWidth]				{width: 100%!important;}	
	
	@media only screen and (min-width: 600px) 

		{			
			/* Settings - Resize Images */	
			img[class=ImageResize]        	{width: 100%!important;  height: auto!important;}
			img[class=ImageResize560]		{width: 560px!important; height: auto!important;}
			img[class=ImageResize270]		{width: 270px!important; height: auto!important;}
			img[class=ImageResize171]		{width: 171px!important; height: auto!important;}
			img[class=ImageResize175]		{width: 175px!important; height: auto!important;}			
			
			body{width:auto!important;}
					
		}
			
	@media only screen and (max-width: 599px) 

		{
			/* General settings for Mobile */
			body{width:auto!important;}
			table[class=fullWidth]			{width: 100%!important;}
			table[class=MobileScale]		{width: 100%!important; padding-left: 20px!important; padding-right: 20px!important;}	
			table[class=MobileScale2]		{width: 100%!important; padding-left: 0px!important; padding-right: 0px!important;}			
			span[class=MobileErase]			{width: 0; display:none !important;}
			td[class=MobileErase]			{width: 0; display:none !important;}
			table[class=MobileErase]		{width: 0; display:none !important;}
		
			/* Settings - Resize Images */ 
			img[class=ImageResize]        	{width: 100%!important; height: auto!important;}
			img[class=ImageResize560]		{width: 100%!important; height: auto!important;}
			img[class=ImageResize270]		{width: 100%!important; height: auto!important;}
			img[class=ImageResize171]		{width: 100%!important; height: auto!important;}
			img[class=ImageResize175]		{width: 175px!important; height: auto!important; margin-left: 0px!important;}		
		
			/* Settings - Header Module */
			table[class=HeaderModule]		{width: 100%!important; text-align: center!important; }
			td[class=HeaderModule]			{width: 100%!important; text-align: center!important; }
			img[class=HeaderModule]			{display: block !important; margin-left: auto !important; margin-right: auto !important;}
			
			/* Settings - Footer Module */			
			table[class=FooterModule]		{width: 100%!important; margin-right: 0px!important; text-align:center !important;}				
			
			/* Settings - Module Image + Text */		
			table[class=miResizeText]		{width: 60%!important; padding-left: 20px!important; padding-right: 20px!important;}
			td[class=miResizeText]			{width: 60%!important; padding-left: 20px!important; padding-right: 20px!important;}
			table[class=miResizeTable]		{width: 175px!important;}			
			table[class=miResizeText2]		{width: 60%!important; padding-right: 20px!important;}
			td[class=miResizeText2]			{width: 60%!important; padding-right: 20px!important;}		

			/* Settings - Two Columns */
			table[class=TwoColumns1]		{width: 43%!important; margin-right: 20px;}
			table[class=TwoColumns2]		{width: 43%!important; margin-left: 20px;}	

			/* Settings - Three Columns */
			table[class=ThreeColumns]		{width: 27%!important; margin-right: 20px;}
			table[class=ThreeColumns2]		{width: 27%!important; margin-right: 0px;}		
		
		}		
			
			
	@media only screen and (max-width: 480px) 

		{	
			/* General settings for Mobile */
			body{width:auto!important;}
			table[class=fullWidth]			{width: 100%!important;}
			table[class=MobileScale]		{width: 100%!important; padding-left: 20px!important; padding-right: 20px!important; }		
			span[class=MobileErase]			{width: 0; display:none !important;}
			td[class=MobileErase]			{width: 0; display:none !important;}
			table[class=MobileErase]		{width: 0; display:none !important;}
			
			/* Settings - Resize Images */ 
			img[class=ImageResize]			{width: 100%!important; height: auto!important;}	
			img[class=ImageResize560]		{width: 100%!important; height: auto!important;}
			img[class=ImageResize270]		{width: 100%!important; height: auto!important;}	
			img[class=ImageResize171]		{width: 100%!important; height: auto!important;}			
			img[class=ImageResize175]		{width: 100%!important; height: auto!important; margin-left: 0px!important; margin-right: 0px!important; margin-bottom: 0px!important; text-align: center!important;}		
			
			/* Settings - Header Module */
			table[class=HeaderModule]		{width: 100%!important; text-align: center!important; }
			td[class=HeaderModule]			{width: 100%!important; text-align: center!important; }
			img[class=HeaderModule]			{display: block !important; margin-left: auto !important; margin-right: auto !important;}
			
			/* Settings - Footer Module */
			table[class=FooterModule]		{width: 100%!important; margin-right: 0px!important; text-align:center !important;}	

			/* Settings - Module Image + Text */
			table[class=miResizeText]		{width: 100%!important; text-align: center!important; padding: 0px!important; padding-top: 10px!important;}
			td[class=miResizeText]			{width: 100%!important; padding: 0px!important;}
			table[class=miResizeTable]		{width: 100%!important;}		
			table[class=miResizeText2]		{width: 100%!important; text-align: center!important; padding: 0px!important; padding-top: 20px!important;}
			td[class=miResizeText2]			{width: 100%!important; padding: 0px!important;}			
			
			/* Settings - Two Columns */
			table[class=TwoColumns1]		{width: 100%!important; margin-right: 0px!important;}
			table[class=TwoColumns2]		{width: 100%!important; margin-left: 0px!important;}	

			/* Settings - Three Columns */
			table[class=ThreeColumns]		{width: 100%!important; margin-right: 0px!important;}
			table[class=ThreeColumns2]		{width: 100%!important; margin-right: 0px!important;}			

		}

	</style>
</head>

<body style="width:100% !important; min-width: 239px !important; color:#525252; background:#f0f0f0; font-family: 'Open Sans', Helvetica,sans-serif; font-size:14px; line-height:140%; margin:0; padding:0;">


<div mc:repeatable="MailFusionHeader" mc:variant="Header Module">
<!-- * ************************************************************************************************************************************ * -->
<!-- * Header Module * -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
  	<tr>
  		<td width="100%" valign="top" bgcolor="#005082">
			<table border="0" cellpadding="0" cellspacing="0" align="center">
				<tr><td width="600" height="15" bgcolor="#005082" style="font-size: 10;line-height: 0;border-collapse: collapse;">&nbsp;</td></tr>
				<tr>
					<td width="600" bgcolor="#005082">
						
						<table width="560" border="0" cellpadding="0" cellspacing="0" align="center" class="MobileScale">
							<tr>
								<td width="100%">										
									<!-- Preheader -->
									<table border="0" cellpadding="0" cellspacing="0" align="center" class="HeaderModule">									
										<tr>										
											<td mc:edit="PreHeader" bgcolor="#005082" style="font-size: 11px; color: #ffffff; text-align: center; font-family: 'Open Sans', Helvetica, Arial, sans-serif; vertical-align: bottom;" class="HeaderModule">
																								
											</td>													
										</tr>	
									</table>
									<!-- End of Preheader -->									
								</td>
							</tr>
						</table>
						
					</td>
				</tr>
				<tr><td width="600" height="12" bgcolor="#005082" style="font-size: 7;line-height: 0;border-collapse: collapse;">&nbsp;</td></tr>
			</table>
		</td>
	</tr>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
  	<tr>
  		<td width="100%" valign="top" bgcolor="#0069aa">
			<table border="0" cellpadding="0" cellspacing="0" align="center">
				<tr>
					<td width="600" bgcolor="#0069aa">
						
						<table width="560" border="0" cellpadding="0" cellspacing="0" align="center" class="MobileScale">
							<tr>
								<td width="100%">														

									<!-- Logo Image -->
									<table border="0" cellpadding="0" cellspacing="0" align="left" class="HeaderModule">
										<tr>
											<td height="120">
												<a href="http://www.freedomadvisorygroup.com" target="_blank"><img mc:edit="logo-header" src="https://origin.ih.constantcontact.com/fs169/1116289918175/img/6.png" width="175" alt="Logo" border="0" class="HeaderModule" style="display: block; border-radius: 0px; vertical-align: middle;" /></a>
											</td>
										</tr>
									</table>
									<!-- End of Logo Image --> 	

									<!-- Links -->
									<table border="0" cellpadding="0" cellspacing="0" align="right" class="HeaderModule">									
										<tr>										
											<td mc:edit="Links Header" height="120" bgcolor="#0069aa" style="font-size: 12px; color: #ffffff; font-weight: bold; text-align: left; font-family: 'Open Sans', Helvetica, Arial, sans-serif; vertical-align: middle;" class="HeaderModule">	
														
												<!-- Header links -->
												<a href="http://www.freedomadvisorygroup.com" target="_blank" style="text-decoration: none; color: #ffffff;">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<a href="http://www.freedomadvisorygroup.com/about" target="_blank" style="text-decoration: none; color: #ffffff;">ABOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<a href="http://www.freedomadvisorygroup.com/connect" target="_blank" style="text-decoration: none; color: #ffffff;">CONNECT</a>		
												<!-- End of Header links -->
															
											</td>													
										</tr>	
									</table>
									<!-- End of Links -->										
									
								</td>
							</tr>
						</table>
						
					</td>
				</tr>				
			</table>
		</td>
	</tr>
</table>
<!-- * End of Header Module * -->
<!-- * ************************************************************************************************************************************ * -->
</div>



<div mc:repeatable="MailFusionPromo" mc:variant="Promo Module">
<!-- * ************************************************************************************************************************************ * -->
<!-- * Promo Module * -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
  	<tr>
  		<td width="100%" valign="top" bgcolor="#2695d4" style="background:url(https://origin.ih.constantcontact.com/fs169/1116289918175/img/12.jpg) no-repeat left center #dddddd;">
			<table border="0" cellpadding="0" cellspacing="0" align="center">
				<tr>
					<td width="600">
						
						<table width="560" border="0" cellpadding="0" cellspacing="0" align="center" class="MobileScale">
							<tr>
								<td width="100%">						

									<!-- Text Section -->
									<table border="0" cellpadding="0" cellspacing="0" align="center">
										<tr><td width="100%" height="170" style="font-size: 15;line-height: 0;border-collapse: collapse;">&nbsp;</td></tr>
										<tr>
											<td mc:edit="Promo Title" width="100%" style="font-size: 25px; color: #0069aa; text-align: center; font-weight: bold; font-family: 'Open Sans', Helvetica, Arial, sans-serif; line-height: 25px;">
													INVESTMENTS &#8226; INSURANCE &#8226; RETIREMENT
											</td>
										</tr>
										<tr><td width="100%" height="30" style="font-size: 15;line-height: 0;border-collapse: collapse;">&nbsp;</td></tr>
									</table>
									<!-- End of Text Section -->
									
								</td>
							</tr>
						</table>
						
					</td>
				</tr>
				<tr>
					<td width="600">						
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="MobileScale2">
							<tr>															
								<td align="center">
									<img src="https://origin.ih.constantcontact.com/fs169/1116289918175/img/11.png" width="600" align="top" alt="" border="0" style="display: block;" class="ImageResize"/>																											
								</td>	
							</tr>
						</table>						
					</td>
				</tr>				
			</table>
		</td>
	</tr>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="font-size: 0;line-height: 0;border-collapse: collapse;">
	<tr>
		<td width="100%" height="15" bgcolor="#f0f0f0" style="font-size: 0;line-height: 0;border-collapse: collapse;">&nbsp;
			<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="font-size: 0;line-height: 0;border-collapse: collapse;" class="MobileScale2">
				<tr><td width="600" height="15" bgcolor="#ffffff" style="font-size: 0;line-height: 0;border-collapse: collapse;" class="MobileScale2">&nbsp;</td></tr>
			</table>	
		</td>
	</tr>
</table>
<!-- * End of Promo Module * -->		
<!-- * ************************************************************************************************************************************ * -->
</div>

<?php while ( have_posts() ) : the_post(); ?>

<div mc:repeatable="MailFusionModules" mc:variant="Only Text Module">
<!-- * ************************************************************************************************************************************ * -->
<!-- * Only Text Module * -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
  	<tr>
  		<td width="100%" valign="top" bgcolor="#f0f0f0">
			<table border="0" cellpadding="0" cellspacing="0" align="center">
				<tr>
					<td width="600" bgcolor="#ffffff">
						
						<table width="560" border="0" cellpadding="0" cellspacing="0" align="center" class="MobileScale">
							<tr>
								<td width="100%">						

									<!-- Text Section -->
									<table border="0" cellpadding="0" cellspacing="0" align="center">
										<tr>
											<td mc:edit="Title OTM" width="100%" style="font-size: 18px; color: #0069aa; text-align: center; font-weight: bold; font-family: 'Open Sans', Helvetica, Arial, sans-serif; line-height: 24px;">
													Opening Thoughts
											</td>
										</tr>
										<tr><td width="100%" height="15" style="font-size: 15;line-height: 0;border-collapse: collapse;">&nbsp;</td></tr>											
										<tr>
											<td mc:edit="Text OTM" width="100%" style="font-size: 14px; color: #525252; text-align: center; font-weight: normal; font-family: 'Open Sans', Helvetica, Arial, sans-serif; line-height: 22px;">										
												<?php the_content(); ?>
											</td>
										</tr>
										<tr><td width="100%" height="30" style="font-size: 15;line-height: 0;border-collapse: collapse;">&nbsp;</td></tr>
									</table>
									<!-- End of Text Section -->
									
								</td>
							</tr>
						</table>
						
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<!-- * End of Only Text Module * -->		
<!-- * ************************************************************************************************************************************ * -->
</div>



<div mc:repeatable="MailFusionModules" mc:variant="Divider Module">
<!-- * ************************************************************************************************************************************ * -->
<!-- * Divider * -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="font-size: 0;line-height: 0;border-collapse: collapse;">
	<tr>
		<td width="100%" height="1" bgcolor="#f0f0f0" style="font-size: 0;line-height: 0;border-collapse: collapse;">&nbsp;
			<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="font-size: 0;line-height: 0;border-collapse: collapse;" class="MobileScale2">
				<tr><td width="600" height="1" bgcolor="#eeeeee" style="font-size: 0;line-height: 0;border-collapse: collapse;" class="MobileScale2">&nbsp;</td></tr>
			</table>	
		</td>
	</tr>
	<tr>
		<td width="100%" height="1" bgcolor="#f0f0f0" style="font-size: 0;line-height: 0;border-collapse: collapse;">&nbsp;
			<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="font-size: 0;line-height: 0;border-collapse: collapse;" class="MobileScale2">
				<tr><td width="600" height="1" bgcolor="#ffffff" style="font-size: 0;line-height: 0;border-collapse: collapse;" class="MobileScale2">&nbsp;</td></tr>
			</table>	
		</td>
	</tr>
	<tr>
		<td width="100%" height="1" bgcolor="#f0f0f0" style="font-size: 0;line-height: 0;border-collapse: collapse;">&nbsp;
			<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="font-size: 0;line-height: 0;border-collapse: collapse;" class="MobileScale2">
				<tr><td width="600" height="1" bgcolor="#eeeeee" style="font-size: 0;line-height: 0;border-collapse: collapse;" class="MobileScale2">&nbsp;</td></tr>
			</table>	
		</td>
	</tr>
	<tr>
		<td width="100%" height="30" bgcolor="#f0f0f0" style="font-size: 0;line-height: 0;border-collapse: collapse;">&nbsp;
			<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="font-size: 0;line-height: 0;border-collapse: collapse;" class="MobileScale2">
				<tr><td width="600" height="30" bgcolor="#ffffff" style="font-size: 0;line-height: 0;border-collapse: collapse;" class="MobileScale2">&nbsp;</td></tr>
			</table>	
		</td>
	</tr>
</table>
<!-- * End of Divider * -->
<!-- * ************************************************************************************************************************************ * -->
</div>

<div mc:repeatable="MailFusionModules" mc:variant="From the Blog Module">
<!-- * ************************************************************************************************************************************ * -->
<div mc:repeatable="MailFusionModules" mc:variant="From the Blog Module">
<!-- * ************************************************************************************************************************************ * -->

<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
  	<tr>
  		<td width="100%" valign="top" bgcolor="#f0f0f0">
			<table border="0" cellpadding="0" cellspacing="0" align="center">
				<tr>
					<td width="600" bgcolor="#ffffff">
						
						<table width="560" border="0" cellpadding="0" cellspacing="0" align="center" class="MobileScale">
							<tr>
								<td width="100%">					

									<!-- Text Section -->
									<table width="100%" border="0" cellpadding="0" cellspacing="0" align="right" class="miResizeText">
										<tr>
											<td mc:edit="" width="100%" style="font-size: 18px; color: #2b4254; text-align: left; font-weight: bold; font-family: 'Open Sans', Helvetica, Arial, sans-serif; line-height: 24px;">
												<a href="<?php echo get_field('first_post_link'); ?>" target="_blank" style="text-decoration: none; color: #0069aa;">
													<?php echo get_field('first_post_title'); ?>
													<span style="font-size: 12px; font-weight: normal; color: #0069aa;"><br />&#187; <?php echo get_field('first_post_date'); ?></span>
												</a>
											</td>
										</tr>
										<tr><td width="100%" height="10" style="font-size: 10;line-height: 0;border-collapse: collapse;">&nbsp;</td></tr>	
										<tr>
											<td mc:edit="" width="100%" style="font-size: 14px; color: #525252; text-align: left; font-weight: normal; font-family: 'Open Sans', Helvetica, Arial, sans-serif; line-height: 22px;">										
												<?php echo get_field('first_post_content'); ?>
											</td>
										</tr>
										<tr><td width="100%" height="10" style="font-size: 20;line-height: 0;border-collapse: collapse;">&nbsp;</td></tr>
										<tr>
											<td>
												<table border="0" cellspacing="0" cellpadding="0" align="right">													
												
													<!-- Button -->
													<tr>															
														<td>
															<a href="<?php echo get_field('first_post_link'); ?>" target="_blank" style="text-decoration: none;">
																<img src="https://origin.ih.constantcontact.com/fs169/1116289918175/img/16.jpg" width="113" align="right" alt="Button" border="0" style="display: block;" />																											
															</a>
														</td>	
													</tr>
													<!-- End of Button -->
													
												</table>
											</td>
										</tr>
									</table>
									<!-- End of Text Section -->

								</td>
							</tr>
							<tr><td width="100%" height="20" style="font-size: 20;line-height: 0;border-collapse: collapse;">&nbsp;</td></tr>
							<tr>
								<td width="100%">					

									<!-- Text Section -->
									<table width="100%" border="0" cellpadding="0" cellspacing="0" align="right" class="miResizeText">
										<tr>
											<td mc:edit="" width="100%" style="font-size: 18px; color: #2b4254; text-align: left; font-weight: bold; font-family: 'Open Sans', Helvetica, Arial, sans-serif; line-height: 24px;">
												<a href="<?php echo get_field('second_post_link'); ?>" target="_blank" style="text-decoration: none; color: #0069aa;">
													<?php echo get_field('second_post_title'); ?>
													<span style="font-size: 12px; font-weight: normal; color: #0069aa;"><br />&#187; <?php echo get_field('second_post_date'); ?></span>
												</a>
											</td>
										</tr>
										<tr><td width="100%" height="10" style="font-size: 10;line-height: 0;border-collapse: collapse;">&nbsp;</td></tr>	
										<tr>
											<td mc:edit="" width="100%" style="font-size: 14px; color: #525252; text-align: left; font-weight: normal; font-family: 'Open Sans', Helvetica, Arial, sans-serif; line-height: 22px;">										
												<?php echo get_field('second_post_content'); ?>
											</td>
										</tr>
										<tr><td width="100%" height="10" style="font-size: 20;line-height: 0;border-collapse: collapse;">&nbsp;</td></tr>
										<tr>
											<td>
												<table border="0" cellspacing="0" cellpadding="0" align="right">													
												
													<!-- Button -->
													<tr>															
														<td>
															<a href="<?php echo get_field('second_post_link'); ?>" target="_blank" style="text-decoration: none;">
																<img src="https://origin.ih.constantcontact.com/fs169/1116289918175/img/16.jpg" width="113" align="right" alt="Button" border="0" style="display: block;" />																											
															</a>
														</td>	
													</tr>
													<!-- End of Button -->
													
												</table>
											</td>
										</tr>
									</table>
									<!-- End of Text Section -->

								</td>
							</tr>							
						</table>
						
					</td>
				</tr>
			</table>
		</td>
	</tr>	
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="font-size: 0;line-height: 0;border-collapse: collapse;">
	<tr>
		<td width="100%" height="30" bgcolor="#f0f0f0" style="font-size: 0;line-height: 0;border-collapse: collapse;">&nbsp;
			<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="font-size: 0;line-height: 0;border-collapse: collapse;" class="MobileScale2">
				<tr><td width="600" height="30" bgcolor="#ffffff" style="font-size: 0;line-height: 0;border-collapse: collapse;" class="MobileScale2">&nbsp;</td></tr>
			</table>	
		</td>
	</tr>	
</table>
<!-- * End of From the Blog Module * -->
<!-- * ************************************************************************************************************************************ * -->
</div>

<?php endwhile; ?>

<div mc:repeatable="MailFusionFooter" mc:variant="Footer Module">
<!-- * ************************************************************************************************************************************ * -->
<!-- * Footer Module * -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="font-size: 0;line-height: 0;border-collapse: collapse;">
	<tr>
		<td width="100%" height="27" bgcolor="#0069aa" style="font-size: 0;line-height: 0;border-collapse: collapse;">&nbsp;
			<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="font-size: 0;line-height: 0;border-collapse: collapse;" class="MobileScale2">
				<tr><td width="600" height="27" bgcolor="#ffffff" style="font-size: 0;line-height: 0;border-collapse: collapse;" class="MobileScale2">&nbsp;</td></tr>
			</table>	
		</td>
	</tr>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
  	<tr>
  		<td width="100%" valign="top" bgcolor="#0069aa">
			<table border="0" cellpadding="0" cellspacing="0" align="center">
				<tr>
					<td width="600" bgcolor="#0069aa">
						
						<table width="560" border="0" cellpadding="0" cellspacing="0" align="center" class="MobileScale">
							<tr>
								<td width="100%">						

									<!-- Text Section -->
									<table border="0" cellpadding="0" cellspacing="0" align="center" class="FooterModule">
										<tr><td width="100%" height="30" style="font-size: 15;line-height: 0;border-collapse: collapse;">&nbsp;</td></tr>
										<tr>
											<td mc:edit="Footer Text" width="100%" style="font-size: 12px; text-align: center; color: #ffffff; font-weight: normal; font-family: 'Open Sans', Helvetica, Arial, sans-serif; line-height: 17px;">										
												Freedom Advisory Group is a family of financial service companies. Investment advisory services are offered through Freedom Wealth Solutions, a registered investment advisory firm in the state of Kansas. Insurance products and services are offered through Freedom Financial Strategies and tax preparation services are offered through Freedom Tax Solutions. This website is for informational purposes only and nothing herein shall be construed or interpreted as a solicitation to sell or offer to sell investment advisory services to any resident of any state outside the state of Kansas or where otherwise legally permitted. Seek the advice of a qualified professional prior to making any investment decision.
											</td>
										</tr>
										<tr><td width="100%" height="25" style="font-size: 15;line-height: 0;border-collapse: collapse;">&nbsp;</td></tr>										
									</table>
									<!-- End of Text Section -->
									
								</td>
							</tr>							
						</table>
						
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<!-- * Soacil Media * -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
  	<tr>
  		<td width="100%" valign="top" bgcolor="#0084d5">
			<table border="0" cellpadding="0" cellspacing="0" align="center">
				<tr>
					<td width="600" bgcolor="#0084d5">
						
						<table width="560" border="0" cellpadding="0" cellspacing="0" align="center" class="MobileScale">
							<tr>
								<td width="100%">															

									<!-- Social Icons -->
									<table border="0" cellpadding="0" cellspacing="0" align="center">
										<tr>
											<td>
												<a href="https://www.facebook.com/freedomadvisorygroup" target="_blank" style="text-decoration: none;">
													<img mc:edit="Social 1" src="https://origin.ih.constantcontact.com/fs169/1116289918175/img/7.png" width="30" height="30" border="0" alt="Twitter" style="display:block; border:none; outline:none; text-decoration:none; margin-right: 15px;" />
												</a>
											</td>
											<td>
												<a href="https://twitter.com/RandyYeisley" target="_blank" style="text-decoration: none;">
													<img mc:edit="Social 2" src="https://origin.ih.constantcontact.com/fs169/1116289918175/img/9.png" width="30" height="30" border="0" alt="Facebook" style="display:block; border:none; outline:none; text-decoration:none; margin-right: 15px;" />
												</a>
											</td>
											<td>
												<a href="http://www.linkedin.com/pub/randy-yeisley/26/783/547" target="_blank" style="text-decoration: none;">
													<img mc:edit="Social 3" src="https://origin.ih.constantcontact.com/fs169/1116289918175/img/8.png" width="30" height="30" border="0" alt="Skype" style="display:block; border:none; outline:none; text-decoration:none; margin-right: 15px;" />
												</a>
											</td>
											<td>
												<a href="http://vimeo.com/user9864749" target="_blank" style="text-decoration: none;">
													<img mc:edit="Social 4" src="https://origin.ih.constantcontact.com/fs169/1116289918175/img/10.png" width="30" height="30" border="0" alt="Google" style="display:block; border:none; outline:none; text-decoration:none;" />
												</a>
											</td>										
										</tr>													
									</table>
									<!-- End of Social Icons -->								
									
								</td>
							</tr>
						</table>
						
					</td>
				</tr>				
			</table>
		</td>
	</tr>
</table>
<!-- * End of Social Media * -->

<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
  	<tr>
  		<td width="100%" valign="top" bgcolor="#0069aa">
			<table border="0" cellpadding="0" cellspacing="0" align="center">
				<tr>
					<td width="600" bgcolor="#0069aa">
						
						<table width="560" border="0" cellpadding="0" cellspacing="0" align="center" class="MobileScale">
							<tr>
								<td width="100%">						

									<!-- Text Section -->
									<table border="0" cellpadding="0" cellspacing="0" align="center" class="FooterModule">
										<tr><td width="100%" height="25" style="font-size: 15;line-height: 0;border-collapse: collapse;">&nbsp;</td></tr>
										<tr>
											<td mc:edit="Copyright" bgcolor="#0069aa" style="font-size: 11px; text-align: center; color: #eaeaea; font-weight: bold; font-family: 'Open Sans', Helvetica, Arial, sans-serif;">
												Copyright &copy; 2014 - Freedom Advisory Group
											</td>
										</tr>
										<tr><td width="100%" height="25" style="font-size: 15;line-height: 0;border-collapse: collapse;">&nbsp;</td></tr>
									</table>
									<!-- End of Text Section -->
									
								</td>
							</tr>
						</table>
						
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<!-- * End of Footer Module * -->
<!-- * ************************************************************************************************************************************ * -->
</div>

</body>
</html>