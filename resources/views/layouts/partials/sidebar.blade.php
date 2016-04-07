<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/ayrton.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form> -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Home</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>Segurança</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Cômodos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('home/house') }}">Terraço</a></li>
                    <li><a href="#">Sala</a></li>
                    <li><a href="#">Quarto 1</a></li>
                    <li><a href="#">Quarto 2</a></li>
                    <li><a href="#">Cozinha</a></li>
                    <li><a href="#">Banheiro</a></li>
                    <li><a href="#">Àrea Extra 1</a></li>
                    <li><a href="#">Àrea Extra 2</a></li>
                </ul>
            </li>
            <li><a href="{{ url('lightssockets/create') }}"><i class='fa fa-link'></i> <span>Cadastro Luzes e Tomadas</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
