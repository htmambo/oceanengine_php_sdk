<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryQualificationSubmitV30RequestQualificationsInner implements \JsonSerializable
{
    /**
     * 图片附件ids，通过【上传资质图片】接口获取
     * @var int[]
     */
    protected ?array $attachmentIds = null;

    /**
     * 资质id ① 针对新增的场景传0即可  ② 提投放资质（单资质）时系统会返回生成的qualification_id，针对编辑的场景，再此传入对应需要编辑的qualification_id即可
     * @var int
     */
    protected ?int $qualificationId = null;

    /**
     * @var \Oceanengine\Models\AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType
     */
    protected ?string $qualificationType = null;

    /**
     * 图片附件ids，通过【上传资质图片】接口获取
     * @return int[]
     */
    public function getAttachmentIds(): ?array
    {
        return $this->attachmentIds;
    }

    /**
     * 图片附件ids，通过【上传资质图片】接口获取
     * @param int[] $attachmentIds
     * @return self
     */
    public function setAttachmentIds(?array $attachmentIds): self
    {
        $this->attachmentIds = $attachmentIds;
        return $this;
    }

    /**
     * 资质id ① 针对新增的场景传0即可  ② 提投放资质（单资质）时系统会返回生成的qualification_id，针对编辑的场景，再此传入对应需要编辑的qualification_id即可
     * @return int
     */
    public function getQualificationId(): ?int
    {
        return $this->qualificationId;
    }

    /**
     * 资质id ① 针对新增的场景传0即可  ② 提投放资质（单资质）时系统会返回生成的qualification_id，针对编辑的场景，再此传入对应需要编辑的qualification_id即可
     * @param int $qualificationId
     * @return self
     */
    public function setQualificationId(?int $qualificationId): self
    {
        $this->qualificationId = $qualificationId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType
     */
    public function getQualificationType(): ?string
    {
        return $this->qualificationType;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType $qualificationType
     * @return self
     */
    public function setQualificationType(?string $qualificationType): self
    {
        $this->qualificationType = $qualificationType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->attachmentIds !== null) {
            $result['attachment_ids'] = $this->attachmentIds;
        }
        if ($this->qualificationId !== null) {
            $result['qualification_id'] = $this->qualificationId;
        }
        if ($this->qualificationType !== null) {
            $result['qualification_type'] = $this->qualificationType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['attachment_ids'] ?? null) !== null && is_array($v)) {
            $obj->attachmentIds = $v;
        }
        if (($v = $data['qualification_id'] ?? null) !== null) {
            $obj->qualificationId = (int) $v;
        }
        if (($v = $data['qualification_type'] ?? null) !== null) {
            $obj->qualificationType = (string) $v;
        }
        return $obj;
    }
}
