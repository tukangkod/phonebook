<?php

namespace App\Model\Entity;

use Cake\Collection\Collection;
use Cake\ORM\Entity;
use stdClass;

/**
 * Contact Entity
 *
 * @property string $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $address
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $deleted
 *
 * @property \App\Model\Entity\Phone[] $phones
 */
class Contact extends Entity
{
    const MAIN = 1;
    const OTHER = 0;
    const TYPE_OTHER = "other";

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
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'address' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'phones' => true
    ];

    /**
     * location
     * @return string of location
     */
    protected function _getLocation()
    {
        return $this->_properties['address'];
    }

    /**
     * main phone number
     *
     * @return string
     */
    protected function _getMainPhone()
    {
        if (count($this->_properties['phones']) > 0) {
            $phones = (new Collection($this->_properties['phones']))->firstMatch(['is_main' => 1]);

            return $phones['number'] ?? "";
        }
    }

    /**
     * get phone full by main type
     *
     * @param int $type
     * @return string
     */
    private function getPhoneFull($type = self::OTHER)
    {
        $data = [];

        if (count($this->_properties['phones']) > 0) {
            $phones = (new Collection($this->_properties['phones']))->match(['is_main' => $type]);

            foreach ($phones as $phone) {
                $other = new stdClass();
                $other->phone = $phone['number'];
                $other->type = $phone['phone_type']['name'] ?? self::TYPE_OTHER;

                $data[] = json_encode($other);
            }
        }

        return json_encode($data);
    }

    /**
     * virtual properties get main phone
     *
     * @return string
     */
    protected function _getMainPhoneFull()
    {
        return $this->getPhoneFull(self::MAIN);
    }

    /**
     * virtual properties get other phone full
     *
     * @return string
     */
    protected function _getOtherPhoneFull()
    {
        return $this->getPhoneFull(self::OTHER);
    }

    /**
     * get full name
     *
     * @return string
     */
    protected function _getFullName()
    {
        return $this->_properties['first_name'] . " " . $this->_properties['last_name'];
    }
}
