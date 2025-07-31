<a href="/gateways/create">
    <strong>Make a New Omvei Stop ⛵</strong> 
</a>
<h2>Your Omvei Stops</h2>
<h3>Pick Stops to start Making a New Tour</h3>
<ul>
    @foreach ($gateways as $gateway)
        <li>
            <a href="/gateways/{{ $gateway['id'] }}">
                <strong>{{ $gateway['name'] }}</strong> 
            </a>
        </li>
    @endforeach
</ul>

