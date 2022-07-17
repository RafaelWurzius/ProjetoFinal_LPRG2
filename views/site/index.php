<?php

    /** @var yii\web\View $this */


    $this->title = 'SisRef';
?>

<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Bem vindo!</h1>

        <p class="lead">Seja bem vindo ao SisRef, o sistema do refeitorio do IFC.</p>

        <p><a class="btn btn-lg btn-success" href="http://videira.ifc.edu.br/">Acesse IFC-Videira</a></p>
    </div>

    <!-- <div class="body-content">
        <p class="lead">Selecione entre os itens no menu superor e realizar o cadastro ou altere os registros já existentes</p>

    </div> -->
    <div class="jumbotron text-center bg-transparent">
    <p class="lead">Selecione entre os itens no menu superior e realize o cadastro ou altere os registros já existentes</p>
    </div>
</div>
<script>
    function clickMe(){
        var result ="<?php //$this->render('//Alimento/index', []);?>"
        document.write(result);
    }
</script>
