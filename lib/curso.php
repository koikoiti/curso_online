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
        #Define botoes da primeira pagina
        $botaoprox = '<button class=\'btn btn-success\' onclick=\'javascript: location.href="<%URLPADRAO%>curso/curso-pt3"\'>Clique aqui para ir para a parte 3 de 5</button>';
        $botaoant =  '<button class=\'btn btn-success\' onclick=\'javascript: location.href="<%URLPADRAO%>curso"\'>Clique aqui para ir para a parte 1 de 5</button>';
        $parte = 'Parte 2 de 5';
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
        #Define botoes da primeira pagina
        $botaoprox = '<button class=\'btn btn-success\' onclick=\'javascript: location.href="<%URLPADRAO%>curso/curso-pt4"\'>Clique aqui para ir para a parte 4 de 5</button>';
        $botaoant =  '<button class=\'btn btn-success\' onclick=\'javascript: location.href="<%URLPADRAO%>curso/curso-pt2"\'>Clique aqui para ir para a parte 2 de 5</button>';
        $parte = 'Parte 3 de 5';
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
    }elseif($this->PaginaAux[0] == 'curso-pt4'){
        #Define botoes da primeira pagina
        $botaoprox = '<button class=\'btn btn-success\' onclick=\'javascript: location.href="<%URLPADRAO%>curso/curso-pt5"\'>Clique aqui para ir para a parte 5 de 5</button>';
        $botaoant =  '<button class=\'btn btn-success\' onclick=\'javascript: location.href="<%URLPADRAO%>curso/curso-pt3"\'>Clique aqui para ir para a parte 3 de 5</button>';
        $parte = 'Parte 4 de 5';
        $descr = '
            Realizar Aquisições<br><br>
            É o processo que analisa as respostas dos fornecedores, realizando assim a seleção de um fornecedor para ser contratado.<br><br>
            
            Entradas<br>
            Plano de gerenciamento do Projeto<br>
            É o processo de gerenciamento de aquisições no projeto que engloba os processos necessários para comprar ou adquirir produtos ou serviços fora da equipe do projeto. Desenvolvimento da documentação até o encerramento do contrato a fim de cumprir o escopo do projeto.<br><br>
            
            Documentação de Aquisição<br>
            Declaração de trabalho das entregas<br>
            Suporte ao produto<br>
            Linha base do cronograma<br>
            Limitação de responsabilidade<br>
            Relatórios de desempenho<br>
            Remunerações e retenções<br>
            Período de desempenho<br>
            Penalidades<br>
            Papéis e responsabilidade<br>
            Incentivos<br>
            Local de desempenho do Fornecedor<br>
            Seguros<br>
            Aprovação de subcontratadas<br>
            Definição de preços<br>
            Solicitações de mudanças<br>
            Termo de pagamento<br>
            Mecanismos de rescisão e de resolução<br>
            Local de entrega<br>
            Garantia<br>
            Cotação<br><br>
             
            
            Critérios para seleção de fontes<br>
            A forma e os critérios de seleção de fonte incluem diversas informações como capacidade de entrega, qualidade do produto, custo do produto, conhecimento técnico e abordagem do contrato exigidos do fornecedor.<br>
            
            Entradas<br>
            Lista de fornecedores<br>
            É a lista de fornecedores qualificados, onde são mantidas as informações de potenciais fornecedores que possam ser solicitados preços, propostas ou cotações referentes ao trabalho e se enquadram nos critérios de avaliação. Essas informações geralmente se referem às experiências relevantes e outras características dos fornecedores conforme aplicável, para selecionar um ou mais fornecedores.<br><br>
            
            Propostas de fornecedores<br>
            São preparadas em resposta aos documentos de aquisição, que compõem um conjunto de informações básicas que serão usadas por um grupo de avaliação para selecionar um ou mais licitantes.<br><br>
            
            Documentos do Projeto<br>
            São os documentos que registram os riscos e as decisões contratuais relacionadas a risco e podem ser enviados para alguns ou para todos os fornecedores potenciais para solicitar suas propostas.<br><br>
            
            Decisões de fazer ou comprar<br>
            As decisões de comprar estão definidas no Plano de Gerenciamento de Aquisições<br><br>
            
            Ativos de processos organizacionais<br>
            O processo organizacional que podem influenciar o processo de realização de aquisição inclui:<br>
            Fornecedores em potencial<br>
            Informações sobre experiência passadas relevantes<br><br>
            
            Ferramentas e Técnicas<br>
            Reuniões com Licitantes<br>
            São reuniões com todos os fornecedores e compradores antes da apresentação de um a licitação ou proposta.<br>
            Sempre tomar cuidado de garantir que todos os fornecedores em potencial tenham acesso a todas as perguntas de cada fornecedor em potencial e a todas as respostas do comprador.<br><br>
            
            Técnicas de avaliação de proposta<br>
            Quando a avaliação for através das respostas dos fornecedores os critérios de ponderação deve ser previamente definidos, um processo formal de revisão da avaliação será definido pelas políticas de aquisição do comprador. Os critérios de avaliação podem envolver componentes objetivos e subjetivos já que os critérios de avaliação, quando usados para avaliação de uma proposta formalizada, geralmente recebem pesos pré-definidos.<br><br>
            
            Estimativas independentes<br>
            O patrocinador ou Gerente do projeto pode optar por preparar suas próprias estimativas independente de ter uma estimativa de custos preparados por um profissional externo.<br>
            Diferenças significativas nas estimativas de custos podem ser uma indicação de que a declaração do trabalho da aquisição foi deficiente.<br><br>
            
            Opinião e especializada<br>
            É usada na avaliação técnica especializada e é realizada para avaliar as entradas do processo, como por exemplo, avaliação das propostas. Estas avaliações serão realizadas por uma equipe de análise multidisciplinar com especialização em cada uma das áreas cobertas pelos documentos de aquisição e pelo contrato proposto<br><br>
            
            Publicidade<br>
            A relação de fornecedores em potencial pode ser expandida com a colocação de anúncios em publicações de grande circulação.<br><br>
            
            Pesquisa na Internet<br>
            A Internet tem uma grande influência na maioria das aquisições de projetos.<br><br>
            
            Negociações das aquisições<br>
            Para itens de aquisição complexas, a negociação do contrato pode ser um processo com entradas e saídas independente. Para itens de aquisição simples, os termos e condições do contrato podem ser previamente definidos e não negativos e só precisam ser aceitos pelo fornecedor.<br><br>
            
            Saídas<br>
            Fornecedores selecionados<br>
            Os fornecedores selecionados são aqueles que foram julgados como estando em uma faixa competitiva de acordo com o resultado da avaliação da proposta ou da licitação e que negociaram uma minuta do contrato que se tornará o contrato real quando for feita a adjudicação.<br>
            A aprovação final de todas as aquisições complexas, de alto valor e de alto risco em geral exige a aprovação da alta administração.<br><br>
            
            Adjudicação de contrato de aquisição<br>
            O contrato de aquisição é concedido para cada fornecedor selecionado<br>
            O contrato pode ter a forma de um simples pedido de compras ou de um documento complexo<br>
            Um contrato é um acordo legal que gera obrigações para as partes que obriga o fornecedor a fornecer os produtos, serviços ou resultados especificados e obriga o comprador a pagar ao fornecedor.<br><br>
            
            Adjudicação de contrato de aquisição<br>
            Declaração de trabalho da entregas<br>
            Suporte ao produto<br>
            Linha base do cronograma<br>
            Limitação de responsabilidade<br>
            Relatórios de desempenho<br>
            Remunerações e retenções<br>
            Período de desempenho<br>
            Penalidades<br>
            Papéis e responsabilidade<br>
            Incentivos<br>
            Local de desempenho do Fornecedor<br>
            Seguros<br>
            Aprovação de subcontratadas<br>
            Definição de preços<br>
            Solicitações de mudanças<br>
            Termo de pagamento<br>
            Mecanismos de rescisão e de resolução<br>
            Local de entrega<br>
        ';
    }elseif($this->PaginaAux[0] == 'curso-pt5'){
        #Define botoes da primeira pagina
        $botaoprox = '<button class=\'btn btn-success\' onclick=\'javascript: location.href="<%URLPADRAO%>pergunta/1"\'>Clique aqui para iniciar o teste</button>';
        $botaoant =  '<button class=\'btn btn-success\' onclick=\'javascript: location.href="<%URLPADRAO%>curso/curso-pt4"\'>Clique aqui para ir para a parte 4 de 5</button>';
        $parte = 'Parte 5 de 5';
        $descr = '
            Calendários de recursos<br>
            A quantidade e disponibilidade de recursos contratados e as datas em que cada recurso especificado pode estar ativo e inativo são documentadas.<br><br>
            
            Solicitações de mudanças<br>
            As mudanças no plano de gerenciamento do projeto, nos planos auxiliares e em outros componentes são processadas para revisão e destinação, e também podem resultar do processo Selecionar fornecedores.<br>
            Atualizações do plano de gerenciamento do projeto<br>
            As atualizações do plano de gerenciamento incluem: linha base de custos, linha base do escopo, linha base do cronograma e plano de gerenciamento de aquisições.<br><br>
            
            Atualizações dos documentos do projeto<br>
            Os documentos que podem ser atualizados dentre outros:<br>
            Registro de riscos<br>
            Documentação referente as requisitos<br>
            E rastreabilidade de requisitos<br><br>
            
            Planejamento das Aquisições<br>
            Quando são definidos os objetivos e detalhamos o escopo de um projeto, logo pensamos nas aquisições que poderão ser feitas.<br>
            Toda a compreensão do produto permite tal antecipação.<br>
            Para reduzirem os riscos de não serem encaminhadas indevidamente e não atenderem as necessidades do produto, é necessário planejar tais aquisições, tornando formal e comunicando estes processos para as pessoas envolvidas no projeto.<br>
            O planejamento das aquisições deve incluir também considerações sobre eventuais fornecedores, particularmente se o comprador deseja exercer algum grau de influência ou controle sobre as decisões de subcontratação.<br>
            A Gestão de Aquisições possui fases que serão listadas a seguir:<br>
            - DEFINIÇÃO DAS ESPECIFICAÇÕES: São necessários ao produto ou serviço critérios para a sua devida avaliação. Teremos a consideração para com os objetivos, ao escopo do projeto, declaração do escopo, descrição do produto, restrições, premissas, recursos para contratação, condições de mercado,a EAP, o orçamento preliminar, o cronograma e os recursos humanos que se fizerem necessários.<br>
            Declaração do escopo? A declaração de escopo descreve os limites atuais do projeto. Ela fornece informações importantes sobre as necessidades e estratégias do projeto que devem ser consideradas durante o planejamento das aquisições.<br>
            Descrição do produto? A descrição do produto do projeto fornece informações importantes sobre qualquer questão técnica ou preocupação que necessitariam ser consideradas durante o planejamento das aquisições.<br>
            Recursos de contratação? Se a organização executora não tem um grupo formal de compras, então, a equipe do projeto terá que prover os recursos e o conhecimento para apoiar as atividades de contratação.<br>
            Condições de mercado? O processo de planejamento de contrações deve considerar que produtos e serviços estão disponíveis no mercado, quais são os fornecedores, e sob que termos e condições.<br>
            Restrições? As restrições são fatores que limitam as opções do comprador. Uma das restrições mais comuns para muitos projetos é a disponibilidade de recursos financeiros.<br>
            Premissas? Premissas são fatores que, para fins do planejamento, serão consideradas verdadeiras, reais, ou corretas.<br>
            - LISTAGEM DOS PRINCIPAIS PRODUTOS: Com a análise dos produtos através de pesquisas on-line, de bate-papo com pessoas de outras organizações e da leitura de publicações especializadas. Tal análise permite a redução do número de potenciais fornecedores no mercado.<br>
            - DISTRIBUIÇÃO DA CARTA-PROPOSTA: Com as especificações do(s) produto(s) para os fornecedores selecionados,com detalhamento de prazos e procedimentos necessários. Discreta, a carta contém as especificações realmente importantes para o projeto.<br>
            - SELEÇÃO DE 2 ou 3 FORNECEDORES: Para apresentações presenciais aos stakeholders, deixando claros os critérios mais valorizados e conceituados na organização.<br>
            - AVALIAÇÃO DAS PROPOSTAS RECEBIDAS DOS FORNECEDORES: Se houver dúvidas, poderá ser necessário reavaliar tais propostas junto aos fornecedores.<br>
            - SELEÇÃO DOS PRODUTOS OU SERVIÇOS DO FORNECEDOR ESCOLHIDO: Mediante a escolha, será iniciado o processo de compra.<br>
            - ENCERRAMENTO: Nesta fase mediante a análise dos produtos ou serviços que foram entregues, se satisfatório é encerrada a aquisição.<br>
            A partir da compra ou contratação, é necessário monitorar o desempenho do produto/ serviço adquirido. Alguns serviços exigem que se feche formalmente o contrato e verifique se todos os produtos acertados foram entregues, dentro dos requisitos de qualidade especificados anteriormente no contrato.<br><br>
            
            Administrar Aquisições<br>
            É o processo de gerenciar as relações de aquisição, monitorar o desempenho do contrato e fazer as mudanças e correções conforme necessário. Cada um precisa assegurar que as duas partes cumpram suas obrigações contratuais e que seus próprios direitos legais sejam protegidos. Quem executa de fato o trabalho é o fornecedor cabendo, portanto, ao comprador, um papel de controlar e administrar esta execução.<br>
            Tudo o que se conhece de gerenciamento de projetos deve ser aplicado pela firma contratante com relação ao contrato. Desta forma, muito dos processos que aparecem em outras áreas do conhecimento vão ser referenciados aqui, tais, como o Plano de Gerenciamento do Projeto, os Relatórios de Desempenho, o Controle de Qualidade e o Controle de Mudanças. É através destes instrumentos que o cumprimento do cronograma e o desempenho com relação à qualidade e ao cumprimento de metas são aferidos, dentro da periodicidade que deve ser prevista no Plano de Gerenciamento do Contrato.<br>
            O controle de mudanças costuma ser o ponto mais sensível de toda a administração de contratos, principalmente em termos de negociação. É muito comum que surjam, durante o decorrer do trabalho, pedidos de mudanças na descrição dos produtos ou no SOW (Declaração do Trabalho); além disto, também podem ocorrer divergências de interpretação sobre alguns itens, isto leva a mudanças que acabam refletindo em custo e/ ou prazo, e nem sempre é fácil chegar a um acordo sobre estes pontos.<br>
            A administração das aquisições engloba a aplicação dos processos apropriados de gerenciamento de projetos às relações contratuais e a integração das saídas desses processos no gerenciamento geral do projeto. Os processos de gerenciamento de projetos que se aplicam podem incluir, entre outros:<br>
            Orientar e gerenciar a execução do projeto para autorizar o trabalho do fornecedor na ocasião apropriada:<br>
            Reportar o desempenho para monitorar o escopo do contrato, os custos. o cronograma e o desempenho técnico;<br>
            Realizar o controle da qualidade para inspecionar e verificar a adequação do produto do fornecedor;<br>
            Realizar o controle integrado de mudanças para garantir que as mudanças sejam aprovadas de forma adequada e que todas as pessoas envolvidas estejam cientes dessas mudanças e
            Monitorar e controlar os riscos para garantir a mitigação dos riscos.<br>
            A administração das aquisições também tem um componente de gerenciamento financeiro que envolve o monitoramento dos pagamentos ao fornecedor. Isso garante que os termos de pagamento definidos no contrato sejam cumpridos e que a remuneração do fornecedor fique vinculada ao seu progresso, conforme definido no contrato. O processo de administração das aquisições analisa e documentar como o fornecedor está se desempenhando ou se desempenhou com base no contrato e estabelece ações corretivas quando necessário.<br>
            A administração das aquisições engloba o gerenciamento de qualquer cancelamento do trabalho contratado (por justa causa, conveniência ou inadimplemento) de acordo com a cláusula de rescisão do contrato. Os contratos podem ser retificados a qualquer momento antes do encerramento por consentimento mútuo, de acordo com os termos de controle de mudanças do contrato.<br><br>
            
            Entradas<br>
            Documentos de aquisição: Os documentos de aquisição contêm registros completos de apoio para a administração dos processos de aquisição, inclusive as concessões de contratos de aquisição e a declaração do trabalho.<br>
            Plano de gerenciamento do projeto: O plano de gerenciamento das aquisições, que faz parte do plano, de gerenciamento do projeto, é uma da entrada para a realização das aquisições e descreve como os processos de aquisição serão gerenciados desde o desenvolvimento da documentação até o encerramento do contrato.<br>
            Relatórios de desempenho: A documentação relacionada ao desempenho do fornecedor engloba:<br>
            Documentação técnica desenvolvida pelo fornecedor e outras informações fornecidas de acordo com os termos do contrato.<br>
            Relatórios de desempenho do fornecedor. Os relatórios de desempenho do fornecedor indicam as entregas que foram concluídas e as que não foram.<br>
            Solicitações de mudanças aprovadas: As solicitações de mudanças aprovadas podem englobar modificações nos termos e condições do contrato, incluindo a declaração do trabalho da aquisição, a definição de preços e a descrição dos produtos, serviços ou resultados a serem fornecidos. Todas as mudanças são documentadas formalmente por escrito e aprovadas antes de serem implementadas.<br>
            Informações sobre o desempenho do trabalho: As informações sobre o desempenho do trabalho, incluindo a extensão com que os padrões de qualidade estão sendo cumpridos, quais custos foram incorridos ou comprometidos e quais faturas do fornecedor foram pagas, são todas coletadas como parte da execução do projeto.<br><br>
            
            Ferramentas e técnicas<br>
            Sistema de controle de mudanças no contrato: O sistema de controle de mudanças no contrato define o processo pelo qual as aquisições podem ser modificadas. Engloba os documentos, sistemas de acompanhamento, procedimentos de resolução de disputas e os níveis de aprovação necessários para autorizar as mudanças<br>
            Análise de desempenho das aquisições: A análise de desempenho das aquisições é uma avaliação estruturada do progresso do fornecedor para entregar o escopo e a qualidade do projeto, dentro dos custos e do cronograma, em comparação com o contrato. O objetivo dessa análise é identificar os êxitos e fracassos do desempenho, o progresso em relação à declaração do trabalho da aquisição e o não-cumprimento do contrato, permitindo que o comprador quantifique a capacidade ou incapacidade demonstrada pelo fornecedor para executar o trabalho.<br>
            Inspeções e auditorias: É possível realizar inspeções e auditorias solicitadas pelo comprador e apoiadas pelo fornecedor conforme especificado no contrato de aquisição durante a execução do projeto para verificar a conformidade nos processos de trabalho ou nas entregas do fornecedor.<br>
            Relatórios de desempenho: Os relatórios de desempenho proporcionam à gerência informações sobre a eficácia com que o fornecedor está atingindo os objetivos contratuais.<br>
            Sistemas de pagamento: Os pagamentos ao fornecedor em geral são processados pelo sistema de contas a pagar do comprador após a certificação de trabalho satisfatório por uma pessoa autorizada da equipe do projeto.<br>
            Administração de reivindicações: As mudanças contestadas e as mudanças construtivas em potencial são as modificações solicitadas em que o comprador e o fornecedor não conseguem chegar a um acordo sobre a remuneração ou não concordam que tenham ocorrido. Essas mudanças contestadas são chamadas de reivindicações, disputas ou recursos administrativos. Se as partes não resolverem uma reivindicação, ela terá que ser tratada em conformidade com métodos alternativos de resolução de disputas, de acordo com os procedimentos estabelecidos no contrato. O acordo de todas as reivindicações e disputas por meio de negociação é o método preferencial.<br>
            Sistema de gerenciamento de registros: O sistema de gerenciamento de registros é usado pelo gerente do projeto para gerenciar os registros e a documentação do contrato e da aquisição.<br><br>
            
            Documentação da aquisição<br>
            A documentação da aquisição inclui, mas não se limita ao contrato de aquisição com todos os cronogramas de apoio, as mudanças no contrato solicitadas mas não aprovadas e as solicitações de mudanças aprovadas. A documentação da aquisição também engloba toda a documentação técnica desenvolvida pelo fornecedor e outras informações sobre o desempenho do trabalho, tais como entregas, relatórios de desempenho do fornecedor, garantias, documentos financeiros incluindo faturas e registros de pagamentos e os resultados de inspeções relacionadas ao contrato.<br><br>
            
            Saída<br>
            Atualizações dos ativos de processos organizacionais: Os elementos dos ativos de processos organizacionais que podem ser atualizados incluem, entre outros:<br>
            Correspondência Os termos e condições do contrato em geral requerem a documentação por escrito de determinados aspectos das comunicações comprador/fornecedor, como a necessidade de avisos de desempenho insatisfatório e solicitações de esclarecimentos ou mudanças no contrato. Essa documentação pode incluir os resultados reportados de auditorias e inspeções do comprador que indicam as fraquezas que precisam ser corrigidas pelo fornecedor<br>
            Cronogramas e solicitações de pagamento. Todos os pagamentos devem ser feitos de acordo com os termos e condições do contrato de aquisição.<br>
            Documentação da avaliação do desempenho do fornecedor. A documentação da avaliação do desempenho do fornecedor é preparada pelo comprador. Essas avaliações de desempenho documentam• a capacidade do fornecedor para continuar a realizar o trabalho no contrato atual, indicam se o fornecedor pode trabalhar em projetos futuros ou classificam o desempenho do fornecedor no projeto. Esses documentos podem formar a base para o cancelamento do contrato do fornecedor ou determinar como são administradas as penalidades, remunerações ou incentivos<br><br>
            
            Solicitações de mudanças<br>
            As solicitações de mudanças no plano de gerenciamento do projeto, nos planos auxiliares e em outros componentes, como a linha de base de custos, o cronograma do projeto e o plano de gerenciamento das aquisições podem resultar do processo de administração das aquisições. As mudanças solicitadas, mas não resolvidas, podem incluir orientações fornecidas pelo comprador ou ações adotadas pelo fornecedor que a outra parte considere uma mudança construtiva para o contrato.<br>
            Atualizações do plano de gerenciamento do projeto: Os elementos do plano de gerenciamento do projeto que podem ser atualizados incluem, entre outros:<br>
            Plano de gerenciamento das aquisições. O plano de gerenciamento das aquisições é atualizado para refletir todas as solicitações de mudanças aprovadas que afetam o gerenciamento das aquisições, incluindo impactos nos custos ou cronogramas.<br>
            Linha de base do cronograma. Se houver atrasos que afetem o desempenho geral do projeto, pode ser necessário atualizar a linha de base do cronograma para refletir as expectativas atuais.<br><br>
             
            
            Boas práticas na administração de contratos<br>
            Ler e analisar o contrato<br>
            Desenvolver um plano para administração do contrato, indicando um gestor de contratos para assegurar que a organização entregue aquilo a que se propôs;<br>
            Realizar reunião inicial (kick-off), antes da execução dos trabalhos;<br>
            Controlar mudanças e manter cópias atualizadas do contrato;<br>
            Observar e respeitar os termos e condições do contrato;<br>
            Resolver claims e disputas prontamente, utilizando negociação e arbitragem para resolver disputas;<br>
            Medir, acompanhar e controlar o desempenho, elaborando relatórios de progresso;<br>
            Administrar o processo de faturamento e de pagamento;<br>
            Fazer o acompanhamento de todas as ações corretivas;<br>
            Distribuir cópia ou extrato do contrato para os principais stakeholders;<br>
            Documentar as comunicações relevantes;<br>
            Preparar atas de reuniões;<br>
            Documentar as lições aprendidas e promover a sua difusão na empresa;<br><br>
            
            Encerrar aquisições<br>
            Este processo encerra as aquisições aplicáveis a uma fase do projeto. Termos do contrato não resolvidos estão sujeitas a processos judiciais após o encerramento. Há a possibilidade de haver termos de procedimentos específicos para o encerramento do contrato.<br>
            Direitos e responsabilidades das partes no evento de um cancelamento estão contidos na cláusula de rescisão do contrato.<br>
            Caso o motivo seja justa causa ou conveniência, um contrato pode ser parcialmente ou totalmente cancelado a qualquer momento pelo comprador. Por sua vez, o fornecedor poder ser ressarcido por trabalhos concluídos e aceitos a partes do contrato.<br>
            Um contrato pode ser encerrado nas seguintes formas:<br>
            Terminação: términos das atividades contratuais;<br>
            Resilição: Acordo mútuo entre as partes;<br>
            Rescisão: Não-observância das obrigações contratuais.<br>
            As condições para término do contrato são as seguintes:<br>
            Escopo complementado nas condições especificadas<br>
            Pagamentos efetuados conforme o contrato<br>
            Obrigações tributárias, trabalhistas e fiscais cumpridas<br>
            Inexistência de pendências judiciais ou arbitrais<br><br>
            
            Entradas<br>
            Documentação da aquisição<br>
            Para encerrar o contrato, toda a documentação da aquisição é coletada, indexada e arquivada. As informações sobre o cronograma do contrato, escopo, qualidade e desempenho de custos, bem como toda a documentação das mudanças no contrato, registros de pagamento e resultados de inspeções, são catalogadas. Essas informações podem ser usadas como informações de lições aprendidas e como uma base para avaliar as contratadas para contratos futuros.<br><br>
            
            Ferramentas e Técnicas<br>
            Auditorias de aquisições<br>
            A autoria de aquisições é uma avaliação estruturada do processo de aquisições, desde o processo de planejamento das aquisições até o de administração das aquisições. O objetivo das auditorias de aquisições é identificar êxitos e fracassos que possam ser identificados na preparação ou na administração de outros contratos de aquisições no projeto ou em outros projetos dentro da organização executiva.<br><br>
            
            Acordos negociados<br>
            Em todas as relações de aquisição, o acerto final justo de todas as questões, reivindicações e disputas pendentes por meio de negociação é o objetivo principal. Sempre que não se conseguir o acordo por meio de negociação direta, deve-se explorar alguma forma de resolução alternativa de disputas, incluindo mediação ou arbitragem. Quando todas as demais alternativas falharem, o processo judicial nos tribunais é a última opção e a menos desejada.<br><br>
            
            Saídas<br>
            Aquisições encerradas<br>
            O comprador, em geral por meio do administrador de aquisições autorizado, envia ao fornecedor um aviso formal por escrito de que o contrato foi concluído. Os requisitos de encerramento formal das aquisições em geral são definidos nos termos e condições do contrato e são incluídos no plano de gerenciamento das aquisições.<br><br>
            Atualizações nos ativos de processos organizacionais que podem ser atualizados incluem, entre outros: Arquivo de aquisições. Um conjunto completo de documentos indexados do contrato, incluindo o contrato encerrado, é preparado para inclusão com os arquivos finais do projeto. Aceitação da entrega. O comprador, em geral por meio de administrador de aquisições autorizado, envia ao fornecedor um aviso requisitos para a aceitação formal das entregas e o modo como tratar as entregas que não estão em conformidade, normalmente são definidos no contrato. Documentação de lições aprendidas. As lições aprendidas, a experiência adquirida e as recomendações de melhoria dos processos devem ser incluídas nos arquivos do projeto para melhorar as aquisições futuras.<br><br>
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