<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="images/jquery.youtubeplaylist.js"></script>

<script type="text/ecmascript">

		$(function() {
			$("ul.demo1").ytplaylist({deepLinks: true});
			$("ul.demo2").ytplaylist({
                addThumbs:true, 
                autoPlay: false,
                onChange: function() {
                    $(window).resize(); 
					console.log('changed');
                },
                holderId: 'ytvideo2'});
		});
		

</script>



<style type="text/css">

#ytvideo2 {
    float: left;
	margin-right:10px;
	position: relative; 
	overflow: hidden;
	
}
.yt_holder {
    background: #222222;
    float: left;
    margin-left: 17px;
    padding: 10px 0 2px;
	margin-right:10px;
    
}

.ytvideo2 iframe {

position: absolute; 
top: 0; 
left: 0; 
width: 100%; 
height: auto; 
}

ul.lista {
    float: left;
    margin: 0;
    padding: 0;
    width: 350px;
	height:408px;
}

ul.lista li {
    list-style-type: none;
    display:block;
    float: left;
    width: 350px;
    margin-bottom: 5px;
}

ul.lista li img {
    width: 120px;
    float: left;
    margin-right: 8px;
    border: 1px solid #999;
	height:74px;
}

ul.lista li a {
    text-decoration: none;
    display: block;
    color: #efefef;
}

.currentvideo {
	background: #3a3a3a;
}

ul.lista li:hover {
	background: #3a3a3a;
}
	ul li img:hover {
    border: 1px solid #ff0000;
	}


</style>

</head>

<body>

	<div id="page">
    <div class="yt_holder">
    	<div id="ytvideo2" ></div>
        <ul class="demo2 lista">
            <li>
				<a href="https://www.youtube.com/watch?v=zUKJaVl7FPY" style="font-family:arial;font-size:12px;color:#dcdcdc;">SaaS Heroes Pilot: Destroyers of Downtime</a>
				<div style="font-family:verdana;font-size:11px;color:#767676;"> from IBM Management</div></li>
				
            <li><a href="https://www.youtube.com/watch?v=gClLyqyGtR0" style="font-family:arial;font-size:12px;color:#dcdcdc;">SaaS Heroes Episode 2: Mighty Mobile Mayhem Management</a>
			<div style="font-family:verdana;font-size:11px;color:#767676;">from IBM Management</div>
			</li>
            <li><a href="https://www.youtube.com/watch?v=XaRHyL99Emo" style="font-family:arial;font-size:12px;color:#dcdcdc;">SaaS Heroes Episode 3: Saviors of the Service Desk</a>
			<div style="font-family:verdana;font-size:11px;color:#767676;">from IBM Management</div></li>
			
			<li><a href="https://www.youtube.com/watch?v=BiHDNChKEmE" style="font-family:arial;font-size:12px;color:#dcdcdc;">SaaS Heroes Episode 4: Naysayers of All Nighters</a>
			<div style="font-family:verdana;font-size:11px;color:#767676;">from IBM Management</div></li>
            <li><a href="https://www.youtube.com/watch?v=0Cw83My3YIs" style="font-family:arial;font-size:12px;color:#dcdcdc;">SaaS Heroes Episode 5: App Avengers of Pinnacle Performance</a>
			<div style="font-family:verdana;font-size:11px;color:#767676;">from IBM Management</div></li>
        </ul>
    </div>
    </div>
<script>
$( document ).ready(function(){
	$(window).resize(); 
});
$(window).resize(function() {
	var allVideos = $("#ytvideo2").find("iframe");
		
		fluidEl = $("body");
		divLi = $(".demo2");
		
	var aspectRatio = (allVideos.height() / allVideos.width());

    // and remove the hard coded width/height
	
	var newWidth = fluidEl.width() ;
	
	if(newWidth <= 740){
	  // Resize all videos according to their own aspect ratio
		  allVideos.width(newWidth);
		  console.log("newWidth: "+ newWidth);
		  
		  allVideos.height(newWidth * aspectRatio);
		  console.log("newWidth * aspectRatio: " + newWidth * aspectRatio);
		}  	  
});	
</script>
	
</body>
</html>
