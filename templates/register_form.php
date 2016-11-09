<style>  iframe {
                z-index : -9999;
                position: absolute;
                top : 0;
                left    : 0;
                width   : 100%;
                height  : 100%;
                margin  : 0;
                padding : 0;
                border: 0;
            }
        </style>    
        <iframe src="../templates/anim.html"></iframe> 
<form action="register.php" method="post">
    <fieldset>
        <!-- <div class="form-group">
            <input autofocus class="form-control" name="username" placeholder="Username ?" type="text"/>
        </div>      --> 
        <div class="form-group">
            <input autofocus class="form-control" name="id" placeholder="ID: f20XXXXX?" type="text"/>
        </div>     
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password ?" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="confirmation" placeholder="Confirm Password" type="password"/>
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="phone" placeholder="Phone" type="text"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Register</button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="login.php">log in</a> 
</div>
