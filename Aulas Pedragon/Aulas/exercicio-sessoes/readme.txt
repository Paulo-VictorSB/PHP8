Desafio: Sistema de Login Simples com Sessões e Includes
Objetivo: Criar um sistema de login simples onde o usuário faz login e é redirecionado para uma página de boas-vindas. Utilize sessões para gerenciar o estado do usuário e include/require para estruturar o código.

Requisitos:
Página de Login (login.php):

Deve conter um formulário com campos para "Usuário" e "Senha".
Ao enviar o formulário, o PHP deve verificar se as credenciais estão corretas.
Se as credenciais estiverem corretas, iniciar uma sessão e redirecionar para welcome.php.
Se as credenciais estiverem incorretas, exibir uma mensagem de erro.
Página de Boas-vindas (welcome.php):

Deve exibir uma mensagem de boas-vindas ao usuário logado.
Deve incluir um botão para "Logout" que destrói a sessão e redireciona para login.php.
Página de Logout (logout.php):

Deve destruir a sessão e redirecionar o usuário para login.php.
Arquivo de Configuração (config.php):

Crie um arquivo para armazenar variáveis importantes, como um array de usuários e senhas (pode ser um array simples para este desafio).
Inclua esse arquivo nas páginas necessárias usando include ou require.
Arquivo de Funções (functions.php):

Crie funções para lidar com verificações de login, gerenciamento de sessões e redirecionamentos.
Utilize include ou require para importar essas funções onde for necessário.
Extras (opcional):
Página de Registro (register.php):
Permita que novos usuários se registrem adicionando suas credenciais a um array (não persistente, apenas para prática).
Estilização:
Adicione um pouco de CSS para tornar as páginas mais apresentáveis.
Dicas:
Use session_start() no início de cada página que vai manipular sessões.
Utilize include ou require para importar config.php e functions.php nas páginas apropriadas.
Certifique-se de validar o formulário para evitar entradas vazias ou inválidas.