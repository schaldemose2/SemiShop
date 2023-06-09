<?php
    $user = new \Lib\User();
    $userInfo = $user->loadUser();
?>

<div class="topnav">
    <div class="menuleft">
        <div class="nav"></div>
        <div class="nav"></div>
        <div class="nav"></div>
    </div>

    <div class="user">
        <span> <?php echo $userInfo['firstName']." ". $userInfo['lastName']?></span>
    </div>
    <div class="dropdown">
        <a href="index.php?signout=true" id="logud">Log ud</a>
    </div>
</div>
