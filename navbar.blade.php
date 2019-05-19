                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                    <!-- Dynamic Active Class on Route Hit -->
                    <li class="nav-item {{ Request::path() == '/' ? 'active' : '' }}">
                      <!-- Dynamic Route URL -->
                      <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{ Request::path() == 'about' ? 'active' : '' }}">
                      <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                    </li>
                    <li class="nav-item {{ Request::path() == 'contact' ? 'active' : '' }}">
                      <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                  </ul>
                </div>