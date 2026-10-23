<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class InvoiceDownloadUrlListV30ResponseDataApplyOrderListInner implements \JsonSerializable
{
    /**
     * 发票申请单编号
     * @var string
     */
    protected ?string $invoiceApplySerial = null;

    /**
     * 税务发票号码
     * @var string
     */
    protected ?string $invoiceNo = null;

    /**
     * 发票下载地址
     * @var string
     */
    protected ?string $url = null;

    /**
     * 发票申请单编号
     * @return string
     */
    public function getInvoiceApplySerial(): ?string
    {
        return $this->invoiceApplySerial;
    }

    /**
     * 发票申请单编号
     * @param string $invoiceApplySerial
     * @return self
     */
    public function setInvoiceApplySerial(?string $invoiceApplySerial): self
    {
        $this->invoiceApplySerial = $invoiceApplySerial;
        return $this;
    }

    /**
     * 税务发票号码
     * @return string
     */
    public function getInvoiceNo(): ?string
    {
        return $this->invoiceNo;
    }

    /**
     * 税务发票号码
     * @param string $invoiceNo
     * @return self
     */
    public function setInvoiceNo(?string $invoiceNo): self
    {
        $this->invoiceNo = $invoiceNo;
        return $this;
    }

    /**
     * 发票下载地址
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 发票下载地址
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
        if ($this->invoiceApplySerial !== null) {
            $result['invoice_apply_serial'] = $this->invoiceApplySerial;
        }
        if ($this->invoiceNo !== null) {
            $result['invoice_no'] = $this->invoiceNo;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['invoice_apply_serial'] ?? null) !== null) {
            $obj->invoiceApplySerial = (string) $v;
        }
        if (($v = $data['invoice_no'] ?? null) !== null) {
            $obj->invoiceNo = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
