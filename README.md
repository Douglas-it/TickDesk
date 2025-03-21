# 🎟️ TickDesk (Em Desenvolvimento)

> ⚠️ Este projeto ainda está em construção! Algumas funcionalidades podem estar incompletas ou sujeitas a mudanças.

> Sistema de gestão de tickets desenvolvido em **PHP, Laravel, MariaDB e XAMPP**.

## 🚀 Tecnologias Utilizadas

Este projeto foi desenvolvido com as seguintes tecnologias:

- 🟢 **PHP**
- 🟢 **Laravel**
- 🟢 **MariaDB**
- 🟢 **XAMPP** (Ambiente de Desenvolvimento)
- 🟢 **Bootstrap** (Interface)


## 🔧 Como Rodar o Projeto Localmente

### 1️⃣ Clonar o repositório
```bash
git clone https://github.com/Douglas-it/TickDesk.git
cd TickDesk
```

### 2️⃣ Configurar o Banco de Dados
- Instale o **XAMPP** e inicie o servidor Apache e o MariaDB.
- Crie um banco de dados no **phpMyAdmin** com o nome adequado.
- Configure o arquivo **.env** com as credenciais do banco de dados.
- Rode as migrations:
```bash
php artisan migrate
```

### 3️⃣ Executar o Projeto
```bash
php artisan serve
```
O projeto estará disponível em `http://127.0.0.1:8000`.

## ✅ Funcionalidades (Em Desenvolvimento)

- 🔹 Sistema de cadastro e login de usuários
- 🔹 Gestão de tickets de suporte
- 🔹 Painel administrativo
- 🔹 Notificações automáticas

## 🔜 Próximos Passos
- [ ] Implementar envio de notificações por email
- [ ] Criar relatórios de atendimento
- [ ] Melhorar interface do usuário

## 🛠️ Contribuição

Caso queira contribuir:
1. Faça um fork do repositório.
2. Crie uma branch com a sua feature (`git checkout -b minha-feature`).
3. Commit suas mudanças (`git commit -m 'Adicionando nova feature'`).
4. Faça um push para a branch (`git push origin minha-feature`).
5. Abra um Pull Request 🚀.

## 📜 Licença

Este projeto está sob a licença MIT. Sinta-se à vontade para utilizá-lo e modificá-lo.

---

💡 **Dica:** Adicione capturas de tela para destacar melhor as funcionalidades!
