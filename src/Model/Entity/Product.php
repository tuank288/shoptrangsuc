<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property int|null $category_id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $image
 * @property float|null $price
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Order[] $orders
 */
class Product extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'category_id' => true,
        'name' => true,
        'description' => true,
        'image' => true,
        'price' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
        'orders' => true,
    ];
}
