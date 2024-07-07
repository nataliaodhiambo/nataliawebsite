$days = array(
  "Monday" => "9:00 AM - 7:00 PM",
  "Tuesday" => "9:00 AM - 7:00 PM",
  "Wednesday" => "9:00 AM - 7:00 PM",
  "Thursday" => "9:00 AM - 7:00 PM",
  "Friday" => "9:00 AM - 7:00 PM",
  "Saturday" => "9:00 AM - 5:00 PM",
  "Sunday" => "Closed",
);

$today = date("l"); 

echo "<p>";
foreach ($days as $day => $hours) {
  if ($day == $today) {
    echo "<b>$day:</b> $hours<br>";  
  } else {
    echo "$day: $hours<br>";
  }
}
echo "</p>";