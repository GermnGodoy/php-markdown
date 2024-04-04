<body>  
<?php
  $markDownStarts = array (
    "#####" => "h5",
    "####" => "h4",
    "###" => "h3",
    "##" => "h2",
    "#" => "h1",
    "-" => "li",
    "---" => "hr",
  );

  $lines = file('./index.md', FILE_SKIP_EMPTY_LINES|FILE_IGNORE_NEW_LINES);

  foreach ($lines as $line) {
    if (array_key_exists(strtok($line, " "), $markDownStarts)) {
      echo "<".$markDownStarts[strtok($line, " ")].">"
      .ltrim($line, strtok($line," "))
      ."</".$markDownStarts[strtok($line, " ")].">";
    } else {
      echo "<p>".$line."</p>";
    }
  }
?>
</body>


<style>

  :root {
    color-scheme: light dark;
  }

  body {
    display: flex;
    flex-direction: column;
    width: 100vw;
    height: 100vh;
    margin: 0;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    padding-left: 15px;
    box-sizing: border-box;
  }

  h1,h2,h3,h4,h5,p {
    margin-bottom: 2px;
    margin-top: 5px;
  }

  h1 {
    margin-right: 2px;
    margin-top: 15px;
  }

  p {
    margin-right: 5px;
    font-size: 10px;
    text-align:left;
  }

  hr {
    width: 90%;
  }

</style>