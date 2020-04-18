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
        
        $p[0] = new Gafanhoto("Jose", 22, "M", "Jose");
        $p [1]= new Gafanhoto("Maria", 19, "F", "Maria");
        
        $vis[0] = new Visualizacao($p[0], $v[2]);
         $vis[1] = new Visualizacao($p[0], $v[1]);
         
         $vis[1]->avaliar();
         $vis[1]->avaliarPorc(85);
        print_r($vis[1]);
        /*print_r($v);
        print_r($p);*/
        
        ?>
        </pre>
    </body>
    
</html>
