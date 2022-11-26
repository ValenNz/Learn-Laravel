<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard') ? 'active' : '' }}" aria  -current="page" href="/dashboard"> {{-- jika url nya dashboard maka tampilkan kelas active jika tidak {tidak usah tampil) --}}
            <span data-feather="home"></span>
            Dashboard
            </a>
        </li> 
        <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard/posts*') ? 'active' : '' }}" aria-current="page" href="/dashboard/posts">
                <span data-feather="file-text"></span>  
                My Posts
            </a>
        </li>
        </ul> 
        
        @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-betwen align-items-center px-3 mt-4 mb-1 text muted">
            <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav_item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" aria-current="page" href="/dashboard/categories">
                    <span data-feather="file-text"></span>  
                    Categories
                </a>
            </li>
        </ul>
        @endcan


    </div>
</nav>