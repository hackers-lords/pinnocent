rm -rf update
clear
echo "Checking for Update... Please wait..."
git clone https://github.com/hackers-lords/pinnocent.git/update.git --quiet
file="update/version.io"
update=$(cat "$file")
if [ $update -eq 1 ]
then
clear
echo "No Updates Available right now !"
read pause
sh .menu
else
clear
echo "Good News! New Update Available !"
echo "Press any key to update now !"
read pause
cd /sdcard/pinnocent
unzip -o updater.sh
sh updater
fi
