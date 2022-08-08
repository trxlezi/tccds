@extends('./paginasti/mainti')

@section('container')

<section class="sobre_curso">
    <div class="container sobre_container">

        <div class="explicacao">
            <h1>Laboratórios</h1>
        <p>
            Temos 6 laboratórios de informática.
            
        </p>
        </div>

        <div class="explicacao">
            <h1>Equipamentos Tecnológicos</h1>
        <p>
            Em cada laboratório temos 20 computadores disponíveis, todos com mouse e teclado.
        
        </p>
        </div>
        
    </div>    
       
        <div class="container turmas">
            <h1>Divisão de Turmas</h1>
                <p>
                    No laboratório a sala é dividida entre turma A e turma B, cada turma contando com metade da sala. 
                    Essa divisão é feita para que os computadores do laboratório comportem a quantidade de alunos e para maior conforto nas aulas.
                    Um sistema para melhor interação e foco durante as aulas do curso, que geralmente se pode ver na plataforma NSA e também na aula presencial, 
                    na qual será melhor explicado.
                    Geralmente as turmas são definidas a partir da ordem de chamada, a qual é alfabética.
                </p>
        </div>
 {{-- ---------------------------------------------------------------------------------- --}}

        <div class="informacoes">
            <div class="container informacoes_adicionais">
                <h1> Informações Adicionais - Ensino Técnico Integrado ao Médio (ETIM) </h1> 
                    <p>
                        Duração: 3 anos<br>
                        Vagas: 40<br>
                        Coordenador: Prof. Elaine Cristina de Almeida<br>
                    </p>
            </div>

            <div class="container tcc">
                <h1>Trabalho de Conclusão de Curso – TCC</h1>
                    <p>
                        No 3º ano, a escola dá aos alunos uma oportunidade de unir tudo que aprenderam, todo o embasamento prático e teórico para construirem e apresentarem um trabalho.
                        Todo o processo irá ser observado, desenvolvido mediante controle, orientação e avaliação docente, trazendo conhecimento do campo de atuação profissional, peculiaridades, 
                        demandas e desafios da área. 
                    </p>

            </div>

            <div class="container avaliacao">
                <h1>Critérios de Avaliação</h1>
                    <p>
                        Ao final de cada série, após análise com o aluno, os resultados serão expressos por uma
                        das menções a seguir, conforme estão conceituadas e operacionalmente definidas:
                    </p>  
            </div>

            <table class=" container table table-bordered table-dark">
                <thead>
                    <tr>
                        <th scope="col">Menção</th>
                        <th scope="col">Conceito</th>
                        <th scope="col">Definição Operacional</th>
                    </tr>
                        </thead>
                            <tbody>
                                 <tr>
                                    <th scope="row">MB</th>
                                        <td>Muito Bom</td>
                                        <td >O aluno obteve excelente desempenho no desenvolvimento
                                            das competências do componente curricular no período</td>   
                                </tr>
                                <tr>
                                    <th scope="row">B</th>
                                        <td>Bom</td>
                                        <td>O aluno obteve bom desempenho no desenvolvimento das
                                            competências do componente curricular no período</td>
                                        
                                </tr>
                                <tr>
                                    <th scope="row">R</th>
                                        <td>Regular</td>
                                        <td>O aluno obteve desempenho regular no desenvolvimento das
                                            competências do componente curricular no período.</td>
                                        
                                </tr>
                                <tr>
                                    <th scope="row">I</th>
                                        <td>Insatisfatório</td>
                                        <td>O aluno obteve desempenho insatisfatório no desenvolvimento
                                            das competências do componente curricular no período</td>
                                </tr>
        
                            </tbody>
            </table>
        
            <div class = "container periodo">
                <h1>Horário Escolar</h1>
                <div class="horario">

                </div>

            </div>
    </div>        
</section> 
@endsection


