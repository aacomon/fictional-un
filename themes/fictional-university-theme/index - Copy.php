<?php
// function myFirstFunction(){
//     echo "<p>Hello this is my first function";
// }

// myFirstFunction();

// function greet($name, $color) {
//     echo "<p>Hi my name is $name is my favorite color is $color</p>";
// }

// greet('John', 'blue');
// greet('Jane', 'red');

// $names = array('tony', 'jane', 'john');

// $count = 1;

// while($count < 101) {
//     echo "<li>$count</li>";
//     $count++;
// }

// $count = 0;

// while($count < count($names)){
//     echo "<li>Hi my name is $names[$count] </li>";
//     $count++;
// }
//
?>
<h1>this is the header area</h1>
<?php 
while(have_posts()){
    the_post();
?>
<h2><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h2>
<?= the_content(); ?>
<hr>

<?php } ?>

<p>footer</p>


