<?php
// Controllers/AllUsers.php
 ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
class AboutUs extends Controller {
    public static function GetAllUsers() {
 
        foreach (AboutUs::GetAllUsers() as $user) {
    echo $user['username'];
}
    }
}
?>