<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAdvertiserDiagnosisSuggestionGetV30ResponseData implements \JsonSerializable
{
    /**
     * 建议卡片数据
     * @var \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInner[]
     */
    protected ?array $suggestionInfoList = null;

    /**
     * 建议卡片数据
     * @return \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInner[]
     */
    public function getSuggestionInfoList(): ?array
    {
        return $this->suggestionInfoList;
    }

    /**
     * 建议卡片数据
     * @param \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInner[] $suggestionInfoList
     * @return self
     */
    public function setSuggestionInfoList(?array $suggestionInfoList): self
    {
        $this->suggestionInfoList = $suggestionInfoList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->suggestionInfoList !== null) {
            $result['suggestion_info_list'] = $this->suggestionInfoList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['suggestion_info_list'] ?? null) !== null && is_array($v)) {
            $obj->suggestionInfoList = array_map(fn ($vv) => \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
