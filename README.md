# 🚗 Sistema de Seguros

Sistema web para cadastro e listagem de veículos segurados, com ordenação de registros.

## 🛠️ Tecnologias

- PHP
- MySQL
- HTML5
- MySQLi

## 📋 Funcionalidades

- Cadastro de carros com persistência no banco de dados
- Listagem de veículos cadastrados com ordenação via `ORDER BY`
- Interface simples de formulário HTML

## 🗄️ Banco de Dados

- **Banco:** `seguro`
- **Tabela principal:** carros/veículos segurados

## 📁 Estrutura

```
seguro/
├── index.php           # Página inicial / listagem
├── cadastrarCarro.php  # Formulário de cadastro de veículo
└── ordenado.php        # Listagem com ordenação SQL
```

## ▶️ Como executar

1. Importe o banco `seguro` no MySQL
2. Configure as credenciais de conexão nos arquivos PHP
3. Sirva o projeto em um servidor local (XAMPP, Laragon, etc.)
4. Acesse `index.php` no navegador

## 👤 Autor

Mauá Giunco — [github.com/porteiro1](https://github.com/porteiro1)
