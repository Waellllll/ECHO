<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250224165300 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE elearning ADD user_e_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE elearning ADD CONSTRAINT FK_5ADAABEECE3D88C6 FOREIGN KEY (user_e_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_5ADAABEECE3D88C6 ON elearning (user_e_id)');
        $this->addSql('ALTER TABLE workshop CHANGE creator_name_id creator_name_id INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE elearning DROP FOREIGN KEY FK_5ADAABEECE3D88C6');
        $this->addSql('DROP INDEX IDX_5ADAABEECE3D88C6 ON elearning');
        $this->addSql('ALTER TABLE elearning DROP user_e_id');
        $this->addSql('ALTER TABLE workshop CHANGE creator_name_id creator_name_id INT DEFAULT NULL');
    }
}
