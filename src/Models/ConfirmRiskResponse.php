<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Risk\Models;

use AlibabaCloud\Tea\Model;

class ConfirmRiskResponse extends Model {
    protected $_name = [
        'confirmSuccess' => 'confirm_success',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->confirmSuccess) {
            $res['confirm_success'] = $this->confirmSuccess;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ConfirmRiskResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['confirm_success'])){
            $model->confirmSuccess = $map['confirm_success'];
        }
        return $model;
    }
    /**
     * @description 风险确认结果，true：通过，false：不通过。业务处理时根据该结果来看是否应该进行后续的业务，为false不进行后续业务
     * @var bool
     */
    public $confirmSuccess;

}
