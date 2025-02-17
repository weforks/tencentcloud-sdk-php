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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChannelCreatePreparedPersonalEsign请求参数结构体
 *
 * @method Agent getAgent() 获取应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 必填。
 * @method void setAgent(Agent $Agent) 设置应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 必填。
 * @method string getUserName() 获取个人用户名称
 * @method void setUserName(string $UserName) 设置个人用户名称
 * @method string getIdCardNumber() 获取身份证件号码
 * @method void setIdCardNumber(string $IdCardNumber) 设置身份证件号码
 * @method string getSealImage() 获取印章图片的base64
 * @method void setSealImage(string $SealImage) 设置印章图片的base64
 * @method string getSealName() 获取印章名称
 * @method void setSealName(string $SealName) 设置印章名称
 * @method UserInfo getOperator() 获取操作者信息
 * @method void setOperator(UserInfo $Operator) 设置操作者信息
 * @method string getIdCardType() 获取身份证件类型
 * @method void setIdCardType(string $IdCardType) 设置身份证件类型
 * @method string getMobile() 获取手机号码；当需要开通自动签时，该参数必传
 * @method void setMobile(string $Mobile) 设置手机号码；当需要开通自动签时，该参数必传
 * @method boolean getEnableAutoSign() 获取是否开通自动签，该功能需联系运营工作人员开通后使用
 * @method void setEnableAutoSign(boolean $EnableAutoSign) 设置是否开通自动签，该功能需联系运营工作人员开通后使用
 */
class ChannelCreatePreparedPersonalEsignRequest extends AbstractModel
{
    /**
     * @var Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 必填。
     */
    public $Agent;

    /**
     * @var string 个人用户名称
     */
    public $UserName;

    /**
     * @var string 身份证件号码
     */
    public $IdCardNumber;

    /**
     * @var string 印章图片的base64
     */
    public $SealImage;

    /**
     * @var string 印章名称
     */
    public $SealName;

    /**
     * @var UserInfo 操作者信息
     */
    public $Operator;

    /**
     * @var string 身份证件类型
     */
    public $IdCardType;

    /**
     * @var string 手机号码；当需要开通自动签时，该参数必传
     */
    public $Mobile;

    /**
     * @var boolean 是否开通自动签，该功能需联系运营工作人员开通后使用
     */
    public $EnableAutoSign;

    /**
     * @param Agent $Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 必填。
     * @param string $UserName 个人用户名称
     * @param string $IdCardNumber 身份证件号码
     * @param string $SealImage 印章图片的base64
     * @param string $SealName 印章名称
     * @param UserInfo $Operator 操作者信息
     * @param string $IdCardType 身份证件类型
     * @param string $Mobile 手机号码；当需要开通自动签时，该参数必传
     * @param boolean $EnableAutoSign 是否开通自动签，该功能需联系运营工作人员开通后使用
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("SealImage",$param) and $param["SealImage"] !== null) {
            $this->SealImage = $param["SealImage"];
        }

        if (array_key_exists("SealName",$param) and $param["SealName"] !== null) {
            $this->SealName = $param["SealName"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("EnableAutoSign",$param) and $param["EnableAutoSign"] !== null) {
            $this->EnableAutoSign = $param["EnableAutoSign"];
        }
    }
}
