<?php 

include_once "includes/header.php";
include_once "api/viacep.php";
$address = get_address();


?>

<div class="container">

    <div class="col-lg text-center my-4">
        <h1 class="main-title">Encontre o endreço que procura</h1>
        <p>Basta digitar o CEP e em segundos retornamos o endereço completo</p>
    </div>

    <div class="col-lg-12">
        <form action="index.php" method="POST">

          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="cep">CEP</label>
              <input type="text" name="cep" id="cep" class="form-control" value="<?php echo $address->cep; ?>">
            </div>

            <div class="form-group col-md-6">
              <label>Endereço</label>
              <input type="text" name="endereco" id="endereco" readonly class="form-control" value="<?php echo $address->logradouro; ?>">
            </div>

            <div class="form-group col-md-4">
              <label>Bairro</label>
              <input type="text" name="bairro" id="bairro" readonly class="form-control" value="<?php echo $address->bairro; ?>">
            </div>

            <div class="form-group col-md-4">
              <label>Cidade</label>
              <input type="text" name="cidade" id="cidade" readonly class="form-control" value="<?php echo $address->localidade; ?>">
            </div>

            <div class="form-group col-md-2">
              <label>Estado</label>
              <input type="text" name="estado" id="estado" readonly class="form-control" value="<?php echo $address->uf; ?>">
            </div>

            <div class="form-group col-md-2">
              <label>Código IBE</label>
              <input type="text" name="ibge" id="ibge" readonly class="form-control" value="<?php echo $address->ibge; ?>">
            </div>

          </div>
         
            <button type="submit" class="btn btn-primary buscar">Buscar</button>
            <button type="button" class="btn btn-success limpar">Limpar</button>
        </form>
    </div>

   

</div>

<?php 

include_once "includes/footer.php";

?>
