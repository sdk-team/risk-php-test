<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Risk\Models;

use AlibabaCloud\Tea\Model;

class AddBizpunishRequest extends Model {
    protected $_name = [
        'actionCode' => 'action_code',
        'actionType' => 'action_type',
        'extParams' => 'ext_params',
        'instanceId' => 'instance_id',
        'objectType' => 'object_type',
        'prodCode' => 'prod_code',
        'reason' => 'reason',
        'requestId' => 'request_id',
        'riskLevel' => 'risk_level',
        'srcRequestId' => 'src_request_id',
        'tenantId' => 'tenant_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->actionCode) {
            $res['action_code'] = $this->actionCode;
        }
        if (null !== $this->actionType) {
            $res['action_type'] = $this->actionType;
        }
        if (null !== $this->extParams) {
            $res['ext_params'] = $this->extParams;
        }
        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }
        if (null !== $this->objectType) {
            $res['object_type'] = $this->objectType;
        }
        if (null !== $this->prodCode) {
            $res['prod_code'] = $this->prodCode;
        }
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->riskLevel) {
            $res['risk_level'] = $this->riskLevel;
        }
        if (null !== $this->srcRequestId) {
            $res['src_request_id'] = $this->srcRequestId;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddBizpunishRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['action_code'])){
            $model->actionCode = $map['action_code'];
        }
        if(isset($map['action_type'])){
            $model->actionType = $map['action_type'];
        }
        if(isset($map['ext_params'])){
            $model->extParams = $map['ext_params'];
        }
        if(isset($map['instance_id'])){
            $model->instanceId = $map['instance_id'];
        }
        if(isset($map['object_type'])){
            $model->objectType = $map['object_type'];
        }
        if(isset($map['prod_code'])){
            $model->prodCode = $map['prod_code'];
        }
        if(isset($map['reason'])){
            $model->reason = $map['reason'];
        }
        if(isset($map['request_id'])){
            $model->requestId = $map['request_id'];
        }
        if(isset($map['risk_level'])){
            $model->riskLevel = $map['risk_level'];
        }
        if(isset($map['src_request_id'])){
            $model->srcRequestId = $map['src_request_id'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        return $model;
    }
    /**
     * @description 动作编码
     * @example LIMIT_ORDER
     * @var string
     */
    public $actionCode;

    /**
     * @description 操作类型
     * @example PUNISH
     * @var string
     */
    public $actionType;

    /**
     * @description 扩展信息，json格式
     * @example {sevice:www.test.alipay.com}
     * @var string
     */
    public $extParams;

    /**
     * @description 实例ID，如果是实例处罚则必须
     * @example 123123
     * @var string
     */
    public $instanceId;

    /**
     * @description 处罚对象类型
     * @example PROD
     * @var string
     */
    public $objectType;

    /**
     * @description  产品名，如果是产品的处罚或者实例的处罚，则必须
     * @example ECS
     * @var string
     */
    public $prodCode;

    /**
     * @description 处罚原因
     * @example [UCT]CTU策略稽核
     * @var string
     */
    public $reason;

    /**
     * @description 请求ID（对应处罚ID）
     * @example 89c374889912dbb35cbe5817409afbb1
     * @var string
     */
    public $requestId;

    /**
     * @description 风险等级，针对不同级别的处罚进行优先处理，数字越高，等级越高
     * @example 1
     * @var string
     */
    public $riskLevel;

    /**
     * @description 关联处罚ID，当是解处罚时，该参数必须
     * @example 61bda5262a38eb6453da363c8175b16f
     * @var string
     */
    public $srcRequestId;

    /**
     * @description 操作主对象（租户Id）
     * @example 2088201881714570
     * @var string
     */
    public $tenantId;

}
