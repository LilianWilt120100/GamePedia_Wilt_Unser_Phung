Question 1:

composer require fakerphp/faker


Question 2:

require_once 'vendor/autoload.php';


$faker = Faker\Factory::create();

echo $faker->name();

echo $faker->email();

echo $faker->text();

Question 3:

echo setDate ( int $year , int $month , int $day )
 setTime ( int $hour , int $minute , int $second = 0 , int $microsecond = 0 )