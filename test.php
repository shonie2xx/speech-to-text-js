<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <title>Speech to text conversion using JavaScript</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  
    </head>

    <body>
        <div class="container">

            <h1>Hello mothafaka</h1>

            <div class="test"> 
                   

                 <form action="dbh.insert.php" method="POST" class="forma">
                    <textarea type="longtext" name="transcript" id="tbTranscript" rows="5" cols="50"></textarea>
                    <textarea type="longtext" name="tekst" id="tbNote" rows="10" cols="50"></textarea>
                       
                    <button type="submit" name="submit" title="Send" class="btn btn-primary">Send</button>
                    
                 </form>
                   
                    <button id="start-btn" title="Start" class="btn btn-success">Start recording</button>
                    <button id="stop-btn" title="Stop" class="btn btn-danger">Stop</button>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>