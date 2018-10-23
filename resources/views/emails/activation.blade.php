Hi, {{ $username }}

<p>Please activate your account : </p>

{{ route('confirmation', $token) }}