<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201224090957 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE espece (id INT AUTO_INCREMENT NOT NULL, image_name VARCHAR(255) NOT NULL, updated_at DATETIME NOT NULL, nom VARCHAR(255) NOT NULL, maille INT DEFAULT NULL, contenu LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE espece_montage (espece_id INT NOT NULL, montage_id INT NOT NULL, INDEX IDX_F4FD0E582D191E7A (espece_id), INDEX IDX_F4FD0E58E44D83C3 (montage_id), PRIMARY KEY(espece_id, montage_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, contenu LONGTEXT NOT NULL, statut TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE montage (id INT AUTO_INCREMENT NOT NULL, image_name VARCHAR(255) NOT NULL, updated_at DATETIME NOT NULL, nom VARCHAR(255) NOT NULL, contenu LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE espece_montage ADD CONSTRAINT FK_F4FD0E582D191E7A FOREIGN KEY (espece_id) REFERENCES espece (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE espece_montage ADD CONSTRAINT FK_F4FD0E58E44D83C3 FOREIGN KEY (montage_id) REFERENCES montage (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE espece_montage DROP FOREIGN KEY FK_F4FD0E582D191E7A');
        $this->addSql('ALTER TABLE espece_montage DROP FOREIGN KEY FK_F4FD0E58E44D83C3');
        $this->addSql('DROP TABLE espece');
        $this->addSql('DROP TABLE espece_montage');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE montage');
    }
}
