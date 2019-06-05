<?PHP
// this processes my databases

try
{
  $dbUrl = getenv(' postgres://smhkqqdzgjssjg:77b31a7b189b95b83ec22277daa1250a380c43f2906094451eb1b3a708f7e06a@ec2-54-225-106-93.compute-1.amazonaws.com:5432/dcvq7k5qiu42ce');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

?>
