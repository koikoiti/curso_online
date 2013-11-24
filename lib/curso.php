<?php
	#include das funcoes da tela inico
	include('functions/banco-inicio.php');

	#Instancia o objeto
	$banco = new bancoinicio();
    
    #Define botoes da primeira pagina
    $botaoprox = '<button class=\'btn btn-success\' onclick=\'javascript: location.href="<%URLPADRAO%>curso/curso-pt2"\'>Clique aqui para ir para a parte 2 de 5</button>';
    $botaoant =  '<button class=\'btn btn-success\' onclick=\'javascript: location.href="<%URLPADRAO%>inicio"\'>Voltar para tela inicial</button>';
    $parte = 'Parte 1 de 5';
    $descr = '
        Ger�ncia de Contratos<br><br>
        A ger�ncia de contratos se inicia com as aquisi��es do projeto. O gerenciamento das aquisi��es do projeto cuida das compras e aquisi��es de produtos, servi�os ou resultados necess�rios para a realiza��o do trabalho. A organiza��o pode ser o comprador ou fornecedor do produto, servi�o ou resultado. O gerenciamento das aquisi��es do projeto inclui os processos de gerenciamento de contratos e de controle de mudan�as necess�rios para administrar os contratos ou pedidos de compra. Este gerenciamento inclui, ainda, a administra��o de qualquer contrato emitido por uma organiza��o externa (o comprador) que est� adquirindo o projeto de uma organiza��o executora (o fornecedor) e a administra��o de obriga��es contratuais estabelecidas para a equipe do projeto pelo contratos. Esta �rea de conhecimento � composta pelos processos:<br><br>
        Planejar Compras e Aquisi��es<br>
        Planejar Contrata��es<br>
        Solicitar Respostas de Fornecedores<br>
        Selecionar Fornecedores<br>
        Administra��o de Contratos<br>
        Encerramento do Contratos<br>
        
        Planejar Compras e Aquisi��es<br><br>
        � o processo que identifica quais necessidades do projeto podem ser melhor atendidas pela compra ou aquisi��o de bens fora da equipe do projeto e quais devem ser realizadas pela equipe do projeto durante sua execu��o. Inclui considera��es de poss�veis fornecedores, especialmente se o comprador desejar exercer algum grau de influ�ncia sobre as decis�es de contrata��o. Esse processo envolve a considera��o de como, o que, quanto, se e quando adquirir.<br><br>
        
        Entradas<br>
        1. Fatores ambientais da empresa<br>
        2. Ativos de processos organizacionais<br>
        3. Declara��o do escopo do projeto<br>
        4. Estrutura anal�tica do projeto<br>
        5. Dicion�rio da EAP<br>
        6. Plano de gerenciamento do projeto<br><br>
        
        Ferramentas e T�cnicas<br>
        1. An�lise de fazer ou comprar<br>
        2. Opini�o especializada<br>
        3. Tipos de contratos.<br><br>
        
        Sa�das<br>
        1. Plano de gerenciamento das aquisi��es<br>
        2. Declara��o do trabalho do contrato<br>
        3. Decis�es de fazer ou comprar<br>
        4. Mudan�as solicitadas<br>
        
        Planejar Contrata��es<br><br>
        Prepara os documentos necess�rios para dar suporte ao processo Solicitar Respostas de Fornecedor e ao processo Selecionar Fornecedores.<br><br>
        
        Entradas<br>
        1. Plano de gerenciamento de aquisi��es<br>
        2. Declara��o do trabalho do contrato<br>
        3. Decis�es de fazer ou comprar<br>
        4. Plano de gerenciamento do projeto<br><br>
        
        Ferramentas e t�cnicas<br>
        1. Formul�rio padr�o<br>
        2. Opini�o especializada<br><br>
        
        Sa�das<br>
        1. Documentos de Aquisi��o<br>
        2. Crit�rios de Avalia��o<br>
        3. Declara��o do trabalho do contrato<br>
    ';
    
    if($this->PaginaAux[0] == 'curso-pt2'){
        #Define botoes da primeira pagina
        $botaoprox = '<button class=\'btn btn-success\' onclick=\'javascript: location.href="<%URLPADRAO%>curso/curso-pt3"\'>Clique aqui para ir para a parte 3 de 5</button>';
        $botaoant =  '<button class=\'btn btn-success\' onclick=\'javascript: location.href="<%URLPADRAO%>curso"\'>Clique aqui para ir para a parte 1 de 5</button>';
        $parte = 'Parte 2 de 5';
        $descr = '
            Solicitar Respostas de Fornecedores<br><br>
            � o processo de gerenciamento de aquisi��es que obt�m respostas, como cota��es e propostas, de poss�veis fornecedores sobre como os requisitos do projeto devem ser alcan�ados. Os poss�veis fornecedores, normalmente sem custos diretos para o projeto ou comprador, gastam a maior parte do esfor�o real nesse processo.<br><br>
            
            Entradas<br>
            1. Ativos de processos organizacionais<br>
            2. Plano de gerenciamento de aquisi��es<br>
            3. Documentos de aquisi��es<br><br>
            
            Ferramentas e t�cnicas<br>
            1. Reuni�es com licitantes<br>
            2. An�ncios<br>
            3. Desenvolver a lista de fornecedores qualificados<br><br>
            
            Sa�das<br>
            1. Lista de fornecedores qualificados<br>
            2. Pacote de documentos de aquisi��o<br>
            3. Propostas<br><br>
             
            
            Selecionar Fornecedores<br>
            O processo Selecionar Fornecedores recebe cota��es ou propostas e aplica crit�rios de avalia��o, conforme aplic�vel, para selecionar um ou mais fornecedores que sejam qualificados e aceit�veis como um fornecedor.<br><br>
            
            Entradas<br>
            1. Ativos de processos organizacionais<br>
            2. Plano de gerenciamento de aquisi��es<br>
            3. Crit�rios de avalia��o<br>
            4. Pacote de documentos de aquisi��o<br>
            5. Propostas<br>
            6. Lista de fornecedores qualificados<br>
            7. Plano de gerenciamento do projeto<br><br>
            
            Ferramentas e t�cnicas<br>
            1. Sistema de pondera��o<br>
            2. Estimativas independentes<br>
            3. Sistema de triagem<br>
            4. Negocia��o do contrato<br>
            5. Sistema de classifica��o de fornecedores<br>
            6. Opini�o especializada<br>
            7. T�cnicas de avalia��o de propostas<br><br>
            
            Sa�das<br>
            1. Fornecedores selecionados<br>
            2. Contrato<br>
            3. Plano de gerenciamento de contratos<br>
            4. Disponibilidade de recursos<br>
            5. Plano de gerenciamento de aquisi��es (atualiza��es)<br>
            6. Mudan�as solicitadas<br>
            ';
    }elseif($this->PaginaAux[0] == 'curso-pt3'){
        #Define botoes da primeira pagina
        $botaoprox = '<button class=\'btn btn-success\' onclick=\'javascript: location.href="<%URLPADRAO%>curso/curso-pt4"\'>Clique aqui para ir para a parte 4 de 5</button>';
        $botaoant =  '<button class=\'btn btn-success\' onclick=\'javascript: location.href="<%URLPADRAO%>curso/curso-pt2"\'>Clique aqui para ir para a parte 2 de 5</button>';
        $parte = 'Parte 3 de 5';
        $descr = '
            Administra��o de Contratos<br><br>
            O comprador e o fornecedor administram o contrato de forma semelhante. Cada uma das partes garante que tanto ela quanto a outra parte atendem �s obriga��es contratuais e que seus pr�prios direitos legais est�o protegidos. O processo de Administra��o de Contratos garante que o desempenho do fornecedor atende aos requisitos contratuais e que o comprador atua de acordo com os termos do contrato. Em projetos maiores com v�rios fornecedores de produtos, servi�os e resultados, um aspecto importante da administra��o de contrato � o gerenciamento de interfaces entre os diversos fornecedores.<br><br>
            
            Entradas<br>
            1. Contrato<br>
            2. Plano de gerenciamento de contratos<br>
            3. Selecionar e analisar fornecedores<br>
            4. Relat�rios de desempenho<br>
            5. Solicita��es de mudan�as aprovadas<br>
            6. Informa��es sobre o desempenho do trabalho<br><br>
            
            Ferramentas e t�cnicas<br>
            1. Sistema de controle de mudan�as no contrato<br>
            2. An�lise de desempenho conduzida pelo comprador<br>
            3. Inspe��es e auditorias<br>
            4. Relat�rio de desempenho<br>
            5. Sistema de pagamentos<br>
            6. Administra��o de reclama��es<br>
            7. Sistema de gerenciamento de registros<br>
            8. Tecnologia da informa��o<br><br>
            
            Sa�das<br>
            1. Documenta��o do contrato<br>
            2. Mudan�as solicitadas<br>
            3. A��es corretivas recomendadas<br>
            4. Ativos de processos organizacionais (atualiza��es)<br>
            5. Plano de gerenciamento do projeto (atualiza��es)<br><br>
             
            
            Encerramento do contrato<br><br>
            O processo Encerramento do Contrato d� suporte ao processo Encerrar o Projeto, pois envolve a confirma��o de que todo o trabalho e as entregas foram aceit�veis. O processo Encerramento do Contrato tamb�m envolve atividades administrativas, como a atualiza��o de registros para refletir resultados finais e o arquivamento dessas informa��es para uso futuro.<br><br>
            
            Entradas<br>
            1. Plano de gerenciamento de aquisi��es<br>
            2. Plano de gerenciamento de contratos<br>
            3. Documenta��o do contrato<br>
            4. Procedimento de encerramento de contratos<br><br>
            
            Ferramentas e t�cnicas<br>
            1. Auditorias de aquisi��o<br>
            2. Sistema de gerenciamento de registros<br><br>
            
            Sa�das<br>
            1. Contratos encerrados<br>
            2. Ativos de processos organizacionais (atualiza��es)<br><br>
             
            
            Tipos de Contratos<br><br>
            
            Contratos de pre�o fixo ou pre�o global (PF)<br>
            Um tipo de contrato que envolve um pre�o total fixo para um produto bem definido. Os Contratos de Pre�o Fixo podem tamb�m incluir incentivos para que determinados objetivos do projeto, como metas de cronograma, sejam atingidos ou superados. A forma mais simples de um Contrato de Pre�o Fixo � um pedido de compra.<br><br>
            
            Contrato de Pre�o Fixo Garantido (PFG)<br>
            Um tipo de Contrato de Pre�o Fixo em que o comprador paga ao fornecedor um valor determinado (conforme definido pelo contrato), independentemente dos custos do fornecedor.<br><br>
            
            Contrato de Pre�o Fixo com Remunera��o de Incentivo (PFRI)<br>
            Um tipo de Contrato de Pre�o Fixo em que o comprador paga ao fornecedor um valor determinado (conforme definido pelo contrato) e pelo qual o fornecedor poder� ganhar um valor adicional se atender aos crit�rios de desempenho definidos.<br><br>
            
            Contratos de custos reembols�veis (CR)<br>
            Um tipo de contrato que envolve o pagamento (reembolso) pelo comprador para o fornecedor pelos custos reais do fornecedor acrescidos de uma remunera��o que normalmente representa o lucro do fornecedor. Os custos geralmente s�o classificados como custos diretos ou indiretos. Custos diretos s�o custos incorridos para o benef�cio exclusivo do projeto, como os sal�rios da equipe que trabalha em per�odo integral para o projeto. Custos indiretos, tamb�m chamados de "overhead", custos gerais ou custos administrativos, s�o os custos alocados para o projeto pela organiza��o executora como um custo de realiza��o do neg�cio, como os sal�rios dos gerentes indiretamente envolvidos no projeto e o custo dos servi�os p�blicos de eletricidade do escrit�rio. Geralmente, os custos indiretos s�o calculados como um percentual dos custos diretos. Os contratos de custos reembols�veis freq�entemente incluem cl�usulas de incentivo em que, se o fornecedor atingir ou superar os objetivos selecionados para o projeto, como metas de cronograma ou custo total, receber� do comprador um incentivo ou pagamento de b�nus.<br><br>
            
            Contrato de Custo Mais Remunera��o Fixa (CMRF)<br>
            Um tipo de Contrato de Custos Reembols�veis em que o comprador reembolsa o fornecedor pelos custos permitidos (definidos pelo contrato) ao fornecedor acrescidos de um valor fixo de lucro (remunera��o).<br><br>
            
            Contrato de Custo Mais Remunera��o de Incentivo (CMRI)<br>
            Um tipo de Contrato de Custos Reembols�veis em que o comprador reembolsa o fornecedor pelos custos permitidos (definidos pelo contrato) ao fornecedor. O fornecedor ter� direito a seu lucro se atender aos crit�rios de desempenho definidos.<br><br>
            
            Contratos por tempo e material (T&M)<br>
            Um tipo de Contrato H�brido, contendo aspectos dos Contratos de Custos Reembols�veis e Contratos de Pre�o Fixo. Os Contratos por Tempo e Material se assemelham aos acordos do tipo com Custos Reembols�veis por serem modific�veis, j� que o valor total do acordo n�o � definido no momento em que ele � firmado. Dessa forma, os Contratos por Tempo e Material podem ter o seu valor aumentado como se fossem acordos de Custos Reembols�veis. Por outro lado, os acordos por Tempo e Material podem tamb�m ser semelhantes a acordos de Pre�o Fixo. Por exemplo, os valores unit�rios s�o preestabelecidos pelo comprador e pelo fornecedor, quando ambas as partes concordam com os valores de servi�os profissionais para a categoria de "engenheiros seniores"<br><br>
         ';
    }elseif($this->PaginaAux[0] == 'curso-pt4'){
        #Define botoes da primeira pagina
        $botaoprox = '<button class=\'btn btn-success\' onclick=\'javascript: location.href="<%URLPADRAO%>curso/curso-pt5"\'>Clique aqui para ir para a parte 5 de 5</button>';
        $botaoant =  '<button class=\'btn btn-success\' onclick=\'javascript: location.href="<%URLPADRAO%>curso/curso-pt3"\'>Clique aqui para ir para a parte 3 de 5</button>';
        $parte = 'Parte 4 de 5';
        $descr = '
            Realizar Aquisi��es<br><br>
            � o processo que analisa as respostas dos fornecedores, realizando assim a sele��o de um fornecedor para ser contratado.<br><br>
            
            Entradas<br>
            Plano de gerenciamento do Projeto<br>
            � o processo de gerenciamento de aquisi��es no projeto que engloba os processos necess�rios para comprar ou adquirir produtos ou servi�os fora da equipe do projeto. Desenvolvimento da documenta��o at� o encerramento do contrato a fim de cumprir o escopo do projeto.<br><br>
            
            Documenta��o de Aquisi��o<br>
            Declara��o de trabalho das entregas<br>
            Suporte ao produto<br>
            Linha base do cronograma<br>
            Limita��o de responsabilidade<br>
            Relat�rios de desempenho<br>
            Remunera��es e reten��es<br>
            Per�odo de desempenho<br>
            Penalidades<br>
            Pap�is e responsabilidade<br>
            Incentivos<br>
            Local de desempenho do Fornecedor<br>
            Seguros<br>
            Aprova��o de subcontratadas<br>
            Defini��o de pre�os<br>
            Solicita��es de mudan�as<br>
            Termo de pagamento<br>
            Mecanismos de rescis�o e de resolu��o<br>
            Local de entrega<br>
            Garantia<br>
            Cota��o<br><br>
             
            
            Crit�rios para sele��o de fontes<br>
            A forma e os crit�rios de sele��o de fonte incluem diversas informa��es como capacidade de entrega, qualidade do produto, custo do produto, conhecimento t�cnico e abordagem do contrato exigidos do fornecedor.<br>
            
            Entradas<br>
            Lista de fornecedores<br>
            � a lista de fornecedores qualificados, onde s�o mantidas as informa��es de potenciais fornecedores que possam ser solicitados pre�os, propostas ou cota��es referentes ao trabalho e se enquadram nos crit�rios de avalia��o. Essas informa��es geralmente se referem �s experi�ncias relevantes e outras caracter�sticas dos fornecedores conforme aplic�vel, para selecionar um ou mais fornecedores.<br><br>
            
            Propostas de fornecedores<br>
            S�o preparadas em resposta aos documentos de aquisi��o, que comp�em um conjunto de informa��es b�sicas que ser�o usadas por um grupo de avalia��o para selecionar um ou mais licitantes.<br><br>
            
            Documentos do Projeto<br>
            S�o os documentos que registram os riscos e as decis�es contratuais relacionadas a risco e podem ser enviados para alguns ou para todos os fornecedores potenciais para solicitar suas propostas.<br><br>
            
            Decis�es de fazer ou comprar<br>
            As decis�es de comprar est�o definidas no Plano de Gerenciamento de Aquisi��es<br><br>
            
            Ativos de processos organizacionais<br>
            O processo organizacional que podem influenciar o processo de realiza��o de aquisi��o inclui:<br>
            Fornecedores em potencial<br>
            Informa��es sobre experi�ncia passadas relevantes<br><br>
            
            Ferramentas e T�cnicas<br>
            Reuni�es com Licitantes<br>
            S�o reuni�es com todos os fornecedores e compradores antes da apresenta��o de um a licita��o ou proposta.<br>
            Sempre tomar cuidado de garantir que todos os fornecedores em potencial tenham acesso a todas as perguntas de cada fornecedor em potencial e a todas as respostas do comprador.<br><br>
            
            T�cnicas de avalia��o de proposta<br>
            Quando a avalia��o for atrav�s das respostas dos fornecedores os crit�rios de pondera��o deve ser previamente definidos, um processo formal de revis�o da avalia��o ser� definido pelas pol�ticas de aquisi��o do comprador. Os crit�rios de avalia��o podem envolver componentes objetivos e subjetivos j� que os crit�rios de avalia��o, quando usados para avalia��o de uma proposta formalizada, geralmente recebem pesos pr�-definidos.<br><br>
            
            Estimativas independentes<br>
            O patrocinador ou Gerente do projeto pode optar por preparar suas pr�prias estimativas independente de ter uma estimativa de custos preparados por um profissional externo.<br>
            Diferen�as significativas nas estimativas de custos podem ser uma indica��o de que a declara��o do trabalho da aquisi��o foi deficiente.<br><br>
            
            Opini�o e especializada<br>
            � usada na avalia��o t�cnica especializada e � realizada para avaliar as entradas do processo, como por exemplo, avalia��o das propostas. Estas avalia��es ser�o realizadas por uma equipe de an�lise multidisciplinar com especializa��o em cada uma das �reas cobertas pelos documentos de aquisi��o e pelo contrato proposto<br><br>
            
            Publicidade<br>
            A rela��o de fornecedores em potencial pode ser expandida com a coloca��o de an�ncios em publica��es de grande circula��o.<br><br>
            
            Pesquisa na Internet<br>
            A Internet tem uma grande influ�ncia na maioria das aquisi��es de projetos.<br><br>
            
            Negocia��es das aquisi��es<br>
            Para itens de aquisi��o complexas, a negocia��o do contrato pode ser um processo com entradas e sa�das independente. Para itens de aquisi��o simples, os termos e condi��es do contrato podem ser previamente definidos e n�o negativos e s� precisam ser aceitos pelo fornecedor.<br><br>
            
            Sa�das<br>
            Fornecedores selecionados<br>
            Os fornecedores selecionados s�o aqueles que foram julgados como estando em uma faixa competitiva de acordo com o resultado da avalia��o da proposta ou da licita��o e que negociaram uma minuta do contrato que se tornar� o contrato real quando for feita a adjudica��o.<br>
            A aprova��o final de todas as aquisi��es complexas, de alto valor e de alto risco em geral exige a aprova��o da alta administra��o.<br><br>
            
            Adjudica��o de contrato de aquisi��o<br>
            O contrato de aquisi��o � concedido para cada fornecedor selecionado<br>
            O contrato pode ter a forma de um simples pedido de compras ou de um documento complexo<br>
            Um contrato � um acordo legal que gera obriga��es para as partes que obriga o fornecedor a fornecer os produtos, servi�os ou resultados especificados e obriga o comprador a pagar ao fornecedor.<br><br>
            
            Adjudica��o de contrato de aquisi��o<br>
            Declara��o de trabalho da entregas<br>
            Suporte ao produto<br>
            Linha base do cronograma<br>
            Limita��o de responsabilidade<br>
            Relat�rios de desempenho<br>
            Remunera��es e reten��es<br>
            Per�odo de desempenho<br>
            Penalidades<br>
            Pap�is e responsabilidade<br>
            Incentivos<br>
            Local de desempenho do Fornecedor<br>
            Seguros<br>
            Aprova��o de subcontratadas<br>
            Defini��o de pre�os<br>
            Solicita��es de mudan�as<br>
            Termo de pagamento<br>
            Mecanismos de rescis�o e de resolu��o<br>
            Local de entrega<br>
        ';
    }elseif($this->PaginaAux[0] == 'curso-pt5'){
        #Define botoes da primeira pagina
        $botaoprox = '<button class=\'btn btn-success\' onclick=\'javascript: location.href="<%URLPADRAO%>pergunta/1"\'>Clique aqui para iniciar o teste</button>';
        $botaoant =  '<button class=\'btn btn-success\' onclick=\'javascript: location.href="<%URLPADRAO%>curso/curso-pt4"\'>Clique aqui para ir para a parte 4 de 5</button>';
        $parte = 'Parte 5 de 5';
        $descr = '
            Calend�rios de recursos<br>
            A quantidade e disponibilidade de recursos contratados e as datas em que cada recurso especificado pode estar ativo e inativo s�o documentadas.<br><br>
            
            Solicita��es de mudan�as<br>
            As mudan�as no plano de gerenciamento do projeto, nos planos auxiliares e em outros componentes s�o processadas para revis�o e destina��o, e tamb�m podem resultar do processo Selecionar fornecedores.<br>
            Atualiza��es do plano de gerenciamento do projeto<br>
            As atualiza��es do plano de gerenciamento incluem: linha base de custos, linha base do escopo, linha base do cronograma e plano de gerenciamento de aquisi��es.<br><br>
            
            Atualiza��es dos documentos do projeto<br>
            Os documentos que podem ser atualizados dentre outros:<br>
            Registro de riscos<br>
            Documenta��o referente as requisitos<br>
            E rastreabilidade de requisitos<br><br>
            
            Planejamento das Aquisi��es<br>
            Quando s�o definidos os objetivos e detalhamos o escopo de um projeto, logo pensamos nas aquisi��es que poder�o ser feitas.<br>
            Toda a compreens�o do produto permite tal antecipa��o.<br>
            Para reduzirem os riscos de n�o serem encaminhadas indevidamente e n�o atenderem as necessidades do produto, � necess�rio planejar tais aquisi��es, tornando formal e comunicando estes processos para as pessoas envolvidas no projeto.<br>
            O planejamento das aquisi��es deve incluir tamb�m considera��es sobre eventuais fornecedores, particularmente se o comprador deseja exercer algum grau de influ�ncia ou controle sobre as decis�es de subcontrata��o.<br>
            A Gest�o de Aquisi��es possui fases que ser�o listadas a seguir:<br>
            -�DEFINI��O DAS ESPECIFICA��ES: S�o necess�rios ao produto ou servi�o crit�rios para a sua devida avalia��o. Teremos a considera��o para com os objetivos, ao escopo do projeto, declara��o do escopo, descri��o do produto, restri��es, premissas, recursos para contrata��o, condi��es de mercado,a EAP, o or�amento preliminar, o cronograma e os recursos humanos que se fizerem necess�rios.<br>
            Declara��o do escopo? A declara��o de escopo descreve os limites atuais do projeto. Ela fornece informa��es importantes sobre as necessidades e estrat�gias do projeto que devem ser consideradas durante o planejamento das aquisi��es.<br>
            Descri��o do produto?�A descri��o do produto do projeto fornece informa��es importantes sobre qualquer quest�o t�cnica ou preocupa��o que necessitariam ser consideradas durante o planejamento das aquisi��es.<br>
            Recursos de contrata��o?�Se a organiza��o executora n�o tem um grupo formal de compras, ent�o, a equipe do projeto ter� que prover os recursos e o conhecimento para apoiar as atividades de contrata��o.<br>
            Condi��es de mercado?�O processo de planejamento de contra��es deve considerar que produtos e servi�os est�o dispon�veis no mercado, quais s�o os fornecedores, e sob que termos e condi��es.<br>
            Restri��es?�As restri��es s�o fatores que limitam as op��es do comprador. Uma das restri��es mais comuns para muitos projetos � a disponibilidade de recursos financeiros.<br>
            Premissas?�Premissas s�o fatores que, para fins do planejamento, ser�o consideradas verdadeiras, reais, ou corretas.<br>
            -�LISTAGEM DOS PRINCIPAIS PRODUTOS:�Com a an�lise dos produtos atrav�s de pesquisas on-line, de bate-papo com pessoas de outras organiza��es e da leitura de publica��es especializadas. Tal an�lise permite a redu��o do n�mero de potenciais fornecedores no mercado.<br>
            -�DISTRIBUI��O DA CARTA-PROPOSTA:�Com as especifica��es do(s) produto(s) para os fornecedores selecionados,com detalhamento de prazos e procedimentos necess�rios. Discreta, a carta cont�m as especifica��es realmente importantes para o projeto.<br>
            -�SELE��O DE 2 ou 3 FORNECEDORES:�Para apresenta��es presenciais aos stakeholders, deixando claros os crit�rios mais valorizados e conceituados na organiza��o.<br>
            -�AVALIA��O DAS PROPOSTAS RECEBIDAS DOS FORNECEDORES: Se houver d�vidas, poder� ser necess�rio reavaliar tais propostas junto aos fornecedores.<br>
            -�SELE��O DOS PRODUTOS OU SERVI�OS DO FORNECEDOR ESCOLHIDO: Mediante a escolha, ser� iniciado o processo de compra.<br>
            -�ENCERRAMENTO: Nesta fase mediante a an�lise dos produtos ou servi�os que foram entregues, se satisfat�rio � encerrada a aquisi��o.<br>
            A partir da compra ou contrata��o, � necess�rio monitorar o desempenho do produto/ servi�o adquirido. Alguns servi�os exigem que se feche formalmente o contrato e verifique se todos os produtos acertados foram entregues, dentro dos requisitos de qualidade especificados anteriormente no contrato.<br><br>
            
            Administrar Aquisi��es<br>
            � o processo de gerenciar as rela��es de aquisi��o, monitorar o desempenho do contrato e fazer as mudan�as e corre��es conforme necess�rio. Cada um precisa assegurar que as duas partes cumpram suas obriga��es contratuais e que seus pr�prios direitos legais sejam protegidos. Quem executa de fato o trabalho � o fornecedor cabendo, portanto, ao comprador, um papel de controlar e administrar esta execu��o.<br>
            Tudo o que se conhece de gerenciamento de projetos deve ser aplicado pela firma contratante com rela��o ao contrato. Desta forma, muito dos processos que aparecem em outras �reas do conhecimento v�o ser referenciados aqui, tais, como o Plano de Gerenciamento do Projeto, os Relat�rios de Desempenho, o Controle de Qualidade e o Controle de Mudan�as. � atrav�s destes instrumentos que o cumprimento do cronograma e o desempenho com rela��o � qualidade e ao cumprimento de metas s�o aferidos, dentro da periodicidade que deve ser prevista no Plano de Gerenciamento do Contrato.<br>
            O controle de mudan�as costuma ser o ponto mais sens�vel de toda a administra��o de contratos, principalmente em termos de negocia��o. � muito comum que surjam, durante o decorrer do trabalho, pedidos de mudan�as na descri��o dos produtos ou no SOW (Declara��o do Trabalho); al�m disto, tamb�m podem ocorrer diverg�ncias de interpreta��o sobre alguns itens, isto leva a mudan�as que acabam refletindo em custo e/ ou prazo, e nem sempre � f�cil chegar a um acordo sobre estes pontos.<br>
            A administra��o das aquisi��es engloba a aplica��o dos processos apropriados de gerenciamento de projetos �s rela��es contratuais e a integra��o das sa�das desses processos no gerenciamento geral do projeto. Os processos de gerenciamento de projetos que se aplicam podem incluir, entre outros:<br>
            Orientar e gerenciar a execu��o do projeto para autorizar o trabalho do fornecedor na ocasi�o apropriada:<br>
            Reportar o desempenho para monitorar o escopo do contrato, os custos. o cronograma e o desempenho t�cnico;<br>
            Realizar o controle da qualidade para inspecionar e verificar a adequa��o do produto do fornecedor;<br>
            Realizar o controle integrado de mudan�as para garantir que as mudan�as sejam aprovadas de forma adequada e que todas as pessoas envolvidas estejam cientes dessas mudan�as e
            Monitorar e controlar os riscos para garantir a mitiga��o dos riscos.<br>
            A administra��o das aquisi��es tamb�m tem um componente de gerenciamento financeiro que envolve o monitoramento dos pagamentos ao fornecedor. Isso garante que os termos de pagamento definidos no contrato sejam cumpridos e que a remunera��o do fornecedor fique vinculada ao seu progresso, conforme definido no contrato. O processo de administra��o das aquisi��es analisa e documentar como o fornecedor est� se desempenhando ou se desempenhou com base no contrato e estabelece a��es corretivas quando necess�rio.<br>
            A administra��o das aquisi��es engloba o gerenciamento de qualquer cancelamento do trabalho contratado (por justa causa, conveni�ncia ou inadimplemento) de acordo com a cl�usula de rescis�o do contrato. Os contratos podem ser retificados a qualquer momento antes do encerramento por consentimento m�tuo, de acordo com os termos de controle de mudan�as do contrato.<br><br>
            
            Entradas<br>
            Documentos de aquisi��o: Os documentos de aquisi��o cont�m registros completos de apoio para a administra��o dos processos de aquisi��o, inclusive as concess�es de contratos de aquisi��o e a declara��o do trabalho.<br>
            Plano de gerenciamento do projeto: O plano de gerenciamento das aquisi��es, que faz parte do plano, de gerenciamento do projeto, � uma da entrada para a realiza��o das aquisi��es e descreve como os processos de aquisi��o ser�o gerenciados desde o desenvolvimento da documenta��o at� o encerramento do contrato.<br>
            Relat�rios de desempenho: A documenta��o relacionada ao desempenho do fornecedor engloba:<br>
            Documenta��o t�cnica desenvolvida pelo fornecedor e outras informa��es fornecidas de acordo com os termos do contrato.<br>
            Relat�rios de desempenho do fornecedor. Os relat�rios de desempenho do fornecedor indicam as entregas que foram conclu�das e as que n�o foram.<br>
            Solicita��es de mudan�as aprovadas: As solicita��es de mudan�as aprovadas podem englobar modifica��es nos termos e condi��es do contrato, incluindo a declara��o do trabalho da aquisi��o, a defini��o de pre�os e a descri��o dos produtos, servi�os ou resultados a serem fornecidos. Todas as mudan�as s�o documentadas formalmente por escrito e aprovadas antes de serem implementadas.<br>
            Informa��es sobre o desempenho do trabalho: As informa��es sobre o desempenho do trabalho, incluindo a extens�o com que os padr�es de qualidade est�o sendo cumpridos, quais custos foram incorridos ou comprometidos e quais faturas do fornecedor foram pagas, s�o todas coletadas como parte da execu��o do projeto.<br><br>
            
            Ferramentas e t�cnicas<br>
            Sistema de controle de mudan�as no contrato: O sistema de controle de mudan�as no contrato define o processo pelo qual as aquisi��es podem ser modificadas. Engloba os documentos, sistemas de acompanhamento, procedimentos de resolu��o de disputas e os n�veis de aprova��o necess�rios para autorizar as mudan�as<br>
            An�lise de desempenho das aquisi��es: A an�lise de desempenho das aquisi��es � uma avalia��o estruturada do progresso do fornecedor para entregar o escopo e a qualidade do projeto, dentro dos custos e do cronograma, em compara��o com o contrato. O objetivo dessa an�lise � identificar os �xitos e fracassos do desempenho, o progresso em rela��o � declara��o do trabalho da aquisi��o e o n�o-cumprimento do contrato, permitindo que o comprador quantifique a capacidade ou incapacidade demonstrada pelo fornecedor para executar o trabalho.<br>
            Inspe��es e auditorias: � poss�vel realizar inspe��es e auditorias solicitadas pelo comprador e apoiadas pelo fornecedor conforme especificado no contrato de aquisi��o durante a execu��o do projeto para verificar a conformidade nos processos de trabalho ou nas entregas do fornecedor.<br>
            Relat�rios de desempenho: Os relat�rios de desempenho proporcionam � ger�ncia informa��es sobre a efic�cia com que o fornecedor est� atingindo os objetivos contratuais.<br>
            Sistemas de pagamento: Os pagamentos ao fornecedor em geral s�o processados pelo sistema de contas a pagar do comprador ap�s a certifica��o de trabalho satisfat�rio por uma pessoa autorizada da equipe do projeto.<br>
            Administra��o de reivindica��es: As mudan�as contestadas e as mudan�as construtivas em potencial s�o as modifica��es solicitadas em que o comprador e o fornecedor n�o conseguem chegar a um acordo sobre a remunera��o ou n�o concordam que tenham ocorrido. Essas mudan�as contestadas s�o chamadas de reivindica��es, disputas ou recursos administrativos. Se as partes n�o resolverem uma reivindica��o, ela ter� que ser tratada em conformidade com m�todos alternativos de resolu��o de disputas, de acordo com os procedimentos estabelecidos no contrato. O acordo de todas as reivindica��es e disputas por meio de negocia��o � o m�todo preferencial.<br>
            Sistema de gerenciamento de registros: O sistema de gerenciamento de registros � usado pelo gerente do projeto para gerenciar os registros e a documenta��o do contrato e da aquisi��o.<br><br>
            
            Documenta��o da aquisi��o<br>
            A documenta��o da aquisi��o inclui, mas n�o se limita ao contrato de aquisi��o com todos os cronogramas de apoio, as mudan�as no contrato solicitadas mas n�o aprovadas e as solicita��es de mudan�as aprovadas. A documenta��o da aquisi��o tamb�m engloba toda a documenta��o t�cnica desenvolvida pelo fornecedor e outras informa��es sobre o desempenho do trabalho, tais como entregas, relat�rios de desempenho do fornecedor, garantias, documentos financeiros incluindo faturas e registros de pagamentos e os resultados de inspe��es relacionadas ao contrato.<br><br>
            
            Sa�da<br>
            Atualiza��es dos ativos de processos organizacionais: Os elementos dos ativos de processos organizacionais que podem ser atualizados incluem, entre outros:<br>
            Correspond�ncia Os termos e condi��es do contrato em geral requerem a documenta��o por escrito de determinados aspectos das comunica��es comprador/fornecedor, como a necessidade de avisos de desempenho insatisfat�rio e solicita��es de esclarecimentos ou mudan�as no contrato. Essa documenta��o pode incluir os resultados reportados de auditorias e inspe��es do comprador que indicam as fraquezas que precisam ser corrigidas pelo fornecedor<br>
            Cronogramas e solicita��es de pagamento. Todos os pagamentos devem ser feitos de acordo com os termos e condi��es do contrato de aquisi��o.<br>
            Documenta��o da avalia��o do desempenho do fornecedor. A documenta��o da avalia��o do desempenho do fornecedor � preparada pelo comprador. Essas avalia��es de desempenho documentam� a capacidade do fornecedor para continuar a realizar o trabalho no contrato atual, indicam se o fornecedor pode trabalhar em projetos futuros ou classificam o desempenho do fornecedor no projeto. Esses documentos podem formar a base para o cancelamento do contrato do fornecedor ou determinar como s�o administradas as penalidades, remunera��es ou incentivos<br><br>
            
            Solicita��es de mudan�as<br>
            As solicita��es de mudan�as no plano de gerenciamento do projeto, nos planos auxiliares e em outros componentes, como a linha de base de custos, o cronograma do projeto e o plano de gerenciamento das aquisi��es podem resultar do processo de administra��o das aquisi��es. As mudan�as solicitadas, mas n�o resolvidas, podem incluir orienta��es fornecidas pelo comprador ou a��es adotadas pelo fornecedor que a outra parte considere uma mudan�a construtiva para o contrato.<br>
            Atualiza��es do plano de gerenciamento do projeto: Os elementos do plano de gerenciamento do projeto que podem ser atualizados incluem, entre outros:<br>
            Plano de gerenciamento das aquisi��es. O plano de gerenciamento das aquisi��es � atualizado para refletir todas as solicita��es de mudan�as aprovadas que afetam o gerenciamento das aquisi��es, incluindo impactos nos custos ou cronogramas.<br>
            Linha de base do cronograma. Se houver atrasos que afetem o desempenho geral do projeto, pode ser necess�rio atualizar a linha de base do cronograma para refletir as expectativas atuais.<br><br>
             
            
            Boas pr�ticas na administra��o de contratos<br>
            Ler e analisar o contrato<br>
            Desenvolver um plano para administra��o do contrato, indicando um gestor de contratos para assegurar que a organiza��o entregue aquilo a que se prop�s;<br>
            Realizar reuni�o inicial (kick-off), antes da execu��o dos trabalhos;<br>
            Controlar mudan�as e manter c�pias atualizadas do contrato;<br>
            Observar e respeitar os termos e condi��es do contrato;<br>
            Resolver claims e disputas prontamente, utilizando negocia��o e arbitragem para resolver disputas;<br>
            Medir, acompanhar e controlar o desempenho, elaborando relat�rios de progresso;<br>
            Administrar o processo de faturamento e de pagamento;<br>
            Fazer o acompanhamento de todas as a��es corretivas;<br>
            Distribuir c�pia ou extrato do contrato para os principais stakeholders;<br>
            Documentar as comunica��es relevantes;<br>
            Preparar atas de reuni�es;<br>
            Documentar as li��es aprendidas e promover a sua difus�o na empresa;<br><br>
            
            Encerrar aquisi��es<br>
            Este processo encerra as aquisi��es aplic�veis a uma fase do projeto. Termos do contrato n�o resolvidos est�o sujeitas a processos judiciais ap�s o encerramento. H� a possibilidade de haver termos de procedimentos espec�ficos para o encerramento do contrato.<br>
            Direitos e responsabilidades das partes no evento de um cancelamento est�o contidos na cl�usula de rescis�o do contrato.<br>
            Caso o motivo seja justa causa ou conveni�ncia, um contrato pode ser parcialmente ou totalmente cancelado a qualquer momento pelo comprador. Por sua vez, o fornecedor poder ser ressarcido por trabalhos conclu�dos e aceitos a partes do contrato.<br>
            Um contrato pode ser encerrado nas seguintes formas:<br>
            Termina��o: t�rminos das atividades contratuais;<br>
            Resili��o: Acordo m�tuo entre as partes;<br>
            Rescis�o: N�o-observ�ncia das obriga��es contratuais.<br>
            As condi��es para t�rmino do contrato s�o as seguintes:<br>
            Escopo complementado nas condi��es especificadas<br>
            Pagamentos efetuados conforme o contrato<br>
            Obriga��es tribut�rias, trabalhistas e fiscais cumpridas<br>
            Inexist�ncia de pend�ncias judiciais ou arbitrais<br><br>
            
            Entradas<br>
            Documenta��o da aquisi��o<br>
            Para encerrar o contrato, toda a documenta��o da aquisi��o � coletada, indexada e arquivada. As informa��es sobre o cronograma do contrato, escopo, qualidade e desempenho de custos, bem como toda a documenta��o das mudan�as no contrato, registros de pagamento e resultados de inspe��es, s�o catalogadas. Essas informa��es podem ser usadas como informa��es de li��es aprendidas e como uma base para avaliar as contratadas para contratos futuros.<br><br>
            
            Ferramentas e T�cnicas<br>
            Auditorias de aquisi��es<br>
            A autoria de aquisi��es � uma avalia��o estruturada do processo de aquisi��es, desde o processo de planejamento das aquisi��es at� o de administra��o das aquisi��es. O objetivo das auditorias de aquisi��es � identificar �xitos e fracassos que possam ser identificados na prepara��o ou na administra��o de outros contratos de aquisi��es no projeto ou em outros projetos dentro da organiza��o executiva.<br><br>
            
            Acordos negociados<br>
            Em todas as rela��es de aquisi��o, o acerto final justo de todas as quest�es, reivindica��es e disputas pendentes por meio de negocia��o � o objetivo principal. Sempre que n�o se conseguir o acordo por meio de negocia��o direta, deve-se explorar alguma forma de resolu��o alternativa de disputas, incluindo media��o ou arbitragem. Quando todas as demais alternativas falharem, o processo judicial nos tribunais � a �ltima op��o e a menos desejada.<br><br>
            
            Sa�das<br>
            Aquisi��es encerradas<br>
            O comprador, em geral por meio do administrador de aquisi��es autorizado, envia ao fornecedor um aviso formal por escrito de que o contrato foi conclu�do. Os requisitos de encerramento formal das aquisi��es em geral s�o definidos nos termos e condi��es do contrato e s�o inclu�dos no plano de gerenciamento das aquisi��es.<br><br>
            Atualiza��es nos ativos de processos organizacionais que podem ser atualizados incluem, entre outros: Arquivo de aquisi��es. Um conjunto completo de documentos indexados do contrato, incluindo o contrato encerrado, � preparado para inclus�o com os arquivos finais do projeto. Aceita��o da entrega. O comprador, em geral por meio de administrador de aquisi��es autorizado, envia ao fornecedor um aviso requisitos para a aceita��o formal das entregas e o modo como tratar as entregas que n�o est�o em conformidade, normalmente s�o definidos no contrato. Documenta��o de li��es aprendidas. As li��es aprendidas, a experi�ncia adquirida e as recomenda��es de melhoria dos processos devem ser inclu�das nos arquivos do projeto para melhorar as aquisi��es futuras.<br><br>
            ';
    }
    
	#Imprimi valores
	$Conteudo = $banco->CarregaHtml('curso');
    $Conteudo = str_replace('<%CURSO%>',$descr,$Conteudo);
    $Conteudo = str_replace('<%BOTAOPROX%>',$botaoprox,$Conteudo);
    $Conteudo = str_replace('<%BOTAOANT%>',$botaoant,$Conteudo);
    $Conteudo = str_replace('<%PARTE%>',$parte,$Conteudo);
    $Conteudo = str_replace('<%URLPADRAO%>',UrlPadrao,$Conteudo);
?>