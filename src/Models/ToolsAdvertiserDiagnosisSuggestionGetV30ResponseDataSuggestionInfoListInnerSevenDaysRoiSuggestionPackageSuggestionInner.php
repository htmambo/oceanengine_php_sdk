<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestionPackageSuggestionInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestionPackageSuggestionInnerAdjustInfoInner[]
     */
    protected ?array $adjustInfo = null;

    /**
     * @var string
     */
    protected ?string $packageName = null;

    /**
     * @var \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestionPackageSuggestionInnerProjectInfoInner[]
     */
    protected ?array $projectInfo = null;

    /**
     * @return \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestionPackageSuggestionInnerAdjustInfoInner[]
     */
    public function getAdjustInfo(): ?array
    {
        return $this->adjustInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestionPackageSuggestionInnerAdjustInfoInner[] $adjustInfo
     * @return self
     */
    public function setAdjustInfo(?array $adjustInfo): self
    {
        $this->adjustInfo = $adjustInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageName(): ?string
    {
        return $this->packageName;
    }

    /**
     * @param string $packageName
     * @return self
     */
    public function setPackageName(?string $packageName): self
    {
        $this->packageName = $packageName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestionPackageSuggestionInnerProjectInfoInner[]
     */
    public function getProjectInfo(): ?array
    {
        return $this->projectInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestionPackageSuggestionInnerProjectInfoInner[] $projectInfo
     * @return self
     */
    public function setProjectInfo(?array $projectInfo): self
    {
        $this->projectInfo = $projectInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adjustInfo !== null) {
            $result['adjust_info'] = $this->adjustInfo;
        }
        if ($this->packageName !== null) {
            $result['package_name'] = $this->packageName;
        }
        if ($this->projectInfo !== null) {
            $result['project_info'] = $this->projectInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adjust_info'] ?? null) !== null && is_array($v)) {
            $obj->adjustInfo = array_map(fn ($vv) => \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestionPackageSuggestionInnerAdjustInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['package_name'] ?? null) !== null) {
            $obj->packageName = (string) $v;
        }
        if (($v = $data['project_info'] ?? null) !== null && is_array($v)) {
            $obj->projectInfo = array_map(fn ($vv) => \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestionPackageSuggestionInnerProjectInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
