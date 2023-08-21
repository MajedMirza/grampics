<?php
require_once "../init.php";
if (Input::exists()) {
    if (isset($_POST['search']) && !empty($_POST['search'])) {
        $search = escape($_POST['search']);
        $users = $LoadFromUser->search($search);
        if (count($users) === 0) {
            echo '<ul>
            <li class="mention-individuals">
            <div> No Resault Found</div>
            </li>
            </ul>';
        }
        if (!empty($users)) {
            echo '<ul>';
            foreach ($users as $user) {
                echo '<ul class="mention-individuals">
            <a href="' . url_for('profile/' . $user->username) . '"class=mention-link">
                <img src="' . url_for($user->profileImage) . '" alt="' . $user->fullName . '" >
                <div class="mention-name"> ' . $user->fullName . '</div>
            </a>
            </li>';
            }
            echo '</ul>';
        }
    }
}
