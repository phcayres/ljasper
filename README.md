# ljasper
Relatórios com JasperPHP no Laravel

## Introdução
Este pacote contém exemplos de relatórios Jasper (.jrxml) rodando a biblioteca JasperReports (https://github.com/cossou/JasperPHP.git) dentro do Framework Laravel. 

> A biblioteca JasperReports é o mecanismo de geração de relatórios de código aberto mais popular do mundo. É inteiramente escrito em Java e é capaz de usar dados provenientes de qualquer tipo de fonte de dados e gerar documentos perfeitos que podem ser visualizado, impressos ou exportadom em uma variedade de formatos de documentos, incluindo HTML, PDF, Excel, OpenOffice e Word.

## Sobre o Projeto
Este projeto contém relatórios Jasper construídos utilizando o JasperSoft Studio. Abaixo listo os arquivos .jrxml que foram criados para exemplificar o uso da JasperReports dentro de um projeto Laravel:

* json.jrxml -> Exemplo de relatório que utiliza um arquivo JSON como fonte de dados
* pessoas.jrxml -> Exemplo de relatório que é uma listagem geral de pessoas cadastradas no banco de dados (migrations, factories e seeds acompanham o projeto)
* pessoas-parameter.jrxml -> Exemplo de relatório que utiliza a função LIKE do SQL para realizar um filtro por meio de uma expressão de busca enviada como parâmtro na chamada do relatório
* pes_fun_master.jrxml e pes_fun_detail.jrxml -> Exemplo de relatório que lista pessoas por função cadastradas no banco de dados

Todos os arquivos .jrxml estão dentro do diretório /public/reports.

## Requisitos

* Java JDK 1.8
* PHP [exec()](http://php.net/manual/function.exec.php)
* [opcional] [Mysql Connector](http://dev.mysql.com/downloads/connector/j/) (se você pretende usar essa base dados)
* [opcional] [PostgreSQL Connector](https://jdbc.postgresql.org/download.html) (se você pretende usar essa base dados)
* [opcional] [Jaspersoft Studio](http://community.jaspersoft.com/project/jaspersoft-studio) (para criar e compilar seus relatórios)



## Dúvidas?

Abra uma [Issue](https://github.com/phcayres/ljasper/issues), ou pesquise por Issues antigas.

## Licença

MIT

