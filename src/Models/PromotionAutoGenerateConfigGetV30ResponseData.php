<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionAutoGenerateConfigGetV30ResponseData implements \JsonSerializable
{
    /**
     * 配置ID
     * @var int
     */
    protected ?int $configId = null;

    /**
     * 策略配置详情列表(仅当version=Strategy时有值)
     * @var \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataStrategyDataInner[]
     */
    protected ?array $strategyData = null;

    /**
     * 模板列表(仅当version=Template时有值)
     * @var \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataTemplatesInner[]
     */
    protected ?array $templates = null;

    /**
     * 上次修改时间戳
     * @var int
     */
    protected ?int $updateTime = null;

    /**
     * @var \Oceanengine\Models\PromotionAutoGenerateConfigGetV30DataVersion
     */
    protected ?string $version = null;

    /**
     * 配置ID
     * @return int
     */
    public function getConfigId(): ?int
    {
        return $this->configId;
    }

    /**
     * 配置ID
     * @param int $configId
     * @return self
     */
    public function setConfigId(?int $configId): self
    {
        $this->configId = $configId;
        return $this;
    }

    /**
     * 策略配置详情列表(仅当version=Strategy时有值)
     * @return \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataStrategyDataInner[]
     */
    public function getStrategyData(): ?array
    {
        return $this->strategyData;
    }

    /**
     * 策略配置详情列表(仅当version=Strategy时有值)
     * @param \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataStrategyDataInner[] $strategyData
     * @return self
     */
    public function setStrategyData(?array $strategyData): self
    {
        $this->strategyData = $strategyData;
        return $this;
    }

    /**
     * 模板列表(仅当version=Template时有值)
     * @return \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataTemplatesInner[]
     */
    public function getTemplates(): ?array
    {
        return $this->templates;
    }

    /**
     * 模板列表(仅当version=Template时有值)
     * @param \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataTemplatesInner[] $templates
     * @return self
     */
    public function setTemplates(?array $templates): self
    {
        $this->templates = $templates;
        return $this;
    }

    /**
     * 上次修改时间戳
     * @return int
     */
    public function getUpdateTime(): ?int
    {
        return $this->updateTime;
    }

    /**
     * 上次修改时间戳
     * @param int $updateTime
     * @return self
     */
    public function setUpdateTime(?int $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionAutoGenerateConfigGetV30DataVersion
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * @param \Oceanengine\Models\PromotionAutoGenerateConfigGetV30DataVersion $version
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->configId !== null) {
            $result['config_id'] = $this->configId;
        }
        if ($this->strategyData !== null) {
            $result['strategy_data'] = $this->strategyData;
        }
        if ($this->templates !== null) {
            $result['templates'] = $this->templates;
        }
        if ($this->updateTime !== null) {
            $result['update_time'] = $this->updateTime;
        }
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['config_id'] ?? null) !== null) {
            $obj->configId = (int) $v;
        }
        if (($v = $data['strategy_data'] ?? null) !== null && is_array($v)) {
            $obj->strategyData = array_map(fn ($vv) => \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataStrategyDataInner::fromArray($vv), $v);
        }
        if (($v = $data['templates'] ?? null) !== null && is_array($v)) {
            $obj->templates = array_map(fn ($vv) => \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataTemplatesInner::fromArray($vv), $v);
        }
        if (($v = $data['update_time'] ?? null) !== null) {
            $obj->updateTime = (int) $v;
        }
        if (($v = $data['version'] ?? null) !== null) {
            $obj->version = (string) $v;
        }
        return $obj;
    }
}
