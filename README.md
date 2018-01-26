# Dockerでローカル環境構築

## 設定

### インストール

### アプリケーションの配置

---

## 起動・停止

### 初回起動

```
cd docker-app/docker
docker-compose up -d
```

### 停止

```
docker-compose stop
```

### 再開
```
docker-compose start
```

---

## nginx

### 設定ファイル
```
docker/nginx/nginx.conf
docker/nginx/server.conf
```

### コンテナに入る
```
docker exec -it nginx /bin/bash
```

### ログの確認
```
# access log
tail -f docker/nginx/log/access.log
# error log
tail -f docker/nginx/log/error.log
```

---

## mysql

### 接続
```
mysql -h 127.0.0.1 -u root -proot
```

### 設定ファイル
```
docker/mysql/my.cnf
```

### コンテナに入る
```
docker exec -it mysql /bin/bash
```

---

## memcached

## 接続
```
telnet localhost 11211
```

### コンテナに入る
```
docker exec -it memcached /bin/bash
```

