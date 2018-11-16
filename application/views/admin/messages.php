<?php $this->load->view('includes/header');?>
    
    <div class="centercontent">
    
        <div class="pageheader">
            <h1 class="pagetitle">Messages</h1>
            <span class="pagedesc">The content below are loaded using ajax</span>
            
            <ul class="hornav">
                <li class="current"><a href="#inbox">Inbox</a></li>
                <li><a href="#compose">Compose New</a></li>
            </ul>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
             
             <div id="inbox" class="subcontent">
             
                <div class="msghead">
                    <ul class="msghead_menu">
                        <li><a class="reportspam">Report Spam</a></li>
                        <li class="marginleft5 dropdown" id="actions">
                            <a class="dropdown_label" href="#actions">
                            Actions
                            <span class="arrow"></span>
                            </a>
                            <ul>
                                <li><a href="#">Mark as Read</a></li>
                                <li><a href="#">Mark as Unread</a></li>
                                <li><a href="#">Move to Folder</a></li>
                                <li><a href="#">Add Star</a></li>
                            </ul>
                        </li>
                        <li class="marginleft5"><a class="msgtrash" title="Trash"></a></li>
                    	<li class="right"><a class="next"></a></li>
                        <li class="right"><a class="prev prev_disabled"></a></li>
                        <li class="right"><span class="pageinfo">1-10 of 2,139</span></li>
                    </ul>
                    <span class="clearall"></span>
                </div><!--msghead-->
                
                <table cellpadding="0" cellspacing="0" border="0" class="stdtable mailinbox">
                    <colgroup>
                        <col class="con1" width="4%"/>
                        <col class="con0" width="4%" />
                        <col class="con1" width="15%"/>
                        <col class="con0" width="63%"/>
                        <col class="con1" width="4%"/>
                        <col class="con1" width="10%"/>
                    </colgroup>
                    <thead>
                    <tr>
                         <th class="head1 aligncenter">subject</th>
                           <th class="head0">email</th>
                            <th class="head0">company</th>
                            <th class="head1 attachement">cell;</th>
                            
                    </tr>
                    </thead>
                    <tfoot>
                        <tr>
                           
                            
                            <th class="head1 aligncenter">subject</th>
                           <th class="head0">email</th>
                            <th class="head0">company</th>
                            <th class="head1 attachement">cell;</th>
                            
                        </tr>
                    </tfoot>
                    <tbody>
                        
                            
                     <?php
              foreach($messages as $row)
              {
               echo '<tr>';
                
                            
                          
                echo '<td>'.$row['subjectline'].'</td>';
                echo '<td>'.$row['email'].'</td>';
                echo '<td>'.$row['company'].'</td>';
                echo '<td>'.$row['cell'].'</td>';
              
                echo '</tr>';
              }
              ?>
                      
                    </tbody>
                </table>             
             </div>
             <div id="compose" class="subcontent" style="display: none">&nbsp;</div>
        </div><!--contentwrapper-->
    
    </div><!--centercontent-->
    
    
</div><!--bodywrapper-->

</body>

</html>
