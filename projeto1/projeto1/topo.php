<?php $nome = "PowerUp Fitness"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PowerUp Fitness - Sua Melhor Forma Começa Aqui</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        :root {
            --cor-principal: #FF4500; /* Laranja VIBRANTE */
            --cor-secundaria: #333333; /* Cinza Escuro */
            --cor-fundo: #1a1a1a; /* Fundo Muito Escuro */
        }

        body {
            background-color: var(--cor-fundo);
            color: #f0f0f0; /* Texto Claro */
        }
        
        /* Estilo para o Cabeçalho */
        header h2 {
            color: var(--cor-principal) !important;
            font-weight: 700;
            text-transform: uppercase;
        }

        /* Estilo para a Navegação */
        .navbar {
            background-color: var(--cor-secundaria) !important;
            border-bottom: 3px solid var(--cor-principal);
        }

        .nav-link {
            color: #cccccc !important;
            transition: color 0.3s;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--cor-principal) !important;
            font-weight: bold;
        }

        /* Estilo para o Conteúdo */
        .container, .container-fluid, p {
            color: #f0f0f0;
        }

        /* Estilo para Títulos */
        h3, h2 {
            color: var(--cor-principal);
            font-weight: 600;
        }

        /* Estilo para o Rodapé */
        .card-footer {
            background-color: var(--cor-secundaria);
            color: #999999;
            text-align: center;
            border-top: 3px solid var(--cor-principal);
        }
        
        /* Links em geral */
        a {
            color: var(--cor-principal);
            text-decoration: none;
        }
        a:hover {
            color: #ffffff;
        }

        /* Estilo de Formulário e Botões */
        .form-control {
            background-color: #444444;
            color: #ffffff;
            border: 1px solid var(--cor-principal);
        }
        .form-control:focus {
            background-color: #555555;
            box-shadow: 0 0 0 0.25rem rgba(255, 69, 0, 0.5); /* Sombra laranja */
        }
        .form-label {
            color: #cccccc;
        }
        .btn-primary {
            background-color: var(--cor-principal);
            border-color: var(--cor-principal);
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #e63900;
            border-color: #e63900;
        }
        /* Admin links */
        .admin-link a {
            color: #cccccc;
            margin-right: 15px;
            font-weight: 500;
        }
        .admin-link a:hover {
            color: var(--cor-principal);
        }
    </style>
</head>
<body>
<header class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
       <h2 class="text-white"><?=$nome;?></h2>
    </div>
</header>