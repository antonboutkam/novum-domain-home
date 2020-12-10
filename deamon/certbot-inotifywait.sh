inotifywait -m "$1" -e create -e move |
while read path action file; do
  # your preferred command here
  LOG_DIR='./data/log/system-create';
  LOG_FILE="$(date +'%Y-%m-%d').log"
  LOG_PATH="$LOG_DIR/$LOG_FILE"

  CONTAINER_ID=$(source .env && docker ps | grep "http" | cut -d " " -f1);

  if [ "$CONTAINER_ID" = "" ]; then
      echo "Webserver container not found, did you start them?"
      echo "You can do so with:'docker-compose up -d'."

  else
      echo "Noticed a new file in $1m starting installer, logging to $LOG_PATH"
      mkdir -p "$LOG_DIR"

      echo "docker exec $CONTAINER_ID vendor/bin/novum.php queue:system:create "
      docker exec $CONTAINER_ID vendor/bin/novum.php queue:system:create 2>&1 | tee  "$LOG_PATH"
      docker-compose restart http  2>&1 | tee  "$LOG_PATH"
  fi


done