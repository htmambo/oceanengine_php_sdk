<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPreAuditSendV2RequestPreAuditMaterialsInner implements \JsonSerializable
{
    /**
     * 前置预审物料 - 文本物料：用户上传文本 - 图片物料：用户上传图片链接或图片ID - 视频物料：用户上传的视频云ID - 落地页物料： 用户上传落地页URL
     * @var string
     */
    protected ?string $content = null;

    /**
     * @var \Oceanengine\Models\ToolsPreAuditSendV2PreAuditMaterialsType
     */
    protected ?string $type = null;

    /**
     * 前置预审物料 - 文本物料：用户上传文本 - 图片物料：用户上传图片链接或图片ID - 视频物料：用户上传的视频云ID - 落地页物料： 用户上传落地页URL
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * 前置预审物料 - 文本物料：用户上传文本 - 图片物料：用户上传图片链接或图片ID - 视频物料：用户上传的视频云ID - 落地页物料： 用户上传落地页URL
     * @param string $content
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPreAuditSendV2PreAuditMaterialsType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\ToolsPreAuditSendV2PreAuditMaterialsType $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->content !== null) {
            $result['content'] = $this->content;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['content'] ?? null) !== null) {
            $obj->content = (string) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
