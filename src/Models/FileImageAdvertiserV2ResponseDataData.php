<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileImageAdvertiserV2ResponseDataData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $attachmentId = null;

    /**
     * @var string
     */
    protected ?string $id = null;

    /**
     * @var string
     */
    protected ?string $url = null;

    /**
     * @return int
     */
    public function getAttachmentId(): ?int
    {
        return $this->attachmentId;
    }

    /**
     * @param int $attachmentId
     * @return self
     */
    public function setAttachmentId(?int $attachmentId): self
    {
        $this->attachmentId = $attachmentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->attachmentId !== null) {
            $result['attachment_id'] = $this->attachmentId;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['attachment_id'] ?? null) !== null) {
            $obj->attachmentId = (int) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
