# Currencies Converter

Scripting

## update connect.php with your DB data

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "currency";

```
import currency.sql to your MySQL db
```

## Cronjobs


If you'd like to get data automacally to your DB you can set up the cronjobs with this command:

```
0 17 * * *	cd /path/to/currencies; node usd.js > /dev/null; /usr/local/bin/php -f insert.php > /dev/null
```

In this case it will execute the job everyday at 5pm.


Talles Amadeu  
2022
