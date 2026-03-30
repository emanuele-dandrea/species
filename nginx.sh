set -e

case "$1" in
start)
  docker run --name webserver -d -p 8080:80 webserver
  ;;
stop)
  docker container stop webserver && docker rm webserver
  ;;
restart)
  docker container stop webserver && docker rm webserver
  docker run --name webserver -d -p 8080:80 webserver
  ;;
status)
  docker ps -a | grep webserver
  ;;
*) echo "Unknown subcommand '$1'" ;;
esac
