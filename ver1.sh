

FILE=$1
if [ -f $FILE ]; then
echo 1 > res1.txt
else
echo 0 > res1.txt
fi