<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Onsen Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $map
 * @property int|null $picint
 * @property string|null $prefecture
 * @property int|null $prefectureint
 * @property string|null $adress
 * @property string|null $eat
 * @property string|null $sauna
 * @property string|null $towel
 * @property string|null $towel_text
 * @property string|null $hot_stone
 * @property string|null $open_bath
 * @property \Cake\I18n\FrozenTime|null $time_opne
 * @property \Cake\I18n\FrozenTime|null $time_close
 * @property \Cake\I18n\FrozenTime|null $w_time_opne
 * @property \Cake\I18n\FrozenTime|null $w_time_close
 * @property \Cake\I18n\FrozenTime|null $h_time_opne
 * @property \Cake\I18n\FrozenTime|null $h_time_close
 * @property string|null $w_a_fee
 * @property string|null $w_c_fee
 * @property string|null $h_a_fee
 * @property string|null $h_c_fee
 * @property string|null $close_text
 * @property string|null $close
 * @property string|null $jaf_url
 * @property string|null $nifty_url
 * @property string|null $onsen_url
 * @property string|null $blog_url
 */
class Onsen extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'map' => true,
        'picint' => true,
        'prefecture' => true,
        'prefectureint' => true,
        'adress' => true,
        'eat' => true,
        'sauna' => true,
        'towel' => true,
        'towel_text' => true,
        'hot_stone' => true,
        'open_bath' => true,
        'time_opne' => true,
        'time_close' => true,
        'w_time_opne' => true,
        'w_time_close' => true,
        'h_time_opne' => true,
        'h_time_close' => true,
        'w_a_fee' => true,
        'w_c_fee' => true,
        'h_a_fee' => true,
        'h_c_fee' => true,
        'close_text' => true,
        'close' => true,
        'jaf_url' => true,
        'nifty_url' => true,
        'onsen_url' => true,
        'blog_url' => true
    ];
}
