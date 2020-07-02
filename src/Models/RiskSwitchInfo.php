<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Risk\Models;

use AlibabaCloud\Tea\Model;

class RiskSwitchInfo extends Model {
    protected $_name = [
        'bizOp' => 'biz_op',
        'bizTag' => 'biz_tag',
        'errorMsg' => 'error_msg',
        'group' => 'group',
        'id' => 'id',
        'secRequestUrl' => 'sec_request_url',
        'value' => 'value',
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
        if (null !== $this->errorMsg) {
            $res['error_msg'] = $this->errorMsg;
        }
        if (null !== $this->group) {
            $res['group'] = $this->group;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->secRequestUrl) {
            $res['sec_request_url'] = $this->secRequestUrl;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return RiskSwitchInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_op'])){
            $model->bizOp = $map['biz_op'];
        }
        if(isset($map['biz_tag'])){
            $model->bizTag = $map['biz_tag'];
        }
        if(isset($map['error_msg'])){
            $model->errorMsg = $map['error_msg'];
        }
        if(isset($map['group'])){
            $model->group = $map['group'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['sec_request_url'])){
            $model->secRequestUrl = $map['sec_request_url'];
        }
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        return $model;
    }
    /**
     * @example null
     * @description 业务动作，必须，如：POST
     * @var string
     */
    public $bizOp;

    /**
     * @example null
     * @description 风险场景标识，必须，如：LOGIN
     * @var string
     */
    public $bizTag;

    /**
     * @example null
     * @description 风险确认失败后返回给客户端的消息
如：{"errorMessage":"存在安全风险","result":null,"success":false}
     * @var string
     */
    public $errorMsg;

    /**
     * @example null
     * @description 场景分组，一般对应应用名，如：achelmetcore
     * @var string
     */
    public $group;

    /**
     * @example null
     * @description 开关数据逻辑主键
     * @var string
     */
    public $id;

    /**
     * @example null
     * @description 业务请求URL的模式
如：^/webapi/usercenter/operators/\w+/froze
     * @var string
     */
    public $secRequestUrl;

    /**
     * @example null
     * @description 风险场景开关，true：接入风险，false或其他任何值表示未启用
     * @var string
     */
    public $value;

}
