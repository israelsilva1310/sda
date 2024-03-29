![Logo_IFSULDEMINAS-Inconfidentes](https://github.com/israelsilva1310/tcc-b/assets/33010904/53ca8b75-b773-4bd8-9466-1bacba93f6dc)
# Projeto de Geração e Distribuição de Horários para Institutos Federais

## Descrição do Projeto

Este projeto foi desenvolvido utilizando o framework CakePHP e tem como objetivo fornecer uma solução para a geração e distribuição de horários para os Institutos Federais. A geração e distribuição de horários são tarefas complexas que envolvem a alocação de disciplinas, professores, salas e outros recursos, levando em consideração restrições como disponibilidade de recursos e preferências dos envolvidos.

O sistema permite que os administradores do Instituto possam definir as restrições e preferências para a geração de horários, como horários de funcionamento das salas, preferências de alocação dos professores, entre outros. Com base nessas informações, o sistema utiliza algoritmos avançados para gerar automaticamente os horários de forma eficiente e otimizada, evitando conflitos e maximizando a utilização dos recursos disponíveis.

Além disso, o sistema também permite a distribuição dos horários para os alunos, professores e demais membros da comunidade acadêmica, facilitando o acesso e a visualização das informações.

Este projeto foi desenvolvido como parte de um Trabalho de Conclusão de Curso (TCC) e tem como objetivo demonstrar a aplicação dos conhecimentos adquiridos ao longo do curso. Ele pode servir como uma base sólida para futuros desenvolvimentos e melhorias na área de geração e distribuição de horários para Institutos Federais.

## Licença

Este projeto está licenciado sob a Licença MIT. Você é livre para usar, modificar e distribuir o código-fonte deste projeto de acordo com os termos da licença. Uma cópia da Licença MIT está incluída neste repositório. Certifique-se de ler e entender os termos da licença antes de utilizar o código-fonte deste projeto em seu próprio trabalho.

## Requisitos do Sistema

Antes de instalar e executar este projeto, verifique se seu ambiente atende aos seguintes requisitos:

- PHP versão 7.4 ou superior
- Banco de dados MySQL
- Servidor web Apache ou Nginx

## Instalação e Configuração

Siga as etapas abaixo para instalar e configurar o projeto em seu ambiente:

1. Clone este repositório em sua máquina local.
2. Configure seu servidor web para apontar para a pasta raiz do projeto.
3. Crie um banco de dados MySQL vazio.
4. Copie o arquivo `config/app.default.php` para `config/app.php` e atualize as configurações de conexão com o banco de dados.
5. Execute o seguinte comando na raiz do projeto para instalar as dependências do Composer:

   ```
   composer install
   ```

6. Execute o seguinte comando para criar as tabelas do banco de dados:

   ```
   bin/cake migrations migrate
   ```

7. Inicie o servidor web e acesse o projeto em seu navegador.

## Contribuição

Se você deseja contribuir para este projeto, fique à vontade para fazer um fork do repositório e enviar suas melhorias por meio de pull requests. Sua contribuição será muito apreciada!

## Contato

Se você tiver alguma dúvida ou sugestão relacionada a este projeto, sinta-se à vontade para entrar em contato com o autor:

- Nome: Israel C A Silva
- E-mail: israel.silva@alunos.ifsuldeminas.edu.br

Agradecemos pelo interesse neste projeto e esperamos que ele seja útil para a comunidade acadêmica na geração e distribuição de horários nos Institutos Federais.
