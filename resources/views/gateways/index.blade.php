<a href="/gateways/create">
    <strong>Make a New Omvei Gateway ⛵</strong> 
</a>
<h2>Your Omvei Gateways</h2>
<ul>
    @foreach ($gateways as $gateway)
        <li>
            <a href="/gateways/{{ $gateway['id'] }}">
                <strong>{{ $gateway['name'] }}</strong> 
            </a>
        </li>
    @endforeach
</ul>

