<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="mainNavigation">

      <div class="container">

        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('home') }}">IMANI</a>

        </div>

        <div id="navbar" class="navbar-collapse collapse">

          <ul class="nav navbar-nav">

            <li class="menu-item {{ Request::is('home') ? 'active' : '' }}">

              <a class="menu-link" href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span> HOME</a>

            </li>

            <li class="menu-item {{ Request::is('about') ? 'active' : '' }}">

              <a class="menu-link" href="{!! url('about')!!}"><span class="glyphicon glyphicon-question-sign"></span> ABOUT</a>

            </li>

            <li class="menu-item {{ starts_with( Request::path(), 'music')  ? 'active' : '' }}">

              <a class="menu-link" href="{!! url('music')!!}"><span class="glyphicon glyphicon-cd"></span> MUSIC</a>

            </li>

            <li class="menu-item {{ starts_with( Request::path(), 'contact')  ? 'active' : '' }}">

              <a class="menu-link" href="{!! url('contact')!!}"><span class="glyphicon glyphicon-envelope"></span> CONTACT</a>

            </li>

            <li class="dropdown" style="display:none;">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>

          </ul>
          
        </div><!--/.nav-collapse -->

      </div>

    </nav>