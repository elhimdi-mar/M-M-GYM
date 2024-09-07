<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Content Page</title>
    <style>
        .footer{
            margin-top:40px;
            margin-left:450px; 
            width:700px;
        }
        .nav{
            margin-left: 733px;
        }
       .header{
            margin-left:821px;
        } 
        #divimage {
            width: 250px;
            height: 400px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border: 2px solid #cccccc00;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-image 1s ease-in-out;
            margin-left: 1100px;
            margin-top: -380px;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.473);
            background-blend-mode: multiply;
        }
        
        
        
        .description {
            color: rgba(250, 235, 215, 0.726);
            margin-top: 250px;
            margin-left: 280px;
            border-left: 2px solid red;
            padding: 15px;
        }
        
        .home {
            border-bottom: 3px solid #fff;
        }
    </style>
</head>

<body>
    <div id="header"></div>

    <div class="description">
        <i>
            M&MGYM offers you an unforgettable fitness experience! <br> Our gym is equipped with a variety of machines and weights, <br> and caters to individuals of all fitness levels and goals. <br> Personal trainers and group classes provide guidance
            and motivation. <br> Amenities such as locker rooms, showers, <br> and water fountains enhance your workout experience. <br> Gyms provide a social atmosphere where members can network and support each other ...
        </i>
    </div>
    <div>
        <div id="divimage" class="images">
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        fetch('html/header.html')
            .then(response => response.text())
            .then(html => {
                document.getElementById('header').innerHTML = html;
            });
        var im = document.getElementById('divimage');
        var imageUrls = [ 
            "./img/img01.jpg",
            "./img/img02.jpg",
            "./img/img03.jpg",
            "./img/img04.avif",
            "./img/img05.jpg",
        ];

        var currentIndex = 0;
        function changeBackgroundImage() {
            im.style.backgroundImage = "url('" + imageUrls[currentIndex] + "')";
            currentIndex = (currentIndex + 1) % imageUrls.length; 
        }
        changeBackgroundImage();
        setInterval(changeBackgroundImage, 3000);
    </script>


</body>

</html>