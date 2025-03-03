<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
<<<<<<<< Updated upstream:migrations/Version20250210173148.php
final class Version20250210173148 extends AbstractMigration
========
final class Version20250220124023 extends AbstractMigration
>>>>>>>> Stashed changes:migrations/Version20250220124023.php
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
<<<<<<<< Updated upstream:migrations/Version20250210173148.php
        $this->addSql('ALTER TABLE elearning ADD content_type VARCHAR(255) NOT NULL, ADD content_url VARCHAR(255) NOT NULL, ADD duration INT NOT NULL, ADD difficulty_level VARCHAR(255) NOT NULL, ADD created_at DATETIME NOT NULL, ADD updated_at DATETIME NOT NULL');
========
        $this->addSql('ALTER TABLE user ADD reservation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649B83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649B83297E7 ON user (reservation_id)');
>>>>>>>> Stashed changes:migrations/Version20250220124023.php
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
<<<<<<<< Updated upstream:migrations/Version20250210173148.php
        $this->addSql('ALTER TABLE elearning DROP content_type, DROP content_url, DROP duration, DROP difficulty_level, DROP created_at, DROP updated_at');
========
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649B83297E7');
        $this->addSql('DROP INDEX IDX_8D93D649B83297E7 ON user');
        $this->addSql('ALTER TABLE user DROP reservation_id');
>>>>>>>> Stashed changes:migrations/Version20250220124023.php
    }
}
