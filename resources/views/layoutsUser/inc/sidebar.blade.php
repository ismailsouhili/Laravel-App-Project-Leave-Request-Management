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
        <li class="nav-item {{ Request::is('userdash') ? 'active':''}}  ">
          <a class="nav-link" href="{{ url('userdash')}}">
            <i class="material-icons">dashboard</i>
            <p>Accueille</p>
          </a>
        </li>

        <li class="nav-item  {{ Request::is('add-conger') ? 'active':''}} ">
          <a class="nav-link" href="{{ url('add-conger')}}">
            <i class="material-icons"> add</i>
            <p>Faire Demande</p>
          </a>
        </li>

        
        <li class="nav-item {{ Request::is('conger') ? 'active':''}}">
          <a class="nav-link" href="{{ url('conger') }}">
            <i class="material-icons">content_paste</i>
            <p>Status</p>
          </a>  
        </li>

       
      </ul>
    </div>
  </div>