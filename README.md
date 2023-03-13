
# Facade

O **Facade** é um padrão de projeto estrutural que fornece uma interface simplificada para uma biblioteca, um framework, ou qualquer conjunto complexo de classes.

## Analogia com o mundo real

Imagine que você tenha um e-commerce e um de seus clientes queira se descadastrar completamente da plataforma. Você teria que apagar todos os seus dados, documentos, foto de perfil, logs de acesso (apenas hipoteticamente), e por fim, enviar um e-mail para ele confirmando a ação da remoção. A ação de remover usuário deveria executar todas essas ações.

## Aplicação

Utilize o padrão  **Facade**  quando você possui vários *subsistemas* (no exemplo acima, cada remoção de um grupo) e precisa de uma interface simplificada que esconda toda essa complexidade. Também pode ser utilizado quando você quer estruturar um subsistema em camadas. 

## Implementação

Em nosso algoritmo, dividimos o problema na pasta  _original_  e a solução na pasta  _refactored_. Alteramos o arquivo *index.php* para, ao invés de fazer chamadas diretas para cada um dos  *models* responsáveis por sua respectiva remoção, instanciamos estaticamente apenas a classe **facade**, passando o cliente como argumento e ela classe fica responsável pela por instanciar cada um dos *models*.

## Fonte

-   [Refactoring Guru](https://refactoring.guru/design-patterns/facade)
-   [Código Fonte TV](https://www.youtube.com/watch?v=8tyNCznvgW8)
