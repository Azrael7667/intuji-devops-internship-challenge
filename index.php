<?php
require 'src/HelloInterface.php'; // Ensure the interface is loaded
require 'src/Hello.php';          // Load the Hello class

$hello = new Silarhi\Hello();     // Adjust the namespace accordingly
echo $hello->sayHello();

