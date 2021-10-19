<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="css/gallery.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/gallery.js"></script>
    <title>Document</title>
</head>

    
 <div class="container p-3">
         <h1> BILDER </h1>
        <div class="fg-gallery">
            <img src="images/slid14.jpg"alt="">
            <img src="images/slid7.jpg" alt="">
            <img src="images/slid8.jpg" alt="">
            <img src="images/slid6.jpg" alt="">
            <img src="images/slid10.jpg" alt="">
            <img src="images/slid4.jpg" alt="">
            <img src="images/slid6.jpg" alt="">
            <img src="images/slid3.jpg" alt="">
        </div>

        <div class="fg-gallery ns">
            <img src="images/slid13.jpg" alt="">
            <img src="images/slid11.jpg" alt="">
            <img src="images/slid12.jpg" alt="">
            <img src="images/slid3.jpg" alt="">
            <img src="images/slid1.jpg" alt="">
            <img src="images/hotel.jpg" alt="">
        </div>

    </div>

    <body>
    
    <script>
        var a = new FgGallery('.fg-gallery', {
            cols: 4,
            style: {
                border: '10px solid #fff',
                height: '180px',
                borderRadius: '5px',
                boxShadow: '0 2px 10px -5px #858585',
            }
        })

        var a = new FgGallery('.ns', {
            cols: 3,
            style: {
                border: '0 solid #fff',
                height: '240px',
                borderRadius: '5px',
            }
        })
    </script>



 
    
  

