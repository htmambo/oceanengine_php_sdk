<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalConsultAwameListGetV30ResponseDataConsultAwemeListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalConsultAwameListGetV30DataConsultAwemeListAuthType
     */
    protected ?string $authType = null;

    /**
     * @var string
     */
    protected ?string $awemeAvatar = null;

    /**
     * @var string
     */
    protected ?string $awemeName = null;

    /**
     * 私信承接抖音号
     * @var string
     */
    protected ?string $consultAwemeUid = null;

    /**
     * @return \Oceanengine\Models\LocalConsultAwameListGetV30DataConsultAwemeListAuthType
     */
    public function getAuthType(): ?string
    {
        return $this->authType;
    }

    /**
     * @param \Oceanengine\Models\LocalConsultAwameListGetV30DataConsultAwemeListAuthType $authType
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
    public function getAwemeAvatar(): ?string
    {
        return $this->awemeAvatar;
    }

    /**
     * @param string $awemeAvatar
     * @return self
     */
    public function setAwemeAvatar(?string $awemeAvatar): self
    {
        $this->awemeAvatar = $awemeAvatar;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeName(): ?string
    {
        return $this->awemeName;
    }

    /**
     * @param string $awemeName
     * @return self
     */
    public function setAwemeName(?string $awemeName): self
    {
        $this->awemeName = $awemeName;
        return $this;
    }

    /**
     * 私信承接抖音号
     * @return string
     */
    public function getConsultAwemeUid(): ?string
    {
        return $this->consultAwemeUid;
    }

    /**
     * 私信承接抖音号
     * @param string $consultAwemeUid
     * @return self
     */
    public function setConsultAwemeUid(?string $consultAwemeUid): self
    {
        $this->consultAwemeUid = $consultAwemeUid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authType !== null) {
            $result['auth_type'] = $this->authType;
        }
        if ($this->awemeAvatar !== null) {
            $result['aweme_avatar'] = $this->awemeAvatar;
        }
        if ($this->awemeName !== null) {
            $result['aweme_name'] = $this->awemeName;
        }
        if ($this->consultAwemeUid !== null) {
            $result['consult_aweme_uid'] = $this->consultAwemeUid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auth_type'] ?? null) !== null) {
            $obj->authType = (string) $v;
        }
        if (($v = $data['aweme_avatar'] ?? null) !== null) {
            $obj->awemeAvatar = (string) $v;
        }
        if (($v = $data['aweme_name'] ?? null) !== null) {
            $obj->awemeName = (string) $v;
        }
        if (($v = $data['consult_aweme_uid'] ?? null) !== null) {
            $obj->consultAwemeUid = (string) $v;
        }
        return $obj;
    }
}
