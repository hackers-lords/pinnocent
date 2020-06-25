file="/sdcard/pinnocent/.code"
name=$(cat "$file")
if [ $name -eq 1 ]
then
sh asset1.sh
elif [ $name -eq 2 ]
then
sh asset2.sh
elif [ $name -eq 3 ]
then
sh asset3.sh
fi
