<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Risk\Models;

use AlibabaCloud\Tea\Model;

class QueryRiskSwitchRequest extends Model {
    protected $_name = [
        'bizOp' => 'biz_op',
        'bizTag' => 'biz_tag',
        'group' => 'group',
        'secRequestUrl' => 'sec_request_url',
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
        if (null !== $this->group) {
            $res['group'] = $this->group;
        }
        if (null !== $this->secRequestUrl) {
            $res['sec_request_url'] = $this->secRequestUrl;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryRiskSwitchRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_op'])){
            $model->bizOp = $map['biz_op'];
        }
        if(isset($map['biz_tag'])){
            $model->bizTag = $map['biz_tag'];
        }
        if(isset($map['group'])){
            $model->group = $map['group'];
        }
        if(isset($map['sec_request_url'])){
            $model->secRequestUrl = $map['sec_request_url'];
        }
        return $model;
    }
    /**
     * @description 业务动作，值将根据实际事件场景与金融云安全同学进行沟通确认相关的值
     * @var string
     */
    public $bizOp;

    /**
     * @description 风险场景标识，将根据实际事件场景与金融云安全同学进行沟通确认相关的值
     * @var string
     */
    public $bizTag;

    /**
     * @description 开关分组，对应应用名称，将根据实际事件场景与金融云安全同学进行沟通确认相关的值，一般情况下，group是自身应用的antx中的app_name
     * @var string
     */
    public $group;

    /**
     * @description 业务请求URL，如：/webapi/usercenter/operators/0000170801/froze
     * @var string
     */
    public $secRequestUrl;

}
