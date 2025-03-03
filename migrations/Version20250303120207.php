<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250303120207 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_64C19C15E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE elearning_category (elearning_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_8FF98A98EEC86628 (elearning_id), INDEX IDX_8FF98A9812469DE2 (category_id), PRIMARY KEY(elearning_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE elearning_category ADD CONSTRAINT FK_8FF98A98EEC86628 FOREIGN KEY (elearning_id) REFERENCES elearning (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE elearning_category ADD CONSTRAINT FK_8FF98A9812469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE elearning DROP FOREIGN KEY FK_5ADAABEECE3D88C6');
        $this->addSql('DROP INDEX IDX_5ADAABEECE3D88C6 ON elearning');
        $this->addSql('ALTER TABLE elearning DROP user_e_id');
        $this->addSql('ALTER TABLE reclamation ADD evidence VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE elearning_category DROP FOREIGN KEY FK_8FF98A98EEC86628');
        $this->addSql('ALTER TABLE elearning_category DROP FOREIGN KEY FK_8FF98A9812469DE2');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE elearning_category');
        $this->addSql('ALTER TABLE elearning ADD user_e_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE elearning ADD CONSTRAINT FK_5ADAABEECE3D88C6 FOREIGN KEY (user_e_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_5ADAABEECE3D88C6 ON elearning (user_e_id)');
        $this->addSql('ALTER TABLE reclamation DROP evidence');
    }
}
