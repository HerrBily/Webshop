<?php
// Hier wird die class PRODUCT angelegt.
class Product
{
// werden die variablen public gesetzt.
    public $id;
    public $name;
    public $price;
    public $stock;
    public $description;
    public $images = [];
    public $deleted = 0;
// Bei dieser Funktion werden die Variablen mit den richtigen Arrays befüllt und in eine Variable gespeichert.
    public function fill ($dbResult)
    {
        $this->id = $dbResult['id'];
        $this->name = $dbResult['name'];
        $this->description = $dbResult['description'];
        $this->price = $dbResult['price'];
        $this->stock = $dbResult['stock'];
        $this->deleted = $dbResult['deleted'];
        $this->images = explode(',', $dbResult['images']);
    }
// Die Funktion befüllt mehrere. 
    public static function fillMultiple (array $dbResult)
    {
        $products = [];

        foreach ($dbResult as $product) {
            $p = new Product();
            $p->fill($product);

            $products[] = $p;
        }

        return $products;
    }
// Bei dieser Funktion werden alles aus der products Tabelle genommen.
    public static function all ()
    {
        $db = new DB();

        $result = $db->query('SELECT * FROM products WHERE deleted != TRUE');
        return self::fillMultiple($result);
    }

    /**
     * Einzelnes Model (Product) abfragen
     *
     * @param int $id
     *
     * @return Product
     */

// Die FIND Funktion sucht die ID von der Datenbanktabelle products.
    public static function find (int $id)
    {
        $db = new DB();

        $result = $db->query('SELECT * FROM products WHERE id = ?', [
            'i:id' => $id
        ]);

        $p = new Product();
        $p->fill($result[0]);

        return $p;
    }
// Hier werden alle ids gesucht.
    public static function getByIds (array $ids)
    {
        $db = new DB();

        $ids = implode(',', $ids);

        $result = $db->query("SELECT * FROM products WHERE id IN ({$ids})", []);  // <-- quick und dirty!

        return self::fillMultiple($result);
    }
// Bei dieser Funktion wird gespeichert oder ein Update wird asugeführt.
    public function save ()
    {
        $db = new DB();

        $images = implode(',', $this->images);

        if (isset($this->id) && !empty($this->id)) {
            $db->query("UPDATE products SET name=?, price=?, stock=?, description=?, images=?, deleted=? WHERE id = ?", [
                's:name' => $this->name,
                'd:price' => $this->price,
                'i:stock' => $this->stock,
                's:description' => $this->description,
                's:images' => $images,
                'i:deleted' => $this->deleted,
                'i:id' => $this->id
            ]);
        } else {
            $db->query("INSERT INTO products SET name=?, price=?, stock=?, description=?, images=?, deleted=0", [
                's:name' => $this->name,
                'd:price' => $this->price,
                'i:stock' => $this->stock,
                's:description' => $this->description,
                's:images' => $images,
            ]);
        }
    }

    public function removeImageByPath ($path, $deleteFile = true)
    {
        $_images = [];

        foreach ($this->images as $image) {
            if ($image != $path) {
                $_images[] = $image;
            } else {
                if ($deleteFile === true) {
                    $file = __DIR__ . "/../Assets/$image";
                    unlink($file);
                }
            }
        }

        $this->images = $_images;
    }

    public function addImage ($path)
    {
        $needle = 'assets/';
        $indexOfAssets = strpos($path, $needle);
        $pathWithoutAssets = substr($path, $indexOfAssets + strlen($needle));
        $this->images[] = $pathWithoutAssets;
    }
}

?>