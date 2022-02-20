<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220220145749 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE build (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, chara_id INT NOT NULL, kart_id INT NOT NULL, wheel_id INT NOT NULL, hanglider_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_BDA0F2DBA76ED395 (user_id), INDEX IDX_BDA0F2DBD93F99A7 (chara_id), INDEX IDX_BDA0F2DB293A83D8 (kart_id), INDEX IDX_BDA0F2DB9AF5772F (wheel_id), INDEX IDX_BDA0F2DB30163049 (hanglider_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE build ADD CONSTRAINT FK_BDA0F2DBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE build ADD CONSTRAINT FK_BDA0F2DBD93F99A7 FOREIGN KEY (chara_id) REFERENCES `character` (id)');
        $this->addSql('ALTER TABLE build ADD CONSTRAINT FK_BDA0F2DB293A83D8 FOREIGN KEY (kart_id) REFERENCES kart (id)');
        $this->addSql('ALTER TABLE build ADD CONSTRAINT FK_BDA0F2DB9AF5772F FOREIGN KEY (wheel_id) REFERENCES wheel (id)');
        $this->addSql('ALTER TABLE build ADD CONSTRAINT FK_BDA0F2DB30163049 FOREIGN KEY (hanglider_id) REFERENCES hanglider (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE build');
        $this->addSql('ALTER TABLE `character` CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE hanglider CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE kart CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE wheel CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
