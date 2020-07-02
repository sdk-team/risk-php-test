<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Risk\Models;

use AlibabaCloud\Tea\Model;

class QueryRiskResponse extends Model {
    protected $_name = [
        'securityId' => 'security_id',
        'secResult' => 'sec_result',
        'templateCode' => 'template_code',
        'templateDesc' => 'template_desc',
        'verifyId' => 'verify_id',
        'verifyUrl' => 'verify_url',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->securityId) {
            $res['security_id'] = $this->securityId;
        }
        if (null !== $this->secResult) {
            $res['sec_result'] = $this->secResult;
        }
        if (null !== $this->templateCode) {
            $res['template_code'] = $this->templateCode;
        }
        if (null !== $this->templateDesc) {
            $res['template_desc'] = $this->templateDesc;
        }
        if (null !== $this->verifyId) {
            $res['verify_id'] = $this->verifyId;
        }
        if (null !== $this->verifyUrl) {
            $res['verify_url'] = $this->verifyUrl;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryRiskResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['security_id'])){
            $model->securityId = $map['security_id'];
        }
        if(isset($map['sec_result'])){
            $model->secResult = $map['sec_result'];
        }
        if(isset($map['template_code'])){
            $model->templateCode = $map['template_code'];
        }
        if(isset($map['template_desc'])){
            $model->templateDesc = $map['template_desc'];
        }
        if(isset($map['verify_id'])){
            $model->verifyId = $map['verify_id'];
        }
        if(isset($map['verify_url'])){
            $model->verifyUrl = $map['verify_url'];
        }
        return $model;
    }
    /**
     * @description 风险处理ID，如：antcloudpaas201807010004383024
     * @var string
     */
    public $securityId;

    /**
     * @description 风险处理结果，SEC_NONE：无安全风险
SEC_CHECK：需要进行安全检查
SEC_FAIL：存在严重安全风险，不允许进行后续业务

     * @var string
     */
    public $secResult;

    /**
     * @description 风险运营返回的code，只有在失败时才会返回
     * @var string
     */
    public $templateCode;

    /**
     * @description 风险运营返回的描述信息，只有在失败时才会返回
     * @var string
     */
    public $templateDesc;

    /**
     * @description 风险核身对应的ID，native使用
     * @var string
     */
    public $verifyId;

    /**
     * @description 风险核身的URL地址，如：https://securitycore.alipay.com/validate.htm?securityId=antcloudpaas201807010004383024
     * @var string
     */
    public $verifyUrl;

}
