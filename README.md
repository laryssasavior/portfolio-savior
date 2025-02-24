
# 🚀 Portfolio Savior  

Este é o meu portfólio pessoal, desenvolvido para apresentar minhas habilidades, experiência profissional e projetos na área de tecnologia.   

🔗 **Acesse o portfólio:** [(https://laryssasavior.github.io/portfolio-savior)]  

---

## 📌 Tecnologias Utilizadas  

O projeto foi desenvolvido com tecnologias modernas para garantir um design responsivo e uma experiência fluida:  

- 🎨 **HTML5** – Estrutura semântica  
- 🎨 **CSS3** – Estilização personalizada
- 🎨 **SCSS (SASS)** – Estilização modular e otimizada 
- ⚡ **JavaScript** – Interatividade e dinamismo  
- ✉ **PHP** – Processamento do formulário de contato  
- 📷 **Font Awesome** – Ícones personalizados  

---

## 🎨 Uso do SCSS (SASS)  

Para otimizar a organização e manutenção do código CSS, este projeto utiliza **SCSS (Syntactically Awesome Stylesheets)**, um pré-processador CSS que permite:  

✅ **Modularização** – Separação do código em arquivos menores e reutilizáveis  
✅ **Variáveis** – Definição de cores, fontes e espaçamentos globais  
✅ **Mixins e funções** – Facilitação de estilos reutilizáveis e responsivos  
✅ **Nesting** – Código mais limpo e estruturado  

### **Compilando SCSS para CSS**  

Se precisar modificar o estilo, edite os arquivos dentro da pasta `/scss` e compile para CSS com:  

sass scss/style.scss css/style.css

Ou, para compilar automaticamente a cada alteração:

sass --watch scss/style.scss:css/style.css

Se ainda não tem o SASS instalado, use o seguinte comando para instalá-lo:

npm install -g sass

---

## 📂 Estrutura do Projeto  

portfolio-savior/
│── assets/             # Imagens, ícones e arquivos de mídia
│── css/                # Arquivos CSS compilados
│── scss/               # Arquivos SCSS (pré-processador CSS)
│── js/                 # Scripts JavaScript
│── php/                # Backend (exemplo: envio de e-mails)
│── index.html          # Página principal do portfólio
│── send_email.php      # Script para envio do formulário de contato
│── README.md           # Documentação do projeto

---

## 📬 Formulário de Contato  

O projeto inclui um formulário funcional que permite que visitantes entrem em contato diretamente pelo site.  

### **Configuração do E-mail**  

Caso deseje modificar o destinatário dos e-mails, edite o arquivo `send_email.php` e substitua pelo e-mail desejado:  

$to = "empresasavior@gmail.com";

⚠ **Atenção:** A função `mail()` do PHP pode não funcionar em servidores locais (ex: XAMPP, WAMP). Para garantir o envio correto dos e-mails, hospede o projeto em um servidor com suporte a PHP e SMTP.  

---

## 🛠️ Como Rodar o Projeto  

### 💻 Opção 1: Rodando Localmente  
1. Clone este repositório:  

   git clone https://github.com/laryssasavior/portfolio-savior.git

2. Abra o arquivo `index.html` diretamente no navegador  

### 🌍 Opção 2: Rodando em um Servidor PHP  
1. Suba os arquivos para um servidor com suporte a PHP  
2. Acesse o site pelo navegador  

---

## 🎨 Personalização  

Você pode modificar o portfólio conforme sua identidade visual e necessidades.  

🔹 **Cores e fontes** – Editar os arquivos `.scss`  e recompilar para `.css` 
🔹 **Imagens** – Alterar os arquivos `img/`  
🔹 **Seções e conteúdos** – Modificar diretamente o `index.html`  
🔹 **Scripts e interatividade** – Ajustar os arquivos dentro da pasta `js/`  

Caso precise de alguma funcionalidade extra, sinta-se à vontade para contribuir ou abrir uma issue no repositório.  

---

## 📜 Licença  

Este projeto é de uso livre para fins educacionais e inspiração. Caso utilize como base, mencione a autora! 😊  

---

## 📞 Contato  

📧 **E-mail:** empresasavior@gmail.com  
🔗 **LinkedIn:** [(https://linkedin.com/in/laryssasavior)]
🌐 **Portfólio:** [(https://laryssasavior.github.io/portfolio-savior)]  

---
