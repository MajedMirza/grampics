<?php
require_once "core/init.php";

$title = "Page Not Found | Grampics";
$keywords = "error, 404, document not found, webpage not found, Grampics, Share and capture world's moments";

require "shared/header.php";
?>
<header class="error--header">
    <nav class="error--header--content">
        <div class="error--header--left">
            <a href="<?php echo url_for('index'); ?>" class="header__home-error">
                <img src="<?php echo url_for('public/logo/grampics.png'); ?>" alt="Site Logo">
            </a>
        </div>
        <div class="error--header--right">
            <?php if (loggedIn()) { ?>
                <a href="<?php echo url_for('profile'); ?>" class="profile_button">
                    Profile Page
                </a>
                <a href="<?php echo url_for('index'); ?>" class="error--link">
                    Try Going to Homepage
                </a>
            <?php } else { ?>
                <a href="<?php echo url_for('login'); ?>" class="error--link">
                    Sign In
                </a>
                <a href="<?php echo url_for('register'); ?>" class="error--link">
                    Register
                </a>
            <?php } ?>
        </div>
    </nav>
</header>
<div class="error--container">
    <div class="error-content">
        <h1>Sorry this page isn't available</h1>
        <p>The link you followed may be broken, or the page may have been removed. <a href="<?php echo url_for('index'); ?>">Go back to Grampics</a></p>
        <img src="<?php echo url_for('public\404.png'); ?>" alt="404">
    </div>
</div>