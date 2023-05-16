<nav class="vertical_nav">
    <div class="left_section menu_left" id="js-menu">
        <div class="left_section">
            <ul>
                <li class="menu--item">
                    <a href="{{ url('organization/dashboard') }}"
                        class="menu--link {{ request()->is('organization/dashboard') ? 'active' : '' }}" title="Dashboard"
                        data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-gauge menu--icon"></i>
                        <span class="menu--label">Dashboard</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="{{ url('organization/events') }}"
                        class="menu--link {{ request()->is('organization/events') ? 'active' : '' }}" title="Events"
                        data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-calendar-days menu--icon"></i>
                        <span class="menu--label">Events</span>
                    </a>
                </li>
                {{-- <li class="menu--item">
                    <a href="{{ url('my_organisation_dashboard_promotion.html') }}" class="menu--link"
                        title="Promotion" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-rectangle-ad menu--icon"></i>
                        <span class="menu--label">Promotion</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="{{ url('my_organisation_dashboard_contact_lists.html') }}" class="menu--link"
                        title="Contact List" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-regular fa-address-card menu--icon"></i>
                        <span class="menu--label">Contact List</span>
                    </a>
                </li> --}}
                <li class="menu--item">
                    <a href="{{ url('/organization/payouts') }}"
                        class="menu--link {{ request()->is('organization/payouts') ? 'active' : '' }}" title="Payouts"
                        data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-credit-card menu--icon"></i>
                        <span class="menu--label">Payouts</span>
                    </a>
                </li>
                {{-- <li class="menu--item">
                    <a href="{{ url('/organization/blogs') }}"
                        class="menu--link {{ request()->is('organization/blogs') ? 'active' : '' }}" title="Blogs"
                        data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-credit-card menu--icon"></i>
                        <span class="menu--label">Blogs</span>
                    </a>
                </li> --}}
                {{-- <li class="menu--item">
                    <a href="{{ url('my_organisation_dashboard_reports.html') }}" class="menu--link"
                        title="Reports" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-chart-pie menu--icon"></i>
                        <span class="menu--label">Reports</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="{{ url('my_organisation_dashboard_subscription.html') }}" class="menu--link"
                        title="Subscription" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-bahai menu--icon"></i>
                        <span class="menu--label">Subscription</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="{{ url('my_organisation_dashboard_conversion_setup.html') }}" class="menu--link"
                        title="Conversion Setup" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-square-plus menu--icon"></i>
                        <span class="menu--label">Conversion Setup</span>
                    </a>
                </li> --}}
                <li class="menu--item">
                    <ul>
                        <li class="menu--item__has_sub_menu">
                            <a
                                class="menu--link {{ request()->is('organization/blogs') ? 'active' : '' }}"
                                title="Blogs" data-bs-toggle="tooltip" data-bs-placement="right">
                                <i class="fa-solid fa-circle-info menu--icon"></i>
                                <span class="menu--label">Blogs</span>
                            </a>
                        </li>
                        <li class="sub_menu">
                            <a href="{{ url('/organization/blogs') }}" class="sub_menu--link" title="About"
                                data-bs-toggle="tooltip" data-bs-placement="right">
                                <i class="fa-solid fa-circle-info menu--icon"></i>
                                <span class="menu--label">See Blogs</span>
                            </a>
                        </li>
                        {{-- <li class="sub_menu">
                            <a href="{{ url('/organization/profile') }}" class="sub_menu--link" title="About"
                                data-bs-toggle="tooltip" data-bs-placement="right">
                                <i class="fa-solid fa-circle-info menu--icon"></i>
                                <span class="menu--label">Profile</span>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                <li class="menu--item">
                    <a href="{{ url('/organization/profile') }}" class="menu--link {{request()->is('organization/profile')?'active':''}}"
                        title="About" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-circle-info menu--icon"></i>
                        <span class="menu--label">Profile</span>
                    </a>
                </li>

                </li>
                {{-- <li class="menu--item">
                    <a href="{{ url('my_organisation_dashboard_my_team.html') }}" class="menu--link team-lock"
                        title="My Team" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-user-group menu--icon"></i>
                        <span class="menu--label">My Team</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
