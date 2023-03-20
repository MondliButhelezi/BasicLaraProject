<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title></title>
</head>

<body>
    <nav>
        <label class="logo">BlogWeb</label>
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">Contact</a>
            </li>

            @if (Route::has('login'))

                @auth
                    <li>
                    <a href="{{ url('/dashboard') }}" class="btn btn-success">{{ Auth::user()->name }}</a>
                    </li>

                @else

                    <li>
                        <a href="{{ route('register') }}" class="btn btn-success">Register</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    </li>
                @endauth
            @endif
        </ul>
    </nav>
    
        <div class="dev_deg">
            <label>Mondli</label>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley 
                of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised
                 in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently 
                 with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                 
            <img src="1.jpg" alt="" height="300px" width="100%">
        </div>
        
        <div class="dev_deg">
            <label>Mondli</label>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley 
                of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised
                 in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently 
                 with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                 
            <img src="2.jpg" alt="" height="300px" width="100%">
        </div>

        <div class="dev_deg">
            <label>Mondli</label>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley 
                of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised
                 in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently 
                 with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                 
            <img src="3.jpg" alt="" height="300px" width="100%">
        </div>

</body>
</html>