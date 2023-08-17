<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $login
 * @property string $email
 * @property int $status
 * @property string $cpf
 * @property string $password
 * @property int $matricula
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class User extends Entity
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
        'nome' => true,
        'login' => true,
        'email' => true,
        'status' => true,
        'cpf' => true,
        'password' => true,
        'matricula' => true,
        'created' => true,
        'modified' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword($password)

    {
        if (strlen($password) > 0){
           return (new DefaultPasswordHasher)->hash($password);
        } 
    }

    protected function _getStatusTexto()
    {
        switch($this->status){
            case 1:
                    return 'Ativo';
            case 2:
                    return 'Inativo';
            default:
                    return 'Não Informado';
        }

    }
}
