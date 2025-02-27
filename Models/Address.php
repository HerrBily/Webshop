<?php
// Hier wird die class ADDRESS angelegt.
class Address
{
// werden die variablen public gesetzt.
    public $id;
    public $street;
    public $streetNr;
    public $door;
    public $zip;
    public $city;
    public $country;
    public $name;
    public $user_id;
// Bei dieser Funktion werden die Variablen mit den richtigen Arrays befüllt und in eine Variable gespeichert.
    public function fill ($dbResult)
    {
        $this->id = $dbResult['id'];
        $this->street = $dbResult['street'];
        $this->streetNr = $dbResult['streetNr'];
        $this->door = $dbResult['door'];
        $this->zip = $dbResult['zip'];
        $this->city = $dbResult['city'];
        $this->country = $dbResult['country'];
        $this->name = $dbResult['name'];
        $this->user_id = $dbResult['user_id'];
    }
// Die Funktion befüllt mehrere. 
    public static function fillMultiple (array $dbResult)
    {
        $addresses = [];

        foreach ($dbResult as $address) {
            $a = new Address();
            $a->fill($address);

            $addresses[] = $a;
        }

        return $addresses;
    }
// Die FIND Funktion sucht die ID von der Datenbank tabelle adress.
    public static function find (int $id)
    {
        $db = new DB();

        $result = $db->query('SELECT * FROM adress WHERE id = ?', [
            'i:id' => $id
        ]);

        $a = new Address();
        $a->fill($result[0]);

        return $a;
    }
// Bei dieser Funktion wird gespeichert oder ein Update wird asugeführt.
    public function save ()
    {
        $db = new DB();

        if (isset($this->id) && !empty($this->id)) {
            $db->query("UPDATE adress SET street=?, streetnr=?, door=?, zip=?, city=?, country=?, name=?, user_id=? WHERE id = ?", [
                's:street' => $this->street,
                's:streetNr' => $this->streetNr,
                's:door' => $this->door,
                's:zip' => $this->zip,
                's:city' => $this->city,
                's:country' => $this->country,
                's:name' => $this->name,
                's:user_id' => $this->user_id,
                'i:id' => $this->id
            ]);
        } else {
            $db->query("INSERT INTO adress SET street=?, streetnr=?, door=?, zip=?, city=?, country=?, name=?, user_id=?", [
                's:street' => $this->street,
                's:streetNr' => $this->streetNr,
                's:door' => $this->door,
                's:zip' => $this->zip,
                's:city' => $this->city,
                's:country' => $this->country,
                's:name' => $this->name,
                's:user_id' => $this->user_id
            ]);
            $result = $db->query("SELECT * FROM adress ORDER BY id DESC LIMIT 1");
            $this->fill($result[0]);
        }
    }
// Hier wird die user_id gesucht.
    public static function findByUser (int $user_id)
    {
        $db = new DB();

        $result = $db->query('SELECT * FROM adress WHERE user_id=?', [
            'i:user_id' => $user_id
        ]);

        return self::fillMultiple($result);
    }
}