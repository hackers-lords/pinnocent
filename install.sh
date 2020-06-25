termux-setup-storage
clear
echo "One Time Installation"
echo "Downloading Requirements..."
sleep 5
apt update && apt upgrade -y
clear
echo "Termux Updated and Upgraded ! (1/4)"
sleep 2
clear
pkg install python2 -y
sleep 2
clear
echo "Python Installed ! (2/4)"
sleep 2
pkg install openssl-tool -y
clear
echo "SSL Installed ! (3/4)"
sleep 2
pkg install wget -y
clear
pkg install zip -y
clear
pkg install unzip -y
clear
pkg install gnupg -y
clear
mkdir "/pinnocent"
rm /sdcard/pinnocent/updater
echo 1 > .code
cp .code /sdcard/pinnocent
cp updater.sh /sdcard/pinnocent
cp uninstaller.sh /sdcard/pinnocent
echo "Do Not Delete this folder or file" > /sdcard/pinnocent/DoNotDeleteThisFolder.txt
mkdir "/sdcard/htdocs"
clear
echo 1 > install.io
echo "Installation Done ! (4/4) Starting Tool.."
sleep 3
sh start


