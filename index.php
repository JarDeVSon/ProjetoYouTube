<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Treino de PHP </title>
    </head>
    
    <body>
        <pre>
        <?php
        // put your code here
        spl_autoload_register (function ($classNome){
        require_once $classNome . '.php';
        });
        
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de PHP");
        
        $p = new Pessoa("Jose", 22, "M");
        print_r($v);
        print_r($p);
        
        ?>
        </pre>
    </body>
    
</html>
