CREATE SCHEMA `cms` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE cms;

CREATE TABLE `cms`.`module` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `controller` VARCHAR(100) NOT NULL,
  `icon` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

insert into module values
(null, 'Home', '', 'home'),
(null, 'Dados do Site', 'config', 'cogs'),
(null, 'Menu', 'menu', 'tasks'),
(null, 'Conteúdo', 'content', 'quote-left'),
(null, 'Galeria de Fotos', 'photogallery', 'camera-retro'),
(null, 'Fotos', 'photo', 'picture-o'),
(null, 'Galeria de Videos', 'videogallery', 'film'),
(null, 'Videos', 'video', 'play-circle'),
(null, 'Categoria de Produtos', 'productcategory', 'shopping-cart'),
(null, 'Produtos', 'product', 'gift'),
(null, 'Contatos', 'form', 'envelope-o'),
(null, 'Ajuda', 'help', 'info-circle');


CREATE TABLE `cms`.`config` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(200) NOT NULL,
  `image` VARCHAR(100),
  `email` VARCHAR(200) NOT NULL,
  `contact` VARCHAR(100),
  `address` TEXT,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;




CREATE TABLE `cms`.`type_menu` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `controller` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

insert into type_menu values
(null, 'Conteúdo', 'conteudo'),
(null, 'Notícias', 'noticias'),
(null, 'Produtos', 'produtos'),
(null, 'Galeria de Fotos', 'fotos'),
(null, 'Galeria de Videos', 'videos'),
(null, 'Contato', 'contato');





CREATE TABLE `cms`.`menu` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `master_id` INT NULL,
  `type_menu_id` INT NOT NULL,
  `title` VARCHAR(100) NOT NULL,
  `description` TEXT NULL,
  `image` VARCHAR(100) NULL,
  `special` INT NULL,
  `exibition` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_type_menu_idx` (`type_menu_id` ASC),
  CONSTRAINT `fk_type_menu`
    FOREIGN KEY (`type_menu_id`)
    REFERENCES `cms`.`type_menu` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

ALTER TABLE `cms`.`menu` 
ADD CONSTRAINT `fk_master`
  FOREIGN KEY (`master_id`)
  REFERENCES `cms`.`menu` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;


CREATE TABLE `cms`.`type_page` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `description` TEXT NULL,
  `page` VARCHAR(100) NOT NULL,
  `image` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

insert into type_page values
(null, 'Página com imagem destaque no topo', 'Modelo de página com uma imagem grande em destaque no topo do página', 'simple_page_top', 'page_top.png');





CREATE TABLE `cms`.`content` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `menu_id` INT NULL,
  `type_page_id` INT NULL,
  `title` VARCHAR(100) NOT NULL,
  `description` TEXT NULL,
  `content` TEXT NULL,
  `image` VARCHAR(100) NULL,
  `date_create` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_menu_idx` (`menu_id` ASC),
  INDEX `fk_type_page_id` (`type_page_id` ASC),
  CONSTRAINT `fk_menu`
    FOREIGN KEY (`menu_id`)
    REFERENCES `cms`.`menu` (`id`)
    ON DELETE SET NULL
    ON UPDATE SET NULL,
  CONSTRAINT `fk_type_page`
    FOREIGN KEY (`type_page_id`)
    REFERENCES `cms`.`type_page` (`id`)
    ON DELETE SET NULL
    ON UPDATE SET NULL);

















insert into module_action values
(null, 3, 'Gerenciar Todos','index', 'pencil-square-o'),
(null, 3, 'Adicionar Novo', 'fresh', 'plus-square-o'),
(null, 4, 'Gerenciar Todos','index', 'pencil-square-o'),
(null, 4, 'Adicionar Novo', 'fresh', 'plus-square-o'),
(null, 5, 'Gerenciar Todos','index', 'pencil-square-o'),
(null, 5, 'Adicionar Novo', 'fresh', 'plus-square-o'),
(null, 6, 'Gerenciar Todos','index', 'pencil-square-o'),
(null, 6, 'Adicionar Novo', 'fresh', 'plus-square-o'),
(null, 7, 'Gerenciar Todos','index', 'pencil-square-o'),
(null, 7, 'Adicionar Novo', 'fresh', 'plus-square-o'),
(null, 8, 'Gerenciar Todos','index', 'pencil-square-o'),
(null, 8, 'Adicionar Novo', 'fresh', 'plus-square-o'),
(null, 9, 'Gerenciar Todos','index', 'pencil-square-o'),
(null, 9, 'Adicionar Novo', 'fresh', 'plus-square-o'),
(null, 10, 'Gerenciar Todos','index', 'pencil-square-o'),
(null, 10, 'Adicionar Novo', 'fresh', 'plus-square-o');