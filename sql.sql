CREATE TABLE comment (
	cid int(11) not null AUTO_INCREMENTPRIMARY KEY,
  uid varchar(128) not null,
  date datetime not null,
  message TEXT not null
);