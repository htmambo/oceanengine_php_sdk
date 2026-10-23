<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SecurityCreateAppealV30Request implements \JsonSerializable
{
    /**
     * 广告主 ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 申诉的 ID，配合 appeal_id_type 使用
     * @var int
     */
    protected ?int $appealId = null;

    /**
     * @var \Oceanengine\Models\SecurityCreateAppealV30AppealIdType
     */
    protected ?string $appealIdType = null;

    /**
     * 申诉的素材 ID，选填，不填则针对 appeal_id 整体申诉
     * @var int[]
     */
    protected ?array $mids = null;

    /**
     * 申诉问题描述
     * @var string
     */
    protected ?string $questionDesc = null;

    /**
     * @var \Oceanengine\Models\SecurityCreateAppealV30QuestionType
     */
    protected ?string $questionType = null;

    /**
     * 广告主 ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主 ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 申诉的 ID，配合 appeal_id_type 使用
     * @return int
     */
    public function getAppealId(): ?int
    {
        return $this->appealId;
    }

    /**
     * 申诉的 ID，配合 appeal_id_type 使用
     * @param int $appealId
     * @return self
     */
    public function setAppealId(?int $appealId): self
    {
        $this->appealId = $appealId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SecurityCreateAppealV30AppealIdType
     */
    public function getAppealIdType(): ?string
    {
        return $this->appealIdType;
    }

    /**
     * @param \Oceanengine\Models\SecurityCreateAppealV30AppealIdType $appealIdType
     * @return self
     */
    public function setAppealIdType(?string $appealIdType): self
    {
        $this->appealIdType = $appealIdType;
        return $this;
    }

    /**
     * 申诉的素材 ID，选填，不填则针对 appeal_id 整体申诉
     * @return int[]
     */
    public function getMids(): ?array
    {
        return $this->mids;
    }

    /**
     * 申诉的素材 ID，选填，不填则针对 appeal_id 整体申诉
     * @param int[] $mids
     * @return self
     */
    public function setMids(?array $mids): self
    {
        $this->mids = $mids;
        return $this;
    }

    /**
     * 申诉问题描述
     * @return string
     */
    public function getQuestionDesc(): ?string
    {
        return $this->questionDesc;
    }

    /**
     * 申诉问题描述
     * @param string $questionDesc
     * @return self
     */
    public function setQuestionDesc(?string $questionDesc): self
    {
        $this->questionDesc = $questionDesc;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SecurityCreateAppealV30QuestionType
     */
    public function getQuestionType(): ?string
    {
        return $this->questionType;
    }

    /**
     * @param \Oceanengine\Models\SecurityCreateAppealV30QuestionType $questionType
     * @return self
     */
    public function setQuestionType(?string $questionType): self
    {
        $this->questionType = $questionType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->appealId !== null) {
            $result['appeal_id'] = $this->appealId;
        }
        if ($this->appealIdType !== null) {
            $result['appeal_id_type'] = $this->appealIdType;
        }
        if ($this->mids !== null) {
            $result['mids'] = $this->mids;
        }
        if ($this->questionDesc !== null) {
            $result['question_desc'] = $this->questionDesc;
        }
        if ($this->questionType !== null) {
            $result['question_type'] = $this->questionType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['appeal_id'] ?? null) !== null) {
            $obj->appealId = (int) $v;
        }
        if (($v = $data['appeal_id_type'] ?? null) !== null) {
            $obj->appealIdType = (string) $v;
        }
        if (($v = $data['mids'] ?? null) !== null && is_array($v)) {
            $obj->mids = $v;
        }
        if (($v = $data['question_desc'] ?? null) !== null) {
            $obj->questionDesc = (string) $v;
        }
        if (($v = $data['question_type'] ?? null) !== null) {
            $obj->questionType = (string) $v;
        }
        return $obj;
    }
}
