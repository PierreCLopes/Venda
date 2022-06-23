@extends("layout")

@section('titulo')
    Início
@stop

@section('conteudo')
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Bem vindo!</h1>
          <h2>CRUD desenvolvido utilizando Laravel</h2>
          <br>
          <br>
          <h2>Conheça os desenvolvedores:</h2>
          <h2><a target="_blank" href="https://github.com/PierreCLopes" class="text-decoration-none text-secondary">Pierre Capistrano Lopes</a></h2>
          <h2><a target="_blank" href="https://github.com/juniorodevandro" class="text-decoration-none text-secondary">Evandro Rode Junior</h2></a>
          <br>
          <br>
          <h2>Projeto:</h2>
          <h2><a target="_blank" href="https://github.com/PierreCLopes/Venda" class="text-decoration-none text-secondary">GitHub</a></h2>
        </div>
      </div>
    </div>
  </section>
@stop