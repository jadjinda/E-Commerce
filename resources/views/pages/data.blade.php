<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Database config</title>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>
     <?php
         if(DB::connection()->getPdo()){
             echo "Successfully connected to DB and DB Name is".DB::connection()->getDatabaseName();
         }
     ?>
</body>

</html>
