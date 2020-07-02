<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Risk\Models;

use AlibabaCloud\Tea\Model;

class AnalyzeContentriskResponse extends Model {
    protected $_name = [
        'appSceneDataId' => 'app_scene_data_id',
        'eventId' => 'event_id',
        'needQuery' => 'need_query',
        'reason' => 'reason',
        'resultAction' => 'result_action',
    ];
    public function validate() {
        Model::validateMaxLength('appSceneDataId', $this->appSceneDataId, 0);
        Model::validateMaxLength('eventId', $this->eventId, 0);
        Model::validateMaxLength('needQuery', $this->needQuery, 0);
        Model::validateMaxLength('reason', $this->reason, 0);
        Model::validateMaxLength('resultAction', $this->resultAction, 0);
        Model::validateMaximum('appSceneDataId', $this->appSceneDataId, 0);
        Model::validateMaximum('eventId', $this->eventId, 0);
        Model::validateMaximum('needQuery', $this->needQuery, 0);
        Model::validateMaximum('reason', $this->reason, 0);
        Model::validateMaximum('resultAction', $this->resultAction, 0);
        Model::validateMinLength('appSceneDataId', $this->appSceneDataId, 0);
        Model::validateMinLength('eventId', $this->eventId, 0);
        Model::validateMinLength('needQuery', $this->needQuery, 0);
        Model::validateMinLength('reason', $this->reason, 0);
        Model::validateMinLength('resultAction', $this->resultAction, 0);
        Model::validateMinimum('appSceneDataId', $this->appSceneDataId, 0);
        Model::validateMinimum('eventId', $this->eventId, 0);
        Model::validateMinimum('needQuery', $this->needQuery, 0);
        Model::validateMinimum('reason', $this->reason, 0);
        Model::validateMinimum('resultAction', $this->resultAction, 0);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->appSceneDataId) {
            $res['app_scene_data_id'] = $this->appSceneDataId;
        }
        if (null !== $this->eventId) {
            $res['event_id'] = $this->eventId;
        }
        if (null !== $this->needQuery) {
            $res['need_query'] = $this->needQuery;
        }
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }
        if (null !== $this->resultAction) {
            $res['result_action'] = $this->resultAction;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AnalyzeContentriskResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['app_scene_data_id'])){
            $model->appSceneDataId = $map['app_scene_data_id'];
        }
        if(isset($map['event_id'])){
            $model->eventId = $map['event_id'];
        }
        if(isset($map['need_query'])){
            $model->needQuery = $map['need_query'];
        }
        if(isset($map['reason'])){
            $model->reason = $map['reason'];
        }
        if(isset($map['result_action'])){
            $model->resultAction = $map['result_action'];
        }
        return $model;
    }
    /**
     * @description 内容ID，用于查询异步识别结果时作为查询ID
     * @example 
     * @var string
     */
    public $appSceneDataId;

    /**
     * @description 内容安全同步检测返回的事件id，用于异步获取检测结果 
     * @example 
     * @var string
     */
    public $eventId;

    /**
     * @description 是否需要进行异步查询的标志位 
need: 需要等待60秒之后进行异步查询 
no_need: 不需要，已经同步返回结果
     * @example 
     * @var string
     */
    public $needQuery;

    /**
     * @description 命中结果详情，执行对应action的具体原因
     * @example 
     * @var string
     */
    public $reason;

    /**
     * @description PASSED：通过
REJECTED：拒绝
CC：发表数据后，自己可见，其它人不可见
DELETE：删除已发表数据
REPLACE：替换部分词为 ***
WARNING：内容存在可疑，提示用户操作RECOVER：恢复误判内容
     * @example 
     * @var string
     */
    public $resultAction;

}
