<p>
    Продукт - {{ $productName }}
</p>

<div class="">
    <p>
        Имя - {{ $order->name }}
    </p>
    <p>
        Телефон для связи - {{ $order->number }}
    </p>
    <p>
        Почта - {{ $order->email }}
    </p>
    <p>
         {{ $order->text_order }}
    </p>
</div>
