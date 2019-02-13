<!DOCTYPE html>
<html lang="en">
<head>
    <title> Rachel Dalby </title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div>
        <h1>Rachel Dalby</h1>
    </div>
    <hr>
    <br>
    <div>
        <img src="/Images/IMG_2223.JPG" alt="picture of me"/>
    </div>
    <br>
    <div>
        <p>This is my first course with the extension school. I just want
        a refresher and that is why I'm taking this course.</p>
    </div>
   <br>
    <hr>
    <div>
    <p>
        <?php
            $storedPhrases = array(
                'Simplicity is the ultimate sophistication. -Leonardo Da Vinci',
                'Art is never finished, only abandoned. -Leonardo Da Vinci',
                'When you have eliminated all which is impossible, then whatever remains, however improbable, must be the truth. - Arthur Conan Doyle, The Case-Book of Sherlock Holmes',
                'Come at once if convenient. If inconvenient, come all the same. - Arthur Conan Doyle, Sherlock Holmes: Adventure of the Creeping Man',
                'Imagination is more important than knowledge. -Albert Einstein',
                'No problem can be solved from the same level of consciousness that created it. -Albert Einstein',
            );
            echo $storedPhrases[rand(0,count($storedPhrases)-1)];

        ?>
        </p>
    </div>
<hr>
</body>
</html>