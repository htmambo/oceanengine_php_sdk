<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOrderCreateV30RequestTargeting implements \JsonSerializable
{
    /**
     * 年龄，允许值：若不传值，则默认为不限 AGE_BETWEEN_18_23：18-23岁、 AGE_BETWEEN_24_30：24-30岁、 AGE_BETWEEN_31_40：31-40岁、 AGE_BETWEEN_41_49：41-49岁 注意：仅想吸引的观众类型为”CUSTOM”时，有效
     * @var \Oceanengine\Models\DouplusOrderCreateV30TargetingAge[]
     */
    protected ?array $age = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderCreateV30TargetingAudienceMode
     */
    protected ?string $audienceMode = null;

    /**
     * 具体定向包id 注意：想吸引的观众类型为”AUDIENCE_PKG”时，必填
     * @var int
     */
    protected ?int $audiencePkgId = null;

    /**
     * 定向人群包ID（需客户从网页版查询获取） 注意：仅想吸引的观众类型为”DMP_PKG”时，有效
     * @var int[]
     */
    protected ?array $dmpPkgIds = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderCreateV30TargetingGender
     */
    protected ?string $gender = null;

    /**
     * 年龄，允许值：若不传值，则默认为不限 AGE_BETWEEN_18_23：18-23岁、 AGE_BETWEEN_24_30：24-30岁、 AGE_BETWEEN_31_40：31-40岁、 AGE_BETWEEN_41_49：41-49岁 注意：仅想吸引的观众类型为”CUSTOM”时，有效
     * @return \Oceanengine\Models\DouplusOrderCreateV30TargetingAge[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * 年龄，允许值：若不传值，则默认为不限 AGE_BETWEEN_18_23：18-23岁、 AGE_BETWEEN_24_30：24-30岁、 AGE_BETWEEN_31_40：31-40岁、 AGE_BETWEEN_41_49：41-49岁 注意：仅想吸引的观众类型为”CUSTOM”时，有效
     * @param \Oceanengine\Models\DouplusOrderCreateV30TargetingAge[] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderCreateV30TargetingAudienceMode
     */
    public function getAudienceMode(): ?string
    {
        return $this->audienceMode;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderCreateV30TargetingAudienceMode $audienceMode
     * @return self
     */
    public function setAudienceMode(?string $audienceMode): self
    {
        $this->audienceMode = $audienceMode;
        return $this;
    }

    /**
     * 具体定向包id 注意：想吸引的观众类型为”AUDIENCE_PKG”时，必填
     * @return int
     */
    public function getAudiencePkgId(): ?int
    {
        return $this->audiencePkgId;
    }

    /**
     * 具体定向包id 注意：想吸引的观众类型为”AUDIENCE_PKG”时，必填
     * @param int $audiencePkgId
     * @return self
     */
    public function setAudiencePkgId(?int $audiencePkgId): self
    {
        $this->audiencePkgId = $audiencePkgId;
        return $this;
    }

    /**
     * 定向人群包ID（需客户从网页版查询获取） 注意：仅想吸引的观众类型为”DMP_PKG”时，有效
     * @return int[]
     */
    public function getDmpPkgIds(): ?array
    {
        return $this->dmpPkgIds;
    }

    /**
     * 定向人群包ID（需客户从网页版查询获取） 注意：仅想吸引的观众类型为”DMP_PKG”时，有效
     * @param int[] $dmpPkgIds
     * @return self
     */
    public function setDmpPkgIds(?array $dmpPkgIds): self
    {
        $this->dmpPkgIds = $dmpPkgIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderCreateV30TargetingGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderCreateV30TargetingGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->age !== null) {
            $result['age'] = $this->age;
        }
        if ($this->audienceMode !== null) {
            $result['audience_mode'] = $this->audienceMode;
        }
        if ($this->audiencePkgId !== null) {
            $result['audience_pkg_id'] = $this->audiencePkgId;
        }
        if ($this->dmpPkgIds !== null) {
            $result['dmp_pkg_ids'] = $this->dmpPkgIds;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['age'] ?? null) !== null && is_array($v)) {
            $obj->age = $v;
        }
        if (($v = $data['audience_mode'] ?? null) !== null) {
            $obj->audienceMode = (string) $v;
        }
        if (($v = $data['audience_pkg_id'] ?? null) !== null) {
            $obj->audiencePkgId = (int) $v;
        }
        if (($v = $data['dmp_pkg_ids'] ?? null) !== null && is_array($v)) {
            $obj->dmpPkgIds = $v;
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (string) $v;
        }
        return $obj;
    }
}
