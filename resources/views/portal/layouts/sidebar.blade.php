<div class="fixed-bar fl-wrap">
    <div class="user-profile-menu-wrap fl-wrap">
        <!-- user-profile-menu-->
        <div class="user-profile-menu">
            <h3>Main</h3>
            <ul>
                <li><a href="{{ route('portal.index') }}"><i class="fa fa-gears"></i>Dashboard</a></li>
                <li><a href="{{ route('portal.profile.edit') }}"><i class="fa fa-user-o"></i> Edit profile</a></li>
                <li><a href="dashboard-messages.html"><i class="fa fa-envelope-o"></i> Messages <span>3</span></a>
                </li>
                <li><a href="dashboard-password.html"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
            </ul>
        </div>
        <!-- user-profile-menu end-->
        <!-- user-profile-menu-->
        <div class="user-profile-menu">
            <h3>Listings</h3>
            <ul>
                <li><a href="{{ route('portal.listing.index') }}"><i class="fa fa-th-list"></i> My listigs </a></li>
                <li><a href="dashboard-bookings.html"> <i class="fa fa-calendar-check-o"></i> Bookings
                        <span>2</span></a></li>
                <li><a href="dashboard-review.html"><i class="fa fa-comments-o"></i> Reviews </a></li>
                <li><a href="dashboard-add-listing.html" class="user-profile-act"><i class="fa fa-plus-square-o"></i>
                        Add New</a></li>
            </ul>
        </div>
        <!-- user-profile-menu end-->
        <form method="post" action="{{route('logout') }}">
            @csrf
            <button type="submit" class="log-out-btn" style="cursor: pointer">Log Out</button>
        </form>
    </div>
</div>