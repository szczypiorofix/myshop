SET NAMES 'utf8';
SET CHARACTER SET 'UTF8';

--
-- Tabela `config`
--
CREATE TABLE IF NOT EXISTS `config` (
    `name` VARCHAR(30) NOT NULL PRIMARY KEY COMMENT 'Nazwa wartości',
    `value` VARCHAR(30) NOT NULL COMMENT 'Wartość',
    `update_time` DATETIME COMMENT 'Data aktualizacji',
    `previous_value` VARCHAR(30) COMMENT 'Poprzednia wartość'
    )
COMMENT='Tabela konfiguracji strony'
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;


--
-- Dodanie podstawowych danych do tabeli `config`
--
INSERT INTO `config` (`name`, `value`, `update_time`, `previous_value`)
VALUES 
    ('db_version', '0.1', NOW(), NULL),
    ('author', 'Piotr Wróblewski', NOW(), NULL)
;

--
-- Tabela `products`
--
CREATE TABLE IF NOT EXISTS `products` (
    `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'Id produktu',
    `name` VARCHAR(40) NOT NULL COMMENT 'Nazwa produktu',
    `code` VARCHAR(20) NOT NULL COMMENT 'Kod produktu',
    `price` INT(11) NOT NULL COMMENT 'Cena produktu',
    `image` VARCHAR(40) NOT NULL COMMENT 'Nazwa pliku obrazka',
    `insert_time` DATETIME COMMENT 'Data dodania do bazy',
    `update_time` DATETIME COMMENT 'Data aktualizacji'
)
COMMENT='Tabela produktów'
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;
