<p>
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#search-user-form" role="button"
        aria-expanded="false" aria-controls="search-textbook-form">
        会員検索
    </a>
</p>

<div class="collapse" id="search-user-form">
    <div class="card card-body">

        <dl>
            <dt>会員名</dt>
            <dd>
                <input class="form-control" type="text" name="name" value="{{ request('name') }}" placeholder="会員名">
            </dd>
            <dt>住所</dt>
            <dd>
                <input class="form-control" type="text" name="address" value="{{ request('address') }}"
                    placeholder="住所">
            </dd>
            <dt>電話番号</dt>
            <dd>
                <input class="form-control" type="text" name="tel" value="{{ request('tel') }}" placeholder="電話番号">
            </dd>
            <dt>メールアドレス</dt>
            <dd>
                <input class="form-control" type="text" name="email" value="{{ request('email') }}"
                    placeholder="メールアドレス">
            </dd>
            <dt>管理者権限</dt>
            <dd>
                <input class="form-check-input" type="checkbox" name="admin" value="{{ request('admin') }}">
            </dd>
        </dl>

        <button type="submit" class="btn btn-primary">検索</button>

    </div>
</div>
