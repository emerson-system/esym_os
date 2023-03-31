<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'nome' => 'Lorem ipsum dolor sit amet',
                'login' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'cpf' => 'Lorem ipsum d',
                'password' => 'Lorem ipsum dolor sit amet',
                'matricula' => 1,
                'created' => '2023-03-30 23:48:18',
                'modified' => '2023-03-30 23:48:18',
            ],
        ];
        parent::init();
    }
}
