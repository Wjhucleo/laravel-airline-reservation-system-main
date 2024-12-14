<!-- ========== Left Sidebar Start ========== -->
<style>
  /* Apply this CSS to ensure the entire sidebar and top header area have the correct background color */
body, html {
    margin: 0;
    padding: 0;
    background-color: #1e1e1e; /* Apply the color to the entire page */
}

.wrapper { /* Assuming there's a wrapper around the sidebar and content */
    background-color: #1e1e1e;
    min-height: 100vh;
}

.header, .topbar { /* Apply the background to the header or topbar */
    background-color: #1e1e1e;
    color: white;
}

.vertical-menu {
    background-color: #1e1e1e;
    color: white;
    min-height: 100vh;
}

.vertical-menu .metismenu li a {
    color: white;
}

/* Ensure the content area starts after the header */
.main-content {
    margin-top: 0;
    padding-top: 0;
}

</style>
<div class="vertical-menu" style="background-color: #1e1e1e; color: white;">

  <div data-simplebar class="h-100" >

    <!--- Sidemenu -->
    <div id="sidebar-menu" >
      <!-- Left Menu Start -->
      <ul class="metismenu list-unstyled" id="side-menu" style="color: white;">

        @admin
          <li>
            <a href="{{ route('root') }}" class="waves-effect" style="color: white;">
              <i class="bx bx-home-circle" style="color: white;"></i>
              <span key="t-contact">@lang('sidebar.dashboard')</span>
            </a>
          </li>

          <li class="{{ request()->routeIs('airlines.*') ? 'mm-active' : '' }}">
            <a href="{{ route('airlines.index') }}" class="waves-effect" style="color: white;">
              <i class='bx bx-globe' style="color: white;"></i>
              <span key="t-contact">@lang('sidebar.airlines')</span>
            </a>
          </li>

          <li class="{{ request()->routeIs('planes.*') ? 'mm-active' : '' }}">
            <a href="{{ route('planes.index') }}" class="waves-effect" style="color: white;">
              <i class='bx bxs-paper-plane' style="color: white;"></i>
              <span key="t-contact">@lang('sidebar.planes')</span>
            </a>
          </li>

          <li class="{{ request()->routeIs('airports.*') ? 'mm-active' : '' }}">
            <a href="{{ route('airports.index') }}" class="waves-effect" style="color: white;">
              <i class='bx bx-buildings' style="color: white;"></i>
              <span key="t-contact">@lang('sidebar.airports')</span>
            </a>
          </li>

          <li class="{{ request()->routeIs('flights.*') ? 'mm-active' : '' }}">
            <a href="{{ route('flights.index') }}" class="waves-effect" style="color: white;">
              <i class='bx bxs-plane-alt' style="color: white;"></i>
              <span key="t-contact">@lang('sidebar.flights')</span>
            </a>
          </li>

          {{-- tickets --}}
          <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect {{ request()->routeIs('tickets.*') ? 'mm-active' : '' }}" style="color: white;">
              <i class="dripicons-ticket" style="color: white;"></i>
              <span key="t-ecommerce">@lang('sidebar.tickets')</span>
            </a>
            <ul class="{{ request()->routeIs('tickets.*') ? 'sub-menu mm-collapse mm-show' : 'sub-menu' }}" aria-expanded="false">
              <li>
                <a href="{{ route('tickets.index') }}" style="color: white;">All Tickets
                  <span class="badge rounded-pill bg-info float-end ticket-badge d-none" id="totalTickets"></span>
                </a>
              </li>
              <li>
                <a href="{{ route('tickets.index', ['status' => 'pending']) }}" class="{{ request()->get('status') == 'pending' ? 'active' : '' }}" key="t-products" style="color: white;">Pending Tickets
                  <span class="badge rounded-pill bg-info float-end ticket-badge d-none" id="pendingTickets"></span>
                </a>
              </li>
              <li>
                <a href="{{ route('tickets.index', ['status' => 'approved']) }}" class="{{ request()->get('status') == 'approved' ? 'active' : '' }}" key="t-products" style="color: white;">Approved Tickets
                  <span class="badge rounded-pill bg-info float-end ticket-badge d-none" id="approvedTickets"></span>
                </a>
              </li>
              <li>
                <a href="{{ route('tickets.index', ['status' => 'canceled']) }}" class="{{ request()->get('status') == 'canceled' ? 'active' : '' }}" key="t-products" style="color: white;">Canceled Tickets
                  <span class="badge rounded-pill bg-info float-end ticket-badge d-none" id="canceledTickets"></span>
                </a>
              </li>
            </ul>
          </li>

          <li class="{{ request()->routeIs('customers.*') ? 'mm-active' : '' }}">
            <a href="{{ route('customers.index') }}" class="waves-effect" style="color: white;">
              <i class='bx bx-user' style="color: white;"></i>
              <span key="t-contact">Customers</span>
            </a>
          </li>

          <li>
            <a href="{{ route('CustomsDeclaration.show') }}" class="waves-effect" style="color: white;">
              <i class="bx bx-credit-card" style="color: white;"></i>
              <span>Customs Declaration</span>
            </a>
          </li>
        @else
          {{-- USER ROUTES  --}}
          <li>
            <a href="{{ route('profile') }}" class="waves-effect" style="color: white;">
              <i class="bx bx-user-circle" style="color: white;"></i>
              <span key="t-contact">@lang('sidebar.my_profile')</span>
            </a>
          </li>
          @if ($userHasCard)
          <li>
            <a href="{{ route('tickets.flights') }}" class="waves-effect" style="color: white;">
              <i class="bx bx-credit-card" style="color: white;"></i>
              <span>@lang('sidebar.book_ticket')</span>
            </a>
          </li>
          @endif

          <li>
            <a href="{{ route('tickets.userTickets') }}" class="waves-effect" style="color: white;">
              <i class="bx bx-credit-card" style="color: white;"></i>
              <span>@lang('sidebar.my_tickets')</span>
            </a>
          </li>

          <li>
            <a href="{{ route('customsDeclaration.index') }}" class="waves-effect" style="color: white;">
              <i class="bx bx-credit-card" style="color: white;"></i>
              <span>Customs Declaration</span>
            </a>
          </li>
          @if (!$userHasCard)
              <li>
                  <a href="{{ route('cards.index') }}" class="waves-effect" style="color: white;">
                      <i class="bx bx-credit-card" style="color: white;"></i>
                      <span>Add Card</span>
                  </a>
              </li>
          @endif
        @endadmin

      </ul>
    </div>
    <!-- Sidebar -->
  </div>
</div>

<!-- Left Sidebar End -->

@push('scripts')
  <script>
    $(document).ready(function() {
      getOrderStatusCount()
    });

    const getOrderStatusCount = () => {
      $.ajax({
        url: "{{ route('ticketStatusCount') }}",
        type: "GET",
        dataType: "json",
        success: function(data) {
          // remove d-none class from the badge
          $('.ticket-badge').removeClass('d-none');

          $("#totalTickets").html(data.totalTickets);
          $("#pendingTickets").html(data.pendingTickets);
          $("#approvedTickets").html(data.approvedTickets);
          $("#canceledTickets").html(data.canceledTickets);
        }
      });
    }

  </script>
@endpush
