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
        <p>Hi I'm Rachel Dalby, I'm from Michigan. I just recently moved to New Hampshire and started my new job with
            Harvard School fo public health. This is my first course with the extension school. I just want
        a refresher and that is why I'm taking this course.</p>
    </div>
   <br>
    <hr>
    <div>
    <p>
        <?php
        //this portion will create an array filled with random quotes that can be referenced later
            $storedPhrases = array(
                'Simplicity is the ultimate sophistication. -Leonardo Da Vinci',
                'Art is never finished, only abandoned. -Leonardo Da Vinci',
                'When you have eliminated all which is impossible, then whatever remains, however improbable, must be the truth. - Arthur Conan Doyle, The Case-Book of Sherlock Holmes',
                'Come at once if convenient. If inconvenient, come all the same. - Arthur Conan Doyle, Sherlock Holmes: Adventure of the Creeping Man',
                'Imagination is more important than knowledge. -Albert Einstein',
                'No problem can be solved from the same level of consciousness that created it. -Albert Einstein',
            );
            /*This only executes on page load, but it uses the built in random function rand to get a random
            *number from 0 to 1 less than the total count on the array. If it didn't it would reference either a
            *non existent part of the array and throw an error or never get the first record if it didn't start at 0.
            *Once this has the random number it uses that number to generate the quote from the array and sends it to
            *the screen.
            */
            echo $storedPhrases[rand(0,count($storedPhrases)-1)];

        ?>
        </p>
    </div>
<hr>
</body>
</html>