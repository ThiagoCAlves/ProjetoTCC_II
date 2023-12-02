 // <form action="processar_respostas.php" method="post">
        <?php
        
        // Defina o ID do projeto - neste exemplo, o ID do projeto é 1
        $id_projeto = 1;

        // Loop para criar as perguntas
        for ($i = 1; $i <= 10; $i++) {
            echo "<label for='pergunta_$i'>Pergunta $i:</label><br>";
            echo "<input type='text' name='pergunta_$i' id='pergunta_$i'><br><br>";
        }
        ?>
        <input type="hidden" name="id_projeto" value="<?php echo $id_projeto; ?>">
        <input type="submit" value="Enviar Respostas">
    </form>

    <div class="main-page">
		<div class="r3_counter_box" style="height: 2000px; ">
        <form id="etapas">
            <!-- Barra de Progresso -->
            <ul id="barraProgresso">
                <li class="ativo">Te conhecendo</li>
                <li>Conhecendo a Empresa</li>
                <li>PÚBLICO ALVO</li>
                <li>Account Setup</li>
            </ul>
             <!-- Campo -->
             <fieldset>
                <h2 class="titulo-campo">Briefing para Criação de Identidade Visual</h2>
                <h3 class="legenda-campo">Olá e seja muito bem-vindo ao início do processo de criação da sua identidade visual! Esta etapa inicial tem como objetivo reunir todas as informações essenciais que serão fundamentais para desenvolver a identidade visual que melhor representará você ou sua marca. Suas respostas desempenham um papel crucial nesse processo, pois elas serão a base para o sucesso deste projeto.</h3>
                <h3 class="legenda-campo">Nesta etapa do briefing, é recomendável dedicar entre 20 e 30 minutos do seu tempo pra está respondendo as perguntas, sugiro que escolha um momento tranquilo. Se houver mais de uma pessoa envolvida, como um sócio, considerem realizar esta etapa de forma colaborativa, o que ajudará a alinhar as perspectivas e minimizar eventuais confusões. Vamos começar?</h3>
                <h3 align="left" class="pergunta-campo">1 - Por que a empresa tem esse nome? O que ele significa pra você?</h3>
                <input type="text" name="fname" placeholder="Resposta"/>
                <h3 align="left"  class="pergunta-campo">2 - Quais os motivos que te levaram a abrir essa empresa?</h3>
                <input type="text" name="pergunta_numero1" placeholder="Resposta"/>
                <h3 align="left" class="pergunta-campo">3 - Como você vê a empresa em 5 anos ou 10 anos? </h3>
                <input type="text" name="pergunta_numero2" placeholder="Resposta"/>
                <h3 align="left" class="pergunta-campo">4 - Por que você acredita que as pessoas precisam da sua empresa/serviço?</h3>
                <input type="text" name="pergunta_numero2" placeholder="Resposta"/>
                <input type="button" name="next" class="next btn-acao" value="Next"/>
            </fieldset>
            
            <fieldset>
                <h2 class="titulo-campo">Conhecendo a Empresa</h2>
                <h3 align="left" class="pergunta-campo">5 - Há quanto tempo sua empresa existe?</h3>
                <input type="text" name="pergunta_numero3" placeholder="Resposta"/>
                <h3 align="left" class="pergunta-campo">6 - Quais produtos ou serviços sua empresa oferece?</h3>
                <input type="text" name="pergunta_numero4" placeholder="Resposta"/>
                <h3 align="left" class="pergunta-campo">7 - O que faz sua empresa ser especial?</h3>
                <input type="text" name="pergunta_numero5" placeholder="Resposta"/>
                <h3 align="left" class="pergunta-campo">8 - Sua empresa tem algum slogan? Se sim, qual ?</h3>
                <input type="text" name="pergunta_numero6" placeholder="Resposta"/>
                <h3 align="left" class="pergunta-campo">9 - Quais missões, visões e valores da sua empresa? </h3>
                <h3 class="legenda-campo">A missão representa o propósito da empresa, ou seja, sua razão de existir. Ela se relaciona diretamente com o ramo de atuação e o produto ou serviço ofertado.</h3> 
                <h3 class="legenda-campo">Já a visão indica onde a empresa deseja chegar no futuro, ou seja, é aquilo que faz o negócio continuar existindo.</h3> 
                <h3 class="legenda-campo">Os valores são os princípios e a conduta que a empresa deseja seguir para alcançar os objetivos traçados.</h3> 
                <input type="text" name="pergunta_numero6" placeholder="Resposta"/>
                <h3 align="left" class="pergunta-campo">10 - Você diria que sua marca oferece custo-benefício?</h3>
                <input type="text" name="pergunta_numero2" placeholder="Resposta"/>
                <h3 align="left" class="pergunta-campo">11 - Sua empresa tem concorrentes? Quem são? Fale um pouco sobre eles se achar necessário. Coloque nomes e links se puder.</h3>
                <input type="text" name="pergunta_numero3" placeholder="Resposta"/>
                <h3 align="left" class="pergunta-campo">12 - Tua empresa possui alguma fraqueza ? </h3>
                <input type="text" name="pergunta_numero4" placeholder="Resposta"/>
                <h3 align="left" class="pergunta-campo">13 - Seus concorrentes oferecem algo que sua empresa não oferece?</h3>
                <input type="text" name="pergunta_numero5" placeholder="Resposta"/>
                <h3 align="left" class="pergunta-campo">14 -Quais são a(as) empresa(s) de destaque no seu segmento?</h3>
                <input type="text" name="pergunta_numero6" placeholder="Resposta"/>
                <h3 align="left" class="pergunta-campo">15 - Quais marcas você admira e por quê?</h3>
                <input type="text" name="pergunta_numero6" placeholder="Resposta... Ex: Amazon, Apple, Samsung etc.."/>
                <h3 align="left" class="pergunta-campo">16 - Tem alguma marca dentro do seu segmento que você admira?</h3>
                <input type="text" name="pergunta_numero6" placeholder="Resposta"/>
                <input type="button" name="previous" class="previous btn-acao-previous" value="Previous"/>
                <input type="button" name="next" class="next btn-acao" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="titulo-campo">PÚBLICO ALVO</h2>
                <h3 align="left" class="pergunta-campo">17 - Há quanto tempo sua empresa existe?</h3>
                <label>
                 <input type="radio" name="classe" value="classeA">
        Classe A (quem ganha mais de 20 salários mínimos)
        </label>
    <br>
    <label>
        <input type="radio" name="classe" value="classeB">
        Classe B (de 10 a 20 salários mínimos)
    </label>
    <br>
    <label>
        <input type="radio" name="classe" value="classeC">
        Classe C (de 4 a 10 salários mínimos)
    </label>
    <br>
    <label>
        <input type="radio" name="classe" value="classeD">
        Classe D (de 2 a 4 salários mínimos)
    </label>
    <br>
    <label>
        <input type="radio" name="classe" value="classeE">
        Classe E (recebe até 2 salários mínimos)
    </label>

                <h3 align="left" class="pergunta-campo">18 - Quais produtos ou serviços sua empresa oferece?</h3>
                <input type="text" name="pergunta_numero4" placeholder="Resposta"/>
                <h3 align="left" class="pergunta-campo">19 - O que faz sua empresa ser especial?</h3>
                <input type="text" name="pergunta_numero5" placeholder="Resposta"/>
                <h3 align="left" class="pergunta-campo">20 - Sua empresa tem algum slogan? Se sim, qual ?</h3>
                <input type="text" name="pergunta_numero6" placeholder="Resposta"/>
                <h3 align="left" class="pergunta-campo">21 - Quais missões, visões e valores da sua empresa? </h3>
                <h3 class="legenda-campo">Os valores são os princípios e a conduta que a empresa deseja seguir para alcançar os objetivos traçados.</h3> 
                <input type="text" name="pergunta_numero6" placeholder="Resposta"/>
                <h3 align="left" class="pergunta-campo">22 - Você diria que sua marca oferece custo-benefício?</h3>
                <input type="text" name="pergunta_numero2" placeholder="Resposta"/>
                <input type="button" name="previous" class="previous btn-acao-previous" value="Previous"/>
                <input type="button" name="next" class="next btn-acao" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="titulo-campo">Create your account</h2>
                <h3 class="legenda-campo">Fill in your credentials</h3>
                <input type="text" name="fname" placeholder="First Name"/>
                <input type="text" name="pergunta_numero1" placeholder="Last Name"/>
                <input type="text" name="pergunta_numero2" placeholder="Phone"/>
                <input type="text" name="pergunta_numero3" placeholder="Phone"/>
                <input type="text" name="pergunta_numero4" placeholder="Phone"/>
                <input type="text" name="pergunta_numero5" placeholder="Phone"/>
                <input type="text" name="pergunta_numero6" placeholder="Phone"/>
                <input type="button" name="previous" class="previous btn-acao-previous" value="Previous"/>
                <input type="submit" name="enviar" class="enviar btn-acao" value="Enviar"/>
            </fieldset>
			</div>
		</div>
        
           
        
    
</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


<!-- /.MultiStep Form -->
