<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Risk\Models;

use AlibabaCloud\Tea\Model;

class AnalyzeContentriskRequest extends Model {
    protected $_name = [
        'appMainScene' => 'app_main_scene',
        'appMainSceneId' => 'app_main_scene_id',
        'appName' => 'app_name',
        'appScene' => 'app_scene',
        'appSceneDataId' => 'app_scene_data_id',
        'audioUrls' => 'audio_urls',
        'linkUrls' => 'link_urls',
        'operatorId' => 'operator_id',
        'pictureUrls' => 'picture_urls',
        'publishDate' => 'publish_date',
        'tenant' => 'tenant',
        'text' => 'text',
        'videoUrls' => 'video_urls',
    ];
    public function validate() {
        Model::validateMaxLength('appMainScene', $this->appMainScene, 0);
        Model::validateMaxLength('appMainSceneId', $this->appMainSceneId, 0);
        Model::validateMaxLength('appName', $this->appName, 0);
        Model::validateMaxLength('appScene', $this->appScene, 0);
        Model::validateMaxLength('appSceneDataId', $this->appSceneDataId, 0);
        Model::validateMaxLength('audioUrls', $this->audioUrls, 0);
        Model::validateMaxLength('linkUrls', $this->linkUrls, 0);
        Model::validateMaxLength('pictureUrls', $this->pictureUrls, 0);
        Model::validateMaxLength('publishDate', $this->publishDate, 0);
        Model::validateMaxLength('text', $this->text, 0);
        Model::validateMaxLength('videoUrls', $this->videoUrls, 0);
        Model::validateMaximum('appMainScene', $this->appMainScene, 0);
        Model::validateMaximum('appMainSceneId', $this->appMainSceneId, 0);
        Model::validateMaximum('appName', $this->appName, 0);
        Model::validateMaximum('appScene', $this->appScene, 0);
        Model::validateMaximum('appSceneDataId', $this->appSceneDataId, 0);
        Model::validateMaximum('audioUrls', $this->audioUrls, 0);
        Model::validateMaximum('linkUrls', $this->linkUrls, 0);
        Model::validateMaximum('pictureUrls', $this->pictureUrls, 0);
        Model::validateMaximum('publishDate', $this->publishDate, 0);
        Model::validateMaximum('text', $this->text, 0);
        Model::validateMaximum('videoUrls', $this->videoUrls, 0);
        Model::validateMinLength('appMainScene', $this->appMainScene, 0);
        Model::validateMinLength('appMainSceneId', $this->appMainSceneId, 0);
        Model::validateMinLength('appName', $this->appName, 0);
        Model::validateMinLength('appScene', $this->appScene, 0);
        Model::validateMinLength('appSceneDataId', $this->appSceneDataId, 0);
        Model::validateMinLength('audioUrls', $this->audioUrls, 0);
        Model::validateMinLength('linkUrls', $this->linkUrls, 0);
        Model::validateMinLength('pictureUrls', $this->pictureUrls, 0);
        Model::validateMinLength('publishDate', $this->publishDate, 0);
        Model::validateMinLength('text', $this->text, 0);
        Model::validateMinLength('videoUrls', $this->videoUrls, 0);
        Model::validateMinimum('appMainScene', $this->appMainScene, 0);
        Model::validateMinimum('appMainSceneId', $this->appMainSceneId, 0);
        Model::validateMinimum('appName', $this->appName, 0);
        Model::validateMinimum('appScene', $this->appScene, 0);
        Model::validateMinimum('appSceneDataId', $this->appSceneDataId, 0);
        Model::validateMinimum('audioUrls', $this->audioUrls, 0);
        Model::validateMinimum('linkUrls', $this->linkUrls, 0);
        Model::validateMinimum('pictureUrls', $this->pictureUrls, 0);
        Model::validateMinimum('publishDate', $this->publishDate, 0);
        Model::validateMinimum('text', $this->text, 0);
        Model::validateMinimum('videoUrls', $this->videoUrls, 0);
        Model::validatePattern('publishDate', $this->publishDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}(\\s\\d{2}:\\d{2}(:\\d{2})?)?');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->appMainScene) {
            $res['app_main_scene'] = $this->appMainScene;
        }
        if (null !== $this->appMainSceneId) {
            $res['app_main_scene_id'] = $this->appMainSceneId;
        }
        if (null !== $this->appName) {
            $res['app_name'] = $this->appName;
        }
        if (null !== $this->appScene) {
            $res['app_scene'] = $this->appScene;
        }
        if (null !== $this->appSceneDataId) {
            $res['app_scene_data_id'] = $this->appSceneDataId;
        }
        if (null !== $this->audioUrls) {
            $res['audio_urls'] = [];
            if(null !== $this->audioUrls){
                $res['audio_urls'] = $this->audioUrls;
            }
        }
        if (null !== $this->linkUrls) {
            $res['link_urls'] = [];
            if(null !== $this->linkUrls){
                $res['link_urls'] = $this->linkUrls;
            }
        }
        if (null !== $this->operatorId) {
            $res['operator_id'] = $this->operatorId;
        }
        if (null !== $this->pictureUrls) {
            $res['picture_urls'] = [];
            if(null !== $this->pictureUrls){
                $res['picture_urls'] = $this->pictureUrls;
            }
        }
        if (null !== $this->publishDate) {
            $res['publish_date'] = $this->publishDate;
        }
        if (null !== $this->tenant) {
            $res['tenant'] = $this->tenant;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        if (null !== $this->videoUrls) {
            $res['video_urls'] = [];
            if(null !== $this->videoUrls){
                $res['video_urls'] = $this->videoUrls;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AnalyzeContentriskRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['app_main_scene'])){
            $model->appMainScene = $map['app_main_scene'];
        }
        if(isset($map['app_main_scene_id'])){
            $model->appMainSceneId = $map['app_main_scene_id'];
        }
        if(isset($map['app_name'])){
            $model->appName = $map['app_name'];
        }
        if(isset($map['app_scene'])){
            $model->appScene = $map['app_scene'];
        }
        if(isset($map['app_scene_data_id'])){
            $model->appSceneDataId = $map['app_scene_data_id'];
        }
        if(isset($map['audio_urls'])){
            if(!empty($map['audio_urls'])){
                $model->audioUrls = [];
                $model->audioUrls = $map['audio_urls'];
            }
        }
        if(isset($map['link_urls'])){
            if(!empty($map['link_urls'])){
                $model->linkUrls = [];
                $model->linkUrls = $map['link_urls'];
            }
        }
        if(isset($map['operator_id'])){
            $model->operatorId = $map['operator_id'];
        }
        if(isset($map['picture_urls'])){
            if(!empty($map['picture_urls'])){
                $model->pictureUrls = [];
                $model->pictureUrls = $map['picture_urls'];
            }
        }
        if(isset($map['publish_date'])){
            $model->publishDate = $map['publish_date'];
        }
        if(isset($map['tenant'])){
            $model->tenant = $map['tenant'];
        }
        if(isset($map['text'])){
            $model->text = $map['text'];
        }
        if(isset($map['video_urls'])){
            if(!empty($map['video_urls'])){
                $model->videoUrls = [];
                $model->videoUrls = $map['video_urls'];
            }
        }
        return $model;
    }
    /**
     * @description 应用主场景，由infosec根据需求制定   
     * @example 
     * @var string
     */
    public $appMainScene;

    /**
     * @description 应用主场景主体ID，由infosec根据需求制定
     * @example 
     * @var string
     */
    public $appMainSceneId;

    /**
     * @description 应用名称，用于区分内容的应用来源(默认:achelmetcore)
     * @example 
     * @var string
     */
    public $appName;

    /**
     * @description 应用场景，由infosec根据需求制定，如：WALLETSNS
     * @example 
     * @var string
     */
    public $appScene;

    /**
     * @description 业务ID，例如发帖的帖子ID
     * @example 
     * @var string
     */
    public $appSceneDataId;

    /**
     * @description 进行识别的音频地址列表，如：http://www.baidu.com
     * @example 
     * @var array
     */
    public $audioUrls;

    /**
     * @description 进行识别的链接地址列表，如：http://www.baidu.com,http://www.qq.com
     * @example 
     * @var array
     */
    public $linkUrls;

    /**
     * @description 内容的发表账户id，用于将需要检测的内容（文本、链接、图片、音视频）等
     * @example 000000001
     * @var string
     */
    public $operatorId;

    /**
     * @description 进行识别的图片地址列表，如：进行识别的图片地址列表  
     * @example 
     * @var array
     */
    public $pictureUrls;

    /**
     * @description 发布时间，如：2016-09-23 14:36:57
     * @example 
     * @var string
     */
    public $publishDate;

    /**
     * @description 内容的发表租户信息，用于将需要检测的内容（文本、链接、图片、音视频）等和账户进行关联
     * @example MYBKC1CN
     * @var string
     */
    public $tenant;

    /**
     * @description 文本内容，需要进行分析的文本内容
     * @example 
     * @var string
     */
    public $text;

    /**
     * @description 进行识别的视频地址列表，如：http://www.baidu.com
     * @example 
     * @var array
     */
    public $videoUrls;

}
