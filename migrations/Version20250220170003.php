<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250220170003 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE workshop ADD creator_name_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE workshop ADD CONSTRAINT FK_9B6F02C4FF8525A2 FOREIGN KEY (creator_name_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_9B6F02C4FF8525A2 ON workshop (creator_name_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE workshop DROP FOREIGN KEY FK_9B6F02C4FF8525A2');
        $this->addSql('DROP INDEX IDX_9B6F02C4FF8525A2 ON workshop');
        $this->addSql('ALTER TABLE workshop DROP creator_name_id');
    }
}
