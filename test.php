<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu-container">
        <h1>Mon Panier</h1>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Initialiser un tableau pour stocker les éléments du panier
            $cart = [];

            // Parcourir chaque plat et vérifier si une quantité a été spécifiée
            for ($i = 1; $i <= 3; $i++) {
                $nameKey = "n$i";
                $priceKey = "p$i";
                $quantityKey = "q$i";

                // Vérifier si les champs existent et si une quantité a été spécifiée
                if (isset($_POST[$nameKey], $_POST[$priceKey], $_POST[$quantityKey]) && $_POST[$quantityKey] > 0) {
                    $item = [
                        'name' => $_POST[$nameKey],
                        'price' => $_POST[$priceKey],
                        'quantity' => $_POST[$quantityKey]
                    ];
                    // Ajouter l'élément au panier
                    $cart[] = $item;
                }
            }

            // Afficher les éléments du panier (pour le débogage ou comme confirmation)
            if (!empty($cart)) {
                echo '<h2>Votre Panier</h2>';
                foreach ($cart as $item) {
                    echo '<p>';
                    echo '<b>Nom : </b>' . htmlspecialchars($item['name']) . '<br>';
                    echo '<b>Prix : </b>' . htmlspecialchars($item['price']) . ' DT<br>';
                    echo '<b>Quantité : </b>' . htmlspecialchars($item['quantity']);
                    echo '</p>';
                }
            } else {
                echo 'Votre panier est vide.';
            }
        } else {
            echo 'Méthode de requête non valide.';
        }
        ?>
    </div>
</body>
</html>
