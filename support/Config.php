<?php

const DATA_LAYER_CONFIG = [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "sida",
    "username" => "isilva",
    "passwd" => "Icas_418918*",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
];

//define("DATA_LAYER_CONFIG", [
//    "driver" => "pgsql",
//    "host" => "localhost",
//    "port" => "5432",
//    "dbname" => "datalayer",
//    "username" => "postgres",
//    "passwd" => "",
//    "options" => [
//        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
//        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
//        PDO::ATTR_CASE => PDO::CASE_NATURAL
//    ],
//]);
/**
 * PROJECT URLs
 */
const CONF_URL_PROD = "https://sda.israelcasilva.com.br";
const CONF_URL_TEST = "../sda";
const CONF_URL_ADMIN = "/admin";

/**
 * SITE
 */
const CONF_SITE_NAME = "SDA";
const CONF_SITE_TITLE = "Gerencie a distribuição de aulas melhor";
const CONF_SITE_DESC = "O SIDA é um gerenciador de aulas simples, poderoso e gratuito. O prazer de tomar um café e ter o controle total de suas distribuição de aulas.";
const CONF_SITE_LANG = "pt_BR";
const CONF_SITE_DOMAIN = "israelcasilva.com.br";

/**
 * SOCIAL
 */
const CONF_SOCIAL_TWITTER_CREATOR = "@israelcasilva";
const CONF_SOCIAL_TWITTER_PUBLISHER = "@israelcasilva";
const CONF_SOCIAL_FACEBOOK_APP = "israelcasilva";
const CONF_SOCIAL_FACEBOOK_PAGE = "israelcasilva";
const CONF_SOCIAL_FACEBOOK_AUTHOR = "israelcasilva";
const CONF_SOCIAL_GOOGLE_PAGE = "israelcasilva";
const CONF_SOCIAL_GOOGLE_AUTHOR = "israelcasilva";
const CONF_SOCIAL_INSTAGRAM_PAGE = "israelcasilva";
const CONF_SOCIAL_YOUTUBE_PAGE = "israelcasilva";

/**
 * DATES
 */
const CONF_DATE_BR = "d/m/Y H:i:s";
const CONF_DATE_APP = "Y-m-d H:i:s";

/**
 * PASSWORD
 */
const CONF_PASSWD_MIN_LEN = 8;
const CONF_PASSWD_MAX_LEN = 40;
const CONF_PASSWD_ALGO = PASSWORD_DEFAULT;
const CONF_PASSWD_OPTION = ["cost" => 10];

/**
 * MESSAGE
 */
const CONF_MESSAGE_CLASS = "trigger";
const CONF_MESSAGE_INFO = "info";
const CONF_MESSAGE_SUCCESS = "success";
const CONF_MESSAGE_WARNING = "warning";
const CONF_MESSAGE_ERROR = "error";

/**
 * VIEW
 */
const CONF_VIEW_PATH = __DIR__ . "/../../shared/views";
const CONF_VIEW_EXT = "php";
const CONF_VIEW_THEME = "cafecontrol";

/**
 * UPLOAD
 */
const CONF_UPLOAD_DIR = "../storage";
const CONF_UPLOAD_IMAGE_DIR = "images";
const CONF_UPLOAD_FILE_DIR = "files";
const CONF_UPLOAD_MEDIA_DIR = "medias";

/**
 * IMAGES
 */
const CONF_IMAGE_CACHE = CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache";
const CONF_IMAGE_SIZE = 2000;
const CONF_IMAGE_QUALITY = ["jpg" => 75, "png" => 5];

/**
 * MAIL
 */
const CONF_MAIL_HOST = "smtp.sendgrid.net";
const CONF_MAIL_PORT = "587";
const CONF_MAIL_USER = "apikey";
const CONF_MAIL_PASS = "**************************";
const CONF_MAIL_SENDER = ["name" => "israel C A silva", "address" => "contato@israelcasilva.com.br"];
const CONF_MAIL_SUPPORT = "contato@israelcasilva.com.br";
const CONF_MAIL_OPTION_LANG = "br";
const CONF_MAIL_OPTION_HTML = true;
const CONF_MAIL_OPTION_AUTH = true;
const CONF_MAIL_OPTION_SECURE = "tls";
const CONF_MAIL_OPTION_CHARSET = "utf-8";

/**
 * @param string|null $uri
 * @return string
 */
function url(string $uri = null): string
{
    if ($uri) {
        return CONF_URL_TEST . "/{$uri}";
    }
    return CONF_URL_TEST;
}