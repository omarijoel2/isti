 <div class="centercontent">
<div id="basicform" class="subcontent">
        <?php
      //flash messages
      if(isset($flash_message)){
        if($flash_message == TRUE)
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well done!</strong> new file added with success.';
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
                                    $attributes = array('id' => 'validate','class'=>"stdform stdform2");
                                       //form validation
                                    echo validation_errors();
                                    echo @$error;
                                    echo form_open_multipart('admin/files/add', $attributes);

                                    ?>
                    	<p>
                        	<label>File Name</label>
                            <span class="field"><input type="text" name="file_name" id="firstname" class="validate[required,maxSize[8]]" /></span>
                        </p>
                        
                        <p>
                        	<label>Description</label>
                            <textarea cols="80" rows="5" id="textarea2" class="longinput" name="description" placeholder="file description"></textarea>
                        </p>
                        
                     
                         <p>
                        	<label for="category">*File Category: </label>
                         <select id="category" name="category" required="true"><option value="general">Photo</option>
                        <option value="video">video </option>
                        <option value="audio">Audio </option>
                        <option value="slides">slides</option>
                        <option value="gallery">gallery</option>
                       
</select>
                         
                         </p>
                        
                         
                       
                        
                        <p>
                        	<label>File Upload</label>
                            <span class="field">
                            	<input type="file" name="userfile" placeholder="Browse"/>
                                
                            </span>
                        </p>
                        <p class="stdformbutton">
                        	<button class="submit radius2">Submit Button</button>
                        </p>
                         
                   <?php echo form_close(); ?>

            </div>

 </div>