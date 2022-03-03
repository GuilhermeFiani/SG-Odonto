@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">
                Nome do Trabalho
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">
                Um site de gestão de uma clínica odontológica
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="offset-md-1 col-md-11">
            <h4>Titulo</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
    <div class="row">
        <div class="offset-md-1 col-md-3">
            <img src="https://uploads.metropoles.com/wp-content/uploads/2022/01/28135311/170332229_518813559122192_6312887425497146232_n.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-md-8">
            <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique [...]” </p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <hr class="col-md-12" id="recursos">
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Recursos</h1>               
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Este tópico apresenta algumas funcionalidades do trabalho</h2>
        </div>
    </div>
    <div class="row">
        <ul class="list-inline">
            @for ($i = 0; $i < 20; $i++)
                <li class= "list-inline-item offset-md-1 col-md-2 text-center m-2">Ponto {{$i+1}}</li>
            @endfor
        </ul>
    </div>
</div>


@endsection
