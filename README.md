Webshop Gintastic

Ist ein Shop der Gins verkauft und seine Leidenschaft nur für Gin hat.

Admin Einloggen
admin-email: fabio.bily@gmail.com
passwort: password

In der config.php ist die Datenbankverbindung


Frontend
Die Webseite besteht nur für den normalen User aus 10 Seiten.

home.php = die Homeseite
products.list.php = die Produktseite
product.details.php = die Produktdetailseite
cart.php = die Warenkorbseite
login.php = die Loginseite
signup.php = die Regestrierungsseite

Checkoutprozess
addressForm.php = eine Formularseite für die Adresse
paymentForm.php = eine Formularseite für das Zahlungsmittel
summary.php = die Übersichtseite für die Bestellung
thankyou.php = eine Seite nachdem man die Bestellung aufgegeben hat

für den Admin gibt es noch 7 weitere Seiten

Adminbereich
index.php = die Admin Übersichtseite
order.list.php = die Bestellübersicht
products.list.php = die Produktübersicht
products.edit.php = die Produkt ändern Seite
products.add.php = die Produkt hinzufügen Seite
users.list.php = die Userübersicht
users.edit.php = die User ändern Seite

Header und Footer wurden in allen Seiten implementiert. Außer beim Admin da wird ein anderer Header verwendet


Backend
Die Datenbank heißt webshop_gintastic und hat 7 Tabellen

admin_users = dort wird der Admin gespeichert

adress = wird die Adresse gespeichert

carts = die user_id mit der richtigen product_id gespeichert

orders = wird die Bestellung gespeichert

payments = wird die Zahlung gespeichert

products = werden die Produkte gespeichert

users = werden die Benutzer gespeichert


