<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
<<<<<<<< Updated upstream:migrations/Version20250210174235.php
final class Version20250210174235 extends AbstractMigration
========
final class Version20250220163922 extends AbstractMigration
>>>>>>>> Stashed changes:migrations/Version20250220163922.php
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
<<<<<<<< Updated upstream:migrations/Version20250210174235.php
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, status VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
========
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649B83297E7');
        $this->addSql('DROP INDEX IDX_8D93D649B83297E7 ON user');
        $this->addSql('ALTER TABLE user DROP reservation_id');
>>>>>>>> Stashed changes:migrations/Version20250220163922.php
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
<<<<<<<< Updated upstream:migrations/Version20250210174235.php
        $this->addSql('DROP TABLE reclamation');
========
        $this->addSql('ALTER TABLE user ADD reservation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649B83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649B83297E7 ON user (reservation_id)');
>>>>>>>> Stashed changes:migrations/Version20250220163922.php
    }
}
