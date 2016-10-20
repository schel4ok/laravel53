#! /bin/bash
cd resources/img/steklo/dush
# переводит UPPERCASE -> lowercase в имени и расширении файла
rename -vf 'y/A-Z/a-z/' *
# Заменяет пробелы символом подчеркивания в именах файлов в текущем каталоге.
ONE=1                     # единственное или множественное число (см. ниже).
number=0                  # Количество переименованных файлов.
FOUND=0                   # Код завершения в случае успеха.
for filename in *         # Перебор всех файлов в текущем каталоге.
do
     echo "$filename" | grep -q " "         #  Проверить — содержит ли имя файла
     if [ $? -eq $FOUND ]                   #+ пробелы.
     then
       fname=$filename                      # Удалить путь из имени файла.
       n=`echo $fname | sed -e "s/ /-/g"`   # Заменить пробелы символом дефиса.
       mv "$fname" "$n"                     # Переименование.
       let "number += 1"
     fi
done
if [ "$number" -eq "$ONE" ]
then
 echo "$number файл переименован."
else
 echo "Переименовано файлов: $number"
fi
exit 0