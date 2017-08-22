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
    `name` VARCHAR(60) NOT NULL COMMENT 'Nazwa produktu',
    `code` VARCHAR(8) NOT NULL COMMENT 'Kod produktu',
    `price` DECIMAL(10, 2) NOT NULL COMMENT 'Cena produktu',
    `image` VARCHAR(50) NOT NULL COMMENT 'Nazwa pliku obrazka',
    `insert_time` DATETIME COMMENT 'Data dodania do bazy',
    `update_time` DATETIME COMMENT 'Data aktualizacji'
)
COMMENT='Tabela produktów'
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;


--
-- Dodanie testowych danych do tabeli `products`
--
INSERT INTO `products` (`name`, `code`, `price`, `image`, `insert_time`, `update_time`)
VALUES 
    ('Karta graficzna MSI GeForce GTX 1060 6GT OCV1 6GB GDDR5', '00000001', 1399.00, 'msigfgtx1060.png', NOW(), NOW()),
    ('Konsola PlayStation 4 Slim 1TB + 2 kontrolery', '00000002', 1439.00, 'ps4slim1tb.png', NOW(), NOW()),
    ('Laptop Lenovo V110-17IKB', '00000003', 2299.00, 'lenovov110.png', NOW(), NOW()),
    ('Komputer Morele RYZEN G4080', '00000004', 4099.00, 'moreleryzeng4080.png', NOW(), NOW()),
    ('Serwer plików Qnap 2-Bay TurboNAS', '00000005', 1700.50, 'serverqnap2.png', NOW(), NOW()),
    ('Monitor iiyama G-MASTER Black Hawk GE2488HS', '00000006', 699.99, 'iiyamagmasterblackhawk.png', NOW(), NOW())
;