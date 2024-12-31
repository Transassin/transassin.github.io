
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width initial-scale=1.0'>
        <link rel='text/html' href='/index.html'>
        <link rel="stylesheet" href="/style.css">
        <?php
        
        ?>
    </head>
    <body background='/assets/3kinifes1kick.mp4'>
            <source src='/assets/3kinifes1kick.mp4'>
            <?php
                $videoPath = '/assets/3kinifes1kick.mp4';
                if (file_exists($videoPath)) {
                    header('Content-Type: video/.mp4');
                    header('Content-length: '. filesize($videoPath));
                    header('Content-Disposition: inline; filename=' . basename($videoPath) . '"');
                    // Read the file and output it to the browser
                    readfile($videoPath);
                    exit;
                } else {
                    // Handle the error if the file does not exist
                    echo "Video file not found.";
                }            
            
            ?>
        </video>
        
    </body>
</html>