<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Calendar | International sales training</title>
<link rel="stylesheet" href="<?php echo base_url();?>application/views/admin/css/style.default.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/fullcalendar/fullcalendar.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/fullcalendar/fullcalendar.print.css" type="text/css" />

<script type="text/javascript" src="<?php echo base_url();?>assets/js/fullcalendar/lib/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/fullcalendar/lib/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/fullcalendar/fullcalendar.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/zxml.js"></script>


<script type="text/javascript" src="<?php echo base_url();?>application/views/admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>application/views/admin/js/plugins/jquery.cookie.js"></script>

<style>
    
    #calendar {
        max-width: 900px;
		margin: 0 auto;
		
	}
        
    #script-warning{
            
        }
</style>

<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>
 <div class="header">
    	<ul class="headermenu">
            <li class="current"><?php echo anchor('admin/dashboard','<span class="icon icon-flatscreen"></span>Dashboard');?>
            </li>
            <li><?php echo anchor('admin/manageblog','<span class="icon icon-pencil"></span>Manage Blog');?></li>
            <li><?php echo anchor('admin/messages','<span class="icon icon-message"></span>Messages');?></li>
            <li><?php echo anchor('admin/reports','<span class="icon icon-chart"></span>Reports');?></li>
        </ul>
        
        <!--headerwidget-->
        
        
    </div><!--header-->
    <?php $this->load->view('includes/left_menu');?>
<body class="withvernav">

<div class="bodywrapper">
 
   <!--leftmenu-->
        
    <div class="centercontent">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">Calendar</h1>
            <?php echo anchor('admin/events/add','Add Event');?>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper withrightpanel">
        
            <div id="calendar" class="fc"></div>
        
        </div><!--contentwrapper-->
        
        <div class="rightpanel">
        	<div class="rightpanelinner">
                <div class="widgetbox">
                	<div class="title"><h4>Events</h4></div>
                    <div class="widgetcontent">
                    	<div id="external-events">
                            <?php foreach ($events as $res):
           echo'<div class="external-event">'.$res['title'].'</div>';
               
       endforeach;?>
                    
                            
                        </div>  
                        
                    </div><!--widgetcontent-->
                </div><!--widgetbox-->
            </div><!--rightpanelinner-->
        </div><!--rightpanel-->
        
	</div><!-- centercontent -->
    <script type="text/javascript">

var oXHR = zXmlHttp.createRequest();
var url = "http://localhost/isti/admin_events/loadEvents";
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
				left: 'prev,next today',
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
					url: 'http://localhost/isti/admin/events/load',
					color: 'blue',   // an option!
					textColor: 'white', // an option!
                                        error: function() {
					$('#script-warning').show();
				       }
				}
			});
		
	});

</script>
    
</div><!--bodywrapper-->
</body>
</html>