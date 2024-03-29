<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Car Entity
 *
 * @property int $id
 * @property string $name
 * @property string $color
 * @property string $description
 * @property int $mileage
 * @property int $user_id
 *
 * @property \App\Model\Entity\User $user
 */
class Car extends Entity
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
        'color' => true,
        'description' => true,
        'mileage' => true,
        'user_id' => true,
        'user' => true
    ];
}
