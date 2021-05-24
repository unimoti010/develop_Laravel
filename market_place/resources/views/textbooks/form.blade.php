@csrf
    <dl>
        <dt>題名</dt>
        <dd>
            <input type="text" name="title" value="{{ old('title', $textbook->title) }}">
        </dd>

        <dt>カテゴリ</dt>
        <dd>
            <select name="category">
                <option value="文学部系">文学部系</option>
                <option value="教育学部系">教育学部系</option>
                <option value="法学部系">法学部系</option>
                <option value="社会学部系">社会学部系</option>
                <option value="経済学部系">経済学部系</option>
                <option value="理学部系">理学部系</option>
                <option value="医学部系">医学部系</option>
                <option value="歯学部系">歯学部系</option>
                <option value="薬学部系">薬学部系</option>
                <option value="工学部系">工学部系</option>
                <option value="農学部系">農学部系</option>
            </select>
        </dd>

        <dt>著者名</dt>
        <dd>
            <input type="text" name="author" value="{{ old('author', $textbook->author) }}">
        </dd>

        <dt>出版社名</dt>
        <dd>
            <input type="text" name="publisher" value="{{ old('publisher', $textbook->publisher) }}">
        </dd>

        <dt>価格</dt>
        <dd>
            <input type="number" name="price" value="{{ old('price', $textbook->price) }}">
        </dd>

        <dt>状態</dt>
        <dd>
        <select name="state">
                <option value="非常に良い">非常に良い</option>
                <option value="良い">良い</option>
                <option value="どちらでもない">どちらでもない</option>
                <option value="悪い">悪い</option>
                <option value="非常に悪い">非常に悪い</option>
            </select>
        </dd>
    </dl>