<div id="sidepanel">
    <div id="profile">
        <div class="wrap">
            <img id="profile-img" src="http://emilcarlsson.se/assets/mikeross.png" class="online" alt="" />
            <p>{{ Auth::user()->name }}</p>
            <i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>
            <div id="status-options">
                <ul>
                    <li id="status-online" class="active"><span class="status-circle"></span>
                        <p>Online</p>
                    </li>
                    <li id="status-away"><span class="status-circle"></span>
                        <p>Away</p>
                    </li>
                    <li id="status-busy"><span class="status-circle"></span>
                        <p>Busy</p>
                    </li>
                    <li id="status-offline"><span class="status-circle"></span>
                        <p>Offline</p>
                    </li>
                </ul>
            </div>

        </div>
    </div>
       <hr>
    <div id="contacts">
        <ul>
            @forelse ($users as $user)
            <li class="contact" data-id="{{ $user->id }}">
                <div class="wrap">
                    <span class="contact-status online"></span>
                    <img src="http://emilcarlsson.se/assets/louislitt.png" alt="" />
                    <div class="meta">
                        <p class="name">{{ $user->name }}</p>
                        <p class="preview">You just got LITT up, Mike.</p>
                    </div>
                </div>
            </li>
            @empty
                No contact
            @endforelse
        </ul>
    </div>
    <div class="text-center">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>
    </div>
</div>
