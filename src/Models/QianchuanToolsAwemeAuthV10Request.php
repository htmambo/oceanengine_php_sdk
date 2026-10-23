<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanToolsAwemeAuthV10Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\QianchuanToolsAwemeAuthV10AuthType
     */
    protected ?string $authType = null;

    /**
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * @var string
     */
    protected ?string $awemeShowId = null;

    /**
     * @var string
     */
    protected ?string $code = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 用户备注
     * @var string
     */
    protected ?string $notes = null;

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
     * @return \Oceanengine\Models\QianchuanToolsAwemeAuthV10AuthType
     */
    public function getAuthType(): ?string
    {
        return $this->authType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanToolsAwemeAuthV10AuthType $authType
     * @return self
     */
    public function setAuthType(?string $authType): self
    {
        $this->authType = $authType;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeShowId(): ?string
    {
        return $this->awemeShowId;
    }

    /**
     * @param string $awemeShowId
     * @return self
     */
    public function setAwemeShowId(?string $awemeShowId): self
    {
        $this->awemeShowId = $awemeShowId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 用户备注
     * @return string
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * 用户备注
     * @param string $notes
     * @return self
     */
    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;
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
        if ($this->authType !== null) {
            $result['auth_type'] = $this->authType;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->awemeShowId !== null) {
            $result['aweme_show_id'] = $this->awemeShowId;
        }
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->notes !== null) {
            $result['notes'] = $this->notes;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['auth_type'] ?? null) !== null) {
            $obj->authType = (string) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['aweme_show_id'] ?? null) !== null) {
            $obj->awemeShowId = (string) $v;
        }
        if (($v = $data['code'] ?? null) !== null) {
            $obj->code = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['notes'] ?? null) !== null) {
            $obj->notes = (string) $v;
        }
        return $obj;
    }
}
