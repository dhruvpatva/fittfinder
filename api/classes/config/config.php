<?phpsession_start();$num_rec_per_page = 20;class configFunction {     private $con;     private $db_name;     public function connect() {          $con = new mysqli("localhost", "root", "", "fittfinder");          if ($con->connect_error) {               throw new Exception("The connection could not be established.<br>" . $con->connect_error);          }          return $con;     }          public function selectDB($db_name, $con) {          return mysqli_select_db($db_name, $con);     }     public function close() {          //$con->close();     }}?>