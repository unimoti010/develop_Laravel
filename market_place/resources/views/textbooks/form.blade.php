@csrf
    <dl>
        <dt>題名</dt>
        <dd>
            <input type="text" class="form-control" name="title" value="{{ old('title', $textbook->title) }}">
        </dd>

        <dt>カテゴリ</dt>
        <dd>
            <select class="form-control" name="category">
                <option value="文学部系" @if(old('category')=='文学部系') selected  @endif {{ $textbook->category =='文学部系'?'selected':''}}>文学部系</option>
                <option value="教育学部系" @if(old('category')=='教育学部系') selected  @endif {{ $textbook->category =='教育学部系'?'selected':''}}>教育学部系</option>
                <option value="法学部系" @if(old('category')=='法学部系') selected  @endif {{ $textbook->category =='法学部系'?'selected':''}}>法学部系</option>
                <option value="社会学部系" @if(old('category')=='社会学部系') selected  @endif {{ $textbook->category =='社会学部系'?'selected':''}}>社会学部系</option>
                <option value="経済学部系" @if(old('category')=='経済学部系') selected  @endif {{ $textbook->category =='経済学部系'?'selected':''}}>経済学部系</option>
                <option value="理学部系" @if(old('category')=='理学部系') selected  @endif {{ $textbook->category =='理学部系'?'selected':''}}>理学部系</option>
                <option value="医学部系" @if(old('category')=='医学部系') selected  @endif {{ $textbook->category =='医学部系'?'selected':''}}>医学部系</option>
                <option value="歯学部系" @if(old('category')=='歯学部系') selected  @endif {{ $textbook->category =='歯学部系'?'selected':''}}>歯学部系</option>
                <option value="薬学部系" @if(old('category')=='薬学部系') selected  @endif {{ $textbook->category =='薬学部系'?'selected':''}}>薬学部系</option>
                <option value="工学部系" @if(old('category')=='工学部系') selected  @endif {{ $textbook->category =='工学部系'?'selected':''}}>工学部系</option>
                <option value="農学部系" @if(old('category')=='農学部系') selected  @endif {{ $textbook->category =='農学部系'?'selected':''}}>農学部系</option>
            </select>
        </dd>

        <dt>著者名</dt>
        <dd>
            <input type="text" class="form-control" name="author" value="{{ old('author', $textbook->author) }}">
        </dd>

        <dt>出版社名</dt>
        <dd>
            <input type="text" class="form-control" name="publisher" value="{{ old('publisher', $textbook->publisher) }}">
        </dd>

        <dt>価格</dt>
        <dd>
            <input type="number" class="form-control" name="price" value="{{ old('price', $textbook->price) }}">
        </dd>

        <dt>状態</dt>
        <dd>
        <select class="form-control" name="state">
                <option value="非常に良い" @if(old('state')=='非常に良い') selected  @endif {{ $textbook->state =='非常に良い'?'selected':''}}>非常に良い</option>
                <option value="良い" @if(old('state')=='良い') selected  @endif {{ $textbook->state =='良い'?'selected':''}}>良い</option>
                <option value="どちらでもない" @if(old('state')=='どちらでもない') selected  @endif {{ $textbook->state =='どちらでもない'?'selected':''}}>どちらでもない</option>
                <option value="悪い" @if(old('state')=='悪い') selected  @endif {{ $textbook->state =='悪い'?'selected':''}}>悪い</option>
                <option value="非常に悪い" @if(old('state')=='非常に悪い') selected  @endif {{ $textbook->state =='非常に悪い'?'selected':''}}>非常に悪い</option>
            </select>
        </dd>
    </dl>