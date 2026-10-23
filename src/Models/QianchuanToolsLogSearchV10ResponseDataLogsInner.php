<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanToolsLogSearchV10ResponseDataLogsInner implements \JsonSerializable
{
    /**
     * 操作前后内容
     * @var string[]
     */
    protected ?array $contentLog = null;

    /**
     * 操作内容
     * @var string
     */
    protected ?string $contentTitle = null;

    /**
     * 操作时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 作日志id
     * @var string
     */
    protected ?string $logId = null;

    /**
     * 操作对象ID
     * @var int
     */
    protected ?int $objectId = null;

    /**
     * 操作对象名称
     * @var string
     */
    protected ?string $objectName = null;

    /**
     * 操作对象类型
     * @var string
     */
    protected ?string $objectType = null;

    /**
     * 操作人id
     * @var string
     */
    protected ?string $operatorId = null;

    /**
     * 操作人
     * @var string
     */
    protected ?string $operatorName = null;

    /**
     * 操作IP
     * @var string
     */
    protected ?string $optIp = null;

    /**
     * @var \Oceanengine\Models\QianchuanToolsLogSearchV10ResponseDataLogsInnerSubLogsInner[]
     */
    protected ?array $subLogs = null;

    /**
     * 操作前后内容
     * @return string[]
     */
    public function getContentLog(): ?array
    {
        return $this->contentLog;
    }

    /**
     * 操作前后内容
     * @param string[] $contentLog
     * @return self
     */
    public function setContentLog(?array $contentLog): self
    {
        $this->contentLog = $contentLog;
        return $this;
    }

    /**
     * 操作内容
     * @return string
     */
    public function getContentTitle(): ?string
    {
        return $this->contentTitle;
    }

    /**
     * 操作内容
     * @param string $contentTitle
     * @return self
     */
    public function setContentTitle(?string $contentTitle): self
    {
        $this->contentTitle = $contentTitle;
        return $this;
    }

    /**
     * 操作时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 操作时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 作日志id
     * @return string
     */
    public function getLogId(): ?string
    {
        return $this->logId;
    }

    /**
     * 作日志id
     * @param string $logId
     * @return self
     */
    public function setLogId(?string $logId): self
    {
        $this->logId = $logId;
        return $this;
    }

    /**
     * 操作对象ID
     * @return int
     */
    public function getObjectId(): ?int
    {
        return $this->objectId;
    }

    /**
     * 操作对象ID
     * @param int $objectId
     * @return self
     */
    public function setObjectId(?int $objectId): self
    {
        $this->objectId = $objectId;
        return $this;
    }

    /**
     * 操作对象名称
     * @return string
     */
    public function getObjectName(): ?string
    {
        return $this->objectName;
    }

    /**
     * 操作对象名称
     * @param string $objectName
     * @return self
     */
    public function setObjectName(?string $objectName): self
    {
        $this->objectName = $objectName;
        return $this;
    }

    /**
     * 操作对象类型
     * @return string
     */
    public function getObjectType(): ?string
    {
        return $this->objectType;
    }

    /**
     * 操作对象类型
     * @param string $objectType
     * @return self
     */
    public function setObjectType(?string $objectType): self
    {
        $this->objectType = $objectType;
        return $this;
    }

    /**
     * 操作人id
     * @return string
     */
    public function getOperatorId(): ?string
    {
        return $this->operatorId;
    }

    /**
     * 操作人id
     * @param string $operatorId
     * @return self
     */
    public function setOperatorId(?string $operatorId): self
    {
        $this->operatorId = $operatorId;
        return $this;
    }

    /**
     * 操作人
     * @return string
     */
    public function getOperatorName(): ?string
    {
        return $this->operatorName;
    }

    /**
     * 操作人
     * @param string $operatorName
     * @return self
     */
    public function setOperatorName(?string $operatorName): self
    {
        $this->operatorName = $operatorName;
        return $this;
    }

    /**
     * 操作IP
     * @return string
     */
    public function getOptIp(): ?string
    {
        return $this->optIp;
    }

    /**
     * 操作IP
     * @param string $optIp
     * @return self
     */
    public function setOptIp(?string $optIp): self
    {
        $this->optIp = $optIp;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanToolsLogSearchV10ResponseDataLogsInnerSubLogsInner[]
     */
    public function getSubLogs(): ?array
    {
        return $this->subLogs;
    }

    /**
     * @param \Oceanengine\Models\QianchuanToolsLogSearchV10ResponseDataLogsInnerSubLogsInner[] $subLogs
     * @return self
     */
    public function setSubLogs(?array $subLogs): self
    {
        $this->subLogs = $subLogs;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->contentLog !== null) {
            $result['content_log'] = $this->contentLog;
        }
        if ($this->contentTitle !== null) {
            $result['content_title'] = $this->contentTitle;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->logId !== null) {
            $result['log_id'] = $this->logId;
        }
        if ($this->objectId !== null) {
            $result['object_id'] = $this->objectId;
        }
        if ($this->objectName !== null) {
            $result['object_name'] = $this->objectName;
        }
        if ($this->objectType !== null) {
            $result['object_type'] = $this->objectType;
        }
        if ($this->operatorId !== null) {
            $result['operator_id'] = $this->operatorId;
        }
        if ($this->operatorName !== null) {
            $result['operator_name'] = $this->operatorName;
        }
        if ($this->optIp !== null) {
            $result['opt_ip'] = $this->optIp;
        }
        if ($this->subLogs !== null) {
            $result['sub_logs'] = $this->subLogs;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['content_log'] ?? null) !== null && is_array($v)) {
            $obj->contentLog = $v;
        }
        if (($v = $data['content_title'] ?? null) !== null) {
            $obj->contentTitle = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['log_id'] ?? null) !== null) {
            $obj->logId = (string) $v;
        }
        if (($v = $data['object_id'] ?? null) !== null) {
            $obj->objectId = (int) $v;
        }
        if (($v = $data['object_name'] ?? null) !== null) {
            $obj->objectName = (string) $v;
        }
        if (($v = $data['object_type'] ?? null) !== null) {
            $obj->objectType = (string) $v;
        }
        if (($v = $data['operator_id'] ?? null) !== null) {
            $obj->operatorId = (string) $v;
        }
        if (($v = $data['operator_name'] ?? null) !== null) {
            $obj->operatorName = (string) $v;
        }
        if (($v = $data['opt_ip'] ?? null) !== null) {
            $obj->optIp = (string) $v;
        }
        if (($v = $data['sub_logs'] ?? null) !== null && is_array($v)) {
            $obj->subLogs = array_map(fn ($vv) => \Oceanengine\Models\QianchuanToolsLogSearchV10ResponseDataLogsInnerSubLogsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
