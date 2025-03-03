<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250227190322 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, description VARCHAR(100) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, id_article INT DEFAULT NULL, comment VARCHAR(150) DEFAULT NULL, INDEX IDX_9474526CDCA7A716 (id_article), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE conseil (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, contenu VARCHAR(255) NOT NULL, date_publication DATETIME NOT NULL, note INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE elearning (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, content_type VARCHAR(255) NOT NULL, content_url VARCHAR(255) NOT NULL, duration INT NOT NULL, difficulty_level VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', file_path VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE elearning_category (elearning_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_8FF98A98EEC86628 (elearning_id), INDEX IDX_8FF98A9812469DE2 (category_id), PRIMARY KEY(elearning_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE intervention (id INT AUTO_INCREMENT NOT NULL, terrain_id INT DEFAULT NULL, user_id INT DEFAULT NULL, decr VARCHAR(255) DEFAULT NULL, INDEX IDX_D11814AB8A2D8B41 (terrain_id), INDEX IDX_D11814ABA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE materiel (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, marque VARCHAR(255) NOT NULL, prix NUMERIC(10, 0) NOT NULL, categorie VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE materiel_conseil (materiel_id INT NOT NULL, conseil_id INT NOT NULL, INDEX IDX_874E7D5416880AAF (materiel_id), INDEX IDX_874E7D54668A3E03 (conseil_id), PRIMARY KEY(materiel_id, conseil_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, article_id INT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_CE6064047294869C (article_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, workshop_title_id INT DEFAULT NULL, participant_name_id INT DEFAULT NULL, contact_email VARCHAR(255) NOT NULL, contactphone VARCHAR(255) NOT NULL, reservation_date DATE NOT NULL, number_of_attends INT NOT NULL, payment_status VARCHAR(255) NOT NULL, INDEX IDX_42C84955890E4D68 (workshop_title_id), INDEX IDX_42C84955EB1A53DE (participant_name_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE terrain (id INT AUTO_INCREMENT NOT NULL, iduser_id INT NOT NULL, descr VARCHAR(255) DEFAULT NULL, img LONGBLOB DEFAULT NULL, INDEX IDX_C87653B1786A81FB (iduser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) NOT NULL, prenom VARCHAR(100) NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE workshop (id INT AUTO_INCREMENT NOT NULL, creator_name_id INT NOT NULL, title VARCHAR(255) NOT NULL, date DATE NOT NULL, duration INT NOT NULL, location VARCHAR(255) NOT NULL, instractor VARCHAR(255) NOT NULL, target_audience VARCHAR(255) NOT NULL, topics_covered LONGTEXT NOT NULL, materials_provided LONGTEXT NOT NULL, INDEX IDX_9B6F02C4FF8525A2 (creator_name_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CDCA7A716 FOREIGN KEY (id_article) REFERENCES article (id)');
        $this->addSql('ALTER TABLE elearning_category ADD CONSTRAINT FK_8FF98A98EEC86628 FOREIGN KEY (elearning_id) REFERENCES elearning (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE elearning_category ADD CONSTRAINT FK_8FF98A9812469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE intervention ADD CONSTRAINT FK_D11814AB8A2D8B41 FOREIGN KEY (terrain_id) REFERENCES terrain (id)');
        $this->addSql('ALTER TABLE intervention ADD CONSTRAINT FK_D11814ABA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE materiel_conseil ADD CONSTRAINT FK_874E7D5416880AAF FOREIGN KEY (materiel_id) REFERENCES materiel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE materiel_conseil ADD CONSTRAINT FK_874E7D54668A3E03 FOREIGN KEY (conseil_id) REFERENCES conseil (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064047294869C FOREIGN KEY (article_id) REFERENCES elearning (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955890E4D68 FOREIGN KEY (workshop_title_id) REFERENCES workshop (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955EB1A53DE FOREIGN KEY (participant_name_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE terrain ADD CONSTRAINT FK_C87653B1786A81FB FOREIGN KEY (iduser_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE workshop ADD CONSTRAINT FK_9B6F02C4FF8525A2 FOREIGN KEY (creator_name_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CDCA7A716');
        $this->addSql('ALTER TABLE elearning_category DROP FOREIGN KEY FK_8FF98A98EEC86628');
        $this->addSql('ALTER TABLE elearning_category DROP FOREIGN KEY FK_8FF98A9812469DE2');
        $this->addSql('ALTER TABLE intervention DROP FOREIGN KEY FK_D11814AB8A2D8B41');
        $this->addSql('ALTER TABLE intervention DROP FOREIGN KEY FK_D11814ABA76ED395');
        $this->addSql('ALTER TABLE materiel_conseil DROP FOREIGN KEY FK_874E7D5416880AAF');
        $this->addSql('ALTER TABLE materiel_conseil DROP FOREIGN KEY FK_874E7D54668A3E03');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064047294869C');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955890E4D68');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955EB1A53DE');
        $this->addSql('ALTER TABLE terrain DROP FOREIGN KEY FK_C87653B1786A81FB');
        $this->addSql('ALTER TABLE workshop DROP FOREIGN KEY FK_9B6F02C4FF8525A2');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE conseil');
        $this->addSql('DROP TABLE elearning');
        $this->addSql('DROP TABLE elearning_category');
        $this->addSql('DROP TABLE intervention');
        $this->addSql('DROP TABLE materiel');
        $this->addSql('DROP TABLE materiel_conseil');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE terrain');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE workshop');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
