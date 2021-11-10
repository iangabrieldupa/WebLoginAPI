<li class="nav-item">
    <a href="{{ route('investments.index') }}"
       class="nav-link {{ Request::is('investments*') ? 'active' : '' }}">
        <p>Investments</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


