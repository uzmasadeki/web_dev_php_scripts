<!DOCTYPE html>
<html>
<head>
    <title>Count Vowels in a Sentence</title>
</head>
<body>
    <h2>Count Vowels in a Sentence</h2>
    <form method="post" action="">
        Enter a sentence: <input type="text" name="sentence">
        <input type="submit" name="submit" value="Count Vowels">
    </form>

    <?php
    if (isset($_POST['submit'])) {
  
        $sentence = $_POST['sentence'];

       
        $sentence = strtolower($sentence);

      
        $vowels = ['a', 'e', 'i', 'o', 'u'];

       
        $vowelCount = 0;

     
        for ($i = 0; $i < strlen($sentence); $i++) {
            $char = $sentence[$i];
            
            
            if (in_array($char, $vowels)) {
                $vowelCount++;
            }
        }

        
        echo "<p>The number of vowels in the sentence is: $vowelCount</p>";
    }
    ?>
</body>
</html>