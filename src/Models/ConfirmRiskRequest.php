<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Risk\Models;

use AlibabaCloud\Tea\Model;

use AntChain\Risk\Models\ExtraParamInfo;

class ConfirmRiskRequest extends Model {
    protected $_name = [
        'bizOp' => 'biz_op',
        'bizTag' => 'biz_tag',
        'extParams' => 'ext_params',
        'operatorId' => 'operator_id',
        'securityId' => 'security_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->bizOp) {
            $res['biz_op'] = $this->bizOp;
        }
        if (null !== $this->bizTag) {
            $res['biz_tag'] = $this->bizTag;
        }
        if (null !== $this->extParams) {
            $res['ext_params'] = [];
            if(null !== $this->extParams && is_array($this->extParams)){
                $n = 0;
                foreach($this->extParams as $item){
                    $res['ext_params'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->operatorId) {
            $res['operator_id'] = $this->operatorId;
        }
        if (null !== $this->securityId) {
            $res['security_id'] = $this->securityId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ConfirmRiskRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_op'])){
            $model->bizOp = $map['biz_op'];
        }
        if(isset($map['biz_tag'])){
            $model->bizTag = $map['biz_tag'];
        }
        if(isset($map['ext_params'])){
            if(!empty($map['ext_params'])){
                $model->extParams = [];
                $n = 0;
                foreach($map['ext_params'] as $item) {
                    $model->extParams[$n++] = null !== $item ? ExtraParamInfo::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['operator_id'])){
            $model->operatorId = $map['operator_id'];
        }
        if(isset($map['security_id'])){
            $model->securityId = $map['security_id'];
        }
        return $model;
    }
    /**
     * @description 业务动作，对应上面风险查询中的biz_op，如：POST
     * @var string
     */
    public $bizOp;

    /**
     * @description 风险场景标识，对应上面风险查询中的biz_tag，如：LOGIN
     * @var string
     */
    public $bizTag;

    /**
     * @description 风险场景扩展参数，该部分内容根据场景需要进行扩展，场景对接时进行确认
     * @var array
     */
    public $extParams;

    /**
     * @description 操作员ID，如：0000170801
     * @var string
     */
    public $operatorId;

    /**
     * @description 风险处理ID，必须，如：antcloudpaas201807010004383024
     * @var string
     */
    public $securityId;

}
