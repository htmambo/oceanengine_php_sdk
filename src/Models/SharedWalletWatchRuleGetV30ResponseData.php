<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWatchRuleGetV30ResponseData implements \JsonSerializable
{
    /**
     * 预警级别事件映射关系（key：预警级别，value：预警事件列表），例如：A级通知对应的事件为 盯盘标签+站内信通知
     * @var array<string,string[]>
     */
    protected ?array $alertEvent = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWatchRuleGetV30ResponseDataRule
     */
    protected ?\Oceanengine\Models\SharedWalletWatchRuleGetV30ResponseDataRule $rule = null;

    /**
     * 预警级别事件映射关系（key：预警级别，value：预警事件列表），例如：A级通知对应的事件为 盯盘标签+站内信通知
     * @return array<string,string[]>
     */
    public function getAlertEvent(): ?array
    {
        return $this->alertEvent;
    }

    /**
     * 预警级别事件映射关系（key：预警级别，value：预警事件列表），例如：A级通知对应的事件为 盯盘标签+站内信通知
     * @param array<string,string[]> $alertEvent
     * @return self
     */
    public function setAlertEvent(?array $alertEvent): self
    {
        $this->alertEvent = $alertEvent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWatchRuleGetV30ResponseDataRule
     */
    public function getRule(): ?\Oceanengine\Models\SharedWalletWatchRuleGetV30ResponseDataRule
    {
        return $this->rule;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWatchRuleGetV30ResponseDataRule $rule
     * @return self
     */
    public function setRule(?\Oceanengine\Models\SharedWalletWatchRuleGetV30ResponseDataRule $rule): self
    {
        $this->rule = $rule;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->alertEvent !== null) {
            $result['alert_event'] = $this->alertEvent;
        }
        if ($this->rule !== null) {
            $result['rule'] = $this->rule;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['alert_event'] ?? null) !== null && is_array($v)) {
            $obj->alertEvent = $v;
        }
        if (($v = $data['rule'] ?? null) !== null && is_array($v)) {
            $obj->rule = \Oceanengine\Models\SharedWalletWatchRuleGetV30ResponseDataRule::fromArray($v);
        }
        return $obj;
    }
}
