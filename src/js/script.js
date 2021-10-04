function Adress(){

  this.eventClickButton = () => {

    document.addEventListener('click', event => {
        
        const el = event.target;

        if(el.classList.contains('buscar')) this.validation();
        if(el.classList.contains('limpar')) this.clear();

    });

  };

  this.clear = () => {
    // Limpa os campos de endereço
    this.cep = document.querySelector("#cep");
    this.cep.value = '';

    this.endereco = document.querySelector("#endereco");
    this.endereco.value = '';

    this.bairro = document.querySelector("#bairro");
    this.bairro.value = '';

    this.cidade = document.querySelector("#cidade");
    this.cidade.value = '';

    this.estado = document.querySelector("#estado");
    this.estado.value = '';

    this.ibge = document.querySelector("#ibge");
    this.ibge.value = '';
  }

  this.validation = () => {
    this.cep = document.querySelector("#cep");
    

    if(this.cep.value === ''){
      toastr.error('Preencha o campo CEP para realizar a busca');
    }

    this.isCEP(this.cep.value)
  }


  this.isCEP = (cep) => {

    
   let cepComDigitos = cep.replace(/\D/g, '');
   
   const validcep = /^[0-9]{8}$/;
    console.log(cepComDigitos)
    if (cepComDigitos !== "") {

      if(validcep.test(cepComDigitos)){
        return true
      }else{
        this.cep.value = ''
        toastr.error('CEP inválido');
      }
    
    }

  }


  this.start = () => {
    this.eventClickButton();
  
  }
}


const startApi = new Adress();
startApi.start();

