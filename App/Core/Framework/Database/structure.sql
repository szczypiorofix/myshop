SET NAMES 'utf8';
SET CHARACTER SET 'UTF8';

--
-- Tabela `config`
--
CREATE TABLE IF NOT EXISTS `shop_config` (
    `name` VARCHAR(30) NOT NULL PRIMARY KEY COMMENT 'Nazwa wartości',
    `value` VARCHAR(30) NOT NULL COMMENT 'Wartość',
    `update_time` DATETIME COMMENT 'Data aktualizacji',
    `previous_value` VARCHAR(30) COMMENT 'Poprzednia wartość'
    )
COMMENT='Tabela konfiguracji strony sklepu'
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;


--
-- Dodanie podstawowych danych do tabeli `config`
--
INSERT INTO `shop_config` (`name`, `value`, `update_time`, `previous_value`)
VALUES 
    ('db_version', '0.1', NOW(), NULL),
    ('author', 'Piotr Wróblewski', NOW(), NULL)
;

--
-- Tabela `products`
--
CREATE TABLE IF NOT EXISTS `shop_products` (
    `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'Id produktu',
    `name` VARCHAR(60) NOT NULL COMMENT 'Nazwa produktu',
    `short_description` TEXT NOT NULL COMMENT 'Krótki opis produktu',
    `description` TEXT NOT NULL COMMENT 'Opis produktu',
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
INSERT INTO `shop_products` (`name`, `short_description`, `description`, `code`, `price`, `image`, `insert_time`, `update_time`)
VALUES 
    ('Karta graficzna MSI GeForce GTX 1060 6GT OCV1 6GB GDDR5', 'MSI GeForce GTX 1060 6GT OCV1 6GB GDDR5 - szybka, nowoczesna karta za nieduże pieniądze.', 'Karty graficzne GeForce GTX są najbardziej zaawansowanymi kartami, jakie kiedykolwiek stworzono. Odkryj bezprecedensową wydajność, energooszczędność oraz wrażenia jakie dostarczą gry nowej generacji. Karty bazujące na procesorach graficznych korzystających z architektury Pascal charakteryzują się wyższą wydajnością i lepszą efektywnością energetyczną. Nowe układy zbudowano przy użyciu wyjątkowo szybkich tranzystorów FinFET. Dzięki nim, oraz za sprawą obsługi bibliotek graficznych DirectX™ 12, możliwe stało zapewnienie graczom nie tylko wyjątkowych wrażeń w grach, ale również otrzymują oni wydajną i energooszczędną kartę graficzną generującą płynny obraz.', '00000001', 1399.00, 'msigfgtx1060.png', NOW(), NOW()),
    ('Konsola PlayStation 4 Slim 1TB + 2 kontrolery', 'Najnowszy model konsole PS4 oraz dwa kontrolery przemienią dom w prawdziwe centrum rozrywki.', 'Gry ożywają na ekranie dzięki doskonałej grafice i niewiarygodnie realistycznym szczegółom, które stały się możliwe dzięki karcie graficznej o mocy dwa razy większej niż w standardowym PS4. Akcja na ekranie toczy się jeszcze szybciej, jest bardziej płynna i emocjonująca, a to wszystko dzięki większej szybkości klatek, które są też bardziej stabilne.', '00000002', 1439.00, 'ps4slim1tb.png', NOW(), NOW()),
    ('Laptop Lenovo V110-17IKB', 'Szybki i niedrogi laptop Lenovo do domowych rozwiącań.', 'Łączący wszystkie najważniejsze zalety poprzednich systemów Windows 10 posiada wiele udoskonaleń, które pokochasz. Rozszerzone menu start, nowa przeglądarka internetowa i asystent głosowy Cortana to tylko niektóre z nich. Napędzany przez procesory Intel (aż do Intel Core siódmej generacji) Lenovo V110 posiada pamięć, przestrzeń dyskową i grafikę tak dopasowane, by zaspokoić twoje wymagania względem komputera biznesowego.', '00000003', 2299.00, 'lenovov110.png', NOW(), NOW()),
    ('Komputer Morele RYZEN G4080', 'Kompletny komputer dla graczy, szybki i niezawodny.', 'PC zaprojektowane dla graczy. Wiemy jak ważna jest wydajność podczas grania, dlatego starannie dobieramy wszystkie komponenty by sprostały najnowszym tytułom. Podczas montażu korzystamy z podzepołów najwyższej jakości od znanych i cenionych producentów. Tworzymy maszyny do grania idealnie dopasowane do Twoich potrzeb.', '00000004', 4099.00, 'moreleryzeng4080.png', NOW(), NOW()),
    ('Serwer plików Qnap 2-Bay TurboNAS', 'Serwer plików, do specjalnych rozwiązań.', 'W ramach przygotowań do nadchodzącej ery Internetu rzeczy (IoT) TS-253A innowacyjnie obsługuje platformę„open source” Linux® jako bramę do rozwiązań IoT na innych urządzeniach inteligentnych. TS-253A pozwala użytkownikom na bezpośrednie korzystanie z różnorodnych, wyposażonych w wiele przydatnych funkcji aplikacji dla Linuxa® oraz chmury prywatnej łączącej pamięć masową i aplikacje IoT. Profesjonalni deweloperzy mogą opracowywać i uruchamiać aplikacje IoT bezpośrednio w urządzeniu TS-253A. Bezpieczny i niezawodny model TS-253A obsługuje funkcje o znaczeniu krytycznym dla działalności biznesowej, takie jak Migawka całego woluminu lub LUN, która umożliwia przywrócenie plików lub folderów do poprzedniego stanu w razie uszkodzenia lub utraty plików. TS-253A jest wyposażony w najnowszy czterordzeniowy procesor Intel® Celeron®, który umożliwia odtwarzanie wideo w rozdzielczości 4K (H.264) i transkodowanie wideo 1080p/4K w czasie rzeczywistym w celu bezpośredniego wyświetlenia na ekranie HD/4K modelu TS-253A.', '00000005', 1700.50, 'serverqnap2.png', NOW(), NOW()),
    ('Monitor iiyama G-MASTER Black Hawk GE2488HS', 'Monitor zaprojektowany specjalnie dla graczy.', '24-calowy iiyama G-MASTER™ GE2488HS z klanu Black Hawk™ to wierny kompan w każdej grze. Godny zaufania i solidny, budzi respekt już samym swoim wyglądem. Z szybkością 1 milisekundy, uzbrojony w technologię FreeSync, eliminuje przeszkody na Twojej drodze do zwycięstwa. Zaloguj się z nim do świata gier. Załóż słuchawki i graj. Na 24-calowym ekranie o rozdzielczości Full HD nic nie umknie Twojej uwadze.', '00000006', 699.99, 'iiyamagmasterblackhawk.png', NOW(), NOW())
;