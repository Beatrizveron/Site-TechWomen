@extends('layouts.main')

@section('content')

    <form class="py-5">
              <div id="vaga" class="container">
                <div class="card border-dark mb-4" style="max-width: 40rem;">
                  
                  <div class="card-body text-dark">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome da empresa</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="digite o nome da empresa">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descrição da empresa</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="descreva a empresa"></textarea>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descrição da vaga de emprego (ex: setor...)</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="descreva a vaga"></textarea>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Requisitos da vaga (ex: ensino médio completo...)</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="descreva os requisitos"></textarea>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Benefícios da vaga (ex: salário, vale refeição...)</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="descreva os benefícios"></textarea>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Corfirmar os dados</label>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Contato</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email de contato">
               <p> ou </p>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Número de contato">
            </div>
              <div class="col-12">
                <button class="btn  button-primay btn-primary button" type="submit">Enviar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
</div>
    </form>
@endsection
