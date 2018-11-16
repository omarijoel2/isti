  <div class="centercontent">  
 <div id="contentwrapper" class="contentwrapper">
        	
        	<div id="basicform" class="subcontent">

      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <?php echo ucfirst($this->uri->segment(2));?>
        </li>
      </ul>

      <div class="page-header users-header">
        <h2>
          <?php echo ucfirst($this->uri->segment(2));?> 
            <?php echo anchor('admin/create_member','Add New',array('class'=>'btn btn-success'));?>
         
        </h2>
      </div><div class="row">
        <div class="span12 columns">
         

          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th class="header">#</th>
                <th class="yellow header headerSortDown">First Name</th>
                <th class="green header">Last Name</th>
                <th class="red header">Email Address</th>
                <th class="red header">Username</th>
                
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($users as $row):
              {
                echo '<tr>';
                echo '<td>'.$row->id.'</td>';
                echo '<td>'.$row->first_name.'</td>';
                echo '<td>'.$row->last_name.'</td>';
                echo '<td>'.$row->email_addres.'</td>';
                echo '<td>'.$row->user_name.'</td>';
                
                
                echo '</tr>';
                
              }
              
              ?>  
               <?php endforeach;?>
            </tbody>
          </table>

          <?php //echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?>

        </div></div></div>
    