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
 * 基础流程信息
 *
 * @method string getFlowName() 获取合同流程名称
 * @method void setFlowName(string $FlowName) 设置合同流程名称
 * @method string getFlowType() 获取合同流程类型
<br/>客户自定义，用于合同分类展示
 * @method void setFlowType(string $FlowType) 设置合同流程类型
<br/>客户自定义，用于合同分类展示
 * @method string getFlowDescription() 获取合同流程描述信息
 * @method void setFlowDescription(string $FlowDescription) 设置合同流程描述信息
 * @method integer getDeadline() 获取合同流程截止时间，unix时间戳，单位秒
 * @method void setDeadline(integer $Deadline) 设置合同流程截止时间，unix时间戳，单位秒
 * @method boolean getUnordered() 获取是否顺序签署(true:无序签,false:顺序签)
<br/>默认false，有序签署合同
 * @method void setUnordered(boolean $Unordered) 设置是否顺序签署(true:无序签,false:顺序签)
<br/>默认false，有序签署合同
 * @method string getIntelligentStatus() 获取是否打开智能添加填写区(默认开启，打开:"OPEN" 关闭："CLOSE")
 * @method void setIntelligentStatus(string $IntelligentStatus) 设置是否打开智能添加填写区(默认开启，打开:"OPEN" 关闭："CLOSE")
 * @method array getFormFields() 获取填写控件内容
 * @method void setFormFields(array $FormFields) 设置填写控件内容
 * @method boolean getNeedSignReview() 获取本企业(发起方企业)是否需要签署审批
<br/>true：开启发起方签署审批
<br/>false：不开启发起方签署审批
<br/>开启后，使用ChannelCreateFlowSignReview接口提交审批结果，才能继续完成签署
 * @method void setNeedSignReview(boolean $NeedSignReview) 设置本企业(发起方企业)是否需要签署审批
<br/>true：开启发起方签署审批
<br/>false：不开启发起方签署审批
<br/>开启后，使用ChannelCreateFlowSignReview接口提交审批结果，才能继续完成签署
 * @method string getUserData() 获取用户流程自定义数据参数
 * @method void setUserData(string $UserData) 设置用户流程自定义数据参数
 * @method array getCcInfos() 获取抄送人信息
 * @method void setCcInfos(array $CcInfos) 设置抄送人信息
 * @method boolean getNeedCreateReview() 获取是否需要开启发起方发起前审核
<br/>true：开启发起方发起前审核
<br/>false：不开启发起方发起前审核
<br/>当指定NeedCreateReview=true，则提交审核后，需要使用接口：ChannelCreateFlowSignReview，来完成发起前审核，审核通过后，可以继续查看，签署合同
 * @method void setNeedCreateReview(boolean $NeedCreateReview) 设置是否需要开启发起方发起前审核
<br/>true：开启发起方发起前审核
<br/>false：不开启发起方发起前审核
<br/>当指定NeedCreateReview=true，则提交审核后，需要使用接口：ChannelCreateFlowSignReview，来完成发起前审核，审核通过后，可以继续查看，签署合同
 */
class BaseFlowInfo extends AbstractModel
{
    /**
     * @var string 合同流程名称
     */
    public $FlowName;

    /**
     * @var string 合同流程类型
<br/>客户自定义，用于合同分类展示
     */
    public $FlowType;

    /**
     * @var string 合同流程描述信息
     */
    public $FlowDescription;

    /**
     * @var integer 合同流程截止时间，unix时间戳，单位秒
     */
    public $Deadline;

    /**
     * @var boolean 是否顺序签署(true:无序签,false:顺序签)
<br/>默认false，有序签署合同
     */
    public $Unordered;

    /**
     * @var string 是否打开智能添加填写区(默认开启，打开:"OPEN" 关闭："CLOSE")
     */
    public $IntelligentStatus;

    /**
     * @var array 填写控件内容
     */
    public $FormFields;

    /**
     * @var boolean 本企业(发起方企业)是否需要签署审批
<br/>true：开启发起方签署审批
<br/>false：不开启发起方签署审批
<br/>开启后，使用ChannelCreateFlowSignReview接口提交审批结果，才能继续完成签署
     */
    public $NeedSignReview;

    /**
     * @var string 用户流程自定义数据参数
     */
    public $UserData;

    /**
     * @var array 抄送人信息
     */
    public $CcInfos;

    /**
     * @var boolean 是否需要开启发起方发起前审核
<br/>true：开启发起方发起前审核
<br/>false：不开启发起方发起前审核
<br/>当指定NeedCreateReview=true，则提交审核后，需要使用接口：ChannelCreateFlowSignReview，来完成发起前审核，审核通过后，可以继续查看，签署合同
     */
    public $NeedCreateReview;

    /**
     * @param string $FlowName 合同流程名称
     * @param string $FlowType 合同流程类型
<br/>客户自定义，用于合同分类展示
     * @param string $FlowDescription 合同流程描述信息
     * @param integer $Deadline 合同流程截止时间，unix时间戳，单位秒
     * @param boolean $Unordered 是否顺序签署(true:无序签,false:顺序签)
<br/>默认false，有序签署合同
     * @param string $IntelligentStatus 是否打开智能添加填写区(默认开启，打开:"OPEN" 关闭："CLOSE")
     * @param array $FormFields 填写控件内容
     * @param boolean $NeedSignReview 本企业(发起方企业)是否需要签署审批
<br/>true：开启发起方签署审批
<br/>false：不开启发起方签署审批
<br/>开启后，使用ChannelCreateFlowSignReview接口提交审批结果，才能继续完成签署
     * @param string $UserData 用户流程自定义数据参数
     * @param array $CcInfos 抄送人信息
     * @param boolean $NeedCreateReview 是否需要开启发起方发起前审核
<br/>true：开启发起方发起前审核
<br/>false：不开启发起方发起前审核
<br/>当指定NeedCreateReview=true，则提交审核后，需要使用接口：ChannelCreateFlowSignReview，来完成发起前审核，审核通过后，可以继续查看，签署合同
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
        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("Unordered",$param) and $param["Unordered"] !== null) {
            $this->Unordered = $param["Unordered"];
        }

        if (array_key_exists("IntelligentStatus",$param) and $param["IntelligentStatus"] !== null) {
            $this->IntelligentStatus = $param["IntelligentStatus"];
        }

        if (array_key_exists("FormFields",$param) and $param["FormFields"] !== null) {
            $this->FormFields = [];
            foreach ($param["FormFields"] as $key => $value){
                $obj = new FormField();
                $obj->deserialize($value);
                array_push($this->FormFields, $obj);
            }
        }

        if (array_key_exists("NeedSignReview",$param) and $param["NeedSignReview"] !== null) {
            $this->NeedSignReview = $param["NeedSignReview"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("CcInfos",$param) and $param["CcInfos"] !== null) {
            $this->CcInfos = [];
            foreach ($param["CcInfos"] as $key => $value){
                $obj = new CcInfo();
                $obj->deserialize($value);
                array_push($this->CcInfos, $obj);
            }
        }

        if (array_key_exists("NeedCreateReview",$param) and $param["NeedCreateReview"] !== null) {
            $this->NeedCreateReview = $param["NeedCreateReview"];
        }
    }
}
