sudo apt‐get update
sudo apt‐get ‐y upgrade
sudo apt‐get ‐y install apache2 apache2‐doc apache2‐utils
if ! [ ‐L /var/www ]; then
    rm ‐rf /var/www
    ln ‐fs /vagrant /var/www
fi
# sudo apt‐get update
sudo debconf‐set‐selections <<< 'mysql‐server mysql‐server/root_password password 1234'
sudo debconf‐set‐selections <<< 'mysql‐server mysql‐server/root_password_again password 1234'
sudo apt‐get ‐y install mysql‐server
sudo apt‐get ‐y install php5‐cli
sudo add‐apt‐repository ‐y ppa:ondrej/php
sudo apt‐get update
sudo apt‐get ‐y upgrade
# sudo apt‐get ‐y install php7.0