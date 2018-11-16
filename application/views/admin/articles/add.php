 <div class="centercontent">
<div id="basicform" class="subcontent">
        <?php
      //flash messages
      if(isset($flash_message)){
        if($flash_message == TRUE)
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well done!</strong> new article added with success.';
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
                                    echo form_open('admin/elements/add', $attributes);

                                    ?>
                    	<p>
                        	<label>Title</label>
                            <span class="field"><input type="text" name="title" id="title" class="validate[required,maxSize[80]]" /></span>
                        </p>
                        
                        <p>
                        	<label>Content</label>
                                <textarea name="content" cols="80" rows="5" class="longinput"></textarea>
                                
                        </p>
                        
                       
                         
                        <br />
                         
                        <p>
                            
                        	<label>page name</label>
                            <span class="field">
                                <select name="page_name">
                                   <?php foreach ($pages as  $value){?>
                            	<option value="<?php $value['name'];?>"><?php echo $value['name']; ?></option>
                               <?php }?>
                            </select> 
                             
                       </span>
                            </p>
                        <br />
                        
                        <p class="stdformbutton">
                        	<button class="submit radius2">Submit Button</button>
                        </p>
                         
                   <?php echo form_close(); ?>

            </div>

 </div>