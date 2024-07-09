<div class="d-flex flex-direction-column">
    <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
        <a href="{{route('admin.dashboard')}}" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
        <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-5 fw-semibold">Dashboard</span>
        </a>
        <ul class="list-unstyled ps-0">
        <!-- <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
            Dashboard
            </button>
            <div class="collapse" id="dashboard-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">Overview</a></li>
                <li><a href="#" class="link-dark rounded">Weekly</a></li>
            </ul>
            </div>
        </li> -->
        <li class="mb-1">
            <a class="btn btn-toggle align-items-center rounded collapsed" href="{{route('admin.dashboard')}}">
                Dashboard
            </a>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#users-collapse" aria-expanded="false">
            Users
            </button>
            <div class="collapse" id="users-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="{{route('user.view')}}" class="link-dark rounded">View Users</a></li>
                <li><a href="{{route('user.add')}}" class="link-dark rounded">Add Users</a></li>
            </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#provinces-collapse" aria-expanded="false">
            Provinces
            </button>
            <div class="collapse" id="provinces-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="{{route('province.view')}}" class="link-dark rounded">View Provinces</a></li>
                <li><a href="{{route('province.add')}}" class="link-dark rounded">Add Provinces</a></li>
            </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#divisions-collapse" aria-expanded="false">
            Divisions
            </button>
            <div class="collapse" id="divisions-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="{{route('division.view')}}" class="link-dark rounded">View Divisions</a></li>
                <li><a href="{{route('division.add')}}" class="link-dark rounded">Add Divisions</a></li>
            </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#districts-collapse" aria-expanded="false">
            Districts
            </button>
            <div class="collapse" id="districts-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="{{route('district.view')}}" class="link-dark rounded">View Districts</a></li>
                <li><a href="{{route('district.add')}}" class="link-dark rounded">Add Districts</a></li>
            </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#tehsils-collapse" aria-expanded="false">
            Tehsils
            </button>
            <div class="collapse" id="tehsils-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="{{route('tehsil.view')}}" class="link-dark rounded">View Tehsils</a></li>
                <li><a href="{{route('tehsil.add')}}" class="link-dark rounded">Add Tehsils</a></li>
            </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#union-councils-collapse" aria-expanded="false">
            Union Councils
            </button>
            <div class="collapse" id="union-councils-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="{{route('union-council.view')}}" class="link-dark rounded">View Union Councils</a></li>
                <li><a href="{{route('union-council.add')}}" class="link-dark rounded">Add Union Councils</a></li>
            </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#houses-collapse" aria-expanded="false">
            Houses
            </button>
            <div class="collapse" id="houses-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">View Houses</a></li>
                <li><a href="#" class="link-dark rounded">Add Houses</a></li>
            </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#house-members-collapse" aria-expanded="false">
            House Members
            </button>
            <div class="collapse" id="house-members-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">View Members</a></li>
                <li><a href="#" class="link-dark rounded">Add Members</a></li>
            </ul>
            </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
            Account
            </button>
            <div class="collapse" id="account-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">Profile</a></li>
                <li><a href="#" class="link-dark rounded">Settings</a></li>
                <li>
                <form action="{{route('user.logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="sign-out">Sign out</button>
                </form>
            </ul>
            </div>
        </li>
        </ul>
    </div>

    <div class="b-example-divider"></div>
</div>