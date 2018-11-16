<h2><?php echo $title;?></h2>
<div class="buttons">
    <a href="<?php print  site_url('admin/events/index')?>">
   
    </a>
    <a href="<?php print  site_url('admin/events/delete/'.$event[0]['id'])?>">
    
    </a>
    <?php 	//echo anchor("calendar/admin/delete/".$event[0]['id'],'Delete');		?>
</div>
<div class="clearboth">&nbsp;</div>

<?php

if ($this->session->flashdata('message')){
	echo "<div class='status_box'>".$this->session->flashdata('message')."</div>";
}

echo form_open('admin/events/update');?>
	<table align="center" id="preference_form">
		
		<tr>
			<td>Date : </td>
			<td><input id="date" name="date" class="text" value="<?php echo $event[0]['eventDate'] ;?>" ></td>
		</tr>
		<tr>
			<td>Event Title : </td>
			<td><input id="eventTitle" name="eventTitle" value="<?php echo $event[0]['eventTitle'] ;?>" class="text"></td>
		</tr>
		<tr>
			<td>Event Details : </td>
			<td><input name="eventContent" class="text" value="<?php echo $event[0]['eventContent'] ;?>"></td>
		</tr>
		<input type="hidden" name="id" value="<?php echo $event[0]['id'] ;?>" />
		
	
	</table>

<div class="buttons">
	<button type="submit" class="positive" name="submit" value="submit">
   Save
    </button>
<button type="submit" class="negative" name="submit" value="submit">
    <a href="<?php echo anchor('admin/events','Cancel');?>" >
    
    </a></button>
</div>
	</form>
	
	
<?php
/*
echo "<pre>";
print_r ($event);
echo "</pre>";
*/
?>