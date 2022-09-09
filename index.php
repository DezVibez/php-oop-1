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


    
    public function printElements(){
        $quantità = rand(0, 200);
        return "Il film ". $this->name. " è disponibile in {$quantità} unità";
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
                <h1> <?php echo $movie->name ; ?> </h1>
            </li>
                
            <li>
                <h3> <?php echo $movie->director ; ?> </h3>
            </li>
                
            <li>
               <div class="year"> <?php echo $movie->year ; ?> </div> 
            </li>

            <li>
               <span> <?php echo $movie->printElements(); ?> </span> 
            </li>
            

            
                
        </ul>
    
    </div <?php  } ; ?>   >

</div>

    
</body>
</html>

<style>


    .movie{
        text-align: center;
        margin: 50px auto;
        border: 1px solid black;
        list-style-type: none;
        padding: 3rem;
    }

    h1{
        font-size: 30px;
    }

    .year {
        margin: 10px 0;
    }

    span{
        font-weight: bolder;
    }

</style>