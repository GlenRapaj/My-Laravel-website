 <nav style="background-color: transparent; " >
    <div class="nav-wrapper">

      <a href="{{ url('/') }}" class="brand-logo" style="  margin-left: 4%; " >  {{ config('app.name', 'My  Web site') }} </a>

                    <ul id="nav-mobile" class="right hide-on-med-and-down" style="  margin-left: 3%; " >
                         
                         <li  >    <!-- class="linku nav-link"  -->
                            <a   href="#posting-data-form" > Kontakt </a>
                        </li>

                        <li >
                            <a  href="#about"> ABOUT </a>
                        </li>

                        <li >
                            <a  href="#pershtypjet"> PERSHTYPJET </a>
                        </li>

                        <li >
                            <a  href="#project"> PORTOFOLIO </a>
                        </li>
                    </ul>

                                    <button onclick="myFunction()" class="btn dropbtn" style=" float:right; margin-right: 4%; " >  
                  <i class="fa fa-th-list dropbtn" style=" color: blue; " ></i> 
                </button>

                <div id="myDropdown" class="dropdown-cont" style=" background-color: transparent;" >
                    <a  class="linku nav-link" href="#posting-data-form" > Kontakt </a>
                     <a class="linku nav-link" href="#about"> ABOUT </a>
                    <a class="linku nav-link" href="#pershtypjet"> PERSHTYPJET </a>
                    <a class="linku nav-link" href="#project"> PORTOFOLIO </a>
                </div>

    </div>
  </nav>