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
 * CancelUserAutoSignEnableUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取操作人信息，UseId必填	
 * @method void setOperator(UserInfo $Operator) 设置操作人信息，UseId必填	
 * @method string getSceneKey() 获取自动签场景: E_PRESCRIPTION_AUTO_SIGN 电子处方
 * @method void setSceneKey(string $SceneKey) 设置自动签场景: E_PRESCRIPTION_AUTO_SIGN 电子处方
 * @method UserThreeFactor getUserInfo() 获取指定撤销链接的用户指定撤销链接的用户信息，包含姓名、证件类型、证件号码。

 * @method void setUserInfo(UserThreeFactor $UserInfo) 设置指定撤销链接的用户指定撤销链接的用户信息，包含姓名、证件类型、证件号码。
 */
class CancelUserAutoSignEnableUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo 操作人信息，UseId必填	
     */
    public $Operator;

    /**
     * @var string 自动签场景: E_PRESCRIPTION_AUTO_SIGN 电子处方
     */
    public $SceneKey;

    /**
     * @var UserThreeFactor 指定撤销链接的用户指定撤销链接的用户信息，包含姓名、证件类型、证件号码。

     */
    public $UserInfo;

    /**
     * @param UserInfo $Operator 操作人信息，UseId必填	
     * @param string $SceneKey 自动签场景: E_PRESCRIPTION_AUTO_SIGN 电子处方
     * @param UserThreeFactor $UserInfo 指定撤销链接的用户指定撤销链接的用户信息，包含姓名、证件类型、证件号码。
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

        if (array_key_exists("SceneKey",$param) and $param["SceneKey"] !== null) {
            $this->SceneKey = $param["SceneKey"];
        }

        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new UserThreeFactor();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }
    }
}
