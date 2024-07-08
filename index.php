<?php

echo "=======================================================\n";
echo "========= GESTOR DE FINANZAS (SECCIÓN GASTOS) =========\n";
echo "=======================================================\n";

echo "OPCIÓN 1. Ingresar productos\n";

$name = readline("Ingresar nombre del producto: ");
$quantity = readline("Ingresar la cantidad: ");
$price = readline("Ingresar precio unitario del producto: ");

// RESUMEN FINAL
echo "=============================\n";
echo "========= RESUMEN ===========\n";
echo "=============================\n";
echo "Nombre del producto: $name\n";
echo "Cantidad del producto: $quantity unidades\n";
echo "Precio unitario del producto: $price soles\n";
echo "Precio total del producto: " . ($quantity * $price) . " soles\n";
