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
    
    public function printElements($quantità){
        return "il film". $this->name. " è disponibile in {$quantità} unità";
    }
}
    



$cars = new Movie("Cars","John Lasseter", 2006);
$frozen = new Movie("Frozen","Chris Buck & Jennifer Lee", 2013);
$tarzan = new Movie("Tarzan","Chris Buck & Kevin Lima", 1999);

$movies = [$cars,$frozen,$tarzan];


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


<div class="movie-container">
    
    <div <?php foreach($movies as $movie)  {   ?> >
        
        <ul class="movie">
            
            <li>
                <?php echo $movie->name ; ?>
            </li>
                
            <li>
                <?php echo $movie->director ; ?>
            </li>
                
            <li>
                <?php echo $movie->year ; ?>
            </li>

            <li>
                <?php echo $movie->printElements(20); ?>
            </li>
            

            
                
        </ul>
    
    </div <?php  } ; ?>   >

</div>

    
</body>
</html>

<style>


    .movie{
        text-align: center;
        margin: 100px;
        border: 1px solid black;
        list-style-type: none;
        padding: 3rem;
    }

</style>