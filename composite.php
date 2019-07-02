Composite Menus
<pre>

<?php

use Headfirst\Composite\Menu;
use Headfirst\Composite\MenuItem;
use Headfirst\Composite\Waitress;

require_once 'bootstrap.php';
 $pancakeHouseMenu = new Menu('PANCAKE HOUSE MENU', 'Breakfast');
 $dinerMenu = new Menu('DINER MENU', 'Lunch');
 $cafeMenu = new Menu('CAFE MENU', 'Dinner');
 $dessertMenu = new Menu('DESSERT MENU', 'Dessert of course!');

 $allMenus = new Menu('ALL MENUS', 'All menus combined');

 $allMenus->add($pancakeHouseMenu);
 $allMenus->add($dinerMenu);
 $allMenus->add($cafeMenu);

$dinerMenu->add(new MenuItem('Pasta',
    'Spaghetti with Marinara Sauce, and a slice of sourdough bread',
    true, 3.89));

$dinerMenu->add($dessertMenu);

$dessertMenu->add(new MenuItem('Apple Pie',
    'Apple Pie with a flaky crust, topped with vanilla ice cream',
    true,
    1.59));

$pancakeHouseMenu->add(new MenuItem('K&B\'s Pancake Breakfast',
    'Pancakes with scrambled tofu, and toast',
    true,
    2.99));

$cafeMenu->add(new MenuItem('Veggie Burger and Air Fries',
    'Veggie burger on a whole wheat bun, lettuce, tomato, and fires',
    true,
    3.99));

$dinerMenu->add(new MenuItem("Vegetarian BLT",
    "(Fakin’) Bacon with lettuce & tomato on whole wheat", true, 2.99));
$dinerMenu->add(new MenuItem("BLT",
    "Bacon with lettuce & tomato on whole wheat", false, 2.99));


$waitress = new Waitress($allMenus);

$waitress->printMenu();
$waitress->printVegetarianMenu();

?>

</pre>