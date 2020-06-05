[README](README.md) | [中文文檔](README_zh.md)

# 自動更新荒野亂鬥杯數的網頁

# 這是什麼

這是一個透過php執行的網頁
你每5秒鐘可以取得你的遊戲杯數

# 如何安裝

編輯 trophies.php 中的token

你可以在 https://developer.brawlstars.com/ 取得token

將檔案上傳至php伺服器

使用 https://yourdomain/trophies.php?tag=你的玩家標籤 來瀏覽

# 示範

示範: https://api.yiy.tw/BrawlStars/trophies.php
![image](https://github.com/SteveYiGame/BrawlStars-Auto-Update-Trophies/blob/master/img/ScreenShot01.png)
![image](https://github.com/SteveYiGame/BrawlStars-Auto-Update-Trophies/blob/master/img/ScreenShot02.png)
![image](https://github.com/SteveYiGame/BrawlStars-Auto-Update-Trophies/blob/master/img/ScreenShot03.png)

加入SteveYi Gaming的DISCORD伺服器: https://steveyigame.com/discord

# 更新日誌
```
2020.05.02
修復部分程式碼
優化部分程式碼
修正網頁標題

2020.05.03
當沒有輸入玩家標籤時，會回傳 "請輸入玩家標籤" 並出現表格讓使用者輸入
當玩家標籤錯誤時，會回傳 "你輸入的玩家標籤錯誤" 並出現表格讓使用者輸入
當遊戲或API正在維護時，會回傳 "官方正在維護"

2020.05.07
新增外部CSS
優化代碼
```
