<div id="left-sidebar" class="sidebar">
    <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="{{ asset('public/assets/images/user.png') }}" class="rounded-circle user-photo mt-3" alt="User Profile Picture">
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="user-name"><strong>Pamela Petrus</strong></a>
                <a href="javascript:void(0);"><strong>Administrator</strong></a>
                
            </div>
            <hr>
        </div>
        <!-- Nav tabs -->
        <!-- Tab panes -->
        <div class="tab-content padding-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu li_animation_delay">
                        <li class="">
                            <a href="#"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                        </li>
                        <li class="">
                            <a href="#" class="has-arrow"><i class="fa fa-users"></i><span>Students</span></a>
                            <ul>
                                <li><a href="#">View List</a></li>
                                <li><a href="#">View Currently Enrolled</a></li>
                                <li><a href="#">Create Entry</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#" class="has-arrow"><i class="fa fa-wrench"></i><span>Utilities</span></a>
                            <ul>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Grade Level</a></li>
                                <li><a href="#">Requirements</a></li>
                                <li><a href="#">School Year</a></li>
                                <li><a href="#">Sections</a></li>
                                <li><a href="#">Semesters</a></li>
                                <li><a href="#">Strands</a></li>
                                <li><a href="#">Student Level</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#"><i class="fa fa-power-off"></i><span>Logout</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>