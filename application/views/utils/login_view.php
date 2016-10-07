<html>
    <head>
        <title>Login</title>
    </head>
    
    <body>
        <form method="POST" action="<?php echo base_url(); ?>admin/connexion">
            <input type="text" name="login" />
            <input type="password" name="password"/>
            <input type="submit" value="login"/>
        </form>
    </body>
</html>

