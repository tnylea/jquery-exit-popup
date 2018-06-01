<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Jquery Exit Popup</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<style type="text/css">

			body
			{
				margin:0px;
				padding:0px;
				font-family:'Helvetica Neue', Helvetica, Arial, Courier;
				text-align:center;
			}

			code
			{
				width:800px;
				display:block;
				white-space:pre;
				width:600px;
			}			
		
		</style>
	</head>
	<body>
		<?php include('exitpopup.php'); ?>
		
		<h1 style="margin-top:0px; padding-top:20px;">This is an example page of an exit popup</h1>
		<p style="width:800px; margin:0px auto; text-align:left;">Try and leave the page, when your cursor passes 5 pixels from the top, a modal window will popup prompting the user with an offer, such as 'Purchase Now and get $10 off' or 'Hold on, make sure to sign-up for our newsletter before you go'. You get the idea :)</p>
		
		<code style="text-align:left; width:800px; height:600px;">
&lt;script type=&quot;text/javascript&quot;&gt;

	$(document).ready(function() {
	
		$(document).mousemove(function(e) {
		
			$('#exitpopup').css('left', (window.innerWidth/2 - $('#exitpopup').width()/2));
			$('#exitpopup').css('top', (window.innerHeight/2 - $('#exitpopup').height()/2));
		
			if(e.pageY &lt;= 5)
			{
				
				// Show the exit popup
				$('#exitpopup_bg').fadeIn();
				$('#exitpopup').fadeIn();
			}
		
		});
		
		$('#exitpopup_bg').click(function(){
			$('#exitpopup_bg').fadeOut();
			$('#exitpopup').slideUp();
		});
	
	});
&lt;/script&gt;

&lt;style type=&quot;text/css&quot;&gt;

	#exitpopup
	{
		text-align:center;
	}

	#exitpopup h1
	{
		margin-top:0px;
		padding-top:0px;
		
	}	
	
	#exitpopup p
	{
		text-align:left;
	}

&lt;/style&gt;



&lt;div style=&quot;display: none; width:100%; height:100%; position:fixed; background:#000000; opacity: .8; filter:alpha(opacity=0.8); z-index:999998;&quot; id=&quot;exitpopup_bg&quot;&gt;
	
&lt;/div&gt;
&lt;div style=&quot;width:670px; height:450px; margin:0px auto; display:none; position:fixed; color:#ffffff; padding:20px; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; z-index:999999; background:rgb(20, 20, 20); background:rgba(0, 0, 0, 0.8);&quot; id=&quot;exitpopup&quot;&gt;
		&lt;h1&gt;Wait!!! Before you go...&lt;/h1&gt;
		&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquam interdum enim ut congue. Vivamus erat velit, convallis nec suscipit at, egestas nec nunc. Phasellus in faucibus nunc. Curabitur luctus suscipit faucibus. Phasellus risus risus, bibendum vitae commodo at, gravida in lorem. Nam euismod, turpis non viverra eleifend, leo lorem tempor elit, sit amet hendrerit justo purus at magna. In hac habitasse platea dictumst. Integer sodales pretium libero sed mattis. Aenean suscipit neque ac purus tincidunt iaculis.&lt;br /&gt;&lt;br /&gt;

Pellentesque ultricies tellus eu orci tempor aliquam vel posuere orci. Nulla in sapien ut tellus malesuada vulputate. Nunc sit amet enim felis, sit amet semper sapien. Vestibulum commodo, nisi vitae faucibus ullamcorper, libero est varius lorem, vel euismod ipsum odio sed elit. Sed risus enim, viverra sit amet pharetra molestie, scelerisque nec tortor.&lt;/p&gt;
&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;letmeinnow.png&quot; style=&quot;width:568px; height:190px&quot; border=&quot;0&quot; style=&quot;border:0px; margin:0px auto;&quot; /&gt;&lt;/a&gt;

&lt;/div&gt;
		</code>
	
	</body>
</html>
