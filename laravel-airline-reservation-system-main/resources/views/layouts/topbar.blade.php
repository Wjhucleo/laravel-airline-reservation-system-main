<style>
 /* Apply dark theme to the header */
#page-topbar {
    background-color: #121212;
    color: white;
}

#page-topbar .navbar-header {
    background-color: #121212;
    border-bottom: 1px solid #333; /* Optional: Add a subtle border to separate header */
}

#page-topbar .navbar-brand-box {
    background-color: #121212; /* Ensure the logo area matches the dark theme */
}

#page-topbar .header-item {
    color: white;
}

#page-topbar .header-profile-user {
    border: 2px solid white; /* Add a white border around the profile image for visibility */
}

#page-topbar .dropdown-menu {
    background-color: #1c1c1c; /* Darken the dropdown menu */
    border-color: #333;
}

#page-topbar .dropdown-item {
    color: white;
}

#page-topbar .dropdown-item:hover {
    background-color: #333; /* Slightly lighter color on hover */
}

#page-topbar .dropdown-item.text-danger {
    color: #ff4d4d; /* Red color for the logout item */
}

#page-topbar .dropdown-item.text-danger:hover {
    background-color: #333; /* Match the hover effect with the other items */
}

#page-header-user-dropdown .mdi-chevron-down {
    color: white;
}

#page-header-user-dropdown .mdi-chevron-down.d-none.d-xl-inline-block {
    display: inline-block !important; /* Ensure icon visibility in large screens */
}
#page-topbar .dropdown-menu {
    background-color: #1c1c1c;  /* Dark background for dropdown menu */
    border-color: #333;  /* Optional: Slightly lighter border for separation */
}

#page-topbar .dropdown-menu .dropdown-item {
    color: white;  /* White text color */
}

#page-topbar .dropdown-menu .dropdown-item:hover {
    background-color: #333;  /* Slightly lighter background on hover */
}

#page-topbar .dropdown-menu .dropdown-item.text-danger {
    color: #ff4d4d;  /* Red color for the logout item */
}

#page-topbar .dropdown-menu .dropdown-item.text-danger:hover {
    background-color: #333;  /* Match the hover effect with other items */
}

/* Profile button itself */
#page-header-user-dropdown {
    background-color: #121212;  /* Dark background for the button */
    color: white;  /* White text color */
    border: 1px solid #333;  /* Optional: Subtle border */
}

#page-header-user-dropdown:hover {
    background-color: #1c1c1c;  /* Slightly lighter background on hover */
}

#page-header-user-dropdown .header-profile-user {
    border: 2px solid white;  /* Ensure visibility with a white border */
}

#page-header-user-dropdown .mdi-chevron-down {
    color: white;  /* White color for the chevron icon */
}

</style>
<header id="page-topbar">
  <div class="navbar-header" >
    <div class="d-flex">
      <!-- LOGO -->
      <div class="navbar-brand-box">
    </div>

    <div class="d-flex">
      <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="rounded-circle header-profile-user" src="{{ getAvatar(auth()->user()) }}" alt="Header Avatar">
          <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ ucfirst(Auth::user()->name) }}</span>
          <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
          <!-- item-->
          <a class="dropdown-item" href="{{ route('profile') }}"><i class="bx bx-user font-size-16 me-1 align-middle"></i> <span key="t-profile">@lang('translation.Profile')</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-danger" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 me-1 text-danger align-middle"></i> <span
              key="t-logout">@lang('translation.Logout')</span></a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</header>
