# Theater
## 	組員名單： B10417023	陳建佑
	
## 重建環境：
1. 安裝"Xampp"後，先開啟"XAMPP Control Panel"將"Apache"和"MySQL" start。
2. 將檔案放到"C:\xampp\htdocs\theater"目錄下。
3. 在網址列打入[http://localhost/phpmyadmin](http://localhost/phpmyadmin)，點擊"資料庫"，新建資料庫名稱"theater"，編碼與排序選擇"utf8_general_ci"，點擊"建立"。
4. 新增使用者，帳號為admin，主機為localhost，密碼為0000，全域權限全選，"點擊執行"。
----
* 新增使用者可能遇到的錯誤訊息:SHOW PLUGINS SONAME LIKE %_password_check%'，解決方法：用檔案管理員新增以下路徑"C:\xampp\mysql\lib\plugin"
----
5. 到資料庫"theater"後，點擊"匯入-選擇檔案-theater.sql"後，點"執行"。
6. 到"XAMPP Control Panel"內，點"Apache"的"Config"，選"PHP(php.ini)"。將";short_open_tag = Off"改為"short_open_tag = On"。
7. 匯入成功之後到[http://localhost/theater/](http://localhost/theater/)即可看到網頁。