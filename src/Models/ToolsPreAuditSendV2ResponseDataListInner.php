<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPreAuditSendV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 前置预审物料 - 文本物料：用户上传文本 - 图片物料：用户上传图片链接或图片ID - 视频物料：用户上传的视频云ID - 落地页物料： 用户上传落地页URL
     * @var string
     */
    protected ?string $content = null;

    /**
     * 前置预审ID
     * @var int
     */
    protected ?int $preAuditId = null;

    /**
     * @var \Oceanengine\Models\ToolsPreAuditSendV2DataListType
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
     * 前置预审ID
     * @return int
     */
    public function getPreAuditId(): ?int
    {
        return $this->preAuditId;
    }

    /**
     * 前置预审ID
     * @param int $preAuditId
     * @return self
     */
    public function setPreAuditId(?int $preAuditId): self
    {
        $this->preAuditId = $preAuditId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPreAuditSendV2DataListType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\ToolsPreAuditSendV2DataListType $type
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
        if ($this->preAuditId !== null) {
            $result['pre_audit_id'] = $this->preAuditId;
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
        if (($v = $data['pre_audit_id'] ?? null) !== null) {
            $obj->preAuditId = (int) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
