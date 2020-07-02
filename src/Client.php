<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Risk;

use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Exception\TeaError;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Response;
use AntChain\Alipay\Util\Util;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Exception\TeaUnableRetryError;

use AntChain\Risk\Models\Config;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AntChain\Risk\Models\AddBizpunishRequest;
use AntChain\Risk\Models\AddBizpunishResponse;
use AntChain\Risk\Models\ConfirmRiskRequest;
use AntChain\Risk\Models\ConfirmRiskResponse;
use AntChain\Risk\Models\QueryRiskSwitchRequest;
use AntChain\Risk\Models\QueryRiskSwitchResponse;
use AntChain\Risk\Models\QueryRiskRequest;
use AntChain\Risk\Models\QueryRiskResponse;
use AntChain\Risk\Models\AnalyzeContentriskRequest;
use AntChain\Risk\Models\AnalyzeContentriskResponse;
use AntChain\Risk\Models\NotifyRiskRequest;
use AntChain\Risk\Models\NotifyRiskResponse;
use AntChain\Risk\Models\QueryContentriskResultRequest;
use AntChain\Risk\Models\QueryContentriskResultResponse;

class Client {
    protected $_endpoint;

    protected $_regionId;

    protected $_accessKeyId;

    protected $_accessKeySecret;

    protected $_protocol;

    protected $_userAgent;

    protected $_readTimeout;

    protected $_connectTimeout;

    protected $_httpProxy;

    protected $_httpsProxy;

    protected $_socks5Proxy;

    protected $_socks5NetWork;

    protected $_noProxy;

    protected $_maxIdleConns;

    protected $_authToken;

    protected $_tenant;

    protected $_workspace;

    /**
     * Init client with Config
     * @param config config contains the necessary information to create a client
     */
    public function __construct(Config $config){
        if (Utils::isUnset($config)) {
            throw new TeaError([
                "code" => "ParameterMissing",
                "message" => "'config' can not be unset"
                ]);
        }
        $this->_accessKeyId = $config->accessKeyId;
        $this->_accessKeySecret = $config->accessKeySecret;
        $this->_tenant = $config->tenant;
        $this->_workspace = $config->workspace;
        $this->_endpoint = $config->endpoint;
        $this->_authToken = $config->authToken;
        $this->_protocol = $config->protocol;
        $this->_regionId = $config->regionId;
        $this->_userAgent = $config->userAgent;
        $this->_readTimeout = $config->readTimeout;
        $this->_connectTimeout = $config->connectTimeout;
        $this->_httpProxy = $config->httpProxy;
        $this->_httpsProxy = $config->httpsProxy;
        $this->_noProxy = $config->noProxy;
        $this->_socks5Proxy = $config->socks5Proxy;
        $this->_socks5NetWork = $config->socks5NetWork;
        $this->_maxIdleConns = $config->maxIdleConns;
    }

    /**
     * Encapsulate the request and invoke the network
     * @param string $action api name
     * @param string $protocol http or https
     * @param string $method e.g. GET
     * @param string $pathname pathname of every api
     * @param object $request which contains request params
     * @param RuntimeOptions $runtime which controls some details of call api, such as retry times
     * @return object|array response
     * @throws \Exception
     */
    public function doRequest($action, $protocol, $method, $pathname, $request, RuntimeOptions $runtime){
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            "connectTimeout" => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            "httpProxy" => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            "httpsProxy" => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            "noProxy" => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            "maxIdleConns" => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
                ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
                ],
            "ignoreSSL" => $runtime->ignoreSSL
            ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry($_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $_request->protocol = Utils::defaultString($this->_protocol, $protocol);
                $_request->method = $method;
                $_request->pathname = $pathname;
                $_request->query = [
                    "method" => $action,
                    "version" => "1.0",
                    "sign_type" => "HmacSHA1",
                    "req_time" => Util::getTimestamp(),
                    "req_msg_id" => Utils::getNonce()
                    ];
                if (!Utils::empty_($this->_tenant)) {
                    $_request->query["tenant"] = $this->_tenant;
                }
                if (!Utils::empty_($this->_workspace)) {
                    $_request->query["workspace"] = $this->_workspace;
                }
                if (!Utils::empty_($this->_authToken)) {
                    $_request->query["auth_token"] = $this->_authToken;
                }
                else {
                    $_request->query["access_key"] = $this->_accessKeyId;
                }
                $_request->headers = [
                    "host" => $this->_endpoint,
                    "user-agent" => $this->getUserAgent()
                    ];
                $tmp = Utils::anyifyMapValue(RpcUtils::query($request));
                $_request->body = Utils::toFormString($tmp);
                $_request->headers["content-type"] = "application/x-www-form-urlencoded";
                $signedParam = Tea::merge($_request->query,
                    RpcUtils::query($request));
                $_request->query["sign"] = Util::getSignature($signedParam, $this->_accessKeySecret);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $obj = Utils::readAsJSON($_response->body);
                $res = Utils::assertAsMap($obj);
                $resp = Utils::assertAsMap($res["response"]);
                if (Util::hasError($res)) {
                    throw new TeaError([
                        "message" => $resp["result_msg"],
                        "data" => $resp,
                        "code" => $resp["result_code"]
                        ]);
                }
                return $resp;
            }
            catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * Get user agent
     * @return string agent
     * @throws \Exception
     */
    public function getUserAgent(){
        $userAgent = Utils::getUserAgent($this->_userAgent);
        return $userAgent;
    }

    /**
     * Description: 风控新增业务处罚API，用于新增业务处罚信息
     * Summary: 风控新增业务处罚API
     * @param AddBizpunishRequest $request
     * @return AddBizpunishResponse
     * @throws \Exception
     */
    public function addBizpunish(AddBizpunishRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addBizpunishEx($request, $runtime);
    }

    /**
     * Description: 风控新增业务处罚API，用于新增业务处罚信息
     * Summary: 风控新增业务处罚API
     * @param AddBizpunishRequest $request
     * @param RuntimeOptions $runtime
     * @return AddBizpunishResponse
     * @throws \Exception
     */
    public function addBizpunishEx(AddBizpunishRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddBizpunishResponse::fromMap($this->doRequest("antcloud.riskcontrol.bizpunish.add", "HTTPS", "POST", "/gateway.do", $request, $runtime));
    }

    /**
     * Description: 风险结果确认（后端进行doublecheck），用于业务执行前，业务方发起风险确认，判定对应的操作是否确实安全
     * Summary: 风险结果确认
     * @param ConfirmRiskRequest $request
     * @return ConfirmRiskResponse
     * @throws \Exception
     */
    public function confirmRisk(ConfirmRiskRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->confirmRiskEx($request, $runtime);
    }

    /**
     * Description: 风险结果确认（后端进行doublecheck），用于业务执行前，业务方发起风险确认，判定对应的操作是否确实安全
     * Summary: 风险结果确认
     * @param ConfirmRiskRequest $request
     * @param RuntimeOptions $runtime
     * @return ConfirmRiskResponse
     * @throws \Exception
     */
    public function confirmRiskEx(ConfirmRiskRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ConfirmRiskResponse::fromMap($this->doRequest("antcloud.riskcontrol.risk.confirm", "HTTPS", "POST", "/gateway.do", $request, $runtime));
    }

    /**
     * Description: 查询风险事件的开关信息
     * Summary: 查询风险事件的开关信息
     * @param QueryRiskSwitchRequest $request
     * @return QueryRiskSwitchResponse
     * @throws \Exception
     */
    public function queryRiskSwitch(QueryRiskSwitchRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryRiskSwitchEx($request, $runtime);
    }

    /**
     * Description: 查询风险事件的开关信息
     * Summary: 查询风险事件的开关信息
     * @param QueryRiskSwitchRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryRiskSwitchResponse
     * @throws \Exception
     */
    public function queryRiskSwitchEx(QueryRiskSwitchRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryRiskSwitchResponse::fromMap($this->doRequest("antcloud.riskcontrol.risk.switch.query", "HTTPS", "POST", "/gateway.do", $request, $runtime));
    }

    /**
     * Description: 风险事件查询API，用于查询当前业务是否存在风险
     * Summary: 风险事件查询API
     * @param QueryRiskRequest $request
     * @return QueryRiskResponse
     * @throws \Exception
     */
    public function queryRisk(QueryRiskRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryRiskEx($request, $runtime);
    }

    /**
     * Description: 风险事件查询API，用于查询当前业务是否存在风险
     * Summary: 风险事件查询API
     * @param QueryRiskRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryRiskResponse
     * @throws \Exception
     */
    public function queryRiskEx(QueryRiskRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryRiskResponse::fromMap($this->doRequest("antcloud.riskcontrol.risk.query", "HTTPS", "POST", "/gateway.do", $request, $runtime));
    }

    /**
     * Description: 内容风险分析API，用于分析当前内容是否存在风险
     * Summary: 内容风险分析API
     * @param AnalyzeContentriskRequest $request
     * @return AnalyzeContentriskResponse
     * @throws \Exception
     */
    public function analyzeContentrisk(AnalyzeContentriskRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->analyzeContentriskEx($request, $runtime);
    }

    /**
     * Description: 内容风险分析API，用于分析当前内容是否存在风险
     * Summary: 内容风险分析API
     * @param AnalyzeContentriskRequest $request
     * @param RuntimeOptions $runtime
     * @return AnalyzeContentriskResponse
     * @throws \Exception
     */
    public function analyzeContentriskEx(AnalyzeContentriskRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AnalyzeContentriskResponse::fromMap($this->doRequest("antcloud.riskcontrol.contentrisk.analyze", "HTTPS", "POST", "/gateway.do", $request, $runtime));
    }

    /**
     * Description: 业务处理完成后，将结果通知给风险
     * Summary: 业务结果通知
     * @param NotifyRiskRequest $request
     * @return NotifyRiskResponse
     * @throws \Exception
     */
    public function notifyRisk(NotifyRiskRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->notifyRiskEx($request, $runtime);
    }

    /**
     * Description: 业务处理完成后，将结果通知给风险
     * Summary: 业务结果通知
     * @param NotifyRiskRequest $request
     * @param RuntimeOptions $runtime
     * @return NotifyRiskResponse
     * @throws \Exception
     */
    public function notifyRiskEx(NotifyRiskRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return NotifyRiskResponse::fromMap($this->doRequest("antcloud.riskcontrol.risk.notify", "HTTPS", "POST", "/gateway.do", $request, $runtime));
    }

    /**
     * Description: 内容风险分析结果查询API，用于风险分析结果的异步查询
     * Summary: 内容风险分析结果查询API
     * @param QueryContentriskResultRequest $request
     * @return QueryContentriskResultResponse
     * @throws \Exception
     */
    public function queryContentriskResult(QueryContentriskResultRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryContentriskResultEx($request, $runtime);
    }

    /**
     * Description: 内容风险分析结果查询API，用于风险分析结果的异步查询
     * Summary: 内容风险分析结果查询API
     * @param QueryContentriskResultRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryContentriskResultResponse
     * @throws \Exception
     */
    public function queryContentriskResultEx(QueryContentriskResultRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryContentriskResultResponse::fromMap($this->doRequest("antcloud.riskcontrol.contentrisk.result.query", "HTTPS", "POST", "/gateway.do", $request, $runtime));
    }
}
