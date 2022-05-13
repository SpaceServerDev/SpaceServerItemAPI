# SpaceServerItemAPI

## 概要　
宇宙サーバーで使用されるItemを取得できます

動作未確認

## API

アイテムを取得
```php
use \space\yurisi\SpaceServerItemAPI;
SpaceServerItemAPI::getInstance()->getItemFactory()->get($id, $amount);
```


