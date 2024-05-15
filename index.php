<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>Эта страница в разработке</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body{
            font-family: "Rubik", sans-serif;
        }
        .photo-container {
            width: 100%;
            overflow-x: scroll;
            white-space: nowrap;
        }

       .photo-container img {
            width: 700px;
            height: 700px;
            object-fit: cover;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div style="text-align: center;
    background-color:bisque">
        <h1 style="margin: 10px; padding: 10px;"><b style="color: green;"> onay</b> <b style="color: black;">oqu</b></h1>
        <h2 style="color: red; margin: 10px; padding: 10px;">Упс...Эта страница в разработке, приходите позже :3</h2>
        
    </div>

    <div class="photo-container">
        <!-- Add your photos here -->
        <img src="path/to/photo1.jpeg" alt="Photo 1">
        <img src="path/to/photo2.jpeg" alt="Photo 2">
        <img src="path/to/photo3.jpeg" alt="Photo 3">
        <img src="path/to/photo4.jpeg" alt="Photo 4">
        <img src="path/to/photo5.jpeg" alt="Photo 5">
        
        <!-- Add more photos as needed -->
    </div>

    <script>
        $(document).ready(function() {
            // Fetch image file names from the server
            $.getJSON('path/to/photos.json', function(data) {
                var photoContainer = $('.photo-container');
    
                $.each(data.photos, function(index, photo) {
                    var img = $('<img>');
                    img.attr('src', 'path/to/photos/' + photo);
                    img.attr('alt', 'Photo ' (index + 1));
                    photoContainer.append(img);
                });
            });
        });
    </script>
    
</body>
</html>