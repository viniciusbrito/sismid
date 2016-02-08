@extends('app')
@section('content')
    @yield('content')
    {!! Breadcrumbs::render('sobreSismid') !!}


            <p class="text-justify">

                Criado em 2005 com o objetivo de acompanhar o avanço das ações de inserção da população na sociedade da informação, o MID oferece o mapeamento dos Pontos de Inclusão Digital
                (PID) instalados no Brasil. O levantamento realizado abrange os programas, projetos e ações desenvolvidos pelo governo e pela sociedade civil organizada em todo o país.
                A fim de gerenciar a atualização dos PIDs e produzir relatórios e indicadores, o mapa é apoiado por um sistema de informação (SisMID), que registra, em sua base de dados, os
                pontos de inclusão instalados no Brasil, as estatísticas e a base de programas, projetos e ações de inclusão digital no país.
            <br/><br/>
               <strong> O que é o SisMID?</strong><br/>
                É uma base de dados para cadastro e análise de programas, projetos e ações de inclusão digital e seus respectivos pontos existentes nos municípios brasileiros com o objetivo de
                mostrar a diversidade das iniciativas de inclusão digital.
                <br/><br/>
                <strong>E o que é um PID?</strong><br/>
                É um local dotado de computadores para acesso gratuito, conectados à Internet, que proporcionam o desenvolvimento de habilidades cognitivas por meio do acesso à informação,
                criação de conteúdos, entretenimento e comunicação com outras pessoas. Os PIDs incluem telecentros, infocentros, centros de inclusão digital, laboratórios de informática em
                escolas públicas e projetos de extensão em instituições relacionadas à inclusão digital.
                <br/><br/>
                <strong>Produtos e Serviços do MID</strong><br/>
                <ul>
                <li>
                Sistema de Apoio ao MID (SisMID): possui recursos de geração de relatórios e estatísticas atualizadas de dados sobre os PIDs. Este sistema garante controle e o tratamento dos dados que serão visualizados por meio do Portal.
                </li>
                <li>
                Banco de Dados: reúne todas as informações coletadas e enviadas pelos agentes do governo e pela sociedade civil sobre PID, e também sobre programas, projetos e ações de inclusão digital.
                </li>
                <li>
                Portal de Inclusão Digital: divulga informações e conteúdos para download sobre inclusão digital, e apresenta o mapa contendo todos os possíveis PIDs localizados geograficamente <a href="http://inclusao.ibict.br">(http://inclusao.ibict.br)</a>
                </li>
                <li>
                Repositório de Inclusão Digital: reúne uma base de dados on-line, de maneira organizada, e a produção de documentos da inclusão digital no país.
                </li>
                <li>
                Projeto MID / BI - sistema analítico de inteligência competitiva para a geração de relatórios e painéis gerenciais de apoio à tomada de decisão do MID.
                </li>
                </ul>



            </p>

    </div>

    @yield('script')

@endsection