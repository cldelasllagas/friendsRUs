CREATE TABLE Remitter (
  id int(11) NOT NULL auto_increment,
  lName varchar(30) NOT NULL default '',
  fName varchar(30) NOT NULL default '',
  address varchar(150) NOT NULL default '',
  postal char(7) NOT NULL,
  hPhone varchar(25) NOT NULL,
  cphone varchar(12),
  occupation varchar(30) NOT NULL,
  company varchar(50),
  annualIncome int(7),
  idNum varchar(15),
  issueD date,
  expD date,
  birthDate date NOT NULL,
  PRIMARY KEY  ('id')
) ENGINE=MyISAM;



/* 						echo '			<li>'."\n";
						echo '				<a href="'.$main_url.'articles/show/'.$row['id'].'">'.$row['title'].''."\n";
						echo '				<em>'.$row['subtitle'].'</em>'."\n";
						echo '				<span>Added on 2007-06-03 by roScripts</span></a>'."\n";
						echo '			</li>'."\n";	 */			