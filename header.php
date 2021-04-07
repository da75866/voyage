<nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">TRAV-GO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Pages
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Flights</a></li>
                    <li><a class="dropdown-item" href="#">Hotels</a></li>
                    <li><a class="dropdown-item" href="#">Rent a Car</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Cruises</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contacts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Others</a>
                </li>
              </ul>

              <!--===============START MODAL VOYAGE====================-->
              
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-info me-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Ask for Help
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Your Informations Please</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                          <form action="index.php" method="POST">
                            <div class="d-flex justify-content-center mb-4">
                              <div class="col p-1">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name" aria-describedby="emailHelp">
                              </div>
                              <div class="col p-1">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last Name" aria-describedby="emailHelp">
                              </div>
                            </div>
                            <div class="mb-4">
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Address Email" aria-describedby="emailHelp">
                              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-4">
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Phone">
                            </div>
                            <div class="mb-4">
                              <select type="country">
                                <option value="">Select Country</option>
                                <option value="['Russian Federation','RU']">Russian Federation</option>
                                <option value="['United Arab Emirates','AE']">United Arab Emirates</option>
                                <option value="['United Kingdom','GB']">United Kingdom</option>
                                <option value="['United States','US']">United States</option>
                                <option value="['Finland','FI']">Finland</option>
                                <option value="['France','FR']">France</option>
                                <option value="['Angola','AO']">Angola</option>
                                <option value="['Argentina','AR']">Argentina</option>
                                <option value="['Australia','AU']">Australia</option>
                                <option value="['Austria','AT']">Austria</option>
                              </select>
                              <div id="emailHelp" class="form-text">Choose the country where you want to go to.</div>
                            </div>
                            <div class="mb-4">
                              <select type="Journey Type">
                                <option value="">Select Country</option>
                                <option value="Study">Study Abroad</option>
                                <option value="Tourism">Visit The Country</option>
                                <option value="Business">Business</option>
                              </select>
                              <div id="emailHelp" class="form-text">Tell us which of  journey you wish to go on.</div>
                            </div>
                            <div class="mb-4 form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

              <!--===============END MODAL VOYAGE====================-->
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>