CREATE TABLE artist_managers
(
    artist_manager_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    companyname VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    genres_id INT(10) unsigned NOT NULL,
    CONSTRAINT artist_managers_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id),
    CONSTRAINT artist_managers_genres_id_foreign FOREIGN KEY (genres_id) REFERENCES genres (genres_id)
);
CREATE INDEX artist_managers_genres_id_foreign ON artist_managers (genres_id);
CREATE INDEX artist_managers_social_media_id_foreign ON artist_managers (social_media_id);
CREATE TABLE authors
(
    author_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    birthday DATE NOT NULL,
    location VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    genres_id INT(10) unsigned NOT NULL,
    edition_id INT(10) unsigned,
    publisher_id INT(10) unsigned,
    CONSTRAINT authors_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id),
    CONSTRAINT authors_genres_id_foreign FOREIGN KEY (genres_id) REFERENCES genres (genres_id),
    CONSTRAINT authors_edition_id_foreign FOREIGN KEY (edition_id) REFERENCES editions (edition_id),
    CONSTRAINT authors_publisher_id_foreign FOREIGN KEY (publisher_id) REFERENCES publishers (publisher_id)
);
CREATE INDEX authors_edition_id_foreign ON authors (edition_id);
CREATE INDEX authors_genres_id_foreign ON authors (genres_id);
CREATE INDEX authors_publisher_id_foreign ON authors (publisher_id);
CREATE INDEX authors_social_media_id_foreign ON authors (social_media_id);
CREATE TABLE bands
(
    band_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    genres_id INT(10) unsigned NOT NULL,
    musician_id INT(10) unsigned NOT NULL,
    CONSTRAINT bands_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id),
    CONSTRAINT bands_genres_id_foreign FOREIGN KEY (genres_id) REFERENCES genres (genres_id),
    CONSTRAINT bands_musician_id_foreign FOREIGN KEY (musician_id) REFERENCES musicians (musician_id)
);
CREATE INDEX bands_genres_id_foreign ON bands (genres_id);
CREATE INDEX bands_musician_id_foreign ON bands (musician_id);
CREATE INDEX bands_social_media_id_foreign ON bands (social_media_id);
CREATE TABLE booking_agencies
(
    booking_agency_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    genres_id INT(10) unsigned NOT NULL,
    CONSTRAINT booking_agencies_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id),
    CONSTRAINT booking_agencies_genres_id_foreign FOREIGN KEY (genres_id) REFERENCES genres (genres_id)
);
CREATE INDEX booking_agencies_genres_id_foreign ON booking_agencies (genres_id);
CREATE INDEX booking_agencies_social_media_id_foreign ON booking_agencies (social_media_id);
CREATE TABLE djs
(
    dj_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    genres_id INT(10) unsigned NOT NULL,
    CONSTRAINT djs_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id),
    CONSTRAINT djs_genres_id_foreign FOREIGN KEY (genres_id) REFERENCES genres (genres_id)
);
CREATE INDEX djs_genres_id_foreign ON djs (genres_id);
CREATE INDEX djs_social_media_id_foreign ON djs (social_media_id);
CREATE TABLE editions
(
    edition_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    genres_id INT(10) unsigned NOT NULL,
    CONSTRAINT editions_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id),
    CONSTRAINT editions_genres_id_foreign FOREIGN KEY (genres_id) REFERENCES genres (genres_id)
);
CREATE INDEX editions_genres_id_foreign ON editions (genres_id);
CREATE INDEX editions_social_media_id_foreign ON editions (social_media_id);
CREATE TABLE event_locations
(
    event_location_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    size INT(11) NOT NULL,
    description TEXT NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    CONSTRAINT event_locations_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id)
);
CREATE INDEX event_locations_social_media_id_foreign ON event_locations (social_media_id);
CREATE TABLE event_managers
(
    event_manager_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    companyname VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    genres_id INT(10) unsigned NOT NULL,
    CONSTRAINT event_managers_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id),
    CONSTRAINT event_managers_genres_id_foreign FOREIGN KEY (genres_id) REFERENCES genres (genres_id)
);
CREATE INDEX event_managers_genres_id_foreign ON event_managers (genres_id);
CREATE INDEX event_managers_social_media_id_foreign ON event_managers (social_media_id);
CREATE TABLE freelance_audio_engineers
(
    audio_engineer_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    CONSTRAINT freelance_audio_engineers_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id)
);
CREATE INDEX freelance_audio_engineers_social_media_id_foreign ON freelance_audio_engineers (social_media_id);
CREATE TABLE freelance_light_technicians
(
    light_tech_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    CONSTRAINT freelance_light_technicians_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id)
);
CREATE INDEX freelance_light_technicians_social_media_id_foreign ON freelance_light_technicians (social_media_id);
CREATE TABLE genres
(
    genres_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);
CREATE TABLE instruments
(
    instruments_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);
CREATE TABLE labels
(
    label_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    labelname VARCHAR(255) NOT NULL,
    LC VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    genres_id INT(10) unsigned NOT NULL,
    band_id INT(10) unsigned NOT NULL,
    sound_body_id INT(10) unsigned NOT NULL,
    solo_artist_id INT(10) unsigned NOT NULL,
    CONSTRAINT labels_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id),
    CONSTRAINT labels_genres_id_foreign FOREIGN KEY (genres_id) REFERENCES genres (genres_id),
    CONSTRAINT labels_band_id_foreign FOREIGN KEY (band_id) REFERENCES bands (band_id),
    CONSTRAINT labels_sound_body_id_foreign FOREIGN KEY (sound_body_id) REFERENCES sound_bodies (sound_body_id),
    CONSTRAINT labels_solo_artist_id_foreign FOREIGN KEY (solo_artist_id) REFERENCES solo_artists (solo_artist_id)
);
CREATE INDEX labels_band_id_foreign ON labels (band_id);
CREATE INDEX labels_genres_id_foreign ON labels (genres_id);
CREATE INDEX labels_social_media_id_foreign ON labels (social_media_id);
CREATE INDEX labels_solo_artist_id_foreign ON labels (solo_artist_id);
CREATE INDEX labels_sound_body_id_foreign ON labels (sound_body_id);
CREATE TABLE migrations
(
    id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    migration VARCHAR(255) NOT NULL,
    batch INT(11) NOT NULL
);
CREATE TABLE musicians
(
    musician_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    birthday DATE NOT NULL,
    location VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    genres_id INT(10) unsigned NOT NULL,
    band_id INT(10) unsigned NOT NULL,
    sound_body_id INT(10) unsigned NOT NULL,
    solo_artist_id INT(10) unsigned NOT NULL,
    CONSTRAINT musicians_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id),
    CONSTRAINT musicians_genres_id_foreign FOREIGN KEY (genres_id) REFERENCES genres (genres_id),
    CONSTRAINT musicians_band_id_foreign FOREIGN KEY (band_id) REFERENCES bands (band_id),
    CONSTRAINT musicians_sound_body_id_foreign FOREIGN KEY (sound_body_id) REFERENCES sound_bodies (sound_body_id),
    CONSTRAINT musicians_solo_artist_id_foreign FOREIGN KEY (solo_artist_id) REFERENCES solo_artists (solo_artist_id)
);
CREATE INDEX musicians_band_id_foreign ON musicians (band_id);
CREATE INDEX musicians_genres_id_foreign ON musicians (genres_id);
CREATE INDEX musicians_social_media_id_foreign ON musicians (social_media_id);
CREATE INDEX musicians_solo_artist_id_foreign ON musicians (solo_artist_id);
CREATE INDEX musicians_sound_body_id_foreign ON musicians (sound_body_id);
CREATE TABLE password_resets
(
    email VARCHAR(255) NOT NULL,
    token VARCHAR(255) NOT NULL,
    created_at TIMESTAMP
);
CREATE INDEX password_resets_email_index ON password_resets (email);
CREATE INDEX password_resets_token_index ON password_resets (token);
CREATE TABLE pressing_plants
(
    pressing_plant_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    companyname VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    pressing VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    CONSTRAINT pressing_plants_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id)
);
CREATE INDEX pressing_plants_social_media_id_foreign ON pressing_plants (social_media_id);
CREATE TABLE producers
(
    producer_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    companyname VARCHAR(255) NOT NULL,
    executive_producing TINYINT(1) NOT NULL,
    location VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    genres_id INT(10) unsigned NOT NULL,
    CONSTRAINT producers_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id),
    CONSTRAINT producers_genres_id_foreign FOREIGN KEY (genres_id) REFERENCES genres (genres_id)
);
CREATE INDEX producers_genres_id_foreign ON producers (genres_id);
CREATE INDEX producers_social_media_id_foreign ON producers (social_media_id);
CREATE TABLE promoters
(
    promoter_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    companyname VARCHAR(255) NOT NULL,
    venue VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    genres_id INT(10) unsigned NOT NULL,
    CONSTRAINT promoters_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id),
    CONSTRAINT promoters_genres_id_foreign FOREIGN KEY (genres_id) REFERENCES genres (genres_id)
);
CREATE INDEX promoters_genres_id_foreign ON promoters (genres_id);
CREATE INDEX promoters_social_media_id_foreign ON promoters (social_media_id);
CREATE TABLE publishers
(
    publisher_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    companyname VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    genres_id INT(10) unsigned NOT NULL,
    CONSTRAINT publishers_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id),
    CONSTRAINT publishers_genres_id_foreign FOREIGN KEY (genres_id) REFERENCES genres (genres_id)
);
CREATE INDEX publishers_genres_id_foreign ON publishers (genres_id);
CREATE INDEX publishers_social_media_id_foreign ON publishers (social_media_id);
CREATE TABLE record_companies
(
    record_company_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    companyname VARCHAR(255) NOT NULL,
    UID VARCHAR(255) NOT NULL,
    ISRC CHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    CONSTRAINT record_companies_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id)
);
CREATE INDEX record_companies_social_media_id_foreign ON record_companies (social_media_id);
CREATE TABLE recording_studios
(
    studio_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    companyname VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    vintage TINYINT(1) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    CONSTRAINT recording_studios_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id)
);
CREATE INDEX recording_studios_social_media_id_foreign ON recording_studios (social_media_id);
CREATE TABLE rentings
(
    rent_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    size VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    CONSTRAINT rentings_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id)
);
CREATE INDEX rentings_social_media_id_foreign ON rentings (social_media_id);
CREATE TABLE services
(
    service_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    companyname VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    CONSTRAINT services_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id)
);
CREATE INDEX services_social_media_id_foreign ON services (social_media_id);
CREATE TABLE social_media
(
    social_media_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);
CREATE TABLE solo_artists
(
    solo_artist_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    genres_id INT(10) unsigned NOT NULL,
    musician_id INT(10) unsigned NOT NULL,
    CONSTRAINT solo_artists_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id),
    CONSTRAINT solo_artists_genres_id_foreign FOREIGN KEY (genres_id) REFERENCES genres (genres_id),
    CONSTRAINT solo_artists_musician_id_foreign FOREIGN KEY (musician_id) REFERENCES musicians (musician_id)
);
CREATE INDEX solo_artists_genres_id_foreign ON solo_artists (genres_id);
CREATE INDEX solo_artists_musician_id_foreign ON solo_artists (musician_id);
CREATE INDEX solo_artists_social_media_id_foreign ON solo_artists (social_media_id);
CREATE TABLE sound_bodies
(
    sound_body_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    genres_id INT(10) unsigned NOT NULL,
    musician_id INT(10) unsigned NOT NULL,
    CONSTRAINT sound_bodies_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id),
    CONSTRAINT sound_bodies_genres_id_foreign FOREIGN KEY (genres_id) REFERENCES genres (genres_id),
    CONSTRAINT sound_bodies_musician_id_foreign FOREIGN KEY (musician_id) REFERENCES musicians (musician_id)
);
CREATE INDEX sound_bodies_genres_id_foreign ON sound_bodies (genres_id);
CREATE INDEX sound_bodies_musician_id_foreign ON sound_bodies (musician_id);
CREATE INDEX sound_bodies_social_media_id_foreign ON sound_bodies (social_media_id);
CREATE TABLE specialist_retailers
(
    retail_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    companyname VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    sector VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    CONSTRAINT specialist_retailers_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id)
);
CREATE INDEX specialist_retailers_social_media_id_foreign ON specialist_retailers (social_media_id);
CREATE TABLE tour_managers
(
    tour_manager_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    companyname VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    social_media_id INT(10) unsigned NOT NULL,
    genres_id INT(10) unsigned NOT NULL,
    CONSTRAINT tour_managers_social_media_id_foreign FOREIGN KEY (social_media_id) REFERENCES social_media (social_media_id),
    CONSTRAINT tour_managers_genres_id_foreign FOREIGN KEY (genres_id) REFERENCES genres (genres_id)
);
CREATE INDEX tour_managers_genres_id_foreign ON tour_managers (genres_id);
CREATE INDEX tour_managers_social_media_id_foreign ON tour_managers (social_media_id);
CREATE TABLE users
(
    user_id INT(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    remember_token VARCHAR(100),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
CREATE UNIQUE INDEX users_email_unique ON users (email);