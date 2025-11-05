--
-- Comando SQL para criar a tabela 'clientes'
--
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(255) NOT NULL COMMENT 'Nome completo do Aluno/Membro',
  `cidade` varchar(100) NOT NULL COMMENT 'Localidade ou Unidade do Plano',
  `estado` varchar(100) NOT NULL COMMENT 'Plano Contratado (Mensal, Anual, etc.)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela de Clientes/Alunos do Sistema';