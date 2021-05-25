<dl>
    <dt>教科書名</dt>
    <dd>
        <input type="text" name="title" value="{{ request('title') }}" placeholder="教科書名">
    </dd>
    <dt>カテゴリ</dt>
    <dd>
        <input type="text" name="category" value="{{ request('category') }}" placeholder="カテゴリ">
    </dd>
    <dt>著者名</dt>
    <dd>
        <input type="text" name="author" value="{{ request('author')}}" placeholder="著者名">
    </dd>
    <dt>出版社</dt>
    <dd>
        <input type="text" name="publisher" value="{{request('publisher')}}" placeholder="出版社">
    </dd>
    <dt>価格</dt>
    <dd>
        <input type="number" name="price_min" value="{{ request('price_min') }}" placeholder="円">
        〜
        <input type="number" name="price_max" value="{{ request('price_max') }}" placeholder="円">
    </dd>
    <dt>本の状態</dt>
    <dd>
        <input type="text" name="state" value="{{ request('state') }}">
    </dd>
</dl>
