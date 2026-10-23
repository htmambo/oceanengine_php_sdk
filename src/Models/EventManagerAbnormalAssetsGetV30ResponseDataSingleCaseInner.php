<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAbnormalAssetsGetV30ResponseDataSingleCaseInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EventManagerAbnormalAssetsGetV30DataSingleCaseAppType
     */
    protected ?string $appType = null;

    /**
     * 包名
     * @var string
     */
    protected ?string $package = null;

    /**
     * 建议和明细信息
     * @var \Oceanengine\Models\EventManagerAbnormalAssetsGetV30ResponseDataSingleCaseInnerSuggestionInner[]
     */
    protected ?array $suggestion = null;

    /**
     * @return \Oceanengine\Models\EventManagerAbnormalAssetsGetV30DataSingleCaseAppType
     */
    public function getAppType(): ?string
    {
        return $this->appType;
    }

    /**
     * @param \Oceanengine\Models\EventManagerAbnormalAssetsGetV30DataSingleCaseAppType $appType
     * @return self
     */
    public function setAppType(?string $appType): self
    {
        $this->appType = $appType;
        return $this;
    }

    /**
     * 包名
     * @return string
     */
    public function getPackage(): ?string
    {
        return $this->package;
    }

    /**
     * 包名
     * @param string $package
     * @return self
     */
    public function setPackage(?string $package): self
    {
        $this->package = $package;
        return $this;
    }

    /**
     * 建议和明细信息
     * @return \Oceanengine\Models\EventManagerAbnormalAssetsGetV30ResponseDataSingleCaseInnerSuggestionInner[]
     */
    public function getSuggestion(): ?array
    {
        return $this->suggestion;
    }

    /**
     * 建议和明细信息
     * @param \Oceanengine\Models\EventManagerAbnormalAssetsGetV30ResponseDataSingleCaseInnerSuggestionInner[] $suggestion
     * @return self
     */
    public function setSuggestion(?array $suggestion): self
    {
        $this->suggestion = $suggestion;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appType !== null) {
            $result['app_type'] = $this->appType;
        }
        if ($this->package !== null) {
            $result['package'] = $this->package;
        }
        if ($this->suggestion !== null) {
            $result['suggestion'] = $this->suggestion;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_type'] ?? null) !== null) {
            $obj->appType = (string) $v;
        }
        if (($v = $data['package'] ?? null) !== null) {
            $obj->package = (string) $v;
        }
        if (($v = $data['suggestion'] ?? null) !== null && is_array($v)) {
            $obj->suggestion = array_map(fn ($vv) => \Oceanengine\Models\EventManagerAbnormalAssetsGetV30ResponseDataSingleCaseInnerSuggestionInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
