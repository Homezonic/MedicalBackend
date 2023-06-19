<h2>{{ $username }} Medical Data</h2>
<hr>
@if(isset($tests['xray']))
    <h3>X-Ray Tests:</h3>
    <ul>
        @foreach ($tests['xray'] as $test)
            <li>{{ $test }}</li>
        @endforeach
    </ul>
@endif
<hr>
@if(isset($tests['ultrasound']))
    <h3>Ultrasound Tests:</h3>
    <ul>
        @foreach ($tests['ultrasound'] as $test)
            <li>{{ $test }}</li>
        @endforeach
    </ul>
@endif
<hr>
<h3>Other Tests:</h3>
<p>{{ $other_tests }}</p>

<hr>

<p style="text-align: center; text-transform: uppercase;">{{ $footer }}</p>
