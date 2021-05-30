<p>
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#search-textbook-form" role="button" aria-expanded="false" aria-controls="search-textbook-form">
        教科書検索
    </a>
</p>

<div class="collapse" id="search-textbook-form">
    <div class="card card-body">
        <dl>
            <dt>教科書名</dt>
            <dd>
                <input class="form-control" type="text" name="title" value="{{ request('title') }}"
                    placeholder="教科書名">
            </dd>
            <dt>カテゴリ</dt>
            <dd>
                <select class="form-select" name="category" value="{{ request('category') }}">
                    <option value=""></option>
                    <option value="文学部系">文学部系</option>
                    <option value="教育学部系" {{ request('category') == '教育学部系' ? 'selected' : '' }}>教育学部系</option>
                    <option value="法学部系" {{ request('category') == '法学部系' ? 'selected' : '' }}>法学部系</option>
                    <option value="社会学部系" {{ request('category') == '社会学部系' ? 'selected' : '' }}>社会学部系</option>
                    <option value="経済学部系" {{ request('category') == '経済学部系' ? 'selected' : '' }}>経済学部系</option>
                    <option value="理学部系" {{ request('category') == '理学部系' ? 'selected' : '' }}>理学部系</option>
                    <option value="医学部系" {{ request('category') == '医学部系' ? 'selected' : '' }}>医学部系</option>
                    <option value="歯学部系" {{ request('category') == '歯学部系' ? 'selected' : '' }}>歯学部系</option>
                    <option value="薬学部系" {{ request('category') == '薬学部系' ? 'selected' : '' }}>薬学部系</option>
                    <option value="工学部系" {{ request('category') == '工学部系' ? 'selected' : '' }}>工学部系</option>
                    <option value="農学部系" {{ request('category') == '農学部系' ? 'selected' : '' }}>農学部系</option>
                </select>
                <!-- <input type="text" name="category" value="{{ request('category') }}" placeholder="カテゴリ"> -->
            </dd>
            <dt>著者名</dt>
            <dd>
                <input class="form-control" type="text" name="author" value="{{ request('author') }}"
                    placeholder="著者名">
            </dd>
            <dt>出版社</dt>
            <dd>
                <input class="form-control" type="text" name="publisher" value="{{ request('publisher') }}"
                    placeholder="出版社">
            </dd>
            <dt>価格</dt>
            <dd>
                <input class="form-control" type="number" name="price_min" value="{{ request('price_min') }}"
                    placeholder="円">
                〜
                <input class="form-control" type="number" name="price_max" value="{{ request('price_max') }}"
                    placeholder="円">
            </dd>
            <dt>本の状態</dt>
            <dd>
                <select class="form-control" name="state">
                    <option value=""></option>
                    <option value="非常に良い" {{ request('state') == '非常に良い' ? 'selected' : '' }}>非常に良い</option>
                    <option value="良い" {{ request('state') == '良い' ? 'selected' : '' }}>良い</option>
                    <option value="どちらでもない" {{ request('state') == 'どちらでもない' ? 'selected' : '' }}>どちらでもない</option>
                    <option value="悪い" {{ request('state') == '悪い' ? 'selected' : '' }}>悪い</option>
                    <option value="非常に悪い" {{ request('state') == '非常に悪い' ? 'selected' : '' }}>非常に悪い</option>
                </select>
            </dd>
        </dl>

        <button type="submit" class="btn btn-primary">検索</button>
    </div>
</div>
