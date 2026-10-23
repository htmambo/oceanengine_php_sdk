<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAwemeAuthListV2Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAwemeAuthListV2FilteringAuthScenario
     */
    protected ?string $authScenario = null;

    /**
     * 授权状态
     * @var \Oceanengine\Models\ToolsAwemeAuthListV2FilteringAuthStatus[]
     */
    protected ?array $authStatus = null;

    /**
     * 授权类型
     * @var \Oceanengine\Models\ToolsAwemeAuthListV2FilteringAuthType[]
     */
    protected ?array $authType = null;

    /**
     * 抖音号
     * @var string[]
     */
    protected ?array $awemeIds = null;

    /**
     * 商品库id
     * @var int
     */
    protected ?int $dpaId = null;

    /**
     * 抖音短视频ID
     * @var int[]
     */
    protected ?array $itemIds = null;

    /**
     * 筛选警告类型
     * @var \Oceanengine\Models\ToolsAwemeAuthListV2FilteringWarningTypes[]
     */
    protected ?array $warningTypes = null;

    /**
     * @return \Oceanengine\Models\ToolsAwemeAuthListV2FilteringAuthScenario
     */
    public function getAuthScenario(): ?string
    {
        return $this->authScenario;
    }

    /**
     * @param \Oceanengine\Models\ToolsAwemeAuthListV2FilteringAuthScenario $authScenario
     * @return self
     */
    public function setAuthScenario(?string $authScenario): self
    {
        $this->authScenario = $authScenario;
        return $this;
    }

    /**
     * 授权状态
     * @return \Oceanengine\Models\ToolsAwemeAuthListV2FilteringAuthStatus[]
     */
    public function getAuthStatus(): ?array
    {
        return $this->authStatus;
    }

    /**
     * 授权状态
     * @param \Oceanengine\Models\ToolsAwemeAuthListV2FilteringAuthStatus[] $authStatus
     * @return self
     */
    public function setAuthStatus(?array $authStatus): self
    {
        $this->authStatus = $authStatus;
        return $this;
    }

    /**
     * 授权类型
     * @return \Oceanengine\Models\ToolsAwemeAuthListV2FilteringAuthType[]
     */
    public function getAuthType(): ?array
    {
        return $this->authType;
    }

    /**
     * 授权类型
     * @param \Oceanengine\Models\ToolsAwemeAuthListV2FilteringAuthType[] $authType
     * @return self
     */
    public function setAuthType(?array $authType): self
    {
        $this->authType = $authType;
        return $this;
    }

    /**
     * 抖音号
     * @return string[]
     */
    public function getAwemeIds(): ?array
    {
        return $this->awemeIds;
    }

    /**
     * 抖音号
     * @param string[] $awemeIds
     * @return self
     */
    public function setAwemeIds(?array $awemeIds): self
    {
        $this->awemeIds = $awemeIds;
        return $this;
    }

    /**
     * 商品库id
     * @return int
     */
    public function getDpaId(): ?int
    {
        return $this->dpaId;
    }

    /**
     * 商品库id
     * @param int $dpaId
     * @return self
     */
    public function setDpaId(?int $dpaId): self
    {
        $this->dpaId = $dpaId;
        return $this;
    }

    /**
     * 抖音短视频ID
     * @return int[]
     */
    public function getItemIds(): ?array
    {
        return $this->itemIds;
    }

    /**
     * 抖音短视频ID
     * @param int[] $itemIds
     * @return self
     */
    public function setItemIds(?array $itemIds): self
    {
        $this->itemIds = $itemIds;
        return $this;
    }

    /**
     * 筛选警告类型
     * @return \Oceanengine\Models\ToolsAwemeAuthListV2FilteringWarningTypes[]
     */
    public function getWarningTypes(): ?array
    {
        return $this->warningTypes;
    }

    /**
     * 筛选警告类型
     * @param \Oceanengine\Models\ToolsAwemeAuthListV2FilteringWarningTypes[] $warningTypes
     * @return self
     */
    public function setWarningTypes(?array $warningTypes): self
    {
        $this->warningTypes = $warningTypes;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authScenario !== null) {
            $result['auth_scenario'] = $this->authScenario;
        }
        if ($this->authStatus !== null) {
            $result['auth_status'] = $this->authStatus;
        }
        if ($this->authType !== null) {
            $result['auth_type'] = $this->authType;
        }
        if ($this->awemeIds !== null) {
            $result['aweme_ids'] = $this->awemeIds;
        }
        if ($this->dpaId !== null) {
            $result['dpa_id'] = $this->dpaId;
        }
        if ($this->itemIds !== null) {
            $result['item_ids'] = $this->itemIds;
        }
        if ($this->warningTypes !== null) {
            $result['warning_types'] = $this->warningTypes;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auth_scenario'] ?? null) !== null) {
            $obj->authScenario = (string) $v;
        }
        if (($v = $data['auth_status'] ?? null) !== null && is_array($v)) {
            $obj->authStatus = $v;
        }
        if (($v = $data['auth_type'] ?? null) !== null && is_array($v)) {
            $obj->authType = $v;
        }
        if (($v = $data['aweme_ids'] ?? null) !== null && is_array($v)) {
            $obj->awemeIds = $v;
        }
        if (($v = $data['dpa_id'] ?? null) !== null) {
            $obj->dpaId = (int) $v;
        }
        if (($v = $data['item_ids'] ?? null) !== null && is_array($v)) {
            $obj->itemIds = $v;
        }
        if (($v = $data['warning_types'] ?? null) !== null && is_array($v)) {
            $obj->warningTypes = $v;
        }
        return $obj;
    }
}
