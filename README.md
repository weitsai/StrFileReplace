# 把 str 特效清空

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