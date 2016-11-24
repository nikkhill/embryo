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
<div class="row">
    <div class="col-lg-6">
        <h2>
            Welcome to BITS Embryo!
        </h2>
    </div>     
    <div class="col-lg-6">
        <form action="login.php" method="post">
            <fieldset>
                <div class="form-group">
                    <input autofocus class="form-control" name="id" placeholder="ID: f20XXXXX" type="text"/>
                </div>
                <div class="form-group">
                    <input class="form-control" name="password" placeholder="Password" type="password"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Log In</button>
                </div>
            </fieldset>
        </form>
        <div>
            or <a href="register.php">register</a> for an account
        </div>
    </div>        
</div>
