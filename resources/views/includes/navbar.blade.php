<nav class="navbar navbar-expand-lg navbar-primary text-right">
  <a class="navbar-brand" href = "/">Election App</a>
  <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse text-dark navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href = "/" >Home</a>
      </li>
      
      @role ('admin')
        <li class="nav-item">
            <a class="nav-link" href = "/admin/students">Student details</a>
        </li>
      @endrole

      @can ('view contestants')
        <li class="nav-item">
            <a class="nav-link" href = "/student/polls">Polls</a>
        </li>
      @endcan
    </ul>
    
      @auth
      <a href = "#" class="text-skorange uppercase tracking-2px border-2 border-skorange py-top-10px login rounded-10px text-20px mr-sm-2" type="submit">
          Welcome, {{ auth()->user()->roles[0]->name ===  'admin' ? 'admin' : auth()->user()->name  }}

      </a>

      <form action="/logout" method = "post">
        @csrf
            <button class="text-white uppercase tracking-2px border-2 border-skorange py-top-10px signup rounded-10px text-20px mr-sm-2" type="submit">
            Logout
          </button>  

      </form>
      @endauth


      @guest
        <div class="row">
          <a href = "/login" class="no-gutters text-white uppercase tracking-2px border-2 border-skorange py-top-10px login rounded-10px text-20px mr-sm-2" type="submit">Login</a>  
      
      
      
      <a href = "/register" class="no-gutters text-white uppercase tracking-2px border-2 border-skorange py-top-10px signup rounded-10px text-20px mr-sm-2" type="submit">Sign up</a>
        </div>
          
      @endguest
  </div>
</nav>