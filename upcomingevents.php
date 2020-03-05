<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style="background-color: lightgreen">

<?php
require 'header.php';
?>
<?php
echo "<h1>UPCOMING EVENTS</h1>";

echo "<h2>Internal Events</h2>";

$date  = '15/01/2020';

echo "<h3>Freshers Night</h3>";
?>
<img src="images/firstyearparty.jpeg" alt="">
<?php
echo "<p style='float: right; width: 60%; font-size: xx-large'>This is a night for entertainment for the school joiners. It is a party that is prepared for them to make them
feel much more welcomed and appreciated. The event wil happen on $date.
</p>";
?>
<?php
echo "<h3>Parents day</h3>";
?>
<img src="images/parentsday.jpg" alt="">
<?php

echo "<p style='float: right; width: 60%; font-size: xx-large'>Parents are the child's first teachers and hence they really impact a huge part in a child's learning curve in 
school. Parents are on this day taken through a one on one comprehensive analysis of their child's overall performance 
in both academics, social and co-curricular activities. The day will be on $date.
</p>";
?>
<?php
echo "<h3>Sports day</h3>";
?>
<img src="images/sportsday.jpeg" alt="">
<?php
echo "<p style='float: right; width: 60%; font-size: xx-large'>This is the day for sports and the students partake in all kinds of sports offered by the school. Awards are 
then offered to the winning teams. It is also an opportunity for discovery of talents among the students. The day will 
be on $date.
</p>";
?>
<?php
echo "<h3>Mr and Miss Codebora</h3>";
?>
<img src="images/mrmisscodebora.jpeg" alt="">
<?php
echo "<p style='float: right; width: 60%; font-size: xx-large'>This is an event that brings out who is the best of the best among the students when  it comes to being a 
representative figure of the school. Some of the activities that happen during the event are modelling, fashion, quizzes
, art, music and so forth. The event will happen on $date.
</p>";
?>
<?php
echo "<h3>Graduation Ceremony</h3>";
?>
<img src="images/graduation.jpeg" alt="">
<?php
echo "<p style='float: right; width: 60%; font-size: xx-large'>This is for the purpose of conferring the certificates to the achievers for successful completion of the 
curriculum. The ceremony will be happening on $date.
</p>";
?>
<?php
echo "<h3>Student elections</h3>";
?>
<img src="images/studentelections.jpeg" alt="">
<?php
echo "<p style='float: right; width: 60%; font-size: xx-large'>This is the day that the students get to choose their leaders. The school administration oversees the elections
and urges the students to vote wisely. The elections will happen on $date.
</p>";
?>
<?php
echo "<h2>External Events</h2>";

echo "<h3>Games</h3>";
?>
<img src="images/games.jpeg" alt="">
<?php
echo "<p style='float: right; width: 60%; font-size: xx-large'>The county games will be happening on $date. The school will be taking the basketball and football teams to 
participate.
</p>";
?>
<?php
echo "<h3>Conferences</h3>";
?>
<img src="images/conference.jpeg" alt="">
<?php
echo "<p style='float: right; width: 60%; font-size: xx-large'>The annual school heads conference will be happening in Mombasa on $date. The school headteacher will be 
attending the conference.
</p>";
?>
<?php
echo "<h3>Drama Festival</h3>";
?>
<img src="images/drama.jpeg" alt="">
<?php
echo "<p style='float: right; width: 60%; font-size: xx-large'>This is the competition for plays and skits. It will be taking place in Nakuru on $date.</p>";
?>
<?php
echo "<h3>Music festival</h3>";
?>
<img src="images/music.jpeg" alt="">
<?php
echo "<p style='float: right; width: 60%; font-size: xx-large'>This is the competition for music verses and poetry. It will be happening in Kisumu on $date.</p>";
?>
<?php
echo "<h3>Science Congress</h3>";
?>
<img src="images/science.jpeg" alt="">
<?php
echo "<p style='float: right; width: 60%; font-size: xx-large'>This is the competition for the best school in science subjects. It will be happening in Eldoret on $date.
</p>";
?>


<?php
require 'footer.php';
?>


</body>
</html>
