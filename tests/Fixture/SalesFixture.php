<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SalesFixture
 */
class SalesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'orders_id' => 1,
                'product_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'quantity' => 1,
                'price' => 1,
                'subtotal' => 1,
                'created' => '2022-06-01 04:13:02',
            ],
        ];
        parent::init();
    }
}
