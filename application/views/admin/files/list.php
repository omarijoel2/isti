 <div class="centercontent">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">File Manager</h1>
            <span class="pagedesc">To select an item, just click the thumbnail.</span>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper nopadding">
        
        	<div class="filemgr">
            	<div class="filemgr_left">
                	<div class="filemgr_head">
                    	<ul class="filemgr_menu">
                        	<li><a class="prev prev_disabled"></a></li>
                            <li><a class="next"></a></li>
                            <li class="marginleft20"><a class="selectall">Select All</a></li>
                            <li class="marginleft5 viewfilebtn"><a class="preview preview_disabled">View File</a></li>
                            <li class="marginleft20 newfoldbtn"><a class="newfolder" title="Add New Foldr"></a></li>
                            <li class="marginleft5 trashbtn"><a class="trash trash_disabled" title="Trash"></a></li>
                            <li class="marginleft20 filesearch">
                            	<form>
                            		<input type="text" id="filekeyword" class="filekeyword" value="Search file here" />
                                </form>
                            </li>
                            <li class="right newfilebtn"> <?php echo anchor('admin/files/add','Add New File',array('class'=>"newfilebutton radius2"))?></li>
                        </ul>
                        <span class="clearall"></span>
                    </div><!--filemgr_head-->
                    
                    <div class="filemgr_category">
                    	<ul>
                        	<li class="current"><a href="#">All</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Slides</a></li>
                            <li><a href="#">Video</a></li>
                            <li><a href="#">Audio</a></li>
                            <li><a href="#">Documents</a></li>
                            <li class="right"><span class="pagenuminfo">Showing 1 - 20 of 69</span></li>
                        </ul>
                    </div><!--filemgr_category-->
                    
                    <div class="filemgr_content">
						
                        <small>
                        	<strong>
                            	<em>Tips: Hold Control key to select multiple items. To view file, select one item and click View File button.</em>
                            </strong>
                        </small>
                        
                        <br /><br />
                    	
                          <div class="container top">

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
          <a href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>/add" class="btn btn-success">Add a new</a>
        </h2>
      </div>
      
      <div class="row">
        <div class="span12 columns">
          <div class="well">
           
            <?php
           
            $attributes = array('class' => 'form-inline reset-margin', 'id' => 'myform');
           
            //save the columns names in a array that we will use as filter         
            $options_files = array(); 
            if (is_array($files)){   
            foreach ($files as $array) {
              foreach ($array as $key => $value){
                $options_files[$key] = $key;
             }
              break;
            }
            }
			$attributes = array('class' => 'form-inline reset-margin', 'id' => 'myform');
           
            //save the columns names in a array that we will use as filter         
              echo form_open('admin/files', $attributes);
     
              echo form_label('Search:', 'search_string');
              echo form_input('search_string', $search_string_selected, 'style="width: 170px; height: 26px;"');

              //echo form_label('Filter by manufacturer:', 'manufacture_id');
              //echo form_dropdown('manufacture_id', $options_manufacture, $manufacture_selected, 'class="span2"');

              echo form_label('Order by:', 'order');
              echo form_dropdown('category', $options_files, $category, 'class="span2"');

              $data_submit = array('name' => 'mysubmit', 'class' => 'btn btn-primary', 'value' => 'Go');

              $options_order_type = array('Asc' => 'Asc', 'Desc' => 'Desc');
              echo form_dropdown('order_type', $options_order_type, $order_type_selected, 'class="span1"');

              echo form_submit($data_submit);

            echo form_close();
            ?>

          </div>
            <p>Number of Results: <?php echo $count_files;?></p>
            
          <?php $attrib = array('class'=>'btn');?>
          <?php $attr = array('class'=>'btn btn-danger delete');?>  
          <?php $att = array('class'=>'btn btn-success');?>  
         <!-- <a href="javascript:void();" class="btn checkall">Select All</a>
          <a href="javascript:void();" class="btn uncheckall">Un Select All</a>-->
            
          <?php //echo anchor('admin/files/delete_checked','Delete Selected',$attr); ?>  
          <?php //echo anchor('admin/files','Send Selected',$att); ?> <br /><br /> 
          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th class="green header"></th>
                <th class="yellow header headerSortDown">File Name</th>
                
                <th class="red header">Category</th>
                <th class="green header">Description</th>
                <th class="green header">url</th>
                <th class="green header">Date uploaded</th>
                
                <th class="red header">Actions</th>
              </tr>
            </thead>
            <tbody> 
              <?php
              if(is_array($files)){
              foreach($files as $row)
              {
                echo '<tr>';?>
                <td>
                    <input type="checkbox" name="check[]" value="<?php echo $row['id']; ?>"/>
                </td>
                <?php 
                echo '<td>'.$row['file_name'].'</td>';
                echo '<td>'.$row['category'].'</td>';
                echo '<td>'.$row['description'].'</td>';
                echo '<td>'.$row['url'].'</td>';
                echo '<td>'.$row['date_uploaded'].'</td>';
               
                echo '<td class="crud-actions">
                  <td><a href="'.site_url("admin").'/files/update/'.$row['id'].'" class="btn btn-info">Edit</a></td>
                  <td><a href="'.site_url("admin").'/files/delete/'.$row['id'].'" class="btn btn-danger delete">Delete</a></td>
                  <td><a href="'.site_url("admin").'/files/update/'.$row['id'].'" class="btn btn-success">Update</a></td>
                  <td><a href="'.site_url("admin").'/files/download/'.$row['id'].'" class="btn">Download</a></td>
                  
                </td>';
                echo '</tr>';
              }
              }
              ?>      
            </tbody>
          </table>
           
          <?php $attrib = array('class'=>'btn');?>
          <?php $attr = array('class'=>'btn btn-danger delete');?>  
          <?php $att = array('class'=>'btn btn-success');?>  
          <!--<a href="javascript:void();" class="btn checkall">Select All</a>
          <a href="javascript:void();" class="btn uncheckall">Un Select All</a>-->
            
          <?php echo anchor('admin/files/delete_checked','Delete Selected',$attr); ?>  
          <?php //echo anchor('admin/letters','Send Selected',$att); ?>  
          <?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?>

      </div>
    </div>
<script type="text/javascript">
    var elems = document.getElementsByClassName('btn btn-danger delete');
    var confirmIt = function (e) {
        if (!confirm('Are you sure you want to delete this record(s)?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
    
    
</script>
                        <br clear="all" />
                        
                    </div><!--filemgr_content-->
                    
                </div><!--filemgr_left -->
                
                <div class="filemgr_right">
                	<div class="filemgr_rightinner">
                    	<div class="contenttitle2" style="margin-top: 0">
                            <h3>Browse Files</h3>
                        </div><!--contenttitle-->
                        <ul class="menuright">
                        	<li class="current"><a href="#">All Files</a></li>
                            <li><a href="#">Deleted Files</a></li>
                            <li><a href="#">Recently Added</a></li>
                            <li><a href="#">Recently Viewed</a></li>
                            <li><a href="#">New Folder</a></li>
                            <li><a href="#">New Folder(2)</a></li>
                        </ul>
                    </div><!-- filemgr_rightinner -->
                </div><!-- filemgr_right -->
                <br clear="all" />
            </div><!--filemgr-->
        	
        </div><!--contentwrapper-->
        
	</div><!-- centercontent -->
    