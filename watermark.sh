#!/bin/bash

  convert -fill none -stroke '#000000' -font Verdana-Bold-Italic \
          -pointsize 34 label:'      Стекло Групп\nwww.steklo-group.ru' \
          -blur 0x0 -background none -rotate -30 \
          resources/img/watermark.gif \


  convert -fill white -stroke '#000000' -font Verdana-Bold-Italic \
          -size 912x294 -background green label:'  slide number 4  ' \
          -blur 0x0  \
          public/img/test/4.jpg \

  convert -fill white -stroke '#000000' -font Verdana-Bold-Italic \
          -size 912x294 -background blue label:'  slide number 5  ' \
          -blur 0x0  \
          public/img/test/5.jpg \

  convert -fill white -stroke '#000000' -font Verdana-Bold-Italic \
          -size 912x294 -background magenta label:'  slide number 6  ' \
          -blur 0x0  \
          public/img/test/6.jpg \