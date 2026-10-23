<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWatchRuleGetV30ResponseDataRuleBalanceAlertRulesInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SharedWalletWatchRuleGetV30DataRuleBalanceAlertRulesLevel
     */
    protected ?string $level = null;

    /**
     * 阈值（单位：元）
     * @var int
     */
    protected ?int $threshold = null;

    /**
     * @return \Oceanengine\Models\SharedWalletWatchRuleGetV30DataRuleBalanceAlertRulesLevel
     */
    public function getLevel(): ?string
    {
        return $this->level;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWatchRuleGetV30DataRuleBalanceAlertRulesLevel $level
     * @return self
     */
    public function setLevel(?string $level): self
    {
        $this->level = $level;
        return $this;
    }

    /**
     * 阈值（单位：元）
     * @return int
     */
    public function getThreshold(): ?int
    {
        return $this->threshold;
    }

    /**
     * 阈值（单位：元）
     * @param int $threshold
     * @return self
     */
    public function setThreshold(?int $threshold): self
    {
        $this->threshold = $threshold;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->level !== null) {
            $result['level'] = $this->level;
        }
        if ($this->threshold !== null) {
            $result['threshold'] = $this->threshold;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['level'] ?? null) !== null) {
            $obj->level = (string) $v;
        }
        if (($v = $data['threshold'] ?? null) !== null) {
            $obj->threshold = (int) $v;
        }
        return $obj;
    }
}
