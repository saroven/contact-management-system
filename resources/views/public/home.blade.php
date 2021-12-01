@extends('public.layout.master')
@section('content')
    <div class="card card-primary card-outline">
            <div class="card-body">
              <h4>Contacts</h4>
              <div class="row">
                <div class="col-sm-1 col-md-2">
                  <div
                    class="nav flex-column nav-tabs h-100"
                    id="vert-tabs-tab"
                    role="tablist"
                    aria-orientation="vertical"
                  >
                    <a
                      class="nav-link active"
                      id="all-contact-tab"
                      data-toggle="pill"
                      href="#all-contact"
                      role="tab"
                      aria-controls="all-contact"
                      aria-selected="true"
                      >All Contacts <span class="badge bg-info">2</span></a
                    >
                    <a
                      class="nav-link"
                      id="family-tab"
                      data-toggle="pill"
                      href="#family"
                      role="tab"
                      aria-controls="family"
                      aria-selected="false"
                      >Family <span class="badge bg-info">1</span></a
                    >
                    <a
                      class="nav-link"
                      id="friends-tab"
                      data-toggle="pill"
                      href="#friends"
                      role="tab"
                      aria-controls="friends"
                      aria-selected="false"
                      >Friends <span class="badge bg-info">1</span></a
                    >
                    <a
                      class="nav-link"
                      id="clients-tab"
                      data-toggle="pill"
                      href="#clients"
                      role="tab"
                      aria-controls="clients"
                      aria-selected="false"
                      >Clients <span class="badge bg-info">1</span></a
                    >
                  </div>
                </div>
                <div class="col-sm-11 col-md-10">
                  <div class="tab-content" id="vert-tabs-tabContent">
                    <div
                      class="tab-pane text-left fade show active"
                      id="all-contact"
                      role="tabpanel"
                      aria-labelledby="all-contact-tab"
                    >
                      <div class="card card-solid">
                        <div class="card-body pb-0">
                          <div class="row d-flex align-items-stretch">
                            <!-- contact item -->
                            <div
                              class="
                                col-12 col-sm-12 col-md-6
                                d-flex
                                align-items-stretch
                              "
                            >
                              <div class="card bg-light">
                                <div
                                  class="card-header text-muted border-bottom-0"
                                >
                                  Digital Strategist
                                </div>
                                <div class="card-body pt-0">
                                  <div class="row">
                                    <div class="col-7">
                                      <h2 class="lead">
                                        <b>Nicole Pearson</b>
                                      </h2>
                                      <p class="text-muted text-sm">
                                        <b>About: </b> Web Designer / UX /
                                        Graphic Artist / Coffee Lover
                                      </p>
                                      <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small">
                                          <span class="fa-li"
                                            ><i
                                              class="fas fa-lg fa-building"
                                            ></i
                                          ></span>
                                          Address: Demo Street 123, Demo City
                                          04312, NJ
                                        </li>
                                        <li class="small">
                                          <span class="fa-li"
                                            ><i class="fas fa-lg fa-phone"></i
                                          ></span>
                                          Phone #: + 800 - 12 12 23 52
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                      <img
                                        src="img/profile/user1-128x128.jpg"
                                        alt=""
                                        class="img-circle img-fluid"
                                      />
                                    </div>
                                  </div>
                                </div>
                                <div class="card-footer">
                                  <div class="text-right">
                                    <div class="row">
                                      <a
                                        href="#"
                                        class="
                                          col-lg-4 col-md-4 col-sm-12
                                          btn btn-sm
                                          bg-secondary
                                          my-2
                                        "
                                      >
                                        <i class="fas fa-envelope"></i> Send
                                        Email
                                      </a>
                                      <a
                                        href="#"
                                        class="
                                          col-lg-4 col-md-4 col-sm-12
                                          btn btn-sm
                                          bg-teal
                                          my-2
                                        "
                                      >
                                        <i class="fas fa-comment"></i> Send SMS
                                      </a>
                                      <a
                                        href="#"
                                        class="
                                          col-lg-4 col-md-4 col-sm-12
                                          btn btn-sm btn-primary
                                          my-2
                                        "
                                      >
                                        <i class="fas fa-phone"></i> Make a call
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /contact item -->
                            <!-- contact item -->
                            <div
                              class="
                                col-12 col-sm-12 col-md-6
                                d-flex
                                align-items-stretch
                              "
                            >
                              <div class="card bg-light">
                                <div
                                  class="card-header text-muted border-bottom-0"
                                >
                                  Digital Strategist
                                </div>
                                <div class="card-body pt-0">
                                  <div class="row">
                                    <div class="col-7">
                                      <h2 class="lead">
                                        <b>Nicole Pearson</b>
                                      </h2>
                                      <p class="text-muted text-sm">
                                        <b>About: </b> Web Designer / UX /
                                        Graphic Artist / Coffee Lover
                                      </p>
                                      <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small">
                                          <span class="fa-li"
                                            ><i
                                              class="fas fa-lg fa-building"
                                            ></i
                                          ></span>
                                          Address: Demo Street 123, Demo City
                                          04312, NJ
                                        </li>
                                        <li class="small">
                                          <span class="fa-li"
                                            ><i class="fas fa-lg fa-phone"></i
                                          ></span>
                                          Phone #: + 800 - 12 12 23 52
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                      <img
                                        src="img/profile/user1-128x128.jpg"
                                        alt=""
                                        class="img-circle img-fluid"
                                      />
                                    </div>
                                  </div>
                                </div>
                                <div class="card-footer">
                                  <div class="text-right">
                                    <div class="row">
                                      <a
                                        href="#"
                                        class="
                                          col-lg-4 col-md-4 col-sm-12
                                          btn btn-sm
                                          bg-secondary
                                          my-2
                                        "
                                      >
                                        <i class="fas fa-envelope"></i> Send
                                        Email
                                      </a>
                                      <a
                                        href="#"
                                        class="
                                          col-lg-4 col-md-4 col-sm-12
                                          btn btn-sm
                                          bg-teal
                                          my-2
                                        "
                                      >
                                        <i class="fas fa-comment"></i> Send SMS
                                      </a>
                                      <a
                                        href="#"
                                        class="
                                          col-lg-4 col-md-4 col-sm-12
                                          btn btn-sm btn-primary
                                          my-2
                                        "
                                      >
                                        <i class="fas fa-phone"></i> Make a call
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /contact item -->
                          </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <nav aria-label="Contacts Page Navigation">
                            <ul class="pagination justify-content-center m-0">
                              <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">2</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">3</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">4</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">5</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">6</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">7</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">8</a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                        <!-- /.card-footer -->
                      </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="family"
                      role="tabpanel"
                      aria-labelledby="family-tab"
                    >
                      <div class="card card-solid">
                        <div class="card-body pb-0">
                          <div class="row d-flex align-items-stretch">
                            <!-- contact item -->
                            <div
                              class="
                                col-12 col-sm-12 col-md-6
                                d-flex
                                align-items-stretch
                              "
                            >
                              <div class="card bg-light">
                                <div
                                  class="card-header text-muted border-bottom-0"
                                >
                                  Digital Strategist
                                </div>
                                <div class="card-body pt-0">
                                  <div class="row">
                                    <div class="col-7">
                                      <h2 class="lead">
                                        <b>Nicole Pearson</b>
                                      </h2>
                                      <p class="text-muted text-sm">
                                        <b>About: </b> Web Designer / UX /
                                        Graphic Artist / Coffee Lover
                                      </p>
                                      <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small">
                                          <span class="fa-li"
                                            ><i
                                              class="fas fa-lg fa-building"
                                            ></i
                                          ></span>
                                          Address: Demo Street 123, Demo City
                                          04312, NJ
                                        </li>
                                        <li class="small">
                                          <span class="fa-li"
                                            ><i class="fas fa-lg fa-phone"></i
                                          ></span>
                                          Phone #: + 800 - 12 12 23 52
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                      <img
                                        src="img/profile/user1-128x128.jpg"
                                        alt=""
                                        class="img-circle img-fluid"
                                      />
                                    </div>
                                  </div>
                                </div>
                                <div class="card-footer">
                                  <div class="text-right">
                                    <div class="row">
                                      <a
                                        href="#"
                                        class="
                                          col-lg-4 col-md-4 col-sm-12
                                          btn btn-sm
                                          bg-secondary
                                          my-2
                                        "
                                      >
                                        <i class="fas fa-envelope"></i> Send
                                        Email
                                      </a>
                                      <a
                                        href="#"
                                        class="
                                          col-lg-4 col-md-4 col-sm-12
                                          btn btn-sm
                                          bg-teal
                                          my-2
                                        "
                                      >
                                        <i class="fas fa-comment"></i> Send SMS
                                      </a>
                                      <a
                                        href="#"
                                        class="
                                          col-lg-4 col-md-4 col-sm-12
                                          btn btn-sm btn-primary
                                          my-2
                                        "
                                      >
                                        <i class="fas fa-phone"></i> Make a call
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /contact item -->
                          </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <nav aria-label="Contacts Page Navigation">
                            <ul class="pagination justify-content-center m-0">
                              <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">2</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">3</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">4</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">5</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">6</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">7</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">8</a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                        <!-- /.card-footer -->
                      </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="friends"
                      role="tabpanel"
                      aria-labelledby="friends-tab"
                    >
                      <div class="card card-solid">
                        <div class="card-body pb-0">
                          <div class="row d-flex align-items-stretch">
                            <!-- contact item -->
                            <div
                              class="
                                col-12 col-sm-12 col-md-6
                                d-flex
                                align-items-stretch
                              "
                            >
                              <div class="card bg-light">
                                <div
                                  class="card-header text-muted border-bottom-0"
                                >
                                  Digital Strategist
                                </div>
                                <div class="card-body pt-0">
                                  <div class="row">
                                    <div class="col-7">
                                      <h2 class="lead">
                                        <b>Nicole Pearson</b>
                                      </h2>
                                      <p class="text-muted text-sm">
                                        <b>About: </b> Web Designer / UX /
                                        Graphic Artist / Coffee Lover
                                      </p>
                                      <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small">
                                          <span class="fa-li"
                                            ><i
                                              class="fas fa-lg fa-building"
                                            ></i
                                          ></span>
                                          Address: Demo Street 123, Demo City
                                          04312, NJ
                                        </li>
                                        <li class="small">
                                          <span class="fa-li"
                                            ><i class="fas fa-lg fa-phone"></i
                                          ></span>
                                          Phone #: + 800 - 12 12 23 52
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                      <img
                                        src="img/profile/user1-128x128.jpg"
                                        alt=""
                                        class="img-circle img-fluid"
                                      />
                                    </div>
                                  </div>
                                </div>
                                <div class="card-footer">
                                  <div class="text-right">
                                    <div class="row">
                                      <a
                                        href="#"
                                        class="
                                          col-lg-4 col-md-4 col-sm-12
                                          btn btn-sm
                                          bg-secondary
                                          my-2
                                        "
                                      >
                                        <i class="fas fa-envelope"></i> Send
                                        Email
                                      </a>
                                      <a
                                        href="#"
                                        class="
                                          col-lg-4 col-md-4 col-sm-12
                                          btn btn-sm
                                          bg-teal
                                          my-2
                                        "
                                      >
                                        <i class="fas fa-comment"></i> Send SMS
                                      </a>
                                      <a
                                        href="#"
                                        class="
                                          col-lg-4 col-md-4 col-sm-12
                                          btn btn-sm btn-primary
                                          my-2
                                        "
                                      >
                                        <i class="fas fa-phone"></i> Make a call
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /contact item -->
                          </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <nav aria-label="Contacts Page Navigation">
                            <ul class="pagination justify-content-center m-0">
                              <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">2</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">3</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">4</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">5</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">6</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">7</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">8</a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                        <!-- /.card-footer -->
                      </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="clients"
                      role="tabpanel"
                      aria-labelledby="clients-tab"
                    >
                      <!-- tab content -->
                      <div class="card card-solid">
                        <div class="card-body pb-0">
                          <div class="row d-flex align-items-stretch">
                            <!-- contact item -->
                            <div
                              class="
                                col-12 col-sm-12 col-md-6
                                d-flex
                                align-items-stretch
                              "
                            >
                              <div class="card bg-light">
                                <div
                                  class="card-header text-muted border-bottom-0"
                                >
                                  Digital Strategist
                                </div>
                                <div class="card-body pt-0">
                                  <div class="row">
                                    <div class="col-7">
                                      <h2 class="lead">
                                        <b>Nicole Pearson</b>
                                      </h2>
                                      <p class="text-muted text-sm">
                                        <b>About: </b> Web Designer / UX /
                                        Graphic Artist / Coffee Lover
                                      </p>
                                      <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small">
                                          <span class="fa-li"
                                            ><i
                                              class="fas fa-lg fa-building"
                                            ></i
                                          ></span>
                                          Address: Demo Street 123, Demo City
                                          04312, NJ
                                        </li>
                                        <li class="small">
                                          <span class="fa-li"
                                            ><i class="fas fa-lg fa-phone"></i
                                          ></span>
                                          Phone #: + 800 - 12 12 23 52
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                      <img
                                        src="img/profile/user1-128x128.jpg"
                                        alt=""
                                        class="img-circle img-fluid"
                                      />
                                    </div>
                                  </div>
                                </div>
                                <div class="card-footer">
                                  <div class="text-right">
                                    <div class="row">
                                      <a
                                        href="#"
                                        class="
                                          col-lg-4 col-md-4 col-sm-12
                                          btn btn-sm
                                          bg-secondary
                                          my-2
                                        "
                                      >
                                        <i class="fas fa-envelope"></i> Send
                                        Email
                                      </a>
                                      <a
                                        href="#"
                                        class="
                                          col-lg-4 col-md-4 col-sm-12
                                          btn btn-sm
                                          bg-teal
                                          my-2
                                        "
                                      >
                                        <i class="fas fa-comment"></i> Send SMS
                                      </a>
                                      <a
                                        href="#"
                                        class="
                                          col-lg-4 col-md-4 col-sm-12
                                          btn btn-sm btn-primary
                                          my-2
                                        "
                                      >
                                        <i class="fas fa-phone"></i> Make a call
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /contact item -->
                          </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <nav aria-label="Contacts Page Navigation">
                            <ul class="pagination justify-content-center m-0">
                              <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">2</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">3</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">4</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">5</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">6</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">7</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">8</a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                        <!-- /.card-footer -->
                      </div>
                      <!-- end tab content -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
@endsection
