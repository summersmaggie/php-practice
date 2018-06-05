<?php
class AnagramTest {
  function testAnagram($word_one, $word_two) {

      $result = false;

      if($word_one && $word_two) {
      $split_one = str_split($word_one);
      $split_two = str_split($word_two);
      sort($split_one);
      sort($split_two);

      if ($split_one === $split_two) {
        $result = true;
      }
    }
      return $result;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Anagram Game</title>
  </head>
  <body>
    <h3>Anagram Game</h3>
      <?php
        $word_one = $_GET['word_one'];
        $word_two = $_GET['word_two'];

        $my_AnagramTest = new AnagramTest;
        $status = $my_AnagramTest->testAnagram($word_one, $word_two);

        if ($status == true) {
          echo "<p> Your words are anagrams. </p>";
        }
        else {
          echo "<p> Your words are not anagrams. </p>";
        }
      ?>
  </body>
</html>
