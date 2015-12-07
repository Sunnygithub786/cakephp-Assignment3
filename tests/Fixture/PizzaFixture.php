<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PizzaFixture
 *
 */
class PizzaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'pizza';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'PizzaSize' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'CrustType' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Toppings' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Quantity' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Address' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'City' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Province' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'PostalCode' => ['type' => 'string', 'length' => 7, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Contact' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'PizzaSize' => 'Lorem ipsum dolor sit amet',
            'CrustType' => 'Lorem ipsum dolor sit amet',
            'Toppings' => 'Lorem ipsum dolor sit amet',
            'Quantity' => 'Lorem ipsum dolor sit amet',
            'Address' => 'Lorem ipsum dolor sit amet',
            'City' => 'Lorem ipsum dolor sit amet',
            'Province' => 'Lorem ipsum dolor sit amet',
            'PostalCode' => 'Lorem',
            'Contact' => 'Lorem ipsum dolor '
        ],
    ];
}
