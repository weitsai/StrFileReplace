# 把 str 特效清空
str 字幕檔，許多人會使用一些特效例如 {\a3} 把字幕放在右下角，但並不是每個播放器都能吃這樣些特效，因此寫了一個簡單的程式把特效都清掉。

## File Sample (test.str)
```txt
1
00:00:07,000 --> 00:00:12,000
{\an3}{\pos(360,230)} weitsai
```

## 使用 strFileReplace
```php
php strFileReplace.php test.str
```

## 輸出
```txt
1
00:00:07,000 --> 00:00:12,000
weitsai
```