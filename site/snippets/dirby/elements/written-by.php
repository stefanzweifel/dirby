<?php

    $user = $site->users()->find($object->author());

    if ($user->firstName() == "") {
        $name = $user->username();
    } else {
        $name = $user->firstName() . " " . $user->lastName();
    }

?>
<small>written by <mark><i><?php echo $name; ?></i></mark></small>