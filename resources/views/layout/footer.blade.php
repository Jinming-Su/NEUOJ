<script>
    displays = new Array
    displays[0] = 'Hello World!'
    displays[1] = 'Hallo, wêreld!'
    displays[2] = 'Pershëndetje Botë'
    displays[3] = 'أهلاً بالعالم'
    displays[4] = 'Բարե՛ւ, աշխարհ։'
    displays[5] = 'Salam Dünya'
    displays[6] = 'Ahoj Světe!'
    displays[7] = 'Kaixo mundua!'
    displays[8] = 'Прывітанне свет'
    displays[9] = 'Shani Mwechalo!'
    displays[10] = 'Shagatam Prithivi!'
    displays[11] = 'Zdravo Svijete!'
    displays[12] = 'Здравей, свят!'
    displays[13] = 'Hola món!'
    displays[14] = '你好世界'
    displays[15] = 'Klahowya Hayas Klaska'
    displays[16] = 'Bok Svijete!'
    displays[17] = 'Hej, Verden!'
    displays[18] = 'Hallo, wereld!'
    displays[19] = 'Saluton mondo!'
    displays[20] = 'Tere maailm!'
    displays[21] = 'Hei maailma!'
    displays[22] = 'Salut le Monde!'
    displays[23] = 'Hallo, wrâld!'
    displays[24] = 'Ola mundo!'
    displays[25] = 'Hallo Welt!'
    displays[26] = 'Γεια σου κόσμε!'
    displays[27] = 'Aloha Honua'
    displays[28] = 'שלום עולם'
    displays[29] = 'Nyob zoo ntiaj teb.'
    displays[30] = 'Helló világ!'
    displays[31] = 'Halló heimur!'
    displays[32] = 'Ndewo Ụwa'
    displays[33] = 'Halo Dunia!'
    displays[34] = 'Dia dhaoibh, a dhomhain!'
    displays[35] = 'Ciao Mondo!'
    displays[36] = 'こんにちは、 世界！'
    displays[37] = 'Habari dunia!'
    displays[38] = 'Niatia thi!'
    displays[39] = 'nuqneH'
    displays[40] = '반갑다 세상아'
    displays[41] = 'ສະບາຍດີ,ໂລກ'
    displays[42] = 'AVE MVNDE'
    displays[43] = 'Sveika, Pasaule!'
    displays[44] = 'Sveikas, Pasauli'
    displays[45] = 'Moien Welt!'
    displays[46] = 'Manao ahoana ry tany!'
    displays[47] = 'Namaskaram, lokame'
    displays[48] = 'Merhba lid-dinja'
    displays[49] = 'Hallo verden!'
    displays[50] = '!سلام دنیا'
    displays[51] = 'Witaj świecie!'
    displays[52] = 'Olá, mundo!'
    displays[53] = 'Salut lume!'
    displays[54] = 'Здравствуй, мир!'
    displays[55] = 'Zdravo Svete!'
    displays[56] = 'Ahoj, svet!'
    displays[57] = 'Pozdravljen svet!'
    displays[58] = '¡Hola mundo!'
    displays[59] = 'Hejsan världen!'
    displays[60] = 'Kamusta mundo!'
    displays[61] = 'Merhaba Dünya!'
    displays[62] = 'Привiт, свiте!'
    displays[63] = 'ہیلو دنیا والو'
    displays[64] = 'Xin chào thế giới'
    displays[65] = 'S\'mae byd!'
    displays[66] = 'העלא וועלט'
    displays[67] = 'Sawubona Mhlaba'
    var rand1 = Math.floor(Math.random()*displays.length);
    var display = displays[rand1]
    codes = new Array
    codes[0] = 'trace("' + display + '");'
    codes[1] = 'with TEXT_IO; procedure HELLO is begin TEXT_IO.PUT_LINE ("' + display + '"); end HELLO;'
    codes[2] = '&lt;% Response.Write("' + display + '") %&gt;'
    codes[3] = 'MsgBox(1,\'\',\'' + display + '\')'
    codes[4] = 'BEGIN { print "' + display + '" }'
    codes[5] = 'echo \'' + display + '\''
    codes[6] = 'PRINT "' + display + '" END'
    codes[7] = 'Print "' + display + '"'
    codes[8] = 'GET "LIBHDR" LET START () BE $( WRITES ("' + display + '*N") $)'
    codes[9] = '#include &lt;stdio.h&gt; int main(void){ printf("' + display + '\n"); return 0;}'
    codes[10] = '#include &lt;iostream&gt; using namespace std; int main(){ cout << "' + display + '" << endl; return 0;}'
    codes[11] = 'int main(){ System::Control::WirteLine("' + display + '");'
    codes[12] = 'class HelloWorldApp{ static void Main(string[] args){ System.Console.WriteLine("' + display + '");'
    codes[14] = '(format t "' + display + '~%")'
    codes[15] = '@echo ' + display
    codes[16] = 'echo ' +display
    codes[17] = '-module(hello). -export([hello_world/0]). hello_world() -> io:fwrite("' + display + '\n").'
    codes[18] = 'Main Output "' + display + '" End'
    codes[19] = '." ' + display + '" CR'
    codes[20] = 'WRITE(*,*) \'' + display + '\' STOP END'
    codes[21] = '&lt;html&gt;&lt;body&gt;Hello World&lt;/body&gt;&lt;/html&gt;'
    codes[22] = 'public class Hello{ piblic static void main(String[] args){ System.out.print("' + display + '");} }'
    codes[23] = '<% out.print("' + display + '"); %>'
    codes[24] = 'print "' + display + '"'
    codes[25] = 'Hello[] := Print["' + display + '"] Hello[]'
    codes[26] = '<. ?? \'' + display + '\' .>'
    codes[28] = 'let main () = print_endline "' + display + '";;'
    codes[29] = 'program Hello; begin writeln(\'' + display + '\'); end.'
    codes[30] = '#!/usr/bin/env perl print"' + display + '\n";'
    codes[31] = '&lt;?php echo \'' + display + '\';?&gt;'
    codes[32] = '#!/usr/local/bin/pike int main(){ write("' + display + '\n"); return 0;};'
    codes[33] = 'goal write("' + display + '").'
    codes[34] = '#!/usr/bin/env python print "' + display + '"'
    codes[35] = 'say "' + display + '"'
    codes[36] = '#!/usr/bin/rudy puts "' + display + '"'
    codes[37] = 'INIT min:1001 Om:"' + display  + '"'
    codes[38] = '(display "' + display + '") (newline)'
    codes[39] = 'sed -ne \'1s/.*/' + display + '/p\''
    codes[40] = '$ include "seed7_05.s7i"; const proc: main is func begin writeln("' + display + '"); end func;'
    codes[41] = 'Transcript show: \'' + display + '\''
    codes[42] = 'TextWindow.WriteLine("' + display + '")'
    codes[43] = 'OUTPUT = "' + display + '" END'
    codes[44] = 'select \'' + display + '\';'
    codes[45] = 'println("' + display + '")'
    codes[46] = '#!/usr/local/bin/tcl puts "' + display + '"'
    codes[47] = '? "' + display + '"'
    codes[48] = 'put "' + display + '"'
    codes[49] = '#!/bin/sh echo \'' + display + '\''
    codes[50] = '#!/usr/bin/bc -q print "' + display + '" quit'
    codes[51] = '#!/usr/bin/env dc [' + display + ']p'
    codes[52] = '&lt;includeonly&gt;' + display + '&lt;/includeonly&gt;&lt;br/&gt;'
    codes[53] = 'program HelloWorld; uses Dialogs; begin ShowMessage\'' + display + '\'); end.'
    codes[54] = '<. System.Ui.ShowMessage(\'Nuva\', \'' + display + '\', [\'OK\']) .>'
    codes[55] = 'MsgBox "' + display + '"'
    codes[56] = 'xmessage \'' + display + '\''
    codes[57] = 'document.write("' + display + '");'
    codes[27] = 'Wscript.Echo("' + display + '");'
    codes[13] = '.版本 2 .程序集 窗口程序集1 .子程序 __启动窗口_创建完毕 信息框 (“' + display + '”, 0, )'
    var rand2 = Math.floor(Math.random()*codes.length);
    var randCode = codes[rand2]
</script>
<footer class="text-center footer">
        <span>
            <script>document.write(randCode)</script>
            <br>
            All Copyright&copy;Reserved 2013-2016 NEU-ACM TEAM&nbsp;&nbsp;&nbsp;Ver {{ env('APP_VER', 'NULL') }}
        </span>
</footer>