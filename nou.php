<?php
echo "Canvis combinats de MAIN i DEVELOP.";
?>

<?php
/**
 * Script nou.php
 *
 * Aquest script mostra informació bàsica d'un producte.
 * 
 * @author Joan Vicens
 * @version 1.0
 */

/**
 * Retorna informació sobre un producte.
 *
 * @param string $nom Nom del producte.
 * @param float $preu Preu del producte.
 * @return string Informació del producte.
 */
function mostrarProducte(string $nom, float $preu): string {
    return "Producte: $nom, Preu: $preu €";
}

// Exemple d'ús
echo mostrarProducte("Laptop", 1200.00);
?>
