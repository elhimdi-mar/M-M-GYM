<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Contact Us - Gym</title>
    <style>
       .nav{
            margin-left: -137.5px;
        }
         .header{
            margin-left: -49px;
        }
         
        .contact-container {
            max-width: 600px;
            margin-top: -250px;
            padding: 20px;
        }
        
        .contact-container h1 {
            font-size: 24px;
            margin-bottom: 10px;
            color: rgb(214, 151, 73);
        }
        
        .contact-container p {
            margin-bottom: 20px;
            color: rgb(214, 151, 73);
        }
        
        .contact-container form {
            display: grid;
            gap: 10px;
            color: rgb(214, 151, 73);
        }
        
        .contact-container label {
            font-weight: bold;
            color: rgb(214, 151, 73);
        }
        
        .contact-container input[type="text"],
        .contact-container input[type="email"],
        .contact-container textarea {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
        }
        
        .contact-container textarea {
            height: 100px;
        }
        
        .contact-container button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 10px;
            width: 100px;
        }
        
        .contact-container button:hover {
            background-color: #0056b3;
        }
        
        .fb {
            float: left;
            margin-top: 290px;
            color: blue;
            margin-left: -600px;
        }
        
        .fb a {
            color: blue;
            text-decoration: none;
        }
        
        .ig {
            float: left;
            margin-top: 290px;
            color: rebeccapurple;
            margin-left: -480px;
        }
        
        .ig a {
            color: rebeccapurple;
            text-decoration: none;
        }
        
        .twiter {
            float: left;
            margin-top: 290px;
            color: white;
            margin-left: -350px;
        }
        
        .twiter a {
            color: white;
            text-decoration: none;
        }
        
        .telegram {
            float: left;
            margin-top: 290px;
            color: rgb(0, 10, 148);
            margin-left: -250px;
        }
        
        .telegram a {
            color: rgb(0, 0, 173);
            text-decoration: none;
        }
        
        .email {
            text-decoration: solid;
            margin-left: -550px;
            margin-top: 100px;
            font-size: 20px;
            color: rgb(255, 209, 209);
        }
        
        .i {
            text-decoration: dashed;
            margin-left: -0px;
            margin-top: 100px;
            font-size: 18px;
            color: rgb(214, 151, 73);
        }
        
        .contact {
            border-bottom: 3px solid #fff;
        }
    </style>
</head>

<body>

    <div id="header"></div>
    <p class="email"><i class="i"> Email:</i> <br><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
        <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
        <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
      </svg> GYM@gmail.com <br>
        <i class="i">Tel:</i><br><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
          </svg> 0780802020</p>
    
    <div class="contact-container">
        <h1>Contact Us</h1>
        <p>Please fill out the form below to get in touch with us:</p>
        <form id="contact-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <center>
                <button type="submit">Submit</button>
            </center>
        </form>
    </div>
    <?php include 'footer.php'; ?>

    <script>
        fetch('html/header.html')
            .then(response => response.text())
            .then(html => {
                document.getElementById('header').innerHTML = html;
            });

        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault(); 

            alert('Form submitted!'); 
        });
    </script>
</body>

</html>