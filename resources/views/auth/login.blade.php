<!Doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/custom.css')
  </head>
  <body>
    <div class="w-96 ...">w-96</div>
    <h1 class="text-3xl font-bold underline">
      Hello world!
    </h1>
    <form method="POST" action="{{ route('login.submit') }}">
        @csrf

        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>

    @if(session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif
  </body>
</html>