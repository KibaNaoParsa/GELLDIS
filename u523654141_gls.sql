-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 28/03/2019 às 21:18
-- Versão do servidor: 5.7.24-0ubuntu0.18.04.1
-- Versão do PHP: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u523654141_gls`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `texto` text NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `data` date NOT NULL,
  `tipo_evento` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `texto`, `titulo`, `data`, `tipo_evento`) VALUES
(1, '<p xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras iaculis at urna eu sagittis. Sed neque urna, dignissim id tortor eu, sollicitudin semper tortor. Suspendisse eget pharetra velit. Etiam venenatis tellus et nisl congue finibus. Maecenas viverra blandit magna, et blandit orci interdum in. Sed finibus, ligula auctor convallis cursus, augue tortor ultricies dui, ut luctus nulla diam id neque. Vivamus sit amet ante vulputate, posuere orci in, fringilla tellus. Nunc sit amet sapien arcu. Ut sit amet aliquam arcu. Nunc sed semper nulla. Vestibulum ac sapien ullamcorper, vehicula libero ut, sagittis augue. Suspendisse mattis rhoncus tellus ut placerat. Morbi vel odio a leo luctus feugiat. Suspendisse aliquam ligula ac dui hendrerit tristique. Integer condimentum ornare nisi at viverra.</p>\r\n<p xss=removed>Morbi vel libero efficitur, fringilla est sed, pretium leo. Etiam mollis tortor in augue mollis viverra. Curabitur vitae arcu et felis euismod suscipit. Nunc lobortis faucibus venenatis. Pellentesque aliquet, risus non aliquet auctor, quam ipsum porta felis, at finibus odio eros vel lacus. Etiam vulputate iaculis urna eu finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean id scelerisque neque. Fusce ac est ut felis sagittis mattis. Nunc dapibus semper arcu, eget pharetra metus tincidunt molestie. Cras nec sagittis arcu.</p>\r\n<p xss=removed>Maecenas tempor efficitur augue at eleifend. Vestibulum ut ligula quis magna malesuada sagittis id id turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum, neque ac consequat luctus, tortor eros pulvinar lacus, ac maximus nulla sem vel dolor. Nam tellus augue, iaculis rhoncus rhoncus eu, pulvinar a eros. Praesent pretium arcu eu lorem fermentum, id tincidunt leo eleifend. Phasellus congue nulla at libero fringilla hendrerit in id tellus. Donec ipsum eros, tempus nec congue vel, porttitor a lorem.</p>', 'Evento de teste, PARTICIPE !!', '2018-12-26', 1),
(2, '<p>Igor Gregori</p>', 'Evento de teste', '2018-12-11', 1),
(3, '<p>Luciano Palm</p>', 'III SILL Multiletramento', '2018-12-11', 0),
(4, '<p>Igor Gregori</p>', '3º SILL Multiletramento em foco', '2018-06-08', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `estudante`
--

CREATE TABLE `estudante` (
  `id_estudante` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nivel_de_treinamento` varchar(50) NOT NULL,
  `data_inclusao` date NOT NULL,
  `lattes_link` varchar(255) NOT NULL,
  `espelho_estudante_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `estudante`
--

INSERT INTO `estudante` (`id_estudante`, `nome`, `nivel_de_treinamento`, `data_inclusao`, `lattes_link`, `espelho_estudante_link`) VALUES
(3, 'Ana Carolina Rodrigues Ferreira', 'Graduação', '2017-02-21', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K8475623Y6', 'http://dgp.cnpq.br/dgp/espelhorh/6254634257842581'),
(4, 'Bruna Rafaela Silva Tobias', 'Graduação', '2017-02-21', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K8080237H3', 'http://dgp.cnpq.br/dgp/espelhorh/1853266751545189'),
(5, 'Caroline Souza Silva', 'Ensino Médio (2o grau)', '2017-05-09', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K8637914U2', 'http://dgp.cnpq.br/dgp/espelhorh/4355418898681525'),
(6, 'Denison Maciel Arantes', 'Graduação', '2018-08-06', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K8078493P8', 'http://dgp.cnpq.br/dgp/espelhorh/2060953601981840'),
(7, 'Giovani Rodrigues da Silva Júnior', 'Graduação', '2017-02-21', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K8162187D3', 'http://dgp.cnpq.br/dgp/espelhorh/9356468847612159'),
(8, 'Gustavo Alessandro Da Silva Júnior', 'Ensino Médio (2o grau)', '2018-01-27', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K8042999D1', 'http://dgp.cnpq.br/dgp/espelhorh/3186465591682248'),
(9, 'Isabela de Fátima Braz', 'Ensino Médio (2o grau)', '2018-05-09', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K8639260U3', 'http://dgp.cnpq.br/dgp/espelhorh/4124127915080488'),
(10, 'Júlia Lopes Olivier', 'Ensino Profissional de nível técnico', '2018-07-30', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K2739458T6', 'http://dgp.cnpq.br/dgp/espelhorh/2104144520090130'),
(11, 'Luciana Andrade Miranda', 'Não há formação em andamento', '2018-01-27', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4025460U6', 'http://dgp.cnpq.br/dgp/espelhorh/1203875661207684'),
(12, 'Marcelo Vinícius Spuri Ribeiro Silva', 'Graduação', '2018-08-06', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K8078947H2', 'http://dgp.cnpq.br/dgp/espelhorh/4859757681265865'),
(13, 'Naiara Faria Lima', 'Graduação', '2018-07-30', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K8078957P8', 'http://dgp.cnpq.br/dgp/espelhorh/2008909012090367'),
(15, 'Ricardo Teixeira Bonacorci', 'Graduação', '2018-01-27', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4402859J6', 'http://dgp.cnpq.br/dgp/espelhorh/4607169735378688'),
(16, 'Roselene Dalcin', 'Graduação', '2018-01-27', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K8434699P6', 'http://dgp.cnpq.br/dgp/espelhorh/4711802646368004');

-- --------------------------------------------------------

--
-- Estrutura para tabela `estudante_has_pesquisa`
--

CREATE TABLE `estudante_has_pesquisa` (
  `id_estudante` int(11) NOT NULL,
  `id_pesquisa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `estudante_has_pesquisa`
--

INSERT INTO `estudante_has_pesquisa` (`id_estudante`, `id_pesquisa`) VALUES
(6, 2),
(11, 2),
(9, 2),
(13, 2),
(3, 4),
(8, 4),
(10, 4),
(7, 3),
(5, 4),
(4, 3),
(15, 3),
(12, 3),
(8, 5),
(15, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `EVENTO`
--

CREATE TABLE `EVENTO` (
  `idEVENTO` int(11) NOT NULL,
  `nome` varchar(100) CHARACTER SET utf16 NOT NULL,
  `numouvintes` int(11) NOT NULL,
  `numtrabalhos` int(11) NOT NULL,
  `numtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `EVENTO`
--

INSERT INTO `EVENTO` (`idEVENTO`, `nome`, `numouvintes`, `numtrabalhos`, `numtotal`) VALUES
(1, 'Educação: métodos e práticas com foco na pedagogia dos multiletramentos no contexto do ensino', 0, 0, 0),
(2, 'Multiletramento e multimodalidade sob o olhar da Linguística', 0, 0, 0),
(3, 'Literatura, ensino e múltiplos limites', 0, 0, 0),
(4, 'Multimodalidade, Multiletramentos e Tecnologias', 0, 0, 0),
(5, 'Linguagens, arte, política: leitura(s) de mundo', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `eventos_participados`
--

CREATE TABLE `eventos_participados` (
  `id_eventos_participados` int(11) NOT NULL,
  `titulo` varchar(70) NOT NULL,
  `texto` text NOT NULL,
  `data_eventos_participados` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `eventos_participados`
--

INSERT INTO `eventos_participados` (`id_eventos_participados`, `titulo`, `texto`, `data_eventos_participados`) VALUES
(9, 'Troca de cartas, CEFET-MG varginha e IF campus machado', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut condimentum feugiat enim in dignissim. Suspendisse vitae risus libero. Nulla vestibulum erat enim, nec pulvinar sem tempor id. Sed in urna enim. Sed pharetra venenatis luctus. Duis eu sem suscipit, malesuada nulla a, rhoncus magna. Sed nunc ex, tempor nec nulla non, vehicula facilisis elit. Nunc id justo sed sapien tempor euismod eu ut enim. Mauris aliquam enim id sem interdum facilisis.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Maecenas vulputate vel nisl eu aliquet. Pellentesque nec libero luctus, condimentum libero eget, hendrerit mi. Maecenas metus mi, mollis ut tortor vitae, blandit commodo massa. Suspendisse suscipit, est quis feugiat suscipit, mauris ligula consequat dolor, non malesuada libero nibh id metus. Integer ac congue urna, vel vestibulum dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacus enim, pulvinar viverra mattis fermentum, ornare vel augue. Mauris dolor tortor, dignissim at posuere quis, malesuada sed nibh. In feugiat tellus eget sem gravida commodo. Nulla facilisi. Fusce commodo condimentum mauris ac consequat. Nulla rutrum, enim eget dapibus elementum, mi odio tempus turpis, sit amet molestie neque mauris at elit. Pellentesque sit amet turpis gravida, dignissim tortor a, facilisis ligula. Nullam eu augue ex.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Morbi in est a massa lacinia vehicula. Morbi ut augue id lectus feugiat scelerisque. Aliquam ac laoreet metus. Aliquam semper mi sit amet libero lacinia, id suscipit neque volutpat. Pellentesque vel tortor molestie, ullamcorper odio eget, ornare lectus. Maecenas faucibus quis magna eu laoreet. Fusce vulputate vestibulum felis eu bibendum. Mauris aliquet condimentum efficitur. Sed eget nunc sem. Nulla fermentum pretium auctor. Nullam vel tincidunt purus.</p>', '2018-09-18'),
(11, 'Evento de teste Igor', '<p>Evento de teste</p>', '2018-12-11'),
(12, 'as palavras e as coisas', '<p>leitura</p>', '2018-12-11'),
(13, 'Reunião no UNIS para definição do 3º SILL', '', '2018-11-30');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagem`
--

CREATE TABLE `imagem` (
  `id_imagem` int(11) NOT NULL,
  `id_evento_fk` int(11) NOT NULL,
  `extensao` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `imagem`
--

INSERT INTO `imagem` (`id_imagem`, `id_evento_fk`, `extensao`) VALUES
(9, 9, 'jpg'),
(10, 9, 'jpg'),
(11, 9, 'jpg'),
(12, 9, 'jpg'),
(13, 9, 'jpg'),
(14, 9, 'jpg'),
(15, 9, 'JPG'),
(16, 9, 'JPG'),
(18, 13, 'jpg'),
(19, 11, 'jpg'),
(20, 11, 'jpg'),
(21, 12, 'jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `INSCRITO`
--

CREATE TABLE `INSCRITO` (
  `idINSCRITO` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `instituicao` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `tipo` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `artigo` text,
  `idEVENTO` int(11) NOT NULL,
  `situacao` int(11) NOT NULL,
  `palavras_chave` varchar(150) DEFAULT NULL,
  `necessidades` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `membro`
--

CREATE TABLE `membro` (
  `id_membro` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `titulacao` varchar(50) NOT NULL,
  `data_inclusao` date NOT NULL,
  `lattes_link` varchar(255) NOT NULL,
  `espelho_membro_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `membro`
--

INSERT INTO `membro` (`id_membro`, `nome`, `titulacao`, `data_inclusao`, `lattes_link`, `espelho_membro_link`) VALUES
(6, 'Alex Reis da Silva', 'Mestrado', '2018-08-06', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4655866H0', 'http://dgp.cnpq.br/dgp/espelhorh/3060712430179982'),
(7, 'Andréa de Lourdes Cardoso dos Santos', 'Especialização', '2018-01-27', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4205353H0', 'http://dgp.cnpq.br/dgp/espelhorh/8833587136912996'),
(8, 'Antonio Luiz Prado Serenini', 'Doutorado', '2018-01-27', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4256721Y5', 'http://dgp.cnpq.br/dgp/espelhorh/8752543647496970'),
(9, 'Carina Adriele Duarte de Melo Figueiredo', 'Doutorado', '2017-02-21', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4263561J1', 'http://dgp.cnpq.br/dgp/espelhorh/6909130283777291'),
(10, 'Luciano Andre Palm', 'Mestrado', '2017-02-21', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4362183Z6', 'http://dgp.cnpq.br/dgp/espelhorh/3007153341486577'),
(11, 'Cintia Cherubino Luckhurst', 'Mestrado', '2017-02-20', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4211370D1', 'http://dgp.cnpq.br/dgp/espelhorh/5507584052766365'),
(12, 'Edilaine Gonçalves Ferreira de Toledo', 'Doutorado', '2017-02-20', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4212863T0', 'http://dgp.cnpq.br/dgp/espelhorh/6030743545191828'),
(13, 'Eduardo de Oliveira Bueno Queiroz Fontes', 'Mestrado', '2017-02-21', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4509826H6', 'http://dgp.cnpq.br/dgp/espelhorh/7673666769370106'),
(14, 'Emanuela Francisca Ferreira Silva', 'Doutorado', '2017-05-09', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4248214U4', 'http://dgp.cnpq.br/dgp/espelhorh/2708004464526969'),
(15, 'Erika Kress', 'Mestrado', '2017-05-09', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4785059D2', 'http://dgp.cnpq.br/dgp/espelhorh/3010843548809913'),
(16, 'Keilla Conceição Petrin Grande', 'Mestrado', '0000-00-00', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4294720J8', 'http://dgp.cnpq.br/dgp/espelhorh/4470471388921783'),
(17, 'Luciane de Castro Quintiliano', 'Doutorado', '2018-08-06', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4771055E6', 'http://dgp.cnpq.br/dgp/espelhorh/4150797866554328'),
(18, 'Roseana Nunes Baracat Moreira', 'Mestrado', '2017-02-21', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4703775U2', 'http://dgp.cnpq.br/dgp/espelhorh/7351936178429636'),
(19, 'Valeria Mayworm Woll', 'Especialização', '2017-02-21', 'http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4768463Z3', 'http://dgp.cnpq.br/dgp/espelhorh/8806607329699308');

-- --------------------------------------------------------

--
-- Estrutura para tabela `membro_has_pesquisa`
--

CREATE TABLE `membro_has_pesquisa` (
  `id_membro` int(11) NOT NULL,
  `id_pesquisa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `membro_has_pesquisa`
--

INSERT INTO `membro_has_pesquisa` (`id_membro`, `id_pesquisa`) VALUES
(8, 2),
(9, 3),
(10, 2),
(6, 2),
(12, 2),
(17, 2),
(16, 3),
(18, 3),
(14, 3),
(16, 4),
(13, 4),
(18, 4),
(11, 4),
(19, 4),
(12, 4),
(15, 4),
(7, 4),
(11, 5),
(19, 5),
(12, 5),
(12, 5),
(8, 5),
(14, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pesquisa`
--

CREATE TABLE `pesquisa` (
  `id_pesquisa` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `espelho_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `pesquisa`
--

INSERT INTO `pesquisa` (`id_pesquisa`, `nome`, `espelho_link`) VALUES
(2, 'Discurso, Cultura, Educação e Sociedade Contemporânea.', 'http://dgp.cnpq.br/dgp/espelholinha/972927454832763421342'),
(3, 'Literatura e outras Artes e Midias - LAM', 'http://dgp.cnpq.br/dgp/espelholinha/972927454832763495598'),
(4, 'Processos de ensino-aprendizagem de língua materna, suas literaturas e tecnologias.', 'http://dgp.cnpq.br/dgp/espelholinha/9729274548327634158934'),
(5, 'Semiótica: teoria e aplicação', 'http://dgp.cnpq.br/dgp/espelholinha/9729274548327634105145');

-- --------------------------------------------------------

--
-- Estrutura para tabela `reuniao`
--

CREATE TABLE `reuniao` (
  `id_reuniao` int(11) NOT NULL,
  `texto` text NOT NULL,
  `titulo` text NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `reuniao`
--

INSERT INTO `reuniao` (`id_reuniao`, `texto`, `titulo`, `data`) VALUES
(6, '<p>\"Post de teste, dados ficcionais\"</p>\r\n<p><span xss=removed>Morbi vel libero efficitur, fringilla est sed, pretium leo. Etiam mollis tortor in augue mollis viverra. Curabitur vitae arcu et felis euismod suscipit. Nunc lobortis faucibus venenatis. Pellentesque aliquet, risus non aliquet auctor, quam ipsum porta felis, at finibus odio eros vel lacus. Etiam vulputate iaculis urna eu finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean id scelerisque neque. Fusce ac est ut felis sagittis mattis. Nunc dapibus semper arcu, eget pharetra metus tincidunt molestie. Cras nec sagittis arcu.</span></p>\r\n<p><span xss=removed>Junte-se a nós, nos encontraremos no lugar tal dia tal</span></p>', 'Junte-se a nós, GELLDIS', '2018-12-19'),
(7, '<p>Teste: Reunião GELLDIS - Pesquisa em Varginha </p>', 'Reunião GELLDIS - Pesquisa em Varginha ', '2018-12-12'),
(8, '<p>Pauta: definição de ementas</p>', '3º SILL Multiletramento em foco - reunião para preparação do evento', '2018-02-04');

-- --------------------------------------------------------

--
-- Estrutura para tabela `reuniaoprivada`
--

CREATE TABLE `reuniaoprivada` (
  `id_reuniao` int(11) NOT NULL,
  `texto` text NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `reuniaoprivada`
--

INSERT INTO `reuniaoprivada` (`id_reuniao`, `texto`, `titulo`, `data`) VALUES
(5, '<p><span xss=removed>\"Post de teste, dados ficcionais\"</span></p>\r\n<p>A todos os participantes do evento troca de cartas, peço por gentileza que compareçam ao local x dia x</p>', 'Troca de cartas', '2018-12-18');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `privilegio` tinyint(1) NOT NULL DEFAULT '0',
  `ativo` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `nome`, `senha`, `privilegio`, `ativo`) VALUES
(1, 'diloca@gmail.com', 'diloca', '356a192b7913b04c54574d18c28d46e6395428ab', 1, 1),
(2, 'professorlucianopalm@gmail.com', 'Luciano André Palm', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, 0),
(3, 'carinaduartemelo@gmail.com', 'Carina Adriele Duarte De Melo Figueiredo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, 0),
(4, 'edigonfer@gmail.com', 'Edilaine Gonçalves Ferreira De Toledo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Índices de tabela `estudante`
--
ALTER TABLE `estudante`
  ADD PRIMARY KEY (`id_estudante`);

--
-- Índices de tabela `estudante_has_pesquisa`
--
ALTER TABLE `estudante_has_pesquisa`
  ADD KEY `id_estudante` (`id_estudante`),
  ADD KEY `id_pesquisa` (`id_pesquisa`);

--
-- Índices de tabela `EVENTO`
--
ALTER TABLE `EVENTO`
  ADD PRIMARY KEY (`idEVENTO`);

--
-- Índices de tabela `eventos_participados`
--
ALTER TABLE `eventos_participados`
  ADD PRIMARY KEY (`id_eventos_participados`);

--
-- Índices de tabela `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id_imagem`),
  ADD KEY `id_evento_fk` (`id_evento_fk`);

--
-- Índices de tabela `INSCRITO`
--
ALTER TABLE `INSCRITO`
  ADD PRIMARY KEY (`idINSCRITO`),
  ADD KEY `idEVENTO` (`idEVENTO`);

--
-- Índices de tabela `membro`
--
ALTER TABLE `membro`
  ADD PRIMARY KEY (`id_membro`);

--
-- Índices de tabela `membro_has_pesquisa`
--
ALTER TABLE `membro_has_pesquisa`
  ADD KEY `id_membro` (`id_membro`),
  ADD KEY `id_pesquisa` (`id_pesquisa`);

--
-- Índices de tabela `pesquisa`
--
ALTER TABLE `pesquisa`
  ADD PRIMARY KEY (`id_pesquisa`);

--
-- Índices de tabela `reuniao`
--
ALTER TABLE `reuniao`
  ADD PRIMARY KEY (`id_reuniao`);

--
-- Índices de tabela `reuniaoprivada`
--
ALTER TABLE `reuniaoprivada`
  ADD PRIMARY KEY (`id_reuniao`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `estudante`
--
ALTER TABLE `estudante`
  MODIFY `id_estudante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de tabela `EVENTO`
--
ALTER TABLE `EVENTO`
  MODIFY `idEVENTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `eventos_participados`
--
ALTER TABLE `eventos_participados`
  MODIFY `id_eventos_participados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de tabela `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de tabela `INSCRITO`
--
ALTER TABLE `INSCRITO`
  MODIFY `idINSCRITO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de tabela `membro`
--
ALTER TABLE `membro`
  MODIFY `id_membro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de tabela `pesquisa`
--
ALTER TABLE `pesquisa`
  MODIFY `id_pesquisa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `reuniao`
--
ALTER TABLE `reuniao`
  MODIFY `id_reuniao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de tabela `reuniaoprivada`
--
ALTER TABLE `reuniaoprivada`
  MODIFY `id_reuniao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `estudante_has_pesquisa`
--
ALTER TABLE `estudante_has_pesquisa`
  ADD CONSTRAINT `estudante_has_pesquisa_ibfk_1` FOREIGN KEY (`id_estudante`) REFERENCES `estudante` (`id_estudante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudante_has_pesquisa_ibfk_2` FOREIGN KEY (`id_pesquisa`) REFERENCES `pesquisa` (`id_pesquisa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `imagem`
--
ALTER TABLE `imagem`
  ADD CONSTRAINT `imagem_ibfk_1` FOREIGN KEY (`id_evento_fk`) REFERENCES `eventos_participados` (`id_eventos_participados`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `INSCRITO`
--
ALTER TABLE `INSCRITO`
  ADD CONSTRAINT `INSCRITO_ibfk_1` FOREIGN KEY (`idEVENTO`) REFERENCES `EVENTO` (`idEVENTO`);

--
-- Restrições para tabelas `membro_has_pesquisa`
--
ALTER TABLE `membro_has_pesquisa`
  ADD CONSTRAINT `membro_has_pesquisa_ibfk_1` FOREIGN KEY (`id_pesquisa`) REFERENCES `pesquisa` (`id_pesquisa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `membro_has_pesquisa_ibfk_2` FOREIGN KEY (`id_membro`) REFERENCES `membro` (`id_membro`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
