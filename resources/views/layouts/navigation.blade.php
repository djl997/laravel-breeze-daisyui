<div class="navbar bg-primary text-primary-content">
    <div class="flex-none">
        <x-application-logo class="block h-9 w-auto fill-current text-current" />
        <a href="{{ route('dashboard') }}" class="btn btn-ghost">
            @appname
        </a>
    </div>
    <div class="flex-1">
        <ul class="menu menu-horizontal px-1">
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        </ul>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
            <li>
                <details>
                    <summary>
                        {{ Auth::user()->name }}
                    </summary>
                    <ul class="p-2 bg-base-100 text-base-content rounded-t-none">
                        <li><a href="{{route('profile.edit')}}">{{ __('Profile') }}</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
</div>