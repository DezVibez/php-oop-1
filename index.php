<?php 

class Movie {
    
    public $name;
    public $director;
    public $year;
    
    function __construct($name, $director, $year) {
        $this->name = $name;
        $this->director = $director;
        $this->year = $year;
    }
}
    



$cars = new Movie("Cars","John Lasseter", 2006);
$frozen = new Movie("Frozen","Chris Buck & Jennifer Lee", 2013);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>