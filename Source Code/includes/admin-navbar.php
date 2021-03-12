<!---Admin NavBar-->
<nav class="navbar">
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <label class="logo">
        <a href="../dashboard/manage-users.php">
            <img class="logo" src="../images/bardh.png"/>
        </a>
    </label>
    <ul>
        <li><a id="linav" class="<?php if($page=='manage-users'){echo 'activenav';}?>" href="../dashboard/manage-users.php">MANAGE USERS</a></li>
        <li><a id="linav" class="<?php if($page=='manage-products'){echo 'activenav';}?>" href="../dashboard/manage-products.php">MANAGE PRODUCTS</a></li>
        <li><a id="linav" class="<?php if($page=='manage-news'){echo 'activenav';}?>" href="../dashboard/manage-news.php">MANAGE NEWS</a></li>
        <li><a id="linav" class="<?php if($page=='manage-contact'){echo 'activenav';}?>" href="../dashboard/manage-contact.php">MANAGE CONTACT</a></li>
        <li><a id="linav" href="../logout.php" >LOG OUT</a></li>
    </ul>
</nav>