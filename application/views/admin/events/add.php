<div class="centercontent">
<div id="basicform" class="subcontent">
<h2><?php echo FORM_TITLE;?></h2>
<div class="buttons">
    <a href="<?php print  site_url('admin/events/index')?>">
   
    </a>
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-datepickr.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<script>
$(document).ready(function(){
$(‘.datepicker’).datepicker();
});
</script>
<link href=”<?php echo base_url();?>assets/css/datepickr.css” rel=”stylesheet”>
    <?php //echo anchor("calendar/admin/delete/".$event[0]['id'],'Delete');		?>
</div>
<div class="clearboth">&nbsp;</div>
<?php 
if ($this->session->flashdata('message')){
	echo "<div class='status_box'>".$this->session->flashdata('message')."</div>";
}

echo form_open('admin/events/add');?>
	<table align="center" id="preference_form">
		
                <tr>
                        <td>Event Title : </td>
                        <td><input id="eventTitle" name="title" class="text"></td>
                </tr>
                
                                
                <tr>
			<td>Start Date : </td>
			<td><input id="date" name="start" class="datepicker" placeholder="yyyy-mm-dd"></td>
		</tr>
                <tr>
			<td>End Date : </td>
			<td><input id="date" name="end" class="datepicker" placeholder="yyyy-mm-dd"></td>
		</tr>
		
		<tr>
			<td>Event Details : </td>
			<td><input  name="event_description" class="text"></td>
		</tr>
		<tr>
		<td><input type="hidden" name="user_id" id="user_id" value="<?php echo @$user_id;?>" /></td>
		<td><input type="hidden" name="user" id="nick" value="<?php echo @$user;?>" />		</td>
		</tr>

                </table>

<div class="buttons">
	<button type="submit" class="positive" name="submit" value="submit">
   Save
    </button>
<button type="submit" class="negative" name="submit" value="submit">
    <?php echo anchor('admin/events','Cancel');?>  
    
    </button>
</div>
	
	</form>
	
	
	<?php
//check if there is any alert message set
if(isset($alert) && !empty($alert))
{
	//message alert
	echo $alert;
}
?>
</div></div>