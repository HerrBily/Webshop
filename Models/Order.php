<?php
// Hier wird die class ORDER angelegt.
class Order
{
// werden die variablen public gesetzt.
    public $id;
    public $total_price;
    public $delivery_address_id;
    public $payment_id;
    public $user_id;
    public $crdate;
    public $products;
    public $status = 'open';
    public $deleted = 0;
// Bei dieser Funktion werden die Variablen mit den richtigen Arrays befüllt und in eine Variable gespeichert.
    public function fill ($dbResult)
    {
        $this->id = $dbResult['id'];
        $this->total_price = $dbResult['total_price'];
        $this->delivery_address_id = $dbResult['delivery_address_id'];
        $this->payment_id = $dbResult['payment_id'];
        $this->user_id = $dbResult['user_id'];
        $this->crdate = $dbResult['crdate'];
        $this->products = $dbResult['products'];
        $this->status = $dbResult['status'];
        $this->deleted = $dbResult['deleted'];

        return $this; // <-- haben wir überall anders noch nicht gemacht :D
    }

    public function getProductsArray () {
        return json_decode($this->products);
    }
// Die Funktion befüllt mehrere. 
    public static function fillMultiple (array $dbResult)
    {
        $orders = [];

        foreach ($dbResult as $order) {
            $o = new Order();
            $o->fill($order);

            $orders[] = $o;
        }

        return $orders;
    }
// Bei dieser Funktion werden alles aus der orders Tabelle genommen.
    public static function all ()
    {
        $db = new DB();

        $result = $db->query('SELECT * FROM orders WHERE deleted != TRUE');
        return self::fillMultiple($result);
    }

    /**
     * Einzelnes Model (Product) abfragen
     *
     * @param int $id
     *
     * @return Product
     */
  
// Die FIND Funktion sucht die ID von der Datenbanktabelle orders.
    public static function find (int $id)
    {
        $db = new DB();

        $result = $db->query('SELECT * FROM orders WHERE id = ?', [
            'i:id' => $id
        ]);

        $o = new Order();
        $o->fill($result[0]);

        return $o;
    }
// Hier werden alle ids gesucht.
    public static function getByIds (array $ids)
    {
        $db = new DB();

        $ids = implode(',', $ids);

        $result = $db->query("SELECT * FROM orders WHERE id IN ({$ids})", []);  // <-- quick und dirty!

        return self::fillMultiple($result);
    }
// Bei dieser Funktion wird gespeichert oder ein Update wird asugeführt.
    public function save ()
    {
        $db = new DB();

        if (isset($this->id) && !empty($this->id)) {
            $db->query("UPDATE orders SET total_price=?, delivery_address_id=?, payment_id=?, user_id=?, products=?, status=?, deleted=? WHERE id = ?", [
                'd:total_price' => $this->total_price,
                'i:delivery_address_id' => $this->delivery_address_id,
                'i:payment_id' => $this->payment_id,
                'i:user_id' => $this->user_id,
                's:products' => $this->products,
                's:status' => $this->status,
                'i:deleted' => $this->deleted,
                'i:id' => $this->id
            ]);
        } else {
            $db->query("INSERT INTO orders SET total_price=?, delivery_address_id=?, payment_id=?, user_id=?, products=?, status=?, deleted=0", [
                'd:total_price' => $this->total_price,
                'i:delivery_address_id' => $this->delivery_address_id,
                'i:payment_id' => $this->payment_id,
                'i:user_id' => $this->user_id,
                's:products' => $this->products,
                's:status' => $this->status
            ]);
            $result = $db->query("SELECT * FROM orders ORDER BY id DESC LIMIT 1");
            $this->fill($result[0]);
        }
        return $this;
    }
}