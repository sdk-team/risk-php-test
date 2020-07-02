<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Risk\Models;

use AlibabaCloud\Tea\Model;

class QueryContentriskResultResponse extends Model {
    protected $_name = [
        'reason' => 'reason',
        'resultAction' => 'result_action',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
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
     * @return QueryContentriskResultResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['reason'])){
            $model->reason = $map['reason'];
        }
        if(isset($map['result_action'])){
            $model->resultAction = $map['result_action'];
        }
        return $model;
    }
    /**
     * @description 命中结果详情，执行对应action的具体原因 
     * @var string
     */
    public $reason;

    /**
     * @description PASSED：通过 REJECTED：拒绝 CC：发表数据后，自己可见，其它人不可见 DELETE：删除已发表数据 REPLACE：替换部分词为 *** WARNING：内容存在可疑，提示用户操作RECOVER：恢复误判内容
     * @var string
     */
    public $resultAction;

}
