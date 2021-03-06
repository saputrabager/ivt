<aside class="main-sidebar">
    <section class="sidebar">    
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('img/user.png')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>menu</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('about')}}"><i class="fa fa-circle-o"></i>About Menu</a></li>
                    @if (\Auth::user()->role != 'guest')
                    <li><a href="" class="add"><i class="fa fa-circle-o"></i>Add New Location</a></li>
                    <li><a href="" class="add"><i class="fa fa-circle-o"></i>Add New Parent</a></li>
                    <li><a href="" class="add"><i class="fa fa-circle-o"></i>Add New Category</a></li>
                    @endif
                    @if (\Auth::user()->role == 'super-admin')
                    <li><a href=""><i class="fa fa-circle-o"></i>Set User Access</a></li>
                    @endif
                </ul>
            </li> 
        </ul>
    </section>
</aside>