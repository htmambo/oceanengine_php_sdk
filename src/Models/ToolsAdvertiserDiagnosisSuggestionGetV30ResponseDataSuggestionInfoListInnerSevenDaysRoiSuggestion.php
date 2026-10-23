<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestion implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestionPackageSuggestionInner[]
     */
    protected ?array $packageSuggestion = null;

    /**
     * @return \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestionPackageSuggestionInner[]
     */
    public function getPackageSuggestion(): ?array
    {
        return $this->packageSuggestion;
    }

    /**
     * @param \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestionPackageSuggestionInner[] $packageSuggestion
     * @return self
     */
    public function setPackageSuggestion(?array $packageSuggestion): self
    {
        $this->packageSuggestion = $packageSuggestion;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->packageSuggestion !== null) {
            $result['package_suggestion'] = $this->packageSuggestion;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['package_suggestion'] ?? null) !== null && is_array($v)) {
            $obj->packageSuggestion = array_map(fn ($vv) => \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestionPackageSuggestionInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
