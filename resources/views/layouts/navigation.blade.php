<div class="navbar bg-primary text-primary-content">
    <div class="flex-none">
        <x-application-logo class="block h-9 w-auto fill-current text-current" />
        <a href="{{ route('dashboard') }}" class="btn btn-ghost">
            @appname
        </a>
    </div>
    <div class="flex-1">
        <div class="hidden md:block w-full max-w-7xl mx-auto">
            <ul class="flex gap-1">
                <li><a href="{{ route('dashboard') }}" @class(['btn btn-primary shadow-none no-animation', 'btn-active'=> request()->routeIs('dashboard')])>Start</a></li>
            </ul>
        </div>
    </div>
    <div class="flex-none">
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost">
                {{ Auth::user()->name }}
            </div>
            <ul tabindex="0" class="menu dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 text-base-content rounded-box w-52">
                <li class="block md:hidden"><a href="{{ route('dashboard') }}" @class(['active'=> request()->routeIs('dashboard')])>Dashboard</a></li>
                <li class="block md:hidden"></li>
                <li><a href="{{route('profile.edit')}}">{{ __('Profile') }}</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button onclick="event.preventDefault(); this.closest('form').submit();" class="text-error">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>