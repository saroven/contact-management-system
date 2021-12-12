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
                      >All Contacts <span class="badge bg-info">{{ $count['all'] }}</span></a
                    >
                    <a
                      class="nav-link"
                      id="family-tab"
                      data-toggle="pill"
                      href="#family"
                      role="tab"
                      aria-controls="family"
                      aria-selected="false"
                      >Family <span class="badge bg-info">{{ $count['family'] }}</span></a
                    >
                    <a
                      class="nav-link"
                      id="friends-tab"
                      data-toggle="pill"
                      href="#friends"
                      role="tab"
                      aria-controls="friends"
                      aria-selected="false"
                      >Friends <span class="badge bg-info">{{ $count['friend'] }}</span></a
                    >
                    <a
                      class="nav-link"
                      id="clients-tab"
                      data-toggle="pill"
                      href="#clients"
                      role="tab"
                      aria-controls="clients"
                      aria-selected="false"
                      >Clients <span class="badge bg-info">{{ $count['client'] }}</span></a
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
                          @forelse($allContacts as $contact)
                            <div
                              class="
                                col-12 col-sm-12 col-md-4
                                d-flex
                                align-items-stretch
                              "
                            >
                              <div class="card bg-light">
                                <div
                                  class="card-header text-muted border-bottom-0"
                                >
                                    {{ $contact->about }}
                                </div>
                                <div class="card-body pt-0">
                                  <div class="row">
                                    <div class="col-7">
                                      <h2 class="lead">
                                        <b>{{ $contact->name }}</b>
                                      </h2>
                                      <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small">
                                          <span class="fa-li"
                                            ><i
                                              class="fas fa-lg fa-building"
                                            ></i
                                          ></span>
                                          Address: {{ $contact->address }}
                                        </li>
                                        <li class="small">
                                          <span class="fa-li"
                                            ><i class="fas fa-lg fa-phone"></i
                                          ></span>
                                          Phone #: + 80 - {{ $contact->phone }}
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                      <img
                                        src="{{ $contact->picture ?? asset('assets/img/profile/default.jpg')}}"
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
                          @empty
                              {{ 'no contacts' }}
                          @endforelse
                            <!-- /contact item -->
                          </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <nav aria-label="Contacts Page Navigation">
                              <div class="d-flex justify-content-center">
                                {!! $allContacts->appends(['sort' => 'allContact'])->links() !!}
                            </div>
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
                          @forelse($familyContacts as $family)
                            <div
                              class="
                                col-12 col-sm-12 col-md-4
                                d-flex
                                align-items-stretch
                              "
                            >
                              <div class="card bg-light">
                                <div
                                  class="card-header text-muted border-bottom-0"
                                >
                                    {{ $family->about }}
                                </div>
                                <div class="card-body pt-0">
                                  <div class="row">
                                    <div class="col-7">
                                      <h2 class="lead">
                                        <b>{{ $family->name }}</b>
                                      </h2>
                                      <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small">
                                          <span class="fa-li"
                                            ><i
                                              class="fas fa-lg fa-building"
                                            ></i
                                          ></span>
                                          Address: {{ $family->address }}
                                        </li>
                                        <li class="small">
                                          <span class="fa-li"
                                            ><i class="fas fa-lg fa-phone"></i
                                          ></span>
                                          Phone #: + 80 - {{ $family->phone }}
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                      <img
                                        src="{{ $family->picture ?? asset('assets/img/profile/default.jpg')}}"
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
                          @empty
                              {{ 'no contacts' }}
                          @endforelse
                          <!-- /contact item -->
                          </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <nav aria-label="Contacts Page Navigation">
                              <div class="d-flex justify-content-center">
                                {!! $familyContacts->appends(['sort' => 'family'])->links() !!}
                              </div>
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
                            @forelse($friendContacts as $friend)
                            <div
                              class="
                                col-12 col-sm-12 col-md-4
                                d-flex
                                align-items-stretch
                              "
                            >
                              <div class="card bg-light">
                                <div
                                  class="card-header text-muted border-bottom-0"
                                >
                                    {{ $friend->about }}
                                </div>
                                <div class="card-body pt-0">
                                  <div class="row">
                                    <div class="col-7">
                                      <h2 class="lead">
                                        <b>{{ $friend->name }}</b>
                                      </h2>
                                      <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small">
                                          <span class="fa-li"
                                            ><i
                                              class="fas fa-lg fa-building"
                                            ></i
                                          ></span>
                                          Address: {{ $friend->address }}
                                        </li>
                                        <li class="small">
                                          <span class="fa-li"
                                            ><i class="fas fa-lg fa-phone"></i
                                          ></span>
                                          Phone #: + 80 - {{ $friend->phone }}
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                      <img
                                        src="{{ $friend->picture ?? asset('assets/img/profile/default.jpg')}}"
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
                          @empty
                                {{ 'no contacts' }}
                          @endforelse
                            <!-- /contact item -->
                          </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <nav aria-label="Contacts Page Navigation">
                             <div class="d-flex justify-content-center">
                                {!! $friendContacts->appends(['sort' => 'friend'])->links() !!}
                            </div>
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
                            @forelse($clientContacts as $client)
                            <div
                              class="
                                col-12 col-sm-12 col-md-4
                                d-flex
                                align-items-stretch
                              "
                            >
                              <div class="card bg-light">
                                <div
                                  class="card-header text-muted border-bottom-0"
                                >
                                    {{ $client->about }}
                                </div>
                                <div class="card-body pt-0">
                                  <div class="row">
                                    <div class="col-7">
                                      <h2 class="lead">
                                        <b>{{ $client->name }}</b>
                                      </h2>
                                      <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small">
                                          <span class="fa-li"
                                            ><i
                                              class="fas fa-lg fa-building"
                                            ></i
                                          ></span>
                                          Address: {{ $client->address }}
                                        </li>
                                        <li class="small">
                                          <span class="fa-li"
                                            ><i class="fas fa-lg fa-phone"></i
                                          ></span>
                                          Phone #: + 80 - {{ $client->phone }}
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                      <img
                                        src="{{ $client->picture ?? asset('assets/img/profile/default.jpg')}}"
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
                          @empty
                                  {{ 'no contacts' }}
                          @endforelse
                            <!-- /contact item -->
                          </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <nav aria-label="Contacts Page Navigation">
                              <div class="d-flex justify-content-center">
                                {!! $clientContacts->appends(['sort' => 'client'])->links() !!}
                            </div>
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
