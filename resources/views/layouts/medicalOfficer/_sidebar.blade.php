<div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
        <ul>
            <li class="menu-title">{{ auth()->user()->name }}</li>
            <li class="active">
                <a href="{{route('medicalOfficer.dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            <li class="submenu">
                <a href="#"><i class="fa fa-user-md"></i> <span>Donors </span> <span class="menu-arrow"></span></a>
                <ul style="display: none;">
                    <li><a href="{{route('medicalOfficer.donor.search')}}">Search Donors</a></li>
                    <li><a href="{{route('medicalOfficer.donor.create')}}">Add Donor</a></li>
                </ul>
            </li>
            <li class="active">
                <a href="{{route('medicalOfficer.history')}}"><i class="fa fa-history"></i> <span>My History</span> <span class=""></span></a>
            </li>
        </ul>
    </div>
</div>
