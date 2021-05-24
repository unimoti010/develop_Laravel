<dl>
    <dt>価格</dt>
    <dd>
        <input type="number" name="price_min" value="{{ request('price_min') }}" placeholder="円">
        〜
        <input type="number" name="price_max" value="{{ request('price_max') }}" placeholder="円">
    </dd>
    <dt>キーワード</dt>
    <dd>
        <input type="text" name="keyword" value="{{ request('keyword') }}" placeholder="キーワード">
    </dd>
</dl>
