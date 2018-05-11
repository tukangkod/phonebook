<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SocialAccount Entity
 *
 * @property string $id
 * @property string $user_id
 * @property string $provider
 * @property string $username
 * @property string $reference
 * @property string $avatar
 * @property string $description
 * @property string $link
 * @property string $token
 * @property string $token_secret
 * @property \Cake\I18n\FrozenTime $token_expires
 * @property bool $active
 * @property string $data
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \CakeDC\Users\Model\Entity\User $user
 */
class SocialAccount extends Entity
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
        'user_id' => true,
        'provider' => true,
        'username' => true,
        'reference' => true,
        'avatar' => true,
        'description' => true,
        'link' => true,
        'token' => true,
        'token_secret' => true,
        'token_expires' => true,
        'active' => true,
        'data' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'token'
    ];
}
