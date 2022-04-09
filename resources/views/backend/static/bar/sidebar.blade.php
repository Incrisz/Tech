<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ URL::asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Synadmin</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
			<li>
					<a href="{{ route('home')}}" class="">
						<div class="parent-icon"><i class='bx bx-home'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
			

				<li class="menu-label">Technical-Unit Section</li>
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-message-detail' ></i>
						</div>
						<div class="menu-title">Members</div>
					</a>
					<ul>
						<li> <a href="{{ route('members.index')}}"><i class="bx bx-envelope-open"></i>View Unit Members</a>
						</li>
						<li> <a href="{{ route('members.create')}}"><i class="bx bx-message-rounded-check"></i>Register a Member</a>
						</li>
						<li> <a href="{{ route('birth.index')}}"><i class="bx bx-message-rounded-check"></i>Members Birthday</a>
						</li>
					
						
						
					</ul>
				</li>
				

			
				<li class="menu-label">Leader's Section</li>


				<!-- <li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-user'></i>
						</div>
						<div class="menu-title">Authorizaton</div>
					</a>
					<ul>
						<li> <a href="{{ route('roles.index')}}"><i class="bx bx-grid"></i>Roles</a>
						</li>
						
						
					</ul>
				</li> -->
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-group'></i>
						</div>
						<div class="menu-title">Users</div>
					</a>
					<ul>
						<li> <a href="{{ route('users.index')}}"><i class="bx bx-right-arrow-alt"></i>All Users</a>
						</li>
						<li> <a href="{{ route('users.create')}}"><i class="bx bx-right-arrow-alt"></i>Register</a>
						</li>
						
					</ul>
				</li>
		
				
			
			
			
				<li class="menu-label">Others</li>
				
				<li>
					<a href="{{ route('logout') }}"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
						<div class="parent-icon"><i class='bx bx-file' ></i>
						</div>
						
						<div class="menu-title">{{ __('Logout') }}</div>
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
				</li>
			
			</ul>
			<!--end navigation-->
		</div>