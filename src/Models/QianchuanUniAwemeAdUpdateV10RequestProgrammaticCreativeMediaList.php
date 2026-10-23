<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaList implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaListBlockVideoMaterialInner[]
     */
    protected ?array $blockVideoMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaListTitleMaterialInner[]
     */
    protected ?array $titleMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaListVideoMaterialInner[]
     */
    protected ?array $videoMaterial = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaListBlockVideoMaterialInner[]
     */
    public function getBlockVideoMaterial(): ?array
    {
        return $this->blockVideoMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaListBlockVideoMaterialInner[] $blockVideoMaterial
     * @return self
     */
    public function setBlockVideoMaterial(?array $blockVideoMaterial): self
    {
        $this->blockVideoMaterial = $blockVideoMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaListTitleMaterialInner[]
     */
    public function getTitleMaterial(): ?array
    {
        return $this->titleMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaListTitleMaterialInner[] $titleMaterial
     * @return self
     */
    public function setTitleMaterial(?array $titleMaterial): self
    {
        $this->titleMaterial = $titleMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaListVideoMaterialInner[]
     */
    public function getVideoMaterial(): ?array
    {
        return $this->videoMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaListVideoMaterialInner[] $videoMaterial
     * @return self
     */
    public function setVideoMaterial(?array $videoMaterial): self
    {
        $this->videoMaterial = $videoMaterial;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->blockVideoMaterial !== null) {
            $result['block_video_material'] = $this->blockVideoMaterial;
        }
        if ($this->titleMaterial !== null) {
            $result['title_material'] = $this->titleMaterial;
        }
        if ($this->videoMaterial !== null) {
            $result['video_material'] = $this->videoMaterial;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['block_video_material'] ?? null) !== null && is_array($v)) {
            $obj->blockVideoMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaListBlockVideoMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['title_material'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaListTitleMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['video_material'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaListVideoMaterialInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
