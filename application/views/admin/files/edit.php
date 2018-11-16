    <div class="container top">
      
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li>
          <a href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>">
            <?php echo ucfirst($this->uri->segment(2));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <a href="#">Update</a>
        </li>
      </ul>
      
      <div class="page-header">
        <h2>
          Updating <?php echo ucfirst($this->uri->segment(2));?>
        </h2>
      </div>

 
      <?php
      //flash messages
      if($this->session->flashdata('flash_message')){
        if($this->session->flashdata('flash_message') == 'updated')
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well done!</strong> File updated with success.';
          echo '</div>';       
        }else{
          echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Oh snap!</strong> change a few things up and try submitting again.';
          echo '</div>';          
        }
      }
      ?>
      
      <?php
      //form data
      $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
      $options_files = array('' => "Select");
      

      //form validation
      echo validation_errors();

      echo form_open('admin/files/update/'.$this->uri->segment(4).'', $attributes);
      ?>
        <fieldset>
          <div class="control-group">
            <label for="inputError" class="control-label">File Name</label>
            <div class="controls">
              <input type="text" id="" name="file_name" title ="The unique file name. Its required and should not have spaces in between the letters" value="<?php echo $files[0]['file_name']; ?>" >
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Category</label>
            <div class="controls">
              <input type="text" id="" name="category" title="The field is mandatory or required" value="<?php echo $files[0]['category']; ?>" >
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Description</label>
          <input type="text" id="" name="description" title="The field is mandatory or required" value="<?php echo $files[0]['description']; ?>" >
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">upload file</label>
            <div class="controls">
             <span class="field">
                            	<input type="file" name="userfile" placeholder="Browse"/>
                                
                            </span>
            </div>
            <div class="control-group">
            <div class="control-label">Page name</div>
            <span class="field">
                                <select name="page_name">
                                   <?php foreach ($pages as  $value){?>
                            	<option value="<?php $value['name'];?>"><?php echo $value['name']; ?></option>
                               <?php }?>
                            </select> 
                             
                       </span>
          </div>
         
          <div class="form-actions">
            <button class="btn btn-primary" type="submit">Save changes</button>
            <?php $attrib = array('class'=>'btn');?>
            <?php echo anchor('admin/files','Cancel',$attrib); ?>
          </div>
        </fieldset>

      <?php echo form_close(); ?>

    </div>
     