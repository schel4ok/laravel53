#!/bin/bash

pagethumbs() {
   convert $1 -filter Triangle -define filter:support=2 -thumbnail $2 \
   -unsharp 0.25x0.08+8.3+0.045 -dither None -posterize 136 -quality 82 \
   -define jpeg:fancy-upsampling=off -define png:compression-filter=5 \
   -define png:compression-level=9 -define png:compression-strategy=1 \
   -strip -define png:exclude-chunk=all -interlace none -extent $3 -colorspace sRGB $4
}

gifresize() {
#   mogrify -path $1 -thumbnail $2 -monochrome -strip $3
#   делаю при помощи convert, т.к mogrify выдает ошибку Bad file number при количестве более 742 файлов в папке 
   convert $1 -thumbnail $2  -strip $3 
}


cd resources/img/foto
# рисунки
pagethumbs   'peregorodki/peregorodka-35.jpg'   680  ${w}x${h} ../../../public/img/faq/peregorodka-01.jpg
pagethumbs   'peregorodki/peregorodka-30.jpg'   680  ${w}x${h} ../../../public/img/faq/peregorodka-02.jpg
pagethumbs   'peregorodki/peregorodka-44.jpg'   680  ${w}x${h} ../../../public/img/faq/peregorodka-03.jpg
pagethumbs   'peregorodki/peregorodka-91.jpg'   680  ${w}x${h} ../../../public/img/faq/peregorodka-04.jpg
pagethumbs   'peregorodki/peregorodka-92.jpg'   680  ${w}x${h} ../../../public/img/faq/peregorodka-05.jpg
pagethumbs   'peregorodki/2013-05-03-19-23-50.jpg'   680  ${w}x${h} ../../../public/img/faq/peregorodka-06.jpg