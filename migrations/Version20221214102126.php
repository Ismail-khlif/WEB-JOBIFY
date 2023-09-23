<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221214102126 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement ADD organisateur VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE formation ADD formateur VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE post ADD posteur VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reclamation ADD nom VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement DROP organisateur');
        $this->addSql('ALTER TABLE formation DROP formateur');
        $this->addSql('ALTER TABLE post DROP posteur');
        $this->addSql('ALTER TABLE reclamation DROP nom');
    }
}
