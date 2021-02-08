<div class="flex">
    <div class="bg-blue-300 w-full">
        
        <a href="{{ route('admin-dashboard') }}">
            <div class="bg-nav h-12 text-white cursor-pointer hover:bg-ye hover:text-side flex {{ Request::routeIs('admin-dashboard') ? 'bg-ye text-side' : ''}}">
                <div class=" flex justify-center items-center w-3/12">
                <i class="material-icons md-36">dashboard</i>
                </div>
                <div class=" w-9/12 flex items-center ">
                <h1>Dashboard</h1>
                </div>
            </div>
        </a>
        <a href="{{ route('admin-campus') }}">
            <div class="bg-nav h-12 text-white cursor-pointer hover:bg-ye hover:text-side flex {{ Request::routeIs('admin-campus') ? 'bg-ye text-side' : ''}}">
                <div class=" flex justify-center items-center w-3/12">
                <i class="material-icons md-36">domain</i>
                </div>
                <div class=" w-9/12 flex items-center">
                <h1>Campus</h1>
                </div>
            </div>
        </a>
        <a href="{{ route('admin-student') }}">
            <div class="bg-nav h-12 text-white cursor-pointer hover:bg-ye hover:text-side flex {{ Request::routeIs('admin-student') ? 'bg-ye text-side' : ''}}">
                <div class=" flex justify-center items-center w-3/12">
                <i class="material-icons md-36">people</i>
                </div>
                <div class=" w-9/12 flex items-center ">
                <h1>Students</h1>
                </div>
            </div>
        </a>
        <a href="{{ route('admin-organization') }}">
            <div class="bg-nav h-12 text-white cursor-pointer hover:bg-ye hover:text-side flex {{ Request::routeIs('admin-organization') ? 'bg-ye text-side' : ''}}">
                <div class=" flex justify-center items-center w-3/12">
                <i class="material-icons md-36">view_column</i>
                </div>
                <div class=" w-9/12 flex items-center ">
                <h1>Organization</h1>
                </div>
            </div>
        </a>
        <a href="{{ route('admin-partylist') }}">
            <div class="bg-nav h-12 text-white cursor-pointer hover:bg-ye hover:text-side flex  {{ Request::routeIs('admin-partylist') ? 'bg-ye text-side' : ''}}">
                <div class=" flex justify-center items-center w-3/12">
                <i class="material-icons md-36">view_module</i>
                </div>
                <div class=" w-9/12 flex items-center ">
                <h1>Party-list</h1>
                </div>
            </div>
        </a>
        <a href="{{ route('admin-position') }}">
            <div class="bg-nav h-12 text-white cursor-pointer hover:bg-ye hover:text-side flex {{ Request::routeIs('admin-position') ? 'bg-ye text-side' : ''}}">
                <div class=" flex justify-center items-center w-3/12">
                <i class="material-icons md-36">safety_divider</i>
                </div>
                <div class=" w-9/12 flex items-center ">
                <h1>Position</h1>
                </div>
            </div>
        </a>
        <a href="{{ route('admin-candidate') }}">
            <div class="bg-nav h-12 text-white cursor-pointer hover:bg-ye hover:text-side flex {{ Request::routeIs('admin-candidate') ? 'bg-ye text-side' : ''}}">
                <div class=" flex justify-center items-center w-3/12">
                <i class="material-icons md-36">person</i>
                </div>
                <div class=" w-9/12 flex items-center ">
                <h1>Candidates</h1>
                </div>
            </div>
        </a>
        <a href="{{ route('admin-user') }}">
            <div class="bg-nav h-12 text-white cursor-pointer hover:bg-ye hover:text-side flex {{ Request::routeIs('admin-user') ? 'bg-ye text-side' : ''}}">
                <div class=" flex justify-center items-center w-3/12">
                <i class="material-icons md-36">supervised_user_circle</i>
                </div>
                <div class=" w-9/12 flex items-center ">
                <h1>Users</h1>
                </div>
            </div>
        </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
                    this.closest('form').submit();">
            <div class="bg-nav h-12 text-white cursor-pointer hover:bg-ye hover:text-side flex ">
                <div class=" flex justify-center items-center w-3/12">
                <i class="material-icons md-36">logout</i>
                </div>
                <div class=" w-9/12 flex items-center ">
                <h1>Sign out</h1>
                </div>
            </div>
        </a>
        </form>
    </div>
    <div class="bg-ye w-1"></div>
</div>