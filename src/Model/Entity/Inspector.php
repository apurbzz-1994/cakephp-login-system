<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Inspector Entity
 *
 * @property int $id
 * @property string $name
 * @property string $phone_number
 * @property int $user_id
 * @property string|null $education
 *
 * @property \App\Model\Entity\User $user
 */
class Inspector extends Entity
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
        'phone_number' => true,
        'user_id' => true,
        'education' => true,
        'user' => true,
    ];
}
