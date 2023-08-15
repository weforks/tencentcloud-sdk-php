<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEmbedWebUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取操作者信息
 * @method void setOperator(UserInfo $Operator) 设置操作者信息
 * @method string getEmbedType() 获取WEB嵌入资源类型。
<br/>CREATE_SEAL: 生成创建印章的嵌入页面
<br/>CREATE_TEMPLATE：生成创建模板的嵌入页面
<br/>MODIFY_TEMPLATE：生成编辑模板的嵌入页面
<br/>PREVIEW_TEMPLATE：生成预览模板的嵌入页面
<br/>PREVIEW_SEAL_LIST：生成预览印章列表的嵌入页面
<br/>PREVIEW_SEAL_DETAIL：生成预览印章详情的嵌入页面
<br/>EXTEND_SERVICE：生成拓展服务的嵌入页面
<br/>PREVIEW_FLOW：生成预览合同的嵌入页面
<br/>PREVIEW_FLOW_DETAIL：生成查看合同详情的嵌入页面

 * @method void setEmbedType(string $EmbedType) 设置WEB嵌入资源类型。
<br/>CREATE_SEAL: 生成创建印章的嵌入页面
<br/>CREATE_TEMPLATE：生成创建模板的嵌入页面
<br/>MODIFY_TEMPLATE：生成编辑模板的嵌入页面
<br/>PREVIEW_TEMPLATE：生成预览模板的嵌入页面
<br/>PREVIEW_SEAL_LIST：生成预览印章列表的嵌入页面
<br/>PREVIEW_SEAL_DETAIL：生成预览印章详情的嵌入页面
<br/>EXTEND_SERVICE：生成拓展服务的嵌入页面
<br/>PREVIEW_FLOW：生成预览合同的嵌入页面
<br/>PREVIEW_FLOW_DETAIL：生成查看合同详情的嵌入页面

 * @method string getBusinessId() 获取WEB嵌入的业务资源ID
<br/>PREVIEW_SEAL_DETAIL，必填，取值为印章id
<br/>MODIFY_TEMPLATE，PREVIEW_TEMPLATE，必填，取值为模版id
<br/>PREVIEW_FLOW，PREVIEW_FLOW_DETAIL，必填，取值为合同id
 * @method void setBusinessId(string $BusinessId) 设置WEB嵌入的业务资源ID
<br/>PREVIEW_SEAL_DETAIL，必填，取值为印章id
<br/>MODIFY_TEMPLATE，PREVIEW_TEMPLATE，必填，取值为模版id
<br/>PREVIEW_FLOW，PREVIEW_FLOW_DETAIL，必填，取值为合同id
 * @method Agent getAgent() 获取代理相关应用信息，如集团主企业代子企业操作
 * @method void setAgent(Agent $Agent) 设置代理相关应用信息，如集团主企业代子企业操作
 * @method ReviewerInfo getReviewer() 获取抄送方信息
 * @method void setReviewer(ReviewerInfo $Reviewer) 设置抄送方信息
 * @method EmbedUrlOption getOption() 获取个性化参数
 * @method void setOption(EmbedUrlOption $Option) 设置个性化参数
 */
class CreateEmbedWebUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo 操作者信息
     */
    public $Operator;

    /**
     * @var string WEB嵌入资源类型。
<br/>CREATE_SEAL: 生成创建印章的嵌入页面
<br/>CREATE_TEMPLATE：生成创建模板的嵌入页面
<br/>MODIFY_TEMPLATE：生成编辑模板的嵌入页面
<br/>PREVIEW_TEMPLATE：生成预览模板的嵌入页面
<br/>PREVIEW_SEAL_LIST：生成预览印章列表的嵌入页面
<br/>PREVIEW_SEAL_DETAIL：生成预览印章详情的嵌入页面
<br/>EXTEND_SERVICE：生成拓展服务的嵌入页面
<br/>PREVIEW_FLOW：生成预览合同的嵌入页面
<br/>PREVIEW_FLOW_DETAIL：生成查看合同详情的嵌入页面

     */
    public $EmbedType;

    /**
     * @var string WEB嵌入的业务资源ID
<br/>PREVIEW_SEAL_DETAIL，必填，取值为印章id
<br/>MODIFY_TEMPLATE，PREVIEW_TEMPLATE，必填，取值为模版id
<br/>PREVIEW_FLOW，PREVIEW_FLOW_DETAIL，必填，取值为合同id
     */
    public $BusinessId;

    /**
     * @var Agent 代理相关应用信息，如集团主企业代子企业操作
     */
    public $Agent;

    /**
     * @var ReviewerInfo 抄送方信息
     */
    public $Reviewer;

    /**
     * @var EmbedUrlOption 个性化参数
     */
    public $Option;

    /**
     * @param UserInfo $Operator 操作者信息
     * @param string $EmbedType WEB嵌入资源类型。
<br/>CREATE_SEAL: 生成创建印章的嵌入页面
<br/>CREATE_TEMPLATE：生成创建模板的嵌入页面
<br/>MODIFY_TEMPLATE：生成编辑模板的嵌入页面
<br/>PREVIEW_TEMPLATE：生成预览模板的嵌入页面
<br/>PREVIEW_SEAL_LIST：生成预览印章列表的嵌入页面
<br/>PREVIEW_SEAL_DETAIL：生成预览印章详情的嵌入页面
<br/>EXTEND_SERVICE：生成拓展服务的嵌入页面
<br/>PREVIEW_FLOW：生成预览合同的嵌入页面
<br/>PREVIEW_FLOW_DETAIL：生成查看合同详情的嵌入页面

     * @param string $BusinessId WEB嵌入的业务资源ID
<br/>PREVIEW_SEAL_DETAIL，必填，取值为印章id
<br/>MODIFY_TEMPLATE，PREVIEW_TEMPLATE，必填，取值为模版id
<br/>PREVIEW_FLOW，PREVIEW_FLOW_DETAIL，必填，取值为合同id
     * @param Agent $Agent 代理相关应用信息，如集团主企业代子企业操作
     * @param ReviewerInfo $Reviewer 抄送方信息
     * @param EmbedUrlOption $Option 个性化参数
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("EmbedType",$param) and $param["EmbedType"] !== null) {
            $this->EmbedType = $param["EmbedType"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Reviewer",$param) and $param["Reviewer"] !== null) {
            $this->Reviewer = new ReviewerInfo();
            $this->Reviewer->deserialize($param["Reviewer"]);
        }

        if (array_key_exists("Option",$param) and $param["Option"] !== null) {
            $this->Option = new EmbedUrlOption();
            $this->Option->deserialize($param["Option"]);
        }
    }
}
