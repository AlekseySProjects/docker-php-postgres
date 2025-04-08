## Бэкап базы данных

### Postgres
```bash
docker compose exec **db** pg_dump -U postgres **sampledb** > "backup/db_$(date +%Y-%m-%d).sql"
```