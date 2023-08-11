<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230811143258 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE offer (id INT AUTO_INCREMENT NOT NULL, compte_affaire VARCHAR(255) DEFAULT NULL, compte_evenement_veh VARCHAR(255) DEFAULT NULL, compte_dernier_evenement_veh VARCHAR(255) DEFAULT NULL, numero_fiche VARCHAR(255) DEFAULT NULL, libelle_civilite VARCHAR(255) DEFAULT NULL, proprietaire_actuel VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, numero_et_nom_voie VARCHAR(255) DEFAULT NULL, complement_adresse1 VARCHAR(255) DEFAULT NULL, code_postal VARCHAR(255) DEFAULT NULL, ville VARCHAR(255) DEFAULT NULL, telephone_domicile VARCHAR(255) DEFAULT NULL, telephone_portable VARCHAR(255) DEFAULT NULL, telephone_job VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, date_mise_en_circulation DATE DEFAULT NULL, date_achat DATE DEFAULT NULL, date_dernier_evenement_veh DATE DEFAULT NULL, libelle_marque VARCHAR(255) DEFAULT NULL, libelle_modele VARCHAR(255) DEFAULT NULL, version VARCHAR(255) DEFAULT NULL, vin VARCHAR(255) DEFAULT NULL, immatriculation VARCHAR(255) DEFAULT NULL, type_prospect VARCHAR(255) DEFAULT NULL, kilometrage VARCHAR(255) DEFAULT NULL, libelle_energie VARCHAR(255) DEFAULT NULL, vendeur_vn VARCHAR(255) DEFAULT NULL, vendeur_vo VARCHAR(255) DEFAULT NULL, commentaire_facturation VARCHAR(255) DEFAULT NULL, type_vnvo VARCHAR(255) DEFAULT NULL, numero_dossier_vnvo VARCHAR(255) DEFAULT NULL, intermediaire_vente VARCHAR(255) DEFAULT NULL, date_evenement_veh DATE DEFAULT NULL, origine_evenement_veh VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE offer');
    }
}
