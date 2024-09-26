<div class="app-menu">

    <!-- Sidenav Brand Logo -->
    <a href="{{ route('any', 'index') }}" class="logo-box">
        <!-- Light Brand Logo -->
        <div class="logo-light">
            <img src="/images/logo-light.png" class="logo-lg h-6" alt="Light logo">
            <img src="/images/logo-sm.png" class="logo-sm" alt="Small logo">
        </div>

        <!-- Dark Brand Logo -->
        <div class="logo-dark">
            <img src="/images/logo-dark.png" class="logo-lg h-6" alt="Dark logo">
            <img src="/images/logo-sm.png" class="logo-sm" alt="Small logo">
        </div>
    </a>

    <!-- Sidenav Menu Toggle Button -->
    <button id="button-hover-toggle" class="absolute top-5 end-2 rounded-full p-1.5">
        <span class="sr-only">Menu Toggle Button</span>
        <i class="mgc_round_line text-xl"></i>
    </button>

    <!--- Menu -->
    <div class="srcollbar" data-simplebar>
        <ul class="menu" data-fc-type="accordion">
            <li class="menu-title">Menu</li>

            <li class="menu-item">
                <a href="{{ route('any', 'index') }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_home_3_line"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>


            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_building_2_line"></i></span>
                    <span class="menu-text"> Location </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'Hotels']) }}" class="menu-link">
                            <span class="menu-text">All Location</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'add-hotel']) }}" class="menu-link">
                            <span class="menu-text">All Category</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_building_2_line"></i></span>
                    <span class="menu-text"> Hotels </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'Hotels']) }}" class="menu-link">
                            <span class="menu-text">All Hotels</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'add-hotel']) }}" class="menu-link">
                            <span class="menu-text">Add New Hotels</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Attributes</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Room Attributes</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Recovery</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_building_2_line"></i></span>
                    <span class="menu-text"> Tour </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['tour', 'tours']) }}" class="menu-link">
                            <span class="menu-text">All Tours</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['tour', 'add-tour']) }}" class="menu-link">
                            <span class="menu-text">Add Tours</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['tour', 'category']) }}" class="menu-link">
                            <span class="menu-text">Categories</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('second', ['tour', 'attribute']) }}" class="menu-link">
                            <span class="menu-text"> Attributes</span>
                        </a>
                    </li>
                    
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Availability</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Booking Calender</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['tour', 'recovery']) }}" class="menu-link">
                            <span class="menu-text">Recovery</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_building_2_line"></i></span>
                    <span class="menu-text"> All Space </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'Hotels']) }}" class="menu-link">
                            <span class="menu-text">Add New Space</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'add-hotel']) }}" class="menu-link">
                            <span class="menu-text">Attributes</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Availability</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Recovery</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_building_2_line"></i></span>
                    <span class="menu-text"> Car </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'Hotels']) }}" class="menu-link">
                            <span class="menu-text">Add New Car</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'add-hotel']) }}" class="menu-link">
                            <span class="menu-text">Attributes</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Availability</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Recovery</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_building_2_line"></i></span>
                    <span class="menu-text"> Boat </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'Hotels']) }}" class="menu-link">
                            <span class="menu-text">Add New Boat</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'add-hotel']) }}" class="menu-link">
                            <span class="menu-text">Attributes</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Availability</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Recovery</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_building_2_line"></i></span>
                    <span class="menu-text"> Event </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'Hotels']) }}" class="menu-link">
                            <span class="menu-text">Add New Event</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'add-hotel']) }}" class="menu-link">
                            <span class="menu-text">Attributes</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Availability</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Recovery</span>
                        </a>
                    </li>
                </ul>
            </li>

            
            <li class="menu-item">
                <a href="{{ route('any', 'index') }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_home_3_line"></i></span>
                    <span class="menu-text"> Coupon </span>
                </a>
            </li>

            
            <li class="menu-item">
                <a href="{{ route('any', 'index') }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_home_3_line"></i></span>
                    <span class="menu-text"> Review </span>
                </a>
            </li>

            <li class="menu-title">CONTENT</li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_building_2_line"></i></span>
                    <span class="menu-text"> News </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'Hotels']) }}" class="menu-link">
                            <span class="menu-text">All News</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'add-hotel']) }}" class="menu-link">
                            <span class="menu-text">Add News</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Categories</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Tags</span>
                        </a>
                    </li>
                </ul>
            </li>

               
            <li class="menu-item">
                <a href="{{ route('any', 'index') }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_home_3_line"></i></span>
                    <span class="menu-text"> Page </span>
                </a>
            </li>

               
            <li class="menu-item">
                <a href="{{ route('any', 'index') }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_home_3_line"></i></span>
                    <span class="menu-text"> Media </span>
                </a>
            </li>

          
            <li class="menu-title">SUPPORT CENTER</li>
            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_building_2_line"></i></span>
                    <span class="menu-text"> Tickets </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'Hotels']) }}" class="menu-link">
                            <span class="menu-text">All Tickets</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'add-hotel']) }}" class="menu-link">
                            <span class="menu-text">Categories</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_building_2_line"></i></span>
                    <span class="menu-text"> Topics </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'Hotels']) }}" class="menu-link">
                            <span class="menu-text">All Topics</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'add-hotel']) }}" class="menu-link">
                            <span class="menu-text">Add Topics</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Categories</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Tags</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-title">System</li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_building_2_line"></i></span>
                    <span class="menu-text"> Users </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['users', 'user-list']) }}" class="menu-link">
                            <span class="menu-text">All Users</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['users', 'role']) }}" class="menu-link">
                            <span class="menu-text">Role Manager</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['users', 'subscribers']) }}" class="menu-link">
                            <span class="menu-text">Subscribers</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['users', 'upgrade-request']) }}" class="menu-link">
                            <span class="menu-text">Upgrade Request</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['users', 'verificaion-request']) }}" class="menu-link">
                            <span class="menu-text">Verification Request</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_building_2_line"></i></span>
                    <span class="menu-text"> User Plans </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                   
                    <li class="menu-item">
                        <a href="{{ route('second', ['userPlan', 'plan']) }}" class="menu-link">
                            <span class="menu-text">User Plans</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['userPlan', 'plan-report']) }}" class="menu-link">
                            <span class="menu-text">Plan Report</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['userPlan', 'plan-request']) }}" class="menu-link">
                            <span class="menu-text">Plan Request</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="{{ route('any', 'popup') }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_home_3_line"></i></span>
                    <span class="menu-text"> Popup </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('any', 'index') }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_home_3_line"></i></span>
                    <span class="menu-text"> Menu </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('any', 'index') }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_home_3_line"></i></span>
                    <span class="menu-text"> Payouts </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('any', 'index') }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_home_3_line"></i></span>
                    <span class="menu-text"> Themes </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_building_2_line"></i></span>
                    <span class="menu-text"> Setting </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'Hotels']) }}" class="menu-link">
                            <span class="menu-text">General Setting</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'add-hotel']) }}" class="menu-link">
                            <span class="menu-text">Hotel Setting</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Space Setting</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Car Setting</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Event Setting</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Tour Setting</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Boat Setting</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">OpenAI Setting</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">News Setting</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Booking Setting</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Enquiry Setting</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">User Setting</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Wallet Setting</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Vendor Setting</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">User Plans Setting</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Payment Setting</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Style Setting</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Advanced Setting</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Media Setting</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Email Setting</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Sms Setting</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Support Setting</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Review Advanced Settings</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_building_2_line"></i></span>
                    <span class="menu-text"> Tools </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['tools', 'module']) }}" class="menu-link">
                            <span class="menu-text">Modules</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['tools', 'language']) }}" class="menu-link">
                            <span class="menu-text">Languages</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Translation Manager</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">System Logs</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_building_2_line"></i></span>
                    <span class="menu-text"> Reports </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'Hotels']) }}" class="menu-link">
                            <span class="menu-text">Enquiry Reports</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'add-hotel']) }}" class="menu-link">
                            <span class="menu-text">Booking Reports</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Booking Statistic</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Contact Submissions</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('second', ['Hotel', 'create']) }}" class="menu-link">
                            <span class="menu-text">Credit Purchange Report</span>
                        </a>
                    </li>

                   

        <!-- Help Box Widget -->
    </div>
</div>
<!-- Sidenav Menu End  -->
