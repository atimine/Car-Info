<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Info</title>

    <link href="https://fonts.cdnfonts.com/css/code-next-trial" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <header id="home">
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#brands">Brands</a></li>
                <li><a href="car-info.html">Car Info</a></li>
                <li><a href="#comment">Comment</a></li>
            </ul>
        </nav>
        <div>
            <div class="car-img">
                <img src="../img/left.svg" class="left">
                <img src="../img/porsche.png" class="img" width="400" height="250">
                <img src="../img/right.svg" class="right">
            </div>
            <div class="car-about">
                <p>
                    <span>About Car</span>
                    A car, or an automobile, is a motor vehicle with wheels. Most definitions of cars state that they
                    run primarily on roads, seat one to eight people, have four wheels, and mainly transport people, not
                    cargo.
                </p>
            </div>
        </div>
    </header>

    <main>
        <section class="about" id="about">
            <div>
                <span>About Site</span>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis maiores, excepturi aspernatur
                    dolor doloremque laborum explicabo. Nulla rem quis nobis reiciendis odit saepe, ex veritatis eius,
                    ab consequatur et sed?
                </p>
            </div>
        </section>

        <section class="brands" id="brands">
            <div>
                <span><img src="../img/hyundai.svg" width="64" height="64"></span>
                <span><img src="../img/kia.svg" width="64" height="64"></span>
                <span><img src="../img/lexus.svg" width="64" height="64"></span>
                <span><img src="../img/mazda.svg" width="64" height="64"></span>
                <span><img src="../img/mitsubishi.svg" width="64" height="64"></span>
                <span><img src="../img/nissan.svg" width="64" height="64"></span>
                <span><img src="../img/suzuki.svg" width="64" height="64"></span>
                <span><img src="../img/toyota.svg" width="64" height="64"></span>
            </div>
        </section>
    </main>

    <footer id="comment">
        <div class="container">
            <div class="comment">
                <form action="../php/comment.php">
                    <input type="text" placeholder="Comment" name="comment">
                    <input type="submit">
                </form>
            </div>
            <div class="info">
                <span>Created By adham</span>
            </div>
        </div>
    </footer>

    <script src="../js/script.js"></script>
</body>

</html>