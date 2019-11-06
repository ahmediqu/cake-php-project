<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AccLedger Entity
 *
 * @property int $id
 * @property int $college_id
 * @property string $item_expend
 * @property int $economic_code
 * @property float $appoved_budget
 * @property float $amount_receive
 * @property \Cake\I18n\FrozenDate $voucher_date
 * @property string $voucher
 * @property string $particular
 * @property int $folio_no
 * @property float $debit
 * @property float $credit
 * @property int $balance
 * @property string $remark
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $insert_time
 * @property string $last_action
 * @property int $is_active
 *
 * @property \App\Model\Entity\College $college
 * @property \App\Model\Entity\User $user
 */
class AccLedger extends Entity
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
        'college_id' => true,
        'item_expend' => true,
        'economic_code' => true,
        'appoved_budget' => true,
        'amount_receive' => true,
        'voucher_date' => true,
        'voucher' => true,
        'particular' => true,
        'folio_no' => true,
        'debit' => true,
        'credit' => true,
        'balance' => true,
        'remark' => true,
        'user_id' => true,
        'insert_time' => true,
        'last_action' => true,
        'is_active' => true,
        'college' => true,
        'user' => true
    ];
}
