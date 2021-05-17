/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 10.4.6-MariaDB : Database - laravel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lostcent_backend` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `lostcent_backend`;

/*Table structure for table `element` */

DROP TABLE IF EXISTS `element`;

CREATE TABLE `element` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `detail_icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `element` */

insert  into `element`(`id`,`name`,`image`,`detail_icon`) values 
(1,'Fire','icon-feu.png','icon-feu-bl.png'),
(2,'Water','icon-eau.png','icon-eau-bl.png'),
(3,'Wind','icon-vent.png','icon-vent-bl.png'),
(4,'Light','icon-lumiere.png','icon-lumiere-bl.png'),
(5,'Dark','icon-tenebre.png','icon-tenebre-bl.png');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2016_06_01_000001_create_oauth_auth_codes_table',1),
(4,'2016_06_01_000002_create_oauth_access_tokens_table',1),
(5,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),
(6,'2016_06_01_000004_create_oauth_clients_table',1),
(7,'2016_06_01_000005_create_oauth_personal_access_clients_table',1);

/*Table structure for table `monsters` */

DROP TABLE IF EXISTS `monsters`;

CREATE TABLE `monsters` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `fr_name` varchar(255) DEFAULT NULL,
  `second_name` varchar(255) NOT NULL,
  `fr_second_name` varchar(255) DEFAULT NULL,
  `spell_name` varchar(255) NOT NULL,
  `fr_spell_name` varchar(255) DEFAULT NULL,
  `spell_description` text NOT NULL,
  `fr_spell_description` text DEFAULT NULL,
  `mana_cost` double DEFAULT NULL,
  `role` int(10) DEFAULT NULL,
  `rarity` int(11) DEFAULT NULL,
  `element` int(11) DEFAULT NULL,
  `crit_rate` int(11) DEFAULT 0,
  `crit_dmg` int(11) DEFAULT 0,
  `hp` int(11) DEFAULT 0,
  `atk` int(11) DEFAULT 0,
  `acc` int(11) DEFAULT 0,
  `def` int(11) DEFAULT 0,
  `res` int(11) DEFAULT 0,
  `meta_title` varchar(255) DEFAULT NULL,
  `fr_meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `fr_meta_description` text DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `bg_image` varchar(255) DEFAULT NULL,
  `bg_comp_image` varchar(255) DEFAULT NULL,
  `icon_image` varchar(255) DEFAULT NULL,
  `special_monster` tinyint(5) DEFAULT 0 COMMENT '0=>no, 1=>yes',
  `special_monster_id` bigint(20) DEFAULT NULL,
  `skill_stone1_name` varchar(255) DEFAULT NULL,
  `fr_skill_stone1_name` varchar(255) DEFAULT NULL,
  `skill_stone1_description` text DEFAULT NULL,
  `fr_skill_stone1_description` text DEFAULT NULL,
  `skill_stone1_image` varchar(255) DEFAULT NULL,
  `skill_stone2_name` varchar(255) DEFAULT NULL,
  `fr_skill_stone2_name` varchar(255) DEFAULT NULL,
  `skill_stone2_description` text DEFAULT NULL,
  `fr_skill_stone2_description` text DEFAULT NULL,
  `skill_stone2_image` varchar(255) DEFAULT NULL,
  `skill_stone3_name` varchar(255) DEFAULT NULL,
  `fr_skill_stone3_name` varchar(255) DEFAULT NULL,
  `skill_stone3_description` text DEFAULT NULL,
  `fr_skill_stone3_description` text DEFAULT NULL,
  `skill_stone3_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `monsters` */

insert  into `monsters`(`id`,`name`,`fr_name`,`second_name`,`fr_second_name`,`spell_name`,`fr_spell_name`,`spell_description`,`fr_spell_description`,`mana_cost`,`role`,`rarity`,`element`,`crit_rate`,`crit_dmg`,`hp`,`atk`,`acc`,`def`,`res`,`meta_title`,`fr_meta_title`,`meta_description`,`fr_meta_description`,`og_image`,`main_image`,`bg_image`,`bg_comp_image`,`icon_image`,`special_monster`,`special_monster_id`,`skill_stone1_name`,`fr_skill_stone1_name`,`skill_stone1_description`,`fr_skill_stone1_description`,`skill_stone1_image`,`skill_stone2_name`,`fr_skill_stone2_name`,`skill_stone2_description`,`fr_skill_stone2_description`,`skill_stone2_image`,`skill_stone3_name`,`fr_skill_stone3_name`,`skill_stone3_description`,`fr_skill_stone3_description`,`skill_stone3_image`,`created_at`,`updated_at`) values 
(17,'Artamiel','Artamiel','Archangel','Archange','Heavenly Sword','Épée céleste','Attacks the forefront enemy to remove beneficial effects granted on the enemy and inflict damage in proportion to your DEF. The damage increases even more according to the no. of beneficial effects removed. In addition, recovers the HP of the ally with the lowest HP by portion of the damage dealt.','Attaque l\'ennemi en tête pour supprimer tous ses effets bénéfiques et infliger des dégâts en proportion de ta défense. Plus il y a d\'effets bénéfiques retirés, plus les dégâts augmentent, et redonne en PV l\'équivalent d\'une partie des dégâts à l\'allié possédant le pire statut de PV.',4,4,4,4,0,150,2807,154,0,187,15,'Artamiel Guide Lost Centuria : Runes and Decks | LostCenturia.gg','Guide Artamiel Lost Centuria : Runes et Decks | LostCenturia.gg','Find out all there is to know about the Lost Centuria monster Artamiel in this guide with its stats, runes, and comps.','Découvrez tout ce qu\'il faut savoir sur le monstre Artamiel de Lost Centuria dans ce guide avec ses stats, ses runes et ses compos.','o_1620918060.jpeg','m_1620918060.jpeg','b_1620918060.jpeg','bc_1620918060.jpeg','i_1620923434.jpeg',0,NULL,'Damage','Dégâts','Increases the damage of Heavenly Sword by 20%.','Augmente de 20% les dégâts infligés par l\'Epée sainte.','m_1620918060.png','Mana Cost','Coût en mana','Decreases the Mana cost of Heavenly Sword by 1.','Diminue de 1 le coût en mana de l\'Epée sainte.','m_1620918060.png','Archangel\'s Mercy','Clémence de l\'archange','[Passive] Revives one of the dead allies, if there\'s any, when an enemy is defeated with Heavenly Sword.','[Passif] Si un ennemi meurt en raison de l\'Epée sainte, l\'un des alliés morts est réanimé.','m_1620918060.png','2021-05-13 19:01:04','2021-05-13 18:01:04'),
(18,'Woosa','Woosa','Pioneer','Immortel taoïste','Wish of Immortality','Souhait d\'immortalité','Grants Immunity and Shield on all allies. The Shield amount increases according to your MAX HP.','Attribue Immunité et Bouclier à tous les alliés. Plus le MAX de tes PV est élevé, plus le montant du bouclier l\'est aussi.',5,2,4,2,15,150,2928,168,0,166,15,'Woosa Guide Lost Centuria : Runes and Comps | LostCenturia.gg','Guide Woosa Lost Centuria : Runes et Compos | LostCenturia.gg','Find out all there is to know about the Lost Centuria monster Woosa in this guide with its stats, runes, and comps.',NULL,'o_1620918590.jpeg','m_1620918590.jpeg','b_1620918590.jpeg','bc_1620918590.jpeg','i_1620918590.jpeg',0,NULL,'Beneficial Effect','Effet bénéfique','ncreases the shield amount and Immunity duration of Wish of Immortality.','Augmente le montant de protection de Souhait d\'immortalité et la durée d\'immunité.','m_1620918590.png','Mana Cost','Coût en mana','Decreases the Mana cost of Wish of Immortality by 1.','Diminue de 1 le coût en mana de Souhait d\'immortalité.','m_1620918590.png','Yin-yang','Le yin et le yang','[Passive] The basic attack recovers the ally with the lowest HP. The heal amount increases according to your MAX HP.','[Passif] L\'attaque basique soigne l\'allié aux PV les plus bas. Le montant de soins augmente en fonction du MAX de tes PV.','m_1620918590.png','2021-05-13 14:09:50','2021-05-13 14:09:50'),
(19,'Nicki','Nicki','Occult Girl','Fille occulte','Teddy Spell','Sort de Teddy','Casts Teddy Spell on the backline enemies.','Applique un effet de sort de Teddy sur les ennemis en ligne arrière.',5,1,4,5,15,150,2481,219,0,145,15,'Ricky Guide Lost Centuria : Runes and Comps | LostCenturia.gg','Guide Ricky Lost Centuria : Runes et Compos | LostCenturia.gg','Find out all there is to know about the Lost Centuria monster Ricky in this guide with its stats, runes, and comps.',NULL,'o_1620919073.jpeg','m_1620919073.jpeg','b_1620919073.jpeg','bc_1620919073.jpeg','i_1620919073.jpeg',0,NULL,'Harmful Effect','Dégâts','Increases the damage dealt by 15% when the teddy is freed.','Augmente de 15% les dégâts causés par la libération de Teddy du sort de Teddy.','m_1620919073.png','Mana Cost','Coût de mana','Decreases the Mana cost of Teddy Spell by 1.','Diminue de 1 le coût de mana du sort Si la cible enlève de force le sort de de Teddy.','m_1620919073.png','Cursed Soul','Ame maudite','If the target forcefully removes Teddy Spell, the target will become Unrecoverable additionally.','Teddy, elle sera dans un état d\' incapacité de récupération en supplément.','m_1620919073.png','2021-05-13 14:17:53','2021-05-13 14:17:53'),
(20,'Khmun','Khmun','Anubis','Anubis','Soul Devourer','Dévoreur d\'âmes','Attacks the forefront enemy and grants Unrecoverable. The damage increases according to your MAX HP and recovers HP of yourself and the ally with the lowest HP by portion of the damage dealt.','Attaque l\'ennemi en tête et attribue un effet de Soins impossibles. Les dégâts augmentent en proportion du MAX de tes PV. Redonne des PV à toi et à l\'allié aux PV les plus bas de l\'équivalent d\'une partie des dégâts infligés.',4,3,3,1,15,150,2349,140,0,140,15,'Khmun Guide Lost Centuria : Runes and Comps | LostCenturia.gg','Guide Khmun Lost Centuria : Runes et Compos | LostCenturia.gg','Find out all there is to know about the Lost Centuria monster Khmun in this guide with its stats, runes, and comps.',NULL,'o_1620921821.jpeg','m_1620921821.jpeg','b_1620921821.jpeg','bc_1620921821.jpeg','i_1620921821.jpeg',0,NULL,'Damage','Dégâts','Increases the damage of Soul Devourer by 20%.','Augmente de 20% les dégâts de Dévoreur d\'åmes.','m_1620921821.png','Harmful Effect','Effet néfaste','Increases your HP by 20%.','Augmente tes PV de 20%.','m_1620921821.png','Guardian of the Scales','Balance du sacrificateur','[Passive] If an ally gets defeated, immediately revives the defeated ally, and evens out the HP ratio between you and the target. The cooldown time exists.','[Passif] Lorsqu\'un allié meurt, réanime instantanément la cible morte. Unifie ensuite le ratio de tes PV et des PV de Ia cible. Un temps de pause existe.','m_1620921821.png','2021-05-13 15:03:41','2021-05-13 15:03:41'),
(21,'Mav','Mav','Penguin Knight','Chevalier pingouin','Duty Change','Echange de responsabilité','Removes inability effects granted on the forefront ally, grants DEF UP II on the ally and yourself, and changes the position with the ally.','Supprime les effets d\'incapacité posés sur l\'allié en tête, applique un effet d\'Augmentation de DEF II sur l\'allié en tête et toi-même et change de position avec l\'allié.',2,2,2,3,15,150,2277,88,0,121,15,'Mav Guide Lost Centuria : Runes and Comps | LostCenturia.gg','Guide Mav Lost Centuria : Runes et Compos | LostCenturia.gg','Find out all there is to know about the Lost Centuria monster Mav in this guide with its stats, runes, and comps.',NULL,'o_1620922247.jpeg','m_1620922247.jpeg','b_1620922247.jpeg','bc_1620922247.jpeg','i_1620922247.jpeg',0,NULL,'Beneficial Effect','Effet bénéfique','Increases the DEF UP grade of Duty Change by 1.','Augmente de 1 le grade d\'amélioration de DEF de l\'échange de responsabilité.','m_1620922247.png','Wings of Regeneration','Ailes de la régénération','Increases the Mana cost of Duty Change by 1 but grants Continuous Recovery on both you and the ally who switched position with.','Augmente le coût en mana d\'Echange de responsabilité de 1 unité mais applique un effet de récupération continue à toi-même et à la cible de Change de position.','m_1620922247.png','Beneficial Effect','Effet bénéfique','Brings the card of the target who switched position with in your hand when using Duty Change.','Récupère en main la carte de la cible de Change de position en cas d\'utilisation d\'Echange de responsabilité.','m_1620922247.png','2021-05-13 15:10:47','2021-05-13 15:10:47'),
(22,'Fynn','Fynn','Imp','Diablotin','Violent Stab','Coup de poignard violent','Attacks the forefront enemy and inflicts Continuous Damage for 9 sec. Freezes the target if the last attack lands as a Critical Hit.','Attaque l\'ennemi le plus proche pendant 9 secondes et inflige des Dégâts continus. Gèle la cible si la dernière attaque est un coup critique.',3,1,1,2,150,15,1229,137,0,80,15,'Fynn Guide Lost Centuria : Runes and Comps | LostCenturia.gg','Guide Fynn Lost Centuria : Runes et Compos | LostCenturia.gg','Find out all there is to know about the Lost Centuria monster Fynn in this guide with its stats, runes, and comps.',NULL,'o_1620922534.jpeg','m_1620922534.jpeg','b_1620922534.jpeg','bc_1620922534.jpeg','i_1620922534.jpeg',0,NULL,'Harmful Effect','Effet néfaste','Increases the Continuous Damage duration of Violent Stab by 6 sec.','Augmente de 6 sec. la durée des dégâts continus de Coup de poignard violent.','m_1620922534.png','Damage','Dégâts','Increases the damage of Violent Stab by 20%.','Augmente les dégâts de Coup de poignard violent de 20%.','m_1620922534.png','Beneficial Effect','Effet bénéfique','Increases your Critical Rate by 35%.','Augmente ton taux critique de 35%.','m_1620922534.png','2021-05-13 15:15:34','2021-05-13 15:15:34'),
(23,'Ragdoll','Ragdoll','Dragon Knight','Chevalier dragon','Dragon\'s Fury','Fureur du dragon','Attacks the last enemy who used a skill to inflict damage and grant Dragon\'s Gaze.','Attaque l\'ennemi qui a utilisé une compétence en dernier lieu et applique-lui un effet de Regard du dragon.',4,1,4,5,15,150,2798,182,0,161,15,'Ragdoll Guide Lost Centuria : Runes and Comps | LostCenturia.gg','Guide Ragdoll Lost Centuria : Runes et Compos | LostCenturia.gg','Find out all there is to know about the Lost Centuria monster Ragdoll in this guide with its stats, runes, and comps.',NULL,'o_1620922813.jpeg','m_1620922813.jpeg','b_1620922813.jpeg','bc_1620922813.jpeg','i_1620922813.jpeg',0,NULL,'Damage','Dégâts','Increases the damage of Dragon\'s Fury by 15%.','Augmente de 15 % les dégâts du Fureur du dragon.','m_1620922813.png','Mana Cost','Coût de mana','Decreases the Mana cost of Dragon\'s Fury by 1.','Diminue de 1 le coût en mana du Fureur du dragon.','m_1620922813.png','Tooth For a Tooth','Dent pour dent','[Passive] Your Mana cost decreases by 1 each time the ally in your line receives a Critical Damage, up to 2.','[Passif] A chaque fois que l\'allié de la même ligne que toi subit des dégâts de coup critique avec une compétence de l\'ennemi, le coût de mana diminue de 1 et de 2 au maximum.','m_1620922813.png','2021-05-13 15:20:13','2021-05-13 15:20:13'),
(24,'Eleanor','Eleanor','Human Form','Human Form','Holy Horn','Corne sacrée','Recovers the HP of all allies, removes harmful effects and grants CRIT Resist UP Il . The recovery amount increases according to your MAX HP.','Redonne des PV à tous les alliés, supprime les effets néfastes et attribue un effet d\'Augmentation de RES CRIT II. La quantité de PV récupérés augmente selon le Max de tes PV.',4,2,4,4,15,150,2848,157,0,150,15,'Eleanor Guide Lost Centuria : Runes and Comps | LostCenturia.gg','Guide Eleanor Lost Centuria : Runes et Compos | LostCenturia.gg','Find out all there is to know about the Lost Centuria monster Eleanor in this guide with its stats, runes, and comps.',NULL,'o_1620923371.jpeg','m_1620923371.jpeg','b_1620923371.jpeg','bc_1620923371.jpeg','i_1620923371.jpeg',1,8,'Beneficial Effect','Effet bénéfique','Increases your MAX HP by 15%.','Augmente le MAX de tes PV de 15 %.','m_1620923371.png','Mana Cost','Coût de mana','Decreases the Mana cost of Holy Horn by 1.','Diminue de 1 le coût de mana de Corne sacrée.','m_1620923371.png','Beneficial Effect','Effet bénéfique','[Passive] Whenever you get Eleanor card in your hand, grants Immunity on all allies.','[Passif] Applique l\'immunité sur tous les alliés, à chaque fois que ceci t\'entre en main.','m_1620923371.png','2021-05-17 23:37:07','2021-05-13 15:29:31');

/*Table structure for table `oauth_access_tokens` */

DROP TABLE IF EXISTS `oauth_access_tokens`;

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_access_tokens` */

/*Table structure for table `oauth_auth_codes` */

DROP TABLE IF EXISTS `oauth_auth_codes`;

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_auth_codes` */

/*Table structure for table `oauth_clients` */

DROP TABLE IF EXISTS `oauth_clients`;

CREATE TABLE `oauth_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_clients` */

/*Table structure for table `oauth_personal_access_clients` */

DROP TABLE IF EXISTS `oauth_personal_access_clients`;

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_personal_access_clients_client_id_index` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_personal_access_clients` */

/*Table structure for table `oauth_refresh_tokens` */

DROP TABLE IF EXISTS `oauth_refresh_tokens`;

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_refresh_tokens` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `rarity` */

DROP TABLE IF EXISTS `rarity`;

CREATE TABLE `rarity` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `rarity` */

insert  into `rarity`(`id`,`name`,`color`) values 
(1,'Normal','#9b9b9b'),
(2,'Rare','#49e55e'),
(3,'Hero','#a946ff'),
(4,'Legend','#e59c49');

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `detail_icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `role` */

insert  into `role`(`id`,`name`,`icon`,`detail_icon`) values 
(1,'Attack','attaque.png',NULL),
(2,'HP','pv.png',NULL),
(3,'Support','support.png',NULL),
(4,'Defense','defense.png',NULL);

/*Table structure for table `rune_sets` */

DROP TABLE IF EXISTS `rune_sets`;

CREATE TABLE `rune_sets` (
  `rs_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `rs_user_id` bigint(20) DEFAULT NULL,
  `rs_monster_id` bigint(20) DEFAULT NULL,
  `rs_name` varchar(255) DEFAULT NULL,
  `fr_rs_name` varchar(255) DEFAULT NULL,
  `rs_comment` text DEFAULT NULL,
  `fr_rs_comment` text DEFAULT NULL,
  `rs_rune` int(10) DEFAULT NULL,
  `rs_substats` text DEFAULT NULL,
  `rs_skill_stones` int(10) DEFAULT NULL,
  `rs_comp_position` int(10) DEFAULT NULL,
  `verify` tinyint(5) DEFAULT 0 COMMENT '0=>unverify, 1=>verify',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`rs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `rune_sets` */

/*Table structure for table `runes` */

DROP TABLE IF EXISTS `runes`;

CREATE TABLE `runes` (
  `r_id` int(10) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(255) DEFAULT NULL,
  `fr_r_name` varchar(255) DEFAULT NULL,
  `r_icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `runes` */

insert  into `runes`(`r_id`,`r_name`,`fr_r_name`,`r_icon`) values 
(1,'Fatal','Fatal','icon-fatal.png'),
(2,'Focus','Focus','icon-focus.png'),
(3,'Gardien','Guard','icon-guard.png'),
(4,'Rage','Rage','icon-rage.png'),
(5,'Swift','Rapide','icon-swift.png'),
(6,'Will','Volonté','icon-will.png'),
(7,'Energy','Énergie','rune-energy.png'),
(8,'Vampire','Vampire','rune-vampire.png'),
(9,'Destroy','Destruction','icon-destroy.png'),
(10,'Endure','Endurance','icon-endure.png'),
(11,'Blade','Lame','icon-blade.png'),
(12,'Violent','Violente','rune-violent.png');

/*Table structure for table `skill_stones` */

DROP TABLE IF EXISTS `skill_stones`;

CREATE TABLE `skill_stones` (
  `skill_id` int(10) NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(50) DEFAULT NULL,
  `fr_skill_name` varchar(50) DEFAULT NULL,
  `skill_icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`skill_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `skill_stones` */

insert  into `skill_stones`(`skill_id`,`skill_name`,`fr_skill_name`,`skill_icon`) values 
(1,'Damage','Damage','damage.png'),
(2,'Mana Cost','Mana Cost','mana_cost.png'),
(3,'Tooth for a tooth','Tooth for a tooth','tooth.png');

/*Table structure for table `special_monsters` */

DROP TABLE IF EXISTS `special_monsters`;

CREATE TABLE `special_monsters` (
  `s_id` int(10) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(255) DEFAULT NULL,
  `fr_s_name` varchar(255) DEFAULT NULL,
  `s_second_name` varchar(255) DEFAULT NULL,
  `fr_s_second_name` varchar(255) DEFAULT NULL,
  `s_spell_name` varchar(255) DEFAULT NULL,
  `fr_s_spell_name` varchar(255) DEFAULT NULL,
  `s_spell_description` text DEFAULT NULL,
  `fr_s_spell_description` text DEFAULT NULL,
  `s_main_image` varchar(255) DEFAULT NULL,
  `s_crit_rate` double DEFAULT NULL,
  `s_crit_dmg` double DEFAULT NULL,
  `s_hp` double DEFAULT NULL,
  `s_atk` double DEFAULT NULL,
  `s_acc` double DEFAULT NULL,
  `s_def` double DEFAULT NULL,
  `s_res` double DEFAULT NULL,
  `s_mana_cost` double DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `special_monsters` */

insert  into `special_monsters`(`s_id`,`s_name`,`fr_s_name`,`s_second_name`,`fr_s_second_name`,`s_spell_name`,`fr_s_spell_name`,`s_spell_description`,`fr_s_spell_description`,`s_main_image`,`s_crit_rate`,`s_crit_dmg`,`s_hp`,`s_atk`,`s_acc`,`s_def`,`s_res`,`s_mana_cost`,`created_at`,`updated_at`) values 
(8,'Eleanor','Eleanor','Mystical Creature','Créature mystique','Holy Horn','Corne sacrée','Grants Reflect DMG, DEF UP II and CRIT Resist UP III on yourself.','Attribue des effets de Réflexion de dégâts, d\'Augmentation de DEF II et d\' Augmentation de RES CRIT III sur toi-même.','m_1620923371.jpeg',15,150,3093,175,0,175,15,4,'2021-05-13 15:29:31','2021-05-13 15:29:31');

/*Table structure for table `spells` */

DROP TABLE IF EXISTS `spells`;

CREATE TABLE `spells` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `fr_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `fr_description` text DEFAULT NULL,
  `mana_cost` double DEFAULT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `icon_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `spells` */

insert  into `spells`(`id`,`name`,`fr_name`,`description`,`fr_description`,`mana_cost`,`main_image`,`icon_image`,`created_at`,`updated_at`) values 
(19,'Tranfer','Transfert','Attacks all enemies and transfers harmful effects granted on the ally monsters on the enemies in the same position.','Attaque tous les ennemis et transfère les effets néfastes posés sur les alliés aux ennemis de la même position.',1,'m_1620923781.png','i_1620923781.png','2021-05-13 15:36:21','2021-05-13 15:36:21'),
(20,'Chill Tornado','Tornade glaciale','Creates Chill Tornado to inflict damage on all enemies and to grant Deceleration II. Freezes the target if the target already has Deceleration.','Crée une tornade glaciale pour infliger des dégâts à tous les ennemis et appliquer un effet de Décélération II sur eux. Gèle la cible si elle est déjà sous effet de Décélération.',1,'m_1620924065.png','i_1620924065.png','2021-05-13 15:41:05','2021-05-13 15:41:05'),
(21,'Soul Cleanse','Purification de l\'âme','Recovers the HP of all allies and removes all of their harmful effects. Gains 1 Mana for each harmful effect removed. This spell can gain up to 3 Mana.','Redonne des PV à tous les alliés et supprime tous les effets néfastes posés sur eux. Obtiens 1 pierre de mana pour chaque effet néfaste supprimé. Ce sort permet d\'obtenir 3 pierres de mana.',2,'m_1620924132.png','i_1620924132.png','2021-05-13 15:42:12','2021-05-13 15:42:12');

/*Table structure for table `sub_stats` */

DROP TABLE IF EXISTS `sub_stats`;

CREATE TABLE `sub_stats` (
  `sub_id` int(20) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(20) DEFAULT NULL,
  `fr_sub_name` varchar(20) DEFAULT NULL,
  `sub_icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `sub_stats` */

insert  into `sub_stats`(`sub_id`,`sub_name`,`fr_sub_name`,`sub_icon`) values 
(1,'CRIT DMG','Dgts critiq','sub-crit-dmg.png'),
(2,'CRIT RATE','Tx critiq','sub-crit-rate.png'),
(3,'HP','PV ','sub-hp.png'),
(4,'ATK','ATQ','sub-atk.png'),
(5,'ACC','Précision','sub-acc.png'),
(6,'DEF','DEF','seb-def.png'),
(7,'RES','Résistance','sub-res.png');

/*Table structure for table `team_comps` */

DROP TABLE IF EXISTS `team_comps`;

CREATE TABLE `team_comps` (
  `c_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) DEFAULT NULL,
  `c_fr_name` varchar(255) DEFAULT NULL,
  `c_general_info` text DEFAULT NULL,
  `c_fr_general_info` text DEFAULT NULL,
  `c_sent_by_user` bigint(20) DEFAULT NULL,
  `c_likes` int(10) DEFAULT NULL,
  `c_dislikes` int(10) DEFAULT NULL,
  `c_position` varchar(255) DEFAULT NULL,
  `c_spell` varchar(255) DEFAULT NULL,
  `c_verify` tinyint(1) DEFAULT 0 COMMENT '0=>unverify, 1=>verify',
  `element_fire` int(1) DEFAULT 0,
  `element_water` int(1) DEFAULT 0,
  `element_wind` int(1) DEFAULT 0,
  `element_light` int(1) DEFAULT 0,
  `element_dark` int(1) DEFAULT 0,
  `role_atk` int(1) DEFAULT 0,
  `role_hp` int(1) DEFAULT 0,
  `role_support` int(1) DEFAULT 0,
  `role_defense` int(1) DEFAULT 0,
  `rarity_normal` int(1) DEFAULT 0,
  `rarity_rare` int(1) DEFAULT 0,
  `rarity_hero` int(1) DEFAULT 0,
  `rarity_legend` int(1) DEFAULT 0,
  `average_mana_cost` double DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `team_comps` */

insert  into `team_comps`(`c_id`,`c_name`,`c_fr_name`,`c_general_info`,`c_fr_general_info`,`c_sent_by_user`,`c_likes`,`c_dislikes`,`c_position`,`c_spell`,`c_verify`,`element_fire`,`element_water`,`element_wind`,`element_light`,`element_dark`,`role_atk`,`role_hp`,`role_support`,`role_defense`,`rarity_normal`,`rarity_rare`,`rarity_hero`,`rarity_legend`,`average_mana_cost`,`comment`,`created_at`,`updated_at`) values 
(11,'Strongest',NULL,'This is very powerful combination.',NULL,9,NULL,NULL,'[17,18,20,19,21,22,24,23]','[19,20,21]',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2021-05-17 14:46:00','2021-05-17 14:46:00');

/*Table structure for table `team_comps_comments` */

DROP TABLE IF EXISTS `team_comps_comments`;

CREATE TABLE `team_comps_comments` (
  `comment_id` int(5) NOT NULL AUTO_INCREMENT,
  `comment_comps_id` int(10) NOT NULL,
  `comment_user_id` bigint(20) DEFAULT NULL,
  `comment_text` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `team_comps_comments` */

/*Table structure for table `user_info` */

DROP TABLE IF EXISTS `user_info`;

CREATE TABLE `user_info` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL COMMENT '0=>man, 1=>woman',
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `post_code` varchar(20) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user_info` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guild_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(1) DEFAULT 0 COMMENT '0=>user, 1=>admin',
  `verified` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`game_name`,`guild_name`,`email`,`email_verified_at`,`password`,`remember_token`,`role`,`verified`,`created_at`,`updated_at`) values 
(1,'admin','','','admin@gmail.com',NULL,'$2y$10$2WtzC9OKoXqWAdUbNmSXSOcaut9SshFYTbJWDM96HN6zIaqN5DkvW',NULL,1,0,'2021-04-30 20:14:12','2021-04-30 20:14:12'),
(9,'user2','game_name_2','guild_name_2','user2@gmail.com',NULL,'$2y$10$2WtzC9OKoXqWAdUbNmSXSOcaut9SshFYTbJWDM96HN6zIaqN5DkvW',NULL,0,0,NULL,NULL),
(10,'user3','game_name_3','guild_name_3','user3@gmail.com',NULL,'$2y$10$2WtzC9OKoXqWAdUbNmSXSOcaut9SshFYTbJWDM96HN6zIaqN5DkvW',NULL,0,0,NULL,NULL),
(11,'user4','game_name_4','guild_name_4','user4@gmail.com',NULL,'$2y$10$2WtzC9OKoXqWAdUbNmSXSOcaut9SshFYTbJWDM96HN6zIaqN5DkvW',NULL,0,0,NULL,NULL),
(17,'user5','Game 5','Guild 5','user5@gmail.com',NULL,'123456789',NULL,0,0,'2021-05-11 03:47:18','2021-05-11 03:47:18');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
