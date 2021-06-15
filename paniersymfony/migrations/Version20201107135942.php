<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201107135942 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE migration_versions');
        $this->addSql('ALTER TABLE product_details_variant_options DROP FOREIGN KEY FK_12D4BAD0287D5809');
        $this->addSql('ALTER TABLE product_details_variant_options DROP FOREIGN KEY FK_12D4BAD0C85AF964');
        $this->addSql('ALTER TABLE product_details_variant_options ADD CONSTRAINT FK_12D4BAD0287D5809 FOREIGN KEY (product_details_id) REFERENCES product_details (id)');
        $this->addSql('ALTER TABLE product_details_variant_options ADD CONSTRAINT FK_12D4BAD0C85AF964 FOREIGN KEY (variant_options_id) REFERENCES variant_options (id)');
        $this->addSql('ALTER TABLE sub_categories CHANGE category_id category_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE migration_versions (version VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, PRIMARY KEY(version)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE product_details_variant_options DROP FOREIGN KEY FK_12D4BAD0287D5809');
        $this->addSql('ALTER TABLE product_details_variant_options DROP FOREIGN KEY FK_12D4BAD0C85AF964');
        $this->addSql('ALTER TABLE product_details_variant_options ADD CONSTRAINT FK_12D4BAD0287D5809 FOREIGN KEY (product_details_id) REFERENCES product_details (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product_details_variant_options ADD CONSTRAINT FK_12D4BAD0C85AF964 FOREIGN KEY (variant_options_id) REFERENCES variant_options (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sub_categories CHANGE category_id category_id INT NOT NULL');
    }
}
