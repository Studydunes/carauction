<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bid Entity
 *
 * @property int $id
 * @property int|null $amount
 * @property int|null $car_id
 * @property int|null $buyer_id
 *
 * @property \App\Model\Entity\Car $car
 * @property \App\Model\Entity\Buyer $buyer
 */
class Bid extends Entity
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
        'amount' => true,
        'car_id' => true,
        
        'buyer_id' => true,
        'car' => true,
        'buyer' => true
    ];
}
