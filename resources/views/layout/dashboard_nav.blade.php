<div class="col-xs-2 dashboard_nav" >
    <div class="dashboard_top text-center">
        <div class="text-center"><img class="dashboard_logo" src="/image/neuacmlogo.PNG"/></div>
        <div class="dashboard_username text-center"><nobr>{{Request::session()->get('username')}}</nobr></div>
        <hr class="dashboard_hr"/>
    </div>
    <ul class="nav nav-pills nav-stacked dashboard_subnav" data-spy="affix" data-offset-top="125">
        @if(session('uid') && session('uid') <=2)
            <li id="dashboard_problem"><a href="/dashboard/problem">Problem</a></li>
            <li id="dashboard_contest"><a href="/dashboard/contest">Contest</a></li>
            <li><a href="#">Submission</a></li>
            <li id="dashboard_profile"><a href="/dashboard/profile">Profile</a></li>
            <li id="dashboard_settings"><a href="/dashboard/settings">Settings</a></li>
            <li><a href="/" style="font-size: 20px">NEUOJ</a></li>
            {{--<li class="separate-item"></li>--}}
        @else
            <li id="dashboard_profile"><a href="/dashboard/profile">Profile</a></li>
            <li id="dashboard_settings"><a href="/dashboard/settings">Settings</a></li>
            <li><a href="/"style="font-size: 20px">NEUOJ</a></li>
        @endif
    </ul>
</div>
<div class="col-xs-2"></div>