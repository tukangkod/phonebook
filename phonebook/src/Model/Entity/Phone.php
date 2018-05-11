<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Phone Entity
 *
 * @property string $id
 * @property string $contact_id
 * @property string $number
 * @property string $phone_type_id
 * @property bool $is_main
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $deleted
 *
 * @property \App\Model\Entity\Contact $contact
 * @property \App\Model\Entity\PhoneType $phone_type
 */
class Phone extends Entity
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
        'contact_id' => true,
        'number' => true,
        'phone_type_id' => true,
        'is_main' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'contact' => true,
        'phone_type' => true
    ];
}
