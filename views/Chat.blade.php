@extends('layouts.main')

@section('content')

    <div id = "slider">
        <div class = "container">
          <div  class = "row pt-5">
            <div class= "col-md-6 text-center">
              <h1>Chat</h1>
            </div>
            <div class= "col-md-6 text-right " >
                <img src="imagens/undraw_Share_opinion_re_4qk7 (2).svg" width="500" height="500">
            </div>
        </div>
      </div>

      <div id = "Info">
        <div class = "container" >
          <div  class = "row" >
            <div class= "col-md-12 align-self-center" >
              <div class="alert alert-secondary" role="alert">
                    <h3 class="mb-4">Interaja conosco</h3>
                    <p class="mb-4">Essa seção destina-se para você deixar seu comentário sobre o nosso site, feedback
                      positivo ou negativo, contar a sua experiência de vida com a tecnologia, pedir conselhos 
                      sobre a área tecnológica, ou até mesmo dar dicas pra quem quer inserir-se na área.
                    </div>
                    <h5 class="mb-4">Entre em contato através do formulário abaixo:</h5>
                  </div>
               </div>    
            </div>

            <form>
              <div class="container">
                <div class="card border-dark mb-3" style="max-width: 40rem;">
                  <div class="card-header">Formulário</div>
                  <div class="card-body text-dark">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="digite seu nome">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="@email.com">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Corfirmar meus dados</label>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Área de texto</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="escreva seu comentário"></textarea>
              </div>
              <div class="col-12">
                <button class="btn  button-primay btn-primary button" type="submit">Enviar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>

      <div class="coment py-5">
        <div class = "container">
          <div  class = "row">
            <h3 class="mb-4"><i class="bi bi-chat-left-text"></i> Comentários</h3>
          </div>
        </div>  

        <div class = "container">
          <div  class = "row">
             <div class="card">
            <div class="card-body">
                    <img src="imagens/undraw_personal_information_re_vw8a.svg" width="100" height="100">
                    </div>
                </div>  
            </div>
        </div>
</div>

@endsection