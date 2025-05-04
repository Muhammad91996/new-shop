<nav class="app-header navbar navbar-expand bg-body">
  <!--begin::Container-->
  <div class="container-fluid">
    <!--begin::Language Selector-->
    <div class="btn-group mb-1">
      <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocaleName() }}
        @if (Config::get('app.locale') == 'ar')
          <img src="{{ asset('dist/assets/img/flags/ar.png') }}" alt="ar" style="max-width: 20px">
        @else
          <img src="{{ asset('dist/assets/img/flags/en.png') }}" alt="en" style="max-width: 20px">
        @endif
      </button>
      <div class="dropdown-menu">
        @foreach(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
          <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
            {{ $properties['native'] }}
          </a>
        @endforeach
      </div>
    </div>
    <!--end::Language Selector-->

    <!--begin::Left Navbar Links-->
    <ul class="navbar-nav ms-3">
      <li class="nav-item">
        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
          <i class="bi bi-list"></i>
        </a>
      </li>
      <li class="nav-item d-none d-md-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-md-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    <!--end::Left Navbar Links-->

    <!--begin::Right Navbar Links-->
    <ul class="navbar-nav ms-auto">
      <!-- Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="bi bi-search"></i>
        </a>
      </li>

      <!-- Messages Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-bs-toggle="dropdown" href="#">
          <i class="bi bi-chat-text"></i>
          <span class="navbar-badge badge text-bg-danger">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
          @foreach ([1, 8, 3] as $index => $user)
            <a href="#" class="dropdown-item">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="{{ asset("dist/assets/img/user{$user}-128x128.jpg") }}" alt="User Avatar" class="img-size-50 rounded-circle me-3" />
                </div>
                <div class="flex-grow-1">
                  <h3 class="dropdown-item-title">
                    {{ ['Brad Diesel', 'John Pierce', 'Nora Silvester'][$index] }}
                    <span class="float-end fs-7 text-{{ ['danger', 'secondary', 'warning'][$index] }}">
                      <i class="bi bi-star-fill"></i>
                    </span>
                  </h3>
                  <p class="fs-7">{{ ['Call me whenever you can...', 'I got your message bro', 'The subject goes here'][$index] }}</p>
                  <p class="fs-7 text-secondary">
                    <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                  </p>
                </div>
              </div>
            </a>
            @if ($index < 2)
              <div class="dropdown-divider"></div>
            @endif
          @endforeach
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>

      <!-- Notifications Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-bs-toggle="dropdown" href="#">
          <i class="bi bi-bell-fill"></i>
          <span class="navbar-badge badge text-bg-warning">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="bi bi-envelope me-2"></i> 4 new messages
            <span class="float-end text-secondary fs-7">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="bi bi-people-fill me-2"></i> 8 friend requests
            <span class="float-end text-secondary fs-7">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
            <span class="float-end text-secondary fs-7">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>

      <!-- Fullscreen Toggle -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-lte-toggle="fullscreen">
          <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
          <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
        </a>
      </li>

      <!-- User Menu -->
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
          <img src="{{ asset('dist/assets/img/user2-160x160.jpg') }}" class="user-image rounded-circle shadow" alt="User Image" />
          <span class="d-none d-md-inline">Alexander Pierce</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
          <li class="user-header text-bg-primary">
            <img src="{{ asset('dist/assets/img/user2-160x160.jpg') }}" class="rounded-circle shadow" alt="User Image" />
            <p>
              Alexander Pierce - Web Developer
              <small>Member since Nov. 2023</small>
            </p>
          </li>
          <li class="user-body">
            <div class="row">
              <div class="col-4 text-center"><a href="#">Followers</a></div>
              <div class="col-4 text-center"><a href="#">Sales</a></div>
              <div class="col-4 text-center"><a href="#">Friends</a></div>
            </div>
          </li>
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat">Profile</a>
            <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>
    <!--end::Right Navbar Links-->
  </div>
  <!--end::Container-->
</nav>
