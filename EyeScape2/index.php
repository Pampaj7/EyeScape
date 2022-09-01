<?php include("./inc/head.php"); ?>

<h1>LOGIN PAGE</h1>


<div class="box1">
    <div class="logo"><img src="../../../Documentation/Logo/Logo-completoTransparent.png"></div>
    <form action="#" method="post">
        <div class="field-group">
            <span class="fa-user" aria-hidden="true"></span>
            <div class="field">
                <input name="username" id="user" type="text" value placeholder="Username" required>
            </div>
        </div>
        <div class="field-group">
            <span class="fa-lock" aria-hidden="true"></span>
            <div class="field">
                <input name="password" id="pwd" type="password" value placeholder="Password" required>

            </div>
        </div>
        <div class="field">
            <button type="submit"> Login</button>
        </div>
    </form>
</div>

<!-- Struttura -->


<?php include("./inc/footer.php"); ?>

