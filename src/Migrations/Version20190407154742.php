<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190407154742 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE house ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE house ADD CONSTRAINT FK_67D5399DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_67D5399DA76ED395 ON house (user_id)');
        $this->addSql('ALTER TABLE apartment ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE apartment ADD CONSTRAINT FK_4D7E6854A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_4D7E6854A76ED395 ON apartment (user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE apartment DROP FOREIGN KEY FK_4D7E6854A76ED395');
        $this->addSql('DROP INDEX IDX_4D7E6854A76ED395 ON apartment');
        $this->addSql('ALTER TABLE apartment DROP user_id');
        $this->addSql('ALTER TABLE house DROP FOREIGN KEY FK_67D5399DA76ED395');
        $this->addSql('DROP INDEX IDX_67D5399DA76ED395 ON house');
        $this->addSql('ALTER TABLE house DROP user_id');
    }
}
