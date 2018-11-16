<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Calendar | Amanda Admin Template</title>
<link rel="stylesheet" href="<?php echo base_url();?>application/views/admin/css/style.default.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>application/views/admin/js/plugins/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/views/admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/views/admin/js/plugins/jquery.cookie.js"></script>
<script type='text/javascript' src='<?php echo base_url();?>application/views/admin/js/plugins/fullcalendar.min.js'></script>
<script type="text/javascript" src="<?php echo base_url();?>application/views/admin/js/custom/general.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/views/admin/js/custom/calendar.js"></script>
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

<body class="withvernav">

<div class="bodywrapper">
    <div class="topheader">
       
        
        <div class="right">
        	<div class="notification">
                <a class="count" href="ajax/notifications.html"><span>9</span></a>
        	</div>
            <div class="userinfo">
            	<img src="images/thumbs/avatar.png" alt="" />
                <span>Juan Dela Cruz</span>
            </div><!--userinfo-->
            
            <div class="userinfodrop">            	<div class="avatar">
                	<a href="#"><img src="<?php echo base_url();?>application/views/admin/images/thumbs/avatarbig.png" alt="" /></a>
                    <div class="changetheme">
                    	Change theme: <br />
                    	<a class="default"></a>
                        <a class="blueline"></a>
                        <a class="greenline"></a>
                        <a class="contrast"></a>
                        <a class="custombg"></a>
                    </div>
                </div><!--avatar-->

            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class="header">
    	<ul class="headermenu">
        	<li><a href="dashboard.html"><span class="icon icon-flatscreen"></span>Dashboard</a></li>
            <li><a href="manageblog.html"><span class="icon icon-pencil"></span>Manage Blog</a></li>
            <li><a href="messages.html"><span class="icon icon-message"></span>Messages</a></li>
            <li><a href="reports.html"><span class="icon icon-chart"></span>Reports</a></li>
        </ul>
        
        <div class="headerwidget">
        	<div class="earnings">
            	<div class="one_half">
                	<h4>Today's Earnings</h4>
                    <h2>$640.01</h2>
                </div><!--one_half-->
                <div class="one_half last alignright">
                	<h4>Current Rate</h4>
                    <h2>53%</h2>
                </div><!--one_half last-->
            </div><!--earnings-->
        </div><!--headerwidget-->
        
    </div><!--header-->
    
   <?php $this->load->view('includes/header');?>
   
   <div class="centercontent">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">Calendar</h1>
            <span class="pagedesc">This is a sample description of a page</span>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper withrightpanel">
        
        	<div id="calendar"></div>
        <div class="clearboth">&nbsp;</div>
	<table cellspacing="0">
		<thead>
		<tr>
			<th>Sun</th>
			<th>Mon</th>
			<th>Tue</th>
			<th>Wed</th>
			<th>Thu</th>
			<th>Fri</th>
			<th>Sat</th>
		</tr>
		</thead>
		<tr>
			<?php
			for($i=0; $i< $total_rows; $i++)
			{
				for($j=0; $j<7;$j++)
				{
					$day++;					
					
					if($day>0 && $day<=$total_days_of_current_month)
					{
						//YYYY-MM-DD date format
						$date_form = "$current_year/$current_month/$day";
						
						echo '<td';
						
						//check if the date is today
						if($date_form == $today)
						{
							echo ' id="today"';
						}
						
						//check if any event stored for the date
						if(array_key_exists($day,$events))
						{
							//adding the date_has_event class to the <td> and close it
							echo ' class="date_has_event"> '.$day;
							
							//adding the eventTitle and eventContent wrapped inside <span> & <li> to <ul>
							echo '<div class="events"><ul>';
							
							foreach ($events as $key=>$event){
								if ($key == $day){
							  	foreach ($event as $single){
							  		echo '<li>'; 					
									echo anchor("admin/events/edit/$single->id",'<span class="title">'.$single->eventTitle.'(by '.$single->user.')</span><span class="desc">'.$single->eventContent.'</span>');						
									echo '</li>'; 
  								} // end of for each $event
								}
  								
							} // end of foreach $events
							
							
							echo '</ul></div>';
						} // end of if(array_key_exists...)
					
						else 
						{
							//if there is not event on that date then just close the <td> tag
							echo '> '.$day;
						}
						echo "</td>";
					}
					else 
					{
						//showing empty cells in the first and last row
						echo '<td class="padding">&nbsp;</td>';
					}
				}
				echo "</tr><tr>";
			}
			
			?>
		</tr>
		<tfoot>		
			<th>
			<?php echo anchor('admin/events/index/'.$previous_year,'&laquo;&laquo;', array('title'=>$previous_year_text));?>
			</th>
			<th>
			<?php echo anchor('admin/events/index/'.$previous_month,'&laquo;', array('title'=>$previous_month_text));?>
			</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>
			<?php echo anchor('admin/events/index/'.$next_month,'&raquo;', array('title'=>$next_month_text));?>
			</th>
			<th>
			<?php echo anchor('admin/events/index/'.$next_year,'&raquo;&raquo;', array('title'=>$next_year_text));?>
			
			</th>		
		</tfoot>
	</table>
</div>
        </div><!--contentwrapper-->
        
        <div class="rightpanel">
        	<div class="rightpanelinner">
                <div class="widgetbox">
                	<div class="title"><h4>Events</h4></div>
                    <div class="widgetcontent">
                    	<div id="external-events">
                            <div class="external-event">My friend's birthday event</div>
                            <div class="external-event">My wedding</div>
                            <div class="external-event">Company party</div>
                            <div class="external-event">Island hopping event</div>
                            <div class="external-event">Fun run event</div>
                            <p>Drag the events to the calendar to set a schedule.</p>
                        </div>  
                        
                    </div><!--widgetcontent-->
                </div><!--widgetbox-->
            </div><!--rightpanelinner-->
        </div><!--rightpanel-->
        
	</div><!-- centercontent -->
    
    <script type="text/javascript">

var oXHR = zXmlHttp.createRequest();
var url = "<?php echo anchor('admin/events');?>";
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
console.debug(myFunction(response));

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
			selectable: true,
			selectHelper: true,
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
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: {
					url: 'http://laravel.dev/getEvents',
					color: 'blue',   // an option!
					textColor: 'white' // an option!
				}
			
		});
		
	});

</script>

        
<style>

	

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
	
</div><!--bodywrapper-->

</body>

</html>
