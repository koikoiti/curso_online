<?php
	#include das funcoes da tela inico
	include('functions/banco-inicio.php');

	#Instancia o objeto
	$banco = new bancoinicio();
    
    
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
    }

	#Imprimi valores
	$Conteudo = $banco->CarregaHtml('curso');
    $Conteudo = str_replace('<%CURSO%>',$descr,$Conteudo);
?>