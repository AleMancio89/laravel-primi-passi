<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>ex-dischi-musicali</title>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style2.css">
    </head>
    <body>
        <header>
            <div class="container">
                <img src="img/logo.png" alt="logo" />
            </div>
        </header>

        <div id="root" class="cds-container container">
             <div class="row albums">  
                @foreach ($data['response'] as $disco)
                    <div class="cd"> 
                        <img src="{{ $disco['poster'] }}" alt="Album logo"> 
                        <h3>{{ $disco['title'] }}</h3>  
                        <span class="author">{{ $disco['author'] }}</span>
                        <span class="year">{{ $disco['year'] }}</span>
                    </div>
                @endforeach
            </div>             
        </div>
    </body>
</html>