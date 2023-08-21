<?php
require_once "core/init.php";
if (!loggedIn()) {
    Redirect::to('login.php');
}

$user=$LoadFromUser->getUserDataFromSession();
require "shared/header.php";
?>
<div class="profile-user-id" data-userid="<?php echo $user->user_id ?>" data-profileid="<?php echo $user->user_id ?>" ></div>
<?php require_once "shared/global.header.php"; ?>
<script src="public/js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="public/js/common.js"></script>