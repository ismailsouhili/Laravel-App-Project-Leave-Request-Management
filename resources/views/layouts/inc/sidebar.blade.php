<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="" class="simple-text logo-normal">
        H2C - Gestion Congés
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{ Request::is('dashboard') ? 'active':''}}  ">
          <a class="nav-link" href="{{ url('dashboard')}}">
            <i class="material-icons">dashboard</i>
            <p>Accueil</p>
          </a>
        </li>
        <li class="nav-item  {{ Request::is('users') ? 'active':''}} ">
          <a class="nav-link" href="{{ url('users')}}">
            <i class="material-icons">person</i>
            <p>Employés</p>
          </a>
        </li>
        

        <li class="nav-item {{ Request::is('add-user') ? 'active':''}}">
          <a class="nav-link" href="{{ url('add-user') }}">
            <i class="material-icons">add_box</i>
            <p>Ajouter Employé</p>
          </a>  
        </li>

        
        <li class="nav-item {{ Request::is('conges') ? 'active':''}} ">
          <a class="nav-link" href="{{ url('conges') }}">
            <i class="material-icons">content_paste</i>
            <p>Décision de congé</p>
          </a>
        </li>

        <li class="nav-item {{ Request::is('adferies') ? 'active':''}}">
          <a class="nav-link" href="{{ url('adferies') }}">
            <i class="material-icons">assignment</i>
            <p>Jours Fériés</p>
          </a>  
        </li>


       
      </ul>
    </div>
  </div>