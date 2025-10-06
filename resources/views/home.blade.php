<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Kawaii Sushi - Yummy!</title>
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Bebas+Neue:wght@400;700&display=swap" rel="stylesheet"> 
</head>
<body class="retro-body">

    <div class="page-container">
        <header class="navbar">
            <nav class="nav-links">
                <a href="#">About Us</a>
                <a href="#">The Market</a>
                <a href="#">Subsidiaries</a>
                <a href="#">Products</a>
            </nav>
        </header>

        <main class="hero-section">
            
            <div class="hero-content">
                <div class="title-group">
                    <h1 class="main-title">THE <span class="accent-text">Kawaii Sushi</span></h1>
                </div>
                
                <p class="description">
                    あたらしい おすし を、さいこう の カワイイ で どうぞ！ほんもの の うまみ と、かわいい みため で、きょう が あかるく なります よ。わくわく する あじ の たび に でる じゅんび は いい です か？
                </p>
                
                <button class="get-started-btn">Get started</button>
            </div>

            <div class="hero-visual">
                <div class="yummy-text">Yummy!</div>
                
                <div class="checkerboard-pattern"></div>
                
                <div class="image-frame">
                    <img src="{{ asset('img/kawaiisushi.jpeg') }}" alt="Makanan" class="main-image">
                </div>
                
                <div class="cherry-illustration">🍒</div> 

                <div class="decorative-arrow">-></div>
            </div>
        </main>
    </div>

</body>
</html>