@extends('layouts.app')

@section('content')



<div id="primeira-parte">
    <div class="container">
    
<!--Linha com o título "SGODONTO"-->    
        <div class="row">
            <div class="col-md-12">
                <h1 class="titulo-um text-center">
                    SGODONTO
                </h1>
            </div>
        </div>

<!--Linha com o subtítulo de "Um site de gestão de uma clínica odontológica"-->
        <div class="row">
            <div class="col-md-12">
                <h2 class="subtitulo text-center">
                    Um site de gestão de uma clínica odontológica
                </h2>
            </div>
        </div>

<!--Linha com os dois títulos: Descrição e Resumo -->
        <div class="row">
            <div class="title-conteudo-principal col-md-5 text-center">
                <h4>Descrição</h4>
            </div>
            <div class="title-conteudo-principal offset-2 col-md-5 text-center">
                <h4>Resumo</h4>
            </div>
        </div>

<!--Linha com os dois textos -->
        <div class="row">
            <div class="main-content col-md-5 mb-1"> <!-- main-content cold-md-10 offset-md-1 -->
                <p>O SGODONTO é resultado do desenvolvimento de um trabalho de conclusão de curso, onde a proposta do mesmo é criar um site para gestão de um consultório odontológico, que irá conter funções que facilitam as atividades cotidianas na parte administrativa do estabelecimento, funções estas que são apresentadas logo abaixo.</p>
                <a href="#" id="botao-conferir" class="btn btn-outline-secondary col-md-5 offset-md-3">Conferir trabalho escrito</a>
            </div>
            <div class="legenda col-md-5 offset-2">
                <p>"Este trabalho visa o desenvolvimento de um software para auxiliar a organização das fichas de pacientes em clínicas odontológicas. Dessa forma, o consumo de papel será reduzido, haverá maior facilidade na procura de dados e identificação dos pacientes e no planejamento de tratamentos, assim como horários de consulta. Para a realização deste, primeiramente foi feita uma entrevista com um profissional da área, para saber quais seriam os requisitos deste software. Em seguida, foram analisadas as metodologias, linguagens e sistemas a serem usados para o desenvolvimento do trabalho em si e realizada a procura por referências para comprovar a exatidão dos dados e complementar as informações já adquiridas.”     
                </p>
            </div>
        </div>
    
<br><br><br> 
    </div>
<!--Linha de divisão-->
    <hr class="col-md-12" id="recursos">
</div>

<div class="container">
<br><br><br>

    <div class="row">
        <div class="col-md-6">
            <div class="about-feature mt-30">
                <div class="about-feature-image">
                    <img src="https://i.ibb.co/30C493t/odonto.jpg" alt="odonto">
                </div>
                <div class="about-feature-content">
                    <h2 class="feature-title"><strong>Cuidar da saúde bucal é mais importante do que parece, e manter o local de trabalho organizado é tão essencial quanto.</strong></h2>
                    <p class="text">Confira o novo sistema de gerenciamento de clínica odontológica.</p>
                </div>
            </div>
        </div>

        <div class="topicos col-md-5 offset-1">

            <div class="about-feature-items d-sm-flex mt-30">
                <div class="feature-items-icon">
                    <img class="iconj" src="https://i.ibb.co/qRb6cqf/person-add.png" alt="Icon">
                </div>
                <div class="feature-items-content media-body">
                    <h5 class="item-title">Registre os pacientes de acordo com um prontuário odontológico</h5>    
                    <p class="text">Adicione seus pacientes com a maioria dos campos presentes em uma ficha odontológica!</p>
                </div>
            </div>
            <div class="about-feature-items d-sm-flex mt-30">
                <div class="feature-items-icon">
                    <img class="iconj" src="https://i.ibb.co/HHHcMzC/shopping-cart.png" alt="Icon">
                </div>
                <div class="feature-items-content media-body">
                    <h5 class="item-title">Faça uma análise do estoque de materiais</h5>
                    <p class="text">Gerencie os materias restantes no seu consultório odontológico.</p>
                </div>
            </div>
            <div class="about-feature-items d-sm-flex mt-30">
                <div class="feature-items-icon">
                    <img class="iconj" src="https://i.ibb.co/tzJRGRs/date.png" alt="Icon">
                </div>
                <div class="feature-items-content media-body">
                    <h5 class="item-title">Agende horários dos seus pacientes</h5>
                    <p class="text">Administre o agendamento de seus pacientes, marcando e desmarcando horários</p>
                </div>   
            </div>
            
        </div>
    </div>
</div>
<hr class="col-md-12" id="recursos">
<div class="container">
<br><br><br>

    <div class="row">
        <div class="img-conteudo-principal offset-md-1 col-md-6">
            <img src="https://uploads.metropoles.com/wp-content/uploads/2022/01/28135311/170332229_518813559122192_6312887425497146232_n.jpg" alt="" class="img-fluid">
            <p>O simples sistema com funções de gerenciamento de uma clínica odontológica</p>
        </div>
        <div class="lista-coisas offset-md-1 col-md-3">
            <ul>Coisa 1</ul>
            <ul>Coisa 2</ul>
            <ul>Coisa 3</ul>
        </div>     
    </div>
    
    

    <div class="row">
        <div class="col-md-12">
            <h1 class="conteudo-secundario text-center">Recursos</h1>               
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="conteudo-secundario text-center">Este tópico apresenta algumas funcionalidades do trabalho</h2>
        </div>
    </div>
    <div class="row">
        <ul class="recursos-lista list-inline">
            @for ($i = 0; $i < 8; $i++)
                <li class= "list-inline-item offset-md-1 col-md-2 text-center m-2">Ponto {{$i+1}}</li>
            @endfor
        </ul>
    </div>
</div>


@endsection
