<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241227204017 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, civilite VARCHAR(5) DEFAULT NULL, nom VARCHAR(255) NOT NULL, type VARCHAR(255) DEFAULT NULL, date_de_naissance DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', tranche_age SMALLINT DEFAULT NULL, id_collaborateur_prefere SMALLINT DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, localite VARCHAR(255) DEFAULT NULL, pays VARCHAR(255) DEFAULT NULL, telephone VARCHAR(255) DEFAULT NULL, mail VARCHAR(255) DEFAULT NULL, langue VARCHAR(100) DEFAULT NULL, profession VARCHAR(255) DEFAULT NULL, marraine INT DEFAULT NULL, filleule INT DEFAULT NULL, points_fidelite INT DEFAULT NULL, privilege SMALLINT DEFAULT NULL, info_techniques VARCHAR(255) DEFAULT NULL, remarques VARCHAR(255) DEFAULT NULL, visite1 DATE DEFAULT NULL COMMENT \'(DC2Type:date_immutable)\', origine_contact VARCHAR(255) DEFAULT NULL, type_cheveux VARCHAR(124) DEFAULT NULL, base VARCHAR(255) DEFAULT NULL, texture VARCHAR(255) DEFAULT NULL, cuir_chevelu VARCHAR(255) DEFAULT NULL, longueur VARCHAR(20) DEFAULT NULL, specificites VARCHAR(255) DEFAULT NULL, cheveux_blancs SMALLINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prestations (id INT AUTO_INCREMENT NOT NULL, typ VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE prestations');
    }
}
