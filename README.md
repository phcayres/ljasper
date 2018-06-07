# ljasper
Reports using JasperPHP on Laravel

## Getting Started
This package contains Jasper reports (.jrxml) samples running the JasperReports library (https://github.com/cossou/JasperPHP.git) using Laravel Framework.

> The JasperReports library is the most popular open source reporting engine in the world. It is fully written in Java and is able to use data from any kind of data source and generate perfect documents that can be viewed, printed or exported in a variety of document formats including HTML, PDF, Excel, OpenOffice and Word.

## About
This project contains Jasper reports built using JasperSoft Studio. Below are the .jrxml files that were created to exemplify the usage of JasperReports in a Laravel project:

* json.jrxml -> Sample report that use a JSON file as data source
* pessoas.jrxml -> Example of a general listing report of people stored on database (migrations, factories and seeds ar available)
* pessoas-parameter.jrxml -> Sample report with a SQL LIKE function to perform a filter through a search expression sent as a parameter 
* pes_fun_master.jrxml e pes_fun_detail.jrxml -> Sample report with people by function

All .jrxml files are available inside /public/reports path.

## Requeriments
* Java JDK 1.8
* PHP [exec()](http://php.net/manual/function.exec.php)
* [optional] [Mysql Connector](http://dev.mysql.com/downloads/connector/j/) 
* [optional] [PostgreSQL Connector](https://jdbc.postgresql.org/download.html) 
* [optional] [Jaspersoft Studio](http://community.jaspersoft.com/project/jaspersoft-studio) 


## Issues
Open an [Issue](https://github.com/phcayres/ljasper/issues), or search for older on.

## Licence
MIT
