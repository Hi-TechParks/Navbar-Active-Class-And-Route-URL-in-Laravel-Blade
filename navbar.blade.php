                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                    <li class="nav-item {{ Request::path() == '/' ? 'active' : '' }}">
                      <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About Us
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="history.html">History</a>
                        <a class="dropdown-item" href="mission.html">Mission & Objective</a>
                        <a class="dropdown-item" href="at-a-glance.html">At a Glance</a>
                        <a class="dropdown-item" href="chairman.html">Chairman Speech</a>
                      </div>
                    </li> -->
                    <li class="nav-item {{ Request::path() == 'about' ? 'active' : '' }}">
                      <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                    </li>
                    <li class="nav-item {{ Request::path() == 'academic' ? 'active' : '' }}">
                      <a class="nav-link" href="#">Academic</a>
                    </li>
                    <li class="nav-item {{ Request::path() == 'academic' ? 'active' : '' }}">
                      <a class="nav-link" href="#">Course</a>
                    </li>
                    <li class="nav-item {{ Request::path() == 'academic' ? 'active' : '' }}">
                      <a class="nav-link" href="#">Carrier</a>
                    </li>
                    <li class="nav-item {{ Request::path() == 'contact' ? 'active' : '' }}">
                      <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                  </ul>
                </div>