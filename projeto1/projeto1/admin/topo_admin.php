<?php $nome_admin = "PowerUp Fitness Admin"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Painel Administrativo - PowerUp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        :root {
            --cor-principal: #FF4500; /* Laranja VIBRANTE */
            --cor-fundo: #212529; /* Fundo escuro Bootstrap */
            --cor-destaque: #343a40; /* Cinza mais escuro para cards/nav */
        }

        body {
            background-color: var(--cor-fundo);
            color: #f8f9fa; /* Texto Branco */
        }
        
        /* Estilo para Títulos */
        h1, h2, h3 {
            color: var(--cor-principal);
            font-weight: 600;
        }

        /* Estilo para a Navegação Admin */
        .admin-nav {
            background-color: var(--cor-destaque);
            padding: 10px 0;
            border-bottom: 3px solid var(--cor-principal);
        }

        .admin-nav a {
            color: #cccccc;
            text-decoration: none;
            padding: 5px 15px;
            margin-right: 10px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .admin-nav a:hover {
            background-color: var(--cor-principal);
            color: #fff;
        }

        /* Estilo de Formulário e Botões */
        .form-control {
            background-color: #444444;
            color: #ffffff;
            border: 1px solid var(--cor-principal);
        }
        .form-control:focus {
            background-color: #555555;
            box-shadow: 0 0 0 0.25rem rgba(255, 69, 0, 0.5);
        }
        .form-label {
            color: #cccccc;
        }
        .btn-primary {
            background-color: var(--cor-principal);
            border-color: var(--cor-principal);
            font-weight: bold;
        }
        .btn-primary:hover {
            background-color: #e63900;
            border-color: #e63900;
        }
        
        /* Links de Alterar/Excluir */
        .admin-link-action {
            color: #17a2b8; /* Cor de informação para Alterar */
            margin-right: 10px;
        }
        .admin-link-action.delete {
             color: #dc3545; /* Cor de perigo para Excluir */
        }
    </style>
</head>
<body>
<div class="container-fluid bg-dark p-3">
   <h1 class="text-white"><?=$nome_admin;?></h1>
</div>