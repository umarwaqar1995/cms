<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{ route('home') }}">
        <i class="c-sidebar-nav-icon cil-home"></i>Dashboard
    </a>
</li>




<li class="c-sidebar-nav-item  c-sidebar-nav-dropdown">   
    <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
        <i class="c-sidebar-nav-icon cil-graph"></i>Sales
    </a>
    <ul class="c-sidebar-nav-dropdown-items">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link " href="{{ route('sales.create') }}">
            <span class="c-sidebar-nav-icon cil-plus"></span> Add Sales</a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link " href="{{ route('sales.index') }}">
            <span class="c-sidebar-nav-icon cil-list-rich"></span> View All Sales </a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link " href="{{ route('sales.index') }}">
            <span class="c-sidebar-nav-icon cil-blur-linear"></span>Pending Sales</a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link " href="{{ route('sales.index') }}">
            <span class="c-sidebar-nav-icon cil-text-strike"></span>Declined Sales</a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link " href="{{ route('sales.index') }}">
            <span class="c-sidebar-nav-icon cil-check"></span>Charged Sales</a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link " href="{{ route('sales.index') }}">
            <span class="c-sidebar-nav-icon cil-x"></span>Canceled Sales</a>
        </li>
    </ul>
</li>

<li class="c-sidebar-nav-item  c-sidebar-nav-dropdown">   
    <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
        <i class="c-sidebar-nav-icon cil-people"></i>User Management
    </a>
    <ul class="c-sidebar-nav-dropdown-items">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link " href="{{ route('users.create') }}">
            <span class="c-sidebar-nav-icon cil-plus"></span> Add User</a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link " href="{{ route('users.index') }}">
            <span class="c-sidebar-nav-icon cil-list-rich"></span> View All Users</a>
        </li>
    </ul>
</li>

<li>
    <a class="c-sidebar-nav-link c-active" href="{{ route('finances.index') }}">
        <i class="c-sidebar-nav-icon cil-money"></i>Finance
    </a>
</li>
