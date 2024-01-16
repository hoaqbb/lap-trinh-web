<?
    class User{
        public $id;
        public $username;
        public $password;

        //Phương thức khởi tạo
        public function __construct($username, $password){
            $this->username = $username;
            $this->password = $password;
        }

        //Phương thức kiểm tra nhập dữ liệu
        protected function validate(){
            $rs = $this->username != '' && $this->password != '';
            return $rs;
        }

        //Phương thức chứng thực người dùng
        public static function authenticate($conn, $username, $password){
            $sql = "select * from users where username=:username";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':username', $username, PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            $stmt->execute();
            $user = $stmt->fetch();

            if($user){
                $hash = $user->password;
                return password_verify($password, $hash);
            }
        }

        public function addUser($conn){
            if($this->validate()){
                //Tạo câu lệnh insert chống SQL Injection
                $sql = "insert into users(username, password)
                        value(:username, :password);";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':username', $this->username, PDO::PARAM_STR);
                $hash = password_hash($this->password, PASSWORD_DEFAULT);
                $stmt->bindValue(':password', $hash, PDO::PARAM_STR);
                return $stmt->execute();
            } else{
                return false;
            }
        }
    }
?>