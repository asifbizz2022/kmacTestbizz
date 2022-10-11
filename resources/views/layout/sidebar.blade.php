<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex border">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ url('/') }}">
                <img src="{{ url('public/assets/mini_logo.png') }}" alt="" width="35">
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100  ">
            <li class="nav-item dropdown">
                <li class="nav-item active">
                    <a class="nav-link  " href="{{url('dashboard')}}">
                        <i class="fe fe-home fe-16"></i>
                        <span class="ml-3 item-text">
                            Dashboard
                        </span>
                    </a>
                </li>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100  ">
            <li class="nav-item dropdown">
                <a href="#ui-employee" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Employees</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="ui-employee">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{route('emp.list')}}">
                            <span class="ml-1 item-text">
                            Employees Card
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('emp.table') }}">
                            <span class="ml-1 item-text">
                                Employee Table
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100  ">
            <li class="nav-item dropdown">
                <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Inventories</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">

                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('chemicals') }}"><span class="ml-1 item-text">Chemical</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('equipments') }}"><span class="ml-1 item-text">Equipment</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('supplies') }}"><span class="ml-1 item-text">Supplies</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('inventory') }}"><span class="ml-1 item-text">Inventory</span></a>
                    </li>

                </ul>
            </li>
        </ul>
    </nav>
</aside>