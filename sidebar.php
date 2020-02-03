        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="has-arrow  " href="index.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard </span></a>

                        </li>

                        <li class="nav-label">Management</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Product Inspection</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="add_customer.php">Inspect product</a></li>
                                <li><a href="view_customer.php">View Inpected</a></li>
                                
                            </ul>
                        </li>

                        
                        

                        
                        

                       
                        

                        
                        

                        
                        <!-- <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa  fa-chain (alias)"></i><span class="hide-menu">Discount Details</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="add_discount.php">Add Discount</a></li>
                                <li><a href="view_discount.php">View Discount</a></li>
                               
                            </ul>
                        </li> -->

                         <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa  fa-sticky-note"></i><span class="hide-menu">Reports</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="report_customer.php">Print Report</a></li>
                                
                               
                            </ul>
                        </li>
                <?php if($_SESSION["id"]=='1') { ?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-cog"></i><span class="hide-menu">Setting</span></a>
                            <ul aria-expanded="false" class="collapse">
                               
                               <li><a href="manage_website.php">Appearance Management</a></li>
                            
                              <li><a href="view_admin.php">Admins</a></li>
                              <li><a href="add_admin.php">Add Admins</a></li>
                              
                            </ul>
                        </li> 
                         <?php } ?>



                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->