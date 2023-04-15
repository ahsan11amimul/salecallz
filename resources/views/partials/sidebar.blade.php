<div class="sidebar" id="left_sidebar">
    <div class="menu">
         
        <div class="item">
            <a href="#" class="sub-btn semi-active" style="color:#fff;">
                <i class='fas fa-bars icon'></i>
                Finance
            <i class='fas fa-angle-down dropdown'></i>
            </a>
            <div class="sub-menu">
              <a href="/deals" class="sub-item {{request()->routeIs('deals') ? 'side_active' : ''}}">Deals</a>
              <a href="/lenders" class="sub-item {{request()->routeIs('lenders') ? 'side_active' : ''}}">Lenders</a>
              <a href="/employees" class="sub-item {{request()->routeIs('employees') ? 'side_active' : ''}}">Employees</a>
              {{-- <a href="/invoice" class="sub-item {{request()->routeIs('invoice') ? 'active' : ''}}">Invoice</a>
              <a href="/loans" class="sub-item {{request()->routeIs('loans') ? 'active' : ''}}">Loans</a>
              <a href="/logout" class="sub-item {{request()->routeIs('logout') ? 'active' : ''}}">
                Logout
              </a> --}}
            </div>
        </div>
        
    </div>
</div>
