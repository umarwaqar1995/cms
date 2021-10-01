<?php
$role=App\User::where('role_id',\Illuminate\Support\Facades\Auth::user()->id)->pluck('role_id');

$menu_options=App\Rights::wherein('role_id',$role)->select('role_id','menu_option_id')->get()->unique('menu_option_id');

    if($role->contains(1))
    {
        Illuminate\Support\Facades\Session::put('role',1);

    }
    else{
        Illuminate\Support\Facades\Session::put('role',$role->first());
    }

?>
<!-----------------------------1. Admin Roles---------------------------------->


@if (App\User::where('id',\Illuminate\Support\Facades\Auth::user()->id)->first()->role_id==1)

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{ route('home') }}">
        <i class="c-sidebar-nav-icon cil-home"></i>Dashboard
    </a>
</li>
<li class="c-sidebar-nav-item  c-sidebar-nav-dropdown">   
    <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
        <i class="c-sidebar-nav-icon cil-filter-frames"></i>Sales
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
<li>
    <a class="c-sidebar-nav-link c-active" href="{{ route('processings.index') }}">
        <i class="c-sidebar-nav-icon cil-layers"></i>Processing
    </a>
</li>
<li>
    <a class="c-sidebar-nav-link c-active" href="{{ route('retentions.index') }}">
        <i class="c-sidebar-nav-icon cil-layers"></i>Retention
    </a>
</li>


<!-----------------------------2. Agent Roles---------------------------------->


@elseif (App\User::where('id',\Illuminate\Support\Facades\Auth::user()->id)->first()->role_id==5)

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{ route('home') }}">
        <i class="c-sidebar-nav-icon cil-home"></i>Dashboard
    </a>
</li>
<li class="c-sidebar-nav-item  c-sidebar-nav-dropdown">   
    <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
        <i class="c-sidebar-nav-icon cil-filter-frames"></i>Sales
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

<!-----------------------------Accountant/Finance Roles---------------------------------->


@elseif (App\User::where('id',\Illuminate\Support\Facades\Auth::user()->id)->first()->role_id==3)

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{ route('home') }}">
        <i class="c-sidebar-nav-icon cil-home"></i>Dashboard
    </a>
</li>
<li>
    <a class="c-sidebar-nav-link c-active" href="{{ route('finances.index') }}">
        <i class="c-sidebar-nav-icon cil-money"></i>Finance
    </a>
</li>


<!-----------------------------Processor Roles---------------------------------->


@elseif (App\User::where('id',\Illuminate\Support\Facades\Auth::user()->id)->first()->role_id==6)

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{ route('home') }}">
        <i class="c-sidebar-nav-icon cil-home"></i>Dashboard
    </a>
</li>
<li>
    <a class="c-sidebar-nav-link c-active" href="{{ route('processings.index') }}">
        <i class="c-sidebar-nav-icon cil-layers"></i>Processing
    </a>
</li>



<!-----------------------------Customer Retention Roles---------------------------------->


@elseif (App\User::where('id',\Illuminate\Support\Facades\Auth::user()->id)->first()->role_id==7)

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{ route('home') }}">
        <i class="c-sidebar-nav-icon cil-home"></i>Dashboard
    </a>
</li>
<li>
    <a class="c-sidebar-nav-link c-active" href="{{ route('retentions.index') }">
        <i class="c-sidebar-nav-icon cil-layers"></i>Retention
    </a>
</li>
@endif


{{-- @foreach($menu_options as $menu_option)
@if(App\MenuOPtion::find($menu_option->menu_option_id)->route!=null)
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{route(App\MenuOPtion::find($menu_option->menu_option_id)->route)}}">
        <i class="c-sidebar-nav-icon {{App\MenuOPtion::find($menu_option->menu_option_id)->icon}}">
        </i>
        {{App\MenuOPtion::find($menu_option->menu_option_id)->title}}
    </a>
</li>
@else
<li class="c-sidebar-nav-item  c-sidebar-nav-dropdown">   
    <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
        <i class="c-sidebar-nav-icon {{App\MenuOPtion::find($menu_option->menu_option_id)->icon}}">
        </i>
        {{App\MenuOPtion::find($menu_option->menu_option_id)->title}}
    </a>
    <ul class="c-sidebar-nav-dropdown-items">
        @foreach(App\MenuOPtion::where('parent_id',$menu_option->menu_option_id)->get() as $sub_menu_options)
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link " href="{{route($sub_menu_options->route)}}">
            <span class="c-sidebar-nav-icon {{$sub_menu_options->icon}}"></span>{{$sub_menu_options->title}}</a>
        </li>
        @endforeach
        {{-- <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link " href="{{ route('sales.index') }}">
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
        </li> --}}
    {{-- </ul>
</li>
@endif
@endforeach --}} 

{{-- <li class="c-sidebar-nav-item  c-sidebar-nav-dropdown">   
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
<li>
    <a class="c-sidebar-nav-link c-active" href="{{ route('processings.index') }}">
        <i class="c-sidebar-nav-icon cil-layers"></i>Processing
    </a>
</li>
<li>
    <a class="c-sidebar-nav-link c-active" href="#">
        <i class="c-sidebar-nav-icon cil-layers"></i>Retention
    </a>
</li> --}}
