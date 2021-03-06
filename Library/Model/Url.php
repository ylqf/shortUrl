<?php
/**
 * Short URL
 * Author: Sendya <18x@loacg.com>
 * Time: 2015/10/22 14:35
 */

namespace Model;


use Core\Database;
use Core\Model;

/**
 * Class Url
 * @Table url_list
 * @package Model
 */
class Url extends Model
{
    public $id;
    public $alias;
    public $url;
    public $status;
    public $add_time;
    public $click_num;

    public static function compressURL()
    {

    }

    public static function findUrl($url)
    {
        $stm = Database::sql('SELECT `id`, `alias`, `url`, `status`, `add_time`, `click_num` FROM `url_list` WHERE `alias`=?');
        $stm->bindValue(1, $url, Database::PARAM_STR);
        $stm->execute();
        return $stm->fetchObject(__CLASS__);
    }

    public static function queryUrl($url)
    {
        $stm = Database::sql('SELECT `id`, `alias`, `url`, `status`, `add_time`, `click_num` FROM `url_list` WHERE `url`=?');
        $stm->bindValue(1, $url, Database::PARAM_STR);
        $stm->execute();
        return $stm->fetchObject(__CLASS__);
    }
}