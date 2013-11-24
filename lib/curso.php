<?php
	#include das funcoes da tela inico
	include('functions/banco-inicio.php');

	#Instancia o objeto
	$banco = new bancoinicio();
    
    
    $descr = '
        Gerência de Contratos<br><br>
        A gerência de contratos se inicia com as aquisições do projeto. O gerenciamento das aquisições do projeto cuida das compras e aquisições de produtos, serviços ou resultados necessários para a realização do trabalho. A organização pode ser o comprador ou fornecedor do produto, serviço ou resultado. O gerenciamento das aquisições do projeto inclui os processos de gerenciamento de contratos e de controle de mudanças necessários para administrar os contratos ou pedidos de compra. Este gerenciamento inclui, ainda, a administração de qualquer contrato emitido por uma organização externa (o comprador) que está adquirindo o projeto de uma organização executora (o fornecedor) e a administração de obrigações contratuais estabelecidas para a equipe do projeto pelo contratos. Esta área de conhecimento é composta pelos processos:<br><br>
        Planejar Compras e Aquisições<br>
        Planejar Contratações<br>
        Solicitar Respostas de Fornecedores<br>
        Selecionar Fornecedores<br>
        Administração de Contratos<br>
        Encerramento do Contratos<br>
        
        Planejar Compras e Aquisições<br><br>
        É o processo que identifica quais necessidades do projeto podem ser melhor atendidas pela compra ou aquisição de bens fora da equipe do projeto e quais devem ser realizadas pela equipe do projeto durante sua execução. Inclui considerações de possíveis fornecedores, especialmente se o comprador desejar exercer algum grau de influência sobre as decisões de contratação. Esse processo envolve a consideração de como, o que, quanto, se e quando adquirir.<br><br>
        
        Entradas<br>
        1. Fatores ambientais da empresa<br>
        2. Ativos de processos organizacionais<br>
        3. Declaração do escopo do projeto<br>
        4. Estrutura analítica do projeto<br>
        5. Dicionário da EAP<br>
        6. Plano de gerenciamento do projeto<br><br>
        
        Ferramentas e Técnicas<br>
        1. Análise de fazer ou comprar<br>
        2. Opinião especializada<br>
        3. Tipos de contratos.<br><br>
        
        Saídas<br>
        1. Plano de gerenciamento das aquisições<br>
        2. Declaração do trabalho do contrato<br>
        3. Decisões de fazer ou comprar<br>
        4. Mudanças solicitadas<br>
        
        Planejar Contratações<br><br>
        Prepara os documentos necessários para dar suporte ao processo Solicitar Respostas de Fornecedor e ao processo Selecionar Fornecedores.<br><br>
        
        Entradas<br>
        1. Plano de gerenciamento de aquisições<br>
        2. Declaração do trabalho do contrato<br>
        3. Decisões de fazer ou comprar<br>
        4. Plano de gerenciamento do projeto<br><br>
        
        Ferramentas e técnicas<br>
        1. Formulário padrão<br>
        2. Opinião especializada<br><br>
        
        Saídas<br>
        1. Documentos de Aquisição<br>
        2. Critérios de Avaliação<br>
        3. Declaração do trabalho do contrato<br>
    ';
    
    if($this->PaginaAux[0] == 'curso-pt2'){
        $descr = '
            Solicitar Respostas de Fornecedores<br><br>
            É o processo de gerenciamento de aquisições que obtém respostas, como cotações e propostas, de possíveis fornecedores sobre como os requisitos do projeto devem ser alcançados. Os possíveis fornecedores, normalmente sem custos diretos para o projeto ou comprador, gastam a maior parte do esforço real nesse processo.<br><br>
            
            Entradas<br>
            1. Ativos de processos organizacionais<br>
            2. Plano de gerenciamento de aquisições<br>
            3. Documentos de aquisições<br><br>
            
            Ferramentas e técnicas<br>
            1. Reuniões com licitantes<br>
            2. Anúncios<br>
            3. Desenvolver a lista de fornecedores qualificados<br><br>
            
            Saídas<br>
            1. Lista de fornecedores qualificados<br>
            2. Pacote de documentos de aquisição<br>
            3. Propostas<br><br>
             
            
            Selecionar Fornecedores<br>
            O processo Selecionar Fornecedores recebe cotações ou propostas e aplica critérios de avaliação, conforme aplicável, para selecionar um ou mais fornecedores que sejam qualificados e aceitáveis como um fornecedor.<br><br>
            
            Entradas<br>
            1. Ativos de processos organizacionais<br>
            2. Plano de gerenciamento de aquisições<br>
            3. Critérios de avaliação<br>
            4. Pacote de documentos de aquisição<br>
            5. Propostas<br>
            6. Lista de fornecedores qualificados<br>
            7. Plano de gerenciamento do projeto<br><br>
            
            Ferramentas e técnicas<br>
            1. Sistema de ponderação<br>
            2. Estimativas independentes<br>
            3. Sistema de triagem<br>
            4. Negociação do contrato<br>
            5. Sistema de classificação de fornecedores<br>
            6. Opinião especializada<br>
            7. Técnicas de avaliação de propostas<br><br>
            
            Saídas<br>
            1. Fornecedores selecionados<br>
            2. Contrato<br>
            3. Plano de gerenciamento de contratos<br>
            4. Disponibilidade de recursos<br>
            5. Plano de gerenciamento de aquisições (atualizações)<br>
            6. Mudanças solicitadas<br>
            ';
    }elseif($this->PaginaAux[0] == 'curso-pt3'){
        $descr = '
            Administração de Contratos<br><br>
            O comprador e o fornecedor administram o contrato de forma semelhante. Cada uma das partes garante que tanto ela quanto a outra parte atendem às obrigações contratuais e que seus próprios direitos legais estão protegidos. O processo de Administração de Contratos garante que o desempenho do fornecedor atende aos requisitos contratuais e que o comprador atua de acordo com os termos do contrato. Em projetos maiores com vários fornecedores de produtos, serviços e resultados, um aspecto importante da administração de contrato é o gerenciamento de interfaces entre os diversos fornecedores.<br><br>
            
            Entradas<br>
            1. Contrato<br>
            2. Plano de gerenciamento de contratos<br>
            3. Selecionar e analisar fornecedores<br>
            4. Relatórios de desempenho<br>
            5. Solicitações de mudanças aprovadas<br>
            6. Informações sobre o desempenho do trabalho<br><br>
            
            Ferramentas e técnicas<br>
            1. Sistema de controle de mudanças no contrato<br>
            2. Análise de desempenho conduzida pelo comprador<br>
            3. Inspeções e auditorias<br>
            4. Relatório de desempenho<br>
            5. Sistema de pagamentos<br>
            6. Administração de reclamações<br>
            7. Sistema de gerenciamento de registros<br>
            8. Tecnologia da informação<br><br>
            
            Saídas<br>
            1. Documentação do contrato<br>
            2. Mudanças solicitadas<br>
            3. Ações corretivas recomendadas<br>
            4. Ativos de processos organizacionais (atualizações)<br>
            5. Plano de gerenciamento do projeto (atualizações)<br><br>
             
            
            Encerramento do contrato<br><br>
            O processo Encerramento do Contrato dá suporte ao processo Encerrar o Projeto, pois envolve a confirmação de que todo o trabalho e as entregas foram aceitáveis. O processo Encerramento do Contrato também envolve atividades administrativas, como a atualização de registros para refletir resultados finais e o arquivamento dessas informações para uso futuro.<br><br>
            
            Entradas<br>
            1. Plano de gerenciamento de aquisições<br>
            2. Plano de gerenciamento de contratos<br>
            3. Documentação do contrato<br>
            4. Procedimento de encerramento de contratos<br><br>
            
            Ferramentas e técnicas<br>
            1. Auditorias de aquisição<br>
            2. Sistema de gerenciamento de registros<br><br>
            
            Saídas<br>
            1. Contratos encerrados<br>
            2. Ativos de processos organizacionais (atualizações)<br><br>
             
            
            Tipos de Contratos<br><br>
            
            Contratos de preço fixo ou preço global (PF)<br>
            Um tipo de contrato que envolve um preço total fixo para um produto bem definido. Os Contratos de Preço Fixo podem também incluir incentivos para que determinados objetivos do projeto, como metas de cronograma, sejam atingidos ou superados. A forma mais simples de um Contrato de Preço Fixo é um pedido de compra.<br><br>
            
            Contrato de Preço Fixo Garantido (PFG)<br>
            Um tipo de Contrato de Preço Fixo em que o comprador paga ao fornecedor um valor determinado (conforme definido pelo contrato), independentemente dos custos do fornecedor.<br><br>
            
            Contrato de Preço Fixo com Remuneração de Incentivo (PFRI)<br>
            Um tipo de Contrato de Preço Fixo em que o comprador paga ao fornecedor um valor determinado (conforme definido pelo contrato) e pelo qual o fornecedor poderá ganhar um valor adicional se atender aos critérios de desempenho definidos.<br><br>
            
            Contratos de custos reembolsáveis (CR)<br>
            Um tipo de contrato que envolve o pagamento (reembolso) pelo comprador para o fornecedor pelos custos reais do fornecedor acrescidos de uma remuneração que normalmente representa o lucro do fornecedor. Os custos geralmente são classificados como custos diretos ou indiretos. Custos diretos são custos incorridos para o benefício exclusivo do projeto, como os salários da equipe que trabalha em período integral para o projeto. Custos indiretos, também chamados de "overhead", custos gerais ou custos administrativos, são os custos alocados para o projeto pela organização executora como um custo de realização do negócio, como os salários dos gerentes indiretamente envolvidos no projeto e o custo dos serviços públicos de eletricidade do escritório. Geralmente, os custos indiretos são calculados como um percentual dos custos diretos. Os contratos de custos reembolsáveis freqüentemente incluem cláusulas de incentivo em que, se o fornecedor atingir ou superar os objetivos selecionados para o projeto, como metas de cronograma ou custo total, receberá do comprador um incentivo ou pagamento de bônus.<br><br>
            
            Contrato de Custo Mais Remuneração Fixa (CMRF)<br>
            Um tipo de Contrato de Custos Reembolsáveis em que o comprador reembolsa o fornecedor pelos custos permitidos (definidos pelo contrato) ao fornecedor acrescidos de um valor fixo de lucro (remuneração).<br><br>
            
            Contrato de Custo Mais Remuneração de Incentivo (CMRI)<br>
            Um tipo de Contrato de Custos Reembolsáveis em que o comprador reembolsa o fornecedor pelos custos permitidos (definidos pelo contrato) ao fornecedor. O fornecedor terá direito a seu lucro se atender aos critérios de desempenho definidos.<br><br>
            
            Contratos por tempo e material (T&M)<br>
            Um tipo de Contrato Híbrido, contendo aspectos dos Contratos de Custos Reembolsáveis e Contratos de Preço Fixo. Os Contratos por Tempo e Material se assemelham aos acordos do tipo com Custos Reembolsáveis por serem modificáveis, já que o valor total do acordo não é definido no momento em que ele é firmado. Dessa forma, os Contratos por Tempo e Material podem ter o seu valor aumentado como se fossem acordos de Custos Reembolsáveis. Por outro lado, os acordos por Tempo e Material podem também ser semelhantes a acordos de Preço Fixo. Por exemplo, os valores unitários são preestabelecidos pelo comprador e pelo fornecedor, quando ambas as partes concordam com os valores de serviços profissionais para a categoria de "engenheiros seniores"<br><br>
         ';
    }

	#Imprimi valores
	$Conteudo = $banco->CarregaHtml('curso');
    $Conteudo = str_replace('<%CURSO%>',$descr,$Conteudo);
?>