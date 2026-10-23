<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAudienceCreateByFileV10Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $audienceGroup = null;

    /**
     * @var string
     */
    protected ?string $audienceName = null;

    /**
     * @var int
     */
    protected ?int $dataType = null;

    /**
     * @var string
     */
    protected ?string $fileKey = null;

    /**
     * @var \Oceanengine\Models\QianchuanAudienceCreateByFileV10MatchType
     */
    protected ?string $matchType = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAudienceGroup(): ?string
    {
        return $this->audienceGroup;
    }

    /**
     * @param string $audienceGroup
     * @return self
     */
    public function setAudienceGroup(?string $audienceGroup): self
    {
        $this->audienceGroup = $audienceGroup;
        return $this;
    }

    /**
     * @return string
     */
    public function getAudienceName(): ?string
    {
        return $this->audienceName;
    }

    /**
     * @param string $audienceName
     * @return self
     */
    public function setAudienceName(?string $audienceName): self
    {
        $this->audienceName = $audienceName;
        return $this;
    }

    /**
     * @return int
     */
    public function getDataType(): ?int
    {
        return $this->dataType;
    }

    /**
     * @param int $dataType
     * @return self
     */
    public function setDataType(?int $dataType): self
    {
        $this->dataType = $dataType;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileKey(): ?string
    {
        return $this->fileKey;
    }

    /**
     * @param string $fileKey
     * @return self
     */
    public function setFileKey(?string $fileKey): self
    {
        $this->fileKey = $fileKey;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAudienceCreateByFileV10MatchType
     */
    public function getMatchType(): ?string
    {
        return $this->matchType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAudienceCreateByFileV10MatchType $matchType
     * @return self
     */
    public function setMatchType(?string $matchType): self
    {
        $this->matchType = $matchType;
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
        if ($this->audienceGroup !== null) {
            $result['audience_group'] = $this->audienceGroup;
        }
        if ($this->audienceName !== null) {
            $result['audience_name'] = $this->audienceName;
        }
        if ($this->dataType !== null) {
            $result['data_type'] = $this->dataType;
        }
        if ($this->fileKey !== null) {
            $result['file_key'] = $this->fileKey;
        }
        if ($this->matchType !== null) {
            $result['match_type'] = $this->matchType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['audience_group'] ?? null) !== null) {
            $obj->audienceGroup = (string) $v;
        }
        if (($v = $data['audience_name'] ?? null) !== null) {
            $obj->audienceName = (string) $v;
        }
        if (($v = $data['data_type'] ?? null) !== null) {
            $obj->dataType = (int) $v;
        }
        if (($v = $data['file_key'] ?? null) !== null) {
            $obj->fileKey = (string) $v;
        }
        if (($v = $data['match_type'] ?? null) !== null) {
            $obj->matchType = (string) $v;
        }
        return $obj;
    }
}
