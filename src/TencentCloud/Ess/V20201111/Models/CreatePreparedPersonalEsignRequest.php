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
 * CreatePreparedPersonalEsign请求参数结构体
 *
 * @method string getUserName() 获取个人用户姓名
 * @method void setUserName(string $UserName) 设置个人用户姓名
 * @method string getIdCardNumber() 获取身份证件号码
 * @method void setIdCardNumber(string $IdCardNumber) 设置身份证件号码
 * @method string getSealName() 获取印章名称
 * @method void setSealName(string $SealName) 设置印章名称
 * @method UserInfo getOperator() 获取调用方用户信息，userId 必填。支持填入集团子公司经办人 userId代发合同。
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，userId 必填。支持填入集团子公司经办人 userId代发合同。
 * @method string getIdCardType() 获取身份证件类型:
ID_CARD 身份证
PASSPORT 护照
HONGKONG_AND_MACAO 中国香港
FOREIGN_ID_CARD 境外身份
HONGKONG_MACAO_AND_TAIWAN 中国台湾
 * @method void setIdCardType(string $IdCardType) 设置身份证件类型:
ID_CARD 身份证
PASSPORT 护照
HONGKONG_AND_MACAO 中国香港
FOREIGN_ID_CARD 境外身份
HONGKONG_MACAO_AND_TAIWAN 中国台湾
 * @method string getSealImage() 获取印章图片的base64
注：已废弃
请先通过UploadFiles接口上传文件，获取 FileId
 * @method void setSealImage(string $SealImage) 设置印章图片的base64
注：已废弃
请先通过UploadFiles接口上传文件，获取 FileId
 * @method boolean getSealImageCompress() 获取是否开启印章图片压缩处理，默认不开启，如需开启请设置为 true。当印章超过 2M 时建议开启，开启后图片的 hash 将发生变化。
 * @method void setSealImageCompress(boolean $SealImageCompress) 设置是否开启印章图片压缩处理，默认不开启，如需开启请设置为 true。当印章超过 2M 时建议开启，开启后图片的 hash 将发生变化。
 * @method string getMobile() 获取手机号码；当需要开通自动签时，该参数必传
 * @method void setMobile(string $Mobile) 设置手机号码；当需要开通自动签时，该参数必传
 * @method boolean getEnableAutoSign() 获取是否开通自动签，该功能需联系运营工作人员开通后使用
 * @method void setEnableAutoSign(boolean $EnableAutoSign) 设置是否开通自动签，该功能需联系运营工作人员开通后使用
 * @method string getSealColor() 获取印章颜色（参数ProcessSeal=true时生效）
默认值：BLACK黑色
取值: 
BLACK 黑色,
RED 红色,
BLUE 蓝色。
 * @method void setSealColor(string $SealColor) 设置印章颜色（参数ProcessSeal=true时生效）
默认值：BLACK黑色
取值: 
BLACK 黑色,
RED 红色,
BLUE 蓝色。
 * @method boolean getProcessSeal() 获取是否处理印章
默认不做印章处理。
取值：false：不做任何处理；
true：做透明化处理和颜色增强。
 * @method void setProcessSeal(boolean $ProcessSeal) 设置是否处理印章
默认不做印章处理。
取值：false：不做任何处理；
true：做透明化处理和颜色增强。
 * @method string getFileId() 获取印章图片文件 id
取值：
填写的FileId通过UploadFiles接口上传文件获取。
 * @method void setFileId(string $FileId) 设置印章图片文件 id
取值：
填写的FileId通过UploadFiles接口上传文件获取。
 * @method Agent getAgent() 获取代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method void setAgent(Agent $Agent) 设置代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 */
class CreatePreparedPersonalEsignRequest extends AbstractModel
{
    /**
     * @var string 个人用户姓名
     */
    public $UserName;

    /**
     * @var string 身份证件号码
     */
    public $IdCardNumber;

    /**
     * @var string 印章名称
     */
    public $SealName;

    /**
     * @var UserInfo 调用方用户信息，userId 必填。支持填入集团子公司经办人 userId代发合同。
     */
    public $Operator;

    /**
     * @var string 身份证件类型:
ID_CARD 身份证
PASSPORT 护照
HONGKONG_AND_MACAO 中国香港
FOREIGN_ID_CARD 境外身份
HONGKONG_MACAO_AND_TAIWAN 中国台湾
     */
    public $IdCardType;

    /**
     * @var string 印章图片的base64
注：已废弃
请先通过UploadFiles接口上传文件，获取 FileId
     * @deprecated
     */
    public $SealImage;

    /**
     * @var boolean 是否开启印章图片压缩处理，默认不开启，如需开启请设置为 true。当印章超过 2M 时建议开启，开启后图片的 hash 将发生变化。
     */
    public $SealImageCompress;

    /**
     * @var string 手机号码；当需要开通自动签时，该参数必传
     */
    public $Mobile;

    /**
     * @var boolean 是否开通自动签，该功能需联系运营工作人员开通后使用
     */
    public $EnableAutoSign;

    /**
     * @var string 印章颜色（参数ProcessSeal=true时生效）
默认值：BLACK黑色
取值: 
BLACK 黑色,
RED 红色,
BLUE 蓝色。
     */
    public $SealColor;

    /**
     * @var boolean 是否处理印章
默认不做印章处理。
取值：false：不做任何处理；
true：做透明化处理和颜色增强。
     */
    public $ProcessSeal;

    /**
     * @var string 印章图片文件 id
取值：
填写的FileId通过UploadFiles接口上传文件获取。
     */
    public $FileId;

    /**
     * @var Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     */
    public $Agent;

    /**
     * @param string $UserName 个人用户姓名
     * @param string $IdCardNumber 身份证件号码
     * @param string $SealName 印章名称
     * @param UserInfo $Operator 调用方用户信息，userId 必填。支持填入集团子公司经办人 userId代发合同。
     * @param string $IdCardType 身份证件类型:
ID_CARD 身份证
PASSPORT 护照
HONGKONG_AND_MACAO 中国香港
FOREIGN_ID_CARD 境外身份
HONGKONG_MACAO_AND_TAIWAN 中国台湾
     * @param string $SealImage 印章图片的base64
注：已废弃
请先通过UploadFiles接口上传文件，获取 FileId
     * @param boolean $SealImageCompress 是否开启印章图片压缩处理，默认不开启，如需开启请设置为 true。当印章超过 2M 时建议开启，开启后图片的 hash 将发生变化。
     * @param string $Mobile 手机号码；当需要开通自动签时，该参数必传
     * @param boolean $EnableAutoSign 是否开通自动签，该功能需联系运营工作人员开通后使用
     * @param string $SealColor 印章颜色（参数ProcessSeal=true时生效）
默认值：BLACK黑色
取值: 
BLACK 黑色,
RED 红色,
BLUE 蓝色。
     * @param boolean $ProcessSeal 是否处理印章
默认不做印章处理。
取值：false：不做任何处理；
true：做透明化处理和颜色增强。
     * @param string $FileId 印章图片文件 id
取值：
填写的FileId通过UploadFiles接口上传文件获取。
     * @param Agent $Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
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

        if (array_key_exists("SealImage",$param) and $param["SealImage"] !== null) {
            $this->SealImage = $param["SealImage"];
        }

        if (array_key_exists("SealImageCompress",$param) and $param["SealImageCompress"] !== null) {
            $this->SealImageCompress = $param["SealImageCompress"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("EnableAutoSign",$param) and $param["EnableAutoSign"] !== null) {
            $this->EnableAutoSign = $param["EnableAutoSign"];
        }

        if (array_key_exists("SealColor",$param) and $param["SealColor"] !== null) {
            $this->SealColor = $param["SealColor"];
        }

        if (array_key_exists("ProcessSeal",$param) and $param["ProcessSeal"] !== null) {
            $this->ProcessSeal = $param["ProcessSeal"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
