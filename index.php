<?php
#front controller
use App\Utilities\Asset;
use App\Utilities\Url;

include __DIR__."/bootstrap/init.php";

//echo Asset::get_base_url("/css/style.css");

echo Url::current_url();

