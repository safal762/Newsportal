<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}"> <span
                class="logo-name">tatokhabar</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown  {{ Request::routeIs('dashboard') ? 'active' : '' }}">
              <a href="{{ route('dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown {{ Request::routeIs('admin.catogery.*') ? 'active' : '' }}">
              <a href="{{ route('admin.catogery.index') }}" class="nav-link"><i data-feather="tag"></i><span>Category</span></a>
             
            </li>
             <li class="dropdown {{ Request::routeIs('admin.artical*') ? 'active' : '' }}">
              <a href="{{ route('admin.artical.index') }}" class="nav-link"><i data-feather="file-text"></i><span>artical</span></a>
             
            </li>
            <li class="dropdown {{ Request::routeIs('admin.advertise*') ? 'active' : '' }}">
              <a href="{{ route('admin.advertise.index') }}" class="nav-link"><i data-feather="image"></i><span>advertise</span></a>
             
            </li>
            
              </ul>
          
        </aside>
</body>
</html>