<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $expireTimestamp = null;

    /**
     * 建议名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestion
     */
    protected ?\Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestion $sevenDaysRoiSuggestion = null;

    /**
     * @var \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSuggestionCategory
     */
    protected ?string $suggestionCategory = null;

    /**
     * 建议内容
     * @var string
     */
    protected ?string $suggestionContent = null;

    /**
     * 建议类型
     * @var string
     */
    protected ?string $suggestionId = null;

    /**
     * 建议介绍
     * @var string
     */
    protected ?string $suggestionIntro = null;

    /**
     * 预估效果文案
     * @var string
     */
    protected ?string $suggestionPredictContent = null;

    /**
     * 建议标签
     * @var int
     */
    protected ?int $suggestionTag = null;

    /**
     * @var \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSuggestionType
     */
    protected ?string $suggestionType = null;

    /**
     * @return string
     */
    public function getExpireTimestamp(): ?string
    {
        return $this->expireTimestamp;
    }

    /**
     * @param string $expireTimestamp
     * @return self
     */
    public function setExpireTimestamp(?string $expireTimestamp): self
    {
        $this->expireTimestamp = $expireTimestamp;
        return $this;
    }

    /**
     * 建议名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 建议名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestion
     */
    public function getSevenDaysRoiSuggestion(): ?\Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestion
    {
        return $this->sevenDaysRoiSuggestion;
    }

    /**
     * @param \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestion $sevenDaysRoiSuggestion
     * @return self
     */
    public function setSevenDaysRoiSuggestion(?\Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestion $sevenDaysRoiSuggestion): self
    {
        $this->sevenDaysRoiSuggestion = $sevenDaysRoiSuggestion;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSuggestionCategory
     */
    public function getSuggestionCategory(): ?string
    {
        return $this->suggestionCategory;
    }

    /**
     * @param \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSuggestionCategory $suggestionCategory
     * @return self
     */
    public function setSuggestionCategory(?string $suggestionCategory): self
    {
        $this->suggestionCategory = $suggestionCategory;
        return $this;
    }

    /**
     * 建议内容
     * @return string
     */
    public function getSuggestionContent(): ?string
    {
        return $this->suggestionContent;
    }

    /**
     * 建议内容
     * @param string $suggestionContent
     * @return self
     */
    public function setSuggestionContent(?string $suggestionContent): self
    {
        $this->suggestionContent = $suggestionContent;
        return $this;
    }

    /**
     * 建议类型
     * @return string
     */
    public function getSuggestionId(): ?string
    {
        return $this->suggestionId;
    }

    /**
     * 建议类型
     * @param string $suggestionId
     * @return self
     */
    public function setSuggestionId(?string $suggestionId): self
    {
        $this->suggestionId = $suggestionId;
        return $this;
    }

    /**
     * 建议介绍
     * @return string
     */
    public function getSuggestionIntro(): ?string
    {
        return $this->suggestionIntro;
    }

    /**
     * 建议介绍
     * @param string $suggestionIntro
     * @return self
     */
    public function setSuggestionIntro(?string $suggestionIntro): self
    {
        $this->suggestionIntro = $suggestionIntro;
        return $this;
    }

    /**
     * 预估效果文案
     * @return string
     */
    public function getSuggestionPredictContent(): ?string
    {
        return $this->suggestionPredictContent;
    }

    /**
     * 预估效果文案
     * @param string $suggestionPredictContent
     * @return self
     */
    public function setSuggestionPredictContent(?string $suggestionPredictContent): self
    {
        $this->suggestionPredictContent = $suggestionPredictContent;
        return $this;
    }

    /**
     * 建议标签
     * @return int
     */
    public function getSuggestionTag(): ?int
    {
        return $this->suggestionTag;
    }

    /**
     * 建议标签
     * @param int $suggestionTag
     * @return self
     */
    public function setSuggestionTag(?int $suggestionTag): self
    {
        $this->suggestionTag = $suggestionTag;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSuggestionType
     */
    public function getSuggestionType(): ?string
    {
        return $this->suggestionType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSuggestionType $suggestionType
     * @return self
     */
    public function setSuggestionType(?string $suggestionType): self
    {
        $this->suggestionType = $suggestionType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->expireTimestamp !== null) {
            $result['expire_timestamp'] = $this->expireTimestamp;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->sevenDaysRoiSuggestion !== null) {
            $result['seven_days_roi_suggestion'] = $this->sevenDaysRoiSuggestion;
        }
        if ($this->suggestionCategory !== null) {
            $result['suggestion_category'] = $this->suggestionCategory;
        }
        if ($this->suggestionContent !== null) {
            $result['suggestion_content'] = $this->suggestionContent;
        }
        if ($this->suggestionId !== null) {
            $result['suggestion_id'] = $this->suggestionId;
        }
        if ($this->suggestionIntro !== null) {
            $result['suggestion_intro'] = $this->suggestionIntro;
        }
        if ($this->suggestionPredictContent !== null) {
            $result['suggestion_predict_content'] = $this->suggestionPredictContent;
        }
        if ($this->suggestionTag !== null) {
            $result['suggestion_tag'] = $this->suggestionTag;
        }
        if ($this->suggestionType !== null) {
            $result['suggestion_type'] = $this->suggestionType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['expire_timestamp'] ?? null) !== null) {
            $obj->expireTimestamp = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['seven_days_roi_suggestion'] ?? null) !== null && is_array($v)) {
            $obj->sevenDaysRoiSuggestion = \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestion::fromArray($v);
        }
        if (($v = $data['suggestion_category'] ?? null) !== null) {
            $obj->suggestionCategory = (string) $v;
        }
        if (($v = $data['suggestion_content'] ?? null) !== null) {
            $obj->suggestionContent = (string) $v;
        }
        if (($v = $data['suggestion_id'] ?? null) !== null) {
            $obj->suggestionId = (string) $v;
        }
        if (($v = $data['suggestion_intro'] ?? null) !== null) {
            $obj->suggestionIntro = (string) $v;
        }
        if (($v = $data['suggestion_predict_content'] ?? null) !== null) {
            $obj->suggestionPredictContent = (string) $v;
        }
        if (($v = $data['suggestion_tag'] ?? null) !== null) {
            $obj->suggestionTag = (int) $v;
        }
        if (($v = $data['suggestion_type'] ?? null) !== null) {
            $obj->suggestionType = (string) $v;
        }
        return $obj;
    }
}
