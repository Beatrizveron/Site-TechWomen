@extends('layouts.main')

@section('content')
<div id = "slider">
        <div class = "container">
          <div  class = "row">
            <div class= "col-md-6 text-center">
              <h1> Network</h1>
            </div>
            <div class= "col-md-6 text-right " >
           <img src="imagens/devfocus.svg"  width="500" height="500">
            </div>
        </div>
      </div>
      <div id = "introdution">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-secondary" role="alert">
                        <h3 class="mb-4">Propósito</h3>
                        <p> Este espaço foi idealizado com o intuito de, gerar opotunidades 
                        trabalhistas na área tecnológica para as mulheres da cidade de Jardim-MS e região, que identificam-se 
                        com a área. Nessa seção são exibidas as vagas de emprego disponibilizadas 
                        por algumas empresas da região ou fora. A empresa pode indicar a vaga respondendo o formulário disponível logo abaixo. 
                        </p>
                        <br>
                        <p>Caso o usuário do site se encaixe nos requisitos necessários da vaga, basta entrar em 
                        contato com a empresa pelos meios informados na vaga...</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id = "cad_empresa">
        <div class="container">
            <div class="row">
                <div class="col-md-12" class="align-self-center">
                    <div class="card w-100" >
                        <div class="card-body">
                            <h3 class="card-title mb-4">Cadastre sua Empresa Aqui!</h3>
                            <p class="card-text">Informe os requisitos das vagas disponíveis a partir deste formulário. Após responder o formulário os dados serão exibidos com os 
                            requisitos e demais informações logo abaixo. </P>
                        
                            <a href ="/formvaga" class = "btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2"> Cadastre sua empresa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="network" class="block py-10">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
            <h2 class="mb-4"><i class="bi bi-briefcase-fill"></i> Vagas:</h2>
            <p>Os interessados deverão entrar em contato com a empresa. </p>
               
                    <h2>Empresa XX</h2>
                    <p>Uma breve descrição...</p>
    </div>
    <div class="col-4" class="campo">
        <div class="card">
            <div class="card-body">
                <h2 class="title text-center">Descrição da vaga </h2> 
                <ul>
                    <li>atua na confecção de sites</li>
                    <li>front-end</li>
                    <li>habilidades avançadas em php</li>
               </ul>
            </div>
        </div>               
    </div>
    <div class="col-4" >
        <div class="card">
            <div class="card-body">
                <h2 class="title text-center">Requisitos</h2>
                <ul>
                    <li>Ensino superior </li>
                    <li>maior de idade</li>
                    <li>disponobilidade para trabalhar home office</li>
                </ul>
            </div>
        </div> 
    </div>
    <div class="col-4" >
        <div class="card">
            <div class="card-body">
              <h2 class="title text-center">Benefícios</h2>
                <ul>
                    <li>trabalhar de casa  </li>
                    <li>vale refeição</li>
                    <li>plano de saude incluso</li>
                </ul>
            </div>
        </div> 
    </div>
</div>
</div>
</div>
    <div id="network" class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Empresa XX</h2>
                    <p>Uma breve descrição...</p>
                </div>
    <div class="col-4" class="campo">
        <div class="card">
            <div class="card-body">
                <h2 class="title text-center">Descrição da vaga </h2> 
                <ul>
                    <li>atua na confecção de sites</li>
                    <li>front-end</li>
                    <li>habilidades avançadas em php</li>
                </ul>
            </div>
        </div>               
    </div>
    <div class="col-4" >
        <div class="card">
            <div class="card-body">
                <h2 class="title text-center">Requisitos</h2>
                <ul>
                  <li>Ensino superior </li>
                  <li>maior de idade</li>
                  <li>disponobilidade para trabalhar home office</li>
               </ul>
            </div>
        </div> 
    </div>
    <div class="col-4" >
        <div class="card">
            <div class="card-body">
                <h2 class="title text-center">Benefícios</h2>
                <ul>
                  <li>trabalhar de casa </li>
                  <li>vale refeição</li>
                  <li>plano de saude incluso</li>
               </ul>
            </div>
        </div> 
    </div>
</div>
</div>       
</div>
@endsection


