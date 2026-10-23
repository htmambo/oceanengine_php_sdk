<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicImageMixcutCreateV30Request implements \JsonSerializable
{
    /**
     * BP账户体系:组织id，Agent账户体系:代理商id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\AicImageMixcutCreateV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * @var \Oceanengine\Models\AicImageMixcutCreateV30RequestAudioOption
     */
    protected ?\Oceanengine\Models\AicImageMixcutCreateV30RequestAudioOption $audioOption = null;

    /**
     * 生成成片的数量，最大值5
     * @var int
     */
    protected ?int $count = null;

    /**
     * @var \Oceanengine\Models\AicImageMixcutCreateV30RequestGenElement
     */
    protected ?\Oceanengine\Models\AicImageMixcutCreateV30RequestGenElement $genElement = null;

    /**
     * 图片元素id，用于视频生成，最多20个
     * @var int[]
     */
    protected ?array $imageElementIds = null;

    /**
     * 是否由自动保存所有生成结果 - true：在视频生成完成后，系统将自动保存所有结果至即创素材库；所属组织/代理下，均可见视频结果 - false：不会自动保存，后续需调用「保存任务生成的素材」保存生成结果
     * @var bool
     */
    protected ?bool $isAutoSaveAllResult = null;

    /**
     * @var \Oceanengine\Models\AicImageMixcutCreateV30RequestProductInfo
     */
    protected ?\Oceanengine\Models\AicImageMixcutCreateV30RequestProductInfo $productInfo = null;

    /**
     * @var \Oceanengine\Models\AicImageMixcutCreateV30RequestRenderOption
     */
    protected ?\Oceanengine\Models\AicImageMixcutCreateV30RequestRenderOption $renderOption = null;

    /**
     * @var \Oceanengine\Models\AicImageMixcutCreateV30RequestSubtitleStyle
     */
    protected ?\Oceanengine\Models\AicImageMixcutCreateV30RequestSubtitleStyle $subtitleStyle = null;

    /**
     * 可自定义任务名称，生成的成片均以此名称命名，最多50字，多个视频命名规则为任务名称_1-n。不传入，默认使用product_name+时间戳命名 示例:洗衣凝珠_20240809_152301
     * @var string
     */
    protected ?string $taskName = null;

    /**
     * BP账户体系:组织id，Agent账户体系:代理商id
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * BP账户体系:组织id，Agent账户体系:代理商id
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicImageMixcutCreateV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\AicImageMixcutCreateV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicImageMixcutCreateV30RequestAudioOption
     */
    public function getAudioOption(): ?\Oceanengine\Models\AicImageMixcutCreateV30RequestAudioOption
    {
        return $this->audioOption;
    }

    /**
     * @param \Oceanengine\Models\AicImageMixcutCreateV30RequestAudioOption $audioOption
     * @return self
     */
    public function setAudioOption(?\Oceanengine\Models\AicImageMixcutCreateV30RequestAudioOption $audioOption): self
    {
        $this->audioOption = $audioOption;
        return $this;
    }

    /**
     * 生成成片的数量，最大值5
     * @return int
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * 生成成片的数量，最大值5
     * @param int $count
     * @return self
     */
    public function setCount(?int $count): self
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicImageMixcutCreateV30RequestGenElement
     */
    public function getGenElement(): ?\Oceanengine\Models\AicImageMixcutCreateV30RequestGenElement
    {
        return $this->genElement;
    }

    /**
     * @param \Oceanengine\Models\AicImageMixcutCreateV30RequestGenElement $genElement
     * @return self
     */
    public function setGenElement(?\Oceanengine\Models\AicImageMixcutCreateV30RequestGenElement $genElement): self
    {
        $this->genElement = $genElement;
        return $this;
    }

    /**
     * 图片元素id，用于视频生成，最多20个
     * @return int[]
     */
    public function getImageElementIds(): ?array
    {
        return $this->imageElementIds;
    }

    /**
     * 图片元素id，用于视频生成，最多20个
     * @param int[] $imageElementIds
     * @return self
     */
    public function setImageElementIds(?array $imageElementIds): self
    {
        $this->imageElementIds = $imageElementIds;
        return $this;
    }

    /**
     * 是否由自动保存所有生成结果 - true：在视频生成完成后，系统将自动保存所有结果至即创素材库；所属组织/代理下，均可见视频结果 - false：不会自动保存，后续需调用「保存任务生成的素材」保存生成结果
     * @return bool
     */
    public function getIsAutoSaveAllResult(): ?bool
    {
        return $this->isAutoSaveAllResult;
    }

    /**
     * 是否由自动保存所有生成结果 - true：在视频生成完成后，系统将自动保存所有结果至即创素材库；所属组织/代理下，均可见视频结果 - false：不会自动保存，后续需调用「保存任务生成的素材」保存生成结果
     * @param bool $isAutoSaveAllResult
     * @return self
     */
    public function setIsAutoSaveAllResult(?bool $isAutoSaveAllResult): self
    {
        $this->isAutoSaveAllResult = $isAutoSaveAllResult;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicImageMixcutCreateV30RequestProductInfo
     */
    public function getProductInfo(): ?\Oceanengine\Models\AicImageMixcutCreateV30RequestProductInfo
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\AicImageMixcutCreateV30RequestProductInfo $productInfo
     * @return self
     */
    public function setProductInfo(?\Oceanengine\Models\AicImageMixcutCreateV30RequestProductInfo $productInfo): self
    {
        $this->productInfo = $productInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicImageMixcutCreateV30RequestRenderOption
     */
    public function getRenderOption(): ?\Oceanengine\Models\AicImageMixcutCreateV30RequestRenderOption
    {
        return $this->renderOption;
    }

    /**
     * @param \Oceanengine\Models\AicImageMixcutCreateV30RequestRenderOption $renderOption
     * @return self
     */
    public function setRenderOption(?\Oceanengine\Models\AicImageMixcutCreateV30RequestRenderOption $renderOption): self
    {
        $this->renderOption = $renderOption;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicImageMixcutCreateV30RequestSubtitleStyle
     */
    public function getSubtitleStyle(): ?\Oceanengine\Models\AicImageMixcutCreateV30RequestSubtitleStyle
    {
        return $this->subtitleStyle;
    }

    /**
     * @param \Oceanengine\Models\AicImageMixcutCreateV30RequestSubtitleStyle $subtitleStyle
     * @return self
     */
    public function setSubtitleStyle(?\Oceanengine\Models\AicImageMixcutCreateV30RequestSubtitleStyle $subtitleStyle): self
    {
        $this->subtitleStyle = $subtitleStyle;
        return $this;
    }

    /**
     * 可自定义任务名称，生成的成片均以此名称命名，最多50字，多个视频命名规则为任务名称_1-n。不传入，默认使用product_name+时间戳命名 示例:洗衣凝珠_20240809_152301
     * @return string
     */
    public function getTaskName(): ?string
    {
        return $this->taskName;
    }

    /**
     * 可自定义任务名称，生成的成片均以此名称命名，最多50字，多个视频命名规则为任务名称_1-n。不传入，默认使用product_name+时间戳命名 示例:洗衣凝珠_20240809_152301
     * @param string $taskName
     * @return self
     */
    public function setTaskName(?string $taskName): self
    {
        $this->taskName = $taskName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->audioOption !== null) {
            $result['audio_option'] = $this->audioOption;
        }
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        if ($this->genElement !== null) {
            $result['gen_element'] = $this->genElement;
        }
        if ($this->imageElementIds !== null) {
            $result['image_element_ids'] = $this->imageElementIds;
        }
        if ($this->isAutoSaveAllResult !== null) {
            $result['is_auto_save_all_result'] = $this->isAutoSaveAllResult;
        }
        if ($this->productInfo !== null) {
            $result['product_info'] = $this->productInfo;
        }
        if ($this->renderOption !== null) {
            $result['render_option'] = $this->renderOption;
        }
        if ($this->subtitleStyle !== null) {
            $result['subtitle_style'] = $this->subtitleStyle;
        }
        if ($this->taskName !== null) {
            $result['task_name'] = $this->taskName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['audio_option'] ?? null) !== null && is_array($v)) {
            $obj->audioOption = \Oceanengine\Models\AicImageMixcutCreateV30RequestAudioOption::fromArray($v);
        }
        if (($v = $data['count'] ?? null) !== null) {
            $obj->count = (int) $v;
        }
        if (($v = $data['gen_element'] ?? null) !== null && is_array($v)) {
            $obj->genElement = \Oceanengine\Models\AicImageMixcutCreateV30RequestGenElement::fromArray($v);
        }
        if (($v = $data['image_element_ids'] ?? null) !== null && is_array($v)) {
            $obj->imageElementIds = $v;
        }
        if (($v = $data['is_auto_save_all_result'] ?? null) !== null) {
            $obj->isAutoSaveAllResult = (bool) $v;
        }
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = \Oceanengine\Models\AicImageMixcutCreateV30RequestProductInfo::fromArray($v);
        }
        if (($v = $data['render_option'] ?? null) !== null && is_array($v)) {
            $obj->renderOption = \Oceanengine\Models\AicImageMixcutCreateV30RequestRenderOption::fromArray($v);
        }
        if (($v = $data['subtitle_style'] ?? null) !== null && is_array($v)) {
            $obj->subtitleStyle = \Oceanengine\Models\AicImageMixcutCreateV30RequestSubtitleStyle::fromArray($v);
        }
        if (($v = $data['task_name'] ?? null) !== null) {
            $obj->taskName = (string) $v;
        }
        return $obj;
    }
}
