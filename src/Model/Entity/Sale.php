<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sale Entity
 *
 * @property int $id
 * @property int|null $orders_id
 * @property int|null $product_id
 * @property string|null $name
 * @property int|null $quantity
 * @property float|null $price
 * @property float|null $subtotal
 * @property \Cake\I18n\FrozenTime|null $created
 *
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\Product $product
 */
class Sale extends Entity
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
        'orders_id' => true,
        'product_id' => true,
        'name' => true,
        'quantity' => true,
        'price' => true,
        'subtotal' => true,
        'created' => true,
        'order' => true,
        'product' => true,
    ];
}
