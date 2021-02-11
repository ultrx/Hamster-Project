<!---NavBar-->
<nav class="navbar">
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <label class="logo">
        <a href="index.php">
            <img class="logo" src="images/bardh.png"/>
        </a>
    </label>
    <ul>
        <li><a id="linav" class="<?php if($page=='home'){echo 'activenav';}?>" href="index.php">HOME</a></li>
        <li><a id="linav" class="<?php if($page=='products'){echo 'activenav';}?>" href="products.php">PRODUCTS</a></li>
        <li><a id="linav" class="<?php if($page=='news'){echo 'activenav';}?>" href="news.php">NEWS</a></li>
        <li><a id="linav" class="<?php if($page=='contact'){echo 'activenav';}?>" href="contact.php">CONTACT</a></li>
        <li><a id="linav" class="<?php if($page=='about'){echo 'activenav';}?>" href="about.php">ABOUT</a></li>
        <li><a id="linav" class="<?php if($page=='login'){echo 'activenav';}?>" href="login-form.php">LOG IN</a></li>
    </ul>
</nav>