<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Risk\Models;

use AlibabaCloud\Tea\Model;

class QueryContentriskResultRequest extends Model {
    protected $_name = [
        'appScene' => 'app_scene',
        'appSceneDataId' => 'app_scene_data_id',
        'eventId' => 'event_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->appScene) {
            $res['app_scene'] = $this->appScene;
        }
        if (null !== $this->appSceneDataId) {
            $res['app_scene_data_id'] = $this->appSceneDataId;
        }
        if (null !== $this->eventId) {
            $res['event_id'] = $this->eventId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryContentriskResultRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['app_scene'])){
            $model->appScene = $map['app_scene'];
        }
        if(isset($map['app_scene_data_id'])){
            $model->appSceneDataId = $map['app_scene_data_id'];
        }
        if(isset($map['event_id'])){
            $model->eventId = $map['event_id'];
        }
        return $model;
    }
    /**
     * @description 应用主场景，由infosec根据需求制定
     * @var string
     */
    public $appScene;

    /**
     * @description 内容风险识别中的内容业务ID，用于进行异步识别结果的索引查询 
     * @var string
     */
    public $appSceneDataId;

    /**
     * @description 内容检测事件id，根据此id查询异步检测结果
     * @var string
     */
    public $eventId;

}
