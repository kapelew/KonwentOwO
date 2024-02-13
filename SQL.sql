/*
 Navicat Premium Data Transfer

 Source Server         : konwentOwO
 Source Server Type    : PostgreSQL
 Source Server Version : 150005 (150005)
 Source Host           : ec2-54-73-22-169.eu-west-1.compute.amazonaws.com:5432
 Source Catalog        : d5ba6rdsnqi7j9
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 150005 (150005)
 File Encoding         : 65001

 Date: 13/02/2024 04:37:10
*/


-- ----------------------------
-- Sequence structure for event_details_event_details_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."event_details_event_details_id_seq";
CREATE SEQUENCE "public"."event_details_event_details_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;
ALTER SEQUENCE "public"."event_details_event_details_id_seq" OWNER TO "ntgumhxgquoutg";

-- ----------------------------
-- Sequence structure for events_event_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."events_event_id_seq";
CREATE SEQUENCE "public"."events_event_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;
ALTER SEQUENCE "public"."events_event_id_seq" OWNER TO "ntgumhxgquoutg";

-- ----------------------------
-- Sequence structure for user_details_user_details_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."user_details_user_details_id_seq";
CREATE SEQUENCE "public"."user_details_user_details_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;
ALTER SEQUENCE "public"."user_details_user_details_id_seq" OWNER TO "ntgumhxgquoutg";

-- ----------------------------
-- Sequence structure for users_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."users_id_seq";
CREATE SEQUENCE "public"."users_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;
ALTER SEQUENCE "public"."users_id_seq" OWNER TO "ntgumhxgquoutg";

-- ----------------------------
-- Table structure for event_details
-- ----------------------------
DROP TABLE IF EXISTS "public"."event_details";
CREATE TABLE "public"."event_details" (
  "event_details_id" int4 NOT NULL DEFAULT nextval('event_details_event_details_id_seq'::regclass),
  "description" varchar(255) COLLATE "pg_catalog"."default",
  "date" date,
  "picture_id" varchar(255) COLLATE "pg_catalog"."default" DEFAULT 2,
  "category" varchar(255) COLLATE "pg_catalog"."default",
  "city" varchar(255) COLLATE "pg_catalog"."default"
)
;
ALTER TABLE "public"."event_details" OWNER TO "ntgumhxgquoutg";

-- ----------------------------
-- Records of event_details
-- ----------------------------
BEGIN;
INSERT INTO "public"."event_details" ("event_details_id", "description", "date", "picture_id", "category", "city") VALUES (1, 'Kolejna edycja największego festiwalu kultury i popkultury japońskiej w Polsce!
Magnificon jest festiwalem poświęconym szeroko pojętej popkulturze japońskiej, a także, w nieco mniejszym zakresie, jej tradycji i sztuce.', '2023-12-02', '2.png', 'anime', 'krakow');
INSERT INTO "public"."event_details" ("event_details_id", "description", "date", "picture_id", "category", "city") VALUES (2, 'Poznań Game Arena to największe targi rozrywki i multimediów w Europie Środkowo-Wschodniej, organizowane zarówno dla branży jak i indywidualnych zwiedzających.', '2023-10-24', '2.png', 'tech', 'poznan');
INSERT INTO "public"."event_details" ("event_details_id", "description", "date", "picture_id", "category", "city") VALUES (3, 'Zawodnicy z całego świata rywalizują w popularnych grach komputerowych, takich jak Counter-Strike: Global Offensive czy League of Legends. IEM przyciąga uwagę milionów fanów i oferuje znaczące nagrody pieniężne dla zwycięzców.', '2024-02-11', '2.png', 'esport', 'katowice');
INSERT INTO "public"."event_details" ("event_details_id", "description", "date", "picture_id", "category", "city") VALUES (4, 'Największy po wschodniej stronie Wisły festiwal poświęcony fantastyce, gromadzący miłośników książek, filmów, komiksów, gier i cosplayerów.', '2024-02-16', '2.png', 'fantastyka', 'lublin');
INSERT INTO "public"."event_details" ("event_details_id", "description", "date", "picture_id", "category", "city") VALUES (5, 'Targi Fantastyki to idealne miejsce, aby zachwycić się nietypowym rękodziełem, poznać trendy w wydawniczym świecie fantastyki oraz spotkać swoich ulubionych twórców i rzemieślników. ', '2024-04-13', '2.png', 'fantastyka', 'warszawa');
INSERT INTO "public"."event_details" ("event_details_id", "description", "date", "picture_id", "category", "city") VALUES (6, 'W trakcie wydarzenia czekać na Was będą prelekcje, warsztaty, sesje RPG, wystawcy oraz wyjątkowa gra konwencyjna. Po pustkowiach Cooloni oraz Podziemnym Królestwie nadeszła pora na przygodę w kosmicznej przestrzeni, do której zabierze Was Komandor iXPer.', '2024-04-13', '2.png', 'fantastyka', 'katowice');
INSERT INTO "public"."event_details" ("event_details_id", "description", "date", "picture_id", "category", "city") VALUES (7, 'Nanicon to wydarzenie pełne atrakcji i zabaw. Na Naniconie możecie spodziewać się RPG''ów, gier muzycznych, paneli, konkursów i nie tylko! Nasza tematyka to glownie Anime.', '2024-08-02', '2.png', 'anime', 'katowice');
INSERT INTO "public"."event_details" ("event_details_id", "description", "date", "picture_id", "category", "city") VALUES (8, 'Program StarFest jest niesamowicie zróżnicowany, prelekcje, wykłady i panele dyskusyjne, podzielone na bloki tematyczne. Możesz wziąć udział w spotkaniach z twórcami, odkrywać świat filmu i seriali, zagłębiać się w universum Star Wars.', '2024-10-18', '2.png', 'fantastyka', 'lublin');
INSERT INTO "public"."event_details" ("event_details_id", "description", "date", "picture_id", "category", "city") VALUES (9, 'W ostatni weekend lutego zapraszamy wszystkich na kolejną edycję Remconu! Przewidujemy 3 dni świetnej zabawy dla fanów książek, gier planszowych, rytmicznych i elektronicznych, kultury azjatyckiej, fantastyki oraz klimatów postapo. ', '2024-02-23', '2.png', 'fantastyka', 'gdansk');
INSERT INTO "public"."event_details" ("event_details_id", "description", "date", "picture_id", "category", "city") VALUES (18, 'Na Weekendzie Japońskim będzie okazja podziwiać zakładanie tradycyjnej samurajskiej zbroi, wziąć udział w pokazach gotowania na żywo oraz spotkać autorów niesamowitych książek o Japonii oraz posłuchać japońskiej muzyki.', '2024-03-16', '2.png', 'azja', 'warszawa');
INSERT INTO "public"."event_details" ("event_details_id", "description", "date", "picture_id", "category", "city") VALUES (19, 'Krakowski Festiwal Komiksu to największe w Polsce południowej doroczne spotkanie fanów komiksu, ilustracji, animacji i innych form narracji wizualnej. W programie każdej edycji można znaleźć atrakcje dla wszystkich grup wiekowych.', '2024-03-22', '2.png', 'komiks', 'krakow');
INSERT INTO "public"."event_details" ("event_details_id", "description", "date", "picture_id", "category", "city") VALUES (20, 'Targi Książki w Warszawie to największe międzynarodowe wydarzenie branży wydawniczej w Polsce.', '2024-05-23', '2.png', 'ksiazki', 'warszawa');
INSERT INTO "public"."event_details" ("event_details_id", "description", "date", "picture_id", "category", "city") VALUES (21, 'Festiwal Gier i Popkultury to coroczne wydarzenie dedykowane branży gamedev, na które składają się m.in. branżowa konferencja, wystawa niezależnych twórców gier Pixel Expo oraz konkurs Intel Pixel Awards Europe.', '2024-06-07', '2.png', 'gaming', 'warszawa');
INSERT INTO "public"."event_details" ("event_details_id", "description", "date", "picture_id", "category", "city") VALUES (22, 'Festiwal Kultury Azjatyckiej Hikari po raz kolejny zagości w 💜 Collegium da Vinci 💛 w muzycznym klimacie. Lecz tym razem… w bardziej rockowych brzmieniach 🎸', '2024-08-16', '2.png', 'anime', 'poznan');
INSERT INTO "public"."event_details" ("event_details_id", "description", "date", "picture_id", "category", "city") VALUES (23, 'Zapraszamy na kolejną odsłonę najlepszego i największego festiwalu i targów gier planszowych w Polsce! Można przyjść samemu, z przyjaciółmi albo całą rodziną!', '2024-09-28', '2.png', 'fantastyka', 'katowice');
INSERT INTO "public"."event_details" ("event_details_id", "description", "date", "picture_id", "category", "city") VALUES (24, 'Przygotujcie się na niezapomniane wydarzenie pełne japońskiej kultury popularnej! AnimeCon Halloween 2024 to wyjątkowy konwent, który zgromadzi miłośników anime, mangi, cosplay, oraz szeroko pojętej kultury Japonii.', '2024-10-26', '2.png', 'anime', 'poznan');
INSERT INTO "public"."event_details" ("event_details_id", "description", "date", "picture_id", "category", "city") VALUES (26, 'Targi Książki w Krakowie - co roku na cztery dni Kraków staje się stolicą literatury.', '2024-10-24', '2.png', 'ksiazki', 'krakow');
INSERT INTO "public"."event_details" ("event_details_id", "description", "date", "picture_id", "category", "city") VALUES (27, 'ne More Game to obowiązkowy punkt w kalendarzu każdego miłośnika gier. Dla starszych i młodszych, doświadczonych i początkujących graczy.', '2024-04-06', '2.png', 'fantasy', 'wroclaw');
INSERT INTO "public"."event_details" ("event_details_id", "description", "date", "picture_id", "category", "city") VALUES (28, 'Anime Symphony to wydarzenie, które łączy muzykę symfoniczną i świat animacji z Kraju Kwitnącej Wiśni. Doskonała oprawa muzyczna – orkiestra, chór oraz soliści, zapewnią niezapomniane przeżycia', '2024-04-06', '2.png', 'anime', 'krakow');
COMMIT;

-- ----------------------------
-- Table structure for events
-- ----------------------------
DROP TABLE IF EXISTS "public"."events";
CREATE TABLE "public"."events" (
  "event_id" int4 NOT NULL DEFAULT nextval('events_event_id_seq'::regclass),
  "event_details_id" int4,
  "title" varchar(255) COLLATE "pg_catalog"."default"
)
;
ALTER TABLE "public"."events" OWNER TO "ntgumhxgquoutg";

-- ----------------------------
-- Records of events
-- ----------------------------
BEGIN;
INSERT INTO "public"."events" ("event_id", "event_details_id", "title") VALUES (2, 1, 'Magnificon Winter Expo 2023');
INSERT INTO "public"."events" ("event_id", "event_details_id", "title") VALUES (3, 2, 'Poznan Game Arena');
INSERT INTO "public"."events" ("event_id", "event_details_id", "title") VALUES (4, 3, 'Intel Extreme Masters Finals');
INSERT INTO "public"."events" ("event_id", "event_details_id", "title") VALUES (5, 4, 'Festiwal Fantastyki FALKON');
INSERT INTO "public"."events" ("event_id", "event_details_id", "title") VALUES (6, 5, 'Warszawskie Targi Fantastyki');
INSERT INTO "public"."events" ("event_id", "event_details_id", "title") VALUES (7, 6, 'Śląskie Dni Fantastyki');
INSERT INTO "public"."events" ("event_id", "event_details_id", "title") VALUES (8, 7, 'NANICon 2024');
INSERT INTO "public"."events" ("event_id", "event_details_id", "title") VALUES (9, 8, 'StarFest 2024');
INSERT INTO "public"."events" ("event_id", "event_details_id", "title") VALUES (10, 9, 'Remcon 2024');
INSERT INTO "public"."events" ("event_id", "event_details_id", "title") VALUES (18, 18, 'Weekend Japoński');
INSERT INTO "public"."events" ("event_id", "event_details_id", "title") VALUES (19, 19, '13. Krakowski Festiwal Komiksu');
INSERT INTO "public"."events" ("event_id", "event_details_id", "title") VALUES (20, 20, 'Międzynarodowe Targi Książki');
INSERT INTO "public"."events" ("event_id", "event_details_id", "title") VALUES (21, 21, 'Pixel Heaven 2024');
INSERT INTO "public"."events" ("event_id", "event_details_id", "title") VALUES (22, 22, 'Hikari 2024');
INSERT INTO "public"."events" ("event_id", "event_details_id", "title") VALUES (23, 23, 'Planszówki w Spodku 2024');
INSERT INTO "public"."events" ("event_id", "event_details_id", "title") VALUES (24, 24, 'AnimeCon Halloween 2024');
INSERT INTO "public"."events" ("event_id", "event_details_id", "title") VALUES (25, 26, '27. Międzynarodowe Targi Książki');
INSERT INTO "public"."events" ("event_id", "event_details_id", "title") VALUES (26, 27, 'One More Game 2024');
INSERT INTO "public"."events" ("event_id", "event_details_id", "title") VALUES (27, 28, 'Anime Symphony');
COMMIT;

-- ----------------------------
-- Table structure for user_details
-- ----------------------------
DROP TABLE IF EXISTS "public"."user_details";
CREATE TABLE "public"."user_details" (
  "user_details_id" int4 NOT NULL DEFAULT nextval('user_details_user_details_id_seq'::regclass),
  "picture_id" int4 DEFAULT 1,
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "surname" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" date DEFAULT CURRENT_DATE,
  "phone" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "role" varchar(255) COLLATE "pg_catalog"."default"
)
;
ALTER TABLE "public"."user_details" OWNER TO "ntgumhxgquoutg";

-- ----------------------------
-- Records of user_details
-- ----------------------------
BEGIN;
INSERT INTO "public"."user_details" ("user_details_id", "picture_id", "name", "surname", "created_at", "phone", "role") VALUES (32, 1, 'Admin', 'Admin', '2024-02-11', '101202303', 'admin');
INSERT INTO "public"."user_details" ("user_details_id", "picture_id", "name", "surname", "created_at", "phone", "role") VALUES (38, 1, 'Lukasz', 'Lech', '2024-02-11', '997997997', 'user');
COMMIT;

-- ----------------------------
-- Table structure for user_events
-- ----------------------------
DROP TABLE IF EXISTS "public"."user_events";
CREATE TABLE "public"."user_events" (
  "user_id" int4,
  "event_id" int4
)
;
ALTER TABLE "public"."user_events" OWNER TO "ntgumhxgquoutg";

-- ----------------------------
-- Records of user_events
-- ----------------------------
BEGIN;
INSERT INTO "public"."user_events" ("user_id", "event_id") VALUES (14, 9);
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS "public"."users";
CREATE TABLE "public"."users" (
  "id" int4 NOT NULL DEFAULT nextval('users_id_seq'::regclass),
  "email" varchar(100) COLLATE "pg_catalog"."default",
  "password" varchar(100) COLLATE "pg_catalog"."default",
  "user_details_id" int4
)
;
ALTER TABLE "public"."users" OWNER TO "ntgumhxgquoutg";

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO "public"."users" ("id", "email", "password", "user_details_id") VALUES (14, 'admin@pk.edu.pl', '$2y$10$2BfaQHLPF66KWt/4b5EIgOqvOhxAzKN7sJrkHz9M4MXfvDHCjkhlC', 32);
INSERT INTO "public"."users" ("id", "email", "password", "user_details_id") VALUES (20, 'lukasz.lech@student.pk.edu.pl', '$2y$10$GiEbruTiBTgx2xr4VxIXyerxJHfzPmc/rD5V52.jivvPXPvYrVmti', 38);
COMMIT;

-- ----------------------------
-- Function structure for delete_event_by_id
-- ----------------------------
DROP FUNCTION IF EXISTS "public"."delete_event_by_id"("event_id_to_delete" int4);
CREATE OR REPLACE FUNCTION "public"."delete_event_by_id"("event_id_to_delete" int4)
  RETURNS "pg_catalog"."void" AS $BODY$
BEGIN
    -- Usuwanie z tabeli events
    DELETE FROM public.events
    WHERE event_id = event_id_to_delete;

    -- Usuwanie z tabeli event_details (jeśli istnieje)
    DELETE FROM public.event_details
    WHERE event_details_id = event_id_to_delete;
END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;
ALTER FUNCTION "public"."delete_event_by_id"("event_id_to_delete" int4) OWNER TO "ntgumhxgquoutg";

-- ----------------------------
-- Function structure for insert_event
-- ----------------------------
DROP FUNCTION IF EXISTS "public"."insert_event"("event_title" varchar, "event_description" text, "event_date" date, "event_category" varchar, "event_city" varchar);
CREATE OR REPLACE FUNCTION "public"."insert_event"("event_title" varchar, "event_description" text, "event_date" date, "event_category" varchar, "event_city" varchar)
  RETURNS "pg_catalog"."void" AS $BODY$
DECLARE
    new_event_details_id INT;
BEGIN
    -- Wstawianie nowego rekordu do tabeli event_details
    INSERT INTO public.event_details (description, date, category, city)
    VALUES (event_description, event_date, event_category, event_city)
    RETURNING event_details_id INTO new_event_details_id;

    -- Wstawianie nowego rekordu do tabeli events
    INSERT INTO public.events (event_details_id, title)
    VALUES (new_event_details_id, event_title);
END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;
ALTER FUNCTION "public"."insert_event"("event_title" varchar, "event_description" text, "event_date" date, "event_category" varchar, "event_city" varchar) OWNER TO "ntgumhxgquoutg";

-- ----------------------------
-- Function structure for promote_to_admin
-- ----------------------------
DROP FUNCTION IF EXISTS "public"."promote_to_admin"("user_id" int4);
CREATE OR REPLACE FUNCTION "public"."promote_to_admin"("user_id" int4)
  RETURNS "pg_catalog"."void" AS $BODY$
BEGIN
    UPDATE user_details
    SET role = 'admin'
    WHERE user_details_id = user_id;
END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;
ALTER FUNCTION "public"."promote_to_admin"("user_id" int4) OWNER TO "ntgumhxgquoutg";

-- ----------------------------
-- Function structure for set_default_role
-- ----------------------------
DROP FUNCTION IF EXISTS "public"."set_default_role"();
CREATE OR REPLACE FUNCTION "public"."set_default_role"()
  RETURNS "pg_catalog"."trigger" AS $BODY$
BEGIN
    IF NEW.role IS NULL THEN
        NEW.role := 'user';
    END IF;
    RETURN NEW;
END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;
ALTER FUNCTION "public"."set_default_role"() OWNER TO "ntgumhxgquoutg";

-- ----------------------------
-- View structure for event_user_details
-- ----------------------------
DROP VIEW IF EXISTS "public"."event_user_details";
CREATE VIEW "public"."event_user_details" AS  SELECT e.event_id,
    e.title AS event_title,
    ed.description AS event_description,
    ed.date AS event_date,
    ed.category AS event_category,
    ed.city AS event_city,
    u.user_details_id,
    u.name AS user_name,
    u.surname AS user_surname,
    u.created_at AS user_created_at,
    u.phone AS user_phone,
    u.role AS user_role
   FROM events e
     JOIN event_details ed ON e.event_details_id = ed.event_details_id
     JOIN user_events ue ON e.event_id = ue.event_id
     JOIN users usr ON ue.user_id = usr.id
     JOIN user_details u ON usr.user_details_id = u.user_details_id;
ALTER TABLE "public"."event_user_details" OWNER TO "ntgumhxgquoutg";

-- ----------------------------
-- View structure for active_events
-- ----------------------------
DROP VIEW IF EXISTS "public"."active_events";
CREATE VIEW "public"."active_events" AS  SELECT e.event_id,
    e.title AS event_title,
    ed.description AS event_description,
    ed.date AS event_date,
    ed.category AS event_category,
    ed.city AS event_city
   FROM events e
     JOIN event_details ed ON e.event_details_id = ed.event_details_id
  WHERE ed.date > CURRENT_DATE;
ALTER TABLE "public"."active_events" OWNER TO "ntgumhxgquoutg";

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."event_details_event_details_id_seq"
OWNED BY "public"."event_details"."event_details_id";
SELECT setval('"public"."event_details_event_details_id_seq"', 28, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."events_event_id_seq"
OWNED BY "public"."events"."event_id";
SELECT setval('"public"."events_event_id_seq"', 27, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."user_details_user_details_id_seq"
OWNED BY "public"."user_details"."user_details_id";
SELECT setval('"public"."user_details_user_details_id_seq"', 42, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."users_id_seq"
OWNED BY "public"."users"."id";
SELECT setval('"public"."users_id_seq"', 23, true);

-- ----------------------------
-- Primary Key structure for table event_details
-- ----------------------------
ALTER TABLE "public"."event_details" ADD CONSTRAINT "event_details_pkey" PRIMARY KEY ("event_details_id");

-- ----------------------------
-- Primary Key structure for table events
-- ----------------------------
ALTER TABLE "public"."events" ADD CONSTRAINT "events_pkey" PRIMARY KEY ("event_id");

-- ----------------------------
-- Triggers structure for table user_details
-- ----------------------------
CREATE TRIGGER "set_default_role_trigger" BEFORE INSERT ON "public"."user_details"
FOR EACH ROW
EXECUTE PROCEDURE "public"."set_default_role"();

-- ----------------------------
-- Uniques structure for table user_details
-- ----------------------------
ALTER TABLE "public"."user_details" ADD CONSTRAINT "unique_user_details" UNIQUE ("surname", "name");

-- ----------------------------
-- Primary Key structure for table user_details
-- ----------------------------
ALTER TABLE "public"."user_details" ADD CONSTRAINT "user_details_pkey" PRIMARY KEY ("user_details_id");

-- ----------------------------
-- Primary Key structure for table users
-- ----------------------------
ALTER TABLE "public"."users" ADD CONSTRAINT "users_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Foreign Keys structure for table events
-- ----------------------------
ALTER TABLE "public"."events" ADD CONSTRAINT "fk_events_ed" FOREIGN KEY ("event_details_id") REFERENCES "public"."event_details" ("event_details_id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table user_events
-- ----------------------------
ALTER TABLE "public"."user_events" ADD CONSTRAINT "fk_user_events_event" FOREIGN KEY ("event_id") REFERENCES "public"."events" ("event_id") ON DELETE CASCADE ON UPDATE NO ACTION;
ALTER TABLE "public"."user_events" ADD CONSTRAINT "fk_user_events_user" FOREIGN KEY ("user_id") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table users
-- ----------------------------
ALTER TABLE "public"."users" ADD CONSTRAINT "fk_users_user_details" FOREIGN KEY ("user_details_id") REFERENCES "public"."user_details" ("user_details_id") ON DELETE CASCADE ON UPDATE NO ACTION;
