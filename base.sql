drop database admin;
create database admin;
use admin;

select * from user;
insert into user values(null, 1, 'Teste Thais 2', 'thais@thais', 'admin', '123', '');

select * from content;
insert into content values(null, 1, 1, 'Teste Título 1', 'Teste de Descrição', 'Teste de Content', null, now(), 1);

update content set type_page_id = 1 where id in (1,2,3);


CREATE TABLE `cms`.`module` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `controller` VARCHAR(100) NOT NULL,
  `icon` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

select * from module;
drop table module;
truncate table module;
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

update module set title = 'Contatos' where id = 11;

update module set controller = 'cms' where id = 1;

select * from module_action;
drop table module_action;
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

select * from type_menu;
insert into type_menu values
(null, 'Conteúdo', 'conteudo'),
(null, 'Notícias', 'noticias'),
(null, 'Produtos', 'produtos'),
(null, 'Galeria de Fotos', 'fotos'),
(null, 'Galeria de Videos', 'videos'),
(null, 'Contato', 'contato');

insert into type_page values
(null, 'Página com imagem destaque no topo', 'Modelo de página com uma imagem grande em destaque no topo do página', 'simple_page_top', 'page_top.png');

select * from config;
select * from menu;
select * from content;


drop table content;
drop table menu;

select * from module;
select * from module_action;
select * from type_page;
select * from type_menu;


drop table config;
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

select * from config;
delete from config where id = 1;

CREATE TABLE `cms`.`type_menu` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `controller` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

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

truncate table menu;
select * from menu;
select * from type_menu;

CREATE TABLE `cms`.`content` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `menu_id` INT NULL,
  `type_page_id` INT NULL,
  `title` VARCHAR(45) NOT NULL,
  `description` VARCHAR(45) NULL,
  `content` VARCHAR(45) NULL,
  `image` VARCHAR(45) NULL,
  `date_create` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_menu_idx` (`menu_id` ASC),
  INDEX `fk_type_page_idx` (`type_page_id` ASC),
  CONSTRAINT `fk_menu`
    FOREIGN KEY (`menu_id`)
    REFERENCES `cms`.`menu` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_type_page`
    FOREIGN KEY (`type_page_id`)
    REFERENCES `cms`.`type_page` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

select * from content;