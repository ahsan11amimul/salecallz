<nav class="navbar navbar-expand-lg sticky-top" style="background-color: var(--nav-bg);height:var(--nav-height);">
  <div class="container-fluid">
    <span id="toggle-sidebar" style="cursor:pointer;">
       <i class="fas fa-bars fa-lg text-muted"></i>
    </span>
    <a class="navbar-brand" href="/">
        <img src="{{asset('assets/images/logo3.png')}}" style="width: 100px;height:60px;" class="rounded" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
         <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">
            <i class="fas fa-question text-muted"></i>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">
            <i class='fas fa-plus text-muted'></i>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">
             <span>
                <i class="fas fa-bell fa-lg"></i>
             </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/logout">
             
            <i class='fas fa-sign-out-alt  fa-lg'></i>
          </a>
        </li>

       
      </ul>
    </div>
  </div>
</nav>