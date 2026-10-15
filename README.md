# ♈ Consulta do Zodíaco (PHP + XML)

Aplicação web simples desenvolvida em PHP para consulta de signos do zodíaco com base na data de nascimento inserida pelo utilizador. Os dados dos signos são armazenados e lidos a partir de um ficheiro XML estruturado.

---

## 🚀 Tecnologias Utilizadas

- **PHP 8+**: Lógica de processamento no servidor e leitura do XML.
- **XML**: Armazenamento semiestruturado das informações dos signos.
- **Bootstrap 5**: Estilização visual e componentes de interface responsiva.
- **HTML5 / CSS3**: Estrutura das páginas e estilos customizados.
- **XAMPP / Apache**: Servidor web local para execução do PHP.

---

## 📂 Estrutura do Projeto

```text
Project/
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   └── imgs/
├── layouts/
│   ├── header.php
│   └── footer.php
├── index.php
├── show_zodiac_sign.php
├── signos.xml
└── README.md
```

## ⚙️ Funcionalidades
Formulário de Entrada (index.php): Captura a data de nascimento do utilizador.

Processamento (show_zodiac_sign.php): Lê o ficheiro signos.xml via simplexml_load_file(), analisa o intervalo de datas (tratando casos de virada de ano como Capricórnio) e retorna o signo correto.

Visualização Responsiva: Layout moderno, limpo e centralizado utilizando componentes do Bootstrap 5.

## 🔧 Como Executar o Projeto Localmente
Clonar o Repositório:
git clone [https://github.com/SEU_USUARIO/SEU_REPOSITORIO.git](https://github.com/SEU_USUARIO/SEU_REPOSITORIO.git)

Mover para o XAMPP:
Copie a pasta do projeto para o diretório htdocs do seu servidor XAMPP:
C:\xampp\htdocs\Project

Iniciar o Apache:
Abra o XAMPP Control Panel e clique em Start no módulo Apache.

Acessar no Navegador:
Acesse o endereço: http://localhost/Project/

## 📝 Autor
Desenvolvido por Jovanio dos Santos Oliveira para a atividade prática do curso de Análise e Desenvolvimento de Sistemas.
