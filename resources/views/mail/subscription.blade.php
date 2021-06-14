Шановний клiэнт, товар {{ $product->name }} зявився в наявностi.

<a href="{{ route('product', [$product->category->code, $product->code]) }}">Дiзнатися деталi</a>