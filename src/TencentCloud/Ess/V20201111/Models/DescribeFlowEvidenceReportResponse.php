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
 * DescribeFlowEvidenceReport返回参数结构体
 *
 * @method string getReportUrl() 获取出证报告PDF的下载 URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportUrl(string $ReportUrl) 设置出证报告PDF的下载 URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取出证任务执行的状态, 分布表示下面的含义

EvidenceStatusExecuting  出证任务在执行中
EvidenceStatusSuccess  出证任务执行成功
EvidenceStatusFailed  出证任务执行失败
 * @method void setStatus(string $Status) 设置出证任务执行的状态, 分布表示下面的含义

EvidenceStatusExecuting  出证任务在执行中
EvidenceStatusSuccess  出证任务执行成功
EvidenceStatusFailed  出证任务执行失败
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFlowEvidenceReportResponse extends AbstractModel
{
    /**
     * @var string 出证报告PDF的下载 URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportUrl;

    /**
     * @var string 出证任务执行的状态, 分布表示下面的含义

EvidenceStatusExecuting  出证任务在执行中
EvidenceStatusSuccess  出证任务执行成功
EvidenceStatusFailed  出证任务执行失败
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ReportUrl 出证报告PDF的下载 URL
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 出证任务执行的状态, 分布表示下面的含义

EvidenceStatusExecuting  出证任务在执行中
EvidenceStatusSuccess  出证任务执行成功
EvidenceStatusFailed  出证任务执行失败
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ReportUrl",$param) and $param["ReportUrl"] !== null) {
            $this->ReportUrl = $param["ReportUrl"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
