

FILE=$1
if [ -f $FILE ]; then
echo 1 > res2.txt
else
echo 0 > res2.txt
fi