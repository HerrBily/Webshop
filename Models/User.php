<?php
// Hier wird die class USER angelegt.
class User
{
// werden die variablen public gesetzt.
    public $id;
    public $name;
    public $email;
    private $password_hash;
    public $deleted = false;
// Bei dieser Funktion werden die Variablen mit den richtigen Arrays befüllt und in eine Variable gespeichert.
    public function fill ($dbResult)
    {
        $this->id = $dbResult['id'];
        $this->name = (isset($dbResult['name']) ? $dbResult['name'] : null);
        $this->email = $dbResult['email'];
        $this->password_hash = $dbResult['password'];
        $this->deleted = (bool)$dbResult['deleted'];
    }
// Die Funktion befüllt mehrere. 
    public static function fillMultiple (array $dbResult)
    {
        $users = [];

        foreach ($dbResult as $user) {
            $u = new User();
            $u->fill($user);

            $users[] = $u;
        }

        return $users;
    }
// Bei dieser Funktion werden alles aus der users Tabelle genommen.
    public static function all ()
    {
        $db = new DB();

        $result = $db->query('SELECT * FROM users WHERE deleted != TRUE');
        return self::fillMultiple($result);
    }
// wird die email gesucht.
    public static function findByEmail (string $email)
    {
        $db = new DB();

        $result = $db->query('SELECT * FROM users WHERE email = ?', [
            's:email' => trim($email)
        ]);

        if (count($result) === 0) {
            return false;
        }

        $user = new User();
        $user->fill($result[0]);
        return $user;
    }
// wird das passwort geprüft
    public function checkPassword (string $password)
    {
        $password = trim($password);
        return password_verify($password, $this->password_hash);
    }
// wenn ein User sich anmeldet wird ein password_hash gesetzt in der Datenbank.
    public function setPassword (string $password)
    {
        $password = trim($password);
        $this->password_hash = password_hash($password, PASSWORD_BCRYPT);
    }

    /**
     * Einzelnes Model (User) abfragen
     *
     * @param int $id
     *
     * @return User
     */

// Die FIND Funktion sucht die ID von der Datenbanktabelle users.
    public static function find (int $id)
    {
        $db = new DB();

        $result = $db->query('SELECT * FROM users WHERE id = ?', [
            'i:id' => $id
        ]);

        $user = new User();
        $user->fill($result[0]);

        return $user;
    }
// Bei dieser Funktion wird gespeichert oder ein Update wird asugeführt.
    public function save ()
    {
        $db = new DB();

        if (isset($this->id) && !empty($this->id)) {
            $db->query("UPDATE users SET name=?, email=?, password=?, deleted=? WHERE id = ?", [
                's:name' => $this->name,
                's:email' => $this->email,
                's:password_hash' => $this->password_hash,
                'i:deleted' => (int)$this->deleted,
                'i:id' => $this->id
            ]);
        } else {
            $db->query("INSERT INTO users SET name=?, email=?, password=?", [
                's:name' => $this->name,
                's:email' => $this->email,
                's:password_hash' => $this->password_hash
            ]);
            $result = $db->query("SELECT * FROM users ORDER BY id DESC LIMIT 1");
            $this->fill($result[0]);
        }
        return $this;
    }
}










