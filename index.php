<html>

<head>
    <h1><b> About Me! </b></h1>
</head>

<body>
    <p>
        paragraph 1
    </p>
    <br />

    <p>
        paragraph 2
    </p>
</body>

</html>








<?php

echo 'Hello World!';
?>
<br />
More stuff! 
<?php
echo "<br> <br> &nbsp stuff here";

try {
    $zero = 0;
    throw new Exception();
} catch (Exception $exception) {
    echo "<br> We caught the error. <br>";
} finally {
    // this says to run this regardless of error or not
}
?>