<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset ('backend')}}/assets/images/sbc-logo.png" class="logo-icon" alt="logo icon">
				</div>
				<!-- <div>
					<h4 class="logo-text">PIMS | SBC</h4>
				</div> -->
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
			
				<li>
					<a href="{{ Route ('dashboard')}}">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>

				</li>
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Category</div>
					</a>
					<ul>
						<li> <a href="{{ Route ('addcategory')}}"><i class="bx bx-right-arrow-alt"></i>Add Category</a>
						</li>
						<li> <a href="{{ Route ('viewcategory')}}"><i class="bx bx-right-arrow-alt"></i>Manage Category</a>
						</li>
					</ul>
				</li>

                <li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bxl-ok-ru'></i>
						</div>
						<div class="menu-title">Brand</div>
					</a>
					<ul>
						<li> <a href="{{ Route ('addbrand')}}"><i class="bx bx-right-arrow-alt"></i>Add Brand</a>
						</li>
						<li> <a href="{{ Route ('viewtbrand')}}"><i class="bx bx-right-arrow-alt"></i>Manage Brand</a>
						</li>
					</ul>
				</li>

                <li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bxs-shopping-bag-alt'></i>
						</div>
						<div class="menu-title">Product</div>
					</a>
					<ul>
						<li> <a href="{{ Route ('addproduct')}}"><i class="bx bx-right-arrow-alt"></i>Add Product</a>
						</li>
						<li> <a href="{{ Route ('viewproduct')}}"><i class="bx bx-right-arrow-alt"></i>Manage Product</a>
						</li>
					</ul>
				</li>

                <li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bxs-user'></i>
						</div>
						<div class="menu-title">Product Manager</div>
					</a>
					<ul>
						<li> <a href="{{ Route ('addproductmanager')}}"><i class="bx bx-right-arrow-alt"></i>Add Product Manager</a>
						</li>
						<li> <a href="{{ Route ('viewproductmanager')}}"><i class="bx bx-right-arrow-alt"></i>Profiles</a>
						</li>
					</ul>
				</li>

                <li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bxs-cog' ></i>
						</div>
						<div class="menu-title">Settings</div>
					</a>
					<ul>
						<li> <a href="{{ Route ('roleindex')}}"><i class="bx bx-right-arrow-alt"></i>Add Role</a>
						</li>
						<li> <a href="{{ Route ('rolemanage')}}"><i class="bx bx-right-arrow-alt"></i>All Roles</a>
						</li>
						<li> <a href="{{ Route ('adduser')}}"><i class="bx bx-right-arrow-alt"></i>Add User</a>
						</li>
						<li> <a href="{{ Route ('userlist')}}"><i class="bx bx-right-arrow-alt"></i>All Users</a>
						</li>
					</ul>
				</li>
				
			</ul>
			<!--end navigation-->
		</div>