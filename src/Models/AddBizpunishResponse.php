<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Risk\Models;

use AlibabaCloud\Tea\Model;

class AddBizpunishResponse extends Model {
    protected $_name = [
        'actionResult' => 'action_result',
        'requestId' => 'request_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->actionResult) {
            $res['action_result'] = $this->actionResult;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddBizpunishResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['action_result'])){
            $model->actionResult = $map['action_result'];
        }
        if(isset($map['request_id'])){
            $model->requestId = $map['request_id'];
        }
        return $model;
    }
    /**
     * @description 动作执行结果
     * @example true, false
     * @var bool
     */
    public $actionResult;

    /**
     * @description 对应的请求Id
     * @example e1f7908a9dbd39c751e63492f725d229
     * @var string
     */
    public $requestId;

}
