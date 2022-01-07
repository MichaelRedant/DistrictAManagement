{{-- Dynamic sidebar color --}}
@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center mr-2">					 	
						  <img src="{{asset('backend/images/DALogoKlein.png')}}" alt="Logo">
						  <h3><b>District A</b> Admin</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="{{($route == 'dashboard')?'active':''}}">
          <a href="{{route('dashboard')}}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
        <li class="header nav-small-cap">Gebruikersmanagement</li>
        <li class="treeview {{($prefix == '/users')?'active':''}}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Manage Gebruiker</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('user.view')}}"><i class="ti-more"></i>Overview Gebruiker</a></li>
            <li><a href="{{route('user.add')}}"><i class="ti-more"></i>Gebruiker Toevoegen</a></li>
          </ul>
        </li> 
		  
        <li class="treeview {{($prefix == '/profile')?'active':''}}">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage Profiel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('profile.view')}}"><i class="ti-more"></i>Mijn Profiel</a></li>
            <li><a href="{{route('password.view')}}"><i class="ti-more"></i>Verander Wachtwoord</a></li>
          </ul>
        </li>

		 
        <li class="header nav-small-cap">Leden Management</li>
		  
        <li class="treeview {{($prefix == '/setup')?'active':''}}">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Setup Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('leden.straten.view')}}"><i class="ti-more"></i>Straten</a></li>
            <li><a href="{{route('leden.label.view')}}"><i class="ti-more"></i>Labels</a></li>
          </ul>
        </li>

        <li class="treeview {{($prefix == '/members')?'active':''}}">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Leden Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('members.view')}}"><i class="ti-more"></i>Leden District A</a></li>
          </ul>
        </li>
		  
		<li>
          <a href="{{route('admin.logout')}}">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
