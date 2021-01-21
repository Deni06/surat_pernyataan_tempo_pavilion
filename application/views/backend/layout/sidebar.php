<!--MAIN NAVIGATION-->
<!--===================================================-->
<style>
    .logOutIcon::before {
    font-family:'FontAwesome';    
    font-weight: 400; 
    content: "\f08b";
    display:inline-block;
    font:normal normal normal 14px/1 FontAwesome;
    font-size:inherit;
    text-rendering:auto;
    -webkit-font-smoothing:antialiased;
    -moz-osx-font-smoothing:grayscale
  }

  .buildingIcon::before {
    font-family:'FontAwesome';    
    font-weight: 400; 
    content: "\f0f7";
    display:inline-block;
    font:normal normal normal 14px/1 FontAwesome;
    font-size:inherit;
    text-rendering:auto;
    -webkit-font-smoothing:antialiased;
    -moz-osx-font-smoothing:grayscale
  }
</style>
<nav id="mainnav-container">
    <div id="mainnav">

        <!--Shortcut buttons-->
        <!--================================-->
        
        <!--================================-->
        <!--End shortcut buttons-->


        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap" style="background: #455a64;     padding-top: 100px;">
            <div class="nano">
                <div class="nano-content">
                    <ul id="mainnav-menu" class="list-group">
                        <!--Menu list item-->
                        <li class="list-divider"></li> 
                        <?php 
                        if($this->session->userdata('is_login') ==  true && $this->user_library->show_my_task_access() == 1){
                             ?>

                        <li <?php if($this->uri->segment(2)=='my_task') echo 'class="active-link";'?>>
                            <a href="<?=base_url('admin/my_task')?>">
                            <i class="fa fa-list-alt"></i>
                            <span class="menu-title">
                                <strong>My Task</strong>
                            </span>
                            <span class="badge" id="badge_my_task" style="background-color:red;margin-left:2%">0</span>
                            </a>
                        </li>                  
                        <?php }
                        if($this->session->userdata('is_login') ==  true && $this->user_library->show_visitor_in_building_access() == 1){
                            ?>

                       <li <?php if($this->uri->segment(2)=='visitor_in_building') echo 'class="active-link";'?>>
                           <a href="<?=base_url('admin/visitor_in_building')?>">
                           <i class="buildingIcon"></i>
                           <span class="menu-title">
                               <strong>Visitor In Building</strong>
                           </span>
                           </a>
                       </li>  
                       <?php }
                       $recap_visitor_access = $this->user_library->show_recap_visitor_access();
                        if($recap_visitor_access != null && $recap_visitor_access != "" && $this->session->userdata('is_login') == true){
                        ?>

                   <li <?php if($this->uri->segment(2)=='recap_visitor') echo 'class="active-link";'?>>
                       <a href="<?=base_url('admin/recap_visitor')?>">
                       <i class="buildingIcon"></i>
                       <span class="menu-title">
                           <strong>Recap Visitor</strong>
                       </span>
                       </a>
                   </li>  
                   <?php }
                        $user_access = $this->user_library->show_user_access();
                        if($user_access != null && $user_access != "" && $this->session->userdata('is_login') == true){
                             ?>

                        <li <?php if($this->uri->segment(2)=='user') echo 'class="active-link";'?>>
                            <a href="<?=base_url('admin/user')?>">
                            <i class="fa fa-user"></i>
                            <span class="menu-title">
                                <strong>User</strong>
                            </span>
                            </a>
                        </li>   
                        <?php }
                        $user_group_access = $this->user_library->show_user_group_access();
                        if($user_group_access != null && $user_group_access != "" && $this->session->userdata('is_login') == true){
                             ?>

                        <li <?php if($this->uri->segment(2)=='user_group') echo 'class="active-link";'?>>
                            <a href="<?=base_url('admin/user_group')?>">
                            <i class="fa fa-group"></i>
                            <span class="menu-title">
                                <strong>User Group</strong>
                            </span>
                            </a>
                        </li>  
                        <?php }
                        $background_access = $this->user_library->show_background_access();
                        if($background_access != null && $background_access != "" && $this->session->userdata('is_login') == true){
                             ?>

                        <li <?php if($this->uri->segment(2)=='background_surat') echo 'class="active-link";'?>>
                            <a href="<?=base_url('admin/background_surat')?>">
                            <i class="fa fa-compass"></i>
                            <span class="menu-title">
                                <strong>Background Surat</strong>
                            </span>
                            </a>
                        </li> 
                        <?php }
                        $location_access = $this->user_library->show_location_access();
                        if($location_access != null && $location_access != "" && $this->session->userdata('is_login') == true){
                             ?>

                        <li <?php if($this->uri->segment(2)=='location') echo 'class="active-link";'?>>
                            <a href="<?=base_url('admin/location')?>">
                            <i class="fa fa-map-marker"></i>
                            <span class="menu-title">
                                <strong>Location</strong>
                            </span>
                            </a>
                        </li>                                                                        
                        <?php }
                        if($this->session->userdata('is_login') ==  true && $this->user_library->show_declaration_form_access() == 1){
                             ?>

                        <li <?php if($this->uri->segment(2)=='declaration_form') echo 'class="active-link";'?>>
                            <a href="<?=base_url('admin/declaration_form')?>">
                            <i class="fa fa-list-alt"></i>
                            <span class="menu-title">
                                <strong>Declaration Form</strong>
                            </span>
                            </a>
                        </li>  
                        <?php }
                        if($this->session->userdata('is_login') ==  true && $this->user_library->show_report_access() == 1){
                             ?>

                        <li <?php if($this->uri->segment(2)=='report') echo 'class="active-link";'?>>
                            <a href="<?=base_url('admin/report')?>">
                            <i class="fa fa-book"></i>
                            <span class="menu-title">
                                <strong>Report</strong>
                            </span>
                            </a>
                        </li>                   
                        <?php }
                        if($this->session->userdata('is_login') ==  true && $this->user_library->show_report_access() == 1){
                            ?>

                       <li <?php if($this->uri->segment(2)=='report_occupancy') echo 'class="active-link"'?>>
                           <a href="<?=base_url('admin/report_occupancy')?>">
                           <i class="fa fa-book"></i>
                           <span class="menu-title">
                               <strong>Report Occupancy </strong>
                           </span>                           
                           </a>
                       </li>                                            
                        <?php }
                        if($this->session->userdata('is_login') ==  true){ ?>

                        <li <?php if($this->uri->segment(2)=='change_password') echo 'class="active-link"'?>>
                           <a href="<?=base_url('admin/change_password')?>">
                           <i class="fa fa-eye"></i>
                           <span class="menu-title">
                               <strong>Change Password </strong>
                           </span>                           
                           </a>
                       </li>                                            
                        <?php } ?>

                        <li>
                        <a href="<?=base_url('login/logout')?>">
                            <i class="logOutIcon"></i>
                            <span class="menu-title">
                                <strong>Logout</strong>
                            </span>
                            </a>
                        </li>                    
                    </ul>
                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->
        