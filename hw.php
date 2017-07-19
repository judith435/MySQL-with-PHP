<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Memo Board</title>
        <link rel="stylesheet"
           href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
           integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
           crossorigin="anonymous">
        <!-- site css file placed after bootstrap files to enable overriding of bootstrap styles --> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="hw.css"/> 
    </head>
    <body>
        <div class="form-group">
            <label for="sel1">Select list:</label>
            <select class="form-control" id="sel1">
                <?php
                    $host = '127.0.0.1';
                    $db   = 'test';
                    $user = 'root';
                    $pass = '';
                    $charset = 'utf8';

                    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
                    $opt = [
                        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_EMULATE_PREPARES   => false,
                    ];
                    $pdo = new PDO($dsn, $user, $pass, $opt);

                    $stmt = $pdo->query('select manufacturer from l40_keyboards;');
                    while ($row = $stmt->fetch())
                    {
                        echo "<option>" . $row['manufacturer'] . "</option>";
                    }

                ?>
            </select>
        </div>


    </body>
</html>

