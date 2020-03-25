-- .=========================.
-- | CREATE TABLES           |
-- :=========================:
-- | Agent                   |
-- | Stage                   |
-- | Band                    |
-- | Member                  |
-- | Performance             |
--  =========================


-- Agent
CREATE TABLE Agent (
  ID INT NOT NULL AUTO_INCREMENT,
  GivenName VARCHAR(20) NOT NULL,
  FamilyName VARCHAR(30) NOT NULL,
  Contact VARCHAR(11) NOT NULL,
  PRIMARY KEY (ID)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

-- Stage
CREATE TABLE Stage (
  ID INT NOT NULL AUTO_INCREMENT,
  Name VARCHAR(20) NOT NULL UNIQUE,
  Capacity INT NOT NULL,
  PRIMARY KEY (ID)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

-- Band
CREATE TABLE Band (
  Name VARCHAR(20) NOT NULL UNIQUE,
  Description VARCHAR(20) NOT NULL,
  AgentID INT NOT NULL,
  PRIMARY KEY (Name),
  INDEX (AgentID),
  FOREIGN KEY (AgentID)
    REFERENCES Agent(ID)
    ON DELETE CASCADE
    ON UPDATE CASCADE
  )ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Member
CREATE TABLE Member (
  ID INT NOT NULL AUTO_INCREMENT,
  Title TINYINT,
  GivenName VARCHAR(20) NOT NULL,
  FamilyName VARCHAR(30) NOT NULL,
  JobType VARCHAR(20),
  Band VARCHAR(20),
  Status TINYINT NOT NULL,
  PRIMARY KEY (ID),
  INDEX (Band),
  FOREIGN KEY (Band)
    REFERENCES Band(Name)
    ON DELETE CASCADE
    ON UPDATE CASCADE
  )ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

-- Performance
CREATE TABLE Performance (
  ID INT NOT NULL AUTO_INCREMENT,
  Stage INT NOT NULL,
  DATETIME TIMESTAMP NOT NULL,
  Band VARCHAR(20) NOT NULL,
  PRIMARY KEY (ID),
  INDEX (Band),
  INDEX (Stage),
  FOREIGN KEY (Band)
    REFERENCES Band(Name)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  FOREIGN KEY (Stage)
    REFERENCES Stage(ID)
    ON DELETE CASCADE
    ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
