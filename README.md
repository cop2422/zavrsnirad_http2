# zavrsnirad_http2
Prikaz unaprijeđenja i razlika koje HTTP/2 protokol donosi u odnosu na svoga prethodnika, HTTP/1.1 .

Dva dana foldera "html" i "ssl" potrebno je premjestiti unutar direktorija /var/www/. Bitno je spomenuti kako "ssl" folder ne sadrži folder "pictures", te je njega potrebno iskopirati iz "html" foldera i u "ssl" folder.

Datoteke "http1host.conf" i "localhost.conf" potrebno je smjestiti unutar /etc/apache2/sites-available te ih pravilno omogućiti (engl. enable) kako je i opisano u samom završnom radu.
Datoteka "apache2.conf" smještena je unutar /etc/apache2/ te je samo prilagođena datoteka konfiguracije Apache servera.

Datoteke "example.crt" i "example.key" potrebno je, također, postaviti unutar /etc/apache2/ i to u zasebne nove direktorije crt i key. Ukoliko se te datoteke ne premjeste na već spomenute lokacije, potrebno je dodatno prilagoditi "localhost.conf" datoteku koja ima poveznicu na datoteke certifikata "example.crt" i "example.key".

Datoteka "httpd.conf" nalazi se unutar direktorija /usr/local/apache2/conf/ te je nju potrebno zamijeniti sa verzijom sa githuba ili samo na kraju datoteke pridodati direktive: LoadModule http2_module modules/mod_http2.so
                                                LoadModule ssl_module modules/mod_ssl.so
