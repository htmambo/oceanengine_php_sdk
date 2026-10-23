<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserQualificationCreateV2V2RequestQualificationsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AdvertiserQualificationCreateV2V2QualificationsAdQualificationType
     */
    protected ?string $adQualificationType = null;

    /**
     * @var int
     */
    protected ?int $qualificationImgId = null;

    /**
     * @return \Oceanengine\Models\AdvertiserQualificationCreateV2V2QualificationsAdQualificationType
     */
    public function getAdQualificationType(): ?string
    {
        return $this->adQualificationType;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserQualificationCreateV2V2QualificationsAdQualificationType $adQualificationType
     * @return self
     */
    public function setAdQualificationType(?string $adQualificationType): self
    {
        $this->adQualificationType = $adQualificationType;
        return $this;
    }

    /**
     * @return int
     */
    public function getQualificationImgId(): ?int
    {
        return $this->qualificationImgId;
    }

    /**
     * @param int $qualificationImgId
     * @return self
     */
    public function setQualificationImgId(?int $qualificationImgId): self
    {
        $this->qualificationImgId = $qualificationImgId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adQualificationType !== null) {
            $result['ad_qualification_type'] = $this->adQualificationType;
        }
        if ($this->qualificationImgId !== null) {
            $result['qualification_img_id'] = $this->qualificationImgId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_qualification_type'] ?? null) !== null) {
            $obj->adQualificationType = (string) $v;
        }
        if (($v = $data['qualification_img_id'] ?? null) !== null) {
            $obj->qualificationImgId = (int) $v;
        }
        return $obj;
    }
}
