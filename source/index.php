<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hello World!</title>
    </head>
    <body>
        <h1>Hello World!</h1>
        <div>
            <?php
            
                $newline = "<br>";
            
                echo date("d.m.Y H:m:s").$newline;
                
                //phpinfo();
                
                $database   = $user = $password = "dockerweb";
                $host       = "db";
                
                $connectionstring = "mysql:host={$host};dbname={$database};charset=utf8";
                
                echo    "Connection string: $connectionstring".$newline;
                echo    "User: $user".$newline;
                echo    "Password: $password".$newline;
                
                $connection = new PDO($connectionstring, $user, $password);
                $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
                $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

                if (empty($tables)) {
                    echo "<p>There are no tables in database \"{$database}\".</p>";
                } else {
                    echo "<p>Database \"{$database}\" has the following tables:</p>";
                    echo "<ul>";
                    foreach ($tables as $table) {
                        echo "<li>{$table}</li>";
                    }
                    echo "</ul>";
                }
        ?>
        </div>
    </body>
</html>