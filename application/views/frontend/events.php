                                            
    <!DOCTYPE html>

<html lang="en-US" prefix="og: http://ogp.me/ns#">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  
	<title>ISTI - International sales Training Institute</title>
	
  
        <script src="<?php echo base_url();?>application/views/js/modernizr.js"></script>
  
	

<meta name="description"  content="International sales training institute is a firm that provides Marketing consulting and Professional Training that brings new perspectives to the way businesses" />

<meta name="keywords"  content="sales training, Kenya sales training, marketing training,Sales,Guerrilla marketing,Guerrilla Selling,Guerrilla secrete weapons,High impact selling,Sales Training,Sales and marketing,Business advisory,Sales Tips &amp; techniques,Prospecting,Closing a sale,Sales force,Sales Seminars,Seminars,Sales &amp; Marketing strategies,International sales training,Selling philosophies,Professional Training,Marketing consultancy,Training modules,Progressive implementation of tactics,Training courses,Professional sales Training courses,Professional facilitators,Sales cycle,Sales techniques,Sales team,Increase profits" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="International Sales Training Institute" />
<meta property="og:url" content="http://www.istiglobal.com/" />
<meta property="og:site_name" content="ISTI Global" />



		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"http:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/www.salesguru.co.za\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.2.1"}};
			!function(a,b,c){function d(a){var c=b.createElement("canvas"),d=c.getContext&&c.getContext("2d");return d&&d.fillText?(d.textBaseline="top",d.font="600 32px Arial","flag"===a?(d.fillText(String.fromCharCode(55356,56812,55356,56807),0,0),c.toDataURL().length>3e3):(d.fillText(String.fromCharCode(55357,56835),0,0),0!==d.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f;c.supports={simple:d("simple"),flag:d("flag")},c.supports.simple&&c.supports.flag||(f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" href="<?php echo base_url();?>application/views/nova/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/nova/css/bootstrap-responsive.min.css">
     <link rel="stylesheet" href="<?php echo base_url();?>application/views/nova/css/main.css">
<link rel='stylesheet' id='twentyfourteen-lato-css'  href='http://fonts.googleapis.com/css?family=Lato%3A300%2C400%2C700%2C900%2C300italic%2C400italic%2C700italic' type='text/css' media='all' />
<link rel='stylesheet' id='genericons-css'  href='<?php echo base_url();?>application/views/genericons/genericons.css' type='text/css' media='all' />
<link rel='stylesheet' id='twentyfourteen-style-css'  href='<?php echo base_url();?>application/views/genericons/style.css' type='text/css' media='all' />






<link rel="stylesheet" href="<?php echo base_url();?>assets/js/fullcalendar/fullcalendar.css" type="text/css" />
<!--<link rel="stylesheet" href="<?php echo base_url();?>assets/js/fullcalendar/fullcalendar.print.css" type="text/css" />-->

<script type="text/javascript" src="<?php echo base_url();?>assets/js/fullcalendar/lib/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/fullcalendar/lib/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/fullcalendar/fullcalendar.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/zxml.js"></script>


<script type="text/javascript" src="<?php echo base_url();?>application/views/admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>application/views/admin/js/plugins/jquery.cookie.js"></script>
<script type="text/javascript">

var oXHR = zXmlHttp.createRequest();
var url = "<?php echo base_url();?>.'calendar/loadEvents'";
oXHR.open("get", url , true);

oXHR.onreadystatechange = function () {
                if (oXHR.readyState == 4) {
                    if (oXHR.status == 200 || oXHR.status == 304) {
                        myFunction(oXHR.responseText);
                        
                    } else {
                        window.alert("An error occurred: " + oXHR.statusText); //statusText is not always accurate
                    }
                }            
            };
            oXHR.send(null);

function myFunction(response) {
    //var arr = JSON.parse(response);
    console.debug(response);
	
    return response;
}
//console.debug(myFunction(response));

/*function jsonEncode(myFunction(response)){
   var info = myFunction(response);
   console.debug(response);

}*/
</script>


<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
                        header: {
				left: 'prev,next, today',
				center: 'title',
                                right: 'month,agendaWeek,agendaDay'
				
			},
			
                        editable: true,
			eventLimit: true, // allow "more" link when too many events
                        select: function(start, end) {
				var title = prompt('Event Title:');
				var eventData;
				if (title) {
					eventData = {
						title: title,
						start: start,
						end: end
					};
					$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
				}
				$('#calendar').fullCalendar('unselect');
			},
			selectable: true,
			selectHelper: true,
                        events: {
					url: '<?php echo base_url().'calendar/loadEvents';?>',
					color: 'maroon',   // an option!
					textColor: 'yellow', // an option!
                                        error: function() {
					$('#script-warning').show();
				       }
				}
                                
			});
		
	});

</script>
<style>
    
    #calendar {
        max-width: 900px;
		margin: 0 auto;
		
	}
        
    #script-warning{
            
        }
</style>
</head>
<body class="home page page-id-2 page-template page-template-page-home page-template-page-home-php masthead-fixed full-width grid">
    
    
    



		<div class="contain-to-grid top-strip">
      <div class="row">
        <div class="large-12 columns">
      
            <div class="top-contact right"><font face="cambria"> CONTACT US: <span>+254-786 305 030,
                    +254-731 305 030</span>
</div>
      
        </div>
      </div>
    </div>
    
    
    <div class="contain-to-grid header">
      <div class="row">
        
        <div class="large-12 columns">
          <div class="medium-6 large-6 columns">
            <div class="logo"><img src="<?php echo base_url();?>application/views/img/logo.png"></div>
          </div>
          
          <div class="medium-6 large-6 columns hide-for-small-only right">
                          
          </div>
        </div>
        
       
        
          
         <?php $this->load->view('frontend/menu');?>
          
          
          
        </div> 
        
    </div>
    <section class="title">
        
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Calendar of Events</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                        <li class="active">Calendar of Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="row panel">
        <div id="calendar"></div></div>
          
  <section class="container">  
 <div class="row panel">
     
                    <p><img src="<?php echo base_url();?>assets/2014/09/img-events.jpg" /></p>
        
         
          <img src="<?php echo base_url();?>application/views/img/isti-didyouknow.jpg"/><br/>
          <p> <b><font face="cambria">"Great minds discuss ideas, average minds discuss events, small minds discuss people."</b> <br/><span>Eleanor Roosevelt</span>
               </p>    
         
        
                  
      </div>
      

 </div></section>
   <div class="contain-to-grid footer-links">
      <div class="row">
        <div class="large-12 columns">
        
          <ul class="social-icons">
              <li><a href=""><img src="<?php echo base_url();?>application/views/img/icons/facebook.png" /></a></li>
              <li><a href=""><img src="<?php echo base_url();?>application/views/img/icons/twitter.png" /></a></li>
              <li><a href=""><img src="<?php echo base_url();?>application/views/img/icons/linkedin.png" /></a></li>
              <li><a href=""><img src="<?php echo base_url();?>application/views/img/icons/youtube.png" /></a></li>
              <li><a href=""><img src="<?php echo base_url();?>application/views/img/icons/rss.png" /></a></li>
            </ul>
          
          <div class="medium-4 large-4 columns">
            <p class="copy right"><?php echo date("Y");?> Difbac &reg; All Rights Reserved</p>
          </div>
        
        </div>
      </div>
    </div>

    <script src="<?php echo base_url();?>assets/js/jquery.cookie.js"></script>
    <script src="<?php echo base_url();?>assets/js/foundation.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/dropdown.js"></script>
    
    
    <script src="<?php echo base_url();?>assets/js/jquery.bxslider.min.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/jquery.bxslider.css" />
  	<!--<script type='text/javascript' src='wp-includes/js/comment-reply.min50fa.js?ver=4.2.1'></script>
<script type='text/javascript' src='wp-content/themes/sales-guru/js/functions652b.html?ver=20131209'></script>-->
</body>


</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     