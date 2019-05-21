-- ACCOUNT TABLE DEFINITION

CREATE TABLE ACCOUNT (
  ID INT NOT NULL,
  USERNAME CHAR(25) UNIQUE NOT NULL,
  PASSWORD CHAR(25) NOT NULL,
  REG_TIME DATE NOT NULL,
  
  CONSTRAINT ACCOUNT_PK PRIMARY KEY (ID)
);
  


-- ACCOUNT_INFOMATION DEFINITION

CREATE TABLE ACCOUNT_INFORMATION (
  ID INT,
  NAME NVARCHAR2(50) NOT NULL,
  EMAIL VARCHAR(50) NOT NULL,
  PHONE VARCHAR (13) NOT NULL,
  BIRTHDAY DATE NOT NULL,
  ADDRESS NVARCHAR2 (80),
  CURRENT_MONEY REAL NOT NULL,
  
  ACCOUNT_ID INT UNIQUE NOT NULL,
  
  CONSTRAINT ACCOUNT_INFO_PK PRIMARY KEY (ID),
  CONSTRAINT INFO_FK_ACCOUNT FOREIGN KEY (ACCOUNT_ID) REFERENCES ACCOUNT(ID)
  
);

CREATE SEQUENCE ACCOUNT_INFO_SEQUENCE
MINVALUE 2000;

-- TRANSACTION_MONEY DEFINITION

CREATE TABLE TRANSACTION_ORDER (
  ID INT,
  AMOUNT REAL NOT NULL,
  PURCHASE_PRICE REAL NOT NULL,
  PURCHASE_TIME VARCHAR(19) NOT NULL,
  STATUS NUMBER(1) DEFAULT 0 NOT NULL,
  CLOSE_PRICE REAL,
  CLOSE_TIME VARCHAR(19),
  PROFIT REAL,
  PERCENT REAL,
  TRAN_TYPE VARCHAR(4) NOT NULL,
  
  ACCOUNT_ID INT NOT NULL,
  
  CONSTRAINT TRAN_MON_PK PRIMARY KEY (ID),
  CONSTRAINT TRAN_MON_FK_ACCOUNT FOREIGN KEY (ACCOUNT_ID) REFERENCES ACCOUNT(ID)
);

CREATE SEQUENCE TRAN_ORD_SEQUENCE
MINVALUE 5000;

------------------------------------------------------------------------------------------------

------------------------------------------------------------------------------------------------

------------------------------------------------------------------------------------------------

DROP TRIGGER TRAN_ORD_ON_INSERT

DROP SEQUENCE TRAN_ORD_SEQUENCE

DROP TABLE ACCOUNT


------------------------------------------------------------------------------------------------

------------------------------------------------------------------------------------------------

------------------------------------------------------------------------------------------------


CREATE OR REPLACE FUNCTION SEARCH_ID (F_ID INT) RETURN VARCHAR2 IS
idNumber int;
cursor c1 is
     SELECT ID
     FROM ACCOUNT
     WHERE ID = F_ID;
BEGIN
  open c1;
  FETCH c1 INTO idNumber;
  if c1%notfound then
      RETURN 'no match';
  else
      RETURN 'match';
   end if;

   close c1;
END SEARCH_ID;

-- CALL FUNCTION
select SEARCH_ID(164652)
from dual;

--OR

declare p_text varchar2 (50);
BEGIN p_text := SEARCH_ID(164652); 
      dbms_output.Put_line(p_text);-- read, View->Dbms Output // Click "+" to connect
END;
---------------------------------------------------------------------------------------------
declare p_text varchar (50);
BEGIN p_text := SEARCH_USER_PASS('antran123456','x@T1245'); 
      dbms_output.Put_line(p_text);-- read, View->Dbms Output // Click "+" to connect
END;

-----------------------------------------------------------------------------------------------

UPDATE ACCOUNT_INFORMATION
SET CURRENT_MONEY = 30.20
WHERE ACCOUNT_ID = 3265;

-- IF CHANGE ANYTHING IN ORACLE DON'T FORGET TO COMMIT CHANGE
COMMIT CHANGE