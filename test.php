<?php

include("vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Faker\Factory as Faker;  // faker data တွေကို random name/email..လိုချင်တဲ့အခါမှာသုံး


$faker = Faker::create();
$table = new UsersTable(new MySQL);

echo "Sample data:Starting... <br>";
for($i=0; $i<20; $i++){
    $user = $table->insert(
        [
            "name" => $faker->name,
            "email" => $faker->email,
            "phone" => $faker->phoneNumber,
            "address" => $faker->address,
            "password" => "password",
        ]);
    
}

echo "Sample  data: Done <br>";


// $id = $table->insert([
//     "name" => "Daisy",
//     "email" => "daisy@gmail.com",
//     "phone" => "999044099",
//     "address" => "Address",
//     "password" => "password",
// ]);

// echo $id;

#$mysql = new MySQL;
#$db = $mysql->connect();

#$result = $db->query("SELECT * FROM roles");
#print_r($result->fetchAll());

// use Helpers\Auth;
// $user = Auth::check();
// print_r($user);

#use Helpers\HTTP;

#HTTP::redirect('/index.php', 'http=test');

// use Helpers\Auth;
// use Helpers\HTTP;
// use Libs\Database\MySQL;
// use Libs\Database\UsersTable;

// use Faker\Factory as Faker;

// Auth::check();
// HTTP::redirect();

// $db = new MySQL;
// $db->connect();

// $table = new UsersTable;
// $table->insert();

// $faker = Faker::create();
// echo $faker->name;