<?php
// Check if width and height have been submitted
if(isset($_POST['width']) && isset($_POST['height'])) {
    $width = (int)$_POST['width'];
    $height = (int)$_POST['height'];
    
    // Generate the table using nested for loops
    echo '<table>';
    for($i = 0; $i < $height; $i++) {
        echo '<tr>';
        for($j = 0; $j < $width; $j++) {
            if($i == 0 || $i == $height - 1 || $j == 0 || $j == $width - 1) {
                echo '<td>*</td>';
            } else {
                echo '<td style="border:none;"></td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';
}
?>

<form method="post">
    <label for="width">Enter the width:</label>
    <input type="number" name="width" id="width">
    
    <label for="height">Enter the height:</label>
    <input type="number" name="height" id="height">
    
    <input type="submit" value="Generate Table">
</form>
