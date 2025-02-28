<?php

namespace Pdfsystems\OrderTrackSdk\Dtos;

use DateTimeImmutable;
use Rpungello\SdkClient\DataTransferObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class SampleOrder extends DataTransferObject
{
    public ?int $id;
    public ?string $order_number;
    public ?DateTimeImmutable $date_ordered;
    public ?string $web_order_number;
    public ?string $web_order_id;
    public ?User $user;
    public bool $replenishment = false;
    public bool $entered_by_distributor = false;
    public bool $fulfilled_by_rep = false;
    public ?int $customer_id;
    public ?Customer $customer;
    public ?string $customer_name;
    public ?string $customer_street;
    public ?string $customer_street2;
    public ?string $customer_city;
    public ?State $customer_state;
    public ?string $customer_postal_code;
    public ?Country $customer_country;
    public ?string $customer_attention;
    public ?string $customer_email;
    public ?string $customer_phone;
    public ?string $sidemark;
    public ?string $comment;
    public int $sample_usage_type_id;
    public ?SampleUsage $usage_type;
    public int $sample_order_source_id;
    public bool $rush_order = false;
    public ?string $shipper_number;
    public ?string $ship_to_name;
    public ?string $ship_to_street;
    public ?string $ship_to_street2;
    public ?string $ship_to_city;
    public ?State $ship_to_state;
    public ?string $ship_to_postal_code;
    public ?Country $ship_to_country;
    public ?string $ship_to_attention;
    public ?string $ship_to_email;
    public ?string $ship_to_phone;
    /** @var SampleOrderItem[] */
    #[CastWith(ArrayCaster::class, itemType: SampleOrderItem::class)]
    public array $items = [];
}
