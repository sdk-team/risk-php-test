<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Risk\Models;

use AlibabaCloud\Tea\Model;

use AntChain\Risk\Models\ExtraParamInfo;

class QueryRiskRequest extends Model {
    protected $_name = [
        'bizOp' => 'biz_op',
        'bizTag' => 'biz_tag',
        'callbackUrl' => 'callback_url',
        'clientIp' => 'client_ip',
        'extParams' => 'ext_params',
        'loginName' => 'login_name',
        'operatorId' => 'operator_id',
        'serverName' => 'server_name',
        'tenant' => 'tenant',
        'tokenId' => 'token_id',
        'umid' => 'umid',
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
        if (null !== $this->callbackUrl) {
            $res['callback_url'] = $this->callbackUrl;
        }
        if (null !== $this->clientIp) {
            $res['client_ip'] = $this->clientIp;
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
        if (null !== $this->loginName) {
            $res['login_name'] = $this->loginName;
        }
        if (null !== $this->operatorId) {
            $res['operator_id'] = $this->operatorId;
        }
        if (null !== $this->serverName) {
            $res['server_name'] = $this->serverName;
        }
        if (null !== $this->tenant) {
            $res['tenant'] = $this->tenant;
        }
        if (null !== $this->tokenId) {
            $res['token_id'] = $this->tokenId;
        }
        if (null !== $this->umid) {
            $res['umid'] = $this->umid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryRiskRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_op'])){
            $model->bizOp = $map['biz_op'];
        }
        if(isset($map['biz_tag'])){
            $model->bizTag = $map['biz_tag'];
        }
        if(isset($map['callback_url'])){
            $model->callbackUrl = $map['callback_url'];
        }
        if(isset($map['client_ip'])){
            $model->clientIp = $map['client_ip'];
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
        if(isset($map['login_name'])){
            $model->loginName = $map['login_name'];
        }
        if(isset($map['operator_id'])){
            $model->operatorId = $map['operator_id'];
        }
        if(isset($map['server_name'])){
            $model->serverName = $map['server_name'];
        }
        if(isset($map['tenant'])){
            $model->tenant = $map['tenant'];
        }
        if(isset($map['token_id'])){
            $model->tokenId = $map['token_id'];
        }
        if(isset($map['umid'])){
            $model->umid = $map['umid'];
        }
        return $model;
    }
    /**
     * @description 业务动作，必须
biz_tag、biz_op的值将根据实际事件场景与金融云安全同学进行沟通确认相关的值
     * @var string
     */
    public $bizOp;

    /**
     * @description 风险场景标识，必须
biz_tag、biz_op的值将根据实际事件场景与金融云安全同学进行沟通确认相关的值

     * @var string
     */
    public $bizTag;

    /**
     * @description 风险处理成功后的回调地址，如：https://www.cloud.alipay.com，需要做urlencode
     * @var string
     */
    public $callbackUrl;

    /**
     * @description 打开浏览器来访问业务的客户端IP地址信息，必须，如：10.158.231.107
     * @var string
     */
    public $clientIp;

    /**
     * @description 风险场景扩展参数，该部分内容根据场景需要进行扩展，场景对接时进行确认
     * @var array
     */
    public $extParams;

    /**
     * @description 登录名称，如：test@alipay.net
     * @var string
     */
    public $loginName;

    /**
     * @description 操作员ID，必须，如：0000170801
     * @var string
     */
    public $operatorId;

    /**
     * @description 服务应用名称，记录请求来源于哪一个应用，可以是自己应用的antx中的app_name，如：achelmetcore
     * @var string
     */
    public $serverName;

    /**
     * @description 当前操作的租户，如：MYBKC1CN
     * @var string
     */
    public $tenant;

    /**
     * @description 采集终端指纹信息的token信息。如果没有umid，该信息必须，如b3d885f3-4d05-4c5b-a1fd-c19f390497db
     * @var string
     */
    public $tokenId;

    /**
     * @description 对应umidserver中的umid，如果没有tokenId，该信息必须，如：CV10z5aa08c364370da41034e5655ff9a
     * @var string
     */
    public $umid;

}
