<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217111344 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE conseil (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, contenu VARCHAR(255) NOT NULL, date_publication DATETIME NOT NULL, note INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE materiel (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, marque VARCHAR(255) NOT NULL, prix NUMERIC(10, 0) NOT NULL, categorie VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE materiel_conseil (materiel_id INT NOT NULL, conseil_id INT NOT NULL, INDEX IDX_874E7D5416880AAF (materiel_id), INDEX IDX_874E7D54668A3E03 (conseil_id), PRIMARY KEY(materiel_id, conseil_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE materiel_conseil ADD CONSTRAINT FK_874E7D5416880AAF FOREIGN KEY (materiel_id) REFERENCES materiel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE materiel_conseil ADD CONSTRAINT FK_874E7D54668A3E03 FOREIGN KEY (conseil_id) REFERENCES conseil (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE materiel_conseil DROP FOREIGN KEY FK_874E7D5416880AAF');
        $this->addSql('ALTER TABLE materiel_conseil DROP FOREIGN KEY FK_874E7D54668A3E03');
        $this->addSql('DROP TABLE conseil');
        $this->addSql('DROP TABLE materiel');
        $this->addSql('DROP TABLE materiel_conseil');
    }
}
