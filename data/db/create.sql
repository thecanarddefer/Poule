CREATE TABLE poule (
	ref INTEGER PRIMARY KEY,
	nom TEXT,
	race INTEGER,
	prix REAL,
	image TEXT,
	ponte INTEGER,
	naissance date,
	FOREIGN KEY(race) REFERENCES race(id)
);

CREATE TABLE race (
	id INTEGER PRIMARY KEY,
	nom TEXT
);
