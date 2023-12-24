<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadinho Jwt</title>
</head>
<body>
    <div style="text-align: center;font-size:32px">
        <h1>Mercadinho Jwt</h1>
        <h2>Casos de teste</h2>
        <!-- para usar os casos de teste descomente os codigos abaixo: -->
   
<?php
require_once 'Venda.php';
require_once 'Produto.php';


//caso 1 : todos estes dados que foram utilizados estavam aptos para passar
try{
    $product = new Produto();

    $data = [
        'nome' => 'Agua',
        'preco' => 10,
        'quantidade' => 2
    ];
    
    $product->setProduto($data);
    print_r($product->getProduto());

    $venda = new Venda();

    $venda->setVenda($product,2,1);
    $venda->getVenda();

} catch (Exception $e) {
    echo $e;
}
//caso 2 : todos estes dados que foram utilizados estavam aptos para passar
// try{
//     $product = new Produto();

//     $data = [
//         'nome' => 'Areia',
//         'preco' => 20,
//         'quantidade' => 3
//     ];
    
//     $product->setProduto($data);
//     print_r($product->getProduto());

//     $venda = new Venda();

//     $venda->setVenda($product,2,1);
//     $venda->getVenda();

// } catch (Exception $e) {
//     echo $e;
// }
//caso 2 : neste caso eu testei a verificação da quantidade. Caso eu coloque que é menor que 1, ele interrompe o código e lança uma exception
// try{
//     $product = new Produto();

//     $data = [
//         'nome' => 'Erick',
//         'preco' => 10,
//         'quantidade' => 0
//     ];
    
//     $product->setProduto($data);
//     print_r($product->getProduto());

//     $venda = new Venda();

//     $venda->setVenda($product,2,1);
//     $venda->getVenda();

// } catch (Exception $e) {
//     echo $e;
// }

// caso 3 : neste caso eu testei a verificação do nome. Caso eu não coloque nome, ele irá lançar uma exception e interromper o código.
// try{
//     $product = new Produto();

//     $data = [
//         'nome' => '',
//         'preco' => 10,
//         'quantidade' => 1
//     ];
    
//     $product->setProduto($data);
//     print_r($product->getProduto());

//     $venda = new Venda();

//     $venda->setVenda($product,2,1);
//     $venda->getVenda();

// } catch (Exception $e) {
//     echo $e;
// }
?>
 </div>
</body>
</html>
