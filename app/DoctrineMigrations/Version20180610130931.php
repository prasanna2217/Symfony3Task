<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180610130931 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
           
          
               
        //$this->connection->executeQuery("INSERT INTO library (id, Name, Release_Date, Length, Genres) VALUES ('1', 'Doctor With Big Eyes', '01.02.2016', '200', 'Police')");
        //$this->connection->executeQuery("INSERT INTO library (id, Name, Release_Date, Length, Genres) VALUES ('2', 'Hunger Of My Town', '02-05-2016', '10', 'Comedy')");
        //$this->connection->executeQuery("INSERT INTO library (id, Name, Release_Date, Length, Genres) VALUES ('3', 'Colleagues And Demons', '06.04.2016', '30', 'Drama')");
        //$this->connection->executeQuery("INSERT INTO library (id, Name, Release_Date, Length, Genres) VALUES ('4', 'Humans In The Library', '15.06.1982', '600', '(Non-Fiction, Horror)')");
        //$this->connection->executeQuery("INSERT INTO library (id, Name, Release_Date, Length, Genres) VALUES ('5', 'Founder Of Evil', '30.08.1530', '900', 'Drama')");
        //$this->connection->executeQuery("INSERT INTO library (id, Name, Release_Date, Length, Genres) VALUES ('6', 'Ancestor With Horns', '10.10.2019', '1000', 'Drama')");
        //$this->connection->executeQuery("INSERT INTO library (id, Name, Release_Date, Length, Genres) VALUES ('7', 'Age Of The Light', '06.12.1923', '234', 'Tragedy')");
        //$this->connection->executeQuery("INSERT INTO library (id, Name, Release_Date, Length, Genres) VALUES ('8', 'Learning With The River', '02.02.1965', '200', '(Children, Fiction)')");
        //$this->connection->executeQuery("INSERT INTO library (id, Name, Release_Date, Length, Genres) VALUES ('9', 'Lord And Buffoon', '09.07.2001', '240', '(Horror, Satire)')");
        
        

        //Tryed to give Hyperlink for every book in the table by creating a sample 'books1' table.
        
        //$this->addSql('CREATE TABLE Books1 (id int, Name VARCHAR(255), Release_Date int, Length int, Genres VARCHAR(255), PRIMARY KEY(id))');
        //$this->connection->executeQuery("INSERT INTO books1 (id, Name, Release_Date, Length, Genres) VALUES ('13', '<a href=''https://www.google.com/search?ei=mEMeW8T5GszDgAbEzaeYBw&q=Lord+And+Buffoon+book&oq=Lord+And+Buffoon+book&gs_l=psy-ab.3..33i160k1.4292.5208.0.6186.5.5.0.0.0.0.136.538.2j3.5.0....0...1c.1.64.psy-ab..0.5.537...33i22i29i30k1.0.DfMftujEmxQ''>Lord And Buffoon</a>', '09.07.2001', '240', '(Horror, Satire)')");
        //$this->connection->executeUpdate("UPDATE books1 SET Name='<a href=''http://www.iana.org/domains/example''>Lord And Buffoon</a>' WHERE id=11");
        //<a href="{{ path("") }}">{{ label|trans({}, translation_domain) }}</a>
        //$this->connection->executeQuery("SELECT '[https://www.google.com/search?ei=mEMeW8T5GszDgAbEzaeYBw&q=Lord+And+Buffoon+book&oq=Lord+And+Buffoon+book&gs_l=psy-ab.3..33i160k1.4292.5208.0.6186.5.5.0.0.0.0.136.538.2j3.5.0....0...1c.1.64.psy-ab..0.5.537...33i22i29i30k1.0.DfMftujEmxQ|' || Age Of The Light || ']' from books1);
        //$this->connection->executeQuery(INSERT into books1  VALUES ('<a href=''http://social.msdn.microsoft.com''>Lord And Buffoon</a>')
        //$this->connection->executeQuery("SET @books1 '<a href="http://reports/SQLRpts/Pages/ReportViewer.aspx?%2fSales%2fSalesForcast_Snapshot&rs:Command=Render&EndDate=' + @books1 + '">; Lord And Buffoon</a>');
        //$this->connection->executeQuery(SELECT Name '< a href=''||http://www.iana.org/domains/example||''>'||http://www.iana.org/domains/example||'</a>' Lord And Buffoon FROM books1);
        //<?php echo link_to('policee', '')   <a href="https://https://www.google.com/search?ei=mEMeW8T5GszDgAbEzaeYBw&q=Lord+And+Buffoon+book&oq=Lord+And+Buffoon+book&gs_l=psy-ab.3..33i160k1.4292.5208.0.6186.5.5.0.0.0.0.136.538.2j3.5.0....0...1c.1.64.psy-ab..0.5.537...33i22i29i30k1.0.DfMftujEmxQ" target="_blank">Lord And Buffoon</a>  
        // $this->connection->executeQuery <a href="https://www.google.com/search?ei=mEMeW8T5GszDgAbEzaeYBw&q=Lord+And+Buffoon+book&oq=Lord+And+Buffoon+book&gs_l=psy-ab.3..33i160k1.4292.5208.0.6186.5.5.0.0.0.0.136.538.2j3.5.0....0...1c.1.64.psy-ab..0.5.537...33i22i29i30k1.0.DfMftujEmxQ">Lord And Buffoon</a>
        
        //creating hyperlink didn't work so, by creating a seperate .html files i tryed to link to this file, these files contains list of books of each generes. Eventhough i couldn't succeed
        //$this->connection->execute('policee.html');
        //$this->connection->require($DOCUMENT_ROOT . "my_hometask/policee.html");
        //$this->connection->require($DOCUMENT_ROOT . "my_hometask/comedy.html");
        //$this->connection->require($DOCUMENT_ROOT . "my_hometask/drama.html");
        //$this->connection->require($DOCUMENT_ROOT . "my_hometask/horror.html");
        //$this->connection->require($DOCUMENT_ROOT . "my_hometask/children.html");
        //$this->connection->require($DOCUMENT_ROOT . "my_hometask/nonfiction.html");
        //$this->connection->require($DOCUMENT_ROOT . "my_hometask/satair.html");
        //$this->connection->require($DOCUMENT_ROOT . "my_hometask/tragady.html");
        
        
        //Tryed to create a click button 
        
        //$this->connection->executeQuery("SELECT * FROM books1 ORDER BY id DESC LIMIT 5");
        //'<?php echo link_to('loadmore', ''); 
        //<input type="submit" value="LoadMore" name="LoadMore" />
        //$this->connection->button_to('LoadMore..', '')  => <input value="LoadMore.." type="button" onclick="document.location.href=';" />
        
        //$this->connection->executeQuery("Drop Table books");
        
       
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSQL('SELECT Genres WHERE id = 1', $library);
         //$this->addSQL('SELECT Length WHERE id = 2', $Books1);
    }
}
